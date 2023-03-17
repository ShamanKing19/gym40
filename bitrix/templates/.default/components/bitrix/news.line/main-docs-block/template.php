<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="inline content-block main-docs-block">
	<div class="content-block-head">
		<div id="maindoc">Документы<img src="bitrix/templates/main/images/bg-note.png"></div>
	</div>
	<div class="content-block-body">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="article" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<span id="doc"><img src="bitrix/templates/main/images/icon-doc.png" alt="" class="fl">
			
			<?echo $arItem["DATE_ACTIVE_FROM"]?><br> 
			 <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
			 </span> 
			
			
	      </div>
	      <?endforeach;?>
	      </div>

	
	<div class="content-block-foot no-print">
		<a href="/docs/" class="more">Архив документов</a>
	</div>
</div>

