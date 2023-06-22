<!-- Button Phone Number Start -->
<button type="button" class="btn btn-lg rounded-circle shadow" id="btn-to-top">
  <a href="https://wa.me/+6281294684656" target="_blank"><i class="fa fa-phone"></i></a>
</button>
<!-- Button Phone Number End -->



<section id="jadwal" class="section-jadwal">
  <div class="jadwal-container">
    <h1>DAFTAR TIKET BOLA</h1>
    <hr>
    <?= $this->session->flashdata('message2'); ?>
    <?= $this->session->flashdata('message3'); ?>

    <div class="cards-jadwal">
      <?php
      foreach($tabel as $table) : ?>
      
      <div class="card-jadwal">
        <h3><?php echo $table->nama_tiket ?></h3>
        <hr>
        <img src="<?= base_url('assets/img/') . $table->foto; ?>" alt="" class="img-thumbnail">
        <h5 class="text-center">HARGA : Rp. <?php echo $table->harga; ?></h5>
        <hr>
        <h5 class="text-center">stock : <?php echo $table->jumlah ?></h5>
        <div class="btn-jadwal">
          <?php foreach($user as $usr) ?>
          <?php if($usr->status > $table->jumlah  ) : ?>

            <a href="#">
              <button class="btn btn-success" disabled> Masuk</button>
            </a> <span style="width: 5px;"></span>
            <?php else: ?>
              <a href="<?php echo base_url('user/PesanTiket/beli/') . $table->id_tiket; ?>">
                  <button class="btn btn-success"> Beli Tiket </button>
                </a> <span style="width: 5px;"></span>
          <?php endif; ?>
          
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
