<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="inline content-block">
	<div class="content-block-head">
		<h4>Новости и события</h4>
	</div>
	<div class="content-block-body">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="article" id="<?=$this->GetEditAreaId($arItem['ID']);?>>
			<span class="date">
<img src="/bitrix/templates/main/images/icon-calendar.png" alt="" class="fl"> 
				<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>
			</span>
			<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
		</div>
	<?endforeach;?>


	</div>
	<div class="content-block-foot no-print">
		<a href="/news/" class="more">Архив новостей</a>
	</div>
</div>
<script type="text/javascript">
	/*$(function(){
		var height = $('.main-news-block .content-block-body').height();
		if($('.main-news-block .content-docs-body').height()>height){
			height = $('.main-docs-block .content-block-body').height();
		}
		$(".main-news-block .content-block-body, .main-docs-block .content-block-body").css({height:height});
	});*/
</script>


