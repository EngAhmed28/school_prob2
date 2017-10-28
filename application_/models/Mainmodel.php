<?php
/**
 * Created by PhpStorm.
 * User: hesham
 * Date: 9/17/2017
 * Time: 4:40 AM
 */

class Mainmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function loadquizreport(){
        $this->db->select("questation_id_pk,questation_title");
        $this->db->from("questions")->join("poll","questation_id_pk=question_id_fk");
       if ($this->input->post("question_id_fk")!="all"){
           $this->db->where("question_id_fk",$this->input->post("question_id_fk"));

       }
        if ($this->input->post("stage_id_fk")!="all"){
            $this->db->where("stage_id_fk",$this->input->post("stage_id_fk"));
        }
        $this->db->where("school_id_fk",$this->session->userdata("school_id_fk"));
        if ($this->input->post("answer_id_fk")!="all"){
           $this->db->where("answer_id_fk",$this->input->post("answer_id_fk"));
        }
        
        $this->db->group_by("questation_id_pk");
         return $this->db->get()->result_array();

    }

    public function getcountquize($quizid){
        $this->db->select("count(answer_id_fk)");
        $this->db->from("questions")->join("poll","questation_id_pk=question_id_fk");
            $this->db->where("question_id_fk",$quizid);
        if ($this->input->post("stage_id_fk")!="all"){
            $this->db->where("stage_id_fk",$this->input->post("stage_id_fk"));
        }
        $this->db->where("school_id_fk",$this->session->userdata("school_id_fk"));
        $this->db->where("answer_id_fk",$this->input->post("answer_id_fk"));
        return $this->db->get()->row_array();

    }
    public function countstudent($quizid){
        $type=explode('/',$this->input->post("school_id_fk"));
        $id_school=$type[0];

        $this->db->select("count(answer_id_fk)");
        $this->db->from("questions")->join("poll","questation_id_pk=question_id_fk");
            $this->db->where("question_id_fk",$quizid);
        if ($this->input->post("stage_id_fk")!="all"){
            $this->db->where("stage_id_fk",$this->input->post("stage_id_fk"));
        }
        $this->db->where("school_id_fk",$id_school);
        $this->db->where("answer_id_fk",$this->input->post("answer_id_fk"));
        return $this->db->get()->row_array();

    }


    public function schoolreports(){
       $this->db->select('*');
       $this->db->from('poll'); 
        $this->db->join("questions","questions.questation_id_pk=poll.question_id_fk");
        if ($this->input->post("question_id_fk")!="all"){
        $this->db->where("poll.question_id_fk",$this->input->post("question_id_fk"));
        }
        
         if ($this->input->post("stage_id_fk")!="all"){
            $this->db->where("poll.stage_id_fk",$this->input->post("stage_id_fk"));
        }
           if ($this->input->post("school_id_fk")!='all'){
            $school_id_fk=explode('/',$this->input->post("school_id_fk"));
            $school_id_fk=$school_id_fk[0];
            $this->db->where("poll.school_id_fk",$school_id_fk);
        }
        
         if($this->input->post("answer_id_fk")!="all"){
           $this->db->where("poll.answer_id_fk",$this->input->post("answer_id_fk"));
        }
        
       //  if($this->input->post("school_type")!="all"){
         //  $this->db->where("poll.school_type",$this->input->post("school_type"));
        //}
        
        $this->db->group_by("questation_id_pk");
        
        $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {   foreach ($query->result() as $row) {
                 $data[] = $row;
                 }
            return $data;
            }
            else
            {
                return false;
            }
    
    /*
        
        $this->db->select("questation_id_pk,questation_title");
        $this->db->from("questions")->join("poll","questation_id_pk=question_id_fk");
        if ($this->input->post("question_id_fk")!="all"){
            $this->db->where("question_id_fk",$this->input->post("question_id_fk"));

        }
        if ($this->input->post("stage_id_fk")!="all"){
            $this->db->where("stage_id_fk",$this->input->post("stage_id_fk"));
        }
        if ($this->input->post("school_id_fk")!='all'){
            $school_id_fk=explode('/',$this->input->post("school_id_fk"));
            $school_id_fk=$school_id_fk[0];
            $this->db->where("school_id_fk",$school_id_fk);
        }
         //if ($this->input->post("answer_id_fk")!="all"){
           // $this->db->where("answer_id_fk",$this->input->post("answer_id_fk"));
        //}

       $this->db->where("answer_id_fk",$this->input->post("answer_id_fk"));
        $this->db->group_by("questation_id_pk");
        return $this->db->get()->result_array();
       */
    }





       public function schoolreports2(){
       $this->db->select('questions.*');
       $this->db->from('questions'); 
       $this->db->group_by('questions.questation_id_pk');
         $query = $this->db->get(); 
            if($query->num_rows() != 0)
            {   foreach ($query->result() as $row) {
                 $data[] = $row;
                 }
            return $data;
            }
            else
            {
                return false;
            }
         }



    public function getcountforschool($quizid){
        $this->db->select("count(answer_id_fk)");
        $this->db->from("questions")->join("poll","questation_id_pk=question_id_fk");
        $this->db->where("question_id_fk",$quizid);
        if ($this->input->post("stage_id_fk")!="all"){
            $this->db->where("stage_id_fk",$this->input->post("stage_id_fk"));
        }
        if ($this->input->post("school_id_fk")!=='all'){
            $school_id_fk=explode('/',$this->input->post("school_id_fk"));
            $school_id_fk=$school_id_fk[0];
            $this->db->where("school_id_fk",$school_id_fk);
        }
        $this->db->where("answer_id_fk",$this->input->post("answer_id_fk"));
        return $this->db->get()->row_array();

    }

    public function suspend($id,$clas,$id_users)
    {
        if($clas == 'danger')
        {
            $update = array(
                'school_status' => 1
            );
            $update2 = array(
                'status' => 1
            );
        }
        else
        {
            $update = array(
                'school_status' => 0
            );

            $update2 = array(
                'status' => 0
            );
        }

         $this->db->where('school_id_pk', $id);
        if($this->db->update('schools',$update)) {
            $this->db->where('user_id_pk', $id_users);
            $this->db->update('users',$update2);
            return true;
        }else{
            return false;
        }
    }




    public function update_school($id){

        $this->db->select('*');
        $this->db->from('schools');
        $this->db->where("schools.school_id_pk",$id);
        $this->db->join('users','schools.school_id_pk=users.school_id_fk','left');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }// end fun


}