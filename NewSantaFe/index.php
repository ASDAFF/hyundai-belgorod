<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новый SANTA FE.");
?>

    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/config_layout.css">

    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_SF.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/fullpage/jquery.fullpage.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/santaFe.css" rel="stylesheet" />

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
            ..main-header__holder{
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
                width: 840px;
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
                <svg class="preloader__svg">
                    <path fill="#EDEDED" d="M53.903,128c-7.332,0-13.823-0.813-19.47-2.434c-5.65-1.623-10.667-3.756-15.053-6.402
                c-4.389-2.641-8.144-5.557-11.268-8.742c-3.127-3.184-5.831-6.4-8.113-9.646l17.848-18.207c1.803,2.645,3.876,5.201,6.22,7.662
                c2.343,2.465,5.016,4.66,8.022,6.58c3.003,1.924,6.369,3.457,10.096,4.598c3.725,1.143,7.811,1.713,12.259,1.713
                c6.369,0,11.177-1.322,14.422-3.967c3.245-2.643,4.867-5.887,4.867-9.736c0-1.439-0.242-2.822-0.721-4.146
                c-0.482-1.32-1.352-2.551-2.614-3.695c-1.262-1.141-3.006-2.162-5.229-3.064c-2.225-0.9-5.079-1.592-8.563-2.072l-9.735-1.443
                c-5.651-0.84-10.789-2.254-15.415-4.236c-4.628-1.982-8.594-4.508-11.897-7.572c-3.308-3.064-5.86-6.607-7.663-10.637
                c-1.803-4.024-2.704-8.501-2.704-13.43c0-5.527,1.05-10.697,3.155-15.505c2.101-4.806,5.138-8.952,9.104-12.438
                c3.966-3.485,8.772-6.221,14.422-8.204C41.523,0.992,47.834,0,54.806,0c9.613,0,18.267,1.803,25.96,5.409
                c7.69,3.605,13.881,8.293,18.569,14.062L82.027,38.219c-3.848-4.205-8.112-7.481-12.8-9.825c-4.688-2.343-9.676-3.515-14.963-3.515
                c-5.048,0-8.986,1.143-11.808,3.425c-2.825,2.284-4.237,4.867-4.237,7.752c0,2.767,1.083,5.2,3.245,7.302
                c2.164,2.104,5.648,3.516,10.456,4.236l9.735,1.441c13.099,1.924,23.225,6.102,30.377,12.53c7.149,6.43,10.727,15.053,10.727,25.87
                c0,6.131-1.233,11.691-3.695,16.676c-2.465,4.99-5.859,9.258-10.186,12.801c-4.327,3.547-9.465,6.281-15.414,8.203
                C67.515,127.035,60.994,128,53.903,128z"/>
                    <path fill="#EDEDED" d="M146.999,2.705h33.532l46.693,122.59h-29.025l-8.653-23.438h-51.561l-8.653,23.438h-29.025L146.999,2.705z
                M146.999,77.52h33.532L163.765,32.09L146.999,77.52z"/>
                    <path fill="#EDEDED" d="M233.297,2.705h24.518l61.115,76.079V2.705h28.124v122.59h-24.337L261.42,49.217v76.078h-28.124V2.705z"/>
                    <path fill="#EDEDED" d="M390.914,27.042h-36.237V2.705h100.598v24.338h-36.236v98.252h-28.125V27.042z"/>
                    <path fill="#EDEDED" d="M483.846,2.705h33.533l46.693,122.59h-29.025l-8.654-23.438h-51.561l-8.654,23.438h-29.023L483.846,2.705z
                M483.846,77.52h33.533L500.611,32.09L483.846,77.52z"/>
                    <path fill="#EDEDED" d="M607.516,2.705h86.535v24.338h-58.41V52.1h51.379v24.339h-51.379v48.855h-28.125V2.705z"/>
                    <path fill="#EDEDED" d="M703.662,2.705H792v24.338h-60.213V51.2h51.379v24.337h-51.379v25.422H792v24.336h-88.338V2.705z"/>
                </svg>
                <svg class="preloader__progress">
                    <path fill="#003469" d="M53.903,128c-7.332,0-13.823-0.813-19.47-2.434c-5.65-1.623-10.667-3.756-15.053-6.402
                c-4.389-2.641-8.144-5.557-11.268-8.742c-3.127-3.184-5.831-6.4-8.113-9.646l17.848-18.207c1.803,2.645,3.876,5.201,6.22,7.662
                c2.343,2.465,5.016,4.66,8.022,6.58c3.003,1.924,6.369,3.457,10.096,4.598c3.725,1.143,7.811,1.713,12.259,1.713
                c6.369,0,11.177-1.322,14.422-3.967c3.245-2.643,4.867-5.887,4.867-9.736c0-1.439-0.242-2.822-0.721-4.146
                c-0.482-1.32-1.352-2.551-2.614-3.695c-1.262-1.141-3.006-2.162-5.229-3.064c-2.225-0.9-5.079-1.592-8.563-2.072l-9.735-1.443
                c-5.651-0.84-10.789-2.254-15.415-4.236c-4.628-1.982-8.594-4.508-11.897-7.572c-3.308-3.064-5.86-6.607-7.663-10.637
                c-1.803-4.024-2.704-8.501-2.704-13.43c0-5.527,1.05-10.697,3.155-15.505c2.101-4.806,5.138-8.952,9.104-12.438
                c3.966-3.485,8.772-6.221,14.422-8.204C41.523,0.992,47.834,0,54.806,0c9.613,0,18.267,1.803,25.96,5.409
                c7.69,3.605,13.881,8.293,18.569,14.062L82.027,38.219c-3.848-4.205-8.112-7.481-12.8-9.825c-4.688-2.343-9.676-3.515-14.963-3.515
                c-5.048,0-8.986,1.143-11.808,3.425c-2.825,2.284-4.237,4.867-4.237,7.752c0,2.767,1.083,5.2,3.245,7.302
                c2.164,2.104,5.648,3.516,10.456,4.236l9.735,1.441c13.099,1.924,23.225,6.102,30.377,12.53c7.149,6.43,10.727,15.053,10.727,25.87
                c0,6.131-1.233,11.691-3.695,16.676c-2.465,4.99-5.859,9.258-10.186,12.801c-4.327,3.547-9.465,6.281-15.414,8.203
                C67.515,127.035,60.994,128,53.903,128z"/>
                    <path fill="#003469" d="M146.999,2.705h33.532l46.693,122.59h-29.025l-8.653-23.438h-51.561l-8.653,23.438h-29.025L146.999,2.705z
                M146.999,77.52h33.532L163.765,32.09L146.999,77.52z"/>
                    <path fill="#003469" d="M233.297,2.705h24.518l61.115,76.079V2.705h28.124v122.59h-24.337L261.42,49.217v76.078h-28.124V2.705z"/>
                    <path fill="#003469" d="M390.914,27.042h-36.237V2.705h100.598v24.338h-36.236v98.252h-28.125V27.042z"/>
                    <path fill="#003469" d="M483.846,2.705h33.533l46.693,122.59h-29.025l-8.654-23.438h-51.561l-8.654,23.438h-29.023L483.846,2.705z
                M483.846,77.52h33.533L500.611,32.09L483.846,77.52z"/>
                    <path fill="#003469" d="M607.516,2.705h86.535v24.338h-58.41V52.1h51.379v24.339h-51.379v48.855h-28.125V2.705z"/>
                    <path fill="#003469" d="M703.662,2.705H792v24.338h-60.213V51.2h51.379v24.337h-51.379v25.422H792v24.336h-88.338V2.705z"/>
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
                <a href="https://www.hyundai.ru/configurator/car/25" class="sub-menu__conf">конфигуратор и цены</a>
            </div>
        </div>

        <div id="fullpage">
            <section class="slide1 js-fullpage fp-auto-height" style="background-image: url('img/title.jpg')">
                <div class="l-wrapper">
                    <div class="text-block">
                        <h1 class="text-block__title">
                            <span class="slide1-anim-1">Новый SANTA FE.</span>
                        </h1>
                        <div class="text-block__text">
                            <!-- <span class="slide1-anim-2">Инновация в каждом мгновении.</span> -->
                        </div>
                    </div>
                    <div class="blue-b">
                        <div class="blue-b__price">
                            <span>от</span> 1 999 000  &#8381;
                            <!--                     <div class="blue-b__text">В кредит — от 12 000 ₽ в месяц</div> -->
                        </div>

                        <div class="blue-b__note">В кредит — от 12 000 ₽ в месяц</div>
                    </div>
                </div>
            </section>
            <section class="slide2 js-fullpage fp-auto-height">
                <div class="slide2__back slide2-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics//2_design/design_title.jpg)"></div>

                <div class="slide2__shade slide2__shade--1" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/zoom_1_shade.png)"></div>
                <div class="slide2__shade slide2__shade--2" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/zoom_2_shade.png)"></div>
                <div class="slide2__shade slide2__shade--3" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/zoom_3_shade.png)"></div>

                <div class="l-wrapper">
                    <div class="text-block">
                        <h2 class="text-block__title">
                    <span class="slide2-anim-1">High-tech
                    <br>дизайн.</span>
                        </h2>
                    </div>
                    <div class="description js-description-get-height">
                        <div class="description__inner description--grille-anim-4">
                            <div class="description__icon description__icon--color-1 description--grille-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/santaFe/svg/design_1.svg" alt="">
                            </div>
                            <div class="description__title">
                                <div class="description__wrapper description--grille-anim-1">
                                    <p>
                                        Уникальная решетка радиатора.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description--grille-anim-2">
                                    <p>
                                        Широкая решетка радиатора с новой стильной геометрией подчеркивает харизматичность SANTA&nbsp;FE.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="description">
                        <div class="description__inner description--light-anim-4">
                            <div class="description__icon description__icon--color-1 description--light-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/santaFe/svg/design_2.svg" alt="">
                            </div>
                            <div class="description__title">
                                <div class="description__wrapper description--light-anim-1">
                                    <p>
                                        Светодиодные ходовые огни.
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description--light-anim-2">
                                    <p>
                                        Хищный прищур ходовых огней добавляет автомобилю очаровательной дерзости.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="description">
                        <div class="description__inner description--led-anim-4">
                            <div class="description__icon description__icon--color-1 description--led-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/santaFe/svg/design_3.svg" alt="">
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
                                        Расположены отдельно для максимальной видимости в любую погоду.
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
                    <span>High-tech
                    <br>дизайн.</span>
                        </h2>
                    </div>
                    <ul class="slide3__list">
                        <li class="slide3__item">
                            <video class="slide3__video" preload="preload" data-autoplay loop muted>
                                <source src="https://www.hyundai.ru/assets/img/santaFe/video/design_1.mp4" type="video/mp4">
                            </video>
                            <div class="video-shade video-shade--small"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper slide3-anim-4">
                                    <p>
                                        <span class="item-description__white">Панорамная крыша с люком</span> открывает прекрасный вид и наполняет салон светом.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="slide3__item">
                            <div class="slide3__back slide3-anim-1" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/design_1a.jpg)"></div>
                            <div class="slide3__back slide3-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/design_2b.jpg)"></div>
                            <div class="slide3__back slide3-anim-3" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/design_2c.jpg)"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper slide3-anim-5">
                                    <p>
                                        <span class="item-description__black">Легкосплавные диски</span> дополняют инновационный и внушительный образ SANTA&nbsp;FE.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="slide3__item">
                            <video class="slide3__video" preload="preload" data-autoplay loop muted>
                                <source src="https://www.hyundai.ru/assets/img/santaFe/video/design_2.mp4" type="video/mp4">
                            </video>
                            <div class="video-shade video-shade--small"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper slide3-anim-6">
                                    <p>
                                        Эффектные <span class="item-description__white">светодиодные задние фонари</span> отлично заметны в дневное и ночное время, повышая безопасность.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="slide3__item" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/2_design/design_4.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper slide3-anim-7">
                                    <p>
                                        <span class="item-description__white">Светодиодные повторители указателей поворота</span> делают маневры на дороге безопаснее.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="slide4 js-fullpage fp-auto-height">
                <div class="l-wrapper l-wrapper--p">
                    <video class="slide4__video" id="video" preload="auto" data-autoplay loop muted>
                        <source src="https://www.hyundai.ru/assets/img/santaFe/video/performance_1.mp4" type="video/mp4">
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
                                        R 2.2 CRDi VGT
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description-22-anim-1">
                                    <p>
                                        Мощный и тяговитый дизельный двигатель c максимальной мощностью 200 л.с. при 3800 об/мин и максимальным крутящим моментом 440 Nm при 1750–2750 об/мин.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter description-22-anim-3">
                            <div class="counter__left">
                                <div class="counter__icon">
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/performance_1.svg" alt="">
                                </div>
                                <div class="counter__value counter__value--border">
                                    <span id="count1">0</span> л.с.
                                </div>
                                <div class="counter__description counter__description--border">
                                    Макс.  Мощность
                                </div>
                            </div>
                            <div class="counter__right">
                                <div class="counter__icon">
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/performance_2.svg" alt="">
                                </div>
                                <div class="counter__value counter__value--lc">
                                    <span id="count2">0</span> Nm
                                </div>
                                <div class="counter__description">
                                    Макс. крутящий момент
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="graph description-22-anim-4">
                        <div class="graph__x">
                            <div class="graph__x1"><span>4000</span> об/мин</div>
                            <div class="graph__x2"><span>6000</span> об/мин</div>
                        </div>
                        <div class="graph__y">
                            <div class="graph__y1"><span>400</span> нм</div>
                            <div class="graph__y2"><span>200</span> л.с.</div>
                        </div>
                        <div class="graph__img">
                            <img src="https://www.hyundai.ru/assets/img/santaFe/pics/3_performance/diagram_1.png" alt="">
                        </div>
                    </div>

                    <!-- 24 -->
                    <div class="description">
                        <div class="description__inner description-24-anim-5">
                            <div class="description__title">
                                <div class="description__wrapper description-24-anim-2">
                                    <p>
                                        Theta-II 2.4 GDi
                                    </p>
                                </div>
                            </div>
                            <div class="description__text">
                                <div class="description__wrapper description-24-anim-1">
                                    <p>
                                        Приемистый бензиновый двигатель с максимальной мощностью 188 л.с. при 6000 об/мин и максимальным крутящим моментом 241 Nm при 4000 об/мин.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="counter description-24-anim-3">
                            <div class="counter__left">
                                <div class="counter__icon">
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/performance_1.svg" alt="">
                                </div>
                                <div class="counter__value counter__value--border">
                                    <span id="count3">0</span> л.с.
                                </div>
                                <div class="counter__description counter__description--border">
                                    Макс.  Мощность
                                </div>
                            </div>
                            <div class="counter__right">
                                <div class="counter__icon">
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/performance_2.svg" alt="">
                                </div>
                                <div class="counter__value counter__value--lc">
                                    <span id="count4">0</span> Nm
                                </div>
                                <div class="counter__description">
                                    Макс. крутящий момент
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="graph description-24-anim-4">
                        <div class="graph__x">
                            <div class="graph__x1"><span>4000</span> об/мин</div>
                            <div class="graph__x2"><span>6000</span> об/мин</div>
                        </div>
                        <div class="graph__y">
                            <div class="graph__y1"><span>241</span> нм</div>
                            <div class="graph__y2"><span>188</span> л.с.</div>
                        </div>
                        <div class="graph__img">
                            <img src="https://www.hyundai.ru/assets/img/santaFe/pics/3_performance/diagram_2.png" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="slide4-1 js-fullpage fp-auto-height">
                <div class="l-wrapper l-wrapper--p">
                    <video class="slide4__video" id="video" preload="auto" data-autoplay loop muted>
                        <source src="https://www.hyundai.ru/assets/img/santaFe/video/performance_2.mp4" type="video/mp4">
                    </video>
                    <div class="video-shade video-shade--large"></div>
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                            <span>Великолепная <br>динамика.</span>
                        </h2>
                    </div>

                    <!-- HTRAC -->
                    <div class="description">
                        <div class="description__inner description-h-anim-4">
                            <div class="description__icon description-h-anim-3">
                                <img src="https://www.hyundai.ru/assets/img/santaFe/svg/performance_3.svg" alt="">
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
                    <div class="comfort__back slide5-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_title.jpg)"></div>

                    <div class="comfort__overlay slide5-anim-3"></div>
                    <div class="comfort__zone comfort__zone--1" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/zoom_1_shade.png)"></div>
                    <div class="comfort__zone comfort__zone--2" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/zoom_2_shade.png)"></div>
                    <div class="comfort__zone comfort__zone--3" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/zoom_3_shade.png)"></div>

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
                            <div class="sidebar__back sidebar--nav-anim-6" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_1.jpg)"></div>
                            <div class="sidebar__overlay sidebar--nav-anim-5"></div>
                            <div class="description">
                                <div class="description__inner sidebar--nav-anim-4">
                                    <div class="description__icon sidebar--nav-anim-3">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/comfort_1.svg" alt="">
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
                                                Современная мультимедиа система с большим экраном, навигацией и поддержкой Android Auto™ и Apple CarPlay™ дополняет особую атмосферу технологичности в интерьере автомобиля.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar sidebar--lcd">
                            <div class="sidebar__back sidebar--lcd-anim-6" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_2.jpg)"></div>
                            <div class="sidebar__overlay sidebar--lcd-anim-5"></div>
                            <div class="description">
                                <div class="description__inner sidebar--lcd-anim-4">
                                    <div class="description__icon sidebar--lcd-anim-3">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/comfort_2.svg" alt="">
                                    </div>
                                    <div class="description__title">
                                        <div class="description__wrapper sidebar--lcd-anim-1">
                                            <p>
                                                7-дюймовая цифровая приборная панель.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description__text">
                                        <div class="description__wrapper sidebar--lcd-anim-2">
                                            <p>
                                                Красочная и информативная приборная панель подсказывает водителю всю информацию о состоянии автомобиля и меняет цвет в зависимости от выбранного режима вождения.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar sidebar--interier">
                            <div class="sidebar__back sidebar--interier-anim-6">
                                <div class="sidebar__back sidebar--interier-anim-7" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_3a.jpg)"></div>
                                <div class="sidebar__back sidebar--interier-anim-8" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_3b.jpg)"></div>
                                <div class="sidebar__back sidebar--interier-anim-9" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_3c.jpg)"></div>
                                <div class="sidebar__back sidebar--interier-anim-10" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_3d.jpg)"></div>
                            </div>

                            <div class="sidebar__overlay sidebar--interier-anim-5"></div>
                            <div class="description">
                                <div class="description__inner sidebar--interier-anim-4">
                                    <div class="description__icon sidebar--interier-anim-3">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/comfort_3.svg" alt="">
                                    </div>
                                    <div class="description__title">
                                        <div class="description__wrapper sidebar--interier-anim-1">
                                            <p>
                                                4 цвета интерьера.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description__text">
                                        <div class="description__wrapper sidebar--interier-anim-2">
                                            <p>
                                                Благородные и практичные цвета салона — то что нужно для семейного автомобиля.
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
                <div id="scroll-container" class="l-wrapper l-wrapper--p l-wrapper--s">
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                    <span>Настоящий
                    <br>комфорт.</span>
                        </h2>
                    </div>
                    <ul id="scroll-element" class="list">
                        <li class="list__item">
                            <video class="list__video" preload="preload" data-autoplay loop muted>
                                <source src="https://www.hyundai.ru/assets/img/santaFe/video/comfort_1.mp4" type="video/mp4">
                            </video>
                            <div class="video-shade video-shade--small"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper comfort2-anim-1">
                                    <p>
                                        <span class="item-description__white">Система легкого доступа на 3 ряд сидений.</span> Достаточно нажать всего одну кнопку.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item"  style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_5.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper comfort2-anim-2">
                                    <p>
                                        <span class="item-description__white">Оконные шторки для заднего ряда сидений</span> обеспечивают конфиденциальность и защиту от солнца.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_6.jpg)">
                                <div class="item-description">
                                    <div class="item-description__wrapper comfort2-anim-3">
                                        <p>
                                            Идеальная эргономика во всем. Удобная <span class="item-description__white">ручка для легкого доступа на 3 ряд сидений</span> значительно упрощает процесс высадки/посадки пассажиров.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw">
                                <video class="list__video" preload="preload" data-autoplay loop muted>
                                    <source src="https://www.hyundai.ru/assets/img/santaFe/video/comfort_5-2.mp4" type="video/mp4">
                                </video>
                                <div class="video-shade video-shade--small"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper comfort2-anim-4">
                                        <p>
                                            <span class="item-description__white">Премиальная аудиосистема от Krell</span>, состоящая из 10 динамиков (включая сабвуфер) и внешнего усилителя, обеспечивает глубокий и реалистичный звук на любом сиденье автомобиля.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh salon-change-trigger">
                            <div class="list__back" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_7a.jpg)"></div>
                            <div class="list__back comfort2-anim-8" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_7b.jpg)"></div>
                            <div class="list__back comfort2-anim-9" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_7c.jpg)"></div>
                            <div class="item-description">
                                <div class="item-description__wrapper comfort2-anim-5">
                                    <p>
                                        7-местный SANTA&nbsp;FE предлагает несколько <span class="item-description__black">конфигураций сидений</span>, чтобы вместить всё и всех.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item"  style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_9.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper comfort2-anim-6">
                                    <p>
                                        В SANTA&nbsp;FE прохладно летом и тепло зимой, об этом заботятся <span class="item-description__white">вентиляция и подогрев сидений</span>.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item"  style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/4_comfort/comfort_10.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper comfort2-anim-7">
                                    <p>
                                        С <span class="item-description__white">беспроводным зарядным устройством</span> ваш смартфон больше не расстроит вас разряженным аккумулятором в самый неподходящий момент.
                                    </p>
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

                        <div class="slide6__back slide6-anim-2" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_1.png)"></div>
                    </div>
                    <div class="slide7 slide7-anim-1" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_2.png)">
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
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/tech_1.svg" alt="">
                                </div>
                                <div class="mark__description">
                                    предупреждение
                                    <br>водителя
                                </div>
                            </div>
                        </div>

                        <div class="schema slide7-anim-4">
                            <div class="schema__slider">
                                <img src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_1.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_2.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_3.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_4.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_5.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_6.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_7.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_8.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_9.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_10.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_11.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_12.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_13.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_14.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_15.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_16.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_17.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_18.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_19.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_20.jpg" alt="">
                                <img class="schema__animate" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/scheme_1_21.jpg" alt="">
                            </div>
                        </div>

                        <div class="description">
                            <div class="description__inner slide7-anim-8">
                                <div class="description__title description__title--slide7">
                                    <div class="description__wrapper slide7-anim-2">
                                        <p>
                                            Безопасный выезд с парковки задним ходом.
                                        </p>
                                    </div>
                                </div>
                                <div class="description__text description__text--slide7">
                                    <div class="description__wrapper slide7-anim-3">
                                        <p>
                                            <span class="description__text--black">Система предупреждения столкновения сбоку при выезде с парковки задним ходом</span> предупреждает водителя об опасности и автоматически задействует тормоза, останавливая автомобиль.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide8 slide8-anim-1">
                        <div class="slide8__back" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_2.png)">
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
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/tech_2.svg" alt="">
                                    </div>
                                    <div class="mark__description">
                                        блокировка
                                        <br>задних дверей
                                    </div>
                                </div>
                            </div>

                            <svg class="slide8__line">
                                <path d="M0 200 Q 300 0 600 200" fill="transparent"/>
                            </svg>
                        </div>

                        <div class="description description--right">
                            <div class="description__inner slide8-anim-10">
                                <div class="description__title description__title--slide7">
                                    <div class="description__wrapper slide8-anim-5">
                                        <p>
                                            Безопасный выход с задних сидений.
                                        </p>
                                    </div>
                                </div>
                                <div class="description__text description__text--slide7">
                                    <div class="description__wrapper slide8-anim-6">
                                        <p>
                                            Cистема безопасного выхода предотвращает разблокировку замков пассажирских дверей при обнаружении приближающегося сзади (в слепой зоне) транспорта.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="video slide8-anim-7">
                            <svg class="video__svg">
                                <circle class="video__circle2 slide8-anim-9" cx="50%" cy="50%" r="0%"></circle>
                                <circle class="video__circle1 slide8-anim-8" cx="50%" cy="50%" r="0%"></circle>
                            </svg>
                            <div class="video__inner">
                                <video id="video2" class="video__video" preload="preload" data-autoplay loop muted>
                                    <source src="https://www.hyundai.ru/assets/img/santaFe/video/tech_0.mp4" type="video/mp4">
                                </video>
                                <div class="video-shade video-shade--circle"></div>
                            </div>
                        </div>
                    </div>
                    <div class="slide9 slide9-anim-1" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_2_r.png)">
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
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/tech_3.svg" alt="">
                                </div>
                                <div class="mark__description">
                                    обнаружен
                                    <br>пассажир
                                </div>
                            </div>
                        </div>

                        <div class="schema schema--top slide9-anim-7">
                            <svg class="schema__point schema__point--tl">

                                <radialGradient id="grad2" cx="50%" y="50%">
                                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0"/>
                                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.5"/>
                                </radialGradient>

                                <circle class="schema__circle2" fill="url(#grad2)" cx="50%" cy="50%" r="0"></circle>
                                <circle class="schema__circle1" cx="50%" cy="50%" r="0"></circle>
                            </svg>
                            <svg class="schema__point schema__point--bl">

                                <radialGradient id="grad2" cx="50%" y="50%">
                                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0"/>
                                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.5"/>
                                </radialGradient>

                                <circle class="schema__circle2" fill="url(#grad2)" cx="50%" cy="50%" r="0"></circle>
                                <circle class="schema__circle1" cx="50%" cy="50%" r="0"></circle>
                            </svg>
                            <svg class="schema__point schema__point--br">

                                <radialGradient id="grad2" cx="50%" y="50%">
                                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0"/>
                                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.5"/>
                                </radialGradient>

                                <circle class="schema__circle2" fill="url(#grad2)" cx="50%" cy="50%" r="0"></circle>
                                <circle class="schema__circle1" cx="50%" cy="50%" r="0"></circle>
                            </svg>
                            <svg class="schema__point schema__point--tr">

                                <radialGradient id="grad3" cx="50%" y="50%">
                                    <stop offset="0%" stop-color="#41a2b5" stop-opacity="0"/>
                                    <stop offset="100%" stop-color="#41a2b5" stop-opacity="0.5"/>
                                </radialGradient>

                                <circle class="schema__circle2" fill="url(#grad3)" cx="50%" cy="50%" r="0"></circle>
                                <circle class="schema__circle1 schema__circle1--blue" cx="50%" cy="50%" r="0"></circle>
                            </svg>
                            <img src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_scheme_2.png" alt="">
                        </div>

                        <div class="description">
                            <div class="description__inner slide9-anim-8">
                                <div class="description__title description__title--slide7">
                                    <div class="description__wrapper slide9-anim-5">
                                        <p>
                                            Распознавание пассажиров сзади.
                                        </p>
                                    </div>
                                </div>
                                <div class="description__text description__text--slide7">
                                    <div class="description__wrapper slide9-anim-6">
                                        <p>
                                            В случае, если кто-то остался в салоне автомобиля, <span class="description__text--black">система распознавания пассажиров на заднем сиденье</span> подаст напоминающий сигнал водителю, покидающему SANTA&nbsp;FE.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="safety2 js-fullpage fp-auto-height">
                <div id="scroll-container-2" class="l-wrapper l-wrapper--p l-wrapper--s">
                    <div class="text-block text-block--small">
                        <h2 class="text-block__title">
                    <span>
                        Технологии
                        <br>безопасности.
                    </span>
                        </h2>
                    </div>
                    <ul id="scroll-element-2" class="list">
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw">
                                <video class="list__video" preload="preload" data-autoplay loop muted>
                                    <source src="https://www.hyundai.ru/assets/img/santaFe/video/tech_1.mp4" type="video/mp4">
                                </video>
                                <div class="video-shade video-shade--small"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-1">
                                        <p>
                                            <span class="item-description__white">Проекция показаний приборов на лобовое стекло</span> значительно упрощает контроль за основными показателями автомобиля без отрыва взгляда от дороги.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_3.jpg)">
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-2">
                                        <p>
                                            <span class="item-description__white">Система слежения за состоянием водителя</span> анализирует его поведение во время движения и предупреждает о необходимости остановки для отдыха.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_2.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety2-anim-3">
                                    <p>
                                        SANTA&nbsp;FE <span class="item-description__black">автоматически переключает дальний/ближний свет фар</span> в соответствии с дорожными условиями.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_4.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety2-anim-4">
                                    <p>
                                        <span class="item-description__black">Адаптивный круиз-контроль с ассистентом движения в пробке</span> автоматически поддерживает скорость и дистанцию до следующего впереди автомобиля вплоть до полной остановки и продолжает поездку после возобновления движения (при остановке не более 3-х секунд) .
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_5.jpg)">
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-5">
                                        <p>
                                            <span class="item-description__black">Система автоматического торможения перед препятствием спереди</span> уменьшает или предотвращает ущерб от столкновения с транспортом или пешеходами.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw">
                                <video class="list__video" preload="preload" data-autoplay loop muted>
                                    <source src="https://www.hyundai.ru/assets/img/santaFe/video/tech_6.mp4" type="video/mp4">
                                </video>
                                <div class="video-shade video-shade--small"></div>
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-6">
                                        <p>
                                            <span class="item-description__white">Система предотвращения столкновений с автомобилями</span> предупреждает водителя о транспорте, находящемся <span class="item-description__white">в слепой зоне</span>, и cнижает вероятность столкновения при смене полосы движения подтормаживанием и подруливанием.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh">
                            <div class="list__item list__item--dw" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_7.jpg)">
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-7">
                                        <p>
                                            <span class="item-description__white">Система кругового обзора</span>, состоящая из 4-х камер, помогает водителю полностью контролировать ситуацию во время парковки.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list__item list__item--dw" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_9.jpg)">
                                <div class="item-description">
                                    <div class="item-description__wrapper safety2-anim-8">
                                        <p>
                                            С <span class="item-description__black">функцией автоматического открывания двери багажника</span> погрузка в автомобиль остается легкой, даже если у вас заняты руки. А скорость открытия багажной двери можно отрегулировать.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list__item list__item--dh" style="background-image: url(https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_8.jpg)">
                            <div class="item-description">
                                <div class="item-description__wrapper safety2-anim-9">
                                    <p>
                                        <span class="item-description__black">Ассистент удержания автомобиля в полосе движения</span> предупреждает водителя о пересечении линии разметки и подруливает в случае необходимости.
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
                                <div class="config__name">SANTA FE</div>
                                <img id="colorImg" src="https://www.hyundai.ru/assets/img/santaFe/pics/5_tech/tech_2_r.png" alt="">
                                <div class="x-size">
                                    <div class="x-size__arrow-l">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/arrow_left.png" alt="">
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
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/line_horizontal.png" alt="">
                                    </div>
                                    <div class="x-size__value">4.77 М</div>
                                    <div class="x-size__line-r">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/line_horizontal.png" alt="">
                                    </div>
                                    <div class="x-size__arrow-r">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/arrow_right.png" alt="">
                                    </div>
                                </div>
                                <div class="y-size">
                                    <div class="y-size__arrow-t">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/arrow_top.png" alt="">
                                    </div>
                                    <div class="y-size__line-t">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/line_vertical.png" alt="">
                                    </div>
                                    <div class="y-size__value">1.68 М</div>
                                    <div class="y-size__line-b">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/line_vertical.png" alt="">
                                    </div>
                                    <div class="y-size__arrow-b">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/arrow_bottom.png" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="config-sidebar">
                                <div class="config-sidebar__row">
                                    <div class="config-sidebar__icon">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/specs_1.svg" alt="">
                                    </div>
                                    <div class="config-sidebar__value">
                                        <span>203</span> км/ч
                                    </div>
                                    <div class="config-sidebar__description">
                                        Макс.  скорость
                                    </div>
                                </div>
                                <div class="config-sidebar__row">
                                    <div class="config-sidebar__icon">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/specs_2.svg" alt="">
                                    </div>
                                    <div class="config-sidebar__value">
                                        <span>200</span> л.с.
                                    </div>
                                    <div class="config-sidebar__description">
                                        мощность
                                    </div>
                                </div>
                                <div class="config-sidebar__row">
                                    <div class="config-sidebar__icon">
                                        <img src="https://www.hyundai.ru/assets/img/santaFe/svg/specs_3.svg" alt="">
                                    </div>
                                    <div class="config-sidebar__value">
                                        <span>2.2</span> л
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
                                    <a data-color="White Cream (WW2)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_White_Cream_1024.png" href="#">
                                        <div style="background-color: #ffffff"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Typhoon Silver (T2X)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Typhoon_Silver_1024.png" href="#">
                                        <div style="background-color: #e3e1d8"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Wild Explorer (W2P)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Wild_Explorer_1024.png" href="#">
                                        <div style="background-color: #707370"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Magnetic Force (M2F)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Magnetic_Force_1024.png" href="#">
                                        <div style="background-color: #5e6261"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Rain Forest (R2F)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Rain_Forest_1024.png" href="#">
                                        <div style="background-color: #4b5552"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Earthy Bronze (Y2B)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Earthy_Bronze_1024.png" href="#">
                                        <div style="background-color: #a0918a"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Lava Orange (YR2)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Lava_Orange_1024.png" href="#">
                                        <div style="background-color: #ad301b"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Horizon Red (RD2)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Horizon_Red_1024.png" href="#">
                                        <div style="background-color: #8a281f"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Stormy Sea (ST2)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Stormy_Sea_1024.png" href="#">
                                        <div style="background-color: #233c5c"></div>
                                    </a>
                                </li>
                                <li class="colors__color">
                                    <a data-color="Phantom Black (NKA)" data-img="https://www.hyundai.ru/assets/img/santaFe/pics/6_config/colors/TM_Phantom_Black_1024.png" href="#">
                                        <div style="background-color: #000"></div>
                                    </a>
                                </li>
                            </ul>
                            <div class="colors__name js-set-color">
                                White
                            </div>
                        </div>
                        <a href="https://www.hyundai.ru/configurator/car/25" class="price" style="display: inline-block;">
                            <div class="price__value">
                                <span>от</span> 1 999 000  &#8381;
                            </div>
                            <div class="price__note">
                                В кредит от 12&nbsp;000 ₽ в месяц
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
                                <div class="table__name">Двигатель.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__title">
                                    <div class="table__col">Theta-II 2.4GDI</div>
                                    <div class="table__col">R2.2 CRDi VGT</div>
                                </div>
                                <div class="table__description">
                                    тип
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            Бензиновый, с непосредственным впрыском
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            Дизель
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Объем, см<sup>3</sup>
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            2359
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            2199
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Степень сжатия
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            11,3
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            16
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Максимальная мощность**, кВт при об/мин
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            138 (6000)
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            147 (3800)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Максимальная мощность**, л.с. при об/мин
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            188  (6000)
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            200 (3800)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Максимальный крутящий момент**, Nm при об/мин
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            241 (4000)
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            440 (1750-2750)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Топливный бак, л
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            71
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            71
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
                                    <div class="table__col">
                                        <div class="table__val">
                                            Независимая, стойки McPherson, с телескопическими амортизаторами, со стабилизатором поперечной устойчивости
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            Независимая, стойки McPherson, с телескопическими амортизаторами, со стабилизатором поперечной устойчивости
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Задняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            Независимая, многорычажная, пружинная, с телескопическими амортизаторами, со стабилизатором поперечной устойчивости
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            Независимая, многорычажная, пружинная, с телескопическими амортизаторами, со стабилизатором поперечной устойчивости
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Тормозные механизмы, передние
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            вентилируемые дисковые с индикаторами износа
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            вентилируемые дисковые с индикаторами износа
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Тормозные механизмы, задние
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            вентилируемые дисковые с индикаторами износа
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            вентилируемые дисковые с индикаторами износа
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
                                    <div class="table__col">
                                        <div class="table__val">
                                            С электроусилителем (на рулевой колонке), реечная передача
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            С электроусилителем (на рулевой колонке), реечная передача
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Кол-во поворотов до упора
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            2,71
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            2,71
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Минимальный радиус разворота, м
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            5,71
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            5,71
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
                                    <div class="table__col">
                                        <div class="table__val">
                                            235/65R17 | 235/60R18 | 235/55R19
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            235/65R17 | 235/60R18 | 235/55R19
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Диски
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            7.0J X 17" | 7.5J X 18" | 8.0J X 19"
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            7.0J X 17" | 7.5J X 18" | 8.0J X 19"
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Динамические характеристики.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__title">
                                    <div class="table__col">6АКПП 4WD</div>
                                    <div class="table__col">8АКПП 4WD</div>
                                </div>
                                <div class="table__description">
                                    Коробка передач
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            Автоматическая
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            Автоматическая
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Тип привода
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            полный
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            полный
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Ускорение 0-100 км/ч, сек
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            10,4
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            9,4
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Макс. скорость, км/ч
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            195
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            203
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
                                    расход топлива*** л/100 км, городской / загородный / смешанный цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            12,6 / 7,3 / 9,3
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            9,9 / 6,2 / 7,5
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Экологический класс
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            5 (пятый)
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            5 (пятый)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    выделение co2***, г/км, городской | загородный | смешанный цикл
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            295 / 172 / 217
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            261 / 163 / 198
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section table__section--bordered">
                            <div class="table__left">
                                <div class="table__name">Масса.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    Снаряженная масса, кг, min-max
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            <span>5 мест</span> 1780 ~ 1905
                                            <br><span>7 мест</span> 1820 ~ 1945
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            <span>5 мест</span> 1905 ~ 2030
                                            <br><span>7 мест</span> 1945 ~ 2070
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    полная масса, кг
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            <span>5 мест</span> 2264
                                            <br><span>7 мест</span> 2452
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            <span>5 мест</span> 2407
                                            <br><span>7 мест</span> 2594
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Масса буксируемого прицепа оборудованного / не оборудованного тормозами, кг
                                </div>
                                <div class="table__row">
                                    <div class="table__col">
                                        <div class="table__val">
                                            750 / 2000
                                        </div>
                                    </div>
                                    <div class="table__col">
                                        <div class="table__val">
                                            750 / 2000
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__section">
                            <div class="table__left">
                                <div class="table__name">Размеры.</div>
                            </div>
                            <div class="table__right">
                                <div class="table__description">
                                    количество мест
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            5 или 7
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    габаритные размеры, мм, длина, ширина, высота
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            4770 х 1890 х 1680 / 1705 (с рейлингами на крыше)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    колесная база
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            2765
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    минимальный дорожный просвет, мм
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            185
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Колея, мм, передняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            1 643 / 1 638 / 1 635 (шины 17"/18"/19")
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    колея, мм, задняя
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            1 652 / 1 647 / 1 644 (шины 17"/18"/19")
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    свесы, мм, передний / задний
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            940 / 1065
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    пространство для ног, мм, 1-й / 2-й / 3-й ряд
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            <span>5 мест</span> 1048~1120 / 1026 / ---
                                            <br><span>7 мест</span> 1048~1120 / 1001 / 746
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    высота от сиденья до потолка, мм, 1-й / 2-й / 3-й ряд
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            <span>5 мест</span> 1016~1046 (974~1003) / 995 (963) / ---   (с панорамной крышей)
                                            <br><span>7 мест</span> 1016~1046 (974~1003) / 995 (963) / 917  (с панорамной крышей)
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    ширина салона на уровне плеч, мм, 1-й / 2-й / 3-й ряд
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            1500 / 1480 (1450)* / 1344
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    ширина салона на уровне бедер, мм, 1-й / 2-й / 3-й ряд
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            1500 / 1480 (1450)* / 1344
                                        </div>
                                    </div>
                                </div>
                                <div class="table__description">
                                    Объем багажника со сложенными / разложенными сиденьями задних рядов, л (SAE)
                                </div>
                                <div class="table__row">
                                    <div class="table__col table__col--100">
                                        <div class="table__val">
                                            <span>5 мест</span> 2019 / 1036
                                            <br><span>7 мест</span> 2002 / 1016 / 328
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table__bottom">
                            <a href="https://www.hyundai.ru/configurator/car/25/modification" class="arrow-link">
                                <div class="arrow-link__text">
                                    Сравнить конфигурации
                                </div>
                                <div class="arrow-link__square">
                                    <img src="https://www.hyundai.ru/assets/img/santaFe/svg/arrow_btn.svg" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="table__note">
                            * - Значение ширины салона на уровне плеч для модификаций с выдвижными шторками на задних боковых окнах; ** - Значения максимальной мощности и максимального крутящего момента двигателя приведены согласно методике испытаний Правил ООН № 85; *** - Показатели расхода топлива и массы выделяемого CO2 представлены согласно методикам испытаний Правил ООН № 83 и 101
                        </div>

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
                    imgSrcArr.push(imgArr[i].getAttribute('src'));
                }
                for (var i = 0; i < videoArr.length; i++) {
                    var source = videoArr[i].querySelector('source')

                    videoSrcArr.push(source.getAttribute('src'));
                }

                //Background-image
                for (var i = 0; i < divArr.length; i++) {
                    if (divArr[i].style.backgroundImage) {
                        var str1,
                            str2;

                        str1 = divArr[i].style.backgroundImage.replace('url("','');
                        str2 = str1.replace('")','');

                        imgSrcArr.push(str2);
                    }
                }

                for (var i = 0; i < imgSrcArr.length; i++ ) {
                    var img = new Image();

                    img.src = imgSrcArr[i];
                    img.onload = function () {
                        progress++;

                        //console.log(progress + '  ' + src);

                        show(progress, imgSrcArr.length + videoSrcArr.length);
                    };
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
    <script type="text/javascript" src="js/santaFe.js"></script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>