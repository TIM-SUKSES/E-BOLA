  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/img/ball.png'); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama_user'); ?></p> <!-- Nama diambil dari database -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Admin</li>
        <li class="<?php echo $this->uri->segment(2) == 'DataUser' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataUser'); ?>">
            <i class="fa fa-group"></i> <span>Data User</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'DataTiket' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataTiket'); ?>">
            <i class="fa fa-id-card"></i> <span>Data Penjualan Tiket</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'DataPembayaran' ? 'active' : '' ?> ">
          <a href="<?php echo site_url('admin/DataPembayaran'); ?>">
            <i class="fa fa-id-card"></i> <span>Data Pembayaran</span>
          </a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'logout' ? 'active' : '' ?> ">
          <a href="<?php echo base_url('auth/logout'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper">