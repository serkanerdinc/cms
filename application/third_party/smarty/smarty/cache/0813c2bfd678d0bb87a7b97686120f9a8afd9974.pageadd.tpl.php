<?php
/*%%SmartyHeaderCode:12914558abd52714ad9_26786770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0813c2bfd678d0bb87a7b97686120f9a8afd9974' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/page/pageadd.tpl',
      1 => 1435155768,
      2 => 'file',
    ),
    'b7b195520cf40d7075967a9f18a3d958c6034ea6' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/template.tpl',
      1 => 1435155706,
      2 => 'file',
    ),
    '4c93f1e12c530a29ff9ebabc5e34bab6c90c7d64' => 
    array (
      0 => '4c93f1e12c530a29ff9ebabc5e34bab6c90c7d64',
      1 => 0,
      2 => 'string',
    ),
    '12bf74cf0a8bd6beb070ecc9734e0a0efa627ac8' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/left-navigation.tpl',
      1 => 1435142649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12914558abd52714ad9_26786770',
  'tpl_function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558abd52b624d4_92762220',
  'cache_lifetime' => 120,
),true);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558abd52b624d4_92762220')) {
function content_558abd52b624d4_92762220 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="/admin/assets/images/ios/fickle-logo-72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/admin/assets/images/ios/fickle-logo-72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/admin/assets/images/ios/fickle-logo-114.png" />

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/ico/fab.ico">

    <title>CMS - Dashboard</title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="/admin/assets/css/plugins/pace.css">
    <script src="/admin/assets/js/pace.min.js"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/css/plugins/bootstrap-progressbar-3.1.1.css">
    <link rel="stylesheet" href="/admin/assets/css/plugins/jquery-jvectormap.css">

    <!--AmaranJS Css Start-->
    <link href="/admin/assets/css/plugins/amaranjs/jquery.amaran.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/all-themes.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/awesome.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/default.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/blur.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/user.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/rounded.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/readmore.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/amaranjs/theme/metro.css" rel="stylesheet">
    <!--AmaranJS Css End -->

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="/admin/assets/css/style.css" rel="stylesheet">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="/admin/assets/css/responsive.css" rel="stylesheet">
    <!-- Responsive Style For-->

    <!-- Custom styles for this template -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="deep-blue-color">
<!--Navigation Top Bar Start-->
<nav class="navigation">
    <div class="container-fluid">
        <!--Logo text start-->
        <div class="header-logo">
            <a href="/paneladmin" title="">
                <h1>CMS</h1>
            </a>
        </div>
        <!--Logo text End-->
        <div class="top-navigation">
            <!--Collapse navigation menu icon start -->
            <div class="menu-control hidden-xs">
                <a href="javascript:void(0)">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="search-box">
                <ul>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                            <span class="fa fa-search"></span>
                        </a>
                        <div class="dropdown-menu  top-dropDown-1">
                            <h4>Search</h4>
                            <form>
                                <input type="search" placeholder="what you want to see ?">
                            </form>
                        </div>

                    </li>
                </ul>
            </div>

            <!--Collapse navigation menu icon end -->
            <!--Top Navigation Start-->

            <ul>

                <li class="dropdown">
                    <!--Notification drop down start-->
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">
                        <span class="fa fa-bell-o"></span>
                        <span class="badge badge-red">6</span>
                    </a>

                    <!--<div class="dropdown-menu right top-notification">
                        <h4>Notification</h4>
                        <ul class="ls-feed">
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-red">
                                            <i class="fa fa-check white"></i>
                                        </span>
                                    You have 4 pending tasks.
                                    <span class="date">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-light-green">
                                            <i class="fa fa-bar-chart-o"></i>
                                        </span>
                                    Finance Report for year 2013
                                    <span class="date">30 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-lightBlue">
                                            <i class="fa fa-shopping-cart"></i>
                                        </span>
                                    New order received with
                                    <span class="date">45 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-lightBlue">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    5 pending membership
                                    <span class="date">50 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-red">
                                            <i class="fa fa-bell"></i>
                                        </span>
                                    Server hardware upgraded
                                    <span class="date">1 hr</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                        <span class="label label-blue">
                                            <i class="fa fa-briefcase"></i>
                                        </span>
                                    IPO Report for
                                    <span class="lightGreen">2014</span>
                                    <span class="date">5 hrs</span>
                                </a>
                            </li>
                            <li class="only-link">
                                <a href="javascript:void(0)">View All</a>
                            </li>
                        </ul>
                    </div>-->
                    <!--Notification drop down end-->
                </li>

                <li class="hidden-xs">
                    <a class="right-sidebar-setting" href="#settings">
                        <i class="fa fa-cogs"></i>
                    </a>
                </li>
                <li>
                    <a href="/paneladmin/logout">
                        <i class="fa fa-power-off"></i>
                    </a>
                </li>

            </ul>
            <!--Top Navigation End-->
        </div>
    </div>
</nav>
<!--Navigation Top Bar End-->
<section id="main-container">

    <!--Left navigation section start-->
<section id="left-navigation">
    <!--Left navigation user details start-->
    <div class="user-image">
        <img src="/admin/assets/images/userimage/avatar1-80.png" alt=""/>

        <div class="user-online-status"><span class="user-status is-online  "></span></div>
    </div>
    <!--<ul class="social-icon">
        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-github"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-bitbucket"></i></a></li>
    </ul>-->
    <!--Left navigation user details end-->

    <!--Phone Navigation Menu icon start-->
    <div class="phone-nav-box visible-xs">
        <a class="phone-logo" href="index.html" title="">
            <h1>CMS Menü</h1>
        </a>
        <a class="phone-nav-control" href="javascript:void(0)">
            <span class="fa fa-bars"></span>
        </a>

        <div class="clearfix"></div>
    </div>
    <!--Phone Navigation Menu icon start-->

    <!--Left navigation start-->
    <ul class="mainNav">
        <li >
            <a  href="/paneladmin">
                <i class="fa fa-dashboard"></i> <span>Kontrol Paneli</span>
            </a>
        </li>
        <li class="active">
            <a href="#">
                <i class="fa fa-list-alt"></i> <span>Sayfalar</span>
            </a>
            <ul>
                <li><a href="#l">Sayfa Ekle </a></li>
                <li><a href="#">Tüm Sayfalar </a></li>
                <li><a href="/paneladmin/page/terms/category" >Kategoriler </a></li>
                <li><a href="/paneladmin/page/terms/tag" >Etiketler </a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-camera"></i> <span>Ortam</span>
            </a>
            <ul>
                <li><a href="#">Resimler </a></li>
                <li><a href="#">Kataloglar </a></li>
                <li><a href="#">Galeriler </a></li>
                <li><a href="#">Yeni Ortam Ekle </a></li>

            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-trophy"></i>
                <span>Slider</span>
            </a>
            <ul>
                <li><a href="#">Tüm Sliderlar</a></li>
                <li><a href="#">Yeni Ekle</a></li>

            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-gears"></i>
                <span>Genel Ayarlar</span>
            </a>
            <ul>
                <li><a href="#">Genel Ayarlar</a></li>
                <li><a href="#">İletişim Bilgileri</a></li>
                <li><a href="#">Sosyal Hesaplar</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-users"></i> <span>Yönetici Hesapları</span>
            </a>
        </li>
    </ul>
    <!--Left navigation end-->
</section>
<!--Left navigation section end-->


    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                
<div class="row">
    <div class="col-md-12">
        <!--Top header start-->
        <h3 class="ls-top-header">Kategoriler</h3>
        <!--Top header end -->

        <!--Top breadcrumb start -->
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Sayfalar</a></li>
            <li class="active">Sayfa Ekle</li>
        </ol>
        <!--Top breadcrumb start -->
    </div>
</div>
<!-- Main Content Element  Start-->


<div class="row home-row-top">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Yeni Sayfa Ekle</h3>
            </div>
            <div class="panel-body">
            	<form role="form" class="ls_form" method="post">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" value="" name="name" class="form-control">
                    	<b>Slug:</b> http://www.pratiktariflerim.com/<input type="text"  value="slug" name="slug" width="40px" >.html
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3"  placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <textarea class="form-control" id="keywords" name="keywords" rows="3"  placeholder="Keywords"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="ckeditor" id="editor1" style="width: 100%; height: 250px;" name="content"></textarea>
                    </div>
                    
                </form>
            </div>
		</div>
    </div>
    <div class="col-md-3">
    	<div class="row">
    	
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Yayınla</h3>
		            </div>
		            <div class="panel-body">
		            	<div class="form-group" >
		            		<a href="#" class="btn btn-danger btn-lg"><i class="fa fa-bitbucket"></i></a>
	                        <button class="btn ls-green-btn btn-lg" type="submit">Yayınla</button>
	                    </div>
		            </div>
				</div>
    	
    		</div>
		
		</div>
		<div class="row">
    	
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Kategoriler</h3>
		            </div>
		            <div class="panel-body">
		            	
		            	
		            </div>
				</div>
    	
    		</div>
		
		</div>
		<div class="row">
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Etiketler</h3>
		            </div>
		            <div class="panel-body">
		            </div>
				</div>
    	
    		</div>
		
		</div>
		
		<div class="row">
    		<div class="col-md-12">
	       		<div class="panel panel-default">
		            <div class="panel-heading">
		                <h3 class="panel-title">Sayfa Resmi</h3>
		            </div>
		            <div class="panel-body">
		            </div>
				</div>
    	
    		</div>
		
		</div>
    </div>
</div>
<script src="/admin/ckeditor/ckeditor.js" type="text/javascript" charset="utf-8"></script>
<script src="/admin/ckeditor/samples/sample.js" type="text/javascript" charset="utf-8"></script>
<!-- Main Content Element  End-->

            </div>
        </div>

    </section>
    <!--Page main section end -->
    <!--Right hidden  section start-->

        <!--Tab content -->
    </section>
    <!--Right hidden  section end -->

</section>

<!--Layout Script start -->
<script type="text/javascript" src="/admin/assets/js/color.js"></script>
<script type="text/javascript" src="/admin/assets/js/lib/jquery-1.11.min.js"></script>
<script type="text/javascript" src="/admin/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/admin/assets/js/multipleAccordion.js"></script>

<!--easing Library Script Start -->
<script src="/admin/assets/js/lib/jquery.easing.js"></script>
<!--easing Library Script End -->

<!--Nano Scroll Script Start -->
<script src="/admin/assets/js/jquery.nanoscroller.min.js"></script>
<!--Nano Scroll Script End -->

<!--switchery Script Start -->
<script src="/admin/assets/js/switchery.min.js"></script>
<!--switchery Script End -->

<!--bootstrap switch Button Script Start-->
<script src="/admin/assets/js/bootstrap-switch.js"></script>
<!--bootstrap switch Button Script End-->

<!--easypie Library Script Start -->
<script src="/admin/assets/js/jquery.easypiechart.min.js"></script>
<!--easypie Library Script Start -->

<!--bootstrap-progressbar Library script Start-->
<script src="/admin/assets/js/bootstrap-progressbar.min.js"></script>
<!--bootstrap-progressbar Library script End-->

<!--FLoat library Script Start -->
<script type="text/javascript" src="/admin/assets/js/chart/flot/jquery.flot.js"></script>
<script type="text/javascript" src="/admin/assets/js/chart/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/admin/assets/js/chart/flot/jquery.flot.resize.js"></script>
<!--FLoat library Script End -->

<script type="text/javascript" src="/admin/assets/js/pages/layout.js"></script>
<!--Layout Script End -->



<script src="/admin/assets/js/countUp.min.js"></script>

<!-- skycons script start -->
<script src="/admin/assets/js/skycons.js"></script>
<!-- skycons script end   -->

<!--Vector map library start-->
<script src="/admin/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/admin/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!--Vector map library end-->

<!--AmaranJS library script Start -->
<script src="/admin/assets/js/jquery.amaran.js"></script>
<!--AmaranJS library script End   -->
<script src="/admin/assets/js/pages/dashboard.js"></script>
</body>
</html><?php }
}
?>