<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataTiket extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Data Tiket';
    $data['tabel'] = $this->db->get('tiket')->result();
    $this->load->view('admin/templates/admin-header', $data);
    $this->load->view('admin/templates/admin-topbar', $data);
    $this->load->view('admin/templates/admin-sidebar', $data);
    $this->load->view('admin/data-tiket', $data);
    $this->load->view('admin/templates/admin-footer', $data);
  }

  public function ubahTiket($id_tiket)
  {
    $data['title'] = 'Edit Data Warga';
    $data['row'] = $this->db->get_where('tiket', ['id_tiket' => $id_tiket])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/edit-tiket', $data);
      $this->load->view('admin/templates/admin-footer');
  }

}

?>