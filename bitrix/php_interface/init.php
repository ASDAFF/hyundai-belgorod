<?php
define("IBLOCK_ID_MODEL",36);
define("IBLOCK_ID_OFFER",8);

function price_to_url($url){
    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => IBLOCK_ID_MODEL, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $price = $arProps['PRICE']['VALUE'];
        }
    }

    return print $price;

}

function profit_to_url($url){
    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => IBLOCK_ID_MODEL, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $price = $arProps['PROFIT']['VALUE'];
        }
    }
    if($price){
        return print '<div class="title-price-sale">'.$price.'</div><br>';
    }
}

function desc_model_to_url($url){

    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => IBLOCK_ID_MODEL, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $arResult['DESC_SLIDE'] = $arProps['DESC_SLIDE']['~VALUE'];
            $arResult['IMG_SLIDE'] = $arProps['IMG_SLIDE']['VALUE'];
        }
    }

    return $arResult;

}


function getPropertySection($uf_iblock_id,$uf_section_id,$uf_name = array()){
    if(CModule::IncludeModule("iblock")) {
            $uf_arresult = CIBlockSection::GetList(Array("SORT"=>"asc"), Array("IBLOCK_ID" => $uf_iblock_id, "ID" => $uf_section_id), false, $uf_name);
            if($uf_value = $uf_arresult->GetNext()):
                return $uf_value;
            endif;
    }
}


function translit($str)
{
    $tr = array(
        "А"=>"a","Б"=>"b","В"=>"v","Г"=>"g",
        "Д"=>"d","Е"=>"e","Ж"=>"j","З"=>"z","И"=>"i",
        "Й"=>"y","К"=>"k","Л"=>"l","М"=>"m","Н"=>"n",
        "О"=>"o","П"=>"p","Р"=>"r","С"=>"s","Т"=>"t",
        "У"=>"u","Ф"=>"f","Х"=>"h","Ц"=>"ts","Ч"=>"ch",
        "Ш"=>"sh","Щ"=>"sch","Ъ"=>"","Ы"=>"yi","Ь"=>"",
        "Э"=>"e","Ю"=>"yu","Я"=>"ya","а"=>"a","б"=>"b",
        "в"=>"v","г"=>"g","д"=>"d","е"=>"e","ж"=>"j",
        "з"=>"z","и"=>"i","й"=>"y","к"=>"k","л"=>"l",
        "м"=>"m","н"=>"n","о"=>"o","п"=>"p","р"=>"r",
        "с"=>"s","т"=>"t","у"=>"u","ф"=>"f","х"=>"h",
        "ц"=>"ts","ч"=>"ch","ш"=>"sh","щ"=>"sch","ъ"=>"y",
        "ы"=>"yi","ь"=>"","э"=>"e","ю"=>"yu","я"=>"ya",
        " "=> "-", "."=> "", "/"=> "-"
    );
    return strtr($str,$tr);
}

function crop($image, $x_o, $y_o, $w_o, $h_o,$new_name) {
    if (($x_o < 0) || ($y_o < 0) || ($w_o < 0) || ($h_o < 0)) {
        echo "Некорректные входные параметры";
        return false;
    }
    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
        $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
        $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
        echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
        return false;
    }
    if ($x_o + $w_o > $w_i) $w_o = $w_i - $x_o; // Если ширина выходного изображения больше исходного (с учётом x_o), то уменьшаем её
    if ($y_o + $h_o > $h_i) $h_o = $h_i - $y_o; // Если высота выходного изображения больше исходного (с учётом y_o), то уменьшаем её
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopy($img_o, $img_i, 0, 0, $x_o, $y_o, $w_o, $h_o); // Переносим часть изображения из исходного в выходное
    $func = 'image'.$ext; // Получаем функция для сохранения результата
    if($new_name){
        $image = str_replace(".jpg",$new_name.'.jpg',$image);
    }
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
}




