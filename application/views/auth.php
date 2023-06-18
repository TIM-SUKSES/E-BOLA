<!-- Login Section Start -->
<section id="masuk">
  <!-- Section Welcome -->
  <div id="beranda" class="section-login">
    <div class="login-container">
      <h1>E-BOLA</h1>
      <h3>Layanan Penjualan Tiket Bola Online</h3>
      <?= $this->session->flashdata('message'); ?>
      <div class="login-button">
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-login"><button class="bg-danger"><i class="fa fa-sign-in"> </i> LOGIN</button></a>
        <a href="" data-bs-toggle="modal" data-bs-target="#modal-register"><button class="bg-info"><i class="fa fa-pencil-square-o"> </i> REGISTER</button></a>
      </div>
    </div>
  </div>
</section>
<!-- Login Section End -->

<!-- Modal Login Petugas -->
<div class="modal fade" id="modal-login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-auth">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Masukkan Akun Anda</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('auth/login'); ?>" method="post">
          <div class="form-group mb-3">
            <label for="email" class="text-secondary mb-3">EMAIL *</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" required>
          </div>
          <div class="form-group mb-3">
            <label for="password" class="text-secondary mb-3">PASSWORD *</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda"
              required>
          </div>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-sign-in"></i> Login / Masuk
          </button>
        </form>
        <br>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-auth">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrasi Akun</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo site_url('auth/simpanAkun'); ?>" method="post" enctype="multipart/form-data">
          <div class="form-group mb-3">
            <label for="nama_user" class="text-secondary mb-3">NAMA *</label>
            <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="Masukkan Nama Anda" required>
          </div>
          <div class="form-group mb-3">
            <label for="email" class="text-secondary mb-3">EMAIL *</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan Email Anda" required>
          </div>
          <div class="form-group mb-3">
            <label for="password" class="text-secondary mb-3">PASSWORD *</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password Anda"
              required>
            <input type="hidden" name="role" id="role" class="form-control" value="user">
          </div>
          <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil-square-o"></i> Register
          </button>
        </form>
        <br>

      </div>
    </div>
  </div>
</div>


