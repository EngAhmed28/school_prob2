<div class="col-xs-12 r-nav r-xs">


    <div class="col-xs-4 col-xs-6  r-xs">
        <h3 class="text-center"> المملكة العربية السعودية </h3>
        <h3 class="text-center"> وزارة التعليم</h3>
        <h3 class="text-center">الإدارة العامة للتعليم بمنطقة حائل</h3>
        <h3 class="text-center"> الشؤون التعليمية - إدارة التوجيه والإرشاد (بنين) </h3>
        <h3 class="text-center"> التوجيه والارشاد</h3>
        <h3 class="text-center"> وحدة الخدمات الارشادية</h3>
    </div>
    <div class="col-xs-1 hidden-xs"></div>
    <div class="col-xs-4 hidden-xs r-header">
        <h3 class="text-center" style="padding-left: 101px;"> تسجيل الدخول الى قائمة المشكلات </h3>
        <?php if(@$_SESSION["message"]){
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
        }?>
    </div>

    <div class="col-xs-3 col-xs-6">
        <img src="<?php echo base_url("public/fe/")?>img/logo.png" alt="" class="center-block">
    </div>
</div>
            <div class="col-xs-12 r-all-regist">
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-6 col-sm-8">
                    <fieldset>
                        <?php echo form_open("web/login")?>
                        <div class="form-top">
                            <div class="form-top-left">
                                <div class="col-xs-12 r-xs">
                                    <h3 class="text-center"><span><i class="fa fa-lock" aria-hidden="true"></i></span> تسجيل دخول </h3>
                                </div>
                            </div>
                        </div>
                        <div class="form-bottom col-xs-12 r-xs">

                            <div class="form-group ">
                                <input type="text" name="user_name" class="form-control" placeholder="اسم المستخدم" id="fname">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="كلمة المرور" class="form-email form-control" id="email" required>
                            </div>

                            <div class="col-xs-12 ">
                                <button type="submit" value="login" name="login" class="btn btn-next r-center-block center-block"> دخول </button>
                            </div>
                        </div>
                    </fieldset>
<?php form_close()?>
                </div>
                <div class="col-md-3 col-sm-2"></div>

            </div>
