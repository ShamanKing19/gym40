<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
  <h4><?=GetMessage('FORM_LEGEND')?></h4>

<div class="zayavka">

<?=$arResult["FORM_NOTE"]?>

<?if ($arResult["isFormNote"] != "Y") 
{
?>
<?=$arResult["FORM_HEADER"]?>
<?
/***********************************************************************************
						form questions
***********************************************************************************/
?>
  
<table width="385">
<tr>
<td>
  	<?$iCnt = 1;?>
  	<?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):?>
    <div>
      <label><?if ($arQuestion["REQUIRED"] == "Y"):?>*<?endif;?> <?=$arQuestion["CAPTION"]?>:</label>
      <?$arStruct = $arQuestion['STRUCTURE'][0]?>
      <?switch($arStruct['FIELD_TYPE'])
      {     
		case 'textarea':?>
		<textarea name="form_<?=$arStruct['FIELD_TYPE']?>_<?=$arStruct['ID']?>"><?=$arStruct['VALUE']?></textarea>
		<?break;
		
		case 'file':?>
		<div id="MyInputs"><input id="File<?=$iCnt?>" name="form_<?=$arStruct['FIELD_TYPE']?>_<?=$arStruct['ID']?>" class="customFileInput" type="file" /></div>
		<?$iCnt += 1; break; 
		
		case 'date':?>
		<input class="date-pick" type="text" placeholder="11.08.1991" name="form_<?=$arStruct['FIELD_TYPE']?>_<?=$arStruct['ID']?>" value="<?=$arStruct['VALUE']?>">	
		<?break;
		
		case 'text':
		default:?>
      	<input type="text" name="form_<?=$arStruct['FIELD_TYPE']?>_<?=$arStruct['ID']?>" value="<?=$arStruct['VALUE']?>">
      	<?break;
      }?>
      
    </div>
    <?endforeach;?>
    
</td>
</tr>
<tr>
    <td><button class="zayavka_btn" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"];?>"><?=strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"];?></button></td>
</tr>
</table>

<?=$arResult["FORM_FOOTER"]?>
<?
} //endif (isFormNote)
?>
</div>