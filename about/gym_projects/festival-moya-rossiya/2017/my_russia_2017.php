<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фестиваль \"Моя Россия\"");
?><p style="text-align: justify;">
 <span style="font-family: Verdana; font-size: 10pt; color: #000000;"><a href="/about/gym_projects/festival-moya-rossiya/moia-rossia.jpg"><img width="200" src="/about/gym_projects/festival-moya-rossiya/moia-rossia.jpg" height="150" hspace="3" align="left"></a></span>
</p>
<p style="text-align: justify;">
	 Традиционно в гимназии в конце мая проходил&nbsp;фестиваль «Моя Россия». В этом году он&nbsp;проводился&nbsp;с 4 по 16 мая. Открытие фестиваля совпадало с Международной научно-практической&nbsp;конференцией&nbsp;«Кирилло - Мефодиевская миссия и восточнославянский мир ХХ-ХХI вв: история, культура, словесность, образование». Второй день (4 мая) конференции проходил на базе нашей гимназии.
</p>
<p style="text-align: justify;">
	 4 мая в кино-концертном зале «Галактика» прошла&nbsp;литературно - музыкальная композиция «Моя Россия». В рамках фестиваля были проведены различные познавательные, творческие мероприятия. Можно было посетить&nbsp;открытые уроки, поучаствовать в русских народных играх, познакомиться&nbsp;с национальными костюмами народов России.&nbsp;
</p>
<p style="text-align: justify;">
	 Фестиваль «Моя Россия» - это открытое общекультурное пространство, поэтому мы были рады принимать в гости родителей, учащихся школ Калининграда, творческие коллективы.
</p>
<p text-align:="">
	 Подробно с программой фестиваля можно ознакомиться перейдя по&nbsp;<a href="http://gym40.ru/novosti/2016-2017/04.05/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0%20%D0%A4%D0%B5%D1%81%D1%82%D0%B8%D0%B2%D0%B0%D0%BB%D1%8F%20%D0%BD%D0%B0%20%D0%BF%D0%B5%D1%87%D0%B0%D1%82%D1%8C.pdf">ссылке</a>.
</p>
<p text-align:="">
 <a href="http://gym40.ru/about/gym_projects/festival-moya-rossiya/2016/my_russia_2016.php" title="Ссылка: /about/gym_projects/festival-moya-rossiya/2016/my_russia_2016.php">Фестиваль "Моя Россия" 2015-2016</a><br>
 <a href="http://gym40.ru/about/gym_projects/festival-moya-rossiya/2015/index.php">Фестиваль "Моя Россия" 2014-2015</a>
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'Моя Россия 2017'); 
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