
<section class="content-header">
    <h1>
        المدارس المسجلة بالنظام        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">قوائم المدارس</li>
    </ol>
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>م</th>
            <th>اسم المدرسة</th>
            <th>الرقم الوزارى</th>
            <th>المنطقة التعليمية</th>
            <th>المحافظة</th>
            <th>المكتب التعليمي</th>
            <th>اسم المشرف</th>
            <th>البريد</th>
            <th>رقم الجوال</th>
            <th>نوع المدرسة</th>
            <th>عدد الطلاب</th>
            <th>الحالة</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (selectrecords("*","schools","","","","learning_area","learning_area.area_id_pk=schools.area_id_fk","")as $school):?>
            <tr>
                <td><?php echo $school->school_id_pk?></td>
                <td><?php echo $school->school_name?></td>
                <td><?php echo $school->ministry_numper?></td>
                <td><?php echo $school->area_name?></td>
                <td><?php echo $school->governorate?></td>
                <td><?php echo $school->learning_office?></td>
                <td><?php echo $school->manager_name?></td>
                <td><?php echo $school->school_email?></td>
                <td><?php echo $school->manager_phone?></td>
                <td><?php echo ($school->school_type=="secondary")?"ثانوى":"متوسط"?></td>
                <td><?php echo $school->first_stage+$school->secound_stage+$school->thired_stage?></td>
                <td>
                    <div class="btn-group">
                      <?$school_id_pk=$school->school_id_pk?>
                        <a href="<?echo base_url("admin/accept/$school_id_pk")?>"class="btn btn-success">قبول</a>

                    </div>


                </td>

            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
</div><!-- /.box-body -->