<?php

namespace App\Models;

use CodeIgniter\Model;

class HouseholdModel extends Model
{
    public function houseUno()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '1');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseDos()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '2');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseTres()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '3');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseKwatro()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '4');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseSingko()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '5');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseSays()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '6');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function houseSyete()
    {
        $query = $this->db->table('household');
        $builder = $query->where('purok_id', '7');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
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

    public function addhousehold($data)
    {
        $this->db->table('household')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getMembersHH($id)
    {
        $query = $this->db->table('residents')
            ->join('household', 'residents.household_id = household.household_id')
            ->where('residents.household_id', $id);
        $builder = $query->get()->getResult();

        return $builder;
    }

    public function getHeadName($id)
    {
        $query = $this->db->table('household')->where('household_id', $id);
        $builder = $query->get()->getResult();

        return $builder;
    }
}
