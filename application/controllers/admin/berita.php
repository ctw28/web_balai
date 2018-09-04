<?php

class Berita extends CI_Controller{
    function index(){
        $this->load->model('berita_model');
        $data['data'] = $this->berita_model->get_semua_berita();
        $this->load->view('admin/berita-data-view', $data);
    }
    function tambah(){
        $this->load->view('admin/berita-tambah-view');        
    }
    
    function simpan(){
        if ( isset( $_POST['submit'] ) ){
            echo $data['judul_berita_seo'] = seo_title($this->input->post('judul'));
            
        }
	$data['judul_berita'] = $this->input->post('judul');
	$data['isi_berita'] = $this->input->post('isi_berita');
	$data['by'] = "Admin";

    }
}