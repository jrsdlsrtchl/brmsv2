<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{

    public function numPopulation()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('residents');
        $result = $builder->countAllResults();

        return $result;
    }

    public function numMale()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('gender')->where('gender', 'Male');
        $result = $builder->countAllResults();

        return $result;
    }

    public function numFemale()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('gender')->where('gender', 'Female');
        $result = $builder->countAllResults();

        return $result;
    }

    public function numHousehold()
    {
        $query = $this->db->table('household');
        $builder = $query->selectCount('household_desc');
        $result = $builder->countAllResults();

        return $result;
    }

    public function numSeniorCitizen()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('senior_citizen')->where('senior_citizen', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function numPwd()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('pwd')->where('pwd', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function num4ps()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('forkeeps')->where('forkeeps', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }

    public function numVoter()
    {
        $query = $this->db->table('residents');
        $builder = $query->selectCount('voters')->where('voters', 'Yes');
        $result = $builder->countAllResults();

        return $result;
    }
}
