
<style>
    .label-style{
        background-color: #367fa9;
        color: #fff;
        height: 34px;
        line-height: 30px;
    }


</style>


<div class="row">
    <div class="col-md-12">
        <div class="box box-primary"><br>
            <div class="col-xs-12">
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                    <label class="label-style col-xs-6"> المنطقة</label>
                    <select class="form-control col-xs-6" name="area_id" id="area_id" onchange="return load_office();">
                        <option value="">إختر</option>
                        <?php
                        $arr =array('from_id_fk'=>0);
                        foreach (selectrecords("*","areas",$arr)as $row):?>
                            <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12" >
                    <label class="label-style col-xs-6"> المكتب</label>
                    <select class="form-control col-xs-6 office_id" name="office_id"   id="optionearea2"  onchange="return load_school();">
                        <option value="">إختر</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                    <label class="label-style col-xs-6"> المدرسة</label>
                    <select class="form-control col-xs-6" name="school_id" id="optionearea3"   >
                        <option value="">إختر</option>
                    </select>
                </div>
                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                    <label class="label-style col-xs-6"> السؤال</label>
                    <select class="form-control col-xs-6" name="question_id" id="question_id"  >
                        <option value="">إختر</option>
                        <?php foreach ($questions as $quest):
                            ?>
                            <option value="<?php echo $quest->questation_id_pk;?>"><?php echo $quest->questation_title;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="box-footer text-center">
                <button type="button" name="save" onclick="return go();" value="save" class="btn btn-primary">بحث</button>
            </div>
        </div>
    </div>
</div>
<div id="optionearea5"></div>




<script>

    function load_office() {
        var area=  document.getElementById('area_id').value;
        if(area>0 && area != '')
        {
            var dataString = 'area=' + area ;
            $.ajax({
                type:'post',
                url: '<?php echo base_url() ?>Admin/load',
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



<script>

    function load_school() {
        var office=  document.getElementById('optionearea2').value;
        if(office>0 && office != '')
        {
            var dataString = 'office=' + office ;
            $.ajax({
                type:'post',
                url: '<?php echo base_url() ?>Admin/load',
                data:dataString,
                dataType: 'html',
                cache:false,
                success: function(html){
                    $("#optionearea3").html(html);
                }
            });
            return false;
        }


    }

</script>








<script>
    function go(){
        var area_id=  document.getElementById('area_id').value;
        var office_id=   document.getElementById('optionearea2').value;
        var school_id=  document.getElementById('optionearea3').value;
        var question_id=  document.getElementById('question_id').value;
        if( area_id != '' && office_id != '' && school_id != '' && question_id != ''){
            var dataString = 'area_id=' + area_id + '&office_id=' + office_id + '&school_id=' + school_id + '&question_id=' + question_id;
            $.ajax({
                type:'post',
                url: '<?php echo base_url() ?>Admin/all_questions_report',
                data:dataString,
                dataType: 'html',
                cache:false,
                success: function(html){
                    $("#optionearea5").html(html);

                }
            });
            return false;
        }
    }
</script>


