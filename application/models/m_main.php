<?php

class M_main extends CI_Model {
    
    function get_list_slider() {
        $sql = "select * from tb_slider order by id";
        return $this->db->query($sql);
    }
    
    function get_list_berita($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.="and id = '".$id."'";
        }
        $sql = "select * from tb_berita where id is not NULL $q order BY id desc";
        return $this->db->query($sql);
    }
    
    function get_list_prodi($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.="and id = '".$id."'";
        }
        $sql = "select * from tb_prodi where id is not NULL $q order BY urutan";
        return $this->db->query($sql);
    }
    
    function get_list_sambutan() {
        $sql = "select * from tb_sambutan order BY id";
        return $this->db->query($sql);
    }
    
    function get_data_contact() {
        $sql = "select * from tb_contact";
        return $this->db->query($sql);
    }
    
    function get_list_profile($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.="and id = '".$id."'";
        }
        $sql = "select * from tb_profile where id is not NULL $q order by urutan";
        return $this->db->query($sql);
    }
    
    function get_data_kegiatan_kemahasiswaan() {
        $sql = "select * from tb_kemhsan order by tanggal desc";
        return $this->db->query($sql);
    }
    
    function get_list_kategori_jurnal($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.="and id = '".$id."'";
        }
        $sql = "select * from tb_journal_category where id is not NULL $q order by id asc";
        $result = $this->db->query($sql)->result();
        foreach ($result as $key => $value) {
            $sql_child = "select count(*) as jumlah from tb_journal where id_journal_category = '".$value->id."'";
            $result[$key]->jumlah = $this->db->query($sql_child)->row()->jumlah;
        }
        return $result;
        
    }
    
    function get_list_kategori_jurnal_content($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.="and id = '".$id."'";
        }
        $sql = "select * from tb_journal_category where id is not NULL $q order by id asc";
        return $this->db->query($sql);
        
    }
    
    function get_list_detail_publikasi($search) {
        $q = NULL;
        if ($search['id'] !== NULL) {
            $q.=" and j.id = '".$search['id']."'";
        }
        if ($search['kategori'] !== NULL) {
            $q.=" and j.id_journal_category = '".$search['kategori']."'";
        }
        $sql = "select j.*, k.nama from tb_journal j join tb_journal_category k on (j.id_journal_category = k.id) where j.id is not NULL $q order by id";
        return $this->db->query($sql);
    }
    
    function get_data_info_pmb() {
        $sql = "select * from tb_info_pendaftaran";
        return $this->db->query($sql);
    }
}