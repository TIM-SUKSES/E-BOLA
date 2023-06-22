<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class PesanTiket extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'user'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Pesan Tiket';
    $data['tabel'] = $this->db->get('tiket')->result();
    $data['user'] = $this->db->get('user')->result();
    $this->load->view('user/root/user-header', $data);
    $this->load->view('user/pesan-tiket');
    $this->load->view('user/root/user-footer', $data);
  }
  
  public function beli($id_tiket)
  {
    $data['title'] = 'Form Pemesanan';
    $data['row'] = $this->db->get_where('tiket', ['id_tiket' => $id_tiket])->row();
    $data['id_tiket'] = $id_tiket;
    $this->load->view('user/root/user-header', $data);
    $this->load->view('user/form-pemesanan');
    $this->load->view('user/root/user-footer', $data); 
  }

  public function beliTiket()
  {
    // $this->load->model('ModelTiket');
    $this->load->model('ModelPembayaran');
    // $this->ModelTiket->updateStock();
    $this->ModelPembayaran->inputPembayaran();
    if($this->db->affected_rows() > 0)
    {
      $result = ['success' => true];
    } else {
      $result = ['success' => false];
    }

    echo json_encode($result);
    redirect('user/Pembayaran/index');
  }

}

?>