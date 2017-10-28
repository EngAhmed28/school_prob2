
<?php

$ci=&get_instance();

$ci->load->model('Mainmodel');

     //echo "<pre>";
   // print_r($school_id);
   // die;
   if($school_id == "all"){
    
   
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
   
   <?php }else{
    
    
            $school_id_fk=explode('/',$school_id);
            $school_id_fk=$school_id_fk[0];
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
$this->db->where('school_id_pk',$school_id_fk);
$query3 = $this->db->get();
 if ($query3->num_rows() > 0) {
            foreach ($query3->result() as $row) {
                //$data[] = $row;?>
              
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
$this->db->where('school_id_fk',$school_id_fk);
$query5= $this->db->get();
?>

    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">عدد الطلاب</label>
        <input class="form-control col-xs-6" name=""  disabled="disabled" value="<?php echo count($query5->result())?>" placeholder="">
    </div>

</div>

    
    </div>
    
 <?php  }?>
    
 <?php if(!empty($results)){
?>
<!--<table class="table table-striped">
    <tr>
        <th style="width: 10px">م</th>
        <th>المشكلة</th>
        <th width="30%">التقدم</th>
        <th style="width: 15%">النسبة المئوية</th>
    </tr> -->
    <?php
    for($x=1 ; $x<= 11 ;$x++){
        $arr[]=$x;  
    }
      for($y=12 ; $y<= 102 ;$y++){
        $arr2[]=$y;  
    }
    
       for($z=103 ; $z<= 113 ;$z++){
        $arr3[]=$z;  
    }
    
  // echo"<pre>";
 // if(in_array(10,$arr)){
  //  echo"123";
  //}else{
     //echo"****";
 // } ;
  
  ?>
  
  
  <table id="sample_1" class="table table-bordered table-hover table-striped" cellspacing="0"  width="99%" style="margin-right: 6px; direction:rtl;">
    <thead>
    <tr>
        <th><i class="fa fa-list" aria-hidden="true"></i></th>
        <th>السؤال</th>
        <th  >الاجابة</th>
        <th  >  عدد الإجابات  </th>
    </tr>
    </thead>
  
    <?php 
   
    
    foreach ($results as $result){
    
    if(in_array($result->questation_id_pk,$arr)){ ?>
         <!--------------------------------------  1  ------------------------------------------------------------->
    <?php
    if($result->questation_id_pk){
        $arra = array("questation_id_pk="=>$result->questation_id_pk);
        
    }else{
        $arra = array("questation_id_pk<="=>"11");
    }
     foreach (selectrecords("*","questions",$arra,'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
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
   <?php }elseif(in_array($result->questation_id_pk,$arr2)){ ?>
    <!-------------------------------------- 2 ------------------------------------------------------------>
    <?php 
    
        if($result->questation_id_pk){
        $arra2 = array("questation_id_pk="=>$result->questation_id_pk);
    }else{
        $arra2 = array("questation_id_pk>"=>"11","questation_id_pk<"=>"103");
    }
    
    foreach (selectrecords("questions.questation_id_pk,questions.questation_title","questions",$arra2,'','','',"") as $value):?>
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
   <?php }elseif(in_array($result->questation_id_pk,$arr3)){ ?>
       <!-------------------------------------- 3 ------------------------------------------------------------>
    <?php
    if($result->questation_id_pk == 111){
            $q=getrecordbyid(array("questation_id_pk"=>111),"questions"); ?>
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
  <?php  } ?>
  
    <?php 
    if($result->questation_id_pk == 112){
    
    $q=getrecordbyid(array("questation_id_pk"=>112),"questions"); ?>
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

    <?php }
    
    if($result->questation_id_pk == 113){
     $q=getrecordbyid(array("questation_id_pk"=>113),"questions"); ?>
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

 <?php  
  }
  }
    
     }
     }else{
    echo' <div class="col-xs-12 alert alert-danger" >لا توجد  نتائج</div>';
} 
     ?>
     
     
     
     
     
     
     
     
     
        </tbody>
</table>

     
     
     
     
     
     
     
     
     
   <?
/*
      //$totalstudent = 1;
   // $totalstudent = $_SESSION["first_stage"] + $_SESSION["secound_stage"] + $_SESSION["thired_stage"];?>
    <?php foreach ($results as $result):?>
        <?php
        
        $this->db->select('*');
        $this->db->from('poll');
        $this->db->where("question_id_fk",$result->questation_id_pk);
        $query = $this->db->get();
        
          $counttt = count($query->result());
          
      
        
        $this->db->select('*');
        $this->db->from('poll');
        $query2 = $this->db->get();
        $counttt_to = count($query2->result());

        //$count=$ci->Mainmodel->countstudent($result["questation_id_pk"]);
       

        $percentage=($counttt*100)/$counttt_to?>
        <tr>
            <td><?php echo $result->questation_id_pk?></td>
            <td><?php echo $result->questation_title?></td>
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
<?php

}else{
    echo'  <div class="col-xs-12 alert alert-danger" >لا توجد  نتائج</div>';
}
*/
?>