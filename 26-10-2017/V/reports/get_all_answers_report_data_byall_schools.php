 <style>
     .table.table-bordered  thead tbody th, table.table-bordered tbody td {
         border-left-width: 1px;
         border-bottom-width: 1px;
     }
 </style>
<?php   $all_schools = selectrecords("*","schools");
$all_areas = selectrecords("*","areas",array("from_id_fk"=>0));
$all_offices = selectrecords("*","areas",array("from_id_fk !="=>0));?>
     <div class="box-body">
         <table id="example1" class="table table-bordered table-striped "  style="width: 50%;margin-right: 250px">
             <tbody>
             <tr>
                 <td>عدد المدارس</td>
                 <td><?php echo sizeof($all_schools);?></td>
             </tr>
             <tr>
                 <td>عدد المناطق</td>
                 <td><?php echo sizeof($all_areas);?></td>
             </tr>
             <tr>
                 <td>عدد المكاتب</td>
                 <td><?php echo sizeof($all_offices);?></td>
             </tr>
             <tr>
                 <td>إجمالي الطلاب بالمدارس</td>
                 <td id="num"></td>
             </tr>
             </tbody>
         </table>
     </div>
 



<!---------------------------------------------------------------------->

 <table id="sample_1" class="table table-bordered table-hover table-striped" cellspacing="0"  width="99%" style="margin-right: 6px; direction:rtl;">
     <thead>
     <tr>
         <th><i class="fa fa-list" aria-hidden="true"></i></th>
         <th>الأسئلة</th>
         <th>عدد الإجابات</th>
     </tr>
     </thead>
     <!--------------------------------------  1  ------------------------------------------------------------->
     <?php $total =array();  foreach (selectrecords("*","questions",array("questation_id_pk<="=>"11"),'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
         <tr>
         <?php $data=unserialize($value->answer_title); ?>
         <td><?php echo $value->questation_id_pk?></td>
         <td><?php echo $value->questation_title?> </td>
         <!------------------------->
         <?php  $all=0;   $i=1; foreach ($data as $answer){
             $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>$i));
             $this->db->from('poll');
             $query = $this->db->get();
             $all +=$query->num_rows();  $i++; } $total[]=$all;?>
         <!------------------------->
             <td><?php echo $all;?></td>
             </tr>

     <?php endforeach;?>

     <!-------------------------------------- 1 ------------------------------------------------------------>
     <!-------------------------------------- 2 ------------------------------------------------------------>
     <?php $all2 =0; foreach (selectrecords("questions.questation_id_pk,questions.questation_title","questions",array("questation_id_pk>"=>"11","questation_id_pk<"=>"103"),'','','',"") as $value):?>
         <tr>

             <td><?php echo $value->questation_id_pk?></td>
             <td><?php echo $value->questation_title?> </td>
             <!------------------------->
             <?php $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>1));
             $this->db->from('poll');
             $query1 = $this->db->get(); ?>
             <!------------------------->
             <?php $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>2));
             $this->db->from('poll');
             $query2 = $this->db->get(); ?>
             <!------------------------->
             <?php $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>3));
             $this->db->from('poll');
             $query3 = $this->db->get();
             ?>
             <!------------------------->
             <?php $this->db->select('question_id_fk,answer_id_fk');
             $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>4));
             $this->db->from('poll');
             $query4 = $this->db->get();
             $all2 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows();
             $total[]=$all2;
             ?>
             <!------------------------->
             <td><?php echo $all2;?></td>
         </tr>

     <?php endforeach;?>
     <!-------------------------------------- 2 ------------------------------------------------------------>
     <!-------------------------------------- 3 ------------------------------------------------------------>
     <?php $all3=0; $q=getrecordbyid(array("questation_id_pk"=>111),"questions"); ?>
     <td> <?php echo $q["questation_id_pk"]?> </td>
     <td> <?php echo $q["questation_title"]?> </td>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
     $this->db->from('poll');
     $query1 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
     $this->db->from('poll');
     $query2 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
     $this->db->from('poll');
     $query3 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
     $this->db->from('poll');
     $query4 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>5));
     $this->db->from('poll');
     $query5 = $this->db->get();
     $all3 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows() +$query5->num_rows();
     $total[]=$all3;
     ?>
     <!------------------------->
     <td><?php echo $all3;?></td>
     </tr>
     <!----------------------------------------------------->
     <?php  $all4=0; $q=getrecordbyid(array("questation_id_pk"=>112),"questions"); ?>
     <td> <?php echo $q["questation_id_pk"]?> </td>
     <td> <?php echo $q["questation_title"]?> </td>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
     $this->db->from('poll');
     $query1 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
     $this->db->from('poll');
     $query2 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
     $this->db->from('poll');
     $query3 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
     $this->db->from('poll');
     $query4 = $this->db->get();
     $all4 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows() ;
     $total[]=$all4;
     ?>
     <!------------------------->
     <td><?php echo $all4;?></td>
     </tr>
     <!----------------------------------------------------->

     <?php $all5=0; $q=getrecordbyid(array("questation_id_pk"=>113),"questions"); ?>
     <td> <?php echo $q["questation_id_pk"]?> </td>
     <td> <?php echo $q["questation_title"]?> </td>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1));
     $this->db->from('poll');
     $query1 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2));
     $this->db->from('poll');
     $query2 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3));
     $this->db->from('poll');
     $query3 = $this->db->get();
     ?>
     <!------------------------->
     <?php
     $this->db->select('question_id_fk,answer_id_fk');
     $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4));
     $this->db->from('poll');
     $query4 = $this->db->get();
     $all5 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows() ;
     $total[]=$all5;

     ?>
     <!------------------------->
     <td><?php echo $all5;?></td>
     </tr>
     <?php
     $sum=0;
     foreach ($total as $key =>$values):
         $sum +=$values;
     endforeach;
     ?>
     <tr>
         <td colspan="2">الإجمالي</td>
         <td><? if(empty($sum)):  echo 0; else: echo $sum; endif;?></td>
     </tr>
     <script>$("#num").text(<? if(empty($sum)):  echo 0; else: echo $sum; endif;?>);</script>
     <!-------------------------------------- 3 ------------------------------------------------------------>

     </tbody>
 </table>


