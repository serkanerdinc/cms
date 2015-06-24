<?php /* Smarty version 3.1.24, created on 2015-06-24 05:00:03
         compiled from "C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/page/termsedit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20177558a9bc38d4739_42167671%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '942f4ade08e32ad8a2c1a6eb9fbf92c4bae4ef16' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/page/termsedit.tpl',
      1 => 1435147188,
      2 => 'file',
    ),
    'b7b195520cf40d7075967a9f18a3d958c6034ea6' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/template.tpl',
      1 => 1435063959,
      2 => 'file',
    ),
    '258ac356751a07c25206f4e48a1bee1ded068231' => 
    array (
      0 => '258ac356751a07c25206f4e48a1bee1ded068231',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '20177558a9bc38d4739_42167671',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558a9bc3eeb220_68494524',
  'tpl_function' => 
  array (
    'termsOpt' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => 'C:/wamp/www/cms/application/modules/paneladmin/views/compiled/942f4ade08e32ad8a2c1a6eb9fbf92c4bae4ef16_0.file.termsedit.tpl.cache.php',
      'uid' => '942f4ade08e32ad8a2c1a6eb9fbf92c4bae4ef16',
      'call_name' => 'smarty_template_function_termsOpt_20177558a9bc38d4739_42167671',
    ),
  ),
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558a9bc3eeb220_68494524')) {
function content_558a9bc3eeb220_68494524 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20177558a9bc38d4739_42167671';
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
    <?php echo '<script'; ?>
 src="/admin/assets/js/pace.min.js"><?php echo '</script'; ?>
>
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
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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

    <?php echo $_smarty_tpl->getSubTemplate ("admin/left-navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <!--Page main section start-->
    <section id="min-wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <?php
$_smarty_tpl->properties['nocache_hash'] = '20177558a9bc38d4739_42167671';
?>

<div class="row">
    <div class="col-md-12">
        <!--Top header start-->
        <h3 class="ls-top-header">Kategoriler</h3>
        <!--Top header end -->

        <!--Top breadcrumb start -->
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Sayfalar</a></li>
            <li class="active"><?php if ($_smarty_tpl->tpl_vars['TermType']->value == 1) {?>Kategori Düzenle<?php } else { ?>Etiket Düzenle<?php }?></li>
        </ol>
        <!--Top breadcrumb start -->
    </div>
</div>
<!-- Main Content Element  Start-->


<div class="row home-row-top">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php if ($_smarty_tpl->tpl_vars['TermType']->value == 1) {?>Kategori<?php } else { ?>Etiket<?php }?>  Düzenle</h3>
            </div>
            <div class="panel-body">
                <form role="form" class="ls_form" method="post">
                    <div class="form-group">
                        <label>Adı</label>
                        <input type="text" placeholder="Adı" value="<?php echo $_smarty_tpl->tpl_vars['Term']->value['name'];?>
" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Slug</label>
                        <input type="text" placeholder="Slug" name="slug" value="<?php echo $_smarty_tpl->tpl_vars['Term']->value['slug'];?>
" class="form-control">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['TermType']->value == 1) {?>
                    <div class="form-group">
                        <label>Üst Kategori</label>
                        <select class="form-control input-sm" name="parent">
                            <option <?php if ($_smarty_tpl->tpl_vars['Term']->value['parent'] == 0) {?>selected<?php }?> value="0">Hiçbiri</option>
                            <?php $_smarty_tpl->tpl_vars['pre'] = new Smarty_Variable('', null, 0);?>
	                        
							
	                       	<?php $_smarty_tpl->callTemplateFunction ('termsOpt', $_smarty_tpl, array('data'=>$_smarty_tpl->tpl_vars['Terms']->value[0]), false);?>

                        </select>
                    </div>
                    <?php }?>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5"  placeholder="Description"><?php echo $_smarty_tpl->tpl_vars['Term']->value['description'];?>
</textarea>
                    </div>
                    <div class="form-group">
                        <label>Keywords</label>
                        <textarea class="form-control" id="keywords" name="keywords" rows="5"  placeholder="Keywords"><?php echo $_smarty_tpl->tpl_vars['Term']->value['keywords'];?>
</textarea>
                    </div>
                    <div class="form-group">
                    	<input type="hidden" name="term_id" value="<?php echo $_smarty_tpl->tpl_vars['Term']->value['term_id'];?>
">
                        <button class="btn btn-sm btn-default" type="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/color.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/lib/jquery-1.11.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/multipleAccordion.js"><?php echo '</script'; ?>
>

<!--easing Library Script Start -->
<?php echo '<script'; ?>
 src="/admin/assets/js/lib/jquery.easing.js"><?php echo '</script'; ?>
>
<!--easing Library Script End -->

<!--Nano Scroll Script Start -->
<?php echo '<script'; ?>
 src="/admin/assets/js/jquery.nanoscroller.min.js"><?php echo '</script'; ?>
>
<!--Nano Scroll Script End -->

<!--switchery Script Start -->
<?php echo '<script'; ?>
 src="/admin/assets/js/switchery.min.js"><?php echo '</script'; ?>
>
<!--switchery Script End -->

<!--bootstrap switch Button Script Start-->
<?php echo '<script'; ?>
 src="/admin/assets/js/bootstrap-switch.js"><?php echo '</script'; ?>
>
<!--bootstrap switch Button Script End-->

<!--easypie Library Script Start -->
<?php echo '<script'; ?>
 src="/admin/assets/js/jquery.easypiechart.min.js"><?php echo '</script'; ?>
>
<!--easypie Library Script Start -->

<!--bootstrap-progressbar Library script Start-->
<?php echo '<script'; ?>
 src="/admin/assets/js/bootstrap-progressbar.min.js"><?php echo '</script'; ?>
>
<!--bootstrap-progressbar Library script End-->

<!--FLoat library Script Start -->
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/chart/flot/jquery.flot.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/chart/flot/jquery.flot.pie.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/chart/flot/jquery.flot.resize.js"><?php echo '</script'; ?>
>
<!--FLoat library Script End -->

<?php echo '<script'; ?>
 type="text/javascript" src="/admin/assets/js/pages/layout.js"><?php echo '</script'; ?>
>
<!--Layout Script End -->



<?php echo '<script'; ?>
 src="/admin/assets/js/countUp.min.js"><?php echo '</script'; ?>
>

<!-- skycons script start -->
<?php echo '<script'; ?>
 src="/admin/assets/js/skycons.js"><?php echo '</script'; ?>
>
<!-- skycons script end   -->

<!--Vector map library start-->
<?php echo '<script'; ?>
 src="/admin/assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/admin/assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"><?php echo '</script'; ?>
>
<!--Vector map library end-->

<!--AmaranJS library script Start -->
<?php echo '<script'; ?>
 src="/admin/assets/js/jquery.amaran.js"><?php echo '</script'; ?>
>
<!--AmaranJS library script End   -->
<?php echo '<script'; ?>
 src="/admin/assets/js/pages/dashboard.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?><?php
/* smarty_template_function_termsOpt_20177558a9bc38d4739_42167671 */
if (!function_exists('smarty_template_function_termsOpt_20177558a9bc38d4739_42167671')) {
function smarty_template_function_termsOpt_20177558a9bc38d4739_42167671($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
$params = array_merge(array('prefix'=>''), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
								<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$foreach_cat_Sav = $_smarty_tpl->tpl_vars['cat'];
?>
									<option <?php if ($_smarty_tpl->tpl_vars['cat']->value['term_id'] == $_smarty_tpl->tpl_vars['Term']->value['term_id']) {?>disabled<?php }?> <?php if ($_smarty_tpl->tpl_vars['Term']->value['parent'] == $_smarty_tpl->tpl_vars['cat']->value['term_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['term_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</option>
			                        <?php if ((count($_smarty_tpl->tpl_vars['Terms']->value[$_smarty_tpl->tpl_vars['cat']->value['term_id']]) > 0)) {?>
										<?php $_smarty_tpl->tpl_vars['pre'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['pre']->value)."=>", null, 0);?>
			                        	<?php $_smarty_tpl->callTemplateFunction ('termsOpt', $_smarty_tpl, array('data'=>$_smarty_tpl->tpl_vars['Terms']->value[$_smarty_tpl->tpl_vars['cat']->value['term_id']],'prefix'=>$_smarty_tpl->tpl_vars['pre']->value), false);?>

			                        <?php }?>
								<?php
$_smarty_tpl->tpl_vars['cat'] = $foreach_cat_Sav;
}
?>
							<?php foreach (Smarty::$global_tpl_vars as $key => $value){
if ($_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_termsOpt_20177558a9bc38d4739_42167671 */

?>
