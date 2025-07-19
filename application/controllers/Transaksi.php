<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //user akses
    //  is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model transaksi
      $this->load->model('Transaksi_model','ts');
      $data['tampil'] = $this->ts->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Transaksi';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('transaksi/index',$data);
      $this->load->view('template/footer');
    }

    public function tambah()
    {
         //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //bagian validasi Input
     
      $this->form_validation->set_rules('nama_motor','Nama_motor','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kategori_merk','Kategori_merk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tgl_beli','tgl_beli','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('total_bayar','Total_bayar','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run()==false){
      $data['judul'] = 'Halaman Tambah Transaksi';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('transaksi/tambah',$data);
      $this->load->view('template/footer');

    }else{
        $data = [
            'nama_motor' => $this->input->post('nama_motor'),
            'kategori_merk' => $this->input->post('kategori_merk'),
            'tgl_beli' => $this->input->post('tgl_beli'),
            'total_bayar' => $this->input->post('total_bayar'),
          ];
  
          $this->db->insert('transaksii',$data);
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
          redirect('transaksi');
    }

    }

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Transaksi_model');
      $data['edit'] = $this->Transaksi_model->Detail($id);

      $this->form_validation->set_rules('nama_motor','Nama_motor','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kategori_merk','Kategori_merk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tgl_beli','tgl_beli','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('total_bayar','Total_bayar','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run()==false){
      $data['judul'] = 'Halaman Edit Data Transaksi';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('transaksi/edit',$data);
      $this->load->view('template/footer');   
      }else{

        $data = [
            'nama_motor' => $this->input->post('nama_motor'),
            'kategori_merk' => $this->input->post('kategori_merk'),
            'tgl_beli' => $this->input->post('tgl_beli'),
            'total_bayar' => $this->input->post('total_bayar'),
          ];

          $this->db->where('id', $this->input->post('id'));
          $this->db->update('transaksii', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiUbah</div>');
          redirect('transaksi');

      }
}

        public function hapus($id)
        {
            $this->load->model('Transaksi_model');
            $this->Transaksi_model->hapus($id);
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
            redirect('Transaksi');
        }

    public function download_template()
    {
        // Pastikan sudah load library PHPExcel
        if (!class_exists('PHPExcel')) {
            require_once APPPATH . 'third_party/PHPExcel/PHPExcel.php';
        }

        // Buat objek PHPExcel
        $excel = new PHPExcel();

        // Set aktif sheet pertama dan isi header kolom
        $sheet = $excel->setActiveSheetIndex(0);
        $sheet->setCellValue('A1', 'Nama Motor');
        $sheet->setCellValue('B1', 'Kategori Merk');
        $sheet->setCellValue('C1', 'Tanggal Beli');
        $sheet->setCellValue('D1', 'Total Bayar');

        // Contoh baris data
        $sheet->setCellValue('A2', 'Revo Absolut');
        $sheet->setCellValue('B2', 'Yamaha');
        $sheet->setCellValue('C2', '03/04/2025');
        $sheet->setCellValue('D2', '25000000');

        // Nama file
        $filename = 'Template_Import_Transaksi.xlsx';

        // Set header untuk download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header('Cache-Control: max-age=0');

        // Simpan ke output
        $writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $writer->save('php://output');
        exit;
}

public function import()
{
    // Load PHPExcel
    require_once APPPATH . 'third_party/PHPExcel/PHPExcel.php';

    $config['upload_path']   = './uploads/'; 
    $config['allowed_types'] = 'xls|xlsx|csv';
    $config['max_size']      = 2048;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('file_excel')) {
        $this->session->set_flashdata('error', $this->upload->display_errors());
        redirect('transaksi');
    }

    $file = $this->upload->data('full_path');

    try {
        $excel = PHPExcel_IOFactory::load($file);
        $sheet = $excel->getActiveSheet()->toArray(null, true, true, true);

        $inserted = 0;

        // Lewati baris pertama (header)
        for ($i = 2; $i <= count($sheet); $i++) {
            if (empty($sheet[$i]['A']) || empty($sheet[$i]['B'])) continue;

            $data = [
                'nama_motor'    => $sheet[$i]['A'],
                'kategori_merk'      => $sheet[$i]['B'],
                'tgl_beli' => $sheet[$i]['C'],
                'total_bayar'  => $sheet[$i]['D']
            ];

            
                $this->db->insert('transaksii', $data);
                $inserted++;
            
        }

        unlink($file); // Hapus file setelah diproses

        if ($inserted > 0) {
            $this->session->set_flashdata('success', "$inserted data transaksi berhasil diimpor.");
        } else {
            $this->session->set_flashdata('warning', 'Tidak ada data baru yang diimpor');
        }

    } catch (Exception $e) {
        $this->session->set_flashdata('error', 'Gagal membaca file: ' . $e->getMessage());
    }

    redirect('transaksi');
}

public function visual()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model transaksi
      $this->load->model('Transaksi_model','ts');
      $data['status'] = $this->ts->grafik();

      
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Transaksi';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('transaksi/visual',$data);
      $this->load->view('template/footer');
    }

    

}