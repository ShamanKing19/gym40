<? 
$rsGroups = CGroup::GetList(($by="c_sort"), ($order="desc"), $filter); // выбираем группы
while($arGroup = $rsGroups->Fetch()){
	if($arGroup["STRING_ID"]=="PARENTS")
		$iParents = $arGroup["STRING_ID"];
	elseif($arGroup["STRING_ID"]=="STUDENTS")
		$iStudents = $arGroup["STRING_ID"];
	elseif($arGroup["STRING_ID"]=="TEACHERS")
		$iTeachers = $arGroup["STRING_ID"];
}

$site_dir = "/";
$rsSites = CSite::GetByID(SITE_ID);
if ($arSite = $rsSites->Fetch())
	$site_dir = $arSite['DIR'];

//selecting a type of pesron
if($arResult['FORM_TYPE'] == 'logout'){
	$rsUser = CUser::GetList(($by = 'ID'), ($order = 'asc'),
		array('LOGIN' => $arResult['USER_LOGIN']),
		array('SELECT' => array('UF_DEPARTMENT', 'UF_EDU_STRUCTURE')));
	$arUser = $rsUser->GetNext();
	
	$arGroups = CUser::GetUserGroup($arUser['ID']);
	$arResult['groups'] = $arGroups;

	if(in_array($iTeachers, $arGroups) || in_array(1, $arGroups))
		$arResult['personal'] = $site_dir.'teachers/';
	elseif(in_array($iParents, $arGroups))
		$arResult['personal'] = $site_dir.'parents/';
	else
		$arResult['personal'] = $site_dir.'students/';

	//handling photo
	if(intval($arUser['PERSONAL_PHOTO'])){
		$arResult['pic'] = CFile::ResizeImageGet($arUser['PERSONAL_PHOTO'], array('width' => 38, 'height' => 38), BX_RESIZE_IMAGE_EXACT);
	}
	else $arResult['pic'] = array();
	
	$arResult['display_name'] = ($arResult['USER_NAME'] != '') ? $arResult['USER_NAME'] : $arResult['USER_LOGIN']; 
}
?>