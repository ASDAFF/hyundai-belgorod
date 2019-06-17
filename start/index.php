<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Программа Старт");
$APPLICATION->SetTitle("Программа Старт");
?>

    <link type="text/css" href="https://www.hyundai.ru/assets/libs/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/selectize/selectize.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/nouislider/nouislider.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/selectize/selectize.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/owl-carousel/owl.carousel.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/owl-carousel/owl.theme.default.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/start.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=4.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <section class="banner">
            <a href="/all-offers" class="banner__back">
                <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 5L2 5" stroke="#002C5F" stroke-width="2"/>
                    <path d="M5 9L2.45 5.6C2.18333 5.24444 2.18333 4.75556 2.45 4.4L5 1" stroke="#002C5F" stroke-width="2"/>
                </svg>
                <span>Все предложения</span>
            </a>
            <div class="banner__center">
                <video id="video" class="banner__video" autoplay muted>
                    <source src="https://www.hyundai.ru/assets/img/start/video/start_new_1280x440.mp4" type="video/mp4">
                </video>
                <a href="#" class="banner__pass js-pass">
                    <span>Пропустить</span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="14.5454" width="20.5702" height="2.05702" transform="rotate(-45 0 14.5454)"/>
                        <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)"/>
                    </svg>
                </a>
                <div class="banner__title">
                    <h1 class="h1">
                        <!-- <span>Финансовая программа</span> -->
                    </h1>
                    <!-- <div class="banner__text">
                        <span>
                            Финансовая программа.
                        </span>
                    </div> -->
                </div>
                <!-- <div class="blue">
                    <div class="blue__title js-set-from">
                        от 9 580 ₽/мес
                    </div>
                    <ul class="blue__list">
                        <li class="blue__item">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8.42857L5.55336 13.1852C5.96812 13.6185 6.66835 13.5917 7.04881 13.128L17 1" stroke="white" stroke-width="2.5"/>
                            </svg>
                            <span>КАСКО и ТО включены</span>
                        </li>
                        <li class="blue__item">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8.42857L5.55336 13.1852C5.96812 13.6185 6.66835 13.5917 7.04881 13.128L17 1" stroke="white" stroke-width="2.5"/>
                            </svg>
                            <span>Первый взнос - от 0%</span>
                        </li>
                        <li class="blue__item">
                            <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8.42857L5.55336 13.1852C5.96812 13.6185 6.66835 13.5917 7.04881 13.128L17 1" stroke="white" stroke-width="2.5"/>
                            </svg>
                            <span>2 документа - Паспорт и ВУ</span>
                        </li>
                    </ul>
                </div> -->
                <a href="#" class="banner__button js-go-to-calc">
                    <span>Рассчитать</span>
                    <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                            <path d="M11 1L6.66896 4.89793C6.28866 5.24021 5.71134 5.24021 5.33104 4.89793L1 1" stroke="#000" stroke-width="2"/>
                        </g>
                        <defs>
                            <clipPath id="clip0">
                                <rect width="7" height="12" fill="#000" transform="translate(12) rotate(90)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </section>

        <section class="about">
            <div class="about__inner">
                <h2 class="about__title df-title">Как работает СТАРТ</h2>
                <ul class="about__list">
                    <li class="about__item">
                        <div class="about__back">
                            <div class="about__migel">
                                <img src="https://www.hyundai.ru/assets/img/start/pics/1.1.png" alt="">
                            </div>
                        </div>
                        <div class="about__icon">
                            <svg width="56" height="54" viewBox="0 0 56 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M54.4524 0.709463C53.953 0.217117 53.265 -0.0403546 52.5662 0.00515638L51.5753 0.0683838C42.6902 0.636051 34.375 4.9282 28.7618 11.8444L26.4293 14.7182L20.3253 14.5388C20.3149 14.5384 20.3044 14.5383 20.2941 14.5383C15.4531 14.5383 10.9019 16.425 7.47868 19.8507L1.22681 26.1076C0.929467 26.4052 0.835018 26.8502 0.985967 27.2429C1.13692 27.6358 1.50475 27.9029 1.92473 27.9243L15.1586 28.6047L14.6191 29.2696C14.3472 29.6047 14.3041 30.0709 14.5103 30.45C14.7177 30.8315 14.935 31.2069 15.1616 31.5763L12.0233 35.3049C11.755 35.6237 11.6972 36.0699 11.8752 36.4467C12.5607 37.8964 13.4705 39.1989 14.5798 40.3182C15.7159 41.4647 17.0444 42.4023 18.5283 43.1051C18.6733 43.1739 18.8288 43.2075 18.9834 43.2075C19.223 43.2075 19.4607 43.1265 19.654 42.9696C20.3301 42.4207 21.1096 41.7696 21.8635 41.1401C22.4008 40.6914 22.9505 40.2323 23.4643 39.809C23.771 39.9937 24.0815 40.1728 24.3966 40.3444C24.5561 40.4311 24.7309 40.4739 24.905 40.4739C25.1368 40.4739 25.367 40.3984 25.5576 40.2503L26.283 39.6869L26.9658 52.987C26.9875 53.4073 27.2543 53.7754 27.6467 53.9265C27.7709 53.9742 27.9001 53.9976 28.0283 53.9976C28.3055 53.9976 28.5777 53.889 28.781 53.6855L35.033 47.4286C38.4562 44.0027 40.3413 39.448 40.3413 34.6032V28.769L42.8076 26.8536C50.1992 21.1132 54.7008 12.4572 55.1583 3.10489L55.1837 2.58655C55.2182 1.88596 54.9515 1.20192 54.4524 0.709463ZM4.4243 25.92L8.98372 21.357C12.0011 18.3373 16.0121 16.6726 20.2787 16.6684L24.7399 16.7996L16.8204 26.5574L4.4243 25.92ZM20.4998 39.5046C19.9443 39.9684 19.3747 40.4441 18.8462 40.8791C17.8239 40.3251 16.8991 39.6337 16.0909 38.8181C15.3082 38.0283 14.642 37.129 14.1048 36.1384L16.4025 33.4084C17.0972 34.3413 17.8577 35.2248 18.6792 36.0526C18.6799 36.0533 18.6805 36.0538 18.6811 36.0544C18.6813 36.0547 18.6816 36.055 18.6818 36.0552C18.6821 36.0555 18.6824 36.0557 18.6827 36.056C19.5936 36.9735 20.5734 37.8154 21.6128 38.5767C21.2458 38.8816 20.8698 39.1957 20.4998 39.5046ZM38.2131 34.6032C38.2131 38.879 36.5494 42.8988 33.5282 45.9224L28.9688 50.4854L28.3326 38.0953L38.213 30.4221V34.6032H38.2131ZM53.0328 3.00082C52.6057 11.7314 48.4033 19.812 41.5031 25.1707L24.8117 38.1333C23.4276 37.3239 22.1374 36.3681 20.9566 35.2853L26.5839 29.6536C26.9994 29.2378 26.9994 28.5633 26.5839 28.1473C26.1683 27.7313 25.4944 27.7313 25.0788 28.1473L19.4568 33.7737C18.4231 32.6285 17.5077 31.3824 16.7282 30.0496L30.4139 13.1873C35.6539 6.73103 43.4163 2.72415 51.7108 2.19435L52.7017 2.13113C52.8316 2.12306 52.9185 2.18756 52.9585 2.22703C52.9985 2.26639 53.0646 2.352 53.0582 2.48259L53.0328 3.00082Z" fill="#002C5F"/>
                            </svg>
                        </div>
                        <div class="about__description">СТАРТуем!</div>
                        <div class="about__text">
                            СТАРТ – это новая версия уже знакомой финансовой программы.
                            Выбирайте выгодные опции расчета для получения самых лучших условий.
                        </div>
                    </li>
                    <li class="about__item">
                        <div class="about__back">
                            <div class="about__migel">
                                <img src="https://www.hyundai.ru/assets/img/start/pics/2.1.png" alt="">
                            </div>
                        </div>
                        <div class="about__icon">
                            <svg width="52" height="49" viewBox="0 0 52 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.6019 30.2435L11.9036 30.9594L12.6019 30.2435L1.12308 19.0457L16.9851 16.739C17.6366 16.6443 18.1998 16.2349 18.491 15.6444L25.5841 1.26097L32.6772 15.6444L33.5741 15.2021L32.6772 15.6444C32.9684 16.2349 33.5316 16.6443 34.1832 16.739L50.0451 19.0457L38.5663 30.2435C38.0954 30.7029 37.8805 31.3646 37.9916 32.013L40.7013 47.8238L26.5154 40.36C25.9324 40.0533 25.2358 40.0533 24.6529 40.36L25.1185 41.245L24.6529 40.36L10.4669 47.8238L13.1766 32.013C13.2877 31.3646 13.0728 30.7029 12.6019 30.2435Z" stroke="#002C5F" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="about__description">Преимущества</div>
                        <div class="about__text">
                            <ul class="about__options">
                                <li class="about__option">
                                    Первый взнос от&nbsp;0%
                                </li>
                                <li class="about__option">
                                    Оформляй только по&nbsp;паспорту и&nbsp;ВУ
                                </li>
                                <li class="about__option">
                                    Низкий ежемесячный платеж
                                </li>
                                <li class="about__option">
                                    Включай КАСКО и&nbsp;ТО в&nbsp;платежи
                                </li>
                                <li class="about__option">
                                    Меняй авто каждые 3&nbsp;года
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="about__item">
                        <div class="about__back">
                            <div class="about__migel">
                                <img src="https://www.hyundai.ru/assets/img/start/pics/3.1.png" alt="">
                            </div>
                        </div>
                        <div class="about__icon">
                            <svg width="104" height="104" viewBox="0 0 104 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="52" cy="52" r="52" fill="#F1F1F1"/>
                                <path d="M28.2773 61H22.7712C21.8878 61 21.1091 60.4205 20.8554 59.5743L19.5608 55.2555C18.7674 52.6088 19.3959 49.7402 21.2231 47.6677L32.6762 34.6773C33.0559 34.2467 33.6023 34 34.1764 34H59.4234C59.9541 34 60.4631 34.2109 60.8382 34.5863L70.838 44.5939C71.7606 45.5173 72.8952 46.2008 74.1427 46.585L83.8214 49.5654C84.6604 49.8237 85.2328 50.599 85.2328 51.4768V59C85.2328 60.1046 84.3374 61 83.2328 61H77.239M42.2664 61H63.7496" stroke="#002C5F" stroke-width="2"/>
                                <path d="M42.2654 61C42.2654 64.8667 39.1334 68 35.2716 68C31.4098 68 28.2778 64.8667 28.2778 61C28.2778 57.1333 31.4098 54 35.2716 54C39.1334 54 42.2654 57.1333 42.2654 61Z" stroke="#002C5F" stroke-width="2"/>
                                <path d="M77.238 61C77.238 64.8667 74.1061 68 70.2443 68C66.3824 68 63.2505 64.8667 63.2505 61C63.2505 57.1333 66.3824 54 70.2443 54C74.1061 54 77.238 57.1333 77.238 61Z" stroke="#002C5F" stroke-width="2"/>
                                <path d="M40.2676 46H64.7485" stroke="#002C5F" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="about__description">По окончании</div>
                        <div class="about__text">
                            <ul class="about__options">
                                <li class="about__option">
                                    Погаси остаток и&nbsp;оставь автомобиль себе
                                </li>
                                <li class="about__option">
                                    Обменяй автомобиль на&nbsp;новый по&nbsp;trade-in
                                </li>
                                <li class="about__option">
                                    Верни автомобиль банку без погашения остаточной стоимости
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div id="calc" @click="closeAll($event)" :class="{ loaded: masterInit }">
            <div class="calc-preloader"></div>
            <div class="steps__top" v-if="currentStep === 1 && !isStepHelp">
                <div class="steps__left">Калькулятор</div>
                <div class="steps__right">Шаг {{ currentStep }} из 3</div>
            </div>
            <div class="steps__top" v-if="currentStep === 2 && !isStepHelp">
                <div class="config__back steps__left">
                    <a href="#" @click.prevent="prevSlide">
                        <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 5L2 5" stroke="#002C5F" stroke-width="2"/>
                            <path d="M5 9L2.45 5.6C2.18333 5.24444 2.18333 4.75556 2.45 4.4L5 1" stroke="#002C5F" stroke-width="2"/>
                        </svg>
                        <span>Назад</span>
                    </a>
                </div>
                <div class="steps__right">Шаг 2 из 3</div>
            </div>
            <div class="steps__top steps__top--calc" v-if="currentStep === 3 && !isStepHelp">
                <div class="steps__inner">
                    <div class="config__back steps__left">
                        <a href="#" @click.prevent="prevSlide">
                            <svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 5L2 5" stroke="#002C5F" stroke-width="2"/>
                                <path d="M5 9L2.45 5.6C2.18333 5.24444 2.18333 4.75556 2.45 4.4L5 1" stroke="#002C5F" stroke-width="2"/>
                            </svg>
                            <span>Назад</span>
                        </a>
                    </div>
                    <div class="steps__right">Шаг 3 из 3</div>
                </div>
            </div>
            <ul id="carousel" class="steps owl-carousel">
                <li class="steps__item">
                    <section class="cars">
                        <h2 class="cars__title df-title">Выберите автомобиль</h2>
                        <ul class="cars__list">
                            <li class="cars__item" :ref="car.id" :class="{ active: car.id === carId }" v-for="car in sortedCars" @click="setCar(car)">
                                <div class="cars__name">{{ car.name }}</div>
                                <div class="cars__price">
                                    <span>{{ car.minPrice | currencyFormat }}</span>
                                    <span>&mdash;</span>
                                    <span>{{ car.maxPrice | currencyFormat }}</span>
                                    <span>₽</span>
                                </div>
                                <div class="cars__img">
                                    <img :src="car.image" :alt="car.name">
                                </div>
                                <div class="cars__program">{{ car.programName }}</div>
                                <div class="cars__fp">от {{ car.payment | currencyFormat }} ₽/мес</div>
                            </li>
                        </ul>
                    </section>
                </li>
                <li class="steps__item">
                    <section class="config">
                        <h2 class="config__title df-title">Выберите конфигурацию</h2>
                        <div class="config__body">
                            <div class="config__left">
                                <section class="view">
                                    <div class="view__body" @click = "init360">
                                        <div class="view__back" :style="{ backgroundImage: 'url('+ preview +')'  }" v-if="!isLoaded"></div>
                                        <div id="spritespin" class="view__spritespin" v-if="car.name !== 'H-1'"></div>
                                        <transition name="preloader">
                                            <div class="view__preloader" v-if="!isLoaded && car.name !== 'H-1'">
                                                <img v-if="!isInit" class="view__img" src="https://www.hyundai.ru/assets/img/santaFe/svg/360.png">
                                                <div v-else class="view__progress">{{ progressFormatted }}%</div>
                                            </div>
                                        </transition>
                                        <transition name="preloader-arrow">
                                            <a v-if="isInit && car.name !== 'H-1'" href="#" class="view__prev" @click.prevent="prev">
                                                <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17 37L1.59055 19.6644C1.25376 19.2855 1.25376 18.7145 1.59055 18.3356L17 1" stroke-width="2"/>
                                                </svg>
                                            </a>
                                        </transition>
                                        <transition name="preloader-arrow">
                                            <a v-if="isInit && car.name !== 'H-1'" href="#" class="view__next" @click.prevent="next">
                                                <svg width="18" height="38" viewBox="0 0 18 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1L16.4095 18.3356C16.7462 18.7145 16.7462 19.2855 16.4095 19.6644L1 37" stroke-width="2"/>
                                                </svg>
                                            </a>
                                        </transition>
                                    </div>
                                    <div class="view__bottom">
                                        <div class="colors">
                                            <ul class="colors__groups">
                                                <li class="colors__group" v-for="(group, key) in colorsAPI">
                                                    <div class="colors__group-name">{{ key }}, <span>{{ group[Object.keys(group)[0]].cost | currencyFormat }} ₽</span></div>
                                                    <ul class="colors__list">
                                                        <li class="colors__color" v-for="color in group" :style="'background-color:' + color.colorCode" :class="{ active: color.id === activeColor }" @click="setColor(color, true)">

                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <div class="colors__current">{{ currentColor }}</div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="config__right">
                                <div class="config__item">
                                    <label for="mod">Модификация</label>
                                    <div class="selector" :class="{ active: state.modOpened }">
                                        <a href="#" class="selector__head" @click.prevent="toggleSelector('mod', $event)">
                                            <span class="selector__current">{{ modification.name }}</span>
                                            <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z"/>
                                            </svg>
                                        </a>
                                        <div class="selector__holder">
                                            <div class="selector__dd" ref='mod'>
                                                <div class="selector__inner">
                                                    <ul class="selector__list">
                                                        <li class="selector__item" v-for="mod in modificationList">
                                                            <label>
                                                                <input type="radio" name="modification" v-bind:value="mod" v-model="modification" @change="setModA">
                                                                <div class="selector__option">{{ mod.name }}</div>
                                                                <div class="selector__value">{{ mod.minPrice | currencyFormat}} ₽</div>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <hr>
                                                    <a href="#" class="selector__button" @click.prevent="toShowCompare('modification')">Сравнить</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="config__item">
                                    <label for="comp">Комплектация</label>
                                    <div class="selector" :class="{ active: state.complOpened }">
                                        <a href="#" class="selector__head" @click.prevent="toggleSelector('compl', $event)">
                                            <span class="selector__current">{{ complectation.name }}</span>
                                            <span class="selector__sep">|</span>
                                            <span class="selector__current selector__current--price">{{ complectation.price | currencyFormat }} ₽</span>
                                            <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z"/>
                                            </svg>
                                        </a>
                                        <div class="selector__holder">
                                            <div class="selector__dd" ref='compl'>
                                                <div class="selector__inner">
                                                    <ul class="selector__list">
                                                        <li class="selector__item" v-for="comp in complectations">
                                                            <label>
                                                                <input type="radio" name="complectation" v-bind:value="comp" v-model="complectation" @change="setComplA">
                                                                <div class="selector__option">{{ comp.name }}</div>
                                                                <div class="selector__value">{{ comp.price | currencyFormat}} ₽</div>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <hr>
                                                    <a href="#" class="selector__button" @click.prevent="toShowCompare('complectation')">Сравнить</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="config__item">
                                    <label for="options">Опции</label>
                                    <div class="selector" :class="{ active: state.optionsOpened, isDisabled: Object.keys(packets).length === 0 }">
                                        <a href="#" class="selector__head" @click.prevent="toggleSelector('options', $event)">
                                            <div class="selector__c-option" v-if="selectedPackets.length > 0">
                                                <ul>
                                                    <li v-for="pack in selectedPackets">{{ pack.name }}</li>
                                                </ul>
                                            </div>
                                            <div class="selector__c-option" v-else>Выбрать</div>
                                            <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z"/>
                                            </svg>
                                        </a>
                                        <div class="selector__holder">
                                            <div class="selector__dd" ref='options'>
                                                <div class="selector__inner">
                                                    <ul class="selector__list">
                                                        <li class="selector__item" v-for="packet in packets">
                                                            <label>
                                                                <input type="checkbox" name="packet" v-bind:value="packet" v-model="proxySelectedPackets">
                                                                <div class="selector__option">{{ packet.name }}</div>
                                                                <div class="selector__value">{{ packet.price | currencyFormat }} ₽</div>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <hr>
                                                    <a href="#" class="selector__button" @click.prevent="toShowCompare('packets')">Сравнить</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="config__footer">
                                <a href="#" @click.prevent="nextSlide('prevNext')" class="config__next df-button">Продолжить</a>
                            </div>
                        </div>
                    </section>
                </li>
                <li class="steps__item steps__item--fs steps__item--anim" v-if="stepHelp">
                    <section class="help">
                        <div class="help__migel"></div>
                        <h2 class="help__title df-title">Помочь с настройками?</h2>
                        <ul class="help__list">
                            <li class="help__item" v-for="program in programsList" v-if="!(program.id === 1 && car.name === 'H-1')">
                                <div class="help__inner">
                                    <label>
                                        <input type="checkbox" :value="program.id" @change="selectProgram(program.id, $event)" v-model="selectedPrograms">
                                        <div class="help__circle">
                                            <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.940674 8.6L4.822 12.4844C5.80039 13.4635 7.40545 13.4019 8.30586 12.3506L18.0273 1" stroke="white" stroke-width="2"/>
                                            </svg>
                                        </div>
                                        <div class="help__name">{{ program.name }}</div>
                                    </label>
                                    <div class="help__more" @click="showMore(program.id, $event)">
                                        <span>Подробнее</span>
                                        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0)">
                                                <path d="M11.4741 1.5L7.14309 5.39793C6.76278 5.74021 6.18546 5.74021 5.80516 5.39793L1.47412 1.5" stroke="#002C5F" stroke-width="2"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0">
                                                    <rect width="7" height="12" fill="white" transform="translate(12.4741 0.5) rotate(90)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>

                                <div class="help__dd" v-html="program.text" :ref="'program-'+program.id"></div>
                            </li>
                        </ul>
                        <div class="help__footer">
                            <a href="#" class="help__pass" @click.prevent="nextSlide('help', 'aPass')">Пропустить</a>
                            <a href="#" class="help__next df-button" @click.prevent="nextSlide('help', 'aNext')">Продолжить</a>
                        </div>
                    </section>
                </li>
                <li class="steps__item">
                    <section class="calc">
                        <div class="calc__main">
                            <h2 class="calc__title df-title">Ваш расчет</h2>
                            <div class="calc__list">
                                <div class="calc__item">
                                    <label for="term">Срок кредита</label>
                                    <div class="calc__line">
                                        <ul class="term">
                                            <li class="term__item" :class="{ active: currentTerm === term }" v-for="term in termsList" @click="setTerm(term)">
                                                {{ term }}
                                            </li>
                                        </ul>
                                        <div class="options" :class="{ hide: !(currentTerm === 36 && car.name !== 'H-1'), active: includeKASKO }">
                                            <label>
                                                <input type="checkbox" v-model="includeKASKO">
                                                <div class="options__box">
                                                    <svg width="14" height="13" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 4.2L2.63641 5.83641C3.04831 6.24831 3.72368 6.22237 4.10277 5.7801L8.2 1" stroke="#00AAD2" stroke-width="2"/>
                                                    </svg>
                                                </div>
                                                <div class="options__description">Включить КАСКО и ТО</div>
                                            </label>
                                            <!-- При смене title, поменяй условие для статистики в методе -->
                                            <a href="#" class="info" @click.prevent="showInfo('Каско и ТО', 'Чтобы годовая покупка КАСКО и&nbsp;очередное&nbsp;ТО не&nbsp;стали большим внеплановым расходом вашего бюджета, вы&nbsp;можете включить их&nbsp;в&nbsp;ежемесячные платежи. Стоимость годового полиса КАСКО и&nbsp;одного технического обслуживания в&nbsp;год делится на&nbsp;12&nbsp;месяцев, и&nbsp;полученная сумма прибавляется к&nbsp;вашему ежемесячному платежу. Возможность включения КАСКО и&nbsp;ТО в&nbsp;ежемесячные платежи доступна только для&nbsp;версии программы на&nbsp;36&nbsp;месяцев.')">
                                                <svg width="2" height="10" viewBox="0 0 2 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 10.0001H2V4.00006H0V10.0001ZM0 2.00006H2V6.10352e-05H0V2.00006Z"/>
                                                </svg>
                                            </a>
                                            <div class="options__note" :class="{ active: state.noteOpened }">
                                                <span v-if="car.name !== 'H-1'">Доступно только для версии программы на&nbsp;36&nbsp;месяцев</span>
                                                <span v-else>Недоступно для данной модели</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="calc__item range">
                                    <div class="range__top">
                                        <div class="range__line">
                                            <label for="last">Остаточный платеж</label>
                                            <!-- При смене title, поменяй условие для статистики в методе -->
                                            <a href="#" class="info" @click.prevent="showInfo('Остаточный платеж', 'Остаточный платеж&nbsp;&mdash; это часть стоимости автомобиля, которая фиксируется в&nbsp;договоре и&nbsp;выплачивается по&nbsp;окончании программы одним из&nbsp;выбранных способов. За&nbsp;счет остаточного платежа сумма кредита сокращается, позволяя уменьшить ежемесячный платеж. Регулируя остаточный платеж, вы&nbsp;можете менять сумму кредита, тем самым увеличивая/уменьшая ежемесячные платежи. На&nbsp;каждый шаг остаточного платежа действует индивидуальное ограничение по&nbsp;пробегу.')">
                                                <svg width="2" height="10" viewBox="0 0 2 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 10.0001H2V4.00006H0V10.0001ZM0 2.00006H2V6.10352e-05H0V2.00006Z" fill="white"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="range__value">{{ lastPaymentValue | currencyFormat }} ₽</div>
                                    </div>
                                    <div class="range--last"></div>
                                    <div class="range__bottom">
                                        <div class="range__min">{{ lastPayment.min }}</div>
                                        <div class="range__center">{{ lastPayment.center }}</div>
                                        <div class="range__max">{{ lastPayment.max }}</div>
                                    </div>
                                </div>
                                <div class="calc__item range range--fp">
                                    <div class="range__top">
                                        <div class="range__line">
                                            <label for="first">Первый взнос</label>
                                            <!-- <a href="#" class="info" @click.prevent="showInfo('Заголовок 1', 'Термальный источник жизненно выбирает холодный официальный язык. На&nbsp;завтрак англичане предпочитают овсяную кашу и&nbsp;кукурузные хлопья, тем не&nbsp;менее Южное полушарие входит памятник Средневековья. Саванна, как&nbsp;бы это ни&nbsp;казалось парадоксальным, возможна. Когда из&nbsp;храма с&nbsp;шумом выбегают мужчины в&nbsp;костюмах демонов и&nbsp;смешиваются с&nbsp;толпой, шенгенская виза параллельна.')">
                                                <svg width="2" height="10" viewBox="0 0 2 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 10.0001H2V4.00006H0V10.0001ZM0 2.00006H2V6.10352e-05H0V2.00006Z" fill="white"/>
                                                </svg>
                                            </a> -->
                                        </div>
                                        <div class="range__value">{{ firstPaymentValue | currencyFormat }} ₽</div>
                                    </div>
                                    <div class="range--first"></div>
                                    <div class="range__bottom">
                                        <div class="range__min">{{ firstPayment.min }}</div>
                                        <div class="range__max">{{ firstPayment.max }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="aside">
                            <div class="aside__name">{{ car.name }}</div>
                            <div class="aside__img">
                                <img :src="activeImg" alt="">
                            </div>
                            <div class="aside__line">
                                <div class="aside__label">Общая стоимость</div>
                                <div class="aside__value">{{ totalCost | currencyFormat }} ₽</div>
                            </div>
                            <div class="aside__line">
                                <div class="aside__label">Первый взнос</div>
                                <div class="aside__value">{{ firstPaymentValue | currencyFormat }} ₽</div>
                            </div>
                            <div class="aside__line">
                                <div class="aside__label">КАСКО и ТО</div>
                                <div class="aside__value">{{ addCost | currencyFormat }} ₽</div>
                            </div>
                            <div class="aside__line">
                                <div class="aside__label">{{ milleage }}</div>
                                <div class="aside__value">{{ milleageValue }}</div>
                            </div>
                            <hr>
                            <div class="aside__line aside__line--total">
                                <div class="aside__label">Итого</div>
                                <div class="aside__value aside__value--large">{{ totalMonthPay | currencyFormat }} ₽/мес</div>
                            </div>
                            <a href="#" class="aside__button" @click.prevent = "openCreditForm">Предодобрение кредита</a>
                            <div class="aside__bottom">
                                <a href="#" class="aside__mail" @click.prevent = "openSendForm">
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.011 0.749942H1.93098C1.77255 0.749936 1.61568 0.781419 1.46943 0.842349C1.32319 0.903279 1.19046 0.992553 1.0789 1.10504C0.967337 1.21754 0.879153 1.351 0.819439 1.49774C0.759724 1.64449 0.729678 1.8016 0.730999 1.96002V11.14C0.72913 11.4606 0.854298 11.769 1.07917 11.9976C1.30405 12.2262 1.61032 12.3566 1.93098 12.36H15.111C15.4316 12.3566 15.7379 12.2262 15.9628 11.9976C16.1877 11.769 16.3129 11.4606 16.311 11.14V1.96002C16.3123 1.8016 16.2822 1.64449 16.2225 1.49774C16.1628 1.351 16.0746 1.21754 15.9631 1.10504C15.8515 0.992553 15.7188 0.903279 15.5725 0.842349C15.4263 0.781419 15.2694 0.749936 15.111 0.749942H12.011Z" stroke-width="1.5"/>
                                        <path d="M1.61108 1.62006L8.5311 6.54999L16.1421 1.62006" stroke-width="1.5"/>
                                    </svg>

                                    <span>Отправить на почту</span>
                                </a>
                                <a href="#" @click.prevent = "openTestForm" class="aside__dealers">
                                    <span>Тест-драйв</span>
                                    <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L4.89793 5.33104C5.24021 5.71134 5.24021 6.28866 4.89793 6.66896L1 11" stroke-width="2"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </section>
                </li>
            </ul>

            <transition name="popup">
                <div class="df-popup p-info" v-show="state.infoOpened">
                    <div class="df-popup__wrap" @click.self="closeInfo">
                        <div class="df-popup__center p-info__center">
                            <a href="#" @click.prevent="closeInfo" class="df-popup__close">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="14.5454" width="20.5702" height="2.05702" transform="rotate(-45 0 14.5454)"/>
                                    <rect x="1.45459" width="20.5702" height="2.05702" transform="rotate(45 1.45459 0)"/>
                                </svg>
                            </a>
                            <h3 class="p-info__title" v-html="infoTitle"></h3>
                            <div class="p-info__text" v-html="infoText"></div>
                        </div>
                    </div>
                </div>
            </transition>

            <section class="compare" :class="{ showCompare: showCompare }">
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
                        <a href="#" class="compare__close" @click.prevent="toCloseCompare">
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
                            <li class="c-list__item" v-for="mod in modificationList">
                                <label>
                                    <input type="radio" name="compare-mod" v-bind:value="mod" v-model="modification">
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
                            <li class="c-list__item" v-for="comp in complectations">
                                <label>
                                    <input type="radio" name="compare-com" v-bind:value="comp" v-model="complectation">
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
                                    <input type="checkbox" name="compare-pack" v-bind:value="pack" v-model="proxySelectedPackets">
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
                                                <div class="property__name" v-html="property.name.name ? property.name.name : property.name"></div>
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
            </section>
        </div>

        <section class="faq">
            <h2 class="faq__title df-title">Вопрос-ответ</h2>
            <ul class="faq__list">
                <li class="faq__item">
                    <a href="" class="question js-open-question">
                        <span>Что такое СТАРТ?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <p>
                            СТАРТ&nbsp;&mdash; это финансовая программа, с&nbsp;низкими ежемесячными платежами и&nbsp;гарантированным обратным выкупом автомобиля.
                            В&nbsp;рамках СТАРТа Вы&nbsp;можете выбрать опцию ПЛЮС по&nbsp;которой стоимость КАСКО и&nbsp;прохождение&nbsp;ТО включены в&nbsp;ежемесячный платеж.
                            Также Вам доступен СТАРТ с&nbsp;повышенной гарантированной остаточной стоимостью.
                        </p>
                    </div>
                </li>
                <li class="faq__item delay2">
                    <a href="" class="question js-open-question">
                        <span>Чем СТАРТ отличается от обычного кредита?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <p>
                            Ежемесячные платежи по&nbsp;программе СТАРТ в&nbsp;среднем в&nbsp;2&nbsp;раза ниже, чем по&nbsp;обычному кредиту, к&nbsp;тому&nbsp;же при включении опции ПЛЮС , в&nbsp;каждый ежемесячный платеж будет включена оплата полиса КАСКО и&nbsp;прохождение&nbsp;ТО, что делает покупку и&nbsp;обслуживание автомобиля гораздо более комфортными.
                        </p>
                    </div>
                </li>
                <li class="faq__item delay4">
                    <a href="" class="question js-open-question">
                        <span>Кому необходим СТАРТ и его опции?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
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
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <p>
                            Часть кредита, а&nbsp;именно&nbsp;50% (остаточная стоимость), фиксируется Банком и&nbsp;не&nbsp;включатся в&nbsp;ежемесячные платежи. Таким образом Клиент имеет возможность эксплуатировать автомобиль 3&nbsp;года, не&nbsp;оплачивая сразу всю его стоимость. Через 3&nbsp;года у&nbsp;Клиента есть выбор, что делать с&nbsp;автомобилем и&nbsp;остатком долга.
                            А&nbsp;Так&nbsp;же у&nbsp;Вас появилась возможность ежемесячный платеж за&nbsp;счет выбора остаточной стоимости в&nbsp;зависимости от&nbsp;пробега:
                        </p>
                        <br>
                        <ul>
                            <li>
                                50% при условии пробега не&nbsp;более 90&nbsp;тыс.&nbsp;км&nbsp;за&nbsp;3&nbsp;года
                            </li>
                            <li>
                                60% при условии пробега не&nbsp;более 45&nbsp;тыс.&nbsp;км&nbsp;за&nbsp;3&nbsp;года
                            </li>
                            <li>
                                55% при условии пробега не&nbsp;более 60&nbsp;тыс.&nbsp;км&nbsp;за&nbsp;3&nbsp;года
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="faq__item delay6">
                    <a href="" class="question js-open-question">
                        <span>Почему по программе СТАРТ не надо платить за регулярное ТО и полис КАСКО?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <p>
                            Если вы выбрали СТАРТ ПЛЮС, то в&nbsp;каждый ежемесячный платеж уже включена плата за&nbsp;полис КАСКО и&nbsp;прохождение технического обслуживания. Как это работает:<br />
                            Сумма 3-х летнего полиса КАСКО и&nbsp;прохождения трех&nbsp;ТО делится на&nbsp;36&nbsp;месяцев, и&nbsp;полученная цифра прибавляется к&nbsp;стандартному ежемесячному платежу по&nbsp;программе СТАРТ.<br />
                            Важно отметить, что на&nbsp;них не&nbsp;начисляются проценты.<br />
                        </p>
                    </div>
                </li>
                <li class="faq__item delay7">
                    <a href="" class="question js-open-question">
                        <span>Существуют ли риски для Клиента?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <p>
                            Чтобы Клиент не&nbsp;сталкивался с&nbsp;рисками, в&nbsp;договоре заранее зафиксирована гарантированная остаточная стоимость, т.е. минимальная сумма, которую может получить Клиент при продаже автомобиля Дилеру в&nbsp;рамках программы СТАРТ. Эта сумма достаточна для погашения кредита, при этом это только минимальная стоимость. Фактическая стоимость будет зависеть от&nbsp;технического состояния автомобиля и&nbsp;условий рынка, ее&nbsp;назовет Дилер при оценке автомобиля.
                        </p>
                    </div>
                </li>
                <li class="faq__item delay8">
                    <a href="" class="question js-open-question">
                        <span>Какие преимущества получает Клиент?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
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
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
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
                        <span>Что если через 3 года автомобиль будет стоить дешевле 50%?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <p>
                            Средняя рыночная стоимость подержанного Solaris составляет около&nbsp;85% от&nbsp;цены нового. Но&nbsp;даже если случится так, что ситуация на&nbsp;рынке кардинально изменится, у&nbsp;Клиента есть гарантированная остаточная стоимость&nbsp;50%, в&nbsp;пределах которой автомобиль будет выкуплен, а&nbsp;кредит, соответственно, будет погашен. Кроме того, есть возможность продлить кредит еще на&nbsp;2&nbsp;года.
                        </p>
                    </div>
                </li>
                <li class="faq__item delay10">
                    <a href="" class="question js-open-question">
                        <span>Какие существуют условия для получения гарантированной остаточной стоимости?</span>
                        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"/>
                        </svg>
                    </a>
                    <div class="question__dropdown">
                        <div>
                            <ul>
                                <li>
                                    Пробег не&nbsp;более 90&nbsp;000&nbsp;км за&nbsp;3&nbsp;года при остаточной стоимости в&nbsp;50%; не&nbsp;более 60&nbsp;000&nbsp;км за&nbsp;3&nbsp;года при остаточной стоимости в&nbsp;55%; не&nbsp;более 45&nbsp;000&nbsp;км за&nbsp;3&nbsp;года при остаточной стоимости в&nbsp;60%.
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
            <a href="/contacts/" class="faq__button df-button">Задать вопрос</a>
        </section>

        <section class="disclamers">
            <div class="disclamers__inner">
                <div class="disclamers_opener" onclick="$('.disclamers__list').slideToggle(); $(this).toggleClass('open');">Расшифровка финансового предложения<svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg" style="float: right;">
                        <path d="M4.5 6L-4.29138e-07 1.12054e-06L9 4.76837e-07L4.5 6Z" fill="black"></path>
                    </svg></div>
                <ul class="disclamers__list" style="display: none;">
                    <li class="disclamers__item">
                        Solaris - 6 000 в месяц

                        Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Solaris (1.4 6MT Active) 730 000 р. 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 321 700 ублей, сумма кредита 408 300 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.
                    </li>
                    <li class="disclamers__item">
                        Creta – 7 000 в месяц

                        Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Creta (1.6 6MT 2WD Start) 947 000р. 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 440 000 рублей, сумма кредита 507 000 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.
                    </li>
                    <li class="disclamers__item">
                        Elantra – 8 000 в месяц

                        Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Elantra (1.6 6МТ Start) 1 019 000р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 460 000 рублей, сумма кредита 559 000 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.
                    </li>
                    <li class="disclamers__item">
                        Новая Elantra – 8 000 в месяц

                        Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai New Elantra (1.6 6МТ Start) 1 049 000р., 2019 года производства, на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 480 200 рублей, сумма кредита 568 800 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru
                    </li>
                    <li class="disclamers__item">
                        Sonata – 9 000 в месяц

                        Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Sonata (Primary 2.0 MPI 6AT) 1 344 000 руб, 2019 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 13.8% годовых, первоначальный взнос 639 700 рублей, сумма кредита 704 300 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru
                    </li>
                    <li class="disclamers__item">
                        Tucson – 10 000 в месяц

                        Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Tucson (Primary 2,0л 6MT 2WD) 1 444 000р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 690 300 рублей, сумма кредита 753 700 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru
                    </li>
                    <li class="disclamers__item">
                        Santa Fe – 12 000 месяц

                        Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Santa Fe (Family 2,4л 6AT 4WD) 2 049 000 р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.3% годовых, первоначальный взнос 1 030 800 рублей, сумма кредита 1 018 200 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru
                    </li>
                    <li class="disclamers__item">
                        H-1 – 14 000 месяц

                        Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai H-1 (Active 2.5 CRDi WGT 6MT) 2 121 000 р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 1 039 000 рублей, сумма кредита 1 082 000 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru
                    </li>
                    <li class="disclamers__item">
                        Solaris - 9 580 в месяц

                        Solaris - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 9 580 рублей в месяц. Платеж состоит из платежа по кредиту в 6 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 3 580 рублей***.

                        ** Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Solaris (1.4 6MT Active) 730 000 р. 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 321 700 ублей, сумма кредита 408 300 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.

                        *** Платеж по программе страхования КАСКО и Сервис. Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилера Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai). Полис оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Solaris, в кредит по программе «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс, с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования. Обязательным условием программы является самостоятельная оплата клиентом страховой премии в размере 37 000 рублей в пользу САО «ВСК» (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru) покрывающей риски «Полная гибель» и «Хищение» ТС на 3 года, при покупке нового автомобиля Hyundai Solaris 2018 года выпуска у официальных дилеров Hyundai в кредит по кредитному продукту «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.06. 2019г. до 30.06.2019г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).
                    </li>
                    <li class="disclamers__item">
                        Creta – 10 870 в месяц

                        Creta - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 10 870 рублей в месяц. Платеж состоит из платежа по кредиту в 7 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 3 870 рублей***.

                        ** Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Creta (1.6 6MT 2WD Start) 947 000р. 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 440 000 рублей, сумма кредита 507 000 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.

                        *** Платеж по программе страхования КАСКО и Сервис. Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилера Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai). Полис оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Creta, в кредит по программе «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс, с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования. Обязательным условием программы является самостоятельная оплата клиентом страховой премии в размере 37 500 рублей в пользу САО «ВСК» (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru) покрывающей риски «Полная гибель» и «Хищение» ТС на 3 года, при покупке нового автомобиля Hyundai Creta 2018 года выпуска у официальных дилеров Hyundai в кредит по кредитному продукту «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс.Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.06.2019г. до 30.06.2019г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).
                    </li>
                    <li class="disclamers__item">
                        Elantra – 12 120 в месяц

                        Elantra - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 12 120 рублей в месяц. Платеж состоит из платежа по кредиту в 8 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 4 120 рублей***.

                        ** Платеж рассчитан по программе Hyundai Старт исходя из цены Hyundai Elantra (1.6 6МТ Start) 1 019 000р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 460 000 рублей, сумма кредита 559 000 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru.

                        ***Платеж по программе страхования КАСКО и Сервис. Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилера Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai). Полис оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Elantra, в кредит по программе «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс, с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования. Обязательным условием программы является самостоятельная оплата клиентом страховой премии в размере 41 100 рублей в пользу САО «ВСК» (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru) покрывающей риски «Полная гибель» и «Хищение» ТС на 3 года, при покупке нового автомобиля Hyundai Elantra 2018 года выпуска у официальных дилеров Hyundai в кредит по кредитному продукту «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс.Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.06.2019г. до 30.06.2019г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).
                    </li>
                    <li class="disclamers__item">
                        Sonata – 14 550 в месяц

                        Sonata - общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 14 550 рублей в месяц. Платеж состоит из платежа по кредиту в 9 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 5 550 рублей***.

                        ** Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Sonata (Primary 2.0 MPI 6AT) 1 344 000 руб, 2019 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 13.8% годовых, первоначальный взнос 639 700 рублей, сумма кредита 704 300 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru

                        ***Платеж по программе страхования КАСКО и Сервис. Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилера Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai). Полис оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Sonata, в кредит по программе «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс, с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования. Обязательным условием программы является самостоятельная оплата клиентом страховой премии в размере 44 000 рублей в пользу САО «ВСК» (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru) покрывающей риски «Полная гибель» и «Хищение» ТС на 3 года, при покупке нового автомобиля Hyundai Sonata 2018 года выпуска у официальных дилеров Hyundai в кредит по кредитному продукту «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.06.2019г. до 30.06.2019г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).
                    </li>
                    <li class="disclamers__item">
                        Tucson – 14 280 в месяц

                        Tucson – 14 280 рублей в месяц (Платеж состоит из платежа по кредиту в 10 000 рублей и платежа по программе страхования КАСКО и Сервис в размере 4 280 рублей) Tucson - Общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 14 280 рублей в месяц. Платеж состоит из платежа по кредиту в 10 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 4 280 рублей***.

                        ** Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Tucson (Primary 2,0л 6MT 2WD) 1 444 000р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.8% годовых, первоначальный взнос 690 300 рублей, сумма кредита 753 700 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru

                        ***Платеж по программе страхования КАСКО и Сервис. Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилера Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai). Полис оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Tucson, в кредит по программе «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс, с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования. Обязательным условием программы является самостоятельная оплата клиентом страховой премии в размере 44 000 рублей в пользу САО «ВСК» (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru) покрывающей риски «Полная гибель» и «Хищение» ТС на 3 года, при покупке нового автомобиля Hyundai Tucson 2018 года выпуска у официальных дилеров Hyundai в кредит по кредитному продукту «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.06.2019г. до 30.06.2019г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).
                    </li>
                    <li class="disclamers__item">
                        Santa Fe – 17 900 месяц

                        Santa Fe - Общий ежемесячный платеж по программе «СТАРТ ПЛЮС» от 17 900 рублей в месяц. Платеж состоит из платежа по кредиту в 12 000 рублей** и платежа по программе страхования КАСКО и Сервис в размере 5 900 рублей***.

                        ** Платеж рассчитан по программе Hyundai Старт исходя цены Hyundai Santa Fe (Family 2,4л 6AT 4WD) 2 049 000 р., 2018 года производства на условиях кредитного продукта «Hyundai Finance Special»: срок кредита 36 мес., процентная ставка 14.3% годовых, первоначальный взнос 1 030 800 рублей, сумма кредита 1 018 200 рублей. Остаточный платеж (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 50% от цены ТС на момент покупки. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ПАО «Совкомбанк» Генеральная лицензия Банка России № 963 от 05 декабря 2014 года. Предложение действует с 01.06.2019 по 30.06.2019г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.sovcombank.ru

                        ***Платеж по программе страхования КАСКО и Сервис. Платеж по программе страхования, включающей в себя риск «Ущерб» (Дорожное происшествие по вине Страхователя, Допущенного лица или неустановленных третьих лиц, Дорожное происшествие по вине установленных третьих лиц, Природные и техногенные факторы, Действие третьих лиц), а так же прохождение регулярного технического обслуживания у официального дилера Хендэ не более 1 (одного) раза в год, в течение срока действия кредита (всего 3 регулярных технических обслуживаний согласно регламенту Hyundai). Полис оформляется на 3 года в САО «ВСК» при покупке нового Hyundai Santa Fe, в кредит по программе «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс, с ежемесячной беспроцентной рассрочкой платежа на 3 (три) года. Полис КАСКО предусматривает выплату страхового возмещения за вычетом безусловной франшизы в размере 18 000 руб. по страховым случаям, определенным в полисе и с учетом положений Правил страхования. Обязательным условием программы является самостоятельная оплата клиентом страховой премии в размере 46 000 рублей в пользу САО «ВСК» (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru) покрывающей риски «Полная гибель» и «Хищение» ТС на 3 года, при покупке нового автомобиля Hyundai Santa Fe 2018 года выпуска у официальных дилеров Hyundai в кредит по кредитному продукту «СТАРТ ПЛЮС» в рамках программы Хендэ Финанс. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действительно с 01.06.2019г. до 31.06.2019г и распространяется только для розничных клиентов физических лиц, использующих ТС в личных (не предпринимательских) целях. Подробности в салонах официальных дилеров HYUNDAI. Условия программы могут быть изменены в одностороннем порядке САО «ВСК». (Лицензии ЦБ РФ - СЛ № 0621, СИ № 0621 от 11.09.2015 www.vsk.ru).
                    </li>
                </ul>
            </div>
        </section>

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
                        <input type="email" class="p-send__input" name="email" v-on:keydown.space.prevent="" :class="{ 'invalid' : !validationSend.email && processingSend }" v-model="email" autocomplete="off" placeholder="E-mail">
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
                                    <input type="email" class="p-test__input" autocomplete="off" name="email" v-model="testDriveData.email" placeholder="E-mail">
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

            <div class="p-test" :class="{ show: creditForm }">
                <div class="p-test__scroll"  @click.self="creditForm = false">
                    <div class="p-test__center p-test__center--700">
                        <a href="" class="p-send__close" @click.prevent="creditForm = false">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                    <path class="st0" d="M17.4,15L29.5,2.8c0.6-0.6,0.6-1.7,0-2.4c-0.6-0.6-1.7-0.6-2.4,0L15,12.6L2.8,0.5c-0.6-0.6-1.7-0.6-2.4,0
                        c-0.6,0.6-0.6,1.7,0,2.4L12.6,15L0.5,27.2c-0.6,0.6-0.6,1.7,0,2.4c0.6,0.7,1.7,0.7,2.4,0L15,17.4l12.2,12.2c0.6,0.7,1.7,0.7,2.4,0
                        c0.6-0.6,0.6-1.7,0-2.4L17.4,15z"/>
                    </svg>
                        </a>
                        <div class="p-test__title">Выбор дилера и переход на сторонний ресурс</div>
                        <div class="p-test__text p-test__text--big">После выбора дилерского центра вы будете перемещены на сторонний ресурс для заполнения анкеты. Если вы согласны, выберите дилерский центр и нажмите кнопку «Далее».</div>
                        <form class="p-test__form" @submit.prevent="creditFormSubmit">
                            <div class="p-test__inner">
                                <div class="p-test__select p-test__select--mb">
                                    <select id="citySelect2" name="city">
                                        <option v-bind:value="city.name" v-for="city in creditDealers">{{ city.name }}</option>
                                    </select>
                                </div>
                                <div class="p-test__select" :class="{ 'invalid' : !validationCredit.dealer && processing }">
                                    <select id="dealerSelect2" name="dialer">
                                        <option value=""></option>
                                        <option v-bind:value="d.credit_id" v-for="d in dealersCreditInCity">{{ d.name }}</option>
                                    </select>
                                    <div class="p-test__alert p-test__alert--select">Выберите дилера</div>
                                </div>
                                <button type="submit" class="p-test__button p-test__button--block">Далее</button>
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


        <!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script src="https://www.hyundai.ru/assets/js/vendors.js?v=1"></script>



    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="https://maps.google.ru/maps/api/js?key=AIzaSyDX8W8BnupAAQjlKYfnq8J51ZLY3hpnxgA"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/underscore.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/polyfill/promise.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/object-fit_polyfill/object-fit.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/selectize/selectize.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/axios/axios.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/vue/vue.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/nouislider/nouislider.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/ScrollMagic.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/scrollmagic/plugins/debug.addIndicators.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/v-money/v-money.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/v-mask/v-mask.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/selectize/selectize.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/spritespin_new/spritespin.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/js/start.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>