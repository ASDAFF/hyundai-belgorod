<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новый TUCSON.");
?>

    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/config_layout.css">

    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_SF.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/fullpage/jquery.fullpage.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/tucson.css" rel="stylesheet" />


    <!--
    Контент страницы начнется тут
    -->

    <main class="main">

        <style>

            #bx-panel{
                display: none!important;
            }

            .header-primary{
                max-width: 100% !important;
            }
            .main-header__holder{
                max-width: 1810px;
            }


            /* Preloader */
            .preloader {
                position: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                top: 60px;
                right: 0;
                left: 0;
                height: calc(100vh - 60px);
                background-color: #fff;
                font-family: 'HyundaiSansHead';
                font-size: 50px;
                color: #ddd;
                z-index: 999;
            }
            .preloader__center{
                position: relative;
                width: 700px;
                height: 150px;
            }
            .preloader__svg, .preloader__progress {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                display: block;
                width: 100%;
                height: 100%;
            }
            .preloader__progress {
                width: 0;
            }

        </style>

        <div class="preloader">
            <div class="preloader__center">
                <svg class="preloader__svg" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px">
                    <path fill="#EDEDED" d="M36.304,27.043H0V2.705h100.785v24.338H64.481v98.253H36.304V27.043z"/>
                    <path fill="#EDEDED" d="M159.52,128c-9.152,0-17.068-1.414-23.751-4.236c-6.683-2.822-12.223-6.729-16.616-11.719
                c-4.397-4.985-7.677-10.845-9.844-17.576c-2.168-6.73-3.251-14.063-3.251-21.996V2.705h28.176v68.147
                c0,4.568,0.421,8.773,1.265,12.619c0.841,3.848,2.258,7.152,4.244,9.916c1.987,2.766,4.606,4.897,7.858,6.398
                c3.25,1.506,7.224,2.254,11.92,2.254s8.64-0.748,11.83-2.254c3.19-1.501,5.78-3.633,7.768-6.398
                c1.987-2.764,3.432-6.068,4.335-9.916c0.902-3.846,1.354-8.051,1.354-12.619V2.705h28.177v69.768
                c0,7.934-1.084,15.266-3.252,21.996c-2.167,6.731-5.449,12.591-9.843,17.576c-4.396,4.989-9.935,8.896-16.618,11.719
                C176.589,126.586,168.67,128,159.52,128z"/>
                    <path fill="#EDEDED" d="M285.375,128c-9.274,0-17.764-1.594-25.468-4.777c-7.707-3.184-14.359-7.6-19.959-13.25
                c-5.599-5.648-9.965-12.409-13.095-20.283c-3.133-7.869-4.695-16.433-4.695-25.689c0-9.253,1.563-17.785,4.695-25.6
                c3.13-7.812,7.496-14.572,13.095-20.281c5.6-5.707,12.252-10.155,19.959-13.342C267.611,1.594,276.101,0,285.375,0
                c13.004,0,24.112,2.614,33.324,7.842c9.211,5.229,16.585,12.291,22.126,21.184L320.054,44.71
                c-3.854-5.769-8.37-10.335-13.547-13.702c-5.179-3.363-12.042-5.047-20.59-5.047c-5.419,0-10.268,0.963-14.54,2.885
                c-4.275,1.924-7.889,4.597-10.837,8.021c-2.953,3.426-5.239,7.454-6.865,12.08c-1.624,4.627-2.437,9.645-2.437,15.053
                s0.813,10.429,2.437,15.054c1.626,4.628,3.912,8.653,6.865,12.079c2.948,3.426,6.562,6.102,10.837,8.021
                c4.272,1.924,9.121,2.885,14.54,2.885c8.548,0,15.411-1.681,20.59-5.047c5.177-3.364,9.692-7.934,13.547-13.701l20.771,15.684
                c-5.541,8.896-12.915,15.955-22.126,21.184C309.487,125.387,298.379,128,285.375,128z"/>
                    <path fill="#EDEDED" d="M396.292,128c-7.346,0-13.849-0.812-19.507-2.434c-5.662-1.623-10.688-3.756-15.082-6.4
                c-4.397-2.642-8.158-5.557-11.289-8.744c-3.133-3.182-5.842-6.399-8.127-9.645l17.88-18.209c1.807,2.646,3.885,5.201,6.232,7.662
                c2.348,2.466,5.027,4.66,8.038,6.581c3.009,1.924,6.38,3.456,10.114,4.597c3.73,1.145,7.826,1.713,12.282,1.713
                c6.381,0,11.197-1.32,14.449-3.967c3.252-2.643,4.876-5.887,4.876-9.734c0-1.442-0.242-2.822-0.722-4.146
                c-0.482-1.322-1.354-2.553-2.619-3.695c-1.265-1.141-3.011-2.164-5.238-3.065c-2.229-0.901-5.088-1.591-8.579-2.073l-9.753-1.442
                c-5.662-0.839-10.81-2.254-15.444-4.237c-4.636-1.982-8.609-4.506-11.92-7.57c-3.313-3.064-5.87-6.609-7.676-10.637
                c-1.807-4.025-2.71-8.502-2.71-13.432c0-5.526,1.053-10.695,3.16-15.504c2.105-4.807,5.149-8.952,9.123-12.439
                c3.973-3.484,8.787-6.22,14.448-8.203C383.889,0.992,390.21,0,397.195,0c9.632,0,18.302,1.803,26.009,5.408
                c7.704,3.605,13.908,8.293,18.604,14.063l-17.34,18.749c-3.855-4.205-8.128-7.481-12.824-9.825s-9.694-3.516-14.991-3.516
                c-5.058,0-9.003,1.144-11.83,3.426c-2.832,2.284-4.245,4.867-4.245,7.752c0,2.767,1.084,5.199,3.25,7.301
                c2.168,2.104,5.66,3.516,10.477,4.237l9.753,1.442c13.123,1.924,23.271,6.102,30.436,12.529
                c7.161,6.432,10.747,15.054,10.747,25.87c0,6.13-1.236,11.69-3.703,16.677c-2.471,4.988-5.87,9.256-10.205,12.799
                c-4.335,3.547-9.481,6.283-15.443,8.204C409.928,127.037,403.396,128,396.292,128z"/>
                    <path fill="#EDEDED" d="M511.868,128c-9.273,0-17.763-1.594-25.468-4.777c-7.707-3.184-14.358-7.6-19.958-13.25
                c-5.6-5.648-9.965-12.409-13.095-20.283c-3.133-7.869-4.695-16.433-4.695-25.689c0-9.253,1.563-17.785,4.695-25.6
                c3.13-7.812,7.495-14.572,13.095-20.281c5.6-5.707,12.251-10.155,19.958-13.342C494.105,1.594,502.595,0,511.868,0
                c9.15,0,17.61,1.594,25.378,4.777c7.765,3.187,14.448,7.635,20.048,13.342c5.599,5.709,9.962,12.47,13.095,20.281
                c3.13,7.814,4.696,16.347,4.696,25.6c0,9.257-1.566,17.82-4.696,25.689c-3.133,7.874-7.496,14.635-13.095,20.283
                c-5.6,5.65-12.283,10.066-20.048,13.25C529.479,126.406,521.019,128,511.868,128z M511.868,102.039
                c5.419,0,10.233-0.961,14.45-2.885c4.212-1.92,7.766-4.596,10.656-8.021c2.89-3.426,5.116-7.451,6.683-12.079
                c1.563-4.625,2.349-9.646,2.349-15.054s-0.785-10.426-2.349-15.053c-1.566-4.626-3.793-8.654-6.683-12.08
                c-2.891-3.425-6.444-6.098-10.656-8.021c-4.217-1.922-9.031-2.885-14.45-2.885s-10.236,0.963-14.45,2.885
                c-4.217,1.924-7.767,4.597-10.656,8.021c-2.89,3.426-5.119,7.454-6.684,12.08c-1.565,4.627-2.348,9.645-2.348,15.053
                s0.782,10.429,2.348,15.054c1.564,4.628,3.794,8.653,6.684,12.079s6.439,6.102,10.656,8.021
                C501.632,101.078,506.449,102.039,511.868,102.039z"/>
                    <path fill="#EDEDED" d="M586.028,2.705h24.565l61.229,76.079V2.705H700v122.591h-24.383l-61.412-76.079v76.079h-28.177V2.705z"/>
                </svg>
                <svg class="preloader__progress" version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px">
                    <path fill="#003469" d="M36.304,27.043H0V2.705h100.785v24.338H64.481v98.253H36.304V27.043z"/>
                    <path fill="#003469" d="M159.52,128c-9.152,0-17.068-1.414-23.751-4.236c-6.683-2.822-12.223-6.729-16.616-11.719
                c-4.397-4.985-7.677-10.845-9.844-17.576c-2.168-6.73-3.251-14.063-3.251-21.996V2.705h28.176v68.147
                c0,4.568,0.421,8.773,1.265,12.619c0.841,3.848,2.258,7.152,4.244,9.916c1.987,2.766,4.606,4.897,7.858,6.398
                c3.25,1.506,7.224,2.254,11.92,2.254s8.64-0.748,11.83-2.254c3.19-1.501,5.78-3.633,7.768-6.398
                c1.987-2.764,3.432-6.068,4.335-9.916c0.902-3.846,1.354-8.051,1.354-12.619V2.705h28.177v69.768
                c0,7.934-1.084,15.266-3.252,21.996c-2.167,6.731-5.449,12.591-9.843,17.576c-4.396,4.989-9.935,8.896-16.618,11.719
                C176.589,126.586,168.67,128,159.52,128z"/>
                    <path fill="#003469" d="M285.375,128c-9.274,0-17.764-1.594-25.468-4.777c-7.707-3.184-14.359-7.6-19.959-13.25
                c-5.599-5.648-9.965-12.409-13.095-20.283c-3.133-7.869-4.695-16.433-4.695-25.689c0-9.253,1.563-17.785,4.695-25.6
                c3.13-7.812,7.496-14.572,13.095-20.281c5.6-5.707,12.252-10.155,19.959-13.342C267.611,1.594,276.101,0,285.375,0
                c13.004,0,24.112,2.614,33.324,7.842c9.211,5.229,16.585,12.291,22.126,21.184L320.054,44.71
                c-3.854-5.769-8.37-10.335-13.547-13.702c-5.179-3.363-12.042-5.047-20.59-5.047c-5.419,0-10.268,0.963-14.54,2.885
                c-4.275,1.924-7.889,4.597-10.837,8.021c-2.953,3.426-5.239,7.454-6.865,12.08c-1.624,4.627-2.437,9.645-2.437,15.053
                s0.813,10.429,2.437,15.054c1.626,4.628,3.912,8.653,6.865,12.079c2.948,3.426,6.562,6.102,10.837,8.021
                c4.272,1.924,9.121,2.885,14.54,2.885c8.548,0,15.411-1.681,20.59-5.047c5.177-3.364,9.692-7.934,13.547-13.701l20.771,15.684
                c-5.541,8.896-12.915,15.955-22.126,21.184C309.487,125.387,298.379,128,285.375,128z"/>
                    <path fill="#003469" d="M396.292,128c-7.346,0-13.849-0.812-19.507-2.434c-5.662-1.623-10.688-3.756-15.082-6.4
                c-4.397-2.642-8.158-5.557-11.289-8.744c-3.133-3.182-5.842-6.399-8.127-9.645l17.88-18.209c1.807,2.646,3.885,5.201,6.232,7.662
                c2.348,2.466,5.027,4.66,8.038,6.581c3.009,1.924,6.38,3.456,10.114,4.597c3.73,1.145,7.826,1.713,12.282,1.713
                c6.381,0,11.197-1.32,14.449-3.967c3.252-2.643,4.876-5.887,4.876-9.734c0-1.442-0.242-2.822-0.722-4.146
                c-0.482-1.322-1.354-2.553-2.619-3.695c-1.265-1.141-3.011-2.164-5.238-3.065c-2.229-0.901-5.088-1.591-8.579-2.073l-9.753-1.442
                c-5.662-0.839-10.81-2.254-15.444-4.237c-4.636-1.982-8.609-4.506-11.92-7.57c-3.313-3.064-5.87-6.609-7.676-10.637
                c-1.807-4.025-2.71-8.502-2.71-13.432c0-5.526,1.053-10.695,3.16-15.504c2.105-4.807,5.149-8.952,9.123-12.439
                c3.973-3.484,8.787-6.22,14.448-8.203C383.889,0.992,390.21,0,397.195,0c9.632,0,18.302,1.803,26.009,5.408
                c7.704,3.605,13.908,8.293,18.604,14.063l-17.34,18.749c-3.855-4.205-8.128-7.481-12.824-9.825s-9.694-3.516-14.991-3.516
                c-5.058,0-9.003,1.144-11.83,3.426c-2.832,2.284-4.245,4.867-4.245,7.752c0,2.767,1.084,5.199,3.25,7.301
                c2.168,2.104,5.66,3.516,10.477,4.237l9.753,1.442c13.123,1.924,23.271,6.102,30.436,12.529
                c7.161,6.432,10.747,15.054,10.747,25.87c0,6.13-1.236,11.69-3.703,16.677c-2.471,4.988-5.87,9.256-10.205,12.799
                c-4.335,3.547-9.481,6.283-15.443,8.204C409.928,127.037,403.396,128,396.292,128z"/>
                    <path fill="#003469" d="M511.868,128c-9.273,0-17.763-1.594-25.468-4.777c-7.707-3.184-14.358-7.6-19.958-13.25
                c-5.6-5.648-9.965-12.409-13.095-20.283c-3.133-7.869-4.695-16.433-4.695-25.689c0-9.253,1.563-17.785,4.695-25.6
                c3.13-7.812,7.495-14.572,13.095-20.281c5.6-5.707,12.251-10.155,19.958-13.342C494.105,1.594,502.595,0,511.868,0
                c9.15,0,17.61,1.594,25.378,4.777c7.765,3.187,14.448,7.635,20.048,13.342c5.599,5.709,9.962,12.47,13.095,20.281
                c3.13,7.814,4.696,16.347,4.696,25.6c0,9.257-1.566,17.82-4.696,25.689c-3.133,7.874-7.496,14.635-13.095,20.283
                c-5.6,5.65-12.283,10.066-20.048,13.25C529.479,126.406,521.019,128,511.868,128z M511.868,102.039
                c5.419,0,10.233-0.961,14.45-2.885c4.212-1.92,7.766-4.596,10.656-8.021c2.89-3.426,5.116-7.451,6.683-12.079
                c1.563-4.625,2.349-9.646,2.349-15.054s-0.785-10.426-2.349-15.053c-1.566-4.626-3.793-8.654-6.683-12.08
                c-2.891-3.425-6.444-6.098-10.656-8.021c-4.217-1.922-9.031-2.885-14.45-2.885s-10.236,0.963-14.45,2.885
                c-4.217,1.924-7.767,4.597-10.656,8.021c-2.89,3.426-5.119,7.454-6.684,12.08c-1.565,4.627-2.348,9.645-2.348,15.053
                s0.782,10.429,2.348,15.054c1.564,4.628,3.794,8.653,6.684,12.079s6.439,6.102,10.656,8.021
                C501.632,101.078,506.449,102.039,511.868,102.039z"/>
                    <path fill="#003469" d="M586.028,2.705h24.565l61.229,76.079V2.705H700v122.591h-24.383l-61.412-76.079v76.079h-28.177V2.705z"/>
                </svg>
            </div>
        </div>

        <div class="sub-menu">
            <div class="sub-menu__left">
                <ul class="nav">
                    <li data-section="start" class="nav__item">
                        <a class="nav__link" href="#start">
                            <span>Обзор</span>
                        </a>
                    </li>
                    <li data-section="design" class="nav__item">
                        <a class="nav__link" href="#design">
                            <span>Дизайн</span>
                        </a>
                    </li>
                    <li data-section="dynamic" class="nav__item">
                        <a class="nav__link" href="#dynamic">
                            <span>Динамика</span>
                        </a>
                    </li>
                    <li data-section="comfort" class="nav__item">
                        <a class="nav__link" href="#comfort">
                            <span>Комфорт</span>
                        </a>
                    </li>
                    <li data-section="safety" class="nav__item">
                        <a class="nav__link" href="#safety">
                            <span>Безопасность</span>
                        </a>
                    </li>
                    <li data-section="config" class="nav__item">
                        <a class="nav__link" href="#config">
                            <span>Характеристики</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sub-menu__right">
                <a href="/test-drive/" class="sub-menu__test">тест-драйв</a>
                <a href="https://www.hyundai.ru/configurator/car/26" class="sub-menu__conf">конфигуратор и цены</a>
            </div>
        </div>

        <div id="fullpage">
            <section class="slide1 js-fullpage fp-auto-height" style="background-image: url(img/title.jpg)">
                <div class="l-wrapper">
                    <div class="text-block">
                        <h1 class="text-block__title">
                            <span class="slide1-anim-1">Новый TUCSON.</span>
                        </h1>
                        <div class="text-block__text">
                            <span class="slide1-anim-2">Везёт тому, кто ведёт!</span>
                        </div>
                    </div>
                    <div class="blue-b">
                        <div class="blue-b__price">
                            <span>от</span> 1 399 000  &#8381;
                            <div class="blue-b__text">В кредит — от 10 000 ₽ в месяц</div>
                        </div>

                        <div class="blue-b__note">КАСКО в подарок *</div>
                    </div>
                </div>
            </section>

            <section class="slide2 js-fullpage fp-auto-height">
                <div class="slide2__back slide2-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics//2_design/design_title.jpg)"></div>

                <div class="slide2__shade slide2__shade--1" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/zoom_shade_1.png)"></div>
                <div class="slide2__shade slide2__shade--2" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/zoom_shade_2.png)"></div>
                <div class="slide2__shade slide2__shade--3" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/zoom_shade_3.png)"></div>

                <div class="l-wrapper">
                    <div class="text-block">
                        <h2 class="text-block__title">
                    <span class="slide2-anim-1">Смелый
                    <br>дизайн.</span>
                        </h2>
                    </div>
                    <div class="description js-description-get-height">
                        <div class="description__inner description--grille-anim-4">
                            <div class="description__icon description__icon--color-1 description--grille-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/tucson/svg/design_1.svg" alt="">
                            </div>
                            <div class="description__title">
                                <div class="description__wrapper description--grille-anim-1">
                                    <p>
                                        Элегантные линии.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description--grille-anim-2">
                                    <p>
                                        Изящный и смелый образ обновлённого Hyundai TUCSON – идеальный баланс формы и функциональности.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="description">
                        <div class="description__inner description--light-anim-4">
                            <div class="description__icon description__icon--color-1 description--light-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/tucson/svg/design_2.svg" alt="">
                            </div>
                            <div class="description__title">
                                <div class="description__wrapper description--light-anim-1">
                                    <p>
                                        Новая каскадная решётка радиатора.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description--light-anim-2">
                                    <p>
                                        Фирменная хромированная решётка радиатора создает неповторимый и легко узнаваемый облик TUCSON.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="description">
                        <div class="description__inner description--led-anim-4">
                            <div class="description__icon description__icon--color-1 description--led-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/tucson/svg/design_3.svg" alt="">
                            </div>
                            <div class="description__title">
                                <div class="description__wrapper description--led-anim-1">
                                    <p>
                                        Светодиодные фары.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description--led-anim-2">
                                    <p>
                                        Полностью светодиодные фары обеспечивают отличную видимость в любую погоду и дополняют технологичный образ обновлённого TUCSON.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="slide3 js-fullpage fp-auto-height">
                <div class="l-wrapper l-wrapper--p">
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                    <span>Смелый
                    <br>дизайн.</span>
                        </h2>
                    </div>
                    <ul class="list">
                        <li class="list__item list__item--dh" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/design_1.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper slide3-anim-4">
                                    <p>
                                        <span class="item-description__white">Панорамная крыша с люком</span> дарит чувство открытого пространства, создавая особую атмосферу в салоне автомобиля.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw">
                                <div class="list__back slide3-anim-1" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/design_2a.jpg)"></div>
                                <div class="list__back slide3-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/design_2b.jpg)"></div>
                                <div class="list__back slide3-anim-3" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/2_design/design_2c.jpg)"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper slide3-anim-5">
                                        <p>
                                            <span class="item-description__black">17, 18 или 19-дюймовые легкосплавные диски</span> добавляют образу TUCSON динамики и индивидуальности.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw">
                                <video class="list__video" preload="preload" data-autoplay loop muted>
                                    <source src="https://www.hyundai.ru/assets/img/tucson/video/1_led_rear_lamp.mp4" type="video/mp4">
                                </video>
                                <div class="video-shade video-shade--small"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper slide3-anim-6">
                                        <p>
                                            Эффектные <span class="item-description__white">светодиодные задние фонари</span> отлично заметны в дневное и ночное время, повышая безопасность.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="slide4 js-fullpage fp-auto-height">
                <div class="l-wrapper l-wrapper--p">
                    <video class="slide4__video" id="video" preload="auto" data-autoplay loop muted>
                        <source src="https://www.hyundai.ru/assets/img/tucson/video/2_performance.mp4" type="video/mp4">
                    </video>
                    <div class="video-shade video-shade--large slide4-anim-2"></div>
                    <div class="text-block">
                        <h2 class="text-block__title">
                            <span class="slide4-anim-1">Великолепная <br>динамика.</span>
                        </h2>
                    </div>

                    <!-- 22 -->
                    <div class="description">
                        <div class="description__inner description-22-anim-5">
                            <div class="description__title">
                                <div class="description__wrapper description-22-anim-2">
                                    <p>
                                        Любой стиль вождения.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description-22-anim-1">
                                    <p>
                                        Обширный выбор двигателей, трансмиссий и привода позволяет подобрать автомобиль именно под ваши требования.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter description-22-anim-3">
                            <div class="counter__item">
                                <div class="counter__icon">
                                    2.0 MPi
                                </div>
                                <div class="counter__value counter__value--border">
                                    <span id="count1">0</span> л.с.
                                </div>
                                <div class="counter__description counter__description--border">
                                    6MT / 6AT, 2WD / 4WD
                                </div>
                            </div>
                            <div class="counter__item">
                                <div class="counter__icon">
                                    1.6 T-GDi
                                </div>
                                <div class="counter__value counter__value--border">
                                    <span id="count2">0</span> л.с.
                                </div>
                                <div class="counter__description counter__description--border">
                                    7DCT, 4WD
                                </div>
                            </div>
                            <div class="counter__item">
                                <div class="counter__icon">
                                    2.0 Diesel
                                </div>
                                <div class="counter__value counter__value--lc">
                                    <span id="count3">0</span> л.с.
                                </div>
                                <div class="counter__description">
                                    8AT, 4WD
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HTRAC -->
                    <div class="description">
                        <div class="description__inner description-h-anim-4">
                            <div class="description__icon description-h-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/tucson/svg/performance_1.svg" alt="">
                            </div>
                            <div class="description__title">
                                <div class="description__wrapper description-h-anim-2">
                                    <p>
                                        Система управления полным приводом HTRAC.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description-h-anim-1">
                                    <p>
                                        HTRAC создает идеальный режим для комфортного вождения, подстраиваясь под тип дороги, и обеспечивает устойчивость на поворотах и скользком покрытии.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="comfort js-fullpage fp-auto-height">
                <div class="l-wrapper l-wrapper--p">
                    <div class="comfort__back slide5-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_title.jpg)"></div>

                    <div class="comfort__overlay slide5-anim-3"></div>
                    <div class="comfort__zone comfort__zone--1" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/zoom_shade_1.png)"></div>
                    <div class="comfort__zone comfort__zone--2" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/zoom_shade_2.png)"></div>
                    <div class="comfort__zone comfort__zone--3" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/zoom_shade_3.png)"></div>

                    <div class="slide5 full-height">
                        <div class="text-block text-block--z100">
                            <h2 class="text-block__title">
                        <span class="slide5-anim-1">
                            Настоящий
                            <br>комфорт.
                        </span>
                            </h2>
                        </div>
                        <div class="sidebar sidebar--nav">
                            <div class="sidebar__back sidebar--nav-anim-6" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_1.jpg)"></div>
                            <div class="sidebar__overlay sidebar--nav-anim-5"></div>
                            <div class="description">
                                <div class="description__inner sidebar--nav-anim-4">
                                    <div class="description__icon sidebar--nav-anim-3">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/comfort_1.svg" alt="">
                                    </div>
                                    <div class="description__title">
                                        <div class="description__wrapper sidebar--nav-anim-1">
                                            <p>
                                                8-дюймовая мультимедиа система с навигацией.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description__text">
                                        <div class="description__wrapper sidebar--nav-anim-2">
                                            <p>
                                                Современная мультимедиа система с большим экраном, навигацией и поддержкой Android Auto<sup>TM</sup> и Apple CarPlay<sup>TM</sup>.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar sidebar--lcd">
                            <div class="sidebar__back sidebar--lcd-anim-6" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_2.jpg)"></div>
                            <div class="sidebar__overlay sidebar--lcd-anim-5"></div>
                            <div class="description">
                                <div class="description__inner sidebar--lcd-anim-4">
                                    <div class="description__icon sidebar--lcd-anim-3">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/comfort_2.svg" alt="">
                                    </div>
                                    <div class="description__title">
                                        <div class="description__wrapper sidebar--lcd-anim-1">
                                            <p>
                                                Подогрев и вентиляция сидений.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description__text">
                                        <div class="description__wrapper sidebar--lcd-anim-2">
                                            <p>
                                                В обновлённом TUCSON прохладно летом и тепло зимой. Об этом заботятся вентиляция и подогрев передних сидений, и подогрев задних сидений.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar sidebar--interier">
                            <div class="sidebar__back sidebar--interier-anim-6" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_3.jpg)"></div>

                            <div class="sidebar__overlay sidebar--interier-anim-5"></div>
                            <div class="description">
                                <div class="description__inner sidebar--interier-anim-4">
                                    <div class="description__icon sidebar--interier-anim-3">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/comfort_3.svg" alt="">
                                    </div>
                                    <div class="description__title">
                                        <div class="description__wrapper sidebar--interier-anim-1">
                                            <p>
                                                Беспроводное зарядное устройство.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description__text">
                                        <div class="description__wrapper sidebar--interier-anim-2">
                                            <p>
                                                Чтобы зарядить смартфон во время поездки, достаточно положить его в гнездо беспроводной зарядки.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="comfort2 js-fullpage fp-auto-height">
                <div id="scroll-container" class="l-wrapper l-wrapper--p">
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                    <span>Настоящий
                    <br>комфорт.</span>
                        </h2>
                    </div>
                    <ul id="scroll-element" class="list">
                        <li class="list__item list__item--dh">
                            <video class="list__video" preload="preload" data-autoplay loop muted>
                                <source src="https://www.hyundai.ru/assets/img/tucson/video/3_luggage_trunk.mp4" type="video/mp4">
                            </video>
                            <div class="video-shade video-shade--large"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper comfort2-anim-1">
                                    <p>
                                        <span class="item-description__white">В багажник обновлённого TUCSON помещается всё</span>, что может пригодиться в дороге.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw">
                                <div class="list__back" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_5a.jpg)"></div>
                                <div class="list__back comfort2-anim-5" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_5b.jpg)"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper comfort2-anim-2">
                                        <p>
                                            <span class="item-description__white">Цвет интерьера и отделка</span> на ваш выбор: чёрный или бежевый, ткань или кожа.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw list__item--bg" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/4_comfort/comfort_6.jpg)">
                                <div class="item-description">
                                    <div class="item-description__wrapper comfort2-anim-3">
                                        <p>
                                            <span class="item-description__white">Красочная и информативная панель приборов с 4.2-дюймовым дисплеем</span> подсказывает водителю всю необходимую информацию.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="safety js-fullpage fp-auto-height">
                <div class="l-wrapper l-wrapper--p">
                    <div class="text-block text-block--z100">
                        <h2 class="text-block__title text-block__title--black">
                    <span class="slide6-anim-1">
                        Технологии
                        <br>безопасности.
                    </span>
                        </h2>
                    </div>

                    <div class="slide6">

                        <svg class="slide6__svg">
                            <circle class="slide6__circle2" cx="70%" cy="70%" r="0%"></circle>
                            <circle class="slide6__circle1" cx="70%" cy="70%" r="0%"></circle>
                        </svg>

                        <div class="slide6__back slide6-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/side_1.png)"></div>
                    </div>
                    <div class="slide7 slide7-anim-1" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/side_2.png)">
                        <svg class="slide7__line">
                            <path d="M0 200 Q 300 0 600 200" fill="transparent"/>
                        </svg>

                        <div class="mark mark--slide7">
                            <svg class="mark__circles">

                                <radialGradient id="grad" cx="50%" y="50%">
                                    <stop offset="0%" stop-color="#41a2b5" stop-opacity="0"/>
                                    <stop offset="100%" stop-color="#41a2b5" stop-opacity="0.3"/>
                                </radialGradient>

                                <circle class="mark__circle2 slide7-anim-7" fill="url(#grad)" cx="50%" cy="50%" r="0%"></circle>
                                <circle class="mark__circle1 slide7-anim-6" fill="url(#grad)" cx="50%" cy="50%" r="0%"></circle>
                            </svg>
                            <div class="mark__inner slide7-anim-5">
                                <div class="mark__icon">
                                    <img src="https://www.hyundai.ru/assets/img/tucson/svg/tech_1.svg" alt="">
                                </div>
                                <div class="mark__description">
                                    автоматическое
                                    <br>торможение
                                </div>
                            </div>
                        </div>

                        <div class="description">
                            <div class="schema schema--pr schema--mb slide7-anim-4">
                                <img src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1.jpg" alt="">
                            </div>
                            <div class="description__inner slide7-anim-8">
                                <div class="description__title description__title--slide7">
                                    <div class="description__wrapper slide7-anim-2">
                                        <p>
                                            Система предупреждения столкновений с функцией обнаружения пешеходов.
                                        </p>
                                    </div>
                                </div>
                                <div class="description__text description__text--slide7">
                                    <div class="description__wrapper slide7-anim-3">
                                        <p>
                                            Система использует фронтальную камеру и радар для отслеживания движения перед автомобилем. При обнаружении препятствия система автоматически замедлит или остановит автомобиль.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide8 slide8-anim-1">
                        <div class="slide8__back" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/side_3.png)">
                            <div class="mark mark--slide8">
                                <svg class="mark__circles">

                                    <radialGradient id="grad" cx="50%" y="50%">
                                        <stop offset="0%" stop-color="#41a2b5" stop-opacity="0"/>
                                        <stop offset="100%" stop-color="#41a2b5" stop-opacity="0.3"/>
                                    </radialGradient>

                                    <circle class="mark__circle2 slide8-anim-3" fill="url(#grad)" cx="50%" cy="50%" r="0%"></circle>
                                    <circle class="mark__circle1 slide8-anim-2" fill="url(#grad)" cx="50%" cy="50%" r="0%"></circle>
                                </svg>
                                <div class="mark__inner slide8-anim-4">
                                    <div class="mark__icon">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/tech_2.svg" alt="">
                                    </div>
                                    <div class="mark__description">
                                        предупреждение
                                        <br>водителя
                                    </div>
                                </div>
                            </div>

                            <svg class="slide8__line">
                                <path d="M0 200 Q 300 0 600 200" fill="transparent"/>
                            </svg>
                        </div>

                        <div class="description description--right">
                            <div class="schema schema--pr slide8-anim-10">
                                <div class="schema__slider">
                                    <img src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_1.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_2.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_3.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_4.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_5.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_6.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_7.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_8.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_9.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_10.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_11.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_12.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_13.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_14.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_15.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_16.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_17.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_18.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_19.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_20.jpg" alt="">
                                    <img class="schema__animate" src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_1_21.jpg" alt="">
                                </div>
                            </div>
                            <div class="description__inner">
                                <div class="description__title description__title--slide7">
                                    <div class="description__wrapper slide8-anim-5">
                                        <p>
                                            Безопасный выезд с парковки задним ходом.
                                        </p>
                                    </div>
                                </div>
                                <div class="description__text description__text--slide7">
                                    <div class="description__wrapper slide8-anim-6">
                                        <p>
                                            Система предупреждения столкновения сбоку при выезде с парковки задним ходом предупреждает водителя об опасности в случае обнаружения двигающегося наперерез автомобиля.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="slide9 slide9-anim-1" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/side_4.png)">
                        <svg class="slide9__line">
                            <path d="M0 200 Q 300 0 600 200" fill="transparent"/>
                        </svg>
                        <div class="mark mark--slide9">
                            <svg class="mark__circles">

                                <radialGradient id="grad" cx="50%" y="50%">
                                    <stop offset="0%" stop-color="#41a2b5" stop-opacity="0"/>
                                    <stop offset="100%" stop-color="#41a2b5" stop-opacity="0.3"/>
                                </radialGradient>

                                <circle class="mark__circle2 slide9-anim-3" fill="url(#grad)" cx="50%" cy="50%" r="0%"></circle>
                                <circle class="mark__circle1 slide9-anim-2" fill="url(#grad)" cx="50%" cy="50%" r="0%"></circle>
                            </svg>
                            <div class="mark__inner slide9-anim-4">
                                <div class="mark__icon">
                                    <img src="https://www.hyundai.ru/assets/img/tucson/svg/tech_3.svg" alt="">
                                </div>
                                <div class="mark__description">
                                    задняя камера
                                    <br>и радар
                                </div>
                            </div>
                        </div>

                        <div class="description">
                            <div class="schema schema--pr slide9-anim-7">
                                <img src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/scheme_3.jpg" alt="">
                            </div>
                            <div class="description__inner slide9-anim-8">
                                <div class="description__title description__title--slide7">
                                    <div class="description__wrapper slide9-anim-5">
                                        <p>
                                            Система мониторинга слепых зон.
                                        </p>
                                    </div>
                                </div>
                                <div class="description__text description__text--slide7">
                                    <div class="description__wrapper slide9-anim-6">
                                        <p>
                                            Система предупреждает водителя о транспортных средствах, находящихся в слепой зоне.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="safety2 js-fullpage fp-auto-height">
                <div id="scroll-container-2" class="l-wrapper l-wrapper--p">
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                    <span>
                        Технологии
                        <br>безопасности.
                    </span>
                        </h2>
                    </div>
                    <ul id="scroll-element-2" class="list">
                        <li class="list__item list__item--dh" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/tech_1.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety2-anim-1">
                                    <p>
                                        В тёмное время суток <span class="item-description__black">система автоматически переключает дальний свет на ближний</span> при обнаружении автомобиля, двигающегося по встречной полосе.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/tech_2.jpg)">
                                <div class="list__icon">
                                    <img src="https://www.hyundai.ru/assets/img/tucson/pics/5_tech/tech_2_logo.png" alt="">
                                </div>
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-2">
                                        <p>
                                            <span class="item-description__black">Прочный кузов и 6 подушек безопасности</span> обеспечивают надёжную защиту для водителя и пассажиров - TUCSON получил 5 звёзд по результатам теста EURO NCAP.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw">
                                <video class="list__video" preload="preload" data-autoplay loop muted>
                                    <source src="https://www.hyundai.ru/assets/img/tucson/video/5_parking_assist.mp4" type="video/mp4">
                                </video>
                                <div class="video-shade video-shade--small"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-3">
                                        <p>
                                            <span class="item-description__white">Камера заднего вида</span> помогает водителю полностью контролировать ситуацию во время парковки.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>


                    </ul>
                </div>
            </section>

            <section class="safety3 js-fullpage fp-auto-height">
                <div id="scroll-container-2" class="l-wrapper l-wrapper--p">
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                    <span>
                        Технологии
                        <br>безопасности.
                    </span>
                        </h2>
                    </div>
                    <ul id="scroll-element-2" class="list">
                        <li class="list__item" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/tech_3.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety3-anim-1">
                                    <p>
                                        С функцией <span class="item-description__white">автоматического открывания двери багажника</span> погрузка в автомобиль остаётся легкой, даже если у вас заняты руки.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <div class="list__item">
                            <video class="list__video" preload="preload" data-autoplay loop muted>
                                <source src="https://www.hyundai.ru/assets/img/tucson/video/4_vehicle_stability_management.mp4" type="video/mp4">
                            </video>
                            <div class="video-shade video-shade--small"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper safety3-anim-2">
                                    <p>
                                        <span class="item-description__white">Система динамической стабилизации</span> сохраняет устойчивость и управляемость автомобиля, предотвращая критические ситуации.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <li class="list__item" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/tech_5.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety3-anim-3">
                                    <p>
                                        <span class="item-description__black">Система удержания в полосе движения</span> предупреждает водителя о пересечении линии разметки и подруливает в случае необходимости.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item" style="background-image: url(https://www.hyundai.ru/assets/img/tucson/pics/5_tech/tech_6.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety3-anim-4">
                                    <p>
                                        <span class="item-description__black">Адаптивный круиз-контроль</span> контролирует расстояние до движущегося впереди автомобиля, автоматически ускоряя или замедляя ход.
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>

            <section class="config js-fullpage fp-auto-height">
                <div class="l-wrapper config__wrapper">
                    <div class="config__first ">
                        <div class="config__center">
                            <div class="config__img">
                                <div class="config__name">TUCSON</div>
                                <div class="config__main-img">
                                    <img id="colorImg" src="" alt="">
                                    <img id="colorImg2" src="" alt="">
                                </div>
                                <div class="x-size">
                                    <div class="x-size__arrow-l">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/arrow_left.png" alt="">
                                    </div>
                                    <!-- <div class="x-size__line-l">
                                        <svg>
                                            <circle cx="0" cy="1" r="1" />
                                            <circle cx="5" cy="1" r="1" />
                                            <circle cx="10" cy="1" r="1" />
                                            <circle cx="15" cy="1" r="1" />
                                            <circle cx="20" cy="1" r="1" />
                                            <circle cx="25" cy="1" r="1" />
                                            <circle cx="30" cy="1" r="1" />
                                            <circle cx="35" cy="1" r="1" />
                                            <circle cx="40" cy="1" r="1" />
                                            <circle cx="45" cy="1" r="1" />
                                            <circle cx="50" cy="1" r="1" />
                                            <circle cx="55" cy="1" r="1" />
                                            <circle cx="60" cy="1" r="1" />
                                            <circle cx="65" cy="1" r="1" />
                                            <circle cx="70" cy="1" r="1" />
                                            <circle cx="75" cy="1" r="1" />
                                            <circle cx="80" cy="1" r="1" />
                                            <circle cx="85" cy="1" r="1" />
                                            <circle cx="90" cy="1" r="1" />
                                            <circle cx="95" cy="1" r="1" />
                                            <circle cx="100" cy="1" r="1" />
                                        </svg>
                                    </div> -->
                                    <div class="x-size__line-l">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/line_horizontal.png" alt="">
                                    </div>
                                    <div class="x-size__value">4.48 М</div>
                                    <div class="x-size__line-r">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/line_horizontal.png" alt="">
                                    </div>
                                    <div class="x-size__arrow-r">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/arrow_right.png" alt="">
                                    </div>
                                </div>
                                <div class="y-size">
                                    <div class="y-size__arrow-t">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/arrow_top.png" alt="">
                                    </div>
                                    <div class="y-size__line-t">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/line_vertical.png" alt="">
                                    </div>
                                    <div class="y-size__value">1.66 М</div>
                                    <div class="y-size__line-b">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/line_vertical.png" alt="">
                                    </div>
                                    <div class="y-size__arrow-b">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/pics/6_config/arrow_bottom.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="config-sidebar">
                                <div class="config-sidebar__row">
                                    <div class="config-sidebar__icon">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/specs_1.svg" alt="">
                                    </div>
                                    <div class="config-sidebar__value">
                                        <span>201</span> км/ч
                                    </div>
                                    <div class="config-sidebar__description">
                                        Макс.  скорость
                                    </div>
                                </div>
                                <div class="config-sidebar__row">
                                    <div class="config-sidebar__icon">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/specs_2.svg" alt="">
                                    </div>
                                    <div class="config-sidebar__value">
                                        <span>185</span> л.с.
                                    </div>
                                    <div class="config-sidebar__description">
                                        мощность
                                    </div>
                                </div>
                                <div class="config-sidebar__row">
                                    <div class="config-sidebar__icon">
                                        <img src="https://www.hyundai.ru/assets/img/tucson/svg/specs_3.svg" alt="">
                                    </div>
                                    <div class="config-sidebar__value">
                                        <span>2.0</span> л
                                    </div>
                                    <div class="config-sidebar__description">
                                        объем двигателя
                                    </div>
                                </div>
                                <a href="#" class="config-sidebar__button js-show-more">
                                    <span>Все характеристики</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="config__last">
                        <div class="colors">
                            <ul class="colors__list">
                                <li class="colors__color">
                                    <a data-color="Polar White (PYW)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Polar-White-PYW.png" href="#">
                                        <div style="background-color: #ffffff"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Platinum Silver (U3S)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Platinum-Silver-U3S.png" href="#">
                                        <div style="background-color: #abb5b4"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="White Sand (Y3Y)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_White-Sand-Y3Y.png" href="#">
                                        <div style="background-color: #959089"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Olivine (X5R)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Olivine-X5R.png" href="#">
                                        <div style="background-color: #464b46"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Engine Red (JHR)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Engine-Red-JHR.png" href="#">
                                        <div style="background-color: #9f2313"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Fiery Red (PR2)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Fiery-Red-PR2.png" href="#">
                                        <div style="background-color: #882317"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Moon Rock (XN3)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Moon-Rock-XN3.png" href="#">
                                        <div style="background-color: #3b3735"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Champion Blue (U2U)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Champion-Blue-UU2.png" href="#">
                                        <div style="background-color: #094073"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Stellar Blue (RWB)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Stellar-Blue-RWB.png" href="#">
                                        <div style="background-color: #1e2327"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Micron Grey (Z3G)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Micron-Grey-Z3G.png" href="#">
                                        <div style="background-color: #474c4d"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Phantom Black (PAE)" data-img="https://www.hyundai.ru/assets/img/tucson/pics/colors/Tucson_Phantom-Black-PAE.png" href="#">
                                        <div style="background-color: #000"></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="colors__name js-set-color">
                                White
                            </div>
                        </div>
                        <a href="https://www.hyundai.ru/configurator/car/26" class="price" style="display: inline-block;">
                            <div class="price__value">
                                <span>от</span> 1 399 000  &#8381;
                            </div>
                            <div class="price__note">
                                В кредит от 10&nbsp;000 ₽ в месяц
                            </div>
                            <div class="price__arrow">
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="table js-fullpage fp-auto-height">
                <div id="scroll-container-3" class="l-wrapper l-wrapper--p l-wrapper--s">
                    <div id="scroll-element-3">
                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Тип кузова.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__title">
                                    <div class="table__col table__col--100">Универсал</div>
                                </div>
                                <div class="table__description">
                                    Количество мест
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            5
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    габаритные размеры, мм, длина, ширина, высота
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            4480 х 1850 х 1655 (без рейлингов) / 1660 (с рейлингами)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Колёсная база, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            2 670
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Минимальный дорожный просвет*, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            182
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Колея, мм, передняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            1604 (19") / 1608 (17", 18") / 1620 (16")
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Колея, мм, задняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            1615 (19") / 1620 (17", 18") / 1631 (16")
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    свесы, мм, передний / задний
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            910 / 900
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    пространство для ног: 1-ый / 2-ой ряд, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            1053 (1129 - max) / 970
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    высота от сиденья до потолка: 1-ый / 2-ой ряд, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            1005 / 995 (без люка), 963 / 969 (с люком)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    ширина салона на уровне плеч: 1-ый / 2-ой ряд, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            1450 / 1410
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    ширина салона на уровне бедер: 1-ый / 2-ой ряд, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            1413 / 1384
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Объем багажника (VDA), л
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            488 / 1478 (со сложенными спинками задних сидений)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Двигатели.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__title">
                                    <div class="table__col table__col--33">Nu 2.0 MPI D-CVVT</div>
                                    <div class="table__col table__col--33">Gamma 1.6 Turbo-GDI D-CVVT</div>
                                    <div class="table__col table__col--33">R2.0 Diesel</div>
                                </div>
                                <div class="table__description">
                                    тип
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Бензиновый, с распределённым впрыском
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Бензиновый, с непосредственным впрыском
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Дизель
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Объем, см<sup>3</sup>
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1 999
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1 591
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1 995
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Степень сжатия
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            10,3 ± 3%
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            10,0 ± 3%
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            16,0 ± 3%
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Максимальная мощность**, кВт при об/мин
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            110 / 6200
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            130 / 5500
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            136 / 4000
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Максимальная мощность**, л.с. при об/мин
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            149,6 / 6200
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            177 / 5500
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            185 / 4000
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Максимальный момент**, Nm при об/мин
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            192 / 4000
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            265 / 1500~4500
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            400 / 1750~2750
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Топливный бак, л
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100 table__col--center">
                                        <div class="table__val">
                                            62
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Подвеска.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    Передняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            Независимая, пружинная, типа Макферсон, со стабилизатором поперечной устойчивости
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Задняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            Независимая, пружинная, многорычажная, со стабилизатором поперечной устойчивости
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Тормозные механизмы передние
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            Дисковые
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Тормозные механизмы задние
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            Дисковые
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Рулевое управление.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    Тип
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            С электроусилителем, реечная передача
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Кол-во поворотов до упора
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            2,51
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Минимальный радиус разворота, м
                                </div>
                                <div class="table__row">
                                    <div class="table__col--100">
                                        <div class="table__val">
                                            5,3
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Шины и диски.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    Шины
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            225/60R17 99H | 225/55R18 98V | 245/45R19 98W
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            225/55R18 98V | 245/45R19 98W
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            225/60R17 99H | 225/55R18 98V | 245/45R19 98W
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Диски
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            7.0Jx17; 7.0Jx18; 7.5Jx19
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            7.0Jx18; 7.5Jx19
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            7.0Jx17; 7.0Jx18; 7.5Jx19
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Динамические характеристики и расход топлива.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__title">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">6MT 2WD</div>
                                        <div class="table__col table__col--25">6AT 2WD</div>
                                        <div class="table__col table__col--25">6MT 4WD</div>
                                        <div class="table__col table__col--25">6AT 4WD</div>
                                    </div>
                                    <div class="table__col table__col--33">7DCT 4WD</div>
                                    <div class="table__col table__col--33">8AT 4WD</div>
                                </div>
                                <div class="table__description">
                                    С колесами
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">17" / 18"</div>
                                        <div class="table__col table__col--25">17" / 18"</div>
                                        <div class="table__col table__col--25">17" / 18",19"</div>
                                        <div class="table__col table__col--25">17" / 18",19"</div>
                                    </div>
                                    <div class="table__col table__col--33">17" / 18",19"</div>
                                    <div class="table__col table__col--33">18",19"</div>
                                </div>
                                <div class="table__description">
                                    Тип трансмиссии
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                Механи-
                                                <br>ческая
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                Гидро-
                                                <br>механи-
                                                <br>ческая
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                Механи-
                                                <br>ческая
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                Гидро-
                                                <br>механи-
                                                <br>ческая
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Роботизированная
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Гидромеханическая
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Тип привода
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col">
                                            <div class="table__val">
                                                Передний
                                            </div>
                                        </div>
                                        <div class="table__col">
                                            <div class="table__val">
                                                Полный
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Полный
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            Полный
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Ускорение 0-100 км/ч, сек
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                10,6
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                11,1
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                11,3
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                11,8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            9,1
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            9,5
                                        </div>
                                    </div>
                                </div>

                                <div class="table__description">
                                    Максимальная скорость, км/ч
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                186
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                181
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                184
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                180
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            201
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            201
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Экологические характеристики.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    Расход топлива***, л/100 км городской цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                10,7 / 10,9
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                10,9 / 11,5
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                10,9 / 11,0
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                11,2 / 11,8
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            9,2 / 9,6
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            8,0
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Расход топлива***, л/100 км загородный цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                6,3 / 6,5
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                6,1 / 6,3
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                6,6 / 6,7
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                6,7 / 6,2
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            6,5 / 6,5
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            5,4
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Расход топлива***, л/100 км cмешанный цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                7,9 / 8,1
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                7,9 / 8,2
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                8,2 / 8,3
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                8,3 / 8,4
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            7,5 / 7,7
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            6,4
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Выделение CO2***, г/км городской цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                248 / 252
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                252 / 265
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                252 / 255
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                261 / 273
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            216 / 224
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            212
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Выделение CO2***, г/км загородный цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                146 / 149
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                142 / 147
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                154 / 155
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                155 / 145
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            152 / 151
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            142
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Выделение CO2***, г/км смешанный цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                184 / 187
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                182 / 190
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                190 / 192
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                194 / 197
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            175 / 178
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            168
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section">
                            <div class="table__left">
                                <div class="table__name">Масса.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    Снаряжённая масса, кг, min-max
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1512 ~ 1677
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1534 ~ 1699
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1580 ~ 1745
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1604 ~ 1769
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1637 ~ 1803
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1693 ~ 1846
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Полная масса, кг
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                2 060
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                2 080
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                2 130
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                2 150
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            2 200
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            2 250
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Масса буксируемого прицепа, не оборудованного тормозами
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                740
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                750
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                750
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                750
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            750
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            750
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Масса буксируемого прицепа, оборудованного тормозами
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--33 table__col--flex">
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1 900
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1 600
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1 900
                                            </div>
                                        </div>
                                        <div class="table__col table__col--25">
                                            <div class="table__val">
                                                1 600
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1 600
                                        </div>
                                    </div>
                                    <div class="table__col table__col--33">
                                        <div class="table__val">
                                            1 900
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="table__bottom">
                            <a href="https://www.hyundai.ru/configurator/car/26/modification" class="arrow-link">
                                <div class="arrow-link__text">
                                    Сравнить конфигурации
                                </div>
                                <div class="arrow-link__square">
                                    <img src="https://www.hyundai.ru/assets/img/tucson/svg/arrow_btn.svg" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="table__note">
                            * - Представлено значение межосевого дорожного просвета; ** - Значения максимальной мощности и максимального крутящего момента двигателя приведены согласно методике испытаний Правил ООН № 85; *** - Показатели расхода топлива и массы выделяемого CO2 представлены согласно методикам испытаний Правил ООН № 83 и 101.
                        </div>

                        <section class="section section--highlight-nav section--background">
                            <nav class="highlight-nav highlight-nav--full-width">
                                <ul class="highlight-nav__items">
                                    <li class="highlight-nav__item">
                                        <a href="https://www.hyundai.ru/configurator/car/26" class="highlight-nav__link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-car"><use xlink:href="#ic-car"></use></svg>
                                            <strong class="highlight-nav__name">Создать свой Hyundai</strong>
                                            <span class="highlight-nav__highspot">Ваш автомобиль в&nbsp;один клик</span>
                                        </a>
                                    </li>
                                    <li class="highlight-nav__item">
                                        <a href="/contacts/" class="highlight-nav__link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-map"><use xlink:href="#ic-map"></use></svg>
                                            <strong class="highlight-nav__name">Найти дилера</strong>
                                            <span class="highlight-nav__highspot">Официальный дилерский центр</span>
                                        </a>
                                    </li>
                                    <li class="highlight-nav__item">
                                        <a href="/test-drive/" class="highlight-nav__link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-steering-wheel"><use xlink:href="#ic-steering-wheel"></use></svg>
                                            <strong class="highlight-nav__name">Тест-драйв</strong>
                                            <span class="highlight-nav__highspot">Моментальная заявка в&nbsp;удобное для&nbsp;вас&nbsp;время</span>
                                        </a>
                                    </li>
                                    <li class="highlight-nav__item">
                                        <a href="https://www.hyundai.ru/configurator/car/26#calculator" class="highlight-nav__link">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="highlight-nav__icon ic-svg ic-calc"><use xlink:href="#ic-calc"></use></svg>
                                            <strong class="highlight-nav__name">Рассчитать кредит</strong>
                                            <span class="highlight-nav__highspot">Финансовые программы</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </section>
                    </div>
                </div>



            </section>
        </div>
        <script>

            $('body').removeClass('main');

            //Preloader

            init();

            function init(){
                var container = document.querySelector('.main');
                imgArr = container.querySelectorAll('img'),
                    videoArr = container.querySelectorAll('video'),
                    divArr = container.querySelectorAll('div'),
                    imgSrcArr = [],
                    videoSrcArr = [],
                    promisesArr = [],
                    progress = 0;

                for (var i = 0; i < imgArr.length; i++) {
                    if (imgArr[i].getAttribute('src') !== '') {
                        imgSrcArr.push(imgArr[i].getAttribute('src'));
                    }
                }
                for (var i = 0; i < videoArr.length; i++) {
                    var source = videoArr[i].querySelector('source')

                    if (source.getAttribute('src') !== '') {
                        videoSrcArr.push(source.getAttribute('src'));
                    }
                }

                //Background-image
                for (var i = 0; i < divArr.length; i++) {
                    if (divArr[i].style.backgroundImage) {
                        var str1,
                            str2;

                        str1 = divArr[i].style.backgroundImage.replace('url("','');
                        str2 = str1.replace('")','');

                        if (str2 !== '') {
                            imgSrcArr.push(str2);
                        }
                    }
                }

                for (var i = 0; i < imgSrcArr.length; i++ ) {
                    var img = new Image();

                    img.src = imgSrcArr[i];
                    img.idd = i;
                    img.onload = function () {
                        progress++;

                        //console.log(this.idd);

                        show(progress, imgSrcArr.length + videoSrcArr.length);
                    };

                    //console.log(i + '  ' + imgSrcArr[i] + '/' + imgSrcArr.length);
                }

                for (var i = 0; i < videoArr.length; i++ ) {
                    var video = videoArr[i];

                    video.onloadeddata = function () {
                        progress++;

                        //console.log(progress + '  ' + video);

                        show(progress, imgSrcArr.length + videoSrcArr.length);
                    };
                }

                var flag = true;

                function animate(anim) {
                    if (anim != 90 && flag) {
                        document.querySelector('.preloader__progress').style.width = anim + '%';
                        anim++;
                        //console.log(anim);

                        setTimeout(animate.bind(null, anim), 10);
                    }
                }

                animate(0);

                function show(progress, summary) {
                    var percent;

                    percent = Math.round((progress / summary) * 100);

                    //console.log(percent);

                    if (percent == 100) {
                        flag = false;
                        document.querySelector('.preloader__progress').style.width = '100%';
                        document.querySelector('.preloader').style.display = 'none';
                        allowFirstAnimation = true;
                    }
                }
            }
        </script>


    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script src="https://www.hyundai.ru/assets/js/config_layout.js?v=2"></script>

    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>


    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/CustomEase.min.js"></script>
    <script type="text/javascript" src="js/EasePack.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/RoundPropsPlugin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/plugins/animation.gsap.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/plugins/animation.velocity.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="js/easings.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/object-fit_polyfill/object-fit.js"></script>
    <script type="text/javascript" src="js/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="js/tucson.js"></script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>