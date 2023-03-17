<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Неделя литовской культуры-2016");
?><p style="text-align: justify;">
	 В период с 12 по 19 февраля 2016 года в гимназии № 40 пройдет традиционная Неделя литовского языка и культуры в рамках образовательного проекта "Литовский язык и культура Литвы в Российской школе".
</p>
<p style="text-align: justify;">
	 Проект разработан и реализуется в гимназии № 40 с 2002 года при поддержке Представительства МИД России в Калининграде и Генерального консульства Литовской Республики.
</p>
<p style="text-align: justify;">
	 В рамках этого проекта в разные годы состоялись встречи учащейся молодежи из школ, лицеев, гимназий Калининграда и Литвы:&nbsp; Вильнюса, Шяуляя, Электреная, Клайпеды, Паланги, Каунаса.
</p>
<p style="text-align: justify;">
	 С 2002 года Почётными гостями гимназии № 40 стали Вице-спикер Сейма Литовской Республики В. Мунтянас, атташе по культуре Посольства Литовской Республики в Москве Ю. Будрайтис, Министр культуры Литовской республики В. Прудниковас, киноактёры Р. Адамайтис, Р. Романаускас.
</p>
<p style="text-align: justify;">
	 Статус Почетного учителя гимназии получили сотрудники консульства Литвы в Калининграде: атташе по культуре А. Юозайтис и Генеральный консул Литовской республики в Калининграде, В. Станкевич. &nbsp;Заинтересованное участие в культурно-образовательных событиях проекта в течение последних 4-х лет принимали &nbsp;В. Умбрасас, &nbsp;Р. Сянапедис.
</p>
<p style="text-align: justify;">
	 Важно отметить, что Неделя культуры Литвы в гимназии проводится в 11 раз, и в мероприятиях примут участие около 1000 гимназистов.
</p>
<p style="text-align: justify;">
	 В течение Недели состоятся конкурсы для учащихся 1 - 11 классов: на &nbsp;лучший рисунок, чтецов, &nbsp;презентаций и постеров. Профессор БФУ им. И. Канта&nbsp; В. Х. Гильманов познакомит учащихся 9-11 классов с наследием Кенигсбергского профессора, ректора Альбертины доктором Людвигасом Резой. А сборная команда гимназии № 40 по баскетболу примет участие в мастер-классе «Баскетбол-лучшая игра с мячом», который проведет тренер БФУ им. И. Канта Гедиминас Мелюнас.&nbsp; Организаторы горячего питания &nbsp;совместно с Клубом молодых педагогов подготовят &nbsp;меню для Дня литовской кухни. &nbsp;А в рамках года российского кино состоится просмотр &nbsp;и обсуждение фильма режиссера А. Жебрунаса «Красавица» (1969г.). Учащихся и родителей приглашаем на интересные уроки: «Музыкальное содружество России и Литвы» уроки музыки, «Искусство не знает границ, «Уроки Донелайтиса», «Литовские авторы в русском прочтении».
</p>
<p style="text-align: justify;">
	 С педагогическим коллективом и гимназистами старших классов за «круглым столом» встретится Генеральный консул Литовской Республики в Калининграде Олегас Скиндерскис.
</p>
<p style="text-align: justify;">
 <b><a href="http://gym40.ru/about/gym_projects/nedelya-litovskoy-kultury/2016/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0.pdf" target="_blank">Программа Недели литовской культуры</a></b>
</p>
<p style="text-align: justify;">
 <b>События в рамках недели:</b>
	<?
$GLOBALS['arrFilter']=array("?TAGS" => 'Неделя литовской культуры 2016'); 
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	".default",
	Array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(0=>"",1=>"undefined",2=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"undefined",2=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>