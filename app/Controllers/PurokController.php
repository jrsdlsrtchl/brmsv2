<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PurokModel;

class PurokController extends Controller
{

    public $purModel;
    public $version;
    public function __construct()
    {
        $this->purModel = new PurokModel();
        $this->version = \Config\Services::codeigniter()::CI_VERSION;
    }

    public function purokList()
    {
        $data['version'] = $this->version;
        $data['pageTitle'] = 'Purok -';

        $data['purokOne'] = $this->purModel->purokUno();
        $data['purokTwo'] = $this->purModel->purokDos();
        $data['purokThree'] = $this->purModel->purokTres();
        $data['purokFour'] = $this->purModel->purokKwatro();
        $data['purokFive'] = $this->purModel->purokSingko();
        $data['purokSix'] = $this->purModel->purokSays();
        $data['purokSeven'] = $this->purModel->purokSyete();

        $data['hhOne'] = $this->purModel->HHpurokUno();
        $data['hhTwo'] = $this->purModel->HHpurokDos();
        $data['hhThree'] = $this->purModel->HHpurokTres();
        $data['hhFour'] = $this->purModel->HHpurokKwatro();
        $data['hhFive'] = $this->purModel->HHpurokSingko();
        $data['hhSix'] = $this->purModel->HHpurokSays();
        $data['hhSeven'] = $this->purModel->HHpurokSyete();

        return view("purok/purok_list", $data);
    }

    public function viewPurokList($puroknumber)
    {
        $data['purokdata'] = $this->purModel->viewPurok($puroknumber);
        $data['pageTitle'] = 'Purok -';

        return view("purok/purok_table", $data);
    }
}
