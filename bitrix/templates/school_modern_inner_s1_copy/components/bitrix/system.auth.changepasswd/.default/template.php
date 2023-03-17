<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="zayavka">

<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
<form method="post" action="<?=$arResult["AUTH_FORM"]?>" name="bform">
	<?if (strlen($arResult["BACKURL"]) > 0): ?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">
	
	<div class="form_row">
		<label>* <?=GetMessage("AUTH_LOGIN")?></label>
		<input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>">
	</div>
	
	<div class="form_row">
		<label>* <?=GetMessage("AUTH_CHECKWORD")?></label>
		<input type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>"/>
	</div>
	
	<div class="form_row">
		<label>* <?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></label>
		<input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" />
	</div>
	
	<div class="form_row">
		<label>* <?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></label>
		<input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>"/>
	</div>
	
	<div class="form_row">
		<button class="zayavka_btn" type="submit" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>"><?=GetMessage("AUTH_CHANGE")?></button>
	</div>

	<div class="form_line"></div>
	<br />
	<div class="form_row">
		<?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
	</div>
	
	<div class="form_row">
		<span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?>
	</div>
	<br />
	<div class="form_row">
		<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><?=GetMessage("AUTH_AUTH")?></a>
	</div>

</form>

<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
</div>