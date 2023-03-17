<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><? 
global $USER;
CModule::IncludeModule("iblock");?>


<? 
$USER_ID = $USER->GetID();
if ($USER->IsAdmin()){ echo "<a href=/bitrix/admin/iblock_element_edit.php?type=news&lang=ru&IBLOCK_ID=34&filter_section=&IBLOCK_SECTION_ID=&return_url=%2Fbusiness%2Forders><b><font color=red>Добавить новую запись в раздел &laquo;Конкурсы&raquo;</font></b></a><br><br>";}
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
					<td colspan="2"><strong>Фильтр конкурсов:</strong></td>
				</tr>
				<tr>
					<td align="right" nowrap>Название конкурса:</td>
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
		if ($NAME != '') { $arrFilter["NAME"] = "%$NAME%"; }
		
		$items = GetIBlockElementList($ID, false, Array("SORT"=>"DESC", "DATE_CREATE"=>"DESC", "ID"=>"DESC", "NAME"=>"DESC"), 25, $arrFilter);
		$items->NavPrint("Показано:", false, "", "/bitrix/templates/special/adv_navprint.php");
?>
<br><br>



<?
$ELEMENT_zakaz = "zakaz_$ID";
$obzakazCache = new CPageCache; 
$life_zakaz_time = 0; 
$cache_zakaz_id = $ELEMENT_zakaz.$IBLOCK_TYPE.$USER->GetUserGroupString(); 
if($obzakazCache->StartDataCache($life_zakaz_time, $cache_zakaz_id, "/")):
?>
	<table width="100%" cellpadding="0" cellspacing="0" border=0>
					<tr ><td width=100%>
					<table width=100% cellpadding=1 cellspacing=1 border=0 class=tablehead>
					<td width=80% align=center style=font-size:10px>Наименование конкурса</td>
					<td width=20% align=center style=font-size:10px>Дата <br> проведения конкурса</td>
					</table></td></tr>

		<?
		$count = 0;
		while($arItem = $items->GetNext())
		{
			$arIBlockElement = GetIBlockElement($arItem[ID]);
			$author = $arIBlockElement['PROPERTIES']['author']['VALUE'];
			$date = FmtDate($arIBlockElement['PROPERTIES']['date']['VALUE'], "DD.MM.YYYY");
                  	$delpage = $APPLICATION->GetCurPageParam("del=$arItem[ID]"); 

			echo "<tr valign=top><td>
				<table width=100% cellpadding=0 cellspacing=0 border=0>
					<tr>
						<td bgcolor=#FFFFFF>
							<table width=100% cellpadding=1 cellspacing=1 border=0 cols=2 class=tablehead>";
								if ($USER->IsAdmin()) {
								echo "<tr>
									<td colspan=2 bgcolor=#FFFFFF> Заказ № $arItem[ID], <a href=/bitrix/admin/iblock_element_edit.php?type=news&lang=ru&IBLOCK_ID=34&ID=$arItem[ID]&filter_section=&return_url=%2Fbusiness%2Forders>редактировать конкурс</a>, <a href=$delpage>удалить конкурс</a></td>
								</tr>";			}
								echo "<tr valign=top>
								<td bgcolor=#FFFFFF width=80%><a href=/orders/detail.php?ID=$arItem[ID]><strong>$arItem[NAME]</strong></a><br>
								<font style=font-size:10px>$arItem[PREVIEW_TEXT]</td></font>";
								echo "<td bgcolor=#FFFFFF width=20% align=center style=font-size:10px>";
//								if ($date != '') {	echo "<br>$date";}
								echo "</td></font>";?>
								<?	echo "</tr></table>
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
    $obzakazCache->EndDataCache(); 
endif;
?>			
<?		
$items->NavPrint("Показано:");  
?>

