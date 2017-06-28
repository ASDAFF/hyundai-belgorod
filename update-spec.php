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
    $arPropsNo = array();
foreach($xml->ContractList->Contract as $key => $cont){

    $el = new CIBlockElement;

    /*
     *
     Нет полей спецпредложения - new_car
    IsNew

    fuel_consumption


    ColorOrig
    SpecName(используеться только в названии)
    Description

    ---
    Comment
      */

    $PROP = array();

//var_dump((string)$cont->FUEL_TYPE);
    $PROP['vin'] = (string)$cont->VIN;
    $PROP['POWER'] = (string)$cont->POWER;
    $PROP['FUEL_TYPE'] = (string)$cont->FUEL_TYPE;
    $PROP['GRAR_TYPE'] = (string)$cont->GRAR_TYPE;
    $PROP['OPTION_SUMM'] = (string)$cont->OPTION_SUMM;
    $PROP['run'] = (string)$cont->run;
    $PROP['year'] = (string)$cont->year;
    $PROP['TransmissionCount'] = (string)$cont->TransmissionCount;
    $PROP['mark_id'] = (string)$cont->MARK;
    $PROP['folder_id'] = (string)$cont->MODEL;
    $PROP['CAPACITY'] = (string)$cont->CAPACITY;
    $PROP['TRANSMISS'] = (string)$cont->TRANSMISS;
    $PROP['color'] = (string)$cont->Color;
    $PROP['color_code'] = (string)$cont->ColorCode;
    $PROP['SpecId'] = (string)$cont->SpecId;
    $PROP['CUZOV'] = (string)$cont->CUZOV;
    $PROP['STREET'] = (string)$cont->STREET;
    $PROP['number'] = (string)$cont->number;


    foreach($cont->OPTION_EQU->value as $equ){
        $PROP['OPTION_EQU'][] = (string)$equ;
    }
    foreach($cont->DEFAULT_COMPLIT->value as $com){
        $PROP['DEFAULT_COMPLIT'][] = (string)$com;
    }

    $PROP['OLD_PRICE'] = (string)$cont->OLD_PRICE;
    $PROP['NEW_PRICE'] = (string)$cont->NEW_PRICE;
    $PROP['CREDIT'] = (string)$cont->CREDIT;






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


    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
    $arFilter = Array("IBLOCK_ID"=>8, "PROPERTY_SpecId" => (string)$cont->SpecId,"PROPERTY_color_code" => (string)$cont->ColorCode,"PROPERTY_NEW_PRICE" => (string)$cont->NEW_PRICE);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if ($arItem = $res->GetNext())
    {
        //var_dump((string)$cont->ColorCode);
    }else{

        if(strlen((string)$cont->POWER) < 1 OR (string)$cont->POWER == "0"){$arPropsNo['POWER'][] = (string)$cont->VIN; $PROP['POWER'] = 'NaN';}
        if(strlen((string)$cont->FUEL_TYPE) < 1 OR (string)$cont->FUEL_TYPE == "0"){$arPropsNo['FUEL_TYPE'][] = (string)$cont->VIN; $PROP['FUEL_TYPE'] = 'NaN';}
        if(strlen((string)$cont->GRAR_TYPE) < 1 OR (string)$cont->GRAR_TYPE == "0"){$arPropsNo['GRAR_TYPE'][] = (string)$cont->VIN; $PROP['GRAR_TYPE'] = 'NaN';}
        if(strlen((string)$cont->OPTION_SUMM) < 1 OR (string)$cont->OPTION_SUMM == "0"){$arPropsNo['OPTION_SUMM'][] = (string)$cont->VIN; $PROP['OPTION_SUMM'] = 'NaN';}
        if(strlen((string)$cont->run) < 1 OR (string)$cont->run == "0"){$arPropsNo['run'][] = (string)$cont->VIN; $PROP['run'] = 'NaN';}
        if(strlen((string)$cont->year) < 1 OR (string)$cont->year == "0"){$arPropsNo['year'][] = (string)$cont->VIN; $PROP['year'] = 'NaN';}
        if(strlen((string)$cont->TransmissionCount) < 1 OR (string)$cont->TransmissionCount == "0"){$arPropsNo['TransmissionCount'][] = (string)$cont->VIN; $PROP['TransmissionCount'] = 'NaN';}
        if(strlen((string)$cont->MARK) < 1 OR (string)$cont->MARK == "0"){$arPropsNo['MARK'][] = (string)$cont->VIN; $PROP['mark_id'] = 'NaN';}
        if(strlen((string)$cont->MODEL) < 1 OR (string)$cont->MODEL == "0"){$arPropsNo['MODEL'][] = (string)$cont->VIN; $PROP['folder_id'] = 'NaN';}
        if(strlen((string)$cont->CAPACITY) < 1 OR (string)$cont->CAPACITY == "0"){$arPropsNo['CAPACITY'][] = (string)$cont->VIN; $PROP['CAPACITY'] = 'NaN';}
        if(strlen((string)$cont->TRANSMISS) < 1 OR (string)$cont->TRANSMISS == "0"){$arPropsNo['TRANSMISS'][] = (string)$cont->VIN; $PROP['TRANSMISS'] = 'NaN';}
        if(strlen((string)$cont->Color) < 1 OR (string)$cont->Color == "0"){$arPropsNo['Color'][] = (string)$cont->VIN; $PROP['color'] = 'NaN';}
        if(strlen((string)$cont->ColorCode) < 1 OR (string)$cont->ColorCode == "0"){$arPropsNo['ColorCode'][] = (string)$cont->VIN; $PROP['color_code'] = 'NaN';}
        if(strlen((string)$cont->SpecId) < 1 OR (string)$cont->SpecId == "0"){$arPropsNo['SpecId'][] = (string)$cont->VIN; $PROP['SpecId'] = 'NaN';}
        if(strlen((string)$cont->CUZOV) < 1 OR (string)$cont->CUZOV == "0"){$arPropsNo['CUZOV'][] = (string)$cont->VIN; $PROP['CUZOV'] = 'NaN';}
        if(strlen((string)$cont->STREET) < 1 OR (string)$cont->STREET == "0"){$arPropsNo['STREET'][] = (string)$cont->VIN; $PROP['STREET'] = 'NaN';}
        if(strlen((string)$cont->number) < 1 OR (string)$cont->number == "0"){$arPropsNo['number'][] = (string)$cont->VIN; $PROP['number'] = 'NaN';}
        if(strlen((string)$cont->OLD_PRICE) < 1 OR (string)$cont->OLD_PRICE == "0"){$arPropsNo['OLD_PRICE'][] = (string)$cont->VIN; $PROP['OLD_PRICE'] = 'NaN';}
        if(strlen((string)$cont->NEW_PRICE) < 1 OR (string)$cont->NEW_PRICE == "0"){$arPropsNo['NEW_PRICE'][] = (string)$cont->VIN; $PROP['NEW_PRICE'] = 'NaN';}
        if(strlen((string)$cont->CREDIT) < 1 OR (string)$cont->CREDIT == "0"){$arPropsNo['CREDIT'][] = (string)$cont->VIN; $PROP['CREDIT'] = 'NaN';}
        if(strlen((string)$cont->OPTION_EQU->value[0]) < 1 OR (string)$cont->OPTION_EQU->value[0] == "0"){$arPropsNo['OPTION_EQU'][] = (string)$cont->VIN; $PROP['OPTION_EQU'][] = 'NaN';}
        if(strlen((string)$cont->DEFAULT_COMPLIT->value[0]) < 1 OR (string)$cont->DEFAULT_COMPLIT->value[0] == "0"){$arPropsNo['DEFAULT_COMPLIT'][] = (string)$cont->VIN; $PROP['DEFAULT_COMPLIT'][] = 'NaN';}






        $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,          // элемент лежит в корне раздела
        "IBLOCK_ID"      => 8,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => (string)$cont->MARK.' '.(string)$cont->MODEL.' '.(string)$cont->SpecName,
        "CODE"           => translit((string)$cont->VIN),
        "ACTIVE"         => "Y"            // активен
        );
	
	


			
				if(!empty($PROP['SLIDER'])){
						//print '<a href="/offer/'.(string)$cont->VIN.'/">'.(string)$cont->SpecName.'</a><br>';
					}else{
						$arNoImg[] = (string)$cont->VIN.' - '.(string)$cont->SpecId.' - '.(string)$cont->ColorCode;
					}

					if($PRODUCT_ID = $el->Add($arLoadProductArray)){
			//        echo "New ID: ".$PRODUCT_ID;
					}else{
						echo "Error: ".$el->LAST_ERROR;
					}
		}



}

    $string = '';
    foreach($arPropsNo as $k => $v){
        $string .= '<span style="color: red">тег xml: '.$k.'<br></span>';
        foreach($arPropsNo[$k] as $vin){
            $string .= $vin.'<br>';
        }
    }

    $adminEmail = COption::GetOptionString('main', 'email_from');

    mail($adminEmail, 'Нет фото в спецпредложениях '.$SERVER_NAME, 'Нет фото VIN - SpecId - ColorCode:<br> '.implode("<br>", $arNoImg).'<br><br><br>'.$string,
        "From: webmaster@$SERVER_NAME\r\n"
        ."Reply-To: webmaster@$SERVER_NAME\r\n"
        ."Content-type: text/html; charset=utf-8\r\n"
        ."X-Mailer: PHP/" . phpversion());


endif;