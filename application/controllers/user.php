<?php

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        //is_logged_in();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('m_user');
        $this->load->helper('login');
        $user = $this->session->userdata('user');
        $name = explode(' ', $this->session->userdata('nama'));
        
        if ($user != '') {
            //$data = $this->menu_user_load_data();
            $data['title'] = 'Administrator | AKN';
            $data['first_name'] = $name[0];
            $data['last_name'] = isset($name[1])?$name[1]:NULL;
            $this->load->view('dashboard', $data);
        }
        date_default_timezone_set('Asia/Jakarta');
    }

    public function menu_user_load_data() {
        $id_group = $this->session->userdata('id_group');
        $active = $this->session->userdata('active_modul');
        if($active != NULL){
            $data['detail_menu'] = $this->m_user->menu_user_load_data($id_group, $active)->result();
        }
        
        $data['master_menu'] = $this->m_user->module_load_data($id_group)->result();
        return $data;
    }

    function index() {
        $data['title'] = 'Website AKN | Login';
        $user = $this->session->userdata('user');
        if (empty($user)) {
            $this->load->view('logmein', $data);
        }
        
        //$this->is_login();
    }

    function login() {
        $jml = $this->m_user->cek_login();
        if (isset($jml->username) and $jml->username != '') {
            $data = array(
                'id_user' => $jml->id, 
                'nama' => $jml->nama,
                'user' => $jml->username, 
                'id_group' => $jml->id_user_group
            );
            $this->session->set_userdata($data);

            die(json_encode(array('status'=>'login')));
        } else {
            die(json_encode(array('status'=>'gagal')));
        }
    }

    public function is_login() {
        
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url(''));
    }

}