<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Elantra комплектации и цены. Купить новый Хендай Элантра ");
$APPLICATION->SetTitle("Elantra");
?>


    <script type='text/javascript' src="/media/js/sc_jquery_ui_ipad.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_wwpip_flat.js"></script>
    <link rel="stylesheet" type="text/css" href="/media/css_new/css_style_ru.css"/>
    <script type='text/javascript' src="/media/js/sc_ru_google.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_gt_default.js"></script>
    <script type='text/javascript' src="/media/js_new/spritespin/spritespin.js"></script>

    <script>
        function cubeMotionInit() {}
        function cubeMotionJS() {}
    </script>

    <script type="text/javascript" src="/media/js/wcm.consumption.js"></script>

    <link rel="stylesheet" type="text/css" href="/media/css_new/styles_RU_.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_EL.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_spritespin.css"/>
    <script type="text/javascript" src="/media/js_new/pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="/media/js_new/pip_flat_EL.js"></script>

    <style>
        /* parallax bg */
        .parallax0 {background:url('/media/images/flat/EL/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}/* dec 29 15 */
        .parallax1 {background:url('/media/images/flat/EL/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}/* 2015-07-31 */
        .parallax2 {background:url('/media/images/flat/EL/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax3 {background:url('/media/images/flat/EL/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax4 {background:url('/media/images/flat/EL/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax5 {background:url('/media/images/flat/EL/elements/parallax_6.jpg') no-repeat fixed 50% 50% #fff;}

        body.mobile .parallax { height:450px;}
        body.mobile .parallax1 {background:url('/media/images/flat/EL/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}/* dec 29 15 */
        body.mobile .parallax1 {background:url('/media/images/flat/EL/elements/parallax_2.jpg') center top no-repeat #e3e3e3;}/* 2015-07-31 */
        body.mobile .parallax2 {background:url('/media/images/flat/EL/elements/parallax_3.jpg') center top no-repeat #fff;}
        body.mobile .parallax3 {background:url('/media/images/flat/EL/elements/parallax_4.jpg') center top no-repeat #fff;}
        body.mobile .parallax4 {background:url('/media/images/flat/EL/elements/parallax_5.jpg') center top no-repeat #fff;}
        body.mobile .parallax5 {background:url('/media/images/flat/EL/elements/parallax_6.jpg') center top no-repeat #fff;}
    </style>

    <div class="wrap" id="wrap">


        <!--

        ELANTRA LANDING; BASED ON SOLARIS REDESIGN TEMPLATE

        -->

        <div class="gallery-view-wrap">
            <div class="gallery-view-holder">
                <div class="gallery-view-slider">
                    <ul></ul>
                </div>
                <div class="topline">
                    <img src="/media/images/flat/EL/elements/logo-white.png">
                    <div class="pagination">
                        <span class="prev"></span>
                        <span class="count"></span>
                        <span class="next"></span>
                    </div>
                    <a class="dl-img" href="#" target="_blank">Скачать</a>
                    <a class="view-close" href="#"></a>
                </div>
            </div>
        </div>

        <div class="videoPopup">
            <div class="videoContainer">
                <a class="closeButton" href="#" title="Закрыть">&times;</a>
                <iframe class="videoFrame" width="100%" height="" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="container" style="margin-top: 0;">
            <div class="cubebox" id="cubebox">
                <div class="cubelist">
                    <div class="items">
                        <div class="item">
                            <div class="item_wrap">
                                <div class="main mkv">
                                    <div class="title">
                                        <img src="/media/images/flat/EL/elements/logo.png" title="Elantra" alt="Эмблема Elantra">
                                        <span>В центре сюжета</span>
                                    </div>
                                    <div class="title-price">
                                        <!-- 								от  909 900  <span class="rouble">p</span> -->
                                        <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                        <? profit_to_url($APPLICATION->GetCurPage()); ?>
                                        <a href="/start?model=elantra" class="title-price-notice">В кредит от 8 000 ₽ / месяц**</a>
                                    </div>

                                    <a href="/offer/" class="btn-flat">Все предложения</a>
                                    <div class="title-list">
                                        <ul>
                                            <li>Экономный расход<br><strong>6.6 л на 100 км<span class="add-blue-color">*</span></strong></li>
                                            <li>Макс. мощность<br><strong>149,6 л.с.</strong></li>
                                        </ul>
                                        <ul>
                                            <li>До <strong>7 подушек</strong><br>безопасности</li>
                                            <li>Большой список<br>опций</li>
                                        </ul>
                                    </div>
                                </div>
                                <img class="info-car-pic" src="/media/images/flat/EL/elements/info_car_pic.png"/>
                                <div class="view-360_wrap">
                                    <img class="progress-last-frame" alt="" src="/media/images/common/transparent.gif"/>
                                    <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                    <div class="spritespin" data-model="elantra"></div>
                                </div>
                                <div class="view-360-color-selector">
                                    <ul>
                                        <li data-title="Marina Blue"		data-color="Marina_Blue"		class="view-360-color-selector__item"><span style="background-color: #135D9E;"></span>Marina Blue</li>
                                        <li data-title="Polar White"		data-color="Polar_White"		class="view-360-color-selector__item"><span style="background-color: #DDDDDD;"></span>Polar White</li>
                                        <li data-title="Fiery Red"			data-color="Fiery_Red"			class="view-360-color-selector__item"><span style="background-color: #B82F32;"></span>Fiery Red</li>
                                        <li data-title="Ice Wine"			data-color="Ice_Wine"			class="view-360-color-selector__item"><span style="background-color: #99978B;"></span>Ice Wine</li>
                                        <li data-title="Iron Gray"			data-color="Iron_Gray"			class="view-360-color-selector__item"><span style="background-color: #63696B;"></span>Iron Gray</li>
                                        <li data-title="Blazing Yellow"		data-color="Blazing_Yellow" 	class="view-360-color-selector__item"><span style="background-color: #BAAA5F;"></span>Blazing Yellow</li>
                                        <li data-title="Moonlight Blue"		data-color="Moonlight_Blue"		class="view-360-color-selector__item"><span style="background-color: #3A4969;"></span>Moonlight Blue</li>
                                        <li data-title="Phantom Black"		data-color="Phantom_Black"		class="view-360-color-selector__item"><span style="background-color: #3C3C3E;"></span>Phantom Black</li>
                                        <li data-title="Phoenix Orange"		data-color="Phoenix_Orange"		class="view-360-color-selector__item"><span style="background-color: #9B371F;"></span>Phoenix Orange</li>
                                        <li data-title="Platinum Silver"	data-color="Platinum_Silver"	class="view-360-color-selector__item"><span style="background-color: #969798;"></span>Platinum Silver</li>
                                        <li data-title="Sparkling Metal"	data-color="Sparkling_Metal"	class="view-360-color-selector__item"><span style="background-color: #4A5154;"></span>Sparkling Metal</li>
                                    </ul>
                                </div>
                                <a class="view-360_toggler" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- new sidemenu -->
            <div class="side-menu">
                <div class="submenu">
                    <ul>
                        <li><span class="highlights" data-href="#contents_highlights">Особенности</span></li><!--
				--><li><span class="video" data-href="#contents_video">Видео</span></li><!--
				--><li><span class="exterior" data-href="#contents_exterior">Экстерьер</span></li><!--
				--><li><span class="interior" data-href="#contents_interior">Интерьер</span></li><!--
				--><li><span class="performance" data-href="#contents_performance">Динамика</span></li><!--
				--><li><span class="safety" data-href="#contents_safety">Безопасность</span></li><!--
				--><li><span class="convenience" data-href="#contents_convenience">Комфорт</span></li>
                        <!-- parser hidden links -->
                        <li><a class="hidden highlights" href="#contents_highlights">Особенности</a></li>
                        <li><a class="hidden video" href="#contents_video">Видео</a></li>
                        <li><a class="hidden exterior" href="#contents_exterior">Экстерьер</a></li>
                        <li><a class="hidden interior" href="#contents_interior">Интерьер</a></li>
                        <li><a class="hidden performance" href="#contents_performance">Динамика</a></li>
                        <li><a class="hidden safety" href="#contents_safety">Безопасность</a></li>
                        <li><a class="hidden convenience" href="#contents_convenience">Комфорт</a></li>
                    </ul>
                </div>
            </div>

            <? offer_filter_auto($APPLICATION->GetCurPage()); ?>

            <!-- new content-togglers -->
            <div id="top-menu" class="top-menu">
                <div class="top-menu__wrap">
                    <div class="information">
                        <div class="cubeitem">
                            <ul>
                                <li class="on"><a class="main-toggler main-toggler__explore" href="#" data-href="#content-type__explore" title="Обзор">ОБЗОР</a></li><!--
					 --><li><a class="main-toggler main-toggler__specs" href="#" data-href="#content-type__specs" title="Характеристики">ХАРАКТЕРИСТИКИ</a></li><!--
					 --><li><a class="main-toggler main-toggler__gallery" href="#" data-href="#content-type__gallery" title="Галерея">ГАЛЕРЕЯ</a></li><!--
					 --><li><a class="configurator" href="http://www.hyundai.ru/configurator" target="_blank" title="Цены комплектации">ЦЕНЫ И КОНФИГУРАЦИИ</a></li><!--
					 --><li class="broshure-item" title="Брошюра"><a data-gtm-havas-model="elantra" href="#" data-model="Elantra" for="brochures_request" class="zing_form_toggler broshure" target="_blank">БРОШЮРА</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- content -->
            <div class="content-type content-type__explore on" >

                <div id="contents_highlights" class="contents_highlights pip">
                    <div class="parallax parallax0"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ОСОБЕННОСТИ</h2>
                                <div class="text1">Дизайн, пробуждающий эмоции</div>
                                <div class="text2">Больше динамики и комфорта для тех, кто не боится перемен. Все, что Вы ждете от современного автомобиля, воплощено в новом Hyundai Elantra.
                                </div>
                            </div>
                            <div class="robust_on_style">
                                <div class="highlights_thumbs">
                                    <div class="list">
                                        <ul>
                                            <li class="thumb1 front">
                                                <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_1.jpg" data-url="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_1.jpg" alt="Европейский стиль" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Элегантный стиль</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb2 side">
                                                <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_2.jpg" data-url="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_2.jpg" alt="Безопасный" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Бескомпромиссная безопасность</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb3 safe">
                                                <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_3.jpg" data-url="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_3.jpg" alt="Комфортный" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Комфортный</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="view">
                                        <ul>
                                            <li class="thumb1 front">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_popup_1.jpg" data-url="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_popup_1.jpg" width="623" height="306" alt="Европейский стиль"></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Элегантный стиль</strong>
                                                        Изящный и элегантный седан Elantra создан с помощью проверенных временем европейских технологий.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumb2 side">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_popup_2.jpg" data-url="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_popup_3.jpg" width="623" height="306" alt="Безопасный"></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Бескомпромиссная безопасность</strong>
                                                        В новом седане Elantra установлена современная система безопасности, уменьшающая возможные риски на максимальном уровне.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumb3 safe">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_popup_3.jpg" data-url="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_popup_3.jpg" width="623" height="306" alt="Комфортный"></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Комфортный</strong>
                                                        Дизайн салона разрабатывался с помощью новейших технологий и использованием высококачественных материалов.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main_wrap">
                            <div class="highlight_twin clearfix">
                                <div class="left">
                                    <div class="subject">
                                        <h3>Фактор успеха –<br/>сталь от Hyundai</h3>
                                        <p>
                                            Каждая деталь создается с расчетом на долгую службу. Мы создали собственную марку особо высокопрочной стали Hyundai. Усиленный каркас - управляемость, безопасность, надежность.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_4.jpg" width="" height="" alt="Совершенные технологии" />
                                    </div>
                                </div>
                                <div class="mid">
                                    <div class="subject">
                                        <h3>Больше места и&nbsp;возможностей</h3>
                                        <p>
                                            Elantra обладает вместительным грузовым отсеком, объем которого составляет 458 л, что позволяет водителям лучше использовать внутреннее пространство.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_5.jpg" width="" height="" alt="Больше места и возможностей" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="subject">
                                        <h3>6–ти ступенчатая коробка передач</h3>
                                        <p>
                                            6 передач — это лучше, чем пять,
                                            особенно, если 6-ступенчатая коробка
                                            более компактная, легкая, плавная и
                                            тихая.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="http://www.hyundai.ru/media/images/flat/EL/elements/highlights_6.jpg" width="" height="" alt="6-ступенчатая коробка передач" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contents_video" class="contents_video pip">
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ВИДЕОРОЛИКИ</h2>
                            </div>
                        </div>
                        <div class="list_wrap_offset">
                            <div class="list_wrap_offset2">
                                <div class="list_wrap">
                                    <ul class="list clearfix">
                                        <li class="list-item child-1"><a class="list-item__link video_link" href="#" data-src="XI7cvJa2CJM"></a></li>
                                        <li class="list-item child-2"><a class="list-item__link video_link" href="#" data-src="Qx0d3ImQcjQ"></a></li>
                                        <li class="list-item child-3"><a class="list-item__link video_link" href="#" data-src="PzXNL9liPzc"></a></li>
                                        <li class="list-item child-4"><a class="list-item__link video_link" href="#" data-src="tJteNAXlBrU"></a></li>
                                        <li class="list-item child-5"><a class="list-item__link video_link" href="#" data-src="D16huvG71GI"></a></li>
                                        <li class="list-item child-6"><a class="list-item__link video_link" href="#" data-src="ONEsf9FLoN0"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="contents_exterior" class="contents_exterior pip">
                    <div class="parallax parallax1"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ЭКСТЕРЬЕР</h2>
                                <div class="text1">Элегантный профиль</div>
                                <div class="text2">Если, взглянув на фото Hyundai Elantra, Вы приходите в восторг от характерных боковых линий, мускулистых колесных арок и низкопрофильной крыши — не удивляйтесь: это происходит со всеми.
                                </div>
                            </div>
                        </div>
                        <div class="view_wrap">
                            <div class="pos">
                                <ul class="view">
                                    <li class="front">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/EL/elements/angle_1.png" alt="Экстерьер Hyundai Elantra" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 right"><a href="#"><span>more</span></a><span class="txt"><span>Фары головного света</span></span></div>
                                                    <div class="plus plus2 right"><a href="#"><span>more</span></a><span class="txt"><span>Решетка радиатора</span></span></div>
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/EL/elements/exterior_popup_1.jpg" width="470" height="470" alt="Фары головного света" /></div>
                                                        <div class="txt">
                                                            <strong>Фары головного света</strong>
                                                            Ксеноновые фары ближнего света с корректором улучшают качество поездки и делают дорогу безопасной, даже на участках с низким уровнем видимости.
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/EL/elements/exterior_popup_2.jpg" width="470" height="470" alt="Решетка радиатора" /></div>
                                                        <div class="txt">
                                                            <strong>Решетка радиатора</strong>
                                                            Эффектная и мощная решетка радиатора придает авто впечатляющий вид.
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="rear">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/EL/elements/angle_2.png" alt="Экстерьер Hyundai Elantra" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Задние фонари комбинированного типа</span></span></div>
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/EL/elements/exterior_popup_5.jpg" width="470" height="470" alt="Задние фонари комбинированного типа" /></div>
                                                        <div class="txt">
                                                            <strong>Задние фонари комбинированного типа</strong>
                                                            Задние фонари плавно обтекают изгибы кузова Elantra и подчеркивают современный образ модели. При экстренном торможении автоматически загораются сигналы «аварийной остановки», дополнительно предупреждая следующих за вами водителей.
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="list_wrap">
                            <ul class="list">
                                <li class="front on"><a href="#"><span class="progress">&nbsp;</span><span class="txt">Вид спереди</span></a></li>
                                <li class="rear"><a href="#"><span class="progress">&nbsp;</span><span class="txt">Вид сзади</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="carousel-wrap exterior-morelist">
                        <div class="carousel exterior-morelist">
                            <div class="carousel-holder">
                                <div class="carousel-slider">
                                    <div class="carousel-item morelist alive">
                                        <ul class="clearfix">
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Противотуманные фары" src="/media/images/flat/EL/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Противотуманные фары</strong>
											Тщательно продуманные до последней детали передние противотуманные фары изящно размещены в нижней части бампера автомобиля для максимально эффективной работы в условиях тумана.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Легкосплавные диски" src="/media/images/flat/EL/elements/exterior_2.jpg"/></span>
										<span class="description">
											<strong>Легкосплавные диски</strong>
											В варианты комплектации новой Elantra входят различные диски с выразительным и привлекательным дизайном. В продаже есть автомобили как со стандартными 15-дюймовыми стальными дисками, так и с одним из двух типов легкосплавных дисков, включая элегантные 16- и 17-дюймовые.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Хромированные молдинги" src="/media/images/flat/EL/elements/exterior_3.jpg"/></span>
										<span class="description">
											<strong>Хромированные молдинги</strong>
											Дополните образ автомобиля элегантной деталью — молдингами с высококачественным хромированием, которые прекрасно сочетаются с изящными линиями кузова.
										</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-prev"></div>
                                <div class="carousel-next"></div>
                            </div>
                        </div>
                        <div class="carousel-paginator">
                            <ul></ul>
                        </div>
                    </div>
                </div>
                <div id="contents_interior" class="contents_interior pip">
                    <div class="parallax parallax2"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ИНТЕРЬЕР</h2>
                                <div class="text1">Манящий комфорт. Почувствуйте себя<br>как дома.</div>
                                <div class="text2">Просторный, комфортный и благоустроенный салон седана устанавливает новые стандарты: от общей концепции до отдельных деталей.</div>
                            </div>
                        </div>
                        <div class="section2">
                            <div class="scene_wrap">
                                <div class="scene_offset">
                                    <div class="offset2">
                                        <div class="scene_cut">
                                            <div class="scene1">
                                                <div class="img">
                                                    <img src="/media/images/flat/EL/elements/view_1.jpg" width="1050" height="540" alt="Фото интерьера салона Элантра" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1"><a href="#">12</a></div>
                                                        <div class="plus plus2"><a href="#">13</a></div>
                                                        <!-- 												<div class="plus plus3"><a href="#">13</a></div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scene2">
                                                <div class="img">
                                                    <img src="/media/images/flat/EL/elements/view_2.jpg" width="1050" height="540" alt="Фото интерьера салона Элантра" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1"><a href="#">14</a></div>
                                                        <div class="plus plus2"><a href="#">15</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details">
                                    <!--
                                                                <div class="pop_11">
                                                                    <div class="details_txt">
                                                                        <strong>Функциональный подлокотник</strong>
                                                                        <p>Функциональный подлокотник имеет вместительный ящик для хранения для всего, от монет до безделушек.</p>
                                                                    </div>
                                                                    <img src="/media/images/flat/EL/elements/interior_popup_2.jpg" width="525" height="540" alt="Напольная консоль" />
                                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                </div>
                                    -->
                                    <div class="pop_12">
                                        <div class="details_txt">
                                            <strong>Панель приборов Supervision с TFT экраном 4.3</strong>
                                            <p>Маленькое чудо электронной техники, панель приборов обеспечивает беспрецедентно чистое и ясное отображение информации.</p>
                                        </div>
                                        <img src="/media/images/flat/EL/elements/interior_popup_3.jpg" width="525" height="540" alt="Панель приборов Supervision с TFT экраном 4.3" />
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                    </div>

                                    <div class="pop_13">
                                        <div class="details_txt">
                                            <strong>Климат-контроль</strong>
                                            <p>Водитель и передний пассажир могут установить желаемые температурные режимы, которые удовлетворяют каждого.</p>
                                        </div>
                                        <img src="/media/images/flat/EL/elements/interior_popup_1.jpg" width="525" height="540" alt="Климат-контроль" />
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                    </div>

                                    <!--
                                                                <div class="pop_14">
                                                                    <div class="details_txt">
                                                                        <strong>Багажное отделение</strong>
                                                                        <p>К вашим услугам багажное отделение объемом 534 + 48 литров.
                                                                            Дорожные сумки, чемоданы, спортивные принадлежности —
                                                                            в основное багажное отделение и расположенный под ним
                                                                            дополнительный отсек Santa Fe поместится абсолютно все.
                                                                        </p>
                                                                    </div>
                                                                    <img src="/media/images/flat/EL/elements/interior_popup_4.jpg" width="525" height="540" alt="" />
                                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                </div>
                                                                <div class="pop_15">
                                                                    <div class="details_txt">
                                                                        <strong>Багажное отделение</strong>
                                                                        <p>К вашим услугам багажное отделение объемом 534 + 48 литров.
                                                                            Дорожные сумки, чемоданы, спортивные принадлежности —
                                                                            в основное багажное отделение и расположенный под ним
                                                                            дополнительный отсек Santa Fe поместится абсолютно все.
                                                                        </p>
                                                                    </div>
                                                                    <img src="/media/images/flat/EL/elements/interior_popup_4.jpg" width="525" height="540" alt="" />
                                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                </div>
                                    -->
                                </div>
                                <div class="scene-controls">
                                    <a href="#" class="scene-prev" role="prev"><div></div></a>
                                    <div class="paginator"><span></span></div>
                                    <a href="#" class="scene-next" role="next"><div></div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-wrap interior-morelist">
                        <div class="carousel interior-morelist">
                            <div class="carousel-holder">
                                <div class="carousel-slider">
                                    <div class="carousel-item morelist alive">
                                        <ul class="clearfix">
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Самозатемняющееся внутрисалонное зеркало" src="/media/images/flat/EL/elements/feature_1.jpg"/></span>
				                        <span class="description">
				                            <strong>Самозатемняющееся внутрисалонное зеркало</strong>
											Внутрисалонное зеркало заднего вида с функцией самозатемнения автономно предотвратит ослепление водителя фарами едущих сзади автомобилей.
				                        </span>
                                            </li>

                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Воздуховоды для задних пассажиров" src="/media/images/flat/EL/elements/feature_2.jpg"/></span>
										<span class="description">
											<strong>Воздуховоды для задних пассажиров</strong>
											Воздуховоды климатической системы для заднего ряда сидений позволяют обеспечить комфортное путешествие не только пассажирам первого, но и второго рядов.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Память настроек водительского сиденья" src="/media/images/flat/EL/elements/feature_3.jpg"/></span>
				                        <span class="description">
				                            <strong>Память настроек водительского сиденья</strong>
											Система запоминает выбранные Вами или другими водителями настройки водительского сиденья (до двух положений). Благодаря этому, сев за руль после предыдущего водителя, с помощью нажатия одной кнопки Вы сможете восстановить положение сиденья, настроенное под Вас.
				                        </span>
                                            </li>
                                        </ul>
                                    </div><!--

							<div class="carousel-item morelist">
								<ul class="clearfix">
				                    <li>
				                        <span class="img"><img width="306" height="132" alt="Охлаждаемый перчаточный ящик" src="/media/images/flat/EL/elements/interior_4.jpg"/></span>
				                        <span class="description">
				                            <strong>Кейс для солнцезащитных очков</strong>
											Удобный очечник позволит не потерять и не повредить дорогие очки.
				                    </li>
				                    <li>
				                        <span class="img"><img width="306" height="132" alt="Карманы в спинках сидений" src="/media/images/flat/EL/elements/interior_5.jpg"/></span>
				                        <span class="description">
				                            <strong>Карманы в спинках сидений</strong>
											В удобных карманах в спинках передних сидений удобно хранить карты, документы и другие предметы.
				                    </li>
								</ul>
							</div>
-->
                                </div>
                                <div class="carousel-prev"></div>
                                <div class="carousel-next"></div>
                            </div>
                        </div>
                        <div class="carousel-paginator">
                            <ul></ul>
                        </div>
                    </div>
                </div>
                <div id="contents_performance" class="contents_performance pip">
                    <div class="parallax parallax3"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ДИНАМИКА</h2>
                                <div class="text1">Превосходная экономичность</div>
                                <div class="text2">Каждый километр, каждый поворот приносят удовольствие благодаря комфортному, плавному управлению автомобилем. Мощные двигатели всегда делают вождение по-настоящему приятным, где бы вы ни оказались.
                                </div>
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                                <li class="on"><a href="#">1.6 MPI</a></li><!-- no space
						--><li><a href="#">2.0 MPI</a></li>
                            </ul>
                        </div>
                        <div class="engine_list">
                            <ul>
                                <li>
                                    <div class="engine1">1.6 MPI</div>
                                    <p>
                                        Цель Hyundai &mdash; стать мировым лидером в эффективном использовании топлива, и этот двигатель &mdash; лучшее тому доказательство. Gamma&nbsp;1.6 л выдает 128 л.с. при 6300 об/мин.
                                    </p>
                                    <div class="graph">
                                        <div class="pos">
                                            <img src="/media/images/flat/EL/elements/diagram_1.jpg" width="470" height="480" alt="График показателей двигателя 1.6 MPI" /><br>
                                            <div class="text"><img src="/media/images/flat/EL/elements/diagram_1_1.png" width="470" height="480" alt="График показателей двигателя 1.6 MPI" /></div>
                                        </div>
                                    </div>
                                    <div class="max">
                                        <dl class="max_power">
                                            <dt></dt>
                                            <dd><strong>128</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                        </dl>
                                        <dl class="max_toque">
                                            <dt></dt>
                                            <dd><strong>154.6</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                        </dl>
                                    </div>
                                </li>
                                <li>
                                    <div class="engine1">2.0 MPI</div>
                                    <p>
                                        Усовершенствованный двигатель, позволяет выбрать нужный уровень мощности. Все двигатели для Elantra имеют 6–ти ступенчатую коробку передач.
                                    </p>
                                    <div class="graph">
                                        <div class="pos">
                                            <img src="/media/images/flat/EL/elements/diagram_2.jpg" class="lazy" width="470" height="480" alt="График показателей двигателя 2.0 MPI" /><br>
                                            <div class="text"><img src="/media/images/flat/EL/elements/diagram_2_2.png" class="lazy" width="470" height="480" alt="График показателей двигателя 2.0 MPI" /></div>
                                        </div>
                                    </div>
                                    <div class="max">
                                        <dl class="max_power">
                                            <dt></dt>
                                            <dd><strong>149.6</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                        </dl>
                                        <dl class="max_toque">
                                            <dt></dt>
                                            <dd><strong>192</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                        </dl>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="morelist">
                        <ul class="clearfix">
                            <li>
						<span class="description">
							<strong>6-ступенчатая АКПП</strong>
							Шесть ступеней лучше пяти, поскольку дополнительная ступень, предусмотренная в автоматической коробке передач, способствует экономии топлива. Шестиступенчатая автоматическая трансмиссия Elantra специально разработана для небольших автомобилей.
						</span>
                                <div class="btm_img"><img class="lazy" width="525" height="465" alt="Автоматическая коробка переключения передач" src="/media/images/common/transparent.gif" data-original="/media/images/flat/EL/elements/performance_1.jpg" /></div>
                            </li>
                            <li>
						<span class="description">
							<strong>6-ступенчатая МКПП</strong>
							Экономичная, бесшумная и надежная шестиступенчатая трансмиссия предназначена для работы в течение долгих лет без поломок.
						</span>
                                <div class="btm_img"><img class="lazy" width="525" height="465" alt="Механическая коробка переключения передач" src="/media/images/common/transparent.gif" data-original="/media/images/flat/EL/elements/performance_2.jpg" /></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="contents_safety" class="contents_safety pip">
                    <div class="parallax parallax4"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">БЕЗОПАСНОСТЬ</h2>
                                <div class="text1">Всесторонняя<br>защита</div>
                                <div class="text2">В седане Elantra предусмотрены всевозможные меры безопасности, сводящие к минимуму риск получения серьезных травм.</div>
                            </div>
                        </div>
                        <div class="scene_wrap">
                            <div class="scene">
                                <img class="car" src="/media/images/flat/EL/elements/safety_1.jpg" width="940" height="" title="" alt="Электронная система стабилизации курсовой устойчивости ESС">
                            </div>
                            <div class="text_wrap">
						<span class="scene_text">
						<strong>Электронная система стабилизации курсовой устойчивости ESС</strong>
						ESC постоянно следит за курсовой устойчивостью автомобиля и сцеплением шин с дорогой. Если система обнаружит, что автомобилю угрожает сход с траектории и водитель рискует потерять управление, то она автоматически вмешается, применяя торможение на отдельных колесах для предотвращения потери курсовой устойчивости.
						</span>
                            </div>
                        </div>

                        <div class="safety_slider-wrap">
                            <ul class="safety_slider">
                                <li class="safety_slider-item alive" class="alive">
                                    <img class="lazy" src="/media/images/common/transparent.gif" data-original="/media/images/flat/EL/elements/safety_slider_1.jpg" width="1920" height="540" alt="Сталь от Hyundai">
							<span><strong>Фактор успеха – сталь от Hyundai</strong>
							Каждая деталь создается с расчетом на долгую службу. Высокопрочная сталь производится на нашем экологически безопасном заводе и соответствует высочайшим стандартам. Среди преимуществ следует отметить повышенную прочность, обеспечивающую безопасность водителя и пассажиров, а также продвинутые технологии разработки, которые позволяют свести к минимуму вес и расход топлива.
							</span>
                                </li>
                                <li class="safety_slider-item">
                                    <img src="/media/images/flat/EL/elements/safety_slider_2.jpg" width="1920" height="540" alt="Система помощи при трогании на подъеме (HAC)">
							<span><strong>Система помощи при трогании на подъеме (HAC)</strong>
							Система HAC определяет, когда автомобиль находится на подъеме, и автоматически задействует тормоза для предотвращения опасного откатывания назад.
							</span>
                                </li>
                            </ul>
                            <ul class="safety_slider-paginator">
                                <li class="alive">
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/EL/elements/safety_preview_1.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                                <li>
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/EL/elements/safety_preview_2.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                            </ul>
                            <div class="safety_slider-prev"></div>
                            <div class="safety_slider-next"></div>
                        </div>
                    </div>
                </div>
                <div id="contents_convenience" class="contents_convenience pip">
                    <div class="parallax parallax5"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">КОМФОРТ</h2>
                                <div class="text1">Возможности, от&nbsp;которых нельзя отказаться</div>
                                <div class="text2">Удобство превосходит все ожидания. Усовершенствованная Elantra окружает Вас и Ваших пассажиров необычайным комфортом, которого Вы бы никогда не ожидали от автомобиля.
                                </div>
                            </div>
                        </div>
                        <div class="main_wrap">
                            <ul class="list_wrap">
                                <li class="list list1">
                                    <a href="#">
                                        <strong>Система помощи при парковке</strong>
                                        <img src="/media/images/flat/EL/elements/convenience_1.jpg" width="470" height="250" alt="Система помощи при парковке" />
                                    </a>
                                </li>
                                <li class="list list2">
                                    <a href="#">
                                        <strong>Задние сиденья с подогревом</strong>
                                        <img src="/media/images/flat/EL/elements/convenience_2.jpg" width="470" height="250" alt="Задние сиденья с подогревом" />
                                    </a>
                                </li>
                                <li class="list list3">
                                    <a href="#">
                                        <strong>Электрорегулировка сиденья водителя</strong>
                                        <img src="/media/images/flat/EL/elements/convenience_3.jpg" width="470" height="250" alt="Электрорегулировка сиденья водителя" />
                                    </a>
                                </li>
                                <li class="list list4">
                                    <a href="#">
                                        <strong>Аудиосистема</strong>
                                        <img src="/media/images/flat/EL/elements/convenience_4.jpg" width="470" height="250" alt="Аудиосистема" />
                                    </a>
                                </li>
                            </ul>

                            <div class="convenience__slider-cut">
                                <ul class="view_wrap">
                                    <li class="view view1 alive">
                                        <img src="/media/images/flat/EL/elements/convenience_popup_1.jpg" width="940" height="500" alt="Система помощи при парковке" />
                                        <div class="text">
                                            <strong>Система помощи при парковке</strong>
                                            Система помощи при парковке находит идеальное место для парковки с помощью суперточных ультразвуковых датчиков.
                                        </div>
                                    </li>
                                    <li class="view view2">
                                        <img src="/media/images/flat/EL/elements/convenience_popup_2.jpg" width="940" height="500" alt="Двухступенчатый обогрев сидений" />
                                        <div class="text">
                                            <strong>Двухступенчатый обогрев сидений</strong>
                                            Теплые сиденья подарят вам ощущение комфорта в холодную погоду.
                                        </div>
                                    </li>
                                    <li class="view view3">
                                        <img src="/media/images/flat/EL/elements/convenience_popup_3.jpg" width="940" height="500" alt="Многофункциональное рулевое колесо" />
                                        <div class="text">
                                            <strong>Водительское сиденье с электроприводом</strong>
                                            Задайте нужное положение водительского сиденья с помощью электропривода.
                                        </div>
                                    </li>
                                    <li class="view view4">
                                        <img src="/media/images/flat/EL/elements/convenience_popup_4.jpg" width="940" height="500" alt="Система адаптивного переднего освещения (AFLS)" />
                                        <div class="text">
                                            <strong>Аудиосистема для поклонников музыки</strong>
                                            Высококачественные динамики передают кристально чистое звучание. Меломаны, наслаждайтесь!
                                        </div>
                                    </li>
                                </ul>
                                <div class="close"><a href="#">Закрыть</a></div>
                                <div class="slide_nav">
                                    <div class="slider-prev"></div>
                                    <span class="paginator"></span>
                                    <div class="slider-next"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-wrap convenience-morelist">
                        <div class="carousel convenience-morelist">
                            <div class="carousel-holder">
                                <div class="carousel-slider">
                                    <div class="carousel-item morelist alive">
                                        <ul class="clearfix">
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Центральный подлокотник" src="/media/images/flat/EL/elements/down_1.jpg"/></span>
										<span class="description">
											<strong>Центральный подлокотник</strong>
											Центральный подлокотник с подстаканниками и нишей для хранения мелочей. Удивительно удобно!
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Подогреваемое рулевое колесо" src="/media/images/flat/EL/elements/convenience_6.jpg"/></span>
										<span class="description">
											<strong>Подогреваемое рулевое колесо</strong>
											Разве это не счастье — положить замерзшие руки на теплое рулевое колесо автомобиля холодным зимним днем! Жители холодных регионов оценят эту новую функцию особенно высоко.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="132" alt="Датчик дождя" src="/media/images/flat/EL/elements/convenience_7.jpg"/></span>
										<span class="description">
											<strong>Датчик дождя</strong>
											Стеклоочистители больше не ждут Вашей команды. Датчик автоматически включает их при обнаружении дождя, улучшая видимость и делая поездку еще более комфортной.
										</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="carousel-prev"></div>
                                <div class="carousel-next"></div>
                            </div>
                        </div>
                        <div class="carousel-paginator">
                            <ul></ul>
                        </div>
                    </div>

                </div>
            </div> <!-- //content-type__explore -->
            <div class="content-type content-type__specs">
                <div id="contents_specs" class="contents_specs pip">
                    <div class="specs_wrap">
                        <div class="title_wrap clearfix">
                            <h2 class="title_wrap_h2">Технические характеристики Hyundai Elantra</h2>
                            <a href="#" class="open-all isWillClose">Свернуть все</a>
                        </div>
                        <div class="specs-listing_wrap">
                            <ul class="specs-listing">
                                <li class="head-line">
                                    <table>
                                        <tr>
                                            <th>Модификации</th>
                                            <td>1.6 - 6MT</td>
                                            <td>1.6 - 6AT</td>
                                            <td>2.0 - 6MT</td>
                                            <td>2.0 - 6AT</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div class="opened">Двигатель</div>
                                    <table>
                                        <tr>
                                            <th>Мощность*</th>
                                            <td>128 л.с.</td>
                                            <td>128 л.с.</td>
                                            <td>149.6 л.с.</td>
                                            <td>149.6 л.с.</td>
                                        </tr>
                                        <tr>
                                            <th>Объем двигателя</th>
                                            <td>1.6 л</td>
                                            <td>1.6 л</td>
                                            <td>2.0 л</td>
                                            <td>2.0 л</td>
                                        </tr>
                                        <tr>
                                            <th>Двигатель</th>
                                            <td>Gamma 1.6 D-CVVT</td>
                                            <td>Gamma 1.6 D-CVVT</td>
                                            <td>Nu 2.0 D-CVVT</td>
                                            <td>Nu 2.0 D-CVVT</td>
                                        </tr>
                                        <tr>
                                            <th>Объем, см3</th>
                                            <td>1591</td>
                                            <td>1591</td>
                                            <td>1999</td>
                                            <td>1999</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. мощность, кВт</th>
                                            <td>93.8</td>
                                            <td>93.8</td>
                                            <td>110</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. мощность, л.с.</th>
                                            <td>128 л.с.</td>
                                            <td>128 л.с.</td>
                                            <td>149.6 л.с.</td>
                                            <td>149.6 л.с.</td>
                                        </tr>
                                        <tr>
                                            <th>Топливный бак</th>
                                            <td>50</td>
                                            <td>50</td>
                                            <td>50</td>
                                            <td>50</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Динамика</div>
                                    <table>
                                        <tr>
                                            <th>Динамические характеристики</th>
                                            <td>6МКПП</td>
                                            <td>6АКПП</td>
                                            <td>6МКПП</td>
                                            <td>6АКПП</td>
                                        </tr>
                                        <tr>
                                            <th>Тип трансмиссии</th>
                                            <td>Механическая</td>
                                            <td>Гидромеханическая</td>
                                            <td>Механическая</td>
                                            <td>Гидромеханическая</td>
                                        </tr>
                                        <tr>
                                            <th>Ускорение 0-100 км/ч, сек </th>
                                            <td>10.1</td>
                                            <td>11.6</td>
                                            <td>8.8</td>
                                            <td>9.9</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. скорость, км/ч </th>
                                            <td>200</td>
                                            <td>195</td>
                                            <td>205</td>
                                            <td>202</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Расход топлива</div>
                                    <table>
                                        <tr>
                                            <th>Городской цикл, л/100 км*</th>
                                            <td>8.9</td>
                                            <td>9.5</td>
                                            <td>9.8</td>
                                            <td>10.1</td>
                                        </tr>
                                        <tr>
                                            <th>Загородный цикл, л/100 км*</th>
                                            <td>5.2</td>
                                            <td>5.4</td>
                                            <td>5.6</td>
                                            <td>5.5</td>
                                        </tr>
                                        <tr>
                                            <th>Смешанный цикл, л/100 км*</th>
                                            <td>6.6</td>
                                            <td>6.9</td>
                                            <td>7.1</td>
                                            <td>7.2</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2<br>в городском цикле, г/км*</th>
                                            <td>207</td>
                                            <td>221</td>
                                            <td>228</td>
                                            <td>235</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2<br>в загородном цикле, г/км*</th>
                                            <td>121</td>
                                            <td>126</td>
                                            <td>129</td>
                                            <td>128</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2<br>в смешанном цикле, г/км*</th>
                                            <td>153</td>
                                            <td>161</td>
                                            <td>166</td>
                                            <td>167</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Подвеска</div>
                                    <table>
                                        <tr>
                                            <th>Колесная база</th>
                                            <td>2700</td>
                                            <td>2700</td>
                                            <td>2700</td>
                                            <td>2700</td>
                                        </tr>
                                        <tr>
                                            <th>Минимальный дорожный<br>просвет, мм*</th>
                                            <td>150</td>
                                            <td>150</td>
                                            <td>150</td>
                                            <td>150</td>
                                        </tr>
                                        <tr>
                                            <th>Передняя колея</th>
                                            <td> 1563 / 1555 / 1549<br>(шины 15" / 16" / 17") </td>
                                            <td> 1563 / 1555 / 1549<br>(шины 15" / 16" / 17") </td>
                                            <td> 1563 / 1555 / 1549<br>(шины 15" / 16" / 17") </td>
                                            <td> 1563 / 1555 / 1549(шины 15" / 16" / 17") </td>
                                        </tr>
                                        <tr>
                                            <th>Задняя колея</th>
                                            <td>1572 / 1564 / 1558<br>(шины 15" / 16" / 17") </td>
                                            <td>1572 / 1564 / 1558<br>(шины 15" / 16" / 17") </td>
                                            <td>1572 / 1564 / 1558<br>(шины 15" / 16" / 17") </td>
                                            <td>1572 / 1564 / 1558<br>(шины 15" / 16" / 17") </td>
                                        </tr>
                                        <tr>
                                            <th>Передний свес</th>
                                            <td>880</td>
                                            <td>880</td>
                                            <td>880</td>
                                            <td>880</td>
                                        </tr>
                                        <tr>
                                            <th>Задний свес</th>
                                            <td>990</td>
                                            <td>990</td>
                                            <td>990</td>
                                            <td>990</td>
                                        </tr>
                                        <tr>
                                            <th>Передняя подвеска</th>
                                            <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                        </tr>
                                        <tr>
                                            <th>Задняя подвеска</th>
                                            <td>Полузависимая, пружинная, с&nbsp;амортизаторами</td>
                                            <td>Полузависимая, пружинная, с&nbsp;амортизаторами</td>
                                            <td>Полузависимая, пружинная, с&nbsp;амортизаторами</td>
                                            <td>Полузависимая, пружинная, с&nbsp;амортизаторами</td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detailedSpecLink">
                        <a href="http://www.hyundai.ru/configurator" target="_blank">Подробные характеристики</a>
                    </div>
                    <div class="spec_message">
                        <div>
                            <span class="add-blue-color">*</span> &mdash; Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа транспортного средства<br>
                            <span class="add-blue-color">**</span> &mdash; Показатели расхода топлива и массы выделяемого CO2 представлены согласно методике испытаний по Правилам ЕЭК ООН №83 и 101<br>
                            <span class="add-blue-color">***</span> &mdash; Согласно сертификату соответствия по Директиве ЕС 92/21/EEC представлено значение межосевого дорожного просвета<br>
                        </div>
                    </div>
                </div>
            </div> <!-- //content-type__specs -->
            <div class="content-type content-type__gallery">
                <div id="contents_gallery" class="contents_gallery pip">
                    <div class="gallery_wrap">
                        <div class="title_wrap clearfix">
                            <h2 class="title_wrap_h2">Фото Hyundai Elantra</h2>
                            <div class="thumbs-toggler">
                                <a href="#" data-type="all" class="alive">Все</a>
                                <a href="#" data-type="exterior">Экстерьер</a>
                                <a href="#" data-type="interior">Интерьер</a>
                            </div>
                        </div>
                        <ul id="all-gallery-items" style="display: none;">
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_1.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_1.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_2.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_2.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_3.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_3.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_4.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_4.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_5.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_5.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_6.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_6.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/EL/gallery_pics/gallery_preview_7.jpg" data-href="/media/images/flat/EL/gallery_pics/gallery_7.jpg"/></li>
                        </ul>
                        <div class="gallery-body">
                            <div class="gallery-list-wrap">
                                <div class="gallery-list-holder">
                                    <div class="gallery-list-slider">
                                        <ul class="clearfix"></ul>
                                    </div>
                                    <div class="slide-prev"></div>
                                    <div class="slide-next"></div>
                                    <div class="slide-paginator">
                                        <ul></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- //content-type_gallery -->
            <div class="prefooter-promo">
                <div class="promo-main">
                    <div class="promo-main_cont">
                        <div class="text-desc">
                            <h2 class="promo-title">Станьте владельцем Elantra уже сегодня</h2>
					<span class="promo-text">
					Выберите ближайший дилерский центр, пройдите
					тест-драйв и станьте владельцем Hyundai Elantra.
					Для вас всегда есть удобные программы
					кредитования и другие предложения Drive Hyundai.
					</span>
                            <a href="javascript:void(0)" class="btn-flat zing_form_toggler_spec" for="testdrive">Пройти тест-драйв</a>
                        </div>
                        <img src="/media/images/flat/EL/elements/promo_pic.png" alt="Тест драйв Hyundai Elantra">
                    </div>
                    <div class="promo-grid">
                        <ul class="clearfix">
                            <li><a href="http://www.hyundai.ru/configurator" target="_blank"><span>Конфигуратор Elantra</span></a></li>
                            <!-- 					<li><a href="/find-dealer"><span>Найти дилера</span></a></li> -->
                            <!-- 					<li><a target="_blank" href="/media/downloads/accessoires/Elantra_Acc.pdf"><span>Каталог аксессуаров</span></a></li> -->
                            <li><a href="http://www.hyundai.ru/configurator" target="_blank"><span>Рассчитать кредит</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="promo-slider_wrap">
                    <div class="promo-slider_cut">
                        <ul class="promo-slider">

                            <li>
                                <a href="/Tucson/" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Tucson_57257739f51bbc7f.png" alt="Tucson">
                                    <span class="model">Tucson</span>
                                    <span class="price">от 1 505 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/SantaFe/" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Santa Fe Premium_22757739f44cbfa3.png" alt="Santa Fe">
                                    <span class="model">Santa Fe</span>
                                    <span class="price">от 1 794 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/GrandSantaFe/" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Grand Santa Fe_76357f794c7e076a.png" alt="Grand Santa Fe">
                                    <span class="model">Grand Santa Fe</span>
                                    <span class="price">от 2 424 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/H-1/" class="promo-slider-link">
                                    <img src="/media/images/carmodels/H-1_89857739f5e11f41.png" alt="H-1">
                                    <span class="model">H-1</span>
                                    <span class="price">от 1 949 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="slider-prev"></div>
                    <div class="slider-next"></div>
                </div>
            </div>
<!-- 
            <div class="disc-block" style="background: #FFF;padding-bottom: 20px;">
                <p class="dicslamer-casco" style="max-width: 980px;margin: 0 auto;"><sup>1</sup> Полис КАСКО на безвозмездной основе оформляется на срок 1 (один) год в СПАО «Ингосстрах», ПАО «Росгосстрах» и СК «ВСК» при покупке Нового Hyundai Elantra в кредит по программе СТАРТ. Указанная информация носит справочный характер и не является публичной офертой. Условия и тарифы могут быть изменены СПАО «Ингосстрах», ПАО «Росгосстрах» и СК «ВСК» в одностороннем порядке. Предложение действует до 31.12.2017г.</p>
            </div>
--> 

        </div>

    </div> <!-- // container -->

    <script type='text/javascript'>

        // can't delete this.
        // sc_wwpip_flat.js conflict

        var cubeList = new Array();
        cubeList = ["home", "gallery", "mostlike"];
        function cubeStart(va) {}
    </script>

    <!--RuTarget-->
    <script type="text/javascript">
        var _rutarget=window._rutarget||[];
        _rutarget.push({
            'event':'showOffer',
            'sku':'Elantra',
            'nosync':'true'});
    </script>
    <!--/RuTarget-->

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>