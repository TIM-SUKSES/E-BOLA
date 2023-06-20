<section class="content">

  <?php echo $title; ?>

  <div class="box">
    <div class="box-header">
      <!-- <= $this->session->flashdata('message'); ?> -->
      <a href="<?php echo site_url('admin/DataPembayaran/index') ?>" class="btn bg-green"><i class="fa fa-arrow-circle-left"> Kembali </i></a>
    </div>
    <!-- header -->
    <div class="box-body">
      <form action="<?php echo site_url('admin/DataPembayaran/updatePembayaran'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id_pembayaran" value="<?php echo $row->id_pembayaran ?>">  
      <table id="table" width="30%">
          <tr>
            <td>
            <div class="form-group">
                <label for="tiket">Tiket <span class="text-danger">*</span></label>
                <input type="text" name="tiket" id="tiket" class="form-control" placeholder="Masukkan Link Tiket" required>
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