<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>













<?if (!empty($arResult)):?>
<div class="header_menu">
<ul class="header_menu_ul">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>

    <?if ($arItem["IS_PARENT"]):?>

        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <li class="header_menu_item"><a<?if ($arItem["SELECTED"]):?> class="active"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                <ul>
        <?else:?>
            <li><a<?if ($arItem["SELECTED"]):?> class="active"<?endif?> href="<?=$arItem["LINK"]?>"><img src="<?=$arItem["PARAMS"]["IMG"]?>" border="0" /><?=$arItem["TEXT"]?></a>
                <ul>
        <?endif?>

    <?else:?>

        <?if ($arItem["PERMISSION"] > "D"):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="header_menu_item"><a<?if ($arItem["SELECTED"]):?> class="active"<?endif?> href="<?=$arItem["LINK"]?>"><img src="<?=$arItem["PARAMS"]["IMG"]?>" border="0" /><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a<?if ($arItem["SELECTED"]):?> class="active"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

        <?else:?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <li class="header_menu_item"><a href=""<?if ($arItem["SELECTED"]):?> class="active"<?endif?> title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

        <?endif?>

    <?endif?>

    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>












<?endif?>