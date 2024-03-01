<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoggedResidentModel;

class LoggedResidentController extends Controller
{
    public $loginModel;
    public function __construct()
    {
        $this->loginModel = new LoggedResidentModel();
    }

    public function loggedResident()
    {

        $uniid = session()->get('logged_resident');
        $data['userdata'] = $this->loginModel->getLoggedInUserData($uniid);
        return view("user_resident/user_resident", $data);
    }

    public function logoutResident()
    {
        session()->remove('logged_resident');
        session()->destroy();
        return redirect()->to(base_url() . "authenticationcontroller/login");
    }
}
