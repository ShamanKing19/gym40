<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if(is_array($arResult["SECTION"]["PATH"]) && (count($arResult["SECTION"]["PATH"]) > 0)):?>
    <?$strRecentSect = $arResult["SECTION"]["PATH"][0]["NAME"]?>
<div class="search_date">
    <select id="year-select">
    <?foreach($arResult["all_sects"] as $arSect):?>
        <option value="<?=$arSect["SECTION_PAGE_URL"]?>"<?if($arSect["NAME"] == $strRecentSect):?> selected<?endif;?>><?=$arSect["NAME"]?></option>
    <?endforeach;?>
    </select>
</div>
<script>$(".search_date").on("change", "#year-select", function(){
	window.location = $('#year-select option:selected').val();
});</script>
<?endif;?>


<table class="main_block">
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if($key != 0){?>
    <tr>
        <td colspan="2" class="line"></td>
    </tr>
    <?}?>
    <tr>
        <td width="82">
        <?if(!empty($arItem["PREVIEW_PICTURE"])):?>	
		<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?endif?>
        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>">
        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?></a><?endif?>
		<?endif;?>
        </td>
        <td>
            <p class="date"><?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?><?echo strtolower($arItem["DISPLAY_ACTIVE_FROM"])?><?endif?></p>
            <p id="<?=$this->GetEditAreaId($arItem['ID']);?>"><?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                <?else:?>
                    <?echo $arItem["NAME"]?>
                <?endif;?>
            <?endif;?></p>
            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
            <p><?echo $arItem["PREVIEW_TEXT"];?></p>
            <?endif;?>
        </td>
    </tr>
<?endforeach;?>
</table>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>
