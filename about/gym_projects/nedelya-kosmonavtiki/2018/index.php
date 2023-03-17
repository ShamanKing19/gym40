<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Неделя космонавтики в 2017-2018 учебном году");
?><p style="text-align: justify;">
 <a href="/about/gym_projects/nedelya-kosmonavtiki/2018/неделя космонавтики в 2017-2018 учебном году.pdf"><i class="fa fa-file-pdf-o fa-lg text-pdf" aria-hidden="true"></i> Неделя космонавтики в 2017-2018 учебном году</a>
</p>
<p>
	 12 апреля в кино-концертном зале «Галактика» состоялась церемония закрытия Недели космонавтики в гимназии.
</p>
<p>
	 По традиции в преддверии Дня космонавтики в гимназии проводятся проекты под общим названием «Путь к звёздам». На уроках, классных часах и занятиях в рамках Дня профиля учащиеся погружаются в волшебный мир космических фантазий. Учащиеся старших классов помогают учителям средней ступени образования организовывать в классах интересные конкурсы, соревнования, информационные и технические проекты.
</p>
<p style="text-align: center;">
 <a rel="lightbox[roadtrip]" href="/novosti/2017-2018/18.04/60.jpg"><img width="35%" src="/novosti/2017-2018/18.04/60.jpg"></a><a rel="lightbox[roadtrip]" href="/novosti/2017-2018/18.04/61.jpg"><img width="40%" src="/novosti/2017-2018/18.04/61.jpg"></a>
</p>
<p>
	 В гимназии прошли массовые мероприятия с участием учащихся 6-х классов (квест), учащихся 8-10 классов естественно-научного профиля (квест), учащихся 8 классов (Фестиваль «Наука и жизнь. Знакомство»), учащихся 7-8 классов («Космический кинозал» в мобильном планетарии), учащихся 7,9 классов – церемония закрытия Недели космонавтики.
</p>
<p>
	 В организации Недели космонавтики ведущую роль играли педагоги кафедры естественно-математических наук, Научное общество учащихся «Созидатели».
</p>
<p>
	 Директор гимназии Т.П. Мишуровская поздравила гимназистов с Днём космонавтики и выразила благодарность всем учащимся и педагогам, принимавшим участие в проекте «Путь к звёздам».
</p>
<p>
 <a href="/novosti/2017-2018/18.04/Календарь недели космонавтики-2018.pdf" target="_blank" style="color: #428bca !important;">Календарь недели космонавтики в МАОУ гимназии №40 имени Ю.А. Гагарина</a>
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'неделя космонавтики 2017'); 
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