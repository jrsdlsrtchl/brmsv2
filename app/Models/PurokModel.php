<?php

namespace App\Models;

use CodeIgniter\Model;

class PurokModel extends Model
{

    public function viewPurok($puroknumber)
    {
        $query = $this->db->table('residents')->join('purok', 'residents.purok_id = purok.purok_id');
        $builder = $query->where('residents.purok_id', $puroknumber)->get();
        $result = $builder->getResultArray();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokUno()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '1');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokDos()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '2');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokTres()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '3');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokKwatro()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '4');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokSingko()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '5');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokSays()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '6');
        $result = $builder->countAllResults();

        return $result;
    }

    public function purokSyete()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('purok_id')->where('purok_id', '7');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokUno()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '1');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokDos()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '2');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokTres()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '3');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokKwatro()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '4');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokSingko()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '5');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokSays()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('puro_id')->where('purok_id', '6');
        $result = $builder->countAllResults();

        return $result;
    }

    public function HHpurokSyete()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '7');
        $result = $builder->countAllResults();

        return $result;
    }
}
