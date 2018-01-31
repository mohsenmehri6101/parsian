<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--<script src="<?= Url('assets/plugins/jquery-2.0.3.min.js'); ?>"></script> -->
    <script src=" <?= url('index/js/jssor.slider-26.5.2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= url('index/js/JSslider.js'); ?> "></script>
    <link rel="stylesheet" href="<?= Url('assets/plugins/bootstrap/css/bootstrap.rtl.css'); ?>" />
    <link href="<?= url('index/css/style.css'); ?>  " rel="stylesheet" />
    <script src="<?= Url('assets/plugins/bootstrap/js/bootstrap.rtl.js'); ?>"></script>
    <script src=" http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="<?= url('index/css/StyleSheetmenu.css'); ?>  " rel="stylesheet" />
    <link href="<?= url('index/css/style_slide.css'); ?>  " rel="stylesheet" />
</head>
<body style="background-color:rgb(168,158,123);">
<!--header -->
<div style="text-align:center;" class="container-fluid">
        <div id="header_" class="row">
            <div class="col-sm-3">
                <img src="<?= url('index/img/footer2.jpg'); ?>" />
            </div>
            <div class="col-sm-6" style="text-align:center;"><h1 style="padding-top:100px;font-size:38pt;">ALUTECH</h1></div>
            <div class="col-sm-3">
                <img src="<?= url('index/img/footer1.jpg'); ?>" />
            </div>
        </div>
    <!--end header -->
    <!--nav -->
    <div id="nav_" class="container-fluid" style="opacity:0.4;">
            <nav class="navbar" style="background-color:whitesmoke;">
                    <ul id="p1" class="nav navbar-nav">
                        <li class="active"><a style="opacity:1;font-size:20px!important;color:black !important;" href="<?= Url('admin/agent/'); ?>">خانه</a></li>
                        <li><a style="opacity:1;font-size:20px!important;color:black !important;" href="<?= Url('admin/agent/'); ?>">معرفی نماینده</a></li>
                        <li><a style="opacity:1;font-size:20px!important;color:black !important;" href="<?= Url('admin/agent/'); ?>">تماس با ما</a></li>
                    </ul>
            </nav>
        </div>
    <script type="text/javascript">
        $.document.ready(function(){
            var el=document.getElementById("p1");
            el.style.opacity =1;
        })
    </script>
    <!--end nav -->
    <div  id="slideshow" class="row">
            <div class="col-sm-4" style="width:300px;height:350px;background-color:whitesmoke;">
                <div class="row">
                    <div class="col-sm-12" style="text-align:center;">اخبار و اطلاعیه ها</div>
                </div>
                <div  style="width:250px;height:300px;background-color:black;"></div>
            </div>
            <div class="col-sm-8">
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                            <div>
                                <img data-u="image" src="<?= url('index/img/001.jpg'); ?>" />
                            </div>
                            <div>
                                <img data-u="image" src="<?= url('index/img/002.jpg'); ?>" />
                            </div>
                            <div>
                                <img data-u="image" src="<?= url('index/img/003.jpg'); ?>" />
                            </div>
                        </div>
                        <!-- Bullet Navigator -->
                        <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                        <!-- Arrow Navigator -->
                        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                            </svg>
                        </div>
                    </div>
                    <script type="text/javascript">jssor_1_slider_init();</script>
            </div>
    </div>
    <!--end slide info.. -->
    <div class="row"></div>
    <div class="footer"><div class="row"></div></div>
</div>
<script src="<?= Url('assets/plugins/jquery-2.0.3.min.js'); ?>"></script>
<script src="<?= Url('assets/plugins/bootstrap/js/bootstrap.rtl.js'); ?>"></script>
<script src="<?= Url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
<!-- END GLOBAL SCRIPTS -->
<!-- PAGE LEVEL SCRIPTS -->
</body>
</html>
