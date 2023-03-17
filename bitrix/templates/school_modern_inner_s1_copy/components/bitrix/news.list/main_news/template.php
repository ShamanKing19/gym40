<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="span8n">
    <h3><?=$arResult["NAME"]?></h3>
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
        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?endif?>
          <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>">
          <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?></a><?endif?>
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
</div>