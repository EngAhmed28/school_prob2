    <section class="content-header">
        <h1>
            قائمة بالمشكلات
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">جديد</li>
        </ol>
    </section>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">اضافة سؤال</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open("admin/questions",array("role"=>"form"))?>

                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان السؤال</label>
                        <input type="text" name="questation_title" class="form-control" id="exampleInputEmail1" >
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
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



