
<div class="col-xs-12 r-nav r-xs">


    <div class="col-sm-4 col-xs-6  r-xs">
        <h3 class="text-center"> المملكه العربية السعودية - وزارة التعليم</h3>
        <h3 class="text-center"> إداره التعليم بمحافظه الليث </h3>
        <h3 class="text-center"> الشؤون التعليمية - التوجيه والارشاد</h3>
        <h3 class="text-center"> وحدة الخدمات الارشادية</h3>
        <h3 class="text-center"> العام الدراسي 143هـ / 143هـ </h3>
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
    <div class="col-xs-12 r-xs r-school-forms">
        <div class=" col-sm-2 r-xs r-student1">
            <h3 class="name text-center">اسم الطالب او رقم الهوية  </h3>
        </div>
        <div class=" col-sm-7 r-xs r-student1">
            <h3 class="name "><input type="text" placeholder="إختيارى" name="student_identy" class="form-input"> </h3>
        </div>
        <div class="col-sm-3 r-xs">
            <div class="col-xs-12 r-xs r-student1">
                <h3 class="text-center r-name-space">
                    <select required name="stage_id_fk">
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
                <th>المشاكل الصحية</th>
                <th class="r-kind">قوي</th>
                <th class="r-kind">متوسط</th>
                <th class="r-kind">ضعيف</th>
                <th class="r-kind">لايوجد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="r-num"> 1 </td>
                <td class="text-left"> أعاني من مرض في القلب </td>
                <td>
                    <input type="radio" name="gender" id="box-1"><label for="box-1"></label>
                </td>
                <td>
                    <input type="radio" name="gender" id="box-2"><label for="box-2"></label>
                </td>
                <td>
                    <input type="radio" name="gender" id="box-3"><label for="box-3"></label>
                </td>
                <td>
                    <input type="radio" name="gender" id="box-4"><label for="box-4"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 2 </td>
                <td class="text-left"> أعاني من سمنة زائدة </td>
                <td>
                    <input type="radio" name="gender1" id="box-5"><label for="box-5"></label>
                </td>
                <td>
                    <input type="radio" name="gender1" id="box-6"><label for="box-6"></label>
                </td>
                <td>
                    <input type="radio" name="gender1" id="box-7"><label for="box-7"></label>
                </td>
                <td>
                    <input type="radio" name="gender1" id="box-8"><label for="box-8"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 3 </td>
                <td class="text-left"> أعاني من ضعف في النظر </td>
                <td>
                    <input type="radio" name="gender2" id="box-9"><label for="box-9"></label>
                </td>
                <td>
                    <input type="radio" name="gender2" id="box-10"><label for="box-10"></label>
                </td>
                <td>
                    <input type="radio" name="gender2" id="box-11"><label for="box-11"></label>
                </td>
                <td>
                    <input type="radio" name="gender2" id="box-12"><label for="box-12"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 4 </td>
                <td class="text-left"> أعاني من ضعف في السمع </td>
                <td>
                    <input type="radio" name="gender3" id="box-13"><label for="box-13"></label>
                </td>
                <td>
                    <input type="radio" name="gender3" id="box-14"><label for="box-14"></label>
                </td>
                <td>
                    <input type="radio" name="gender3" id="box-15"><label for="box-15"></label>
                </td>
                <td>
                    <input type="radio" name="gender3" id="box-16"><label for="box-16"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 5 </td>
                <td class="text-left"> أعاني من مرض فقر الدم </td>
                <td>
                    <input type="radio" name="gender4" id="box-17"><label for="box-17"></label>
                </td>
                <td>
                    <input type="radio" name="gender4" id="box-18"><label for="box-18"></label>
                </td>
                <td>
                    <input type="radio" name="gender4" id="box-19"><label for="box-19"></label>
                </td>
                <td>
                    <input type="radio" name="gender4" id="box-20"><label for="box-20"></label>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xs-12 r-table-1 r-xs">
        <table style="width: 100%;">
            <thead>
            <tr>
                <th><i class="fa fa-list" aria-hidden="true"></i></th>
                <th>المشاكل الاجتماعية</th>
                <th class="r-kind">قوي</th>
                <th class="r-kind">متوسط</th>
                <th class="r-kind">ضعيف</th>
                <th class="r-kind">لايوجد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="r-num"> 1 </td>
                <td class="text-left"> انقاد لآلخرين بسهولة </td>
                <td>
                    <input type="radio" name="gender5" id="box-21"><label for="box-21"></label>
                </td>
                <td>
                    <input type="radio" name="gender5" id="box-22"><label for="box-22"></label>
                </td>
                <td>
                    <input type="radio" name="gender5" id="box-23"><label for="box-23"></label>
                </td>
                <td>
                    <input type="radio" name="gender5" id="box-24"><label for="box-24"></label>
                </td>

            </tr>
            <tr>
                <td class="r-num"> 2 </td>
                <td class="text-left"> أفكر كثيراً في ترك المدرسة ألساعد أسرتي </td>
                <td>
                    <input type="radio" name="gender6" id="box-25"><label for="box-25"></label>
                </td>
                <td>
                    <input type="radio" name="gender6" id="box-26"><label for="box-26"></label>
                </td>
                <td>
                    <input type="radio" name="gender6" id="box-27"><label for="box-27"></label>
                </td>
                <td>
                    <input type="radio" name="gender6" id="box-28"><label for="box-28"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 3 </td>
                <td class="text-left"> لا أواظب على أداء الصلاة </td>
                <td>
                    <input type="radio" name="gender7" id="box-29"><label for="box-29"></label>
                </td>
                <td>
                    <input type="radio" name="gender7" id="box-30"><label for="box-30"></label>
                </td>
                <td>
                    <input type="radio" name="gender7" id="box-31"><label for="box-31"></label>
                </td>
                <td>
                    <input type="radio" name="gender7" id="box-32"><label for="box-32"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 4 </td>
                <td class="text-left"> أصلي بدون وضوء في بعض األحيان </td>
                <td>
                    <input type="radio" name="gender8" id="box-33"><label for="box-33"></label>
                </td>
                <td>
                    <input type="radio" name="gender8" id="box-34"><label for="box-34"></label>
                </td>
                <td>
                    <input type="radio" name="gender8" id="box-35"><label for="box-35"></label>
                </td>
                <td>
                    <input type="radio" name="gender8" id="box-36"><label for="box-36"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 5 </td>
                <td class="text-left"> لا أستثمر أوقات فراغي بما يفيد</td>
                <td>
                    <input type="radio" name="gender9" id="box-37"><label for="box-37"></label>
                </td>
                <td>
                    <input type="radio" name="gender9" id="box-38"><label for="box-38"></label>
                </td>
                <td>
                    <input type="radio" name="gender9" id="box-39"><label for="box-39"></label>
                </td>
                <td>
                    <input type="radio" name="gender9" id="box-40"><label for="box-40"></label>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-xs-12 r-table-1 r-xs">
        <table style="width: 100%;">
            <thead>
            <tr>
                <th><i class="fa fa-list" aria-hidden="true"></i></th>
                <th>المشاكل النفسية</th>
                <th class="r-kind">قوي</th>
                <th class="r-kind">متوسط</th>
                <th class="r-kind">ضعيف</th>
                <th class="r-kind">لايوجد</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="r-num"> 1 </td>
                <td class="text-left"> انقاد لآلخرين بسهولة </td>
                <td>
                    <input type="radio" name="gender10" id="box-41"><label for="box-41"></label>
                </td>
                <td>
                    <input type="radio" name="gender10" id="box-42"><label for="box-42"></label>
                </td>
                <td>
                    <input type="radio" name="gender10" id="box-43"><label for="box-43"></label>
                </td>
                <td>
                    <input type="radio" name="gender10" id="box-44"><label for="box-44"></label>
                </td>

            </tr>
            <tr>
                <td class="r-num"> 2 </td>
                <td class="text-left"> أفكر كثيراً في ترك المدرسة ألساعد أسرتي </td>
                <td>
                    <input type="radio" name="gender11" id="box-45"><label for="box-45"></label>
                </td>
                <td>
                    <input type="radio" name="gender11" id="box-46"><label for="box-46"></label>
                </td>
                <td>
                    <input type="radio" name="gender11" id="box-47"><label for="box-47"></label>
                </td>
                <td>
                    <input type="radio" name="gender11" id="box-48"><label for="box-48"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 3 </td>
                <td class="text-left"> لا أواظب على أداء الصلاة </td>
                <td>
                    <input type="radio" name="gender12" id="box-49"><label for="box-49"></label>
                </td>
                <td>
                    <input type="radio" name="gender12" id="box-50"><label for="box-50"></label>
                </td>
                <td>
                    <input type="radio" name="gender12" id="box-51"><label for="box-51"></label>
                </td>
                <td>
                    <input type="radio" name="gender12" id="box-52"><label for="box-52"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 4 </td>
                <td class="text-left"> أصلي بدون وضوء في بعض األحيان </td>
                <td>
                    <input type="radio" name="gender13" id="box-53"><label for="box-53"></label>
                </td>
                <td>
                    <input type="radio" name="gender13" id="box-54"><label for="box-54"></label>
                </td>
                <td>
                    <input type="radio" name="gender13" id="box-55"><label for="box-55"></label>
                </td>
                <td>
                    <input type="radio" name="gender13" id="box-56"><label for="box-56"></label>
                </td>
            </tr>
            <tr>
                <td class="r-num"> 5 </td>
                <td class="text-left"> لا أستثمر أوقات فراغي بما يفيد</td>
                <td>
                    <input type="radio" name="gender14" id="box-57"><label for="box-57"></label>
                </td>
                <td>
                    <input type="radio" name="gender14" id="box-58"><label for="box-58"></label>
                </td>
                <td>
                    <input type="radio" name="gender14" id="box-59"><label for="box-59"></label>
                </td>
                <td>
                    <input type="radio" name="gender14" id="box-60"><label for="box-60"></label>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</div>
