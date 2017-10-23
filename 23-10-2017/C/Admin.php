<?php
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

