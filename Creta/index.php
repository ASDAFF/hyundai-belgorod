<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Creta купить у официального дилера. Хендай Крета комплектации и цены");
$APPLICATION->SetTitle("Creta");
?>

    <link type="text/css" href="http://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="http://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="http://www.hyundai.ru/media/css/cars/pip_flat_CR.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://www.hyundai.ru/assets/css/overrides.css?v=3.0">


    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <style>
            .parallax0 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax1 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax2 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax3 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax4 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax5 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_6.jpg') no-repeat fixed 50% 50% #fff;}
            body.mobile .parallax {height:450px;}
            body.mobile .parallax0 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}
            body.mobile .parallax1 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_2.jpg') center top no-repeat #e3e3e3;}
            body.mobile .parallax2 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_3.jpg') center top no-repeat #fff;}
            body.mobile .parallax3 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_4.jpg') center top no-repeat #fff;}
            body.mobile .parallax4 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_5.jpg') center top no-repeat #fff;}
            body.mobile .parallax5 {background:url('http://www.hyundai.ru/media/images/flat/CR/elements/parallax_6.jpg') center top no-repeat #fff;}
        </style>


        <div class="wrap" id="wrap">
            <div class="gallery-view-wrap">
                <div class="gallery-view-holder">
                    <div class="gallery-view-slider">
                        <ul></ul>
                    </div>
                    <div class="topline">
                        <img src="http://www.hyundai.ru/media/images/flat/CR/elements/logo-w.png">
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
                <div class="preview-light"></div>
                <div class="cubebox" id="cubebox">
                    <div class="cubelist">
                        <div class="items">
                            <div class="item">
                                <div class="item_wrap">
                                    <div class="main mkv">
                                        <div class="title">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/logo.png" title="Creta" alt="Эмблема Creta">
                                            <span>Для дорог и направлений!</span>
                                        </div>
                                        <div class="title-price">
                                            <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                            <? profit_to_url($APPLICATION->GetCurPage()); ?> <br>
                                        </div>

                                        <?
                                        model_credit(
                                            array(
                                                array("val" => "7 000","text" => "₽/месяц*"),
                                                array("text" => "<b>КАСКО</b> в подарок**")
                                            )
                                        );
                                        ?>

                                        <div class="title-list">
                                            <ul>
                                                <li>Экономный расход<br><strong>7.5 л на 100 км</strong>*</li>
                                                <li>Макс. мощность<br><strong>149.6 л.с.</strong></li>
                                            </ul>
                                            <ul>
                                                <li>До <strong>6 подушек</strong><br>безопасности</li>
                                                <li class="_special-wr">
                                                    Гарантия <strong>5 лет</strong> <a href="/service/" class="_special-wr__lnk">подробнее</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="view-360_wrap">
                                        <!-- progress preview + progress loading ring -->
                                        <img class="progress-last-frame" alt="" src="http://www.hyundai.ru/media/images/common/transparent.gif"/>
                                        <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                        <div class="spritespin" data-model="creta"></div>
                                    </div>
                                    <div class="view-360-color-selector">
                                        <ul>
                                            <li data-title="Белый"			data-color="White"			class="view-360-color-selector__item"><span style="background-color: #F4F4F6;"></span>Белый</li>
                                            <li data-title="Красный"		data-color="Fiery_Red"		class="view-360-color-selector__item"><span style="background-color: #a72225;"></span>Красный</li>
                                            <li data-title="Коричневый"		data-color="Pearibeage"		class="view-360-color-selector__item"><span style="background-color: #8f7563;"></span>Коричневый</li>
                                            <li data-title="Чёрный"			data-color="Black"			class="view-360-color-selector__item"><span style="background-color: #18161B;"></span>Чёрный</li>
                                            <li data-title="Серебристый"	data-color="Silver"			class="view-360-color-selector__item"><span style="background-color: #C9CDD6;"></span>Серебристый</li>
                                            <li data-title="Серый"			data-color="Stardust"		class="view-360-color-selector__item"><span style="background-color: #626165;"></span>Серый</li>
                                            <li data-title="Оранжевый"		data-color="Orange"			class="view-360-color-selector__item"><span style="background-color: #E95100;"></span>Оранжевый</li>
                                            <li data-title="Синий"			data-color="Mystic_blue"	class="view-360-color-selector__item"><span style="background-color: #2170aa;"></span>Синий</li>
                                        </ul>
                                    </div>
                                    <a class="view-360_toggler" href="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
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
                <div id="top-menu" class="top-menu">
                    <div class="top-menu__wrap">
                        <div class="information">
                            <div class="cubeitem">
                                <ul>
                                    <li class="on"><a class="main-toggler main-toggler__explore" href="#" data-href="#content-type__explore" title="Обзор">Обзор</a></li><!--
					 --><li><a class="main-toggler main-toggler__specs" href="#" data-href="#content-type__specs" title="Характеристики">Характеристики</a></li><!--
					 --><li><a class="main-toggler main-toggler__gallery" href="#" data-href="#content-type__gallery" title="Галерея">Галерея</a></li><!--
					 --><li><a class="configurator" href="http://www.hyundai.ru/configurator/car/22" target="_blank" title="Цены комплектации">Цены и конфигурации</a></li><!--
					 --><li class="broshure-item" title="каталог"><a data-gtm-havas-model="Creta" href="#" data-model="Creta" for="brochures_request" class="zing_form_toggler broshure" target="_blank">КАТАЛОГ</a></li><!--
					 -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-type content-type__explore on" >
                    <div id="contents_highlights" class="contents_highlights pip">
                        <div class="parallax parallax0"></div>
                        <div class="pip_cont">
                            <div class="text_play_wrap">
                                <div class="text_play">
                                    <h2 class="pip_title">ОСОБЕННОСТИ</h2>
                                    <div class="text1">Дизайн, пробуждающий эмоции</div>
                                    <div class="text2">
                                        Больше динамики и комфорта для тех, кто не боится перемен. Все, что Вы ждете от автомобиля, воплощено в Hyundai Creta.
                                    </div>
                                </div>
                                <div class="robust_on_style">
                                    <div class="highlights_thumbs">
                                        <div class="list">
                                            <ul>
                                                <li class="thumb1 front">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_1.jpg" data-url="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_1.jpg" alt="Современный дизайн" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Современный дизайн</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                                <li class="thumb2 side">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_2.jpg" data-url="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_2.jpg" alt="Превосходная безопасность" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Высочайшая безопасность</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                                <li class="thumb3 safe">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_3.jpg" data-url="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_3.jpg" alt="Настоящий оазис комфорта" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Настоящий оазис комфорта</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="view">
                                            <ul>
                                                <li class="thumb1 front">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_popup_1.jpg" data-url="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_popup_1.jpg" width="623" height="306" alt="Современный дизайн"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Современный дизайн</strong>
                                                            Стремительность во всем облике, ускользающие линии, динамика в совершенном проявлении. Стиль в каждой детали.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="thumb2 side">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_popup_2.jpg" data-url="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_popup_3.jpg" width="623" height="306" alt="Превосходная безопасность"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Превосходная безопасность</strong>
                                                            Для обеспечения максимальной безопасности Hyundai Creta оборудован 6 подушками безопасности – 2 фронтальными и 2 боковыми для водителя и переднего пассажира, а также шторками безопасности с каждой стороны.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="thumb3 safe">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_popup_3.jpg" data-url="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_popup_3.jpg" width="623" height="306" alt="Настоящий оазис комфорта"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Настоящий оазис комфорта</strong>
                                                            Вместительный салон, удобство и комфорт, современные технологии. Детали имеют значение.
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
                                            <h3>Экономичные и производительные двигатели</h3>
                                            <p>
                                                Семейство современных бензиновых двигателей обеспечивает отличную экономичность без ущерба для производительности или комфорта водителя.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_4.jpg" width="306" height="306" alt="Экономичные и производительные двигатели" />
                                        </div>
                                    </div>
                                    <div class="mid">
                                        <div class="subject">
                                            <h3>Надежный стальной каркас</h3>
                                            <p>
                                                Каркас из высокопрочной стали в Hyundai Creta — для еще большей безопасности водителя и пассажиров.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_5.jpg" width="306" height="306" alt="Надежный стальной каркас" />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="subject">
                                            <h3>Исключительный контроль</h3>
                                            <p>
                                                6 передач — это лучше, чем пять, особенно если 6-ступенчатая коробка более компактная, легкая, плавная и&nbsp;тихая.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/highlights_6.jpg" width="306" height="306" alt="Исключительный контроль" />
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
                                        <ul class="list">
                                            <li class="list-item"><a class="list-item__link video_link" href="#" data-src="8_e1uQmXNLI"></a></li>
                                            <li class="list-item"><a class="list-item__link video_link" href="#" data-src="AdPTfIEQ794"></a></li>
                                            <li class="list-item"><a class="list-item__link video_link" href="#" data-src="qZIZRzcLKWM"></a></li>
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
                                    <div class="text1">Энергия, пробужденная природой</div>
                                    <div class="text2">Вобравшая в себя дух природы, новая концепция дизайна Creta является истинным воплощением вашего стиля на дороге.
                                    </div>
                                </div>
                            </div>
                            <div class="view_wrap">
                                <div class="pos">
                                    <ul class="view">
                                        <li class="front">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="http://www.hyundai.ru/media/images/flat/CR/elements/angle_1.png" alt="Экстерьер Hyundai Elantra" />
                                                    <div class="plus_wrap">
                                                        <!-- 											<div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Фары головного света</span></span></div> -->
                                                        <div class="plus plus2 right"><a href="#"><span>more</span></a><span class="txt"><span>Фары проекционного типа</span></span></div>
                                                        <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Противотуманные фары</span></span></div>
                                                        <div class="plus plus4 right"><a href="#"><span>more</span></a><span class="txt"><span>Решетка радиатора</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <!--
                                                                                                    <li>
                                                                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                                        <div class="img"><img src="/media/images/flat/CR/elements/exterior_popup_1.jpg" width="470" height="470" alt="Фары головного света" /></div>
                                                                                                        <div class="txt">
                                                                                                            <strong>Фары головного света</strong>
                                                                                                            Ксеноновые фары ближнего света с корректором улучшают качество поездки и делают дорогу безопасной, даже на участках с низким уровнем видимости.
                                                                                                        </div>
                                                                                                    </li>
                                                        -->
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_popup_2.jpg" width="470" height="470" alt="Фары проекционного типа" /></div>
                                                            <div class="txt">
                                                                <strong>Фары проекционного типа</strong>
                                                                Благодаря фарам проекционного типа с функцией статичной подсветки поворотов движение в темное время суток станет более комфортным.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_popup_3.jpg" width="470" height="470" alt="Противотуманные фары" /></div>
                                                            <div class="txt">
                                                                <strong>Противотуманные фары</strong>
                                                                Противотуманные фары не только улучшат видимость в плохую погоду, но и придадут вашему автомобилю эффектный вид.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_popup_4.jpg" width="470" height="470" alt="Решетка радиатора" /></div>
                                                            <div class="txt">
                                                                <strong>Решетка радиатора</strong>
                                                                Эффектная и мощная решетка радиатора придает автомобилю впечатляющий вид.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="rear">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="http://www.hyundai.ru/media/images/flat/CR/elements/angle_2.png" alt="Экстерьер Hyundai Elantra" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Легкосплавные диски</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Задние светодиодные фонари</span></span></div>
                                                        <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Защитная накладка</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_popup_5.jpg" width="470" height="470" alt="Легкосплавные диски" /></div>
                                                            <div class="txt">
                                                                <strong>Легкосплавные диски</strong>
                                                                Диски подчеркнут устойчивость и спортивный внешний вид Creta.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_popup_6.jpg" width="470" height="470" alt="Задние светодиодные фонари" /></div>
                                                            <div class="txt">
                                                                <strong>Задние светодиодные фонари</strong>
                                                                Использование светодиодов вместо обычных ламп повышает безопасность благодаря повышенной яркости и более быстрому включению.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_popup_7.jpg" width="470" height="470" alt="Защитная накладка" /></div>
                                                            <div class="txt">
                                                                <strong>Защитная накладка</strong>
                                                                Защитная накладка на задний бампер не позволит повредить лакокрасочное покрытие.
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
                                                    <span class="img"><img width="306" height="132" alt="Задний стеклоочиститель-омыватель" src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Задний стеклоочиститель</strong>
											Всегда прекрасный обзор через заднее стекло.
										</span>
                                                </li>
                                                <!--
                                                                                    <li>
                                                                                        <span class="img"><img width="306" height="132" alt="Хромированные дверные ручки" src="/media/images/flat/CR/elements/exterior_2.jpg"/></span>
                                                                                        <span class="description">
                                                                                            <strong>Хромированные дверные ручки</strong>
                                                                                            Багажная дверь открывается автоматически, как только ключ оказывается в зоне обнаружения от 3 секунд и более. Для повышенной безопасности перед открытием багажной двери срабатывают специальный звуковой сигнал и аварийная сигнализация.
                                                                                        </span>
                                                                                    </li>
                                                -->
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Хромированные молдинги" src="http://www.hyundai.ru/media/images/flat/CR/elements/exterior_3.jpg"/></span>
										<span class="description">
											<strong>Накладки на пороги</strong>
											Накладки на дверных порогах подчеркивают выверенный стиль автомобиля, повышая комфорт пассажиров, а также защищая пороги от износа.
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
                                    <div class="text1">Гостеприимный и продуманный: салон Hyundai Creta</div>
                                    <div class="text2">
                                        Каждая деталь интерьера нацелена на создание максимального комфорта для водителя и пассажиров. Этот автомобиль располагает к путешествиям.
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
                                                        <img src="http://www.hyundai.ru/media/images/flat/CR/elements/view_1.jpg" width="1050" height="540" alt="" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">1</a></div>
                                                            <div class="plus plus2"><a href="#">2</a></div>
                                                            <div class="plus plus3"><a href="#">3</a></div>
                                                            <div class="plus plus4"><a href="#">4</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scene2">
                                                    <div class="img">
                                                        <img src="http://www.hyundai.ru/media/images/flat/CR/elements/view_2.jpg" width="1050" height="540" alt="" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">5</a></div>
                                                            <!-- 												<div class="plus plus2"><a href="#">6</a></div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scene3">
                                                    <div class="img">
                                                        <img src="http://www.hyundai.ru/media/images/flat/CR/elements/view_3.jpg" width="1050" height="540" alt="Фото интерьера салона Creta" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">7</a></div>
                                                            <div class="plus plus2"><a href="#">8</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="pop_1">
                                            <div class="details_txt">
                                                <strong>Регулировка сидений</strong>
                                                <p>Большой диапазон регулировок поможет быстро найти оптимальное положение сидений.</p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_1.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_2">
                                            <div class="details_txt">
                                                <strong>Климат-контроль</strong>
                                                <p>
                                                    Установите желаемый температурный режим и забудьте о необходимости регулировок, климат-контроль все сделает за вас автоматически.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_2.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_3">
                                            <div class="details_txt">
                                                <strong>Панель приборов Supervision</strong>
                                                <p>
                                                    Приборная панель Supervision позволит вам наглядно считывать информацию и оставаться в курсе происходящего с автомобилем.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_3.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_4">
                                            <div class="details_txt">
                                                <strong>Комфортные сиденья</strong>
                                                <p>
                                                    С сидениями повышенной комфортности в Hyundai Creta наслаждение поездкой доступно каждому пассажиру.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_4.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_5">
                                            <div class="details_txt">
                                                <strong>Карман в задней двери</strong>
                                                <p>
                                                    Специальный карман в задней двери пригодится для хранения книг и карт.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_5.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <!--
                                                                    <div class="pop_6">
                                                                        <div class="details_txt">
                                                                            <strong>Функциональный подлокотник</strong>
                                                                            <p>
                                                                                Функциональный подлокотник имеет вместительный ящик для хранения всего, от монет до безделушек.
                                                                            </p>
                                                                        </div>
                                                                        <img src="/media/images/flat/CR/elements/interior_popup_6.jpg" width="525" height="540" alt="" />
                                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                    </div>
                                        -->
                                        <div class="pop_7">
                                            <div class="details_txt">
                                                <strong>Багажная полка</strong>
                                                <p>
                                                    Багажная полка может быть полезна для хранения различных мелочей.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_7.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_8">
                                            <div class="details_txt">
                                                <strong>Лампочка в багажном отделении</strong>
                                                <p>
                                                    Лампочка в багажном отделении поможет найти самое необходимое даже в темное время суток.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_popup_8.jpg" width="525" height="540" alt="" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
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
                                                    <span class="img"><img width="306" height="132" alt="Контейнер для хранения в центральном подлокотнике" src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_1.jpg"/></span>
				                        <span class="description">
				                            <strong>Контейнер для хранения в центральном подлокотнике</strong>
				                            В центральный подлокотник встроено скрытое отделение для хранения мелких предметов.
				                        </span>
                                                </li>
                                                <!--
                                                                                    <li>
                                                                                        <span class="img"><img width="306" height="132" alt="Панель регулировки зеркал" src="/media/images/flat/CR/elements/interior_2.jpg"/></span>
                                                                                        <span class="description">
                                                                                            <strong>Панель регулировки зеркал</strong>
                                                                                            Многоточечная система освещения включает в себя лампы подсветки мест водителя и пассажира, а также потолочное отделение для солнцезащитных очков.
                                                                                        </span>
                                                                                    </li>
                                                -->
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Вместительный карман" src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_3.jpg"/></span>
				                        <span class="description">
				                            <strong>Вместительный карман</strong>
											Задний карман на сиденье пассажира предлагает удобное место для хранения журналов и газет.
				                        </span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Передняя панель" src="http://www.hyundai.ru/media/images/flat/CR/elements/interior_4.jpg"/></span>
				                        <span class="description">
				                            <strong>Футляр для очков</strong>
											Храните свои очки в специальном футляре, и вам не придется тратить время на их поиски.
				                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--
                                                                    <div class="carousel-item morelist">
                                                                        <ul class="clearfix">

                                                                            <li>
                                                                                <span class="img"><img width="306" height="132" alt="Крепление детского сиденья" src="/media/images/flat/CR/elements/interior_5.jpg"/></span>
                                                                                <span class="description">
                                                                                    <strong>Сетка для хранения багажа</strong>
                                                                                    С сеткой для хранения багажа даже самые хрупкие предметы будут доставлены без повреждений.
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
                    <div id="contents_performance" class="contents_performance pip">
                        <div class="parallax parallax3"></div>
                        <div class="pip_cont">
                            <div class="text_play_wrap">
                                <div class="text_play">
                                    <h2 class="pip_title">ДИНАМИКА</h2>
                                    <div class="text1">Превосходная экономичность</div>
                                    <div class="text2">
                                        Каждый километр, каждый поворот приносят удовольствие
                                        благодаря комфортному, плавному управлению автомобилем.
                                        Четко отлаженные настройки и мощные двигатели позволят Вам испытывать удовольствие при вождении в любых ситуациях и при любой погоде.
                                    </div>
                                </div>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li class="on"><a href="#">1.6 MPi</a></li><!-- no space
						--><li><a href="#">2.0 MPi</a></li>
                                </ul>
                            </div>
                            <div class="engine_list">
                                <ul>
                                    <li>
                                        <div class="engine1">1.6 MPi</div>
                                        <p>
                                            Новое поколение системы впрыска топлива обеспечивает лучшую топливную экономичность, более высокую производительность и способствует уменьшению шумов. 1.6 MPi выдает максимальную мощность 123 л.с. при 6300 об/мин.
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="http://www.hyundai.ru/media/images/flat/CR/elements/diagram_1_1.jpg" width="" height="" alt="График показателей двигателя" /><br>
                                                <div class="text"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/diagram_1_2.png" width="" height="" alt="" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt></dt>
                                                <dd><strong data-val="123">123</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt></dt>
                                                <dd><strong data-val="150.7">150.7</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="engine1">2.0 MPi</div>
                                        <p>
                                            Новое поколение системы впрыска топлива обеспечивает лучшую топливную экономичность, более высокую производительность и способствует уменьшению шумов. 2.0 MPi выдает максимальную мощность 149.6 л.с. при 6200 об/мин.
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="http://www.hyundai.ru/media/images/flat/CR/elements/diagram_1_1.jpg" class="lazy" width="" height="" alt="График показателей двигателя" /><br>
                                                <div class="text"><img src="http://www.hyundai.ru/media/images/flat/CR/elements/diagram_2_2.png" class="lazy" width="" height="" alt="" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt></dt>
                                                <dd><strong data-val="149.6">149.6</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt></dt>
                                                <dd><strong data-val="192">192</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
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
							Коробка передач обеспечивает великолепный разгон, экономичность и позволяет сократить выбросы CO2. Стандартная хромированная окантовка отлично сочетается с кожаной отделкой руля.
						</span>
                                    <div class="btm_img"><img class="lazy" width="525" height="465" alt="6-ступенчатая АКПП" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="/media/images/flat/CR/elements/performance_1.jpg" /></div>
                                </li>
                                <li>
						<span class="description">
							<strong>6-ступенчатая МКПП</strong>
							6-ступенчатая механическая коробка передач обеспечивает точное и плавное переключение передач, добавляя уверенности за рулем. Система помощи при трогании на подъеме не позволит машине откатиться назад.
							</span>
                                    <div class="btm_img"><img class="lazy" width="525" height="465" alt="6-ступенчатая МКПП" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="/media/images/flat/CR/elements/performance_2.jpg" /></div>
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
                                    <div class="text2">
                                        В модели Creta предусмотрены всевозможные меры
                                        безопасности, сводящие к минимуму риск получения
                                        серьезных травм.
                                    </div>
                                </div>
                            </div>
                            <div class="scene_wrap">
                                <div class="text_wrap">
						<span class="scene_text">
						<strong>Электронная система стабилизации курсовой устойчивости ESС</strong>
							ESС постоянно следит за курсовой устойчивостью автомобиля и сцеплением с дорогой. Если система обнаружит, что автомобиль начинает скользить и водитель рискует потерять управление, то она автоматически вмешается, применяя торможение на отдельных колесах для предотвращения потери курсовой устойчивости.
						</span>
                                </div>
                                <div class="scene">
                                    <img class="car lazy" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/CR/elements/safety_main.jpg" width="940" height="430" title="" alt="Электронная система стабилизации курсовой устойчивости ESС">
                                </div>
                            </div>

                            <div class="safety_slider-wrap">
                                <ul class="safety_slider">
                                    <li class="safety_slider-item alive" class="alive">
                                        <img class="lazy" alt="Усиленный стальной каркас" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_1.jpg" width="1920" height="540">
							<span><strong>Усиленный стальной каркас</strong>
							Для лучшей защиты водителя и пассажиров в Creta использованы сплавы из прочной и особо высокопрочной стали.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_2.jpg" width="1920" height="540" alt="6 подушек безопасности">
							<span><strong>6 подушек безопасности</strong>
							Шесть подушек безопасности, включая подушки для водителя и переднего пассажира, боковые подушки безопасности на переднем ряду для защиты грудного отдела, а также шторки безопасности по всей длине остекления для защиты головы, - в Creta все продумано таким образом, чтобы свести риск получения серьезных травм к минимуму.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_3.jpg" width="1920" height="540" alt="Система помощи при старте в гору (HAC)">
							<span><strong>Система помощи при старте в гору (HAC)</strong>
							Система HAC определяет, когда автомобиль находится на подъеме, и автоматически задействует тормоза для предотвращения опасного откатывания назад.
							</span>
                                    </li>
                                </ul>
                                <ul class="safety_slider-paginator">
                                    <li class="alive">
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_preview_1.jpg" data-original="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_preview_1.jpg" width="90" height="90">
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_preview_2.jpg" data-original="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_preview_2.jpg" width="90" height="90">
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_preview_3.jpg" data-original="http://www.hyundai.ru/media/images/flat/CR/elements/safety_slider_preview_3.jpg" width="90" height="90">
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
                                    <div class="text1">Возможности, от которых нельзя отказаться</div>
                                    <div class="text2">
                                        Ощущение комфорта и защищенности, качество даже в мелочах  - позвольте автомобилю превзойти Ваши ожидания.
                                    </div>
                                </div>
                            </div>
                            <div class="main_wrap">
                                <ul class="list_wrap">
                                    <li class="list list1">
                                        <a href="#">
                                            <strong>Аудиосистема</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_1.jpg" width="470" height="250" alt="" />
                                        </a>
                                    </li>
                                    <li class="list list2">
                                        <a href="#">
                                            <strong>Многофункциональное рулевое колесо</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_2.jpg" width="470" height="250" alt="" />
                                        </a>
                                    </li>
                                    <li class="list list3">
                                        <a href="#">
                                            <strong>Система помощи при парковке</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_3.jpg" width="470" height="" alt="" />
                                        </a>
                                    </li>
                                </ul>
                                <div class="convenience__slider-cut">
                                    <ul class="view_wrap">
                                        <li class="view view1 alive">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_popup_1.jpg" width="940" height="500" alt="Аудиосистема" />
                                            <div class="text">
                                                <strong>Аудиосистема</strong>
                                                Тонкое и динамичное стереозвучание позволит Вам всегда наслаждаться высококачественным звуком.
                                            </div>
                                        </li>
                                        <li class="view view2">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_popup_2.jpg" width="940" height="500" alt="Кнопки управления на руле" />
                                            <div class="text">
                                                <strong>Кнопки управления на руле</strong>
                                                Регулируйте любые настройки аудиосистемы, не&nbsp;снимая рук от рулевого колеса.
                                            </div>
                                        </li>
                                        <li class="view view3">
                                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_popup_3.jpg" width="940" height="500" alt="Система помощи при парковке" />
                                            <div class="text">
                                                <strong>Система помощи при парковке</strong>
                                                Изображение с камеры заднего вида транслируется на дисплей мультимедиа системы. Указатели помогают вам определить свое положение по отношению к другим автомобилям и бордюру. Датчики в заднем бампере реагируют на объекты, которых вы не видите, и предупреждают о них звуковым сигналом.
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
                                                <!--
                                                                                    <li>
                                                                                        <span class="img"><img width="306" height="132" alt="Самозатемняющееся внутрисалонное зеркало" src="/media/images/flat/CR/elements/convenience_4.jpg"/></span>
                                                                                        <span class="description">
                                                                                            <strong>Самозатемняющееся внутрисалонное зеркало</strong>
                                                                                            Внутрисалонное зеркало заднего вида с функцией самозатемнения автономно предотвратит ослепление водителя фарами едущих сзади автомобилей.
                                                                                        </span>
                                                                                    </li>
                                                -->
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Освещение салона" src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_5.jpg"/></span>
										<span class="description">
											<strong>Освещение салона</strong>
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Передние и задние розетки" src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_6.jpg"/></span>
										<span class="description">
											<strong>Передние розетки</strong>
											Две 12V розетки в передней консоли, предусмотренные для дополнительного удобства, обеспечат легкость зарядки ваших электронных устройств.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Разъемы для зарядки" src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_7.jpg"/></span>
										<span class="description">
											<strong>Разъемы для зарядки</strong>
											Creta оснащается портом USB/iPod и портом AUX для подключения или зарядки мобильных устройств.
										</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="carousel-item morelist">
                                            <ul class="clearfix">
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Умный ключ" src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_8.jpg"/></span>
										<span class="description">
											<strong>Умный ключ</strong>
											Водителям Hyundai Creta доступен бесключевой доступ в салон.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Улучшенные ремни безопасности" src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_9.jpg"/></span>
										<span class="description">
											<strong>Регулировка ремней безопасности по высоте</strong>
											Регулировка ремней безопасности по высоте станет дополнительным фактором комфорта для водителя и переднего пассажира.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="132" alt="Обогрев лобового стекла" src="http://www.hyundai.ru/media/images/flat/CR/elements/convenience_10.jpg"/></span>
										<span class="description">
											<strong>Запуск двигателя кнопкой</strong>
											Кнопка запуска двигателя в разы удобнее классического ключа зажигания — достаточно носить ключ в кармане, и вы сможете запускать и выключать двигатель одним нажатием.
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
                        <div class="spec_message">
                            <div>
                                <span class="add-blue-color">*</span>Платеж рассчитан в рамках программы Hyundai Старт исходя из цены Hyundai Creta 1.6 6MT 2WD Start (Старт) 799 900 р. 2017 года производства на условиях кредитного продукта «Баллун ПСП КЛАССИКА: Hyundai в кредит»: первоначальный взнос 391 900 р., сумма кредита 462 061 р., срок кредита 36 мес., процентная ставка 12% годовых. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.02.18 по 28.02.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru<br/>
                                <span class="add-blue-color">**</span>Полис КАСКО на безвозмездной основе оформляется на срок 1 (один) год в ПАО СК «Росгосстрах» и САО «ВСК» при покупке нового Hyundai Creta в кредит по программе СТАРТ. Указанная информация носит справочный характер и не является публичной офертой. Условия и тарифы могут быть изменены ПАО СК «Росгосстрах» и САО «ВСК» в одностороннем порядке. Предложение действует до 30.03.2018г.<br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-type content-type__specs">
                    <div id="contents_specs" class="contents_specs pip">
                        <div class="specs_wrap">
                            <div class="title_wrap clearfix">
                                <h2 class="title_wrap_h2">Технические характеристики Hyundai Creta</h2>
                                <a href="#" class="open-all isWillClose">Свернуть все</a>
                            </div>
                            <div class="specs-listing_wrap">
                                <ul class="specs-listing">
                                    <li class="head-line">
                                        <table>
                                            <tr>
                                                <th>Модификации</th>
                                                <td>1.6л 6MT 2WD</td>
                                                <td>1.6л 6MT 4WD</td>
                                                <td>1.6л 6AT 2WD</td>
                                                <td>1.6л 6AT 4WD</td>
                                                <td>2.0л 6AT 2WD</td>
                                                <td>2.0л 6AT 4WD</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div class="opened">Двигатель</div>
                                        <table>
                                            <tr>
                                                <th>Мощность*</th>
                                                <td>123 л.с.</td>
                                                <td>121 л.с.</td>
                                                <td>123 л.с.</td>
                                                <td>121 л.с.</td>
                                                <td>149.6 л.с.</td>
                                                <td>149.6 л.с.</td>
                                            </tr>
                                            <tr>
                                                <th>Объем двигателя</th>
                                                <td>1.6 л.</td>
                                                <td>1.6 л.</td>
                                                <td>1.6 л.</td>
                                                <td>1.6 л.</td>
                                                <td>2 л.</td>
                                                <td>2 л.</td>
                                            </tr>
                                            <tr>
                                                <th>Объем, см3</th>
                                                <td>1591</td>
                                                <td>1591</td>
                                                <td>1591</td>
                                                <td>1591</td>
                                                <td>1999</td>
                                                <td>1999</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность, кВт</th>
                                                <td>90.2</td>
                                                <td>88.7</td>
                                                <td>90.2</td>
                                                <td>88.7</td>
                                                <td>110</td>
                                                <td>110</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность, л.с.</th>
                                                <td>123</td>
                                                <td>121</td>
                                                <td>123</td>
                                                <td>121</td>
                                                <td>149.6</td>
                                                <td>149.6</td>
                                            </tr>
                                            <tr>
                                                <th>Топливный бак</th>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>55</td>
                                                <td>55</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Динамика</div>
                                        <table>
                                            <tr>
                                                <th>Привод</td>
                                                <td>2WD</td>
                                                <td>Полный</td>
                                                <td>2WD</th>
                                                <td>Полный</td>
                                                <td>2WD</td>
                                                <td>Полный</td>
                                            </tr>
                                            <tr>
                                                <th>Динамические характеристики</th>
                                                <td>6МКПП</td>
                                                <td>6МКПП</td>
                                                <td>6АКПП</td>
                                                <td>6АКПП</td>
                                                <td>6AКПП</td>
                                                <td>6АКПП</td>
                                            </tr>
                                            <tr>
                                                <th>Ускорение 0-100&nbsp;км/ч, сек </th>
                                                <td>12.3</td>
                                                <td>12.9</td>
                                                <td>12.1</td>
                                                <td>13.1</td>
                                                <td>10.7</td>
                                                <td>11.3</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. скорость, км/ч </th>
                                                <td>169</td>
                                                <td>167</td>
                                                <td>169</td>
                                                <td>167</td>
                                                <td>183</td>
                                                <td>179</td>
                                            </tr>
                                        </table>
                                    </li>

                                    <li class="listing-item">
                                        <div>Расход топлива</div>
                                        <table>
                                            <tr>
                                                <th>Городской цикл, л/100&nbsp;км*</th>
                                                <td>9</td>
                                                <td>9.6</td>
                                                <td>9.2</td>
                                                <td>9.9</td>
                                                <td>10.2</td>
                                                <td>10.6</td>
                                            </tr>
                                            <tr>
                                                <th>Загородный цикл, л/100&nbsp;км*</th>
                                                <td>5.8</td>
                                                <td>6.2</td>
                                                <td>5.9</td>
                                                <td>6.3</td>
                                                <td>6</td>
                                                <td>6.5</td>
                                            </tr>
                                            <tr>
                                                <th>Смешанный цикл, л/100&nbsp;км*</th>
                                                <td>7</td>
                                                <td>7.4</td>
                                                <td>7.1</td>
                                                <td>7.6</td>
                                                <td>7.5</td>
                                                <td>8</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2 в&nbsp;городском&nbsp;цикле, г/км*</th>
                                                <td>207</td>
                                                <td>222</td>
                                                <td>216</td>
                                                <td>232</td>
                                                <td>239</td>
                                                <td>248</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2 в&nbsp;загородном&nbsp;цикле, г/км*</th>
                                                <td>133</td>
                                                <td>144</td>
                                                <td>137</td>
                                                <td>147</td>
                                                <td>140</td>
                                                <td>153</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2 в&nbsp;смешанном&nbsp;цикле, г/км*</th>
                                                <td>161</td>
                                                <td>173</td>
                                                <td>166</td>
                                                <td>178</td>
                                                <td>177</td>
                                                <td>188</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Подвеска</div>
                                        <table>
                                            <tr>
                                                <th>Колесная база</th>
                                                <td>2590</td>
                                                <td>2590</td>
                                                <td>2590</td>
                                                <td>2590</td>
                                                <td>2590</td>
                                                <td>2590</td>
                                            </tr>
                                            <tr>
                                                <th>Минимальный дорожный просвет,&nbsp;мм*</th>
                                                <td>190</td>
                                                <td>190</td>
                                                <td>190</td>
                                                <td>190</td>
                                                <td>190</td>
                                                <td>190</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя колея</th>
                                                <td>1557 (шины 16")</td>
                                                <td>1557 (шины 16")</td>
                                                <td>1557 (шины 16")</td>
                                                <td>1557 (шины 16")</td>
                                                <td>1557 (шины 16")</td>
                                                <td>1557 / 1545<br> (шины 16" / 17")</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя колея</th>
                                                <td>1570 (шины 16")</td>
                                                <td>1570 (шины 16")</td>
                                                <td>1570 (шины 16")</td>
                                                <td>1570 (шины 16")</td>
                                                <td>1570 (шины 16")</td>
                                                <td>1568 / 1556<br> (шины 16" / 17")</td>
                                            </tr>
                                            <tr>
                                                <th>Передний свес</th>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                            </tr>
                                            <tr>
                                                <th>Задний свес</th>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                                <td>840</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя подвеска</th>
                                                <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                                <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                                <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                                <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                                <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                                <td>Независимая, стойки McPherson с пружинами и стабилизатором поперечной устойчивости</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя подвеска</th>
                                                <td>Полузависимая, пружинная, с амортизаторами</td>
                                                <td>Независимая, многорычажная</td>
                                                <td>Полузависимая, пружинная, с амортизаторами</td>
                                                <td>Независимая, многорычажная</td>
                                                <td>Полузависимая, пружинная, с амортизаторами</td>
                                                <td>Независимая, многорычажная</td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="detailedSpecLink">
                            <a href="http://www.hyundai.ru/configurator/car/22" target="_blank" onClick="ga('send', 'event', 'knopka', 'click');">Подробные характеристики</a>
                        </div>
                        <div class="spec_message">
                            <div>
                                <span class="add-blue-color">*</span> &mdash; Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа транспортного средства<br>
                                <span class="add-blue-color">**</span> &mdash; Показатели расхода топлива и массы выделяемого CO2 представлены согласно методике испытаний по Правилам ЕЭК ООН №83 и 101<br>
                                <span class="add-blue-color">***</span> &mdash; Согласно сертификату соответствия по Директиве ЕС 92/21/EEC представлено значение межосевого дорожного просвета<br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-type content-type__gallery">
                    <div id="contents_gallery" class="contents_gallery pip">
                        <div class="gallery_wrap">
                            <div class="title_wrap clearfix">
                                <h2 class="title_wrap_h2">Фото Hyundai Creta</h2>
                                <div class="thumbs-toggler">
                                    <a href="#" data-type="all" class="alive">Все</a>
                                    <a href="#" data-type="exterior">Экстерьер</a>
                                    <a href="#" data-type="interior">Интерьер</a>
                                </div>
                            </div>
                            <!-- GALLERY SLIDER-->
                            <ul id="all-gallery-items"style="display: none;">
                                <li><img data-type="exterior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_1.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_1.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_2.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_2.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_3.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_3.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_4.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_4.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_5.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_5.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_6.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_6.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_7.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_7.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_8.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_8.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_9.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_9.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_10.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_10.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_11.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_11.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_12.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_12.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_13.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_13.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_14.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_14.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_15.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_15.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="" src="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_preview_16.jpg" data-href="http://www.hyundai.ru/media/images/flat/CR/gallery/gallery_16.jpg"/></li>
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
                </div>
                <div class="prefooter-promo">
                    <div class="promo-main">
                        <div class="promo-main_cont">
                            <div class="text-desc">
                                <h2 class="promo-title">Станьте владельцем<br>Creta уже сегодня</h2>
					<span class="promo-text">Выберите ближайший дилерский центр, пройдите<br>
					тест-драйв и станьте владельцем Hyundai Creta.<br>
					Для вас всегда есть удобные программы<br>
					кредитования и другие предложения Drive Hyundai.
					</span>
                                <a href="javascript:void(0)" class="btn-flat zing_form_toggler_spec" for="testdrive">Пройти тест-драйв</a>
                            </div>
                            <img src="http://www.hyundai.ru/media/images/flat/CR/elements/promo_pic.png" width="525" height="333" alt="Тест драйв Hyundai Creta">
                        </div>
                        <div class="promo-grid">
                            <ul class="clearfix">
                                <li><a href="http://www.hyundai.ru/configurator" target="_blank"><span>Конфигуратор Creta</span></a></li>
                                <li><a target="_blank" href="http://www.hyundai.ru/media/downloads/accessoires/Creta_Acc.pdf"><span>Каталог аксессуаров</span></a></li>
                                <li><a href="http://www.hyundai.ru/configurator" target="_blank"><span>Рассчитать кредит</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="promo-slider_wrap">
                        <div class="promo-slider_cut">
                            <ul class="promo-slider">
                                <li>
                                    <a href="/Tucson/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/Tucson_8655a0ed607025b4.png" alt="Tucson">
                                        <span class="model">Tucson</span>
                                        <span class="price">от 1 449 900  &#8381;</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/SantaFe/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/Santa fe_8385a0ed6004e51b.png" alt="Santa fe">
                                        <span class="model">Santa fe</span>
                                        <span class="price">от 1 856 000  &#8381;</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/GrandSantaFe/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/Grand Santa fe_2625a0ed5fb73033.png" alt="Grand Santa fe">
                                        <span class="model">Grand Santa fe</span>
                                        <span class="price">от 2 324 000  &#8381;</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/H-1/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/H-1_2255a0ed60c04480.png" alt="H-1">
                                        <span class="model">H-1</span>
                                        <span class="price">от 1 969 000  &#8381;</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Elantra/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/Elantra_7505a0ed5f602de8.png" alt="Elantra">
                                        <span class="model">Elantra</span>
                                        <span class="price">от  957 000  &#8381;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="slider-prev"></div>
                        <div class="slider-next"></div>
                    </div>
                </div>	</div>
        </div>

        <!--RuTarget-->
        <script type="text/javascript">
            var _rutarget=window._rutarget||[];
            dataLayer.push({
                'event':'otherPage',
                'nosync': 'true'
            });
        </script>
        <!--/RuTarget-->
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>
    <script type="text/javascript" src="pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/cars/pip_flat_CR.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>