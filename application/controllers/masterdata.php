<?php

class Masterdata extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    /*Jenis Penerimaan*/
    function jenis_penerimaan() {
        $data['title'] = 'Jenis Penerimaan';
        $this->load->view('masterdata/jenis-penerimaan', $data);
    }
    
    function manage_jenis_penerimaan($action, $page = null) {
        $limit = 10;
        switch ($action) {
            case 'list':
                $search['nama'] = get_safe('nama');
                $search['status'] = get_safe('status');
                $search['jenis'] = get_safe('jenis');
                $search['id']  = get_safe('id');
                $data = $this->get_list_data_jenis_penerimaan($limit, $page, $search);
                $this->load->view('masterdata/jenis-penerimaan-table', $data);
                break;
            case 'save': 
                $data = $this->m_masterdata->save_jenis_penerimaan();
                die(json_encode($data));
                break;
            case 'delete': 
                $this->m_masterdata->delete_jenis_penerimaan($_GET['id']);
                break;
            
        }
    }
    
    function get_list_data_jenis_penerimaan($limit, $page, $search) {
        if ($page == 'undefined') {
            $page = 1;
        }
        //$str = 'null';
        $start = ($page - 1) * $limit;
        $data['page'] = $page;
        $data['limit'] = $limit;
        $data['auto'] = $start+1;
        $query = $this->m_masterdata->get_data_jenis_penerimaan($limit, $start, $search);
        $data['list_data'] = $query['data'];
        $data['jumlah'] = $query['jumlah'];
        
        $data['paging'] = paging_ajax($data['jumlah'], $limit, $page, 1, null);
        return $data;
    }
    
    /*PERIODE*/
    function periode() {
        $data['title'] = 'Periode';
        $this->load->view('masterdata/periode', $data);
    }
    
    function manage_periode($action, $page = null) {
        $limit = 10;
        switch ($action) {
            case 'list':
                $search['tahun']    = get_safe('tahun');
                $search['semester'] = get_safe('semester');
                $search['id']       = get_safe('id_periode');
                $data = $this->get_list_data_periode($limit, $page, $search);
                $this->load->view('masterdata/periode-table', $data);
                break;
            case 'save': 
                $check= $this->db->get_where('tb_periode', array('tahun' => post_safe('tahun'), 'semester' => post_safe('semester')))->num_rows();
                if ($check === 0) {
                    $data = $this->m_masterdata->save_periode();
                } else {
                    $data = array('status' => FALSE);
                }
                die(json_encode($data));
                break;
            case 'delete': 
                $this->m_masterdata->delete_periode($_GET['id']);
                break;
            
        }
    }
    
    function get_list_data_periode($limit, $page, $search) {
        if ($page == 'undefined') {
            $page = 1;
        }
        //$str = 'null';
        $start = ($page - 1) * $limit;
        $data['page'] = $page;
        $data['limit'] = $limit;
        $data['auto'] = $start+1;
        $query = $this->m_masterdata->get_data_periode($limit, $start, $search);
        $data['list_data'] = $query['data'];
        $data['jumlah'] = $query['jumlah'];
        
        $data['paging'] = paging_ajax($data['jumlah'], $limit, $page, 1, null);
        return $data;
    }
    
    /* USER ACCOUNT */
    function account(){
        $data['title'] = 'Account';
        $this->load->view('masterdata/group', $data);
    }

    function user_group(){
        $this->load->view('masterdata/user_group');
    }

    function user_account() {
        $data['user_group'] = $this->m_masterdata->get_user_group();
        $this->load->view('masterdata/account', $data);
    }

    function get_group_list($limit, $page, $search){
        if ($page == 'undefined') {
            $page = 1;
        }
        $start = ($page - 1) * $limit;
        $data['page'] = $page;
        $data['limit'] = $limit;
        $query = $this->m_masterdata->group_get_data($limit, $start, $search);
        $data['jumlah'] = $query['jumlah'];
        $data['user'] = $query['data'];
        $data['paging'] = paging_ajax($data['jumlah'], $limit, $page, 1, '');
        return $data;
    }

    function manage_group($mode,$page=null){
        $limit = 15;
        $add = array(
            'id' => post_safe('id'),
            'nama' => post_safe('nama')
        );
        $search = array();
        switch ($mode) {
            case 'list':
                $data = $this->get_group_list($limit, $page, $search);
                $this->load->view('masterdata/list_group', $data);
                break;
            case 'post':
                $search['id'] = $this->m_masterdata->group_update_data($add);
                $data = $this->get_group_list($limit, $page, $search);
                $this->load->view('masterdata/list_group', $data);
                break;

             case 'edit':
                $data['title'] = "User Group Privileges";
                $data['id'] = get_safe('id');
                $data['nama'] = get_safe('nama');
                $this->load->view('masterdata/privilege', $data);
                break;

            case 'delete':
                $id = get_safe('id');
                $this->m_masterdata->group_delete_data($id);
                $data = $this->get_group_list($limit, $page, null);
                if ($data['user'] == null) {
                    $data = $this->get_group_list($limit, 1, null);
                }
                $this->load->view('masterdata/list_group', $data);
                break;

            default:
                
                break;
        }
    }

    function get_user_list($limit, $page, $search) {
        if ($page == 'undefined') {
            $page = 1;
        }
        $start = ($page - 1) * $limit;
        $data['page'] = $page;
        $data['limit'] = $limit;
        $query = $this->m_masterdata->user_get_data($limit, $start, $search);
        $data['jumlah'] = $query['jumlah'];
        $data['user'] = $query['data'];
        $data['paging'] = paging_ajax($data['jumlah'], $limit, $page, 2, '');
        return $data;
    }

    function manage_user($mode, $page = null) {
        $limit = 15;
        $add = array(
            'id' => post_safe('id_penduduk'),
            'username' => post_safe('username'),
            'nama' => post_safe('nama'),
            'id_user_group' => post_safe('group'),
        );
        switch ($mode) {
            case 'list':
                $search['id'] = post_safe('id_penduduk');
                $search['nama'] = post_safe('nama');
                $search['username'] = post_safe('username');
                $data = $this->get_user_list($limit, $page, $search);
                $this->load->view('masterdata/list_account', $data);
                break;
            case 'save':
                $add['password'] = md5('1234');
                $data = $this->m_masterdata->user_add_data($add);
                die(json_encode($data));
                break;
            case 'delete':
                $id = get_safe('id');
                $this->m_masterdata->user_delete_data($id);
                break;
            case 'reset_password':
                $id = get_safe('id');
                $this->m_masterdata->reset_password($id);
                break;
            case 'cek':
                $kab = array(
                    'nama' => get_safe('user'),
                    'kecamatan_id' => get_safe('kecid'),
                    'kode' => get_safe('kode')
                );
                $cek = $this->m_masterdata->user_cek_data($kab);
                die(json_encode(array('status' => $cek)));

                break;
            case 'search': 
                $search['id'] = post_safe('id_penduduk');
                $search['nama'] = post_safe('nama');
                $search['username'] = post_safe('username');
                $data = $this->get_user_list($limit, 1, $search);
                $this->load->view('masterdata/list_account', $data);
                break;
            default:
                break;
        }
    }

    function get_unit() {
        $q = get_safe('q');
        $data = $this->m_masterdata->get_unit($q)->result();
        die(json_encode($data));
    }

    function get_group_privileges($id) {
        $data['user_priv'] = $this->m_masterdata->group_privileges_data($id);
        $data['privilege'] = $this->m_masterdata->privileges_get_data();
        return $data;
    }

    function manage_privileges($mode) {

        switch ($mode) {
            case 'list':
                $id = get_safe('id');
                $data = $this->get_group_privileges($id);
                $this->load->view('masterdata/list_privileges', $data);

                break;

            case 'add':
                $add = array(
                    'privileges' => post_safe('data'),
                    'id_group' => post_safe('id_group')
                );
                $this->m_masterdata->privileges_edit_data($add);
                $data = $this->get_group_privileges(post_safe('id_group'));
                $this->load->view('masterdata/list_privileges', $data);

                break;

            default:
                break;
        }
    }
    
    function ubahpassword() {
        $data['title'] = 'Ubah Password';
        $this->load->view('masterdata/ubahpassword', $data);
    }
    
    function save_ubah_password() {
        $data = $this->m_masterdata->save_ubah_password();
        die(json_encode($data));
    }
    
    /*MAHASISWA*/
    function mahasiswa() {
        $data['title'] = 'Data Mahasiswa';
        $data['jurusan'] = $this->db->get('tb_prodi')->result();
        $this->load->view('masterdata/mahasiswa', $data);
    }
    
    function get_angkatan($jurusan) {
        $data = $this->db->query("select angkatan from tb_mahasiswa where k_prs = '$jurusan' GROUP BY angkatan")->result();
        die(json_encode($data));
    }
    
    function manage_mahasiswa($action, $page = null) {
        $limit = 10;
        switch ($action) {
            case 'list':
                $search['jurusan']    = get_safe('jurusan');
                $search['angkatan'] = get_safe('angkatan');
                $search['nim']       = get_safe('nim');
                $search['nama']       = get_safe('nama');
                $data = $this->get_list_data_mahasiswa($limit, $page, $search);
                $this->load->view('masterdata/mahasiswa-table', $data);
                break;
        }
    }
    
    function get_list_data_mahasiswa($limit, $page, $search) {
        if ($page == 'undefined') {
            $page = 1;
        }
        //$str = 'null';
        $start = ($page - 1) * $limit;
        $data['page'] = $page;
        $data['limit'] = $limit;
        $data['auto'] = $start+1;
        $query = $this->m_masterdata->get_data_mahasiswa($limit, $start, $search);
        $data['list_data'] = $query['data'];
        $data['jumlah'] = $query['jumlah'];
        
        $data['paging'] = paging_ajax($data['jumlah'], $limit, $page, 1, null);
        return $data;
    }
    
    /*BANK*/
    function bank() {
        $data['title'] = 'Data Bank';
        $this->load->view('masterdata/bank', $data);
    }
    
    function manage_bank($action, $page = null) {
        $limit = 10;
        switch ($action) {
            case 'list':
                $search['id']  = get_safe('id');
                $data = $this->get_list_data_bank($limit, $page, $search);
                $this->load->view('masterdata/bank-table', $data);
                break;
            case 'save': 
                $data = $this->m_masterdata->save_bank();
                die(json_encode($data));
                break;
            case 'delete': 
                $this->db->delete('tb_bank', array('id' => get_safe('id')));
                break;
            
        }
    }
    
    function get_list_data_bank($limit, $page, $search) {
        if ($page == 'undefined') {
            $page = 1;
        }
        //$str = 'null';
        $start = ($page - 1) * $limit;
        $data['page'] = $page;
        $data['limit'] = $limit;
        $data['auto'] = $start+1;
        $query = $this->m_masterdata->get_data_bank($limit, $start, $search);
        $data['list_data'] = $query['data'];
        $data['jumlah'] = $query['jumlah'];
        
        $data['paging'] = paging_ajax($data['jumlah'], $limit, $page, 1, null);
        return $data;
    }
}