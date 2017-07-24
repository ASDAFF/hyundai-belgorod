<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");



$PROP = array();
$PROP[216] = $_POST['last_name']; // марка
$PROP[217] = $_POST['first_name']; // фио
$PROP[218] = $_POST['mobile']; //телефон




if(CModule::IncludeModule("iblock")) {

    $el = new CIBlockElement;
    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => 18,
        "NAME" => $_POST['last_name'],
        "ACTIVE" => "Y",
        'PROPERTY_VALUES' => $PROP
    );
    $PRODUCT_ID = $el->Add($arLoadProductArray);

    $arEventFields = array(
        "MARK" => $_POST['last_name'],
        "FIO" => $_POST['first_name'],
        "PHONE" => $_POST['mobile'],
        "URL_MESSAGE" => $_POST['now_url']
    );
    CEvent::Send("FEEDBACK_TESTDRIVE", SITE_ID, $arEventFields);

    if($PRODUCT_ID){
        print 'ok';
    }
}




require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");