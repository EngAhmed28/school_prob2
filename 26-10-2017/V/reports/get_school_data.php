
    <option value="">إختر</option>
    <?php if($_POST['type']):?>
        <option value="all">الكل</option>
    <?php endif;?>
    <?php foreach ($schools as $school):?>
        <option value="<?php echo $school->school_id_pk;?>"><?php echo $school->school_name;?></option>
    <?php endforeach; ?>




