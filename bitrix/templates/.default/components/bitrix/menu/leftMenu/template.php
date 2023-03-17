<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<?if (!empty($arResult)):?>
		<nav id="nav">
			<?
			foreach($arResult as $arItem):?>
				<?if ($arItem["ITEM_INDEX"] == 0){continue;}?>
				<div class="item">
					<a
						<?if ($arItem["SELECTED"]):?> class="selected" <?endif?>
						href="<?=$arItem["LINK"]?>">
						<?=$arItem["TEXT"]?>
					</a>
				</div>
			<?endforeach?>
		</nav>
	<?endif?>
<?endif?>
<?/*
	global $USER;
	if ($USER->IsAdmin()){ echo "<pre>"; print_r($arResult); echo "</pre>";}

*/?>
