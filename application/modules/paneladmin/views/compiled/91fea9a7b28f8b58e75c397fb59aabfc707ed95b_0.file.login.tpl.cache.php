<?php /* Smarty version 3.1.24, created on 2015-06-22 08:03:40
         compiled from "C:/wamp/www/cms/application/modules/paneladmin/views/templates/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:26917558823cc9b37e7_26242275%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91fea9a7b28f8b58e75c397fb59aabfc707ed95b' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/login.tpl',
      1 => 1434985323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26917558823cc9b37e7_26242275',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558823cca82898_23021781',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558823cca82898_23021781')) {
function content_558823cca82898_23021781 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '26917558823cc9b37e7_26242275';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="SRKN">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="/admin/assets/images/ico/fab.ico">

    <title>CMS Login Page</title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="/admin/assets/css/plugins/pace.css">
    <?php echo '<script'; ?>
 src="/admin/assets/js/pace.min.js"><?php echo '</script'; ?>
>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/admin/assets/css/plugins/bootstrap-switch.min.css">
    <link rel="stylesheet" href="/admin/assets/css/plugins/ladda-themeless.min.css">

    <link href="/admin/assets/css/plugins/humane_themes/bigbox.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/humane_themes/libnotify.css" rel="stylesheet">
    <link href="/admin/assets/css/plugins/humane_themes/jackedup.css" rel="stylesheet">

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
<body class="login-screen">
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-content">
                        <div class="login-user-icon">
                            <i class="glyphicon glyphicon-user"></i>

                        </div>
                        <h3>CMS Login Page</h3>

                    </div>

                    <div class="login-form">
                        <form id="form-login" action="" class="form-horizontal ls_form" method="POST">
                            <div class="input-group ls-group-input">
                                <input name="user" class="form-control" type="text" placeholder="Username">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            </div>


                            <div class="input-group ls-group-input">

                                <input type="password" placeholder="Password" name="password" class="form-control" value="">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            </div>


                            <div class="input-group ls-group-input login-btn-box">
                                <button class="btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12" data-style="slide-down">
                                    <span class="ladda-label"><i class="fa fa-key"></i></span>
                                </button>


                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <p class="copy-right big-screen hidden-xs hidden-sm">
        <span>&#169;</span> Fickle <span class="footer-year">2014</span>
    </p>
</section>

</body>
<?php echo '<script'; ?>
 src="/admin/assets/js/lib/jquery-2.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/admin/assets/js/lib/jquery.easing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/admin/assets/js/bootstrap-switch.min.js"><?php echo '</script'; ?>
>
<!--Script for notification start-->
<?php echo '<script'; ?>
 src="/admin/assets/js/loader/spin.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/admin/assets/js/loader/ladda.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/admin/assets/js/humane.min.js"><?php echo '</script'; ?>
>
<!--Script for notification end-->

</html><?php }
}
?>