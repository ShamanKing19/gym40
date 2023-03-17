<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Форма обратной связи"); ?>
<div class="content-text">
  	<h2>Форма обратной связи</h2>
  	<div class="appeal-form-info">
	    <div>Уважаемые пользователи!</div>
	    <p>Просим Вас внимательно ознакомиться с порядком приема и рассмотрения обращений.</p>
	    <p><a class="link-bord" href="#" >Порядок приёма и рассмотрения обращений</a></p>
   	</div>
 	<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "main", array(
	"WEB_FORM_ID" => "1",
	"IGNORE_CUSTOM_TEMPLATE" => "N",
	"USE_EXTENDED_ERRORS" => "N",
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/sp_feedback/",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"LIST_URL" => "",
	"EDIT_URL" => "",
	"SUCCESS_URL" => "",
	"CHAIN_ITEM_TEXT" => "",
	"CHAIN_ITEM_LINK" => "",
	"VARIABLE_ALIASES" => array(
		"WEB_FORM_ID" => "WEB_FORM_ID",
		"RESULT_ID" => "RESULT_ID",
	)
	),
	false
);?>
</div>
<!-- /content-text -->
<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>