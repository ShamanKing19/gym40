<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// Let's show text of news ID = $ID
// You need to set the following variable before using this file:
// $ID - ID of current news (element of informational block)
if (CModule::IncludeModule("iblock")):
	$ID = IntVal($ID);		// ID of news
	if ($arIBlockElement = GetIBlockElement($ID)):
		$APPLICATION->SetTitle("" . $arIBlockElement["NAME"]); 
		?>  <?if ($arIBlockElement["DETAIL_PICTURE"]):  echo ShowImage($arIBlockElement["DETAIL_PICTURE"], 400, 600, "hspace='10' vspace=5' align='left' border='0'"); endif;?> <?if ($arIBlockElement[DETAIL_TEXT] != ""){ echo $arIBlockElement["DETAIL_TEXT"]; } 
						else { echo $arIBlockElement["PREVIEW_TEXT"]; }?>
<br />

<table cellspacing="0" cellpadding="5" width="100%" border="0">
  <tbody>
    <tr><td><?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"])>0): echo "<font class=smalltext><strong>Список прилагаемых документов:</strong></font><br><br>"; ?> <?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0): $DOCFILE1 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"]); echo "<a href=$DOCFILE1><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Решение по жалобе</a>";?>
                                                               
     <br />
      <?endif?> <?endif;?> </td></tr>
  </tbody>
</table>
<?
	else:
		echo ShowError("News not found!");
	endif;
	?> <?
else:
	?>Module not installed<?
endif;
?>