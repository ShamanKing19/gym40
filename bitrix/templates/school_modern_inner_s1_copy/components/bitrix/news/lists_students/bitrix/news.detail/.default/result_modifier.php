<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$cUser = new CUser; 

$arFilter = array("UF_EDU_STRUCTURE" => $arResult['ID']);
$arStudents = array();
$dbUsers = $cUser->GetList($by = "ID", $order = "ASC", $arFilter);
while ($arUser = $dbUsers->Fetch()){
	$arStudents[] = $arUser;
}

$arResult['ST'] = $arStudents;
?>