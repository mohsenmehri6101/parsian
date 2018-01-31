<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?= Url('assets/plugins/bootstrap/css/bootstrap.rtl.css'); ?>" />
    <link rel="stylesheet" href="<?= Url('assets/css/main.css'); ?>" />
    <link rel="stylesheet" href="<?= Url('assets/css/theme.css'); ?>" />
    <link rel="stylesheet" href="<?= Url('assets/css/MoneAdmin.css'); ?>" />
    <link rel="stylesheet" href="<?= Url('assets/plugins/Font-Awesome/css/font-awesome.css'); ?>" />
    <link href="<?= Url('assets/css/layout2.css'); ?>" rel="stylesheet" />
       <link href="<?= Url('assets/plugins/flot/examples/examples.css'); ?>" rel="stylesheet" />
       <link rel="stylesheet" href="<?= Url('assets/plugins/timeline/timeline.css'); ?>" />
       @yield('head')
</head>

<body class="padTop53 " >
    <!-- MAIN WRAPPER -->
    <div id="wrap">
        
        <!-- HEADER SECTION -->
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                        <img src="<?= Url('assets/img/logo.png'); ?>" alt="" height="30" />
                        <h1 class="site-title">ایران نهاد</h1>
                    </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-left">
                    <li>
                        <a href="<?= url('/logout') ?>"><i class="icon-signout"></i> خروج </a>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->

        <!-- MENU SECTION -->
       <div id="right">
           <div class="media user-media well-small">
               <a class="user-link" href="#">
                   <img class="media-object img-thumbnail user-img" alt="User Picture" style="width: 75px;height: 75px;" src="<?= Url('img/13.png') ?>" />
               </a>
               <br />
               <div class="media-body">
                   <h5 class="media-heading">{{Auth::user()->fname}} {{Auth::user()->lname}}</h5>
                   <ul class="list-unstyled user-info">
                   </ul>
               </div>
               <br />
           </div>
            <ul id="menu" class="collapse">
                <li class="panel ">
                    <a href="<?= Url('admin/index'); ?>" >
                        <i class="icon-home"></i>خلاصه وضعیت
                    </a>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#user-nav">
                        <i class="icon-user"> </i> مدیریت کاربران
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="user-nav">
                        <li class=""><a href="<?=  Url('admin/users/create') ?>"><i class="icon-angle-left"></i>ثبت کاربر جدید</a></li>
                        <li class=""><a href="<?=  Url('admin/users/') ?>"><i class="icon-angle-left"></i> نمایش و مدیریت کاربران</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#agent-nav">
                        <i class="icon-flag"> </i> نمایندگی
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="agent-nav">
                        <li class=""><a href="<?=  Url('admin/agent/create') ?>"><i class="icon-plus"></i> ایجاد نماینده</a></li>
                        <li class=""><a href="<?=  Url('admin/agent/') ?>"><i class="icon-check"></i> نمایش و مدیریت نمایندگی</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#news-nav">
                        <i class="icon-pencil"> </i>اخبار و اطلاعیه ها
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="news-nav">
                        <li class=""><a href="<?=  Url('admin/news/create') ?>"><i class="icon-plus"></i> ایجاد اخبار</a></li>
                        <li class=""><a href="<?=  Url('admin/news/') ?>"><i class="icon-check"></i> نمایش و مدیریت اخبار ها</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#fani-nav">
                        <i class="icon-cog"> </i>اطلاعات فنی
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="fani-nav">
                        <li class=""><a href="<?=  Url('admin/fani/create') ?>"><i class="icon-plus"></i> ایجاد اطلاعات فنی</a></li>
                        <li class=""><a href="<?=  Url('admin/fani/') ?>"><i class="icon-check"></i> نمایش و مدیریت اطلاعات فنی</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#fani-cv_">
                        <i class="icon-book"> </i>رزومه کتبی
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="fani-cv_">
                        <li class=""><a href="<?=  Url('admin/cv_/create') ?>"><i class="icon-plus"></i> ایجاد رزومه کتبی</a></li>
                        <li class=""><a href="<?=  Url('admin/cv_/') ?>"><i class="icon-check"></i> نمایش و مدیریت رزومه کتبی</a></li>
                    </ul>
                </li>
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#fani-cv">
                        <i class="icon-star"> </i>رزومه
                        <span class="pull-left">
                          <i class="icon-angle-right"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="fani-cv">
                        <li class=""><a href="<?=  Url('admin/cv/create') ?>"><i class="icon-plus"></i> ایجاد رزومه </a></li>
                        <li class=""><a href="<?=  Url('admin/cv/') ?>"><i class="icon-check"></i> نمایش و مدیریت رزومه</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="content">
            <div class="inner" style="min-height: 700px;">
        @yield('content')
                </div>
            </div>
    </div>
    <!--END MAIN WRAPPER -->
    <!-- FOOTER -->
    <div id="footer" style="background-color:rgb(34,45,50) !important;">
        <p>کلیه حقوق سایت متعلق به <a href="http://www.i-nahad.ir">ایران نهاد</a> می باشد.</p>
    </div>
    <!--END FOOTER -->
    <!-- GLOBAL SCRIPTS -->
    <script src="<?= Url('assets/plugins/jquery-2.0.3.min.js'); ?>"></script>
     <script src="<?= Url('assets/plugins/bootstrap/js/bootstrap.rtl.js'); ?>"></script>
    <script src="<?= Url('assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js'); ?>"></script>
    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?= Url('assets/plugins/flot/jquery.flot.js'); ?>"></script>
    <script src="<?= Url('assets/plugins/flot/jquery.flot.resize.js'); ?>"></script>
    <script src="<?= Url('assets/plugins/flot/jquery.flot.time.js'); ?>"></script>
     <script  src="<?= Url('assets/plugins/flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?= Url('assets/js/for_index.js'); ?>"></script>
   @yield('script')
    <!-- END PAGE LEVEL SCRIPTS -->


</body>

    <!-- END BODY -->
</html>
