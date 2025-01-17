<?php

class M_masterdata extends CI_Model {
    
    /*BERITA*/
    function get_list_berita($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_berita where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_berita() {
        $id = post_safe('id');
        $UploadDirectory	= 'assets/img/berita/'; //Upload Directory, ends with slash & make sure folder exist
        $NewFileName= "";
        $data_array = array(
            'judul' => post_safe('judul'),
            'isi' => post_safe('isi_berita'),
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        //die($UploadDirectory);
            // replace with your mysql database details
        if (!@file_exists($UploadDirectory)) {
                //destination folder does not exist
                die('No upload directory');
        }
        if ($id === '') {
            $this->db->insert('tb_berita', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_berita', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        if(isset($_FILES['mFile']['name'])) {

                $foto               = post_safe('gambar');
                $FileName           = strtolower($_FILES['mFile']['name']); //uploaded file name
                $FileTitle		= $FileName;
                $ImageExt		= substr($FileName, strrpos($FileName, '.')); //file extension
                $FileType		= $_FILES['mFile']['type']; //file type
                //$FileSize		= $_FILES['mFile']["size"]; //file size
                $RandNumber   		= rand(0, 99999); //Random number to make each filename unique.
                //$uploaded_date		= date("Y-m-d H:i:s");
                if ($foto !== '') {
                    @unlink('assets/img/berita/'.$foto);
                }
                switch(strtolower($FileType))
                {
                        //allowed file types
                        case 'image/png': //png file
                        case 'image/gif': //gif file 
                        case 'image/jpeg': //jpeg file
//                        case 'application/pdf': //PDF file
//                        case 'application/msword': //ms word file
//                        case 'application/vnd.ms-excel': //ms excel file
//                        case 'application/x-zip-compressed': //zip file
//                        case 'text/plain': //text file
//                        case 'text/html': //html file
                                break;
                        default:
                                die('Unsupported File!'); //output error
                }


                //File Title will be used as new File name
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($data_array['judul']));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('tb_berita', array('gambar' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        
        if(isset($_FILES['mFileAtt']['name'])) {

                $foto               = post_safe('attachment');
                $FileName           = strtolower($_FILES['mFileAtt']['name']); //uploaded file name
                $FileTitle		= $FileName;
                $ImageExt		= substr($FileName, strrpos($FileName, '.')); //file extension
                $FileType		= $_FILES['mFileAtt']['type']; //file type
                //$FileSize		= $_FILES['mFileAtt']["size"]; //file size
                $RandNumber   		= rand(0, 99999); //Random number to make each filename unique.
                //$uploaded_date		= date("Y-m-d H:i:s");
                if ($foto !== '') {
                    @unlink('assets/img/berita/'.$foto);
                }
                switch(strtolower($FileType))
                {
                        //allowed file types
//                        case 'image/png': //png file
//                        case 'image/gif': //gif file 
//                        case 'image/jpeg': //jpeg file
                        case 'application/pdf': //PDF file
                        case 'application/msword': //ms word file
                        case 'application/vnd.ms-excel': //ms excel file
                        case 'application/x-zip-compressed': //zip file
//                        case 'text/plain': //text file
//                        case 'text/html': //html file
                                break;
                        default:
                                die('File yang anda upload harus berformat PDF, DOC, DOCX, XLS, XLSX !'); //output error
                }


                //File Title will be used as new File name
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($data_array['judul']));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFileAtt']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('tb_berita', array('attachment' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        die(json_encode($result));
        
    }
    
    /*SLIDER*/
    
    function get_list_slider($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_slider where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_slider() {
        $id = post_safe('id');
        $UploadDirectory	= 'assets/img/slider/'; //Upload Directory, ends with slash & make sure folder exist
        $NewFileName= "";
        $data_array = array(
            'judul' => post_safe('judul'),
            'isi' => post_safe('isi_slider'),
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        //die($UploadDirectory);
            // replace with your mysql database details
        if (!@file_exists($UploadDirectory)) {
                //destination folder does not exist
                die('No upload directory');
        }
        if ($id === '') {
            $this->db->insert('tb_slider', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_slider', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        if(isset($_FILES['mFile']['name'])) {

                $foto               = post_safe('gambar');
                $FileName           = strtolower($_FILES['mFile']['name']); //uploaded file name
                $FileTitle		= $FileName;
                $ImageExt		= substr($FileName, strrpos($FileName, '.')); //file extension
                $FileType		= $_FILES['mFile']['type']; //file type
                //$FileSize		= $_FILES['mFile']["size"]; //file size
                $RandNumber   		= rand(0, 99999); //Random number to make each filename unique.
                //$uploaded_date		= date("Y-m-d H:i:s");
                if ($foto !== '') {
                    @unlink('assets/img/slider/'.$foto);
                }
                switch(strtolower($FileType))
                {
                        //allowed file types
                        case 'image/png': //png file
                        case 'image/gif': //gif file 
                        case 'image/jpeg': //jpeg file
//                        case 'application/pdf': //PDF file
//                        case 'application/msword': //ms word file
//                        case 'application/vnd.ms-excel': //ms excel file
//                        case 'application/x-zip-compressed': //zip file
//                        case 'text/plain': //text file
//                        case 'text/html': //html file
                                break;
                        default:
                                die('Unsupported File!'); //output error
                }


                //File Title will be used as new File name
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($data_array['judul']));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('tb_slider', array('gambar' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        die(json_encode($result));
        
    }
    
    /*PROFILE*/
    function get_list_profile($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_profile where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_profile() {
        $id = post_safe('id');
        $data_array = array(
            'link' => post_safe('link'),
            'judul' => post_safe('judul'),
            'keterangan' => post_safe('isi_profile'),
            'aktif' => post_safe('aktif')
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        
        if ($id === '') {
            $this->db->insert('tb_profile', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_profile', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        return $result;
    }
    
    /*PRODI*/
    function get_list_prodi($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_prodi where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_prodi() {
        $id = post_safe('id');
        $data_array = array(
            'link' => post_safe('link'),
            'judul' => post_safe('judul'),
            'keterangan' => post_safe('isi_prodi'),
            'aktif' => post_safe('aktif')
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        
        if ($id === '') {
            $this->db->insert('tb_prodi', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_prodi', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        return $result;
    }
    
    /*CONTACT*/
    function get_list_contact($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_contact where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_contact() {
        $id = post_safe('id');
        $data_array = array(
            'nama' => post_safe('nama'),
            'alamat' => post_safe('alamat'),
            'kode_pos' => post_safe('kode_pos'),
            'telp' => post_safe('telp'),
            'fax' => post_safe('fax'),
            'email' => post_safe('email'),
            'website' => post_safe('website')
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        
        if ($id === '') {
            $this->db->insert('tb_contact', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_contact', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        return $result;
    }
    
    /*JOURNAL*/
    function get_list_journal_category($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_journal_category where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_journal_category() {
        $id = post_safe('id');
        $data_array = array(
            'nama' => post_safe('judul')
        );
        
        if ($id === '') {
            $this->db->insert('tb_journal_category', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_journal_category', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        return $result;
    }
    
    function get_list_journal($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_journal where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_journal() {
        $id = post_safe('id');
        $UploadDirectory	= 'assets/img/journal/'; //Upload Directory, ends with slash & make sure folder exist
        $NewFileName= "";
        $data_array = array(
            'id_journal_category' => post_safe('kategori'),
            'tanggal' => date2mysql(post_safe('tanggal')),
            'penulis' => post_safe('penulis'),
            'judul' => post_safe('judul'),
            'abstract_id' => post_safe('isi_journal'),
            'keywords_id' => post_safe('keywords_id'),
            'abstract_en' => post_safe('isi_journal_en'),
            'keywords_en' => post_safe('keywords_en')
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        //die($UploadDirectory);
            // replace with your mysql database details
        if (!@file_exists($UploadDirectory)) {
                //destination folder does not exist
                die('No upload directory');
        }
        if ($id === '') {
            $this->db->insert('tb_journal', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_journal', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        if(isset($_FILES['mFile']['name'])) {

                $foto               = post_safe('gambar');
                $FileName           = strtolower($_FILES['mFile']['name']); //uploaded file name
                $FileTitle		= $FileName;
                $ImageExt		= substr($FileName, strrpos($FileName, '.')); //file extension
                $FileType		= $_FILES['mFile']['type']; //file type
                //$FileSize		= $_FILES['mFile']["size"]; //file size
                $RandNumber   		= rand(0, 99999); //Random number to make each filename unique.
                //$uploaded_date		= date("Y-m-d H:i:s");
                if ($foto !== '') {
                    @unlink('assets/img/journal/'.$foto);
                }
                switch(strtolower($FileType))
                {
                        //allowed file types
//                        case 'image/png': //png file
//                        case 'image/gif': //gif file 
//                        case 'image/jpeg': //jpeg file
                        case 'application/pdf': //PDF file
//                        case 'application/msword': //ms word file
//                        case 'application/vnd.ms-excel': //ms excel file
//                        case 'application/x-zip-compressed': //zip file
//                        case 'text/plain': //text file
//                        case 'text/html': //html file
                                break;
                        default:
                                die('Unsupported File!'); //output error
                }


                //File Title will be used as new File name
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($data_array['judul']));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('tb_journal', array('file' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        die(json_encode($result));
        
    }
    
    /*KEMAHASISWAAN*/
    function get_list_kemahasiswaan($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_kemhsan where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_kemahasiswaan() {
        $id = post_safe('id');
        $UploadDirectory	= 'assets/img/kemahasiswaan/'; //Upload Directory, ends with slash & make sure folder exist
        $NewFileName= "";
        $data_array = array(
            'judul' => post_safe('judul'),
            'isi' => post_safe('isi_kemahasiswaan'),
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        //die($UploadDirectory);
            // replace with your mysql database details
        if (!@file_exists($UploadDirectory)) {
                //destination folder does not exist
                die('No upload directory');
        }
        if ($id === '') {
            $this->db->insert('tb_kemhsan', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_kemhsan', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        if(isset($_FILES['mFile']['name'])) {

                $foto               = post_safe('gambar');
                $FileName           = strtolower($_FILES['mFile']['name']); //uploaded file name
                $FileTitle		= $FileName;
                $ImageExt		= substr($FileName, strrpos($FileName, '.')); //file extension
                $FileType		= $_FILES['mFile']['type']; //file type
                //$FileSize		= $_FILES['mFile']["size"]; //file size
                $RandNumber   		= rand(0, 99999); //Random number to make each filename unique.
                //$uploaded_date		= date("Y-m-d H:i:s");
                if ($foto !== '') {
                    @unlink('assets/img/kemahasiswaan/'.$foto);
                }
                switch(strtolower($FileType))
                {
                        //allowed file types
                        case 'image/png': //png file
                        case 'image/gif': //gif file 
                        case 'image/jpeg': //jpeg file
//                        case 'application/pdf': //PDF file
//                        case 'application/msword': //ms word file
//                        case 'application/vnd.ms-excel': //ms excel file
//                        case 'application/x-zip-compressed': //zip file
//                        case 'text/plain': //text file
//                        case 'text/html': //html file
                                break;
                        default:
                                die('Unsupported File!'); //output error
                }


                //File Title will be used as new File name
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($data_array['judul']));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('tb_kemhsan', array('gambar' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        die(json_encode($result));
        
    }
    
    function change_password() {
        $data_post = array(
            'passlama' => post_safe('passlama'),
            'passbaru' => post_safe('passbaru'),
            'ulangipass' => post_safe('ulangipass')
        );
        
        $check = $this->db->get_where('tb_users', array('id' => $this->session->userdata('id_user'), 'password' => md5($data_post['passlama'])))->num_rows();
        if ($check === 0) {
            $result['status'] = FALSE;
            $result['message']= 'Password lama yang anda masukkan salah !';
        } else {
            $this->db->where('id', $this->session->userdata('id_user'));
            $this->db->update('tb_users', array('password' => md5($data_post['passbaru'])));
            $result['status'] = TRUE;
            $result['message']= 'Password barhasil diubah !';
        }
        return $result;
    }
    
    function get_list_info_pendaftaran($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_info_pendaftaran where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_info_pendaftaran() {
        $data_array = array(
            'id' => post_safe('id'),
            'judul' => post_safe('nama'),
            'keterangan' => post_safe('isi_keterangan')
        );
        
        if ($data_array['id'] === '') {
            $this->db->insert('tb_info_pendaftaran', $data_array);
            $result['act'] = 'add';
        } else {
            $this->db->where('id', $data_array['id']);
            $this->db->update('tb_info_pendaftaran', $data_array);
            $result['act'] = 'edit';
        }
        return $result;
    }
    
    function get_list_pmb($limit, $start, $search) {
        $limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and p.id = '".$search['id']."'";
        }
        if ($search['awal'] !== '' and $search['akhir'] !== '') {
            $q.=" and date(p.waktu_daftar) between '".$search['awal']."' and '".$search['akhir']."'";
        }
        if ($search['no_daftar'] !== '') {
            $q.=" and p.no_pendaftaran like '%".$search['no_daftar']."%'";
        }
        if ($search['nama'] !== '') {
            $q.=" and p.nama_lengkap like '%".$search['nama']."%'";
        }
        if ($search['pilihan1'] !== '') {
            $q.=" and p.prodi_pil_1 = '".$search['pilihan1']."'";
        }
        if ($search['pilihan2'] !== '') {
            $q.=" and p.prodi_pil_2 = '".$search['pilihan2']."'";
        }
        if ($search['ta'] !== '') {
            $q.=" and p.tahun_ajaran = '".$search['ta']."'";
        }
        if ($start !== NULL) {
            $limitation =" limit $start , $limit";
        }
        
        $sql = "select p.*, pr.`link` as prodi1, pr2.`link` as prodi2,
            date(waktu_daftar) as tanggal_daftar
            from tb_pendaftaran p
            left join tb_prodi pr on (p.prodi_pil_1 = pr.id) 
            left join tb_prodi pr2 on (p.prodi_pil_2 = pr2.id)
            where p.id is not NULL $q order by p.id desc";
        
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function get_tahun_ajaran_from_daftar() {
        $sql = "select tahun_ajaran as ta from tb_pendaftaran group by tahun_ajaran";
        return $this->db->query($sql);
    }
    
    /*SAMBUTAN*/
    function get_list_sambutans($limit, $start, $search) {
        //$limitation = null; 
        $q = NULL;
        if ($search['id'] !== '') {
            $q.=" and id = '".$search['id']."'";
        }
        $limitation =" limit $start , $limit";
        
        $sql = "select * from tb_sambutan where id is not NULL $q order by id desc";
        $query = $this->db->query($sql.$limitation);
        //echo $sql . $limitation;
        $queryAll = $this->db->query($sql);
        $data['data'] = $query->result();
        $data['jumlah'] = $queryAll->num_rows();
        return $data;
    }
    
    function save_sambutan() {
        $id = post_safe('id');
        $UploadDirectory	= 'assets/img/profiles/'; //Upload Directory, ends with slash & make sure folder exist
        $NewFileName= "";
        $data_array = array(
            'judul' => post_safe('judul'),
            'isi' => post_safe('isi_sambutan'),
            'link' => post_safe('nama')
            //'gambar' => (!empty(strtolower($_FILES['mFile']['name']))?strtolower($_FILES['mFile']['name']):'')
        );
        //die($UploadDirectory);
            // replace with your mysql database details
        if (!@file_exists($UploadDirectory)) {
                //destination folder does not exist
                die('No upload directory');
        }
        if ($id === '') {
            $this->db->insert('tb_sambutan', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('tb_sambutan', $data_array);
            $result['act'] = 'edit';
            $result['id'] = $id;
        }
        if(isset($_FILES['mFile']['name'])) {

                $foto               = post_safe('gambar');
                $FileName           = strtolower($_FILES['mFile']['name']); //uploaded file name
                $FileTitle		= $FileName;
                $ImageExt		= substr($FileName, strrpos($FileName, '.')); //file extension
                $FileType		= $_FILES['mFile']['type']; //file type
                //$FileSize		= $_FILES['mFile']["size"]; //file size
                $RandNumber   		= rand(0, 99999); //Random number to make each filename unique.
                //$uploaded_date		= date("Y-m-d H:i:s");
                if ($foto !== '') {
                    @unlink('assets/img/profiles/'.$foto);
                }
                switch(strtolower($FileType))
                {
                        //allowed file types
                        case 'image/png': //png file
                        case 'image/gif': //gif file 
                        case 'image/jpeg': //jpeg file
//                        case 'application/pdf': //PDF file
//                        case 'application/msword': //ms word file
//                        case 'application/vnd.ms-excel': //ms excel file
//                        case 'application/x-zip-compressed': //zip file
//                        case 'text/plain': //text file
//                        case 'text/html': //html file
                                break;
                        default:
                                die('Unsupported File!'); //output error
                }


                //File Title will be used as new File name
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($data_array['judul']));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('tb_sambutan', array('gambar' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        die(json_encode($result));
        
    }
    
    function get_data_config() {
        $sql = "select * from tb_ta_aktif";
        return $this->db->query($sql);
    }
    
    function save_config() {
        $data = array(
            'tahun' => post_safe('tahun'),
            'form_pmdk' => post_safe('aktif_pmdk'),
            'form_sumb' => post_safe('aktif_sumb'),
        );
        $this->db->update('tb_ta_aktif', $data);
        return TRUE;
    }
}