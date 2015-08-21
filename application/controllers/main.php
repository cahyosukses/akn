<?php

class Main extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model(array('m_main'));
    }
    
    function index() {
        $data['title'] = 'Home - Akademi Komunitas Negeri Kajen';
        $data['slider'] = $this->m_main->get_list_slider()->result();
        $data['berita'] = $this->m_main->get_list_berita()->result();
        $data['prodi'] = $this->m_main->get_list_prodi()->result();
        $data['sambutan'] = $this->m_main->get_list_sambutan()->result();
        $data['contact'] = $this->m_main->get_data_contact()->row();
        $this->load->view('public', $data);
    }
    
    function detailnews($id) {
        $data['title'] = 'Detail Berita';
        $data['berita'] = $this->m_main->get_list_berita($id)->row();
        $data['berita_lain'] = $this->m_main->get_list_berita()->result();
        $this->load->view('main/detail-news', $data);
    }
}