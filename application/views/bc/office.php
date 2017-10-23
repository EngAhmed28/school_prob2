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
           إضافة مكتب
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
                 <?php echo form_open_multipart('admin/update_office/'.$results['id'],array('class'=>"form-horizontal",'role'=>"form" ))?>

                 <div class="col-xs-12">
                     <div class="form-group  col-sm-6 col-xs-12">
                         <label class="label-style col-xs-6">إسم المنطقة</label>
                         <select class="form-control col-xs-6" name="area_id" id="area_id">
                             <option value="">إختر</option>
                             <?php foreach ($areas as $row):
                                 $select='';
                                 if($row->id == $results['from_id_fk'] ){
                                     $select='selected';
                                 }
                                 ?>
                                 <option value="<?php echo $row->id; ?>" <?php echo $select?>><?php echo $row->name; ?></option>
                             <?php endforeach;?>
                         </select>
                     </div>
                     <div class="form-group  col-sm-6 col-xs-12">
                         <label class="label-style col-xs-6">المكتب</label>
                         <input class="form-control col-xs-6" name="office"  placeholder="المكتب" value="<?php echo$results['name'] ?>">
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
                 <?php echo form_open_multipart('admin/add_office',array('class'=>"form-horizontal",'role'=>"form" ))?>

                 <div class="col-xs-12">
                     <div class="form-group  col-sm-6 col-xs-12">
                         <label class="label-style col-xs-6">إسم المنطقة</label>
                         <select class="form-control col-xs-6" name="area_id" id="area_id">
                             <option value="">إختر</option>
                           <?php foreach (selectrecords("*","areas",'')as $row):?>
                               <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                       <?php endforeach;?>
                         </select>
                     </div>
                     <div class="form-group  col-sm-6 col-xs-12">
                         <label class="label-style col-xs-6">المكتب</label>
                         <input class="form-control col-xs-6" name="office"  placeholder="المكتب">
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
                <th>المكتب</th>
                <th>الإجراء</th>
            </tr>
            </thead>
            <tbody>

            <?php


            $count =0;
            foreach ($records as $record): $count++; ?>
            <tr>
                <td rowspan="<?php echo sizeof($record->office)?>"><?php echo $count ?></td>
                <td rowspan="<?php echo sizeof($record->office)?>" ><?php echo $record->name ;?></td>
                <?php foreach($record->office  as  $keys): ?>
                <td><?php echo $keys->name;?></td>
                <td data-title="التحكم" class="text-center">
                        <a href="<?php echo base_url().'Admin/update_office/'.$keys->id.''?>" class="btn btn-sm btn-success">تعديل </a>
                        <a  href="<?php echo base_url().'Admin/delete_office/'.$keys->id.''?>" class="btn btn-sm btn-danger"> حذف </a>
                </td>
            </tr>
                <?php  endforeach; ?>

            <?php endforeach;?>



            </tbody>
        </table>
    </div><!-- /.box-body



     -->



