<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="news-list" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<section class="blog-image-snippet">
		<div class="background-image-holder parallax-background">
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img class="background-image" border="0" width="100%" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /></a>
				<?else:?>
					<img class="background-image" width="100%" border="0" src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
				<?endif;?>
			<?endif?>
		</div>
		
		<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
								<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h1 class="text-white"><?echo $arItem["NAME"]?></h1></a>
								<?else:?>
							<h1 class="text-white"><?echo $arItem["NAME"]?></h1>
								<?endif;?>
							<?endif;?>
								<div class="col-sm-6 text-left">
									<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
										<span class="sub alt-font text-white"><i class="icon icon_calendar text-white"></i> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?> </span>
									<?endif?>
								</div>
						</div>
					</div>
		</div>
	</section>
	</div>

		<?if($arParams["USE_RATING"]=="Y"):
			$parent = $component->GetParent();
		?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:iblock.vote",
			"ajax",
			Array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"ELEMENT_ID" => $arItem["ID"],
				"MAX_VOTE" => $arParams["MAX_VOTE"],
				"VOTE_NAMES" => $arParams["VOTE_NAMES"],
				"CACHE_TYPE" => $parent->arParams["CACHE_TYPE"],
				"CACHE_TIME" => $parent->arParams["CACHE_TIME"],
				"DISPLAY_AS_RATING" => $parent->arParams["DISPLAY_AS_RATING"],
			),
			$component->GetParent()
		);?>
		<?endif?>
		<?endforeach;?>

	<div class="container">
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
		<?endif;?>
	</div>
