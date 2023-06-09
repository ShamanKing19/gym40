<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!CModule::IncludeModule("bizproc") || !CModule::IncludeModule("iblock"))
	return false;

if (!$GLOBALS["USER"]->IsAuthorized())
{
	$GLOBALS["APPLICATION"]->AuthForm("");
	die();
}

$arParams["SET_TITLE"] = ($arParams["SET_TITLE"] == "N" ? "N" : "Y");
$arParams["SET_NAV_CHAIN"] = ($arParams["SET_NAV_CHAIN"] == "N" ? "N" : "Y");
$arParams["ITEMS_COUNT"] = intval($arParams["ITEMS_COUNT"]);
if ($arParams["ITEMS_COUNT"] <= 0)
	$arParams["ITEMS_COUNT"] = 20;

if (strlen($arParams["PAGE_VAR"]) <= 0)
	$arParams["PAGE_VAR"] = "page";
if (strlen($arParams["TASK_VAR"]) <= 0)
	$arParams["TASK_VAR"] = "task_id";
if (strlen($arParams["BLOCK_VAR"]) <= 0)
	$arParams["BLOCK_VAR"] = "block_id";
if (strlen($arParams["ELEM_VAR"]) <= 0)
	$arParams["BP_VAR"] = "bp_id";

$arParams["PATH_TO_INDEX"] = trim($arParams["PATH_TO_INDEX"]);
if (strlen($arParams["PATH_TO_INDEX"]) <= 0)
	$arParams["PATH_TO_INDEX"] = $APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=index";

