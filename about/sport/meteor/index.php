<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Школьный спортивный  клуб \"Метеор\"");
?><script>function view(n) {
    style = document.getElementById(n).style;
    style.display = (style.display == 'block') ? 'none' : 'block';
}</script>
<p style="text-align:justify;">
 <a href="/about/sport/meteor/приказ о создании СШК 2017- пдф.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Приказ о создании спортивного клуба "Метеор"</a><br>
 <a href="/about/sport/meteor/Положение.Pdf" target="_blank"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Положение о создании спортивного клуба "Метеор"</a><br>

 <a href="/Gym40_information/documents/лицензия22032016.pdf" target="_blank"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Лицензия на осуществление образовательной деятельности (с приложениями)</a><br>
 <a target="_blank" href="/about/sport/dokumenty/Расписание спортивных секций.pdf"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Расписание спортивных секций ШСК "Метеор" для учащихся 1-11 классов в 2020-2021 учебный году</a><br>
 <a target="_blank" href="/about/sport/dokumenty/План работы предметного объединения ф.к. и обж 2022-2023.pdf"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> План работы предметного объединения «Физическая культура и ОБЖ» на 2022-2023 учебный год</a><img src="/Gym40_information/documents/icon_pod.png" align="" style="width: 2%;" title="Документ подписан электронной подписью Дата и время подписания: 29.08.2022 14:19:41 Документ подписал: директор Мишуровская Т.П. Сформированный уникальный программный ключ: 01d703aaacece950000000c900060002"><br>
 <a target="_blank" href="/about/sport/dokumenty/План спортивно-массовых мероприятий на 2022-2023 школьного спортивногоиклуба.pdf"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> План спортивно-массовых мероприятий на 2022-2023 школьного спортивного клуба «Метеор» на 2022-2023 учебный год</a><img src="/Gym40_information/documents/icon_pod.png" align="" style="width: 2%;" title="Документ подписан электронной подписью Дата и время подписания: 29.08.2022 11:05:33 Документ подписал: директор Мишуровская Т.П. Сформированный уникальный программный ключ: 01d703aaacece950000000c900060002"><br>
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'Метеор'); 
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