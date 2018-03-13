<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("i40-Wagon");
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
    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_i40w.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_spritespin.css"/>
    <script type="text/javascript" src="/media/js_new/pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="/media/js_new/pip_flat_i40w.js"></script>
    <!-- <script type="text/javascript" src="/media/js_new/pip_flat_SL_com_jspPane.js"></script> -->

    <style>
        /* parallax bg */
        .parallax0 {background:url('/media/images/flat/i40w/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}/* dec 29 15 */
        .parallax1 {background:url('/media/images/flat/i40w/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}/* 2015-07-31 */
        .parallax2 {background:url('/media/images/flat/i40w/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax3 {background:url('/media/images/flat/i40w/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax4 {background:url('/media/images/flat/i40w/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax5 {background:url('/media/images/flat/i40w/elements/parallax_6.jpg') no-repeat fixed 50% 50% #fff;}

        body.mobile .parallax { height:450px;}
        body.mobile .parallax1 {background:url('/media/images/flat/i40w/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}/* dec 29 15 */
        body.mobile .parallax1 {background:url('/media/images/flat/i40w/elements/parallax_2.jpg') center top no-repeat #e3e3e3;}/* 2015-07-31 */
        body.mobile .parallax2 {background:url('/media/images/flat/i40w/elements/parallax_3.jpg') center top no-repeat #fff;}
        body.mobile .parallax3 {background:url('/media/images/flat/i40w/elements/parallax_4.jpg') center top no-repeat #fff;}
        body.mobile .parallax4 {background:url('/media/images/flat/i40w/elements/parallax_5.jpg') center top no-repeat #fff;}
        body.mobile .parallax5 {background:url('/media/images/flat/i40w/elements/parallax_6.jpg') center top no-repeat #fff;}
    </style>

    <div class="wrap" id="wrap">


        <!--

        i40 WAGON LANDING; BASED ON SOLARIS REDESIGN TEMPLATE

        -->

        <div class="gallery-view-wrap">
            <div class="gallery-view-holder">
                <div class="gallery-view-slider">
                    <ul></ul>
                </div>
                <div class="topline">
                    <img src="/media/images/flat/i40w/elements/car-logo-white.png">
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

        <div class="container">
            <div class="cubebox" id="cubebox">
                <div class="cubelist">
                    <div class="items">
                        <div class="item">
                            <div class="item_wrap">
                                <div class="main mkv">
                                    <div class="title">
                                        <img src="/media/images/flat/i40w/elements/car-logo.png" title="i40 универсал" alt="Эмблема i40 универсал">
                                        <span>Сила нового мышления</span>
                                    </div>
                                    <div class="title-price">
                                        <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                        <? profit_to_url($APPLICATION->GetCurPage()); ?>
                                    </div>
                                    <?=model_credit("20 294"); ?>
                                    <a href="/all-offers/i40_wagon" class="btn-flat">Все предложения</a>
                                    <div class="title-list">
                                        <ul>
                                            <li>Экономный расход<br><strong>4.7 л на 100 км*</strong></li>
                                            <li>Макс. мощность<br><strong>149.6 л.с.</strong></li>
                                        </ul>
                                        <ul>
                                            <li>До <strong>9 подушек</strong><br>безопасности</li>
                                            <li>Большой список<br>опций</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="view-360_wrap">
                                    <img class="progress-last-frame" alt="" src=""/>
                                    <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                    <div class="spritespin" data-model="i40w"></div>
                                </div>
                                <a class="view-360_toggler" href="#"></a>
                                <img src="/media/images/flat/i40w/elements/info_car_pic.png" class="info-car-pic"/>
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
            <!-- new content-togglers -->
            <div id="top-menu" class="top-menu">
                <div class="top-menu__wrap">
                    <div class="information">
                        <div class="cubeitem">
                            <ul>
                                <li class="on"><a class="main-toggler main-toggler__explore" href="#" data-href="#content-type__explore" title="Обзор">ОБЗОР</a></li><!--
					 --><li><a class="main-toggler main-toggler__specs" href="#" data-href="#content-type__specs" title="Характеристики">ХАРАКТЕРИСТИКИ</a></li><!--
					 --><li><a class="main-toggler main-toggler__gallery" href="#" data-href="#content-type__gallery" title="Галерея">ГАЛЕРЕЯ</a></li><!--
					 --><li><a class="configurator" href="/configurator/?car_id=22" title="Цены комплектации">ЦЕНЫ И КОНФИГУРАЦИИ</a></li><!--
					 --><li title="Брошюра" class="broshure-item"><a target="_blank" class="zing_form_toggler broshure" for="brochures_request" data-model="i40" href="#" data-gtm-havas-model="i40">БРОШЮРА</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // new template -->

            <? offer_filter_auto($APPLICATION->GetCurPage()); ?>
            <!-- content -->
            <div class="content-type content-type__explore on" >
                <div id="contents_highlights" class="contents_highlights pip">
                    <div class="parallax parallax0"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ОСОБЕННОСТИ</h2>
                                <div class="text1">Дизайн,<br>пробуждающий<br>эмоции</div>
                                <div class="text2">Больше динамики и комфорта для тех, кто не боится перемен.<br>
                                    Все, что Вы ждете от автомобиля бизнес-класса, воплощено<br>
                                    в новом Hyundai i40 Универсал.
                                </div>
                            </div>
                            <div class="robust_on_style">
                                <div class="highlights_thumbs">
                                    <div class="list">
                                        <ul>
                                            <li class="thumb1 front">
                                                <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/i40w/elements/highlights_1.jpg" data-url="/media/images/flat/i40w/elements/highlights_1.jpg" alt="Европейский стиль" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Европейский стиль</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb2 side">
                                                <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/i40w/elements/highlights_2.jpg" data-url="/media/images/flat/i40w/elements/highlights_2.jpg" alt="Безопасный" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Безопасный</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb3 safe">
                                                <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/i40w/elements/highlights_3.jpg" data-url="/media/images/flat/i40w/elements/highlights_3.jpg" alt="Комфортный" width="306" height="306" />
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
                                                <div class="img"><img src="/media/images/flat/i40w/elements/highlights_popup_1.jpg" data-url="/media/images/flat/i40w/elements/highlights_popup_1.jpg" width="623" height="306" alt="Европейский стиль"></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Европейский стиль</strong>
                                                        Изысканный и утонченный<br>
                                                        i40 универсал выдержан в лучших <br>
                                                        традициях европейского стиля.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumb2 side">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/i40w/elements/highlights_popup_2.jpg" data-url="/media/images/flat/i40w/elements/highlights_popup_3.jpg" width="623" height="306" alt="Безопасный"></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Безопасный</strong>
                                                        Интеллектуальные системы <br>
                                                        безопасности запрограммированы<br>
                                                        на автоматическое определение <br>
                                                        опасных ситуаций и помогают <br>
                                                        предотвращать аварии.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumb3 safe">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/i40w/elements/highlights_popup_3.jpg" data-url="/media/images/flat/i40w/elements/highlights_popup_3.jpg" width="623" height="306" alt="Комфортный"></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Комфортный</strong>
                                                        Интерьер создавался<br>
                                                        с использованием лучших <br>
                                                        технологических решений <br>
                                                        и деталей отделки<br>
                                                        высочайшего качества.
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
                                        <h3>Экономичный<br>расход топлива</h3>
                                        <p>
                                            Как бензиновые, так и дизельные<br>
                                            двигатели для универсала i40<br>
                                            обеспечивают высокую<br>
                                            экономичность.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="/media/images/flat/i40w/elements/highlights_4.jpg" width="" height="" alt="Экономичный расход топлива" />
                                    </div>
                                </div>
                                <div class="mid">
                                    <div class="subject">
                                        <h3>Максимальный<br>простор</h3>
                                        <p>
                                            В I40  простор гарантирован<br>
                                            каждому пассажиру. Багажное<br>
                                            отделение объемом 1719 литров<br>
                                            позволит вместить абсолютно все!
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="/media/images/flat/i40w/elements/highlights_5.jpg" width="" height="" alt="Максимальный простор" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="subject">
                                        <h3>6-ступенчатая  <br>коробка передач</h3>
                                        <p>
                                            6 передач — это лучше, чем пять, <br>
                                            особенно если 6-ступенчатая коробка <br>
                                            более компактная, легкая, плавная и <br>
                                            тихая, чем 5-ступенчатая, которой она<br>
                                            приходит на смену.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="/media/images/flat/i40w/elements/highlights_6.jpg" width="" height="" alt="6-ступенчатая коробка передач" />
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
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/c87czVU-238?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/H64aBEVeWpE?rel=0&amp;showinfo=0;autoplay=1"></a></li>
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
                                <div class="text1">Дизайн, <br>пробуждающий<br>чувства</div>
                                <div class="text2">В этом дизайне, вобравшем в себя дух природы, спортивный<br>
                                    стиль органично сочетается с обтекаемым профилем, <br>
                                    превращая i40 в поистине харизматичный автомобиль.<br>
                                </div>
                            </div>
                        </div>
                        <div class="view_wrap">
                            <div class="pos">
                                <ul class="view">
                                    <li class="front">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/i40w/elements/angle_1.png" alt="Фото экстерьера i40 универсал" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 right"><a href="#"><span>more</span></a><span class="txt"><span>Решетка радиатора</span></span></div>
                                                    <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Ксеноновые фары</span></span></div>
                                                    <div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодные передние<br>противотуманные фары</span></span></div>
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_1.jpg" width="470" height="470" alt="Решетка радиатора" /></div>
                                                        <div class="txt">
                                                            <strong>Решетка радиатора</strong>
                                                            Стильные передние фары и внушительная решетка радиатора делают автомобиль по-настоящему гламурным. Для тех, кому хочется, чтобы автомобиль выглядел еще более дерзко, в качестве опции доступна ее хромированная версия.
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_2.jpg" width="470" height="470" alt="Ксеноновые фары" /></div>
                                                        <div class="txt">
                                                            <strong>Ксеноновые фары</strong>
                                                            Ксеноновые фары выдают более яркий
                                                            и дальний луч света без ослепляющего
                                                            эффекта с цветовой температурой,
                                                            приближенной к дневному свету.
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_3.jpg" width="470" height="470" alt="Светодиодные передние противотуманные фары" /></div>
                                                        <div class="txt">
                                                            <strong>Светодиодные передние противотуманные фары</strong>
                                                            Опциональные светодиодные передние противотуманные фары установлены максимально близко к дорожному покрытию для поразительной эффективности в условиях густого тумана.
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="side">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/i40w/elements/angle_2.png" alt="Вид сбоку i40 универсал" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодный повторитель<br>указателей поворота</span></span></div>
                                                    <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Колесные диски</span></span></div>
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_4.jpg" width="470" height="470" alt="Светодиодный повторитель указателей поворота" /></div>
                                                        <div class="txt">
                                                            <strong>Светодиодный повторитель указателей поворота</strong>
                                                            Обтекаемая форма уменьшает
                                                            аэродинамическое сопротивление, а значит,
                                                            и шум при движении. В зеркала встроены
                                                            светодиодные повторители указателей поворота.
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40/elements/exterior_popup_5.jpg" width="470" height="470" alt="Колесные диски" /></div>
                                                        <div class="txt">
                                                            <strong>Колесные диски</strong>
                                                            Красивые и легкие колесные диски
                                                            делают автомобиль еще более послушным
                                                            и незабываемо элегантным — водить такой
                                                            одно удовольствие.
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="rear">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/i40w/elements/angle_3.png" alt="Вид багажника i40 универсал" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодные фонари</span></span></div>
                                                    <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Автоматическое открытие крышки багажника</span></span></div>
                                                    <!-- 											<div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодный повторитель стоп-сигнала (HMSL)</span></span></div> -->
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_6.jpg" width="470" height="470" alt="Светодиодные фонари" /></div>
                                                        <div class="txt">
                                                            <strong>Светодиодные фонари</strong>
                                                            Широкие задние фонари изящной формы
                                                            плавно повторяют обводы кузова.
                                                            Использование светодиодов вместо обычных
                                                            ламп повышает безопасность благодаря
                                                            повышенной яркости и более быстрому
                                                            включению.
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_7.jpg" width="470" height="470" alt="Автоматическое открытие крышки багажника" /></div>
                                                        <div class="txt">
                                                            <strong>Автоматическое открытие <br>крышки багажника</strong>
                                                            Если водитель находится сзади автомобиля
                                                            со смарт-ключом в течение трех секунд, то
                                                            багажник автоматически открывается. Данная
                                                            функция очень удобна, поскольку водителю не
                                                            требуется ставить сумки и вновь поднимать их.
                                                        </div>
                                                    </li>
                                                    <!--
                                                                                                <li>
                                                                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                                    <div class="img"><img src="/media/images/flat/i40w/elements/exterior_popup_8.jpg" width="470" height="470" alt="LED high-mounted stop lamp (HMSL)" /></div>
                                                                                                    <div class="txt">
                                                                                                        <strong>Светодиодный повторитель стоп-сигнала (HMSL)</strong>
                                                                                                        Размещение этого стоп-сигнала с красными светодиолными лампами на спойлере задней двери кузова делает автомобиль более заметным, обеспечивая его максимальную безопасность  на дорогах.
                                                                                                    </div>
                                                                                                </li>
                                                    -->
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
                                <li class="side"><a href="#"><span class="progress">&nbsp;</span><span class="txt">Вид сбоку</span></a></li>
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
                                                <span class="img"><img width="306" height="200" alt="Подогрев зоны покоя стеклоочистителей" src="/media/images/flat/i40/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Подогрев зоны покоя стеклоочистителей</strong>
											Нагревательный элемент,
											проходящий по нижней кромке
											лобового стекла, размораживает
											лед и освобождает замерзшие
											стеклоочистители.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Задний спойлер со светодиодами" src="/media/images/flat/i40/elements/exterior_2.jpg"/></span>
										<span class="description">
											<strong>Задний спойлер со светодиодами</strong>
											Светодиоды позволяют повысить
											безопасность. Они удачно сочетаются
											с задним спойлером и дверью.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Панорамная крыша" src="/media/images/flat/i40/elements/exterior_3.jpg"/></span>
										<span class="description">
											<strong>Панорамная крыша</strong>
											В максимальной комплектации
											доступна панорамная крыша, которая
											буквально  преображает салон.
											В комплект с крышей входят выдвижные
											шторки и обтекатель. Задняя панель
											крыши неподвижна, сдвижной является
											только передняя часть.
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
                                <div class="text1">Спортивный и<br>высокотехнологичный<br>образ изнутри и снаружи</div>
                                <div class="text2">
                                    Все в салоне, начиная с его вместительности <br>
                                    и заканчивая плавными обводами,подчинено<br>
                                    одной цели: создать для вас максимальный<br>
                                    комфорт.
                                </div>
                            </div>
                        </div>
                        <div class="section2">
                            <div class="scene_wrap">
                                <div class="scene_offset">
                                    <div class="offset2">
                                        <div class="scene_cut">
                                            <div class="scene1">
                                                <div class="img">
                                                    <img src="/media/images/flat/i40w/elements/view_1.jpg" width="1050" height="540" alt="Фото интерьера салона i40 универсал" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1"><a href="#">11</a></div>
                                                        <div class="plus plus2"><a href="#">12</a></div>
                                                        <div class="plus plus3"><a href="#">13</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scene2">
                                                <div class="img">
                                                    <img src="/media/images/flat/i40w/elements/view_2.jpg" width="1050" height="540" alt="Фото интерьера салона i40 универсал" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1"><a href="#">14</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="pop_11">
                                        <div class="details_txt">
                                            <strong>Многофункциональный руль</strong>
                                            <p>
                                                Для более удобного и безопасного вождения <br>
                                                органы дистанционного управления аудиосистемой<br>
                                                расположены на руле, что позволяет водителю ни <br>
                                                на миг не отнимать от него руки.
                                            </p>
                                        </div>
                                        <img src="/media/images/flat/i40w/elements/interior_popup_1.jpg" width="525" height="540" alt="Многофункциональный руль" />
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                    </div>
                                    <div class="pop_12">
                                        <div class="details_txt">
                                            <strong>Климат-контроль</strong>
                                            <p>
                                                Для водителя и пассажира на переднем сиденье<br>
                                                предусмотрена отдельная система управления<br>
                                                двухзонным климат-контролем.
                                            </p>
                                        </div>
                                        <img src="/media/images/flat/i40w/elements/interior_popup_2.jpg" width="525" height="540" alt="Климат-контроль" />
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                    </div>
                                    <div class="pop_13">
                                        <div class="details_txt">
                                            <strong>Водительское сиденье<br>с электроприводом, встроенной<br>памятью (IMS) и функциями управления</strong>
                                            <p>
                                                Задайте нужное положение водительского сиденья<br>
                                                с помощью электропривода (доступна регулировка<br>
                                                в 10 направлениях) и позвольте системе IMS<br>
                                                сделать за вас все остальное. Система <br>
                                                запомнит выбранные вами или другими<br>
                                                водителями положения. Также доступны <br>
                                                новая поясничная поддержка с <br>
                                                электроприводом для сидений<br>
                                                водителя и переднего<br>
                                                пассажира.
                                            </p>
                                        </div>
                                        <img src="/media/images/flat/i40w/elements/interior_popup_3.jpg" width="525" height="540" alt="Водительское сиденье с электроприводом, встроенной памятью (IMS) и функциями управления" />
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                    </div>
                                    <div class="pop_14">
                                        <div class="details_txt">
                                            <strong>Багажник, обеспечивающий<br>максимальную загрузку</strong>
                                            <p>
                                                Объем багажника i40 может изменяться от 553 до<br>
                                                1719 л, а для большего удобства предусмотрена<br>
                                                возможность размещения багажа в грузовом отсеке<br>
                                                под полом. Вы удивитесь, узнав, как много вещей<br>
                                                сможет вместить багажник вашего i40.
                                            </p>
                                        </div>
                                        <img src="/media/images/flat/i40w/elements/interior_popup_4.jpg" width="525" height="540" alt="Вместительный багажник" />
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                    </div>
                                </div>
                                <a href="#" class="scene-prev" role="prev"><div></div></a>
                                <a href="#" class="scene-next" role="next"><div></div></a>
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
                                                <span class="img"><img width="306" height="200" alt="Контейнер для хранения" src="/media/images/flat/i40w/elements/interior_1.jpg"/></span>
				                        <span class="description">
				                            <strong>Контейнер для хранения</strong>
											Удобные подстаканники легко <br>
											использовать как контейнер для <br>
											хранения разных мелочей. <br>
											Благодаря сдвигающейся крышке<br>
											контейнер будет всегда выглядеть<br>
											аккуратно.
				                        </span>
                                            </li>

                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Вентиляция сидений" src="/media/images/flat/i40w/elements/interior_2.jpg"/></span>
										<span class="description">
											<strong>Вентиляция сидений</strong>
											Как не вымокнуть до нитки в жаркую, <br>
											душную погоду? Подарите себе <br>
											прохладу и сухость, заказав опцию<br>
											вентилирования для сидений водителя<br>
											и переднего пассажира. Вентиляторы,<br>
											расположенные под сиденьями, <br>
											подают прохладный воздух через<br>
											микроперфорацию в кожаной обивке.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Удобный центральный подлокотник" src="/media/images/flat/i40w/elements/interior_3.jpg"/></span>
				                        <span class="description">
				                            <strong>Удобный центральный<br>подлокотник</strong>
											Центральный подлокотник имеет <br>
											несколько отделений, куда можно <br>
											сложить диски и другие мелкие вещи —<br>
											все в одном месте, и прямо под рукой.
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
                <div id="contents_performance" class="contents_performance pip">
                    <div class="parallax parallax3"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ДИНАМИКА</h2>
                                <div class="text1">С i40 универсал<br>исчезают границы</div>
                                <div class="text2">
                                    Каждый километр, каждый поворот приносят удовольствие<br>
                                    благодаря комфортному, плавному управлению автомобилем.<br>
                                    Мощные двигатели всегда делают вождение по-настоящему<br>
                                    приятным, где бы вы ни оказались.
                                </div>
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                                <li class="on"><a href="#">2.0 MPI</a></li><!-- no space
						--><li><a href="#">1.7 CRDi</a></li>
                            </ul>
                        </div>
                        <div class="engine_list">
                            <ul>
                                <li>
                                    <div class="engine1">2.0 MPI</div>
                                    <p>
                                        В бензиновом двигателе с рабочим объемом 2.0 литра, выдающим максимальную мощность 149.6 л.с. при 6200 об/мин., применены инновации, повышающие экономичность силового агрегата и акустический комфорт в салоне при работающем моторе.
                                    </p>
                                    <div class="graph">
                                        <div class="pos">
                                            <img src="/media/images/flat/i40w/elements/diagram_1.jpg" class="lazy" width="470" height="480" alt="График показателей двигателя 2.0 MPI" /><br>
                                            <div class="text"><img src="/media/images/flat/i40w/elements/diagram_1_1.png" class="lazy" width="470" height="480" alt="График показателей двигателя 2.0 MPI" /></div>
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
                                <li>
                                    <div class="engine1">1.7 CRDi</div>
                                    <p>
                                        Тяговитый дизельный двигатель позволит ещё больше сэкономить на топливе, существенно увеличив пробег на одной заправке. Двигатель с рабочим объемом 1.7 литра выдает максимальную мощность 141 л.с. при 4000 об/мин.
                                    </p>
                                    <div class="graph">
                                        <div class="pos">
                                            <img src="/media/images/flat/i40w/elements/diagram_2.jpg" class="lazy" width="470" height="480" alt="График показателей двигателя 1.7 CRDi" /><br>
                                            <div class="text"><img src="/media/images/flat/i40w/elements/diagram_2_2.png" class="lazy" width="470" height="480" alt="График показателей двигателя 1.7 CRDi" /></div>
                                        </div>
                                    </div>
                                    <div class="max">
                                        <dl class="max_power">
                                            <dt></dt>
                                            <dd><strong>141</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                        </dl>
                                        <dl class="max_toque">
                                            <dt></dt>
                                            <dd><strong>340</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
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
							<strong>Автоматическая коробка передач</strong>
							Пришедшая на смену 5-ступенчатой 6-ступенчатая
							коробка передач более компактная, легкая, плавная и тихая.
							Кроме того, добавление еще одной передачи
							обеспечило дополнительную экономию топлива.
						</span>
                                <div class="btm_img"><img class="lazy" width="525" height="465" alt="Автоматическая коробка переключения передач" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/performance_1.jpg" /></div>
                            </li>
                            <li>
						<span class="description">
							<strong>Механическая коробка передач</strong>
							Для приверженцев механической коробки передач Hyundai
							предлагает 6-ступенчатую механическую коробку передач,
							отличающуюся очень четким и тихим переключением.
						</span>
                                <div class="btm_img"><img class="lazy" width="525" height="465" alt="Механическая коробка переключения передач" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/performance_2.jpg" /></div>
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
                                <div class="text2">В i40 универсал предусмотрены всевозможные меры <br>
                                    безопасности, сводящие к минимуму риск получения<br>
                                    серьезных травм.
                                </div>
                            </div>
                        </div>
                        <div class="scene_wrap">
                            <div class="scene">
                                <img class="car" src="/media/images/flat/i40w/elements/safety_1.jpg" width="940" height="" title="" alt="Электронная система стабилизации (ESС)">
                            </div>
                            <div class="text_wrap">
						<span class="scene_text">
						<strong>Электронная система стабилизации (ESС)</strong>
						ESС постоянно следит за курсовой устойчивостью автомобиля
						и сцеплением шин. Если система обнаружит, что автомобилю
						угрожает скольжение и водитель рискует потерять управление, то
						она автоматически вмешается, применяя торможение на отдельных
						колесах для предотвращения потери курсовой устойчивости.
						</span>
                            </div>
                        </div>

                        <div class="safety_slider-wrap">
                            <ul class="safety_slider">
                                <li class="safety_slider-item alive" class="alive">
                                    <img class="lazy" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/safety_slider_1.jpg" width="1920" height="540" alt="9 подушек безопасности">
							<span><strong>9 подушек безопасности</strong>
							Девять подушек безопасности, включая подушки для водителя
							и каждого из пассажиров, две боковые шторки безопасности по
							всей длине бокового остекления, четыре подушки безопасности,
							предохраняющие грудной отдел пассажиров, сидящих с краю, а
							также новая подушка, защищающая колени водителя, — в i40
							все продумано таким образом, чтобы свести риск получения
							серьезных травм к минимуму.
							</span>
                                </li>
                                <li class="safety_slider-item">
                                    <img src="/media/images/flat/i40w/elements/safety_slider_2.jpg" width="1920" height="540" alt="Система помощи при торможении (BAS)">
							<span><strong>Система помощи при торможении (BAS)</strong>
							Эта высокотехнологичная электронная система оценивает
							состояние дороги и сцепление каждого колеса с дорогой.
							На основе этих данных она мгновенно рассчитывает
							требуемое тормозное усилие для каждого колеса,
							обеспечивая безопасную остановку при минимальном
							тормозном пути.
							</span>
                                </li>
                                <li class="safety_slider-item">
                                    <img src="/media/images/flat/i40w/elements/safety_slider_3.jpg" width="1920" height="540" alt="Система помощи при трогании на подъеме (HAC)">
							<span><strong>Система помощи при трогании на подъеме (HAC)</strong>
							Система HAC определяет, когда автомобиль находится
							на подъеме, и автоматически задействует тормоза
							для предотвращения опасного откатывания назад.
							</span>
                                </li>
                                <li class="safety_slider-item">
                                    <img src="/media/images/flat/i40w/elements/safety_slider_4.jpg" width="1920" height="540" alt="Система управления стабилизацией (VSM)">
							<span><strong>Система управления стабилизацией (VSM)</strong>
							Система управления стабилизацией (VSM) обеспечивает сохранение
							максимального сцепления с дорогой для каждого из четырех колес,
							вне зависимости от покрытия.
							</span>
                                </li>
                            </ul>
                            <ul class="safety_slider-paginator">
                                <li class="alive">
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/safety_preview_1.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                                <li>
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/safety_preview_2.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                                <li>
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/safety_preview_3.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                                <li>
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/i40w/elements/safety_preview_4.jpg" width="90" height="90">
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
                                <div class="text1">Настоящий <br>оазис комфорта</div>
                                <div class="text2">Удобство превосходит все ожидания. Усовершенствованный<br>
                                    i40 окружает Вас и Ваших пассажиров необычайным <br>
                                    комфортом, которого Вы бы никогда не ожидали от автомобиля.
                                </div>
                            </div>
                        </div>
                        <div class="main_wrap">
                            <ul class="list_wrap">
                                <li class="list list1">
                                    <a href="#">
                                        <strong>Аудиосистема <br>для меломанов</strong>
                                        <img src="/media/images/flat/i40w/elements/convenience_1.jpg" width="470" height="250" alt="Аудиосистема для меломанов" />
                                    </a>
                                </li>
                                <li class="list list2">
                                    <a href="#">
                                        <strong>Система помощи<br>при парковке</strong>
                                        <img src="/media/images/flat/i40w/elements/convenience_2.jpg" width="470" height="250" alt="Система помощи при парковке" />
                                    </a>
                                </li>
                                <li class="list list3">
                                    <a href="#">
                                        <strong>Удобная <br>панель приборов</strong>
                                        <img src="/media/images/flat/i40w/elements/convenience_3.jpg" width="470" height="250" alt="Удобная панель приборов" />
                                    </a>
                                </li>
                                <li class="list list4">
                                    <a href="#">
                                        <strong>Система адаптивного <br>переднего освещения (AFLS)</strong>
                                        <img src="/media/images/flat/i40w/elements/convenience_4.jpg" width="470" height="250" alt="Система адаптивного переднего освещения (AFLS)" />
                                    </a>
                                </li>
                            </ul>


                            <div class="convenience__slider-cut">
                                <ul class="view_wrap">
                                    <li class="view view1 alive">
                                        <img src="/media/images/flat/i40w/elements/convenience_popup_1.jpg" width="940" height="500" alt="Аудиосистема для поклонников музыки" />
                                        <div class="text">
                                            <strong>Аудиосистема <br>для поклонников музыки</strong>
                                            Высококачественные динамики<br>
                                            передают кристально чистое звучание.<br>
                                            Меломаны, наслаждайтесь!
                                        </div>
                                    </li>
                                    <li class="view view2">
                                        <img src="/media/images/flat/i40w/elements/convenience_popup_2.jpg" width="940" height="500" alt="Система помощи при парковке" />
                                        <div class="text">
                                            <strong>Система помощи <br>при парковке</strong>
                                            Интеллектуальная система помощи при парковке<br>
                                            (SPAS) i40 универсал находит идеальное место для<br>
                                            парковки с помощью суперточных ультразвуковых <br>
                                            датчиков и паркует автомобиль автоматически.
                                        </div>
                                    </li>
                                    <li class="view view3">
                                        <img src="/media/images/flat/i40w/elements/convenience_popup_3.jpg" width="940" height="500" alt="Удобная панель приборов" />
                                        <div class="text">
                                            <strong>Удобная панель приборов</strong>
                                            Маленькое чудо электронной техники, <br>
                                            панель приборов обеспечивает беспрецедентно <br>
                                            чистое и ясное отображение информации, <br>
                                            благодаря чему вам не придется напрягать <br>
                                            глаза. После включения зажигания <br>
                                            на экране появится яркое приветствие.
                                        </div>
                                    </li>
                                    <li class="view view4">
                                        <img src="/media/images/flat/i40w/elements/convenience_popup_4.jpg" width="940" height="500" alt="Система адаптивного переднего освещения (AFLS)" />
                                        <div class="text">
                                            <strong>Система адаптивного <br>переднего освещения (AFLS)</strong>
                                            Стандартные статичные боковые лампы позволяют<br>
                                            водителю видеть больше деталей при повороте или<br>
                                            движении по дуге. Доступная в некоторых комплектациях<br>
                                            система адаптивного освещения использует поворотный <br>
                                            механизм, который связан с рулевым колесом и <br>
                                            поворачивается по ходу движения. Система управления<br>
                                            освещением автоматически включает передние фары<br>
                                            с наступлением сумерек  и выключает, если на улице светло.
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
                                                <span class="img"><img width="306" height="200" alt="Электромеханический стояночный тормоз" src="/media/images/flat/i40w/elements/convenience_5.jpg"/></span>
										<span class="description">
											<strong>Электромеханический <br>стояночный тормоз</strong>
											Удобная и компактная кнопка ручного
											тормоза эффективно взаимодействует
											с электронной системой управления
											тормозными механизмами, а также
											экономит пространство в салоне.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Запуск двигателя кнопкой" src="/media/images/flat/i40w/elements/convenience_6.jpg"/></span>
										<span class="description">
											<strong>Запуск двигателя кнопкой</strong>
											Кнопка запуска двигателя в разы
											удобнее классического ключа
											зажигания - достаточно носить
											ключ в кармане, и вы сможете
											запускать и выключать двигатель
											i40 универсал одним нажатием.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Переключение передач с помощью подрулевых переключателей" src="/media/images/flat/i40w/elements/convenience_7.jpg"/></span>
										<span class="description">
											<strong>Подрулевые лепестки<br>переключения передач</strong>
											Наслаждайтесь быстрым
											переключением передач с помощью удобных подрулевых лепестков.
										</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carousel-item morelist">
                                        <ul class="clearfix">
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Порт USB" src="/media/images/flat/i40w/elements/convenience_8.jpg"/></span>
										<span class="description">
											<strong>Порт USB</strong>
											Позволяет проигрывать аудиозаписи
											с большинства аудиоплееров, а
											также устройств флэш-памяти.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Коленная подушка безопасности" src="/media/images/flat/i40w/elements/convenience_9.jpg"/></span>
										<span class="description">
				                            <strong>Коленная подушка безопасности</strong>
											Эта подушка устанавливается
											прямо под рулевой колонкой и
											предназначена для уменьшения
											риска получения серьезных травм
											ног и коленей при фронтальном
											столкновении.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="Датчик света" src="/media/images/flat/i40w/elements/convenience_10.jpg"/></span>
										<span class="description">
				                            <strong>Датчик света</strong>
											Одной заботой стало меньше.
											Датчик самостоятельно определяет
											уровень естественного освещения
											и регулирует включение света фар.
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
                            <h2 class="title_wrap_h2">Технические характеристики Hyundai i40 универсал</h2>
                            <a href="#" class="open-all isWillClose">Свернуть все</a>
                        </div>
                        <div class="specs-listing_wrap">
                            <ul class="specs-listing">
                                <li class="head-line">
                                    <table>
                                        <tr>
                                            <th>Модификации</th>
                                            <td>2.0 MPI - 6AT</td>
                                            <td>1.7 CRDi - 7DCT</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div class="opened">Двигатель</div>
                                    <table>
                                        <tr>
                                            <th>Мощность*</th>
                                            <td>149.6 л.с.</td>
                                            <td>141 л.с.</td>
                                        </tr>
                                        <tr>
                                            <th>Объем двигателя</th>
                                            <td>2.0 л</td>
                                            <td>1.7 л</td>
                                        </tr>
                                        <tr>
                                            <th>Двигатель</th>
                                            <td>Nu 2.0<br>MPI D-CVVT</td>
                                            <td>U2 1.7<br>Diesel</td>
                                        </tr>
                                        <tr>
                                            <th>Объем, см3</th>
                                            <td>1999</td>
                                            <td>1685</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. мощность, кВт</th>
                                            <td>110</td>
                                            <td>104</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. мощность, л.с.</th>
                                            <td>149.6 л.с.</td>
                                            <td>141 л.с.</td>
                                        </tr>
                                        <tr>
                                            <th>Топливный бак</th>
                                            <td>70</td>
                                            <td>70</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Динамика</div>
                                    <table>
                                        <tr>
                                            <th>Динамические характеристики</th>
                                            <td>6АКПП</td>
                                            <td>7РКПП</td>
                                        </tr>
                                        <tr>
                                            <th>Тип трансмиссии</th>
                                            <td>Гидромеханическая</td>
                                            <td>Роботизированная</td>
                                        </tr>
                                        <tr>
                                            <th>Ускорение 0-100 км/ч, сек </th>
                                            <td>11.1</td>
                                            <td>11.0</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. скорость, км/ч </th>
                                            <td>198</td>
                                            <td>200</td>
                                        </tr>
                                    </table>
                                </li>

                                <li class="listing-item">
                                    <div>Расход топлива</div>
                                    <table>
                                        <tr>
                                            <th>Городской цикл, л/100 км*</th>
                                            <td>10.4</td>
                                            <td>5.9</td>
                                        </tr>
                                        <tr>
                                            <th>Загородный цикл, л/100 км*</th>
                                            <td>6.2</td>
                                            <td>4.7</td>
                                        </tr>
                                        <tr>
                                            <th>Смешанный цикл, л/100 км*</th>
                                            <td>7.7</td>
                                            <td>5.1</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2<br>в городском цикле, г/км*</th>
                                            <td>254</td>
                                            <td>154</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2<br>в загородном цикле, г/км*</th>
                                            <td>142</td>
                                            <td>122</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2<br>в смешанном цикле, г/км*</th>
                                            <td>183</td>
                                            <td>134</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Подвеска</div>
                                    <table>
                                        <tr>
                                            <th>Колесная база</th>
                                            <td>2770</td>
                                            <td>2770</td>
                                        </tr>
                                        <tr>
                                            <th>Минимальный дорожный<br>просвет, мм*</th>
                                            <td>147</td>
                                            <td>147</td>
                                        </tr>
                                        <tr>
                                            <th>Передняя колея</th>
                                            <td>1 579 / 1 591<br>(шины 17" / 16")</td>
                                            <td>1 579 / 1 591<br>(шины 17" / 16")</td>
                                        </tr>
                                        <tr>
                                            <th>Задняя колея</th>
                                            <td>1 585 / 1 597<br>(шины 17" / 16")</td>
                                            <td>1 585 / 1 597<br>(шины 17" / 16")</td>
                                        </tr>
                                        <tr>
                                            <th>Передний свес</th>
                                            <td>925</td>
                                            <td>925</td>
                                        </tr>
                                        <tr>
                                            <th>Задний свес</th>
                                            <td>1080</td>
                                            <td>1080</td>
                                        </tr>
                                        <tr>
                                            <th>Передняя подвеска</th>
                                            <td>Независимая, пружинная,<br>типа Макферсон,<br>со стабилизатором поперечной устойчивости</td>
                                            <td>Независимая, пружинная,<br>типа Макферсон,<br>со стабилизатором поперечной устойчивости</td>
                                        </tr>
                                        <tr>
                                            <th>Задняя подвеска</th>
                                            <td>Независимая, пружинная, многорычажная,<br>со стабилизатором поперечной устойчивости</td>
                                            <td>Независимая, пружинная, многорычажная,<br>со стабилизатором поперечной устойчивости</td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detailedSpecLink">
                        <a href="/configurator?car_id=25&compl_id=209">Подробные характеристики</a>
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
                            <h2 class="title_wrap_h2">Фото Hyundai i40 универсал</h2>
                            <div class="thumbs-toggler">
                                <a href="#" data-type="all" class="alive">Все</a>
                                <a href="#" data-type="exterior">Экстерьер</a>
                                <a href="#" data-type="interior">Интерьер</a>
                            </div>
                        </div>
                        <!-- GALLERY SLIDER-->
                        <ul id="all-gallery-items"style="display: none;">
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_1.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_1.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_2.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_2.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_3.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_3.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_4.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_4.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_5.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_5.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_6.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_6.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_7.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_7.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_8.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_8.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_9.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_9.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="Интерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_10.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_10.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="Интерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_11.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_11.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="Интерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_12.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_12.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="Интерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_13.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_13.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="Интерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_14.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_14.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="Интерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_15.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_15.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="Экстерьер Hyundai i40 универсал" src="/media/images/flat/i40w/gallery_pics/gallery_preview_16.jpg" data-href="/media/images/flat/i40w/gallery_pics/gallery_16.jpg"/></li>
                        </ul>
                        <!--  -->
                        <div class="gallery-body">

                            <div class="gallery-list-wrap"> <!-- slider -->
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
                            <h2 class="promo-title">Станьте владельцем<br>i40 универсал<br>уже сегодня</h2>
					<span class="promo-text">Выберите ближайший дилерский центр, пройдите<br>
					тест-драйв и станьте владельцем Hyundai i40.<br>
					Для вас всегда есть удобные программы<br>
					кредитования и другие предложения Drive Hyundai.
					</span>
                            <a href="#" class="btn-flat">Пройти тест-драйв</a>
                        </div>
                        <img src="/media/images/flat/i40w/elements/promo_pic.png" width="514" height="277" alt="Тест драйв Hyundai i40 универсал">
                    </div>
                    <div class="promo-grid">
                        <ul class="clearfix">
                            <li><a href="/configurator/"><span>Конфигуратор i40</span></a></li>
                            <!-- 					<li><a href="/find-dealer"><span>Найти дилера</span></a></li> -->
                            <li><a target="_blank" href="/media/downloads/accessoires/i40_acc.pdf"><span>Каталог аксессуаров</span></a></li>
                            <li><a href="/configurator/"><span>Рассчитать кредит</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="promo-slider_wrap">
                    <div class="promo-slider_cut">
                        <ul class="promo-slider">
                            <li>
                                <a href="/i40" class="promo-slider-link">
                                    <img src="/media/images/carmodels/i40_20157739ec501388.png" alt="i40">
                                    <span class="model">i40</span>
                                    <span class="price">от 1 124 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/Tucson" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Tucson_57257739f51bbc7f.png" alt="Tucson">
                                    <span class="model">Tucson</span>
                                    <span class="price">от 1 505 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/SantaFe" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Santa Fe Premium_22757739f44cbfa3.png" alt="Santa Fe">
                                    <span class="model">Santa Fe</span>
                                    <span class="price">от 1 794 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/GrandSantaFe" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Grand Santa Fe_76357f794c7e076a.png" alt="Grand Santa Fe">
                                    <span class="model">Grand Santa Fe</span>
                                    <span class="price">от 2 424 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/GenesisNew" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Genesis_67557739eb9dab83.png" alt="Genesis">
                                    <span class="model">Genesis</span>
                                    <span class="price">от 2 329 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="slider-prev"></div>
                    <div class="slider-next"></div>
                </div>
            </div>	</div>

    </div> <!-- // container -->

    <script type='text/javascript'>

        // can't delete this.
        // sc_wwpip_flat.js conflict

        var cubeList = new Array();
        cubeList = ["home", "gallery", "mostlike"];
        function cubeStart(va) {
            if (va == 1) {
            } else if (va == 2) {
                cubeGalleryCustomiz('1', 'All')
            } else if (va == 3) {
                executeArea4();
            } else if (va == 4) {
                executeArea4();
            } else if (va == 5) {
                executeArea4();
            }
        }
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>