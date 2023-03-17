<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Актуальная информация");
?><p style="text-align: center;">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
	)
);?>
</p>
 <b>
<p style="text-align: center;">
	<br>
</p>
</b><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>