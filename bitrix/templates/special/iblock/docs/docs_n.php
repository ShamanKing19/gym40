<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// Let's show news list
// If ID or CODE of informational block is set then we should show news of only this infoblock
if (CModule::IncludeModule("iblock")):
	$year = $_GET[year];
	$month = $_GET[month];
	$IDT = IntVal($_GET[IDT]);
	if ($IDT!=0):
		$ID= $IDT;
	endif;
	if ($month == '0') { unset($month);}
	$ID = IntVal($ID);							// ID of informational block
	if ($_GET[archive] == "yes"):
		if (IntVal($ID) >= 0):
			if (IntVal($year) > 0 && IntVal($month) > 0):
				$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10, Array(
					"ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,$month,1,$year)),
					"!ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,$month,31,$year))
					)
				);
			elseif (IntVal($year) > 0):
				$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10, Array(
					"ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,1,1,$year)),
					"!ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,12,31,$year))
					)
				);
			else:
				$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10);
				//echo "<font class='errortext'><p>Неверно заданы параметры!</p></font>";
			endif;
		else: // (IntVal($arSectionCity["ID"]) > 0):
			if (IntVal($year) > 0 && IntVal($month) > 0):
				$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10, Array(
					"ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,$month,1,$year)),
					"!ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,$month,31,$year))
					)
				);
			elseif (IntVal($year) > 0):
				$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10, Array(
					"ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,1,1,$year)),
					"!ACTIVE_FROM"=>date($DB->DateFormatToPHP(CLang::GetDateFormat("SHORT")), mktime(0,0,0,12,31,$year))
					)
				);				
			else:
				$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10);
				//echo "<font class='errortext'><p>Неверно заданы параметры!</p></font>";	
			endif;
		endif; // (IntVal($arSectionCity["ID"]) > 0):
	else:
		if (IntVal($ID) > 0):
			$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10);
		else:
			$items = GetIBlockElementList($ID, false, Array("SORT"=>"ASC", "ACTIVE_FROM"=>"DESC", "ID"=>"DESC"), 10);
		endif;

	endif; // if ($archive == "yes")
	?>

