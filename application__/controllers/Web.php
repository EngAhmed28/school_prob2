<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $data["content"]="fe/home";
        $this->load->view('index1',$data);
    }

    public function home_data()
    {

        $data["content"]="fe/home_data";
        $this->load->view('index',$data);
    }

    public function login(){
if ($this->input->post("login")){
    echo($this->input->post("user_name"));

    $userdata= authentication($this->input->post("user_name"),$this->input->post("password"));

    if ($userdata !=''){
        $userdata['is_logged_in']=true;
        $this->session->set_userdata($userdata);
        redirect('web/maindata');
    }else{
        message('error','خطاء فى بيانات الدخول ');
    }

}

        $data["content"]="fe/login";
        $this->load->view('index',$data);
    }
   /* public function registration(){
        if ($this->input->post("register")){
            $data["year"]=$this->input->post("year");
            $data["reg_date"]=time();
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
            $school_id_fk=insertrecords("schools",$data);
            $user["name"]=$this->input->post("manager_name");
            $user["user_email"]=$this->input->post("school_email");
            $user["user_type"]="teacher";
            $user["school_id_fk"]=$school_id_fk;
            $user["user_name"]=$this->input->post("user_name");
            $user["password"]=salt($this->input->post("password"));
            insertrecords("users",$user);
            $message="شكرا للتسجيل فى قائمة المشكلات اليك بينات التسجيل الخاصة بك وهى";
            $message.=" اسم المستخدم   ".$this->input->post("user_name");
            $message.="  كلمة المرور   ".$this->input->post("password");
         //  sendEmailamessage("info@moe-sa.org","بيانات التسجيل",$this->input->post("school_email"),"بينات التسجيل فى قائمة المشكلات",$message);
           redirect("web/login");
        }


        $data["content"]="fe/registration";
        $this->load->view('index',$data);

    }*/
 public function maindata(){
  if($this->session->has_userdata('is_logged_in')==0){redirect('web/login');}

    if ($this->input->post('save')){
        $data["school_id_fk"]=$this->session->userdata("school_id_fk");
        $data["stage_id_fk"]=$this->input->post("stage_id_fk");
        $data["student_identity"]=($this->input->post("student_identity"))?$this->input->post("student_identity"):rand();
       // testcode($data);
        $studentidpk=insertrecords("students",$data);
        $arr=array("student_id_fk"=>$studentidpk,"stage_id_fk"=>$this->input->post("stage_id_fk"));
        $this->session->set_userdata($arr);
        for ($x = 1; $x <12; $x++) {
            $pol["question_id_fk"]=$this->input->post("question_id_fk$x");
            $pol["answer_id_fk"]=$this->input->post("answer_id_fk$x");
            $pol["school_id_fk"]=$this->session->userdata("school_id_fk");
            $pol["stage_id_fk"]=$this->session->userdata("stage_id_fk");
            $pol["created_at"]=time();
            $pol["student_id_fk"]=$this->session->userdata("student_id_fk");
            $pol["answer_text"]=0;
            insertrecords("poll",$pol);
        }

       redirect("web/quiz");
    }
    $data["content"]="fe/maindata";
    $this->load->view('index',$data);
}
    public function quiz(){

       if ($this->input->post("save")){
         // testcode($_POST);
           for ($x = 12; $x <103; $x++) {
               $data["question_id_fk"]=$this->input->post("question_id_fk$x");
               $data["answer_id_fk"]=$this->input->post("answer_id_fk$x");
               $data["school_id_fk"]=$this->session->userdata("school_id_fk");
               $data["stage_id_fk"]=$this->session->userdata("stage_id_fk");
               $data["created_at"]=time();
               $data["student_id_fk"]=$this->session->userdata("student_id_fk");
               $data["answer_text"]=0;
               insertrecords("poll",$data);
           }
           redirect("web/finalquize");
       }
        $data["content"]="fe/quiz";
        $this->load->view('index',$data);


     }
     public function finalquize(){
        if ($this->input->post("save")){
          //  testcode($_POST);
            for ($i=103;$i<113;$i++){
                if ($i==103){
                    $data["question_id_fk"]=$this->input->post("question_id_fk$i");
                    $data["answer_id_fk"]=0;
                    $data["answer_text"]=($this->input->post("fail"))?serialize($this->input->post("fail")):0;

                }else{
                    $data["question_id_fk"]=$this->input->post("question_id_fk$i");
                    $data["answer_id_fk"]=$this->input->post("answer_id_fk$i");
                    $data["answer_text"]=($this->input->post("answer_text$i"))?$this->input->post("answer_text$i"):0;

                }
                $data["school_id_fk"]=$this->session->userdata("school_id_fk");
                $data["stage_id_fk"]=$this->session->userdata("stage_id_fk");
                $data["student_id_fk"]=$this->session->userdata("student_id_fk");
                $data["created_at"]=time();
                insertrecords("poll",$data);
            }
            session_destroy();
            redirect("web/");

        }
         $data["content"]="fe/finalquize";
         $this->load->view('index',$data);

     }

public function test(){
echo serialize(array(1=>"قوي",2=>"متوسط",3=>"ضعيف",4=>"لايوجد"));
 }
 
 
 
 
   public function registration(){
        if($this->input->post("store_id")){
              $this->load->model("Mainmodel"); 
             $data['loaded'] =$this->Mainmodel->get_maktab($this->input->post("store_id"));
           $this->load->view('fe/load',$data);
        }else{
            if ($this->input->post("register")){
            $data["year"]=$this->input->post("year");
            $data["reg_date"]=time();
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
            $school_id_fk=insertrecords("schools",$data);
            $user["name"]=$this->input->post("manager_name");
            $user["user_email"]=$this->input->post("school_email");
            $user["user_type"]="teacher";
            $user["school_id_fk"]=$school_id_fk;
            $user["user_name"]=$this->input->post("user_name");
            $user["password"]=salt($this->input->post("password"));
            insertrecords("users",$user);
            $message="شكرا للتسجيل فى قائمة المشكلات اليك بينات التسجيل الخاصة بك وهى";
            $message.=" اسم المستخدم   ".$this->input->post("user_name");
            $message.="  كلمة المرور   ".$this->input->post("password");
         //  sendEmailamessage("info@moe-sa.org","بيانات التسجيل",$this->input->post("school_email"),"بينات التسجيل فى قائمة المشكلات",$message);
           redirect("web/login");
        }


        $data["content"]="fe/registration";
        $this->load->view('index',$data);

            
        }
        
    }
 
 
 
}
