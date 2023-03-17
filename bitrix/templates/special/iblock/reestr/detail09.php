<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
// Let's show text of news ID = $ID
// You need to set the following variable before using this file:
// $ID - ID of current news (element of informational block)
if (CModule::IncludeModule("iblock")):
	$ID = IntVal($ID);		// ID of news
	if ($arIBlockElement = GetIBlockElement($ID)):
		$APPLICATION->SetTitle($arIBlockElement["NAME"]); 
		?>
                          
			<table cellpadding="5" cellspacing="0" border="1" width="100%">
				<? if ($arIBlockElement["PROPERTIES"]["author"]["VALUE"] != '') { echo "<tr><td>Наименование заказчика</td><td>".$arIBlockElement["PROPERTIES"]["author"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["finance"]["VALUE"] != '') { echo "<tr><td>Источник финансирования</td><td>".$arIBlockElement["PROPERTIES"]["finance"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["sposob"]["VALUE"] != '') { echo "<tr><td>Способ размещения заказа</td><td>".$arIBlockElement["PROPERTIES"]["sposob"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["date1"]["VALUE"] != '') { echo "<tr><td>Дата проведения аукциона <br>проведения итогов конкурса <br>или итогов проведения запроса котировок и 
				<br> реквизиты документа, подтверждающего основание<br> заключения контракта</td><td>".$arIBlockElement["PROPERTIES"]["date1"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["date2"]["VALUE"] != '') { echo "<tr><td>Дата заключения контракта</td><td>".$arIBlockElement["PROPERTIES"]["date2"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["kontrakt"]["VALUE"] != '') { echo "<tr><td>Предмет контракта</td><td>".$arIBlockElement["PROPERTIES"]["kontrakt"]["VALUE"]."</td></tr>"; }?>
                                <? if ($arIBlockElement["PROPERTIES"]["zkontrakt"]["VALUE"] != '') { echo "<tr><td>Цена контракта </td><td>".$arIBlockElement["PROPERTIES"]["zkontrakt"]["VALUE"]."</td></tr>"; }?>
                                <? if ($arIBlockElement["PROPERTIES"]["srkontrakt"]["VALUE"] != '') { echo "<tr><td>Срок исполнения контракта</td><td>".$arIBlockElement["PROPERTIES"]["srkontrakt"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["reestrnom"]["VALUE"] != '') { echo "<tr><td>Реестровый номер</td><td>".$arIBlockElement["PROPERTIES"]["reestrnom"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["postavshik"]["VALUE"] != '') { echo "<tr><td>Наименование, место нахождения (для юридических лиц),<br> фамилия, имя, отчество,<br> место жительства, индивидуальный налоговый номер<br> (для физических лиц) поставщика <br>(исполнителя, подрядчика)</td><td>".$arIBlockElement["PROPERTIES"]["postavshik"]["VALUE"]."</td></tr>"; }?>
				<? if ($arIBlockElement["PROPERTIES"]["dopinfo"]["VALUE"] != '') { echo "<tr><td>Сведения об исполнении контракта</td><td>".$arIBlockElement["PROPERTIES"]["dopinfo"]["VALUE"]."</td></tr>"; }?>
                             			
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