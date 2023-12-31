<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTiket extends CI_Model
{
    
    public function simpanTiket($data = null)
    {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10240';

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload("foto")) {
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
            redirect('admin/DataTiket/tambahTiket');
        }

        $data = [
            'nama_tiket' => htmlspecialchars($this->input->post('nama_tiket', true)),
            'foto' => $fileName,
            'harga' => htmlspecialchars($this->input->post('harga', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
        ];

        $this->db->insert('tiket', $data);
    }
    
    public function editTiket($id_tiket)
    {
        $config['upload_path']          = 'assets/img';
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = '10240';

        $this->load->library('upload', $config); 

        if ($this->upload->do_upload("foto")) {
            $imageData = $this->upload->data();
            $fileName = $imageData['file_name'];
            unlink('assets/img/'. $this->input->post('foto_lama', true)); 
        } else {
            $filename = htmlspecialchars($this->input->post('foto_lama', true));
            //flashdata massage
            $x = $this->upload->display_errors();
            $this->session->set_flashdata(
                'message',
                '<div class="text-danger">
			           <strong> ' . $x . ' </strong> 
                 </div>'
            );
            redirect('admin/DataTiket/ubahTiket/'. $id_tiket);
        }

        $data = [
            'nama_tiket' => htmlspecialchars($this->input->post('nama_tiket', true)),
            'foto' => $fileName,
            'harga' => htmlspecialchars($this->input->post('harga', true)),
            'jumlah' => htmlspecialchars($this->input->post('jumlah', true)),
        ];

        $this->db->where('id_tiket', $id_tiket);
        $this->db->update('tiket', $data);
    }

    
}




?>