<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<ul id="horizontal-multilevel-menu">
<?
foreach($arResult as $arItem):?>
	<?if ($arItem["IS_PARENT"]):?>
		<li>
			<a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
		</li>
	<?elseif($arItem["DEPTH_LEVEL"] == 1) :?>
		<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
</ul>
<div class="menu-clear-left"></div>
<?endif?>