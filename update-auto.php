<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock")):


    $result = CIBlockElement::GetList
    (
        array("ID"=>"ASC"),
        array
        (
            'IBLOCK_ID' => 16,
            'SECTION_ID' => 0,
            'INCLUDE_SUBSECTIONS' => 'N'
        )
    );
    while($element = $result->Fetch()){
        CIBlockElement::Delete($element['ID']);
    }



    $xml = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/used_car.xml',true);
    $files = scandir($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/used');

    $xml = new SimpleXMLElement($xml);
    foreach($xml->ContractList->Contract as $cont){

        $el = new CIBlockElement;


        $PROP = array();
        $PROP['vin'] = (string)$cont->VIN;
        $PROP['MARK'] = (string)$cont->MARK;
        $PROP['MODEL'] = (string)$cont->MODEL;
        $PROP['CAPACITY'] = (string)$cont->CAPACITY;
        $PROP['POWER'] = (string)$cont->POWER;
        //  $PROP['fuel_consumption'] = (string)$cont->fuel_consumption;
        $PROP['FUEL_TYPE'] = (string)$cont->FUEL_TYPE;
        $PROP['TRANSMISS'] = (string)$cont->TRANSMISS;
        //  $PROP['TransmissionCount'] = (string)$cont->TransmissionCount;
        $PROP['COLOR'] = (string)$cont->Color;
        $PROP['color_code'] = (string)$cont->ColorCode;
        $PROP['Description'] = (string)$cont->Description;
        $PROP['NEW_PRICE'] = (string)$cont->NEW_PRICE;
        //   $PROP['folder_id'] = (string)$cont->SpecId;
        //   $PROP['folder_id'] = (string)$cont->OPTION_SUMM;

        if (in_array((string)$cont->VIN, $files)) {
            $dir_img = array_diff( scandir($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/used/'.(string)$cont->VIN),array('.','..'));
            foreach($dir_img as $img){
                $img_path = $_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/voronezh/used/'.(string)$cont->VIN.'/'.$img;
                if(getimagesize($img_path)[0] > 600) {
                     resize($img_path, 550);
                }
                $PROP['SLIDER'][] = '/XML_upload_for_1c/voronezh/used/'.(string)$cont->VIN.'/'.$img;
            }
            var_dump('ok');
        }else{
            $not_vin[] = (string)$cont->VIN;
        }

        if((string)$cont->MARK == 'Hyundai'){
            $active = 'Y';
        }else{
            $active = 'N';
        }

        $PROP['STREET'] = Array("VALUE" => 55 );
        $PROP['PHONE'] = Array("VALUE" => 57 );


        $arLoadProductArray = Array(
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => 16,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => (string)$cont->MARK.' '.(string)$cont->MODEL,
            "CODE"           => (string)$cont->VIN,
            "ACTIVE"         => $active            // активен
        );




        if($PRODUCT_ID = $el->Add($arLoadProductArray)) {
         //   echo "New ID: " . $PRODUCT_ID;
        }else {
            echo "Error: " . $el->LAST_ERROR;
        }

    }
    $adminEmail = COption::GetOptionString('main', 'email_from');

    mail($adminEmail, $SERVER_NAME, 'Нет директории: '.implode("<br>", $not_vin),
        "From: webmaster@$SERVER_NAME\r\n"
        ."Reply-To: webmaster@$SERVER_NAME\r\n"
        ."Content-type: text/html; charset=utf-8\r\n"
        ."X-Mailer: PHP/" . phpversion());


endif;