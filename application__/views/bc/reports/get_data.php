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
            <td><?php echo sizeof($records);?></td>
        </tr>
        </tbody>

    </table>
</div>




 <div class="box-body">
     <table id="example1" class="table table-bordered table-striped">
         <thead>
         <tr>
             <th>م</th>
             <th>إسم الطالب</th>
             <th>الصف</th>
         </tr>
         </thead>
         <tbody>

         <?php $count=0; foreach ($records as $record): $count++;
             $arr =array('stage_id_pk'=>$record->stage_id_fk);
             $stage =selectrecords("*","stages",$arr);
             ?>
             <tr>
                 <td><?php echo $count;?></td>
                 <td><?php echo $record->student_identity?></td>
                 <td><?php echo $stage[0]->stage_name?></td>
             </tr>
         <?php endforeach;?>
         </tbody>
     </table>
 </div>



