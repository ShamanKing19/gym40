<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><? 
global $USER;
CModule::IncludeModule("iblock");?>

<?if ($USER->IsAdmin()):?>
<? 
if ($_GET[del]) {
	if(CIBlock::GetPermission($IBLOCK_ID)>='W') {
		$DB->StartTransaction();
		if(!CIBlockElement::Delete($_GET[del]))	{
			$strWarning .= '<br><font color=red><b>Ошибка удаления. У вас не хватает прав доступа</b></font><br><br>';	
			$DB->Rollback();
		}	
		else
		$DB->Commit();
		echo "<font color=red><b>Обращение ? $_GET[del] удалёно </b></font><br><br>";
	}
} 
endif;
?>

<table width=350 cellpadding=5 cellspacing=1 border=0 class=tablehead>
	<tr>
		<td bgcolor=#FFFFFF>
			<table width=100% cellpadding=5 cellspacing=0 border=0>
			<form method=GET action=otvet.php>
				<tr>
					<td colspan="2"><strong>Фильтр вопросов:</strong></td>
				</tr>
				<tr>
					<td align="right" nowrap>Тема вопроса:</td>
					<td width="100%">
							<select name=themefilter class=typeinput style="{width: 240;}">
							<option value=_null>не установлено</option>
							<?$property_enums2 = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC", "VALUE"=>"ASC"), Array("IBLOCK_ID"=>2, "CODE"=>"theme"));
							while($enum_fields2 = $property_enums2->GetNext()) { ?><OPTION <? if ($enum_fields2["ID"] == $_GET[themefilter]) { echo "selected";} ?> VALUE='<?=$enum_fields2["ID"];?>'><?=$enum_fields2["VALUE"];?></option><? } ?>
							</select>
					</td>
				</tr>
				<tr>
					<td align="right" nowrap>Автор вопроса:</td>
					<td width="100%"><INPUT class=typeinput maxLength=255 size=40 name=author value="<? echo $_GET[author];?>"></td>
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

		if ($_GET[tofilter] AND $_GET[tofilter] != "_null") { $arrFilter["PROPERTY_adresat"] = $_GET[tofilter];}
		if ($_GET[themefilter] AND $_GET[themefilter] != "_null") { $arrFilter["PROPERTY_theme"] = $_GET[themefilter];}
		$author = $_GET[author];
		if ($author != '') { $arrFilter["PROPERTY_author"] = "%$author%"; }
		
		$items = GetIBlockElementList(2, false, Array("DATE_CREATE"=>"DESC", "ID"=>"DESC", "NAME"=>"DESC"), 10, $arrFilter);
		$items->NavPrint("Показано:", false, "", "/bitrix/templates/special/adv_navprint.php");
?>
<br><br>
<table width="100%" cellpadding="0" cellspacing="0" border=0>

		<?
		$count = 0;
		while($arItem = $items->GetNext())
		{
			$arIBlockElement = GetIBlockElement($arItem[ID]);
			$author = $arIBlockElement['PROPERTIES']['author']['VALUE'];
			$address = $arIBlockElement['PROPERTIES']['address']['VALUE'];
			$organization = $arIBlockElement['PROPERTIES']['organization']['VALUE'];
			$delpage = $APPLICATION->GetCurPageParam("del=$arItem[ID]"); 
			$phone = $arIBlockElement['PROPERTIES']['phone']['VALUE'];
			$email = $arIBlockElement['PROPERTIES']['email']['VALUE'];
			$theme = $arIBlockElement['PROPERTIES']['theme']['VALUE'];
			
			
			
			
			echo "<tr valign=top><td>
				<table width=100% cellpadding=5 cellspacing=1 border=0 class=tablehead>
					<tr>
						<td bgcolor=#FFFFFF>
							<table width=100% cellpadding=5 cellspacing=0 border=0>";
								if ($USER->IsAdmin()) {
								echo "<tr>
									<td colspan=2>Обращение ? $arItem[ID], <a href=/bitrix/admin/iblock_element_edit.php?ID=$arItem[ID]&type=reception&lang=ru&IBLOCK_ID=2>редактировать вопрос</a>, <a href=$delpage>удалить вопрос</a></td>
								</tr>";
								}
							/*if ($author != '') {	echo "<tr>
									<td nowrap align=right>ФИО:</td>
									<td width=100%>$author</td>
								</tr>"; }	
							if ($email != '') {	echo "<tr>
									<td nowrap align=right>E-mail:</td>
									<td width=100%>$email</td>
								</tr>"; }	*/			
							if ($theme != '') {	echo "<tr>
									<td nowrap align=right>Тема:</td>
									<td width=100%>$theme</td>
								</tr>"; }													
							/*if ($address != '') {	echo "<tr>
									<td nowrap align=right>Адрес:</td>
									<td width=100%>$address</td>
								</tr>"; }					
							if ($phone != '') {	echo "<tr>
									<td nowrap align=right>Телефон:</td>
									<td width=100%>$phone</td>
								</tr>"; }	*/
								echo "<tr valign=top>
									<td align=right nowrap><strong>Обращение:</strong></td>
									<td>$arItem[PREVIEW_TEXT]</td>
								</tr>";		
								echo "<tr valign=top>
									<td nowrap align=right>&nbsp;</td>
									<td width=100%><font color=#999999>Обращение создано: $arItem[ACTIVE_FROM]</td>
								</tr>";

							if ($arItem["DETAIL_TEXT"] != '') {	echo "<tr valign=top>
									<td nowrap align=right><strong>Ответ</strong>:</td>
									<td width=100%>$arItem[DETAIL_TEXT]</font></td>
								</tr>"; 
								echo "<tr valign=top>
									<td nowrap align=right>&nbsp;</td>
									<td width=100%><font color=#999999>Опубликовано: $arItem[ACTIVE_FROM]</font></td>
								</tr>";
								}																													
						echo "</table>
						</td>
					</tr>
				</table>
			<FONT class=leftmenusep5></td></tr>
			<tr valign=top><td height=10><img src=/images/blind.gif width=1 height=10 border=0></td></tr>";
			
			unset ($author);
			unset ($address);
			unset ($organization);
			unset ($phone);
			unset ($email);
			$count++;
		}
		if ($count == '0') { echo "<font class=errortext>Результатов не найдено</font>";}
	?>
		<tr valign=top><td height="8"><img src="/images/blind.gif" width="1" height="8" border="0" alt=""></td></tr>
	</table>		

		
<?
$items->NavPrint("Показано:", false, "", "/bitrix/templates/special/adv_navprint.php"); 
?>



