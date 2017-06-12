<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<data>';
$xml .= '<cars>';

if(CModule::IncludeModule("iblock")):

    $arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID" => 16);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
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
            $xml .= '<FUEL_TYPE>'.$arResult['FUEL_TYPE']['VALUE'].'</FUEL_TYPE>';
            $xml .= '<TRANSMISS>'.$arResult['TRANSMISS']['VALUE'].'</TRANSMISS>';
            $xml .= '<COLOR>'.$arResult['COLOR']['VALUE'].'</COLOR>';
            $xml .= '<color_code>'.$arResult['color_code']['VALUE'].'</color_code>';
            $xml .= '<Description>'.$arResult['Description']['VALUE'].'</Description>';
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
	
	
