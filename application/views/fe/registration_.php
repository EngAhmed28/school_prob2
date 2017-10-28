
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
                    <h3 class="text-center"> قائمة مشكلات الطلاب للمرحلتين الثانوية والتموسطة </h3>
                </div>

                <div class="col-sm-3 col-xs-6">
                    <img src="<?php echo base_url("public/fe/")?>img/logo.png" alt="" class="center-block">
                </div>

                <div class="col-xs-12 r-all-regist">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8 form-box">
                            <?php echo form_open("web/registration")?>

                            <fieldset>
                                <div class="form-top">
                                    <div class="form-top-left" style="padding: 4%">
                                        <div class="col-xs-12 r-xs">

                                            <div class="col-xs-6 r-xs">
                                                <h3 class="pull-right"> تسجيل مدرسة جديدة</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-bottom">

                                    <div class="form-group">

                                        <select name="area_id_fk" class="form-control">
                                            <option value="">اختر المنطقة التعليمية</option>
                                            <?php foreach (selectrecords("*","learning_area")as $area):?>
                                            <option value="<?php echo $area->area_id_pk?>"><?php echo $area->area_name?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select name="year" class="form-control">
                                            <option value="">اختر العام الدراسى</option>
                                            <option value="1439">1438/1439</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="governorate" placeholder="المحافظة" class="form-email form-control" id="email"  required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="learning_office" placeholder="مكتب التربية والتعليم" class="form-email form-control" id="email"  required>
                                    </div>


                                    <div class="form-group" style="margin-bottom:3px;">
                                        <div class="row">
                                            <div class="form-group col-md-12 col-sm-12">
                                                <select name="school_type" class="form-control">
                                                    <option value="">اختر المرحلة التعليمية</option>
                                                    <option value="prep">متوسط</option>
                                                    <option value="secondary">ثانوي</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <input type="text" name="school_name" class="form-control" placeholder="الاسم المدرسة" id="lname">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="ministry_numper" placeholder="الرقم الوزارى" class="form-email form-control" id="email"  required>
                                    </div>


                                    <div class="form-group">
                                        <input type="email" name="school_email" oninvalid="this.setCustomValidity('يجب كتابة البريد الإليكترونى بشكل صحيح ')" oninput="setCustomValidity('')"  placeholder="البريد الاليكترونى" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="manager_name" placeholder="اسم قائد المدرسة" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="phone" name="manager_phone" placeholder="رقم الجوال" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="first_stage" placeholder="عدد طلاب الصف الاول" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="secound_stage" placeholder="عدد طلاب الصف الثانى" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="thired_stage" placeholder="عدد طلاب الصف الثالث" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="user_name" placeholder="اسم المستخدم" class="form-email form-control" id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" placeholder="كلمة المرور" class="form-email form-control" id="email" required>
                                    </div>
                                    <button type="submit" name="register" value="register" class="btn btn-success">تسجيل</button>
                                </div>
                            </fieldset>
         <?php form_close()?>

            </div>
