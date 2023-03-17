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

if ($_POST[comment_author]) {

	$YY = date("Y");
	$MM = date("m");
	$DD= date("d");
	$ACTIVE_FROM = "$YY-$MM-$DD";

	$el = new CIBlockElement;
	
	$PROP = array();
	$PROP[117] = "$_POST[comment_author]";
	$PROP[118] = "$_POST[comment_address]";
	$PROP[119] = "$_POST[comment_phone]";
	$PROP[120] = "$_POST[comment_email]";
	$PROP[121] = "$_POST[theme]";	

	$arLoadProductArray = Array(
	  "IBLOCK_SECTION" => false,          
	  "IBLOCK_ID"      => 2,
	  "PROPERTY_VALUES"=> $PROP,
	  "NAME"           => "$_POST[comment_author] $_POST[comment_email] спрашивает...",
	  "ACTIVE"         => "N",
	  "PREVIEW_TEXT"   => "$_POST[comment_body]"
	  );

	if($PRODUCT_ID = $el->Add($arLoadProductArray)) { ;?>
<html>
<head>
<style>
.ad-box {
  background: #eee;
  border: 1px solid black;
  padding: 5px;
  position: absolute;
  left: 300px;
  top: 200px;
  width: 400px;
}
.ad-box-title {
  background: #ccc;
  padding: 5px;
  font-weight: bold;
  font-size: medium;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 0.2em;
}
</style>
<script>
function closead()
{
  var obj = document.getElementById( "ad" );
  obj.style.visibility = "hidden";
}
</script>
</head>

<body>
<div class="ad-box" id="ad">
<p>
<? echo "<strong>$_POST[comment_author], Ваше обращение отправлено на рассмотрение</strong><br><br>";?>
</p>
<p style="text-align: right;">
<a href="javascript:closead();">Закрыть</a>
</p>
</div>

</body>
</html>

	  
<?
	  
	$msubject = "Обращения в интернет-приёмную";
	$mreply = "site@admgusev.ru";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/plain; charset=windows-1251' . "\r\n";
	$headers .= "From: $mreply\r\n";
	$headers .= "Reply-to:$mreply\r\n";
	$mbody = "Добавлена новая запись в раздел -=Интернет-приёмная=-
		
$_POST[comment_author] $_POST[comment_email] спрашивает...

$_POST[comment_body]

Информация подробнее:
http://www.admgusev.ru/bitrix/admin/iblock_element_admin.php?IBLOCK_ID=2&type=reception&lang=ru&filter_section=-1&filter=Y&set_filter=Y#tb";
	@mail("vopros@admgusev.ru","$msubject","$mbody", "$headers"); }

	else {
	  echo "<b>Ошибка добавления записи. Попробуйте ещё раз.</b></font><br><br>";
	  }
}
?>

<a name=form>
<h3>Написать обращение:
<p>
   Прежде чем Вы обратитесь с запросом, предлагаем просмотреть опубликованные ответы, а также воспользоваться поиском по ключевому слову. 
Возможно, Вы сразу найдете ответ на интересующий вопрос.
<p>
</h3><br>



<TABLE class=tablehead cellSpacing=0 cellPadding=1 width="100%" border=0>
	 <FORM action=index.php method=POST name=reception onSubmit="return GN_CheckForm()">
 	<TR vAlign=top>
    	<TD width="100%">
			<TABLE class=tablebody cellSpacing=0 cellPadding=3 width="100%" border=0>
				<TR>
					<TD class=tablebody vAlign=top noWrap align=right width=0% colSpan=2><IMG height=8 src="/images/blind.gif" width=1></TD>
				</TR>
                <TR>
                	<TD class=tablebody vAlign=top noWrap align=right width=0%><FONT class=tableheadtext><FONT class=required>*</FONT>&nbsp;ФИО:</FONT></TD>
					<TD class=tablebody vAlign=top noWrap align=left width=0%><INPUT class=typeinput maxLength=255 size=40 name=comment_author value="<?echo $USER->GetParam("NAME");?>"></TD>
				</TR>
                <TR>
                	<TD class=tablebody vAlign=top noWrap align=right width=0%><FONT class=tableheadtext><FONT class=required>*</FONT>&nbsp;E-Mail:</FONT></TD>
					<TD class=tablebody vAlign=top noWrap align=left width=0%><INPUT class=typeinput maxLength=255 size=40 name=comment_email value="<? echo $USER->GetParam("EMAIL");?>"></TD>
				</TR>
				<tr>
					<td align="right" nowrap><FONT class=tableheadtext>Тема вопроса:</FONT></td>
					<td width="100%">
							<select name=theme class=typeinput style="{width: 240;}">
							<?$property_enums2 = CIBlockPropertyEnum::GetList(Array("SORT"=>"ASC", "VALUE"=>"ASC"), Array("IBLOCK_ID"=>2, "CODE"=>"theme"));
							while($enum_fields2 = $property_enums2->GetNext()) { ?><OPTION VALUE='<?=$enum_fields2["ID"];?>' <?if($enum_fields2["ID"] == '3') { echo "selected";}?>><?=$enum_fields2["VALUE"];?></option><? } ?>
							</select>
					</td>
				</tr>				
				<TR>
                	<TD class=tablebody vAlign=top noWrap align=right width=0%><FONT class=tableheadtext><FONT class=required>*</FONT>&nbsp;Адрес:</FONT></TD>
					<TD class=tablebody vAlign=top noWrap align=left width=0%><INPUT class=typeinput maxLength=255 size=40 name=comment_address></TD>
				</TR>
				<TR>
                	<TD class=tablebody vAlign=top noWrap align=right width=0%><FONT class=tableheadtext><FONT class=required>*</FONT>&nbsp;Телефон:</FONT></TD>
					<TD class=tablebody vAlign=top noWrap align=left width=0%><INPUT class=typeinput maxLength=255 size=40 name=comment_phone></TD>
				</TR>
                <TR>
					<TD class=tablebody vAlign=top noWrap align=right width=0%><FONT class=tableheadtext><FONT class=required>*</FONT>&nbsp;Вопрос:</FONT></TD>
					<TD class=tablebody vAlign=top noWrap align=left width=0%><TEXTAREA class=typeinput name=comment_body rows=15 wrap=VIRTUAL cols=55></TEXTAREA></TD>
				</TR>
				<TR>
					<TD class=tablebody vAlign=top noWrap align=right width=0% colSpan=2><IMG height=8 src="/images/blind.gif" width=1></TD>
				</TR>
			</TABLE>
		</TD>
	</TR>
	<tr>
		<td class=tablebody><P><FONT class=required>*</FONT>&nbsp;<FONT class=tablebodytext>- обязательные для ввода поля</FONT></P></td>
	</tr>
	<tr>
		<td class=tablebody><INPUT class=inputbutton type=submit value='Отправить'>&nbsp;<INPUT class=inputbutton type=reset value=Сбросить></td>
	</tr>
	</FORM>
</TABLE>

<script language="javascript1.2">
<!--
var GN_CheckFields=[];
GN_CheckFields["comment_author"]    = ["ФИО",,-1];
GN_CheckFields["comment_email"]    = ["E-Mail",,-1];
GN_CheckFields["comment_address"]    = ["Адрес",,-1];
GN_CheckFields["comment_phone"]    = ["Телефонl",,-1];
GN_CheckFields["comment_body"]      = ["Вопрос",,-1];
var GN_FormReference=document.forms["reception"];
//-->
</script>
<script language="javascript1.2" src="/bitrix/templates/gusev/js/form_check.js"></script>

