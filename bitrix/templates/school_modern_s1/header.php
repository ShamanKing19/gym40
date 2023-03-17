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
    <!-- Спутник
    ================================================== -->    
    <meta 
	name="sputnik-verification" 
	content="1RPgK5VYYIdBjl7B"
    />
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
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">Вы используете устаревший браузер. <a href="http://browsehappy.com/">Обновитесь!</a> or <a href="http://www.google.com/chromeframe/?redirect=true">установите Google Chrome Frame</a> чтобы в полной мере насладиться возможностями веба.</p>
<![endif]-->
<div id="panel"><?if ($USER->isAdmin()) $APPLICATION->ShowPanel();?></div>
<div class="wrapper">

 <!-------------------------- Header -------------------------->

    <div class="header">
        <div class="header_middle">
            <div class="logo" style="margin-left:100px;
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
    
    <div class="middle">
<!---------------------------------------------------------------------------------------------------------->

<div class="slider"><!-- slider http://caroufredsel.dev7studios.com -->
    <ul>
        <li id="bx_3218110189_288">
        <img src="/upload/iblock/016/01645cde5451b502b3e4d2d92600f2f9.jpg" width="980" height="300" alt="История и неповторимый образ" title="История и неповторимый образ">
        <div class="slider_text">
            <div>
                                <h3><a href="/about/">История и неповторимый образ</a></h3>
                                                
<p>МАОУ гимназия № 40 появилась на карте образовательного пространства Калининградской области в 2005 г., обретя новый статус в год своего 45-летия (школа № 40 распахнула свои двери для первых учеников 1 сентября 1960 года). </p>
                             </div>
        </div>
    </li>
        <li id="bx_3218110189_296">
        <img src="/upload/iblock/87f/87f26a90bc71257f2ee2f2c63620ecc5.jpg" width="980" height="300" alt="Открытие в будущее" title="Открытие в будущее">
        <div class="slider_text">
            <div>
                                <h3>Открытие в будущее</h3>
                                                <span style="text-align: justify;">13 июля 2013 года состоялось торжественное открытие нового здания гимназии №40 в микрорайоне &quot;Сельма&quot;, а 2 сентября новый храм знаний впервые распахнул свои двери перед учениками, их родителями и педагогами. </span>                            </div>
        </div>
    </li>
        <li id="bx_3218110189_297">
        <img src="/upload/iblock/821/82135a229653c3932145549c20c54501.jpg" width="980" height="300" alt="Город знаний в микрорайоне &quot;Сельма&quot;" title="Город знаний в микрорайоне &quot;Сельма&quot;">
        <div class="slider_text">
            <div>
                                <h3>Город знаний в микрорайоне &quot;Сельма&quot;</h3>
                                                Вместительное здание, широкие просторные холлы и коридоры. Ученикам, их родителям и педагогам 40-й гимназии очень повезло. Здесь созданы все условия для всестороннего образования, комфортные и безопасные условия. <i>А.Ярошук, мэр Калининграда</i>.                            </div>
        </div>
    </li>
        <li id="bx_3218110189_298">
        <img src="/upload/iblock/2c4/2c41787322bcfee5ab6896ab0bf7d516.jpg" width="980" height="300" alt="Первый раз - в Первый класс! " title="Первый раз - в Первый класс! ">
        <div class="slider_text">
            <div>
                                <h3>Первый раз - в Первый класс! </h3>
                                                Гимназия № 40 - это школа с полным днем пребывания детей. Обучение ведется по 55 учебно-методическим комплексам. Учащиеся 1-4 классов обучаются в отдельном корпусе, где в каждом кабинете предусмотрены учебная зона и место для отдыха.                            </div>
        </div>
    </li>
        <li id="bx_3218110189_295">
        <img src="/upload/iblock/6a9/6a9fe571025fe87820aa3441ed4fbeb4.jpg" width="980" height="300" alt="В каждой школе есть своя «изюминка»" title="В каждой школе есть своя «изюминка»">
        <div class="slider_text">
            <div>
                                <h3>В каждой школе есть своя «изюминка»</h3>
                                                При поддержке Представительства МИД России, администрации Калининграда в нашей гимназии учреждена общественная кафедра &quot;Образование и дипломатия&quot;. Гимназия провела уже 2 Молодёжные международные ассамблеи породнённых городов и городов-партнёров Калининграда: Санкт-Петербурга, Каунаса, Лодзи.                            </div>
        </div>
    </li>
        <li id="bx_3218110189_299">
        <img src="/upload/iblock/3b7/3b75f7af64790c9fa5bcfa5d8900a7b8.jpg" width="980" height="300" alt="&quot;Звуки музыки&quot;" title="&quot;Звуки музыки&quot;">
        <div class="slider_text">
            <div>
                                <h3>&quot;Звуки музыки&quot;</h3>
                                                В "День народного единства" воспитанницы студии эстрадного вокала «Звуки музыки» представляли нашу гимназию на IV областном фестивале-конкурсе патриотической песни «Ты тоже родился в России»                             </div>
        </div>
    </li>
        <li id="bx_3218110189_300">
        <img src="/upload/iblock/fdf/fdf42298c8d89ad790a73dfc8ca733be.jpg" width="980" height="300" alt="В здоровом теле - дух здоровый" title="В здоровом теле - дух здоровый">
        <div class="slider_text">
            <div>
                                <h3>В здоровом теле - дух здоровый</h3>
                                                Учащимся гимназии доступны два бассейна, три больших спортивных зала и безразмерный актовый зал.                            </div>
        </div>
    </li>
        <li id="bx_3218110189_301">
        <img src="/upload/iblock/5ea/5ea068d8d2f2ae6c320be6e7564ac81f.jpg" width="980" height="300" alt="Традиции чтим и приумножаем" title="Традиции чтим и приумножаем">
        <div class="slider_text">
            <div>
                                <h3>Традиции чтим и приумножаем</h3>
                                                
<div> 
  <div>- 1963 г. - пионерской дружине школы присвоено имя первого космонавта &ndash; Юрия Алексеевича Гагарина.</div>
 
  <div>- Акция  &laquo;Земной поклон&raquo;.  </div>
 
  <div>- Семейный праздник «Лад» - для родителей и с участием родителей.</div>
 
  <div>- Фестиваль «Дорогая моя Россия».  </div>
 
  <div>- ... </div>
 </div>
                             </div>
        </div>
    </li>
    </ul>
    <div class="clearfix"></div>
    <div class="pagerslider"></div>
</div>

<!---------------------------------------------------------------------------------------------------------->
        <div class="container">
           
<div class="content">