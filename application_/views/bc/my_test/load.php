<option value="">2222إختر</option>
<?php if(!empty($sub)):
    foreach ($sub as $record):?>
        <option value="<? echo $record->id;?>"><? echo $record->name;?></option>
    <?php  endforeach; endif;?>