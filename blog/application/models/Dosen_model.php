<?php 
class Dosen_model extends CI_Model{
    public $id, $nama, $tmp_lahir, $tgl_lahir, $gender, $nidn, $pendidikan;
    public function getAll(){
        //menampilkan seluruh data yang ada di table dosen menggunakan query builder
        $query =  $this->db->get('dosen');
        return $query->result();
    }
    public function getByid($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('dosen',['id' => $id]);
        return $query->row();
    }
}
?>
