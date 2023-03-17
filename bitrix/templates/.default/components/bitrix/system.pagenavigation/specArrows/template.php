<?if (!defined('B_PROLOG_INCLUDED') || (B_PROLOG_INCLUDED !== true)) {die();}
if (!$arResult["NavShowAlways"])
{
	if ((0 == $arResult["NavRecordCount"]) || ((1 == $arResult["NavPageCount"]) && (false == $arResult["NavShowAll"])))
		return;
}
$navQueryString      = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."" : "");
$navQueryStringFull  = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="page-nave">
	<div class="numbers">
		<? if ($arResult["NavPageNomer"] == 1) { ?>
			<a class="pn-prev" href="/special/?PAGEN_1=<?=$arResult["NavPageNomer"]?>&special=y">����������</a>
		<? }else{ ?>
			<a class="pn-prev" href="/special/?PAGEN_1=<?=$arResult["NavPageNomer"]-1?>&special=y">����������</a>
		<? } ?>
		<? while ($arResult["nStartPage"] <= $arResult["nEndPage"]) { ?>
			<? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
				<span class="active"><?=$arResult["nStartPage"] ?></span>
			<? } elseif ((1 == $arResult["nStartPage"]) && (false == $arResult["bSavePage"])) { ?>
				<a href="/special/?PAGEN_1=<?=$arResult["nStartPage"]?>&special=y"><?=$arResult["nStartPage"] ?></a>
			<? } else { ?>
				<a href="/special/?PAGEN_1=<?=$arResult["nStartPage"]?>&special=y"><?=$arResult["nStartPage"] ?></a>
			<? } ?>
			<? $arResult["nStartPage"]++ ?>
		<? } ?>
		<? if ($arResult["NavPageNomer"] == $arResult["NavPageCount"]) { ?>
			<a class="pn-next" href="/special/?PAGEN_1=<?=$arResult["NavPageNomer"]?>&special=y">���������</a>
		<? }else{ ?>
			<a class="pn-next" href="/special/?PAGEN_1=<?=$arResult["NavPageNomer"]+1?>&special=y">���������</a>
		<? } ?>
	</div>
</div>