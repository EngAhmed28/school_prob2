
<table id="sample_1" class="table table-bordered table-hover table-striped" cellspacing="0"  width="99%" style="margin-right: 6px; direction:rtl;">
    <thead>
    <tr>
        <th><i class="fa fa-list" aria-hidden="true"></i></th>
        <th>السؤال</th>
        <th  >الاجابة</th>
        <th  >  عدد الإجابات  </th>
    </tr>
    </thead>
    <!--------------------------------------  1  ------------------------------------------------------------->
    <?php foreach (selectrecords("*","questions",array("questation_id_pk<="=>"11"),'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
        <tr>
        <?php $data=unserialize($value->answer_title); ?>
        <td rowspan="<?php echo sizeof($data)?>"><?php echo $value->questation_id_pk?></td>
        <td rowspan="<?php echo sizeof($data)?>"><?php echo $value->questation_title?> </td>
        <?php  $i=1; foreach ($data as $answer):?>

            <td> <?php echo $answer;
                ?></td>
            <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>$i));
                $this->db->from('poll');
                $query = $this->db->get();
                echo $query->num_rows();
                ?></td>
            </tr>
        <?php $i++; endforeach;?>
    <?php endforeach;?>

    <!-------------------------------------- 1 ------------------------------------------------------------>
    <!-------------------------------------- 2 ------------------------------------------------------------>
    <?php foreach (selectrecords("questions.questation_id_pk,questions.questation_title","questions",array("questation_id_pk>"=>"11","questation_id_pk<"=>"103"),'','','',"") as $value):?>
        <tr>

        <td rowspan="4"><?php echo $value->questation_id_pk?></td>
        <td rowspan="4"><?php echo $value->questation_title?> </td>
            <td>قوي</td>  <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>1));
                $this->db->from('poll');
                $query = $this->db->get();
                echo $query->num_rows();                ?>
            </td> </tr>
            <td>متوسط</td> <td><?php $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>2));
            $this->db->from('poll');
            $query = $this->db->get();
            echo $query->num_rows();    ?>
        </td>  </tr>
            <td>ضعيف</td>  <td><?php $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>3));
            $this->db->from('poll');
            $query = $this->db->get();
            echo $query->num_rows();
            ?></td> </tr>
            <td>لايوجد</td> <td><?php $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>4));
            $this->db->from('poll');
            $query = $this->db->get();
            echo $query->num_rows();
            ?></td> </tr>

    <?php endforeach;?>
    <!-------------------------------------- 2 ------------------------------------------------------------>
    <!-------------------------------------- 3 ------------------------------------------------------------>
    <?php $q=getrecordbyid(array("questation_id_pk"=>111),"questions"); ?>
    <td rowspan="5"> <?php echo $q["questation_id_pk"]?> </td>
    <td rowspan="5"> <?php echo $q["questation_title"]?> </td>
    <td  >نفسية</td>  <td><?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?></td>  </tr>
    <td  >إجتماعية</td> <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>     </tr>
    <td  >إقتصادية</td> <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>   </tr>
    <td >صحية</td>  <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>  </tr>
    <td  >سلوكية</td> <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>5));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>    </tr>
    <!----------------------------------------------------->
    <?php $q=getrecordbyid(array("questation_id_pk"=>112),"questions"); ?>
    <td rowspan="4"> <?php echo $q["questation_id_pk"]?> </td>
    <td rowspan="4"> <?php echo $q["questation_title"]?> </td>
    <td >المرشد</td>  <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>   </tr>
    <td >الوكيل</td> <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>  </tr>
    <td >الوحدة</td>  <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>  </tr>
    <td >اخرى</td>  <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>   </tr>
    <!----------------------------------------------------->

    <?php $q=getrecordbyid(array("questation_id_pk"=>113),"questions"); ?>
    <td rowspan="4"> <?php echo $q["questation_id_pk"]?> </td>
    <td rowspan="4"> <?php echo $q["questation_title"]?> </td>
    <td  >قوى</td> <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>   </tr>
    <td  >متوسط</td> <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>    </tr>
    <td  >ضعيف</td>    <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>   </tr>
    <td >لاتعتبر على الاطلاق</td>   <td>
        <?php
        $this->db->select('question_id_fk,answer_id_fk');
        $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
        $this->db->from('poll');
        $query = $this->db->get();
        echo $query->num_rows();
        ?>
    </td>     </tr>

    <!-------------------------------------- 3 ------------------------------------------------------------>


    </tbody>
</table>
