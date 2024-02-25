<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HouseholdModel;

class HouseholdController extends Controller
{
    public $houseModel;
    public function __construct()
    {
        helper('form');
        $this->houseModel = new HouseholdModel;
    }

    public function householdList()
    {
        $data = [];
        $data['pageTitle'] = 'Household -';
        $data['purok'] = $this->houseModel->choicePurok();
        $session = \CodeIgniter\Config\Services::session();

        $data['houseOne'] = $this->houseModel->houseUno();
        $data['houseTwo'] = $this->houseModel->houseDos();
        $data['houseThree'] = $this->houseModel->houseTres();
        $data['houseFour'] = $this->houseModel->houseKwatro();
        $data['houseFive'] = $this->houseModel->houseSingko();
        $data['houseSix'] = $this->houseModel->houseSays();
        $data['houseSeven'] = $this->houseModel->houseSyete();

        if ($this->request->getMethod() == 'post') {
            $HHdata = [
                'household_desc' => $this->request->getVar('household_desc'),
                'purok_id' => $this->request->getVar('purok_id'),
            ];

            $status = $this->houseModel->addHousehold($HHdata);

            if ($status) {
                $session->setTempdata('success', 'Added Successfully', 3);
                return redirect()->to(base_url() . "householdcontroller/householdlist");
            } else {
                $session->setTempdata('error', 'Not Added! Try Again!', 3);
                return redirect()->to(base_url() . "householdcontroller/householdlist");
            }
        }

        return view("household/household_table", $data);
    }

    public function membersHH($id)
    {
        $data['pageTitle'] = 'Household -';
        $data['head'] = $this->houseModel->getHeadName($id);
        $data['membersHH'] = $this->houseModel->getMembersHH($id);
        
        return view("household/household_view", $data);
    }

    // public function addHousehold()
    // {
    //     $data = [];
    //     $data['purok'] = $this->houseModel->choicePurok();
    //     $session = \CodeIgniter\Config\Services::session();

    //     if ($this->request->getMethod() == 'post') {
    //         $HHdata = [
    //             'household_desc' => $this->request->getVar('household_desc'),
    //             'purok_id' => $this->request->getVar('purok_id'),
    //         ];

    //         $status = $this->houseModel->addHousehold($HHdata);

    //         if ($status) {
    //             $session->setTempdata('success', 'Added Successfully', 3);
    //             return redirect()->to(base_url() . "householdcontroller/householdlist");
    //         } else {
    //             $session->setTempdata('error', 'Not Added! Try Again!', 3);
    //             return redirect()->to(base_url() . "householdcontroller/householdlist");
    //         }
    //     }
    //     return view("household/household_table", $data);
    // }
}
