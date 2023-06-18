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

}

?>