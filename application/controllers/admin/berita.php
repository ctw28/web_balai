<?php

class Berita extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('berita_model');
    }

    function index() {
        $this->load->model('berita_model');
//        $data['data'] = $this->berita_model->get_semua_berita();
        $data['berita'] = json_decode(file_get_contents('http://localhost/web_balai/admin/berita_rest'));
        $this->load->view('admin/berita-data-view', $data);
    }

    function default_value() {
        $data['kategori'] = "";
        $data['judul'] = "";
        $data['isi_berita'] = "";
        $data['status'] = "";
        return $data;
    }

    function tambah() {
        $this->load->view('admin/berita-tambah-view', $this->default_value());
    }

}
