 <style>
     .table.table-bordered  thead tbody th, table.table-bordered tbody td {
         border-left-width: 1px;
         border-bottom-width: 1px;
     }

 </style>


 <?php echo'<pre>';
 var_dump($_POST['question_id'] );
 echo '</pre>';
 die;?>
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped "  style="width: 50%;margin-right: 250px">
        <thead>
        <?php
        $arr =array('questation_id_pk'=>$_POST['question_id']);
        $quest_name =selectrecords("*","questions",$arr);
        ?>
        <tr>
            <th>22السؤال</th>
            <td><?php echo $quest_name[0]->questation_title;?></td>
        </tr>
        </thead>
        <tbody>



     <?  if($_POST['question_id'] == 111){?>

         <?php $q=getrecordbyid(array("questation_id_pk"=>$_POST['question_id']),"questions"); ?>
         <td >نفسية</td>  <td>
             <?php
             $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
             $this->db->from('poll');
             $query = $this->db->get();
             echo $query->num_rows();
             ?>
         </td>   </tr>
         <td >إجتماعية</td> <td>
             <?php
             $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
             $this->db->from('poll');
             $query = $this->db->get();
             echo $query->num_rows();
             ?>
         </td>  </tr>
         <td >إقتصادية</td>  <td>
             <?php
             $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
             $this->db->from('poll');
             $query = $this->db->get();
             echo $query->num_rows();
             ?>
         </td>  </tr>
         <td >صحية</td>  <td>
             <?php
             $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
             $this->db->from('poll');
             $query = $this->db->get();
             echo $query->num_rows();
             ?>
         </td>   </tr>
         <td >سلوكية</td>  <td>
             <?php
             $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>5));
             $this->db->from('poll');
             $query = $this->db->get();
             echo $query->num_rows();
             ?>
         </td>   </tr>
            <?php ?>

        <!-------------------------------------- 3 ------------------------------------------------------------>

        <!----------------------------------------------------->
           <?php}elseif ($_POST['question_id'] ==112){?>

         <?php $q=getrecordbyid(array("questation_id_pk"=>$_POST['question_id']),"questions"); ?>

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
       <?php}/*elseif ($_POST['question_id'] ==113){?>
        <?php $q=getrecordbyid(array("questation_id_pk"=>$_POST['question_id']),"questions"); ?>
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
        <?php }*/else{
echo 'hello';

        }?>
        </tbody>

    </table>
</div>

