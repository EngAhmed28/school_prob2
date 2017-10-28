<?php
if(isset($_POST['store_id'])){
    echo '<option value="">--قم بالإختيار--</option>';
    if(isset($loaded))
        for($x = 0 ; $x < count($loaded) ; $x++)
            echo '<option value="'.$loaded[$x]->id.'">'.$loaded[$x]->name.'</option>';die;
}

?>
