
    <option value="">إختر</option>
    <?php foreach ($areas as $office):?>
        <option value="<?php echo $office->id;?>"><?php echo $office->name;?></option>
    <?php endforeach; ?>




