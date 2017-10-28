 <style>
     .table.table-bordered  thead tbody th, table.table-bordered tbody td {
         border-left-width: 1px;
         border-bottom-width: 1px;
     }

 </style>
 <div class="box-body">
     <table id="example1" class="table table-bordered table-striped "  style="width: 50%;margin-right: 250px">
         <tbody>
         <tr>
             <td>إسم المدرسة</td>
             <td><?php echo $school_name[0]->school_name;?></td>
         </tr>
         <tr>
             <td>المنطقة</td>
             <td><?php echo $area[0]->name;?></td>
         </tr>
         <tr>
             <td>المكتب التابع لها</td>
             <td><?php echo $office[0]->name;?></td>
         </tr>
         <tr>
             <td>عدد الطلاب</td>
             <td id="num"></td>
         </tr>
         </tbody>

     </table>
 </div>

 <div class="box-body">
    <table  class="table table-bordered table-striped table "  style="width: 50%;margin-right: 250px">
        <thead>
        <?php
        $arr =array('questation_id_pk'=>$_POST['question_id']);
        $quest_name =selectrecords("*","questions",$arr);
        ?>
        <tr>
            <th class="info">السؤال</th>
            <th ><?php echo $quest_name[0]->questation_title;?></th>
        </tr>
        </thead>
        <tbody>
        <?php if($_POST['question_id'] <=11){?>
        <?php
        foreach (selectrecords("*","questions",array("questation_id_pk"=>$_POST['question_id']),'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):
                 $data=unserialize($value->answer_title); ?>
          <?php $all=0; $i=1; foreach ($data as $answer){?>
        <tr>
            <td> <?php echo $answer; ?></td>
            <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>$i,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query = $this->db->get();
                echo $query->num_rows();
                ?></td>
       </tr>
   <?php $all +=$query->num_rows();  $i++; } ?>
            <script>$("#num").text(<? if(empty($all)):  echo 0; else: echo $all; endif;?>);</script>
        <?php   endforeach;?>

     <!--------------------------------------------------------------
       <?php  }elseif($_POST['question_id'] >11 && $_POST['question_id'] <103){?>
        <!-------------------------------------- 2 ------------------------------------------------------------>
        <?php
            $all=0;
           foreach (selectrecords("questions.questation_id_pk,questions.questation_title","questions",array("questation_id_pk"=>$_POST['question_id']),'','','',"") as $value):?>
            <tr>

                <td>قوي</td>  <td><?php
                    $this->db->select('question_id_fk,answer_id_fk');
                    $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                    $this->db->from('poll');
                    $query1 = $this->db->get();
                    echo $query1->num_rows();
                    ?>
                </td> </tr>
            <td>متوسط</td> <td><?php $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query2 = $this->db->get();
                echo $query2->num_rows();    ?>
            </td>  </tr>
            <td>ضعيف</td>  <td><?php $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query3 = $this->db->get();
                echo $query3->num_rows();
                ?></td> </tr>
            <td>لايوجد</td> <td><?php $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $value->questation_id_pk,"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query4 = $this->db->get();
                echo $query4->num_rows();
                $all = $query1->num_rows()+ $query2->num_rows() + $query3->num_rows()+ $query4->num_rows();?></td> </tr>
            <script>$("#num").text(<? echo $all;?>);</script>
        <?php endforeach;?>
        <!-------------------------------------- 2 ------------------------------------------------------------>
       <?php }elseif($_POST['question_id'] ==111){$all=0; ?>

            <?php $q=getrecordbyid(array("questation_id_pk"=>111),"questions"); ?>
            <td  >نفسية</td>  <td><?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query1 = $this->db->get();
                echo $query1->num_rows();
                ?></td>  </tr>
            <td  >إجتماعية</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query2 = $this->db->get();
                echo $query2->num_rows();
                ?>
            </td>     </tr>
            <td  >إقتصادية</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query3 = $this->db->get();
                echo $query3->num_rows();
                ?>
            </td>   </tr>
            <td >صحية</td>  <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query4 = $this->db->get();
                echo $query4->num_rows();
                ?>
            </td>  </tr>
            <td  >سلوكية</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>5,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query5 = $this->db->get();
                echo $query5->num_rows();
                $all = $query1->num_rows()+ $query2->num_rows() + $query3->num_rows()+ $query4->num_rows() + $query5->num_rows();
                ?>
            </td>    </tr>
            <script>$("#num").text(<? if(empty($all)):  echo 0; else: echo $all; endif;?>);</script>

        <?php  }elseif($_POST['question_id'] ==112){ $all=0;?>
        <?php $q=getrecordbyid(array("questation_id_pk"=>112),"questions"); ?>
        <td >المرشد</td>  <td>
            <?php
            $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
            $this->db->from('poll');
            $query1 = $this->db->get();
            echo $query1->num_rows();
            ?>
        </td>   </tr>
        <td >الوكيل</td> <td>
            <?php
            $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
            $this->db->from('poll');
            $query2 = $this->db->get();
            echo $query2->num_rows();
            ?>
        </td>  </tr>
        <td >الوحدة</td>  <td>
            <?php
            $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
            $this->db->from('poll');
            $query3 = $this->db->get();
            echo $query3->num_rows();
            ?>
        </td>  </tr>
        <td >اخرى</td>  <td>
            <?php
            $this->db->select('question_id_fk,answer_id_fk');
            $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
            $this->db->from('poll');
            $query4 = $this->db->get();
            echo $query4->num_rows();
            $all = $query1->num_rows()+ $query2->num_rows() + $query3->num_rows()+ $query4->num_rows();
            ?>
        </td>   </tr>
            <script>$("#num").text(<? if(empty($all)):  echo 0; else: echo $all; endif;?>);</script>
        <?php }elseif($_POST['question_id'] ==113){ $all=0; ?>
            <?php $q=getrecordbyid(array("questation_id_pk"=>113),"questions"); ?>
            <td  >قوى</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>1,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query1 = $this->db->get();
                echo $query1->num_rows();
                ?>
            </td>   </tr>
            <td  >متوسط</td> <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>2,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query2 = $this->db->get();
                echo $query2->num_rows();
                ?>
            </td>    </tr>
            <td  >ضعيف</td>    <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>3,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query3 = $this->db->get();
                echo $query3->num_rows();
                ?>
            </td>   </tr>
            <td >لاتعتبر على الاطلاق</td>   <td>
                <?php
                $this->db->select('question_id_fk,answer_id_fk');
                $this->db->where(array('question_id_fk' => $q["questation_id_pk"],"answer_id_fk"=>4,'school_id_fk'=>$_POST['school_id']));
                $this->db->from('poll');
                $query4 = $this->db->get();
                echo $query4->num_rows();
                $all = $query1->num_rows()+ $query2->num_rows() + $query3->num_rows()+ $query4->num_rows();
                ?>
            </td>     </tr>
            <script>$("#num").text(<? if(empty($all)):  echo 0; else: echo $all; endif;?>);</script>
             <?php }?>
        </tbody>

    </table>
</div>

