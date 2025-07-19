<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model transaksi
      $this->load->model('Polling_model','t');
      $data['tampil'] = $this->t->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Transaksi';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('grafik/index',$data);
      $this->load->view('template/footer');
    }
}