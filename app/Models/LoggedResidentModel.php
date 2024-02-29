<?php

namespace App\Models;

use CodeIgniter\Model;

class LoggedResidentModel extends Model
{
    public function getLoggedInUserData($uniid)
    {

        $query = $this->db->table('residents')->select('*');
        $query->join('purok', 'residents.purok_id = purok.purok_id');
        $query->join('household', 'residents.household_id = household.household_id');
        $query->where('uniid', $uniid);
        $result = $query->get()->getResult();

        return $result;
    }
}
