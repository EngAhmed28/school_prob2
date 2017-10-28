 <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title> قائمة مشكلات الطلاب </title>
        <meta name="description" content="Examples for creative website header animations using Canvas and JavaScript" />
        <meta name="keywords" content="header, canvas, animated, creative, inspiration, javascript" />
        <meta name="author" content="Codrops" />

        <link rel="stylesheet" href="<?php echo base_url("public/fe/")?>css/bootstrap-arabic-theme.min.css" />
        <link rel="stylesheet" href="<?php echo base_url("public/fe/")?>css/bootstrap-arabic.min.css" />
        <link rel="stylesheet" href="<?php echo base_url("public/fe/")?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url("public/fe/")?>css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    </head>

    <body>
    <div class="r-estbian col-xs-12 r-xs">
        <div class="container r-xs">
            <!------ header ------>
            <div class="col-xs-12 nav-ul-index">
                <ul class="ul-1 pull-right">
                    <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="ul-2 pull-left">
                    <li>للتواصل / <span>  <a href="mailto:e900141@hailsa.gov.sa" style="color: #fff; text-decoration: none">e900141@hailsa.gov.sa</a></span></li>

                </ul>
            </div>
            <div class="col-xs-12 r-nav r-xs r-index">

                <div class="col-sm-3 col-xs-6">
                    <img src="<?php echo base_url("public/fe/")?>img/all.png" alt="" class="center-block r-index-img">
                </div>
                <div class="col-sm-9 r-nav-index">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="pull-right">
                            <li><a href="">  الرئيسية </a></li>
                            <li><a href="<?php echo base_url()."web/home_data"?>"> قائمه المشكلات  </a></li>
                            <li><a href="mailto:e900141@hailsa.gov.sa"> إتصل بنا  </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--------- slider ---------->
            <div class="col-xs-12 r-slider-index">
                <div id="first-slider">
                    <div id="carousel-example-generic" class="carousel slide carousel-fade">




                        <div class="carousel-inner" role="listbox">
                            <div class="item active ">
                                <img data-animation="animated" src="<?php echo base_url("public/fe/")?>img/slider_data/1.jpg">
                            </div>
                            <div class="item ">
                                <img data-animation="animated" src="<?php echo base_url("public/fe/")?>img/slider_data/2.jpg">
                            </div>

                            <div class="item ">
                                <img data-animation="animated" src="<?php echo base_url("public/fe/")?>img/slider_data/8.jpeg">
                            </div>
                            <div class="item ">
                                <img data-animation="animated" src="<?php echo base_url("public/fe/")?>img/slider_data/12.png">
                            </div>

                        </div>

                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-------- block ------->
            <div class="col-xs-12 r-block-index">
                <div class="col-sm-4">
                    <div class="col-xs-12 r-bord-block">
                        <img src="<?php echo base_url("public/fe/")?>img/21912651_1538236252882351_1935657299_n.png" alt="" class="center-block">
                       <p class="text-center" style="    padding-top:0;">
                           المملكة العربية السعودية
<br>
                           وزارة التعليم
                           <br>
                           الإدارة العامة للتعليم بمنطقة حائل
                           <br>
                           الشؤون التعليمية - إدارة التوجيه والإرشاد (بنين)
                           <br>
                           وحدة الخدمات الارشادية
                           <br>
                       </p>
                        <button data-toggle="modal" data-target="#myModal2" class="btn center-block r-btn-index"> المزيد </button>
                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="<?php echo base_url("public/fe/")?>img/21912651_1538236252882351_1935657299_n.png" alt="" class="center-block">
                                        <p>
                                            المملكة العربية السعودية
                                            <br>
                                            وزارة التعليم
                                            <br>
                                            الإدارة العامة للتعليم بمنطقة حائل
                                            <br>
                                            الشؤون التعليمية - إدارة التوجيه والإرشاد (بنين)
                                            <br>
                                            وحدة الخدمات الارشادية
                                            <br>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4 ">
                    <div class="col-xs-12 r-bord-block">
                        <img src="<?php echo base_url("public/fe/")?>img/21905504_1538236096215700_1746392928_n.jpg" alt="" class="center-block">

                        <p  style="     padding-top: 0px; padding-right: 91px;     line-height: 28px;">
                            <i class="fa fa-telegram" aria-hidden="true"></i>    https://t.me/e900141
