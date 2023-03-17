<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Выпуск 2012 года");
?><p style="text-align:justify;">
В 2012 году гимназию закончили 41 чел.<br>
Из них с золотой и серебряной медалями - 10 чел.<br>
Высокие баллы (80 и более) на ЕГЭ получили 34 % выпускников.<br>
В ведущие вузы Москвы (МГИМО, МГУ), Санкт-Петербурга (госуниверситет и др.), в вузы Германии, Польши, Литвы, Чехии поступили 39 выпускников.
</p>
<div>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:photogallery",
	"",
	Array(
		"SHOW_LINK_ON_MAIN_PAGE" => array(),
		"USE_LIGHT_VIEW" => "Y",
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "photos",
		"IBLOCK_ID" => "22",
		"SECTION_SORT_BY" => "UF_DATE",
		"SECTION_SORT_ORD" => "DESC",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"PATH_TO_USER" => "",
		"SECTION_PAGE_ELEMENTS" => "15",
		"ELEMENTS_PAGE_ELEMENTS" => "50",
		"ALBUM_PHOTO_SIZE" => "120",
		"THUMBNAIL_SIZE" => "100",
		"JPEG_QUALITY1" => "100",
		"ORIGINAL_SIZE" => "1280",
		"JPEG_QUALITY" => "100",
		"ADDITIONAL_SIGHTS" => array(),
		"PHOTO_LIST_MODE" => "N",
		"SHOWN_ITEMS_COUNT" => "6",
		"SHOW_NAVIGATION" => "N",
		"DATE_TIME_FORMAT_DETAIL" => "d.m.Y",
		"DATE_TIME_FORMAT_SECTION" => "d.m.Y",
		"SET_TITLE" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"USE_RATING" => "N",
		"SHOW_TAGS" => "N",
		"DRAG_SORT" => "Y",
		"UPLOADER_TYPE" => "form",
		"APPLET_LAYOUT" => "extended",
		"UPLOAD_MAX_FILE_SIZE" => "1024",
		"USE_WATERMARK" => "N",
		"USE_COMMENTS" => "N",
		"SEF_FOLDER" => "/graduate_club/vypusk-2012/",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"SEF_URL_TEMPLATES" => Array("index"=>"index.php","section"=>"#SECTION_ID#/","section_edit"=>"#SECTION_ID#/action/#ACTION#/","section_edit_icon"=>"#SECTION_ID#/icon/action/#ACTION#/","upload"=>"#SECTION_ID#/action/upload/","detail"=>"#SECTION_ID#/#ELEMENT_ID#/","detail_edit"=>"#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/","detail_list"=>"list/","search"=>"search/"),
		"VARIABLE_ALIASES" => Array(),
		"VARIABLE_ALIASES" => Array(
		)
	)
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>