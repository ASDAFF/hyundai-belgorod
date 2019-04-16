<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Бренд-коллекция.");
?>

    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/style.css?v=3.0">
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/config_layout.css">

    <link type="text/css" href="https://www.hyundai.ru/assets/css/config_layout.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/owl-carousel/owl.carousel.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/libs/owl-carousel/owl.theme.default.min.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/find-dealer.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/brandCollection.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/brandCollection_overrides.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <style>
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

    </style>
    <!--
    Контент страницы начнется тут
    -->

    <main class="main">

        <nav class="s-menu">
            <ul class="s-menu__list">
                <li class="s-menu__item">
                    <a href="https://www.hyundai.ru/brand-collection" class="s-menu__link active">Главная</a>
                </li>
                <li class="s-menu__item">
                    <a href="https://www.hyundai.ru/brand-collection/category/accessories" class="s-menu__link">Аксессуары</a>
                </li>
                <li class="s-menu__item">
                    <a href="https://www.hyundai.ru/brand-collection/category/office" class="s-menu__link">Для офиса</a>
                </li>
                <li class="s-menu__item">
                    <a href="https://www.hyundai.ru/brand-collection/category/car" class="s-menu__link">В автомобиле</a>
                </li>
                <li class="s-menu__item">
                    <a href="https://www.hyundai.ru/brand-collection/category/poli" class="s-menu__link">Робокар Поли</a>
                </li>
                <li class="s-menu__item">
                    <a href="https://www.hyundai.ru/brand-collection/category/all" class="s-menu__link">Весь каталог</a>
                </li>
                <li class="s-menu__item">
                    <a href="/contacts/" target="_blank" class="s-menu__link">Где купить</a>
                </li>
            </ul>
        </nav>
        <section class="main-banner" style="background-image: url(https://www.hyundai.ru/assets/img/brandCollection/main.jpg);">
            <div class="main-banner__title">
                <h1 class="h1">Бренд-коллекция.</h1>
                <div class="main-banner__text">Ваш уникальный стиль.</div>
            </div>
            <div class="main-banner__disclamer">
                *Приобрести аксессуары вы можете у дилеров Hyundai
            </div>
        </section>
        <section class="new-items">
            <h2 class="h2 new-items__title">Новинки</h2>
            <ul class="new-items__list owl-carousel js-new-items-carousel slider">
                <li class="new-items__item">
                    <a href="#" class="product" data-num="0" data-id="82">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/5265c0e16e89837c.jpg" alt="">
                        </div>
                        <div class="product__title">Плюшевая игрушка-перевертыш</div>
                        <div class="product_price">3 017 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="1" data-id="81">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/2555c0e168aaf6df.jpg" alt="">
                        </div>
                        <div class="product__title">Игрушка-подушка Рой</div>
                        <div class="product_price">1 901 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="2" data-id="80">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/3555c0e165630385.jpg" alt="">
                        </div>
                        <div class="product__title">Игрушка-подушка Эмбер</div>
                        <div class="product_price">1 901 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="3" data-id="79">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/9125c0e1615ee498.jpg" alt="">
                        </div>
                        <div class="product__title">Игрушка-подушка Поли	</div>
                        <div class="product_price">1 901 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="4" data-id="78">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/4765c0e158a2e2a9.jpg" alt="">
                        </div>
                        <div class="product__title">Термобутылка Эмбер</div>
                        <div class="product_price">2 480 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="5" data-id="77">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/7125c0e154fc6ced.jpg" alt="">
                        </div>
                        <div class="product__title">Термобутылка Поли</div>
                        <div class="product_price">2 480 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="6" data-id="76">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/6125c0e151821e88.jpg" alt="">
                        </div>
                        <div class="product__title">Брелок Рой</div>
                        <div class="product_price">708 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="7" data-id="75">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/4905c0e14ce3ff16.jpg" alt="">
                        </div>
                        <div class="product__title">Брелок Хэлли</div>
                        <div class="product_price">708 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="8" data-id="74">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/9905c0e148d0041f.jpg" alt="">
                        </div>
                        <div class="product__title">Брелок Эмбер</div>
                        <div class="product_price">708 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="9" data-id="73">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/3305c0e1456190e1.jpg" alt="">
                        </div>
                        <div class="product__title">Брелок Поли</div>
                        <div class="product_price">708 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="10" data-id="72">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/3765c050b8527264.jpg" alt="">
                        </div>
                        <div class="product__title">Несессер</div>
                        <div class="product_price">2 156 ₽</div>
                    </a>
                </li>
                <li class="new-items__item">
                    <a href="#" class="product" data-num="11" data-id="71">
                        <div class="product__img">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/4485c050b7a9a4ce.jpg" alt="">
                        </div>
                        <div class="product__title">Сумка-холодильник</div>
                        <div class="product_price">2 258 ₽</div>
                    </a>
                </li>


                <!--
                        <li class="new-items__item">
                            <a href="#" class="product">
                                <div class="product__img">
                                    <img src="https://www.hyundai.ru/assets/img/brandCollection/products/1.png" alt="">
                                </div>
                                <div class="product__title">Складной зонт автомат. "Hyundai"</div>
                                <div class="product_price">4 600 ₽</div>
                            </a>
                        </li>
                -->
            </ul>
            <a href="https://www.hyundai.ru/brand-collection/category/all" class="new-items__cat">Весь каталог</a>
        </section>
        <section class="where-buy">
            <div class="where-buy__legend">
                <div class="where-buy__title">Где купить</div>
                <div class="where-buy__text">
                    Вы&nbsp;можете предварительно<br />
                    заказать интересующий товар<br />
                    в&nbsp;ближайшем дилерском центре.
                </div>
                <div class="where-buy__note">
                    <div class="where-buy__icon">
                        <img src="https://www.hyundai.ru/assets/img/brandCollection/icon_df_map_dealer_special_on.png" alt="">
                    </div>
                    <div class="where-buy__description">
                        &mdash;&nbsp;дилер, оформленный по&nbsp;новым<br />
                        стандартам бренда
                    </div>
                </div>
            </div>
            <div class="where-buy__map">
                <div class="dealer__location-dropdown drop-it-down">
                    <ul class="dropdown-list first">
                        <li  data-value="" class="dropdown-item first"></li>
                    </ul>
                    <div class="nano">
                        <ul class="dropdown-list nano-content">
                            <li  data-value="" class="dropdown-item divider">&mdash;</li>
                            <li data-value="36" class="dropdown-item">Белгород</li>
                        </ul>
                    </div>
                </div>

                <div id="map"></div>
            </div>
        </section>

        <div class="p-product">
            <div class="p-product__center">
                <ul class="p-product__list js-product-carousel owl-carousel p-slider">
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/5265c0e16e89837c.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Плюшевая игрушка-перевертыш</div>
                                <div class="description__line">
                                    <div class="description__price">3 017 ₽*</div>
                                    <div class="description__art">арт. R8480AC622H</div>
                                </div>
                                <div class="description__text">
                                    Декоративная игрушка-перевертыш "Робокар Поли". Мягкая игрушка в виде Робокара Поли при выворачивании наизнанку трансформируется в подушку-подголовник, которую можно использовать в дороге.                         </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">тянущийся плюш; бифлекс; трикотбраш; полистирольные гранулы </div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">23*15*19</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/2555c0e168aaf6df.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Игрушка-подушка Рой</div>
                                <div class="description__line">
                                    <div class="description__price">1 901 ₽*</div>
                                    <div class="description__art">арт. R8480AC625H</div>
                                </div>
                                <div class="description__text">
                                    Плюшевая игрушка-подушка "Робокар Поли" с изображением персонажа по имени Рой. Декоративная подушка станет отличным подарком для ребенка.                         </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">плюш; синтепон; синтепух</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">34*34</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/3555c0e165630385.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Игрушка-подушка Эмбер</div>
                                <div class="description__line">
                                    <div class="description__price">1 901 ₽*</div>
                                    <div class="description__art">арт. R8480AC626H</div>
                                </div>
                                <div class="description__text">
                                    Плюшевая игрушка-подушка "Робокар Поли" с изображением персонажа по имени Эмбер. Декоративная подушка станет отличным подарком для ребенка.                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">плюш; синтепон; синтепух</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">34*34</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/9125c0e1615ee498.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Игрушка-подушка Поли	</div>
                                <div class="description__line">
                                    <div class="description__price">1 901 ₽*</div>
                                    <div class="description__art">арт. R8480AC624H</div>
                                </div>
                                <div class="description__text">
                                    Плюшевая игрушка-подушка "Робокар Поли" с изображением персонажа по имени Робокар Поли. Декоративная подушка станет отличным подарком для ребенка.                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">плюш; синтепон; синтепух</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">34*34</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/4765c0e158a2e2a9.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Термобутылка Эмбер</div>
                                <div class="description__line">
                                    <div class="description__price">2 480 ₽*</div>
                                    <div class="description__art">арт. R8480AC615H</div>
                                </div>
                                <div class="description__text">
                                    Детская термобутылка объёмом 0,5 л с изображением любимого персонажа по имени Эмбер. Термос изготовлен из нержавеющей стали и снабжен удобной пластиковой крышкой.                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">коррозионно-стойкая сталь; пластик; резина</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">6,5*6,5*21,5</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/7125c0e154fc6ced.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Термобутылка Поли</div>
                                <div class="description__line">
                                    <div class="description__price">2 480 ₽*</div>
                                    <div class="description__art">арт. R8480AC616H</div>
                                </div>
                                <div class="description__text">
                                    Детская термобутылка объёмом 0,5 л с изображением любимого персонажа по имени Робокар Поли. Термос изготовлен из нержавеющей стали и снабжен удобной пластиковой крышкой.                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">коррозионно-стойкая сталь; пластик; резина</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">6.5*6.5*21.5</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/6125c0e151821e88.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Брелок Рой</div>
                                <div class="description__line">
                                    <div class="description__price">708 ₽*</div>
                                    <div class="description__art">арт. R8480AC619H</div>
                                </div>
                                <div class="description__text">
                                    Детский брелок "Робокар Поли" с изображением персонажа по имени  Рой  из мультсериала "Робокар Поли". Брелок Рой – отличный подарок для любителей мультфильма!                         </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">металл; ПВХ</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">4,5*6,0</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/4905c0e14ce3ff16.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Брелок Хэлли</div>
                                <div class="description__line">
                                    <div class="description__price">708 ₽*</div>
                                    <div class="description__art">арт. R8480AC620H</div>
                                </div>
                                <div class="description__text">
                                    Детский брелок "Робокар Поли" с изображением персонажа по имени Хэлли. Брелок Хэлли – отличный подарок для любителей мультфильма!                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">металл; ПВХ</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">4,5*6,0</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/9905c0e148d0041f.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Брелок Эмбер</div>
                                <div class="description__line">
                                    <div class="description__price">708 ₽*</div>
                                    <div class="description__art">арт. R8480AC618H</div>
                                </div>
                                <div class="description__text">
                                    Детский брелок "Робокар Поли" с изображением персонажа по имени Эмбер. Отличный подарок для любителей мультфильма.                         </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">металл; ПВХ</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">4,5*6,0</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/3305c0e1456190e1.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Брелок Поли</div>
                                <div class="description__line">
                                    <div class="description__price">708 ₽*</div>
                                    <div class="description__art">арт. R8480AC617H</div>
                                </div>
                                <div class="description__text">
                                    Детский брелок "Робокар Поли" с изображением персонажа по имени Робокар Поли. Брелок Поли – отличный подарок для любителей мультфильма!                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">металл; ПВХ</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">4,5*6,0</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/3765c050b8527264.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Несессер</div>
                                <div class="description__line">
                                    <div class="description__price">2 156 ₽*</div>
                                    <div class="description__art">арт. R8480AC630H</div>
                                </div>
                                <div class="description__text">
                                    Дорожный несессер для средств личной гигиены, изготовленный из прочной износостойкой ткани. Полезный аксессуар, который всегда пригодится в дороге.                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">хлопок, 50%; полиэстер, 50%, 600 D</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">22*23,5*11</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="p-product__item">
                        <a href="#" class="p-product__close js-product-close">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 28 28" style="enable-background:new 0 0 28 28;" xml:space="preserve">
                        <g id="Слой_2">
                        </g>
                                <g id="Слой_1">
                                    <g>
                                        <g>
                                            <path d="M27.4,0.6c-0.8-0.8-2-0.8-2.8,0L14,11.2L3.4,0.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8L11.2,14L0.6,24.6
                                        c-0.8,0.8-0.8,2,0,2.8C1,27.8,1.5,28,2,28s1-0.2,1.4-0.6L14,16.8l10.6,10.6C25,27.8,25.5,28,26,28s1-0.2,1.4-0.6
                                        c0.8-0.8,0.8-2,0-2.8L16.8,14L27.4,3.4C28.2,2.6,28.2,1.3,27.4,0.6z"/>
                                        </g>
                                    </g>
                                </g>
                    </svg>
                        </a>
                        <div class="p-product__left">
                            <img src="https://www.hyundai.ru/media/brandcollection/product/4485c050b7a9a4ce.jpg" alt="" class="p-product__img">
                        </div>
                        <div class="p-product__right">
                            <div class="description">
                                <div class="description__title">Сумка-холодильник</div>
                                <div class="description__line">
                                    <div class="description__price">2 258 ₽*</div>
                                    <div class="description__art">арт. R8480AC594H</div>
                                </div>
                                <div class="description__text">
                                    Складная сумка-холодильник. Удобная сумка объёмом 35 литров поможет сохранить при надлежащей температуре горячие или холодные продукты питания.                        </div>
                                <ul class="description__list">
                                    <li class="description__item">
                                        <div class="description__t">Материал:</div>
                                        <div class="description__v">100% полиэстр</div>
                                    </li>
                                    <li class="description__item">
                                        <div class="description__t">Размер (см):</div>
                                        <div class="description__v">42*28*30</div>
                                    </li>
                                    <!--
                                                                <li class="description__item">
                                                                    <div class="description__t">объем</div>
                                                                    <div class="description__v">450 мл</div>
                                                                </li>
                                                                <li class="description__item">
                                                                    <div class="description__t">цвет</div>
                                                                    <div class="description__v">серый</div>
                                                                </li>
                                    -->
                                </ul>
                                <div class="description__dsclmr">
                                    Приобрести и узнать о наличии товара вы можете у дилеров Hyundai
                                </div>
                                <button class="description__button js-open-where-buy">Найти дилера</button>
                                <div class="description__bottom">
                                    <div class="description__disclamer">
                                        * Стоимость оригинальных аксессуаров носит исключительно ознакомительный характер и&nbsp;может отличаться от&nbsp;действующих цен в&nbsp;официальных дилерских центрах Hyundai.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="p-preview p-preview--prev">
                    <div class="p-preview__title">Складной зонт автомат. "Hyundai"</div>
                    <div class="p-preview__img">
                        <img src="https://www.hyundai.ru/assets/img/brandCollection/products/1.png" alt="">
                    </div>
                </div>
                <div class="p-preview p-preview--next">
                    <div class="p-preview__title">Термокружка белая "Hyundai"</div>
                    <div class="p-preview__img">
                        <img src="https://www.hyundai.ru/assets/img/brandCollection/products/2.png" alt="">
                    </div>
                </div>
                <div class="p-product__where-buy">
                    <section class="where-buy where-buy--mt0">
                        <div class="where-buy__legend">
                            <div class="where-buy__title">Где купить</div>
                            <div class="where-buy__text">
                                Вы&nbsp;можете предварительно<br />
                                заказать интересующий товар<br />
                                в&nbsp;ближайшем дилерском центре.
                            </div>
                            <div class="where-buy__note">
                                <div class="where-buy__icon">
                                    <img src="https://www.hyundai.ru/assets/img/brandCollection/icon_df_map_dealer_special_on.png" alt="">
                                </div>
                                <div class="where-buy__description">
                                    &mdash;&nbsp;дилер, оформленный по&nbsp;новым<br />
                                    стандартам бренда
                                </div>
                            </div>
                        </div>
                        <div class="where-buy__map">
                            <div class="dealer__location-dropdown drop-it-down">
                                <ul class="dropdown-list first">
                                    <li  data-value="" class="dropdown-item first"></li>
                                </ul>
                                <div class="nano">
                                    <ul class="dropdown-list nano-content">
                                        <li  data-value="" class="dropdown-item divider">&mdash;</li>
                                        <li data-value="122" class="dropdown-item">Абакан</li>
                                        <li data-value="116" class="dropdown-item">Альметьевск</li>
                                        <li data-value="35" class="dropdown-item">Архангельск</li>
                                        <li data-value="51" class="dropdown-item">Астрахань</li>
                                        <li data-value="39" class="dropdown-item">Барнаул</li>
                                        <li data-value="36" class="dropdown-item">Белгород</li>
                                        <li data-value="14" class="dropdown-item">Благовещенск</li>
                                        <li data-value="24" class="dropdown-item">Брянск</li>
                                        <li data-value="32" class="dropdown-item">Великий Новгород</li>
                                        <li data-value="112" class="dropdown-item">Владивосток</li>
                                        <li data-value="119" class="dropdown-item">Владикавказ</li>
                                        <li data-value="70" class="dropdown-item">Владимир</li>
                                        <li data-value="56" class="dropdown-item">Волгоград</li>
                                        <li data-value="121" class="dropdown-item">Волжский</li>
                                        <li data-value="114" class="dropdown-item">Вологда</li>
                                        <li data-value="84" class="dropdown-item">Воронеж</li>
                                        <li data-value="120" class="dropdown-item">Грозный</li>
                                        <li data-value="18" class="dropdown-item">Екатеринбург</li>
                                        <li data-value="38" class="dropdown-item">Иваново</li>
                                        <li data-value="43" class="dropdown-item">Ижевск</li>
                                        <li data-value="96" class="dropdown-item">Иркутск</li>
                                        <li data-value="29" class="dropdown-item">Йошкар-Ола</li>
                                        <li data-value="67" class="dropdown-item">Казань</li>
                                        <li data-value="48" class="dropdown-item">Калининград</li>
                                        <li data-value="52" class="dropdown-item">Калуга</li>
                                        <li data-value="69" class="dropdown-item">Кемерово</li>
                                        <li data-value="83" class="dropdown-item">Киров</li>
                                        <li data-value="95" class="dropdown-item">Кострома</li>
                                        <li data-value="12" class="dropdown-item">Краснодар</li>
                                        <li data-value="46" class="dropdown-item">Красноярск</li>
                                        <li data-value="64" class="dropdown-item">Курган</li>
                                        <li data-value="77" class="dropdown-item">Курск</li>
                                        <li data-value="45" class="dropdown-item">Липецк</li>
                                        <li data-value="27" class="dropdown-item">Магнитогорск</li>
                                        <li data-value="128" class="dropdown-item">Махачкала</li>
                                        <li data-value="50" class="dropdown-item">Минеральные Воды</li>
                                        <li data-value="106,125,98,110,129,19,107,102,103,124,111" class="dropdown-item active">Москва и Подмосковье</li>
                                        <li data-value="49" class="dropdown-item">Мурманск</li>
                                        <li data-value="66" class="dropdown-item">Набережные Челны</li>
                                        <li data-value="100" class="dropdown-item">Нефтекамск</li>
                                        <li data-value="74" class="dropdown-item">Нижневартовск</li>
                                        <li data-value="42" class="dropdown-item">Нижний Новгород</li>
                                        <li data-value="81" class="dropdown-item">Нижний Тагил</li>
                                        <li data-value="55" class="dropdown-item">Новокузнецк</li>
                                        <li data-value="13" class="dropdown-item">Новороссийск</li>
                                        <li data-value="25" class="dropdown-item">Новосибирск</li>
                                        <li data-value="127" class="dropdown-item">Ноябрьск</li>
                                        <li data-value="57" class="dropdown-item">Омск</li>
                                        <li data-value="37" class="dropdown-item">Орел</li>
                                        <li data-value="79" class="dropdown-item">Оренбург</li>
                                        <li data-value="117" class="dropdown-item">Орск</li>
                                        <li data-value="72" class="dropdown-item">Пенза</li>
                                        <li data-value="73" class="dropdown-item">Пермь</li>
                                        <li data-value="40" class="dropdown-item">Петрозаводск</li>
                                        <li data-value="82" class="dropdown-item">Псков</li>
                                        <li data-value="85" class="dropdown-item">Пятигорск</li>
                                        <li data-value="33" class="dropdown-item">Ростов-на-Дону</li>
                                        <li data-value="31" class="dropdown-item">Рязань</li>
                                        <li data-value="23" class="dropdown-item">Самара</li>
                                        <li data-value="17" class="dropdown-item">Санкт-Петербург</li>
                                        <li data-value="54" class="dropdown-item">Саранск</li>
                                        <li data-value="11" class="dropdown-item">Саратов</li>
                                        <li data-value="115" class="dropdown-item">Симферополь</li>
                                        <li data-value="80" class="dropdown-item">Смоленск </li>
                                        <li data-value="7" class="dropdown-item">Сочи</li>
                                        <li data-value="58" class="dropdown-item">Ставрополь</li>
                                        <li data-value="113" class="dropdown-item">Старый Оскол</li>
                                        <li data-value="16" class="dropdown-item">Стерлитамак</li>
                                        <li data-value="92" class="dropdown-item">Сургут</li>
                                        <li data-value="101" class="dropdown-item">Сыктывкар</li>
                                        <li data-value="99" class="dropdown-item">Тамбов</li>
                                        <li data-value="62" class="dropdown-item">Тверь</li>
                                        <li data-value="44" class="dropdown-item">Тольятти</li>
                                        <li data-value="21" class="dropdown-item">Томск</li>
                                        <li data-value="30" class="dropdown-item">Тула</li>
                                        <li data-value="26" class="dropdown-item">Тюмень</li>
                                        <li data-value="20" class="dropdown-item">Улан-Удэ</li>
                                        <li data-value="22" class="dropdown-item">Ульяновск</li>
                                        <li data-value="8" class="dropdown-item">Уфа</li>
                                        <li data-value="108" class="dropdown-item">Хабаровск</li>
                                        <li data-value="68" class="dropdown-item">Чебоксары</li>
                                        <li data-value="28" class="dropdown-item">Челябинск</li>
                                        <li data-value="9" class="dropdown-item">Череповец</li>
                                        <li data-value="123" class="dropdown-item">Шахты</li>
                                        <li data-value="126" class="dropdown-item">Южно-Сахалинск</li>
                                        <li data-value="118" class="dropdown-item">Якутск</li>
                                        <li data-value="86" class="dropdown-item">Ярославль</li>

                                    </ul>
                                </div>
                            </div>

                            <div id="mapPopup"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- ---------------------Maps----------------------- -->
        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

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

        <script type="text/html" id="dealerTemplate">
            <div class="dealer-info <%= special %> <%= wa %> <%= rating %>">
                <div class="pop_body">
                    <div class="dealer-name"><%= name %></div><br clear="all"/>
                    <div class="dealer-line"></div>
                    <div class="pop_text">
                        <span class="dealer-address"><span><%= address %></span></span>
                        <span class="dealer-phone"><%= phone %></span>
                    </div>
                </div>
            </div>
        </script>

    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script src="https://www.hyundai.ru/assets/js/vendors.js?v=1"></script>
    <script src="https://www.hyundai.ru/assets/js/config_layout.js?v=2"></script>

    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/underscore.js"></script>

    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/js/brandCollection.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>