$arParams["PATH_TO_LIST"] = trim($arParams["PATH_TO_LIST"]);
if (strlen($arParams["PATH_TO_LIST"]) <= 0)
	$arParams["PATH_TO_LIST"] = htmlspecialchars($APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=list&".$arParams["BLOCK_VAR"]."=#block_id#");

$arParams["PATH_TO_TASK"] = trim($arParams["PATH_TO_TASK"]);
if (strlen($arParams["PATH_TO_TASK"]) <= 0)
	$arParams["PATH_TO_TASK"] = $APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=task&".$arParams["BLOCK_VAR"]."=#block_id#&".$arParams["TASK_VAR"]."=#task_id#";
$arParams["PATH_TO_TASK"] = $arParams["PATH_TO_TASK"].((strpos($arParams["PATH_TO_TASK"], "?") === false) ? "?" : "&").bitrix_sessid_get();

$arParams["PATH_TO_BP"] = trim($arParams["PATH_TO_BP"]);
if (strlen($arParams["PATH_TO_BP"]) <= 0)
	$arParams["PATH_TO_BP"] = $APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=bp&".$arParams["BLOCK_VAR"]."=#block_id#";
$arParams["PATH_TO_BP"] = $arParams["PATH_TO_BP"].((strpos($arParams["PATH_TO_BP"], "?") === false) ? "?" : "&").bitrix_sessid_get();

$arParams["PATH_TO_SETVAR"] = trim($arParams["PATH_TO_SETVAR"]);
if (strlen($arParams["PATH_TO_SETVAR"]) <= 0)
	$arParams["PATH_TO_SETVAR"] = $APPLICATION->GetCurPage()."?".$arParams["PAGE_VAR"]."=setvar&".$arParams["BLOCK_VAR"]."=#block_id#";
$arParams["PATH_TO_SETVAR"] = $arParams["PATH_TO_SETVAR"].((strpos($arParams["PATH_TO_SETVAR"], "?") === false) ? "?" : "&").bitrix_sessid_get();

$arResult["FatalErrorMessage"] = "";
$arResult["ErrorMessage"] = "";

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
if (strlen($arParams["IBLOCK_TYPE"]) <= 0)
	$arResult["FatalErrorMessage"] .= GetMessage("BPWC_WLC_EMPTY_IBLOCK_TYPE").". ";

$arParams["BLOCK_ID"] = intval($arParams["BLOCK_ID"]);
if ($arParams["BLOCK_ID"] <= 0)
	$arResult["FatalErrorMessage"] .= GetMessage("BPWC_WLC_EMPTY_IBLOCK").". ";

$arParams["BP_ID"] = intval($arParams["BP_ID"]);
if ($arParams["BP_ID"] <= 0)
	$arResult["FatalErrorMessage"] .= GetMessage("BPWC_WLC_EMPTY_BPID").". ";

$arResult["BackUrl"] = urlencode(empty($_REQUEST["back_url"]) ? $APPLICATION->GetCurPageParam() : $_REQUEST["back_url"]);

$arResult["PATH_TO_INDEX"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_INDEX"], array());
$arResult["PATH_TO_LIST"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_LIST"], array("block_id" => $arParams["BLOCK_ID"]));
$arResult["PATH_TO_BP"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_BP"], array("block_id" => $arParams["BLOCK_ID"]));
$arResult["PATH_TO_SETVAR"] = CComponentEngine::MakePathFromTemplate($arParams["PATH_TO_SETVAR"], array("block_id" => $arParams["BLOCK_ID"]));

$documentType = array("bizproc", "CBPVirtualDocument", "type_".$arParams["BLOCK_ID"]);

if (strlen($arResult["FatalErrorMessage"]) <= 0)
{
	$arResult["BlockType"] = null;
	$ar = CIBlockType::GetByIDLang($arParams["IBLOCK_TYPE"], LANGUAGE_ID, true);
	if ($ar)
		$arResult["BlockType"] = $ar;
	else
		$arResult["FatalErrorMessage"] .= GetMessage("BPWC_WLC_WRONG_IBLOCK_TYPE").". ";
}

if (strlen($arResult["FatalErrorMessage"]) <= 0)
{
	$arResult["Block"] = null;
	$db = CIBlock::GetList(array(), array("ID" => $arParams["BLOCK_ID"], "TYPE" => $arParams["IBLOCK_TYPE"], "ACTIVE" => "Y"));
	if ($ar = $db->GetNext())
		$arResult["Block"] = $ar;
	else
		$arResult["FatalErrorMessage"] .= GetMessage("BPWC_WLC_WRONG_IBLOCK").". ";
}

if (strlen($arResult["FatalErrorMessage"]) <= 0)
{
	$db = CIBlockElement::GetList(
		array(),
		array("ID" => $arParams["BP_ID"], "IBLOCK_ID" => $arParams["BLOCK_ID"], "CHECK_BP_VIRTUAL_PERMISSIONS" => "read"),
		false,
		false,
		array("ID", "NAME", "IBLOCK_ID", "CREATED_BY")
	);
	if ($ar = $db->GetNext())
		$arResult["BP"] = $ar;
	else
		$arResult["FatalErrorMessage"] .= GetMessage("BPWC_WLC_WRONG_BP").". ";
}

if (strlen($arResult["FatalErrorMessage"]) <= 0)
{
	$arResult["GRID_ID"] = "bizproc_CBPVirtualDocument1_".$arParams["BLOCK_ID"];

	$gridOptions = new CGridOptions($arResult["GRID_ID"]);
	$gridColumns = $gridOptions->GetVisibleColumns();
	$gridSort = $gridOptions->GetSorting(array("sort"=>array("ID" => "desc")));

	$arResult["SORT"] = $gridSort["sort"];
	$arResult["FILTER"] = array(
		array(
			"id" => "MODIFIED",
			"name" => GetMessage("CBBWL_C_MODIFIED"),
			"type" => "date",
		),
		array(
			"id" => "ADMIN_MODE",
			"name" => GetMessage("CBBWL_C_ADMIN_MODE"),
			"type" => "checkbox",
		),
	);

	$GLOBALS["__bwl_ParseStringParameterTmp_arAllowableUserGroups"] = CBPDocument::GetAllowableUserGroups($documentType);
	function __bwl_ParseStringParameterTmp($matches)
	{
		$result = "";
		if ($matches[1] == "user")
		{
			$user = $matches[2];

			$l = strlen("user_");
			if (substr($user, 0, $l) == "user_")
				$result = CBPHelper::ConvertUserToPrintableForm(intval(substr($user, $l)));
			else
				$result = $GLOBALS["__bwl_ParseStringParameterTmp_arAllowableUserGroups"][$user];
		}
		elseif ($matches[1] == "group")
		{
			$result = $GLOBALS["__bwl_ParseStringParameterTmp_arAllowableUserGroups"][$matches[2]];
		}
		else
		{
			$result = $matches[0];
		}
		return $result;
	}

	$documentId = array("bizproc", "CBPVirtualDocument",$arResult["BP"]["ID"]);
	$arDocumentStates = CBPDocument::GetDocumentStates($documentType, $documentId);

	$documentStateId = "";
	foreach ($arDocumentStates as $arDocumentState)
	{
		$documentStateId = $arDocumentState["ID"];
		break;
	}

	$arResult["AdminMode"] = false;

	$arFilter = array("WORKFLOW_ID" => $documentStateId);
	$gridFilter = $gridOptions->GetFilter($arResult["FILTER"]);
	foreach ($gridFilter as $key => $value)
	{
		if ($key == "ADMIN_MODE")
		{
			$arResult["AdminMode"] = ($value == "Y" ? true : false);
			continue;
		}

		if (substr($key, -5) == "_from")
		{
			$op = ">=";
			$newKey = substr($key, 0, -5);
		}
		elseif (substr($key, -3) == "_to")
		{
			$op = "<=";
			$newKey = substr($key, 0, -3);
		}
		else
		{
			$op = "";
			$newKey = $key;
		}

		$arFilter[$op.$newKey] = $value;
	}

	$arResult["HEADERS"] = array(
		array("id"=>"date", "name"=>GetMessage("BPWC_WLCT_F_DATE"), "sort" => "ID", "default"=>true),
		array("id"=>"name", "name"=>GetMessage("BPWC_WLCT_F_NAME"), "default"=>true),
		array("id"=>"type", "name"=>GetMessage("BPWC_WLCT_F_TYPE"), "default"=>$arResult["AdminMode"]),
		array("id"=>"status", "name"=>GetMessage("BPWC_WLCT_F_STATUS"), "default"=>$arResult["AdminMode"]),
		array("id"=>"result", "name"=>GetMessage("BPWC_WLCT_F_RESULT"), "default"=>$arResult["AdminMode"]),
		array("id"=>"note", "name"=>GetMessage("BPWC_WLCT_F_NOTE"), "default"=>true),
	);

	$arResult["RECORDS"] = array();
	$level = 0;

	$dbTrack = CBPTrackingService::GetList($gridSort["sort"], $arFilter);
	while ($arTrack = $dbTrack->GetNext())
	{
		$prefix = "";
		if (!$arResult["AdminMode"])
		{
			if ($arTrack["TYPE"] != CBPTrackingType::Custom && $arTrack["TYPE"] != CBPTrackingType::FaultActivity)
				continue;
		}
		else
		{
			if ($arTrack["TYPE"] == CBPTrackingType::CloseActivity)
			{
				$level--;
				$prefix = str_repeat("&nbsp;&nbsp;", $level);
			}
			elseif ($arTrack["TYPE"] == CBPTrackingType::ExecuteActivity)
			{
				$prefix = str_repeat("&nbsp;&nbsp;", $level);
				$level++;
			}
			else
			{
				$prefix = str_repeat("&nbsp;&nbsp;", $level);
			}
		}

		$date = $arTrack["MODIFIED"];

		if ($arResult["AdminMode"])
			$name = (strlen($arTrack["ACTION_TITLE"]) > 0 ? $prefix.$arTrack["ACTION_TITLE"]."<br/>".$prefix."(".$arTrack["ACTION_NAME"].")" : $prefix.$arTrack["ACTION_NAME"]);
		else
			$name = $arTrack["ACTION_TITLE"];

		switch ($arTrack["TYPE"])
		{
			case 1:
				$type = GetMessage("BPABL_TYPE_1");
				break;
			case 2:
				$type = GetMessage("BPABL_TYPE_2");
				break;
			case 3:
				$type = GetMessage("BPABL_TYPE_3");
				break;
			case 4:
				$type = GetMessage("BPABL_TYPE_4");
				break;
			case 5:
				$type = GetMessage("BPABL_TYPE_5");
				break;
			default:
				$type = GetMessage("BPABL_TYPE_6");
		}

		switch ($arTrack["EXECUTION_STATUS"])
		{
			case CBPActivityExecutionStatus::Initialized:
				$status = GetMessage("BPABL_STATUS_1");
				break;
			case CBPActivityExecutionStatus::Executing:
				$status = GetMessage("BPABL_STATUS_2");
				break;
			case CBPActivityExecutionStatus::Canceling:
				$status = GetMessage("BPABL_STATUS_3");
				break;
			case CBPActivityExecutionStatus::Closed:
				$status = GetMessage("BPABL_STATUS_4");
				break;
			case CBPActivityExecutionStatus::Faulting:
				$status = GetMessage("BPABL_STATUS_5");
				break;
			default:
				$status = GetMessage("BPABL_STATUS_6");
		}

		switch ($arTrack["EXECUTION_RESULT"])
		{
			case CBPActivityExecutionResult::None:
				$result = GetMessage("BPABL_RES_1");
				break;
			case CBPActivityExecutionResult::Succeeded:
				$result = GetMessage("BPABL_RES_2");
				break;
			case CBPActivityExecutionResult::Canceled:
				$result = GetMessage("BPABL_RES_3");
				break;
			case CBPActivityExecutionResult::Faulted:
				$result = GetMessage("BPABL_RES_4");
				break;
			case CBPActivityExecutionResult::Uninitialized:
				$result = GetMessage("BPABL_RES_5");
				break;
			default:
				$status = GetMessage("BPABL_RES_6");
		}

		$note = $arTrack["ACTION_NOTE"];
		$note = preg_replace_callback(
			"/\{=([A-Za-z0-9_]+)\:([A-Za-z0-9_]+)\}/i",
			"__bwl_ParseStringParameterTmp",
			$note
		);

		$aCols = array("date" => $date, "name" => $name, "type" => $type, "status" => $status, "result" => $result, "note" => $note);
		$aActions = array();

		$arResult["RECORDS"][] = array("data" => $arTrack, "actions" => $aActions, "columns" => $aCols, "editable" => false);
	}
}

if (strlen($arResult["FatalErrorMessage"]) <= 0)
{
	if ($arParams["SET_TITLE"] == "Y")
		$APPLICATION->SetTitle(GetMessage("BPABL_PAGE_TITLE").": ".$arResult["BP"]["NAME"]);
	if ($arParams["SET_NAV_CHAIN"] == "Y")
	{
		$APPLICATION->AddChainItem($arResult["BlockType"]["NAME"], $arResult["PATH_TO_INDEX"]);
		$APPLICATION->AddChainItem($arResult["Block"]["NAME"], $arResult["PATH_TO_LIST"]);
		$APPLICATION->AddChainItem(GetMessage("BPABL_PAGE_TITLE").": ".$arResult["BP"]["NAME"]);
	}
}
else
{
	if ($arParams["SET_TITLE"] == "Y")
		$APPLICATION->SetTitle(GetMessage("BPWC_WLC_ERROR"));
	if ($arParams["SET_NAV_CHAIN"] == "Y")
		$APPLICATION->AddChainItem(GetMessage("BPWC_WLC_ERROR"));
}

$this->IncludeComponentTemplate();
?>