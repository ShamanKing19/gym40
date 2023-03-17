<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>

<ul id="horizontal-multilevel-menu">
<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li id="lvl1_item_<?=$arItem["ITEM_INDEX"]?>"><noindex><a href="<?=$arItem["LINK"]?>" rel="nofollow" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></noindex>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><noindex><a href="<?=$arItem["LINK"]?>" rel="nofollow" class="parent"><?=$arItem["TEXT"]?></a></noindex>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li id="lvl2_item_<?=$arItem["ITEM_INDEX"]?>" ><noindex><a href="<?=$arItem["LINK"]?>" rel="nofollow" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></noindex></li>
			<?else:?>
				<li id="lvl2_item_<?=$arItem["ITEM_INDEX"]?>" <?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><noindex><a href="<?=$arItem["LINK"]?>" rel="nofollow"><?=$arItem["TEXT"]?></a></noindex></li>
			<?endif?>

		<?else:?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><noindex><a href="" rel="nofollow" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></noindex></li>
			<?else:?>
				<li><noindex><a href="" rel="nofollow" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></noindex></li>
			<?endif?>
		<?endif?>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
<div class="menu-clear-left"></div>
<?endif?>
<script type="text/javascript">
$('#horizontal-multilevel-menu li').hover(function () {
     clearTimeout($.data(this,'timer'));
     $('ul',this).stop(true,true).slideDown(100);
  }, function () {
    $.data(this,'timer', setTimeout($.proxy(function() {
      $('ul',this).stop(true,true).slideUp(100);
    }, this), 100));
  });
</script>