<script>
    $(document).ready(function () {

        $("#school_id_fk").change(function () {
            var school_id_fk=$(this).find('option:selected').val();
            var action="<?php echo base_url('admin/getallstages/')?>";
            $.ajax({
                url:action,
                type:'POST',
                data:{"school_id_fk":school_id_fk},
                dataType: "html",
                beforeSend:function(){
                    $("#stages").html('<div class="overlay">\n' +'<i class="fa fa-refresh fa-spin"></i>\n' +'</div>\n');
                },
                success:function(data){
                    $("#stages").html(data);
                }
            });
            return false;
        });

        $("#question_id_fk").change(function () {
            var question_id_fk=$(this).find('option:selected').val();
            var action="<?php echo base_url('admin/loadreasult/')?>";
            $.ajax({
                url:action,
                type:'POST',
                data:{"question_id_fk":question_id_fk},
                dataType: "html",
                beforeSend:function(){
                    $("#answer").html('<div class="overlay">\n' +'<i class="fa fa-refresh fa-spin"></i>\n' +'</div>\n');
                },
                success:function(data){
                    $("#answer").html(data);
                }
            });
            return false;
        });

        $("#go").click(function () {
            var data=$("#quizform").serialize();
            var action="<?php echo base_url('admin/schoolreports/')?>";
            $.ajax({
                url:action,
                type:'POST',
                data:data,
                dataType: "html",
                beforeSend:function(){
                    $("#result").html('<div class="overlay">\n' +'<i class="fa fa-refresh fa-spin"></i>\n' +'</div>\n');
                },
                success:function(data){
                    $("#result").html(data);
                }
            });
            return false;
        });
    })
</script>

<div class="box-header">
    <h3 class="box-title">إحصائيات المدارس</h3>
</div><!-- /.box-header -->
<div class="box-body">
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open("admin/schoolreports",array("id"=>"quizform"))?>
            <div class="form-group col-md-2">
                <label>اختر المدرسة</label>
                <select  name="school_id_fk" id="school_id_fk" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="all">كل المدارس</option>
                    <?php foreach (selectrecords("school_id_pk,school_name,school_type",'schools') as $school):?>
                        <option value="<?php echo $school->school_id_pk?>/<?php echo $school->school_type?>"><?php echo $school->school_name ?></option>
                    <?php endforeach;?>
                </select>
            </div><!-- /.form-group -->
            <div class="form-group col-md-2">
                <label>اختر الصف</label>

                <select  name="stage_id_fk" id="stages" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="all">كل الصفوف</option>
                    <?php foreach (selectrecords("stage_id_pk,stage_name",'stages') as $stage):?>
                        <option value="<?php echo $stage->stage_id_pk?>"><?php echo $stage->stage_name ?></option>
                    <?php endforeach;?>
                </select>
            </div><!-- /.form-group -->
            <div class="form-group col-md-4">
                <label>اختر احد الإسئلة من القائمة</label>
                <select name="question_id_fk" id="question_id_fk" class="form-control select2" style="width: 100%;">
                    <option selected="selected" value="all">كل الأسئلة</option>
                    <?php foreach (selectrecords("*","questions")as $quiz):?>
                        <option value="<?php echo $quiz->questation_id_pk?>"><?php echo $quiz->questation_title?></option>
                    <?php endforeach;?>
                </select>
            </div><!-- /.form-group -->
            <div class="form-group col-md-2">
                <label>اختر احد الاجابات من القائمة</label>
                <select id="answer" name="answer_id_fk" class="form-control select2" style="width: 100%;">
                    <option value="">اختر </option>
                    <option value="1">قوي</option>
                    <option value="2">متوسط</option>
                    <option value="3">ضعيف</option>
                    <option value="4">لايوجد</option>

                </select>
            </div><!-- /.form-group -->
            <div class="form-group col-md-2">
                <br>
                <button class="btn btn-success form-control" id="go" type="submit" name="go" value="go">عرض التقرير</button>
            </div><!-- /.form-group -->

            <?php form_close()?>

        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.box-body -->



<div class="box-body no-padding" id="result">


</div><!-- /.box-body -->
