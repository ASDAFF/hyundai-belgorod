<?php
$forModelFilter = array();
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

$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=> $arResult['ID'], "ACTIVE"=>"Y","PROPERTY_SLIDER" => "%","!=PROPERTY_folder_id" => array("G80","G90"));
$res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
while($ob = $res->GetNextElement()){
    $arFields = $ob->GetFields();
    $arProps = $ob->GetProperties();

        if ($arProps["SLIDER"]['VALUE'][0]) {
            $forModelFilter[] = $arProps['folder_id']['VALUE'];
        }
}
$arResult['FOR_FILTER'] = array_unique($forModelFilter);