<?php
/**
 * @param array $data
 */
  function testcode($data=array()){

    echo "<pre>";

    print_r($data);

    echo "</pre>";

    die;

}

/**
 * @param null $title
 * @param null $description
 * @param null $keywords
 * @param null $author
 * @return mixed
 */
  function seo($title=null,$description=null,$keywords=null,$author=null){
    $data['title']=$title;
    $data['description']=$description;
    $data['keywords']=$keywords;
    $data['author']=$author;
    return $data;

}

/**
 * @param $from
 * @param $name
 * @param $to
 * @param $subject
 * @param $message
 * @return bool|void
 */
  function sendEmailamessage($from,$name,$to,$subject,$message)
{

    $CI =& get_instance();
    $CI->load->library('email');
    $CI->email->clear(TRUE);
    $CI->email->from($from, $name);
    $CI->email->to($to);
    ///$CI->email->reply_to('info@tatawahail.org'); //User email submited in form
    $CI->email->subject($subject);
    $CI->email->message($message);
    if(!$CI->email->send())
    {
        return show_error($CI->email->print_debugger());
    }
    else
    {
        return true;
    }


}

/**
 * @param $data
 */
  function thumb($data)

{
    $CI =& get_instance();
    $config['image_library'] = 'gd2';

    $config['source_image'] =$data['full_path'];

    $config['new_image'] = 'public/uploads/thumbs/'.$data['file_name'];

    $config['create_thumb'] = TRUE;

    $config['maintain_ratio'] = TRUE;

    $config['thumb_marker']='';

    $config['width'] = 275;

    $config['height'] = 250;

    $CI->load->library('image_lib', $config);
    $CI->image_lib->resize();

}

function watermark($data)

{
    $CI =& get_instance();
    $config['image_library'] = 'gd2';
    $config['source_image'] = $data['full_path'];
    $config['wm_text'] = 'Copyright 2006 - John Doe';
    $config['wm_type'] = 'text';
    $config['wm_font_path'] = './system/fonts/texb.ttf';
    $config['wm_font_size'] = '16';
    $config['wm_font_color'] = 'ffffff';
    $config['wm_vrt_alignment'] = 'bottom';
    $config['wm_hor_alignment'] = 'center';
    $config['wm_padding'] = '20';
    $CI->load->library('image_lib', $config);
    $CI->image_lib->watermark();

}

/**
 * @param $file_name
 * @return bool
 */
  function upload_image($file_name){
      $CI =& get_instance();

    $config['upload_path'] = 'public/uploads/images';

    $config['allowed_types'] = 'gif|Gif|ico|ICO|jpg|JPG|jpeg|JPEG|BNG|png|PNG|bmp|BMP|WMV|wmv|MP3|mp3|FLV|flv|SWF|swf';

    $config['max_size']    = '1024*8';

    $config['encrypt_name']=true;

      $CI->load->library('upload',$config);

    if(!  $CI->upload->do_upload($file_name)){

        return  false;

    }else{

        $datafile =  $CI->upload->data();

       thumb($datafile);
        watermark($datafile);
        return  $datafile['file_name'];


    }

    //  unlink($datafile['full_path']);

}

/**
 * @param $type
 * @param $text
 * @return mixed
 */
  function message($type,$text){
     $CI =& get_instance();
     $CI->load->library("session");
    if($type =='success') {
        return  $CI->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-check"></i> تم!</h4>'.$text.'</div>');
    }elseif($type=='wiring'){

        return $CI->session->set_flashdata('message','   <div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-warning"></i> تنبية!</h4> '.$text.'</div>');

    }elseif($type=='error'){

        return $CI->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h4><i class="icon fa fa-ban"></i> تحذير!</h4>'.$text.'</div>');

    }

}

/**
 * @param $type
 * @param $data
 */
  function imagepath($type,$data){
     if ($type=="image"){
         echo base_url("public/uploads/images/").$data;
     }else{
         echo base_url("public/uploads/thumbs/").$data;

     }

}
//database
/**
 * @param $coulmn
 * @param $table
 * @param $Conditions_arr
 * @param $order
 * @param $ordertype
 * @return result
 */
   function selectrecords($coulmn,$table,$where=array(),$order=false,$ordertype=false,$jointable=false,$joincondition=false,$groupby=false,$resultarray=false){
       $CI =& get_instance();
       $CI->load->database();
       $CI->db->select($coulmn)->from($table);
       if ($jointable){
           $CI->db->join($jointable,$joincondition);
       }
       if (is_array($where)){
           $CI->db->where($where);
       }
       if ($order){
           $CI->db->order_by($order,$ordertype);

       }   if ($groupby){
           $CI->db->group_by($groupby);

       }
       if ($resultarray==1){
           return $CI->db->get()->result_array();

       }
      return $CI->db->get()->result();

   }

/**
 * @param $data
 * @param $table
 * @return true or false
 */
   function insertrecords($table,$data){
       $CI =& get_instance();
       $CI->load->database();
       try{
           $CI->db->insert($table,$data);
           return $CI->db->insert_id();

       }catch (Exception $e){
           return false;
       }
   }

/**
 * @param $data
 * @param $table
 * @param $coulmntitle
 * @param $id
 * @return true or false
 */
   function updaterecord($data,$table,$coulmntitle,$id){
       $CI =& get_instance();
       $CI->load->database();
       $CI->db->where($coulmntitle, $id);
       return $CI->db->update($table, $data);
   }
/**
 * @param $idname
 * @param $id
 * @param $table
 * @return row_array
 */
   function getrecordbyid($condition=array(),$table){
       $CI =& get_instance();
       $CI->load->database();
       return $CI->db->get_where($table,$condition)->row_array();
   }
/**
 * @param $coulmn
 * @param $recordid
 * @param $table
 * @return true or false
 */
    function deleterecorde($coulmn,$recordid,$table){
        $CI =& get_instance();
        $CI->load->database();
        $CI->db->where($coulmn,$recordid);
       return $CI->db->delete($table);

    }

/**
 * @param $password
 * @return string
 */
    function salt($password){
        $secret='k*jJlrsH:cY]O^Z^/J2)Pz{)qz:+yCa]^+V0S98Zf$sV[c@hKKG07Q{utg%OlODS'.$password;
         return sha1(md5($secret));
    }

/**
 * @param $user
 * @param $pass
 * @return bool
 */
    function authentication($user,$pass){
        $CI =& get_instance();
        $CI->load->database();
        $CI->db->select('*');
        $CI->db->from('users');
        $CI->db->join("schools","schools.school_id_pk=users.school_id_fk","left");
        $CI->db->where('user_name',$user);
        $CI->db->where('password',salt($pass));
        $CI->db->where('status',1);
            $query=$CI->db->get();

            if($query->num_rows()>0){
                return $query->row_array();
            }else{
                return false;
            }
    }

/**
 * @param $maxid
 * @param $where
 * @param $table
 * @return mixed
 */
    function maxrecord($maxid,$where=false,$table){
        $CI =& get_instance();
        $CI->load->database();
        $CI->db->select_max($maxid);
        if ($where){
            $CI->db->where($where);
        }
         return $CI->db->get($table)->row();
    }
    function countrecord($where=false,$table){
        $CI =& get_instance();
        $CI->load->database();
        if ($where){
            $CI->db->where($where);
        }
        echo $CI->db->count_all($table);
    }


