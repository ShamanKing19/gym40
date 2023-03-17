<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<TABLE cellSpacing=0 cellPadding=0 width=200 border=0>

<TR>
<TD class=blockhead align=middle bgColor=#006DBD height=23 background="/images/block_bg.gif"><font class=head>Фотогалерея</font></TD></TR>
<TR>
<TD bgColor=#ffffff height=2><IMG height=2 src="/images/blind.gif" width=1 border=0></TD></TR>
<tr>
	<td height="20"><img src="/images/blind.gif" width="1" height="20" border="0" alt=""></td>
</tr>
<TR>
<TD height=50 align="center">

<?
IncludeTemplateLangFile(__FILE__); //подключаем языковой файл
	CModule::IncludeModule("iblock");
	$iblocks = GetIBlockList($IBLOCK_TYPE);
	if ($arIBlock = $iblocks->GetNext()):
		$dbPhoto = CIBlockElement::GetList(Array("RAND"=>"ASC"), Array("IBLOCK_ID" => $arIBlock["ID"], "ACTIVE" => "Y", "PROPERTY_randphoto" => false));

		//$dbPhoto = GetIBlockElementList($arIBlock["ID"], false, Array("RAND"=>"ASC"), $arrFilter);
		if($arPhoto = $dbPhoto->GetNext()):
			?>
			
					<?
					$image1 = intval($arPhoto["PREVIEW_PICTURE"])<=0 ? $arPhoto["DETAIL_PICTURE"] : $arPhoto["PREVIEW_PICTURE"];
					$image2 = intval($arPhoto["DETAIL_PICTURE"])<=0 ? $arPhoto["PREVIEW_PICTURE"] : $arPhoto["DETAIL_PICTURE"];	
					$arPhoto["NAME"] = htmlspecialcharsBack($arPhoto["NAME"]);
					echo CFile::Show2Images($image1, $image2, 160, 200, "hspace='0' vspace='0'  border='0' title='".$arPhoto["NAME"]."'", true);?>
			<?
		endif;
	endif;
?>

</TD></TR>
<tr>
	<td height="5"><img src="/images/blind.gif" width="1" height="5" border="0" alt=""></td>
</tr>
<tr>
	<td height="17" align="center">
		<TABLE cellSpacing=0 cellPadding=0 width=160 bgColor=#80A2B7 border=0 height="17">
			<tr>
				<td>&nbsp;<a href=<?echo $arPhoto["DETAIL_PAGE_URL"];?>><font class=smalltextwhite><u><? echo $arPhoto["NAME"];?></u></font></a></td>
			</tr>
		</TABLE>
	</td>
</tr>
<tr>
	<td height="5"><img src="/images/blind.gif" width="1" height="5" border="0" alt=""></td>
</tr>
<tr>
	<td height="17" align="center">
		<TABLE cellSpacing=0 cellPadding=0 width=160 bgColor=#80A2B7 border=0 height="17">
			<tr>
				<td>&nbsp;<a href="/press/gallery/"><font class=smalltextwhite><b><u>Все фотографии...</u></b></font></a></td>
			</tr>
		</TABLE>	
	</td>
</tr>
<tr>
	<td height="15"><img src="/images/blind.gif" width="1" height="15" border="0" alt=""></td>
</tr>
<TR>
<TD bgColor=#ffffff height=2><IMG height=2 src="/images/blind.gif" width=1 border=0></TD></TR></TABLE>
