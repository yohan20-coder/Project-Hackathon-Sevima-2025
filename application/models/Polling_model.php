<?php

class Polling_model extends CI_Model
{
    
    public function tampil(){
        $this->db->select('polling, COUNT(polling) as total');
        $this->db->group_by('polling'); 
        $this->db->order_by('total', 'desc'); 
        $hasil = $this->db->get('pemilihan')->result_array();
        return $hasil;
      }
}