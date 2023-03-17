<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><? 
global $USER;
CModule::IncludeModule("iblock");?>

<? 
$USER_ID = $USER->GetID();
if ($USER->IsAdmin()){ echo "<a href=/bitrix/admin/iblock_element_edit.php?type=orders&lang=ru&IBLOCK_ID=35&filter_section=&IBLOCK_SECTION_ID=&return_url=%2Fbusiness%2Forders%2Fquotation><b><font color=red>Добавить новую запись в раздел &laquo;Котировки&raquo;</font></b></a><br><br>";}
?>


<?
if ($_GET[del]) {
	if($USER->IsAdmin()) {
		$DB->StartTransaction();
		if(!CIBlockElement::Delete($_GET[del]))	{
			echo "<br><font color=red><b>Ошибка удаления. У вас не хватает прав доступа</b></font><br><br>";	
			$DB->Rollback();
		}	
		else
		$DB->Commit();
		echo "<font color=red><b>Запись № $_GET[del] удалёна </b></font><br><br>";
	}
} ?>

<table width=350 cellpadding=5 cellspacing=1 border=0 class=tablehead>
	<tr>
		<td bgcolor=#FFFFFF>
			<table width=100% cellpadding=5 cellspacing=0 border=0>
			<form method=GET action=index.php>
				<tr>
					<td colspan="2"><strong>Фильтр котировок:</strong></td>
				</tr>
				<tr>
					<td align="right" nowrap>Наименование котировки:</td>
					<td width="100%"><INPUT class=typeinput maxLength=255 size=40 name=NAME value="<? echo $_GET[NAME];?>"></td>
				</tr>				
				<tr>
					<td colspan="2" align="right"><INPUT class=inputbutton type=submit value='Установить фильтр'></td>
				</tr>
				</form>
			</table>
		</td>
	</tr>
</table><br>



<?

		
		$NAME = $_GET[NAME];
		if ($NAME != '') { $arrFilter["PREVIEW_TEXT"] = "%$NAME%"; }
		
		$items = GetIBlockElementList(35, false, Array("DATE_CREATE"=>"DESC", "ID"=>"DESC", "NAME"=>"DESC"), 25, $arrFilter);
		$items->NavPrint("Показано:", false, "", "/bitrix/templates/special/adv_navprint.php");
?>
<br><br>



