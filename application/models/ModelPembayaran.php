<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPembayaran extends CI_Model
{

    public function inputPembayaran()
    {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|heic|heif';
        $config['max_size']             = '10240';

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload("file")) {
            $imageData = $this->upload->data();
            $fileName = $imageData['file_name']; 
        } else {
            //flashdata massage
            $x = $this->upload->display_errors();
            $this->session->set_flashdata(
                'message',
                '<div class="text-danger">
			           <strong> ' . $x . ' </strong> 
                 </div>'
            );
            redirect('user/Pembayaran/index');
        }

        date_default_timezone_set("Asia/Jakarta");
        $data = [
            'id_user' => htmlspecialchars($this->input->post('id_user', true)),
            'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
            'nama_tiket' => htmlspecialchars($this->input->post('nama_tiket', true)),
            'metode_pembayaran' => htmlspecialchars($this->input->post('metode_pembayaran', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true)),
            'tanggal_input' => date('Y-m-d H:i:s'),
            'file' => $fileName,
            'log' => htmlspecialchars($this->input->post('log', true))
        ];
        $this->db->insert('pembayaran', $data);

        $update = [
            'status' => -1
          ];
  
          $this->db->where('id_user', $this->input->post('id_user'));
          return $this->db->update('user', $update);
  
    }

    public function KirimTiket()
    {
        $data = [
            'tiket' => htmlspecialchars($this->input->post('tiket', true))
        ];

        $this->db->where('id_pembayaran', $this->input->post('id_pembayaran'));
        $this->db->update('pembayaran', $data);
    }
}


?>