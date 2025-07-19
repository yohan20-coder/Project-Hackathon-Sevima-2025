<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Polling extends CI_Controller
{


    public function index()
    {
    
      $this->load->view('polling/index');
      
    }

    public function add()
    {
        $data = [
            'polling' => $this->input->post('polling'),
          ];
          $this->db->insert('pemilihan',$data);
          redirect('polling/sukses');
    }

    public function sukses()
    {
    
      $this->load->view('polling/sukses');
      
    }
}