<?
$ELEMENT_quotation = "quotation_$ID";
$obquotationCache = new CPageCache; 
$life_quotation_time = 0; 
$cache_quotation_id = $ELEMENT_quotation.$IBLOCK_TYPE.$USER->GetUserGroupString(); 
if($obquotationCache->StartDataCache($life_quotation_time, $cache_quotation_id, "/")):
?>
	<table width="100%" cellpadding="0" cellspacing="0" border=0>
				<tr ><td width=100%>
					<table width=100% cellpadding=1 cellspacing=1 border=0 class=tablehead>
					 <td width=60% align=center style=font-size:10px>Наименование котировки</td>
                                        <td width=14% align=center style=font-size:10px>Дата и время<br>начала срока подачи<br>котировочных заявок:</td>
					<td width=14% align=center style=font-size:10px>Дата и время<br>окончания срока подачи<br>котировочных заявок:</td>
					<td width=12% align=center style=font-size:10px>Протокол:</td></table></td></tr>	
		<?
		$count = 0;
		while($arItem = $items->GetNext())
		{
			$arIBlockElement = GetIBlockElement($arItem[ID]);
			$author = $arIBlockElement['PROPERTIES']['author']['VALUE'];
                        $time1 = FmtDate($arIBlockElement['PROPERTIES']['datanaz']['VALUE'], "HH.MI.SS");
                        $date1 = FmtDate($arIBlockElement['PROPERTIES']['datanaz']['VALUE'], "DD.MM.YYYY");
			$time2 = FmtDate($arIBlockElement['PROPERTIES']['datazav']['VALUE'], "HH.MI.SS");
			$date2 = FmtDate($arIBlockElement['PROPERTIES']['datazav']['VALUE'], "DD.MM.YYYY");
			$delpage = $APPLICATION->GetCurPageParam("del=$arItem[ID]"); 
			echo "<tr valign=top><td>
				<table width=100% cellpadding=0 cellspacing=0 border=0>
						<tr>
						<td bgcolor=#FFFFFF>
							<table width=100% cellpadding=1 cellspacing=1 border=0 cols=4 class=tablehead>";
								if ($USER->IsAdmin()) {
								echo "<tr>
									<td colspan=4 bgcolor=#FFFFFF>Заказ № $arItem[ID], 
									
									<a href=/bitrix/admin/iblock_element_edit.php?type=news&lang=ru&IBLOCK_ID=35&ID=$arItem[ID]&filter_section=&return_url=%2Fbusiness%2Forders%2Fquotation>редактировать котировку</a>, <a href=$delpage>удалить котировку</a></td>
									</tr>";}
								echo "<tr valign=top>
										<td bgcolor=#FFFFFF width=60% align=left><a href=/orders/quotation/detail.php?ID=$arItem[ID]><strong>$arItem[NAME]</strong></a><br>
										<font style=font-size:10px> $arItem[PREVIEW_TEXT]</td></font>";
							echo "<td bgcolor=#FFFFFF width=14% align=center style=font-size:10px>";
							if ($date1 != '') {	echo "<br>$date1";}

                                                        if ($time1 != '' AND $time1 != '00.00.00') {echo "<br>$time1";} else {echo "<br> 9:00:00";};
							
echo "</td><td bgcolor=#FFFFFF width=14% align=center style=font-size:10px>";
							
	                                                if ($date2 != '') {	echo "<br>$date2";}

                                                        if ($time2 != '' AND $time2 != '00.00.00') {echo "<br>$time2";} else {	echo " <br>18:00:00";}
							echo "</td><td bgcolor=#FFFFFF width=12% align=center style=font-size:10px><br>";
							if(strlen($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"])>0):
								 $DOCFILE2 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile2"]["VALUE"]); $DOCNAME2 = $arIBlockElement["PROPERTIES"]["docname2"]["VALUE"]; echo "<a href=$DOCFILE2><img src=/images/download.gif width=14 height=14 border=0 hspace=3 align=absmiddle></a>";
							endif;
								echo"</td></tr>";
						echo "</table>
						</td>
					</tr>
				</table>
			<FONT class=leftmenusep5></td></tr>";
			unset ($adresat);
			$count++;
		}
		if ($count == '0') { echo "<font class=errortext>Результатов не найдено</font>";}
	?>
		<tr valign=top><td height="8"><img src="/images/blind.gif" width="1" height="8" border="0" alt=""></td></tr>
							
	</table>		

<?
    $obquotationCache->EndDataCache(); 
endif;
?>			
<?
$items->NavPrint("Показано:", false, "", "/bitrix/templates/special/adv_navprint.php"); 
?>
<br><br>
<table width=100% cellpadding=2 cellspacing=1 border=0  class=tablehead2>
	<tr><td>
		<table width=100% cellpadding=0 cellspacing=0 border=0>
			<tr><td  style=font-size:10px class=tablehead2><font color=#FFFFFF><strong>Пакет документов </strong></font color></td></tr>
		</table>
	</td></tr>
	<tr><td width=80% valign=center bgcolor=#FFFFFF style=font-size:10px><img src=/images/word.gif width=32 height=32 border=0 hspace=3 align=absmiddle>Порядок размещения котировочных заявок</td>
	<td bgcolor=#FFFFFF rowspan=4 align=center valign=center style=font-size:10px>18,26Кб<br><a href="/orders/quotation/files/blanki_kotirovki.rar" target="_blank"><strong>Скачать</strong></a></td></tr>
	<tr><td valign=center bgcolor=#FFFFFF style=font-size:10px><img src=/images/word.gif width=32 height=32 border=0 hspace=3 align=absmiddle>Образец извещения о котировках</td>
	<tr><td valign=center bgcolor=#FFFFFF style=font-size:10px><img src=/images/excel.gif width=32 height=32 border=0 hspace=3 align=absmiddle>Образец Приложения №1</td>
	<tr><td valign=center bgcolor=#FFFFFF style=font-size:10px><img src=/images/word.gif width=32 height=32 border=0 hspace=3 align=absmiddle>Образец протокола</td>
	</tr>
</table>
        		