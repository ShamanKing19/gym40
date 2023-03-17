<?
    $rsAllSects = CIBlockSection::GetList(array("code" => "desc"),
        array("IBLOCK_ID" => $arParams["IBLOCK_ID"]));
    $arResult["all_sects"] = array();
    
    while($arSect = $rsAllSects->GetNext()){
        $arResult["all_sects"][] = $arSect;
    }
    
    if(!is_array($arResult["SECTION"]["PATH"]) || (count($arResult["SECTION"]["PATH"]) == 0)){
        if(!empty($arResult["all_sects"])){
            LocalRedirect($arResult["all_sects"][0]["SECTION_PAGE_URL"]);
        }
    }
    
    foreach($arResult["ITEMS"] as $key => $arItem){
        if(is_array($arItem["PREVIEW_PICTURE"])){
            $arFileTmp = CFile::ResizeImageGet(
                $arItem["PREVIEW_PICTURE"],
                array("width" => 70, "height" => 70),
                BX_RESIZE_IMAGE_EXACT,
                false
            );
            $arSize = getimagesize($_SERVER["DOCUMENT_ROOT"].$arFileTmp["src"]);
            $arItem["PREVIEW_PICTURE"]["WIDTH"] = IntVal($arSize[0]);
            $arItem["PREVIEW_PICTURE"]["HEIGHT"] = IntVal($arSize[1]);
            $arItem["PREVIEW_PICTURE"]["SRC"] = $arFileTmp["src"];
            $arResult["ITEMS"][$key]["PREVIEW_PICTURE"] = $arItem["PREVIEW_PICTURE"];
        }
    }
?>