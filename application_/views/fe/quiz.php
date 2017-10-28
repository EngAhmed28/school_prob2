
<div class="col-xs-12 r-nav r-xs">


    <div class="col-sm-4 col-xs-6  r-xs">
        <h3 class="text-center"> المملكة العربية السعودية </h3>
        <h3 class="text-center"> وزارة التعليم</h3>
        <h3 class="text-center">الإدارة العامة للتعليم بمنطقة حائل</h3>
        <h3 class="text-center"> الشؤون التعليمية - إدارة التوجيه والإرشاد (بنين) </h3>
        <h3 class="text-center"> التوجيه والارشاد</h3>
        <h3 class="text-center"> وحدة الخدمات الارشادية</h3>
    </div>

    <div class="col-md-1 hidden-xs"></div>
    <div class="col-sm-4 hidden-xs r-header">
        <h3 class="text-center"> قائمة مشكلات </h3>
    </div>
    <div class="col-sm-3 col-xs-6">
        <img src="<?php echo base_url("public/fe/img/logo.png")?>" alt="" class="center-block">
    </div>

</div>
<div class="col-xs-12 r-header1">
    <h3 class="text-center">  الطلاب فى المرحلتين الثانوية والمتوسطة </h3>
</div>
<div class="col-xs-12 ">
    <?php echo form_open("web/quiz/")?>

    <div class="col-xs-12 r-table-1 r-xs">


        <table style="width: 100%;">
            <thead>
            <tr>
                <th><i class="fa fa-list" aria-hidden="true"></i></th>
                <th>السؤال</th>
                <th width="30%" colspan="4">اختر الإجابة من الخيارات المتاحة</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach (selectrecords("*","questions",array("questation_id_pk>"=>"11","questation_id_pk<"=>"103"),'','','',"") as $value):?>
                <tr>
                    <td class="r-num"> <?php echo $value->questation_id_pk?> </td>
                    <td class="text-left"> <?php echo $value->questation_title?> </td>
                    <td  >
                        <input type="hidden" name="question_id_fk<?echo $value->questation_id_pk?>" value="<?echo $value->questation_id_pk?>">



                        <select style="height: 2%" required oninvalid="this.setCustomValidity('يجب اختيار احد الإجابات')" oninput="setCustomValidity('')" name="answer_id_fk<?echo $value->questation_id_pk?>" class="form-control" >
                                <option value="1">قوي</option>
                                <option value="2">متوسط</option>
                                <option value="3">ضعيف</option>
                                <option value="4">لايوجد</option>
                        </select>
                    </td>
                </tr>
            <?php endforeach;?>

            </tbody>
        </table>
        <div class="form-group" style="padding: 7%">

            <button type="submit" name="save" value="save" class="btn-success form-control">التالى >></button>


        </div>

    </div>
    <?php form_close()?>
</div>
