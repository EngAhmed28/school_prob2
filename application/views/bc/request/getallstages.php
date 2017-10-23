<?php

$type=explode('/',$this->input->post("school_id_fk"));
$type=$type[1];

foreach (selectrecords("stage_id_pk,stage_name",'stages',array("satge_type"=>$type)) as $stage):?>
    <option value="<?php echo $stage->stage_id_pk?>"><?php echo $stage->stage_name ?></option>
<?php endforeach;?>
