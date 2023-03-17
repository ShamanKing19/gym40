<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Поиск по сайту");
?>
<?  $APPLICATION->IncludeComponent("bitrix:search.title", "search", array(
	"NUM_CATEGORIES" => "3",
	"TOP_COUNT" => "5",
	"ORDER" => "date",
	"USE_LANGUAGE_GUESS" => "Y",
	"CHECK_DATES" => "N",
	"SHOW_OTHERS" => "Y",
	"PAGE" => "#SITE_DIR#search_sp/",
	"CATEGORY_OTHERS_TITLE" => GetMessage("OTHER_TITLE"),
	"CATEGORY_0_TITLE" => GetMessage("NEWS_TITLE"),
	"CATEGORY_0" => array(
		0 => "iblock_news",
	),
	"CATEGORY_0_iblock_news" => array(
	),
	"CATEGORY_1_TITLE" => "",
	"CATEGORY_1" => array(
		0 => "no",
	),
	"CATEGORY_2_TITLE" => GetMessage("JOB_TITLE"),
	"CATEGORY_2" => array(
	),
	"SHOW_INPUT" => "Y",
	"INPUT_ID" => "title-search-input",
	"CONTAINER_ID" => "title-search"
	),
	false
);?>

<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>