<?php
class profil extends CI_Controller
{

    public function index()
 
    {

        $this->load->view('view-form-profil');
    }
 
    public function cetak()
    {
       $this->form_validation->set_rules('nim', 'NIM', 'required|min_length[3]', [ 
           'required' => 'Kode Matakuliah Harus diisi',
           'min_length' => 'Angka terlalu pendek'
       ]);
      
       $this->form_validation->set_rules('nama', 'nama', 'required|min_length[3]', [
           'required' => 'Nama Matakuliah Harus diisi',
           'min_length' => 'Nama terlalu pendek'
       ]);

       if ($this->form_validation->run() != true){
           $this->load->view('view-form-profil');
       } else {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tanggal' => $this->input->post('tanggal'),
            'alamat' => $this->input->post('alamat')
        ];
        
            $this->load->view('view-data-profil', $data);
       }
    }
}