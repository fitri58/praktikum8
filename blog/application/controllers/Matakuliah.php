<?php
class Matakuliah extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('matakuliah_model');
        $matakuliah = $this->matakuliah_model->getAll();
        $data['matakuliah'] = $matakuliah;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');
    }
    public function detail($id){
        //akses model matakuliah
        $this->load->model('matakuliah_model');
        $siswa = $this->matakuliah_model->getById($id);
        $data['siswa'] = $siswa;
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/detail', $data);
        $this->load->view('layouts/footer');
    }
}
?>
      