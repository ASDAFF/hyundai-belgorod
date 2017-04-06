<?php
$vin = trim(strtolower($_REQUEST['vin']));

$handle = fopen($_SERVER['DOCUMENT_ROOT'] . "/media/service/vin.csv", "r");

$f = true;
while($row = fgetcsv($handle, 0, ';'))
{
    if($f)
    {
        $f = false;
        continue;
    }

    if(strtolower($row[1]) == $vin)
    {
        echo 'Y';
        exit;
    }
}

echo 'N';