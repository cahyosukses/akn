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
        $UploadDirectory	= 'assets/images/projects/'; //Upload Directory, ends with slash & make sure folder exist
        $NewFileName= "";
        $data_array = array(
            'judul' => post_safe('judul'),
            'berlaku' => date2mysql(post_safe('berlaku')),
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
            $this->db->insert('berita', $data_array);
            $result['act'] = 'add';
            $result['id'] = $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('berita', $data_array);
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
                    @unlink('assets/images/projects/'.$foto);
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
                $NewFileName = preg_replace(array('/\s/', '/\.[\.]+/', '/[^\w_\.\-]/'), array('_', '.', ''), strtolower($FileTitle));
                $NewFileName = $NewFileName.'_'.$RandNumber.$ImageExt;
           //Rename and save uploded file to destination folder.
           if(move_uploaded_file($_FILES['mFile']["tmp_name"], $UploadDirectory . $NewFileName ))
           {
                $this->db->where('id', $result['id']);
                $this->db->update('berita', array('gambar' => $NewFileName));
           } else {
                die('error uploading File!');
           }
        }
        die(json_encode($result));
        
    } 
    
}