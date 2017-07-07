<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Solaris");
?>




    <!--     <script type='text/javascript' src="/media/js/sc_jquery_ui_custom_min.js"></script> -->
    <script type='text/javascript' src="/media/js/sc_jquery_ui_ipad.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_wwpip_flat.js"></script>
    <link rel="stylesheet" type="text/css" href="/media/css_new/css_style_ru.css"/>
    <script type='text/javascript' src="/media/js/sc_ru_google.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_gt_default.js"></script>
    <script type='text/javascript' src="/media/js_new/spritespin/spritespin.js"></script>

    <script>
        function cubeMotionInit() {
        }
        function cubeMotionJS() {
        }
    </script>

    <script type="text/javascript" src="/media/js/wcm.consumption.js"></script>

    <link rel="stylesheet" type="text/css" href="/media/css_new/styles_RU_.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_SL.css"/>
    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_spritespin.css"/>
    <script type="text/javascript" src="/media/js_new/pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="/media/js_new/pip_flat_SL.js"></script>
    <script type="text/javascript" src="/media/js_new/pip_flat_SL_com_jspPane.js"></script>

    <style>
        /* parallax bg */
        .parallax0 {background:url('/media/images/flat/SL/elements/parallax_0.jpg') no-repeat fixed 50% 50% #fff;}/* dec 29 15 */
        .parallax1 {background:url('/media/images/flat/SL/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}/* 2015-07-31 */
        .parallax2 {background:url('/media/images/flat/SL/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax3 {background:url('/media/images/flat/SL/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax4 {background:url('/media/images/flat/SL/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax5 {background:url('/media/images/flat/SL/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}

        body.mobile .parallax { height:450px;}
        body.mobile .parallax1 {background:url('/media/images/flat/SL/elements/parallax_0.jpg') center top no-repeat #e3e3e3;}/* dec 29 15 */
        body.mobile .parallax1 {background:url('/media/images/flat/SL/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}/* 2015-07-31 */
        body.mobile .parallax2 {background:url('/media/images/flat/SL/elements/parallax_2.jpg') center top no-repeat #fff;}
        body.mobile .parallax3 {background:url('/media/images/flat/SL/elements/parallax_3.jpg') center top no-repeat #fff;}
        body.mobile .parallax4 {background:url('/media/images/flat/SL/elements/parallax_4.jpg') center top no-repeat #fff;}
        body.mobile .parallax5 {background:url('/media/images/flat/SL/elements/parallax_5.jpg') center top no-repeat #fff;}
    </style>

    <div class="wrap" id="wrap">







        <!--

        NEW SOLARIS LANDING TEMPLATE

        CONTAINER BEGINING BELOW

        -->



        <div class="gallery-view-wrap">
            <div class="gallery-view-holder">
                <div class="gallery-view-slider">
                    <ul></ul>
                </div>
                <div class="topline">
                    <img src="/media/images/flat/logo-wht-s.png" width="150" height="20">
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
                                        <img src="/media/images/flat/SL/elements/logo.png" title="Solaris">
                                        <span>Всегда что-то большее</span>
                                    </div>
                                    <div class="title-price">
                                        <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                        <? profit_to_url($APPLICATION->GetCurPage()); ?> <br>
                                        <a href="http://www.hyundai.ru/configurator/?car_id=147" class="title-price-notice">В кредит от 11 857 &#8381; / месяц</a>
                                    </div>
                                    <a href="#" class="btn-flat">Все предложения</a>
                                    <div class="title-list">
                                        <ul>
                                            <li>Экономный расход <br>
                                                <strong>5.9 л на 100 км<span class="add-blue-color">*<span></strong></li>
                                            <li>Макс. мощность<br>
                                                <strong>123 л.с.</strong></li>
                                        </ul>
                                        <ul>
                                            <li>До <strong>6 подушек</strong>
                                                <br>безопасности</li>
                                            <li>Большой список
                                                <br>опций</li>
                                        </ul>
                                    </div>
                                    <span class="notice"> &mdash; расход топлива указан для двигателя 1,4 л с механической коробкой передач.</span>
                                </div>
                                <div class="view-360_wrap">
                                    <img class="progress-last-frame" alt="" src="/media/images/common/transparent.gif"/>
                                    <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                    <div class="spritespin" data-model="solaris"></div>
                                    <!-- <img alt="" class="car" src="/media/images/flat/SL/elements/info_car_pic.png"> -->
                                </div>
                                <div class="view-360-color-selector">
                                    <ul>
                                        <li data-title="Garnet"			data-color="Garnet" class="view-360-color-selector__item"><span style="background-color: #C64040;"></span>Garnet</li>
                                        <li data-title="Carbon Grey"	data-color="Carbon_Grey" class="view-360-color-selector__item"><span style="background-color: #949597;"></span>Carbon Grey</li>
                                        <li data-title="Coffee Bean"	data-color="Coffee_Bean" class="view-360-color-selector__item"><span style="background-color: #86776C;"></span>Coffee Bean</li>
                                        <li data-title="Crystal White"	data-color="Crystal_White" class="view-360-color-selector__item"><span style="background-color: #FFF;"></span>Crystal White</li>
                                        <li data-title="Dazzling Blue"	data-color="Dazzling_Blue" class="view-360-color-selector__item"><span style="background-color: #325488;"></span>Dazzling Blue</li>
                                        <li data-title="Misty Beige"	data-color="Misty_Beige" class="view-360-color-selector__item"><span style="background-color: #C6C5C0;"></span>Misty Beige</li>
                                        <li data-title="Phantom Black"	data-color="Phantom_Black" class="view-360-color-selector__item"><span style="background-color: #08090B;"></span>Phantom Black</li>
                                        <li data-title="Sleek Silver"	data-color="Sleek_Silver" class="view-360-color-selector__item"><span style="background-color: #CFCFCF;"></span>Sleek Silver</li>
                                        <li data-title="Vitamin C"		data-color="Vitamin_C" class="view-360-color-selector__item"><span style="background-color: #D87C5A;"></span>Vitamin C</li>
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
            <!-- new content-togglers -->
            <div id="top-menu" class="top-menu">
                <div class="top-menu__wrap">
                    <div class="information">
                        <div class="cubeitem">
                            <ul>
                                <li class="on"><a class="main-toggler main-toggler__explore" href="#" data-href="#content-type__explore" title="Обзор">ОБЗОР</a></li><!--
					 --><li><a class="main-toggler main-toggler__specs" href="#" data-href="#content-type__specs" title="Характеристики">ХАРАКТЕРИСТИКИ</a></li><!--
					 --><li><a class="main-toggler main-toggler__gallery" href="#" data-href="#content-type__gallery" title="Галерея">ГАЛЕРЕЯ</a></li><!--
					 --><li><a class="configurator" href="http://www.hyundai.ru/configurator/?car_id=147" title="Цены комплектации">ЦЕНЫ И КОМПЛЕКТАЦИИ</a></li><!--
					 --><li class="broshure-item" title="Брошюра"><a data-gtm-havas-model="solaris" href="#" data-model="Solaris" for="brochures_request" class="zing_form_toggler broshure" target="_blank">БРОШЮРА</a></li>
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
                    <div class="pip_cont">
                        <div class="parallax parallax0"></div>
                        <!-- 				<div class="video_wrap" id="video_wrap"> -->
                        <!--
                                            <video class="solaris-hny-video" id="video" width="1150px" height="auto" preload="auto">
                                                <source type="video/mp4" src="/media/video/solaris/solaris-hny.mp4"></source>
                                                <source type="video/webm" src="/media/video/solaris/solaris-hny.webm"></source>
                                                Sorry. Your browser doesn't support HTML5 video.
                                            </video>
                        -->
                        <!--
                                            <div class="solaris-hny-video__overlay-wrap">
                                                <div class="solaris-hny-video__overlay video_link" data-src="https://www.youtube.com/embed/e6ToCVKa3Kw?rel=0&amp;showinfo=0;autoplay=1"><div></div></div>
                                            </div>
                                        </div>
                        -->

                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ОСОБЕННОСТИ</h2>
                                <div class="text1">Создан специально <br>для России. Создан <br>быть лидером.</div>
                                <div class="text2">Многочисленные опции подобраны таким образом, чтобы <br>
                                    максимально удовлетворить потребности российских <br>
                                    автомобилистов. Мы остались верны наследию любимого <br>
                                    автомобиля и создали новый, но уже такой родной Solaris. <br>
                                </div>
                            </div>

                            <div class="robust_on_style">
                                <div class="highlights_thumbs">
                                    <div class="list">
                                        <ul>
                                            <li class="thumb1 front">
                                                <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/SL/elements/highlights_1.jpg" data-url="/media/images/flat/SL/elements/highlights_1.jpg" alt="" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Элегантный</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb2 side">
                                                <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/SL/elements/highlights_2.jpg" data-url="/media/images/flat/SL/elements/highlights_2.jpg" alt="" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Комфортный</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <li class="thumb3 safe">
                                                <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/SL/elements/highlights_3.jpg" data-url="/media/images/flat/SL/elements/highlights_3.jpg" alt="" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">Безопасный</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <!-- is hidden -->
                                            <li class="thumb0 video" style="display: none;"> <!-- 23 dec 2015 -->
                                                <a href="#" class="video_link" data-src="https://www.youtube.com/embed/P3MjqISKokE?rel=0&amp;showinfo=0;autoplay=1">
											<span class="img_wrap">
												<img src="/media/images/flat/SL/elements/highlights_0.jpg" data-url="/media/images/flat/SL/elements/highlights_0.jpg" alt="" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                    <span class="txt-desc">500 000 Hyundai Solaris</span>
                                                    <span class="cover"></span>
                                                </a>
                                            </li>
                                            <!-- -->
                                        </ul>
                                    </div>
                                    <div class="view">
                                        <ul>
                                            <li class="thumb1 front">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/SL/elements/highlights_popup_1.jpg" data-url="/media/images/flat/SL/elements/highlights_popup_1.jpg" width="623" height="306" alt=""></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Элегантный</strong>
                                                        Стиль, технологии,<br>
                                                        безопасность — легко понять,<br>
                                                        что выделяет Solaris в ряду<br>
                                                        других автомобилей.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumb2 side">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/SL/elements/highlights_popup_2.jpg" data-url="/media/images/flat/SL/elements/highlights_popup_3.jpg" width="623" height="306" alt=""></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Комфортный</strong>
                                                        Внутри он продолжает<br>
                                                        очаровывать непринужденной<br>
                                                        элегантностью, плавными<br>
                                                        очертаниями,<br>
                                                        восхитительными контрастами.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="thumb3 safe">
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                <div class="img"><img src="/media/images/flat/SL/elements/highlights_popup_3.jpg" data-url="/media/images/flat/SL/elements/highlights_popup_3.jpg" width="623" height="306" alt=""></div>
                                                <div class="txt-wrap">
                                                    <div class="txt">
                                                        <strong>Безопасный</strong>
                                                        Детальная проработка каждого<br>
                                                        элемента Solaris позволил<br>
                                                        создать автомобиль, который<br>
                                                        защитит вас от опасностей<br>
                                                        на дороге.
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
                                        <h3>Внушительная мощность</h3>
                                        <p>Бензиновый двигатель Gamma<br>
                                            обладает большой мощностью<br>
                                            и крутящим моментом. Эта модель<br>
                                            обеспечит вам новые впечатления<br>
                                            от вождения.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="/media/images/flat/SL/elements/highlights_4.jpg" width="306" height="306" alt="" />
                                    </div>
                                </div>
                                <div class="mid">
                                    <div class="subject">
                                        <h3>Аудиосистема</h3>
                                        <p>Аудиосистема с ярким<br>
                                            дисплеем и эргономичной панелью<br>
                                            управления будет отличным<br>
                                            дополнением к Вашей поездке.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="/media/images/flat/SL/elements/highlights_5.jpg" width="306" height="306" alt="" />
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="subject">
                                        <h3>Система<br>безопасности</h3>
                                        <p>Solaris оснащается системой ABS и может<br>
                                            иметь шесть подушек безопасности,<br>
                                            включая две фронтальные, две боковые<br>
                                            и шторки безопасности.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="/media/images/flat/SL/elements/highlights_6.jpg" width="306" height="306" alt="" />
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
                                <div class="list_wrap scroll-pane horizontal-only">
                                    <ul class="list">
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/90TWa4RkhLM?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/P3MjqISKokE?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/nM_U87PI3cE?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/4dCkR5FnwjA?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/UNX-BsPpIqA?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/PftO5P0mfWs?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/k7XlLXfZ9uE?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/SBTY-7rm9xQ?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/0Lj4ZL2s4bs?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/fBRCy2fFLfc?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/npNhsbyNvlI?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/3pc396Jnl6k?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/33EEw7fSB0I?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                        <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/Sv6OByOrCgU?rel=0&amp;showinfo=0;autoplay=1"></a></li>
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
                                <div class="text1">На шаг впереди</div>
                                <div class="text2">Страсть к совершенству, тщательность<br>в выборе материалов, скрупулёзность в расчётах.
                                </div>
                            </div>
                        </div>
                        <div class="view_wrap">
                            <div class="pos">
                                <ul class="view">
                                    <li class="front">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/SL/elements/angle_1.png" alt="" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Дневные ходовые огни</span></span></div>
                                                    <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Увеличенный объем бачка<br>стеклоомывателя</span></span></div>
                                                    <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Яркий дизайн</span></span></div>
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/SL/elements/exterior_popup_2.jpg" width="470" height="470" alt="" /></div>
                                                        <div class="txt">
                                                            <strong>Дневные ходовые огни</strong>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/SL/elements/exterior_popup_5.jpg" width="470" height="470" alt="" /></div>
                                                        <div class="txt">
                                                            <strong>Увеличенный объем бачка<br>
                                                                стеклоомывателя
                                                            </strong>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/SL/elements/exterior_popup_1.jpg" width="470" height="470" alt="" /></div>
                                                        <div class="txt">
                                                            <strong>Яркий дизайн</strong>
                                                            Характерная решетка радиатора и плавные<br>
                                                            изгибы передних фар создают неповторимый<br>
                                                            образ автомобиля.
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="rear">
                                        <div class="scene">
                                            <div class="car">
                                                <img src="/media/images/flat/SL/elements/angle_2.png" alt="" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодные фонари</span></span></div>
                                                    <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Задний противотуманный<br>фонарь</span></span></div>
                                                </div>
                                            </div>
                                            <div class="sub_wrap">
                                                <ul>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/SL/elements/exterior_popup_3.jpg" width="470" height="470" alt="" /></div>
                                                        <div class="txt">
                                                            <strong>Светодиодные фонари</strong>
                                                            Светодиодные фонари дополняют продуманный<br>
                                                            дизайн Solaris и привносят в него яркие нюансы.
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/SL/elements/exterior_popup_4.jpg" width="470" height="470" alt="" /></div>
                                                        <div class="txt">
                                                            <strong>Задний противотуманный<br>фонарь</strong>
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
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Колесные диски</strong>
											Покупателям Solaris предлагаются
											на выбор 15-дюймовые стальные
											и 16-дюймовые легкосплавные диски
											с привлекательным дизайном,
											которые обеспечивают автомобилю
											современную внешность.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/exterior_2.jpg"/></span>
										<span class="description">
											<strong>Эффектные головные фары</strong>
											Фары головного света обеспечивают
											хорошее освещение дороги,
											облегчая движение в ночное время.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/exterior_3.jpg"/></span>
										<span class="description">
											<strong>Повторители указателей поворота</strong>
											Большие зеркала заднего вида
											с повторителями поворотников
											обеспечивают великолепный обзор
											и дополнительную безопасность
											при маневре.
							            </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--
                                                                <div class="carousel-item morelist">
                                                                    <ul class="clearfix">
                                                                        <li>
                                                                            <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/exterior_4.jpg"/></span>
                                                                            <span class="description">
                                                                                <strong>Передний бампер и новая<br>решетка радиатора</strong>
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/exterior_5.jpg"/></span>
                                                                            <span class="description">
                                                                                <strong>Полноразмерное запасное колесо</strong>
                                                                            </span>
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
                <div id="contents_interior" class="contents_interior pip">
                    <div class="parallax parallax2"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ИНТЕРЬЕР</h2>
                                <div class="text1">Создан для вас, <br>
                                    до мельчайших <br>
                                    деталей</div>
                                <div class="text2">За 5 лет Hyundai Solaris стал поистине <br>народным автомобилем.</div>
                            </div>
                        </div>
                        <div class="section2">
                            <div class="scene_wrap">
                                <div class="scene_offset">
                                    <div class="offset2">
                                        <div class="scene_cut">
                                            <div class="scene1">
                                                <div class="img">
                                                    <img src="/media/images/flat/SL/elements/interior_1.jpg" width="1050" height="540" alt="" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1"><a href="#">11</a></div>
                                                        <div class="plus plus2"><a href="#">12</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="pop_11">
                                            <div class="details_txt">
                                                <strong>Многофункциональный руль</strong>
                                                <p>Позволит управлять основными функциями<br>автомобиля, не отрывая от него рук.</p>
                                            </div>
                                            <img src="/media/images/flat/SL/elements/interior_popup_1.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_12">
                                            <div class="details_txt">
                                                <strong>Новая обивка сидений</strong>
                                                <p>Не только эффектна, но и функциональна.</p>
                                            </div>
                                            <img src="/media/images/flat/SL/elements/interior_popup_2.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="morelist">
                        <ul class="clearfix">
                            <li>
                                <span class="img"><img class="lazy" width="306" height="200" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/interior_2.jpg" /></span>
						<span class="description">
							<strong>Мягкие подлокотники</strong>
							Подлокотники обеспечат<br>
							дополнительный комфорт, который<br>
							непременно оценят все пассажиры.
						</span>
                            </li>
                            <li>
                                <span class="img"><img class="lazy" width="306" height="200" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/interior_3.jpg" /></span>
                        <span class="description">
                            <strong>Карманы для хранения вещей</strong>
							Удобные карманы, в которых можно<br>
							хранить карты, документы и другие<br>
							необходимые в дороге предметы.
                        </span>
                            </li>
                            <li>
                                <span class="img"><img class="lazy" width="306" height="200" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/interior_4.jpg" /></span>
                        <span class="description">
                            <strong>Элегантные ручки отпирания дверей</strong>
							Ручки открывания дверей в Hyundai<br>
							Solaris не только элегантно смотрятся,<br>
							но так же весьма удобно расположены.
                        </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="contents_performance" class="contents_performance pip">
                    <div class="parallax parallax3"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">ДИНАМИКА</h2>
                                <div class="text1">Оснащение <br>превосходит <br>ожидания</div>
                                <div class="text2">Каждый может оценить комфорт и уверенность за рулем<br>
                                    Hyundai Solaris &mdash; автомобиля, сочетающего в себе
                                    <br>экономичность и удобство городского седана.
                                </div>
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                                <li class="on"><a href="#">1.4 MPi</a></li><!-- no space
						--><li><a href="#">1.6 MPi</a></li>
                            </ul>
                        </div>
                        <div class="engine_list">
                            <ul>
                                <li>
                                    <div class="engine1">Gamma 1.4</div>
                                    <p>Снижение массы двигателей улучшило показатели<br>
                                        экономичности, при этом Gamma 1.4 CVVT выдает<br>
                                        максимальную мощность 107 л.с. при 6300 об/мин.<br>
                                        и 135 Н.м. при 5000 об/мин.
                                    </p>
                                    <div class="graph">
                                        <div class="pos">
                                            <img src="/media/images/flat/SL/elements/performance_graph.png" width="470" height="530" alt="" /><br>
                                            <div class="text"><img src="/media/images/flat/SL/elements/performance_graph_text.png" width="470" height="530" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="max">
                                        <dl class="max_power">
                                            <dt></dt>
                                            <dd><strong>107</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                        </dl>
                                        <dl class="max_toque">
                                            <dt></dt>
                                            <dd><strong>135</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                        </dl>
                                    </div>
                                </li>
                                <li>
                                    <div class="engine1">Gamma 1.6</div>
                                    <p>Снижение массы двигателей улучшило показатели<br>
                                        экономичности, при этом Gamma 1.6 CVVT выдает<br>
                                        максимальную мощность 123 л.с. при 6300 об/мин.<br>
                                        и 155 Н.м. при 5000 об/мин.
                                    </p>
                                    <div class="graph">
                                        <div class="pos">
                                            <img src="/media/images/flat/SL/elements/performance_graph_2.png" class="lazy" width="470" height="530" alt="" /><br>
                                            <div class="text"><img src="/media/images/flat/SL/elements/performance_graph_2_text.png" class="lazy" width="470" height="530" alt="" /></div>
                                        </div>
                                    </div>
                                    <div class="max">
                                        <dl class="max_power">
                                            <dt></dt>
                                            <dd><strong>123</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                        </dl>
                                        <dl class="max_toque">
                                            <dt></dt>
                                            <dd><strong>155</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
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
							6-ступенчатая АКПП наделяет Hyundai Solaris<br>
							плавностью переключения и комфортом в движении.
							<span class="notemark">только для двигателя 1,6 л</span>
						</span>
                                <div class="btm_img"><img class="lazy" width="525" height="465" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/performance_1.jpg" /></div>
                            </li>
                            <li>
						<span class="description">
							<strong>Механическая коробка передач</strong>
							6-ступенчатая МКПП обеспечит экономичную<br>
							и динамичную езду.
							<span class="notemark">только для двигателя 1,6 л</span>
						</span>
                                <div class="btm_img"><img class="lazy" width="525" height="465" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/performance_2.jpg" /></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="contents_safety" class="contents_safety pip">
                    <!-- new template -->
                    <div class="parallax parallax4"></div>
                    <div class="pip_cont">
                        <div class="text_play_wrap">
                            <div class="text_play">
                                <h2 class="pip_title">БЕЗОПАСНОСТЬ</h2>
                                <div class="text1">Всесторонняя<br>защита</div>
                                <div class="text2">Отдыхайте и просто наслаждайтесь поездкой — высокие <br>
                                    технологии стоят на страже вашей безопасности.
                                </div>
                            </div>
                        </div>
                        <div class="scene_wrap">
                            <div class="text_wrap">
						<span class="scene_text">
						<strong>Антиблокировочная система (ABS)</strong>
						При торможении автомобиля активируется антиблокировочная<br>
						система, которая при необходимости предотвращает блокировку<br>
						колес и соскальзывание автомобиля в занос, а также помогает<br>
						сохранить управление автомобилем.
						</span>
                            </div>
                            <div class="scene">
                                <img class="car" src="/media/images/flat/SL/elements/safety_1.jpg" width="1200" height="440" title="">
                            </div>
                        </div>

                        <div class="safety_slider-wrap">
                            <ul class="safety_slider">
                                <li class="safety_slider-item alive" class="alive">
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/safety_slider_1.jpg" width="1920" height="540">
							<span><strong>6 подушек безопасности</strong>
							Фронтальные и боковые передние подушки безопасности, а также<br>
							шторки безопасности для передних и задних пассажиров делают<br>
							Solaris одним из самых защищенных автомобилей в своем классе.
							</span>
                                </li>
                                <li class="safety_slider-item">
                                    <img src="/media/images/flat/SL/elements/safety_slider_2.jpg" width="1920" height="540">
							<span><strong>Преднатяжители ремней безопасности</strong>
							В случае столкновения датчики немедленно регистрируют удар<br>
							и автоматически натягивают ремни безопасности для лучшей защиты.
							</span>
                                </li>
                                <li class="safety_slider-item">
                                    <img src="/media/images/flat/SL/elements/safety_slider_3.jpg" width="1920" height="540">
							<span><strong>Высокоэффективная тормозная система</strong>
							C четырьмя тормозными дисками обеспечивает идеальное<br>
							замедление и стабильную работу систем ABS и EBD даже<br>
							при очень динамичном вождении.
							</span>
                                </li>
                            </ul>
                            <ul class="safety_slider-paginator">
                                <li class="alive">
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/safety_preview_1.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                                <li>
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/safety_preview_2.jpg" width="90" height="90">
                                    <div class="bordered"></div>
                                </li>
                                <li>
                                    <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/SL/elements/safety_preview_3.jpg" width="90" height="90">
                                    <div class="bordered-ghost"></div>
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
                                <div class="text2">Solaris объединяет в себе новейшие системы активной <br>
                                    и пассивной безопасности. Это является частью постоянного <br>
                                    стремления защитить пассажиров от всех возможных угроз.<br>
                                </div>
                            </div>
                        </div>
                        <div class="main_wrap">
                            <ul class="list_wrap">
                                <li class="list list1">
                                    <a href="#">
                                        <strong>Система помощи<br>при парковке</strong>
                                        <img src="/media/images/flat/SL/elements/convenience_1.jpg" width="470" height="250" alt="" />
                                    </a>
                                </li>
                                <li class="list list2">
                                    <a href="#">
                                        <strong>Приборная панель<br>Supervision</strong>
                                        <img src="/media/images/flat/SL/elements/convenience_2.jpg" width="470" height="250" alt="" />
                                    </a>
                                </li>
                                <li class="list list3">
                                    <a href="#">
                                        <strong>Функциональный<br>руль</strong>
                                        <img src="/media/images/flat/SL/elements/convenience_3.jpg" width="470" height="250" alt="" />
                                    </a>
                                </li>
                                <li class="list list4">
                                    <a href="#">
                                        <strong>Климат-контроль</strong>
                                        <img src="/media/images/flat/SL/elements/convenience_4.jpg" width="470" height="250" alt="" />
                                    </a>
                                </li>
                            </ul>


                            <div class="convenience__slider-cut">
                                <ul class="view_wrap">
                                    <li class="view view1 alive">
                                        <img src="/media/images/flat/SL/elements/convenience_popup_1.jpg" width="940" height="500" alt="" />
                                        <div class="text">
                                            <strong>Система помощи при парковке</strong>
                                            Изображение с камеры заднего вида транслируется<br>
                                            на дисплей, встроенный в электрохромное салонное<br>
                                            зеркало заднего вида. Указатели помогают вам<br>
                                            определить свое положение по отношению к другим<br>
                                            автомобилям и бордюру. Датчики в заднем бампере<br>
                                            реагируют на объекты, которых вы не видите,<br>
                                            и предупреждают о них звуковым сигналом.
                                        </div>
                                    </li>
                                    <li class="view view2">
                                        <img src="/media/images/flat/SL/elements/convenience_popup_2.jpg" width="940" height="500" alt="" />
                                        <div class="text">
                                            <strong>Приборная панель Supervision</strong>
                                            Приборная панель с тахометром и спидометром<br>
                                            имеет бело-синюю подсветку, что позволяет<br>
                                            водителю легко считывать данные в любых условиях.<br>
                                            Необходимая информация отображается визуально<br>
                                            и дублируется звуковыми сигналами: серьезный<br>
                                            функционал в сочетании  с элегантным стилем.
                                        </div>
                                    </li>
                                    <li class="view view3">
                                        <img src="/media/images/flat/SL/elements/convenience_popup_3.jpg" width="940" height="500" alt="" />
                                        <div class="text">
                                            <strong>Органы управления на руле</strong>
                                            Находясь за рулем Solaris вы можете пользоваться<br>
                                            мобильным телефоном с поддержкой Bluetooth, при<br>
                                            этом вам даже не придется отнимать руки от руля.<br>
                                            При помощи кнопок на руле вы также можете<br>
                                            управлять аудиосистемой и регулировать громкость<br>
                                            телефонного разговора.
                                        </div>
                                    </li>
                                    <li class="view view4">
                                        <img src="/media/images/flat/SL/elements/convenience_popup_4.jpg" width="940" height="500" alt="" />
                                        <div class="text">
                                            <strong>Автоматический климат-контроль<br>
                                                позаботится о каждом
                                            </strong>
                                            Вам достаточно просто задать желаемую<br>
                                            температуру, об остальном система позаботится<br>
                                            сама, обеспечив комфорт и уют для всех, кто<br>
                                            находится на борту автомобиля.
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
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_5.jpg"/></span>
										<span class="description">
											<strong>Аудиосистема</strong>
											Аудиосистема с радио, CD, MP3,<br>
											портами USB и AUX имеет 4 обычных<br>
											и 2 высокочастотных<br>
											громкоговорителя, которые обеспечат<br>
											высококачественное  звучание в пути.
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_6.jpg"/></span>
										<span class="description">
											<strong>Кнопка пуска/остановки<br>двигателя и электронный ключ</strong>
											Высокие технологии помогут вам<br>
											запустить двигатель. Для этого<br>
											нажмите кнопку пуска двигателя.
										</span>
                                            </li>
                                            <!--
                                                                                <li>
                                                                                    <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_7.jpg"/></span>
                                                                                    <span class="description">
                                                                                        <strong>Камера заднего вида</strong>
                                                                                        Изображение с камеры заднего вида<br>
                                                                                        транслируется на дисплей, который<br>
                                                                                        встроен в электрохромное салонное<br>
                                                                                        зеркало заднего вида.
                                                                                    </span>
                                                                                </li>
                                            -->
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_8.jpg"/></span>
										<span class="description">
											<strong>Обогрев лобового стелка</strong>
											Всего одно нажатие на кнопку — и лед<br>
											на стекле исчезнет без следа, а поездка<br>
											станет более безопасной
										</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="carousel-item morelist">
                                        <ul class="clearfix">

                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_9.jpg"/></span>
										<span class="description">
											<strong>Возможность подключения iPhone,<br>iPod через USB-порт
                                                <span class="i_notice">iPhone является зарегистрированным товарным знаком Apple Inc.</span>
                                            </strong>
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_10.jpg"/></span>
										<span class="description">
											<strong>Рулевая колонка с регулировкой по высоте и вылету</strong>
										</span>
                                            </li>
                                            <li>
                                                <span class="img"><img width="306" height="200" alt="" src="/media/images/flat/SL/elements/convenience_11.jpg"/></span>
										<span class="description">
											<strong>Руль с подогревом</strong>
										</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--
                                                                <div class="carousel-item morelist">
                                                                    <ul class="clearfix">

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
            </div> <!-- //content-type__explore -->
            <div class="content-type content-type__specs">
                <div id="contents_specs" class="contents_specs pip">
                    <div class="specs_wrap">
                        <div class="title_wrap clearfix">
                            <h2 class="title_wrap_h2">Технические характеристики Hyundai Solaris</h2>
                            <a href="#" class="open-all isWillClose">Свернуть все</a>
                        </div>
                        <div class="specs-listing_wrap">
                            <ul class="specs-listing">
                                <li class="head-line">
                                    <table>
                                        <tr>
                                            <th>Модификации</th>
                                            <td>1.4 - 5MT</td>
                                            <td>1.4 - 4AT</td>
                                            <td>1.6 - 6MT</td>
                                            <td>1.6 - 6AT</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div class="opened">Двигатель</div>
                                    <table>
                                        <tr>
                                            <th>Мощность*</th>
                                            <td>107 л.с.</td>
                                            <td>107 л.с.</td>
                                            <td>123 л.с.</td>
                                            <td>123 л.с.</td>
                                        </tr>
                                        <tr>
                                            <th>Объем двигателя</th>
                                            <td>1.4 л</td>
                                            <td>1.4 л</td>
                                            <td>1.6 л</td>
                                            <td>1.6 л</td>
                                        </tr>
                                        <tr>
                                            <th>Двигатель</th>
                                            <td>Gamma 1.4 MPI</td>
                                            <td>Gamma 1.4 MPI</td>
                                            <td>Gamma 1.6 MPI</td>
                                            <td>Gamma 1.6 MPI</td>
                                        </tr>
                                        <tr>
                                            <th>Объем, см3</th>
                                            <td>1396</td>
                                            <td>1396</td>
                                            <td>1591</td>
                                            <td>1591</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. мощность, кВт</th>
                                            <td>78,7</td>
                                            <td>78,7</td>
                                            <td>90,4</td>
                                            <td>90,4</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. мощность, л.с.</th>
                                            <td>107</td>
                                            <td>107</td>
                                            <td>123</td>
                                            <td>123</td>
                                        </tr>
                                        <tr>
                                            <th>Топливный бак</th>
                                            <td>43</td>
                                            <td>43</td>
                                            <td>43</td>
                                            <td>43</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Динамика</div>
                                    <table>
                                        <tr>
                                            <th>Динамические характеристики</th>
                                            <td>5МКПП</td>
                                            <td>4АКПП</td>
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
                                            <td>11.5</td>
                                            <td>13.4</td>
                                            <td>10.3</td>
                                            <td>11.2</td>
                                        </tr>
                                        <tr>
                                            <th>Макс. скорость, км/ч </th>
                                            <td>190</td>
                                            <td>170</td>
                                            <td>190</td>
                                            <td>185</td>
                                        </tr>
                                    </table>
                                </li>

                                <li class="listing-item">
                                    <div>Расход топлива</div>
                                    <table>
                                        <tr>
                                            <th>Городской цикл, л/100 км*</th>
                                            <td>7.6</td>
                                            <td>8.5</td>
                                            <td>8.1</td>
                                            <td>8.8</td>
                                        </tr>
                                        <tr>
                                            <th>Загородный цикл, л/100 км*</th>
                                            <td>4.9</td>
                                            <td>5.2</td>
                                            <td>4.9</td>
                                            <td>5.2</td>
                                        </tr>
                                        <tr>
                                            <th>Смешанный цикл, л/100 км*</th>
                                            <td>5.9</td>
                                            <td>6.4</td>
                                            <td>6.1</td>
                                            <td>6.5</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2 в городском цикле, г/км*</th>
                                            <td>180</td>
                                            <td>200</td>
                                            <td>197</td>
                                            <td>209</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2 в загородном цикле, г/км*</th>
                                            <td>116</td>
                                            <td>124</td>
                                            <td>121</td>
                                            <td>123</td>
                                        </tr>
                                        <tr>
                                            <th>Выделение CO2 в смешанном цикле, г/км*</th>
                                            <td>139</td>
                                            <td>152</td>
                                            <td>149</td>
                                            <td>155</td>
                                        </tr>
                                    </table>
                                </li>
                                <li class="listing-item">
                                    <div>Подвеска</div>
                                    <table>
                                        <tr>
                                            <th>Колесная база</th>
                                            <td>2570</td>
                                            <td>2570</td>
                                            <td>2570</td>
                                            <td>2570</td>
                                            <td>2570</td>
                                        </tr>
                                        <tr>
                                            <th>Минимальный дорожный просвет, мм*</th>
                                            <td>160</td>
                                            <td>160</td>
                                            <td>160</td>
                                            <td>160</td>
                                            <td>160</td>
                                        </tr>
                                        <tr>
                                            <th>Передняя колея</th>
                                            <td>1 495 / 1 487<br>(шины 15" / 16")</td>
                                            <td>1 495 / 1 487<br>(шины 15" / 16")</td>
                                            <td>1 495 / 1 487<br>(шины 15" / 16")</td>
                                            <td>1 495 / 1 487<br>(шины 15" / 16")</td>
                                            <td>1 495 / 1 487<br>(шины 15" / 16")</td>
                                        </tr>
                                        <tr>
                                            <th>Задняя колея</th>
                                            <td>1 502 / 1 494<br>(шины 15" / 16")</td>
                                            <td>1 502 / 1 494<br>(шины 15" / 16")</td>
                                            <td>1 502 / 1 494<br>(шины 15" / 16")</td>
                                            <td>1 502 / 1 494<br>(шины 15" / 16")</td>
                                            <td>1 502 / 1 494<br>(шины 15" / 16")</td>
                                        </tr>
                                        <tr>
                                            <th>Передний свес</th>
                                            <td>840</td>
                                            <td>840</td>
                                            <td>840</td>
                                            <td>840</td>
                                            <td>840</td>
                                        </tr>
                                        <tr>
                                            <th>Задний свес</th>
                                            <td>965</td>
                                            <td>965</td>
                                            <td>965</td>
                                            <td>965</td>
                                            <td>965</td>
                                        </tr>
                                        <tr>
                                            <th>Передняя подвеска</th>
                                            <td>Независимая,<br>типа McPherson<br>с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая,<br>типа McPherson<br>с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая,<br>типа McPherson<br>с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая,<br>типа McPherson<br>с пружинами и стабилизатором поперечной устойчивости</td>
                                            <td>Независимая,<br>типа McPherson<br>с пружинами и стабилизатором поперечной устойчивости</td>
                                        </tr>
                                        <tr>
                                            <th>Задняя подвеска</th>
                                            <td>Полузависимая, пружинная</td>
                                            <td>Полузависимая, пружинная</td>
                                            <td>Полузависимая, пружинная</td>
                                            <td>Полузависимая, пружинная</td>
                                            <td>Полузависимая, пружинная</td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detailedSpecLink">
                        <a href="/configurator/?car_id=25&compl_id=298">Подробные характеристики</a>
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
                            <h2 class="title_wrap_h2">Фото Hyundai Solaris</h2>
                            <div class="thumbs-toggler">
                                <a href="#" data-type="all" class="alive">Все</a>
                                <a href="#" data-type="exterior">Экстерьер</a>
                                <a href="#" data-type="interior">Интерьер</a>
                            </div>
                        </div>
                        <!--
                            один общий слайдер;
                            переключать тип будем по классу или атрибуту превьюшки, но придется их динамически перестраивать. попроубем.
                            пагинация так же по index();
                        -->
                        <!-- сами превью -->
                        <!-- в будущем в этот список можно добавить новые изображения для галлереи-->
                        <ul id="all-gallery-items"style="display: none;">
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_1.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_1.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_2.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_2.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_3.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_3.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_4.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_4.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_5.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_5.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_6.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_6.jpg"/></li>
                            <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_7.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_7.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_8.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_8.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_9.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_9.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_10.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_10.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_11.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_11.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_12.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_12.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_13.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_13.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_14.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_14.jpg"/></li>
                            <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/SL/gallery_pics/gallery_preview_15.jpg" data-href="/media/images/flat/SL/gallery_pics/gallery_15.jpg"/></li>
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
                            <h2 class="promo-title">Станьте владельцем<br>Solaris уже сегодня</h2>
					<span class="promo-text">Выберите ближайший дилерский центр, пройдите<br>
					тест-драйв и станьте владельцем Hyundai Solaris.<br>
					Для вас всегда есть выгодные программы кредитования<br>
					и другие специальные предложения и акции.
					</span>
                            <br/><br/>
                        </div>
                        <img src="/media/images/flat/SL/elements/promo_car_pic.png" width="525" height="350">
                    </div>
                    <div class="promo-grid">
                        <ul class="clearfix">
                            <li><a href="http://www.hyundai.ru/configurator/?car_id=147"><span>Конфигуратор Solaris</span></a></li>
                            <li><a target="_blank" href="/media/downloads/accessoires/Solaris_Acc.pdf"><span>Каталог аксессуаров</span></a></li>
                            <li><a href="http://www.hyundai.ru/configurator/?car_id=147"><span>Рассчитать кредит</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="promo-slider_wrap">
                    <div class="promo-slider_cut">
                        <ul class="promo-slider">
                            <li>
                                <a href="/Solaris-5dr" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Solaris хэтчбек_45057739f19bf845.png" alt="Solaris Хетчбек">
                                    <span class="model">Solaris Хетчбек</span>
                                    <span class="price">от  553 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/i30" class="promo-slider-link">
                                    <img src="/media/images/carmodels/i30_15457739eee17e6c.png" alt="i30">
                                    <span class="model">i30</span>
                                    <span class="price">от  869 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/Elantra" class="promo-slider-link">
                                    <img src="/media/images/carmodels/Elantra_92157739ede44226.png" alt="Elantra">
                                    <span class="model">Elantra</span>
                                    <span class="price">от  909 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/i30-Wagon" class="promo-slider-link">
                                    <img src="/media/images/carmodels/i30 универсал_83357739f0575fed.png" alt="i30 Универсал">
                                    <span class="model">i30 Универсал</span>
                                    <span class="price">от  919 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/i30-3dr" class="promo-slider-link">
                                    <img src="/media/images/carmodels/i30 3DR_16857739efa063c4.png" alt="i30 3DR">
                                    <span class="model">i30 3DR</span>
                                    <span class="price">от  849 900  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/i40" class="promo-slider-link">
                                    <img src="/media/images/carmodels/i40_20157739ec501388.png" alt="i40">
                                    <span class="model">i40</span>
                                    <span class="price">от 1 124 000  <span class="rubleArial">p</span></span>
                                </a>
                            </li>
                            <li>
                                <a href="/i40-Wagon" class="promo-slider-link">
                                    <img src="/media/images/carmodels/i40 универсал_64757739ed03829f.png" alt="i40 Универсал">
                                    <span class="model">i40 Универсал</span>
                                    <span class="price">от 1 304 000  <span class="rubleArial">p</span></span>
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
                            <li>
                                <a href="/H1" class="promo-slider-link">
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
            </div>	</div>

    </div> <!-- // container -->

    <script type='text/javascript'>

        // can't delete this.
        // sc_wwpip_flat.js conflict

        var cubeList = new Array();
        cubeList = ["home", "gallery", "mostlike"];
        function cubeStart(va) {
            if (va == 1) {
            } else if (va == 2) { // gallery
                cubeGalleryCustomiz('1', 'All')
            } else if (va == 3) { // experience

                executeArea4();
            } else if (va == 4) { // talk n talk
                executeArea4();
            } else if (va == 5) { // talk n talk
                executeArea4();
            }
        }
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>