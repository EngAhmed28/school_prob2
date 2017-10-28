<?php
if(isset($area_office)){
    echo '<option value="all">الكل</option>';
    if(isset($area_office))
        for($x2 = 0 ; $x2 < count($area_office) ; $x2++)
        echo '<option value="'.$area_office[$x2]->school_id_pk.'">'.$area_office[$x2]->school_name.'</option>';die;
}

?>