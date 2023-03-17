<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="main-container">
	<header class="title">
		<div class="background-image-holder parallax-background">
			<!--display detail picture-->
			<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
				<img class="background-image" alt="<?=$arResult["NAME"]?>" src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>">						
			<?endif?>
		</div>
				
		<div class="container align-bottom">
			<div class="row">
				<div class="col-xs-12">
					<!--name news-->
					<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
					<h1 class="text-white"><?=$arResult["NAME"]?></h1>
					<?endif;?>					
					<!--date news-->
					<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
					<span class="sub alt-font text-white"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
					<?endif;?>	
				</div>
			</div><!--end of row-->
		</div><!--end of container-->
	</header>
	
	<section class="article-single">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="article-body">
						<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
						<p class="lead"><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
						<?endif;?>
						
						<?if($arResult["NAV_RESULT"]):?>
						<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
						<?echo $arResult["NAV_TEXT"];?>
						<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
						<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
						<?echo $arResult["DETAIL_TEXT"];?>
						<?else:?>
						<?echo $arResult["PREVIEW_TEXT"];?>
						<?endif?>
						<div style="clear:both"></div>
						<br />
						<?foreach($arResult["FIELDS"] as $code=>$value):?>
						<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
						<br />
						<?endforeach;?>
						<?foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

						<?=$arProperty["NAME"]?>:&nbsp;
						<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
						<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
						<?else:?>
						<?=$arProperty["DISPLAY_VALUE"];?>
						<?endif?>
						<br />
						<?endforeach;?>
						
					</div><!--end of article body-->
				</div>
			</div>
</div>