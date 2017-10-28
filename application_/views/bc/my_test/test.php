<select name="administration" id="administration" required="required" class="form-control text-right"
        onchange="return lood('1');" >
    <option value="">إخت 3333ر</option>
    <?php if(!empty($all_areas)):
        foreach ($all_areas as $record):?>
            <option value="<? echo $record->id;?>"><? echo $record->name;?></option>
        <?php  endforeach; endif;?>
</select>

<select name="department"  class="form-control text-right" required="required"  id="">
    <option value="">إختر</option>
</select>

<div id="optionearea1"></div>


<script>
    function lood(num){
       
        if(num>0 && num != '')
        {
            var id = num;
            var dataString = 'admin_num=' + id ;
            $.ajax({
                type:'post',
                url: '<?php echo base_url() ?>Admin/tester',
                data:dataString,
                dataType: 'html',
                cache:false,
                success: function(html){
                    $("#optionearea1").html(html);
                }
            });
            return false;
        }
        else
        {
            $("#vid_num").val('');
            $("#optionearea1").html('');
        }
    }
</script>