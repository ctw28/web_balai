<?php
use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class Rest_menu extends REST_Controller{
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('data_model');
    }
    
    function index_get(){
        $menu = $this->data_model->get_menu_data();
        $this->response($menu, REST_Controller::HTTP_OK);
    }

    function index_post(){
        
    }

    function index_put(){
         
    }

    function index_delete(){
         
    }
}