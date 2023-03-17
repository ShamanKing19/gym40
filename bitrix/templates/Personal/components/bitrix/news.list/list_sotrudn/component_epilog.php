<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
    if (is_array($arResult["SECTION"]["PATH"])) 
       { 
        $s = array_pop($arResult["SECTION"]["PATH"]); 
        $GLOBALS['APPLICATION']->SetTitle($s["NAME"]); 
       } 
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>