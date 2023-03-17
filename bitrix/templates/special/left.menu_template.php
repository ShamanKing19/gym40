<?
// This file is the template for one menu item iteration


// if $SELECTED then this item is current (active) item
if ($SELECTED)
	$strtext = "<a href=$LINK?special=y class=selected>$TEXT</a>";
										
else
		$strtext = "									
											
											<a href=$LINK?special=y>$TEXT</a>";
if ($ITEM_INDEX == '0') { $strtext = "";  }
	
//if $PARAMS["SEPARATOR"]=="Y" this item should be shown with different style applied

if ($PARAMS["SEPARATOR"]=="Y")
{
	$strstyle = "";
	$strDir = "";
	$strtext = "leftmenu";
}
else
	$strstyle = "";


// Content of variable $sMenuProlog is typed just before all menu items iterations
// Content of variable $sMenuEpilog is typed just after all menu items iterations
$sMenuProlog="$HEAD_MENU";
$sMenuEpilog = "";

// if $PERMISSION > "D" then current user can access this page
if ($PERMISSION > "D")
{
	$sMenuBody = $strtext;
}
else
{
	$sMenuBody = "";
}
?>

									

									
