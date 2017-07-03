<?php


function price_to_url($url){
    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => 7, "CODE" => $url);
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
        $arFilter = Array("IBLOCK_ID" => 7, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        while ($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $price = $arProps['PROFIT']['VALUE'];
        }
    }

    return print $price;

}

function desc_model_to_url($url){
    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => 7, "CODE" => $url);
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


function resize($image, $w_o = false, $h_o = false) {
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

function offer_filter_auto($url){

    $url = str_replace('/','',$url);
    if(CModule::IncludeModule("iblock")) {
        $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PROPERTY_*");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = Array("IBLOCK_ID" => 7, "CODE" => $url);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
        if($ob = $res->GetNextElement()) {
            $arProps = $ob->GetProperties();
            $offer_models = $arProps['FOR_OFFER']['VALUE'];
        }
        $GLOBALS['offer_filter_auto'] = array("PROPERTY_folder_id" => $offer_models);
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
            "IBLOCK_ID" => "8",
            "IBLOCK_TYPE" => "products",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "160",
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
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
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