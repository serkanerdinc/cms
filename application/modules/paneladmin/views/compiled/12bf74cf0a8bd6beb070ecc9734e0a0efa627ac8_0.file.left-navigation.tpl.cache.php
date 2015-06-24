<?php /* Smarty version 3.1.24, created on 2015-06-24 07:23:14
         compiled from "C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/left-navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23360558abd52a0a889_14901112%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12bf74cf0a8bd6beb070ecc9734e0a0efa627ac8' => 
    array (
      0 => 'C:/wamp/www/cms/application/modules/paneladmin/views/templates/admin/left-navigation.tpl',
      1 => 1435142649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23360558abd52a0a889_14901112',
  'variables' => 
  array (
    'nav1' => 0,
    'nav2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_558abd52b23cc3_18736438',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_558abd52b23cc3_18736438')) {
function content_558abd52b23cc3_18736438 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23360558abd52a0a889_14901112';
?>
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
        <li <?php if (($_smarty_tpl->tpl_vars['nav1']->value == "paneladmin")) {?>class="active"<?php }?>>
            <a <?php if (($_smarty_tpl->tpl_vars['nav1']->value == "paneladmin")) {?>class="active"<?php }?> href="/paneladmin">
                <i class="fa fa-dashboard"></i> <span>Kontrol Paneli</span>
            </a>
        </li>
        <li <?php if (($_smarty_tpl->tpl_vars['nav1']->value == "page")) {?>class="active"<?php }?>>
            <a href="#">
                <i class="fa fa-list-alt"></i> <span>Sayfalar</span>
            </a>
            <ul>
                <li><a href="#l">Sayfa Ekle </a></li>
                <li><a href="#">Tüm Sayfalar </a></li>
                <li><a href="/paneladmin/page/terms/category" <?php if (($_smarty_tpl->tpl_vars['nav2']->value == "category")) {?>class="active"<?php }?>>Kategoriler </a></li>
                <li><a href="/paneladmin/page/terms/tag" <?php if (($_smarty_tpl->tpl_vars['nav2']->value == "tag")) {?>class="active"<?php }?>>Etiketler </a></li>
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
<!--Left navigation section end--><?php }
}
?>