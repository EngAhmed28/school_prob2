<style>
    table.dataTable thead > tr > th{
        padding-right: 15px !important;
    }
    table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after{
        display: none !important;
    }
</style>
<section class="content-header">
    <h1>
     بيانات  المدارس      <small></small>
    </h1>
    <ol class="breadcrumb">
        <li class="active">قوائم المدارس</li>
    </ol>
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped" >
        <thead>

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
             <th> حالة المدرسة</th>
            <th> تعديل</th>
            <th> حذف</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $x=0;
        ?>
        <?php foreach (selectrecords("*","schools","","","","learning_area","learning_area.area_id_pk=schools.area_id_fk","")as $school):?>
            <tr>
                <td><?php echo  ++$x?></td>
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
                <?php
                if($school->school_status == 1 ){?>
                   <?php
                    $class = 'success';
                    $title = 'نشط';
                    ?>
                <?}else{?>
                   <?php
                    $class = 'danger';
                    $title = 'غير نشط';
                    ?>
                <?php
                }

                ?>
              <td>

<?php
$this->db->select('*');
$this->db->from('users');
$this->db->where('school_id_fk=',$school->school_id_pk);
$query = $this->db->get();

    foreach ($query->result() as $row) {
    // print_r();
?>
                  <a href="<?php echo base_url().'Admin/suspend_articles/'.$school->school_id_pk.'/'.$class.'/'.$row->user_id_pk?>" class="btn btn-sm btn-<?php echo $class ?> "><?php echo $title ?> </a>
              <?php
                    }

                  ?>
              </td>

                <td>
                    <a href="<?php echo base_url().'Admin/update_school/'.$school->school_id_pk.'/'.$row->user_id_pk?>" class="btn btn-sm btn-success">تعديل </a>

                </td>
                <td>
            <a  href="<?php echo base_url().'Admin/delete_school/'.$school->school_id_pk.'/'.$row->user_id_pk?>" class="btn btn-sm btn-danger"> حذف </a>
                
                </td>
            </tr>
        <?php endforeach;?>

        </tbody>
    </table>
</div><!-- /.box-body -->