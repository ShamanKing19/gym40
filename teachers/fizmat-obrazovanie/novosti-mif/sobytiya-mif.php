<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("События МИФ");
?><h1 style="color: #333333;"><img width="150" src="http://gym40.ru/teachers/fizmat-obrazovanie/novosti-mif/MIF.gif" height="60" title="Гимназия №40. Новости математики, информатики, физики" align="left" style="height: auto; border-width: 0px; border-style: initial; border-color: initial;"></h1>
<p style="color: #333333;">
</p>
<p style="color: #333333;">
 <br>
</p>
<p style="color: #333333;">
 <br>
</p>
<p style="color: #333333;">
</p>
<p style="text-align: justify;">
	 Инновационный проект 2016-2017 года «Дни физ-мат профиля» подкреплён актуальными <a href="/Gym40_information/kafedry/kafedra-mif/documents/УМК, рабочие программы.pdf"><b>рабочими программами</b></a> занятий профильного дня в гимназических классах с углубленным изучением физики, математики, информатики, а также межпредметных модулей физ-мат направления.
</p>
<p style="text-align: justify;">
	 В рамках программы сопровождения организованы <a href="/Gym40_information/kafedry/kafedra-mif/documents/Кванториум. Вкладыш в дневник проектной деятельности .pdf"><b>внеурочные занятия</b></a> с одарёнными учащимися, готовящимся к участию в олимпиадах и конкурсах различного уровня, испытывающими потребности в развитии умения решать задачи высокого уровня по математике и физике, информатике и программированию.
</p>
<p style="text-align: justify;">
	 Мероприятия для учащихся классов физико-математического профиля в рамках сетевого партнёрства школ - участников регионального проекта «Реализация концепции развития математического образования в Калининградской области». Это, прежде всего, конкурсы -&nbsp; предметные, межпредметные на базе школ- площадок по физ-мат направлению; мероприятия регионального уровня на базе гимназии (конкурс «Парад планет» - в рамках развития лингвистического образования и физмат-площадки, Фестиваль науки и творчества). <a href="/Gym40_information/kafedry/kafedra-mif/documents/Программы курсов сопровождения обучающихся.pdf"><b>Подробней о курсах</b></a><b>.</b>
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'События МИФ'); 
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "60",
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
<p>
 <a href="http://gym40.ru/teachers/fizmat-obrazovanie/novosti-mif/archiv/index.php"><b>Архив новостей</b></a>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>