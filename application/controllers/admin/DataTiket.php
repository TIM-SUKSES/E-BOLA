<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataTiket extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('ModelTiket');
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

  public function TambahTiket($data = null)
  {
    $data['title'] = 'Tambah Data Tiket';
    $this->load->view('admin/templates/admin-header', $data);
    $this->load->view('admin/templates/admin-topbar', $data);
    $this->load->view('admin/templates/admin-sidebar', $data);
    $this->load->view('admin/tambah-tiket', $data);
    $this->load->view('admin/templates/admin-footer', $data);
  }

  public function ubahTiket($id_tiket)
  {
    $data['title'] = 'Edit Data Tiket';
    $data['row'] = $this->db->get_where('tiket', ['id_tiket' => $id_tiket])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/edit-tiket', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function simpanTiket()
  {
    $this->load->model('ModelTiket');
    $this->ModelTiket->simpanTiket();
    if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata(
        'message',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Tiket Berhasil Di Buat!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
      );
        redirect('admin/DataTiket/index');
    }
  }
  
  public function updateTiket($id_tiket)
  {
    $this->ModelTiket->editTiket($id_tiket);
    if ($this->db->affected_rows() > 0){
      $this->session->set_flashdata(
        'message2',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Tiket Berhasil Diubah!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>'
      );
        redirect('admin/DataTiket/index');
    }
  }

}

?>