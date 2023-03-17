<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<span class="footer_search">
<form action="<?=$arResult["FORM_ACTION"]?>">
<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
    "bitrix:search.suggest.input",
    "",
    array(
        "NAME" => "q",
        "VALUE" => "",
        "INPUT_SIZE" => 15,
        "DROPDOWN_SIZE" => 10,
    ),
    $component, array("HIDE_ICONS" => "Y")
);?>
<?else:?>
<input type="text" name="q" value="" maxlength="50" placeholder="Поиск по сайту">
<?endif;?>

<input class="img" type="image" name="s" src="<?=SITE_TEMPLATE_PATH?>/images/ico_search.png">
</form>
</span>