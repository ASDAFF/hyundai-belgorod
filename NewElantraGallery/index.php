<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Выберите свою ELANTRA");
$APPLICATION->SetTitle("Выберите свою ELANTRA");
?>

    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/config_layout.css">

    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_SF.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/slick/slick.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/slick/slick-theme.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/elantra-2019.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <style>
        #panel{
            display: none;
        }
        .header-primary {
            max-width: 100%;
        }
        .main{
            padding-top: 50px;
        }
    </style>

    <!--
    Контент страницы начнется тут
    -->

    <main class="main">

        <section class="nav">
            <ul class="nav__menu">
                <li class="nav__item">
                    <a href="/NewElantra#design" class="nav__link">
                        Дизайн
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/NewElantra#dynamics" class="nav__link">
                        Динамика
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/NewElantra#comfort" class="nav__link">
                        Комфорт
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/NewElantra#safety" class="nav__link">
                        Безопасность
                    </a>
                </li>
                <li class="nav__item">
                    <a href="/NewElantra#specs" class="nav__link">
                        Характеристики
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#gallery" class="nav__link active">
                        Галерея
                    </a>
                </li>
            </ul>
            <div class="nav__buttons">
                <a target="_blank" href="/test-drive/" class="df-button nav__butoon">
                    Тест-драйв
                </a>
                <a target="_blank" href="/configurator/car/7" class="df-button nav__butoon">
                    Конфигуратор
                </a>
                <a target="_blank" href="/contacts/" class="df-button nav__butoon">
                    Найти дилера
                </a>
            </div>
        </section>

        <section class="gallery">
            <div class="gallery__wrapper">
                <ul id="gallery" class="gallery__list">
                    <li class="gallery__item" data-image="https://www.hyundai.ru/assets/img/elantra/pics/slider/1.jpg" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/1.jpg)"></li>
                    <li class="gallery__item" data-image="https://www.hyundai.ru/assets/img/elantra/pics/slider/2.jpg" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/2.jpg)"></li>
                    <li class="gallery__item" data-image="https://www.hyundai.ru/assets/img/elantra/pics/slider/3.jpg" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/3.jpg)"></li>
                    <li class="gallery__item" data-image="https://www.hyundai.ru/assets/img/elantra/pics/slider/4.jpg" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/4.jpg)"></li>
                    <li class="gallery__item" data-image="https://www.hyundai.ru/assets/img/elantra/pics/slider/5.jpg" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/5.jpg)"></li>
                </ul>
                <div class="gallery__indicator">
                    <span class="gallery__current">01</span>
                    <span class="gallery__sep">/</span>
                    <span class="gallery__total">00</span>
                </div>
            </div>
            <div class="gallery__nav">
                <ul id="gallery-nav" class="gallery__nav-list">
                    <li class="gallery__nav-item" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/1.jpg)"></li>
                    <li class="gallery__nav-item" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/2.jpg)"></li>
                    <li class="gallery__nav-item" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/3.jpg)"></li>
                    <li class="gallery__nav-item" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/4.jpg)"></li>
                    <li class="gallery__nav-item" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/slider/5.jpg)"></li>
                </ul>
            </div>
            <div class="gallery__wrapper">
                <a href="#" download class="gallery__download">
                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 9H0" stroke="black" stroke-width="2"/>
                        <path d="M5 0L5 6" stroke="black" stroke-width="2"/>
                        <path d="M9 3L5.6 5.55C5.24445 5.81667 4.75556 5.81667 4.4 5.55L1 3" stroke="black" stroke-width="2"/>
                    </svg>
                    Скачать фотографию
                </a>
            </div>
        </section>
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script src="https://www.hyundai.ru/assets/js/config_layout.js?v=2"></script>

    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>

    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/js/elantra-2019gallery.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>