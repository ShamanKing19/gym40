<?
//коммент для сохранения кодировки	
Require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$tmp_str=str_replace ("\\", '/',__FILE__);
$work_path=substr(dirname($tmp_str), strrpos($tmp_str, '/bitrix/'));
$work_path=substr($work_path,0,-8);
require_once($_SERVER["DOCUMENT_ROOT"].$work_path.'/forms/lang/'.LANGUAGE_ID.'/copy_week.php');
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


$ar_filter=array(
	'CLASS'=>$_POST['clas'],
	'WEEK_START'=>array('COMPARSION'=>'=','START_DATE'=>$_POST['en']),
	'SITE_ID'=>SITE_ID	
);




$arFilter=array
(
	'CLASS'=>$_POST['class'],
	'COPY_FROM'=>$_POST['copy_from']
);

$arNew=array(
	'COPY_DATE'=>$_POST['copy_start']	
);


$copyCount=$_POST['copy_count'];
$copyMode=$_POST['skip_week'];

$dayStep = 7;

if ($copyMode=="Y")
{
	$dayStep = 14;
}
$i=1;

for ($i = 1; $i <= $copyCount; $i++) {
	if ($arNew['COPY_DATE']==$arFilter['COPY_FROM'])
		continue;
	
	$deleteFilter=array(
			'CLASS'=>$arFilter['CLASS'],
			'WEEK_START'=>$arNew['COPY_DATE']
	);
	
	MCSchedule::Delete($deleteFilter);
	
	
	MCWeek::Copy($arFilter,$arNew);
	$newDate=MCDateTimeTools::AddDays($arNew['COPY_DATE'],$dayStep);

	$arNew['COPY_DATE']=$newDate;
}
?>

