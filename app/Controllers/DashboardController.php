<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\DashboardModel;

class DashboardController extends Controller
{
    public $dashModel;
    public $version;
    public function __construct()
    {
        $this->dashModel = new DashboardModel();
        $this->version = \Config\Services::codeigniter()::CI_VERSION;
    }

    public function dashBoard()
    {
        $data['pageTitle'] = 'Dashboard -';

        $data['version'] = $this->version;
        $data['population'] = $this->dashModel->numPopulation();
        $data['male'] = $this->dashModel->numMale();
        $data['female'] = $this->dashModel->numFemale();
        $data['household'] = $this->dashModel->numHousehold();
        $data['senior'] = $this->dashModel->numSeniorCitizen();
        $data['pwd'] = $this->dashModel->numPwd();
        $data['fourPs'] = $this->dashModel->num4ps();
        $data['voter'] = $this->dashModel->numVoter();

        return view("dashboard/dashboard", $data);
    }
}
