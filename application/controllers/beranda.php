<?php

class Beranda extends CI_Controller{

    function index(){        
//        $data['menu'] = json_decode(file_get_contents('http://localhost/web_balai/index.php/data/rest_menu'));
        $this->load->view('beranda');
    }
}