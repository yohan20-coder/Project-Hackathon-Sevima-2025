   <!-- Begin Page Content -->
   <div class="container-fluid">
 <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

            <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="<?= base_url('transaksi/tambah') ?>" method="post">

                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label>
                            <input type="text" class="form-control" name="nama_pelanggan">
                            <?= form_error('nama_pelanggan','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Motor</label>
                            <input type="text" class="form-control" name="nama_motor">
                            <?= form_error('nama_motor','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                        <label for="nama">Kategori Merk</label>
                        <select name="kategori_merk" id="kategori_merk" class="form-control">
                            <option value="">Pilih Menu</option>
                                <option value="Yamaha">Yamaha</option>
                                <option value="Honda">Honda</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Kawasaki">Kawasaki</option>
                        </select>
                    </div>

                        <div class="form-group">
                            <label for="nama">Tanggal Beli</label>
                            <input type="date" class="form-control" name="tgl_beli">
                            <?= form_error('tgl_beli','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama">Total Bayar</label>
                            <input type="number" class="form-control" name="total_bayar">
                            <?= form_error('total_bayar','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                      

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Simpan Data</button>
                        </div>
                        </form>
                    </div>
                </div>
                
        

            </div>
      <!-- End of Main Content -->
      </div>
    </div>
</div>