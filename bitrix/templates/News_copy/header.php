<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
	<?$APPLICATION->ShowHead();?>
        <meta charset="utf-8">
        <title><?$APPLICATION->ShowTitle()?></title>
		<!-- Спутник
		================================================== -->    
    	<meta 
		name="sputnik-verification" 
		content="1RPgK5VYYIdBjl7B"
    	/>
		<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter47268480 = new Ya.Metrika({ id:47268480, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/47268480" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		
        <link href="<?=SITE_TEMPLATE_PATH?>/css/flexslider.min.css" rel="stylesheet">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/line-icons.min.css" rel="stylesheet">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/elegant-icons.min.css" rel="stylesheet">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/lightbox.min.css" rel="stylesheet">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/theme.css?ver=1.6" rel="stylesheet">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/custom.css" rel="stylesheet">
		
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/ie9.css" />
		<![endif]-->
		
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
		
        <script src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
	
    <body>
    <?$APPLICATION->ShowPanel();?>
		<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
	<div class="nav-container">
		<nav class="top-bar contained-bar">
			<div class="container">
				
					<div class="row utility-menu">
						<div class="col-sm-12">
							<div class="utility-inner clearfix">
								<span class="alt-font text-white"><i class="icon icon_pin"></i> 236001, г. Калининград, ул. Ю.Маточкина, 4</span>
								<span class="alt-font"><i class="icon icon_mail"></i><a href="mailto:maougimn40@eduklgd.ru" style="text-decoration:none" class="text-white">maougimn40@eduklgd.ru</a></span>
								<div class="pull-right">
									<a href="/search/index.php" class="btn btn-primary btn-white btn-xs">Поиск</a>
                                    <a href="/bitrix/templates/main_page/session.php" id="special" onclick="document.getElementById('target').submit(); return false;" class="btn btn-primary btn-filled btn-xs">Версия для слабовидящих</a>
									<a href="/auth/index.php?login=yes" class="btn btn-primary btn-white btn-xs">Войти</a>
								</div>
							</div>
						</div>
					</div><!--end of row-->
				
					<div class="row">
                        <div class="col-md-12 hidden-sm hidden-xs columns">
							<a href="/index.php" >
                             <img class="centered_logo" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/logoNewYear.png">
							 <h3 class="text_logo">Гимназия № 40 имени Ю.А. Гагарина</h3>
                             </a>
                         </div>
					</div>
					<div class="contained-wrapper">
						<div class="row nav-menu">
							<div class="col-sm-10 col-md-10 columns">
								<ul class="menu">
									<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"top", 
									array(
										"ROOT_MENU_TYPE" => "top",
										"MAX_LEVEL" => "2",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "Y",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array(
										),
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N"
									),
									false );?>
								</ul>
							</div>
							<div class="col-sm-2 col-md-2 hidden-xs columns">
								<ul class="social-icons text-right">
									<li>
										<a href="https://www.youtube.com/channel/UCDqgK2lVu2p3Xr-rIe8A-fw/featured">
											<i class="fa fa-youtube-play fa-lg youtube" aria-hidden="true"></i>
										</a>
									</li>
								
									<li>
										<a href="https://www.facebook.com/maougym40/">
											<i class="fa fa-facebook-official fa-lg facebook" aria-hidden="true"></i>
										</a>
									</li>
								
									<li>
										<a href="https://vk.com/maougym40">
											<i class="fa fa-vk fa-lg vk" aria-hidden="true"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					
				<div class="mobile-toggle">
					<i class="icon icon_menu"></i>
				</div>
					
			</div><!--end of container-->
		</nav><!--end of top-bar overlay-bar-->
	</div><!--end of div with class nav-container-->
		
		
		<div class="main-container">
			<section class="blog-masonry bg-muted">

				<div class="container">
<div class="row">
						<div class="blog-masonry-container">