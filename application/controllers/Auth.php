<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->model('ModelUser');
    }
  public function index()
  {
    $data['title'] = 'E-BOLA';
    $this->load->view('auth-header', $data);
    $this->load->view('auth', $data);
    $this->load->view('auth-footer', $data);
  }

  public function login()
  {
    $cek_user = $this->db->get_where('user', ['email' => $this->input->post('email', true)])->row();
        if ($cek_user){
            if(password_verify($this->input->post('password'), $cek_user->password)){
                if ($cek_user->role == 'admin'){
                    $data_session = [
                         'id_user' => $cek_user->id_user,
                         'nama_user' => $cek_user->nama_user,
                         'email' => $cek_user->email,
                         'password' => $cek_user->password,
                         'role' => $cek_user->role
                     ];
                    $this->session->set_userdata($data_session);
                    redirect("admin/DataUser");
                } else {
                    $data_session = [
                         'id_user' => $cek_user->id_user,
                         'nama_user' => $cek_user->nama_user,
                         'email' => $cek_user->email,
                         'password' => $cek_user->password,
                         'role' => $cek_user->role
                    ];
                    $this->session->set_userdata($data_session);
                    redirect("user/Home");
                }

            }else { 
                echo "<script>
                alert('password anda salah!');
                window.location.href = `" . site_url('auth') . "`;
                </script>";
               }

        } else {
            echo "<script>
                alert('email anda tidak terdaftar!');
                window.location.href = `" . site_url('auth') . "`;
             </script>";
        }
  }

  public function simpanAkun()
  {

    $this->ModelUser->simpanUser();
    if ($this->db->affected_rows() > 0){
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Akun Anda Berhasil Di Buat!</strong>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>'
        );
          redirect('auth');
      }
  }
  
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
}
}