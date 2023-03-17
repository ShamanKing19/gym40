<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if(!function_exists("dvs_array_sort")){
	function dvs_array_sort($array, $on, $order=SORT_ASC)
	{
		$new_array = array();
		$sortable_array = array();

		if (count($array) > 0) {
			foreach ($array as $k => $v) {
				if (is_array($v)) {
					foreach ($v as $k2 => $v2) {
						if ($k2 == $on) {
							$sortable_array[$k] = $v2;
						}
					}
				} else {
					$sortable_array[$k] = $v;
				}
			}

			switch ($order) {
				case SORT_ASC:
					asort($sortable_array);
				break;
				case SORT_DESC:
					arsort($sortable_array);
				break;
			}

			foreach ($sortable_array as $k => $v) {
				$new_array[$k] = $array[$k];
			}
		}

		return $new_array;
	}
}

$arOut = array();
foreach($arResult["ITEMS"] as $item){
	$arOut[$item['IBLOCK_SECTION_ID']]['ELEMENTS'][] = $item;
}

foreach($arOut as $section_id => &$arSection){
	$rs = CIBlockSection::GetByID($section_id);
	if($arInfo = $rs->GetNext()){
		$arSection = array_merge($arSection, $arInfo);
	}
}
/*
print '<pre>';
print_r($arOut);
print '<pre>';
*/
$arResult["ITEMS"] = dvs_array_sort($arOut, "SORT");
?>