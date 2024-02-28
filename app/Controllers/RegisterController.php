<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RegisterModel;

class RegisterController extends Controller
{
    public $registerModel;
    public $session;
    public $email;
    public function __construct()
    {
        helper('form');
        helper('date');
        $this->registerModel = new RegisterModel();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }

    public function index()
    {
        $data = [];
        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'lname' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Lastname is required'
                    ],
                ],

                'email' => [
                    'rules' => 'required|valid_email|is_unique[residents.email]',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Enter valid email',
                        'is_unique' => 'Email already taken'
                    ],
                ],

                'password' => [
                    'rules' => 'required|min_length[7]|max_length[15]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must contain 7 characters',
                        'max_length' => 'Password must not exceed 15 characters'
                    ],
                ],

                'cpass' => [
                    'rules' => 'required|min_length[7]|max_length[15]|matches[password]',
                    'errors' => [
                        'required' => 'Confirm passsword is required',
                        'min_length' => 'Password must contain 7 characters',
                        'max_length' => 'Password must not exceed 15 characters',
                        'matches' => 'Passsword do not match',
                    ],
                ],
            ];

            if ($this->validate($rules)) {

                $status = "Inactive";
                $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz' . time()));
                $userdata = [
                    'lname' => $this->request->getVar('lname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'uniid' => $uniid,
                    'status' => $status,
                    'activation_date' => date("Y-m-d h:i:s")

                ];
                $status = $this->registerModel->createUser($userdata);
                if ($status) {
                    $to = $this->request->getVar('email');
                    $from = 'barangayrawanlala@gmail.com';
                    $subject = 'Account Activation';
                    $message = 'Hi Mr/Mrs' . " " . $this->request->getVar('lname') . ",<br><br>Congrats! Your account created successfully. Please click the link below to activate your account.<br><br>"
                        . "<a href='" . base_url() . "registercontroller/activate/" . $uniid . "' target='_blank''>Activate Now</a><br><br>Thanks<br>Barangay Raw-an Lala";

                    $this->email->setTo($to);
                    $this->email->setFrom($from);
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);

                    if ($this->email->send()) {
                        //echo "Account Created successfully. Please activate your account";
                        $this->session->setTempdata('success', 'Account created successfully. Please activate your account within 1 hour', 3);
                        return redirect()->to(current_url());
                    } else {
                        // $data = $this->email->printDebugger(['headers']);
                        // print_r($data);
                        $this->session->setTempdata('error', 'Account Created successfully. Sorry, unable to send activation link. Pls contact the admin!', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setTempdata('error', 'Sorry! Unable to create your account. Try again!', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("authentication/register_view", $data);
    }

    public function activate($uniid = null)
    {
        $data = [];
        if (!empty($uniid)) {
            $userdata = $this->registerModel->verifyUniid($uniid);
            if ($userdata) {
                if ($this->verifyExpiryTime($userdata->activation_date)) {
                    if ($userdata->status == 'Inactive') {
                        $status = $this->registerModel->updateStatus($uniid);
                        if ($status == true) {
                            $data['success'] = 'Account Activated successfully';
                        }
                    } else {
                        $data['success'] = 'Your account is already activated';
                    }
                } else {
                    $data['error'] = 'Sorry! Activation link was expired!';
                }
            } else {
                $data['error'] = 'Sorry! We are Unable to find your account';
            }
        } else {
            $data['error'] = 'Sorry! Unable to process your request';
        }
        return view("activate", $data);
    }
    public function verifyExpiryTime($regTime)
    {
        $currTime = now();
        $registerTime = strtotime($regTime);
        $diffTime = (int)$currTime - (int)$registerTime;
        if (3600 > $diffTime) {
            return true;
        } else {
            return false;
        }
    }
}
