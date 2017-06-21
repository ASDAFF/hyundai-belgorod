<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if(empty($_GET['tel'])){
    return false;
}
if(empty($_GET['email'])){
    return false;
}


$arEventFields = array(
    "PHONE" => $_GET['tel'],
    "EMAIL" => $_GET['email']
);
$ok = CEvent::Send("FEEDBACK_LENDING", SITE_ID, $arEventFields);
var_dump($ok);
if($ok){
    return print true;
}





function checkEmail($email) {
    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
    {
        return true;
    }
    return false;
}