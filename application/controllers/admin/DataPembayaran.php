<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataPembayaran extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Data Pembayaran';
    $data['tabel'] = $this->db->get('pembayaran')->result();
    $this->load->view('admin/templates/admin-header', $data);
    $this->load->view('admin/templates/admin-topbar', $data);
    $this->load->view('admin/templates/admin-sidebar', $data);
    $this->load->view('admin/data-pembayaran', $data);
    $this->load->view('admin/templates/admin-footer', $data);
  }

}

?>