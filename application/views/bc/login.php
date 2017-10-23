<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>/plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page" style="direction: rtl">
    <div class="login-box">
      <div class="login-logo">
        <a href=""><b>لوحة</b>الإدارة</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">تسجيل الدخول الى لوحة الادارة</p>
        <p class="login-box-msg"><?php echo @$_SESSION["message"]?></p>
         <?php echo form_open("admin/login/")?>
          <div class="form-group has-feedback">
            <input type="text"name="user_name" class="form-control" placeholder="اسم المستخدم">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="كلمة المرور">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck pull-left">
                <label>
                  <input type="checkbox"> تذكرنى
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="login" value="login" class="btn btn-primary btn-block btn-flat">تسجيل دخول</button>
            </div><!-- /.col -->
          </div>
<? form_close()?>
          <a href="#">نسيت كلمة المرور</a><br>
<!--        <a href="register.html" class="text-center">تسجيل جديد</a>

-->      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url("public/bc/")?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="<?php echo base_url("public/bc/")?>/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("public/bc/")?>/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
