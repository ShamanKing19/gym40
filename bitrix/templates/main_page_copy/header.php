<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/font-awesome/css/font-awesome.min.css">
        <link href="<?=SITE_TEMPLATE_PATH?>/css/flexslider.min.css" rel="stylesheet"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/line-icons.min.css" rel="stylesheet"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/elegant-icons.min.css" rel="stylesheet"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/lightbox.min.css" rel="stylesheet"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/theme.css?ver=1.1.5" rel="stylesheet"/>
        <link href="<?=SITE_TEMPLATE_PATH?>/css/custom.css" rel="stylesheet"/>
        <!--[if gte IE 9]>
        	<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/ie9.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		
    </head>
    <body>
		<div style="display:block !important;"><?$APPLICATION->ShowPanel();?></div>
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
                             <img class="centered_logo" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/logoMain.png">
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
			<header class="page-header">
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/back_main.jpeg">
				</div>
			</header>
			<section class="feature-selector hidden-xs">
				<div class="container">
					<div class="row">
						<ul class="selector-tabs clearfix">						
							<li class="clearfix text-primary text-center col-md-3 col-sm-3 hidden-xs">
									<img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/eljur.png" height="50px" width="auto">
							</li><!--end of tab-->
						
							<li class="clearfix text-primary text-center col-md-3 col-sm-3 hidden-xs">
									<img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/gos.png" height="50px" width="auto">
							</li><!--end of tab-->	

							<li class="clearfix text-primary text-center col-md-3 col-sm-3 col-xs-6">
								<a href="http://goo.gl/forms/2JmxBvIiP6"><img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/zayvka.png" height="50px" width="auto"></a>
							</li><!--end of tab-->

							<li class="clearfix text-primary text-center col-md-3 col-sm-3 col-xs-6">
								<a href="mailto:gym40.kd@yandex.ru"><img src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/pismo.png" height="50px" width="auto"></a>
							</li><!--end of tab-->			
						</ul>
					</div>
				</div>
				
				<div class="container">
					<ul class="selector-content">
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Использование электронного дневника родителями и учащимися</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										Настоятельно рекомендуем регистрироваться в ЭлЖур'е не только учащимся, но родителям! Это позволит отслеживать посещаемость занятий, домашние задания, успеваемость ребенка, а так же напрямую общаться с учителями через сообщения. Если у Вас отсутствует пригласительный код для регистрации в журнале, то подойдите к администратору ЭлЖур'а в гимназии.
									</p>	
								</div>
							
								<div class="col-sm-6">
									<p class="lead">
										На данный момент Электронный Журнал доступен для скачивания в App Store и Google Play, кроме того доступна веб-версия.
									</p>
                                 <div class="row">
								  <div class="col-sm-4">
                                     <a target="_blank" href="https://play.google.com/store/apps/details?id=com.eljur.client&hl=ru&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1">
                                     <img alt="Доступно в Google Play" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/apps/google_play.png" height="40px !important" width="135px !important"/></a>
								  </div>
								  <div class="col-sm-4">
                                     <a target="_blank" href="https://itunes.apple.com/ru/app/%D1%8D%D0%BB%D0%B6%D1%83%D1%80-%D0%B4%D0%BD%D0%B5%D0%B2%D0%BD%D0%B8%D0%BA/id910733989?mt=8">
										 <img alt="Загрузите в App Store" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/apps/App_Store.svg" height="40px !important" width="135px !important"/></a>
								  </div>
								  <div class="col-sm-4">
                                    <a target="_blank" href="https://gym40.eljur.ru" class="btn btn-primary btn-filled btn-xs">На сайт</a>
								  </div>
								</div>	
								</div>
							</div><!--end of row-->
							<div class="row" style="margin-top: 20px;">
								<div class="col-sm-12 text-left">
									<p class="text-small">1. Apple и логотип Apple являются зарегистрированными товарными знаками компании Apple Inc. в США и других странах. App Store является сервисным знаком компании Apple Inc.<br>
                                     2. Google Play и логотип Google Play являются товарными знаками Google Inc.<br>
                                     3. Элжур Электронный журнал школы является собственностью компании ООО «Веб-мост».</p>
								</div>
							</div>
						</li><!--end of individual feature content-->
						
						<li class="clearfix">
							<div class="row">
								<div class="col-sm-12 text-center">
									<h1>Подача заявлений на перевод из другого ОУ и в первый класс</h1>
								</div>
							</div><!--end of row-->
							
							<div class="row">
								<div class="col-sm-6">
									<p class="lead">
										<strong>ВНИМАНИЕ!</strong> Данная услуга недоступна в приложении для смартфонов с операционной системой Android. Вы можете воспользоваться ей на веб-сайте Госуслуг.
									</p>	
                                 <div class="row">
								  <div class="col-sm-4">
                                     <a target="_blank" href="https://play.google.com/store/apps/details?id=ru.rostel&referrer=appmetrica_tracking_id%3D745233407570662167%26ym_tracking_id%3D4585400303734859441">
                                     <img alt="Доступно в Google Play" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/apps/google_play.png" height="40px !important" width="135px !important"/></a>
								  </div>
								  <div class="col-sm-4">
                                     <a target="_blank" href="https://itunes.apple.com/ru/app/gosuslugi/id502487330?mt=8&ls=1&referrer=appmetrica_tracking_id%3D529060629282032912%26ym_tracking_id%3D14608525928346042646">
										 <img alt="Загрузите в App Store" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/apps/App_Store.svg" height="40px !important" width="135px !important"/></a>
								  </div>
								  <div class="col-sm-4">
                                    <a target="_blank" href="https://www.gosuslugi.ru/" class="btn btn-primary btn-filled btn-xs">На сайт</a>
								  </div>
								</div>
                                </div>
							
								<div class="col-sm-6">
									<p class="lead">
										Зачисление в государственные и муниципальные общеобразовательные организации Калининградской области можно осуществить через официальный интернет-портал государственных услуг (госуслуги) без личного посещения образовательного учреждения (кроме случаев, когда нужно донести оригиналы документов). Обо всех операциях с Вашим заявлением будут приходить уведомления на e-mail (если он указан в Вашем профиле портала Госуслуг).
									</p>	
								</div>
							</div><!--end of row-->
							<div class="row" style="margin-top: 20px;">
								<div class="col-sm-12 text-left text-small">
									<p class="text-small">1. Apple и логотип Apple являются зарегистрированными товарными знаками компании Apple Inc. в США и других странах. App Store является сервисным знаком компании Apple Inc.<br>
                                     2. Google Play и логотип Google Play являются товарными знаками Google Inc.<br>
                                     </p>
								</div>
							</div>
						</li><!--end of individual feature content-->
					</ul>
				</div>
			</section>			
			
			<!--Important ads-->
			<section class="blog-masonry">
				
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
								<h1>Важная информация</h1>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				
				<div class="container">
					<div class="row">
						<div class="blog-masonry-container">
						
						<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"ads", 
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "19",
		"NEWS_COUNT" => "15",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "undefined",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "new",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
						
						</div>
					</div>
				</div>
			</section>