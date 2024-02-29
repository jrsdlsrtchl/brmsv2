<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LoggedAdminController extends Controller
{

    public function __construct()
    {
    }

    public function loggedAdmin()
    {
        if (!session()->has('logged_admin')) {
            return redirect()->to(base_url() . "authenticationcontroller/adminlogin");
        }

        return view("resident/resident");
    }

    public function logoutAdmin()
    {
        session()->remove('logged_admin');
        session()->destroy();
        return redirect()->to(base_url() . "authenticationcontroller/adminlogin");
    }
}
