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
           إضافة منطقة
            <small></small>
        </h1>
    </section>
 <br>




 <?php if(isset($results)):?>

     <div class="row">
         <!-- left column -->
         <div class="col-md-12">
             <!-- general form elements -->
             <div class="box box-primary"><br>
                 <?php echo form_open_multipart('admin/update_areas/'.$results[0]->id,array('class'=>"form-horizontal",'role'=>"form" ))?>

                 <div class="col-xs-12">
                     <div class="form-group  col-sm-6 col-xs-12">
                         <label class="label-style col-xs-6">إسم المنطقة</label>
                         <input class="form-control col-xs-6" name="area"  placeholder="إسم المنطقة" value="<?php echo $results[0]->name?>">
                     </div>
                 </div>

                 <div class="box-footer text-center">
                     <button type="submit" name="update" value="save" class="btn btn-primary">حفظ</button>
                 </div>
                 <?php form_close()?>
             </div><!-- /.box -->
         </div><!-- /.box -->
     </div><!-- /.box -->



 <?php else:?>


     <div class="row">
         <div class="col-md-12">
             <div class="box box-primary"><br>
                 <?php echo form_open_multipart('admin/add_areas',array('class'=>"form-horizontal",'role'=>"form" ))?>

                 <div class="col-xs-12">
                     <div class="form-group  col-sm-6 col-xs-12">
                         <label class="label-style col-xs-6">إسم المنطقة</label>
                         <input class="form-control col-xs-6" name="area"  placeholder="إسم المنطقة">
                     </div>
                 </div>

                 <div class="box-footer text-center">
                     <button type="submit" name="save" value="save" class="btn btn-primary">حفظ</button>
                 </div>
                 <?php form_close()?>
             </div><!-- /.box -->
         </div><!-- /.box -->
     </div><!-- /.box -->

 <?php endif;?>


    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>م</th>
                <th>المنطقة</th>
                <th>الإجراء</th>
            </tr>
            </thead>
            <tbody>

            <?php

            $arr =array('from_id_fk'=>0);

            foreach (selectrecords("*","areas",$arr)as $quiz):?>
            <tr>
                <td><?php echo $quiz->id?></td>
                <td><?php echo $quiz->name?></td>
                <td data-title="التحكم" class="text-center">
                    <a href="<?php echo base_url().'Admin/update_areas/'.$quiz->id.''?>" class="btn btn-sm btn-success">تعديل </a>
                    <a  href="<?php echo base_url().'Admin/delete_areas/'.$quiz->id.''?>" class="btn btn-sm btn-danger"> حذف </a>
                </td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div><!-- /.box-body -->



