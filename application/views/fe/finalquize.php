<script>
    $(document).ready(function () {

            $("#answer_id_fk-104").on("change",function () {
                var option=$(this).find('option:selected').val();
                if (option==1){
                    $("#area-104").removeClass("hidden");
                   // $(this).hide();
                }

            });
            $("#answer_id_fk-105").on("change",function () {
                var option=$(this).find('option:selected').val();
                if (option==1){
                    $("#area-105").removeClass("hidden");
                   // $(this).hide();
                }

            });


            $("#answer_id_fk-106").on("change",function () {
                var option=$(this).find('option:selected').val();
                if (option==1){
                    $("#area-106").removeClass("hidden");
                   // $(this).hide();
                }

            });

            $("#answer_id_fk-107").on("change",function () {
                var option=$(this).find('option:selected').val();
                if (option==1){
                    $("#area-107").removeClass("hidden");
                   // $(this).hide();
                }

            });


        $("#answer_id_fk-108").on("change",function () {
            var option=$(this).find('option:selected').val();
            if (option==1){
                $("#area-108").removeClass("hidden");
                //$(this).hide();
            }

        });

        $("#answer_id_fk-109").on("change",function () {
            var option=$(this).find('option:selected').val();
            if (option==1){
                $("#area-109").removeClass("hidden");
                //$(this).hide();
            }

        });
        $("#answer_id_fk-110").on("change",function () {
            var option=$(this).find('option:selected').val();
            if (option==1){
                $("#area-110").removeClass("hidden");
             //   $(this).hide();
            }

        });

        $("#answer_id_fk-113").on("change",function () {
            var option=$(this).find('option:selected').val();
            if (option==4){
                $("#area-113").removeClass("hidden");
               // $(this).hide();
            }

        });


    })


</script>
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
        <img src="<?php echo base_url("public/fe/")?>img/logo.png" alt="" class="center-block">
    </div>

</div>
<div class="col-xs-12 r-header1">
    <h3 class="text-center">  الطلاب فى المرحلتين الثانوية والمتوسطة </h3>
</div>
<div class="col-xs-12 ">
    <?php echo form_open("web/finalquize/")?>

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

            <tr>
                <?php $q=getrecordbyid(array("questation_id_pk"=>103),"questions"); ?>
                <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                <td >
                    <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                      <input type="text" class="form-control"  id="first" name="fail[]" placeholder="ابتدائى">
                      <input type="text" class="form-control" id="secound" name="fail[]" placeholder="متوسط">
                    <input type="text" class="form-control" id="thired" name="fail[]" placeholder=" الثانوى">


                </td>

            </tr>

                <tr>
                    <?php $q=getrecordbyid(array("questation_id_pk"=>104),"questions"); ?>
                    <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                    <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                    <td >
                        <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                        <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                            <option value="2">لا</option>

                            <option value="1">نعم</option>
                        </select>
                        <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                    </td>

                </tr>
<!--105===========================================================================================-->

                <tr>
                    <?php $q=getrecordbyid(array("questation_id_pk"=>105),"questions"); ?>
                    <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                    <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                    <td >
                        <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                        <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                            <option value="2">لا</option>

                            <option value="1">نعم</option>
                        </select>
                        <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                    </td>

                </tr>
                <!--106===========================================================================================-->

                <tr>
                    <?php $q=getrecordbyid(array("questation_id_pk"=>106),"questions"); ?>
                    <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                    <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                    <td >
                        <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                        <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                            <option value="2">لا</option>

                            <option value="1">نعم</option>
                        </select>
                        <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                    </td>

                </tr>
                <!--107===========================================================================================-->
                <tr>
                    <?php $q=getrecordbyid(array("questation_id_pk"=>107),"questions"); ?>
                    <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                    <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                    <td >
                        <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                        <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                            <option value="2">لا</option>

                            <option value="1">نعم</option>
                        </select>
                        <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                    </td>

                </tr>
                <!--108===========================================================================================-->
                <tr>
                    <?php $q=getrecordbyid(array("questation_id_pk"=>108),"questions"); ?>
                    <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                    <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                    <td >
                        <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                        <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                            <option value="2">لا</option>

                            <option value="1">نعم</option>
                        </select>
                        <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                    </td>

                </tr>
                <!--107===========================================================================================-->

                <tr>
                    <?php $q=getrecordbyid(array("questation_id_pk"=>109),"questions"); ?>
                    <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                    <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                    <td >
                        <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                        <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                            <option value="2">لا</option>

                            <option value="1">نعم</option>
                        </select>
                        <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                    </td>

                </tr>
                <!--108===========================================================================================-->


            <tr>
                <?php $q=getrecordbyid(array("questation_id_pk"=>110),"questions"); ?>
                <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                <td >
                    <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                    <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                        <option value="2">لا</option>

                        <option value="1">نعم</option>
                    </select>
                    <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                </td>

            </tr>
            <tr>
                <?php $q=getrecordbyid(array("questation_id_pk"=>111),"questions"); ?>
                <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                <td >
                    <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                    <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                        <option value="1">نفسية</option>
                        <option value="2">إجتماعية</option>
                        <option value="3">إقتصادية</option>
                        <option value="4">صحية</option>
                        <option value="5">سلوكية</option>
                    </select>
                </td>

            </tr>
            <!--109===========================================================================================-->
            <tr>
                <?php $q=getrecordbyid(array("questation_id_pk"=>112),"questions"); ?>
                <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                <td >
                    <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                    <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                        <option value="1">المرشد</option>
                        <option value="2">الوكيل</option>
                        <option value="3">الوحدة</option>
                        <option value="4">اخرى</option>
                    </select>
                </td>
            </tr>
            <tr>
                <?php $q=getrecordbyid(array("questation_id_pk"=>113),"questions"); ?>
                <td class="r-num"> <?php echo $q["questation_id_pk"]?> </td>
                <td class="text-left"> <?php echo $q["questation_title"]?> </td>
                <td >
                    <input type="hidden" name="question_id_fk<?echo $q["questation_id_pk"]?>" value="<?echo $q["questation_id_pk"]?>">
                    <select class="form-control" style="height: 2%" name="answer_id_fk<?echo $q["questation_id_pk"]?>" id="answer_id_fk-<?echo $q["questation_id_pk"]?>">
                        <option value="1">قوى</option>
                        <option value="2">متوسط</option>
                        <option value="3">ضعيف</option>
                        <option value="4">لاتعتبر على الاطلاق</option>
                    </select>
                    <textarea class="hidden" cols="25" id="area-<?echo $q["questation_id_pk"]?>" name="answer_text<?echo $q["questation_id_pk"]?>"></textarea>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="form-group" style="padding: 7%">
            <button type="submit" name="save" value="save" class="btn-success form-control"> حفظ الإجابات</button>
        </div>
    </div>
    <?php form_close()?>
</div>
