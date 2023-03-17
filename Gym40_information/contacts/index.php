<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?><p style="text-align: justify; border-bottom: 2px solid black;">
 <span style="font-family: Verdana; font-size: 10pt;"><b>ГРАФИК РАБОТЫ ГИМНАЗИИ</b></span>
</p>
<p style="text-align: justify;">
 <i class="fa fa-calendar" aria-hidden="true"></i> Пн-Пт: <i class="fa fa-clock-o" aria-hidden="true"></i> 08<sup>10</sup>-19<sup>30</sup> <br>
 <i class="fa fa-calendar" aria-hidden="true"></i> Сб: <i class="fa fa-clock-o" aria-hidden="true"></i> 08<sup>10</sup>-16<sup>00</sup><br>
 <i class="fa fa-calendar" aria-hidden="true"></i> Вс: выходной
</p>
<p style="text-align: justify;">
 <span style="font-family: Verdana; font-size: 10pt;"> </span><img width="700" src="/about/karta.jpg" height="303"><b><br>
 <a class="dg-widget-link" href="http://2gis.ru/kaliningrad/firm/5630027815199182/center/20.490177,54.740714/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Калининграда</a></b>
</p>
<p style="text-align: justify; border-bottom: 2px solid black;">
 <span style="font-family: Verdana; font-size: 10pt;"><b>КАК ДОБРАТЬСЯ</b></span>
</p>
<p style="text-align: justify;">
 	 автобусы №23, №40, №48<br>
	 маршрутные такси №68, №75&nbsp;<br>
	 Остановка ГУР "Сельма"
</p>
<p style="text-align: justify;">
 <i class="fa fa-phone fa-lg" aria-hidden="true"></i> 8 (4012) 72-16-80, 8 (4012) 72-16-81<br>
 <i class="icon icon_mail"></i><a href="mailto:maougimn40@edu.klgd.ru"> maougimn40@edu.klgd.ru</a>
</p>
<p style="text-align: justify; border-bottom: 2px solid black;">
 <span style="font-family: Verdana; font-size: 10pt;"><b>ЕСЛИ У ВАС ЕСТЬ ВОПРОСЫ,  ЗАДАЙТЕ ИХ ЧЕРЕЗ ФОРМУ</b></span>
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
Array()
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>