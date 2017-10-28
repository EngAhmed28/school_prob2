

<section class="content-header">
        <h1>
تعديل بيانات المدرسة
<small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">تعديل</li>
        </ol>
    </section>
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">تعديل بيانات المدرسة</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php echo form_open("admin/update_school/".$result[0]->school_id_pk,array("role"=>"form"))?>

<div class="box-body">
    <div class="form-group">
        <label for="exampleInputEmail1">اختر المنطقة التعليمية</label>
        <select name="area_id_fk" class="form-control">

            <?php foreach (selectrecords("*","learning_area")as $area){

                if($result[0]->area_id_fk == $area->area_id_pk){
                   $selected= 'selected="selected"';
                }else{
                    $selected= '';
                }

                ?>
                <option value="<?php echo $area->area_id_pk?>" <?php echo $selected ;?> > <?php echo $area->area_name?></option>
            <?php }?>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">اختر العام الدراسى</label>
        <select name="year" class="form-control">
            <option value="1439">1438/1439</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">المحافظة</label>
        <input type="text" name="governorate" placeholder="المحافظة" value="<?php echo $result[0]->governorate; ?>" class="form-email form-control" id="email"  required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">مكتب التربية والتعليم</label>
        <input type="text" name="learning_office" placeholder="مكتب التربية والتعليم" value="<?php echo $result[0]->learning_office; ?>" class="form-email form-control" id="email"  required>
    </div>


    <div class="form-group" style="margin-bottom:3px;">
        <label for="exampleInputEmail1">اختر المرحلة التعليمية</label>
        <div class="row">
            <div class="form-group col-md-12 col-sm-12">
                <select name="school_type" class="form-control">
                  <?php
                  if($result[0]->school_type == "prep" ){?>
                      <option value="prep">متوسط</option>
                      <option value="secondary">ثانوي</option>
  <?php   }else{ ?>

                      <option value="secondary">ثانوي</option>
                      <option value="prep">متوسط</option>
                  <?php }

                  ?>

                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">الاسم المدرسة</label>

            <input type="text" name="school_name"  value="<?php echo $result[0]->school_name ?>" class="form-control" placeholder="الاسم المدرسة" id="lname">

    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">الرقم الوزارى</label>

        <input type="text" name="ministry_numper" value="<?php echo $result[0]->ministry_numper ?>" placeholder="الرقم الوزارى" class="form-email form-control" id="email"  required>

    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">البريد الاليكترونى</label>

        <input type="email" name="school_email" value="<?php echo $result[0]->school_email ?>" oninvalid="this.setCustomValidity('يجب كتابة البريد الإليكترونى بشكل صحيح ')" oninput="setCustomValidity('')"  placeholder="البريد الاليكترونى" class="form-email form-control" id="email" required>

    </div>



    <div class="form-group">
        <label for="exampleInputEmail1">اسم قائد المدرسة</label>
        <input type="text" name="manager_name" placeholder="اسم قائد المدرسة"  value="<?php echo $result[0]->manager_name ?>" class="form-email form-control" id="email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">رقم الجوال</label>
        <input type="phone" name="manager_phone" placeholder="رقم الجوال" value="<?php echo $result[0]->manager_phone ?>" class="form-email form-control" id="email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">عدد طلاب الصف الاول</label>
        <input type="text" name="first_stage" placeholder="عدد طلاب الصف الاول"  value="<?php echo $result[0]->first_stage ?>" class="form-email form-control" id="email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">عدد طلاب الصف الثانى</label>
        <input type="text" name="secound_stage" placeholder="عدد طلاب الصف الثانى" value="<?php echo $result[0]->secound_stage ?>" class="form-email form-control" id="email" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">عدد طلاب الصف الثالث</label>
        <input type="text" name="thired_stage" placeholder="عدد طلاب الصف الثالث" value="<?php echo $result[0]->thired_stage ?>" class="form-email form-control" id="email" required>
    </div>
    <!--
    <div class="form-group">
        <label for="exampleInputEmail1">اسم المستخدم</label>
        <input type="text" name="user_name" placeholder="اسم المستخدم"  value="<?php echo $result[0]->name ?>" class="form-email form-control" id="email" required>
    </div>
    <div class="form-group">
        <input type="text" name="password" placeholder="كلمة المرور" value="<?php echo  sha1(md5($result[0]->password)); ?>" class="form-email form-control" id="email" required>
    </div>
    -->







</div><!-- /.box-body -->

<div class="box-footer">
    <input type="hidden" name="school_id_pk" value="<?php echo $result[0]->school_id_pk; ?>">
    <button type="submit" name="update" value="update" class="btn btn-success">تعديل</button>
</div>
<?php form_close()?>
</div><!-- /.box -->
</div><!-- /.box -->
</div><!-- /.box -->






