<?/*$APPLICATION->IncludeComponent("bitrix:news.list","specMain",Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "31",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "#SITE_DIR#/press/job/detail.php?ID=#ID#",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);*/?>
<?
/**************************************************************************
Component News List.

This component is intended for displaying the list of the news from one, several or just from all information blocks.

Sample of usage:

$APPLICATION->IncludeFile("iblock/news/news.php", Array(
"ID"	=>	Array("1"),
"IBLOCK_TYPE"	=> "news",
"SECTION_ID"	=> "199",
"NEWS_COUNT"	=> "10",
"SORT_BY1"	=> "ACTIVE_FROM",
"SORT_ORDER1"	=> "DESC",
"SORT_BY2"	=> "SORT",
"SORT_ORDER2"	=> "ASC",
"CACHE_TIME"	=> "0"
));

Parameters:

ID - Information block ID
IBLOCK_TYPE - Information block type (will be used for check purposes only)
NEWS_COUNT - Number of the news on page
SORT_BY1 - Field for the first news sort
sort - by sorting index
timestamp_x - by modification date
name - by title
active_from - by activity date FROM
SORT_ORDER1 - Sorting order for the first news sort
asc - in ascending order
desc - in descending order
SORT_BY2 - Field for the second news sort
sort - by sorting index
timestamp_x - by modification date
name - by title
active_from - by activity date FROM
SORT_ORDER2 - Sorting order for the second news sort
asc - in ascending order
desc - in descending order
CACHE_TIME - (sec.) time for cacheing (0 - do not cache)

 **************************************************************************/

IncludeTemplateLangFile(__FILE__);

$ID = (isset($ID) ? $ID : $_REQUEST["ID"]);
$IBLOCK_TYPE = (isset($IBLOCK_TYPE) ? $IBLOCK_TYPE : "news");
if($IBLOCK_TYPE=="-")
	$IBLOCK_TYPE = "";

$NEWS_COUNT = (strlen($NEWS_COUNT)>0 ? intval($NEWS_COUNT) : "20");

$SORT_BY1 = (isset($SORT_BY1) ? $SORT_BY1 : "ACTIVE_FROM");
$SORT_ORDER1 = (isset($SORT_ORDER1) ? $SORT_ORDER1 : "DESC");
$SORT_BY2 = (isset($SORT_BY2) ? $SORT_BY2 : "SORT");
$SORT_ORDER2 = (isset($SORT_ORDER2) ? $SORT_ORDER2 : "ASC");

$SORT = Array($SORT_BY1=>$SORT_ORDER1, $SORT_BY2=>$SORT_ORDER2);
$FILTER = (isset($FILTER) ? $FILTER : array());
$SECTION_ID = (isset($SECTION_ID) ? $SECTION_ID : FALSE);
//$DETAIL_PAGE_URL = (isset($DETAIL_PAGE_URL) ? $DETAIL_PAGE_URL : "");
$CACHE_TIME = intval($CACHE_TIME);
$CACHE_ID = SITE_ID."|".$APPLICATION->GetCurPage()."|".md5(serialize($arParams))."|".$USER->GetGroups();

$APPLICATION->SetTitle(GetMessage("T_NEWS_NEWS_TITLE"));

$cache = new CPHPCache;
if($cache->InitCache($CACHE_TIME, $CACHE_ID))
{
	$vars = $cache->GetVars();
	$APPLICATION->SetTitle($vars["NAME"]);
	$APPLICATION->AddChainItem($vars["NAME"]);
	if(CModule::IncludeModule("iblock"))
		CIBlock::ShowPanel($ID, 0, 0, $vars["IBLOCK_TYPE_ID"]);
	$cache->Output();
}
else
{
	if(CModule::IncludeModule("iblock") && ($arIBlock = GetIBlock($ID, $IBLOCK_TYPE))):
		$APPLICATION->SetTitle($arIBlock["NAME"]);
		#$APPLICATION->AddChainItem($arIBlock["NAME"]);
		CIBlock::ShowPanel($ID, 0, 0, $arIBlock["IBLOCK_TYPE_ID"]);

		if ($_GET[theme] > 0) {
			$FILTER["PROPERTY_theme"] = $_GET[theme];
			$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("ID"=>"$_GET[theme]"));
			while($enum_fields = $property_enums->GetNext())
			{
				$THEME = $enum_fields["VALUE"];
				$APPLICATION->AddChainItem($THEME, "index.php?theme=$_GET[theme]");
				$APPLICATION->SetTitle($THEME);
				$DOP_URL = "&theme=$_GET[theme]";
			}
		}

		$cache->StartDataCache();

		$items = GetIBlockElementList($ID, $SECTION_ID, $SORT, $NEWS_COUNT, $FILTER);
		$items->NavPrint("Показаны записи", false, "", "/bitrix/templates/special/adv_navprint.php"); ?><br><br>

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><?
			while($obItem = $items->GetNextElement()):
				$arItem = $obItem->GetFields();
				//$arProp = $obItem->GetProperties();
				?>
				<tr>
					<td>
						<font class="text">
							<?if(strlen($arItem["DATE_ACTIVE_FROM"])>0 & $IBLOCK_TYPE != 'actions'):?><font class="newsdate"><?echo $arItem["DATE_ACTIVE_FROM"]?><br></font><?endif?>
							<?if ($IBLOCK_TYPE == 'actions'):?>
								<?$arIBlockElement = GetIBlockElement($arItem["ID"], "actions");
								$dateaction =  $arIBlockElement["PROPERTIES"]["dateaction"]["VALUE"];
								if(strlen($dateaction)>0):?><font class="newsdate"><?echo $dateaction;?><br></font><?endif?>
							<?endif?>
							<a href="<?echo $arItem["DETAIL_PAGE_URL"]."&special=y"?><?echo $DOP_URL;?>"><b><?echo $arItem["NAME"]?></b></a><br>
						</font>
					</td>
				</tr>
				<tr>
					<td><?echo ShowImage($arItem["PREVIEW_PICTURE"], 100, 100, "hspace='5' vspace='5' align='left' border='0'", $arItem["DETAIL_PAGE_URL"]."&special=y");?><?echo $arItem["PREVIEW_TEXT"];?></td>
				</tr>
			
				<?
			endwhile;
			?></table><br>
		<?
		$items->NavPrint("Показаны записи");

		$vars = Array("NAME"=>$arIBlock["NAME"]);
		$cache->EndDataCache($vars);
	else:
		ShowError(GetMessage("T_NEWS_NEWS_NA"));
	endif;
}
?>

