<?php

class User_model extends CI_Model
{

    public function tampil()
    {
        // $this->db->order_by('id', 'DESC');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function userrole()
    {
        // $this->db->order_by('id', 'DESC');
        $query = $this->db->get('user_role');
        return $query->result_array();
    }

    public function getrole()
    {
        $this->db->select('user.*, user_role.role');
        $this->db->from('user');
        $this->db->join('user_role', 'user.role_id = user_role.id');
    
        return $this->db->get()->result_array();
    }
    


    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }


    //jumlah asrip masuk
    public function jmlpengguna()
    {
        $query = $this->db->get('user');
        if($query->num_rows() > 0)
        {
            return $query->num_rows();
        }else {
           return 0;
        }
    }
}