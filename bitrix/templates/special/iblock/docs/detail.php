<?
/**************************************************************************
Component Detailed News

This component is intended for displaying the detailed information for every news.

Sample of usage:

$APPLICATION->IncludeFile("iblock/news/detail.php", Array(
	"ID"	=>	$_REQUEST["ID"],
	"IBLOCK_TYPE"	=> "news",
	"CACHE_TIME"	=> "0"
	));

Parameters:

	ID - Element ID
 	IBLOCK_TYPE - Information block type (will be used for check purposes only)
	CACHE_TIME - (sec.) time for cacheing (0 - do not cache)

**************************************************************************/

IncludeTemplateLangFile(__FILE__);

$ID = (isset($ID) ? $ID : $_REQUEST["ID"]);
$IBLOCK_TYPE = (isset($IBLOCK_TYPE) ? $IBLOCK_TYPE : "docs");
if($IBLOCK_TYPE=="-")
	$IBLOCK_TYPE = "";

$CACHE_TIME = intval($CACHE_TIME);
$CACHE_ID = SITE_ID."|".$APPLICATION->GetCurPage()."|".md5(serialize($arParams))."|".$USER->GetGroups();

if(CModule::IncludeModule("iblock"))
	CIBlockElement::CounterInc($ID);

$cache = new CPHPCache;
if($cache->InitCache($CACHE_TIME, $CACHE_ID))
{
	$vars = $cache->GetVars();
	CIBlock::ShowPanel($vars["IBLOCK_ID"], $ID);
	#$APPLICATION->SetTitle($vars["NAME"]);
	#$APPLICATION->AddChainItem($vars["IBLOCK_NAME"], $vars["LIST_PAGE_URL"]);
	$cache->Output();
}
else
{
	if(CModule::IncludeModule("iblock")):
		if($arIBlockElement = GetIBlockElement($ID, $IBLOCK_TYPE)):
		
			if ($_GET[theme] > 0) { 
				$property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("ID"=>"$_GET[theme]"));
				while($enum_fields = $property_enums->GetNext())
					{
					  $THEME = $enum_fields["VALUE"];
					 # $APPLICATION->AddChainItem($THEME, "index.php?theme=$_GET[theme]");
					}
				}	

			CIBlock::ShowPanel($arIBlockElement["IBLOCK_ID"], $ID, 0, $IBLOCK_TYPE);
			$APPLICATION->SetTitle($arIBlockElement["NAME"]);
			#$APPLICATION->AddChainItem($arIBlockElement["NAME"], false);
			$cache->StartDataCache();
		?>
					<?if(strlen($arIBlockElement["DATE_ACTIVE_FROM"])>0):?><font class="newsdate"><b><?echo $arIBlockElement["DATE_ACTIVE_FROM"]?></b><br><br></font><?endif?>
					<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0): $DOCFILE1 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"]); $DOCNAME1 = $arIBlockElement["PROPERTIES"]["docname1"]["VALUE"]; if ($DOCNAME1 != '') { $DOWNLOAD1 = $DOCNAME1;} else {$DOWNLOAD1 = "Скачать весь документ"; }echo "<a href=$DOCFILE1><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>$DOWNLOAD1</a>";?><br><br><?endif?>			
			
			
				<table cellpadding="2" cellspacing="0" border="0" width="100%">
					<tr>
						<td valign="top" width="100%"><?if ($arIBlockElement["DETAIL_PICTURE"]):?><?echo ShowImage($arIBlockElement["DETAIL_PICTURE"], 250, 250, "hspace='5' vspace='2' align='left' border='0'", "", true, GetMessage("T_NEWS_DETAIL_ENLARGE_IMG"));?><?endif;?> <font class="text"><?echo $arIBlockElement["DETAIL_TEXT"];?></font></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</table>
			
	
			
		<?
			$vars = Array(
				"IBLOCK_ID"=>$arIBlockElement["IBLOCK_ID"],
				"NAME"=>$arIBlockElement["NAME"],
				"IBLOCK_NAME"=>$arIBlockElement["IBLOCK_NAME"],
				"LIST_PAGE_URL"=>$arIBlockElement["LIST_PAGE_URL"]
				);

			$cache->EndDataCache($vars);
		else:
			echo ShowError(GetMessage("T_NEWS_DETAIL_NF"));
			@define("ERROR_404", "Y");
		endif;
	else:
		echo ShowError(GetMessage("T_NEWS_DETAIL_MODULE_NA"));
	endif;
}
?>
