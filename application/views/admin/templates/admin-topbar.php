<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <a href="<?php echo site_url('admin/dashboard'); ?>" class="logo">
      <span class="logo-mini"><img class="logo-mini"><b>EBL<b></span>
      <span class="logo-lg"><b>E-BOLA</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets/img/ball.png'); ?>" class="user-image" alt="User Image">
               <span class="hidden-xs"><?php echo $this->session->userdata('nama_user'); ?></span> <!-- Nama diambil dari database -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo base_url('assets/img/ball.png'); ?>" class="img-circle" alt="User Image">
                <p>
                <?php echo $this->session->userdata('nama_user'); ?>
                  <small>Admin</small>
                </p>
              </li>
              </li>
              <li class="user-footer">
                <div class="text-center">
                  <a href="<?php echo base_url('auth/logout'); ?>" class="btn btn-default btn-flat"> <i class="fa fa-sign-out"></i> Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>