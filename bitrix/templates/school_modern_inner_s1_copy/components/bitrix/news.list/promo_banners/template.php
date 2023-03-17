<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult["ITEMS"])){?>
<div class="slider"><!-- slider http://caroufredsel.dev7studios.com -->
    <ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>">
        <div class="slider_text">
            <div>
                <?if(strlen($arItem["PROPERTIES"]["LINK"]["VALUE"]) > 0){?>
                <h3><a href="<?echo $arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?echo $arItem["NAME"]?></a></h3>
                <?}else{?>
                <h3><?echo $arItem["NAME"]?></h3>
                <?}?>
                <?if(strlen($arItem["PREVIEW_TEXT"]) > 0){?>
                <?echo $arItem["PREVIEW_TEXT"];?>
                <?}?>
            </div>
        </div>
    </li>
<?endforeach;?>
    </ul>
    <div class="clearfix"></div>
    <div class="pagerslider"></div>
</div>
<?}?>