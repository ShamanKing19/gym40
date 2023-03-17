<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


            </div><!-- /.content-->
        </div><!-- /.container-->

<!----------------- Колонка с баннерами ------------------>

        <div class="sidebar">
            <div class="sd_block sd_img_banner">
                <?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH.'/include_areas/schedule.php', array(), array('MODE' => 'html'))?>
            </div>
        </div><!-- /.sidebar -->
	

    </div><!-- /.middle-->
</div><!-- /.wrapper -->

<!----------------- footer ------------------>

<div class="footer">
    <div class="footer_middle">
        <table>
            <tr>
                <td style="width:80%; height:auto;">
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
        <script type="text/javascript">
            var map;

            DG.then(function () {
                map = DG.map('map', {
                    center: [54.741556, 20.490102],
                    zoom: 15
                });

                DG.marker([54.740714, 20.490177]).addTo(map).bindPopup('Гимназия №40 имени Ю.А.Гагарина');
            });
        </script>
        <div id="map" style="width:100%; height:200px"></div>

                </td>
                <td class="footer_info">
                    <?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"footer", 
	array(
		"USE_SUGGEST" => "N",
		"PAGE" => "/search/"
	),
	false
);?>
                    <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/buttons.php"), Array(), Array("MODE"=>"html"));?>
                    <div class="clearfix"></div>
                    <h5><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_phone.php"), Array(), Array("MODE"=>"html"));?></h5>
                    <p><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/school_address.php"), Array(), Array("MODE"=>"html"));?></p>
                    <p><?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_feedback.php"), Array(), Array("MODE"=>"html"));?></p>
                </td>
            </tr>
        </table>

    </div>
</div><!-- /.footer -->
<div class="footer_btm">
    <div class="footer_btm_wrap">
        <?$APPLICATION->IncludeFile($APPLICATION->GetTemplatePath("include_areas/footer_name.php"), Array(), Array("MODE"=>"html"));?>
    </div>

</div>

<!-- /* Здесь была самая нижняя полоска */ -->

<!-- JavaScript
================================================== -->
<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.carouFredSel-6.0.6.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.formstyler.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.datePicker.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/date.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/date_ru_utf8.js"></script>
<!--[if IE]><script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.bgiframe.min.js"></script><![endif]-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.placeholder.min.js"></script>

<!-- Здесь был счетчик посетителей -->
<!-- Спутник -->
<script type="text/javascript">
       (function(d, t, p) {
           var j = d.createElement(t); j.async = true; j.type = "text/javascript";
           j.src = ("https:" == p ? "https:" : "http:") + "//stat.sputnik.ru/cnt.js";
           var s = d.getElementsByTagName(t)[0]; s.parentNode.insertBefore(j, s);
       })(document, "script", document.location.protocol);
    </script>
</body>
</html>