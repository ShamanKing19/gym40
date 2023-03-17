<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Семейный праздник «Лад» в 2016-2017 учебном году");
?><p style="text-align: justify;">
 <a href="/about/gym_projects/Lad/lad-2016-2017-uch-god/17-19" target="_blank">План мероприятий «Семейный праздник «Лад»» на 17-19 января</a><br>
 <a href="/about/gym_projects/Lad/lad-2016-2017-uch-god/20-21.pdf" target="_blank">План мероприятий «Семейный праздник «Лад»» на 20-21 января</a><br>
 <a href="/about/gym_projects/Lad/lad-2016-2017-uch-god/22-30.pdf" target="_blank">План мероприятий «Семейный праздник «Лад»» на 23-28 января</a>
</p>
<h4 class="" style="text-align: center;">Новости праздника "ЛАД"</h4>
<hr>
<p style="text-align: justify;">
 <img width="80" src="http://gym40.ru/about/gym_projects/Lad/lad-2016-2017-uch-god/chastushki-nashego-4-a-klassa/%D0%97%D0%B2%D1%83%D1%87%D0%B8,%20%D1%87%D0%B0%D1%81%D1%82%D1%83%D1%88%D0%BA%D0%B0%20%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%B0%D1%8F!.jpg" height="60" hspace="4" align="left" title="Рисунок: /about/gym_projects/Lad/lad-2016-2017-uch-god/chastushki-nashego-4-a-klassa/Звучи, частушка русская!.jpg"><a target="_blank" href="/about/gym_projects/Lad/lad-2016-2017-uch-god/chastushki-nashego-4-a-klassa/index.php" style="text-align: justify;">Частушки нашего 4-а класс</a><br>
	 В рамках гимназического праздника «Лад» учащиеся, педагоги и родители 4 «А» класса&nbsp;провели заключительное мероприятие по проекту «Частушки нашего класса». 
	 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'ЛАД 2017'); 
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
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>