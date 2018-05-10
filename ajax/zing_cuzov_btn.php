<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");




$PROP = array();
$PROP['EMAIL'] = $_POST['email'];
$PROP[128] = $_POST['birthdate'];
$PROP['FIRST_NAME'] = $_POST['first_name'];
$PROP['PHONE'] = $_POST['mobile'];
$PROP['MIDDLE_NAME'] = $_POST['last_name'];

if(CModule::IncludeModule("iblock")) {

    $el = new CIBlockElement;
    $arLoadProductArray = Array(
        "IBLOCK_SECTION_ID" => false,
        "IBLOCK_ID" => 41,
        "NAME" => $_POST['first_name'],
        "ACTIVE" => "Y",
        'PROPERTY_VALUES' => $PROP
    );
    $PRODUCT_ID = $el->Add($arLoadProductArray);

    $arEventFields = array(
        "EMAIL_USER" => $_POST['email'],
        "BIRTH_USER" => $_POST['birthdate'],
        "FIRST_USER" => $_POST['first_name'],
        "LAST_USER" => $_POST['last_name'],
        "PHONE_USER" => $_POST['mobile'],
        "MIDDLE_USER" => $_POST['middle_name'],
        "URL_MESSAGE" => $_POST['now_url']
    );
    CEvent::Send("FEEDBACK_CUZOV_IT", SITE_ID, $arEventFields);

    if($PRODUCT_ID){
        print 'ok';
    }
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");