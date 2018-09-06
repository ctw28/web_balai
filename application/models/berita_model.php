<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Berita_model extends CI_Model {

    function get_semua_berita() {
        return $this->db->get('t_berita')->result();
    }

    function get_berita_kategori() {
        $query = "SELECT * FROM t_berita tb INNER JOIN t_berita_kategori tk ON tb.id_kategori = tk.id_kategori ORDER BY tanggal_publish DESC";
        return $this->db->query($query);
    }

    function simpan_berita($data) {
        $this->db->set('tanggal_publish', 'NOW()', FALSE);
        if (!$this->db->insert('t_berita', $data))
            $this->db->_error_message();
    }

}
