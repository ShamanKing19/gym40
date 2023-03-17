<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); IncludeTemplateLangFile(__FILE__);
$CurPage = $APPLICATION->GetCurPage(false);
define('MAIN', $CurPage === '/');
?>







<!doctype html lang="ru"> 
<!--[if lt IE 7 ]><html lang="ru" class="no-js ie6 lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]><html lang="ru" class="no-js ie7 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]><html lang="ru" class="no-js ie8 lt-ie9"> <![endif]-->
<!--[if IE 9 ]><html lang="ru" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="ru" class="no-js"> <!--<![endif]-->
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <?$APPLICATION->ShowHead();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.7.2.min.js"><\/script>')</script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/modernizr-2.6.2.min.js"></script>
    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- CSS
    ================================================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,700,600&subset=latin,cyrillic-ext,cyrillic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=PT+Sans&subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href="<?=SITE_TEMPLATE_PATH?>/colors.css" rel="stylesheet"> 
    <link href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css" rel="stylesheet"> 
    <link href="<?=SITE_TEMPLATE_PATH?>/css/datePicker.css" rel="stylesheet"> 
    <link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.formstyler.css" rel="stylesheet"> 
    <link href="<?=SITE_TEMPLATE_PATH?>/css/jquery.fancybox.css" rel="stylesheet"> 
    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/images/apple-touch-icon-114x114.png">
    <!-- Fixed menu
    ================================================== -->
    <script src="script/jquery-1.9.1.min.js"></script>
    <!--[if lt IE 9]>
    <script src="script/html5.js"></script>	 
    <![endif]-->
	
	<script>
		var h_hght = 224; // высота шапки
		var h_mrg = 0;	  // отступ когда шапка уже не видна
				
		$(function(){
		
			var elem = $('#top_nav');
			var top = $(this).scrollTop();
			
			if(top > h_hght){
				elem.css('top', h_mrg);
			}			
			
			$(window).scroll(function(){
				top = $(this).scrollTop();
				
				if (top+h_mrg < h_hght) {
					elem.css('top', (h_hght-top));
				} else {
					elem.css('top', h_mrg);
				}
			});
		
		});
    </script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">Вы используете устаревший браузер. <a href="http://browsehappy.com/">Обновитесь!</a> or <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome Frame</a> чтобы в полной мере насладиться возможностями веба.</p>
<![endif]-->
<div id="panel"><?if ($USER->isAdmin()) $APPLICATION->ShowPanel();?></div>
<div class="wrapper">
    <div class="header">
        <div class="header_middle" style="margin:auto">
            <div class="logo" style="
    margin-top: 55px; width:auto;">
                <a href="/"><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/school_logo.php"), Array(), Array("MODE"=>"html"));?></a>
            </div>
            <div class="site_name" style="
    margin-left:20px;">
                <h1><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/school_name.php"), Array(), Array("MODE"=>"html"));?></h1>
                <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/school_address.php"), Array(), Array("MODE"=>"html"));?>
                <div class="special"><a href="/bitrix/templates/school_modern_s1/session.php" id="special" onclick="document.getElementById('target').submit(); return false;">Версия для слабовидящих</a></div>
            </div>
            <div class="header_adress">
                <!-- текстовый блок -->
                <table width="100%">
                    <tr>
                        <td width="210">
                            <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include_areas/center_top.php", array(), array("MODE" => "html"))?>
                        </td>
                        <td>
                            <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include_areas/right_top.php", array(), array("MODE" => "html"))?>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="clearfix"></div>
            <?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"REGISTER_URL" => "/auth/",
		"PROFILE_URL" => "/personal/profile/",
		"SHOW_ERRORS" => "Y",
		"FORGOT_PASSWORD_URL" => ""
	),
	false
);?>
        </div>
    </div><!-- /.header-->
 <!-------------------------- Меню -------------------------->   
<div id="top_nav">
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
	false
);?>
</div>
    
    <div class="middle" style="top:55px !important">
        <div class="container">
           
<div class="content">
                <h1><?=$APPLICATION->ShowTitle(false)?></h1>