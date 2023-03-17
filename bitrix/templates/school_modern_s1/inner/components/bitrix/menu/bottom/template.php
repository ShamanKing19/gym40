<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<td class="footer_nav">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</dl>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>

    <?if ($arItem["IS_PARENT"]):?>

        <?if ($arItem["DEPTH_LEVEL"] == 1):?>
            <dl>
                <dt><?=$arItem["TEXT"]?></dt>
        <?endif?>

    <?else:?>

        <?if ($arItem["PERMISSION"] > "D"):?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <dl><dt><a<?if ($arItem["SELECTED"]):?> class="active"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></dt></dl>
            <?else:?>
                <dd><a<?if ($arItem["SELECTED"]):?> class="active"<?endif?> href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></dd>
            <?endif?>

        <?else:?>

            <?if ($arItem["DEPTH_LEVEL"] == 1):?>
                <dt><a href=""<?if ($arItem["SELECTED"]):?> class="active"<?endif?> title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></dt>
            <?else:?>
                <dd><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></dd>
            <?endif?>

        <?endif?>

    <?endif?>

    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
    <?=str_repeat("</dl>", ($previousLevel-1) );?>
<?endif?>

</td>
<?endif?>