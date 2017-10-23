
    <?php   $result= getrecordbyid(array("questation_id_fk"=>$this->input->post("question_id_fk")),"answers");
    $data=unserialize('a:4:{i:1;s:6:"قوي";i:2;s:10:"متوسط";i:3;s:8:"ضعيف";i:4;s:12:"لايوجد";}');
    if ($result["answer_title"]){$data=unserialize($result["answer_title"]);} ?>
    <?php  foreach ($data as $key=>$value):?>
        <option value="<?php echo $key?>"><?php echo $value?></option>
    <?php endforeach;?>
