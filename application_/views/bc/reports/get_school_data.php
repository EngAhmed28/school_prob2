
    <option value="">إختر</option>
    <?php foreach ($schools as $school):?>
        <option value="<?php echo $school->school_id_pk;?>"><?php echo $school->school_name;?></option>
    <?php endforeach; ?>




