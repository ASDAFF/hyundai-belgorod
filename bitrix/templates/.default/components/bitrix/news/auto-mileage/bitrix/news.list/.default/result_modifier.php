<?php


foreach($arResult["ITEMS"] as $key => $arItem){

    if(stristr(implode(',',$arItem['PROPERTIES']['SLIDER']['VALUE']), 'photo1') === false){
        //unset($arResult["ITEMS"][$key]);
    }

    foreach($arItem['PROPERTIES']['SLIDER']['VALUE'] as $prw){

        if(stristr($prw, 'photo1')){
            $arResult["ITEMS"][$key]['PROPERTIES']['SLIDER']['VALUE'][0] = $prw;
        }

    }



}