<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?$APPLICATION->IncludeComponent("bitrix:news.detail", "promo", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
    "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "N",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],	// Код новости
    "ELEMENT_ID" => "",	// ID новости
    "FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "IBLOCK_ID" => "34",	// Код информационного блока
    "IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
    "IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
    "META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Страница",	// Название категорий
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "H_ONE",
        2 => "ICON_GAS",
        3 => "ICON_PILLOW",
        4 => "ICON_SPEED",
        5 => "ICON_PUZZLE",
        6 => "PRICE",
        7 => "CREDIT",
        8 => "IMG_MARK",
        9 => "SLOGAN",
        10 => "DEFAULT_COMPLIT",
        11 => "MAIN_PLUS",
        12 => "STREET",
        13 => "TABLE",
    ),
    "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
    "SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
    "USE_SHARE" => "N",	// Отображать панель соц. закладок
),
    false
);?>


