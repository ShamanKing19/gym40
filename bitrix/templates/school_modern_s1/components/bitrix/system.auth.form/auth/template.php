<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["FORM_TYPE"] == "login"):?>
<div class="login_btn">
    <a href="#login" id="a-login"><span><?=GetMessage("AUTH_LOGIN_BUTTON")?></span></a>
</div>
<div class="login_form">
    <?if ($arResult["SHOW_ERRORS"] == "Y" && $arResult["ERROR"] === true):?>  
        <span class="errortext"><?=(is_array($arResult["ERROR_MESSAGE"]) ? ShowError($arResult["ERROR_MESSAGE"]["MESSAGE"]) : ShowError($arResult["ERROR_MESSAGE"]))?></span>
        <script>$(".login_btn a").trigger("click");</script>
    <?endif?>
    <form method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
        <?if (strlen($arResult["BACKURL"]) > 0):?><input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>"><?endif?>
        <?foreach ($arResult["POST"] as $key => $value):?><input type="hidden" name="<?=$key?>" value="<?=$value?>"><?endforeach?>
        <input type="hidden" name="AUTH_FORM" value="Y">
        <input type="hidden" name="TYPE" value="AUTH">
        
        <input class="login_form_field" type="text" name="USER_LOGIN" id="auth-user-login" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" size="12" tabindex="1" placeholder="<?=GetMessage("AUTH_LOGIN")?>"><br>
        <input class="login_form_field" type="password" name="USER_PASSWORD" maxlength="50" size="12" tabindex="2" placeholder="<?=GetMessage("AUTH_PASSWORD")?>"><br>
        <?if($arResult["CAPTCHA_CODE"]):?>
        <input type="hidden" name="captcha_sid" value="<?echo $arResult["CAPTCHA_CODE"]?>">
        <img src="/bitrix/tools/captcha.php?captcha_sid=<?echo $arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA">
        <?echo GetMessage("AUTH_CAPTCHA_PROMT")?>:<br>
        <input type="text" name="captcha_word" maxlength="50" value="" tabindex="3">
        <?endif;?>
        <?if ($arResult["STORE_PASSWORD"] == "Y"):?>
        <input class="remember-check" type="checkbox" id="USER_REMEMBER" name="USER_REMEMBER" value="Y" tabindex="4" checked="checked"><label class="remember-text" for="USER_REMEMBER"><?=GetMessage("AUTH_REMEMBER_ME")?></label>
        <?endif?>
        <div class="login_form_submit">
            <input class="submit_button" type="submit" name="Login" value="<?=GetMessage("AUTH_LOGIN_BUTTON")?>" tabindex="5">
        </div>
        <a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>"><?=GetMessage("AUTH_FORGOT_PASSWORD_2")?></a><br>
        <?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
        <a href="<?=$arResult["AUTH_REGISTER_URL"]?>"><?=GetMessage("AUTH_REGISTER")?></a><br>
        <?endif?>
    </form>
</div>

<?else:

$params = DeleteParam(array("logout", "login", "back_url_pub"));
$logoutUrl = $APPLICATION->GetCurPage()."?logout=yes".htmlspecialchars($params == ""? "":"&".$params);
?>

<div class="login_btn logout">
<a href="<?=$arResult['personal']?>"><?if(!empty($arResult['pic'])):?><img src="<?=$arResult['pic']['src']?>" height="38" width="38" /><?endif;?> <strong><?=$arResult['display_name']?></strong></a>&nbsp;&nbsp;&nbsp;<a href="<?=$logoutUrl?>"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a>
</div>

<?endif?>