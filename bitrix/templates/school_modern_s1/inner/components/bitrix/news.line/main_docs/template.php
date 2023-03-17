<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(!empty($arResult["ITEMS"])):?>
<div class="sd_block sd_block_brd">
    <img class="sd_block_img" src="<?=SITE_TEMPLATE_PATH?>/images/ico_big_docs.png">
    <h4><?=GetMessage("CT_DOCS")?></h4>
    <ul class="docs_otchet">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <li class="<?=$arItem["FILE_TYPE"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?echo $arItem["SRC"]?>"><?echo $arItem["NAME"]?></a>
	</li>
    <?endforeach?>
    </ul>
</div>
<?endif?>