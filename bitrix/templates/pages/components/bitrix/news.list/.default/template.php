<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="blog-image-snippet">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="row news-list" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="col-sm-3 col-md-3">
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="100%" height="auto" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" /></a>
				<?else:?>
					<img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="100%" max-height="300px" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
				<?endif;?>
			<?endif?>
		</div>
		<div class="col-sm-9 col-md-9">
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h5><b><?echo $arItem["NAME"]?></b></h5></a>
				<?else:?>
			<h4><b><?echo $arItem["NAME"]?></b></h4>
				<?endif;?>
			<?endif;?>
			
			<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
			<?endif;?>
				<div class="col-sm-6 text-left">
					<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
						<span class="sub alt-font"><i class="icon icon_calendar"></i> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?> </span>
					<?endif?>
				</div>
				<div class="col-sm-6 text-right">
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="link-text">Читать далее</a>
				</div>
		</div>
	</div>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
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
</section>