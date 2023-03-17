<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// Let's show text of news ID = $ID
// You need to set the following variable before using this file:
// $ID - ID of current news (element of informational block)
if (CModule::IncludeModule("iblock")):
	$ID = IntVal($ID);		// ID of news
	if ($arIBlockElement = GetIBlockElement($ID)):
		$APPLICATION->SetTitle("Извещение о проведении запроса котировок цен № " . $arIBlockElement["NAME"]); 
		?>
			<table cellpadding="5" cellspacing="0" border="1" width="100%">
					<tr>
					<td width=30%> Наименование<td>
						<?if ($arIBlockElement["DETAIL_PICTURE"]):  echo ShowImage($arIBlockElement["DETAIL_PICTURE"], 400, 600, "hspace='10' vspace=5' align='left' border='0'"); endif;?>
						<?if ($arIBlockElement[DETAIL_TEXT] != ""){ echo $arIBlockElement["DETAIL_TEXT"]; } 
						else { echo $arIBlockElement["PREVIEW_TEXT"]; }?>
					</td> </tr>

				<? if ($arIBlockElement["PROPERTIES"]["author"]["VALUE"] != '') { echo "<tr><td width=30%>Заказчик </td><td>".$arIBlockElement["PROPERTIES"]["author"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["adress"]["VALUE"] != '') { echo "<tr><td width=30%>Почтовый адрес заказчика</td><td> ".$arIBlockElement["PROPERTIES"]["adress"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["finance"]["VALUE"] != '') { echo "<tr><td width=30%>Источник финансирования</td><td> ".$arIBlockElement["PROPERTIES"]["finance"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["date1"]["VALUE"] != '') { echo "<tr><td width=30%>Дата назначения</td><td> ".$arIBlockElement["PROPERTIES"]["date1"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["date2"]["VALUE"] != '') { echo "<tr><td width=30%>Дата завершения</td><td> ".$arIBlockElement["PROPERTIES"]["date2"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["date3"]["VALUE"] != '') { echo "<tr><td width=30%>Срок подписания победителем муниципального контракта со дня подписания протокола</td><td> ".$arIBlockElement["PROPERTIES"]["date3"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["place"]["VALUE"] != '') { echo "<tr><td width=30%>Адрес представления котировочной заявки</td><td> ".$arIBlockElement["PROPERTIES"]["place"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["fax"]["VALUE"] != '') { echo "<tr><td width=30%>Факс</td><td> ".$arIBlockElement["PROPERTIES"]["fax"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["phone"]["VALUE"] != '') { echo "<tr><td width=30%>Телефон</td><td> ".$arIBlockElement["PROPERTIES"]["phone"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["contact"]["VALUE"] != '') { echo "<tr><td width=30%>Контактное лицо</td><td> ".$arIBlockElement["PROPERTIES"]["contact"]["VALUE"]."</td></tr>"; }?>
				</table><br>
				<table cellpadding="5" cellspacing="0" border="0" width="100%">
					<td>
						<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"])>0): echo "<font class=smalltext><strong>Список прилагаемых документов:</strong></font><br><br>"; ?>
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0): $DOCFILE1 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"]); echo "<a href=$DOCFILE1><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Приложение №1</a>";?><br><br><?endif?>			
							<?  if(strlen($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"])>0): $DOCFILE2 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"]); echo "<a href=$DOCFILE2><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Протокол заседания котировочной комиссии</a>";?><br><br><?endif?>
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