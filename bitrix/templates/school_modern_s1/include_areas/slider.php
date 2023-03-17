<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?>
            <div class="sd_block sd_img_banner">
                <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/include_areas/schedule.php', array(), array('MODE' => 'html'))?>
            </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>