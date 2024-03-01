<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthenticationModel;

class AuthenticationController extends Controller
{
    public $email;
    public $authModel;
    public $session;
    public function __construct()
    {
        helper("form");
        helper('date');
        $this->authModel = new AuthenticationModel();
        $this->session = \Config\Services::session();
        $this->email = \Config\Services::email();
    }

    public function register()
    {
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

                'confirmpassword' => [
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

                $purok = '1';
                $household = '1';
                $status = "Inactive";
                $uniid = md5(str_shuffle('abcdefghijklmnopqrstuvwxyz' . time()));
                $userdata = [
                    'lname' => $this->request->getVar('lname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'purok_id' => $purok,
                    'household_id' => $household,
                    'uniid' => $uniid,
                    'status' => $status,
                    'activation_date' => date("Y-m-d h:i:s")
                ];

                if ($this->authModel->registerResident($userdata)) {
                    $to = $this->request->getVar('email');
                    $from = 'barangayrawanlala@gmail.com';
                    $subject = 'Account Activation  - BRMS';
                    $message = 'Hello Mr./Ms.  ' . " " . $this->request->getVar('lname') . ",<br><br>
                                Congrats! Your account created successfully. Please click the link below to activate your account<br><br>"
                        . "<a href='" . base_url() . "authenticationcontroller/activate/" . $uniid . "' target='_blank'>Activate Now</a><br><br>Thanks,<br>Barangay Raw-an, Lala";

                    $this->email->setTo($to);
                    $this->email->setFrom($from);
                    $this->email->setSubject($subject);
                    $this->email->setMessage($message);

                    if ($this->email->send()) {
                        $this->session->setTempdata('success', 'Account Created Successfully. Please activate your account with in 1 hour', 3);
                        return redirect()->to(current_url());
                    } else {
                        $this->session->setTempdata('error', 'Account Created successfully. Sorry! Unable to send activation link', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setTempdata('error', 'Sorry! Unable to create your account!', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("authentication/register", $data);
    }

    public function activate($uniid = null)
    {
        $data = [];
        if (!empty($uniid)) {
            $userdata = $this->authModel->verifyUniid($uniid);
            if ($userdata) {
                if ($this->verifyExpiryTime($userdata->activation_date)) {
                    if ($userdata->status == 'Inactive') {
                        $status = $this->authModel->updateStatus($uniid);
                        if ($status == true) {
                            $data['success'] = 'Account Activated successfully, Login now!';
                        }
                    } else {
                        $data['success'] = 'Your account is already activated, Login Now!';
                    }
                } else {
                    $this->authModel->deleteAcc($uniid);
                    $data['error'] = 'Sorry! Activation link was expired. Please sign up again!';
                }
            } else {
                $data['error'] = 'Sorry! We are Unable to find your account';
            }
        } else {
            $data['error'] = 'Sorry! Unable to process your request';
        }
        return view("authentication/activation_message", $data);
    }

    public function verifyExpiryTime($regTime)
    {
        $currTime = now();
        $registerTime = strtotime($regTime);

        if ($currTime >= $registerTime) {
            $diffTime = (int)$currTime - (int)$registerTime;
        } else {

            return false;
        }

        if ($diffTime < 30) {
            return true;
        } else {
            return false;
        }
    }



    public function login()
    {

        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Enter valid email',
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
            ];

            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');

                $userdata = $this->authModel->verifyEmail($email);
                if ($userdata) {
                    if ($password == $userdata['password']) {
                        if ($userdata['status'] == 'Active') {
                            if ($userdata['user_type'] == 'Resident') {
                                $this->session->set('logged_resident', $userdata['uniid']);
                                return redirect()->to(base_url() . 'LoggedResidentController/loggedResident');
                            } else {
                                $this->session->setTempdata('error', 'Sorry, your account is not a Resident', 3);
                                return redirect()->to(current_url());
                            }
                        } else {
                            $this->session->setTempdata('error', 'Sorry, your account is not activated ', 3);
                            return redirect()->to(current_url());
                        }
                    } else {
                        $this->session->setTempdata('error', 'Sorry, your password in incorrect', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setTempdata('error', 'Sorry, your email does not exist', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view("authentication/login", $data);
    }

    public function adminLogin()
    {
        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => [
                    'rules' => 'required|valid_email',
                    'errors' => [
                        'required' => 'Email is required',
                        'valid_email' => 'Enter valid email',
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
            ];

            if ($this->validate($rules)) {
                $email = $this->request->getVar('email');
                $password = $this->request->getVar('password');

                $userdata = $this->authModel->verifyEmail($email);
                if ($userdata) {
                    if ($password == $userdata['password']) {
                        if ($userdata['status'] == 'Active') {
                            if ($userdata['user_type'] == 'Admin') {
                                $this->session->set('logged_admin', $userdata['uniid']);
                                return redirect()->to(base_url() . 'LoggedAdminController/loggedAdmin');
                            } else {
                                $this->session->setTempdata('error', 'Sorry, your account is not an Administrator', 3);
                                return redirect()->to(current_url());
                            }
                        } else {
                            $this->session->setTempdata('error', 'Sorry, your account is not activated ', 3);
                            return redirect()->to(current_url());
                        }
                    } else {
                        $this->session->setTempdata('error', 'Sorry, your password in incorrect', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setTempdata('error', 'Sorry, your email does not exist', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }
        return view("authentication/admin", $data);
    }
}
