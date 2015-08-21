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
    
    function get_list_prodi() {
        $sql = "select * from tb_prodi order BY urutan";
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
    
    function get_list_profile() {
        $sql = "select * from tb_profile order by urutan";
        return $this->db->query($sql);
    }
}