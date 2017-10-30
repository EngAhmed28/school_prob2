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


  /*  public function schoolreports(){
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
    

    }*/


public function get_school_level($id){
    
         $this->db->select('*');
        $this->db->from('stages');
        $this->db->where("satge_type",''.$id.'');

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
}

  public function schoolreports(){
       
        $this->db->select('*');
        $this->db->from('poll'); 
        $this->db->join("questions","questions.questation_id_pk=poll.question_id_fk");
        $this->db->join("stages","stages.stage_id_pk=poll.stage_id_fk");
       
        if ($this->input->post("question_id_fk")!="all"){
        $this->db->where("poll.question_id_fk",$this->input->post("question_id_fk"));
        }
         
       if ($this->input->post("school_type")!="all"){
      
        $this->db->where("stages.satge_type",$this->input->post("school_type"));
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
        /*
        if($this->input->post("school_type")!="all"){
           $this->db->where("stages.satge_type",$this->input->post("school_type"));
        }
        */
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



/*
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

*/



/************************* dina ****************/



    public function update($id)
    {
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
               $this->db->where('school_id_pk=',$id);
                if($this->db->update('schools',$data)) {
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

public function get_maktab($id){
    
        $this->db->select('*');
        $this->db->from('areas');
        $this->db->where("from_id_fk",$id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
}
///////////////////////////////////////////////////


     public function select2(){
        $this->db->select('*');
         $this->db->from('areas');
        $this->db->where("from_id_fk=","0");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
        
            return $data;
        }
      
        return false;
    }
/////////////////////////////////////////


    public function select(){
        $this->db->select('*');
            $this->db->from('areas');
        $this->db->where("from_id_fk!=","0");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[$row->id] = $row;
            }
         
            return $data;
        }
        return false;
    }





    /******************************* dina 28-10-2017**************************/

    public function get_school($id,$id2){

        $this->db->select('*');
        $this->db->from('schools');
        $this->db->where("area_id_fk=",''.$id.'');
        $this->db->where("learning_office=",''.$id2.'');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    public function schoolreports_area_2(){
        $this->db->select('*');
        $this->db->from('poll');
        $this->db->join("questions","questions.questation_id_pk=poll.question_id_fk");
        $this->db->join("schools","schools.school_id_pk=poll.school_id_fk");
        if ($this->input->post("question_id_fk")!= "all"){
            $this->db->where("poll.question_id_fk",$this->input->post("question_id_fk"));
        }
        ////////////////////////////////////////

        if($this->input->post("school_id")!='all_schools'){
            $this->db->where("poll.school_id_fk",$this->input->post("school_id"));
        }
        ///////////////////////////////
        if($this->input->post("answer_id_fk")!="all"){
            $this->db->where("poll.answer_id_fk",$this->input->post("answer_id_fk"));
        }
        ////////////////////////////


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

    ////////////////////////////////////////


    public function schoolreports_area(){

        $this->db->select('*');
        $this->db->from('poll');
        $this->db->join("questions","questions.questation_id_pk=poll.question_id_fk");
        $this->db->join("schools","schools.school_id_pk=poll.school_id_fk");
        if ($this->input->post("question_id_fk")!="all"){
            $this->db->where("poll.question_id_fk",$this->input->post("question_id_fk"));
        }
        ////////////////////////////////////////

        //////////////////////////
        if ($this->input->post("area_id_fk")!=""){

            $this->db->where("schools.area_id_fk",$this->input->post("area_id_fk"));
        }
        //////////////////////
        if ($this->input->post("learning_office")!=""){

            $this->db->where("schools.learning_office",$this->input->post("learning_office"));
        }
        /////////////////////////////
        if ($this->input->post("school_id")!='all'){
            $this->db->where("poll.school_id_fk",$this->input->post("school_id"));
        }
        ///////////////////////////////
        if($this->input->post("answer_id_fk")!="all"){
            $this->db->where("poll.answer_id_fk",$this->input->post("answer_id_fk"));
        }
        ////////////////////////////
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
    }
    ///////////////////////////////////////////////////


}