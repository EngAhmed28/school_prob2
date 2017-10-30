
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
                    $("#answer").html('<div class="overlay">' +'<i style="margin-right: 477px;color: #0064ff;" class="fa fa-refresh fa-spin"></i>' +'</div>');
                },
                success:function(data){
                    $("#answer").html(data);
                }
            });
            return false;
        });
        $("#go").click(function () {

            var data=$("#quizform").serialize();
            var action="<?php echo base_url('admin/fullreport_area/')?>";
            $.ajax({
                url:action,
                type:'POST',
                data:data,
                dataType: "html",
                beforeSend:function(){
                    $("#result").html('<div class="overlay">' +'<i  style="margin-right: 477px;color: #0064ff;" class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>' +'</div>');
                },
                success:function(data){
                    $("#result").html(data);
                }
            });
            return false;
        });
    })
</script>
    <section class="content-header">
        <h1>
       تقرير عام بالمدارس
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">تقرير</li>
        </ol>
    </section>
    <br />



    <div class="box-body">
    <div class="row">

<div class="col-md-12">

            <!-- general form elements -->
            <div class="box box-primary col-xs-12">
                 <br />
                <br />
                          <?php echo form_open("admin/schoolreports",array("id"=>"quizform"))?>
    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">اختر المنطقة التعليمي</label>
           <select name="area_id_fk" id="area_id_fk"  class="form-control col-xs-6 select2" onchange="return lood($('#area_id_fk').val())">
                                            <option value="">اختر المنطقة التعليمية</option>
                                            <?php
                                            $input=array(
                                            "from_id_fk" =>"0"
                                            );

                                            foreach (selectrecords("*","areas",$input)as $area):?>
                                            <option value="<?php echo $area->id?>"><?php echo $area->name?></option>
                                            <?php endforeach;?>
                                        </select>
    </div>


    </div>


    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">اختر المكتب</label>
     <select name="learning_office" id="optionearea1" onchange=" return lood2($('#area_id_fk').val(),$('#optionearea1').val())" class="form-control col-xs-6 select2" >
     <option value="">اختر المكتب </option>

                                        </select>
    </div>
    </div>

    <!--<div id="optionearea2"></div> -->
    <div class="col-xs-12">
    <div class="form-group col-md-6 col-sm-6 col-xs-12">
        <label class="label-style col-xs-6">اختر المدرسة</label>
     <select name="school_id" id="optionearea2" class="form-control col-xs-6 select2" >
       <option value="">اختر المدرسة </option>

                                        </select>
    </div>
    </div>
     <div class="col-xs-12">
       <div class="form-group col-md-6 col-sm-12 col-xs-12">
                <label class="label-style col-xs-6">اختر احد الإسئلة من القائمة</label>
                <select name="question_id_fk" id="question_id_fk" class="form-control col-xs-6 select2" >
                    <option value="">اختر </option>
                    <option  value="all">كل الأسئلة</option>
                    <?php foreach (selectrecords("*","questions",'','questation_id_pk','asc')as $quiz):?>
                        <option value="<?php echo $quiz->questation_id_pk?>"><?php echo $quiz->questation_title?></option>
                    <?php endforeach;?>
                </select>
            </div><!-- /.form-group -->
            </div>
            <div class="col-xs-12">
            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                <label class="label-style col-xs-6">اختر احد الاجابات  </label>
                <select id="answer" name="answer_id_fk" class="form-control col-xs-6 select2" >
                    <option value="">اختر </option>
                    <option value="all">الكل </option>
                    <option value="1">قوي</option>
                    <option value="2">متوسط</option>
                    <option value="3">ضعيف</option>
                    <option value="4">لايوجد</option>
                </select>
            </div><!-- /.form-group -->
</div>

             <div class="col-xs-12">
            <div class="form-group col-md-12">
                <br>
                <button class="btn btn-success form-control" id="go" type="submit" name="go" value="go">عرض التقرير</button>
            </div><!-- /.form-group -->
            </div>
     <?php form_close()?>

   </div>
    </div>
   </div>
   </div>
<div class="box-body no-padding" id="result"></div>

<script>
    function lood(num){
        $("#optionearea1").html('<option value="">--قم بالإختيار--</option>');
        $("#optionearea2").html('<option value="">--قم بالإختيار--</option>');
      
        if(num>0 && num != '')
        {
            var dataString = 'store_id=' + num ;
            $.ajax({
                type:'post',
                url: '<?php echo base_url() ?>web/registration',
                data:dataString,
                dataType: 'html',
                cache:false,
                success: function(html){
                    $("#optionearea1").html(html);
                }
            });
            return false;
        }
    }
</script>

<script>
    function lood2(num,id){

        $("#optionearea2").html('<option value="">--قم بالإختيار--</option>');
        
        if(num >0 && num != '')
        {
            
           
           var dataString = 'area_id=' + num + '&id_offic=' + id;
            $.ajax({
                type:'post',
                url: '<?php echo base_url() ?>admin/area_reports',
                data:dataString,
                dataType: 'html',
                cache:false,
                success: function(html){
                    $("#optionearea2").html(html);
                }
            });
            return false;
        }
    }
</script>