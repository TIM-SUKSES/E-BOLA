<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'user'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Detail Pemesanan';
    $data['tabel'] = $this->db->get_where('pembayaran',['id_user' => $this->session->userdata('id_user')])->result();
    $this->load->view('user/root/user-header', $data);
    $this->load->view('user/detail-pemesanan');
    $this->load->view('user/root/user-footer', $data);
  }

  public function simpanPembayaran()
  {
    $this->load->model('ModelPembayaran');
    $this->ModelPembayaran->inputPembayaran();
    if($this->db->affected_rows() > 0)
    {
      $result = ['success' => true];
    } else {
      $result = ['success' => false];
    }
    echo json_encode($result);
    $this->session->set_flashdata(
			'message2',
			'<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
			<strong>Data Pembayaran Anda Berhasil Terkirim! Silahkan Tunggu  Di Menu Detail Pemesanan. </strong>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>'
		);
    redirect('user/Pembayaran');
    
  }


}

?>