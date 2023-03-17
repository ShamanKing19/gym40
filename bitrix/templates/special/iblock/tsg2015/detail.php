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
				<? if ($arIBlockElement["PROPERTIES"]["author"]["VALUE"] != '') { echo "<tr><td>Наименование ТСЖ: ".$arIBlockElement["PROPERTIES"]["author"]["VALUE"]."</td></tr>"; }?>
				<tr>
					<td>
						<?if ($arIBlockElement["DETAIL_PICTURE"]):  echo ShowImage($arIBlockElement["DETAIL_PICTURE"], 400, 600, "hspace='10' vspace=5' align='left' border='0'"); endif;?>
						<?if ($arIBlockElement[DETAIL_TEXT] != ""){ echo $arIBlockElement["DETAIL_TEXT"]; } 
						else { echo $arIBlockElement["PREVIEW_TEXT"]; }?>
					</td>
				</tr>
				<tr>
					<td>
						<?  if(strlen($arIBlockElement["PROPERTIES"]["dogovor1"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["dohody"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["deklaraziya"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["perechen_uslug"]["VALUE"])>0 OR strlen($arIBlockElement["PROPERTIES"]["god_plan"]["VALUE"])>0    OR strlen($arIBlockElement["PROPERTIES"]["dopolnenie"]["VALUE"])>0) :echo "<hr><font class=smalltext><strong>Список прилагаемых документов:</strong></font><br><br>"; ?>
							
                                                        <table cellpadding="5" cellspacing="1" border="0" cols="2" class=tablehead>
                                                                                                                
                                                        <tr><td> Название документа</td><td>Дата размещения</td></tr>
                                                        <tbody bgcolor=#FFFFFF>
                                                        
							                                          <?  if(strlen($arIBlockElement["PROPERTIES"]["dohody"]["VALUE"])>0): $DOCFILE5 = CFile::GetPath($arIBlockElement["PROPERTIES"]["dohody"]["VALUE"]);$date2 = $arIBlockElement['PROPERTIES']['date2']['VALUE'];echo "<tr><td><a href=$DOCFILE5><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Доходы  и расходы, связанные с содержанием и ремонтом общего имущества МКД</a></td><td>$date2</td></tr>";?><?endif?>
							                                          <?  if(strlen($arIBlockElement["PROPERTIES"]["deklaraziya"]["VALUE"])>0): $DOCFILE4 = CFile::GetPath($arIBlockElement["PROPERTIES"]["deklaraziya"]["VALUE"]);$date5 = $arIBlockElement['PROPERTIES']['date5']['VALUE'];echo "<tr><td><a href=$DOCFILE4><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Налоговая декларация</a></td><td>$date5</td></tr>";?><?endif?>			
                                                        <?  if(strlen($arIBlockElement["PROPERTIES"]["perechen_uslug"]["VALUE"])>0): $DOCFILE6 = CFile::GetPath($arIBlockElement["PROPERTIES"]["perechen_uslug"]["VALUE"]);$date6 = $arIBlockElement['PROPERTIES']['date6']['VALUE'];echo "<tr><td><a href=$DOCFILE6><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Перечень услуг и работ по содержанию общего имущества МКД</a></td><td>$date6</td></tr>";?><?endif?>
                                                        <?  if(strlen($arIBlockElement["PROPERTIES"]["god_plan"]["VALUE"])>0): $DOCFILE7 = CFile::GetPath($arIBlockElement["PROPERTIES"]["god_plan"]["VALUE"]);$date7 = $arIBlockElement['PROPERTIES']['date7']['VALUE'];echo "<tr><td><a href=$DOCFILE7><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Годовой план выполнения работ по содержанию МКД на 2015</a></td><td>$date7</td></tr>";?><?endif?>			
                                                        <?  if(strlen($arIBlockElement["PROPERTIES"]["dogovor1"]["VALUE"])>0): $DOCFILE8 = CFile::GetPath($arIBlockElement["PROPERTIES"]["dogovor1"]["VALUE"]);$date8 = $arIBlockElement['PROPERTIES']['date8']['VALUE'];echo "<tr><td><a href=$DOCFILE8><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Договор на обслуживание МКД</a></td><td>$date8</td></tr>";?><?endif?>
                                                        <?  if(strlen($arIBlockElement["PROPERTIES"]["dopolnenie"]["VALUE"])>0): $DOCFILE9 = CFile::GetPath($arIBlockElement["PROPERTIES"]["dopolnenie"]["VALUE"]);$date9 = $arIBlockElement['PROPERTIES']['date9']['VALUE'];echo "<tr><td><a href=$DOCFILE9><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>Дополнения</a></td><td>$date9</td></tr>";?><?endif?>
                                                        </tbody>
                                                        </table>
                                                  
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