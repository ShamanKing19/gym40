<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Медиагалерея");
?><p>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:photogallery", 
	".default", 
	array(
		"SHOW_LINK_ON_MAIN_PAGE" => array(
			0 => "rating",
		),
		"WATERMARK" => "Y",
		"WATERMARK_COLORS" => array(
			0 => "FF0000",
			1 => "FFFF00",
			2 => "FFFFFF",
			3 => "000000",
			4 => "",
		),
		"TEMPLATE_LIST" => ".default",
		"CELL_COUNT" => "0",
		"SLIDER_COUNT_CELL" => "4",
		"USE_LIGHT_VIEW" => "Y",
		"SEF_MODE" => "Y",
		"IBLOCK_TYPE" => "photos",
		"IBLOCK_ID" => "5",
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
		"ADDITIONAL_SIGHTS" => array(
		),
		"PHOTO_LIST_MODE" => "N",
		"SHOWN_ITEMS_COUNT" => "5",
		"SHOW_NAVIGATION" => "N",
		"DATE_TIME_FORMAT_DETAIL" => "d.m.Y",
		"DATE_TIME_FORMAT_SECTION" => "d.m.Y",
		"SET_TITLE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_NOTES" => "",
		"USE_RATING" => "N",
		"SHOW_TAGS" => "N",
		"DRAG_SORT" => "Y",
		"UPLOADER_TYPE" => "form",
		"APPLET_LAYOUT" => "extended",
		"UPLOAD_MAX_FILE_SIZE" => "2000",
		"USE_WATERMARK" => "N",
		"USE_COMMENTS" => "N",
		"SEF_FOLDER" => "/school_life/photo/",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"SEF_URL_TEMPLATES" => array(
			"index" => "index.php",
			"section" => "#SECTION_ID#/",
			"section_edit" => "#SECTION_ID#/action/#ACTION#/",
			"section_edit_icon" => "#SECTION_ID#/icon/action/#ACTION#/",
			"upload" => "#SECTION_ID#/action/upload/",
			"detail" => "#SECTION_ID#/#ELEMENT_ID#/",
			"detail_edit" => "#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/",
			"detail_list" => "list/",
			"search" => "search/",
		)
	),
	false
);?>
</p>
 <br>
<div>
 <br>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>