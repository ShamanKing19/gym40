<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$page = $APPLICATION->GetCurUri(false);

define('MAIN', $page === '/special/');
define('SEARCH', $page === '/special/sp_search/index.php');
define('MAP', $page === '/special/sp_sitemap/index.php');
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- ? -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=IE8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="index, follow">
    <!-- ? -->
    <link rel="shortcut icon" href="favicon.png">
    <?
    $APPLICATION->ShowHead();
    $APPLICATION->ShowMeta("keywords");
    $APPLICATION->ShowMeta("description");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/donkey6.css');
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/donkey7.css');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/jq.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/donkey6.js');
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/script.js');
    //$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/callback.js');
    //$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . '/js/init.js');
    //define('MAIN_PAGE',$APPLICATION->GetCurDir() === '/');
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div id="special-menu">
        <div id="sm-wrap">
            <!--<div id="link-to">
                <a href="#content">Перейти к основному содержанию</a>
            </div>-->
            <div id="font-size">
                <div>Размер шрифта:</div>
                <div id="fs-btn">
                    <a href="#" id="fs-small"></a>
                    <a href="#" id="fs-medium" class="fs-act"></a>
                    <a href="#" id="fs-large"></a>
                </div>
            </div>
            <div id="color-scheme">
                <div>Цветовая схема:</div>
                <div id="cs-btn">
                    <a href="#" id="cs-white" class="cs-act"></a>
                    <a href="#" id="cs-black"></a>
                </div>
            </div>
                <a href="#" class="si-check si-check-act" id="show-image"><div id="si-check"></div>Показывать изображения</a>
                <a href="#" id="clear-filter"><div>Настройки по умолчанию</div></a>
             <!--   <a href="javascript:void(0)" id="norm_ver">Обычная версия сайта</a>-->
		<a href="/session.php" id="norm_ver">Обычная версия сайта</a>
        </div>
    </div><!-- /special-menu -->
    <form id="target"
          action="<?
                    if(MAIN) echo "/";
                    else echo $page; ?>
                 "
          method="post">
        <input type="hidden" name="special" value="n">
    </form>
    <div id="special-menu-alt">
        <div id="sma-alt">
            <div class="sma-alt-param">
                <div class="sma-alt-param-name">Гарнитура шрифта:</div>
                <div class="sma-alt-param-btn">
                <span class="sma-alt-act">Arial</span>
                <span>Times New Roman</span>
                </div>
            </div>
            <div class="sma-alt-param">
                <div class="sma-alt-param-name">Интервал между буквами:</div>
                <div class="sma-alt-param-btn">
                    <span class="sma-alt-act">Стандартный</span>
                    <span class="ls-2">Средний</span>
                    <span class="ls-3">Большой</span>
                </div>
            </div>
            <span id="sma-alt-btn-hide">ДОПОЛНИТЕЛЬНО</span>
        </div>
    </div><!-- /special-menu-alt -->
    <div id="sma-alt-btn-wrap"><span id="sma-alt-btn-show">ДОПОЛНИТЕЛЬНО</span></div>

    <div id="wrap">
        <div id="head">
            <div id="headtitle"><a href="/index.php"><span>«МАОУ Гимназия № 40»</span></a></div>
            <ul>
                <li id="hl-map"><a href="/special/sp_sitemap/">Карта сайта</a></li>
                <li id="hl-search"><a href="/search/">Поиск по сайту</a></li>
                <!--<li id="hl-appeal"><a href="/internet_reception/">Интернет-приёмная</a></li>-->
            </ul>
        </div>

        <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"multilevel",
	array(
		"ROOT_MENU_TYPE" => "top",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => ""
	),
	false
);?>
    <script>
        $( document ).ready(function() {
            /*$.each($("table"), function (i, table) {
                $.each($(table).find("td"), function (j, td) {
                    $(td).html()
                    .append($(table));
                });
                table.remove();
            });*/
            
            $("#content *").attr("style", "");
            $("#content *").attr("color", "");
            $("#content font").attr("size", "");
            $("#content td").attr("bgcolor", "");
            $("#content table").attr("bgcolor", "");
            $("#content table").attr("width", "100%");
            $("#content td").attr("width", "");
            //$("#content img").attr("style", "width: 90%; height: auto;");
            $("#content .file_block").attr("style", "height: 0px;");
            $("#content .bx_breadcrumbs").attr("style", "display: none;");
            //$("#content td:first-child").attr("style", "width: 14%;");
            $("#content table").attr("style", "table-layout: fixed; word-wrap: break-word;");
            $("#mainTable td:first-child").attr("style", "width: 20%;");
            $("#nav_docs table").attr("width", "");
            $("#fifty").attr("width", "50%");
            $("#nav_docs").attr("width", "");
            //$("#content img").attr("height", "0");
            $("#content .news-date-time").attr("style", "color: black;");
            $("#content .search-page .notetext").attr("style", "color: black;");
            //$("#content .search-page form").attr("style", "display: none;");
            $("#content .search-tags-cloud").attr("style", "display: none;");
            $("#table table").attr("style", "");
            $("#newsDetail img").attr("style", "width:100%; height:auto;");
            /*$("#content img").attr("style", "width:100%; height:auto;");
            $("#download").attr("style", "");*/
            //$("#content iframe").attr("style", "display: none;");
            //$("#battle").attr("style", "width:250px; height:auto;");
            
            
        });
    </script>
        <div id="content" class="has-filter-table content-text">
            <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "main", array(
                "START_FROM" => "0",
                "PATH" => "",
                "SITE_ID" => "s1"
                ),
                false,
                array(
                "HIDE_ICONS" => "Y"
                )
            );
            ?>
            <div class="main">
            <h1><?$APPLICATION->ShowTitle(false)?></h1>
