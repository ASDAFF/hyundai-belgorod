<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$arEventFields = array();
$error = array();
foreach($_POST['data'] as $data){
 if(empty($data['value'])){
     $error[] = $data['name'];
 }else{
     $arEventFields[$data['name']] = $data['value'];
 }
}
if(empty($error)){
    $ok = CEvent::Send("FEEDBACK_LENDING", SITE_ID, $arEventFields);
    if($ok){
        return print true;
    }else{
        return print false;
    }
}else{
    return print json_encode($error);
}

