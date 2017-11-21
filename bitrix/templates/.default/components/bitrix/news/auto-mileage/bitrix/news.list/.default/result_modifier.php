<?php


foreach($arResult["ITEMS"] as $key => &$arItem){
    if(stristr($email, 'preview')){
        $arResult["ITEMS"][$key]['PROPERTIES']['SLIDER']['VALUE'][0] = $arItem['PROPERTIES']['SLIDER']['VALUE'];
    }else{
        unset($arResult["ITEMS"][$key]);
    }

}