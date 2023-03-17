<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!$arResult["NavShowAlways"])
{
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

//echo "<pre>"; print_r($arResult);echo "</pre>";

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>

<div class="collectiv_page">
    <ul>
<?if($arResult["bDescPageNumbering"] === true):?>

    <?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <?if($arResult["bSavePage"]):?>
            <li class="page_left"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_left_page.gif" height="17" width="11"></a><li>
            
        <?else:?>
            
            <?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
                <li class="page_left"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_left_page.gif" height="17" width="11"></a></li>
                
            <?else:?>
                <li class="page_left"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_left_page.gif" height="17" width="11"></a></li>
                
            <?endif?>
        <?endif?>
    <?else:?>
        <li class="page_left disabled"><a href="#"></a><li>
    <?endif?>

    <?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
        <?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

        <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li class="active"><span><?=$NavRecordGroupPrint?></span></li>
        <?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
            <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a></li>
        <?else:?>
            <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a></li>
        <?endif?>

        <?$arResult["nStartPage"]--?>
    <?endwhile?>

    

    <?if ($arResult["NavPageNomer"] > 1):?>
        <li class="page_right"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_right_page.gif" height="17" width="11"></a></li>
        
        
    <?else:?>
        <li class="page_right disabled"><a href="#"></a></li>
    <?endif?>

<?else:?>

    <?if ($arResult["NavPageNomer"] > 1):?>

        <?if($arResult["bSavePage"]):?>

            <li class="page_left"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_left_page.gif" height="17" width="11"></a></li>
            
        <?else:?>
            
            <?if ($arResult["NavPageNomer"] > 2):?>
                <li class="page_left"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_left_page.gif" height="17" width="11"></a></li>
            <?else:?>
                <li class="page_left"><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_left_page.gif" height="17" width="11"></a></li>
            <?endif?>
            
        <?endif?>

    <?else:?>
        <li class="page_left disabled"><a href="#"></a></li>
    <?endif?>

    <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

        <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
            <li class="active"><span><?=$arResult["nStartPage"]?></span></li>
        <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
            <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
        <?else:?>
            <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
        <?endif?>
        <?$arResult["nStartPage"]++?>
    <?endwhile?>
    

    <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
        <li class="page_right"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><img src="<?=SITE_TEMPLATE_PATH?>/images/ico_right_page.gif" height="17" width="11"></a></li>
    <?else:?>
        <li class="page_right disabled"><a href="#"></a></li>
    <?endif?>

<?endif?>
    </ul>
</div>