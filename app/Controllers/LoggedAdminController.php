<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\LoggedAdminModel;

class LoggedAdminController extends Controller
{
    public $loginModel;
    public function __construct()
    {
        $this->loginModel = new LoggedAdminModel();
    }

    public function loggedAdmin()
    {
        $uniid = session()->get('logged_admin');
        $data['userdata'] = $this->loginModel->getLoggedInUserData($uniid);
        return view("dashboard/dashboard", $data);
    }

    public function logoutAdmin()
    {
        session()->remove('logged_admin');
        session()->destroy();
        return redirect()->to(base_url() . "authenticationcontroller/adminlogin");
    }
}
