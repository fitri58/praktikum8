<?php
class Dosen extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen'] = $dosen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        //akses model mahasiswa
        $this->load->model('dosen_model');
        $siswa = $this->dosen_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>