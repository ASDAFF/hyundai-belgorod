<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Santa Fe цена. Купить новый Хендай Санта Фе у официального дилера.");
$APPLICATION->SetTitle("SantaFe");
?>

    <link type="text/css" href="http://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="http://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="http://www.hyundai.ru/media/css/cars/pip_flat_SF.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <style>
            .parallax0 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax1 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax2 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax3 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax4 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax5 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_6.jpg') no-repeat fixed 50% 50% #fff;}
            body.mobile .parallax {height:450px;}
            body.mobile .parallax0 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}
            body.mobile .parallax1 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_2.jpg') center top no-repeat #e3e3e3;}
            body.mobile .parallax2 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_3.jpg') center top no-repeat #fff;}
            body.mobile .parallax3 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_4.jpg') center top no-repeat #fff;}
            body.mobile .parallax4 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_5.jpg') center top no-repeat #fff;}
            body.mobile .parallax5 {background:url('http://www.hyundai.ru/media/images/flat/SF/elements/parallax_6.jpg') center top no-repeat #fff;}
        </style>



        <div class="wrap" id="wrap">
            <div class="gallery-view-wrap">
                <div class="gallery-view-holder">
                    <div class="gallery-view-slider">
                        <ul></ul>
                    </div>
                    <div class="topline">
                        <img src="http://www.hyundai.ru/media/images/flat/logo-wht-s.png" width="150" height="20">
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
                <div class="cubebox" id="cubebox" style="height: 550px;">
                    <div class="cubelist" style="height: 550px;">
                        <div class="items" style="height: 550px;">
                            <div class="item" style="height: 550px;">
                                <div class="item_wrap">
                                    <div class="main mkv">
                                        <div class="title">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/logo.png" title="Santa Fe" alt="Эмблема Santa Fe">
                                            <span>Весь мир у ваших колес!</span>
                                        </div>
                                        <div class="title-price">
                                            <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                            <? profit_to_url($APPLICATION->GetCurPage()); ?> <br>
                                            <a href="/start?model=santafe" class="title-price-notice">В кредит от 12 000 ₽ / месяц</a>
                                        </div>
                                        <?
                                        model_credit(
                                            array(
                                                array("val" => "Выгода до","text" => "<b>300 000 ₽</b><sup>1</sup>"),
                                                array("text" => "<b>КАСКО</b> в подарок!<sup>2</sup>")
                                            )
                                        );
                                        ?>
                                        <a href="/offer/" class="btn-flat">Все предложения</a>
                                        <div class="title-list">
                                            <ul>
                                                <li>Система полного<br>привода</li>
                                                <li>Макс. мощность<br><strong>200 л.с.</strong></li>
                                            </ul>
                                            <ul>
                                                <li>Функциональный<br>руль</li>
                                                <li>Большой список<br>опций</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="view-360_wrap">
                                        <img class="progress-last-frame" alt="" src="http://www.hyundai.ru/media/images/common/transparent.gif"/>
                                        <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                        <div class="spritespin" data-model="santafe"></div>
                                    </div>
                                    <div class="view-360-color-selector">
                                        <ul>
                                            <li data-title="Creamy White"	data-color="Creamy_White" class="view-360-color-selector__item"><span style="background-color: #E8E7E1;"></span>Creamy White</li>
                                            <li data-title="Vanilla White"	data-color="Vanilla_White" class="view-360-color-selector__item"><span style="background-color: #E3E1D8;"></span>Vanilla White</li>
                                            <li data-title="Tan Brown"		data-color="Tan_Brown" class="view-360-color-selector__item"><span style="background-color: #675D54;"></span>Tan Brown</li>
                                            <li data-title="White Crystal"	data-color="White_Crystal" class="view-360-color-selector__item"><span style="background-color: #ECF0F2;"></span>White Crystal</li>
                                            <li data-title="Phantom Black"	data-color="Phantom_Black" class="view-360-color-selector__item"><span style="background-color: #111111;"></span>Phantom Black</li>
                                            <li data-title="Red Merlot"		data-color="Red_Merlot" class="view-360-color-selector__item"><span style="background-color: #9c3a43;"></span>Red Merlot</li>
                                            <li data-title="Sleek Silver"	data-color="Sleek_Silver" class="view-360-color-selector__item"><span style="background-color: #C4C7C9;"></span>Sleek Silver</li>
                                            <li data-title="Titanium Silver"data-color="Titanium_Silver" class="view-360-color-selector__item"><span style="background-color: #6A6B66;"></span>Titanium Silver</li>
                                            <li data-title="Ocean view"		data-color="Ocean_view" class="view-360-color-selector__item"><span style="background-color: #45545F;"></span>Ocean view</li>
                                            <li data-title="Mystic Beige"	data-color="Mystic_Beige" class="view-360-color-selector__item"><span style="background-color: #ABA8A0;"></span>Mystic Beige</li>
                                            <li data-title="Chalk Beige"	data-color="Chalk_Beige" class="view-360-color-selector__item"><span style="background-color: #e5e3e0;"></span>Chalk Beige</li>
                                            <li data-title="Mineral Blue"	data-color="Mineral_Blue" class="view-360-color-selector__item"><span style="background-color: #91BDC0;"></span>Mineral Blue</li>
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
                                    <li class="on"><a class="main-toggler main-toggler__explore" href="#" data-href="#content-type__explore" title="Обзор">ОБЗОР</a></li><!--
					 --><li><a class="main-toggler main-toggler__specs" href="#" data-href="#content-type__specs" title="Характеристики">ХАРАКТЕРИСТИКИ</a></li><!--
					 --><li><a class="configurator" href="http://www.hyundai.ru/configurator/car/17" target="_blank" title="Цены комплектации">ЦЕНЫ И КОНФИГУРАЦИИ</a></li><!--
					 --><li class="broshure-item" title="Каталог"><a data-gtm-havas-model="santafe" href="#" data-model="Santa Fe" for="brochures_request" class="zing_form_toggler broshure" target="_blank">КАТАЛОГ</a></li><!--
					 --><li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
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
                                    <div class="text1">Весь мир у ваших<br>колес!</div>
                                    <div class="text2">Дерзкий и элегантный — идеальное сочетание. Уникальный <br>
                                        образ Santa Fe. Аэродинамичный профиль позволяет снизить <br>
                                        расход топлива и шум в салоне.
                                    </div>
                                </div>
                                <div class="robust_on_style">
                                    <div class="highlights_thumbs">
                                        <div class="list">
                                            <ul>
                                                <li class="thumb1 front">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_1.jpg" data-url="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_1.jpg" alt="Элегантное исполнение" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Стильный</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                                <li class="thumb2 side">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_2.jpg" data-url="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_2.jpg" alt="Превосходство комфорта" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Мощный</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                                <li class="thumb3 safe">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_3.jpg" data-url="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_3.jpg" alt="Безопасность на высшем уровне" width="306" height="306" />
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
                                                    <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_popup_1.jpg" data-url="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_popup_1.jpg" width="623" height="306" alt="Решетка радиатора"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Стильный</strong>
                                                            Стремительный ход, ускользающие линии, динамика в совершенном проявлении. Стиль в каждой детали.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="thumb2 side">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_popup_2.jpg" data-url="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_popup_3.jpg" width="623" height="306" alt="Обивка салона"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Мощный</strong>
                                                            Линейка бензиновых и дизельных двигателей Hyundai Santa Fe мощностью до 200 л.с. Идеальное сочетание производительности и топливной экономичности.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="thumb3 safe">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_popup_3.jpg" data-url="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_popup_3.jpg" width="623" height="306" alt="Колесные диски"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Комфортный</strong>
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
                                            <h3>Внушительная мощность</h3>
                                            <p>Новое поколение системы впрыска<br>
                                                топлива обеспечивают лучшую<br>
                                                топливную экономичность, более<br>
                                                высокую производительность<br>
                                                и способствует уменьшению шумов.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_4.jpg" width="306" height="306" alt="Внушительная мощность" />
                                        </div>
                                    </div>
                                    <div class="mid">
                                        <div class="subject">
                                            <h3>Максимальный простор</h3>
                                            <p>В Santa Fe простор гарантирован<br>
                                                каждому пассажиру. Багажное<br>
                                                отделение объемом 582 литра<br>
                                                позволит вместить абсолютно все!
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_5.jpg" width="306" height="306" alt="Максимальный простор" />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="subject">
                                            <h3>Аудиосистема<br>премиум-класса</h3>
                                            <p>Акустическая обработка сигнала улучшает<br>
                                                калибровку звука и эффект объемного<br>
                                                стереозвучания. Наслаждайтесь<br>
                                                высочайшим качеством воспроизведения<br>
                                                на любом сиденье!
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/highlights_6.jpg" width="306" height="306" alt="Аудиосистема премиум-класса" />
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
                                            <li class="list-item child-1"><a class="list-item__link video_link" href="#" data-src="hO-F9IpaCQE"></a></li>
                                            <li class="list-item child-2"><a class="list-item__link video_link" href="#" data-src="xyNAC8whS2A"></a></li>
                                            <li class="list-item child-3"><a class="list-item__link video_link" href="#" data-src="cRya1zc5d3Q"></a></li>
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
                                    <div class="text1">Этот автомобиль<br>
                                        изменит ваш<br>
                                        взгляд на мир
                                    </div>
                                    <div class="text2">Дерзкий и элегантный — идеальное сочетание. Уникальный<br>
                                        образ Santa Fe. Аэродинамичный профиль позволяет снизить<br>
                                        расход топлива и шум в салоне.
                                    </div>
                                </div>
                            </div>
                            <div class="view_wrap">
                                <div class="pos">
                                    <ul class="view">
                                        <li class="front">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="http://www.hyundai.ru/media/images/flat/SF/elements/angle_1.png" alt="Фото экстерьера Солярис" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Дневные ходовые огни</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Передние фары с ксеноновыми<br>лампами</span></span></div>
                                                        <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Решетка радиатора</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_popup_2.jpg" width="470" height="470" alt="Дневные ходовые огни" /></div>
                                                            <div class="txt">
                                                                <strong>Дневные ходовые огни</strong>
                                                                Светодиодные дневные ходовые огни придают<br>
                                                                спортивный вид и повышают безопасность в дневное время.<br>
                                                                Кроме того, встроенные противотуманные<br>
                                                                фары обеспечивают максимальную видимость,<br>
                                                                повышая безопасность в любую погоду.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_popup_1.jpg" width="470" height="470" alt="Передние фары с ксеноновыми лампами" /></div>
                                                            <div class="txt">
                                                                <strong>Передние фары с ксеноновыми лампами</strong>
                                                                Santa Fe оборудован газоразрядными лампами<br>
                                                                высокой интенсивности, которые повышают<br>
                                                                видимость. Яркие лампы и спортивные,<br>
                                                                прямоугольной формы линзы улучшают внешний вид автомобиля.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_popup_3.jpg" width="470" height="470" alt="Решетка радиатора" /></div>
                                                            <div class="txt">
                                                                <strong>Решетка радиатора</strong>
                                                                Харизматичность внешности Santa Fe<br>
                                                                подчеркивается шестиугольной<br>
                                                                решеткой радиатора с тремя<br>
                                                                горизонтальными хромированными элементами,<br>
                                                                создающей одновременно элегантный<br>
                                                                и уверенный образ автомобиля.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="side">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="http://www.hyundai.ru/media/images/flat/SF/elements/angle_2.png" alt="Вид сбоку" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодный повторитель<br>указателей поворота</span></span></div>
                                                        <!-- 											<div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Панорамная крыша с люком</span></span></div> -->
                                                        <div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Рейлинги на крыше</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_popup_6.jpg" width="470" height="470" alt="Светодиодный повторитель указателей поворота" /></div>
                                                            <div class="txt">
                                                                <strong>Светодиодный повторитель указателей поворота</strong>
                                                                В светодиодных повторителях указателей поворота сочетаются стиль и функциональность, а плафоны подсветки околодверного пространства делают облик автомобиля еще более технологичным и привлекательным.
                                                            </div>
                                                        </li>
                                                        <!--
                                                                                                    <li>
                                                                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                                        <div class="img"><img src="/media/images/flat/SF/elements/exterior_popup_4.jpg" width="470" height="470" alt="Панорамный люк" /></div>
                                                                                                        <div class="txt">
                                                                                                            <strong>Панорамная крыша с люком</strong>
                                                                                                            Панорамная крыша с люком обеспечивает еще большую
                                                                                                            открытость по сравнению с обычной панорамной крышей
                                                                                                            за счет устранения центральной балки потолка и
                                                                                                            использования шторки с электроприводом.
                                                                                                        </div>
                                                                                                    </li>
                                                        -->
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_popup_5.jpg" width="470" height="470" alt="Багажник на крыше" /></div>
                                                            <div class="txt">
                                                                <strong>Рейлинги на крыше</strong>
                                                                Рейлинги добавляют последний штрих,<br>
                                                                завершая динамичность и изысканность<br>
                                                                городского внедорожника.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="rear">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="http://www.hyundai.ru/media/images/flat/SF/elements/angle_3.png" alt="Вид багажника" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодные фонари</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_popup_7.jpg" width="470" height="470" alt="Светодиодные фонари" /></div>
                                                            <div class="txt">
                                                                <strong>Светодиодные фонари</strong>
                                                                Роскошные светодиодные фонари максимально увеличивают
                                                                видимость и придают лаконичности задней части автомобиля.
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
                                                    <span class="img"><img width="306" height="200" alt="Сдвоенные выхлопные трубы" src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Сдвоенные выхлопные трубы</strong>
											Говорят о спортивном характере
											Santa Fe.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Задний спойлер со светодиодами" src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_2.jpg"/></span>
										<span class="description">
											<strong>Задний спойлер со светодиодами</strong>
											Светодиоды позволяют повысить
											безопасность. Они удачно сочетаются
											с задним спойлером и дверью.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Панорамная крыша с люком" src="http://www.hyundai.ru/media/images/flat/SF/elements/exterior_3.jpg"/></span>
										<span class="description">
											<strong>Панорамная крыша с люком</strong>
											Глянцево-черная отделка вокруг окон
											Santa Fe пришлась бы впору и седану
											класса люкс.
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
                                    <div class="text1">Оснащение<br>
                                        превосходит самые<br>
                                        смелые ожидания</div>
                                    <div class="text2">Невиданные ранее внимание к деталям и удивительное<br>
                                        ощущение роскоши – на что бы ни упал Ваш взгляд и чего бы<br>
                                        ни коснулась Ваша рука.
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
                                                        <img src="http://www.hyundai.ru/media/images/flat/SF/elements/view_1.jpg" width="1050" height="540" alt="Фото интерьера салона Солярис" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">11</a></div>
                                                            <div class="plus plus2"><a href="#">12</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scene2">
                                                    <div class="img">
                                                        <img src="http://www.hyundai.ru/media/images/flat/SF/elements/view_2.jpg" width="1050" height="540" alt="Фото интерьера салона Солярис" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">13</a></div>
                                                            <div class="plus plus2"><a href="#">14</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="pop_11">
                                            <div class="details_txt">
                                                <strong>Климат-контроль</strong>
                                                <p>Водитель и передний пассажир могут установить желаемые температурные режимы, которые удовлетворяют каждого.</p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_popup_1.jpg" width="525" height="540" alt="Полностью автоматический кондиционер" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_12">
                                            <div class="details_txt">
                                                <strong>Функциональный подлокотник</strong>
                                                <p>Функциональный подлокотник имеет вместительный ящик для хранения для всего, от монет до безделушек.</p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_popup_2.jpg" width="525" height="540" alt="Напольная консоль" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_13">
                                            <div class="details_txt">
                                                <strong>Расположение сидений</strong>
                                                <p>Компонуйте положение сидений по вашему усмотрению.<br>
                                                    Santa Fe может вместить до 7 человек и разнообразный груз.</p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_popup_3.jpg" width="525" height="540" alt="Расположение сидений" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_14">
                                            <div class="details_txt">
                                                <strong>Багажное отделение</strong>
                                                <p>К вашим услугам багажное отделение объемом 534 + 48 литров.
                                                    Дорожные сумки, чемоданы, спортивные принадлежности —
                                                    в основное багажное отделение и расположенный под ним
                                                    дополнительный отсек Santa Fe поместится абсолютно все.
                                                </p>
                                            </div>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_popup_4.jpg" width="525" height="540" alt="Багажное отделение Santa Fe" />
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
                                                    <span class="img"><img width="306" height="200" alt="Крепление детского сиденья2" src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_5.jpg"/></span>
				                        <span class="description">
				                            <strong>Защита порогов от загрязнения</strong>
				                            Теперь выходить из автомобиля и садиться
				                            в него стало проще, чем когда-либо прежде.<br>
				                            И больше вы не испачкаете одежду о пороги.
				                        </span>
                                                </li>

                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Держатель для стаканов" src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_1.jpg"/></span>
										<span class="description">
											<strong>Держатель для стаканов</strong>
											Задние пассажиры не почувствуют
											себя обделенными, а значит —
											удовольствие от поездки получит
											каждый!
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Центральная консоль" src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_2.jpg"/></span>
				                        <span class="description">
				                            <strong>Центральная консоль</strong>
											Функциональный подлокотник<br>
											заключает в себе объемный отсек<br>
											для хранения любых мелочей.
				                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="carousel-item morelist">
                                            <ul class="clearfix">
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Передняя панель" src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_3.jpg"/></span>
				                        <span class="description">
				                            <strong>Передняя панель</strong>
											Каждая деталь передней панели<br>
											выполнена с особой тщательностью<br>
											и в моментально узнаваемом стиле.
				                        </span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Крепление детского сиденья" src="http://www.hyundai.ru/media/images/flat/SF/elements/interior_4.jpg"/></span>
				                        <span class="description">
				                            <strong>Крепление детского сиденья</strong>
											Все сиденья оснащены креплениями<br>
											стандарта Isofix, поэтому установить<br>
											детское кресло — легко и просто.
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
                                    <div class="text1">Спортивность<br>и городская<br>элегантность</div>
                                    <div class="text2">Дерзкий и элегантный — идеальное сочетание. Уникальный<br>
                                        образ Santa Fe. Аэродинамичный профиль позволяет снизить<br>
                                        расход топлива и шум в салоне.
                                    </div>
                                </div>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li class="on"><a href="#">2.4 MPi</a></li><!-- no space
						--><li><a href="#">2.2 CRDi</a></li>
                                </ul>
                            </div>
                            <div class="engine_list">
                                <ul>
                                    <li>
                                        <div class="engine1">Theta II 2.4 MPi</div>
                                        <p>Усовершенствованная система впуска с изменяемой
                                            геометрией впускного тракта обеспечивает более высокую
                                            мощность и топливную экономичность:<br>
                                            Theta II 2.4 MPi выдает максимальную мощность 171 л.с. при 6000 об/мин.
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="http://www.hyundai.ru/media/images/flat/SF/elements/performance_graph.png" width="470" height="530" alt="График показателей двигателя Gamma 1.4" /><br>
                                                <div class="text"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/performance_graph_text.png" width="470" height="530" alt="" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt></dt>
                                                <dd><strong>171</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt></dt>
                                                <dd><strong>225</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="engine1">R 2.2 VGT CRDi</div>
                                        <p>Максимальная мощность дизельного двигателя 2.2 CRDi
                                            равняется  200 л.с. при 3 800 об/мин, а максимальный
                                            крутящий момент 440Nm при 1750 - 2750 об/мин.<br>
                                            Новое поколение системы впрыска топлива обеспечивают
                                            лучшую топливную экономичность, более высокую
                                            производительность и способствует уменьшению шумов.
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="http://www.hyundai.ru/media/images/flat/SF/elements/performance_graph_2.png" class="lazy" width="470" height="530" alt="График показателей двигателя Gamma 1.6" /><br>
                                                <div class="text"><img src="http://www.hyundai.ru/media/images/flat/SF/elements/performance_graph_2_text.png" class="lazy" width="470" height="530" alt="" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt></dt>
                                                <dd><strong>200</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt></dt>
                                                <dd><strong>440</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
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
							6-ступенчатая АКПП проста в использовании. Низкие<br>
							эксплуатационные расходы и удобство. Кроме того, вам<br>
							никогда не придется менять трансмиссионное масло.
<!-- 							<span class="notemark">только для двигателя 1,6 л</span> -->
						</span>
                                    <div class="btm_img"><img class="lazy" width="525" height="465" alt="Автоматическая коробка переключения передач" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="/media/images/flat/SF/elements/performance_1.jpg" /></div>
                                </li>
                                <li>
						<span class="description">
							<strong>Механическая коробка передач</strong>
							В 6-ступенчатой МКПП используется трансмиссионное масло<br>
							с постоянной низкой вязкостью, многоконусные синхронизаторы<br>
							для плавного переключения передач и др.
<!-- 							<span class="notemark">только для двигателя 1,6 л</span> -->
						</span>
                                    <div class="btm_img"><img class="lazy" width="525" height="465" alt="Механическая коробка переключения передач" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="/media/images/flat/SF/elements/performance_2.jpg" /></div>
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
                                    <div class="text2">Отдыхайте и просто наслаждайтесь поездкой — высокие<br>
                                        технологии стоят на страже вашей безопасности.
                                    </div>
                                </div>
                            </div>
                            <div class="scene_wrap">
                                <div class="text_wrap">
						<span class="scene_text">
						<strong>Электронный контроль устойчивости (ESC)</strong>
						Система электронного контроля устойчивости обеспечивает<br>
						превосходное торможение, автоматически применяя<br>
						соответствующее тормозное усилие на каждом колесе с учетом<br>
						крутящего момента двигателя и дорожных условий.
						</span>
                                </div>
                                <div class="scene">
                                    <img class="car" src="http://www.hyundai.ru/media/images/flat/SF/elements/safety_1.jpg" width="940" height="" title="" alt="Электронный контроль устойчивости (ESC)">
                                </div>
                            </div>

                            <div class="safety_slider-wrap">
                                <ul class="safety_slider">
                                    <li class="safety_slider-item alive" class="alive">
                                        <img class="lazy" alt="Система помощи при трогании на подъеме (HAC)" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/SF/elements/safety_slider_1.jpg" width="1920" height="540">
							<span><strong>Система помощи при трогании на подъеме (HAC)<br>
                                    и управления торможением на спуске (DBC)</strong>
							Система HAC определяет, когда автомобиль находится<br>
							на подъеме, и автоматически задействует тормоза<br>
							для предотвращения опасного откатывания назад.<br>
							Система DBC помогает сохранить контроль над<br>
							автомобилем во время движения со склона.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="http://www.hyundai.ru/media/images/flat/SF/elements/safety_slider_2.jpg" width="1920" height="540" alt="BAS (Система помощи при торможении)">
							<span><strong>BAS (Система помощи при торможении)</strong>
							Исследования показали, что, попав в неожиданную ситуацию,<br>
							водители часто оказываются не в состоянии нажать на педаль<br>
							тормоза с нужной силой. На выручку им придет система помощи<br>
							при торможении компании Hyundai.<br>
							Распознав экстренную ситуацию, система увеличивает давление<br>
							на тормоза, обеспечивая максимально эффективное торможение.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="http://www.hyundai.ru/media/images/flat/SF/elements/safety_slider_3.jpg" width="1920" height="540" alt="Высокоэффективная тормозная система">
							<span><strong>Высокоэффективная тормозная система</strong>
							C четырьмя тормозными дисками обеспечивает идеальное<br>
							замедление и стабильную работу систем ABS и EBD даже<br>
							при очень динамичном вождении.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="http://www.hyundai.ru/media/images/flat/SF/elements/safety_slider_4.jpg" width="1920" height="540" alt="VSM (Система управления стабилизацией)">
							<span><strong>VSM (Система управления стабилизацией)</strong>
							Уверенное маневрирование даже при потере сцепления с дорогой.<br>
							Система VSM помогает восстановить курсовую устойчивость.
							</span>
                                    </li>
                                </ul>
                                <ul class="safety_slider-paginator">
                                    <li class="alive">
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/SF/elements/safety_preview_1.jpg" width="90" height="90">
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/SF/elements/safety_preview_2.jpg" width="90" height="90">
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/SF/elements/safety_preview_3.jpg" width="90" height="90">
                                        <!-- 							<div class="bordered-ghost"></div> -->
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="http://www.hyundai.ru/media/images/common/transparent.gif" data-original="http://www.hyundai.ru/media/images/flat/SF/elements/safety_preview_4.jpg" width="90" height="90">
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
                                    <div class="text2">Невиданные ранее внимание к деталям и удивительное<br>
                                        ощущение роскоши – на что бы ни упал ваш взгляд и чего бы<br>
                                        ни коснулась ваша рука.
                                    </div>
                                </div>
                            </div>
                            <div class="main_wrap">
                                <ul class="list_wrap">
                                    <li class="list list1">
                                        <a href="#">
                                            <strong>Система помощи<br>при парковке</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_1.jpg" width="470" height="250" alt="Помощь при парковке" />
                                        </a>
                                    </li>
                                    <li class="list list2">
                                        <a href="#">
                                            <strong>Приборная панель<br>Supervision</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_2.jpg" width="470" height="250" alt="Приборная панель Supervision" />
                                        </a>
                                    </li>
                                    <li class="list list3">
                                        <a href="#">
                                            <strong>Функциональный<br>руль</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_3.jpg" width="470" height="250" alt="Функциональный руль" />
                                        </a>
                                    </li>
                                    <li class="list list4">
                                        <a href="#">
                                            <strong>Боковая лампа</strong>
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_4.jpg" width="470" height="250" alt="Боковая лампа" />
                                        </a>
                                    </li>
                                </ul>


                                <div class="convenience__slider-cut">
                                    <ul class="view_wrap">
                                        <li class="view view1 alive">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_popup_1.jpg" width="940" height="500" alt="Система помощи при парковке" />
                                            <div class="text">
                                                <strong>Система помощи при парковке</strong>
                                                Изображение с камеры заднего вида транслируется<br>
                                                на дисплей мультимедиа системы. Указатели помогают вам<br>
                                                определить свое положение по отношению к другим<br>
                                                автомобилям и бордюру. Датчики в заднем бампере<br>
                                                реагируют на объекты, которых вы не видите,<br>
                                                и предупреждают о них звуковым сигналом.
                                            </div>
                                        </li>
                                        <li class="view view2">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_popup_2.jpg" width="940" height="500" alt="Подсветка приборной панели" />
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
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_popup_3.jpg" width="940" height="500" alt="Система управления на руле" />
                                            <div class="text">
                                                <strong>Органы управления на руле</strong>
                                                Регулируйте любые настройки аудиосистемы , а также управляйте круиз-контролем, не отнимая рук от рулевого колеса.
                                            </div>
                                        </li>
                                        <li class="view view4">
                                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_popup_4.jpg" width="940" height="500" alt="Автоматический климат-контроль" />
                                            <div class="text">
                                                <strong>Боковая лампа
                                                </strong>
                                                Вы поворачиваете — она загорается.<br>
                                                Боковая лампа автоматически загорается<br>
                                                вместе с сигналом поворота, увеличивая<br>
                                                видимость спереди и сбоку автомобиля.
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
                                                                                        <span class="img"><img width="306" height="200" alt="Ионизатор воздуха" src="/media/images/flat/SF/elements/convenience_5.jpg"/></span>
                                                                                        <span class="description">
                                                                                            <strong>Ионизатор воздуха</strong>
                                                                                            Путешествуйте в здоровой и приятной<br>
                                                                                            атмосфере благодаря ионизатору,<br>
                                                                                            который очищает и дезодорирует<br>
                                                                                            воздух в салоне, а также подавляет<br>
                                                                                            размножение бактерий.
                                                                                        </span>
                                                                                    </li>
                                                -->
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Бесконтактный ключ" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_6.jpg"/></span>
										<span class="description">
											<strong>Бесконтактный ключ</strong>
											Это простой и быстрый способ<br>
											запустить двигатель. Единственное<br>
											требование: ключи должны находиться<br>
											в автомобиле. Вам остается лишь<br>
											нажать на кнопку.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Окна с безопасными стеклоподъемниками" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_7.jpg"/></span>
										<span class="description">
											<strong>Окна с безопасными<br>стеклоподъемниками</strong>
											Электростреклоподъемники
											автоматически опускают стекло
											при обнаружении препятствия.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Обогрев лобового стекла" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_8.jpg"/></span>
										<span class="description">
											<strong>Электронный стояночный<br>тормоз (EPB)</strong>
											Поездки с включенным стояночным
											тормозом остались в прошлом.<br>
											Активируйте стояночный тормоз.
											Запустив двигатель, вы автоматически
											прекратите работу тормоза.
										</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="carousel-item morelist">
                                            <ul class="clearfix">

                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Датчик дождя" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_9.jpg"/></span>
										<span class="description">
											<strong>Датчик дождя</strong>
											Стеклоочистители больше не ждут вашей команды.<br>
											Датчик автоматически включает их<br>
											при обнаружении дождя, улучшая видимость
											и делая поездку еще более комфортной.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Автоматическая система предотвращения запотевания" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_10.jpg"/></span>
										<span class="description">
											<strong>Автоматическая система предотвращения запотевания</strong>
											Cистема решит проблему до того,<br>
											как вы ее заметите.<br>
											Определив конденсацию на лобовом стекле,
											система запускает климат-контроль,
											что повышает видимость и безопасность.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Коленная подушка безопасности водителя" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_11.jpg"/></span>
										<span class="description">
											<strong>Коленная подушка безопасности водителя</strong>
											В безопасности нет мелочей.<br>
											Коленная подушка безопасности не только
											защищает область таза и колен, но также
											предотвращает смещение водителя за пределы
											зоны действия подушек безопасности.
										</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="carousel-item morelist">
                                            <ul class="clearfix">

                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Обогреваемые стеклоочистители" src="http://www.hyundai.ru/media/images/flat/SF/elements/convenience_12.jpg"/></span>
										<span class="description">
											<strong>Подогрев зоны покоя<br>стеклоочистителей</strong>
											Скажите «нет» замерзшим окнам.<br>
											Обогреваемые зоны покоя стеклоочистителей
											предотвратят обмерзание щеток стеклоочистителей.
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
                </div>
                <div class="content-type content-type__specs">
                    <div id="contents_specs" class="contents_specs pip">
                        <div class="specs_wrap">
                            <div class="title_wrap clearfix">
                                <h2 class="title_wrap_h2">Технические характеристики Hyundai Santa Fe</h2>
                                <a href="#" class="open-all isWillClose">Свернуть все</a>
                            </div>
                            <div class="specs-listing_wrap">
                                <ul class="specs-listing">
                                    <li class="head-line">
                                        <table>
                                            <tr>
                                                <th>Модификации</th>
                                                <td>2.4 MPI - 6AT</td>
                                                <td>2.2 CRDi - 6AT</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div class="opened">Двигатель</div>
                                        <table>
                                            <tr>
                                                <th>Мощность*</th>
                                                <td>171 л.с.</td>
                                                <td>200 л.с.</td>
                                            </tr>
                                            <tr>
                                                <th>Объем двигателя</th>
                                                <td>2.4 л</td>
                                                <td>2.2 л</td>
                                            </tr>
                                            <tr>
                                                <th>Двигатель</th>
                                                <td>Theta II 2,4 MPI D-CVVT</td>
                                                <td>R2,2 CRDi Diesel</td>
                                            </tr>
                                            <tr>
                                                <th>Объем, см3</th>
                                                <td>2359</td>
                                                <td>2199</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность, кВт</th>
                                                <td>126</td>
                                                <td>147</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность, л.с.</th>
                                                <td>171</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <th>Топливный бак</th>
                                                <td>64</td>
                                                <td>64</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Динамика</div>
                                        <table>
                                            <tr>
                                                <th>Динамические характеристики</th>
                                                <td>6АКПП</td>
                                                <td>6АКПП</td>
                                            </tr>
                                            <tr>
                                                <th>Привод</th>
                                                <td>Полный</td>
                                                <td>Полный</td>
                                            </tr>
                                            <tr>
                                                <th>Тип трансмиссии</th>
                                                <td>Гидромеханическая</td>
                                                <td>Гидромеханическая</td>
                                            </tr>
                                            <tr>
                                                <th>Ускорение 0-100 км/ч, сек </th>
                                                <td>11.5</td>
                                                <td>9.6</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. скорость, км/ч </th>
                                                <td>190</td>
                                                <td>203</td>
                                            </tr>
                                        </table>
                                    </li>

                                    <li class="listing-item">
                                        <div>Расход топлива</div>
                                        <table>
                                            <tr>
                                                <th>Городской цикл, л/100 км*</th>
                                                <td>14.1</td>
                                                <td>10.1</td>
                                            </tr>
                                            <tr>
                                                <th>Загородный цикл, л/100 км*</th>
                                                <td>7.5</td>
                                                <td>6.4</td>
                                            </tr>
                                            <tr>
                                                <th>Смешанный цикл, л/100 км*</th>
                                                <td>9.9</td>
                                                <td>7.8</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2<br>в городском цикле, г/км*</th>
                                                <td>327</td>
                                                <td>265</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2<br>в загородном цикле, г/км*</th>
                                                <td>174</td>
                                                <td>169</td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2<br>в смешанном цикле, г/км*</th>
                                                <td>230</td>
                                                <td>205</td>
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
                                            </tr>
                                            <tr>
                                                <th>Минимальный дорожный<br>просвет, мм*</th>
                                                <td>185</td>
                                                <td>185</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя колея</th>
                                                <td>1 633 / 1 628<br>(шины 17" / 18" и 19")</td>
                                                <td>1 633 / 1 628<br>(шины 17" / 18" и 19")</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя колея</th>
                                                <td>1 644 / 1 639<br>(шины 17" / 18" и 19")</td>
                                                <td>1 644 / 1 639<br>(шины 17" / 18" и 19")</td>
                                            </tr>
                                            <tr>
                                                <th>Передний свес</th>
                                                <td>940</td>
                                                <td>940</td>
                                            </tr>
                                            <tr>
                                                <th>Задний свес</th>
                                                <td>1060</td>
                                                <td>1060</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя подвеска</th>
                                                <td>Независимая,<br>типа McPherson<br>с пружинами, со стабилизатором поперечной устойчивости</td>
                                                <td>Независимая,<br>типа McPherson<br>с пружинами, со стабилизатором поперечной устойчивости</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя подвеска</th>
                                                <td>Независимая,<br>многорычажная,<br>со стабилизатором поперечной устойчивости</td>
                                                <td>Независимая,<br>многорычажная,<br>со стабилизатором поперечной устойчивости</td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="detailedSpecLink">
                            <a href="http://www.hyundai.ru/configurator/car/17" target="_blank" onClick="ga('send', 'event', 'knopka', 'click');">Подробные характеристики</a>
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
                <div class="prefooter-promo">
                    <div class="promo-main">
                        <div class="promo-main_cont">
                            <div class="text-desc">
                                <h2 class="promo-title">Станьте владельцем<br>Santa Fe уже сегодня</h2>
					<span class="promo-text">Выберите ближайший дилерский центр, пройдите
					тест-драйв и станьте владельцем Hyundai Santa Fe.<br>
					Для вас всегда есть удобные программы<br>
					кредитования и другие предложения Drive Hyundai.
					</span>
                                <a href="#" class="btn-flat zing_form_toggler_spec" for="testdrive">Пройти тест-драйв</a>
                            </div>
                            <img src="http://www.hyundai.ru/media/images/flat/SF/elements/promo_pic.png" width="525" height="350" alt="Тест драйв Хендай Солярис">
                        </div>
                        <div class="promo-grid">
                            <ul class="clearfix">
                                <li><a href="http://www.hyundai.ru/configurator" target="_blank"><span>Конфигуратор Santa Fe</span></a></li>
                                <li><a target="_blank" href="http://www.hyundai.ru/media/downloads/accessoires/SantaFe_Acc.pdf"><span>Каталог аксессуаров</span></a></li>
                                <li><a href="http://www.hyundai.ru/configurator" target="_blank"><span>Рассчитать кредит</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="promo-slider_wrap">
                        <div class="promo-slider_cut">
                            <ul class="promo-slider">
                                <li>
                                    <a href="/GrandSantaFe/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/Grand Santa fe_2625a0ed5fb73033.png" alt="Grand Santa fe">
                                        <span class="model">Grand Santa fe</span>
                                        <span class="price">от 2 324 000  &#8381;</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Tucson/" class="promo-slider-link">
                                        <img src="http://www.hyundai.ru/media/images/carmodels/Tucson_8655a0ed607025b4.png" alt="Tucson">
                                        <span class="model">Tucson</span>
                                        <span class="price">от 1 449 900  &#8381;</span>
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
                </div>
                <div class="disc-block"><p class="dicslamer-casco"><sup>1</sup>Выгода рассчитывается путем суммирования скидки 100 000 рублей (предоставляющейся от рекомендованной максимальной розничной цены с учетом НДС, приобретающим автомобиль Santa Fe 2017 производственного года) и скидки 200 000 рублей по программе трейд-ин для клиентов Hyundai. Предложение действительно до 28.02.2018г.<br>
                <sup>2</sup>6.9% годовых – процентная ставка в кредитном договоре. Валюта кредита - рубли РФ; уровень первоначального взноса от 30% от стоимости автомобиля. Срок кредита 12-36 месяцев. Программа распространяется на покупку в кредит Hyundai Santa Fe. Программой предусмотрено страхование жизни и здоровья заемщика. Минимальная сумма кредита – 50 000 руб., максимальная сумма кредита – 6, 500 000 руб.. Обязательно подтверждение дохода клиента. Залоговое обеспечение - залог приобретаемого ТС. Предложение действительно при подтверждении дохода Заемщика. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013г. Предложение действует с 01.02.18 по 28.02.18, не является офертой. Условия могут быть изменены Банком в одностороннем порядке.<br>
                <sup>3</sup>Полис КАСКО на безвозмездной основе оформляется на срок 1 (один) год в СПАО «Ингосстрах», ПАО «Росгосстрах» и СК «ВСК» при покупке Новой Hyundai Santa Fe в кредит по программе СТАРТ. Указанная информация носит справочный характер и не является публичной офертой. Условия и тарифы могут быть изменены СПАО «Ингосстрах», ПАО «Росгосстрах» и СК «ВСК» в одностороннем порядке. Предложение действует до 28.02.2018г.<br>
                </p>

               </div>
            </div>
        </div><!-- // container -->

        <!--RuTarget-->
        <script type="text/javascript" >
            var _rutarget = window._rutarget || [];
            _rutarget.push({'event': 'showOffer', 'sku': 'SantaFe'});
        </script>
        <!--/RuTarget-->
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>
    <script type="text/javascript" src="pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="pip_flat_SF.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>