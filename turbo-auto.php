<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<data>';
$xml .= '<cars>';

if(CModule::IncludeModule("iblock")):

    $arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array(
        "IBLOCK_ID" => 16,
        "PROPERTY_MARK" => "%",
        "PROPERTY_MODEL" => "%",
        "PROPERTY_CAPACITY" => "%",
        "PROPERTY_POWER" => "%",
        "PROPERTY_GRAR_TYPE" => "%",
        "PROPERTY_FUEL_TYPE" => "%",
        "PROPERTY_TRANSMISS" => "%",
        "PROPERTY_COLOR" => "%",
        "PROPERTY_color_code" => "%",
        "PROPERTY_description" => "%",
        "PROPERTY_NEW_PRICE" => "%",
        "PROPERTY_CUZOV" => "%",
        "PROPERTY_MILEAGE" => "%",
        "PROPERTY_YEAR" => "%",
        "PROPERTY_SLIDER" => "%",
        "PROPERTY_STREET" => "%",
        "PROPERTY_PHONE" => "%"
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
            $xml .= '<MARK>'.$arResult['MARK']['VALUE'].'</MARK>';
            $xml .= '<MODEL>'.$arResult['MODEL']['VALUE'].'</MODEL>';
            $xml .= '<CAPACITY>'.$arResult['CAPACITY']['VALUE'].'</CAPACITY>';
            $xml .= '<POWER>'.$arResult['POWER']['VALUE'].'</POWER>';
            $xml .= '<GRAR_TYPE>'.$arResult['GRAR_TYPE']['VALUE'].'</GRAR_TYPE>';
            $xml .= '<FUEL_TYPE>'.$arResult['FUEL_TYPE']['VALUE'].'</FUEL_TYPE>';
            $xml .= '<TRANSMISS>'.$arResult['TRANSMISS']['VALUE'].'</TRANSMISS>';
            $xml .= '<COLOR>'.$arResult['COLOR']['VALUE'].'</COLOR>';
            $xml .= '<color_code>'.$arResult['color_code']['VALUE'].'</color_code>';
            $xml .= '<Description>'.$arResult['description']['VALUE'].'</Description>';
            $xml .= '<NEW_PRICE>'.$arResult['NEW_PRICE']['VALUE'].'</NEW_PRICE>';
            $xml .= '<CUZOV>'.$arResult['CUZOV']['VALUE'].'</CUZOV>';
            $xml .= '<run>'.$arResult['MILEAGE']['VALUE'].'</run>';
            $xml .= '<year>'.$arResult['YEAR']['VALUE'].'</year>';

            $xml .= '<SLIDER>';
                foreach($arResult['SLIDER']['VALUE'] as $v){
                    $xml .= '<VALUE>'.htmlspecialchars((string)$_SERVER['SERVER_NAME'].$v).'</VALUE>';
                }
            $xml .= '</SLIDER>';

        $xml .= '<STREET>'.$arResult['STREET']['VALUE'].'</STREET>';
        $xml .= '<PHONE>'.$arResult['PHONE']['VALUE'].'</PHONE>';



        $xml .= '</car>';



    }
endif;


$xml .= '</cars>';
$xml .= '</data>';


//echo $xml;

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/turbo-auto.xml', $xml);
	
	
