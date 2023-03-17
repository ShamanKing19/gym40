<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Результаты опроса");
?><?$APPLICATION->IncludeComponent(
	"bitrix:voting.result",
	"",
	Array(
		"VOTE_ID" => intVal($_REQUEST["VOTE_ID"]),
		"VOTE_ALL_RESULTS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "1200"
	),
false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>