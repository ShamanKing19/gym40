<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<?
	$firstLevel = -1;
	$secondLevel = 0;
	$sub = array();
?>
<div id="menu">
	<ul>
	<?foreach($arResult as $arItem):?>
		<?if ($arItem["DEPTH_LEVEL"] == 2):?>
			<? $sub[$firstLevel][$secondLevel++] = '<li><a href=' . $arItem["LINK"] .'>' . $arItem["TEXT"] . '</a></li>' ?>
		<?endif?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):
            //echo '<pre>'; print_r($arItem["IS_PARENT"]);?>
			<?if (!$arItem["IS_PARENT"]):?>
				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                <?// $sub[$firstLevel][$secondLevel++] = '<li></li>' ?>
			<?else:?>
				<li><a href="javascript:void(0);"><?=$arItem["TEXT"]?></a></li>
			<?endif?>
			<?
				$firstLevel++;
				$secondLevel = 0;
			?>
		<?endif?>
	<?endforeach?>
	</ul>
</div>
<div id="sub-menu">
	<?foreach ($sub as $key){?>
		<ul>
			<?foreach ($key as $innerKey){?>
				<?=$innerKey?>
			<?}?>
		</ul>
	<?}?>
</div>
<?endif?>