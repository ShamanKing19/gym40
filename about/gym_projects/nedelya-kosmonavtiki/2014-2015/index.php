<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Неделя космонавтики в 2014-2015 учебном году");
?><img width="353" src="/about/gym_projects/gagarin.jpg" height="225" title="День космонавтики" hspace="5" align="left">
<p style="text-align: justify;">
	 Гимназия №40 г. Калининграда носит имя первого космонавта планеты Юрия Алексеевича Гагарина. Ежегодно мы проводим Неделю космонавтики. В текущем году проект «Путь к звёздам» имеет насыщенную событиями и мероприятиями программу.
</p>
<p style="text-align: justify;">
	 8 апреля состоялось торжественное открытие Недели космонавтики в кино-концертном зале гимназии. На мероприятии присутствовали учащиеся 6 и 7 классов – всего около 300 человек. На церемонии выступила директор гимназии Т.П. Мишуровская. Она призвала гимназистов мечтать, творить, стремиться к успеху и не бояться трудностей, как Юрий Гагарин.
</p>
<p style="text-align: justify;">
	Юные гимназисты с удовольствием просмотрели видео-фрагмент о звёздном старте Ю. Гагарина. Им также была показана презентация и выступление учащихся 10 класса об истории развития космонавтики, о космических традициях Кёнигсберга и Калининграда.
</p>
<p style="text-align: justify;">
	 Неделя космонавтики продлится до 14 апреля.
</p>
<hr>
<?
$GLOBALS['arrFilter']=array("?TAGS" => 'Неделя космонавтики 2014'); 
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
<p style="text-align: justify;">
 <a href="/about/gym_projects/nedelya-kosmonavtiki/2014-2015/Программа недели космонавтики в гимназии.pdf">Программа Недели космонавтики в МАОУ гимназии № 40 им. Ю.А. Гагарина</a><br>
 <a href="/about/gym_projects/nedelya-kosmonavtiki/2014-2015/легенды звёздного неба.pdf">Легенды звёздного неба</a><br>
 <a href="/about/gym_projects/nedelya-kosmonavtiki/2014-2015/Гонка вооружений в космосе.pdf">Гонка вооружений в космосе</a>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>