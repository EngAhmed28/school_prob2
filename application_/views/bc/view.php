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
            قائمة بالمشكلات
            <small></small>
        </h1>
    </section>
 <br>

<div class="col-xs-12">
    <div class="form-group col-md-4 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إسم المدرسة</label>
        <input class="form-control col-xs-6" name="" value="" placeholder="">
    </div>
    <div class="form-group col-md-4 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إسم المدرسة</label>
        <input class="form-control col-xs-6" name="" value="" placeholder="">
    </div>
    <div class="form-group col-md-4 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">إسم المدرسة</label>
        <input class="form-control col-xs-6" name="" value="" placeholder="">
    </div>

</div>





    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">اضافة سؤال</h3>
                </div>
                <?php echo form_open("admin/questions",array("role"=>"form"))?>


                <div class="col-xs-12">
                    <div class="form-group  col-sm-6 col-xs-12">
                        <label class="label-style col-xs-6">إسم المدرسة</label>
                        <input class="form-control col-xs-6" name="" value="" placeholder="">
                    </div>
                    <div class="form-group  col-sm-6 col-xs-12">
                        <label class="label-style col-xs-6">إسم المدرسة</label>
                        <input class="form-control col-xs-6" name="" value="" placeholder="">
                    </div>
                    <div class="form-group  col-sm-6 col-xs-12">
                        <label class="label-style col-xs-6">إسم المدرسة</label>
                        <input class="form-control col-xs-6" name="" value="" placeholder="">
                    </div>
                    <div class="form-group  col-sm-6 col-xs-12">
                        <label class="label-style col-xs-6">إسم المدرسة</label>
                        <input class="form-control col-xs-6" name="" value="" placeholder="">
                    </div>

                </div>

                <div class="box-footer text-center">
                    <button type="submit" name="save" value="save" class="btn btn-primary">حفظ</button>
                </div>
                <?php form_close()?>
            </div><!-- /.box -->
        </div><!-- /.box -->
    </div><!-- /.box -->

    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>رقم السؤال</th>
                <th>السؤال</th>
                <th>اجرائات</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach (selectrecords("*","questions",'')as $quiz):?>
            <tr>
                <td><?php echo $quiz->questation_id_pk?></td>
                <td><?php echo $quiz->questation_title?></td>
                <td>تعديل</td>
            </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div><!-- /.box-body -->



