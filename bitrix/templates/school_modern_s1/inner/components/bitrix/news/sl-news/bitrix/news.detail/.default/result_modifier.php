<?
	$rsSect = CIBlockSection::GetByID(intval($arResult['IBLOCK_SECTION_ID']));
	if($arSect = $rsSect->GetNext()){
		$arResult['back'] = $arSect['SECTION_PAGE_URL'];
	}
	
	else $arResult['back'] = $arResult['LIST_PAGE_URL'];
?>