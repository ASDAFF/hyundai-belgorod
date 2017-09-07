<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock")):


    $result = CIBlockElement::GetList
    (
        array("ID"=>"ASC"),
        array
        (
            'IBLOCK_ID' => 24,
            'SECTION_ID' => 0,
            'INCLUDE_SUBSECTIONS' => 'N'
        )
    );
    while($element = $result->Fetch()){
        CIBlockElement::Delete($element['ID']);
    }



    $xml = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/lipetsk/used_car.xml',true);
    $files = scandir($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/lipetsk/used');

    $xml = new SimpleXMLElement($xml);
    $arPropsNo = array();
    $not_vin = array();
    foreach($xml->ContractList->Contract as $cont){

        $el = new CIBlockElement;

        /*

        Нет полей авто с пробегом - used_car
        IsNew
        fuel_consumption
        TransmissionCount
        ColorOrig
        SpecName
        SpecId
        OLD_PRICE
        OPTION_SUMM
        OPTION_EQU
        DEFAULT_COMPLIT
        CREDIT
        ---
        Comment

          */


        $PROP = array();
        $PROP['vin'] = (string)$cont->VIN;
        $PROP['MARK'] = (string)$cont->MARK;
        $PROP['MODEL'] = (string)$cont->MODEL;
        $PROP['CAPACITY'] = (string)$cont->CAPACITY;
        $PROP['POWER'] = (string)$cont->POWER;
        $PROP['GRAR_TYPE'] = (string)$cont->GRAR_TYPE;
        $PROP['FUEL_TYPE'] = (string)$cont->FUEL_TYPE;
        $PROP['TRANSMISS'] = (string)$cont->TRANSMISS;
        $PROP['COLOR'] = (string)$cont->ColorOrig;
        $PROP['color_code'] = (string)$cont->ColorCode;
        $PROP['description'] = (string)$cont->Description;
        $PROP['NEW_PRICE'] = (string)$cont->NEW_PRICE;
        $PROP['CUZOV'] = (string)$cont->CUZOV;
        $PROP['MILEAGE'] = (string)$cont->run;
        $PROP['YEAR'] = (string)$cont->year;


        if (in_array((string)$cont->VIN, $files)) {
            $dir_img = array_diff( scandir($_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/lipetsk/used/'.(string)$cont->VIN),array('.','..'));
            foreach($dir_img as $img){
                $img_path = $_SERVER['DOCUMENT_ROOT'].'/XML_upload_for_1c/lipetsk/used/'.(string)$cont->VIN.'/'.$img;
                if(getimagesize($img_path)[0] > 600) {
                    resize($img_path, 550);
                }
                $PROP['SLIDER'][] = '/XML_upload_for_1c/lipetsk/used/'.(string)$cont->VIN.'/'.$img;
            }
            //var_dump('ok');
        }else{
            $not_vin[] = (string)$cont->VIN;
        }

        if((string)$cont->MARK == 'Hyundai'){
            $active = 'Y';
        }else{
            $active = 'N';
        }

        $PROP['STREET'] = (string)$cont->STREET;
        $PROP['PHONE'] = (string)$cont->number;


        if(strlen((string)$cont->Description) < 1 OR (string)$cont->Description == "0"){$arPropsNo[(string)$cont->VIN][] = 'description (Описание)';}
        if(strlen((string)$cont->POWER) < 1 OR (string)$cont->POWER == "0"){$arPropsNo[(string)$cont->VIN][] = 'POWER (мощность двигателя)';}
        if(strlen((string)$cont->FUEL_TYPE) < 1 OR (string)$cont->FUEL_TYPE == "0"){$arPropsNo[(string)$cont->VIN][] = 'FUEL_TYPE (тип двигателя )';}
        if(strlen((string)$cont->GRAR_TYPE) < 1 OR (string)$cont->GRAR_TYPE == "0"){$arPropsNo[(string)$cont->VIN][] = 'GRAR_TYPE (Тип привода)'; $PROP['GRAR_TYPE'] = 'NaN';}
        if(strlen((string)$cont->year) < 1 OR (string)$cont->year == "0"){$arPropsNo[(string)$cont->VIN][] = 'YEAR (Год выпуска)';}
        // if(strlen((string)$cont->TransmissionCount) < 1 OR (string)$cont->TransmissionCount == "0"){$arPropsNo[(string)$cont->VIN][] = 'TransmissionCount (кол-во передач)'; $PROP['TransmissionCount'] = 'NaN';}
        if(strlen((string)$cont->MARK) < 1 OR (string)$cont->MARK == "0"){$arPropsNo[(string)$cont->VIN][] = 'MARK (Наименование марки)';}
        if(strlen((string)$cont->MODEL) < 1 OR (string)$cont->MODEL == "0"){$arPropsNo[(string)$cont->VIN][] = 'MODEL (Наименование модели)';}
        if(strlen((string)$cont->CAPACITY) < 1 OR (string)$cont->CAPACITY == "0"){$arPropsNo[(string)$cont->VIN][] = 'CAPACITY (Объем двигателя)';}
        if(strlen((string)$cont->TRANSMISS) < 1 OR (string)$cont->TRANSMISS == "0"){$arPropsNo[(string)$cont->VIN][] = 'TRANSMISS (Трансмиссия)';}
        if(strlen((string)$cont->ColorOrig) < 1 OR (string)$cont->ColorOrig == "0"){$arPropsNo[(string)$cont->VIN][] = 'COLOR (Цвет автомобиля)';}
        if(strlen((string)$cont->ColorCode) < 1 OR (string)$cont->ColorCode == "0"){$arPropsNo[(string)$cont->VIN][] = 'color_code (Код цвета автомобиля по каталогу производителя)';}
        // if(strlen((string)$cont->SpecId) < 1 OR (string)$cont->SpecId == "0"){$arPropsNo[(string)$cont->VIN][] = 'SpecId (Специальный ID)'; $PROP['SpecId'] = 'NaN';}
        if(strlen((string)$cont->CUZOV) < 1 OR (string)$cont->CUZOV == "0"){$arPropsNo[(string)$cont->VIN][] = 'CUZOV (Кузов)';}
        if(strlen((string)$cont->STREET) < 1 OR (string)$cont->STREET == "0"){$arPropsNo[(string)$cont->VIN][] = 'STREET (Улица)';}
        if(strlen((string)$cont->number) < 1 OR (string)$cont->number == "0"){$arPropsNo[(string)$cont->VIN][] = 'PHONE (Телефон)';}
        //  if(strlen((string)$cont->OLD_PRICE) < 1 OR (string)$cont->OLD_PRICE == "0"){$arPropsNo[(string)$cont->VIN][] = 'OLD_PRICE (Старая цена)'; $PROP['OLD_PRICE'] = 'NaN';}
        if(strlen((string)$cont->NEW_PRICE) < 1 OR (string)$cont->NEW_PRICE == "0"){$arPropsNo[(string)$cont->VIN][] = 'NEW_PRICE (Цена продажи)';}
        //   if(strlen((string)$cont->CREDIT) < 1 OR (string)$cont->CREDIT == "0"){$arPropsNo[(string)$cont->VIN][] = 'CREDIT (Скидка)'; $PROP['CREDIT'] = 'NaN';}
        //   if(strlen((string)$cont->DEFAULT_COMPLIT->value[0]) < 1 OR (string)$cont->DEFAULT_COMPLIT->value[0] == "0"){$arPropsNo[(string)$cont->VIN][] = 'DEFAULT_COMPLIT (Стандартная комплектация)'; $PROP['DEFAULT_COMPLIT'][] = 'NaN';}


        $arLoadProductArray = Array(
            "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
            "IBLOCK_ID"      => 24,
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

    $string = '';
    foreach($arPropsNo as $k => $v){
        $string .= '<br>vin: '.$k.'<br>';
        $string .= implode("<br>", $v).'<br>';
        $string .= '-----------------';
    }
    $xmlAll = 'Поступило в выгрузку: '.count($xml->ContractList->Contract);
    $addAdmin = 'Попало в админку: '.count($xml->ContractList->Contract);
    $noCorrectAdmin = 'Из них некорректно оформлены свойства: '.count($arPropsNo);
    $noCorrectAdminPhoto = 'Из них некорректно оформлены фото: '.count($not_vin);


    $message = $xmlAll.'<br>'.$addAdmin.'<br>'.$noCorrectAdmin.'<br>'.$noCorrectAdminPhoto.'<br>---<br>'.$string.' <br>*********************<br>Нет фото VIN: <br> '.implode("<br>", $not_vin);


    print $message;

    $arEventFields = array(
        "MESSAGE" => $message,
    );
  $ok =  CEvent::Send("B_LP_AUTO", SITE_ID, $arEventFields);


endif;