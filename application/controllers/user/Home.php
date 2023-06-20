<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'user'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Home';
    $this->load->view('user/root/user-header', $data);
    $this->load->view('user/home');
    $this->load->view('user/root/user-footer', $data);
  }

  public function beliTiket()
  {
    $this->load->model('ModelUser');
    $this->ModelUser->update_status_user();
    if ($this->db->affected_rows() > 0) {
      $result = ['success' => true];
    }else {
      $result = ['success' => false];
    }

    echo json_encode($result);
  }

}

?>