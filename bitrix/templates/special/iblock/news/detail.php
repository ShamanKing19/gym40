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
$IBLOCK_TYPE = (isset($IBLOCK_TYPE) ? $IBLOCK_TYPE : "news");
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
	$APPLICATION->SetTitle($vars["NAME"]);
	$APPLICATION->AddChainItem($vars["IBLOCK_NAME"], $vars["LIST_PAGE_URL"]);
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
					  $APPLICATION->AddChainItem($THEME, "index.php?theme=$_GET[theme]");
					}
				}	

			CIBlock::ShowPanel($arIBlockElement["IBLOCK_ID"], $ID, 0, $IBLOCK_TYPE);
			$APPLICATION->SetTitle($arIBlockElement["NAME"]);
			$APPLICATION->AddChainItem($arIBlockElement["NAME"], false);
			$cache->StartDataCache();
		?>
					<?if(strlen($arIBlockElement["DATE_ACTIVE_FROM"])>0 & $IBLOCK_TYPE != 'actions'):?><font class="newsdate"><?echo $arIBlockElement["DATE_ACTIVE_FROM"]?><br></font><?endif?>
					<?if ($IBLOCK_TYPE == 'actions'):?>
						<?if(strlen($arIBlockElement["PROPERTIES"]["dateaction"]["VALUE"])>0):?><font class="newsdate"><?echo $arIBlockElement["PROPERTIES"]["dateaction"]["VALUE"];?><br><br></font><?endif?>
						<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile"]["VALUE"])>0): $DOCFILE = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile"]["VALUE"]); echo "<a href=$DOCFILE><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить приложение\" hspace=3 align=absmiddle><strong>Загрузить приложение</strong></a>";?><br><br><?endif?>
					<?endif?>
					<?if(strlen($arIBlockElement["PROPERTIES"]["author"]["VALUE"])>0):?><font class=smalltextblack>Автор:</font> <font class=smalltext><?echo $arIBlockElement["PROPERTIES"]["author"]["VALUE"];?></font><br><?endif?>
					<?if(strlen($arIBlockElement["PROPERTIES"]["theme"]["VALUE"])>0):?><font class=smalltextblack>Рубрика:</font> <font class=smalltext><?echo $arIBlockElement["PROPERTIES"]["theme"]["VALUE"];?></font><br><?endif?>					
					<?if(strlen($arIBlockElement["PROPERTIES"]["source"]["VALUE"])>0):?><font class=smalltextblack>Источник:</font> <font class=smalltext><?echo $arIBlockElement["PROPERTIES"]["source"]["VALUE"];?></font><br><?endif?>					
			
			
				<table cellpadding="2" cellspacing="0" border="0" width="100%" id="newsDetail">
					<tr>
						<td valign="top" width="100%"><?if ($arIBlockElement["DETAIL_PICTURE"]):?><?echo ShowImage($arIBlockElement["DETAIL_PICTURE"], 250, 250, "hspace='5' vspace='2' align='left' border='0'", "", true, GetMessage("T_NEWS_DETAIL_ENLARGE_IMG"));?><?endif;?> <font class="text"><?echo $arIBlockElement["DETAIL_TEXT"];?></font></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				</table>
					<?if ($arIBlockElement["PROPERTIES"]["ID_PHOTO"]["VALUE"]>0):?>
					<?$APPLICATION->IncludeFile("iblock/photo/1section.php", Array(
					'IBLOCK_TYPE'	=>	'photo',	// Тип инфо-блока
					'IBLOCK_ID'	=>	'1',	// Инфо-блок
					'SECTION_ID'	=>	$arIBlockElement["PROPERTIES"]["ID_PHOTO"]["VALUE"],	// ID раздела
					'PAGE_ELEMENT_COUNT'	=>	'15',	// Количество элементов на странице
					'LINE_ELEMENT_COUNT'	=>	'3',	// Количество фотографий выводимых в одной строке таблицы
					'ELEMENT_SORT_FIELD'	=>	'sort',	// По какому полю сортируем фотографии
					'ELEMENT_SORT_ORDER'	=>	'asc',	// Порядок сортировки фотографий в разделе
					'FILTER_NAME'	=>	'arrFilter',	// Имя массива со значениями фильтра для фильтрации элементов
					'CACHE_FILTER'	=>	'N',	// Кэшировать при установленом фильтре
					'CACHE_TIME'	=>	'0',	// Время кэширования (сек.)
					));?>
					<?endif?>					
						
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
