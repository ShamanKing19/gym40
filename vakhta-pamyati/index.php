<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("ВАХТА ПАМЯТИ");
?><p style="text-align: justify;">
	 Трагизм и величие, скорбь и радость, боль и память… Всё это – Победа. Яркой негасимой звездой сверкает она на небосклоне отечественной истории. Ничто не может заменить её – ни годы, ни события. Не случайно День Победы – это праздник, который с годами не только не тускнеет, но занимает всё более важное место в нашей жизни.
</p>
<p style="text-align: justify;">
	 2015 год – год знаменательный. Человечество отмечает 70-летие Победы советского народа в Великой Отечественной войне.
</p>
<p style="text-align: justify;">
	 Для нашей страны эта дата наполнена особым смыслом. Это – священная память о погибших на полях сражений. Это – наша история, наша боль, наша надежда…
</p>
<p style="text-align: justify;">
	 Основной долг всех последующих поколений нашей страны - долг перед поколением победителей - сохранить историческую память о Великой Отечественной войне, не оставить в забвении ни одного погибшего солдата, отдать дань благодарности за героический подвиг в Великой Отечественной войне живым ветеранам войны и трудового фронта.
</p>
<p style="text-align: justify;">
	 Проект «Вахта памяти» охватывает Патриотические праздники – День защитника Отечества, День штурма Кенигсберга, День Победы – вахта памяти, соревнования по военно-прикладным видам спорта, различные конкурсы, участие в городских акциях и соревнованиях, уроки Мужества, встречи с ветеранами Великой Отечественной войны и Вооружённых сил, посещение музеев города, и области, музеев боевой славы, конкурсы патриотической песни, трудовые вахты по уборке и благоустройству памятников, мемориалов воинской Славы.
</p>
 <?
$GLOBALS['arrFilter']=array("?TAGS" => 'Вахта памяти'); 
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
 <a href="/vakhta-pamyati/День героев отечества.pdf">День героев отечества.pdf</a><br>
 <a href="/vakhta-pamyati/План мероприятий по подготовке к празднованию 70.docx">План мероприятий по подготовке к празднованию 70-летия Победы в Великой Отечественной войне 1941-1945 гг.</a>
</p>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>