<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <!-- <= $this->session->flashdata('message'); ?> -->
      <a href="<?php echo site_url('admin/DataTiket/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/DataTiket/updateTiket/'. $row->id_tiket); ?>" method="post" enctype="multipart/form-data">
        <table id="table" width="30%">
          <tr>
            <td>
            <div class="form-group">
                <label for="nama_tiket">Nama Tiket <span class="text-danger">*</span></label>
                <input type="text" name="nama_tiket" id="nama_tiket" class="form-control" value="<?php echo $row->nama_tiket ?>">
              </div>
            </td>
          </tr> 
          <tr> 
            <td>
              <img src="<?php echo base_url('assets/img/') . $row->foto ?>" class="img-thumbnail" width="80px">
              <div class="form-group">
                <input type="hidden" value="<?php echo $row->foto ?>" name="foto_lama">
                <label for="foto">Gambar Tiket <span class="text-danger">*</span></label>
                <input type="file" name="foto" id="foto" class="form-control" value="<?php echo $row->foto; ?>">               
                <?= $this->session->flashdata('message'); ?>
              </div>
            </td>
          </tr>
          <tr> 
            <td>
              <div class="form-group">
                <label for="harga">Harga <span class="text-danger">*</span></label>
                <input type="number" name="harga" id="harga"  class="form-control" placeholder="Masukkan Harga Tiket" value="<?php echo $row->harga ?>">
              </div>
            </td>
          </tr>
          <tr>
            <td>
            <div class="form-group">
                <label for="jumlah">Jumlah Tiket <span class="text-danger">*</span></label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan Jumlah Tiket" value="<?php echo $row->jumlah ?>">
              </div>
            </td>
          </tr>
        </table>
        <button type="reset" class="btn"><i class="fa fa-refresh"></i> Reset</button>
        <button type="submit" class="btn bg-navy" style="margin-left: 4px;"><i class="fa fa-save"></i> Simpan</button>
      </form>
    </div>
  </div>
</section>