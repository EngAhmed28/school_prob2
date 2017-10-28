
<?php

$ci=&get_instance();

$ci->load->model('Mainmodel');



?>
<table class="table table-striped">
    <tr>
        <th style="width: 10px">م</th>
        <th>المشكلة</th>
        <th width="30%">التقدم</th>
        <th style="width: 15%">النسبة المئوية</th>
    </tr>
<?php



$totalstudent = $_SESSION["first_stage"] + $_SESSION["secound_stage"] + $_SESSION["thired_stage"];?>
<?php foreach ($results as $result):?>
<?php

    $count=$ci->Mainmodel->getcountquize($result["questation_id_pk"]);

    $percentage=($count["count(answer_id_fk)"]*100)/$totalstudent?>
    <tr>
        <td><?php echo $result["questation_id_pk"]?></td>
        <td><?php echo $result["questation_title"]?></td>
        <td>
            <div class="progress progress-xs">
                <?php if ($percentage<4):?>
                <div class="progress-bar progress-bar-info" style="width: <?php echo $percentage*30?>%"></div>
                <?php elseif($percentage>11 && $percentage<10):?>
                    <div class="progress-bar progress-bar-success" style="width: <?php echo $percentage*30?>%"></div>

                <?php else:?>
                    <div class="progress-bar progress-bar-danger" style="width: <?php echo $percentage*30?>%"></div>
                <?php endif;?>
            </div>
        </td>
        <td>
            <?php if ($percentage<7):?>
                <span class="badge bg-blue"><?php echo round($percentage,1)?>%</span>
            <?php elseif($percentage>5 && $percentage<10):?>
                <span class="badge bg-green"><?php echo round($percentage,1)?>%</span>

            <?php else:?>
                <span class="badge bg-red"><?php echo round($percentage,1)?>%</span>
            <?php endif;?>

        </td>
    </tr>
<?php endforeach;?>
</table>
