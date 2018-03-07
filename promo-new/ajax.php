<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(empty($_GET['tel'])){
    return false;
}

$arEventFields = array(
    "PHONE" => $_GET['tel'],
);
$ok = CEvent::Send("FEEDBACK_LENDING", SITE_ID, $arEventFields);
if($ok){
    return print true;
}



