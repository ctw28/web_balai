<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model{
    function get_menu_data(){
        return $this->db->get('t_menu_website')->result();
    }

    function get_banner_data(){
        return $this->db->get('t_banner')->result();
    }
}
