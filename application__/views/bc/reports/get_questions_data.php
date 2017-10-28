
    <option value="">إختر</option>
    <?php foreach ($questions as $quest):
    $arr =array('questation_id_pk'=>$quest->question_id_fk);
    $quest_name =selectrecords("*","questions",$arr);
        ?>
        <option value="<?php echo $quest->poll_id_pk;?>"><?php echo $quest_name[0]->questation_title;?></option>
    <?php endforeach; ?>




