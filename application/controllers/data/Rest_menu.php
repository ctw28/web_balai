<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Rest_menu extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('data_model');
    }

    function index_get() {
        $menu = $this->data_model->get_menu_data();
        $menunya = array();
        foreach ($menu as $row) {
            $submenu = $this->db->get_where('t_menu_website', array('is_main_menu' => $row->id_menu));
            if ($submenu->num_rows() > 0) {
                $n['id_menu'] = $row->id_menu;
                $n['link'] = $row->link;
                $n['nama_menu'] = $row->nama_menu;
                foreach ((array) $submenu->result() as $value) {
                    $n['sub_menu'][] = array("link_sub" => $value->link,
                        "nama_sub" => $value->nama_menu);
                }
                array_push($menunya, $n);
                unset($n['sub_menu']);
            } else if($submenu->num_rows() == 0 && $row->is_main_menu==0){
                $m['id_menu'] = $row->id_menu;
                $m['link'] = $row->link;
                $m['nama_menu'] = $row->nama_menu;
                array_push($menunya, $m);
            }
        }
        $this->response($menunya, REST_Controller::HTTP_OK);
    }

    function index_post() {
        
    }

    function index_put() {
        
    }

    function index_delete() {
        
    }

}
