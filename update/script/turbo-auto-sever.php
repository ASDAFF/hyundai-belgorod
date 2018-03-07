<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<data>';
$xml .= '<cars>';

if(CModule::IncludeModule("iblock")):

    $arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID" => 44);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    var_dump($res->result->num_rows);
    $count = array();
    while($ob = $res->GetNextElement())
    {
        $arError = array();
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        $arResult = array_merge($arFields, $arProps);

        if(empty($arResult['MARK']['VALUE'])){ $arError[] = 'Пустое поле:MARK';}
        if(empty($arResult['MODEL']['VALUE'])){ $arError[] = 'Пустое поле:MODEL';}
        if(empty($arResult['CAPACITY']['VALUE'])){ $arError[] = 'Пустое поле:CAPACITY';}
        if(empty($arResult['POWER']['VALUE'])){ $arError[] = 'Пустое поле:POWER';}
        if(empty($arResult['GRAR_TYPE']['VALUE'])){ $arError[] = 'Пустое поле:GRAR_TYPE';}
        if(empty($arResult['FUEL_TYPE']['VALUE'])){ $arError[] = 'Пустое поле:FUEL_TYPE';}
        if(empty($arResult['TRANSMISS']['VALUE'])){ $arError[] = 'Пустое поле:TRANSMISS';}
        if(empty($arResult['COLOR']['VALUE'])){ $arError[] = 'Пустое поле:COLOR';}
        if(empty($arResult['color_code']['VALUE'])){ $arError[] = 'Пустое поле:color_code';}
        if(empty($arResult['description']['VALUE'])){ $arError[] = 'Пустое поле:description';}
        if(empty($arResult['NEW_PRICE']['VALUE'])){ $arError[] = 'Пустое поле:NEW_PRICE';}
        if(empty($arResult['CUZOV']['VALUE'])){ $arError[] = 'Пустое поле:CUZOV';}
        if(empty($arResult['MILEAGE']['VALUE'])){ $arError[] = 'Пустое поле:MILEAGE';}
        if(empty($arResult['YEAR']['VALUE'])){ $arError[] = 'Пустое поле:YEAR';}
        if(empty($arResult['SLIDER']['VALUE'])){ $arError[] = 'Пустое поле:SLIDER';}
        if(empty($arResult['STREET']['VALUE'])){ $arError[] = 'Пустое поле:STREET';}
        if(empty($arResult['PHONE']['VALUE'])){ $arError[] = 'Пустое поле:PHONE';}

        var_dump($arResult['vin']['VALUE']);
        var_dump($arError);

        if(empty($arError)):
            $count[] = $arResult['vin']['VALUE'];

            $xml .= '<car>';


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

        endif;



    }
endif;


$xml .= '</cars>';
$xml .= '</data>';

var_dump(count($count));
//echo $xml;

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/turbo-auto-sever.xml', $xml);
	
	