<br>
                           <i class="fa fa-twitter" aria-hidden="true"></i>   e900141 ‬
                            </br>
                            <i class="fa fa-snapchat-square" aria-hidden="true"></i> e900141s
                        </br>
                            <i class="fa fa-instagram" aria-hidden="true"></i> e900141s
                        </br>
                            <i class="fa fa-envelope" aria-hidden="true"></i> e900141@hailsa.gov.sa
                            </br>

                        </p>
                        </br>
                        <button data-toggle="modal" data-target="#myModal1" class="btn center-block r-btn-index"> المزيد </button>
                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="<?php echo base_url("public/fe/")?>img/21905504_1538236096215700_1746392928_n.jpg" alt="" class="center-block">
                                        <p >
                                            <i class="fa fa-telegram" aria-hidden="true"></i>    https://t.me/e900141
                                            <br>
                                            <i class="fa fa-twitter" aria-hidden="true"></i>   e900141 ‬
                                            </br>
                                            <i class="fa fa-snapchat-square" aria-hidden="true"></i> e900141s
                                            </br>
                                            <i class="fa fa-instagram" aria-hidden="true"></i> e900141s
                                            </br>
                                            <i class="fa fa-envelope" aria-hidden="true"></i> e900141@hailsa.gov.sa
                                            </br>

                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-xs-12 r-bord-block">
                        <img src="<?php echo base_url("public/fe/")?>img/21849185_1538236039549039_341260737_n.jpg" alt="" class="center-block">

                        <p class="text-center">الاشراف العام

                        مدير ادارة التوجيه والارشاد بحائل
                            <br>
                            خالد بن صالح البليهي
                            <br>
                            المتابعه والدعم
                            <br>
                            المشرف على وحده الخدمات الارشادية
                            <br>
                            مانع بن سالم الشبرمي
                            <br>
                            مرشد طلاب ثانوية الخوازمي
                            <br>
                            سعيد عكلان المنيس
 <br>
                            للاستفسار والمقترحات :<a href="mailto:e900141@hailsa.gov.sa" style="">e900141@hailsa.gov.sa</a>
                        </p>
                        <button data-toggle="modal" data-target="#myModal" class="btn center-block r-btn-index"> المزيد </button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="<?php echo base_url("public/fe/")?>img/21849185_1538236039549039_341260737_n.jpg" alt="" class="center-block">
                                        <p>

                                            مدير إدارة التوجيه والإرشاد بحائل
                                            <br>
                                            خالد بن صالح البليهي
                                            <br>
                                            المتابعه والدعم
                                            <br>
                                            المشرف على وحده الخدمات الإرشادية
                                            <br>
                                            مانع بن سالم الشبرمي
                                            <br>
                                            مرشد طلاب ثانوية الخوازمي
                                            <br>
                                            سعيد عكلان المنيس
                                            <br>
                                            للإستفسار والمقترحات :<a href="mailto:e900141@hailsa.gov.sa" style="">e900141@hailsa.gov.sa</a>
                                        </p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">اغلاق</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-------- video ------->
            <div class="col-xs-12 r-video-index">
                <div class="col-sm-6">
                    <h3 class="text-center"> فكرة البرنامج </h3>
                    <p>
                        رغبتا في تطوير جزء هام من العملية التعليمية في مجال التوجيه والارشاد فقد تم تحويل قائمة المشكلات الخاصة بالتوجيه والارشاد إلى برنامج الكترونى يدعم تطبيقات الويب بما يمكن القائمين على هذا القطاع من الاستفادة من الخصائص التقنية في تحرير وتحليل وجمع البيانات الخاصة بالطلاب الذين يقومون على تحرير القائمة مع الحصول على تلك التحليلات بأشكال مختفلة ومتنوعة وقد قام على هذه الفكرة فكرة ادارة التوجيه و الارشاد التابعة لإدارة التعليم بمنطقة حائل ممثلا فى أ/ مانع سالم الشبرمى ، وقام على تطويرها برمجيا مؤسسة الأثير تك لتكنولوجيا المعلومات 0543629615  .
  </p>
                </div>
                <div class="col-sm-3" style="padding: 5px;">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/Wm3ngrEbMkk" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="col-sm-3" style="padding: 5px;">
                    <iframe width="100%" height="280" src="https://www.youtube.com/embed/dznTMceEOW0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>


            <!-------- footer --------->
            <div class="col-xs-12 r-footer-school">
                <div class="col-sm-6 col-xs-12">
                    <h3>
                        جميع الحقوق محفوظة لدى إداره التوجيه والارشاد بحائل

                    </h3>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <h3 class="text-right index-footer-h3">


                        حقوق التصميم والتطوير لدي شركة الأثير تك

                    </h3>
                </div>
            </div>
        </div>
    </div>










    <script type="text/javascript " src="<?php echo base_url("public/fe/")?>js/jquery-1.10.1.min.js "></script>
    <script src="<?php echo base_url("public/fe/")?>js/bootstrap-arabic.min.js "></script>


    <!-------- slider animation ------>
    <script>
        (function($) {

            //Function to animate slider captions
            function doAnimations(elems) {
                //Cache the animationend event in a variable
                var animEndEv = 'webkitAnimationEnd animationend';

                elems.each(function() {
                    var $this = $(this),
                        $animationType = $this.data('animation');
                    $this.addClass($animationType).one(animEndEv, function() {
                        $this.removeClass($animationType);
                    });
                });
            }

            //Variables on page load
            var $myCarousel = $('#carousel-example-generic'),
                $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

            //Initialize carousel
            $myCarousel.carousel();

            //Animate captions in first slide on page load
            doAnimations($firstAnimatingElems);

            //Pause carousel
            $myCarousel.carousel('pause');


            //Other slides to be animated on carousel slide event
            $myCarousel.on('slide.bs.carousel', function(e) {
                var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                doAnimations($animatingElems);
            });
            $('#carousel-example-generic').carousel({
                interval: 3000,
                pause: "false"
            });

        })(jQuery);

    </script>

    </body>

    </html>



    <!--
<div class="col-xs-12 r-nav r-xs">
                <div class="col-xs-12 r-xs">
                    <div class="col-md-4 col-sm-3"></div>
                    <div class="col-md-4 col-sm-6">
                        <img src='<?php echo base_url("public/fe/")?>img/logo.png' alt="" class="r-dashboard center-block">
                    </div>
                    <div class="col-md-4 col-sm-3"></div>
                </div>
                <div class="col-xs-12 r-dash-log">
                    <div class="col-sm-2 col-xs-0 "></div>
                    <div class="col-sm-4 col-xs-6">
                        <button class="r-dash-link center-block"> <a href="<?php echo base_url("web/login")?> ">  دخول</a></button>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <button class="r-dash-link  center-block"> <a href=" <?php echo base_url("web/registration")?>"> تسجيل  </a></button>
                    </div>
                    <div class="col-sm-2 col-xs-0"></div>
                </div>
            </div>

-->


