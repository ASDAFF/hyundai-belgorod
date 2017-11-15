<?php


$arSelect = Array("ID", "IBLOCK_ID", "NAME");
foreach($arResult['arrProp'] as $props){
    $arSelect[] = "PROPERTY_".$props['CODE'];
}

$arFilter = Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
    $arProps = $ob->GetFields();

    foreach($arResult['arrProp'] as $key => $props){
        $code = str_replace('&nbsp;','',htmlentities($arProps["PROPERTY_".$props['CODE']."_VALUE"]));
        $arResult['VALUE'][$props['CODE']][$code] = (is_numeric($code)) ? (int)$code : $arProps["PROPERTY_".$props['CODE']."_VALUE"];
    }
}

//var_dump($arResult['VALUE']);
//var_dump(min($arResult['VALUE']['MILEAGE']));

