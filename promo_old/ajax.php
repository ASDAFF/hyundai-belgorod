<?php


if(empty($_GET['tel'])){
    return false;
}
if(empty($_GET['email'])){
    return false;
}



//Кому отправить
$to = '1с@hyundai-ringauto.ru, administrator@hyundai-ringauto.ru, sv@prime-ltd.su';

// тема письма
$subject = 'Ring Auto';

// текст письма
$message = '
<html>
<head>
  <title>Заявка со страницы Крета Ring Auto</title>
</head>
<body>

  <p>Телефон: '.$_GET['tel'].'</p>
  <p>ФИО: '.$_GET['email'].'</p>

</body>
</html>
';

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers = 'Content-type: text/html; charset=utf-8' . "\r\n";

// Отправляем
$mail = mail($to, $subject, $message, $headers);
if($mail){
    return print true;
}


function checkEmail($email) {
    if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
    {
        return true;
    }
    return false;
}