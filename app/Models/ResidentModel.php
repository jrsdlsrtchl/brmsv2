<?php

namespace App\Models;

use CodeIgniter\Model;

class ResidentModel extends Model
{
    public function addRes($data)
    {
        $this->db->table('residents')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function viewRes()
    {
        $query = $this->db->table('residents')->select('*');
        $query->join('purok', 'residents.purok_id = purok.purok_id');
        $query->join('household', 'residents.household_id = household.household_id');
        $result = $query->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }

        // $query = $this->db->table('residents')->get();
        // $result = $query->getResultArray();

        // if (count($result) >= 0) {
        //     return $result;
        // } else {
        //     return false;
        // }
    }


    // public function editRes($id)
    // {
    //     $builder = $this->db->table('residents');
    //     $builder->where('uniid', $id);
    //     $result = $builder->get();
    //     if (count($result->getResult()) == 1) {
    //         return $result->getRow();
    //     } else {
    //         return false;
    //     }
    // }

    public function editRes($id)
    {
        $builder = $this->db->table('residents');
        $builder->join('household', 'residents.household_id = household.household_id')->where('uniid', $id);
        $result = $builder->get();
        if (count($result->getResult()) == 1) {
            return $result->getRow();
        } else {
            return false;
        }
    }

    public function updateRes($data, $id)
    {
        $builder = $this->db->table('residents')->where('uniid', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRes($id)
    {
        $builder = $this->db->table('residents');
        $builder->delete(['uniid' => $id]);
    }

    public function choicePurok()
    {
        $query = $this->db->table('purok')->get();
        $result = $query->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function choiceHousehold($purok)
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', $purok);
        $result = $builder->get()->getResult();

        return $result;
    }
}
