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
<script>
$(document).ready(function() {

$("#year-select").change(function(){alert($(this).val());/*window.location = $(this).val();*/});
});
</script>

<?endif;?>


<div class="box_collectiv box_progress">
    <ul>
<?foreach($arResult["ITEMS"] as $arItem):?>
    <?
    $this->AddEditAction($arItem["ID"], $arItem["EDIT_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem["ID"], $arItem["DELETE_LINK"], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage("CT_BNL_ELEMENT_DELETE_CONFIRM")));
    ?>
    <li id="<?=$this->GetEditAreaId($arItem["ID"]);?>">
        <table width="100%">
            <tr>
                <td width="144"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arItem["NAME"]?>"></td>
                <td>
                    <p><strong><?=$arItem["NAME"]?></strong></p>
                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                    <p><a target="_blank" class="read_more" href="<?=$arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"]?>"><?=$arItem["DISPLAY_PROPERTIES"]["link"]["VALUE"]?></a></p>
                </td>
            </tr>
        </table>
    </li>
<?endforeach;?>
    <li class="helper"> i i i i i i i i i i i i i </li>
    </ul>
</div>
<div class="clearfix"></div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>