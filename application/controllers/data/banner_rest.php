<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Banner_rest extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('data_model');
    }

    function index_get() {
        $banner_data = $this->data_model->get_banner_data();
        $this->response($banner_data, REST_Controller::HTTP_OK);
    }

    function index_post() {
        
    }

    function index_put() {
        
    }

    function index_delete() {
        
    }

}
