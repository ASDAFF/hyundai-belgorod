<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");




$PROP = array();
$PROP['FIO'] = $_POST['last_name'];
$PROP['PHONE'] = $_POST['mobile'];
$PROP['QUEST'] = $_POST['first_name'];



if(CModule::IncludeModule("iblock")) {

    $el = new CIBlockElement;
    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => 38,
        "NAME" => $_POST['last_name'],
        "ACTIVE" => "Y",
        'PROPERTY_VALUES' => $PROP
    );
    $PRODUCT_ID = $el->Add($arLoadProductArray);

    $arEventFields = array(
        "FIO" => $_POST['last_name'],
        "PHONE" => $_POST['mobile'],
        "QUEST" => $_POST['first_name'],
        "URL_MESSAGE" => $_POST['now_url']
    );
    CEvent::Send("FEEDBACK", SITE_ID, $arEventFields);

    if($PRODUCT_ID){
        print 'ok';
    }
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");