function resize($image, $w_o = false, $h_o = false ) {
    if (($w_o < 0) || ($h_o < 0)) {
        echo "Некорректные входные параметры";
        return false;
    }
    list($w_i, $h_i, $type) = getimagesize($image); // Получаем размеры и тип изображения (число)
    $types = array("", "gif", "jpeg", "png"); // Массив с типами изображений
    $ext = $types[$type]; // Зная "числовой" тип изображения, узнаём название типа
    if ($ext) {
        $func = 'imagecreatefrom'.$ext; // Получаем название функции, соответствующую типу, для создания изображения
        $img_i = $func($image); // Создаём дескриптор для работы с исходным изображением
    } else {
        echo 'Некорректное изображение'; // Выводим ошибку, если формат изображения недопустимый
        return false;
    }
    /* Если указать только 1 параметр, то второй подстроится пропорционально */
    if (!$h_o) $h_o = $w_o / ($w_i / $h_i);
    if (!$w_o) $w_o = $h_o / ($h_i / $w_i);
    $img_o = imagecreatetruecolor($w_o, $h_o); // Создаём дескриптор для выходного изображения
    imagecopyresampled($img_o, $img_i, 0, 0, 0, 0, $w_o, $h_o, $w_i, $h_i); // Переносим изображение из исходного в выходное, масштабируя его
    $func = 'image'.$ext; // Получаем функция для сохранения результата
    return $func($img_o, $image); // Сохраняем изображение в тот же файл, что и исходное, возвращая результат этой операции
}

function resize_for_other_server($filename, $width = false, $height = false ){

    if(exif_imagetype($filename) == 2){

        $car = explode('/',$filename);
        foreach($car as $key => $name){
            if(strstr(strtolower($name), '.jpg', true)){
                $image_name =  strstr(strtolower($name), '.jpg', true);
                $image_name = md5($car[$key-1].'_'.$image_name).'.jpg';
            }
        }

        $root = $_SERVER['DOCUMENT_ROOT'];
        $save_path = '/upload/resize/';
        $dir_size = ceil($width).'x'.ceil($height);

        if (file_exists($root.$save_path.$dir_size.'/'.$image_name)) {

            return $save_path.$dir_size.'/'.$image_name;

        }else{

            list($width_orig, $height_orig) = getimagesize($filename);

            $ratio_orig = $width_orig/$height_orig;

            if ($width/$height > $ratio_orig) {
                $width = $height*$ratio_orig;
            } else {
                $height = $width/$ratio_orig;
            }

        // ресэмплирование
        $image_p = imagecreatetruecolor($width, $height);

        $image = imagecreatefromjpeg($filename);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

            if (mkdir($root.$save_path.$dir_size, 0777, true)) {
                imagejpeg($image_p,$root.$save_path.$dir_size.'/'.$image_name , 70);
                return $filename;
            }else{
                imagejpeg($image_p,$root.$save_path.$dir_size.'/'.$image_name , 70);
                return $filename;
            }
        }
    }else{
        return false;
    }
}

function offers_filter_promo($url){

    $url = str_replace('/','',$url);

    return false;

    if(empty($url))
        $url = false;


    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_FOR_OFFER");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => IBLOCK_ID_MODEL, "=CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->GetNext()) {
            $offer_models = $ob['PROPERTY_FOR_OFFER_VALUE'];
        }

        if(empty($offer_models)){
            $offer_models = $url;
        }

        $GLOBALS['offer_filter_auto'] = array("PROPERTY_folder_id" => trim($offer_models),"PROPERTY_SLIDER" => "%");
        $arOffer = array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "offer_filter_auto",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => IBLOCK_ID_OFFER,
            "IBLOCK_TYPE" => "products",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "25",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "CREDIT",
                1 => "OLD_PRICE",
                2 => "NEW_PRICE",
                4 => "folder_id",
                3 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "offers_home"
        );

        global $APPLICATION;
        $offers = $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "offers_filter_promo",
            $arOffer,
            false
        );


        if (empty($offers)) {
            unset($arOffer['FILTER_NAME']);
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "offers_filter_promo",
                $arOffer,
                false
            );
        }

    }
}


function offer_filter_auto($url){

    $url = str_replace('/','',$url);

    return false;


    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => IBLOCK_ID_MODEL, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $offer_models = $arProps['FOR_OFFER']['VALUE'];
        }
        if(empty($arProps['FOR_OFFER']['VALUE'])){
            $offer_models = $url;
        }

        $GLOBALS['offer_filter_auto'] = array("PROPERTY_folder_id" => trim($offer_models),"PROPERTY_SLIDER" => "%");
        $arOffer = array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "offer_filter_auto",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => IBLOCK_ID_OFFER,
            "IBLOCK_TYPE" => "products",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "25",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "CREDIT",
                1 => "OLD_PRICE",
                2 => "NEW_PRICE",
                4 => "folder_id",
                3 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "offers_home"
        );

        global $APPLICATION;
        $offers = $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "offers_filter_spec",
            $arOffer,
            false
        );


        if (empty($offers)) {
            unset($arOffer['FILTER_NAME']);
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "offers_filter_spec",
                $arOffer,
                false
            );
        }

    }


}


AddEventHandler('iblock', 'OnIBlockPropertyBuildList', array('IdListDoc', 'GetUserTypeDescription')); //построение списка свойств инфоблока
class IdListDoc
{

