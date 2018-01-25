<?php

$prw = implode(",", $arResult["PROPERTIES"]["SLIDER"]['VALUE']);
if (preg_match('/photo1/', $prw, $preg)) {

    foreach($arResult["PROPERTIES"]["SLIDER"]['VALUE'] as $k => $l){
        if($k == 0){
            $bufer = $l;
        }

        if(stristr($l, 'photo1')){
            $arResult["PROPERTIES"]["SLIDER"]['VALUE'][0] = $arResult["PROPERTIES"]["SLIDER"]['VALUE'][$k];
            $arResult["PROPERTIES"]["SLIDER"]['VALUE'][$k] = $bufer;
        }
    }

}
