<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новогодние настроения. 2014-2015 уч.год");
?><p style="text-align: justify;">
<b>А в Китае Новый год - это Чунь цзе"</b><br>
В киноконцертном зале гимназии проходил заключительный этап творческого проекта "Кто приходит в Новый год", стартовавший еще 22 ноября. Участниками данного мероприятия стали учащиеся 1-4 классов, классные руководители, педагоги дополнительного образования, родители гимназистов. Проект позволил создать радостную эмоциональную атмосферу в преддверии новогоднего праздника. В процессе работы учащиеся изучали обычаи и традиции празднования Нового года в разных странах; создавали костюмы, газеты, книги рецептов; изучали и исполняли музыкальные произведения и танцы народов мира. В рекреации второго этажа гимназии была оформлена выставка творческих работ. Одним из итогов проекта стал яркий праздник, на котором были представлены новогодние традиции России, Кубы, Китая, Узбекистана, Швеции, Чехии и Словакии, Англии, Италии. Под звуки новогодних и рождественских песен, зажигательных танцев, инсценированных сказок рождалась настоящая зимняя сказка.</p>
<p style="text-align: justify;"><b>Новогодний мюзикл</b><br>
В преддверии новогодних праздников в киноконцертном зале гимназии № 40 прошёл Новогодний мюзикл. Это сравнительно новый вид музыкального представления для гимназической сцены.</p>
<p style="text-align: justify;">
	В музыкальном спектакле принимали участие: хореографическая студия "Позитив", студия эстрадного вокала "Звуки музыки", хореографический ансамбль "Акценты".</p>
<p style="text-align: justify;">
	Чтобы обеспечить зрелищность и театральность действия, были задействованы все творческие и технические ресурсы. Так был создан формат представления, сочетающий в себе увлекательный сюжет, музыкальную основу, вокал, хореографию, актерское мастерство, зрелищное компьютерное художественное оформление и всевозможные интерактивные эффекты.
</p>
 <br>
 <?$APPLICATION->IncludeComponent(
	"bitrix:photogallery",
	"",
	Array(
		"USE_LIGHT_VIEW" => "Y",
		"IBLOCK_TYPE" => "photos",
		"IBLOCK_ID" => "30",
		"SECTION_SORT_BY" => "UF_DATE",
		"SECTION_SORT_ORD" => "DESC",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"PATH_TO_USER" => "",
		"DRAG_SORT" => "Y",
		"USE_COMMENTS" => "N",
		"SEF_MODE" => "N",
		"VARIABLE_ALIASES" => Array("SECTION_ID"=>"SECTION_ID","ELEMENT_ID"=>"ELEMENT_ID","PAGE_NAME"=>"PAGE_NAME","ACTION"=>"ACTION"),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"DATE_TIME_FORMAT_DETAIL" => "d.m.Y",
		"DATE_TIME_FORMAT_SECTION" => "d.m.Y",
		"SET_TITLE" => "N",
		"SHOW_LINK_ON_MAIN_PAGE" => array("id","shows","rating","comments"),
		"SECTION_PAGE_ELEMENTS" => "15",
		"ELEMENTS_PAGE_ELEMENTS" => "50",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"ALBUM_PHOTO_SIZE" => "120",
		"THUMBNAIL_SIZE" => "100",
		"JPEG_QUALITY1" => "100",
		"ORIGINAL_SIZE" => "1280",
		"JPEG_QUALITY" => "100",
		"ADDITIONAL_SIGHTS" => array(),
		"PHOTO_LIST_MODE" => "N",
		"SHOWN_ITEMS_COUNT" => "10",
		"SHOW_NAVIGATION" => "N",
		"USE_RATING" => "N",
		"SHOW_TAGS" => "N",
		"UPLOAD_MAX_FILE_SIZE" => "32",
		"USE_WATERMARK" => "N",
		"WATERMARK_RULES" => "USER",
		"PATH_TO_FONT" => "default.ttf",
		"WATERMARK_MIN_PICTURE_SIZE" => "800"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>