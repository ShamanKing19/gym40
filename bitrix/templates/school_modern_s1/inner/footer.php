<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
            </div><!-- /.content-->
        </div><!-- /.container-->

        <div class="sidebar">

            <?$APPLICATION->IncludeComponent("bitrix:menu", "left", array(
                "ROOT_MENU_TYPE" => "left",
                "MENU_CACHE_TYPE" => "A",
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MAX_LEVEL" => "1",
                "CHILD_MENU_TYPE" => "left",
                "USE_EXT" => "N",
                "DELAY" => "N",
                "ALLOW_MULTI_SELECT" => "N"
                ),
                false
            );?>

            <div class="sd_block sd_img_banner">
                <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/include_areas/schedule.php', array(), array('MODE' => 'html'))?>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.line",
                "main_docs",
                Array(
                    "IBLOCK_TYPE" => "library",
                    "IBLOCKS" => array(),
                    "NEWS_COUNT" => "3",
                    "FIELD_CODE" => array(),
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "DETAIL_URL" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "300",
                    "CACHE_GROUPS" => "Y"
                ),
            false
            );?>
        </div><!-- /.sidebar -->

        <div class="clearfix"></div>

    </div><!-- /.middle-->

</div><!-- /.wrapper -->

<div class="footer">
    <div class="footer_middle">

        <table>
            <tr>
                <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
                     "ROOT_MENU_TYPE"    =>    "top",
                     "MAX_LEVEL"    =>    "2",
                     "CHILD_MENU_TYPE"    =>    "left",
                     "USE_EXT"    =>    "Y",
                     "MENU_CACHE_TYPE" => "A",
                     "MENU_CACHE_TIME" => "3600",
                     "MENU_CACHE_USE_GROUPS" => "Y",
                     "MENU_CACHE_GET_VARS" => Array()
                     )
                );?>
                <td class="footer_info">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "footer",
                        Array(
                            "USE_SUGGEST" => "N",
                            "PAGE" => "#SITE_DIR#search/"
                        ),
                        false
                    );?>
                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/buttons.php"), Array(), Array("MODE"=>"html"));?>
                    <div class="clearfix"></div>
                    <h5><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_phone.php"), Array(), Array("MODE"=>"html"));?></h5>
                    <p><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_address.php"), Array(), Array("MODE"=>"html"));?></p>
                    <p><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_feedback.php"), Array(), Array("MODE"=>"html"));?></p>
                </td>
            </tr>
        </table>

    </div>
</div><!-- /.footer -->
<div class="footer_btm">
    <div class="footer_btm_wrap">
        <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_name.php"), Array(), Array("MODE"=>"html"));?>
        <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/copyright.php"), Array(), Array("MODE"=>"html"));?>
    </div>
</div>

<!-- JavaScript
================================================== -->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.carouFredSel-6.0.6.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.formstyler.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.datePicker.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/date.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/date_ru_win1251.js"></script>
<!--[if IE]><script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bgiframe.min.js"></script><![endif]-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>

</body>
</html>