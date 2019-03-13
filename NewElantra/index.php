<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Выберите свою ELANTRA");
$APPLICATION->SetTitle("Выберите свою ELANTRA");
?>

    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/config_layout.css">
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_SF.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/selectize/selectize.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/elantra-2019.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">


    <!--
    Контент страницы начнется тут
    -->

    <main class="main">

        <style>
            /* Трансформация прелоадера в конце загрузки */
            #panel{
                display: none;
            }
            .header-primary {
                max-width: 100%;
            }
            .main{
                padding-top: 0px;
            }
            .nav {
                z-index: 100
            }

            .banner::after {
                content: '';
                display: block;
                position: absolute;
                top: -48px;
                left: 0;
                right: 0;
                bottom: -100px;
                background-color: #fff;
                transition: 2s;
                transition-delay: 0.5s;
                opacity: 0;
            }

            .preloader-start.banner::after {
                opacity: 1;
            }


            .overflow-hidden {
                overflow: hidden;
            }

            .overflow-hidden .sub-menu {
                z-index: -1;
            }

            .preloader__circle {
                display: block;
                position: absolute;
                bottom: 50%;
                margin-bottom: -75px;
                left: 50%;
                margin-left: -75px;
                width: 150px;
                height: 150px;
                border-width: 15px;
                border-style: solid;
                border-color: #003469;
                border-radius: 50%;
                will-change: transform;
                animation: 0.7s circle;
                animation-delay: 1s;
                animation-fill-mode: forwards;
                z-index: 15;
                opacity: 1;
            }

            @keyframes circle {
                100% {
                    bottom: 65px;
                    transform: scale(0.4);
                    border-width: 7px;
                    border-style: solid;
                    border-color: #fff;
                    opacity: 1;
                }
            }

            .preloader__circle::after {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                margin-top: 37px;
                width: 30%;
                height: 30%;
                border-right: 7px solid #fff;
                border-bottom: 7px solid #fff;
                transform: rotate(45deg) scale(1);
                transition: 0.5s;
                transition-delay: 1.5s;
            }

            .preloader-start .preloader__circle {
                display: block;
                position: absolute;
                top: 50%;
                margin-top: -60px;
                left: 50%;
                margin-left: -60px;
                width: 120px;
                height: 120px;
                background-color: #003469;
                border-width: 0px;
                border-radius: 50%;
                will-change: transform;
                animation: 2s preloader;
                animation-iteration-count: infinite;
                opacity: 1;
            }

            .preloader-start .preloader__circle::after {
                transform: rotate(45deg) scale(0);
            }

            .preloader__inner {
                position: absolute;
                top: 50%;
                margin-top: -60px;
                left: 50%;
                margin-left: -60px;
                width: 120px;
                height: 120px;
                border-radius: 50%;
                background-color: #fff;
                opacity: 0;
                will-change: transform;
                transition: 1s;
                transition-delay: 0.5s;
                z-index: 15;
            }

            .preloader-start .preloader__inner {
                animation: 2s preloaderInner;
                animation-iteration-count: infinite;
                opacity: 1;
            }

            .preloader.hidden {
                opacity: 0;
            }

            .preloader__circle.end-animation, .preloader__inner.end-animation{
                animation-iteration-count: 2.5;
                animation-fill-mode: forwards;
            }

            @keyframes preloader {
                50% {
                    transform: scale(1.25);
                }
            }

            @keyframes preloaderInner {
                50% {
                    transform: scale(1);
                }
                100% {
                    transform: scale(1.25);
                }
            }
        </style>

        <style>
            [class*="ymaps-2-1"][class*="-ground-pane"] {
                filter: grayscale(100%) brightness(65%) contrast(110%) invert(100%);
            }
            [class*="ymaps-2-1"][class*="-balloon__content"] {
                overflow: hidden !important;
                width: 220px !important;
                height: auto !important;
                padding: 25px !important;
                position: relative !important;
                box-sizing: content-box;
                margin: 0 !important;
            }
            [class*="ymaps-2-1"][class*="-balloon__layout"] {
                left: -20px !important;
            }
            [class*="ymaps-2-1"][class*="-balloon_layout_normal"] {
                box-shadow: none !important;
            }
        </style>

        <script src="https://api-maps.yandex.ru/2.1/?apikey=ecf1aa49-d859-4e70-885e-1bd11e09d4f1&lang=ru_RU" type="text/javascript"></script>

        <section class="nav">
            <ul class="nav__menu">
                <li class="nav__item">
                    <a href="#design" class="nav__link scroll">
                        Дизайн
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#dynamics" class="nav__link scroll">
                        Динамика
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#comfort" class="nav__link scroll">
                        Комфорт
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#safety" class="nav__link scroll">
                        Безопасность
                    </a>
                </li>
                <li class="nav__item">
                    <a href="#specs" class="nav__link scroll">
                        Характеристики
                    </a>
                </li>
                <li class="nav__item">
                    <a target="_blank" href="/NewElantraGallery" class="nav__link">
                        Галерея
                    </a>
                </li>
            </ul>
            <div class="nav__buttons">
                <a target="_blank" href="#" class="df-button nav__buton js-p-td-open">
                    Тест-драйв
                </a>
                <a target="_blank" href="/configurator/car/27" class="df-button nav__buton">
                    Конфигуратор
                </a>
                <a target="_blank" href="/contacts/" class="df-button nav__buton">
                    Найти дилера
                </a>
            </div>
        </section>

        <section class="banner section preloader-start" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/title.jpg)">
            <div class="banner__head">
                <h1 class="banner__title">
                    <span>Новая ELANTRA.</span>
                </h1>
                <div class="banner__subtitle">
                    <span>Отлична во всем.</span>
                </div>
            </div>
            <div class="blue-label">
                <div class="blue-label__top">
                    <span>от</span> 1 049 000  &#8381;
                </div>
                <hr>
                <div class="blue-label__bottom">
                    В кредит — от 8 000 ₽/мес
                </div>
            </div>
            <a href="#view360" class="js-next-slide preloader__circle scroll"></a>
            <div class="preloader__inner"></div>
        </section>

        <section id="view360" class="section view">
            <h2 class="view__title">Выберите свою ELANTRA</h2>
            <div class="view__body" @click = "init360" :style="{ backgroundImage: 'url('+ preview +')'  }">
                <div id="spritespin" class="view__spritespin"></div>
                <transition name="preloader">
                    <div class="view__preloader" v-if="!isLoaded">
                        <img v-if="!isInit" class="view__img" src="https://www.hyundai.ru/assets/img/santaFe/svg/360.png">
                        <div v-else class="view__progress">{{ progressFormatted }}%</div>
                    </div>
                </transition>
                <transition name="preloader-arrow">
                    <a v-if="isInit" href="#" class="view__prev" @click.prevent="prev">
                        <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 37L1.59055 19.6644C1.25376 19.2855 1.25376 18.7145 1.59055 18.3356L17 1" stroke-width="2"/>
                        </svg>
                    </a>
                </transition>
                <transition name="preloader-arrow">
                    <a v-if="isInit" href="#" class="view__next" @click.prevent="next">
                        <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L16.4095 18.3356C16.7462 18.7145 16.7462 19.2855 16.4095 19.6644L1 37" stroke-width="2"/>
                        </svg>
                    </a>
                </transition>
            </div>
            <div class="view__bottom">
                <div class="colors">
                    <div class="colors__current">{{ currentColor }}</div>
                    <ul class="colors__list">
                        <li class="colors__color" :class="{ active: activeColor === color.id }" v-for="color in colors" @click.prevent="setColor(color.id)" :style="{ backgroundColor: color.colorCode  }">

                        </li>
                    </ul>
                </div>

                <a target="_blank" href="/configurator/car/27" class="view__button df-button">Создать конфигурацию</a>
            </div>
        </section>

        <section id="design" class="presentation design design--1 section" :class="{ isEntered: enter, showIcons: showIcons }">
            <div class="presentation__head">
                <transition name="main" :duration="{ enter: 500, leave: 500 }" mode="out-in">
                    <h2 v-if="!enter" class="presentation__main" key="big">
                        <span v-html="title"></span>
                    </h2>
                    <h2 v-else class="presentation__main presentation__main--small" key="small">
                        <span v-html="title"></span>
                    </h2>
                </transition>
            </div>
            <div class="presentation__left">
                <div data-bg="https://www.hyundai.ru/assets/img/elantra/pics/title_design.jpg" :ref="'back'" class="presentation__back design__back"></div>
            </div>

            <div class="presentation__icons-holder" @click.self="close">
                <a href="#" class="presentation__icon" @click.prevent="selectItem(index, slide.zoom, slide.correct.x, slide.correct.y, 24)" v-for="(slide, index) in slides" :key="index" :class="['design__icon--' + index, 'presentation__icon--' + index ]" :ref="'icon--' + index">
                    <div class="presentation__center"></div>
                </a>
            </div>
            <div class="presentation__aside">
                <a href="#" class="presentation__prev" @click.prevent="prevItem">
                    <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 37L1.59055 19.6644C1.25376 19.2855 1.25376 18.7145 1.59055 18.3356L17 1" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" @click.prevent="nextItem" class="presentation__next">
                    <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L16.4095 18.3356C16.7462 18.7145 16.7462 19.2855 16.4095 19.6644L1 37" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" class="presentation__close"  @click.prevent="close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.8568L23.1432 0L12 11.1432L0.8568 0L0 0.8568L11.1432 12L0 23.1432L0.8568 24L12 12.8568L23.1432 24L24 23.1432L12.8568 12L24 0.8568Z"/>
                    </svg>
                </a>
                <transition name="slide" :duration="{ enter: 1000, leave: 1000 }" mode="out-in">
                    <div class="presentation__slide" v-for="(slide, index) in slides" :key="index" v-if="selectedId === index" :style="{ backgroundImage: 'url(' + slide.background + ')'  }">
                        <div class="presentation__composition">
                            <div class="presentation__img">
                                <img :src="slide.icon">
                            </div>
                            <div class="presentation__title">
                        <span>
                            {{ slide.title }}
                        </span>
                            </div>
                            <div class="presentation__description">
                        <span>
                            {{ slide.description }}
                        </span>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </section>

        <section class="section s-parallax design design--2">
            <div class="safety__head">
                <h2 class="presentation__main presentation__main--small">
            <span>
                Дерзкий
                <br>дизайн.
            </span>
                </h2>
            </div>
            <ul class="s-parallax__list s-parallax__list--left">
                <li class="s-parallax__item s-parallax__item--50" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/design_1.jpg">
                    <div class="s-parallax__description">
                        <span>Электропривод складывания боковых зеркал</span> позволит не&nbsp;переживать о&nbsp;том, что их&nbsp;случайно заденут.
                    </div>
                </li>
                <li class="s-parallax__item s-parallax__item--50">
                    <video class="s-parallax__video" autoplay muted loop>
                        <source data-src="https://www.hyundai.ru/assets/img/elantra/video/01_design_led.mp4" type="video/mp4">
                    </video>
                    <div class="s-parallax__description">
                        <span>Светодиодные задние фонари</span> увеличивают видимость и&nbsp;покоряют своим внешний видом.
                    </div>
                </li>
            </ul>
            <ul class="s-parallax__list s-parallax__list--right">
                <li class="s-parallax__item s-parallax__item--100" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/design_2.jpg">
                    <div class="s-parallax__description">
                        <span>Бесключевой доступ Smart Key</span> откроет автомобиль по&nbsp;прикосновению.
                    </div>
                </li>
            </ul>
        </section>

        <section id="dynamics" class="section dynamics dynamics--1 view0">
            <video class="dynamics__video" id="d-video1" preload="auto" loop muted>
                <source data-src="https://www.hyundai.ru/assets/img/elantra/video/02_performance.mp4" type="video/mp4">
            </video>
            <div class="dynamics__head">
                <h2 class="dynamics__title">
            <span>
                Великолепная
                <br>динамика.
            </span>
                </h2>
                <div class="dynamics__wrap">
                    <ul class="dynamics__tabs">
                        <li class="dyamics__tab">
                            <a data-view="view0" href="#" class="dynamics__link js-change-view active">
                                1.6 MPI
                            </a>
                        </li>
                        <li class="dyamics__tab">
                            <a data-view="view1" href="#" class="dynamics__link js-change-view">
                                2.0 MPI
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="dynamics__specs dynamics__specs--0">
                <li class="dynamics__spec">
                    <div class="dynamics__specs-w dynamics__specs-w--0">
                        <div class="dynamics__description">
                            <span id="count1" style="display: inline-block; width: 57px; text-align: right;"></span> л.с.
                        </div>
                        <div class="dynamics__text">
                            Максимальная мощность
                        </div>
                    </div>
                </li>
                <li class="dynamics__spec">
                    <div class="dynamics__specs-w dynamics__specs-w--1">
                        <div class="dynamics__description">
                            <span id="count2" style="display: inline-block; width: 38px; text-align: right;"></span>.1 сек
                        </div>
                        <div class="dynamics__text">
                            Разгон до 100 км/ч
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="dynamics__specs dynamics__specs--1">
                <li class="dynamics__spec">
                    <div class="dynamics__specs-w dynamics__specs-w--0">
                        <div class="dynamics__description">
                            <span id="count3" style="display: inline-block; width: 57px; text-align: right;"></span> л.с.
                        </div>
                        <div class="dynamics__text">
                            Максимальная мощность
                        </div>
                    </div>
                </li>
                <li class="dynamics__spec">
                    <div class="dynamics__specs-w dynamics__specs-w--1">
                        <div class="dynamics__description">
                            <span id="count4" style="display: inline-block; width: 23px; text-align: right;"></span>.8 сек
                        </div>
                        <div class="dynamics__text">
                            Разгон до 100 км/ч
                        </div>
                    </div>
                </li>
            </ul>
            <div class="dynamics__graph dynamics__graph--0">
                <img src="https://www.hyundai.ru/assets/img/elantra/pics/engine_1.png">
            </div>
            <div class="dynamics__graph dynamics__graph--1">
                <img src="https://www.hyundai.ru/assets/img/elantra/pics/engine_2.png">
            </div>
        </section>

        <section class="section dynamics dynamics--2">
            <div class="dynamics__back" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/performance_2a.jpg)"></div>
            <div class="dynamics__back dynamics__back--1" style="background-image: url(https://www.hyundai.ru/assets/img/elantra/pics/performance_2b.jpg)"></div>
            <div class="dynamics__head">
                <h2 class="dynamics__title dynamics__title--small">
            <span>
                Великолепная
                <br>динамика.
            </span>
                </h2>
            </div>
            <div class="d-composition">
                <div class="d-composition__icon">
                    <img src="https://www.hyundai.ru/assets/img/elantra/icons/performance.svg">
                </div>
                <div class="d-composition__title">
                    6-ступенчатая АКПП и МКПП.
                </div>
                <div class="d-composition__description">
                    Неудержимая мощь, помноженная на&nbsp;жгучий темперамент,&nbsp;&mdash; вот абсолютная формула скорости. Новая ELANTRA исполняет самые дерзкие желания, чтобы разбудить новые.
                </div>
            </div>
        </section>

        <section id="comfort" class="presentation comfort comfort--1 section" :class="{ isEntered: enter, showIcons: showIcons }">
            <div class="presentation__head">
                <transition name="main" :duration="{ enter: 500, leave: 500 }" mode="out-in">
                    <h2 v-if="!enter" class="presentation__main" key="big">
                        <span v-html="title"></span>
                    </h2>
                    <h2 v-else class="presentation__main presentation__main--small" key="small">
                        <span v-html="title"></span>
                    </h2>
                </transition>
            </div>
            <div class="presentation__left">
                <div data-bg="https://www.hyundai.ru/assets/img/elantra/pics/title_comfort.jpg" :ref="'back'" class="presentation__back comfort__back"></div>
            </div>

            <div class="presentation__icons-holder" @click.self="close">
                <a href="#" class="presentation__icon" @click.prevent="selectItem(index, slide.zoom, slide.correct.x, slide.correct.y, 24)" v-for="(slide, index) in slides" :key="index" :class="['comfort__icon--' + index, 'presentation__icon--' + index ]" :ref="'icon--' + index">
                    <div class="presentation__center"></div>
                </a>
            </div>
            <div class="presentation__aside">
                <a href="#" class="presentation__prev" @click.prevent="prevItem">
                    <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 37L1.59055 19.6644C1.25376 19.2855 1.25376 18.7145 1.59055 18.3356L17 1" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" @click.prevent="nextItem" class="presentation__next">
                    <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L16.4095 18.3356C16.7462 18.7145 16.7462 19.2855 16.4095 19.6644L1 37" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" class="presentation__close"  @click.prevent="close">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M24 0.8568L23.1432 0L12 11.1432L0.8568 0L0 0.8568L11.1432 12L0 23.1432L0.8568 24L12 12.8568L23.1432 24L24 23.1432L12.8568 12L24 0.8568Z"/>
                    </svg>
                </a>
                <transition name="slide" :duration="{ enter: 1000, leave: 1000 }" mode="out-in">
                    <div class="presentation__slide" v-for="(slide, index) in slides" :key="index" v-if="selectedId === index" :style="{ backgroundImage: 'url(' + slide.background + ')'  }">
                        <div class="presentation__animation" v-if="slide.animation">
                            <transition name="frame" mode="in-out">
                                <div class="presentation__frame" v-for="(frame, index) in slide.frames" :key="index" v-if="index == currentFrame" :style="{ backgroundImage: 'url(' + frame.img + ')'  }"></div>
                            </transition>
                        </div>
                        <div class="presentation__controls" v-if="slide.carousel">
                            <ul>
                                <li v-for="frame in slide.frames">
                                    <a href="#" :class="{ active: currentSlide === frame.name }" @click.prevent="selectFrame(frame.name)">{{ frame.name }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="presentation__carousel" v-if="slide.carousel">
                            <transition name="frame" mode="in-out">
                                <div class="presentation__frame" v-for="(frame, index) in slide.frames" :key="index" v-if="frame.name === currentSlide" :style="{ backgroundImage: 'url(' + frame.img + ')'  }"></div>
                            </transition>
                        </div>
                        <div class="presentation__composition">
                            <div class="presentation__img">
                                <img :src="slide.icon">
                            </div>
                            <div class="presentation__title">
                        <span v-html="slide.title">
                        </span>
                            </div>
                            <div class="presentation__description">
                        <span v-html="slide.description ">
                        </span>
                            </div>
                        </div>
                    </div>
                </transition>
            </div>
        </section>

        <section class="section comfort comfort--2 s-parallax ">
            <div class="safety__head">
                <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Настоящий
                <br>комфорт.
            </span>
                </h2>
            </div>
            <ul class="s-parallax__list s-parallax__list--left">
                <li class="s-parallax__item s-parallax__item--50">
                    <video class="s-parallax__video" autoplay muted loop>
                        <source data-src="https://www.hyundai.ru/assets/img/elantra/video/03_comfort_warmers.mp4" type="video/mp4">
                    </video>
                    <div class="s-parallax__description">
                        В&nbsp;новой ELANTRA прохладно летом
                        и&nbsp;тепло зимой. Об&nbsp;этом заботятся <span>вентиляция и&nbsp;подогрев сидений</span>.
                    </div>
                </li>
                <li class="s-parallax__item s-parallax__item--50" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/comfort_3.jpg">
                    <div class="s-parallax__description">
                        <span>Подогрев руля</span> сделает комфортным вождение в&nbsp;морозную погоду.
                    </div>
                </li>
                <li class="s-parallax__item s-parallax__item--50" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/comfort_5.jpg">
                    <div class="s-parallax__description">
                        Вождение станет более комфортным
                        и&nbsp;безопасным с&nbsp;<span>самозатемняющимся внутрисалонным зеркалом</span>.
                    </div>
                </li>
            </ul>
            <ul class="s-parallax__list s-parallax__list--right">
                <li class="s-parallax__item s-parallax__item--50" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/comfort_2.jpg">
                    <div class="s-parallax__description">
                        <span>Сохранение настроек сиденья водителя и&nbsp;боковых зеркал</span>
                        &nbsp;&mdash; новая ELANTRA радушно встретит вас каждый раз!
                    </div>
                </li>
                <li class="s-parallax__item s-parallax__item--100">
                    <video class="s-parallax__video" autoplay muted loop>
                        <source data-src="https://www.hyundai.ru/assets/img/elantra/video/04_comfort_charger.mp4" type="video/mp4">
                    </video>
                    <div class="s-parallax__description">
                        <span>Беспроводное зарядное устройство</span> стандарта&nbsp;Qi позволит зарядить ваш смартфон в&nbsp;любой момент.
                    </div>
                </li>
            </ul>
        </section>

        <section id="safety" class="section safety safety--1">
            <div class="safety__head">
                <h2 class="safety__main">
            <span>
                Технологии
                <br>безопасности.
            </span>
                </h2>
            </div>
            <div class="safety__circles">
                <div class="safety__circle1"></div>
                <div class="safety__circle2"></div>
            </div>
            <div data-bg="https://www.hyundai.ru/assets/img/elantra/pics/angle_1.png" class="safety__back safety__back--1"></div>
        </section>

        <section class="section safety safety--2">
            <div class="safety__head">
                <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                </h2>
            </div>
            <div data-bg="https://www.hyundai.ru/assets/img/elantra/pics/angle_2.png" class="safety__back safety__back--2">
                <div class="marker marker--2">
                    <div class="marker__circle1"></div>
                    <div class="marker__circle2"></div>
                    <div class="marker__center">
                        <div class="marker__composition">
                            <img src="https://www.hyundai.ru/assets/img/elantra/icons/tech_1.svg">
                            <div class="marker__text">
                                Звуковой
                                <br>сигнал
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="s-beep">
                <div class="safety__img">
                    <img src="https://www.hyundai.ru/assets/img/elantra/pics/tech_scheme_1.jpg" alt="">
                </div>
                <div class="safety__title">
                    Система помощи при парковке.
                </div>
                <div class="safety__text">
                    Своевременно предупреждает о&nbsp;приближении к&nbsp;препятствию, повышая безопасность манёвра.
                </div>
            </div>
        </section>

        <section class="section safety safety--3">
            <div class="safety__head">
                <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                </h2>
            </div>
            <div class="s-exit">
                <div class="s-exit__circle1"></div>
                <div class="s-exit__circle2"></div>
                <div class="s-exit__center">
                    <video class="s-exit__video" autoplay muted loop>
                        <source data-src="https://www.hyundai.ru/assets/img/elantra/video/05_tech_cam.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="s-exit__description">
                    <div class="safety__title">
                        Камера заднего вида.
                    </div>
                    <div class="safety__text">
                        Помогает водителю полностью контролировать ситуацию во время парковки.
                    </div>
                </div>
            </div>
            <div data-bg="https://www.hyundai.ru/assets/img/elantra/pics/angle_3.png" class="safety__back safety__back--3">
                <div class="marker marker--3">
                    <div class="marker__circle1"></div>
                    <div class="marker__circle2"></div>
                    <div class="marker__center">
                        <div class="marker__composition">
                            <img src="https://www.hyundai.ru/assets/img/elantra/icons/tech_2.svg">
                            <div class="marker__text">
                                Передача
                                <br>видео
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="safety section safety--4">
            <div class="safety__head">
                <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                </h2>
            </div>
            <div class="s-back">
                <div class="s-back__img">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_1.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_2.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_3.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_4.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_5.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_6.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_7.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_8.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_9.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_10.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_11.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_12.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_13.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_14.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_15.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_16.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_17.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_18.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_19.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_20.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_21.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_22.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_23.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_24.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_25.jpg">
                    <img data-src="https://www.hyundai.ru/assets/img/elantra/pics/tech/tech_scheme_3_26.jpg">
                </div>
                <div class="s-back__description">
                    <div class="safety__title">
                        Система мониторинга «слепых» зон.
                    </div>
                    <div class="safety__text">
                        Менять полосу безопасно&nbsp;&mdash; система предупреждает водителя об&nbsp;автомобиле в&nbsp;&laquo;слепой&raquo; зоне.
                    </div>
                </div>
            </div>
            <div data-bg="https://www.hyundai.ru/assets/img/elantra/pics/angle_4.png" class="safety__back safety__back--4">
                <div class="marker marker--4">
                    <div class="marker__circle1"></div>
                    <div class="marker__circle2"></div>
                    <div class="marker__center">
                        <div class="marker__composition">
                            <img src="https://www.hyundai.ru/assets/img/elantra/icons/tech_3.svg">
                            <div class="marker__text">
                                Датчик
                                <br>движения
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section s-parallax safety safety--5">
            <div class="safety__head">
                <h2 class="safety__main safety__main--small safety__main--on">
            <span>
                Технологии
                <br>безопасности.
            </span>
                </h2>
            </div>
            <ul class="s-parallax__list s-parallax__list--left">
                <li class="s-parallax__item s-parallax__item--50">
                    <video class="s-parallax__video" autoplay muted loop>
                        <source data-src="https://www.hyundai.ru/assets/img/elantra/video/06_tech_trunk.mp4" type="video/mp4">
                    </video>
                    <div class="s-parallax__description">
                        <span>Интеллектуальная система открывания багажника</span> позволит погрузить вещи, если у&nbsp;вас заняты руки
                    </div>
                </li>
                <li class="s-parallax__item s-parallax__item--100" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/tech_3.jpg">
                    <div class="s-parallax__description">
                        <span>Система подушек безопасности</span> с&nbsp;дополнительной подушкой безопасности для защиты ног водителя.
                    </div>
                </li>
            </ul>
            <ul class="s-parallax__list s-parallax__list--right">
                <li class="s-parallax__item s-parallax__item--100">
                    <video class="s-parallax__video" autoplay muted loop>
                        <source data-src="https://www.hyundai.ru/assets/img/elantra/video/07_tech_ahss.mp4" type="video/mp4">
                    </video>
                    <div class="s-parallax__description s-parallax__description--black">
                        <span>Стальной корпус повышенной жесткости</span> обеспечивает надёжную защиту для водителя и&nbsp;пассажиров.
                    </div>
                </li>
                <li class="s-parallax__item s-parallax__item--50" data-bg="https://www.hyundai.ru/assets/img/elantra/pics/tech_4.jpg">
                    <div class="s-parallax__description">
                        <span>Безопасные стеклоподъёмники</span> опускают стекло на&nbsp;15&nbsp;сантиметров, если в&nbsp;проёме обнаружен объект.
                    </div>
                </li>
            </ul>
        </section>

        <section id="specs" class="section specs">
            <div class="section__center">
                <h2 class="specs__title">Характеристики</h2>
                <table class="specs__main">
                    <tr>
                        <td>Тип модели</td>
                        <td>Седан</td>
                    </tr>
                    <tr>
                        <td>Количество мест</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Двигатель</td>
                        <td>Бензиновый</td>
                    </tr>
                    <tr>
                        <td>Привод</td>
                        <td>Передний</td>
                    </tr>
                    <tr>
                        <td>Коробка передач</td>
                        <td>Автоматическая / Механическая</td>
                    </tr>
                </table>

                <div v-if="!success" class="specs__error">
                    При загрузке данных произошла ошибка, повторите попытку позднее.
                </div>

                <div v-else class="specs__success">
                    <div class="specs-dd" v-for="(spec, index) in specifications">
                        <a href="#" class="specs-dd__head" @click.prevent="dropdown(index)">
                            {{ spec.name }}
                            <svg :ref="'arrow-' + index" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 7L6 2L11 7" stroke="black" stroke-width="2"/>
                            </svg>
                        </a>
                        <div class="specs-dd__dropdown" :ref="index">
                            <table class="specs-dd__table">
                                <tr>
                                    <th v-for="mod in modifications">{{ mod.name }}</th>
                                </tr>
                                <template v-for="param in spec.data">
                                    <tr>
                                        <td :colspan="param.values.length" class="specs-dd__subtitle" v-html="param.name"></td>
                                    </tr>
                                    <tr>
                                        <td v-for="value in param.values">
                                            <div v-if="value === true" class="specs-dd__value"><svg tabindex="-1" aria-visible="false" class="ic-svg ic-checkmark"><use xlink:href="#ic-checkmark"></use></svg></div>
                                            <div v-if="value === false" class="specs-dd__value"><svg tabindex="-1" aria-visible="false" class="ic-svg ic-minus"><use xlink:href="#ic-minus"></use></svg></div>
                                            <div v-if="value !== false && value !== true" class="specs-dd__value" v-html="value"></div>
                                        </td>
                                    </tr>
                                </template>
                            </table>
                        </div>
                    </div>
                    <div class="dsclmr">
                        <div class="dsclmr__icon">
                            <svg width="2" height="9" viewBox="0 0 2 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6.75H0V9H2V6.75Z" fill="white"/>
                                <path d="M0.133301 0H1.86663L1.5333 5.55H0.466634L0.133301 0Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="dsclmr__body">
                            <span class="dsclmr__item" v-for="(dsclmr, index) in footnotes">{{ index }}. {{ dsclmr }}</span>
                        </div>
                    </div>
                    <div class="dsclmr">
                        <div class="dsclmr__icon">
                            <svg width="2" height="9" viewBox="0 0 2 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 6.75H0V9H2V6.75Z" fill="white"/>
                                <path d="M0.133301 0H1.86663L1.5333 5.55H0.466634L0.133301 0Z" fill="white"/>
                            </svg>
                        </div>

                        <div class="dsclmr__body">
                            <span class="dsclmr__item">Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai New Elantra (1.6MPI 6МТ Start) 1 049 000р., 2019 года производства, на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 480 200 рублей, сумма кредита 568 800 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.03.2019 по 31.03.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section--highlight-nav">
            <nav class="highlight-nav">
                <ul class="highlight-nav__items">
                    <li class="highlight-nav__item">
                        <a href="/configurator/car/27" class="highlight-nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-car"><use xlink:href="#ic-car"></use></svg>
                            <strong class="highlight-nav__name">Создать свой Hyundai</strong>
                            <span class="highlight-nav__highspot">Ваш автомобиль в&nbsp;один клик</span>
                        </a>
                    </li>
                    <li class="highlight-nav__item">
                        <a href="/contacts/" class="highlight-nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-map"><use xlink:href="#ic-map"></use></svg>
                            <strong class="highlight-nav__name">Найти дилера</strong>
                            <span class="highlight-nav__highspot">186 официальных дилерских центров по всей России</span>
                        </a>
                    </li>
                    <li class="highlight-nav__item">
                        <a href="/test-drive/NewElantra" class="highlight-nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-steering-wheel"><use xlink:href="#ic-steering-wheel"></use></svg>
                            <strong class="highlight-nav__name">Тест-драйв</strong>
                            <span class="highlight-nav__highspot">Моментальная заявка в&nbsp;удобное для&nbsp;вас&nbsp;время</span>
                        </a>
                    </li>
                    <li class="highlight-nav__item">
                        <a href="/configurator/car/27" class="highlight-nav__link">
                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-calc"><use xlink:href="#ic-calc"></use></svg>
                            <strong class="highlight-nav__name">Рассчитать кредит</strong>
                            <span class="highlight-nav__highspot">Финансовые программы</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </section>

        <!-- Popup start -->
        <div class="p-td">
            <div class="p-td__wrapper">
                <div class="p-td__center">
                    <a href="#" class="p-td__close js-p-td-close">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="32.168px" height="32.168px" viewBox="0 0 32.168 32.168" enable-background="new 0 0 32.168 32.168" xml:space="preserve">
                <path fill="#151414" d="M31.875,30.461L17.498,16.084L31.791,1.791c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0
                L16.084,14.67L1.707,0.293c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L14.67,16.084L0.377,30.377
                c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l14.293-14.293l14.377,14.377
                c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293C32.266,31.484,32.266,30.852,31.875,30.461z"/>
                </svg>
                    </a>
                    <div class="p-td__left">
                        <div class="p-td__car js-set-p-td-name">

                        </div>
                        <div class="p-td__price js-set-p-td-price">

                        </div>
                    </div>
                    <div class="p-td__right">
                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Lava_Orange_1024.png" alt="" class="p-td__img js-set-p-td-img">
                    </div>
                    <form class="td-form" autocomplete="off">
                        <div class="td-form__section-title">Дилер</div>
                        <div class="td-form__input td-form__city td-form__input--mr">
                            <label class="td-form__label" for="city">город</label>
                            <select id="city-select" class="td-form__select" name="city">

                            </select>
                        </div>
                        <div class="td-form__input td-form__dealer td-form__input--ml">
                            <label class="td-form__label" for="dealer">дилер</label>
                            <select id="dealer-select" class="td-form__select" name="dealer">

                            </select>
                        </div>
                        <div class="td-form__map">
                            <a href="" class="td-form__show-map js-show-map">
                                <div class="td-form__map-icon">
                                    <svg
                                        xmlns:dc="http://purl.org/dc/elements/1.1/"
                                        xmlns:cc="http://creativecommons.org/ns#"
                                        xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                        xmlns:svg="http://www.w3.org/2000/svg"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 149.33333 141.58667"
                                        height="141.58667"
                                        width="149.33333"
                                        xml:space="preserve"
                                        id="svg2"
                                        version="1.1"><defs
                                            id="defs6" /><g
                                            transform="matrix(1.3333333,0,0,-1.3333333,5.3333332e-4,141.5868)"
                                            id="g10"><g
                                                transform="translate(111.9996,106.1901)"
                                                id="g12"><path
                                                    id="path14"
                                                    d="M 0,0 -34.845,-22.4 -73.836,0 -112,-17.42 v -88.77 l 38.266,21.57 38.889,-21.57 L 0,-85.449 Z m -74.385,-11.792 0.339,-0.196 h -0.769 z m -27.114,-12.379 22.41,10.23 v -61.648 l -22.41,-12.632 z m 32.91,-51.296 v 60.343 l 28.497,-16.369 v -59.781 z m 38.997,43.963 0.427,0.273 18.666,11.998 v -60.249 l -19.093,-11.364 z" /></g></g></svg>
                                </div>
                                Показать на карте
                            </a>
                            <div class="td-form__toggle">
                                <div id="map-container" class="td-form__container">
                                </div>
                                <div class="map-popup">
                                    <a href="#" class="map-popup__close js-map-popup-close">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="32.168px" height="32.168px" viewBox="0 0 32.168 32.168" enable-background="new 0 0 32.168 32.168" xml:space="preserve">
                                <path fill="#151414" d="M31.875,30.461L17.498,16.084L31.791,1.791c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0
                                L16.084,14.67L1.707,0.293c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L14.67,16.084L0.377,30.377
                                c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l14.293-14.293l14.377,14.377
                                c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293C32.266,31.484,32.266,30.852,31.875,30.461z"/>
                                </svg>
                                    </a>
                                    <div class="map-popup__data"></div>
                                    <button class="map-popup__button js-map-popup-checkout">Выбрать</button>
                                </div>
                                <a href="#" class="td-form__hide-map js-hide-map">Свернуть</a>
                            </div>
                        </div>
                        <div class="td-form__section-title td-form__section-title--mt35 td-form__section-title--mb">Контактные данные</div>
                        <div class="td-form__input td-form__input--100 td-form__input--df td-form__input--mb">
                            <label class="td-form__radio-label td-form__radio-label--mr">
                                <input class="td-form__radio js-save" type="radio" value="Уважаемый" name="accost" checked>
                                <div class="td-form__box"></div>
                                <div class="td-form__description">Уважаемый</div>
                            </label>
                            <label class="td-form__radio-label">
                                <input class="td-form__radio js-save" value="Уважаемая" type="radio" name="accost">
                                <div class="td-form__box"></div>
                                <div class="td-form__description">Уважаемая</div>
                            </label>
                        </div>
                        <div class="td-form__input td-form__input--mr td-form__input--mb">
                            <label class="td-form__label" for="name">Имя</label>
                            <div class="td-form__w">
                                <input class="js-validation js-save" type="text" name="name">
                                <div class="td-form__hint">Поле Имя должно быть заполнено</div>
                                <div class="td-form__warning js-show-hint"></div>
                            </div>
                        </div>
                        <div class="td-form__input td-form__input--ml">
                            <label class="td-form__label" for="tel">телефон</label>
                            <div class="td-form__w">
                                <input id="phone" class="js-validation js-save" type="tel" name="tel" placeholder="+7 (___)___-__-__">
                                <div class="td-form__hint">Указан неверный номер телефона.<br>Пример: +7-000-000-00-00</div>
                                <div class="td-form__warning js-show-hint"></div>
                            </div>
                        </div>
                        <div class="td-form__input td-form__input--mr td-form__input--mb">
                            <label class="td-form__label" for="surname">фамилия</label>
                            <div class="td-form__w">
                                <input class="js-validation js-save" type="text" name="surname">
                                <div class="td-form__hint">Поле Фамилия должно быть заполнено</div>
                                <div class="td-form__warning js-show-hint"></div>
                            </div>
                        </div>
                        <div class="td-form__input td-form__input--ml">
                            <label class="td-form__label" for="email">email</label>
                            <div class="td-form__w">
                                <input class="js-validation js-save" type="email" name="email">
                                <div class="td-form__hint">Указан неверный email.<br>Пример: user@user.ru</div>
                                <div class="td-form__warning js-show-hint"></div>
                            </div>
                        </div>
                        <div class="td-form__bottom">
                            <div class="td-form__w">
                                <label class="td-form__radio-label td-form__radio-label--pr">
                                    <input class="td-form__checkbox js-validation" type="checkbox">
                                    <div class="td-form__check"></div>
                                    <div class="td-form__description td-form__description--small">Я согласен с правилами <a href="#" class="js-how-td-rules">обработки данных</a></div>
                                </label>
                                <div class="td-form__hint">Нужно дать согласие на обработку данных</div>
                                <div class="td-form__warning js-show-hint"></div>
                            </div>

                            <button type="submit" class="td-form__button td-form-checkout">Записаться</button>
                        </div>
                    </form>
                    <div class="p-td__rules">
                        <hr>
                        <p>
                            Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в том числе с использованием средств автоматизации.
                        </p>
                        <p>
                            Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи.
                        </p>
                        <p>
                            Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш., д. 20, литер А).
                        </p>
                        <p>
                            Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, д. 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-td-success">
            <div class="p-td-success__center">
                <a href="#" class="p-td-success__close js-td-success-close">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="32.168px" height="32.168px" viewBox="0 0 32.168 32.168" enable-background="new 0 0 32.168 32.168" xml:space="preserve">
            <path fill="#151414" d="M31.875,30.461L17.498,16.084L31.791,1.791c0.391-0.391,0.391-1.023,0-1.414s-1.023-0.391-1.414,0
              L16.084,14.67L1.707,0.293c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L14.67,16.084L0.377,30.377
              c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293l14.293-14.293l14.377,14.377
              c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293C32.266,31.484,32.266,30.852,31.875,30.461z"/>
            </svg>
                </a>
                <div class="p-td-success__title">
                    Заявка<br>отправлена
                </div>
                <div class="p-td-success__text">
                    В ближайшее время с вами свяжется
                    <br>сотрудник выбранного дилерского центра.
                </div>
            </div>
        </div>

        <!-- Popup end -->
        <script>
            //Preloader
            init();

            function init(){
                document.querySelector('body').classList.add('overflow-hidden');

                var container = document.querySelector('.main'),
                    firstSlideBack = container.querySelector('.banner'),
                    str1,
                    str2;

                str1 = firstSlideBack.style.backgroundImage.replace('url("','');
                str2 = str1.replace('")','');

                var img = new Image();

                img.src = str2;
                img.onload = function () {
                    //Правильно завершаем анимацию в конце цикла
                    document.querySelector('.preloader__circle').classList.add('end-animation');
                    document.querySelector('.preloader__inner').classList.add('end-animation');
                    setTimeout(function() {
                        document.querySelector('.preloader__circle').classList.remove('end-animation');
                        document.querySelector('.preloader__inner').classList.remove('end-animation');
                        document.querySelector('.banner').classList.remove('preloader-start');

                        setTimeout(function() {
                            document.querySelector('body').classList.remove('overflow-hidden');
                        }, 1000)
                        setTimeout(function () {
                            document.querySelector('.banner').classList.add('isEntered');
                        }, 2000);
                    }, 2000)
                };
            }

            var td_data = {
                carName: 'Новая Elantra',
                carImage: 'https://www.hyundai.ru/assets/img/elantra/360/103.png', // Путь от корня сайта,
                carPrice: 1049000,
                regions: [{"name":"\u041c\u043e\u0441\u043a\u0432\u0430 \u0438 \u041f\u043e\u0434\u043c\u043e\u0441\u043a\u043e\u0432\u044c\u0435","dealers":[{"id":267,"name":"GN service","code":"C40AF01156","SAP":"C40AF01156","latitude":"55.613209","longitude":"37.513754","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u041d\u043e\u0432\u043e\u044f\u0441\u0435\u043d\u0435\u0432\u0441\u043a\u0438\u0439 \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442, \u0434. 6","phone":"+7 (495) 788-58-58"},{"id":223,"name":"Hyundai City Store \u0410\u0412\u0418\u041b\u041e\u041d","code":"C40AF11027","SAP":"C40AF11027","latitude":"55.822611","longitude":"37.4946993","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u041b\u0435\u043d\u0438\u043d\u0433\u0440\u0430\u0434\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 16\u0410, \u0441\u0442\u0440. 4, 2-\u043e\u0439 \u044d\u0442\u0430\u0436 \u0422\u0426 \u00ab\u041c\u0415\u0422\u0420\u041e\u041f\u041e\u041b\u0418\u0421\u00bb","phone":"+7 (495) 021-17-55"},{"id":260,"name":"INCHCAPE","code":"C40AF01155","SAP":"C40AF01155","latitude":"55.762606","longitude":"37.5269592","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. 2-\u044f \u041c\u0430\u0433\u0438\u0441\u0442\u0440\u0430\u043b\u044c\u043d\u0430\u044f, \u0434. 18, \u0441\u0442\u0440. 22","phone":"+7 (495) 221-83-00"},{"id":189,"name":"Major","code":"C40AF11090","SAP":"C40AF11090","latitude":"55.788801","longitude":"37.387927","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u041c\u0430\u0440\u0448\u0430\u043b\u0430 \u041f\u0440\u043e\u0448\u043b\u044f\u043a\u043e\u0432\u0430, \u0434. 13","phone":"+7 (495) 739-03-03"},{"id":218,"name":"Major \u041c\u041a\u0410\u0414 18 \u043a\u043c","code":"C40AF21090","SAP":"C40AF21090","latitude":"55.625873","longitude":"37.798988","address":"140090, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0433. \u0414\u0437\u0435\u0440\u0436\u0438\u043d\u0441\u043a\u0438\u0439, \u0443\u043b. \u0410\u043b\u0435\u043a\u0441\u0435\u0435\u0432\u0441\u043a\u0430\u044f, \u0434. 12","phone":"+ 7 (495) 730-09-90"},{"id":217,"name":"Major \u041c\u041a\u0410\u0414 47 \u043a\u043c","code":"C40AF31090","SAP":"C40AF31090","latitude":"55.650882","longitude":"37.442030","address":"142784, \u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u043f\u043e\u0441. \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0438\u0439, \u0434\u0435\u0440. \u0413\u043e\u0432\u043e\u0440\u043e\u0432\u043e, \u041c\u041a\u0410\u0414 47","phone":"+ 7 (495) 730-00-09"},{"id":228,"name":"\u0410\u0412\u0410\u041d\u0422\u0410\u0419\u041c \u0421\u041f","code":"C40AF01112","SAP":"C40AF01112","latitude":"56.3414463","longitude":"38.1247819","address":"\u0433. \u0421\u0435\u0440\u0433\u0438\u0435\u0432 \u041f\u043e\u0441\u0430\u0434, \u041d\u043e\u0432\u043e\u0443\u0433\u043b\u0438\u0447\u0441\u043a\u043e\u0435 \u0448., \u0434. 87","phone":"+7 (495) 921-02-02"},{"id":14,"name":"\u0410\u0413-\u041c\u043e\u0442\u043e\u0440\u0441 \u0411\u0430\u043b\u0430\u0448\u0438\u0445\u0430","code":"C40AF01038","SAP":"C40AF01038","latitude":"55.7883647","longitude":"37.8861603","address":"\u0433. \u0411\u0430\u043b\u0430\u0448\u0438\u0445\u0430, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b, \u0448. \u042d\u043d\u0442\u0443\u0437\u0438\u0430\u0441\u0442\u043e\u0432, \u0434. 12\u0430","phone":"+7(495) 961-28-70"},{"id":28,"name":"\u0410\u0432\u0430\u043d\u0442\u0430-\u0417\u0430\u043f\u0430\u0434","code":"C40AF01144","SAP":"C40AF01144","latitude":"55.6979613","longitude":"37.4609981","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u041e\u0447\u0430\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448., \u0434. 2\u0410, \u0441\u0442\u0440.1","phone":"+7(495) 287-77-77"},{"id":27,"name":"\u0410\u0432\u0438\u043b\u043e\u043d","code":"C40AF01027","SAP":"C40AF01027","latitude":"55.7155753","longitude":"37.7143655","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434\u0441\u043a\u0438\u0439 \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442, \u0434. 41\/2","phone":"+7(495) 730-44-33"},{"id":241,"name":"\u0410\u0432\u0440\u043e\u0440\u0430","code":"C40AF01115","SAP":"C40AF01115","latitude":"54.9372694","longitude":"37.4065466","address":"\u0433. \u0421\u0435\u0440\u043f\u0443\u0445\u043e\u0432, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 72","phone":"+7 (495) 902-75-75"},{"id":48,"name":"\u0410\u0432\u0442\u043e\u0413\u0415\u0420\u041c\u0415\u0421","code":"C40AF11038","SAP":"C40AF11038","latitude":"55.7753868103027","longitude":"37.8332939147949","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0448. \u042d\u043d\u0442\u0443\u0437\u0438\u0430\u0441\u0442\u043e\u0432, \u0434. 59","phone":"+7(495) 223-89-46"},{"id":64,"name":"\u0410\u0432\u0442\u043e\u0421\u043f\u0435\u0446\u0426\u0435\u043d\u0442\u0440 \u0412\u043d\u0443\u043a\u043e\u0432\u043e","code":"C40AF01002","SAP":"C40AF01002","latitude":"55.6194686889649","longitude":"37.3965530395508","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u041a\u0438\u0435\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, 5 \u043a\u043c \u043e\u0442 \u041c\u041a\u0410\u0414","phone":"+7(495) 660-44-44"},{"id":39,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u0414\u043c\u0438\u0442\u0440\u043e\u0432\u043a\u0430","code":"C40AF20328","SAP":"C40AF20328","latitude":"55.8802261352539","longitude":"37.5471420288086","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0414\u043c\u0438\u0442\u0440\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 98, \u0441\u0442\u0440. 1","phone":"+7(495) 956-25-52"},{"id":38,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u041c\u0430\u0440\u044c\u0438\u043d\u043e","code":"C40AF10328","SAP":"C40AF10328","latitude":"55.6546553","longitude":"37.7311601","address":"\u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u041f\u0435\u0440\u0435\u0440\u0432\u0430, \u0434. 19, \u0442\u0430\u043a\u0441\u043e\u043f\u0430\u0440\u043a \u2116 6","phone":"+7(495) 956-11-44"},{"id":161,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440 \u0421\u043e\u043a\u043e\u043b\u044c\u043d\u0438\u043a\u0438","code":"C40AF30328","SAP":"C40AF30328","latitude":"55.815133","longitude":"37.690713","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u041a\u0440\u0430\u0441\u043d\u043e\u0431\u043e\u0433\u0430\u0442\u044b\u0440\u0441\u043a\u0430\u044f, \u0434. 2, \u0441\u0442\u0440. 26","phone":"+7(495) 223-22-11"},{"id":225,"name":"\u0410\u0432\u0442\u043e\u0440\u0443\u0441\u044c \u0411\u0443\u0442\u043e\u0432\u043e","code":"C40AF01138","SAP":"C40AF01138","latitude":"55.5422063","longitude":"37.5462311","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u042e\u0436\u043d\u043e\u0435 \u0411\u0443\u0442\u043e\u0432\u043e, \u0427\u0435\u0447\u0435\u0440\u0441\u043a\u0438\u0439 \u043f\u0440\u043e\u0435\u0437\u0434, \u0434. 1","phone":"+7 (495) 716-08-09"},{"id":210,"name":"\u0410\u0432\u0442\u043e\u0440\u0443\u0441\u044c \u041b\u043e\u0441\u0438\u043d\u044b\u0439 \u041e\u0441\u0442\u0440\u043e\u0432","code":"C40AF01101","SAP":"C40AF01101","latitude":"55.881984","longitude":"37.731492","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, 95\u043a\u043c \u041c\u041a\u0410\u0414, \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435 \u0432\u043b.2\u0412, \u0441\u0442\u0440.3","phone":"+7 (495) 135-49-91"},{"id":168,"name":"\u0410\u0432\u0442\u043e\u0440\u0443\u0441\u044c \u041f\u043e\u0434\u043e\u043b\u044c\u0441\u043a","code":"C40AF01060","SAP":"C40AF01060","latitude":"55.473645","longitude":"37.562265","address":"\u0433. \u041f\u043e\u0434\u043e\u043b\u044c\u0441\u043a, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b., \u043f\u0440-\u0442 \u042e\u043d\u044b\u0445 \u041b\u0435\u043d\u0438\u043d\u0446\u0435\u0432, \u0434. 1\u0418, \u0441\u0442\u0440. 2","phone":"+7(495) 276-34-34"},{"id":192,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u0421\u0438\u0442\u0438 \u042e\u0433","code":"C40AF01091","SAP":"C40AF01091","latitude":"55.598611","longitude":"37.747515","address":"\u041c\u043e\u0441\u043a\u0432\u0430, \u0412\u043d\u0435\u0448\u043d\u044f\u044f \u0441\u0442\u043e\u0440\u043e\u043d\u0430 \u041c\u041a\u0410\u0414, 22\u043a\u043c.","phone":"+7 (495) 6-600-400"},{"id":172,"name":"\u0410\u043a\u0440\u043e\u0441","code":"C40AF01070","SAP":"C40AF01070","latitude":"55.819583","longitude":"37.618961","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u0410\u043a\u0430\u0434\u0435\u043c\u0438\u043a\u0430 \u041a\u043e\u0440\u043e\u043b\u0435\u0432\u0430, \u0434. 13","phone":"+7(495) 223-23-35"},{"id":74,"name":"\u0410\u043a\u0446\u0435\u043d\u0442-\u0410\u0432\u0442\u043e \u041c\u043e\u0441\u043a\u0432\u0430","code":"C40AF00354","SAP":"C40AF00354","latitude":"55.673511505127","longitude":"37.7263069152832","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u041f\u043e\u043b\u0431\u0438\u043d\u0430, \u0434. 29, \u0441\u0442\u0440. 1","phone":"+7 (495) 363-91-90"},{"id":94,"name":"\u041a\u0412\u0418\u0421\u0422","code":"C40AF00996","SAP":"C40AF00996","latitude":"55.9313784","longitude":"37.7249957","address":"\u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0433. \u041c\u044b\u0442\u0438\u0449\u0438, \u0412\u043e\u043b\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 17","phone":"+7(495) 582-42-32"},{"id":257,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u0412\u043e\u043b\u043e\u043a\u043e\u043b\u0430\u043c\u043a\u0430","code":"C40AF01150","SAP":"C40AF01150","latitude":"55.8301964","longitude":"37.4051917","address":"\u0433.\u041c\u043e\u0441\u043a\u0432\u0430, \u0412\u043e\u043b\u043e\u043a\u043e\u043b\u0430\u043c\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 95","phone":"+7 (495) 785-72-72"},{"id":256,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u041b\u044e\u0431\u0435\u0440\u0446\u044b","code":"C40AF01149","SAP":"C40AF01149","latitude":"55.6751964","longitude":"37.8600387","address":"\u0433. \u041b\u044e\u0431\u0435\u0440\u0446\u044b, \u041d\u043e\u0432\u043e\u0440\u044f\u0437\u0430\u043d\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434.1\u0413","phone":"+7 (495) 780-62-62"},{"id":185,"name":"\u041a\u043e\u0440\u0441\u0413\u0440\u0443\u043f\u043f","code":"C40AF01153","SAP":"C40AF01153","latitude":"55.160712","longitude":"38.683160","address":"\u0433. \u041a\u043e\u043b\u043e\u043c\u043d\u0430, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u041a\u043e\u043b\u043e\u043c\u0435\u043d\u0441\u043a\u0438\u0439 \u0440\u0430\u0439\u043e\u043d, 100-\u0439 \u043a\u043c \u0430\u0432\u0442\u043e\u0434\u043e\u0440\u043e\u0433\u0438 \u041c5 ","phone":"+7 (499) 346-76-70 "},{"id":145,"name":"\u041e\u0440\u0435\u0445\u043e\u0432\u043e-\u0410\u0432\u0442\u043e\u0426\u0435\u043d\u0442\u0440","code":"C40AF01116","SAP":"C40AF01116","latitude":"55.8063832","longitude":"39.0010688","address":"\u0433. \u041e\u0440\u0435\u0445\u043e\u0432\u043e-\u0417\u0443\u0435\u0432\u043e, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0443\u043b. \u041a\u0440\u0430\u0441\u0438\u043d\u0430, \u0434. 4","phone":"+7(495) 115-35-11"},{"id":136,"name":"\u0420\u0422\u0420-\u0410\u0432\u0442\u043e","code":"C40AF01157","SAP":"C40AF01157","latitude":"55.8041687011719","longitude":"37.2964286804199","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u0433\u043e\u0440\u0441\u043a, \u041d\u043e\u0432\u043e\u0440\u0438\u0436\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, 5 \u043a\u043c \u043e\u0442 \u041c\u041a\u0410\u0414","phone":"+7(495)785-54-88"},{"id":141,"name":"\u0420\u043e\u043b\u044c\u0444 \u0410\u043b\u0442\u0443\u0444\u044c\u0435\u0432\u043e","code":"C40AF10120","SAP":"C40AF10120","latitude":"55.862636","longitude":"37.5829134","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0410\u043b\u0442\u0443\u0444\u044c\u0435\u0432\u0441\u043a\u043e\u0435 \u0448., \u0434. 31, \u043a\u043e\u0440\u043f. 1","phone":"+7(495) 755-88-44 "},{"id":140,"name":"\u0420\u043e\u043b\u044c\u0444 \u0421\u0438\u0442\u0438","code":"C40AF40120","SAP":"C40AF40120","latitude":"55.8600578308105","longitude":"37.6876907348633","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 31","phone":"+7(495) 788-53-53"},{"id":142,"name":"\u0420\u043e\u043b\u044c\u0444 \u0425\u0438\u043c\u043a\u0438","code":"C40AF20120","SAP":"C40AF20120","latitude":"55.90578","longitude":"37.4122385","address":"\u0433. \u0425\u0438\u043c\u043a\u0438, \u041b\u0435\u043d\u0438\u043d\u0433\u0440\u0430\u0434\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0432\u043b. 21","phone":"+7(495) 788-48-88"},{"id":139,"name":"\u0420\u043e\u043b\u044c\u0444 \u042e\u0433","code":"C40AF30120","SAP":"C40AF30120","latitude":"55.656971","longitude":"37.5358614","address":"\u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u041e\u0431\u0440\u0443\u0447\u0435\u0432\u0430, \u0434. 27, \u043a. 1","phone":"+7(495) 755-55-05 "},{"id":131,"name":"\u0421\u0418\u041c","code":"C40AF00132","SAP":"C40AF00132","latitude":"55.686379","longitude":"37.621504","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0412\u0430\u0440\u0448\u0430\u0432\u0441\u043a\u043e\u0435 \u0448., \u0434. 26, \u0441\u0442\u0440. 11 ","phone":"+7(495) 725-47-67"},{"id":265,"name":"\u0424\u0430\u0432\u043e\u0440\u0438\u0442 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01158","SAP":"C40AF01158","latitude":"55.829077","longitude":"37.513547","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u041a\u043b\u0430\u0440\u044b \u0426\u0435\u0442\u043a\u0438\u043d, \u0434. 24","phone":"+7 (495) 023-25-95"},{"id":52,"name":"\u0425\u0435\u043d\u0434\u044d \u0426\u0435\u043d\u0442\u0440 \u041a\u0443\u043d\u0446\u0435\u0432\u043e","code":"C40AF01063","SAP":"C40AF01063","latitude":"55.7258186340332","longitude":"37.3742828369141","address":"\u0433. \u041c\u043e\u0441\u043a\u0432\u0430, \u0443\u043b. \u0413\u043e\u0440\u0431\u0443\u043d\u043e\u0432\u0430, \u0434. 14","phone":"+7(495) 933-40-33"},{"id":242,"name":"\u0426\u0435\u043d\u0442\u0440 \u0417\u0435\u043b\u0435\u043d\u043e\u0433\u0440\u0430\u0434","code":"C40AF01128","SAP":"C40AF01128","latitude":"55.9974267","longitude":"37.253466","address":"\u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0421\u043e\u043b\u043d\u0435\u0447\u043d\u043e\u0433\u043e\u0440\u0441\u043a\u0438\u0439 \u0440-\u043d, \u0440\u0430\u0431\u043e\u0447\u0438\u0439 \u043f\u043e\u0441\u0435\u043b\u043e\u043a \u0420\u0436\u0430\u0432\u043a\u0438, \u043c\u0438\u043a\u0440\u043e\u0440\u0430\u0439\u043e\u043d \u21162, \u0441\u0442\u0440\u043e\u0435\u043d\u0438\u0435 14","phone":"+7 (495) 775-44-00"}]},{"name":"\u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433","dealers":[{"id":244,"name":"\u0410\u0432\u0430\u043d\u0433\u0430\u0440\u0434","code":"C40AF01129","SAP":"C40AF01129","latitude":"59.959509","longitude":"30.4063253","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u041f\u0438\u0441\u043a\u0430\u0440\u0451\u0432\u0441\u043a\u0438\u0439 \u043f\u0440., \u0434. 2, \u043a. 3, \u043b\u0438\u0442\u0435\u0440\u0430 \u0410","phone":"+7 (812) 331-51-51"},{"id":187,"name":"\u0410\u0432\u0442\u043e\u043f\u043e\u043b\u0435","code":"C40AF01147","SAP":"C40AF01147","latitude":"59.897879","longitude":"30.5226997","address":"\u041b\u0435\u043d\u0438\u043d\u0433\u0440\u0430\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b., \u0412\u0441\u0435\u0432\u043e\u043b\u043e\u0436\u0441\u043a\u0438\u0439 \u0440-\u043d, \u0434. \u041a\u0443\u0434\u0440\u043e\u0432\u043e, 13 \u043a\u043c \u0430\/\u0434 ","phone":"+7 (812) 607-77-77"},{"id":183,"name":"\u0412\u043e\u0441\u0442\u043e\u043a-\u0410\u0432\u0442\u043e","code":"C40AF00233","SAP":"C40AF00233","latitude":"59.8919830322266","longitude":"30.3570995330811","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u0443\u043b. \u0411\u0443\u0445\u0430\u0440\u0435\u0441\u0442\u0441\u043a\u0430\u044f, \u0434. 1","phone":"+7 (812) 210-58-35"},{"id":199,"name":"\u0412\u043e\u0441\u0442\u043e\u043a-\u0410\u0432\u0442\u043e \u0416\u0443\u043a\u043e\u0432\u0430","code":"C40AF10233","SAP":"C40AF10233","latitude":"59.865917","longitude":"30.2461464","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u0443\u043b. \u041f\u043e\u0440\u0442\u043e\u0432\u0430\u044f, \u0434. 15, \u043b\u0438\u0442. \u0411","phone":"+7 (812) 210-46-24"},{"id":263,"name":"\u0414\u0430\u043a\u0430\u0440 \u0422\u0430\u043b\u043b\u0438\u043d\u0441\u043a\u043e\u0435","code":"C40AF01151","SAP":"C40AF01151","latitude":"59.806446","longitude":"30.166577","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u0422\u0430\u043b\u043b\u0438\u043d\u0441\u043a\u043e\u0435 (\u0421\u0442\u0430\u0440\u043e-\u041f\u0430\u043d\u043e\u0432\u043e) \u0448\u043e\u0441\u0441\u0435, \u0434. 202 \u0410","phone":"+7 (812) 702-42-21"},{"id":173,"name":"\u041c\u0430\u043a\u0441\u0438\u043c\u0443\u043c","code":"C40AF01062","SAP":"C40AF01062","latitude":"60.024243","longitude":"30.435053","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u0443\u043b. \u0420\u0443\u0441\u0442\u0430\u0432\u0435\u043b\u0438, \u0434. 53","phone":"+7(812) 501-17-16 "},{"id":23,"name":"\u0420\u041e\u041b\u042c\u0424 \u041b\u0430\u0445\u0442\u0430","code":"C40AF01028","SAP":"C40AF01028","latitude":"59.9849085","longitude":"30.2442057","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u0443\u043b. \u0421\u0430\u0432\u0443\u0448\u043a\u0438\u043d\u0430, \u0434. 103","phone":"+7(812) 335-67-70"},{"id":191,"name":"\u0420\u043e\u043b\u044c\u0444 \u041e\u043a\u0442\u044f\u0431\u0440\u044c\u0441\u043a\u0430\u044f","code":"C40AF11028","SAP":"C40AF11028","latitude":"59.912704","longitude":"30.420058","address":"\u0433. \u0421\u0430\u043d\u043a\u0442-\u041f\u0435\u0442\u0435\u0440\u0431\u0443\u0440\u0433, \u041e\u043a\u0442\u044f\u0431\u0440\u044c\u0441\u043a\u0430\u044f \u043d\u0430\u0431\u0435\u0440\u0435\u0436\u043d\u0430\u044f, 8, \u043a.2","phone":"+7 (800) 250-41-41"}]},{"name":"\u0410\u0431\u0430\u043a\u0430\u043d","dealers":[{"id":85,"name":"\u041c\u0435\u0434\u0432\u0435\u0434\u044c","code":"C40AF01001","SAP":"C40AF01001","latitude":"53.7116388","longitude":"91.359193","address":"\u0433. \u0410\u0431\u0430\u043a\u0430\u043d, \u043a\u0432-\u043b  \u041c\u043e\u043b\u043e\u0434\u0435\u0436\u043d\u044b\u0439, \u0434. 2\u0412","phone":"+7 (3902) 21-75-01"}]},{"name":"\u0410\u0440\u0445\u0430\u043d\u0433\u0435\u043b\u044c\u0441\u043a","dealers":[{"id":56,"name":"\u0414\u0438\u043d\u0430\u043c\u0438\u043a\u0430","code":"C40AF00342","SAP":"C40AF00342","latitude":"64.5314695","longitude":"40.6181929","address":"\u0433. \u0410\u0440\u0445\u0430\u043d\u0433\u0435\u043b\u044c\u0441\u043a, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0438\u0439 \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442, \u0434. 48","phone":"+7(8182) 42-24-22"}]},{"name":"\u0410\u0441\u0442\u0440\u0430\u0445\u0430\u043d\u044c","dealers":[{"id":177,"name":"\u0410\u0413\u0410\u0422-\u041f\u043b\u044e\u0441","code":"C40AF00332","SAP":"C40AF00332","latitude":"46.320078","longitude":"48.054034","address":"\u0433. \u0410\u0441\u0442\u0440\u0430\u0445\u0430\u043d\u044c,1-\u044b\u0439 \u043f\u0440\u043e\u0435\u0437\u0434 \u0420\u043e\u0436\u0434\u0435\u0441\u0442\u0432\u0435\u043d\u0441\u043a\u043e\u0433\u043e, \u0434. 6","phone":"+7 (8512) 48-28-28"}]},{"name":"\u0411\u0430\u0440\u043d\u0430\u0443\u043b","dealers":[{"id":70,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u0410\u041d\u0422","code":"C40AF00278","SAP":"C40AF00278","latitude":"53.3424626","longitude":"83.6847363","address":"\u0433. \u0411\u0430\u0440\u043d\u0430\u0443\u043b, \u0443\u043b. \u041f\u0430\u0432\u043b\u043e\u0432\u0441\u043a\u0438\u0439 \u0442\u0440\u0430\u043a\u0442, \u0434. 251\u0434","phone":"+7(3852) 29-00-20"}]},{"name":"\u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":249,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e \u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434","code":"C40AF01136","SAP":"C40AF01136","latitude":"50.617896","longitude":"36.606742","address":"\u0433. \u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434, \u0443\u043b. \u0421\u0442\u0443\u0434\u0435\u043d\u0447\u0435\u0441\u043a\u0430\u044f 1 \u0428","phone":"+7 (4722) 33 33 77"},{"id":164,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e \u041e\u0441\u043a\u043e\u043b","code":"C40AF01029","SAP":"C40AF01029","latitude":"51.346861","longitude":"37.854483","address":"\u0433. \u0421\u0442\u0430\u0440\u044b\u0439 \u041e\u0441\u043a\u043e\u043b, \u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442 \u0410\u043b\u0435\u043a\u0441\u0435\u044f \u0423\u0433\u0430\u0440\u043e\u0432\u0430, \u0434. 22","phone":"+ 7(4725) 46-00-22"},{"id":58,"name":"\u0422\u0420\u0418\u041d\u0418\u0422\u0418 \u041c\u041e\u0422\u041e\u0420\u0421","code":"C40AF00355","SAP":"C40AF00355","latitude":"50.648377","longitude":"36.5692846","address":"\u0433. \u0411\u0435\u043b\u0433\u043e\u0440\u043e\u0434, \u043f\u0440\u043e\u0441\u043f. \u0411. \u0425\u043c\u0435\u043b\u044c\u043d\u0438\u0446\u043a\u043e\u0433\u043e, \u0434. 182","phone":"+7 (4722) 36-71-36"}]},{"name":"\u0411\u043b\u0430\u0433\u043e\u0432\u0435\u0449\u0435\u043d\u0441\u043a","dealers":[{"id":20,"name":"\u0410\u0442\u0438\u043a-\u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01069","SAP":"C40AF01069","latitude":"50.3037085","longitude":"127.5306983","address":"\u0433. \u0411\u043b\u0430\u0433\u043e\u0432\u0435\u0449\u0435\u043d\u0441\u043a, \u041d\u043e\u0432\u043e\u0442\u0440\u043e\u0438\u0446\u043a\u043e\u0435 \u0448., \u0434. 12","phone":"+7(4162) 77-37-77"}]},{"name":"\u0411\u0440\u044f\u043d\u0441\u043a","dealers":[{"id":35,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF50328","SAP":"C40AF50328","latitude":"53.2202572","longitude":"34.3178661","address":"\u0433. \u0411\u0440\u044f\u043d\u0441\u043a, \u043f\u0440-\u0442 \u0421\u0442\u0430\u043d\u043a\u0435 \u0414\u0438\u043c\u0438\u0442\u0440\u043e\u0432\u0430, \u0434. 114","phone":" +7(4832) 58-95-85"}]},{"name":"\u0412\u0435\u043b\u0438\u043a\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434","dealers":[{"id":49,"name":"\u0410\u0412\u041d","code":"C40AF01007","SAP":"C40AF01007","latitude":"58.547467","longitude":"31.2932333","address":"\u0433. \u0412\u0435\u043b\u0438\u043a\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434, \u0443\u043b. \u041f\u0430\u0440\u043a\u043e\u0432\u0430\u044f, \u0434. 23, \u043a. 3","phone":"+7(8162) 64-99-99"}]},{"name":"\u0412\u043b\u0430\u0434\u0438\u0432\u043e\u0441\u0442\u043e\u043a","dealers":[{"id":163,"name":"\u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF01050","SAP":"C40AF01050","latitude":"43.1828351","longitude":"131.9240006","address":"\u0433. \u0412\u043b\u0430\u0434\u0438\u0432\u043e\u0441\u0442\u043e\u043a, \u0443\u043b. \u041b\u0435\u0441\u043d\u0430\u044f, \u0434. 1\u0412","phone":"+7(423) 207-70-77"}]},{"name":"\u0412\u043b\u0430\u0434\u0438\u043a\u0430\u0432\u043a\u0430\u0437","dealers":[{"id":231,"name":"\u0418\u0440\u0430\u0432\u0442\u043e","code":"C40AF01111","SAP":"C40AF01111","latitude":"43.024537","longitude":"44.644198","address":"\u0433. \u0412\u043b\u0430\u0434\u0438\u043a\u0430\u0432\u043a\u0430\u0437, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 2","phone":"+7 (8672) 282-343"}]},{"name":"\u0412\u043b\u0430\u0434\u0438\u043c\u0438\u0440","dealers":[{"id":126,"name":"\u0422\u0435\u0445\u0446\u0435\u043d\u0442\u0440 \u0413\u0440\u0430\u043d\u0434","code":"C40AF01053","SAP":"C40AF01053","latitude":"56.1755492","longitude":"40.4622457","address":"\u0433. \u0412\u043b\u0430\u0434\u0438\u043c\u0438\u0440, \u0443\u043b. \u0420\u0430\u0441\u0442\u043e\u043f\u0447\u0438\u043d\u0430, \u0434. 24","phone":"+7(4922) 37-98-88"}]},{"name":"\u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":103,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u043f\u0440.\u041b\u0435\u043d\u0438\u043d\u0430 ","code":"C40AF01016","SAP":"C40AF01016","latitude":"48.7851876","longitude":"44.5890504","address":"\u0433. \u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434, \u043f\u0440. \u041b\u0435\u043d\u0438\u043d\u0430, \u0434. 118 \u0411","phone":"+7(8442) 72-27-22"},{"id":105,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u0448.\u0410\u0432\u0438\u0430\u0442\u043e\u0440\u043e\u0432","code":"C40AF00256","SAP":"C40AF00256","latitude":"48.7532134","longitude":"44.4771731","address":"\u0433. \u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434, \u0448\u043e\u0441\u0441\u0435 \u0410\u0432\u0438\u0430\u0442\u043e\u0440\u043e\u0432, \u0434. 2 \u0410","phone":"+7(8442) 72-27-22"},{"id":234,"name":"\u0410\u0440\u043a\u043e\u043d\u0442 \u041c","code":"C40AF01123","SAP":"C40AF01123","latitude":"48.7572229","longitude":"44.7907712","address":"\u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b., \u0433. \u0412\u043e\u043b\u0436\u0441\u043a\u0438\u0439, \u043f\u0440-\u0442 \u0438\u043c. \u041b\u0435\u043d\u0438\u043d\u0430, \u0434. 359","phone":"+7 (8443) 51-78-78"}]},{"name":"\u0412\u043e\u043b\u043e\u0433\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":13,"name":"\u041f\u0440\u0430\u0439\u043c \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01125","SAP":"C40AF01125","latitude":"59.1804721","longitude":"37.9452772","address":"\u0433. \u0427\u0435\u0440\u0435\u043f\u043e\u0432\u0435\u0446, \u0421\u043e\u043b\u043c\u0430\u043d\u0441\u043a\u043e\u0435, \u0441\u0442\u0440. 11 \u0412","phone":"+7(8202) 60-26-26"},{"id":193,"name":"\u0421\u0435\u0432\u0435\u0440\u043d\u044b\u0439","code":"C40AF01079","SAP":"C40AF01079","latitude":"59.183108","longitude":"39.897557","address":"\u0433. \u0412\u043e\u043b\u043e\u0433\u0434\u0430, \u0443\u043b.\u041c\u0430\u0440\u0448\u0430\u043b\u0430 \u041a\u043e\u043d\u0435\u0432\u0430, 43","phone":"+7 (8172) 75 09 99"}]},{"name":"\u0412\u043e\u0440\u043e\u043d\u0435\u0436","dealers":[{"id":219,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF60328","SAP":"C40AF60328","latitude":"51.663753","longitude":"39.149029","address":"\u0433. \u0412\u043e\u0440\u043e\u043d\u0435\u0436, \u0443\u043b.\u0414\u043e\u0440\u043e\u0436\u043d\u0430\u044f, \u0434.11\u0411","phone":"+7 (473) 233-15-15"},{"id":155,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF00971","SAP":"C40AF00971","latitude":"51.7753973","longitude":"39.1954514","address":"\u0433. \u0412\u043e\u0440\u043e\u043d\u0435\u0436, 3 \u043a\u043c \u0430\u0432\u0442\u043e\u0434\u043e\u0440\u043e\u0433\u0438 ","phone":"+7(473) 233-30-05"},{"id":143,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e","code":"C40AF00945","SAP":"C40AF00945","latitude":"51.6726185","longitude":"39.2996658","address":"\u0433. \u0412\u043e\u0440\u043e\u043d\u0435\u0436, \u0443\u043b. \u0418\u0437\u044b\u0441\u043a\u0430\u0442\u0435\u043b\u0435\u0439, \u0434. 39, \u043a\u043e\u0440\u043f. 2","phone":"+7(473) 261-77-77"},{"id":243,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e \u0421\u0435\u0432\u0435\u0440","code":"C40AF01135","SAP":"C40AF01135","latitude":"51.7945828","longitude":"39.1996055","address":"\u0412\u043e\u0440\u043e\u043d\u0435\u0436\u0441\u043a\u0430\u044f \u043e\u0431\u043b., \u0420\u0430\u043c\u043e\u043d\u0441\u043a\u0438\u0439 \u0440\u0430\u0439\u043e\u043d, \u043f. \u0421\u043e\u043b\u043d\u0435\u0447\u043d\u044b\u0439, \u0417\u0430\u043f\u0430\u0434\u043d\u0430\u044f \u043f\u0440\u043e\u043c\u0437\u043e\u043d\u0430, \u0443\u0447\u0430\u0441\u0442\u043e\u043a 2\/2","phone":"+7 (473) 347-77-77"}]},{"name":"\u0413\u0440\u043e\u0437\u043d\u044b\u0439","dealers":[{"id":233,"name":"\u041b\u0438\u0434\u0435\u0440 \u0410\u0432\u0442\u043e","code":"C40AF01109","SAP":"C40AF01109","latitude":"43.3189816","longitude":"45.720416","address":"\u0433.\u0413\u0440\u043e\u0437\u043d\u044b\u0439, \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442 \u041a\u0438\u0440\u043e\u0432\u0430, \u0434.13","phone":"+7 (928) 888-56-56"}]},{"name":"\u0418\u0432\u0430\u043d\u043e\u0432\u043e","dealers":[{"id":68,"name":"\u0411\u043b\u043e\u043a \u0420\u043e\u0441\u043a\u043e","code":"C40AF00309","SAP":"C40AF00309","latitude":"56.9476735","longitude":"40.9679513","address":"\u0433. \u0418\u0432\u0430\u043d\u043e\u0432\u043e, \u0443\u043b. \u0417\u0430\u0433\u043e\u0440\u043e\u0434\u043d\u0430\u044f, \u0434. 26","phone":"+7(4932) 93-96-46"}]},{"name":"\u0418\u0436\u0435\u0432\u0441\u043a","dealers":[{"id":79,"name":"\u041a\u041e\u041c\u041e\u0421-\u0410\u0432\u0442\u043e","code":"C40AF00243","SAP":"C40AF00243","latitude":"56.887776","longitude":"53.23605","address":"\u0433. \u0418\u0436\u0435\u0432\u0441\u043a, \u0443\u043b. \u0412\u043e\u0442\u043a\u0438\u043d\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 17\u0412","phone":"+7(3412) 90-50-00"},{"id":194,"name":"\u041a\u041e\u041c\u041e\u0421-\u0410\u0432\u0442\u043e","code":"C40AF01086","SAP":"C40AF01086","latitude":"56.832078","longitude":"53.219243","address":"\u0433. \u0418\u0436\u0435\u0432\u0441\u043a, \u0443\u043b. \u041f\u0443\u0448\u043a\u0438\u043d\u0441\u043a\u0430\u044f, 62","phone":"+7 (3412) 905-555"},{"id":253,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF11035","SAP":"C40AF11035","latitude":"56.8345187","longitude":"53.2046681","address":"\u0433. \u0418\u0436\u0435\u0432\u0441\u043a, \u0443\u043b. \u041a\u0430\u0440\u043b\u0430 \u041c\u0430\u0440\u043a\u0441\u0430, \u0434. 87\u0410","phone":"+7 (3412) 93-01-22"}]},{"name":"\u0418\u0440\u043a\u0443\u0442\u0441\u043a","dealers":[{"id":176,"name":"\u0425\u0435\u043d\u0434\u044d \u0426\u0435\u043d\u0442\u0440 \u0418\u0440\u043a\u0443\u0442\u0441\u043a","code":"C40AF00350","SAP":"C40AF00350","latitude":"52.259711","longitude":"104.3518138","address":"\u0433. \u0418\u0440\u043a\u0443\u0442\u0441\u043a, \u0443\u043b. \u0414\u044b\u0431\u043e\u0432\u0441\u043a\u043e\u0433\u043e, \u0434. 17","phone":"+7(3952) 50-05-77"}]},{"name":"\u0419\u043e\u0448\u043a\u0430\u0440-\u041e\u043b\u0430","dealers":[{"id":45,"name":"\u0410\u0432\u0442\u043e\u043a\u043e\u043c","code":"C40AF00950","SAP":"C40AF00950","latitude":"56.6264917","longitude":"47.9347602","address":"\u0433. \u0419\u043e\u0448\u043a\u0430\u0440-\u041e\u043b\u0430, \u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u041c\u0430\u0440\u0438\u0439 \u042d\u043b, \u0443\u043b. \u041a\u0430\u0440\u043b\u0430 \u041b\u0438\u0431\u043a\u043d\u0435\u0445\u0442\u0430, \u0434. 108","phone":"+7(8362) 64-60-60"}]},{"name":"\u041a\u0430\u043b\u0438\u043d\u0438\u043d\u0433\u0440\u0430\u0434","dealers":[{"id":86,"name":"\u0414\u0438\u043d\u0430\u043c\u0438\u043a\u0430","code":"C40AF00299","SAP":"C40AF00299","latitude":"54.6836553","longitude":"20.5336433","address":"\u0433. \u041a\u0430\u043b\u0438\u043d\u0438\u043d\u0433\u0440\u0430\u0434, \u0443\u043b. \u0414\u0437\u0435\u0440\u0436\u0438\u043d\u0441\u043a\u043e\u0433\u043e, \u0434. 130","phone":"+7(4012) 77-75-20"}]},{"name":"\u041a\u0430\u043b\u0443\u0433\u0430","dealers":[{"id":96,"name":"\u041a\u0430\u043b\u0443\u0433\u0430-\u0410\u0432\u0442\u043e","code":"C40AF00343","SAP":"C40AF00343","latitude":"54.5421717","longitude":"36.3029998","address":"\u0433.\u041a\u0430\u043b\u0443\u0433\u0430, \u0443\u043b.\u0417\u0435\u0440\u043d\u043e\u0432\u0430\u044f, \u0434.17","phone":"+7(4842) 22-20-02"}]},{"name":"\u041a\u0435\u043c\u0435\u0440\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":236,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF70328","SAP":"C40AF70328","latitude":"53.7572447","longitude":"87.0876755","address":"\u0433. \u041d\u043e\u0432\u043e\u043a\u0443\u0437\u043d\u0435\u0446\u043a, \u0443\u043b. \u0420\u0443\u0434\u043e\u043a\u043e\u043f\u0440\u043e\u0432\u0430\u044f, \u0434. 22\u0410","phone":"+7 (3843) 910-910"},{"id":214,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u041a\u0435\u043c\u0435\u0440\u043e\u0432\u043e","code":"C40AF01106","SAP":"C40AF01106","latitude":"55.3491521","longitude":"86.1028672","address":"\u0433. \u041a\u0435\u043c\u0435\u0440\u043e\u0432\u043e, \u043f\u0440. \u041e\u043a\u0442\u044f\u0431\u0440\u044c\u0441\u043a\u0438\u0439, 2\u0430","phone":"+7 (3842) 45-01-01"},{"id":266,"name":"\u041a\u0430\u0440\u0442\u0435\u043b\u044c \u0410\u0432\u0442\u043e","code":"C40AF01154","SAP":"C40AF01154","latitude":"55.321062","longitude":"86.105137","address":"\u0433. \u041a\u0435\u043c\u0435\u0440\u043e\u0432\u043e, \u0443\u043b. \u042e\u0440\u0438\u044f \u0414\u0432\u0443\u0436\u0438\u043b\u044c\u043d\u043e\u0433\u043e, \u0434. 3","phone":"+7 (3842) 77-75-55"}]},{"name":"\u041a\u0438\u0440\u043e\u0432","dealers":[{"id":154,"name":"\u0422\u0421\u041a \u041c\u043e\u0442\u043e\u0440","code":"C40AF00181","SAP":"C40AF00181","latitude":"58.602476","longitude":"49.6297134","address":"\u0433. \u041a\u0438\u0440\u043e\u0432, \u0443\u043b. \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f, \u0434. 106 \u0430","phone":"+7(8332) 66-30-00"}]},{"name":"\u041a\u043e\u0441\u0442\u0440\u043e\u043c\u0430","dealers":[{"id":171,"name":"\u041b\u0438\u0434\u0435\u0440 \u0410\u0432\u0442\u043e","code":"C40AF01061","SAP":"C40AF01061","latitude":"57.757188","longitude":"40.986001","address":"\u0433. \u041a\u043e\u0441\u0442\u0440\u043e\u043c\u0430, \u0443\u043b. \u041b\u043e\u043a\u043e\u043c\u043e\u0442\u0438\u0432\u043d\u0430\u044f,  \u0434. 2\u0412,  \u0418\u043d\u0434\u0435\u043a\u0441: 156019","phone":"+7(4942) 49-62-22"}]},{"name":"\u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440\u0441\u043a\u0438\u0439 \u043a\u0440\u0430\u0439","dealers":[{"id":91,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e","code":"C40AF00182","SAP":"C40AF00182","latitude":"45.028865814209","longitude":"39.1316566467285","address":"\u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440, \u0443\u043b. \u0410\u044d\u0440\u043e\u043f\u043e\u0440\u0442\u043e\u0432\u0441\u043a\u0430\u044f, \u0434. 4","phone":"+7(861) 227-77-22"},{"id":11,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e","code":"C40AF01047","SAP":"C40AF01047","latitude":"43.6315144","longitude":"39.747262","address":"\u0433. \u0421\u043e\u0447\u0438, \u0443\u043b. \u041a\u0438\u043f\u0430\u0440\u0438\u0441\u043e\u0432\u0430\u044f, \u0434. 16\/1","phone":"+7(862) 255 88 00"},{"id":162,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF01055","SAP":"C40AF01055","latitude":"44.7544298","longitude":"37.7484062","address":"\u0433. \u041d\u043e\u0432\u043e\u0440\u043e\u0441\u0441\u0438\u0439\u0441\u043a, 9 \u043a\u043c \u0442\u0440\u0430\u0441\u0441\u044b ","phone":"+7(8617) 60-72-60"},{"id":190,"name":"\u0425\u0451\u043d\u0434\u044d \u0426\u0435\u043d\u0442\u0440 \u0410\u0432\u0442\u043e\u0445\u043e\u043b\u0434\u0438\u043d\u0433","code":"C40AF01087","SAP":"C40AF01087","latitude":"45.0207135","longitude":"38.9402635","address":"\u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440, \u0422\u0443\u0440\u0433\u0435\u043d\u0435\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, 20","phone":"\u00a0+7 (861) 297-44-44"},{"id":17,"name":"\u042e\u0433-\u0410\u0432\u0442\u043e","code":"C40AF01032","SAP":"C40AF01032","latitude":"44.7854331","longitude":"37.6751439","address":"\u0433. \u041d\u043e\u0432\u043e\u0440\u043e\u0441\u0441\u0438\u0439\u0441\u043a, \u0441. \u0412\u043b\u0430\u0434\u0438\u043c\u0438\u0440\u043e\u0432\u043a\u0430, \u041f\u0440\u0438\u043c\u043e\u0440\u0441\u043a\u0438\u0439 \u043e\u043a\u0440\u0443\u0433, \u0440-\u043d \u0430\u0432\u0442\u043e\u0442\u0440\u0430\u0441\u0441\u044b \u00abK\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440-Ho\u0432o\u0440\u043e\u0441\u0441\u0438\u0439\u0441\u043a\u00bb","phone":"+7(8617) 30-11-01"},{"id":108,"name":"\u042e\u0433-\u0410\u0432\u0442\u043e","code":"C40AF01009","SAP":"C40AF01009","latitude":"44.9738037","longitude":"38.9448339","address":"\u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440, \u043f. \u042f\u0431\u043b\u043e\u043d\u043e\u0432\u0441\u043a\u0438\u0439, \u0443\u043b. \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440\u0441\u043a\u0430\u044f, \u0434. 3","phone":"+7(861) 210-44-00"},{"id":16,"name":"\u042e\u0433-\u0410\u0432\u0442\u043e","code":"C40AF01031","SAP":"C40AF01031","latitude":"45.103134","longitude":"38.981056","address":"\u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440, \u041a\u0440\u0430\u0441\u043d\u043e\u0434\u0430\u0440\u0441\u043a\u0438\u0439 \u043a\u0440\u0430\u0439, \u0443\u043b. \u0414\u0437\u0435\u0440\u0436\u0438\u043d\u0441\u043a\u043e\u0433\u043e, 229\/1","phone":"+7(861) 210-44-00"}]},{"name":"\u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a","dealers":[{"id":84,"name":"\u041c\u0435\u0434\u0432\u0435\u0434\u044c-\u0421\u0435\u0432\u0435\u0440\u0410\u0432\u0442\u043e","code":"C40AF00326","SAP":"C40AF00326","latitude":"56.0727958679199","longitude":"92.9185791015625","address":"\u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a, \u0421\u0435\u0432\u0435\u0440\u043d\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 19\u0434","phone":"+7(391) 220-41-41"},{"id":113,"name":"\u0425\u0435\u043d\u0434\u044d-\u0446\u0435\u043d\u0442\u0440 \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a","code":"C40AF01019","SAP":"C40AF01019","latitude":"56.0440341","longitude":"92.8703209","address":"\u0433. \u041a\u0440\u0430\u0441\u043d\u043e\u044f\u0440\u0441\u043a, \u0443\u043b. \u041a\u0430\u0440\u0430\u0443\u043b\u044c\u043d\u0430\u044f, \u0434. 33 ","phone":"+7(391) 222-22-23"}]},{"name":"\u041a\u0443\u0440\u0433\u0430\u043d","dealers":[{"id":207,"name":"\u0421\u0430\u0442\u0443\u0440\u043d-\u0420","code":"C40AF01098","SAP":"C40AF01098","latitude":"55.4157814","longitude":"65.2406661","address":"\u0433. \u041a\u0443\u0440\u0433\u0430\u043d, \u043f\u0440. \u041a\u043e\u043d\u0441\u0442\u0438\u0442\u0443\u0446\u0438\u0438, \u0434.35","phone":"+7 (3522) 64-11-33"}]},{"name":"\u041a\u0443\u0440\u0441\u043a","dealers":[{"id":144,"name":"\u041e\u0440\u0438\u043e\u043d \u0410\u0432\u0442\u043e","code":"C40AF00295","SAP":"C40AF00295","latitude":"51.766105","longitude":"36.130045","address":"\u0433. \u041a\u0443\u0440\u0441\u043a, \u0443\u043b. 50 \u043b\u0435\u0442 \u041e\u043a\u0442\u044f\u0431\u0440\u044f, \u0434. 185","phone":"+7(4712) 73-03-00"}]},{"name":"\u041b\u0438\u043f\u0435\u0446\u043a","dealers":[{"id":81,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF00318","SAP":"C40AF00318","latitude":"52.5975189","longitude":"39.505003","address":"\u0433. \u041b\u0438\u043f\u0435\u0446\u043a, \u0443\u043b. \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u0430\u044f, \u0441\u0442\u0440. 34","phone":"+7(4742) 51-55-16"},{"id":220,"name":"\u0420\u0438\u043d\u0433 \u0410\u0432\u0442\u043e","code":"C40AF01113","SAP":"C40AF01113","latitude":"52.589440049230724","longitude":"39.58365440368652","address":"\u0433. \u041b\u0438\u043f\u0435\u0446\u043a, \u0443\u043b. 50 \u043b\u0435\u0442 \u041d\u041b\u041c\u041a, \u0441\u0442\u0440\u043e\u0435\u043d\u0438\u0435 24, \u043e\u0444\u0438\u0441 1","phone":"+7 (4742) 72-77-77"}]},{"name":"\u041c\u0430\u0445\u0430\u0447\u043a\u0430\u043b\u0430","dealers":[{"id":262,"name":"\u0410\u0432\u0442\u043e\u043b\u044e\u043a\u0441 \u041a\u0430\u0440","code":"C40AF01141","SAP":"C40AF01141","latitude":"42.9841531","longitude":"47.3686429","address":"\u0433. \u041c\u0430\u0445\u0430\u0447\u043a\u0430\u043b\u0430, \u043f\u0433\u0442. \u041b\u0435\u043d\u0438\u043d\u043a\u0435\u043d\u0442, \u0443\u043b. \u041a\u0438\u0437\u0438\u043b\u044e\u0440\u0442\u043e\u0432\u0441\u043a\u0430\u044f, \u0434. 88\u0410","phone":"+7 (8722) 55-66-66"}]},{"name":"\u041c\u0443\u0440\u043c\u0430\u043d\u0441\u043a","dealers":[{"id":88,"name":"\u0410\u0432\u0442\u043e \u0411\u0440\u043e\u043a\u0435\u0440 \u041c\u0443\u0440\u043c\u0430\u043d\u0441\u043a","code":"C40AF01081","SAP":"C40AF01081","latitude":"68.9309614","longitude":"33.1099082","address":"\u0433. \u041c\u0443\u0440\u043c\u0430\u043d\u0441\u043a, \u043f\u0440. \u041a\u043e\u043b\u044c\u0441\u043a\u0438\u0439, \u0434. 53","phone":"+7(8152) 63-66-36"}]},{"name":"\u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434","dealers":[{"id":77,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u041b\u0430\u0440\u0438\u043d\u0430","code":"C40AF00985","SAP":"C40AF00985","latitude":"56.2353403","longitude":"44.0179811","address":"\u0433. \u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434, \u0443\u043b. \u041b\u0430\u0440\u0438\u043d\u0430, \u0434. 23 ","phone":"+7(831) 200-00-00"},{"id":76,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u043c \u0448\u043e\u0441\u0441\u0435","code":"C40AF00352","SAP":"C40AF00352","latitude":"56.3121604919434","longitude":"43.8473434448242","address":"\u0433. \u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 294 \u0431","phone":"+7(831) 200-00-00"},{"id":75,"name":"\u0410\u0413\u0410\u0422 \u043d\u0430 \u0420\u043e\u0434\u0438\u043e\u043d\u043e\u0432\u0430","code":"C40AF00272","SAP":"C40AF00272","latitude":"56.2996742","longitude":"44.0789453","address":"\u0433. \u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434, \u0443\u043b. \u0420\u043e\u0434\u0438\u043e\u043d\u043e\u0432\u0430, \u0434. 203","phone":"+7(831) 200-00-00"},{"id":152,"name":"\u041d\u0438\u0436\u0435\u0433\u043e\u0440\u043e\u0434\u0435\u0446","code":"C40AF01131","SAP":"C40AF01131","latitude":"56.3185539245605","longitude":"43.9272346496582","address":"\u0433. \u041d\u0438\u0436\u043d\u0438\u0439 \u041d\u043e\u0432\u0433\u043e\u0440\u043e\u0434, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 34","phone":"+7(831) 275-99-52"}]},{"name":"\u041d\u043e\u0432\u043e\u0441\u0438\u0431\u0438\u0440\u0441\u043a","dealers":[{"id":36,"name":"\u0410\u0432\u0442\u043e\u043c\u0438\u0440","code":"C40AF00328","SAP":"C40AF00328","latitude":"55.0028076171875","longitude":"82.8695755004883","address":"\u0433. \u041d\u043e\u0432\u043e\u0441\u0438\u0431\u0438\u0440\u0441\u043a, \u043f\u0440\u043e\u0435\u0437\u0434 \u042d\u043d\u0435\u0440\u0433\u0435\u0442\u0438\u043a\u043e\u0432, \u0434. 4","phone":"+7(383) 210-50-60"},{"id":198,"name":"\u042d\u043a\u0441\u043f\u0435\u0440\u0442-\u0410\u0432\u0442\u043e","code":"C40AF01095","SAP":"C40AF01095","latitude":"55.0950","longitude":"82.9775","address":"\u0433. \u041d\u043e\u0432\u043e\u0441\u0438\u0431\u0438\u0440\u0441\u043a, \u0443\u043b. \u0411\u043e\u0433\u0434\u0430\u043d\u0430 \u0425\u043c\u0435\u043b\u044c\u043d\u0438\u0446\u043a\u043e\u0433\u043e 75\/1","phone":"+7 (383) 363-22-99"}]},{"name":"\u041d\u043e\u044f\u0431\u0440\u044c\u0441\u043a","dealers":[{"id":252,"name":"\u0412\u043e\u0441\u0442\u043e\u043a \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01139","SAP":"C40AF01139","latitude":"63.1975309","longitude":"75.4865169","address":"\u0433. \u041d\u043e\u044f\u0431\u0440\u044c\u0441\u043a, \u041f\u0440\u043e\u043c\u0443\u0437\u0435\u043b \u041f\u0435\u043b\u0435\u0439, \u041f\u0430\u043d\u0435\u043b\u044c 2","phone":"+7 (3496) 354-888"}]},{"name":"\u041e\u043c\u0441\u043a","dealers":[{"id":255,"name":"\u0410\u043b\u044c\u044f\u043d\u0441","code":"C40AF01142","SAP":"C40AF01142","latitude":"54.9894899","longitude":"73.2434654","address":"\u0433. \u041e\u043c\u0441\u043a, \u0443\u043b. \u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434\u0441\u043a\u0430\u044f, \u0434. 38, \u043a. 2","phone":"+7 (3812) 666-123"},{"id":104,"name":"\u0415\u0432\u0440\u0430\u0437\u0438\u044f \u043f\u043b\u044e\u0441","code":"C40AF00997","SAP":"C40AF00997","latitude":"54.9473762512207","longitude":"73.3479614257813","address":"\u0433. \u041e\u043c\u0441\u043a, \u0443\u043b. \u0414\u0438\u043c\u0438\u0442\u0440\u043e\u0432\u0430, \u0434. 75","phone":"+7 (3812) 33-00-99"},{"id":117,"name":"\u0424\u0435\u043d\u0438\u043a\u0441-\u0410\u0432\u0442\u043e","code":"C40AF00998","SAP":"C40AF00998","latitude":"54.986607","longitude":"73.4278529","address":"\u0433. \u041e\u043c\u0441\u043a, \u0443\u043b. 10-\u043b\u0435\u0442 \u041e\u043a\u0442\u044f\u0431\u0440\u044f, \u0434. 182","phone":"+7(3812) 92-50-10"}]},{"name":"\u041e\u0440\u0435\u043b","dealers":[{"id":67,"name":"\u0412\u043e\u0437\u0440\u043e\u0436\u0434\u0435\u043d\u0438\u0435","code":"C40AF01017","SAP":"C40AF01017","latitude":"52.9955772","longitude":"36.0305509","address":"\u0433. \u041e\u0440\u0435\u043b, \u041d\u0430\u0443\u0433\u043e\u0440\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 108\u0430","phone":"+7(4862) 49-54-00"}]},{"name":"\u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":209,"name":"\u0410\u0432\u0442\u043e\u0441\u0430\u043b\u043e\u043d-2000","code":"C40AF01097","SAP":"C40AF01097","latitude":"51.2377615","longitude":"58.4339759","address":"\u0433. \u041e\u0440\u0441\u043a, 234 \u043c \u0442\u0440\u0430\u0441\u0441\u044b \u041e\u0440\u0441\u043a-\u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433","phone":"+7 (3537) 34-00-99"},{"id":166,"name":"\u041a\u0430\u0441\u043a\u0430\u0434-\u041c","code":"C40AF01049","SAP":"C40AF01049","latitude":"51.771119","longitude":"55.266889","address":"\u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0430\u044f \u043e\u0431\u043b., \u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0438\u0439 \u0440\u0430\u0439\u043e\u043d, \u043f. \u041f\u0440\u0438\u0433\u043e\u0440\u043e\u0434\u043d\u044b\u0439, 13-\u0439 \u043a\u043c \u0448\u043e\u0441\u0441\u0435 ","phone":"+7(3532) 91-01-04"},{"id":146,"name":"\u041e\u0440\u0435\u043d\u0420\u041e\u041b\u042c\u0424","code":"C40AF00092","SAP":"C40AF00092","latitude":"51.8468208312988","longitude":"55.1343040466309","address":"\u0433. \u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433, \u0443\u043b. \u0412\u043e\u043b\u0433\u043e\u0433\u0440\u0430\u0434\u0441\u043a\u0430\u044f, \u0434. 5","phone":"+7 (3532) 34-80-08"},{"id":227,"name":"\u042d\u043a\u0441\u043f\u0435\u0440\u0442-\u0410\u0432\u0442\u043e","code":"C40AF01122","SAP":"C40AF01122","latitude":"51.7184551","longitude":"55.143967","address":"\u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0438\u0439 \u0440\u0430\u0439\u043e\u043d, \u043f. \u0412\u0435\u0441\u0435\u043d\u043d\u0438\u0439, \u0443\u043b. \u0412\u0435\u0441\u0435\u043d\u043d\u044f\u044f, \u0434. 5\/1","phone":"+7 (3532) 99-00-99"}]},{"name":"\u041f\u0435\u043d\u0437\u0430","dealers":[{"id":212,"name":"\u0410\u0432\u0442\u043e\u043c\u0430\u0441\u0442\u0435\u0440","code":"C40AF01103","SAP":"C40AF01103","latitude":"53.2351539","longitude":"44.9186409","address":"\u0433. \u041f\u0435\u043d\u0437\u0430, \u0443\u043b. \u0423\u043b\u044c\u044f\u043d\u043e\u0432\u0441\u043a\u0430\u044f 56\u0410","phone":"+7 (8412)45-50-50"},{"id":128,"name":"\u0421\u0443\u0440\u0430-\u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF00302","SAP":"C40AF00302","latitude":"53.2268731","longitude":"44.9904714","address":"\u0433. \u041f\u0435\u043d\u0437\u0430, \u0443\u043b. \u0411\u0435\u043b\u044f\u0435\u0432\u0430, \u0434. 2\u0432","phone":"+7(8412) 20-00-99"}]},{"name":"\u041f\u0435\u0440\u043c\u044c","dealers":[{"id":226,"name":"\u0412\u043e\u0441\u0442\u043e\u043a \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01117","SAP":"C40AF01117","latitude":"57.950147","longitude":"56.0965943","address":"\u0433. \u041f\u0435\u0440\u043c\u044c, \u0448. \u041a\u043e\u0441\u043c\u043e\u043d\u0430\u0432\u0442\u043e\u0432, \u0434. 316\u0412","phone":"+7 (342) 254-44-44"},{"id":237,"name":"\u0414\u0410\u0412-\u0410\u0412\u0422\u041e","code":"C40AF01118","SAP":"C40AF01118","latitude":"57.9569869","longitude":"56.263953","address":"\u0433. \u041f\u0435\u0440\u043c\u044c, \u0443\u043b. \u0413\u0435\u0440\u043e\u0435\u0432 \u0425\u0430\u0441\u0430\u043d\u0430, \u0434. 76","phone":"+7 (342) 246-26-06"},{"id":132,"name":"\u0421\u0438\u043b\u044c\u0432\u0435\u0440 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01010","SAP":"C40AF01010","latitude":"58.0362821","longitude":"56.1938736","address":"\u0433. \u041f\u0435\u0440\u043c\u044c, \u0443\u043b. \u0421\u043f\u0435\u0448\u0438\u043b\u043e\u0432\u0430, \u0434. 109","phone":"+7(342) 250-78-00"}]},{"name":"\u041f\u0435\u0442\u0440\u043e\u0437\u0430\u0432\u043e\u0434\u0441\u043a","dealers":[{"id":213,"name":"\u041a-\u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01107","SAP":"C40AF01107","latitude":"61.7870853","longitude":"34.3003997","address":"\u0433. \u041f\u0435\u0442\u0440\u043e\u0437\u0430\u0432\u043e\u0434\u0441\u043a, \u041b\u0435\u0441\u043d\u043e\u0439 \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442, \u0434.55","phone":"+7 (8142) 59-33-93"}]},{"name":"\u041f\u0441\u043a\u043e\u0432","dealers":[{"id":153,"name":"\u041d\u0410\u0421-2","code":"C40AF00987","SAP":"C40AF00987","latitude":"57.8309898376465","longitude":"28.3408298492432","address":"\u0433. \u041f\u0441\u043a\u043e\u0432, \u0443\u043b. \u0422\u0440\u0443\u0434\u0430, \u0434. 26","phone":"+7(8112) 29-02-32"}]},{"name":"\u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0411\u0430\u0448\u043a\u043e\u0440\u0442\u043e\u0441\u0442\u0430\u043d","dealers":[{"id":247,"name":"\u0410\u043b\u044c\u0444\u0430-\u0421\u0435\u0440\u0432\u0438\u0441 \u0417\u0443\u0431\u043e\u0432\u043e","code":"C40AF01137","SAP":"C40AF01137","latitude":"54.6359457","longitude":"55.9280619","address":"\u0433. \u0423\u0444\u0430, \u0443\u043b. \u042d\u043b\u0435\u043a\u0442\u0440\u043e\u0437\u0430\u0432\u043e\u0434\u0441\u043a\u0430\u044f, \u0434. 18\/2","phone":"+7 (347) 286-77-77"},{"id":186,"name":"\u0413\u041a \u041c\u0438\u0440","code":"C40AF01076","SAP":"C40AF01076","latitude":"56.1007964","longitude":"54.2914819","address":"\u0433. \u041d\u0435\u0444\u0442\u0435\u043a\u0430\u043c\u0441\u043a, \u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0411\u0430\u0448\u043a\u043e\u0440\u0442\u043e\u0441\u0442\u0430\u043d, \u0443\u043b. \u042f\u043d\u0430\u0443\u043b\u044c\u0441\u043a\u0430\u044f, \u0434. 12\u0411; \u0418\u043d\u0434\u0435\u043a\u0441: 452681","phone":"+7 (34783) 2-23-15"},{"id":22,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF21035","SAP":"C40AF21035","latitude":"53.6559617","longitude":"55.9474895","address":"\u0433. \u0421\u0442\u0435\u0440\u043b\u0438\u0442\u0430\u043c\u0430\u043a, \u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0411\u0430\u0448\u043a\u043e\u0440\u0442\u043e\u0441\u0442\u0430\u043d, \u043f\u0440. \u041b\u0435\u043d\u0438\u043d\u0430, 2\u0418","phone":"+7(3473) 43-00-51"},{"id":121,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF31035","SAP":"C40AF31035","latitude":"54.7834243774414","longitude":"56.0757141113281","address":"\u0433. \u0423\u0444\u0430, \u0443\u043b. \u0416\u0443\u043a\u043e\u0432\u0430, \u0434. 34","phone":"+7(347) 293-63-63"},{"id":116,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF00168","SAP":"C40AF00168","latitude":"54.6812417","longitude":"55.9322255","address":"\u0433. \u0423\u0444\u0430, \u0443\u043b. \u0420\u0443\u0431\u0435\u0436\u043d\u0430\u044f, \u0434. 180","phone":"+7(347) 292-44-11"}]},{"name":"\u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0422\u0430\u0442\u0430\u0440\u0441\u0442\u0430\u043d","dealers":[{"id":165,"name":"\u041a\u0410\u041d \u0410\u0412\u0422\u041e","code":"C40AF01052","SAP":"C40AF01052","latitude":"55.7308308","longitude":"49.1912568","address":"\u0433. \u041a\u0430\u0437\u0430\u043d\u044c, \u041e\u0440\u0435\u043d\u0431\u0443\u0440\u0433\u0441\u043a\u0438\u0439 \u0442\u0440\u0430\u043a\u0442, \u0434. 209","phone":"+7(843) 230-30-30"},{"id":195,"name":"\u041a\u0410\u041d \u0410\u0412\u0422\u041e","code":"C40AF01093","SAP":"C40AF01093","latitude":"55.837657","longitude":"49.195365","address":"\u0433. \u041a\u0430\u0437\u0430\u043d\u044c, \u0421\u0438\u0431\u0438\u0440\u0441\u043a\u0438\u0439 \u0442\u0440\u0430\u043a\u0442, \u0434. 51","phone":"+7 (843) 230-30-30"},{"id":208,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF10234","SAP":"C40AF10234","latitude":"54.9116918","longitude":"52.3486293","address":"\u0433. \u0410\u043b\u044c\u043c\u0435\u0442\u044c\u0435\u0432\u0441\u043a \u0443\u043b. \u0421\u043e\u0432\u0435\u0442\u0441\u043a\u0430\u044f, \u0434. 43","phone":"+7 (8553) 39-21-21"},{"id":123,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF00234","SAP":"C40AF00234","latitude":"55.7949562","longitude":"49.2204624","address":"\u0433. \u041a\u0430\u0437\u0430\u043d\u044c, \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442 \u041f\u043e\u0431\u0435\u0434\u044b, \u0434. 194","phone":"+7(843) 519-48-20"},{"id":21,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF01035","SAP":"C40AF01035","latitude":"55.818852","longitude":"49.093568","address":"\u0433. \u041a\u0430\u0437\u0430\u043d\u044c, \u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0422\u0430\u0442\u0430\u0440\u0441\u0442\u0430\u043d, \u0443\u043b. \u0414\u0435\u043a\u0430\u0431\u0440\u0438\u0441\u0442\u043e\u0432, \u0434. 81 \u0412","phone":"+7(843) 519-48-90 "},{"id":120,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF01036","SAP":"C40AF01036","latitude":"55.7090794","longitude":"52.3937549","address":"\u0433. \u041d\u0430\u0431\u0435\u0440\u0435\u0436\u043d\u044b\u0435 \u0427\u0435\u043b\u043d\u044b, \u0410\u0432\u0442\u043e\u0434\u043e\u0440\u043e\u0433\u0430 \u21161, \u041e\u0440\u043b\u043e\u0432\u0441\u043a\u043e\u0435 \u043a\u043e\u043b\u044c\u0446\u043e","phone":"+7(8552) 39-25-25"}]},{"name":"\u0420\u043e\u0441\u0442\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":51,"name":"\u0410\u0410\u0410 \u043c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01018","SAP":"C40AF01018","latitude":"47.240821","longitude":"39.739550","address":"\u0433. \u0420\u043e\u0441\u0442\u043e\u0432-\u043d\u0430-\u0414\u043e\u043d\u0443, \u0443\u043b. \u0422\u0435\u043a\u0443\u0447\u0435\u0432\u0430, \u0434. 352\u0411","phone":"+7(863) 201-33-33"},{"id":59,"name":"\u0414\u0435\u043b\u044c\u0442\u0430 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF00986","SAP":"C40AF00986","latitude":"47.2531619","longitude":"39.6149354","address":"\u0433. \u0420\u043e\u0441\u0442\u043e\u0432-\u043d\u0430-\u0414\u043e\u043d\u0443, \u0443\u043b. \u041c\u0430\u043b\u0438\u043d\u043e\u0432\u0441\u043a\u043e\u0433\u043e, \u0434. 172\/3\u0430","phone":"+7 (863) 333-22-00"},{"id":259,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u0420\u043e\u0441\u0442\u043e\u0432","code":"C40AF01145","SAP":"C40AF01145","latitude":"47.2697527","longitude":"39.6839746","address":"\u0433. \u0420\u043e\u0441\u0442\u043e\u0432-\u043d\u0430-\u0414\u043e\u043d\u0443, \u0443\u043b. \u0412\u0430\u0432\u0438\u043b\u043e\u0432\u0430, \u0434. 59\u0413","phone":"+7 (863) 287-78-77"},{"id":157,"name":"\u041c\u043e\u0434\u0443\u0441 (\u043f\u0440\u043e\u0441\u043f. \u0428\u043e\u043b\u043e\u0445\u043e\u0432\u0430)","code":"C40AF00336","SAP":"C40AF00336","latitude":"47.2734442","longitude":"39.8209553","address":"\u0433. \u0420\u043e\u0441\u0442\u043e\u0432-\u043d\u0430-\u0414\u043e\u043d\u0443, \u043f\u0440\u043e\u0441\u043f. \u0428\u043e\u043b\u043e\u0445\u043e\u0432\u0430, \u0434. 312","phone":"+7(863) 292-02-92"},{"id":83,"name":"\u041c\u043e\u0434\u0443\u0441 (\u0443\u043b. \u041a\u0430\u0448\u0438\u0440\u0441\u043a\u0430\u044f)","code":"C40AF00362","SAP":"C40AF00362","latitude":"47.1989082","longitude":"39.6252512","address":"\u0433. \u0420\u043e\u0441\u0442\u043e\u0432-\u043d\u0430-\u0414\u043e\u043d\u0443, \u0443\u043b. \u041a\u0430\u0448\u0438\u0440\u0441\u043a\u0430\u044f, \u0434. 8\/5 ","phone":"+7(863) 292-02-92"},{"id":240,"name":"\u0421\u043e\u043a\u043e\u043b \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01160","SAP":"C40AF01160","latitude":"47.7099237","longitude":"40.1497566","address":" \u0433. \u0428\u0430\u0445\u0442\u044b, \u0443\u043b. \u0414\u0430\u0447\u043d\u0430\u044f, \u0434. 272 \u0411","phone":"+7 (8636) 28-30-30"},{"id":127,"name":"\u0422\u0435\u043c\u043f \u0410\u0432\u0442\u043e","code":"C40AF01054","SAP":"C40AF01054","latitude":"47.2727182","longitude":"39.8530976","address":"\u0433. \u0410\u043a\u0441\u0430\u0439, \u0420\u043e\u0441\u0442\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0443\u043b. \u0417\u0430\u043f\u0430\u0434\u043d\u0430\u044f, \u0434. 37\u0432","phone":"+7 (863) 268-88-88"}]},{"name":"\u0420\u044f\u0437\u0430\u043d\u044c","dealers":[{"id":47,"name":"\u0410\u0432\u0442\u043e\u0438\u043c\u043f\u043e\u0440\u0442","code":"C40AF00957","SAP":"C40AF00957","latitude":"54.647448","longitude":"39.654342","address":"\u0433. \u0420\u044f\u0437\u0430\u043d\u044c, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 22 \u00ab\u0411\u00bb ","phone":"+7(4912) 70-00-07"},{"id":179,"name":"\u0420\u0435\u0433\u0438\u043e\u043d 62","code":"C40AF01073","SAP":"C40AF01073","latitude":"54.581253","longitude":"39.783044","address":"\u0433. \u0420\u044f\u0437\u0430\u043d\u044c, \u041a\u0443\u0439\u0431\u044b\u0448\u0435\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 51","phone":"+7 (4912) 77-77-62"}]},{"name":"\u0421\u0430\u043c\u0430\u0440\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":33,"name":"\u0410\u0432\u0442\u043e\u0441\u0430\u043b\u043e\u043d \u0410\u0440\u0433\u043e","code":"C40AF00013","SAP":"C40AF00013","latitude":"53.2152916","longitude":"50.1496736","address":"\u0433. \u0421\u0430\u043c\u0430\u0440\u0430, \u0443\u043b. \u041d\u043e\u0432\u043e-\u0421\u0430\u0434\u043e\u0432\u0430\u044f, \u0434. 149 \u0410","phone":"+7(846) 263-00-00"},{"id":80,"name":"\u0410\u0432\u0442\u043e\u0444\u0430\u043d","code":"C40AF00241","SAP":"C40AF00241","latitude":"53.5390235","longitude":"49.410827","address":"\u0433. \u0422\u043e\u043b\u044c\u044f\u0442\u0442\u0438, \u0443\u043b. \u041b\u0435\u043d\u0438\u043d\u0430, \u0434. 44, \u0441\u0442\u0440.1","phone":"+7 (8482) 27-04-70"},{"id":254,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u0410\u041b\u042c\u0424\u0410","code":"C40AF01143","SAP":"C40AF01143","latitude":"53.1840672","longitude":"50.152084","address":"\u0433. \u0421\u0430\u043c\u0430\u0440\u0430, \u0443\u043b. \u041d\u043e\u0432\u043e\u0443\u0440\u0438\u0446\u043a\u0430\u044f, \u0434. 22\u0410","phone":"+7 (846) 977-78-88"},{"id":224,"name":"\u0410\u0440\u0435\u043d\u0430 \u0410\u0432\u0442\u043e","code":"C40AF01114","SAP":"C40AF01114","latitude":"53.5543005","longitude":"49.2926022","address":"\u0433. \u0422\u043e\u043b\u044c\u044f\u0442\u0442\u0438, \u042e\u0436\u043d\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 32","phone":"+7 (8482) 270-600"},{"id":135,"name":"\u0421\u0430\u043c\u0430\u0440\u0441\u043a\u0438\u0435 \u0410\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u0438","code":"C40AF00993","SAP":"C40AF00993","latitude":"53.1377754211426","longitude":"50.1780853271484","address":"\u0433. \u0421\u0430\u043c\u0430\u0440\u0430, \u042e\u0436\u043d\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 12","phone":"+7(846) 993-68-00"},{"id":110,"name":"\u042d\u043a\u0441\u043f\u0435\u0440\u0442-\u0410\u0432\u0442\u043e","code":"C40AF01084","SAP":"C40AF01084","latitude":"53.2755714","longitude":"50.2274321","address":"\u0433. \u0421\u0430\u043c\u0430\u0440\u0430, \u0443\u043b. \u0414\u0435\u043c\u043e\u043a\u0440\u0430\u0442\u0438\u0447\u0435\u0441\u043a\u0430\u044f, \u0434. 55","phone":"+7(846) 321-00-00"}]},{"name":"\u0421\u0430\u0440\u0430\u043d\u0441\u043a","dealers":[{"id":235,"name":"\u0410\u0413\u0410\u0422","code":"C40AF01126","SAP":"C40AF01126","latitude":"54.1931286","longitude":"45.2261852","address":"\u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u041c\u043e\u0440\u0434\u043e\u0432\u0438\u044f, \u0433. \u0421\u0430\u0440\u0430\u043d\u0441\u043a, \u041f\u0440-\u043a\u0442 70 \u043b\u0435\u0442 \u041e\u043a\u0442\u044f\u0431\u0440\u044f, \u0434. 86\u0430","phone":"+7 (8342) 47-00-00"}]},{"name":"\u0421\u0430\u0440\u0430\u0442\u043e\u0432","dealers":[{"id":78,"name":"\u0410\u0413\u0410\u0422","code":"C40AF01057","SAP":"C40AF01057","latitude":"51.555784","longitude":"46.043615","address":"\u0433. \u0421\u0430\u0440\u0430\u0442\u043e\u0432, \u0443\u043b. \u0421\u0438\u043c\u0431\u0438\u0440\u0441\u043a\u0430\u044f, \u0434. 154","phone":"+7(8452) 43-00-44"},{"id":109,"name":"\u042d\u043b\u0432\u0438\u0441","code":"C40AF00956","SAP":"C40AF00956","latitude":"51.614339","longitude":"45.891541","address":"\u0433. \u0421\u0430\u0440\u0430\u0442\u043e\u0432, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 116","phone":"+7(8452) 57-07-52"},{"id":248,"name":"\u042d\u043b\u0432\u0438\u0441 \u041f\u0440\u0435\u043c\u0438\u0443\u043c","code":"C40AF01133","SAP":"C40AF01133","latitude":"51.5254905","longitude":"46.040752","address":"\u0433. \u0421\u0430\u0440\u0430\u0442\u043e\u0432, \u0443\u043b. \u0438\u043c. \u0427\u0435\u0440\u043d\u044b\u0448\u0435\u0432\u0441\u043a\u043e\u0433\u043e \u041d. \u0413., \u0434. 177\/181","phone":"+7 (8452) 57-73-77"}]},{"name":"\u0421\u0432\u0435\u0440\u0434\u043b\u043e\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":42,"name":"\u0410\u0432\u0442\u043e-\u041b\u0438\u0434\u0435\u0440 \u0426\u0435\u043d\u0442\u0440","code":"C40AF00323","SAP":"C40AF00323","latitude":"56.8658003","longitude":"60.6125239","address":"\u0433. \u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433, \u043f\u0440\u043e\u0441\u043f\u0435\u043a\u0442 \u041a\u043e\u0441\u043c\u043e\u043d\u0430\u0432\u0442\u043e\u0432, \u0434. 8","phone":"+7 (343) 216-02-87"},{"id":41,"name":"\u0410\u0432\u0442\u043e-\u041b\u0438\u0434\u0435\u0440 \u043d\u0430 \u0428\u0435\u0444\u0441\u043a\u043e\u0439","code":"C40AF00999","SAP":"C40AF00999","latitude":"56.8740027","longitude":"60.661338","address":"\u0413. \u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433, \u0443\u043b. \u0428\u0435\u0444\u0441\u043a\u0430\u044f, 2\u0413\/2","phone":"+7(343) 270-60-60"},{"id":215,"name":"\u041b\u0430\u043a\u0438 \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01110","SAP":"C40AF01110","latitude":"56.7637826","longitude":"60.6123575","address":"\u0433. \u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433, \u0443\u043b. \u0421\u0435\u043b\u044c\u043a\u043e\u0440\u043e\u0432\u0441\u043a\u0430\u044f, \u0434.22","phone":"+7 (343) 228-21-21"},{"id":151,"name":"\u041e\u043a\u0430\u043c\u0438 \u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF01048","SAP":"C40AF01048","latitude":"56.818920135498","longitude":"60.6660270690918","address":"\u0433. \u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433, \u0443\u043b. \u0421\u0438\u0431\u0438\u0440\u0441\u043a\u0438\u0439 \u0442\u0440\u0430\u043a\u0442, \u0434. 30","phone":"+7(343) 222-22-20"},{"id":24,"name":"\u041e\u043a\u0430\u043c\u0438 \u0417\u0430\u043f\u0430\u0434","code":"C40AF01034","SAP":"C40AF01034","latitude":"56.8276837","longitude":"60.5119632","address":"\u0433. \u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433, \u0443\u043b. \u041c\u0435\u0442\u0430\u043b\u043b\u0443\u0440\u0433\u043e\u0432, \u0434. 80","phone":"+7(343) 222-21-21"},{"id":149,"name":"\u041e\u043a\u0430\u043c\u0438 \u0422\u0430\u0433\u0438\u043b","code":"C40AF00989","SAP":"C40AF00989","latitude":"57.908418","longitude":"60.0099059","address":"\u0433. \u041d\u0438\u0436\u043d\u0438\u0439 \u0422\u0430\u0433\u0438\u043b, \u0412\u043e\u0441\u0442\u043e\u0447\u043d\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 3","phone":"+7(3435) 47-18-00"},{"id":264,"name":"\u0420\u0435\u0433\u0438\u043d\u0430\u0441","code":"C40AF10223","SAP":"C40AF10223","latitude":"56.843550","longitude":"60.671729","address":"\u0433. \u0415\u043a\u0430\u0442\u0435\u0440\u0438\u043d\u0431\u0443\u0440\u0433, \u0443\u043b. \u0412\u044b\u0441\u043e\u0446\u043a\u043e\u0433\u043e, \u0434. 3","phone":"+7\u00a0(343) 286-60-00"}]},{"name":"\u0421\u0438\u043c\u0444\u0435\u0440\u043e\u043f\u043e\u043b\u044c","dealers":[{"id":196,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440-\u041c","code":"C40AF01092","SAP":"C40AF01092","latitude":"44.988399","longitude":"34.090025","address":"\u0433. \u0421\u0438\u043c\u0444\u0435\u0440\u043e\u043f\u043e\u043b\u044c, \u0443\u043b\u0438\u0446\u0430 \u041a\u0438\u0435\u0432\u0441\u043a\u0430\u044f, 187-\u0412","phone":"+7 (978) 835-70-07"}]},{"name":"\u0421\u043c\u043e\u043b\u0435\u043d\u0441\u043a ","dealers":[{"id":148,"name":"\u041e\u043a\u0442\u0430\u043d-\u0412","code":"C40AF00967","SAP":"C40AF00967","latitude":"54.770384","longitude":"31.985266","address":"\u0433. \u0421\u043c\u043e\u043b\u0435\u043d\u0441\u043a , \u041a\u0440\u0430\u0441\u043d\u0438\u043d\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 37\u0430","phone":"+7(4812) 61-92-22"}]},{"name":"\u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c\u0441\u043a\u0438\u0439 \u043a\u0440\u0430\u0439","dealers":[{"id":261,"name":"\u0410\u0432\u0442\u043e\u0436\u0438\u0437\u043d\u044c","code":"C40AF01140","SAP":"C40AF01140","latitude":"44.9879547","longitude":"41.9605821","address":"\u0433.\u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c, \u0443\u043b. \u042e\u0436\u043d\u044b\u0439 \u041e\u0431\u0445\u043e\u0434, \u0434. 57 \u0413","phone":"+7 (8652) 33-55-77"},{"id":160,"name":"\u0414\u0440\u0438\u043c \u041a\u0430\u0440","code":"C40AF01043","SAP":"C40AF01043","latitude":"45.063675","longitude":"41.924617","address":"\u0433. \u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c, \u043f\u0440. \u041a\u0443\u043b\u0430\u043a\u043e\u0432\u0430, \u0434. 33","phone":"+7(8652) 38-38-78"},{"id":92,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e","code":"C40AF00288","SAP":"C40AF00288","latitude":"44.2057165","longitude":"43.098917","address":"\u0433. \u041c\u0438\u043d\u0435\u0440\u0430\u043b\u044c\u043d\u044b\u0435 \u0432\u043e\u0434\u044b, \u0443\u043b. \u0410\u0432\u0442\u043e\u043c\u043e\u0431\u0438\u043b\u044c\u043d\u0430\u044f, \u0434. 9","phone":"+7(87922) 5-62-62"},{"id":258,"name":"\u041a\u041b\u042e\u0427\u0410\u0412\u0422\u041e \u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c","code":"C40AF01146","SAP":"C40AF01146","latitude":"45.0568884","longitude":"41.9172092","address":"\u0433. \u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c, \u043f\u0440-\u043a\u0442 \u041a\u0443\u043b\u0430\u043a\u043e\u0432\u0430, \u0434. 16\u0410","phone":"+7 (8652) 57-22-22"},{"id":158,"name":"\u041c\u043e\u0434\u0443\u0441","code":"C40AF00319","SAP":"C40AF00319","latitude":"44.0399256","longitude":"43.0328413","address":"\u0433. \u041f\u044f\u0442\u0438\u0433\u043e\u0440\u0441\u043a, \u0443\u043b. \u0415\u0440\u043c\u043e\u043b\u043e\u0432\u0430, \u0434. 48","phone":"+7(8793) 39-96-66"},{"id":156,"name":"\u041c\u043e\u0434\u0443\u0441 ","code":"C40AF00141","SAP":"C40AF00141","latitude":"45.051722","longitude":"42.0113929","address":"\u0433. \u0421\u0442\u0430\u0432\u0440\u043e\u043f\u043e\u043b\u044c, \u0421\u0442\u0430\u0440\u043e\u043c\u0430\u0440\u044c\u0435\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 8 \u0411","phone":"+7(8652) 28-28-28"}]},{"name":"\u0421\u044b\u043a\u0442\u044b\u0432\u043a\u0430\u0440","dealers":[{"id":188,"name":"\u0426\u0435\u043d\u0442\u0440 \u041a\u041e\u041c\u0418","code":"C40AF01083","SAP":"C40AF01083","latitude":"61.6468271","longitude":"50.825871","address":"\u0433. \u0421\u044b\u043a\u0442\u044b\u0432\u043a\u0430\u0440, \u0421\u044b\u0441\u043e\u043b\u044c\u0441\u043a\u043e\u0435 \u0448., \u0434. 39","phone":"+7 (8212) 22-29-99"}]},{"name":"\u0422\u0430\u043c\u0431\u043e\u0432","dealers":[{"id":180,"name":"\u0422\u0430\u043c\u0431\u043e\u0432-\u0410\u0432\u0442\u043e","code":"C40AF01075","SAP":"C40AF01075","latitude":"52.724223","longitude":"41.374571","address":"\u0433. \u0422\u0430\u043c\u0431\u043e\u0432, \u0443\u043b. \u041a\u0438\u043a\u0432\u0438\u0434\u0437\u0435, \u0434. 85 \u0412","phone":"+7 (4752) 73-41-00"}]},{"name":"\u0422\u0432\u0435\u0440\u044c","dealers":[{"id":197,"name":"\u0412\u0430\u0436\u043d\u0430\u044f \u043f\u0435\u0440\u0441\u043e\u043d\u0430 - \u0410\u0432\u0442\u043e","code":"C40AF01100","SAP":"C40AF01100","latitude":"56.831192","longitude":"35.968897","address":"\u0433.\u0422\u0432\u0435\u0440\u044c, \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435 \u0434.21","phone":"+7 (4822) 74-74-77"}]},{"name":"\u0422\u043e\u043c\u0441\u043a","dealers":[{"id":246,"name":"\u042d\u043b\u043a\u0435 \u041c\u043e\u0442\u043e\u0440","code":"C40AF01134","SAP":"C40AF01134","latitude":"56.4784813","longitude":"85.0157315","address":"\u0433. \u0422\u043e\u043c\u0441\u043a, \u0443\u043b. \u0415\u043b\u0438\u0437\u0430\u0440\u043e\u0432\u044b\u0445, \u0434. 82\u0410","phone":"+7 (3822) 90-88-90"}]},{"name":"\u0422\u0443\u043b\u0430","dealers":[{"id":46,"name":"\u0410\u0432\u0442\u043e\u043a\u043b\u0430\u0441\u0441-\u041b\u0430\u0443\u0440\u0430","code":"C40AF00310","SAP":"C40AF00310","latitude":"54.1650839","longitude":"37.6410904","address":"\u0433. \u0422\u0443\u043b\u0430, \u0443\u043b. \u041d\u043e\u0432\u043e\u043c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 15","phone":"+7(4872) 50-20-30"}]},{"name":"\u0422\u044e\u043c\u0435\u043d\u044c","dealers":[{"id":40,"name":"\u0410\u0432\u0442\u043e\u041c\u0430\u043a\u0441","code":"C40AF00002","SAP":"C40AF00002","latitude":"57.104944","longitude":"65.656530","address":"\u0433. \u0422\u044e\u043c\u0435\u043d\u044c, \u0443\u043b. \u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0438, \u0434. 287","phone":"+7(3452) 56-00-01"},{"id":66,"name":"\u0412\u043e\u0441\u0442\u043e\u043a \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF01082","SAP":"C40AF01082","latitude":"57.175789","longitude":"65.570574","address":"\u0433. \u0422\u044e\u043c\u0435\u043d\u044c, \u0443\u043b. \u0410\u043b\u0435\u0431\u0430\u0448\u0435\u0432\u0441\u043a\u0430\u044f, \u0434. 11","phone":"+7(3452) 52-17-00"}]},{"name":"\u0423\u043b\u0430\u043d-\u0423\u0434\u044d","dealers":[{"id":232,"name":"\u0410\u0432\u0442\u043e\u0446\u0435\u043d\u0442\u0440 \u043d\u0430 \u0428\u0430\u043b\u044f\u043f\u0438\u043d\u0430","code":"C40AF01121","SAP":"C40AF01121","latitude":"51.8317988","longitude":"107.620433","address":"\u0433. \u0423\u043b\u0430\u043d-\u0423\u0434\u044d, \u0443\u043b. \u0428\u0430\u043b\u044f\u043f\u0438\u043d\u0430, \u0434. 39","phone":"+7 (301) 255-30-24"}]},{"name":"\u0423\u043b\u044c\u044f\u043d\u043e\u0432\u0441\u043a","dealers":[{"id":238,"name":"\u0410\u0432\u0442\u043e\u0440\u0430\u0439-\u0417\u0430\u0432\u043e\u043b\u0436\u044c\u0435","code":"C40AF01127","SAP":"C40AF01127","latitude":"54.3693623","longitude":"48.5700961","address":"\u0433. \u0423\u043b\u044c\u044f\u043d\u043e\u0432\u0441\u043a, \u0443\u043b. \u041d\u0430\u0433\u0430\u043d\u043e\u0432\u0430, \u0434. 14","phone":"+7 (8422) 27-08-27"},{"id":32,"name":"\u041c\u043e\u0442\u043e\u043c","code":"C40AF00227","SAP":"C40AF00227","latitude":"54.3055662","longitude":"48.35609","address":"\u0433. \u0423\u043b\u044c\u044f\u043d\u043e\u0432\u0441\u043a, \u0443\u043b. \u041c\u043e\u0441\u043a\u043e\u0432\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 102","phone":"+7(8422) 27-22-77"}]},{"name":"\u0425\u0430\u0431\u0430\u0440\u043e\u0432\u0441\u043a","dealers":[{"id":250,"name":"\u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF11050","SAP":"C40AF11050","latitude":"48.4816793","longitude":"135.1270693","address":"\u0433. \u0425\u0430\u0431\u0430\u0440\u043e\u0432\u0441\u043a, \u0443\u043b. \u041f\u0435\u0440\u043c\u0441\u043a\u0430\u044f, 9","phone":"+7 (4212) 75-41-41 "}]},{"name":"\u0425\u0430\u043d\u0442\u044b-\u041c\u0430\u043d\u0441\u0438\u0439\u0441\u043a\u0438\u0439 \u0410\u041e","dealers":[{"id":134,"name":"\u0421\u0438\u0431\u043a\u0430\u0440","code":"C40AF00034","SAP":"C40AF00034","latitude":"61.2489766","longitude":"73.36706","address":"\u0433. \u0421\u0443\u0440\u0433\u0443\u0442, \u041d\u0430\u0431\u0435\u0440\u0435\u0436\u043d\u044b\u0439 \u043f\u0440-\u043a\u0442, \u0434. 7, \u043a\u043e\u0440\u043f. 1","phone":"+7(3462) 23-02-04"},{"id":167,"name":"\u0421\u0438\u0431\u043a\u0430\u0440 \u0421\u0435\u0432\u0435\u0440","code":"C40AF10034","SAP":"C40AF10034","latitude":"61.2627174","longitude":"73.4282138","address":"\u0433. \u0421\u0443\u0440\u0433\u0443\u0442, \u0443\u043b. \u041f\u0440\u043e\u0444\u0441\u043e\u044e\u0437\u043e\u0432, \u0434. 58, \u0441\u0442\u0440. 1","phone":"+7(3462) 21-60-00"},{"id":133,"name":"\u0421\u0438\u0431\u043a\u0430\u0440+","code":"C40AF00369","SAP":"C40AF00369","latitude":"60.9465957","longitude":"76.5491642","address":"\u0433. \u041d\u0438\u0436\u043d\u0435\u0432\u0430\u0440\u0442\u043e\u0432\u0441\u043a, \u0443\u043b. \u041a\u0443\u0437\u043e\u0432\u0430\u0442\u043a\u0438\u043d\u0430, \u0434. 26, \u0441\u0442\u0440. 1","phone":"+7(3466) 27-11-88"}]},{"name":"\u0427\u0435\u0431\u043e\u043a\u0441\u0430\u0440\u044b","dealers":[{"id":124,"name":"\u0422\u0440\u0430\u043d\u0441\u0422\u0435\u0445\u0421\u0435\u0440\u0432\u0438\u0441","code":"C40AF00953","SAP":"C40AF00953","latitude":"56.1266381","longitude":"47.361424","address":"\u0433. \u0427\u0435\u0431\u043e\u043a\u0441\u0430\u0440\u044b, \u041c\u0430\u0440\u043f\u043e\u0441\u0430\u0434\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 29","phone":"+7(8352) 24-02-05"}]},{"name":"\u0427\u0435\u043b\u044f\u0431\u0438\u043d\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c","dealers":[{"id":97,"name":"\u0418\u0441\u0442\u0435\u043d \u041c\u043e\u0442\u043e\u0440\u0441","code":"C40AF00961","SAP":"C40AF00961","latitude":"55.2160344","longitude":"61.3823507","address":"\u0433. \u0427\u0435\u043b\u044f\u0431\u0438\u043d\u0441\u043a, \u0421\u0432\u0435\u0440\u0434\u043b\u043e\u0432\u0441\u043a\u0438\u0439 \u0442\u0440\u0430\u043a\u0442, \u0434. 5","phone":"+7(351) 211-02-20"},{"id":184,"name":"\u041f\u043b\u0430\u043d\u0435\u0442\u0430 \u0410\u0432\u0442\u043e","code":"C40AF01078","SAP":"C40AF01078","latitude":"55.1484408","longitude":"61.4468982","address":"\u0433. \u0427\u0435\u043b\u044f\u0431\u0438\u043d\u0441\u043a, \u041a\u043e\u043f\u0435\u0439\u0441\u043a\u043e\u0435 \u0448\u043e\u0441\u0441\u0435, \u0434. 82","phone":"+7 (351) 272-07-20"},{"id":44,"name":"\u0420\u0435\u0433\u0438\u043d\u0430\u0441","code":"C40AF00223","SAP":"C40AF00223","latitude":"55.1701092","longitude":"61.3000315","address":"\u0433. \u0427\u0435\u043b\u044f\u0431\u0438\u043d\u0441\u043a, \u0443\u043b. \u0411\u0440. \u041a\u0430\u0448\u0438\u0440\u0438\u043d\u044b\u0445, \u0434. 141\u0410","phone":"+7(351) 239-52-20"},{"id":43,"name":"\u0420\u0435\u0433\u0438\u043d\u0430\u0441","code":"C40AF00273","SAP":"C40AF00273","latitude":"53.3521003","longitude":"58.9626093","address":"\u0433. \u041c\u0430\u0433\u043d\u0438\u0442\u043e\u0433\u043e\u0440\u0441\u043a, \u0443\u043b. \u0417\u0435\u043b\u0435\u043d\u044b\u0439 \u041b\u043e\u0433, \u0434. 53\/1","phone":"+7 (3519) 49-04-40"}]},{"name":"\u042e\u0436\u043d\u043e-\u0421\u0430\u0445\u0430\u043b\u0438\u043d\u0441\u043a","dealers":[{"id":251,"name":"\u0412\u043e\u0441\u0442\u043e\u043a","code":"C40AF21050","SAP":"C40AF21050","latitude":"47.0597807","longitude":"142.7275964","address":"\u0433. \u042e\u0436\u043d\u043e-\u0421\u0430\u0445\u0430\u043b\u0438\u043d\u0441\u043a, 2-\u044f \u0425\u0430\u0431\u0430\u0440\u043e\u0432\u0441\u043a\u0430\u044f \u0443\u043b\u0438\u0446\u0430, 59","phone":"+7 (4242) 79-33-83"}]},{"name":"\u042f\u043a\u0443\u0442\u0441\u043a","dealers":[{"id":221,"name":"\u0412\u043e\u0441\u0442\u043e\u043a\u0435\u0432\u0440\u043e\u0422\u0435\u0445\u043d\u0438\u043a\u0430","code":"C40AF01105","SAP":"C40AF01105","latitude":"62.034075","longitude":"129.677631","address":"\u0420\u0435\u0441\u043f\u0443\u0431\u043b\u0438\u043a\u0430 \u0421\u0430\u0445\u0430 (\u042f\u043a\u0443\u0442\u0438\u044f), \u0433. \u042f\u043a\u0443\u0442\u0441\u043a, \u0412\u0438\u043b\u044e\u0439\u0441\u043a\u0438\u0439 \u0442\u0440\u0430\u043a\u0442 3 \u043a\u043c \u0434.53","phone":"+7 (914) 271-13-53"}]},{"name":"\u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","dealers":[{"id":245,"name":"\u0410\u0432\u0442\u043e\u041b\u0438\u0433\u0430 \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","code":"C40AF01130","SAP":"C40AF01130","latitude":"57.6068334","longitude":"39.8699646","address":"\u042f\u0440\u043e\u0441\u043b\u0430\u0432\u0441\u043a\u0430\u044f \u043e\u0431\u043b., \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u0441\u043a\u0438\u0439 \u0440-\u043d,\u043f. \u041d\u0430\u0433\u043e\u0440\u043d\u044b\u0439, \u0443\u043b. \u0414\u043e\u0440\u043e\u0436\u043d\u0430\u044f, \u0434. 8","phone":"+7 (4852) 67-27-27"},{"id":159,"name":"\u0421\u0418\u041c \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c","code":"C40AF01051","SAP":"C40AF01051","latitude":"57.660652","longitude":"39.855545","address":"\u0433. \u042f\u0440\u043e\u0441\u043b\u0430\u0432\u043b\u044c, \u041f\u043e\u043b\u0443\u0448\u043a\u0438\u043d\u0430 \u0440\u043e\u0449\u0430, \u0434. 21","phone":"+7(4852) 58-20-40"}]}]};
        </script>
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script src="https://www.hyundai.ru/assets/js/config_layout.js?v=2"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/js/common.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/polyfill/promise.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/axios/axios.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/spritespin/spritespin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/vue/vue.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/rellax/rellax.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/lazyLoad/lazyloadxt.extra.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/lazyLoad/lazyloadxt.bg.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/CustomEase.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/RoundPropsPlugin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/selectize/selectize.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/maskedinput/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/js/testDrive.js"></script>
    <script type="text/javascript" src="js/elantra-2019.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>