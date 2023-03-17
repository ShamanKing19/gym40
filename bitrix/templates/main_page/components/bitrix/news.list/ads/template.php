<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="news-list">
			<?if($arParams["DISPLAY_TOP_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?><br />
			<?endif;?>
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
<div class="col-xlg-4 col-lg-6 col-md-6 col-sm-6 col-xs-12 blog-masonry-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="item-inner quote-post">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<img border="0" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" width="100%" height="auto" alt="<?=$arItem["NAME"]?>" title="<?=$arItem["NAME"]?>" />
		<?endif?>
			<div class="post-title">
					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<h2><?echo $arItem["NAME"]?></h2>
					<?endif;?>

					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<?echo $arItem["PREVIEW_TEXT"];?>
					<?endif;?>
				<div class="post-meta">
						<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
							<span class="sub alt-font"><i class="icon icon_calendar"></i> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
						<?endif?>
				</div>
				<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<div style="clear:both"></div>
				<?endif?>
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
		<div>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
</div>