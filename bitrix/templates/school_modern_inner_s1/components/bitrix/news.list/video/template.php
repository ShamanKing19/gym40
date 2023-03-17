<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="video_list">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

		<div style="margin-bottom:20px" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div>
			<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
				<h3><?echo $arItem["NAME"]?></h3>
			<?endif;?>
			<?echo $arr[1];?>
			</div>
			<?$arr = explode("</object>", $arItem["PREVIEW_TEXT"]);?>	
			<div><?echo $arr[0]."</object>"?></div>
			
			
		</div>
		<div style="clear:both;height:20px"></div>
	<?endforeach;?>
</div>