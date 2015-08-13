<?php

class Restrictarea extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function news() {
        $data['title'] = 'Berita';
        $this->load->view('restricted/news', $data);
    }
    
    function profile() {
        $data['title'] = 'Profil Universitas';
        $this->load->view('restricted/profile', $data);
    }
    
    function prodi() {
        $data['title'] = 'Program Studi';
        $this->load->view('restricted/prodi', $data);
    }
    
    function contactus() {
        $data['title'] = 'Kontak Kami';
        $this->load->view('restricted/contact', $data);
    }
    
    function journal() {
        $data['title'] = 'Publikasi Ilmiah';
        $this->load->view('restricted/journal', $data);
    }
    
    function pendaftaran() {
        $data['title'] = 'Data PMB';
        $this->load->view('restricted/data-pendaftaran', $data);
    }
    
    function kegiatan() {
        $data['title'] = 'Kegiatan Kemahasiswaan';
        $this->load->view('restricted/kemahasiswaan', $data);
    }
    
    function changepassword() {
        $data['title'] = 'Ubah Password';
        $this->load->view('restricted/changepass', $data);
    }
    
}