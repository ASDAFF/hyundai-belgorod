<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(CModule::IncludeModule("iblock")):


    $result = CIBlockElement::GetList
    (
        array("ID"=>"ASC"),
        array
        (
            'IBLOCK_ID' => 44,
            'SECTION_ID' => 0,
            'INCLUDE_SUBSECTIONS' => 'N'
        )
    );
    while($element = $result->Fetch()){
        CIBlockElement::Delete($element['ID']);
    }


    $files = array();

    $xml = file_get_contents('http://server.gk-ring.ru/hyundai/used_car_voronezh_hyundai_2.xml',true);
    $habrablog = file_get_contents('http://server.gk-ring.ru/hyundai/hyundai_voronezh_used/');
    $document = phpQuery::newDocument($habrablog);

    $hentry = $document->find('td > a');
    foreach ($hentry as $key => $elem) {
        $pq = pq($elem);
        if($key > 0){
            $files[] = str_replace('/','',$pq->text());
        }
    }

    $xml = new SimpleXMLElement($xml);
    $arPropsNo = array();
    $not_vin = array();
    foreach($xml->ContractList->Contract as $cont){

        $el = new CIBlockElement;

        /*

        ��� ����� ���� � �������� - used_car
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
        $PROP['NEW_PRICE'] = str_replace(array('&nbsp;',' '),'',htmlentities((string)$cont->NEW_PRICE));
        $PROP['PRICE_OT_IMPORTERA'] = str_replace(array('&nbsp;',' '),'',htmlentities((string)$cont->price_ot_importera));
        $PROP['CUZOV'] = (string)$cont->CUZOV;
        $PROP['MILEAGE'] = str_replace(array('&nbsp;',' '),'',htmlentities((string)$cont->run));
        $PROP['YEAR'] = str_replace(array('&nbsp;',' '),'',htmlentities((string)$cont->year));

        $dir_img = array();
        if (in_array((string)$cont->VIN, $files)) {

            $dir_img_parse = file_get_contents('http://server.gk-ring.ru/hyundai/hyundai_voronezh_used/'.(string)$cont->VIN.'/');
            $dir_img_doc = phpQuery::newDocument($dir_img_parse);
            $d_img = $dir_img_doc->find('td > a');
            foreach ($d_img as $key => $elem) {
                $pq = pq($elem);
                if($key > 0){
                    $dir_img[] = str_replace('/','',$pq->text());
                }
            }

            foreach($dir_img as $img){
                $PROP['SLIDER'][] = 'http://server.gk-ring.ru/hyundai/hyundai_voronezh_used/'.(string)$cont->VIN.'/'.$img;
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


        if(strlen((string)$cont->Description) < 1 OR (string)$cont->Description == "0"){$arPropsNo[(string)$cont->VIN][] = 'description (��������)';}
        if(strlen((string)$cont->POWER) < 1 OR (string)$cont->POWER == "0"){$arPropsNo[(string)$cont->VIN][] = 'POWER (�������� ���������)';}
        if(strlen((string)$cont->FUEL_TYPE) < 1 OR (string)$cont->FUEL_TYPE == "0"){$arPropsNo[(string)$cont->VIN][] = 'FUEL_TYPE (��� ��������� )';}
        if(strlen((string)$cont->GRAR_TYPE) < 1 OR (string)$cont->GRAR_TYPE == "0"){$arPropsNo[(string)$cont->VIN][] = 'GRAR_TYPE (��� �������)'; $PROP['GRAR_TYPE'] = 'NaN';}
        if(strlen((string)$cont->year) < 1 OR (string)$cont->year == "0"){$arPropsNo[(string)$cont->VIN][] = 'YEAR (��� �������)';}
        // if(strlen((string)$cont->TransmissionCount) < 1 OR (string)$cont->TransmissionCount == "0"){$arPropsNo[(string)$cont->VIN][] = 'TransmissionCount (���-�� �������)'; $PROP['TransmissionCount'] = 'NaN';}
        if(strlen((string)$cont->MARK) < 1 OR (string)$cont->MARK == "0"){$arPropsNo[(string)$cont->VIN][] = 'MARK (������������ �����)';}
        if(strlen((string)$cont->MODEL) < 1 OR (string)$cont->MODEL == "0"){$arPropsNo[(string)$cont->VIN][] = 'MODEL (������������ ������)';}
        if(strlen((string)$cont->CAPACITY) < 1 OR (string)$cont->CAPACITY == "0"){$arPropsNo[(string)$cont->VIN][] = 'CAPACITY (����� ���������)';}
        if(strlen((string)$cont->TRANSMISS) < 1 OR (string)$cont->TRANSMISS == "0"){$arPropsNo[(string)$cont->VIN][] = 'TRANSMISS (�����������)';}
        if(strlen((string)$cont->ColorOrig) < 1 OR (string)$cont->ColorOrig == "0"){$arPropsNo[(string)$cont->VIN][] = 'COLOR (���� ����������)';}
        if(strlen((string)$cont->ColorCode) < 1 OR (string)$cont->ColorCode == "0"){$arPropsNo[(string)$cont->VIN][] = 'color_code (��� ����� ���������� �� �������� �������������)';}
        // if(strlen((string)$cont->SpecId) < 1 OR (string)$cont->SpecId == "0"){$arPropsNo[(string)$cont->VIN][] = 'SpecId (����������� ID)'; $PROP['SpecId'] = 'NaN';}
        if(strlen((string)$cont->CUZOV) < 1 OR (string)$cont->CUZOV == "0"){$arPropsNo[(string)$cont->VIN][] = 'CUZOV (�����)';}
        if(strlen((string)$cont->STREET) < 1 OR (string)$cont->STREET == "0"){$arPropsNo[(string)$cont->VIN][] = 'STREET (�����)';}
        if(strlen((string)$cont->number) < 1 OR (string)$cont->number == "0"){$arPropsNo[(string)$cont->VIN][] = 'PHONE (�������)';}
        //  if(strlen((string)$cont->OLD_PRICE) < 1 OR (string)$cont->OLD_PRICE == "0"){$arPropsNo[(string)$cont->VIN][] = 'OLD_PRICE (������ ����)'; $PROP['OLD_PRICE'] = 'NaN';}
        if(strlen((string)$cont->NEW_PRICE) < 1 OR (string)$cont->NEW_PRICE == "0"){$arPropsNo[(string)$cont->VIN][] = 'NEW_PRICE (���� �������)';}
        if(strlen((string)$cont->price_ot_importera) < 1 OR (string)$cont->price_ot_importera == "0"){$arPropsNo[(string)$cont->VIN][] = 'PRICE_OT_IMPORTERA (���� �� ���������)';}
        //   if(strlen((string)$cont->CREDIT) < 1 OR (string)$cont->CREDIT == "0"){$arPropsNo[(string)$cont->VIN][] = 'CREDIT (������)'; $PROP['CREDIT'] = 'NaN';}
        //   if(strlen((string)$cont->DEFAULT_COMPLIT->value[0]) < 1 OR (string)$cont->DEFAULT_COMPLIT->value[0] == "0"){$arPropsNo[(string)$cont->VIN][] = 'DEFAULT_COMPLIT (����������� ������������)'; $PROP['DEFAULT_COMPLIT'][] = 'NaN';}


        $arLoadProductArray = Array(
            "IBLOCK_SECTION_ID" => false,          // ������� ����� � ����� �������
            "IBLOCK_ID"      => 44,
            "PROPERTY_VALUES"=> $PROP,
            "NAME"           => (string)$cont->MARK.' '.(string)$cont->MODEL,
            "CODE"           => (string)$cont->VIN,
            "ACTIVE"         => $active            // �������
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
    $xmlAll = '��������� � ��������: '.count($xml->ContractList->Contract);
    $addAdmin = '������ � �������: '.count($xml->ContractList->Contract);
    $noCorrectAdmin = '�� ��� ����������� ��������� ��������: '.count($arPropsNo);
    $noCorrectAdminPhoto = '�� ��� ����������� ��������� ����: '.count($not_vin);


    $message = $xmlAll.'<br>'.$addAdmin.'<br>'.$noCorrectAdmin.'<br>'.$noCorrectAdminPhoto.'<br>---<br>'.$string.' <br>*********************<br>��� ���� VIN: <br> '.implode("<br>", $not_vin);

    print $message;

    $arEventFields = array(
        "MESSAGE" => $message,
    );
    CEvent::Send("B_SEVER_AUTO", SITE_ID, $arEventFields);


endif;