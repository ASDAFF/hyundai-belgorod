<?php


foreach($arResult["ITEMS"] as $key => &$arItem){
    if(stristr($arItem['PROPERTIES']['SLIDER']['VALUE'], 'preview')){
        $arResult["ITEMS"][$key]['PROPERTIES']['SLIDER']['VALUE'][0] = $arItem['PROPERTIES']['SLIDER']['VALUE'];
    }else{
        unset($arResult["ITEMS"][$key]);
    }

}