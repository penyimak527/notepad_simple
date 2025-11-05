<?php
class M_note extends CI_Model{
    //mengambil data dari database
    public function get_data(){
        return $this->db->get('tb_note')-> result_array();
    }

    //memasukkan data ke database
    public function kirim_data($form){
        return $this->db->insert('tb_note' , $form);
    }

    //hapus data note
    //$table digunakan untuk menghapus data dari database
    public function hapus_note($dimana, $table){
        $this->db->where($dimana);
        $this->db->delete($table);

    }

    // mengedit data
    public function edit_data($dimana, $table){
        return $this->db->get_where($table, $dimana);
    }

    //update data
    public function update_data($dimana,$datapost, $table){
        $this->db->where($dimana);
        return $this->db->update($table, $datapost);
    }
    //detail data
    public function detail($dimana, $table){
        $this->db->where($dimana);
        return $this->db->get($table) -> row_array();
    }

    //mengambil sacara id
    public function getid($table, $dimana){
        return $this->db->get_where($table, $dimana)->row();

    }

    public function caridata($cari){
        $cari = $this->db->escape_str(trim($cari));
        if(empty($cari)){
            $this->db->select('*');
            $this->db->from('tb_note');
            return $this->db->get()->result_array();
        }
        else{
            $this->db->from('tb_note');
            $this->db->like('nama', $cari);
            $this->db->or_like('judul', $cari);
            $this->db->or_like('content', $cari);
            return $this->db->get()->result_array();
        }
    }
}
?>