<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Семейный праздник «Лад» в 2015-2016 учебном году");
?><p style="text-align: justify;">
 <b>В 2015-2016 учебном году проект&nbsp;«Семейный праздник «Лад»» прошел с 16.01.2016 года.</b>
</p>
<p style="text-align: justify;">
	 Планы мероприятий в рамках проекта: <br>
 <a href="http://gym40.ru/about/gym_projects/Lad/god2015-2016/%D0%9B%D0%B0%D0%B4_%D0%BD%D0%B0%D1%87_%D1%88%D0%BA%D0%BE%D0%BB%D0%B0.pdf" title="Ссылка: /about/gym_projects/Lad/god2015-2016/Лад_нач_школа.pdf">1-4 классы</a><br>
 <a href="http://gym40.ru/about/gym_projects/Lad/god2015-2016/16-19_%D1%8F%D0%BD%D0%B2%D0%B0%D1%80%D1%8F.pdf" title="Ссылка: /about/gym_projects/Lad/god2015-2016/16-19_января.pdf">16-19 января</a><br>
 <a href="http://gym40.ru/about/gym_projects/Lad/god2015-2016/20-21_%D1%8F%D0%BD%D0%B2.pdf" title="Ссылка: /about/gym_projects/Lad/god2015-2016/20-21_янв.pdf">20-21 января</a><br>
 <a href="http://gym40.ru/about/gym_projects/Lad/god2015-2016/22-30_%D1%8F%D0%BD%D0%B2.pdf">22-30 января</a>
</p>
<p style="text-align: justify;">
 <b>Мероприятия, прошедшие в рамках проекта:</b><br>
</p>
<?
$GLOBALS['arrFilter']=array("?TAGS" => 'ЛАД 2016'); 
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
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>