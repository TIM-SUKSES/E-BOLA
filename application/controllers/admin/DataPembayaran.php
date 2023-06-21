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

  public function editPembayaran($id_pembayaran)
  {
    $data['title'] = 'Kirim Tiket';
    $data['row'] = $this->db->get_where('pembayaran', ['id_pembayaran' => $id_pembayaran])->row();
    $this->load->view('admin/templates/admin-header', $data);
    $this->load->view('admin/templates/admin-topbar', $data);
    $this->load->view('admin/templates/admin-sidebar', $data);
    $this->load->view('admin/kirim-tiket', $data);
    $this->load->view('admin/templates/admin-footer', $data);
  }

  public function updatePembayaran()
  {
    $this->load->model('ModelPembayaran');
    $this->ModelPembayaran->KirimTiket();

    redirect('admin/DataPembayaran/index');
  }

  public function terima($id) {
    $data = [
      'log' => "Pembayaran Diterima"
  ];

  $this->db->where('id_pembayaran', $id);
  $this->db->update('pembayaran', $data);
  redirect('admin/DataPembayaran/editPembayaran/'. $id);
  }


  public function tolak($id) {
    $data = [
      'log' => "Pembayaran Ditolak"
  ];

  $this->db->where('id_pembayaran', $id);
  $this->db->update('pembayaran', $data);
  redirect('admin/DataPembayaran');
  }


}

?>