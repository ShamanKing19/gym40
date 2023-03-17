<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Участие в опросе");
?><?$APPLICATION->IncludeComponent("bitrix:voting.form", ".default", array(
	"VOTE_ID" => intVal($_REQUEST["VOTE_ID"]),
	"VOTE_RESULT_TEMPLATE" => "/votes/results/#VOTE_ID#/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>