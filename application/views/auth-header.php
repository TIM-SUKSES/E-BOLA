<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/255fd51aa4.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6a685fa3aa.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>bootstrap-5.3.0/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/style.css">
</head>
<body>
<style>



#masuk {
  width: 100%;
  height: 100vh;
  background-color: #FF3737;
  background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(http://localhost/E-BOLA/assets/img/gbk.jpg);
  background-size: cover;
  background-position: center;
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
      color: turquoise;
    }
  </style>