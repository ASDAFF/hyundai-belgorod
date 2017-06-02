<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock")):


    $result = CIBlockElement::GetList
    (
        array("ID"=>"ASC"),
        array
        (
            'IBLOCK_ID' => 8,
            'SECTION_ID' => 0,
            'INCLUDE_SUBSECTIONS' => 'N'
        )
    );
    while($element = $result->Fetch()){
        CIBlockElement::Delete($element['ID']);
    }



$xml = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/new_car.xml',true);


$xml = new SimpleXMLElement($xml);
foreach($xml->ContractList->Contract as $cont){

    $el = new CIBlockElement;

    $PROP = array();
    $PROP['vin'] = (string)$cont->VIN;
    $PROP['mark_id'] = (string)$cont->MARK;
    $PROP['folder_id'] = (string)$cont->MODEL;
  //  $PROP['folder_id'] = (string)$cont->IsNew;
  //  $PROP['folder_id'] = (string)$cont->CAPACITY;
  //  $PROP['folder_id'] = (string)$cont->POWER;
  //  $PROP['folder_id'] = (string)$cont->fuel_consumption;
 //   $PROP['folder_id'] = (string)$cont->FUEL_TYPE;
  //  $PROP['folder_id'] = (string)$cont->TRANSMISS;
  //  $PROP['folder_id'] = (string)$cont->TransmissionCount;
    $PROP['color'] = (string)$cont->Color;
    $PROP['color_code'] = (string)$cont->ColorCode;
 //   $PROP['folder_id'] = (string)$cont->SpecName;
    $PROP['SpecId'] = (string)$cont->SpecId;
 //   $PROP['folder_id'] = (string)$cont->Description;
 //   $PROP['folder_id'] = (string)$cont->OPTION_SUMM;

    foreach($cont->OPTION_EQU->value as $equ){
        $PROP['OPTION_EQU'][] = (string)$equ;
    }
    foreach($cont->DEFAULT_COMPLIT->value as $com){
        $PROP['DEFAULT_COMPLIT'][] = (string)$com;
    }

    $PROP['OLD_PRICE'] = (string)$cont->OLD_PRICE;
    $PROP['NEW_PRICE'] = (string)$cont->NEW_PRICE;
    $PROP['CREDIT'] = (string)$cont->CREDIT;
  //  $PROP['SLIDER'] = (string)$cont->SLIDER;

    $dir = array_diff( scandir($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/new/'),array('.','..'));
    foreach($dir as $d){
        $spec = explode('.',$d);
        $specId = explode('+',$spec[1]);

        if (in_array((string)$cont->SpecId, $specId)) {

            $path = $_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/new/'.$d;
            $dirId = array_diff( scandir($path),array('.','..'));
            foreach($dirId as $c){
                $colorCode = explode('.',$c);
                if($colorCode[0] == (string)$cont->ColorCode){
                    $img = array_diff( scandir($path.'/'.$c),array('.','..'));
                    foreach($img as $i){
                        $PROP['SLIDER'][] = '/XML_upload_for_1c/voronezh/new/'.$d.'/'.$c.'/'.$i;
                    }

                }
            }
        }
    }
    if(!empty($PROP['SLIDER'])){
        print '<a href="/offer/'.(string)$cont->VIN.'/">'.(string)$cont->SpecName.'</a><br>';
    }


    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 8,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => (string)$cont->MARK.' '.(string)$cont->SpecName,
        "CODE"           => translit((string)$cont->VIN),
        "ACTIVE"         => "Y"            // активен
    );




    if($PRODUCT_ID = $el->Add($arLoadProductArray)){
//        echo "New ID: ".$PRODUCT_ID;
    }else{
        echo "Error: ".$el->LAST_ERROR;
    }





}


endif;