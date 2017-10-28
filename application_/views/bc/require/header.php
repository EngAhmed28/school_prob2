<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>الأثير-<?php echo (isset($seo["title"]))?$seo["title"]:" قائمة مشكلات المدارس "?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons 2.0.0 -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>/plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="<?php echo base_url("public/bc/")?>dist/css/rtl.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



    <!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
   
    <link rel="shortcut icon" href="<?php echo base_url("public/bc/")?>/logo.png"/>

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>اثير</b>تك</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>الاثير</b>تك</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                             <!--   <ul class="menu">
                                    <li><!-- start message -->
                                    <!--    <a href="#">
                                            <div class="pull-right">
                                                <img src="<? //php echo base_url("public/bc/")?>dist/img/avtar.png" class="img-circle" alt="User Image">
                                            </div>
                                            <h4>
                                                فريق الدعم
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>رسالة ادارية</p>
                                        </a>
                                    </li><!-- end message -->
                             <!--   </ul>
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                  <!--  <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">۱۰</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                             <!--   <ul class="menu">

                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#"></a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                 <!--   <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">۹</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                              <!--  <ul class="menu">
                                    <li><!-- Task item -->
                                      <!--  <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-left">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                  <!--  <li><!-- Task item -->
                                         <!--<a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-left">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                 <!--   <li><!-- Task item -->
                                        <!-- <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-left">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                                   <!-- <li><!-- Task item -->
                                    <!--    <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-left">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- end task item -->
                             <!--   </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url("public/bc/")?>dist/img/avtar.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $this->session->userdata("name")?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <img src="<?php echo base_url("public/bc/")?>dist/img/avtar.png" class="img-circle" alt="User Image">
                                <p>
                                    <small><?php date("d/m/Y")?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?php echo  base_url("admin/edit_profile/".$_SESSION['user_id_pk'])?>" class="btn btn-default btn-flat">تغيير كلمة المرور</a>
                                </div>
                                <div class="pull-left">
                                    <a href="<?php echo  base_url("admin/signout")?>" class="btn btn-default btn-flat">تسجيل خروج</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="<?php echo base_url("public/bc/")?>dist/img/avtar.png" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->userdata("name")?></p>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder=" ...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <?php if ($this->session->userdata("user_type")=="teacher"):?>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>تقارير المدرسة</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("admin/cheetstatics")?>"><i class="fa fa-hand-paper-o"></i> تقارير </a></li>
                    </ul>
                </li>
                <?php endif;?>

                <?php if ($this->session->userdata("user_type")=="owner"):?>
                    <li class="header">بنك الاسئلة</li>
                    <li class="active treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>قائمة المشكلات</span> <i class="fa fa-angle-left pull-left"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li class="active"><a href="<?php echo base_url("admin/questions")?>"><i class="fa fa-circle-o"></i> بنك الاسئلة</a></li>
                        </ul>
                    </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>تقارير</span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url("admin/allschool")?>"><i class="fa fa-circle-o"></i> بيانات المدارس </a></li>
                        <li><a href="<?php echo base_url("admin/schoolstatics")?>"><i class="fa fa-hand-paper-o"></i> تقارير قائمة المشكلات </a></li>
                    </ul>
                </li>
                <?php endif;?>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                الرئيسية
                <small>قائمة المشكلات</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> الاحصائيات</a></li>
                <li class="active">الرئيسية</li>
            </ol>
        </section>
        <section class="content">

            <div class="box-body">
                <div id="messagebox">
                    <?if (isset($_SESSION['message'])):?>
                        <?php echo $_SESSION["message"];unset($_SESSION["message"])?>
                    <?php endif;?>
                </div>
            </div>

