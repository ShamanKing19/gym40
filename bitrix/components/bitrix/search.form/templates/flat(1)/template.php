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
$this->setFrameMode(true);?>
<div class="form-search">
	<form action="&lt;span id=" title="Код PHP: &lt;?=$arResult[&quot;FORM_ACTION&quot;]?&gt;" class="bxhtmled-surrogate">
		<?=$arResult["FORM_ACTION"]?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>"&gt; <?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
	"bitrix:search.suggest.input",
	"",
	Array(
		"NAME" => "q",
		"VALUE" => "",
		"INPUT_SIZE" => 15,
		"DROPDOWN_SIZE" => 10
	),
$component,
Array(
	'HIDE_ICONS' => 'Y'
)
);?><?else:?><input type="text" name="q" value="" size="15" maxlength="50"><?endif;?>&nbsp;<input name="s" type="submit" value="<span id=" title="Код PHP: &lt;?=GetMessage(&quot;BSF_T_SEARCH_BUTTON&quot;);?&gt;" class="bxhtmled-surrogate"><?=GetMessage("BSF_T_SEARCH_BUTTON");?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>" /&gt;
	</form>
</div>
<br>