<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фестиваль \"Моя Россия\"");
?><img width="173" src="/about/gym_projects/festival-moya-rossiya/moia-rossia.jpg" height="130" title="Фестиваль &quot;Моя Россия&quot;" hspace="10" align="left">
<p style="text-align: justify;">
	 С 4 по 27 мая в гимназии проходил Фестиваль «Моя Россия» - 70-летию Победы в Великой Отечественной войне посвящается<br>
	 4 мая — Открытие фотовыставки «Лица Победы»<br>
	 4 мая - 7 мая «Нам этот мир завещано беречь»: конкурс патриотической песни среди учащихся 5-7 классов<br>
	 6 мая - Заключительный этап Проекта «Эхо войны» среди учащихся начальной школы.<br>
	 6 мая - II тур Региональной Литературной акции «Я пишу сочинение», посвященной празднованию 70-летия Победы в Великой Отечественной войне среди учащихся 7-11 классов<br>
	 7 мая - «Бессмертный полк. Книга Памяти»: презентация Проекта гимназии.<br>
	 8 мая - Торжественный концерт «Дню Победы посвящается...»<br>
	 4-22 мая - Классные часы по книге «Детство, опаленное войной».<br>
	 5-28 мая - Киноклуб. Просмотр и обсуждение фильмов, посвященных Великой Отечественной войне для учащихся 3-8, 10 классов.
</p>
<?
$GLOBALS['arrFilter']=array("?TAGS" => 'Моя Россия 2014'); 
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