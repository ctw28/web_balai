<?php

class Kategori_model extends CI_Model{
    function get_kategori_by_id($id){
        $this->db->where('id_kategori', $id);
        $hasil = $this->db->get('t_kategori');
        return $hasil;
    }
}

