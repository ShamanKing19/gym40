			<div class="link-top"><a href="#special-menu">К началу страницы</a></div>
			<br><br>
			</div><!-- /main -->
		</div><!-- /content -->
		<div id="foot">
			<div id="foot-menu">
				<?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "botHorizontalMenu",
                    array(
                        "ROOT_MENU_TYPE" => "top",
                        "MENU_CACHE_TYPE" => "N",
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
				<ul class="fr">
					<!-- <li><a href="/special/sp_sitemap/?special=y">Карта сайта</a></li> -->
					<!-- class="nb" --><li class="nb"><a href="/search/index.php">Поиск по сайту</a></li>
				</ul>
			</div><!-- /foot-menu -->
			<div id="foot-bot">
				<?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/includes/spec_footer_title.php"
                    )
                );?>
				<div id="creator"><a href="http://www.consult-info.ru">www.consult-info.ru</a></div>
			</div>
		</div><!-- /foot -->
	</div><!-- /wrap -->
</body>
</html>