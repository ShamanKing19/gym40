<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Архив");
?> <style>
.atuin-btn {
    display: inline-flex;
    margin: 10px;
    text-decoration: none;
    border: 2px solid #BFE2FF;
    position: relative;
    overflow: hidden;
    font-size: 20px;
    line-height: 20px;
    padding: 12px 30px;
    color: #FFF;
    font-weight: bold;
    text-transform: uppercase; 
    font-family: 'Roboto Condensed', Тahoma, sans-serif;
    background: #337AB7;
    transition: box-shadow 0.3s, transform 0.3s;
    cursor: pointer;
}
.atuin-btn:hover,
.atuin-btn:active,
.atuin-btn:focus {
    transform: translateY(-4px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.2), 0 16px 20px rgba(0,0,0,0.2);
    color: #FFF;
}
.atuin-btn:before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(-45deg, transparent, rgba(191, 226, 255, 0.3), transparent);
    transition: left 0.7s;
}
.atuin-btn:hover:before,
.atuin-btn:active:before,
.atuin-btn:focus:before {
    left: 100%;
}
</style>
 <a div="" class="atuin-btn" href="/teachers/lingva/"> Лингвистическое <br>
 направление <br>
 </a> <a div="" class="atuin-btn" href="/teachers/fizmat-obrazovanie/"> Физико-математическое <br>
 направление <br>
 </a><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>