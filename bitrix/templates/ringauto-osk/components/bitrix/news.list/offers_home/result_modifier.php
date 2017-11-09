<?php

foreach($arResult["ITEMS"] as $key => $arItem) {
	
	

    if(stristr($arItem['PROPERTIES']['folder_id']['VALUE'], '(', true)){
        $arResult["ITEMS"][$key]['PROPERTIES']['folder_id']['VALUE'] = stristr($arItem['PROPERTIES']['folder_id']['VALUE'], '(', true);
    }else{
        $arResult["ITEMS"][$key]['PROPERTIES']['folder_id']['VALUE'] = $arItem['PROPERTIES']['folder_id']['VALUE'];
    }


    if(empty($arItem['PROPERTIES']['SLIDER']['VALUE'])){
        unset($arResult["ITEMS"][$key]);
    }



	

}

