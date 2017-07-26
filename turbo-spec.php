<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<data>';
$xml .= '<cars>';

if(CModule::IncludeModule("iblock")):

    $arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array(
        "IBLOCK_ID" => 8,
        "PROPERTY_POWER" => "%",
        "PROPERTY_FUEL_TYPE" => "%",
        "PROPERTY_GRAR_TYPE" => "%",
        "PROPERTY_year" => "%",
        "PROPERTY_TransmissionCount" => "%",
        "PROPERTY_mark_id" => "%",
        "PROPERTY_folder_id" => "%",
        "PROPERTY_CAPACITY" => "%",
        "PROPERTY_TRANSMISS" => "%",
        "PROPERTY_color" => "%",
        "PROPERTY_color_code" => "%",
        "PROPERTY_SpecId" => "%",
        "PROPERTY_CUZOV" => "%",
        "PROPERTY_STREET" => "%",
        "PROPERTY_number" => "%",
        "PROPERTY_OLD_PRICE" => "%",
        "PROPERTY_NEW_PRICE" => "%",
        "PROPERTY_CREDIT" => "%",
        "PROPERTY_DEFAULT_COMPLIT" => "%",
        "PROPERTY_SLIDER" => "%",
     //   "PROPERTY_Description" => "%",
    );
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    var_dump($res->result->num_rows);
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
        $xml .= '<Description>'.$arResult['Description']['VALUE'].'</Description>';


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
            if(!preg_match('/preview/',$v,$preg)){
                $xml .= '<VALUE>'.htmlspecialchars((string)$_SERVER['SERVER_NAME'].$v).'</VALUE>';
            }

        }
        $xml .= '</SLIDER>';


        $xml .= '</car>';



    }
endif;


$xml .= '</cars>';
$xml .= '</data>';


//echo $xml;

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/turbo-spec.xml', $xml);
	
	
