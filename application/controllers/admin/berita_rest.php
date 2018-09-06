<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Berita_rest extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->library('form_validation');
        $this->load->model('berita_model');
        
    }
    function default_value() {
        $data['kategori'] = "";
        $data['judul'] = "";
        $data['isi_berita'] = "";
        $data['status'] = "";
        return $data;
    }

    function index_get() {
        $berita = $this->berita_model->get_berita_kategori()->result();
        $this->response($berita, REST_Controller::HTTP_OK);
    }

    function index_post() {
        $this->form_validation->set_rules('judul', 'Judul', 'required|min_length[5]|max_length[100]');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|integer');
        if ($this->form_validation->run() == TRUE) {
            $this->simpan();
        } else {
            $this->load->view('admin/berita-tambah-view', $this->default_value());
        }
    }

    function index_put() {
        
    }

    function index_delete() {
        
    }

    function simpan() {
        $data['judul_berita'] = sanitize_input(strip_tags($this->input->post('judul')));
        $data['isi_berita'] = sanitize_input($this->input->post('isi_berita'));
        $data['by'] = "Admin";
        $data['status'] = "Draft";
        $data['id_kategori'] = $this->input->post('kategori');
        $data['judul_berita_seo'] = seo_title($data['judul_berita']);
        $this->berita_model->simpan_berita($data);
//        if($this->response(REST_Controller::HTTP_CREATED))
        redirect('admin/berita');
    }
    

}