    function GetUserTypeDescription()
    {
        return array(
            "PROPERTY_TYPE" => "S",
            "USER_TYPE" => "custom_table",
            "DESCRIPTION" => 'Таблицы',
            "GetPropertyFieldHtml" => array("IdListDoc", "GetPropertyFieldHtml"),
            "ConvertToDB" => array("IdListDoc", "ConvertToDB"),
            "ConvertFromDB" => array("IdListDoc", "ConvertFromDB"),
        );
    }

    function GetPropertyFieldHtml($arProperty, $value, $strHTMLControlName)
    {
        $value = $value["VALUE"];
        $field = '';
        for($r = 0;$r < $arProperty['ROW_COUNT'];$r++) {
            $field .= '<div style="display: flex">';
            for ($i = 0; $i < $arProperty['COL_COUNT']; $i++) {
                $field .= '<input type="text" name="' . $strHTMLControlName["VALUE"] . '['.$r.']['.$i.']" value="' . $value[$r][$i] . '">';
            }
            $field .= '</div>';
            $field .= '<hr>';
        }
        return $field;
    }

    function ConvertToDB($arProperty, $value)
    {
        $return = false;
        if(is_array($value)&& array_key_exists("VALUE", $value))
        {
            $arValue = array();
            foreach($value["VALUE"] as $key => $value){
                foreach($value as $k => $val) {
                    $arValue[$key][$k] = htmlspecialchars($val);
                }
            }
            $return = array("VALUE" => serialize($arValue),);
        }
        return $return;
    }

    function ConvertFromDB($arProperty, $value)
    {
        $return = false;
        if(!is_array($value["VALUE"]))
        {
            $return = array("VALUE" => unserialize($value["VALUE"]));
        }
        return $return;
    }

}

function myFormatCurrency($fSum, $strCurrency)
{
    return number_format ( $fSum, 0, '.', ' ' );
}

function getIdModelIb($site){

    switch($site){
        case "s1":
            $model_ib = 7;
            break;

        case "s2":
            $model_ib = 26;
            break;

        case "s3":
            $model_ib = 36;
            break;

        case "s4":
            $model_ib = 45;
            break;
		case "s5":
            $model_ib = 67;
            break;	
    }
    return $model_ib;

}

function getIblockFeedbackOffer($site){

    switch($site){
        case "s1":
            $feed_offer_ib = 9;
            break;

        case "s2":
            $feed_offer_ib = 32;
            break;

        case "s3":
            $feed_offer_ib = 40;
            break;

        case "s4":
            $feed_offer_ib = 50;
            break;
			
		case "s5":
            $feed_offer_ib = 64;
            break;	
    }
    return $feed_offer_ib;

}

function stiker($id,$stiker,$position,$top = '0px',$width = 'none',$model){

	return false;

    $models = array("Solaris","Creta");

    if(in_array($model,$models)){
        $array = array("s1","s2","s4");
        if(in_array($id,$array)){

            $stiker = '
            <div class="stiker" style="position: absolute;z-index: 1000;top: '.$top.';'.$position.':0px;max-width: '.$width.';">
                <img src="/bitrix/images/stiker/'.$stiker.'.png" style="max-width: 100%;">
            </div>
            ';
            return print $stiker;
        }
    }

}

function model_credit($array){

    if(empty($array))
        return false;

    ?>
    <style>
    .blue-block {
    float: left;
    background: #003469;
    color: #fff;
    font-family: HyundaiSansHead;
    padding: 5px 33px;
    margin: 10px auto;
    }

    .blue-block-row:first-of-type {
        border-bottom: 2px solid #fff;
    }
    .blue-block-row {
        padding: 5px 0;
    }
    .blue-block-val {
        font-size: 20px;
        line-height: 28px;
    }
    .blue-block-text {
        font-size: 20px;
        line-height: 28px;
    }
    .blue-block-row {
        padding: 5px 0;
    }
    .blue-block-text {
        font-size: 20px;
        line-height: 28px;
    }
    sup{
        font-size: 9px;
        top: -12px;
        left: 4px;
    }
    </style>

    <div class="blue-block clearfix">
        <div class="blue-block-content">
            <?foreach($array as $str):?>
            <div class="blue-block-row">
                <?if($str['val']):?>
                <span class="blue-block-val"><?=$str['val']?></span>
                <?endif?>
                <?if($str['text']):?>
                <span class="blue-block-text"><?=$str['text']?></span>
                <?endif?>
            </div>
            <?endforeach;?>
        </div>
    </div>
    <br clear="all"/>
    <?

}
