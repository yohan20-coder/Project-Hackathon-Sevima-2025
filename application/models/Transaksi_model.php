<?php

class Transaksi_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('transaksii');
        return $query->result_array();
    }

    public function detail($id)
    {
        $query =  $this->db->get_where('transaksii',['id'=>$id]);
        return $query->row_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('transaksii');
    }

    public function grafik(){
        $this->db->select('kategori_merk, COUNT(kategori_merk) as total');
        $this->db->group_by('kategori_merk'); 
        $this->db->order_by('total', 'desc'); 
        $hasil = $this->db->get('transaksii')->result_array();
        return $hasil;
      }
}