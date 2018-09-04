<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model{
    
    function get_semua_berita(){
        return $this->db->get('t_berita')->result();
    }
}