<?		
	$items->NavPrint("Показано:");
	echo "<br><br>";
	if ($items->IsNavPrint()) echo "<hr size=\"1\" color=\"#E0E0E0\">";
	?>

	<table cellpadding="0" cellspacing="0" border="0" width="100%">
		<tr>
			<td width="100%"><img src="/images/1.gif" width="1" height="10"></td>
		</tr>

		<table cellpadding="0" cellspacing="0" border="0" width="100%"><?
		while($obItem = $items->GetNextElement()):
			$arItem = $obItem->GetFields();
			$arIBlockElement = GetIBlockElement($arItem["ID"]);
			//$arProp = $obItem->GetProperties();
			?>
			<tr>
				<td>
				<font class="text">
					<?if(strlen($arItem["DATE_ACTIVE_FROM"])>0):?><font class="newsdate"><b><?echo $arItem["DATE_ACTIVE_FROM"]?></b><br></font><?endif?>
					<a href="<?echo $arItem["DETAIL_PAGE_URL"]?><?echo $DOP_URL;?>"><b><?echo $arItem["NAME"]?></b></a><br>
				</font>
				</td>
			</tr>
			<tr>
				<td height="5"><img src=/images/blind.gif height="5" width="1"></td>
			</tr>							
			<tr>
				<td><?echo ShowImage($arItem["PREVIEW_PICTURE"], 100, 100, "hspace='5' vspace='5' align='left' border='0'", $arItem["DETAIL_PAGE_URL"]);?><?echo $arItem["PREVIEW_TEXT"];?></td>
			</tr>
			<tr>
				<td height="2"><?  if(strlen($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"])>0): $DOCFILE1 = CFile::GetPath($arIBlockElement["PROPERTIES"]["docfile1"]["VALUE"]); $DOCNAME1 = $arIBlockElement["PROPERTIES"]["docname1"]["VALUE"]; if ($DOCNAME1 != '') { $DOWNLOAD1 = $DOCNAME1;} else {$DOWNLOAD1 = "Скачать весь документ"; }echo "<a href=$DOCFILE1><img src=/images/download.gif width=14 height=14 border=0 alt=\"Загрузить документ\" hspace=3 align=absmiddle>$DOWNLOAD1</a>";?><br><?endif?>	</td>
			</tr>	
			<tr>
				<td height="25"><img src=/images/blind.gif height="25" width="1"></td>
			</tr>						
			<?
		endwhile;
		?></table><br>
	<?

	if ($items->IsNavPrint()) echo "<hr size=\"1\" color=\"#E0E0E0\">";
	$items->NavPrint("Показано:");




	if (IntVal($ID) > 0):
		$items = GetIBlockElementList($ID, false, Array("ACTIVE_FROM"=>"ASC"), 1, Array("!DATE_ACTIVE_FROM"=>false));
	else:
		$items = GetIBlockElementList($ID, false, Array("ACTIVE_FROM"=>"ASC"), 1, Array("!DATE_ACTIVE_FROM"=>false));
	endif;

	if ($items->SelectedRowsCount() > 0):

		$arFirstNews = $items->GetNext();
		$minYear = FmtDate($arFirstNews["ACTIVE_FROM"], "Y");
		$maxYear = date("Y");
		//echo $minYear." ".$maxYear;
	endif; //	if ($items->SelectedRowsCount() > 0):
		?>
<form action="<? echo $APPLICATION->GetCurPage(); ?>" method="GET">
		<table cellspacing="0" cellpadding="2" border="0">
		<tr>
			<td colspan="3"><b>Запрос документов по разделу:</b></td>
		</tr>
		<tr>
		<td><select name="IDT" class="inputselect">
			<option value="0">---Выберите раздел---</option>
			<option value="15" <? if ($IDT == 15) echo " selected"; ?>>Принятые Главой администрации</option>
                        <option value="17" <? if ($IDT == 17) echo " selected"; ?>>Принятые Советом депутатов и главой МО</option>
			<option value="45" <? if ($IDT == 45) echo " selected"; ?>>Проекты документов муниципального образования</option>
                        <option value="41" <? if ($IDT == 41) echo " selected"; ?>>Образование</option>
                        <option value="42" <? if ($IDT == 42) echo " selected"; ?>>Опека</option>
                        <option value="22" <? if ($IDT == 22) echo " selected"; ?>>Градостроительство, недвижимость и зем.ресурсы</option>                                         
                        <option value="54" <? if ($IDT == 54) echo " selected"; ?>>Муниципальные услуги</option>
                        <option value="64" <? if ($IDT == 64) echo " selected"; ?>>Правовая база ТИК</option>
                        <option value="65" <? if ($IDT == 64) echo " selected"; ?>>Решения ТИК</option>
			<option value="0">---Архив---</option>
                        <option value="51" <? if ($IDT == 51) echo " selected"; ?>>Принятые Главой администрации городского поселения</option>
                        <option value="49" <? if ($IDT == 49) echo " selected"; ?>>Проекты документов МО "Гусевское городское поселение"</option>                        
                      
                        <option value="48" <? if ($IDT == 48) echo " selected"; ?>>Документы сельских поселений</option>
                        <option value="50" <? if ($IDT == 50) echo " selected"; ?>>Проекты документов сельских поселений</option>
                        <option value="47" <? if ($IDT == 47) echo " selected"; ?>>Принятые Городским советом депутатов</option>
               
		</select></td>
		<td><input type="submit" value="Показать" class="inputbutton"></td>
		</tr>
		<tr><td height=20></td></tr>
		</table>
	<?
	if ($items->SelectedRowsCount() > 0): 
	?>
<form action="<? echo $APPLICATION->GetCurPage(); ?>" method="GET">
		<input type="hidden" name="archive" value="yes">
		<table cellspacing="0" cellpadding="2" border="0">
		<tr>
			<td colspan="3"><b>Сортировка документов по дате:</b></td>
		</tr>
		<tr>
		<td><select name="month" class="inputselect">
			<option value="0">--- месяц ---</option>
			<option value="01" <? if ($month == "01") echo " selected"; ?>>январь</option>
			<option value="02" <? if ($month == "02") echo " selected"; ?>>февраль</option>
			<option value="03" <? if ($month == "03") echo " selected"; ?>>март</option>
			<option value="04" <? if ($month == "04") echo " selected"; ?>>апрель</option>
			<option value="05" <? if ($month == "05") echo " selected"; ?>>май</option>
			<option value="06" <? if ($month == "06") echo " selected"; ?>>июнь</option>
			<option value="07" <? if ($month == "07") echo " selected"; ?>>июль</option>
			<option value="08" <? if ($month == "08") echo " selected"; ?>>август</option>
			<option value="09" <? if ($month == "09") echo " selected"; ?>>сентябрь</option>
			<option value="10" <? if ($month == "10") echo " selected"; ?>>октябрь</option>
			<option value="11" <? if ($month == "11") echo " selected"; ?>>ноябрь</option>
			<option value="12" <? if ($month == "12") echo " selected"; ?>>декабрь</option>
		</select></td>
		<td><select name="year" class="inputselect">
			<option value="0">--- год ---</option>
                        <?
			for ($curYear = $maxYear; $curYear >= $minYear; $curYear--):
				?><option value="<? echo $curYear; ?>"<? if ($curYear == $year) echo " selected"; ?>><? echo $curYear; ?></option><?
			endfor;
			?>
			</select></td>
		<td><input type="submit" value="Показать" class="inputbutton"></td>
		</tr>
		</table>
		</form>
	<?endif; ?>
</form>

<?
else:
	echo "Модуль Информационных блоков не установлен";
endif;
?>