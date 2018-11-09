<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("СТАРТ Плюс.");
?>
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/fullpage/jquery.fullpage.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/selectize/selectize.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/nouislider/nouislider.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/selectize/selectize.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/startplus.css" rel="stylesheet" />

    <style>
        #panel{
            display: none;
        }

        .first-p__input{
            display: block!important;
            width: 150px!important;
            padding: 8px 0!important;
            -webkit-box-shadow: none!important;
            box-shadow: none!important;
            border: none!important;
            background-color: #104d8c!important;
            -webkit-border-radius: 20px!important;
            border-radius: 20px!important;
            font-size: 15px!important;
            font-weight: 700!important;
            color: #fff!important;
            padding-left: 30px!important;
        }
    </style>

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <div id="fullpage">
            <section class="start js-section custom-height">
                <div class="start__title">
                    <h1 class="h1">
                        <span>СТАРТ Плюс.</span>
                    </h1>
                    <div class="start__text">
                <span>
                    Всё будет включено.
                </span>
                    </div>
                </div>
                <div class="blue">
                    <div class="blue__title js-set-from">
                    </div>
                    <ul class="blue__list">
                        <li class="blue__item">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                    <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                        L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                    </svg>
                            <span>КАСКО включено</span>
                        </li>
                        <li class="blue__item">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                    <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                        L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                    </svg>
                            <span>ТО включено</span>
                        </li>
                    </ul>
                </div>
            </section>
            <section class="select js-section">
                <a href="#" class="select-line js-next-clide">
                    <div class="select-line__center">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 10 16" style="enable-background:new 0 0 10 16;" xml:space="preserve">
                <g transform="translate(0,-952.36218)">
                    <path class="st0" d="M9.9,962.8l-0.6-0.7c-0.2-0.2-0.5-0.2-0.7,0l-2.7,2.8c0-4.4,0-7.8,0-12.2c0-0.2-0.2-0.4-0.5-0.4H4.5
                        c-0.2,0-0.5,0.2-0.5,0.5v12.1c-0.9-0.9-1.8-1.9-2.7-2.8c-0.2-0.2-0.5-0.2-0.7,0l-0.6,0.7c-0.2,0.2-0.2,0.5,0,0.6
                        c1.3,1.4,3.3,3.4,4.6,4.8c0.2,0.2,0.5,0.2,0.7,0l4.6-4.8C10.1,963.2,10,963,9.9,962.8z"/>
                </g>
                </svg>
                        <div class="select-line__text">Выберите модель</div>
                    </div>
                </a>
                <div class="select__center">
                    <ul class="select__carlist">
                        <li>
                            <a data-id="23" data-img="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/NewSolaris_White_77bfe91518a1b84aa2019f277adec4cc/4.png" class="car" href="#">
                                <div class="car-img">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/NewSolaris_White_77bfe91518a1b84aa2019f277adec4cc/4.png" alt="">
                                </div>
                                <div class="car__top-line">
                                    <div class="car__name">
                                        <span></span>
                                    </div>
                                    <div class="car__price">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="car__bottom-line">
                                    <div class="car__program">
                                        <span>старт плюс</span>
                                    </div>
                                    <div class="car__credit">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a data-id="7" data-img="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Elantra_Polar_White_5b7849e5dca797d40ae8ee0251daf41a/4.png" class="car" href="#">
                                <div class="car-img">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Elantra_Polar_White_5b7849e5dca797d40ae8ee0251daf41a/4.png" alt="">
                                </div>
                                <div class="car__top-line">
                                    <div class="car__name">
                                        <span></span>
                                    </div>
                                    <div class="car__price">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="car__bottom-line">
                                    <div class="car__program">
                                        <span>старт плюс</span>
                                    </div>
                                    <div class="car__credit">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a data-id="22" data-img="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Creta_White_fdce8909c5b4a658ddd46899e229c582/31.png" class="car" href="#">
                                <div class="car-img">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Creta_White_fdce8909c5b4a658ddd46899e229c582/31.png" alt="">
                                </div>
                                <div class="car__top-line">
                                    <div class="car__name">
                                        <span></span>
                                    </div>
                                    <div class="car__price">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="car__bottom-line">
                                    <div class="car__program">
                                        <span>старт плюс</span>
                                    </div>
                                    <div class="car__credit">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a data-id="24" data-img="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Sonata_LF_Pure_White_b0a28afff5b892dc8d97115dbcf77e8b/4.png" class="car" href="#">
                                <div class="car-img">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/Sonata_LF_Pure_White_b0a28afff5b892dc8d97115dbcf77e8b/4.png" alt="">
                                </div>
                                <div class="car__top-line">
                                    <div class="car__name">
                                        <span></span>
                                    </div>
                                    <div class="car__price">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="car__bottom-line">
                                    <div class="car__program">
                                        <span>старт плюс</span>
                                    </div>
                                    <div class="car__credit">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a data-id="26" data-img="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/TLe_Polar_White_9021faf3f1acf35246fe23b39ecca90d/4.png" class="car" href="#">
                                <div class="car-img">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/TLe_Polar_White_9021faf3f1acf35246fe23b39ecca90d/4.png" alt="">
                                </div>
                                <div class="car__top-line">
                                    <div class="car__name">
                                        <span></span>
                                    </div>
                                    <div class="car__price">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="car__bottom-line">
                                    <div class="car__program">
                                        <span>старт плюс</span>
                                    </div>
                                    <div class="car__credit">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a data-id="25" data-img="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/TM_White_Cream_9139d69e0742449edc4170638c290e6c/4.png" class="car" href="#">
                                <div class="car-img">
                                    <img src="https://api.cofigurator.hyundai.ru/images/car_photo_exterior360/TM_White_Cream_9139d69e0742449edc4170638c290e6c/4.png" alt="">
                                </div>
                                <div class="car__top-line">
                                    <div class="car__name">
                                        <span></span>
                                    </div>
                                    <div class="car__price">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="car__bottom-line">
                                    <div class="car__program">
                                        <span>старт плюс</span>
                                    </div>
                                    <div class="car__credit">
                                        <span></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
                <div class="shade" id="calc">
                    <form class="calc" @click="commonEvent($event)">
                        <div class="calc__left">
                            <div class="calc__color"></div>
                            <div class="calc__background"></div>
                            <div class="car-info">
                                <div class="car-info__top">
                                    <a href="#" class="car-info__back js-close-car-info">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 10 16" style="enable-background:new 0 0 10 16;" xml:space="preserve">
                                    <g transform="translate(0,-952.36218)">
                                        <path class="st0" d="M9.9,962.8l-0.6-0.7c-0.2-0.2-0.5-0.2-0.7,0l-2.7,2.8c0-4.4,0-7.8,0-12.2c0-0.2-0.2-0.4-0.5-0.4H4.5
                                            c-0.2,0-0.5,0.2-0.5,0.5v12.1c-0.9-0.9-1.8-1.9-2.7-2.8c-0.2-0.2-0.5-0.2-0.7,0l-0.6,0.7c-0.2,0.2-0.2,0.5,0,0.6
                                            c1.3,1.4,3.3,3.4,4.6,4.8c0.2,0.2,0.5,0.2,0.7,0l4.6-4.8C10.1,963.2,10,963,9.9,962.8z"/>
                                    </g>
                                </svg>
                                        <span>Выбор модели</span>
                                    </a>
                                    <div class="car-info__name">{{ car.name }}</div>
                                </div>
                                <div class="shade__car">
                                    <div class="shade__name">{{ car.name }}</div>
                                    <img v-bind:src="activeImg" alt="">
                                </div>
                                <div class="car-info__bottom">
                                    <div class="color">
                                        <div class="color__top">
                                            <div class="color__ru">{{ activeColor.nameRus }}</div>
                                            <div class="color__en">{{ activeColor.name }}</div>
                                        </div>
                                        <ul class="color__groups">
                                            <li class="color__group" v-for="(group, key) in colors">
                                                <ul class="color__list">
                                                    <li class="color__item" :class="{ active: color.id === activeColor.id }" v-for="color in group" @mouseenter="mouseenterColor($event)" @mouseleave="mouseLeaveColor($event)">
                                                        <label class="color__body" v-bind:style="{ backgroundColor: color.colorCode }">
                                                            <input type="radio" name="color" v-bind:value="color" v-model="activeColor">
                                                        </label>
                                                    </li>
                                                </ul>
                                                <div class="color__info">
                                                    <div class="color__name">{{ key | keyTranslate }}</div>
                                                    <div class="color__price">{{ group[Object.keys(group)[0]].cost | currencyFormat }} ₽</div>
                                                </div>
                                            </li>
                                            <!-- <li class="color__group">
                                                <ul class="color__list">
                                                    <li class="color__item">
                                                        <a class="color__body" style="background-color: #ae301c;" href="#"></a>
                                                    </li>
                                                    <li class="color__item">
                                                        <a class="color__body" style="background-color: #8c271f;" href="#"></a>
                                                    </li>
                                                    <li class="color__item">
                                                        <a class="color__body" style="background-color: #2d4261;" href="#"></a>
                                                    </li>
                                                    <li class="color__item">
                                                        <a class="color__body" style="background-color: #262827;" href="#"></a>
                                                    </li>
                                                </ul>
                                                <div class="color__info">
                                                    <div class="color__name">Перламутр</div>
                                                    <div class="color__price">15 000 р</div>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calc__right">
                            <div class="calc__top">
                                <ul class="calc__selectors">
                                    <li class="calc__selector">
                                        <div class="selector" :class="{ isOpened: modificationsOpened }">
                                            <a href="#" @click.prevent="modificationsOpen" class="selector__current">
                                                <div class="selector__wrap">
                                                    <div class="selector__title">модификация</div>
                                                    <div class="selector__c-option">{{ modification.name }}</div>
                                                    <!-- <div class="selector__c-value">{{ modification.minPrice | currencyFormat }} ₽</div> -->
                                                </div>
                                                <div class="selector__arrow">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                            </svg>
                                                </div>
                                            </a>
                                            <div class="selector__dropdown">
                                                <ul class="selector__list">
                                                    <li class="selector__item" v-for="mod in car.modificationList">
                                                        <label>
                                                            <input type="radio" name="modification" v-bind:value="mod" v-model="modification" @click="changeModification(mod)">
                                                            <div class="selector__option">{{ mod.name }}</div>
                                                            <div class="selector__value">{{ mod.minPrice | currencyFormat}} ₽</div>
                                                        </label>
                                                    </li>
                                                    <!-- <li class="selector__item">
                                                        <label>
                                                            <input type="radio" name="modification" id="">
                                                            <div class="selector__option">Family</div>
                                                            <div class="selector__value">2 500 000 р.</div>
                                                        </label>
                                                    </li> -->
                                                </ul>
                                                <button class="selector__button" @click.prevent="toShowCompare('modification')">
                                                    <span>Сравнить</span>
                                                    <div class="selector__icon">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                                <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                    c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                                </svg>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="calc__selector">
                                        <div class="selector" :class="{ isOpened: complectationsOpened }">
                                            <a href="#" @click.prevent="complectationsOpen" class="selector__current">
                                                <div class="selector__wrap">
                                                    <div class="selector__title">комплектация</div>
                                                    <div class="selector__c-option">{{ complectation.name }}</div>
                                                    <div class="selector__c-value">{{ complectation.price | currencyFormat}} ₽</div>
                                                </div>
                                                <div class="selector__arrow">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                            </svg>
                                                </div>
                                            </a>
                                            <div class="selector__dropdown">
                                                <ul class="selector__list">
                                                    <li class="selector__item" v-for="comp in modification.complectations">
                                                        <label>
                                                            <input type="radio" name="complectation" v-bind:value="comp" v-model="complectation" @click="changeComplectation(comp)">
                                                            <div class="selector__option">{{ comp.name }}</div>
                                                            <div class="selector__value">{{ comp.price | currencyFormat }} ₽</div>
                                                        </label>
                                                    </li>
                                                    <!-- <li class="selector__item">
                                                        <label>
                                                            <input type="radio" name="modification" id="">
                                                            <div class="selector__option">Family</div>
                                                            <div class="selector__value">2 500 000 р.</div>
                                                        </label>
                                                    </li> -->
                                                </ul>
                                                <button class="selector__button" @click.prevent="toShowCompare('complectation')">
                                                    <span>Сравнить</span>
                                                    <div class="selector__icon">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                                <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                    c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                                </svg>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="calc__selector">
                                        <div class="selector" :class="{ isOpened: optionsOpened, isDisabled: Object.keys(packets).length === 0 }">
                                            <a href="#" @click.prevent="optionsOpen" class="selector__current">
                                                <div class="selector__wrap">
                                                    <div class="selector__title">пакеты</div>
                                                    <div class="selector__c-option" v-if="selectedPackets.length > 0">
                                                        <ul>
                                                            <li v-for="pack in selectedPackets">{{ pack.name }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="selector__c-option" v-else>Выбрать</div>
                                                </div>
                                                <div class="selector__arrow">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                            </svg>
                                                </div>
                                            </a>
                                            <div class="selector__dropdown">
                                                <ul class="selector__list">
                                                    <li class="selector__item" v-for="packet in packets">
                                                        <label>
                                                            <input type="checkbox" name="packet" v-bind:value="packet" v-model="selectedPackets" @click="changePacket(packet, $event)">
                                                            <div class="selector__option">{{ packet.name }}</div>
                                                            <div class="selector__value">{{ packet.price | currencyFormat }} ₽</div>
                                                        </label>
                                                    </li>
                                                    <!-- <li class="selector__item">
                                                        <label>
                                                            <input type="radio" name="modification" id="">
                                                            <div class="selector__option">Family</div>
                                                            <div class="selector__value">2 500 000 р.</div>
                                                        </label>
                                                    </li> -->
                                                </ul>
                                                <button class="selector__button" @click.prevent="toShowCompare('packets')">
                                                    <span>Сравнить</span>
                                                    <div class="selector__icon">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                                <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                    c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                                </svg>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="calc__selector">
                                        <div class="selector isDisabled">
                                            <a href="#" class="selector__current">
                                                <div class="selector__wrap">
                                                    <div class="selector__title">срок кредита</div>
                                                    <div class="selector__c-option">36 месяцев</div>
                                                </div>
                                                <div class="selector__arrow">
                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                            </svg>
                                                </div>
                                            </a>
                                            <div class="selector__dropdown">
                                                <ul class="selector__list">
                                                    <li class="selector__item">
                                                        <label>
                                                            <input type="radio" name="modification" id="">
                                                            <div class="selector__option"></div>
                                                            <div class="selector__value"></div>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="first-p">
                                    <label for="first-p" class="first-p__text">
                                        первый взнос
                                    </label>

                                    <input class="first-p__input js-changeFirstPayment" autocomplete="off" type="text" name="first-p" v-money="money" v-bind:value="firstPayment" @keydown.prevent.enter="changeFirstPayment" @blur="changeFirstPayment">
                                </div>
                                <div class="slider-p">
                                    <div class="slider-p__low">20 %</div>
                                    <div class="slider-p__slider"></div>
                                    <div class="slider-p__hight">54 %</div>
                                </div>
                                <div class="calc__price">{{  getCalculation | currencyFormat }} ₽</div>
                            </div>
                            <div class="calc__bottom">
                                <div class="calc__first-line">
                                    <div class="calc__payment">Ваш расчет</div>
                                    <a href="#" class="calc__info">
                                        <span>Как это работает</span>
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 18 18" style="enable-background:new 0 0 18 18;" xml:space="preserve">
                                <g>
                                    <path class="st0" d="M16.4,3.9c-0.3-0.4-0.6-0.8-0.9-1.1c-0.3-0.3-0.7-0.6-1.1-0.9c-0.7-0.5-1.5-1-2.4-1.3C11.2,0.2,10.2,0,9.3,0
                                        C8.4,0,7.4,0.1,6.5,0.3C4.8,0.8,3.2,1.8,2.1,3.2C1.8,3.6,1.5,4,1.3,4.4C1,4.8,0.8,5.2,0.6,5.7C0.3,6.5,0.1,7.5,0,8.4
                                        c-0.1,1.8,0.3,3.7,1.3,5.3c0.9,1.5,2.3,2.8,3.9,3.5c0.4,0.2,0.9,0.4,1.4,0.5c0.5,0.1,1,0.2,1.5,0.3c0.9,0.1,1.9,0,2.8-0.1
                                        c1.7-0.3,3.4-1.3,4.6-2.6c1.2-1.3,2.1-3,2.4-4.7C17.9,10,18,9.5,18,9C18,7.2,17.4,5.3,16.4,3.9z M15.9,9.9
                                        c-0.1,0.6-0.3,1.2-0.5,1.8c-0.2,0.6-0.6,1.1-0.9,1.6c-0.4,0.5-0.8,0.9-1.2,1.2c-0.5,0.4-1,0.7-1.5,0.9c-0.6,0.2-1.2,0.4-1.8,0.5
                                        c-0.6,0.1-1.3,0.1-1.9,0c-0.6-0.1-1.2-0.3-1.8-0.5c-0.5-0.2-1.1-0.5-1.6-0.9c-0.5-0.4-0.9-0.8-1.2-1.2c-0.4-0.5-0.7-1-0.9-1.6
                                        c-0.2-0.6-0.4-1.2-0.5-1.8C2,9.3,2,8.7,2.1,8.1c0.1-0.6,0.3-1.2,0.5-1.8c0.2-0.6,0.5-1.1,0.9-1.6c0.4-0.5,0.8-0.9,1.2-1.2
                                        c0.5-0.4,1-0.7,1.6-0.9c0.6-0.2,1.2-0.4,1.8-0.5C8.7,2,9.3,2,9.9,2.1c0.6,0.1,1.2,0.3,1.8,0.5c0.5,0.2,1.1,0.5,1.5,0.9
                                        c0.5,0.4,0.9,0.8,1.2,1.2c0.4,0.5,0.7,1,0.9,1.6c0.2,0.6,0.4,1.2,0.5,1.8C15.9,8.4,16,8.7,16,9C16,9.3,15.9,9.6,15.9,9.9z"/>
                                    <path class="st0" d="M9,7.7C8.7,7.7,8.4,7.8,8.3,8C8.1,8.2,8,8.4,8,8.7c0,0.5,0,1,0,1.4c0,0.8,0,1.5,0,2.3c0,0.2,0,0.3,0,0.5
                                        c0,0.3,0.1,0.5,0.3,0.7c0.2,0.2,0.5,0.3,0.7,0.3c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.5,0-1,0-1.4c0-0.8,0-1.5,0-2.3
                                        c0-0.2,0-0.3,0-0.5C10,8.4,9.9,8.2,9.7,8C9.5,7.8,9.2,7.7,9,7.7z"/>
                                    <path class="st0" d="M9,4c-0.3,0-0.5,0.1-0.7,0.3C8.1,4.5,8,4.8,8,5.1c0,0.2,0,0.4,0,0.6c0,0.3,0.1,0.5,0.3,0.7
                                        C8.4,6.5,8.7,6.6,9,6.6c0.3,0,0.5-0.1,0.7-0.3C9.9,6.1,10,5.9,10,5.6c0-0.2,0-0.4,0-0.6c0-0.3-0.1-0.5-0.3-0.7C9.5,4.2,9.2,4,9,4z"
                                        />
                                </g>
                                </svg>
                                    </a>
                                </div>
                                <div class="no-program" v-show="!hasProgram">
                                    <div>Измените условия запроса</div>
                                </div>
                                <div class="diagram">
                                    <div class="diagram__body">
                                        <svg id="diagram"></svg>
                                        <div class="diagram__center">
                                            <div class="diagram__value">
                                                <span class="diagram__fix">{{ count1.score | currencyFormat }}</span>
                                                <span>₽</span>
                                            </div>
                                            <div class="diagram__text">
                                                ежемесячный
                                                <br>платеж
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="legend">
                                    <ul class="legend__list">
                                        <li class="legend__item">
                                            <div class="legend__color" style="background-color: #a7b0b2"></div>
                                            <div class="legend__description">платеж по кредиту</div>
                                            <div class="legend__value">{{ count2.score | currencyFormat }} ₽</div>
                                        </li>
                                        <li class="legend__item">
                                            <div class="legend__color" style="background-color: #ae8a68"></div>
                                            <div class="legend__description">Платеж КАСКО и ТО</div>
                                            <div class="legend__value">{{ count3.score | currencyFormat }} ₽</div>
                                        </li>
                                    </ul>
                                    <a href="/test-drive/" class="legend__button" target="_blank" style="display: block;width: 195px;">
                                        Тест-драйв
                                    </a>
                                    <div class="legend__bottom">
                                        <a href="/contacts/" target="_blank" class="legend__send-dealer legend__link">
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve">
                                    <g transform="translate(0,-952.36218)">
                                        <path class="st0" d="M2.1,955.4c-1.1,0-2.1,0.9-2.1,2.1v9.8c0,1.2,0.9,2.1,2.1,2.1h15.8c1.1,0,2.1-0.9,2.1-2.1v-9.8
                                            c0-1.2-0.9-2.1-2.1-2.1H2.1z M2.4,956.8h15.2l-7.4,7.2c-0.1,0.1-0.3,0.1-0.4,0L2.4,956.8z M1.4,957.7l7.4,7.2
                                            c0.7,0.6,1.7,0.6,2.4,0l7.4-7.2v9.5c0,0.4-0.3,0.7-0.7,0.7H2.1c-0.4,0-0.7-0.3-0.7-0.7V957.7z"/>
                                    </g>
                                    </svg>
                                            <span>Отправить на почту</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <section class="compare" :class="{ showCompare: showCompare }" @scroll="compareScroll($event)">
                        <div class="compare__center">
                            <div class="compare__top">
                                <div class="compare__header">
                                    <ul class="compare__menu">
                                        <li class="compare__item">
                                            <label>
                                                <input type="radio" name="compare" v-model="compareSelected" v-bind:value="'modification'">
                                                <div>Модификации</div>
                                            </label>
                                        </li>
                                        <li class="compare__item">
                                            <label>
                                                <input type="radio" name="compare" v-model="compareSelected" v-bind:value="'complectation'">
                                                <div>Комплектации</div>
                                            </label>
                                        </li>
                                        <li class="compare__item" v-if="Object.keys(packets).length != 0">
                                            <label>
                                                <input type="radio" name="compare" v-model="compareSelected" v-bind:value="'packets'">
                                                <div>Пакеты</div>
                                            </label>
                                        </li>
                                    </ul>
                                    <a href="#" class="compare__close" @click="showCompare=false">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">

                                <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                                    c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                                    c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                                </svg>
                                    </a>
                                </div>
                                <div class="compare__options">
                                    <ul class="c-list" v-show="compareSelected === 'modification'">
                                        <li class="c-list__item" v-for="mod in car.modificationList">
                                            <label>
                                                <input type="radio" name="compare-mod" v-bind:value="mod" v-model="modification" @click="changeModification(mod)">
                                                <div class="c-list__wrap">
                                                    <div class="c-list__container">
                                                        <div class="c-list__name">{{ mod.name }}</div>
                                                        <div class="c-list__price">от {{ mod.minPrice | currencyFormat }} ₽</div>
                                                    </div>

                                                    <div class="c-list__arrow">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                                                    <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                                                        L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                                                </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                    <ul class="c-list" v-show="compareSelected === 'complectation'">
                                        <li class="c-list__item" v-for="comp in modification.complectations">
                                            <label>
                                                <input type="radio" name="compare-com" v-bind:value="comp" v-model="complectation" @click="changeComplectation(comp)">
                                                <div class="c-list__wrap">
                                                    <div class="c-list__container">
                                                        <div class="c-list__name">{{ comp.name }}</div>
                                                        <div class="c-list__price">от {{ comp.price | currencyFormat }} ₽</div>
                                                    </div>

                                                    <div class="c-list__arrow">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                                                <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                                                    L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                                            </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                    <ul class="c-list" v-show="compareSelected === 'packets'">
                                        <li class="c-list__item" v-for="pack in packets">
                                            <label>
                                                <input type="checkbox" name="compare-pack" v-bind:value="pack" v-model="selectedPackets" @click="changePacket(pack, $event)">
                                                <div class="c-list__wrap">
                                                    <div class="c-list__container">
                                                        <div class="c-list__name">{{ pack.name }}</div>
                                                        <div class="c-list__price">от {{ pack.price | currencyFormat }} ₽</div>
                                                    </div>

                                                    <div class="c-list__arrow">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                                                    <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                                                        L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                                                </svg>
                                                    </div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="compare__table">
                                <div class="table">
                                    <div class="table__top">
                                        <label class="table__diff" v-if="(compareSelected === 'modification') || (compareSelected === 'complectation')">
                                            <input type="checkbox" name="diff" v-model="onlyDiff">
                                            <div class="table__icon">
                                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                     viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                                        <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                                            L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                                        </svg>
                                            </div>
                                            <span>Только различия</span>
                                        </label>
                                    </div>
                                    <div class="table__body">
                                        <ul class="table__categories" v-if="(compareSelected === 'modification') || (compareSelected === 'complectation')">
                                            <li class="category" v-show="specification.data.length>0" v-for="specification in compareOptionsList">
                                                <a href="#" class="category__name isOpened" @click.prevent="openDropdown($event)">
                                                    <span>{{ specification.name }}</span>
                                                    <div class="category__arrow">
                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                             viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                                                <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                                    c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                                                </svg>
                                                    </div>
                                                </a>
                                                <div class="category__dropdown">
                                                    <ul class="category__props">
                                                        <li class="property" v-for="property in specification.data">
                                                            <div class="property__name" v-html="property.name"></div>
                                                            <ul class="property__values">
                                                                <li class="value" v-for="value in property.values">
                                                                    <span v-if="value !== true && value !== false">{{ value }}</span>
                                                                    <div class="value__true" v-if="value === true">
                                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                                                                <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                                                                    L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                                                                </svg>
                                                                    </div>
                                                                    <div class="value__false" v-if="value === false">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="table__categories" v-if="compareSelected === 'packets'">
                                            <li class="category">
                                                <div class="category__dropdown category__dropdown--opened">
                                                    <ul class="category__props">
                                                        <li class="property" v-for="property in compareOptionsList">
                                                            <div class="property__name">{{ property.name }}</div>
                                                            <ul class="property__values">
                                                                <li class="value" v-for="value in property.packets">
                                                                    <span v-if="value.value !== true && value.value !== false">{{ value.value }}</span>
                                                                    <div class="value__true" v-if="value.value === true">
                                                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                                                                <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                                                                    L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                                                                </svg>
                                                                    </div>
                                                                    <div class="value__false" v-if="value.value === false">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="end js-section" style="background-image: url('https://www.hyundai.ru/assets/img/startplus/pics/options_2.jpg')">
                <div class="end__title">
                    По окончании
                    <br>программы
                </div>
                <a href="#" data-img="https://www.hyundai.ru/assets/img/startplus/pics/options_1.jpg" class="option js-hover-select">
                    <div class="option__center">
                        <div class="option__img">
                            <img src="https://www.hyundai.ru/assets/img/startplus/elements/options_1.svg" alt="">
                            <div class="option__number">
                                1
                            </div>
                        </div>
                        <div class="option__description">
                            Погасить остаток<br />
                            и&nbsp;оставить<br />
                            автомобиль себе
                        </div>
                    </div>
                </a>
                <a href="#" data-img="https://www.hyundai.ru/assets/img/startplus/pics/options_2.jpg" class="option active js-hover-select">
                    <div class="option__center">
                        <div class="option__img">
                            <img src="https://www.hyundai.ru/assets/img/startplus/elements/options_2.svg" alt="">
                            <div class="option__number">
                                2
                            </div>
                        </div>
                        <div class="option__description">
                            Обменять автомобиль<br />
                            на&nbsp;новый, отдав прежний<br />
                            дилеру в&nbsp;trade-in
                        </div>
                    </div>
                </a>
                <a href="#" data-img="https://www.hyundai.ru/assets/img/startplus/pics/options_3.jpg" class="option js-hover-select">
                    <div class="option__center">
                        <div class="option__img">
                            <img src="https://www.hyundai.ru/assets/img/startplus/elements/options_3.svg" alt="">
                            <div class="option__number">
                                3
                            </div>
                        </div>
                        <div class="option__description">
                            Вернуть автомобиль<br />
                            банку
                        </div>
                    </div>
                </a>
                <a href="#" class="end__next js-next-clide">
                    <div class="end__icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 10 16" style="enable-background:new 0 0 10 16;" xml:space="preserve">
                <g transform="translate(0,-952.36218)">
                    <path class="st0" d="M9.9,962.8l-0.6-0.7c-0.2-0.2-0.5-0.2-0.7,0l-2.7,2.8c0-4.4,0-7.8,0-12.2c0-0.2-0.2-0.4-0.5-0.4H4.5
                        c-0.2,0-0.5,0.2-0.5,0.5v12.1c-0.9-0.9-1.8-1.9-2.7-2.8c-0.2-0.2-0.5-0.2-0.7,0l-0.6,0.7c-0.2,0.2-0.2,0.5,0,0.6
                        c1.3,1.4,3.3,3.4,4.6,4.8c0.2,0.2,0.5,0.2,0.7,0l4.6-4.8C10.1,963.2,10,963,9.9,962.8z"/>
                </g>
                </svg>
                    </div>
            <span>
                Вопрос-ответ
            </span>
                </a>
            </section>
            <section class="faq js-section" style="background-image: url('https://www.hyundai.ru/assets/img/startplus/pics/bgr_3.jpg')">
                <div class="faq__title">Вопрос-ответ</div>
                <div class="faq__wrap">
                    <ul class="faq__list">
                        <li class="faq__item">
                            <a href="" class="question js-open-question">
                                <span>Что такое Старт Плюс?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <p>
                                    СТАРТ Плюс&nbsp;&mdash; это новая версия уже знакомой финансовой программы СТАРТ, в&nbsp;которую, помимо сниженных ежемесячных платежей по&nbsp;кредиту включено КАСКО и&nbsp;прохождение&nbsp;ТО.
                                </p>
                            </div>
                        </li>
                        <li class="faq__item delay2">
                            <a href="" class="question js-open-question">
                                <span>Чем СТАРТ Плюс отличается от обычного кредита?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <p>
                                    Ежемесячные платежи по&nbsp;программе СТАРТ в&nbsp;среднем в&nbsp;2&nbsp;раза ниже, чем по&nbsp;обычному кредиту, к&nbsp;тому&nbsp;же, в&nbsp;каждый ежемесячный платеж включена оплата полиса КАСКО и&nbsp;прохождение&nbsp;ТО, что делает покупку и&nbsp;обслуживание автомобиля гораздо более комфортными.
                                </p>
                            </div>
                        </li>
                        <li class="faq__item delay4">
                            <a href="" class="question js-open-question">
                                <span>Кому необходим СТАРТ Плюс?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <div>
                                    <ul>
                                        <li>
                                            Клиентам, которые рационально планируют бюджет и&nbsp;предпочитают минимальные выплаты по&nbsp;кредиту.
                                        </li>
                                        <li>
                                            Клиентам, которые выбирают между доступной и&nbsp;дорогой версией автомобиля, но&nbsp;не&nbsp;хотят увеличивать свою нагрузку по&nbsp;кредиту.
                                        </li>
                                        <li>
                                            Клиентам, которые не&nbsp;хотят ежегодно платить всю сумму за&nbsp;полис КАСКО.
                                        </li>
                                        <li>
                                            Клиентам, которые хотят проходить регулярное техническое обслуживание, стоимость которого уже включена в&nbsp;ежемесячные платежи.
                                        </li>
                                        <li>
                                            Клиентам, которые привыкли идти в&nbsp;ногу со&nbsp;временем и&nbsp;каждые три года менять автомобиль на&nbsp;новый и&nbsp;более современный.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item delay5">
                            <a href="" class="question js-open-question">
                                <span>За счет чего получаются маленькие платежи по кредиту?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <p>
                                    Часть кредита, а&nbsp;именно&nbsp;45% (остаточная стоимость), фиксируется Банком и&nbsp;не&nbsp;включатся в&nbsp;ежемесячные платежи. Таким образом Клиент имеет возможность эксплуатировать автомобиль 3&nbsp;года, не&nbsp;оплачивая сразу всю его стоимость. Через 3&nbsp;года у&nbsp;Клиента есть выбор, что делать с&nbsp;автомобилем и&nbsp;остатком долга.
                                </p>
                            </div>
                        </li>
                        <li class="faq__item delay6">
                            <a href="" class="question js-open-question">
                                <span>Почему по программе СТАРТ Плюс не надо платить за регулярное ТО и полис КАСКО?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <p>
                                    В&nbsp;каждый ежемесячный платеж уже включена плата за&nbsp;полис КАСКО и&nbsp;прохождение технического обслуживания. Как это работает:<br />
                                    Сумма 3-х летнего полиса КАСКО и&nbsp;прохождения трех&nbsp;ТО делится на&nbsp;36&nbsp;месяцев, и&nbsp;полученная цифра прибавляется к&nbsp;стандартному ежемесячному платежу по&nbsp;программе СТАРТ.<br />
                                    Важно отметить, что на&nbsp;них не&nbsp;начисляются проценты.<br />
                                </p>
                            </div>
                        </li>
                        <li class="faq__item delay7">
                            <a href="" class="question js-open-question">
                                <span>Существуют ли риски для Клиента?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <p>
                                    Чтобы Клиент не&nbsp;сталкивался с&nbsp;рисками, в&nbsp;договоре заранее зафиксирована гарантированная остаточная стоимость, т.е. минимальная сумма, которую может получить Клиент при продаже автомобиля Дилеру в&nbsp;рамках программы СТАРТ Плюс. Эта сумма достаточна для погашения кредита, при этом это только минимальная стоимость. Фактическая стоимость будет зависеть от&nbsp;технического состояния автомобиля и&nbsp;условий рынка, ее&nbsp;назовет Дилер при оценке автомобиля.
                                </p>
                            </div>
                        </li>
                        <li class="faq__item delay8">
                            <a href="" class="question js-open-question">
                                <span>Какие преимущества получает Клиент?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <div>
                                    <ul>
                                        <li>
                                            Комфортные ежемесячные платежи&nbsp;&mdash; в&nbsp;2&nbsp;раза ниже по&nbsp;сравнению с&nbsp;обычным кредитом.
                                        </li>
                                        <li>
                                            Нет необходимости разово платить значительную сумму за&nbsp;полис КАСКО.
                                        </li>
                                        <li>
                                            Прохождение одного&nbsp;ТО в&nbsp;год уже включено в&nbsp;ежемесячный платеж.
                                        </li>
                                        <li>
                                            Регулярное обновление автомобиля.
                                        </li>
                                        <li>
                                            Более дорогая версия автомобиля без существенного влияния на&nbsp;платеж.
                                        </li>
                                        <li>
                                            Гарантия остаточной стоимости.
                                        </li>
                                        <li>
                                            Несколько вариантов погашения кредита на выбор.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item delay9">
                            <a href="" class="question js-open-question">
                                <span>Что делать с автомобилем по прошествии трех лет?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <div>
                                    У Клиента есть три опции:
                                    <br>
                                    <ul>
                                        <li>
                                            Обновить свой автомобиль на&nbsp;новый Hyundai, реализовав автомобиль Дилеру, а&nbsp;полученные от&nbsp;продажи средства использовать для погашения текущего кредита и&nbsp;в&nbsp;качестве взноса за&nbsp;новый автомобиль.
                                        </li>
                                        <li>
                                            Продолжить пользоваться своим автомобилем, погасив кредит за&nbsp;счет собственных средств или продлив кредит еще на&nbsp;2&nbsp;года.
                                        </li>
                                        <li>
                                            Вернуть автомобиль Банку по&nbsp;гарантированной минимальной остаточной стоимости и&nbsp;закрыть задолженность по&nbsp;кредиту.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="faq__item delay10">
                            <a href="" class="question js-open-question">
                                <span>Что если через 3 года автомобиль будет стоить дешевле 45%?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <p>
                                    Средняя рыночная стоимость подержанного Solaris составляет около&nbsp;70% от&nbsp;цены нового. Но&nbsp;даже если случится так, что ситуация на&nbsp;рынке кардинально изменится, у&nbsp;Клиента есть гарантированная остаточная стоимость&nbsp;45%, в&nbsp;пределах которой автомобиль будет выкуплен, а&nbsp;кредит, соответственно, будет погашен. Кроме того, есть возможность продлить кредит еще на&nbsp;2&nbsp;года.
                                </p>
                            </div>
                        </li>
                        <li class="faq__item delay10">
                            <a href="" class="question js-open-question">
                                <span>Какие существуют условия для получения гарантированной остаточной стоимости?</span>
                                <div class="question__arrow">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 8 5" style="enable-background:new 0 0 8 5;" xml:space="preserve">
                            <path class="st0" d="M0,0.9c0-0.2,0.1-0.4,0.2-0.6c0.3-0.3,0.9-0.3,1.2,0L4,2.9l2.6-2.6c0.3-0.3,0.9-0.3,1.2,0
                                c0.3,0.3,0.3,0.9,0,1.2L4.6,4.7C4.4,4.9,4.2,5,4,5S3.6,4.9,3.4,4.7L0.2,1.5C0.1,1.3,0,1.1,0,0.9z"/>
                            </svg>
                                </div>
                            </a>
                            <div class="question__dropdown">
                                <div>
                                    <ul>
                                        <li>
                                            Пробег не более 90000 км за 3 года.
                                        </li>
                                        <li>
                                            Прохождение плановых ТО у официального Дилера.
                                        </li>
                                        <li>
                                            Качественное состояние автомобиля, соответствующее возрасту автомобиля и&nbsp;нормальным условиям эксплуатации Положительная кредитная история в&nbsp;Банке.
                                        </li>
                                        <li>
                                            Наступление 36 платежа (не ранее).
                                        </li>
                                        <li>
                                            Обновление автомобиля на новый Hyundai.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="faq__dsclmr">
                    <a href="/contacts/" target="_blank" class="faq__button delay8">
                        <div class="faq__icon">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 42 44" style="enable-background:new 0 0 42 44;" xml:space="preserve">
                    <path class="st0" d="M21,19.5c-1.4,0-2.6,1.1-2.6,2.5c0,1.4,1.1,2.6,2.5,2.6c1.4,0,2.6-1.1,2.6-2.5l0,0C23.5,20.6,22.4,19.5,21,19.5
                        z"/>
                                <path class="st0" d="M12.1,19.5c-1.4,0-2.6,1.1-2.6,2.5s1.1,2.6,2.5,2.6s2.6-1.1,2.6-2.5l0,0C14.6,20.6,13.5,19.5,12.1,19.5
                        L12.1,19.5z"/>
                                <path class="st0" d="M29.9,19.5c-1.4,0-2.6,1.1-2.6,2.5s1.1,2.6,2.5,2.6s2.6-1.1,2.6-2.5v0C32.4,20.6,31.3,19.5,29.9,19.5z"/>
                                <path class="st0" d="M38.6,9.4C34.7,3.5,28.1,0,21,0C9.4,0,0,9.3,0,20.7C0,27.1,3,33,8.1,37c2.5,2.3,5.4,4.2,8.6,5.4
                        c2.8,1.1,5.8,1.7,8.8,1.7c2,0,4-0.2,6-0.7c1.3-0.3,2.2-1.7,1.7-2.7c-0.4-0.8-0.4-1.7-0.7-2.5c0,0,0-0.1,0-0.1
                        C42.2,31.8,44.9,19,38.6,9.4z M31,35.8L30,36.4v0c-0.5,0.2-0.9,0.7-0.7,1.3l0.9,3c0,0,0,0.1,0,0.2c-1.6,0.3-3.2,0.4-4.8,0.4
                        c-2.6,0-5.3-0.5-7.7-1.5c-2.9-1.1-5.5-2.7-7.7-4.8L9.9,35l-0.1-0.1c-8-6.1-9.4-17.5-3.2-25.3s17.8-9.3,25.7-3.1
                        c8,6.1,9.4,17.5,3.2,25.3C34.2,33.3,32.7,34.7,31,35.8z"/>
                    </svg>
                        </div>
                        <span>Задать вопрос</span>
                    </a>
                    <p>
                        Solaris - 9 580 в месяц
                        Solaris - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 9 580 рублей в месяц. Платеж состоит из платежа по кредиту в 6 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 3 580 рублей***.
                        ** Платеж рассчитан по программе Hyundai Старт исходя из цены Solaris (1.4 6MT Active) 694 900 р. 2018 года производства на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: срок кредита 36 мес., процентная ставка 9.9% годовых, первоначальный взнос 325 300р., сумма кредита 418 573р. Гарантированная остаточная стоимость автомобиля (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 45% от цены на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Предложение действует с 01.11.18 по 30.11.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.rusfinancebank.ru
                        ***Платеж по программе страхования КАСКО и Сервис, Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилер Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai).
                        Полис, покрывающий риск "Ущерб" и прохождение регулярного технического обслуживания, оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Solaris, в кредит по программе «СТАРТ ПЛЮС», с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования.
                        Полис КАСКО, покрывающий риски «Полная гибель» и «Хищение» ТС на срок 3 (три) года в САО «ВСК» включен в стоимость автомобиля и предоставляется при покупке нового Hyundai Solaris по программе «СТАРТ ПЛЮС» . Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.11.2018г. до 30.11.2018г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).

                    </p>
                    <p>
                        Creta – 10 870 в месяц
                        Creta - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 10 870 рублей в месяц. Платеж состоит из платежа по кредиту в 7 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 3 870 рублей***.
                        ** Платеж рассчитан в рамках программы Hyundai Старт исходя из цены Hyundai Creta (1.6 6MT 2WD Start) 904 900р. 2018 года производства на условиях кредитного «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 445 800р., сумма кредита 519 932р., срок кредита 36 мес., процентная ставка 9.9% годовых. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.11.18 по 30.11.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru
                        ***Платеж по программе страхования КАСКО и Сервис, Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилер Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai).
                        Полис, покрывающий риск "Ущерб" и прохождение регулярного технического обслуживания, оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Creta, в кредит по программе «СТАРТ ПЛЮС», с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования.
                        Полис КАСКО, покрывающий риски «Полная гибель» и «Хищение» ТС на срок 3 (три) года в САО «ВСК» включен в стоимость автомобиля и предоставляется при покупке нового Hyundai Creta по программе «СТАРТ ПЛЮС» . Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.11.2018г. до 30.11.2018г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).

                    </p>
                    <p>
                        Elantra – 12 120 в месяц
                        Elantra - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 12 120 рублей в месяц. Платеж состоит из платежа по кредиту в 8 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 4 120 рублей***.
                        ** Платеж рассчитан по программе Hyundai Старт исходя из цены Elantra (1.6 6МТ Start) 994 000р., 2018 года производства на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: срок кредита 36 мес., процентная ставка 9.9% годовых, первоначальный взнос 481 000р., сумма кредита 580 973р. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) ― 45%. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Предложение действует с 01.11.18 по 30.11.18г, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.rusfinancebank.ru
                        ***Платеж по программе страхования КАСКО и Сервис, Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилер Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai).
                        Полис, покрывающий риск "Ущерб" и прохождение регулярного технического обслуживания, оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Elantra, в кредит по программе «СТАРТ ПЛЮС», с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования.
                        Полис КАСКО, покрывающий риски «Полная гибель» и «Хищение» ТС на срок 3 (три) года в САО «ВСК» включен в стоимость автомобиля и предоставляется при покупке нового Hyundai Elantra по программе «СТАРТ ПЛЮС» . Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.11.2018г. до 30.11.2018г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).

                    </p>
                    <p>
                        Sonata – 14 550 в месяц
                        Sonata - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 14 550 рублей в месяц. Платеж состоит из платежа по кредиту в 9 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 5 550 рублей***.
                        **Платеж рассчитан исходя исходя из цены Hyundai Sonata (Primary 2.0 MPI 6AT ) 1 299 000 руб., 2018 года производства, на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит», исходя из процентной ставки 9.9% годовых, первоначальный взнос 668 500 р., сумма кредита 714 043 р., срок кредита 36 месяцев. Гарантированная остаточная стоимость автомобиля (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) 45% от цены на момент покупки. Обязательно оформление полиса КАСКО. Обеспечение: залог приобретаемого автомобиля. Тарифным планом предусмотрена финансовая защита кредита. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действует с 01.10.18 по 30.11.18г, не является офертой. Условия и тарифы могут быть изменены Банком в одностороннем порядке. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Подробности на www.rusfinancebank.ru
                        ***Платеж по программе страхования КАСКО и Сервис, Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилер Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai).
                        Полис, покрывающий риск "Ущерб" и прохождение регулярного технического обслуживания, оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Sonata, в кредит по программе «СТАРТ ПЛЮС», с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования.
                        Полис КАСКО, покрывающий риски «Полная гибель» и «Хищение» ТС на срок 3 (три) года в САО «ВСК» включен в стоимость автомобиля и предоставляется при покупке нового Hyundai Sonata по программе «СТАРТ ПЛЮС» . Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.10.2018г. до 30.11.2018г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).

                    </p>
                    <p>
                        Tucson – 14 280 в месяц
                        Tucson – 14 280 рублей в месяц (Платеж состоит из платежа по кредиту в 10 000 рублей и платежа по программе страхования КАСКО и Сервис в размере 4 280 рублей)
                        Tucson - Общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 14 280 рублей в месяц. Платеж состоит из платежа по кредиту в 10 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 4 280 рублей***.
                        ** Платеж рассчитан в рамках программы Hyundai (Старт) исходя из цены Hyundai Tucson (Primary 2,0л 6MT 2WD) 1 414 000р., 2018 года производства, на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 722 000р., сумма кредита 783 692р., срок кредита 36 мес.; процентная ставка 9.9% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.11.18 по 30.11.18г, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru
                        ***Платеж по программе страхования КАСКО и Сервис, Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилер Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai).
                        Полис, покрывающий риск "Ущерб" и прохождение регулярного технического обслуживания, оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Tucson, в кредит по программе «СТАРТ ПЛЮС», с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования.
                        Полис КАСКО, покрывающий риски «Полная гибель» и «Хищение» ТС на срок 3 (три) года в САО «ВСК» включен в стоимость автомобиля и предоставляется при покупке нового Hyundai Tucson по программе «СТАРТ ПЛЮС» . Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.11.2018г. до 30.11.2018г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).

                    </p>
                    <p>
                        Santa Fe – 17 900 месяц
                        Santa Fe - Общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 17 900 рублей в месяц. Платеж состоит из платежа по кредиту в 12 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 5 900 рублей***.
                        ** Ежемесячный платеж по кредиту рассчитан, исходя из цены Hyundai Santa Fe (Family 2,4л 6AT 4WD) 1 999 000 р., 2018 года производства, на условиях кредитного продукта «Директ Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 1 030 500 р., сумма кредита 968 500 р., срок кредита 36 мес., процентная ставка 12,9% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.11.18 по 30.11.18г, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru
                        ***Платеж по программе страхования КАСКО и Сервис, Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилер Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai).
                        Полис, покрывающий риск "Ущерб" и прохождение регулярного технического обслуживания, оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Santa Fe, в кредит по программе «СТАРТ ПЛЮС», с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования.
                        Полис КАСКО, покрывающий риски «Полная гибель» и «Хищение» ТС на срок 3 (три) года в САО «ВСК» включен в стоимость автомобиля и предоставляется при покупке нового Hyundai Santa Fe по программе «СТАРТ ПЛЮС» . Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.11.2018г. до 30.11.2018г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).

                    </p>
                </div>
            </section>
        </div>

        <div id="modals">
            <div class="p-send" :class="{ show: sendForm }" @click.self="sendForm = false">
                <div class="p-send__center">
                    <a href="" class="p-send__close" @click.prevent="sendForm = false">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                    c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                    c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                </svg>
                    </a>
                    <form action="" class="p-send__form" @submit.prevent="sendFormSubmit">
                        <div class="p-send__title">Отправка на почту</div>
                        <input type="text" class="p-send__input p-send__input--capitalize" name="surname" v-on:keydown.space.prevent="" :class="{ 'invalid' : !validationSend.surname && processingSend }" v-model="surname" autocomplete="off" placeholder="фамилия">
                        <input type="text" class="p-send__input p-send__input--capitalize" name="name" v-on:keydown.space.prevent="" :class="{ 'invalid' : !validationSend.name && processingSend }" v-model="name" autocomplete="off" placeholder="имя">
                        <input type="email" class="p-send__input" name="email" v-on:keydown.space.prevent="" :class="{ 'invalid' : !validationSend.email && processingSend }" v-model="email" autocomplete="off" placeholder="e-mail">
                        <label>
                            <input type="checkbox" name="" id="" :class="{ 'invalid' : !validationSend.accept && processingSend }" v-model="accept">
                            <div class="p-send__box"></div>
                            <div class="p-send__text">
                                Я согласен на обработку моих <a href="#" @click.prevent="rules = true">персональных данных</a>
                            </div>
                        </label>
                        <button type="submit" class="p-send__button">Отправить</button>
                    </form>

                </div>
            </div>

            <div class="p-rules" :class="{ show: rules }" @click.self="rules = false">
                <div class="p-rules__center">
                    <a href="" class="p-send__close" @click.prevent="rules = false">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                    c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                    c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                </svg>
                    </a>
                    <div class="p-rules__title">
                        Правила обработки
                        <br>персональных данных
                    </div>
                    <div class="p-rules__left">
                        Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе
                        на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.
                        <br><br>
                        Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон;
                        для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания;
                        для рекламных, исследовательских, информационных,
                    </div>
                    <div class="p-rules__right">
                        а также иных целей, в том числе, путем осуществления
                        со мной прямых контактов по различным средствам связи.
                        <br><br>
                        Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш.,
                        д. 20, литер А).
                        <br><br>
                        Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица,
                        д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва,
                        ул. Новослободская, д. 31, стр. 2); ЗАО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3),
                        ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5),
                        а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                    </div>
                </div>
            </div>

            <div class="p-test" :class="{ show: testForm }">
                <div class="p-test__scroll"  @click.self="testForm = false">
                    <div class="p-test__center">
                        <a href="" class="p-send__close" @click.prevent="testForm = false">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                    <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                        c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                        c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                    </svg>
                        </a>
                        <div class="p-test__title">Заявка на тест-драйв</div>
                        <form class="p-test__form" @submit.prevent="testFormSubmit">
                            <div class="p-test__left">
                                <div class="p-test__subtitle">Ваша модель</div>
                                <div class="p-test__img">
                                    <img v-bind:src="carImg" alt="" class="p-test__car">
                                    <div class="p-test__car-name">{{ carName }}</div>
                                </div>
                                <div class="p-test__subtitle">Дилер</div>
                                <div class="p-test__select">
                                    <select id="citySelect" name="city" id="">
                                        <option v-bind:value="city.name" v-for="city in dealers">{{ city.name }}</option>
                                    </select>
                                </div>
                                <div class="p-test__select" :class="{ 'invalid' : !validation.dealer && processing }">
                                    <select id="dealerSelect" name="dialer" id="">
                                        <option value=""></option>
                                        <option v-bind:value="d.code" v-for="d in dealersInCity">{{ d.name }}</option>
                                    </select>
                                    <div class="p-test__alert p-test__alert--select">Выберите дилера</div>
                                </div>
                            </div>
                            <div class="p-test__right">
                                <div class="p-test__subtitle">Ваши данные</div>
                                <div class="p-test__wrap">
                                    <label class="p-test__appeal">
                                        <input type="radio" name="appeal" value="Mr." v-model="testDriveData.salutation" id="">
                                        <div class="p-test__circle"></div>
                                        <div class="p-test__description">Уважаемый</div>
                                    </label>
                                    <label class="p-test__appeal">
                                        <input type="radio" name="appeal" id="" value="Ms." v-model="testDriveData.salutation">
                                        <div class="p-test__circle"></div>
                                        <div class="p-test__description">Уважаемая</div>
                                    </label>
                                </div>

                                <label class="p-test__input-wrap" :class="{ 'invalid' : !validation.firstName && processing }">
                                    <input type="text" class="p-test__input p-test__input--capitalize" autocomplete="off" name="name" v-on:keydown.space.prevent="" v-model="testDriveData.firstName" placeholder="имя">
                                    <div class="p-test__alert">Заполните поле</div>
                                </label>
                                <label class="p-test__input-wrap" :class="{ 'invalid' : !validation.surname && processing }">
                                    <input type="text" class="p-test__input p-test__input--capitalize" autocomplete="off" name="surname" v-on:keydown.space.prevent="" v-model="testDriveData.surname" placeholder="фамилия">
                                    <div class="p-test__alert">Заполните поле</div>
                                </label>
                                <label class="p-test__input-wrap" :class="{ 'invalid' : !validation.phone && processing }">
                                    <input type="text" class="p-test__input" autocomplete="off" name="tel" v-on:keydown.space.prevent="" v-mask="'+7 ### ###-##-##'" v-model="testDriveData.phone" placeholder="+7">
                                    <div class="p-test__alert">Заполните поле</div>
                                </label>
                                <label class="p-test__input-wrap" v-on:keydown.space.prevent="" :class="{ 'invalid' : !validation.email && processing }">
                                    <input type="email" class="p-test__input" autocomplete="off" name="email" v-model="testDriveData.email" placeholder="email">
                                    <div class="p-test__alert">Заполните поле</div>
                                </label>

                                <label class="p-test__accept" :class="{ 'invalid' : !validation.agreement && processing }">
                                    <input type="checkbox" name="ch" v-model="testDriveData.agreement">
                                    <div class="p-test__box"></div>
                                    <div class="p-test__text">
                                        Я согласен с <a href="#" @click.prevent="rules = true">правилами обработки</a> персональных данных
                                    </div>
                                </label>

                                <button type="submit" class="p-test__button">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="p-status" :class="{ show: status.show && status.response }" @click.self="status.show = false">
                <div class="p-status__center">
                    <a href="" class="p-send__close" @click.prevent="status.show = false">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                    c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                    c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                </svg>
                    </a>
                    Форма успешно отправлена
                </div>
            </div>

            <div class="p-status" :class="{ show: status.show && !status.response }" @click.self="status.show = false">
                <div class="p-status__center">
                    <a href="" class="p-send__close" @click.prevent="status.show = false">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                    c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                    c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                </svg>
                    </a>
                    Ошибка при отправке формы
                </div>
            </div>
        </div>

    </main>


    <!--
    Контент страницы закончится тут
    -->


    <script type="text/javascript" src="https://maps.google.ru/maps/api/js?key=AIzaSyDX8W8BnupAAQjlKYfnq8J51ZLY3hpnxgA"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/underscore.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/polyfill/promise.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/fullpage/srolloverflow.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/fullpage/jquery.fullpage.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/selectize/selectize.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/axios/axios.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/vue/vue.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/nouislider/nouislider.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/RoundPropsPlugin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/greensock/TweenMax.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/v-money/v-money.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/v-mask/v-mask.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/selectize/selectize.min.js"></script>
    <script type="text/javascript" src="startplus.js?v=1"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>