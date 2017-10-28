<?php
public function all_answers_report()
{
    $this->load->model('Difined_model');
    if($_POST['school_id'] ){
        $data['school_name'] = $this->Difined_model->select_search_key('schools','school_id_pk',$this->input->post("school_id"));
        $data['office'] = $this->Difined_model->select_search_key('areas','id',$this->input->post("office_id"));
        $data['area'] = $this->Difined_model->select_search_key('areas','id',$this->input->post("area_id"));
        if($_POST['school_id'] =='all'){
            $this->load->view("bc/reports/get_all_answers_report_data_byall_schools",$data);
        }else{
            $this->load->view("bc/reports/get_all_answers_report_data",$data);
        }

    }else{
        $data["content"]="bc/reports/all_answers_report";
        $this->load->view('index', $data);
    }
}