<?php

class Area extends CI_Model
 {
    public function __construct()
    {
        parent:: __construct();
    }
    public  function record_count(){
        return $this->db->count_all("area");

    }

    public  function  insert(){
        $data['name']=$this->input->post('name');
        $data['from_id_fk']=0;
        $this->db->insert('areas',$data);
    }
    //////////////////////////
///////////selecting data//////////////////
    public function select(){
        $this->db->select('*');
        $this->db->from('areas');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

///////update/////////
    public function getById($id){
        $h = $this->db->get_where('areas', array('id'=>$id));
        return $h->row_array();
    }


    public function select_all(){
        $this->db->select('*');
        $this->db->from('areas');
        $this->db->where("from_id_fk",0);
        $query = $this->db->get();
        $query_result=$query->result();
        if ($query->num_rows() > 0) {
            $i=0;
            foreach ($query_result as $row) {
                $query_result[$i]->office = $this->get_office($row->id);
                $i++;
            }
            return $query_result;
        }
        return false;
    }


    public function get_office($id){
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


    public function update_office($id){
        $update = array(
            'from_id_fk'=>$this->input->post('area_id'),
            'name'=>$this->input->post('office')
            );

        $this->db->where('id', $id);
        if($this->db->update('areas',$update)) {
            return true;
        }else{
            return false;
        }
    }
 }