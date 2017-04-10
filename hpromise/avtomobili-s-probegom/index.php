<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
    <html>
    <head>
        <?
        $APPLICATION->SetTitle("prb");
        ?>
        <?$APPLICATION->ShowHead();?>

        <script src="/media/js_new/device.min.js"></script>

        <link rel="shortcut icon" href="/media/img/Favicon_02.ico"/>

        <!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->


        <link href="/hpromise/css/common.css" rel="stylesheet" />




        <script src="/bitrix/templates/ringauto/js/jquerymin.js"></script>





        <link href="/hpromise/css/design.css" rel="stylesheet">

    </head>


<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div class="design">
        <div class="wrapper">



            <div class="head-section base__section">

                <header class="header">
                    <div class="header__inner">

                        <div class="header__menu">
                            <a href="/" class="header__logo"></a><nav class="header__nav js-head-nav">
                                <i class="head-nav-icon js-head-nav-icon icon">
                                    <svg class="icon__cnt"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ei-navicon-icon"></use></svg>
                                </i>

                                <ul class="head-nav-list">

                                    <li class="head-nav-list__item  -active">
                                        <a class="head-nav-list__link" href="/hpromise/about">
                                            H-Promise        </a>
                                    </li>

                                    <li class="head-nav-list__item  -active">
                                        <a class="head-nav-list__link" href="/hpromise/trade-in">
                                            Программа лояльности        </a>
                                    </li>


                                    <li class="head-nav-list__item ">
                                        <a class="head-nav-list__link" href="/hpromise/avtomobili-s-probegom">
                                            Автомобили с пробегом        </a>
                                    </li>



                                </ul>
                            </nav>
                            <div class="header__contacts">
                                <div class="head-phone">+7 473 261-7777</div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>

            <div class="content-section base__section">
                <!--Убираем
                                Убираем-->
                <div class="content">
                    <div class="base__inner content__title">
                        <h1>Сертифицированные автомобили с пробегом</h1>
                    </div>








                    <div class="base__inner distinctive__block">
                        <h2>Преимущества</h2>
                        <div class="content-prem">
                            <div class="content-prem__single check">Комплексная проверка по 100 пунктам</div>
                            <div class="content-prem__single oil">Предпродажная подготовка</div>
                            <div class="content-prem__single prise">1 год гарантии</div>
                            <div class="content-prem__single maz">1 год помощи на дороге</div>
                            <div class="content-prem__single calc">Спецпрограммы кредитования и страхования</div>
                            <div class="content-prem__single intrade">Трейд-ин</div>
                        </div>
                        <div style="clear: both;"></div>
                        <p>&nbsp;</p>
                        <p>Для вашего спокойствия на каждый автомобиль предоставляется 1 год гарантии* и 1 год «Помощи на дороге»**.</p>
                        <p>Для покупателей сертифицированных автомобилей с пробегом H-Promise действуют специальные условия по кредитованию и страхованию.</p>
                        <p>Вы также можете воспользоваться услугой ТРЕЙД-ИН и сдать в зачет стоимости приобретаемого автомобиля бывший в употреблении автомобиль любой марки.</p>
                        <div class="logo__blockh"></div>
                    </div>
                    <div class="base__inner">
                        <p class="footnote">* с момента покупки автомобиля при условии отсутствия гарантии производителя<br>
                            ** с момента покупки автомобиля</p>
                        <h2 class="shareh">Критерии отбора автомобилей
                            <div class="sharehd sharehdm1 js-sharehdm1" style="display: none;">-</div>
                            <div class="sharehd sharehdp1 js-sharehdp1" style="display: block;">+</div>
                        </h2>
                    </div>
                    <div class="base__inner distinctive__block js-sharehhid1" style="display: none;">
                        <p>Все автомобили Hyundai с пробегом, сертифицированные по программе H-Promise, тщательно отбираются нашими специалистами и соответсвуют следующим критериям:</p>
                        <ul>
                            <li>Максимальный возвраст - 4 года, максимальный пробег - 130 000 км;</li>
                            <li>Отсутствуют следы ремонта силовой структуры кузова и срабатывания подушек безопасности;</li>
                            <li>Реальный пробег соответствует показаниям одометра на панели приборов;</li>
                            <li>Комплексная техническая проверка по 100 пунктам подтверждает отличное техническое состояние автомобиля;</li>
                            <li>При необходимости ремонта используются оригинальные запчасти, спецоборудование и обученный персонал;</li>
                            <li>Каждый автомобиль сопровождает сертификат, подтверждающий качество и соответствие условиям программы;</li>
                            <li>Проводится проверка юридической чистоты каждого автомобиля.</li>
                        </ul>
                        <div class="logo__blockh"></div>
                    </div>



                    <div class="bx_sitemap"></div>



                    <div class="base__inner">
                        <div class="search-results" id="search-results">

                            <div class="search-results__head">

                                <h2>
                                    Автомобили в наличии
                                </h2>
                                <div class="car-list js-adaptive-table">


                                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "auto-mileage", Array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                        "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                                        "AJAX_MODE" => "N",	// Включить режим AJAX
                                        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                        "CACHE_TYPE" => "A",	// Тип кеширования
                                        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                        "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                                        "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                                        "DISPLAY_NAME" => "Y",	// Выводить название элемента
                                        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                                        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                                        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                        "FIELD_CODE" => array(	// Поля
                                            0 => "",
                                            1 => "",
                                        ),
                                        "FILTER_NAME" => "",	// Фильтр
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                        "IBLOCK_ID" => "16",	// Код информационного блока
                                        "IBLOCK_TYPE" => "products",	// Тип информационного блока (используется только для проверки)
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                                        "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                                        "NEWS_COUNT" => "100",	// Количество новостей на странице
                                        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                        "PAGER_TITLE" => "Новости",	// Название категорий
                                        "PARENT_SECTION" => "",	// ID раздела
                                        "PARENT_SECTION_CODE" => "",	// Код раздела
                                        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                        "PROPERTY_CODE" => array(	// Свойства
                                            0 => "",
                                            1 => "META_DESCRIPTION",
                                            2 => "META_KEYWORDS",
                                            3 => "META_TITLE",
                                            4 => "SAT_SEO_TEXT",
                                            5 => "VIN",
                                            6 => "DOP",
                                            7 => "SPEED_TIME",
                                            8 => "SELECTION_PRICE",
                                            9 => "EMISSION",
                                            10 => "PROFIT",
                                            11 => "ENGINE",
                                            12 => "SEATS",
                                            13 => "GEAR",
                                            14 => "EQUIPMENT",
                                            15 => "MAX_WEIGHT",
                                            16 => "MAX_SPEED",
                                            17 => "MAXIMUM_TORQUE",
                                            18 => "FULL_WEIGHT",
                                            19 => "POWER",
                                            20 => "NAME_SHORT",
                                            21 => "NAME_DROM",
                                            22 => "PACK_NAME",
                                            23 => "AVITO_MIN_DESC",
                                            24 => "DESCRIDTION_AVITO_XML",
                                            25 => "CHAR",
                                            26 => "REMAINING",
                                            27 => "OPTIONS",
                                            28 => "GRAR_TYPE",
                                            29 => "MILEAGE",
                                            30 => "CAPACITY",
                                            31 => "ADD_FOR_AVITO_OFFER",
                                            32 => "CONSUMPTION",
                                            33 => "DISCOUNT",
                                            34 => "PACK_ITEMS",
                                            35 => "SERVICE",
                                            36 => "LINK1",
                                            37 => "LINK2",
                                            38 => "STANDART",
                                            39 => "PRICE_COMPLECTATION",
                                            40 => "PRICE_DOP",
                                            41 => "PRICE_OPTIONS",
                                            42 => "FUEL_TYPE",
                                            43 => "TRANSMISS",
                                            44 => "TRANSMISS_TOORBO",
                                            45 => "FON_IMAGES_SLIDER",
                                            46 => "COLOR",
                                            47 => "COLOR_DROM",
                                            48 => "NEW_PRICE",
                                            49 => "PACK_PRICE",
                                            50 => "PRICE_ALL",
                                            51 => "OLD_PRICE",
                                            52 => "YEAR",
                                            53 => "",
                                        ),
                                        "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                                        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                        "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                                        "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                                        "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                        "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                                        "SHOW_404" => "N",	// Показ специальной страницы
                                        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                    ),
                                        false
                                    );?>





                                    <p class="footnote2" style="font-size: 1.2em;"></p>

                                </div>
                            </div>
                            <div class="base__inner">
                                <p class="footnote2">Данный раздел является информационным. Узнавайте информацию о наличии автомобилей, размещенных на сайте, у дилеров H-Promise.</p>
                            </div>



                        </div>
                    </div>
                    <div class="main-section base__section">
                    </div>
                </div>

            </div>
            <div class="hidden-form js-hidden-form hide-this" style="display: none">
                <!-- forms here -->
                <div class="js-car-order-form"></div>
                <div class="js-car-question-form"></div>
                <div class="js-car-testdrive-form"></div>
            </div>
            <div class="hidden-counters hide-this" style="display: none">
                <!-- counters here -->
                <!-- Yandex.Metrika counter -->
            </div>

        </div>
    </div>

    <script>
        $(function(){
            //show.hide button
            //$('.js-sharehdp1').hide();
            $('.js-sharehdm1').click(function() {
                $('.js-sharehhid1').slideUp(500);
                $('.js-sharehdm1').hide(0);

                //$('.js-sharehdp1').slideDown(300);
                $('.js-sharehdp1').show(0);
            });
            $('.js-sharehdp1').click(function() {
                $('.js-sharehhid1').slideDown(500);
                $('.js-sharehdp1').hide(0);

                //$('.js-sharehdm1').slideDown(300);
                $('.js-sharehdm1').show(0);
            });
        });
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>