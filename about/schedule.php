<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "Расписание");
$APPLICATION->SetPageProperty("description", "Расписание занятий");
$APPLICATION->SetTitle("Расписание");
?><?$APPLICATION->IncludeComponent("school:school.edit_calendar", ".default", array(
	"EDIT_GROUP" => array(
		0 => "1",
		1 => "6",
	),
	"LESSON_COUNT" => "5"
	),
	false
);?> <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>