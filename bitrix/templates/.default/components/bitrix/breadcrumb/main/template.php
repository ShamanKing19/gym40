<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if(empty($arResult)) return "";
$strReturn = '<div class="bread-crumb"><b>Вы здесь:</b>';
for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if ($index == 0) {
		$strReturn .= '<div><a href="'.$arResult[$index]["LINK"].'special/" title="'.$title.'">'.$title.'</a><b>&gt;</b></div>';
		continue;
	}
	$strReturn .= ($index != $itemSize - 1) ? '<div><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a><b>&gt;</b></div>' : '<div><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a></div>';
}

$strReturn .= '</div>';
return $strReturn;

?>
