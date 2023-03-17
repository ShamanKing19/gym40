<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Карта сайта");
?>
<?$APPLICATION->IncludeComponent("bitrix:main.map","",Array(
		"LEVEL" => "2",
		"COL_NUM" => "3",
		"SHOW_DESCRIPTION" => "N",
		"SET_TITLE" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600"
	)
);?>
<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>