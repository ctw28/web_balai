<?php
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Berita_rest extends REST_Controller{
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('model_berita');
    }
    
    function index_get(){
        $berita = $this->berita_model->get_semua_berita();
        $this->response($berita, REST_Controller::HTTP_OK);
    }

    function index_post(){
        
    }

    function index_put(){
         
    }

    function index_delete(){
         
    }
}