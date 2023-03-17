<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>
<h4 class="text-center"><?echo $arResult["SECTION"]["PATH"][0]["NAME"]?></h4>

<?foreach(array_chunk($arResult["ITEMS"], $arParams["COLS_NUMBER"]) as $arPartItems):?>
  <div class="rows">
    <?foreach($arPartItems as $arItem):?>
        <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
	<div class="col-sm-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="team-1-member">

					<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>"></p>
						<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
							<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
								<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img class="img-rounded" width="200" height="230" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" /></a>
							<?else:?>
								<img class="img-rounded" width="200" height="230" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />
							<?endif;?>
						<?endif?>

					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
							<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><h5><?echo $arItem["NAME"]?></h5></a>
						<?else:?>
							<h5><?echo $arItem["NAME"]?></h5>
						<?endif;?>
					<?endif;?>

					<span class="text-center">
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
							<?echo $arItem["PREVIEW_TEXT"];?>
						<?endif;?>
					</span>
			</div>
	</div>
					<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
					<?endif?>
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
    <?endforeach;?> 
</div>
	 <?endforeach;?>

		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
						<br /><?=$arResult["NAV_STRING"]?>
					<?endif;?>
