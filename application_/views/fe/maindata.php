
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
                <?php echo form_open("web/maindata/")?>
                <div class="col-xs-12 r-xs r-school-forms">
                    <div class=" col-sm-2 r-xs r-student1">
                        <h3 class="name text-center">اسم الطالب او رقم الهوية  </h3>
                    </div>
                    <div class=" col-sm-7 r-xs r-student1">
                        <h3 class="name "><input type="text" placeholder="إختيارى" name="student_identity" class="form-input"> </h3>
                    </div>
                    <div class="col-sm-3 r-xs">
                        <div class="col-xs-12 r-xs r-student1">
                            <h3 class="text-center r-name-space">
                                <select required name="stage_id_fk" oninvalid="this.setCustomValidity('يجب اختيار الصف الدراسى')" oninput="setCustomValidity('')" title="يجب اختيار الصف الدراسى">
                                    <option readonly="" value="">اختر الصف</option>
                                    <?php foreach (selectrecords("stage_id_pk,stage_name",'stages',array("satge_type"=>$this->session->userdata("school_type"))) as $stage):?>
                                        <option value="<?php echo $stage->stage_id_pk?>"><?php echo $stage->stage_name ?></option>
                                    <?php endforeach;?>
                                </select>

                            </h3>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 r-table-1 r-xs">


                    <table style="width: 100%;">
                        <thead>
                        <tr>
                            <th><i class="fa fa-list" aria-hidden="true"></i></th>
                            <th>السؤال</th>
                            <th  colspan="4">الاجابة</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach (selectrecords("*","questions",array("questation_id_pk<="=>"11"),'','','answers',"questions.questation_id_pk=answers.questation_id_fk") as $value):?>
                        <tr>
                            <td class="r-num"> <?php echo $value->questation_id_pk?> </td>
                                <td class="text-left"> <?php echo $value->questation_title?> </td>
                            <td  >

                                    <input type="hidden" name="question_id_fk<?echo $value->questation_id_pk?>" value="<?echo $value->questation_id_pk?>">

                                    <?php
                                    $data=unserialize($value->answer_title);
                                    print_r($data);?>

                                     <select style="height: 2%" required oninvalid="this.setCustomValidity('يجب اختيار احد الإجابات')" oninput="setCustomValidity('')" name="answer_id_fk<?echo $value->questation_id_pk?>" class="form-control" >
                                                    <option value="">اختر </option>
                                                     <?php $data=unserialize($value->answer_title);
                                                     $i=1;
                                                     ?>
                                                     <?php foreach ($data as $answer):?>
                                                     <option value="<?php echo $i?>"><?php echo $answer;
                                                                                            $i++?></option>
                                                     <?php endforeach;?>
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
