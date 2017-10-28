<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {parent::__construct();
    }

    public function index()
	{
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}

        $data["content"]="bc/home";

		$this->load->view('index',$data);
	}

	public function login(){
        if($this->session->has_userdata('is_logged_in')==1){redirect('admin/index');}
        if ($this->input->post("login")){
            $userdata=authentication($this->input->post("user_name"),$this->input->post("password"));

            if ($userdata !=''){
                $userdata['is_logged_in']=true;
                $this->session->set_userdata($userdata);
                redirect('admin/index');
            }else{
                message('error','خطاء فى بيانات الدخول ');
            }

        }
        $this->load->view('bc/login');

    }
    public function signout(){
	    session_destroy();
	    redirect("admin/login");
    }
	public function questions(){
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}

        if ($this->input->post("save")){
           // testcode($_POST);
            $data["questation_title"]=$this->input->post("questation_title");
            insertrecords("questions",$data);
            message("success","تم الحفظ بنجاح");
        }
        //$data["content"]="bc/questation";
        $data["content"]="bc/view";
        $this->load->view('index',$data);
    }



    public function update_school($id,$id_users){
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}
        if ($this->input->post("update")){


            $data["year"]=$this->input->post("year");

            $data["area_id_fk"]=$this->input->post("area_id_fk");
            $data["governorate"]=$this->input->post("governorate");
            $data["learning_office"]=$this->input->post("learning_office");
            $data["school_type"]=$this->input->post("school_type");
            $data["school_name"]=$this->input->post("school_name");
            $data["ministry_numper"]=$this->input->post("ministry_numper");
            $data["school_email"]=$this->input->post("school_email");
            $data["manager_name"]=$this->input->post("manager_name");
            $data["manager_phone"]=$this->input->post("manager_phone");
            $data["first_stage"]=$this->input->post("first_stage");
            $data["secound_stage"]=$this->input->post("secound_stage");
            $data["thired_stage"]=$this->input->post("thired_stage");

            updaterecord($data,"schools","school_id_fk",$this->input->post("school_id_pk"));

            redirect("admin/allschool");

            message("success","تم التعديل بنجاح");
        }

        $data['result']=  $this->Mainmodel->update_school($id);
        $data["content"]="bc/school_update";
        $this->load->view('index',$data);
    }
    public function delete_school($school_id,$user_id){
        
         deleterecorde('school_id_pk',$school_id,'schools');
         deleterecorde('user_id_pk',$user_id,'users');
         message("success","تمت عملية الحذف بنجاح");
         redirect("admin/allschool");

        
    }


    public function chartstatics(){
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}

        $data["content"]="bc/schoolstatics";
        $this->load->view('index',$data);

    } 
       public function cheetstatics(){
        $data["content"]="bc/cheetstatics";
        $this->load->view('index',$data);

    }
    public function loadreasult(){
        $this->load->view("bc/request/loadresult");

    }
public function loadquizreport(){
     $data["results"]=$this->Mainmodel->loadquizreport();
    $this->load->view("bc/request/loadquizreport",$data);

}
public function allschool(){
    $data["content"]="bc/allschool";

    $this->load->view('index',$data);

}
public function schoolstatics(){
    $data["content"]="bc/schoolstatics";
    $this->load->view('index',$data);

}

    public function suspend_articles($id, $clas ,$id_users)
    {


        $this->Mainmodel->suspend($id,$clas,$id_users);
        //if ($clas == 'danger') {
            //   $this->message('success', 'المدرسة نشطة');
        //}else{
        //    $this->message('danger', 'المدرسة غير نشطة');
        redirect('admin/allschool');
    }





public function getallstages(){
    $this->load->view("bc/request/getallstages");

}

public function schoolreports(){
    $data["results"]=$this->Mainmodel->schoolreports();
   // print_r($data['results']);
   // die;
    $this->load->view("bc/request/schoolreports",$data);

}

