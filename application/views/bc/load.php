<?php
if(isset($_POST['school_id'])){
   
    
             $school_id_fk=explode('/',$this->input->post("school_id"));
            $level_id=$school_id_fk[1];
    
    if($level_id == "prep"){
        $level_name= "متوسط";
        
    }elseif($level_id == "secondary"){
        $level_name= "ثانوي";
    }
    
    
    
    
    echo '<option value="all">--قم بالإختيار--</option>';
     echo '<option value="'.$level_id.'">'.$level_name.'</option>';die;

}
?>
<?php
if(isset($_POST['level_id'])){
    echo '<option value="all">--قم بالإختيار--</option>';
    if(isset($loaded))
        for($x = 0 ; $x < count($loaded) ; $x++)
            echo '<option value="'.$loaded[$x]->stage_id_pk.'">'.$loaded[$x]->stage_name.'</option>';die;
}

?>
