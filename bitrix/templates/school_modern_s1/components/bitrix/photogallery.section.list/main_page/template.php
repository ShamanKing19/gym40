<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult["SECTIONS"])):?>
<div class="albom_wrap">
    <div class="albom_main">
        <ul class="thumbnails">
    <?foreach($arResult["SECTIONS"] as $res):?>
        <li class="span6">
            <a href="<?=$res["LINK"]?>"><img src="<?=$res["PICTURE"]["SRC"]?>" width="<?=$res["PICTURE"]["WIDTH"]?>" height="<?=$res["PICTURE"]["HEIGHT"]?>" alt="<?=$res["NAME"]?>"></a>
            <div>
                <h3><a href="<?=$res["LINK"]?>"><?=$res["NAME"]?></a></h3>
                <p><?=$res["ELEMENTS_CNT_APPROVED"]?> <?=GetMessage("P_COUNT");?></p>
            </div>
        </li>
    <?endforeach;?>
        </ul>
    </div>
</div>
<?endif;?>