<?
//коммент для сохранения кодировки
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$work_path=str_replace ("\\", '/',dirname(__FILE__));
require_once($work_path.'/../forms/lang/'.LANGUAGE_ID.'/copy_week.php');
CModule::IncludeModule("bitrix.schoolschedule");
$month=array
(
		1=>GetMessage('CALENDAR_MONTH_1'),
		2=>GetMessage('CALENDAR_MONTH_2'),
		3=>GetMessage('CALENDAR_MONTH_3'),
		4=>GetMessage('CALENDAR_MONTH_4'),
		5=>GetMessage('CALENDAR_MONTH_5'),
		6=>GetMessage('CALENDAR_MONTH_6'),
		7=>GetMessage('CALENDAR_MONTH_7'),
		8=>GetMessage('CALENDAR_MONTH_8'),
		9=>GetMessage('CALENDAR_MONTH_9'),
		10=>GetMessage('CALENDAR_MONTH_10'),
		11=>GetMessage('CALENDAR_MONTH_11'),
		12=>GetMessage('CALENDAR_MONTH_12')
);
if (isset($_POST['newstart']))
{
	$w_start=intval($_POST['newstart']);
	$w_end=$w_start+6*24*60*60;
}

?>




<div id="c_week_sel" class="week_selector" style="padding:0; margin:0">
	<div class="weeks">
		<?$newWeek=MCDateTimeTools::AddDays(date('d.m.Y',$w_start),-7);?>
		<?$currentWeek=MCDateTimeTools::AddDays(MCDateTimeTools::GetWeekStartByDate('d.m.Y'),-7);
		?>
		<div class="prev"><?if ($currentWeek!=$newWeek){?><a href="javascript:week_change(<?=strtotime($newWeek)?>)"></a><?}?></div>
		
		<div class="date">
		<?
			echo date('j',$w_start).' '.$month[intval(date('m',$w_start))].' - '.date('j',$w_end).' '.$month[intval(date('m',$w_end))].' '.date('Y',$w_end);
		?>
		</div>
		<?$newWeek=MCDateTimeTools::AddDays(date('d.m.Y',$w_start),7)?>
		<div class="next"><a href="javascript:week_change(<?=strtotime($newWeek)?>)"></a></div>
		<div class="clear"></div>
	</div>
</div>
<input id="week_val" type="hidden" value="<?=date('d.m.Y',$w_start)?>">