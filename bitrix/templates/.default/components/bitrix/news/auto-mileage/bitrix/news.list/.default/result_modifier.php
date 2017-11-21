<?php


foreach($arResult["ITEMS"] as $key => $arItem){

    if(stristr(implode(',',$arItem['PROPERTIES']['SLIDER']['VALUE']), 'preview') === false){
        unset($arResult[$key]);
    }

    foreach($arItem['PROPERTIES']['SLIDER']['VALUE'] as $prw){

        if(stristr($prw, 'preview')){
            $arResult["ITEMS"][$key]['PROPERTIES']['SLIDER']['VALUE'][0] = $prw;
        }

    }



}