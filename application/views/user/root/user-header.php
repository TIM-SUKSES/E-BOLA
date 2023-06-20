<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-BOLA | <?php echo $title ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/255fd51aa4.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bootstrap-5.3.0/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>splidejs/splide.min.css">
  <script src="<?php echo base_url('assets/'); ?>splidejs/splide.min.js"></script>
  <style>

body {
  font-family: "Oswald", sans-serif;
  background-color: #363636;
}

/* Button Ke atas */
#btn-to-top {
  position: fixed;
  right: 20px;
  bottom: 20px;
  background-color: #ff3737;
  display: none;
  z-index: 99;
  border: none;
}

#btn-to-top i {
  color: whitesmoke;
}
/* Button Ke atas */


header {
  width: 100%;
  height: 440px;
  background-color: #B22222;
  background-image: url(http://localhost/E-BOLA/assets/img/gbk.jpg);
  background-size: cover;
  background-position: center;
}

.nav-container {
  position: fixed;
  z-index: 10;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 64px;
  height: 80px;
  background: #B22222;
}

    /* CSS Laporan Section */
    .card-form {
      background-color: #434343;
      padding: 80px 60px;
      margin: auto;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
      max-width: 1000px;
    }
    .report-container {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
    }
    .image-container {
      flex: 1;
      display: flex;
      justify-content: center;
    }
    .image-container img {
      max-width: 100%;
      height: auto;
    }
    .form-container {
      flex: 1;
      max-width: 400px;
      padding: 20px;
      margin: 0 20px;
    }
    .form-container h2 {
      text-align: center;
    }
    .form-container form {
      display: flex;
      flex-direction: column;
    }
    .form-container label {
      margin-bottom: 5px;
    }
    .form-container input {
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: none;
      background-color: rgb(233, 233, 233);
    }
    .form-container textarea {
      padding: 10px;
      margin-bottom: 10px;
      border-radius: 5px;
      border: none;
      background-color: rgb(233, 233, 233);
    }
    .form-container button {
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    @media only screen and (max-width: 768px) {
      .card-form {
        padding: 40px 16px;
      }
      .report-container {
        flex-direction: column;
      }
      .image-container {
        margin-bottom: 20px;
      }
      .form-container {
        width: 100%;
      }
    }
    
    @media (max-width: 720px) {
  .nav-container {
    padding: 0 32px;
  }
  .nav-button {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .menu-container {
    position: absolute;
    top: 80px;
    left: -100%;
    flex-direction: column;
    padding: 48px;
    width: 240px;
    height: calc(100vh - 5rem);
    background: #ff3737;
    transition: 0.5s ease;
  }

  /* show class will make .menu-container slides in */
  .show {
    left: 0;
  }
  .menu-item {
    margin: 16px 0;
    font-size: 16px;
  }
}

.menu-link {
  color: #fff;
  text-decoration: none;
  transition: 0.3s ease;
}
.menu-link:hover {
  color: #363636;
}
/* Navbar Section End */

    
    .dropdown-nav-menu {
      width: 140px;
      position: absolute;
      top: 40px;
      padding: 10px 20px;
      border-radius: 5px;
      background-color: #fff;
      font-size: 16px;
    }
    .dropdown-nav-item {
      display: block;
      text-decoration: none;
      color: #000000;
      margin-bottom: 5px;
      transition: 0.5s ease;
    }
    .hidden-nav {
      display: none;
    }
    .dropdown-nav-item:hover {
      color: #363636;
    }
  </style>
</head>
<body>
  <header>
    <!-- Navbar -->
    <nav class="nav-container">
      <button class="nav-button"></button>
      <h1 class="nav-logo">E-BOLA</h1>
      <ul class="menu-container">
        <li class="menu-item">
          <a class="menu-link" href="<?php echo base_url('user/Home'); ?>">Home</a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="<?php echo base_url('user/PesanTiket'); ?>">Pesan Tiket</a>
        </li>
        <li class="menu-item">
          <a class="menu-link" href="<?php echo base_url('user/Pembayaran'); ?>">Detail Pemesanan</a>
        </li>
        <li class="menu-item dropdown-menu-item" style="position: relative;">
          <a class="menu-link" href="#"><?php echo $this->session->userdata('nama_user'); ?> <i class="fa-solid fa-caret-down"></i></i><!-- Nama Dipanggil dari database -->
          <div class="dropdown-nav-menu hidden-nav">
            <a class="dropdown-nav-item" href="<?php echo base_url('auth/logout'); ?>"><i class="fa fa-sign-out"></i> Keluar</a>
          </div>
        </li>
      </ul>
    </nav>
  </header>