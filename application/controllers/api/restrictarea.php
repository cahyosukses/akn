<?php defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Restrictarea extends REST_Controller {
    
    function __construct() {
        parent::__construct();
        $this->limit = 10;
        $this->load->model(array('m_masterdata'));

        $id_user = $this->session->userdata('id_user');
        if (empty($id_user)) {
            $this->response(array('error' => 'Anda belum login'), 401);
        }
    }
    
    function beritas_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_berita($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function berita_post() {
        $data = $this->m_masterdata->save_berita();
        $this->response($data, 200);
    }
    
    function berita_delete() {
        $data = $this->db->query("select gambar from tb_berita where id = '".$this->get('id')."'")->row();
        @unlink('assets/img/berita/'.$data->gambar);
        $this->db->delete('tb_berita', array('id' => $this->get('id')));
    }
    
    function berita_file_delete() {
        $data = $this->db->query("select attachment from tb_berita where id = '".$this->get('id')."'")->row();
        @unlink('assets/img/berita/'.$data->attachment);
        $this->db->where('id', $this->get('id'));
        $this->db->update('tb_berita', array('attachment' => ''));
    }
    
    /*SLIDER*/
    function sliders_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_slider($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function slider_post() {
        $data = $this->m_masterdata->save_slider();
        $this->response($data, 200);
    }
    
    function slider_delete() {
        $data = $this->db->query("select gambar from tb_slider where id = '".$this->get('id')."'")->row();
        @unlink('assets/img/slider/'.$data->gambar);
        $this->db->delete('tb_slider', array('id' => $this->get('id')));
    }
    
    /*PROFILE*/
    function profiles_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_profile($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function profile_post() {
        $data = $this->m_masterdata->save_profile();
        $this->response($data, 200);
    }
    
    function profile_delete() {
        $data = $this->db->query("select gambar from tb_profile where id = '".$this->get('id')."'")->row();
        $this->db->delete('tb_profile', array('id' => $this->get('id')));
    }
    
    /*PRODI*/
    function prodis_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_prodi($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function prodi_post() {
        $data = $this->m_masterdata->save_prodi();
        $this->response($data, 200);
    }
    
    function prodi_delete() {
        $this->db->delete('tb_prodi', array('id' => $this->get('id')));
    }
    
    /*CONTACT*/
    function contacts_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_contact($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function contact_post() {
        $data = $this->m_masterdata->save_contact();
        $this->response($data, 200);
    }
    
    /*JOURNAL CATEGORY*/
    function journal_categorys_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_journal_category($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function journal_category_post() {
        $data = $this->m_masterdata->save_journal_category();
        $this->response($data, 200);
    }
    
    function journal_category_delete() {
        $this->db->delete('tb_journal_category', array('id' => $this->get('id')));
    }
    
    function journals_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_journal($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function journal_post() {
        $data = $this->m_masterdata->save_journal();
        return $data;
    }
    
    function journal_delete() {
        $data = $this->db->query("select file from tb_journal where id = '".$this->get('id')."'")->row();
        @unlink('assets/img/journal/'.$data->file);
        $this->db->delete('tb_journal', array('id' => $this->get('id')));
    }
    
    /*KEMAHASISWAAN*/
    function kemahasiswaans_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_kemahasiswaan($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function kemahasiswaan_post() {
        $data = $this->m_masterdata->save_kemahasiswaan();
        $this->response($data, 200);
    }
    
    function kemahasiswaan_delete() {
        $data = $this->db->query("select gambar from tb_kemahasiswaan where id = '".$this->get('id')."'")->row();
        @unlink('assets/img/kemahasiswaan/'.$data->gambar);
        $this->db->delete('tb_kemahasiswaan', array('id' => $this->get('id')));
    }
    
    function change_password_post() {
        $data = $this->m_masterdata->change_password();
        die(json_encode($data));
    }
    
    function info_pendaftarans_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_info_pendaftaran($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function info_pendaftaran_post() {
        $data = $this->m_masterdata->save_info_pendaftaran();
        die(json_encode($data));
    }
    
    /*DATA PMB*/
    function pmbs_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'awal' => date2mysql(get_safe('awal')),
            'akhir' => date2mysql(get_safe('akhir')),
            'nama' => get_safe('nama'),
            'no_daftar' => get_safe('no_daftar'),
            'pilihan1' => get_safe('pilihan1'),
            'pilihan2' => get_safe('pilihan2'),
            'ta' => get_safe('ta')
        );
        
        $data = $this->m_masterdata->get_list_pmb($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function pmb_post() {
        $data = $this->m_masterdata->save_pmb();
        $this->response($data, 200);
    }
    
    function pmb_delete() {
        $this->db->delete('tb_pendaftaran', array('id' => $this->get('id')));
    }
    
    /*SAMBUTAN*/
    function sambutans_get() {
        if (!$this->get('page')) {
            $this->response(NULL, 400);
        }
        
        $start = ($this->get('page') - 1) * $this->limit;
        
        $search= array(
            'id' => $this->get('id')
        );
        
        $data = $this->m_masterdata->get_list_sambutans($this->limit, $start, $search);
        $data['page'] = (int)$this->get('page');
        $data['limit'] = $this->limit;
        
        if($data){
            $this->response($data, 200); // 200 being the HTTP response code
        }else{
            $this->response(array('error' => 'Data tidak ditemukan'), 404);
        }
    }
    
    function sambutan_post() {
        $data = $this->m_masterdata->save_sambutan();
        $this->response($data, 200);
    }
    
    function sambutan_delete() {
        $data = $this->db->query("select gambar from tb_sambutan where id = '".$this->get('id')."'")->row();
        @unlink('assets/img/profiles/'.$data->gambar);
        $this->db->delete('tb_sambutan', array('id' => $this->get('id')));
    }
    
    function save_config_post() {
        $data = $this->m_masterdata->save_config();
        $this->response($data, 200);
    }
}