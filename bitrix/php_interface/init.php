<?php


function price_to_url($url){
    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => 7, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $price = $arProps['PRICE']['VALUE'];
        }
    }

    return print $price;

}