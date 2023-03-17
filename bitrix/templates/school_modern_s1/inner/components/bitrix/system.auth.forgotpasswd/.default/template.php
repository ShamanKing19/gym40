<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?

ShowMessage($arParams["~AUTH_RESULT"]);

?>
<form class="zayavka" name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">
	<p>
	<?=GetMessage("AUTH_FORGOT_PASSWORD_1")?>
	</p>
<h4><?=GetMessage("AUTH_GET_CHECK_STRING")?></h4>
<div>
	<label><?=GetMessage("AUTH_LOGIN")?></label>
	<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" /><br /><?=GetMessage("AUTH_OR")?><br /><br />
</div>
<div>
	<label><?=GetMessage("AUTH_EMAIL")?></label>
	<input type="text" name="USER_EMAIL" maxlength="255" />
</div>
<div>
	<button class="zayavka_btn" type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>"><?=GetMessage("AUTH_SEND")?></button>
</div>
<p>
<br /><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</p> 
</form>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
