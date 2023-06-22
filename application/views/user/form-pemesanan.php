<!-- Button Phone Number Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <a href="https://wa.me/+6281294684656" target="_blank"><i class="fa fa-phone"></i></a>
</button>
<!-- Button Phone Number End -->


<section id="laporan" class="section-laporan" style="padding-bottom: 46px;">
  <div class="laporan-container">
    <h1>PESAN TIKET</h1>
    <hr>
    <div class="card-form">
    <?= $this->session->flashdata('message2'); ?>
      <div class="report-container">
        <div class="form-container">
          <h2 class="text-white">FORM PEMESANAN TIKET</h2>
          <hr>
          <form action="<?php echo site_url('user/Pembayaran/simpanPembayaran'); ?>" method="post" enctype="multipart/form-data" >
            <input type="hidden" value="<?php echo $id_tiket ?>">
            <input type="hidden" id="nama_user" name="nama_user" value="<?php echo $this->session->userdata('nama_user'); ?>">
            <input type="hidden" id="nama_tiket" name="nama_tiket" value="<?php echo $row->nama_tiket ?>">
            <input type="hidden" id="harga" name="harga" value="<?php echo $row->harga ?>">
            <label for="metode_pembayaran" class="text-white">Metode Pembayaran</label>
            <select name="metode_pembayaran" class="form-control form-control-user text-center" id="metode_pembayaran" required>
                <option>-- PILIH METODE PEMBAYARAN -- </option>
                <option value="BCA">BCA - 036395231231 A/N E-BOLA</option>
                <option value="BRI">BRI - 036395231231 A/N E-BOLA</option>
                <option value="DANA">DANA - 036395231231 A/N E-BOLA</option>
                <option value="MANDIRI">MANDIRI - 036395231231 A/N E-BOLA</option>
            </select>
            <br>
            <label for="file" class="text-white">Bukti Pembayaran</label>
            <input type="file" name="file" id="file" class="form-control" required>
            <input type="hidden" name="log" value="Menunggu">
            <?= $this->session->flashdata('message'); ?>
            <button type="submit" class="bg-danger">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
