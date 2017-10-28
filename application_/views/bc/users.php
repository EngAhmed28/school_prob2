<section class="content-header">
    <h1>
    تعديل بيانات المستخدم
        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">تعديل </li>
    </ol>
</section>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> تعديل البيانات المستخدم</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php echo form_open("admin/edit_profile/".$_SESSION['user_id_pk'],array("role"=>"form"))?>

            <div class="box-body">
                <div class="form-group">
                    <?php
                    // echo "<pre>";
                    //print_r($_SESSION);
                    ?>
                    <label for="exampleInputEmail1">الإيميل</label>
                    <input type="text" name="user_email" readonly value="<?php  echo $_SESSION['user_email']?>" class="form-control" id="exampleInputEmail1" >
                </div>

                <div class="form-group">
                    <?php
                    //echo "<pre>";
                    //print_r($_SESSION);
                    ?>
                    <label for="exampleInputEmail1">كلمة المرور</label>
                    <input type="text" name="password"   class="form-control" id="exampleInputEmail1" >
                    <input type="hidden" name="id" value="<?php  echo $_SESSION['user_id_pk']?>">
                </div>

            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" name="save" value="save" class="btn btn-primary">تعديـل</button>
            </div>
            <?php form_close()?>
        </div><!-- /.box -->
    </div><!-- /.box -->
</div><!-- /.box -->





