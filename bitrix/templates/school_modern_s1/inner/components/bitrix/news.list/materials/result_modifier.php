<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
foreach($arResult["ITEMS"] as &$arItem){
	$arItem['SRC'] = false;
	if(isset($arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC'])&&strlen($arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC'])>0){
		$arItem['SRC'] = $arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['SRC'];
	}
}
?>