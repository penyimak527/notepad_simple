<?php
class M_contact extends CI_Model{
    public function insertcon($datapo){
        return $this->db->insert('contact', $datapo);
    }
}
?>