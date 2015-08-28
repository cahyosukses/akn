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
    
    function get_list_sambutan($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.=" where id = '".$id."'";
        }
        $sql = "select * from tb_sambutan $q";
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
    
    function get_data_kegiatan_kemahasiswaan($id = NULL) {
        $q = NULL;
        if ($id !== NULL) {
            $q.="where id = '".$id."'";
        }
        $sql = "select * from tb_kemhsan $q order by tanggal desc";
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
    
    function create_no_daftar($jenis) {
        $sql = "select substr(no_pendaftaran,7,4) as kode, id from tb_pendaftaran where jenis_daftar = '$jenis' order by id desc limit 1";
        $row = $this->db->query($sql)->row();
        if (sizeof($row) < 1) {
            $result = $jenis.date("y").'0001';
        }else{
            $result = $jenis.date("y").str_pad((string)($row->kode+1), 4, "0", STR_PAD_LEFT);
        }
        return $result;
    }
    
    function save_pendaftaran_pmdk() {
        $this->db->trans_begin();
        $data_array = array(
            'no_pendaftaran' => $this->create_no_daftar('PMDK'),
            'tahun_ajaran' => post_safe('tahun_ajaran'),
            'nama' => post_safe('nama_lengkap'),
            'tempat' => post_safe('tempat_lahir'),
            'tanggal_lahir' => date2mysql(post_safe('tanggal_lahir')),
            'agama' => post_safe('agama'),
            'jekel' => post_safe('jenis_kelamin'),
            'alamat' => post_safe('alamat_rumah'),
            'rt' => post_safe('rt'),
            'rw' => post_safe('rw'),
            'kabupaten' => post_safe('kabupaten'),
            'kecamatan' => post_safe('kecamatan'),
            'desa' => post_safe('desa'),
            'id_desa' => NULL,
            'telp' => post_safe('telp'),
            'nama_ayah' => post_safe('nama_ayah'),
            'nama_ibu' => post_safe('nama_ibu'),
            'pekerjaan_ayah' => post_safe('pekerjaan_ayah'),
            'pekerjaan_ibu' => post_safe('pekerjaan_ibu'),
            'penghasilan_ayah' => currencyToNumber(post_safe('penghasilan_ayah')),
            'penghasilan_ibu' => (post_safe('penghasilan_ibu')),
            'pembiaya' => post_safe('biayai'),
            'nama_wali' => post_safe('nama_wali'),
            'hubungan_wali' => post_safe('hubungan_wali'),
            'penghasilan_wali' => currencyToNumber(post_safe('penghasilan_wali')),
            'alamat_wali' => post_safe('alamat_wali'),
            'asal_sekolah' => post_safe('asal_sekolah'),
            'jurusan' => post_safe('jurusan'),
            'status_sekolah' => post_safe('status_sekolah'),
            'alamat_sekolah' => post_safe('alamat_sekolah'),
            'telp_sekolah' => post_safe('telp_sekolah'),
            'prodi_pil_1' => (post_safe('pilihan1') !== '')?post_safe('pilihan1'):NULL,
            'prodi_pil_2' => (post_safe('pilihan2') !== '')?post_safe('pilihan2'):NULL,
            'jenis_daftar' => 'PMDK'
        );
        $this->db->insert('tb_pendaftaran', $data_array);
        $id_pendaftaran = $this->db->insert_id();
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        }
        $rata_raport = post_safe('ratarapot'); // array
        $rangking    = post_safe('rangking'); // array
        $jml_mapel   = post_safe('jml_mapel'); // array
        $sem = 1;
        foreach ($rata_raport as $key => $data) {
            $data_akademik = array(
                'id_pendaftaran' => $id_pendaftaran,
                'semester' => $sem,
                'rataraport' => $data,
                'rangking' => $rangking[$key],
                'jml_mapel' => $jml_mapel[$key]
            );
            $this->db->insert('tb_prestasi_akademik', $data_akademik);
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            }
            $sem++;
        }
        
        $nonakademik = post_safe('nonakademik');
        foreach ($nonakademik as $key => $data) {
            $data_non_akademik = array(
                'id_pendaftaran' => $id_pendaftaran,
                'nama' => $data
            );
            $this->db->insert('tb_prestasi_nonakademik', $data_non_akademik);
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            }
        }
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $result['status'] = FALSE;
        } else {
            $this->db->trans_commit();
            $result['status'] = TRUE;
        }
        return $result;
    }
    
    function save_pendaftaran_sumb() {
        $this->db->trans_begin();
        $data_array = array(
            'no_pendaftaran' => $this->create_no_daftar('SUMB'),
            'tahun_ajaran' => post_safe('tahun_ajaran'),
            'nama' => post_safe('nama_lengkap'),
            'tempat' => post_safe('tempat_lahir'),
            'tanggal_lahir' => date2mysql(post_safe('tanggal_lahir')),
            'agama' => post_safe('agama'),
            'jekel' => post_safe('jenis_kelamin'),
            'alamat' => post_safe('alamat_rumah'),
            'rt' => post_safe('rt'),
            'rw' => post_safe('rw'),
            'kabupaten' => post_safe('kabupaten'),
            'kecamatan' => post_safe('kecamatan'),
            'desa' => post_safe('desa'),
            'id_desa' => NULL,
            'telp' => post_safe('telp'),
            'nama_ayah' => post_safe('nama_ayah'),
            'nama_ibu' => post_safe('nama_ibu'),
            'pekerjaan_ayah' => post_safe('pekerjaan_ayah'),
            'pekerjaan_ibu' => post_safe('pekerjaan_ibu'),
            'penghasilan_ayah' => currencyToNumber(post_safe('penghasilan_ayah')),
            'penghasilan_ibu' => currencyToNumber(post_safe('penghasilan_ibu')),
            'pembiaya' => post_safe('biayai'),
            'nama_wali' => post_safe('nama_wali'),
            'hubungan_wali' => post_safe('hubungan_wali'),
            'penghasilan_wali' => currencyToNumber(post_safe('penghasilan_wali')),
            'alamat_wali' => post_safe('alamat_wali'),
            'asal_sekolah' => post_safe('asal_sekolah'),
            'jurusan' => post_safe('jurusan'),
            'status_sekolah' => post_safe('status_sekolah'),
            'alamat_sekolah' => post_safe('alamat_sekolah'),
            'telp_sekolah' => post_safe('telp_sekolah'),
            'prodi_pil_1' => post_safe('pilihan1'),
            'prodi_pil_2' => post_safe('pilihan2'),
            'jenis_daftar' => 'SUMB'
        );
        $this->db->insert('tb_pendaftaran', $data_array);
        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $result['status'] = FALSE;
        } else {
            $this->db->trans_commit();
            $result['status'] = TRUE;
        }
        return $result;
    }
}