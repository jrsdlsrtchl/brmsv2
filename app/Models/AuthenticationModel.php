<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthenticationModel extends Model
{
    public function registerResident($userdata)
    {
        $builder = $this->db->table('residents');
        $query = $builder->insert($userdata);

        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function verifyUniid($id)
    {
        $builder = $this->db->table('residents');
        $builder->select('activation_date,uniid,status');
        $builder->where('uniid', $id);
        $result = $builder->get();
        //echo count($result->getResultArray());
        //echo $result->resultID->num_rows;
        if (count($result->getResultArray()) == 1) {
            return $result->getRow();
        } else {
            return false;
        }
    }
    public function updateStatus($uniid)
    {
        $builder = $this->db->table('residents');
        $builder->where('uniid', $uniid);
        $builder->update(['status' => 'Active']);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteAcc($uniid)
    {
        $builder = $this->db->table('residents');
        $builder->delete(['uniid' => $uniid]);

        return true;
    }

    public function verifyEmail($email)
    {
        $builder = $this->db->table('residents');
        $builder->select("uniid, status ,user_type ,password");
        $builder->where('email', $email);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }
}
