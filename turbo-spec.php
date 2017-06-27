<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<data>';
$xml .= '<cars>';

if(CModule::IncludeModule("iblock")):

    $arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID" => 8);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNextElement())
    {
        $xml .= '<car>';

        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        $arResult = array_merge($arFields, $arProps);



        $xml .= '<vin>'.$arResult['vin']['VALUE'].'</vin>';
        $xml .= '<POWER>'.$arResult['POWER']['VALUE'].'</POWER>';
        $xml .= '<FUEL_TYPE>'.$arResult['FUEL_TYPE']['VALUE'].'</FUEL_TYPE>';
        $xml .= '<GRAR_TYPE>'.$arResult['GRAR_TYPE']['VALUE'].'</GRAR_TYPE>';
        $xml .= '<OPTION_SUMM>'.$arResult['OPTION_SUMM']['VALUE'].'</OPTION_SUMM>';
        $xml .= '<run>'.$arResult['run']['VALUE'].'</run>';
        $xml .= '<year>'.$arResult['year']['VALUE'].'</year>';
        $xml .= '<TransmissionCount>'.$arResult['TransmissionCount']['VALUE'].'</TransmissionCount>';
        $xml .= '<mark_id>'.$arResult['mark_id']['VALUE'].'</mark_id>';
        $xml .= '<folder_id>'.$arResult['folder_id']['VALUE'].'</folder_id>';
        $xml .= '<CAPACITY>'.$arResult['CAPACITY']['VALUE'].'</CAPACITY>';
        $xml .= '<TRANSMISS>'.$arResult['TRANSMISS']['VALUE'].'</TRANSMISS>';
        $xml .= '<color>'.$arResult['color']['VALUE'].'</color>';
        $xml .= '<color_code>'.$arResult['color_code']['VALUE'].'</color_code>';
        $xml .= '<SpecId>'.$arResult['SpecId']['VALUE'].'</SpecId>';
        $xml .= '<CUZOV>'.$arResult['CUZOV']['VALUE'].'</CUZOV>';
        $xml .= '<STREET>'.$arResult['STREET']['VALUE'].'</STREET>';
        $xml .= '<number>'.$arResult['number']['VALUE'].'</number>';


        $xml .= '<OPTION_EQU>';
        foreach($arResult['OPTION_EQU']['VALUE'] as $v){
            $xml .= '<VALUE>'.$v.'</VALUE>';
        }
        $xml .= '</OPTION_EQU>';


        $xml .= '<DEFAULT_COMPLIT>';
        foreach($arResult['DEFAULT_COMPLIT']['VALUE'] as $v){
            $xml .= '<VALUE>'.$v.'</VALUE>';
        }
        $xml .= '</DEFAULT_COMPLIT>';


        $xml .= '<OLD_PRICE>'.$arResult['OLD_PRICE']['VALUE'].'</OLD_PRICE>';
        $xml .= '<NEW_PRICE>'.$arResult['NEW_PRICE']['VALUE'].'</NEW_PRICE>';
        $xml .= '<CREDIT>'.$arResult['CREDIT']['VALUE'].'</CREDIT>';


        $xml .= '<SLIDER>';
        foreach($arResult['SLIDER']['VALUE'] as $v){
            $xml .= '<VALUE>'.htmlspecialchars((string)$_SERVER['SERVER_NAME'].$v).'</VALUE>';
        }
        $xml .= '</SLIDER>';


        $xml .= '</car>';



    }
endif;


$xml .= '</cars>';
$xml .= '</data>';


//echo $xml;

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/turbo-spec.xml', $xml);
	
	
