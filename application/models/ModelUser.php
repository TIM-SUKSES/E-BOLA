<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {

    public function getTiket()
    {
        return $this->db->get('tiket');
    }

    public function simpanUser($data = null)
    {
        $data = [
            'nama_user' => $this->input->post('nama_user', true),
            'email' => $this->input->post('email', true),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role' => $this->input->post('role', true)
          ];
          $this->db->insert('user', $data);
    }
}


?>