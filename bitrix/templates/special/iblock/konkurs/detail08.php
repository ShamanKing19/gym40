<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// Let's show text of news ID = $ID
// You need to set the following variable before using this file:
// $ID - ID of current news (element of informational block)
if (CModule::IncludeModule("iblock")):
	$ID = IntVal($ID);		// ID of news
	if ($arIBlockElement = GetIBlockElement($ID)):
		$APPLICATION->SetTitle($arIBlockElement["NAME"]); 
		?>
			<table cellpadding="5" cellspacing="0" border="0" width="100%">
				<tr valign="top"><td><?if ($arIBlockElement[ACTIVE_FROM] != ""): ?><b><?=$arIBlockElement["ACTIVE_FROM"];?></b><?endif;?></td></tr>
				<? if ($arIBlockElement["PROPERTIES"]["author"]["VALUE"] != '') { echo "<tr><td>Заказчик: ".$arIBlockElement["PROPERTIES"]["author"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["date"]["VALUE"] != '') { echo "<tr><td>Открытый конкурс состоится: ".$arIBlockElement["PROPERTIES"]["date"]["VALUE"]."</td></tr>"; }?>
				<tr>
					<td>
						<?if ($arIBlockElement["DETAIL_PICTURE"]):  echo ShowImage($arIBlockElement["DETAIL_PICTURE"], 400, 600, "hspace='10' vspace=5' align='left' border='0'"); endif;?>
						<?if ($arIBlockElement[DETAIL_TEXT] != ""){ echo $arIBlockElement["DETAIL_TEXT"]; } 
						else { echo $arIBlockElement["PREVIEW_TEXT"]; }?>
					</td>
				</tr>
				<tr>
					<td>
						<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["docfile3"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["docfile4"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["docfile5"]["VALUE"])>0): echo "<hr><font class=smalltext><strong>Список прилагаемых документов:</strong></font><br><br>"; ?>
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0): $DOCFILE1 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"]);echo "<a href=$DOCFILE1><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Извещение о конкурсе</a>";?><br><?endif?>
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile5"]["VALUE"])>0): $DOCFILE5 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile5"]["VALUE"]);echo "<a href=$DOCFILE5><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Конкурсная документация</a>";?><br><?endif?>			
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"])>0): $DOCFILE2 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"]);echo "<a href=$DOCFILE2><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Протокол вскрытия конвертов</a>";?><br><?endif?>			
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile3"]["VALUE"])>0): $DOCFILE3 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile3"]["VALUE"]);echo "<a href=$DOCFILE3><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Протокол рассмотрения заявок</a>";?><br><?endif?>			
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile4"]["VALUE"])>0): $DOCFILE4 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile4"]["VALUE"]);echo "<a href=$DOCFILE4><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Протокол оценки и сопостовления заявок</a>";?><br><?endif?>			


						<?endif;?>
					</td>
				</tr>
			</table>
		
		<?
	else:
		echo ShowError("News not found!");
	endif;
	?>
	
<?
else:
	?>Module not installed<?
endif;
?>