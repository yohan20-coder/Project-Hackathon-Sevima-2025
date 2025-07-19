
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"></h1> -->

          <div class="row">
            <div class="col-lg-12">

               <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

                  <!-- pesan error -->
        <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

        <!-- pesan berhasil tambah data -->
        <?= $this->session->flashdata('message');?>

          <a href="<?= base_url('transaksi/tambah'); ?>" class="btn btn-primary btn-sm mb-3">Tambah Data</a>

          <button type="button" class="btn btn-success btn-sm mb-3 ml-2" data-toggle="modal" data-target="#importModal">
            Import Transaksi
        </button>

          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Nama Motor</th>
                            <th scope="col">Kategori Merk</th>
                            <th scope="col">Tanggal Beli</th>
                            <th scope="col">Total Bayar</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                          <td scope="row"><?= $no ?></td>
                          <td><?= $sm['nama_pelanggan'] ?></td>
                          <td><?= $sm['nama_motor'] ?></td>
                          <td><?= $sm['kategori_merk'] ?></td>
                          <td><?= $sm['tgl_beli'] ?></td>
                          <td><?= $sm['total_bayar'] ?></td>
                          <td>
                              <a href="<?= base_url();?>transaksi/edit/<?= $sm['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                            
                              <a href="<?= base_url();?>transaksi/hapus/<?= $sm['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau menghapus');">Hapus</a>
                          </td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
               
                </div>
              </div>

            </div>

        
            </div>
          </div>

</div>

<!-- Modal Import Transaksi -->
<div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="importModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?= base_url('transaksi/import') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="importSiswaModalLabel">Import Data Transaski</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-info">
            Pastikan format file Excel Anda sesuai: <strong>Nama Pelanggan, Nama Motor, Kategori Merk, Tanggal Beli, Total Bayar</strong>
          </div>
          <div class="form-group">
            <label for="file">Pilih File Excel (.xls, .xlsx, .CSV)</label>
            <input type="file" class="form-control-file" id="file" name="file_excel" accept=".xls,.xlsx" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Import</button>
          <a href="<?= base_url('transaksi/download_template'); ?>" class="btn btn-info">
            <i class="fas fa-download"></i> Download Template Excel
          </a>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </form>
    </div>
  </div>
</div>
