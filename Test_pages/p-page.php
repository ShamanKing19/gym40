<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("p_page");
?><div class="row">
	 <?$APPLICATION->IncludeComponent(
	"api:search.filter", 
	"gray-blue1", 
	array(
		"BUTTON_ALIGN" => "center",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECKBOX_NEW_STRING" => "N",
		"CHECK_ACTIVE_SECTIONS" => "N",
		"CHOSEN_PLUGIN_PARAM__disable_search_threshold" => "30",
		"COMPONENT_TEMPLATE" => "gray-blue1",
		"ELEMENT_IN_ROW" => "2",
		"FIELD_CODE" => array(
			0 => "SECTION_ID",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"FILTER_TITLE" => "Фильтр",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "structure",
		"INCLUDE_AUTOCOMPLETE_PLUGIN" => "Y",
		"INCLUDE_CHOSEN_PLUGIN" => "Y",
		"INCLUDE_FORMSTYLER_PLUGIN" => "Y",
		"INCLUDE_JQUERY" => "Y",
		"INCLUDE_JQUERY_UI" => "Y",
		"INCLUDE_JQUERY_UI_SLIDER" => "Y",
		"INCLUDE_JQUERY_UI_SLIDER_TOOLTIP" => "Y",
		"INCLUDE_PLACEHOLDER" => "Y",
		"JQUERY_UI_FONT_SIZE" => "14px",
		"JQUERY_UI_SLIDER_BORDER_RADIUS" => "Y",
		"JQUERY_UI_THEME" => "excite-bike",
		"LIST_HEIGHT" => "5",
		"NAME_WIDTH" => "130",
		"NUMBER_TO_STRING" => array(
			0 => "",
			1 => "",
		),
		"NUMBER_WIDTH" => "85",
		"PRICE_CODE" => array(
		),
		"PROPERTY_CODE" => array(
			0 => "FIO",
			1 => "",
		),
		"REDIRECT_FOLDER" => "",
		"REMOVE_POINTS" => "Y",
		"REPLACE_ALL_LABEL" => "N",
		"SAVE_IN_SESSION" => "Y",
		"SECTIONS_DEPTH_LEVEL" => "",
		"SECTIONS_FIELD_TITLE" => "Выберите категорию",
		"SECTIONS_FIELD_VALUE_TITLE" => "Все разделы",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SELECT_IN_CHECKBOX" => array(
			0 => "",
			1 => "",
		),
		"SELECT_WIDTH" => "300",
		"TEXT_WIDTH" => "300",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
	<div class="col-sm-12">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"list_sotrudn", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLS_NUMBER" => "4",
		"DETAIL_URL" => "/employees/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "3",
		"IBLOCK_TYPE" => "structure",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "50",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "new",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "list_sotrudn",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"FILE_404" => ""
	),
	false
);?>
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>