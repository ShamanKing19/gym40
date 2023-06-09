<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if ($_REQUEST["edit"] != "Y" && !is_set($_POST, "action_button_".$arParams["GRID_ID"]) || $ob->permission < "W"):
	return true;
endif;

$this->IncludeComponentLang("action.php");
$APPLICATION->ResetException();

$_REQUEST["IBLOCK_SECTION_ID"] = (empty($_REQUEST["IBLOCK_SECTION_ID"]) ? "/" : $_REQUEST["IBLOCK_SECTION_ID"]); 
$_REQUEST["ID"] = (is_array($_REQUEST["ID"]) ? $_REQUEST["ID"] : array());

/************** Folders and files **********************************/
$arData = array("S" => array(), "E" => array()); 
if ($_POST["action_all_rows_".$arParams["GRID_ID"]] == "Y")
{
	$res = $ob->PROPFIND($options = array("path" => $ob->_path, "depth" => 1), $files, array("COLUMNS" => array("ID", "NAME"), "return" => "nav_result")); 
	$db_res = $res["NAV_RESULT"];
	if ($db_res && $res = $db_res->Fetch())
	{
		do
		{
			$arData[$res["TYPE"]][] = $res["ID"]; 
		} while ($res = $db_res->Fetch()); 
	}
}
else
{
	foreach ($_REQUEST["ID"] as $key)
	{
		$arData[(substr($key, 0, 1) == "S" ? "S" : "E")][] = substr($key, 1); 
	}
}
/************** Action *********************************************/
$ACTION = strtoupper($_POST["action_button_".$arParams["GRID_ID"]]); 
/************** Main errors ****************************************/
if (!check_bitrix_sessid())
{
	$aMsg[] = array(
		"id" => "SESSID", 
		"text" => GetMessage("WD_ERROR_BAD_SESSID"));
}
if ($arParams["PERMISSION"] < "W")
{
	$aMsg[] = array(
		"id" => "PERMISSION", 
		"text" => GetMessage("WD_ACCESS_DENIED"));
}
if (empty($ACTION))
{
	$aMsg[] = array(
		"id" => "ACTION", 
		"text" => GetMessage("WD_ERROR_EMPTY_ACTION"));
}
elseif (!in_array($ACTION, array("MOVE", "DELETE")))
{
	$aMsg[] = array(
		"id" => "ACTION", 
		"text" => GetMessage("WD_ERROR_BAD_ACTION"));
}
if (empty($arData["S"]) && empty($arData["E"]))
{
	$aMsg[] = array(
		"id" => "DATA", 
		"text" => GetMessage("WD_ERROR_EMPTY_DATA"));
}
if ($ACTION == "MOVE" && $_REQUEST["IBLOCK_SECTION_ID"] === false)
{
	$aMsg[] = array(
		"id" => "TARGET_SECTION", 
		"text" => GetMessage("WD_ERROR_EMPTY_TARGET_SECTION"));
}
/************** Main errors/****************************************/

/************** Data errors ****************************************/
if ($ACTION == "MOVE" && $_REQUEST["IBLOCK_SECTION_ID"] == $arParams["SECTION_ID"])
{
	"It is not need any actions"; 
}
elseif (!empty($aMsg))
{
}
elseif ($ACTION == "MOVE")
{
	
	@set_time_limit(1000);
	$result = $ob->PROPFIND($options = array("path" => $ob->_path, "depth" => 1), $files, array("return" => "array")); 
	if (!empty($result["RESULT"]))
	{
		foreach ($result["RESULT"] as $key => $res)
		{
			if (!in_array($res["ID"], $arData[$res["TYPE"]]))
				continue; 

			$options = array(
				"dest_url" => str_replace("//", "/", $ob->_get_path($_REQUEST["IBLOCK_SECTION_ID"], false) . "/" . $res["NAME"]), 
				"overwrite" => true, 
				"path" => $res["ID"]); 
			
			$APPLICATION->ResetException();
			

			$result = $ob->MOVE($options); 
			
			$oError = $APPLICATION->GetException();
			if ($oError || intVal($result) >= 300)
				$aMsg[] = array(
					"id" => "ELEMENTS[".$res["TYPE"]."][".$res["ID"]."]",
					"text" => ($oError ? $oError->GetString() : $result));
		}
	}
}
elseif ($ACTION == "DELETE") 
{
	@set_time_limit(1000);
	foreach ($arData["S"] as $section_id):
		$result = $ob->DELETE(array("section_id" => $section_id)); 
		if (intVal($result) != 204)
			$aMsg[] = array(
				"id" => "ELEMENTS[S][".$section_id."]",
				"text" => GetMessage("WD_ERROR_DELETE")); 
	endforeach;
	
	foreach ($arData["E"] as $element_id):
		$result = $ob->DELETE(array("element_id" => $element_id)); 
		if (intVal($result) != 204) 
			$aMsg[] = array(
				"id" => "ELEMENTS[E][".$element_id."]",
				"text" => GetMessage("WD_ERROR_DELETE")." ".$result); 
	endforeach;
}

if (!empty($aMsg)):
	$e = new CAdminException($aMsg);
	$GLOBALS["APPLICATION"]->ThrowException($e);
	return false;
endif;

$arParams["CONVERT"] = (strPos($arParams["~SECTIONS_URL"], "?") === false ? true : false);
if (!$arParams["CONVERT"])
	$arParams["CONVERT"] = (strPos($arParams["~SECTIONS_URL"], "?") > strPos($arParams["~SECTIONS_URL"], "#PATH#")); 
$url = CComponentEngine::MakePathFromTemplate($arParams["~SECTIONS_URL"], 
	array("PATH" => implode("/", ($arParams["CONVERT"] ? $arResult["NAV_CHAIN_UTF8"] : $arResult["NAV_CHAIN"])))); 
LocalRedirect($url);
?>