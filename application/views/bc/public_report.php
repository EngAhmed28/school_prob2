   
    <style>
     .label-style{
     background-color: #367fa9;
     color: #fff;
     height: 34px;
     line-height: 30px;
     }


 </style>




   
   
    <section class="content-header">
        <h1>
       تقرير عام بالمدارس
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">تقرير</li>
        </ol>
    </section>
    <br />
    
    

    
    
    <div class="row">
        <!-- left column -->
        

        
        
        
        
        
        
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">تقرير عام بالمدارس</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                

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





        <table id="example" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>م</th>
                <th> أسم المنطقة</th>
              <th> أسم المكتب</th>
               <th> أسم المدرسة</th>
                <th> عدد الطلاب</th>
            </tr>
            </thead>
            <tbody>
     
            <?php 
             for($x = 0 ; $x < count($table) ; $x++){
                
                
              $this->db->select('*');
            $this->db->from('areas');
           $this->db->where("from_id_fk",$table[$x]->id);
           $query6 = $this->db->get();
                               
                                    echo '<tr>
                                            <td rowspan="'.count($query6->result()).'">'.($x+1).'</td>
                                            <td rowspan="'.count($query6->result()).'">'.$table[$x]->name.'</td>
                                            ';
                                          
                                          foreach ($query6->result() as $row6) {
       
                                            echo '
                                         
                                            <td >'. $row6->name.'</td> 
                                            <td>';
                                            
            $this->db->select('*');
           $this->db->from('schools');
           $this->db->where("area_id_fk",$table[$x]->id);
            $this->db->where("learning_office",$row6->id);
            $query7 = $this->db->get();
             if ($query7->num_rows() > 0) {
           
            foreach($query7->result() as $row7){
                
                
                          
            $this->db->select('*');
           $this->db->from('students');
           $this->db->where("school_id_fk",$row7->school_id_pk);
            $query8 = $this->db->get();
               echo ''.$row7->school_name.'<br/><hr/>';
              
                
            }
            echo ' </td>';
           
            }else{
                echo'لا يوجد </td>' ;
 
            }
            
            
                                      echo'        <td>';
                                            
            $this->db->select('*');
           $this->db->from('schools');
           $this->db->where("area_id_fk",$table[$x]->id);
            $this->db->where("learning_office",$row6->id);
            $query7 = $this->db->get();
             if ($query7->num_rows() > 0) {
           
            foreach($query7->result() as $row7){
                
                
                          
            $this->db->select('*');
           $this->db->from('students');
           $this->db->where("school_id_fk",$row7->school_id_pk);
            $query8 = $this->db->get();
               echo ''.count($query8->result()).'<br/><hr/>';
              
                
            }
            echo ' </td>';
           
            }else{
                echo'0 </td>' ;
 
            }
            
            
            
                                            
                                            echo ' 
                                           
                                            </tr>';
                                            }
                                            echo'
                                            
                                            ';
    }
       /*                 
$this->db->select('*');
$this->db->from('areas');
$this->db->where('from_id_fk=',"0");
$query6 = $this->db->get();



$x=0;
foreach ($query6->result() as $row6) {
               
$this->db->select('*');
$this->db->from('areas');
$this->db->where('from_id_fk=',$row6->id); 
$query7 =$this->db->get();
   
                ?>
                <tr>
                <td rowspan="<?php echo  count($query7->result()) ;?>"><?php echo ($x+1);?></td>
                <td rowspan="<?php echo  count($query7->result()) ;?>"><?php echo  $row6->name; ?></td>
                
                 
                 <?php foreach ($query7->result() as $row7) {?>
                
                 <td></td>
                
                <?php }?>
                 </tr>
                  
                <?php   
                       
                 ?>

                 <?php 

                    $x++;
                     }
                 
                 */
                  ?>
        
      
              
         
         
            </tbody>
        </table>





</div><!-- /.box-body -->

               
            </div><!-- /.box -->
        </div><!-- /.box -->
    </div><!-- /.box -->

    


