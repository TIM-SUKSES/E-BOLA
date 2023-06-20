<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class DataUser extends CI_Controller{

  public function __construct(){
    parent::__construct();
    if ($this->session->userdata('role') != 'admin'){
        redirect('auth');
    }
}

  public function index()
  {
    $data['title'] = 'Data User';
    $data['tabel'] = $this->db->get('user')->result();
    $this->load->view('admin/templates/admin-header', $data);
    $this->load->view('admin/templates/admin-topbar', $data);
    $this->load->view('admin/templates/admin-sidebar', $data);
    $this->load->view('admin/data-user', $data);
    $this->load->view('admin/templates/admin-footer', $data);
  }
  

  public function editUser($id_user)
  {
    $data['title'] = 'Edit Data User';
    $data['row'] = $this->db->get_where('user', ['id_user' => $id_user])->row();
      $this->load->view('admin/templates/admin-header', $data);
      $this->load->view('admin/templates/admin-topbar');
      $this->load->view('admin/templates/admin-sidebar');
      $this->load->view('admin/edit-user', $data);
      $this->load->view('admin/templates/admin-footer');
  }

  public function updateUser(){
    $this->ModelUser->update();
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata('message', '
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-warning"></i> Data Telah diupdate! </h4>
        </div>');
        redirect('admin/DataUser/index');
    }
  }

}

?>