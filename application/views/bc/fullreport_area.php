
<?php
$ci=&get_instance();
$ci->load->model('Mainmodel');

if($_POST['school_id'] == "all"){?>
<div class="box-body">
                
<?php
$this->db->select('*');
$this->db->from('areas');
$this->db->where('from_id_fk=',0);
$query1 = $this->db->get();
?>

<?php
$this->db->select('*');
$this->db->from('areas');
$this->db->where('from_id_fk !=',0);
$query2 = $this->db->get();
?>

<?php
$this->db->select('*');
$this->db->from('schools');
$this->db->where('school_status =',1);
$query3 = $this->db->get();
?>
<?php
$this->db->select('*');
$this->db->from('students');
$query4 = $this->db->get();
?>
                        
            <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إجمالي المناطق</label>
        <input class="form-control col-xs-6" name="" disabled="disabled" value="<?php echo count($query1->result())?>" placeholder="">
    </div>
    </div>
    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إجمالي  المكاتب</label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo count($query2->result())?>" placeholder="">
    </div>
    </div>
    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إجمالي المدارس</label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo count($query3->result())?>" placeholder="">
    </div>

</div>
    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إجمالي الطلبة</label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo count($query4->result())?>" placeholder="">
    </div>

</div>

    
    </div>
<!------------------------------------ahmed-->

       <table id="sample_1" class="table table-bordered table-hover table-striped" cellspacing="0"  width="99%" style="margin-right: 6px; direction:rtl;">
           <thead>
           <tr>
               <th><i class="fa fa-list" aria-hidden="true"></i></th>
               <th>السؤال</th>
               <th  >الاجابة</th>
               <th  >  عدد الإجابات  </th>
           </tr>
           </thead>
          <?php if($_POST['question_id_fk'] <= 11){?>

           <!--------------------------------------  1  ------------------------------------------------------------->
           <?php foreach (selectrecords("*","questions",array("questation_id_pk"=>$_POST['question_id_fk']),'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
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
           <?php endforeach; }elseif($_POST['question_id_fk'] > 11 && $_POST['question_id_fk'] <103){?>

           <!-------------------------------------- 1 ------------------------------------------------------------>
           <!-------------------------------------- 2 ------------------------------------------------------------>
           <?php foreach (selectrecords("questions.questation_id_pk,questions.questation_title","questions",array("questation_id_pk"=>$_POST['question_id_fk']),'','','',"") as $value):?>
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

           <?php endforeach; }elseif($_POST['question_id_fk'] ==111){?>
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
              <?php }elseif($_POST['question_id_fk'] ==112){?>
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
              <?php }elseif($_POST['question_id_fk']=113){?>
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
   <?php }
          if($_POST['question_id_fk']=='all'){?>
           <!--------------------------------------all ------------------------------------------------------------>

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




              <!--------------------------------------all ------------------------------------------------------------>
           <?php }?>


           </tbody>
       </table>
<?php /*}else{}*/?>

       <!------------------------------------ahmed-->


   
   <?php }elseif($_POST['school_id'] != "all"){

    ?>


 <div class="box-body">
                
<?php
$this->db->select('*');
$this->db->from('areas');
$this->db->where('from_id_fk=',0);
$query1 = $this->db->get();
?>

<?php
$this->db->select('*');
$this->db->from('areas');
$this->db->where('from_id_fk !=',0);
$query2 = $this->db->get();
?>

<?php
$this->db->select('*');
$this->db->from('schools');
$this->db->where('school_id_pk',$school_id);
$query3 = $this->db->get();
 if ($query3->num_rows() > 0) {
            foreach ($query3->result() as $row) {
         ?>
              
      <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">أسم المدرسة</label>
        <input class="form-control col-xs-6" name="" disabled="disabled" value="<?php echo $row->school_name?>" placeholder="">
    </div>
    </div>
         <?php  
                $this->db->select('*');
$this->db->from('areas');
$this->db->where('id',$row->area_id_fk);
$query4= $this->db->get();
 if ($query4->num_rows() > 0) {
    foreach ($query4->result() as $row2){ ?>
        <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">المنطقة</label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo $row2->name?>" placeholder="">
    </div>
    </div>
        
   <?php }
        }
                        $this->db->select('*');
$this->db->from('areas');
$this->db->where('id',$row->learning_office);
$query5= $this->db->get();
 if ($query5->num_rows() > 0) {
    foreach ($query5->result() as $row3){
    ?>
        <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">المكتب التابع لها </label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo $row3->name?>" placeholder="">
    </div>

</div>    
   <?php }
   }

        
        ?> 
         
         
         
        <?php  }
         
            }

?>
<?php
$this->db->select('*');
$this->db->from('students');
$this->db->where('school_id_fk',$school_id);
$query6= $this->db->get();
 if ($query6->num_rows() > 0) {
?>

    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">عدد الطلاب</label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo count($query6->result())?>" placeholder="">
    </div>

</div>

    
    </div>
    
 <?php 
 }

/***************************************ahmed*********************************/?>

        <!---------------------------------------------------------------------->

        <table id="sample_1" class="table table-bordered table-hover table-striped" cellspacing="0"  width="99%" style="margin-right: 6px; direction:rtl;">
            <thead>
            <tr>
                <th><i class="fa fa-list" aria-hidden="true"></i></th>
                <th>2السؤال</th>
                <th  >الاجابة</th>
                <th  >  عدد الإجابات  </th>
            </tr>
            </thead>
            <?php


            for($x=1 ; $x<= 11 ;$x++){
                $arr[]=$x;
            }

            var_dump($_POST);
       ?>


            <!--------------------------------------  1  ------------------------------------------------------------->
            <?php $total =array();foreach (selectrecords("*","questions",array("questation_id_pk<="=>$_POST['question_id_fk']),'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
                <tr>
                <?php $data=unserialize($value->answer_title); ?>
                <td rowspan="<?php echo sizeof($data)?>"><?php echo $value->questation_id_pk?></td>
                <td rowspan="<?php echo sizeof($data)?>"><?php echo $value->questation_title?> </td>
                <?php $all=0;  $i=1; foreach ($data as $answer):?>

                    <td> <?php echo $answer;
                        ?></td>
                    <td><?php
                        $this->db->select('question_id_fk,answer_id_fk');
                        $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>$i,'school_id_fk'=>$_POST['school_id']));
                        $this->db->group_by('student_id_fk');
                        $this->db->from('poll');
                        $query = $this->db->get();
                        echo $query->num_rows();
                        ?></td>
                    </tr>
                    <?php  $all +=$query->num_rows(); $i++; endforeach;
                $total[]=$all;
                ?>
            <?php endforeach;?>

            <!-------------------------------------- 1 ------------------------------------------------------------>
            <!-------------------------------------- 2 ------------------------------------------------------------>

            <?php $all2 =0; foreach (selectrecords("questions.questation_id_pk,questions.questation_title","questions",array("questation_id_pk>"=>"11","questation_id_pk<"=>"103"),'','','',"") as $value):?>
                <tr>

                    <td rowspan="4"><?php echo $value->questation_id_pk?></td>
                    <td rowspan="4"><?php echo $value->questation_title?> </td>
                    <td>قوي</td>  <td><?php
                        $this->db->select('question_id_fk,answer_id_fk');
                        $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                        $this->db->group_by('student_id_fk');
                        $this->db->from('poll');
                        $query1 = $this->db->get();
                        echo $query1->num_rows();                ?>
                    </td> </tr>
                <td>متوسط</td> <td><?php $this->db->select('question_id_fk,answer_id_fk');
                    $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                    $this->db->group_by('student_id_fk');
                    $this->db->from('poll');
                    $query2 = $this->db->get();
                    echo $query2->num_rows();    ?>
                </td>  </tr>
                <td>ضعيف</td>  <td><?php $this->db->select('question_id_fk,answer_id_fk');
                    $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                    $this->db->group_by('student_id_fk');
                    $this->db->from('poll');
                    $query3 = $this->db->get();
                    echo $query3->num_rows();
                    ?></td> </tr>
                <td>لايوجد</td> <td><?php $this->db->select('question_id_fk,answer_id_fk');
                    $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                    $this->db->group_by('student_id_fk');
                    $this->db->from('poll');
                    $query4 = $this->db->get();
                    echo $query4->num_rows();
                    $all2 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows();
                    $total[]=$all2;
                    ?></td> </tr>

            <?php endforeach;?>
            <!-------------------------------------- 2 ------------------------------------------------------------>
            <!-------------------------------------- 3 ------------------------------------------------------------>
            <?php $all3=0; $q=getrecordbyid(array("questation_id_pk"=>111),"questions"); ?>
            <td rowspan="5"> <?php echo $q["questation_id_pk"]?> </td>
            <td rowspan="5"> <?php echo $q["questation_title"]?> </td>
            <td  >نفسية</td>  <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query1 = $this->db->get();
                echo $query1->num_rows();
                ?></td>  </tr>
            <td  >إجتماعية</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query2 = $this->db->get();
                echo $query2->num_rows();
                ?>
            </td>     </tr>
            <td  >إقتصادية</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query3 = $this->db->get();
                echo $query3->num_rows();
                ?>
            </td>   </tr>
            <td >صحية</td>  <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query4 = $this->db->get();
                echo $query4->num_rows();
                ?>
            </td>  </tr>
            <td  >سلوكية</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>5,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query5 = $this->db->get();
                echo $query5->num_rows();
                $all3 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows() +$query5->num_rows();
                $total[]=$all3;
                ?></td> </tr>
            <!----------------------------------------------------->
            <?php $all4=0; $q=getrecordbyid(array("questation_id_pk"=>112),"questions"); ?>
            <td rowspan="4"> <?php echo $q["questation_id_pk"]?> </td>
            <td rowspan="4"> <?php echo $q["questation_title"]?> </td>
            <td >المرشد</td>  <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query1 = $this->db->get();
                echo $query1->num_rows();
                ?>
            </td>   </tr>
            <td >الوكيل</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query2 = $this->db->get();
                echo $query2->num_rows();
                ?>
            </td>  </tr>
            <td >الوحدة</td>  <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query3 = $this->db->get();
                echo $query3->num_rows();
                ?>
            </td>  </tr>
            <td >اخرى</td>  <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query4 = $this->db->get();
                echo $query4->num_rows();
                $all4 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows() ;
                $total[]=$all4;
                ?></td> </tr>

            <!----------------------------------------------------->

            <?php  $all5=0; $q=getrecordbyid(array("questation_id_pk"=>113),"questions"); ?>
            <td rowspan="4"> <?php echo $q["questation_id_pk"]?> </td>
            <td rowspan="4"> <?php echo $q["questation_title"]?> </td>
            <td  >قوى</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query1 = $this->db->get();
                echo $query1->num_rows();
                ?>
            </td>   </tr>
            <td  >متوسط</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query2 = $this->db->get();
                echo $query2->num_rows();
                ?>
            </td>    </tr>
            <td  >ضعيف</td>    <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query3 = $this->db->get();
                echo $query3->num_rows();
                ?>
            </td>   </tr>
            <td >لاتعتبر على الاطلاق</td>   <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                $this->db->group_by('student_id_fk');
                $this->db->from('poll');
                $query4 = $this->db->get();
                echo $query4->num_rows();
                $all5 = $query1->num_rows() + $query2->num_rows() + $query3->num_rows()+$query4->num_rows() ;
                $total[]=$all5;

                ?></td> </tr>

            <?php
            $sum=0;
            foreach ($total as $key =>$values):
                $sum +=$values;
            endforeach;
            ?>


            <!-------------------------------------- 3 ------------------------------------------------------------>


            </tbody>
        </table>






<? }?>




<? /*******************************************************************************************************/?>





     
     
