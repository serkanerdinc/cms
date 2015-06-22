<?php /*%%SmartyHeaderCode:200932286755865980a0eb13-41165181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe7b5031f6271c00949608af05436ea331b84d4f' => 
    array (
      0 => 'application/views/templates/tema1/calismalar.tpl',
      1 => 1392392861,
      2 => 'file',
    ),
    '7c9edfaddd17d312648dca4394e8c3051ada7cf8' => 
    array (
      0 => 'application/views/templates/tema1/header.tpl',
      1 => 1427962727,
      2 => 'file',
    ),
    '836c5b676d671a5bdf06fe7b6e42574429a7e967' => 
    array (
      0 => 'application/views/templates/tema1/footer.tpl',
      1 => 1391344721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200932286755865980a0eb13-41165181',
  'variables' => 
  array (
    'theme' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55865980e3bc01_56076109',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55865980e3bc01_56076109')) {function content_55865980e3bc01_56076109($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<head>
        <title>Yaptığım web siteleri, çalışmalarım, portfolio - Serkan Erdinç Kişisel Web Sayfası</title>
        <meta name="description" content="Yaptığım çalışmların bulunduğu web sayfaları php, Jquery, ajax, solr, sphinx, mysql">
        <meta name="keywords" content="responsive, html5, css3, personal page, website, template, themeforest">
        <meta name="author" content="The Graphicgeeks">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
        <!-- Bootstrap -->
        <link href="/theme/tema1/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="/theme/tema1/css/bootstrap-theme.css" rel="stylesheet">
        <link href="/theme/tema1/css/normalize.css" rel="stylesheet" media="screen">
        
        <!-- CSS -->
        <link href="/theme/tema1/css/style.css" rel="stylesheet" media="screen">
        <link href="/theme/tema1/css/color.css" rel="stylesheet" media="screen">
        
        <!-- Google Font -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="/theme/tema1/js/modernizr.custom.js"></script>
	</head>
    
	<body>
		<!-- START HERE -->    
        <div class="container tab-container" id="tab-container" >
			<!-- HEADER -->
            <header>
   				<div class="cover" style="background-image:url(/theme/tema1/demo/cover.jpg);">
           			<div class="coverOverlay"></div>
                	<!-- profile picture - change your profile picture here -->
              		<div class="profilePicture">
                		<img src="/theme/tema1/demo/profilePicture.jpg" alt="profilepicture" title="profilepicture" />
                   	</div>
                 	<!-- profile name - change profile name here -->
                	<div class="profileName">
                		<h1>Serkan Erdinç</h1>
                       	<p>Back-End Developer</p>
                  	</div>
        		</div>
       			<nav>
           			<ul class="etabs">
               			<li class="tab"><a href="/"><span class="tabIcon glyphicon glyphicon-user"></span><span class="tabText">Hakkımda</span></a></li>
                    	<li class="tab"><a href="/calismalarim.html"><span class="tabIcon glyphicon glyphicon-briefcase"></span><span class="tabText">Çalışmalarım</span></a></li>
                      	<li class="tab"><a href="/blog.html"><span class="tabIcon glyphicon glyphicon-pencil"></span><span class="tabText">Blog</span></a></li>
                       	<li class="tab"><a href="iletisim.html"><span class="tabIcon glyphicon glyphicon-envelope"></span><span class="tabText">İletişim</span></a></li>
                       	<li class="tab" style="float: right"><a href="web-jquery.html"><span class="tabIcon glyphicon glyphicon-envelope"></span><span class="tabText">Jquery</span></a></li>
             		</ul> 
              	</nav>
            </header>
			<div align="center" style="margin-top: 10px;">
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- 728x90serkanerdinc -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:728px;height:90px"
			     data-ad-client="ca-pub-3377120689093689"
			     data-ad-slot="6914240260"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			</div>
            <!-- HEADER --> 
 <!-- MAIN CONTENT -->
          	<div class="content">
            	<!-- PORTFOLIO TAB -->	
               	<div id="portfolio">
                
                	<!-- add this line to add big/highlight portfolio  -->
                	<div class="row">
                    	<div class="col-lg-12">
                        	<div class="panel">
                            	<div class="panel-heading">Çalışmalarım</div>
								
                            	<!--<div class="portfolioHighlightImage"><a id="example1" href="/theme/tema1/demo/port7b.jpg"><img src="/theme/tema1/demo/port7.jpg"/></a></div>
                                <div class="portfolioHighlight">
                                	<h5>A Crazy Little Thing Called 'Love'</h5>
                                    <div class="description">
                                    	<div class="descriptionSingle"><span class="icon glyphicon glyphicon-calendar"></span><span>17 August 2013</span></div>
                                        <div class="descriptionSingle"><span class="icon glyphicon glyphicon-tag"></span><span>Web Design, Branding</span></div>
                                        <div class="descriptionSingle"><span class="icon glyphicon glyphicon-globe"></span><span><a href="#">www.crazylove.com</a></span></div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>-->
								
								<div class="row">
			                    	<!-- add this line to add small portfolio  -->
			                    	<div class="col-lg-4">
			                        	<div class="panel">
			                                <div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/maxi24azcom.png"><img src="/theme/tema1/demo/maxi24azcom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Maxi24-az.com</h5>
			                                    <p>Tüm yazılım geliştirilmeleri</p>
			                                </div>
			                            </div>
			                        </div>
			                        <!-- add this line to add small portfolio  -->
			                        
			                        <div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/karyeraazcom.png"><img src="/theme/tema1/demo/karyeraazcom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Karyera-az.com</h5>
			                                    <p>Tüm yazılım geliştirmeleri</p>
			                                </div>
			                            </div>
			                        </div>
			                        
			                        <div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/hemenisaracom.png"><img src="/theme/tema1/demo/hemenisaracom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Hemenisara.com</h5>
			                                    <p>İnsan kaynakları sitesinin yeniden kodlanması ve geliştirilmesi</p>
			                                </div>
			                            </div>
			                        </div>
			                    </div> 
			                    
			                    <div class="row">
			                    	<div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/anadolubiletcomtr.png"><img src="/theme/tema1/demo/anadolubiletcomtr.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>anadolubilet.com.tr (anadolu.com.tr)</h5>
			                                    <p>Anadolu Ulaşıma ait kurumsal web sitesinin 2007-2010 yılları arasında yazılım projelerinin ve web sitesinin geliştirilmesi</p>
			                                </div>
			                            </div>
			                        </div>
			                        
			                        <div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/yolcumuizliyorumcom.png"><img src="/theme/tema1/demo/yolcumuizliyorumcom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Yolcumuizliyorum.com</h5>
			                                    <p>Anadolu Ulaşıma ait firmaya ait yolcuların otobüsün nerede olduğunu gösteren sistemin 2010 yılında geliştirilmesi.</p>
			                                </div>
			                            </div>
			                        </div>
			                        
			                        <div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/karacanakademimersincom.png"><img src="/theme/tema1/demo/karacanakademimersincom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Karacanakademimersin.com</h5>
			                                    <p>Mersin Karacan Akademiye ait web sitesinin ve Öğrenci sınav sonuçlarının gösterilmesi sisteminin kodlamasının yapılması</p>
			                                </div>
			                            </div>
			                        </div>
									
									<div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/oncusolarcom.png"><img src="/theme/tema1/demo/oncusolarcom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Oncusolar.com</h5>
			                                    <p>Uşakta Solar Enerji sistemleri ile ilgili faaliyet gösteren firmanın kodlama kısmının yapılması</p>
			                                </div>
			                            </div>
			                        </div>
									
									<div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/alpkompozityapicom.png"><img src="/theme/tema1/demo/alpkompozityapicom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>Alpkompozityapi.com</h5>
			                                    <p>Uşakta inşaat sektöründe faaliyet gösteren firmanın kodlama kısmının yapılması</p>
			                                </div>
			                            </div>
			                        </div>
									
									<div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/isgidhemenisaracom.png"><img src="/theme/tema1/demo/isgidhemenisaracom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>isgid.hemenisara.com</h5>
			                                    <p>İsgid'e ait insan kaynakları sisteminin adminin bazı kısımlarını ve iş veren kısmının tamamının kodlanması</p>
			                                </div>
			                            </div>
			                        </div>
									
									<div class="col-lg-4">
			                        	<div class="panel">
			                            	<div class="portfolioThumbnail">
			                                	<a id="example1" href="/theme/tema1/demo/trenbileticom.png"><img src="/theme/tema1/demo/trenbileticom.png"/></a>
			                                </div>
			                                <div class="portfolioThumbnailText">
			                                	<h5>trenbileti.com</h5>
			                                    <p>Akmaris Turizm'e ait web sitesi Tren Bileti ve Hızlı Tren ile ilgili sayfanın kodlama kısmının yapılması</p>
			                                </div>
			                            </div>
			                        </div>
									
																		
			                    </div> 
								
                            </div>
                        </div>
                    </div> 
                   <!-- add this line to add big/highlight portfolio  -->
                   
              	</div>
                <!-- PORTFOLIO TAB -->	               
            </div>
            <!-- MAIN CONTENT -->
            <!-- FOOTER -->
            <footer>
            	&copy; 2014
            </footer>
            <!-- FOOTER -->
            
		</div>
		<!-- END -->
        
        
        <!-- JavaScript plugins (requires jQuery) -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/theme/tema1/js/bootstrap.min.js"></script>
    	
        <!-- Optionally enable responsive features in IE8 -->
        <script src="/theme/tema1/js/jquery.respond.min.js"></script>
        
        <!--<script src="/theme/tema1/js/jquery.easytabs.js"></script>-->
        <script src="/theme/tema1/js/jquery.hashchange.min.js"></script>
        
        <script src="/theme/tema1/js/jquery.response.js"></script>
        
        <!-- twitter -->
		<script src="/theme/tema1/js/twitter/jquery.tweet.js"></script>
		<script src="/theme/tema1/js/twitter-options.js"></script>
        <script type="text/javascript" src="/theme/tema1/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="/theme/tema1/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="/theme/tema1/js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
        
        <script src="/theme/tema1/js/toucheffects.js"></script>
      	<script src="/theme/tema1/js/custom.js"></script>
        
        <script type="text/javascript">
		$(document).ready(function() {
		
			$("a#example1").fancybox();

		});
		</script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32482425-1', 'serkanerdinc.com.tr');
  ga('send', 'pageview');

</script>
	</body>

<!-- Mirrored from kokobacrew.com/themes/advante/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 01 Feb 2014 08:35:28 GMT -->
</html><?php }} ?>
