<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фестиваль \"Моя Россия\"");
?><p style="text-align: justify;">
<a href="/about/gym_projects/festival-moya-rossiya/moia-rossia.jpg"><img width="200" src="/about/gym_projects/festival-moya-rossiya/moia-rossia.jpg" height="150" hspace="3" align="left"></a>В период с 10 по 20 мая в гимназии № 40 проходил Фестиваль «Моя Россия». 
</p>
<p style=" text-align: justify;">
Фестиваль «Моя Россия» проводится в гимназии №40 более 20 лет. Традиционным стало обращение к лучшим и самым известным произведениям русских и современных российских авторов, это обусловлено главной идеей – воспитание чувства гордости и сопричастности к культурным ценностям и традициям России.
</p>
<p style="text-align: justify;">
Программа представлена различными событиями для учащихся 1-11 классов: конкурсы чтецов и юных поэтов, концертными выступлениями юных исполнителей песен и танцев. В концертных программах прозвучали произведения русских и современных российских авторов. Учащиеся ознакомились с&nbsp;лучшими кинематографическими работами и представили свои авторские фильмы, посвященные знаменательной дате -&nbsp;70-летию образования Калининградской области.
</p>
<p style="text-align: justify;">
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'Моя Россия 2015'); 
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