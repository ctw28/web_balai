<?php

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Berita_rest extends REST_Controller {

    public $nama="";
    
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
        $berita = $this->berita_model->get_semua_berita()->result();
        $this->response($berita, REST_Controller::HTTP_OK);
    }

    function index_post() {
        $this->form_validation->set_rules('judul', 'Judul', 'required|min_length[5]|max_length[100]',
                                           array('min_length' => '{field} harus di atas {param} Karakter',
                                                 'max_length' => '{field} tidak boleh melebihi {param} Karakter'));
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|integer');
        $this->form_validation->set_rules('pic', 'Gambar', 'callback_do_upload');

        if ($this->form_validation->run() == TRUE) {
            $this->simpan();
        } else {
            $this->load->view('admin/berita-tambah-view', $this->default_value());
        }
    }

    function index_put() {
        //untuk PUT METHOD
    }

    function index_delete() {
        //UNTUK DELETE METHOD
    }

    function simpan() {
        $data['judul_berita'] = sanitize_input(strip_tags($this->input->post('judul')));
        $data['isi_berita'] = sanitize_input($this->input->post('isi_berita'));
        $data['foto'] = sanitize_input($this->nama);
        $data['by'] = "Admin";
        $data['status'] = sanitize_input($this->input->post('status'));
        $data['id_kategori'] = $this->input->post('kategori');
        $data['judul_berita_seo'] = seo_title($data['judul_berita']);
        $this->berita_model->simpan_berita($data);
        if($this->response($data, REST_Controller::HTTP_CREATED))
        redirect('admin/berita');
    }

    public function do_upload() {
        $config['upload_path'] = './assets/images';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 1000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('pic')) {
            $this->form_validation->set_message('do_upload', 'Gambar harus JPG/PNG dengan ukuran Maks. 1MB');
            return false;
        } else {
            $data = $this->upload->data();
            $this->nama = $data['file_name'];
            return true;
        }
    }

}
