
<style>
    .table.table-bordered  thead tbody th, table.table-bordered tbody td {
        border-left-width: 1px;
        border-bottom-width: 1px;
    }

</style>
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped "  style="width: 100%;margin-right:0px">
        <tbody>
       
          
            
            
            <?php


    $this->db->select('*');
        $this->db->from('questions');
        $this->db->where("questation_id_pk",$results[0]->question_id_fk);
     
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
               echo"<tr>
                 <td>السؤال</td>
               <td colspan='10'>".$row->questation_title."</td></tr>";
            }
          
        }

?>
            
            
      
        <tr>
        <td>أسم المدرسة</td>
        
        
        <?php
        
       
        $arra = array("questation_id_pk="=>$results[0]->questation_id_pk);
        
    
     foreach (selectrecords("*","questions",$arra,'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
      
        <?php $data=unserialize($value->answer_title); ?>
 
        <?php  $i=1; foreach ($data as $answer):?>

         <td> <?php echo $answer;?></td>

        
        
       <?php endforeach;
       
       endforeach; ?>

        </tr>
        <?php for($x=0 ;$x<count($results) ;$x++){?>
        
         <tr>
         <?php


    $this->db->select('*');
        $this->db->from('schools');
        $this->db->where("school_id_pk",$results[$x]->school_id_fk);
     
        $query2 = $this->db->get();

        if ($query2->num_rows() > 0) {
            foreach ($query2->result() as $row2) {
               echo"<td>".$row2->school_name."</td>"; ?>
               
               
              
        <?php
        
       
        $arra = array("questation_id_pk="=>$results[0]->questation_id_pk);
        
    
     foreach (selectrecords("*","questions",$arra,'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
      
        <?php $data=unserialize($value->answer_title); ?>
 
        <?php  $i=1; foreach ($data as $answer):?>

        <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $results[0]->questation_id_pk,"answer_id_fk"=>$i)); 
                $this->db->where(array('school_id_fk' => $row2->school_id_pk));
                $this->db->from('poll');
                $query = $this->db->get();
                echo $query->num_rows();
                ?></td>

        
        
       <?php $i++; endforeach;
       
       endforeach; ?>
                
           <?php }
          
        }

?>
           
        </tr>

         <?php }?>
         <tr>
         <td>الاجمالي</td>
        <?php      
          $arra = array("questation_id_pk="=>$results[0]->questation_id_pk);
        
        foreach (selectrecords("*","questions",$arra,'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
       
        <?php $data=unserialize($value->answer_title); ?>
     
        <?php  $i=1; foreach ($data as $answer):?>

              
            <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>$i));
                     if($school_id == "all"){
                         }else{
        
            $school_id_fk=explode('/',$school_id);
            $school_id_fk=$school_id_fk[0];
            $this->db->where(array('school_id_fk' => $school_id_fk));
                }
                $this->db->from('poll');
                $query = $this->db->get();
                echo $query->num_rows();
                ?></td>
           
        <?php $i++; endforeach;?>
    <?php endforeach;?>
         
         </tr>
      
        
        </tbody>

    </table>
</div>

