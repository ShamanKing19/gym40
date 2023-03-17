<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$converter = CBXPunycode::GetConverter();

$arParamsDetail = array(
	"INSCRIPTION_FOR_EMPTY" => GetMessage("BCLMMD_NO_DATA"),
	"TITLE" => GetMessage("BCLMMD_TITLE"),
);

$arSection = array(
	"TITLE" => htmlspecialcharsbx($arResult["DOMAIN_DECODED"])
	);

foreach ($arResult["DATA"] as $key => $value)
{
	$data = $value["DATA"];

	if(isset($value["PROBLEM"]) && $value["PROBLEM"] == true)
		$data = "<span style=\"color:red\">".$data."</span>";

	$arSection["CONTENT"][] = array(
						"TITLE" => GetMessage("BCLMMD_PARAM_".$key),
						"VALUE" => $data
					);
}

$arParamsDetail["DATA"][] = $arSection;

$APPLICATION->IncludeComponent(
	'bitrix:mobileapp.list.enclosed',
	'.default',
	$arParamsDetail,
	false
);
?>

<script type="text/javascript">
var listParams  = {
	ajaxUrl: "<?=$arResult["AJAX_PATH"]?>"
};

var bcmm = new __BitrixCloudMobMon(listParams);

<?if(isset($arParams["EDIT_URL"])):?>
	var listMenuItems = { items: [
							{
								name: "<?=GetMessage("BCLMMD_EDIT")?>",
								url: "<?=CHTTP::urlAddParams($arParams["EDIT_URL"],
												array(
													"action" => "edit",
													"domain" => urlencode($arResult["DOMAIN"])
													)
									)?>",
								icon: "edit"
							},
							{
								name: "<?=GetMessage("BCLMMD_DELETE")?>",
								action: function() {
														app.confirm({
																title: "<?=CUtil::JSEscape($converter->Decode($arResult["DOMAIN"]))?>",
																text: "<?=GetMessage("BCLMMD_DELETE_CONFIRM")?>",
																buttons: ["<?=GetMessage("BCLMMD_BUTT_CANCEL")?>","<?=GetMessage("BCLMMD_BUTT_OK")?>"],
																callback: function(buttIdx){
																		if(buttIdx == 2)
																			bcmm.deleteSite("<?=CUtil::JSEscape($arResult["DOMAIN"])?>");
																	}
																});
													},
								icon: "delete"
							}
								]
						};

	app.menuCreate(listMenuItems);

	app.addButtons({
		menuButton:
		{
			type:     'context-menu',
			style:    'custom',

			callback: function()
			{
				app.menuShow();
			}
		}
	});

	BX.addCustomEvent('onAfterBCMMSiteDelete', function (params){
								if(params.domain == "<?=CUtil::JSEscape($arResult["DOMAIN"])?>")
								{
										app.checkOpenStatus({callback:function(response)
											{
												if(response)
												{
													if(response.status == "visible")
													{
														app.closeController({drop:true});
													}
													else
													{
														BX.addCustomEvent("onOpenPageAfter", function(){
															app.closeController({drop:true});
														});
													}
												}
											}
										});
								}
		});

	BX.addCustomEvent('onAfterBCMMSiteUpdate', function (params){
								if(params.domain == "<?=CUtil::JSEscape($arResult["DOMAIN"])?>")
								{
									bcmm.showRefreshing();
									location.reload(true);
								}
		});

<?endif;?>

app.hidePopupLoader();
</script>