public function fullreport(){
   // echo"<pre>";
   // print_r($_POST);
 //   die;

    if( $_POST["school_id_fk"] == "all" && $_POST["stage_id_fk"] == "all" && $_POST["school_type"] == "all" && $_POST["question_id_fk"] == "all" && $_POST['answer_id_fk']== "all"){
            $data["results"]=$this->Mainmodel->schoolreports2();
            $this->load->view("bc/request/fullreport",$data);
       }else{
          $data["results"]=$this->Mainmodel->schoolreports();
           $this->load->view("bc/request/fullreport",$data);
        //   echo"<pre>";
        //  print_r( $data["results"]);
        
        
          }


}
    public function edit_profile($id){
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}

        if ($this->input->post("save")){
            // testcode($_POST);
             //die;
             $id = $this->input->post("id");
            $data["user_email"]=$this->input->post("user_email");
            $data['password']= salt($this->input->post("password"));
            updaterecord($data,"users","user_id_pk",$id);
            message("success","تم تعديل بيانات المستخدم بنجاح");
            redirect("admin");
        }
        $data["content"]="bc/users";
        $this->load->view('index',$data);
    }


    //--------------------------------ahmed------------------//




    public function add_areas(){
        $this->load->model('Area');
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}
        if ($this->input->post("save")){
            $data["name"]=$this->input->post("area");
            $data["from_id_fk"]=0;
            insertrecords("areas",$data);
            message("success","تم الحفظ بنجاح");
        }
        $data["content"]="bc/areas";
        $this->load->view('index',$data);
    }


    public function update_areas($id){
        $this->load->model('Area');
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}
        if ($this->input->post("update")){
            $data["name"]=$this->input->post("area");
            $this->Area->update($id);
            redirect("admin/add_areas");
            message("success","تم التعديل بنجاح");
        }
        $data['results']=  $this->Area->select();
        $data["content"]="bc/areas";
        $this->load->view('index',$data);
    }

    public function delete_areas($id){
        deleterecorde('id',$id,'areas');
        message("success","تمت عملية الحذف بنجاح");
        redirect("admin/add_areas");


    }



    public function add_office(){
        $this->load->model('Area');
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}
        if ($this->input->post("save")){
            $data["from_id_fk"]=$this->input->post("area_id");
            $data["name"]=$this->input->post("office");
            insertrecords("areas",$data);
            message("success","تم الحفظ بنجاح");
        }
        $data['records']=  $this->Area->select_all();
        $data["content"]="bc/office";
        $this->load->view('index',$data);
    }




    public function update_office($id){
        $this->load->model('Area');
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}
        if ($this->input->post("update")){
            $this->Area->update_office($id);
            redirect("admin/add_office");
            message("success","تم التعديل بنجاح");
        }
        $data['results']=  $this->Area->getById($id);
        $data['areas']=  $this->Area->select_all();
        $data["content"]="bc/office";
        $this->load->view('index',$data);
    }

    public function delete_office($id){
        deleterecorde('id',$id,'areas');
        message("success","تمت عملية الحذف بنجاح");
        redirect("admin/add_office");


    }


    //------------------------------------24-10-2017--------------------------//


    public function all_schools_report()
    {
        $this->load->model('Difined_model');
        if($this->input->post("area")){
         $data['areas'] = $this->Difined_model->select_search_key('areas','from_id_fk',$this->input->post("area"));
         $this->load->view("bc/reports/get_office_data",$data);
        }elseif($this->input->post("office")){
        $data['schools'] = $this->Difined_model->select_search_key('schools','learning_office',$this->input->post("office"));
        $this->load->view("bc/reports/get_school_data",$data);
        }elseif( $this->input->post("school_id")){
           $data['records'] = $this->Difined_model->select_search_key('students','school_id_fk',$this->input->post("school_id"));
            $data['school_name'] = $this->Difined_model->select_search_key('schools','school_id_pk',$this->input->post("school_id"));
            $data['office'] = $this->Difined_model->select_search_key('areas','id',$this->input->post("office_id"));
            $data['area'] = $this->Difined_model->select_search_key('areas','id',$this->input->post("area_id"));
            $this->load->view("bc/reports/get_data",$data);
        }else{

        $data["content"]="bc/reports/all_schools_report";
        $this->load->view('index', $data);
      }
    }


    public function load(){
        $this->load->model('Difined_model');
        if($this->input->post("area")){

          $data['areas'] = $this->Difined_model-> select_search_key('areas','from_id_fk',$this->input->post("area"));
          echo'<pre>';
            var_dump($data['areas']);
            echo'</pre>';
           // $this->load->view("admin/reports/get_office_data",$data);
        }

        $this->load->model("Patients_reservations");
        if($this->input->post("dep_id")){
            $dep_id=$this->input->post("dep_id");

            $data_load["doctors"]=$this->Patients_reservations->get_dep_doc($dep_id);
            $this->load->view("admin/patients_reservations/load",$data_load);
        }
        if($this->input->post("nat_id")){
            $nat_id=$this->input->post("nat_id");
            $data_load["patient"]=$this->Patients_reservations->get_pat_name_2($nat_id);
            $this->load->view("admin/patients_reservations/load2",$data_load);
        }
        if($this->input->post("reservations_time") && $this->input->post("doctor_id") && $this->input->post("reservations_date")){
            $reservations_time=$this->input->post("reservations_time");
            $reservations_date=$this->input->post("reservations_date");
            $doctor_id=$this->input->post("doctor_id");
            $data_load['chek']=$this->Patients_reservations->time_chek($reservations_time,$doctor_id,$reservations_date);
            // $this->test($this->db->last_query());
            $this->load->view("admin/patients_reservations/load3",$data_load);
        }
    }



   /* public function all_schools_report(){
        $this->load->model('Area');
        if($this->session->has_userdata('is_logged_in')==0){redirect('admin/login');}
        if ($this->input->post("save")){
            $data["from_id_fk"]=$this->input->post("area_id");
            $data["name"]=$this->input->post("office");
            insertrecords("areas",$data);
            message("success","تم الحفظ بنجاح");
        }
        $data['records']=  $this->Area->select_all();
        $data["content"]="bc/office";
        $this->load->view('index',$data);
    }*/
    
    public  function tester(){
        $this->load->model("Difined_model");

        if($this->input->post("admin_num")){
            var_dump($_POST);

            $dataa['sub']=$this->Difined_model->select_search_key("areas","from_id_fk =",$this->input->post("admin_num"));
            $this->load->view('bc/my_test/load',$dataa);
        }



        $data['all_areas']=$this->Difined_model->select_search_key("areas","from_id_fk =","0");
        $data["content"]="bc/my_test/test";
        $this->load->view('index',$data);  
    }

    
    
    
    
}// END CLASS 
