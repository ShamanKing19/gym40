<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("2015-2016 учебный год");
?><h3 style="text-align: center;">2015-2016 учебный год</h3>
<p style="text-align: justify;">
 <a target="_blank" href="http://gym40.ru/about/gym_projects/zvezdny-gorodok/2016/%D0%90%D0%BB%D1%8C%D0%BC%D0%B0%D0%BD%D0%B0%D1%85_%D0%A8%D0%AE%D0%94.pdf" title="Ссылка: /about/gym_projects/zvezdny-gorodok/2016/Альманах_ШЮД.pdf"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Альманах ШЮД 2015-2016</a><br>
 <a target="_blank" href="http://gym40.ru/about/gym_projects/zvezdny-gorodok/2016/%D0%9B%D0%B0%D0%B3%D0%B5%D1%80%D1%8C_%D0%A8%D0%AE%D0%94.pdf" title="Ссылка: /about/gym_projects/zvezdny-gorodok/2016/Лагерь_ШЮД.pdf"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Презентация альманаха</a> <br>
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => '2015-2016'); 
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(0=>"",1=>"undefined",2=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"undefined",2=>"",),
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
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
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
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>