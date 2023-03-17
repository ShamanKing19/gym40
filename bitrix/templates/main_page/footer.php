<!--banking-->

			<section class="feature-selector">
				<div class="container">
					<div class="row">
						<ul class="selector-tabs clearfix">						
							<li class="clearfix col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
								<img style = "width: 80px; height: 80px;" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/bank-icon.png">
								<h5 style="padding: 10px 0px">
									Банковские реквизиты гимназии для оплаты дополнительных образовательных услуг и внесения добровольных пожертвований
								</h5>
							</li><!--end of tab-->	
						</ul>
					</div>
				</div>

				<div class="container">
					<ul class="selector-content">
						<li class="clearfix">
							<div class="row">
								<div class="col-md-5 col-md-offset-4 col-sm-6 col-sm-offset-3 text-justify">
									<p class="text-info">
									Полное наименование: муниципальное автономное общеобразовательное  учреждение города Калининграда гимназия  № 40 имени Ю.А.Гагарина<br />
Краткое наименование: МАОУ гимназия № 40 им. Ю.А.Гагарина<br />
236001 г. Калининград , ул. Ю.Маточкина, д. 4<br />
ИНН 3904013432 КПП 390601001<br />
ОГРН 1023900593969  ОКПО 35381850<br />
Комитет по финансам (МАОУ гимназия № 40 им.Ю.А.Гагарина)<br />
л/с 80273J01670<br />
сч. № 03234643277010003500,<br />
Отделение Калининград//УФК по Калининградской области, г. Калининград<br />
БИК 012748051<br />
Сч. Банка № 40102810545370000028

									</p>
								</div>
							</div><!--end of row-->
						</li><!--end of individual feature content-->
					</ul>
				</div>
			</section>	

			<!--Last news-->
			<section class="blog-masonry"> 
				<div class="container">

					<div class="row">
						<div class="col-sm-6 col-xs-12 text-left">
							<h1>Новости #Сороковой</h1>
						</div>
                        <div class="col-sm-6 hidden-xs text-right">
                                 <a href="/novosti/" class="btn btn-primary btn-filled btn-xs" style="margin-top: 10px;">Читать все новости</a>
						</div>
					</div><!--end of row-->

					<div class="row">
						<?
						$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	".default", 
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
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
		"DETAIL_URL" => "#SITE_DIR#/about/events/#ELEMENT_ID#/",
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
		"SET_STATUS_404" => "Y",
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

					</div><!--end of row-->	
					<div class="row">
                        <div class="hidden-lg hidden-md hidden-sm col-xs-12 text-center">
                            <a href="/novosti/" class="btn btn-primary btn-filled btn-xs" style="margin-top: 10px;">Узнать все новости</a>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
			</section>
			<section class="duplicatable-content">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
								<h1>Видео</h1>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<iframe title="О школе" width="100%" height="366" src="//www.youtube.com/embed/5XaHrhEUzdw?feature=oembed" frameborder="0" allowfullscreen=""></iframe>
						</div>
						<div class="col-md-3 col-sm-3 hidden-xs">
							<iframe title="О школе" width="100%" height="180" src="https://www.youtube.com/embed/8MncYtKdqWM" frameborder="0" allowfullscreen=""></iframe>
						</div>
						<div class="col-md-3 col-sm-3 hidden-xs">
							<iframe title="О школе" width="100%" height="180" src="https://www.youtube.com/embed/yW2-v0B4wSI" frameborder="0" allowfullscreen=""></iframe>
						</div>
						<div class="col-md-3 col-sm-3 hidden-xs">
							<iframe title="О школе" width="100%" height="180" src="https://www.youtube.com/embed/uZ8YfCQqnTM" frameborder="0" allowfullscreen=""></iframe>
						</div>
						<div class="col-md-3 col-sm-3 hidden-xs">
							<iframe title="О школе" width="100%" height="180" src="https://www.youtube.com/embed/bPmCJXjcDUU" frameborder="0" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>	
			</section>
			<!-- Slider banners-->
			<section class="duplicatable-content bg-white">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
								<h1>Официальные сайты</h1>
						</div>
					</div><!--end of row-->
				</div><!--end of container-->
				
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div id="Carousel" class="carousel slide">
                 
								<ol class="carousel-indicators" style="visibility:hidden !important;">
									<li data-target="#Carousel" data-slide-to="0" class="active"></li>
									<li data-target="#Carousel" data-slide-to="1"></li>
									<li data-target="#Carousel" data-slide-to="2"></li>
								</ol>
                 
								<!-- Carousel items -->
								<div class="carousel-inner"> 
									<div class="item active">
										 <div class="row">
										   <div class="col-md-2 col-xs-4"><a href="https://www.klgd.ru/activity/education/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/komitet.jpg" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="http://www.eduklgd.ru/ou/hotline.php" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/1komitet.bmp" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="http://school-collection.edu.ru/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/fcior.edu.jpg" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="https://edu.gov.ru/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/логотип минпрос.png" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="https://edu.gov39.ru/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/moko.jpg" style="height:80px;"></a></div>
											<div class="col-md-2 col-xs-4"><a href="https://edu.gov39.ru/goryachie-linii-i-kontakty/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/MoKd-gorLine.jpg" style="height:80px;"></a></div>

										 </div><!--.row-->
									</div><!--.item-->

									<div class="item">
										 <div class="row">

										   <div class="col-md-2 col-xs-4"><a href="https://www.gosuslugi.ru/pgu/feedback/v2/helpdesk#_phones" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/1госуслуги.bmp" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="/students/bezopasnost-naseleniya/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/безопасность.jpg" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="/students/vserossiyskaya-olimpiada-shkolnikov/" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/ВОШ.jpg" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="http://gosuslugi.ru" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/госуслуги.gif" style="height:80px;"></a></div>
										   <div class="col-md-2 col-xs-4"><a href="https://gym40.eljur.ru" class="thumbnail" target="_blank"><img alt="Image" src="/bitrix/templates/<? echo SITE_TEMPLATE_ID;?>/images/banners/ЭлЖур.jpg" style="height:80px;"></a></div>
											 <div class="col-md-2 col-xs-4"><a href="https://drugoedelo.ru/?mt_campaign=DD&mt_adset=tsur&mt_network=website&mt_creative=banner#mt_campaign=DD&mt_adset=tsur&mt_network=website&mt_creative=banner" class="thumbnail" target="_blank"><img alt="Image" src="/images/Другое дело.gif" style="height:80px;"></a></div>
										 </div><!--.row-->
									</div><!--.item-->
					 
								</div>
							</div>
						</div>
					</div>
				</div>	
			</section>
			
			<!--Footer with contact-->
			<section class="pure-text-contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
							<span class="sub alt-font">Мы находимся по адресу</span>
							<p style="font-size:150%; color:black;"><strong>г. Калининград, улица Юрия Маточкина 4</strong></p>
							<p class="text-blue"><a href="tel:72-16-81" class="text-blue">+ 7(4012) 72-16-81</a> |<a href="mailto:maougimn40@edu.klgd.ru" class="text-blue"> maougimn40@edu.klgd.ru</a></p>
							<i class="icon icon-map icon-jumbo"></i>
							<i class="icon icon-bike icon-jumbo"></i>
							<i class="icon icon-streetsign icon-jumbo"></i><br><br>
<span class="sub alt-font">МАОУ гимназия №40 имени Ю.А.Гагарина © 2022</span>
						</div>
					</div><!--end of row-->

				</div><!--end of container-->
			</section>





























		<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.plugin.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.flexslider-min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/smooth-scroll.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/skrollr.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/scrollReveal.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/isotope.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/lightbox.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.countdown.min.js"></script>
		<script src="<?=SITE_TEMPLATE_PATH?>/js/slider_banners.min.js"></script>
        <script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
		<script type="text/javascript">
		   (function(d, t, p) {
			   var j = d.createElement(t); j.async = true; j.type = "text/javascript";
			   j.src = ("https:" == p ? "https:" : "http:") + "//stat.sputnik.ru/cnt.js";
			   var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
		   })(document, "script", document.location.protocol);
		</script>





