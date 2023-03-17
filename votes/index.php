<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опросы");
?><?$APPLICATION->IncludeComponent("bitrix:voting.list", ".default", array(
	"CHANNEL_SID" => array(
		0 => "SCHOOL_VOTES",
	),
	"VOTE_FORM_TEMPLATE" => "/votes/new/#VOTE_ID#/",
	"VOTE_RESULT_TEMPLATE" => "/votes/results/#VOTE_ID#/"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>