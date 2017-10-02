<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$xml = '<?xml version="1.0" encoding="UTF-8"?>';
$xml .= '<data>';
$xml .= '<cars>';

if(CModule::IncludeModule("iblock")):

    $arSelect = Array("ID", "IBLOCK_ID","NAME","CODE", "DATE_ACTIVE_FROM","PROPERTY_*");
    $arFilter = Array("IBLOCK_ID" => 8);

    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    var_dump($res->result->num_rows);
    $count = array();
    while($ob = $res->GetNextElement())
    {
        $arError = array();
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        $arResult = array_merge($arFields, $arProps);


        if(empty($arResult['POWER']['VALUE'])){ $arError[] = 'Пустое поле:POWER';}
        if(empty($arResult['FUEL_TYPE']['VALUE'])){ $arError[] = 'Пустое поле:FUEL_TYPE';}
        if(empty($arResult['GRAR_TYPE']['VALUE'])){ $arError[] = 'Пустое поле:GRAR_TYPE';}
        if(empty($arResult['year']['VALUE'])){ $arError[] = 'Пустое поле:year';}
        if(empty($arResult['TransmissionCount']['VALUE'])){ $arError[] = 'Пустое поле:TransmissionCount';}
        if(empty($arResult['mark_id']['VALUE'])){ $arError[] = 'Пустое поле:mark_id';}
        if(empty($arResult['folder_id']['VALUE'])){ $arError[] = 'Пустое поле:folder_id';}
        if(empty($arResult['CAPACITY']['VALUE'])){ $arError[] = 'Пустое поле:CAPACITY';}
        if(empty($arResult['TRANSMISS']['VALUE'])){ $arError[] = 'Пустое поле:TRANSMISS';}
        if(empty($arResult['color']['VALUE'])){ $arError[] = 'Пустое поле:color';}
        if(empty($arResult['color_code']['VALUE'])){ $arError[] = 'Пустое поле:color_code';}
        if(empty($arResult['SpecId']['VALUE'])){ $arError[] = 'Пустое поле:SpecId';}
        if(empty($arResult['CUZOV']['VALUE'])){ $arError[] = 'Пустое поле:CUZOV';}
        if(empty($arResult['STREET']['VALUE'])){ $arError[] = 'Пустое поле:STREET';}
        if(empty($arResult['number']['VALUE'])){ $arError[] = 'Пустое поле:number';}
        if(empty($arResult['OLD_PRICE']['VALUE'])){ $arError[] = 'Пустое поле:OLD_PRICE';}
        if(empty($arResult['NEW_PRICE']['VALUE'])){ $arError[] = 'Пустое поле:NEW_PRICE';}
        if(empty($arResult['CREDIT']['VALUE'])){ $arError[] = 'Пустое поле:CREDIT';}
   //     if(empty($arResult['DEFAULT_COMPLIT']['VALUE'])){ $arError[] = 'Пустое поле:DEFAULT_COMPLIT';}
        if(empty($arResult['SLIDER']['VALUE'])){ $arError[] = 'Пустое поле:SLIDER';}
        if(empty($arResult['Description']['VALUE'])){ $arError[] = 'Пустое поле:Description';}

        var_dump($arResult['vin']['VALUE']);
        var_dump($arError);

        if(empty($arError)):
            $count[] = $arResult['vin']['VALUE'];

            $xml .= '<car>';

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
            $xml .= '<Description>'.$arResult['Description']['VALUE'].' '.$arResult['CREDIT']['VALUE'].' руб.</Description>';


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
                    $v = str_replace(".jpg",'_resize.jpg',$v);
                    $xml .= '<VALUE>'.htmlspecialchars((string)$_SERVER['SERVER_NAME'].$v).'</VALUE>';
                }

            }
            $xml .= '</SLIDER>';


            $xml .= '</car>';

        endif;


    }
endif;


$xml .= '</cars>';
$xml .= '</data>';

var_dump(count($count));

//echo $xml;

file_put_contents($_SERVER['DOCUMENT_ROOT'].'/turbo-spec.xml', $xml);
	
	
