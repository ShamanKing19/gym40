<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

						<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["PREVIEW_PICTURE"])):?>
<img class="img-thumbnail pos" alt="<?=$arResult["NAME"]?>" src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" />
        				<?endif?>
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
							<p class="lead"><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
						<?endif;?>

						<?if($arResult["NAV_RESULT"]):?>
						<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br><?endif;?>
						<?echo $arResult["NAV_TEXT"];?>
						<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br><?=$arResult["NAV_STRING"]?><?endif;?>
						<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
						<?echo $arResult["DETAIL_TEXT"];?>
						<?else:?>
						<?echo $arResult["PREVIEW_TEXT"];?>
						<?endif?>
						<div style="clear:both"></div>