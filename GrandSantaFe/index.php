<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить Hyundai Grand Santa Fe. Цена на Хендай Гранд Санта Фе у дилера");
$APPLICATION->SetTitle("GrandSantaFe");
?>
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/cars/pip_flat_GSF.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">





        <script>
            function cubeMotionInit() {
            }
            function cubeMotionJS() {
            }
        </script>

        <style>
            /* parallax bg */
            .parallax0 {background:url('/media/images/flat/GSF/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}/* dec 29 15 */
            .parallax1 {background:url('/media/images/flat/GSF/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}/* 2015-07-31 */
            .parallax2 {background:url('/media/images/flat/GSF/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax3 {background:url('/media/images/flat/GSF/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax4 {background:url('/media/images/flat/GSF/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}
            .parallax5 {background:url('/media/images/flat/GSF/elements/parallax_6.jpg') no-repeat fixed 50% 50% #fff;}

            body.mobile .parallax { height:450px;}
            body.mobile .parallax1 {background:url('/media/images/flat/GSF/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}/* dec 29 15 */
            body.mobile .parallax1 {background:url('/media/images/flat/GSF/elements/parallax_2.jpg') center top no-repeat #e3e3e3;}/* 2015-07-31 */
            body.mobile .parallax2 {background:url('/media/images/flat/GSF/elements/parallax_3.jpg') center top no-repeat #fff;}
            body.mobile .parallax3 {background:url('/media/images/flat/GSF/elements/parallax_4.jpg') center top no-repeat #fff;}
            body.mobile .parallax4 {background:url('/media/images/flat/GSF/elements/parallax_5.jpg') center top no-repeat #fff;}
            body.mobile .parallax5 {background:url('/media/images/flat/GSF/elements/parallax_6.jpg') center top no-repeat #fff;}
        </style>

        <div class="roadside24">
            <a href="/service/roadside-assistance" target="_blank"></a>
        </div>

        <div class="wrap" id="wrap">
            <div class="gallery-view-wrap">
                <div class="gallery-view-holder">
                    <div class="gallery-view-slider">
                        <ul></ul>
                    </div>
                    <div class="topline">
                        <img src="/media/images/flat/GSF/elements/logo-white.png">
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
                    <a class="closeButton" href="#" title="Закрыть">×</a>
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
                                            <img src="/media/images/flat/GSF/elements/logo.png" title="Santa Fe" alt="Эмблема Santa Fe">
                                            <span>Весь мир у ваших колес!</span>
                                        </div>
                                        <div class="title-price">
                                            <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                            <? profit_to_url($APPLICATION->GetCurPage()); ?> <br>
                                            <!--<a href="/start/" class="title-price-notice" style="padding: 0;">В кредит от 16 000 ₽ / месяц*</a>
                                            <div class="title-price-casco">+ каско в подарок!<sup>**</sup></div>-->
                                        </div>
                                        <a href="/all-offers/" class="btn-flat">Все предложения</a>
                                        <div class="title-list">
                                            <ul>
                                                <li>Система полного<br>привода</li>
                                                <li>Макс. мощность<br><strong>249 л.с.</strong></li>
                                            </ul>
                                            <ul>
                                                <li>Функциональный<br>руль</li>
                                                <li>Большой список<br>опций</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- 						<img src="/media/images/flat/GSF/elements/info_car_pic.png" class="info-car-pic"/> -->
                                    <div class="view-360_wrap">
                                        <!-- progress preview + progress loading ring -->
                                        <img class="progress-last-frame" alt="" src="/media/images/common/transparent.gif"/>
                                        <div class="progress-ring-wrap"><canvas id="progress-ring" class="progress-ring" width="200" height="200"></canvas></div>
                                        <div class="spritespin" data-model="grandsantafe"></div>
                                    </div>
                                    <div class="view-360-color-selector">
                                        <ul>
                                            <li data-title="Creamy White"	data-color="Creamy_White" class="view-360-color-selector__item"><span style="background-color: #E8E7E1;"></span>Creamy White</li>
                                            <li data-title="Red Merlot"		data-color="Red_Merlot" class="view-360-color-selector__item"><span style="background-color: #8D000B;"></span>Red Merlot</li>
                                            <li data-title="Timeless Black"	data-color="Timeless_Black" class="view-360-color-selector__item"><span style="background-color: #111111;"></span>Timeless Black</li>
                                            <li data-title="Tan Brown"		data-color="Tan_Brown" class="view-360-color-selector__item"><span style="background-color: #887B70;"></span>Tan Brown</li>
                                            <li data-title="Space Blue"		data-color="Space_Blue" class="view-360-color-selector__item"><span style="background-color: #1A1E2A;"></span>Space Blue</li>
                                            <li data-title="Hyper Metallic"	data-color="Hyper_Metallic" class="view-360-color-selector__item"><span style="background-color: #7C7B89;"></span>Hyper Metallic</li>
                                            <li data-title="Mystic Beige"	data-color="Mystic_Beige" class="view-360-color-selector__item"><span style="background-color: #ABA8A0;"></span>Mystic Beige</li>
                                            <li data-title="Sleek Silver"	data-color="Sleek_Silver" class="view-360-color-selector__item"><span style="background-color: #C4C7C9;"></span>Sleek Silver</li>
                                            <li data-title="Ocean View"		data-color="Ocean_View" class="view-360-color-selector__item"><span style="background-color: #45545F;"></span>Ocean View</li>
                                            <li data-title="Mineral Blue"	data-color="Mineral_Blue" class="view-360-color-selector__item"><span style="background-color: #375c7f;"></span>Mineral Blue</li>
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
				<li><span class="video" data-href="#contents_video">Видео</span></li>--><!--
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
					 --><li><a class="configurator" href="https://www.hyundai.ru/configurator/car/13" title="Цены комплектации">ЦЕНЫ И КОМПЛЕКТАЦИИ</a></li><!--
					 --><li class="broshure-item" title="каталог"><a data-gtm-havas-model="grandsantafe" href="#" data-model="Grand Santa Fe" for="brochures_request" class="zing_form_toggler broshure" target="_blank">КАТАЛОГ</a></li><!--
					 -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // new template -->

                <!-- content -->
                <div class="content-type content-type__explore on" >
                    <div id="contents_highlights" class="contents_highlights pip">
                        <div class="parallax parallax0"></div>
                        <div class="pip_cont">
                            <div class="text_play_wrap">
                                <div class="text_play">
                                    <h2 class="pip_title">ОСОБЕННОСТИ</h2>
                                    <div class="text1">Создан для любых<br>дорожных условий!</div>
                                    <div class="text2">Поможет вам реализовать свой потенциал, воодушевит<br>
                                        на новые подвиги и открытия. Он дарит комфорт на всех трех<br>
                                        рядах сидений. Готовьтесь к новым приключениям! <br>
                                    </div>
                                </div>
                                <div class="robust_on_style">
                                    <div class="highlights_thumbs">
                                        <div class="list">
                                            <ul>
                                                <li class="thumb1 front">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/GSF/elements/highlights_1.jpg" data-url="/media/images/flat/GSF/elements/highlights_1.jpg" alt="Элегантное исполнение" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Стильный</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                                <li class="thumb2 side">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/GSF/elements/highlights_2.jpg" data-url="/media/images/flat/GSF/elements/highlights_2.jpg" alt="Превосходство комфорта" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Вместительный</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                                <li class="thumb3 safe">
                                                    <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/GSF/elements/highlights_3.jpg" data-url="/media/images/flat/GSF/elements/highlights_3.jpg" alt="Безопасность на высшем уровне" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                        <span class="txt-desc">Мощный</span>
                                                        <span class="cover"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="view">
                                            <ul>
                                                <li class="thumb1 front">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/GSF/elements/highlights_popup_1.jpg" data-url="/media/images/flat/GSF/elements/highlights_popup_1.jpg" width="623" height="306" alt="Решетка радиатора"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Стильный</strong>
                                                            Стиль, технологии,
                                                            безопасность — легко понять,
                                                            что выделяет Grand Santa Fe
                                                            в ряду других автомобилей.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="thumb2 side">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/GSF/elements/highlights_popup_2.jpg" data-url="/media/images/flat/GSF/elements/highlights_popup_3.jpg" width="623" height="306" alt="Обивка салона"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Вместительный</strong>
                                                            Третий ряд сидений в стандартной комплектации позволяет перевозить до 7 человек.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="thumb3 safe">
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/GSF/elements/highlights_popup_3.jpg" data-url="/media/images/flat/GSF/elements/highlights_popup_3.jpg" width="623" height="306" alt="Колесные диски"></div>
                                                    <div class="txt-wrap">
                                                        <div class="txt">
                                                            <strong>Мощный</strong>
                                                            Двигатель стал легче
                                                            и компактнее, однако теперь
                                                            он более мощный и
                                                            экологически безопасный.
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
                                            <h3>Внушительная<br>мощность</h3>
                                            <p>
                                                У вас есть возможность купить Hyundai Grand Santa Fe с экономичным дизелем 2.2 CRDi 200 л.с. или мощным бензиновым 3.0 GDI 249 л.с.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="/media/images/flat/GSF/elements/highlights_4.jpg" width="306" height="306" alt="Внушительная мощность" />
                                        </div>
                                    </div>
                                    <div class="mid">
                                        <div class="subject">
                                            <h3>Увеличенный<br>кузов</h3>
                                            <p>Grand Santa Fe длиннее
                                                на 205 мм, <br>шире на 5 мм и выше
                                                на 10 мм, <br>а длина колесной базы <br>
                                                увеличена на 10 мм.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="/media/images/flat/GSF/elements/highlights_5.jpg" width="417" height="149" alt="Максимальный простор" />
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="subject">
                                            <h3>Аудиосистема<br>премиум-класса</h3>
                                            <p>Высококачественные динамики в количестве
                                                10 штук и внешний усилитель (опционально)
                                                — из этого состоит аудиосистема класса
                                                премиум, которая обладает выдающимся
                                                кристально чистым звучанием.
                                            </p>
                                        </div>
                                        <div class="image">
                                            <img src="/media/images/flat/GSF/elements/highlights_6.jpg" width="294" height="226" alt="Аудиосистема премиум-класса" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--
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
                                                    <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/y5tDz3UYINc?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                                    <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/7PETXirfJwM?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                                    <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/xyNAC8whS2A?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                                    <li class="list-item"><a class="list-item__link video_link" href="#" data-src="https://www.youtube.com/embed/cRya1zc5d3Q?rel=0&amp;showinfo=0;autoplay=1"></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    -->
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
                                    <div class="text2">Когда путешествуешь или просто выбираешься в город всей <br>
                                        семьей, одни из самых лучших моментов происходят <br>
                                        в автомобиле. Вы все вместе, в одном близком пространстве, <br>
                                        со всем необходимым в пределах досягаемости.
                                    </div>
                                </div>
                            </div>
                            <div class="view_wrap">
                                <div class="pos">
                                    <ul class="view">
                                        <li class="front">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="/media/images/flat/GSF/elements/angle_1.png" alt="Фото экстерьера Гранд Санта Фе" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Ксеноновые передние фары<br>со светодиодными габаритными огнями</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Противотуманные фары</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_2.jpg" width="470" height="470" alt="Ксеноновые передние фары со светодиодными габаритными огнями" /></div>
                                                            <div class="txt">
                                                                <strong>Ксеноновые передние<br>
                                                                    фары со светодиодными<br>
                                                                    габаритными огнями
                                                                </strong>
                                                                Наслаждайтесь лучшей видимостью днем и ночью благодаря ксеноновым фарам с омывателем и автокорректором, которые<br>не только освещают — они придают<br>автомобилю суперсовременный<br>внешний вид.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_1.jpg" width="470" height="470" alt="Противотуманные фары" /></div>
                                                            <div class="txt">
                                                                <strong>Противотуманные фары</strong>
                                                                Передние противотуманные фары обеспечивают отличную видимость, повышая безопасность в любую погоду. Также этому способствуют встроенные светодиодные дневные ходовые огни.
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="side">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="/media/images/flat/GSF/elements/angle_2.png" alt="Хендай Гранд Санте Фе – вид сбоку" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Наружные зеркала заднего вида</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>18- и 19-дюймовые<br>легкосплавные диски</span></span></div>
                                                        <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Панорамная крыша с люком</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_3.jpg" width="470" height="470" alt="Наружные зеркала заднего вида" /></div>
                                                            <div class="txt">
                                                                <strong>Наружные зеркала заднего вида</strong>
                                                                Наружные зеркала заднего вида с электроприводом складывания и подогревом обеспечат хорошую видимость в любую погоду.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_4.jpg" width="470" height="470" alt="18- и 19-дюймовые легкосплавные диски" /></div>
                                                            <div class="txt">
                                                                <strong>18- и 19-дюймовые<br>легкосплавные диски</strong>
                                                                Алюминиевые 18- и 19-дюймовые колесные
                                                                диски излучают спортивность и элегантность,
                                                                которые свойственны Grand Santa Fe.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_6.jpg" width="470" height="470" alt="Панорамная крыша с люком" /></div>
                                                            <div class="txt">
                                                                <strong>Панорамная крыша с люком</strong>
                                                                Наслаждайтесь панорамным видом солнечного неба, звезд или дождя, находясь в уютном салоне своего Grand Santa Fe. Панорамная крыша позволяет получить максимальное удовольствие от любой поездки!
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="rear">
                                            <div class="scene">
                                                <div class="car">
                                                    <img src="/media/images/flat/GSF/elements/angle_3.png" alt="Вид багажника" />
                                                    <div class="plus_wrap">
                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Светодиодные фонари</span></span></div>
                                                        <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Двойной глушитель</span></span></div>
                                                    </div>
                                                </div>
                                                <div class="sub_wrap">
                                                    <ul>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_5.jpg" width="470" height="470" alt="Светодиодные фонари" /></div>
                                                            <div class="txt">
                                                                <strong>Светодиодные фонари</strong>
                                                                Роскошные светодиодные фонари максимально увеличивают
                                                                видимость и придают лаконичности задней части автомобиля.
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                            <div class="img"><img src="/media/images/flat/GSF/elements/exterior_popup_7.jpg" width="470" height="470" alt="Двойной глушитель" /></div>
                                                            <div class="txt">
                                                                <strong>Двойной глушитель</strong>
                                                                Изящно встроенный в задний бампер двойной глушитель придает элегантность внешнему виду автомобиля.
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
                                    <li class="front on"><a href="#"><span class="progress"> </span><span class="txt">Вид спереди</span></a></li>
                                    <li class="side"><a href="#"><span class="progress"> </span><span class="txt">Вид сбоку</span></a></li>
                                    <li class="rear"><a href="#"><span class="progress"> </span><span class="txt">Вид сзади</span></a></li>
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
                                                    <span class="img"><img width="306" height="200" alt="Пластиковая защита бампера" src="/media/images/flat/GSF/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Пластиковая защита бампера</strong>
											Пластиковая защита переднего и заднего бамперов обеспечивает спокойствие при преодолении городских и загородных преград, а также придает уверенности дизайну автомобиля.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Фото: рейлинги на крыше Хендай Гранд Санта Фе" src="/media/images/flat/GSF/elements/exterior_2.jpg"/></span>
										<span class="description">
											<strong>Рейлинги на крыше</strong>
											Эстетически привлекательный дизайн<br>
											рейлингов с конструкцией закрытого<br>
											типа, дополняющий гладкую верхнюю<br>
											линию кузова Grand Santa Fe, делает<br>
											эти элементы больше, чем просто<br>
											практичными.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Широкие боковые стекла в задней части кузова" src="/media/images/flat/GSF/elements/exterior_3.jpg"/></span>
										<span class="description">
											<strong>Широкие боковые стекла<br>в задней части кузова</strong>
											Отличным обзором в Grand Santa Fe смогут насладиться даже пассажиры третьего ряда благодаря широким боковым стеклам в задней части кузова, которые обеспечивают максимально открытый вид из окон.
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
                                    <div class="text1">Первоклассный<br>
                                        комфорт<br>
                                        в повседневных<br>
                                        поездках
                                    </div>
                                    <div class="text2">
                                        Считайте, что это часть вашего дома — место, где вам<br> наиболее комфортно. Собирайте всех и отправляйтесь<br> в расслабляющую поездку.
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
                                                        <img src="/media/images/flat/GSF/elements/view_1.jpg" width="1050" height="540" alt="Фото интерьера салона Гранд Санта Фе" />
                                                        <div class="plus_wrap">
                                                            <div class="plus plus1"><a href="#">11</a></div>
                                                            <div class="plus plus2"><a href="#">12</a></div>
                                                            <div class="plus plus3"><a href="#">13</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scene2">
                                                    <div class="img">
                                                        <img src="/media/images/flat/GSF/elements/view_2.jpg" width="1050" height="540" alt="Фото интерьера салона Гранд Санта Фе" />
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
                                        <div class="pop_11">
                                            <div class="details_txt">
                                                <strong>Двухзонный климат-контроль</strong>
                                                <p>Комфортная температура в салоне для каждого пассажира? Без проблем! Двухзонный полностью автоматический климат-контроль обеспечит простое регулирование температуры для водителя и переднего пассажира.</p>
                                            </div>
                                            <img src="/media/images/flat/GSF/elements/interior_popup_1.jpg" width="525" height="540" alt="Напольная консоль" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_12">
                                            <div class="details_txt">
                                                <strong>Сиденья с электроприводом</strong>
                                                <p>Эргономичное сиденье водителя регулируется в 10, а переднего пассажира в 6 направлениях для обеспечения максимального комфорта, а атмосферу домашнего уюта еще более усилит поясничная поддержка с регулировкой в 4-х направлениях.</p>
                                            </div>
                                            <img src="/media/images/flat/GSF/elements/interior_popup_2.jpg" width="525" height="540" alt="Сиденья с электроприводом" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_13">
                                            <div class="details_txt">
                                                <strong class="light">Электронная регулировка сидений со встроенной памятью (IMS)</strong>
                                                <p>Предпочитаете определенные настройки сиденья?
                                                    Сохраните их. Электронная регулировка сидений
                                                    со встроенной памятью (IMS) позволяет сохранить
                                                    до двух вариантов положений,
                                                    включая углы боковых зеркал.
                                                </p>
                                            </div>
                                            <img src="/media/images/flat/GSF/elements/interior_popup_3.jpg" width="525" height="540" alt="Напольная консоль" />
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_14">
                                            <div class="details-item-images" data-current="1">
                                                <img src="/media/images/flat/GSF/elements/interior_popup_4-1.jpg" width="525" height="540" alt="Простое управление пространством салона" />
                                                <img src="/media/images/flat/GSF/elements/interior_popup_4-2.jpg" width="525" height="540" alt="Простое управление пространством салона" />
                                                <img src="/media/images/flat/GSF/elements/interior_popup_4-3.jpg" width="525" height="540" alt="Простое управление пространством салона" />
                                            </div>
                                            <div class="details_txt">
                                                <strong>Простое управление<br>пространством салона</strong>
                                                <p>Практичная и гибкая компоновка салона позволяет вам самим выбрать количество и расположение посадочных мест. В стандартном варианте исполнения с 7 посадочными местами третий ряд сидений складывается в ровный пол, а второй ряд сидений складывается в пропорции 4:2:4, оставляя место для любого багажа.</p>
                                                <div class="details-item-controls">
                                                    <div class="details-item-control current">7 мест</div>
                                                    <div class="details-item-control">5 мест</div>
                                                    <div class="details-item-control">4 места</div>
                                                </div>
                                            </div>
                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        </div>
                                        <div class="pop_15">
                                            <div class="details_txt">
                                                <strong>Панорамная крыша</strong>
                                                <p>
                                                    Наслаждайтесь панорамным видом солнечного неба, звезд или дождя, находясь в уютном салоне своего автомобиля! Панорамная крыша позволяет получить максимальное удовольствие от любой поездки, а шторка с электроприводом - простое управление обзором в Hyundai Grand Santa Fe.
                                                </p>
                                            </div>
                                            <img src="/media/images/flat/GSF/elements/interior_popup_5.jpg" width="525" height="540" alt="Панорамная крыша Hyundai Grand Santa Fe" />
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
                                                    <span class="img"><img width="306" height="200" alt="Комфортные подголовники передних сидений" src="/media/images/flat/GSF/elements/interior_1.jpg"/></span>
				                        <span class="description">
				                            <strong>Комфортные подголовники передних сидений</strong>
											Регулируемые в 4-х направлениях (вверх-вниз, влево-вправо) комфортные подголовники передних сидений обеспечат максимальный комфорт и безопасность.
				                        </span>
                                                </li>

                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Кондиционирование второго ряда сидений" src="/media/images/flat/GSF/elements/interior_2.jpg"/></span>
										<span class="description">
											<strong>Кондиционирование второго ряда сидений</strong>
											Кондиционирование обеспечит комфортную поездку пассажирам второго ряда сидений
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Подогрев сидений первого и второго ряда" src="/media/images/flat/GSF/elements/interior_3.jpg"/></span>
				                        <span class="description">
				                            <strong>Подогрев сидений первого<br>и второго рядов</strong>
											Поездки в холодное время года будут уютными и комфортабельными как для пассажиров первого, так и второго рядов благодаря подогреву сидений.
				                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="carousel-item morelist">
                                            <ul class="clearfix">
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Система отсеков для хранения" src="/media/images/flat/GSF/elements/interior_4.jpg"/></span>
				                        <span class="description">
				                            <strong>Система отсеков для хранения</strong>
											Grand Santa Fe оснащен несколькими отсеками для хранения, что помогает с легкостью брать с собой в дорогу большое количество нужных мелочей.				                        </span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Крепление детского сиденья" src="/media/images/flat/GSF/elements/interior_5.jpg"/></span>
				                        <span class="description">
				                            <strong>Крепление детского сиденья</strong>
											Сиденья оснащены креплениями<br>
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
                                    <div class="text1">Ему можно <br>доверять</div>
                                    <div class="text2">Лежит ваш путь в гору, через пустыню или заснеженную <br>
                                        глушь — это автомобиль, который позволяет воспользоваться<br>
                                        и насладиться моментом.
                                    </div>
                                </div>
                            </div>
                            <div class="menu">
                                <ul>
                                    <li class="on"><a href="#">3.0 GDI</a></li><!-- no space
						--><li><a href="#">2.2 CRDi</a></li>
                                </ul>
                            </div>
                            <div class="engine_list">
                                <ul>
                                    <li>
                                        <div class="engine1">3.0 GDI</div>
                                        <p>Двигатель стал легче и компактнее, однако теперь он
                                            более мощный и экологически безопасный. Бензиновый двигатель
                                            3.0 GDI имеет следующие характеристики: 6 цилиндров, 249 л. c.
                                            при 6400 об/мин и 306 Н·м при 5300 об/мин. Применение покрытия
                                            с пониженным коэффициентом трения и масляного насоса
                                            с регулируемым потоком повышает топливную экономичность.
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="/media/images/flat/GSF/elements/performance_graph.png" width="470" height="530" alt="График показателей двигателя Gamma 1.4" /><br>
                                                <div class="text"><img src="/media/images/flat/GSF/elements/performance_graph_text.png" width="470" height="530" alt="" /></div>
                                            </div>
                                        </div>
                                        <div class="max">
                                            <dl class="max_power">
                                                <dt></dt>
                                                <dd><strong>249</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                            </dl>
                                            <dl class="max_toque">
                                                <dt></dt>
                                                <dd><strong>306</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                            </dl>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="engine1">R 2.2 VGT CRDi</div>
                                        <p>Дизельный двигатель 2.2 CRDi развивает максимальную
                                            мощность 200 л. с. при 3800 об/мин и максимальный
                                            крутящий момент 440 Н·м при 1750-2750 об/мин.
                                            Система впрыска топлива третьего поколения способствует
                                            увеличению топливной экономичности, повышению мощности и снижению шума.
                                        </p>
                                        <div class="graph">
                                            <div class="pos">
                                                <img src="/media/images/flat/GSF/elements/performance_graph_2.png" class="lazy" width="470" height="530" alt="График показателей двигателя Gamma 1.6" /><br>
                                                <div class="text"><img src="/media/images/flat/GSF/elements/performance_graph_2_text.png" class="lazy" width="470" height="530" alt="" /></div>
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
                        <div class="carousel-wrap performance-morelist">
                            <div class="carousel performance-morelist">
                                <div class="carousel-holder">
                                    <div class="carousel-slider">
                                        <div class="carousel-item morelist alive">
                                            <ul class="clearfix">
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Автоматическая коробка передач" src="/media/images/flat/GSF/elements/performance_1.jpg" /></span>
										<span class="description">
											<strong>Автоматическая коробка передач</strong>
											Автоматическая коробка передач <br>
											обеспечивает максимальный <br>
											комфорт при вождении, большую <br>
											топливную экономичность <br>
											и плавное движение.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Аэродинамика" src="/media/images/flat/GSF/elements/performance_2.jpg"/></span>
										<span class="description">
											<strong>Аэродинамика</strong>
											Обладая одним из лучших в своем<br>
											классе коэффициентом лобового <br>
											сопротивления (0,34), автомобиль <br>
											отличается пониженным <br>
											аэродинамическим сопротивлением <br>
											и поэтому имеет удивительно <br>
											мягкий ход.
							            </span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Тормоза" src="/media/images/flat/GSF/elements/performance_3.jpg" /></span>
										<span class="description">
											<strong>Тормозная система</strong>
											Благодаря 17-дюймовым передним тормозным дискам, 16-дюймовым задним тормозным дискам, отдельному 11-дюймовому тормозному усилителю и большому количеству электронных систем, поездки в автомобиле становятся максимально безопасными.
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
                                <div class="scene">
                                    <img class="car" src="/media/images/flat/GSF/elements/safety_1.jpg" width="940" height="" title="" alt="Электронный контроль устойчивости (ESC) с управлением системой полного привода">
                                </div>
                                <div class="text_wrap">
						<span class="scene_text">
						<strong>Электронный контроль устойчивости (ESC) + Система управления стабилизацией (VSM)</strong>
						Система электронного контроля устойчивости совместно с системой управления стабилизации минимизирует риск схода автомобиля с траектории посредством распределения тяги на задние колеса системой полного привода и затормаживания внутреннего заднего колеса, обеспечивая сохранение максимального сцепления с дорогой.
						</span>
                                </div>
                            </div>

                            <div class="safety_slider-wrap">
                                <ul class="safety_slider">
                                    <!--
                                                            <li class="safety_slider-item alive" class="alive">
                                                                <img class="lazy" src="/media/images/common/transparent.gif" data-original="/media/images/flat/GSF/elements/safety_slider_1.jpg" width="1920" height="540" alt="Система управления стабилизацией (VSM)">
                                                                <span><strong>Система управления стабилизацией (VSM)</strong>
                                                                Система управления стабилизацией (VSM) обеспечивает сохранение
                                                                максимального сцепления с дорогой для каждого из четырех колес,
                                                                вне зависимости от покрытия.
                                                                </span>
                                                            </li>
                                    -->
                                    <li class="safety_slider-item alive">
                                        <img src="/media/images/flat/GSF/elements/safety_slider_2.jpg" width="1920" height="540" alt="Антиблокировочная система (ABS) и система помощи при торможении (BAS)">
							<span><strong>Антиблокировочная система (ABS)<br>
                                    и система помощи при торможении (BAS)</strong>
							Вам больше не придется волноваться о пробуксовке или<br>
							блокировке колес при торможении. Антиблокировочная <br>
							система (ABS) компенсирует избыточное тормозное усилие<br>
							и позволяет вам лучше контролировать автомобиль. Система <br>
							помощи при торможении распознает вашу манеру вождения,<br>
							отслеживая ваше поведение в ходе разгона и торможения, <br>
							и применяет максимальное тормозное усилие при <br>
							обнаружении резкого воздействия.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="/media/images/flat/GSF/elements/safety_slider_3.jpg" width="1920" height="540" alt="Система защиты с семью подушками безопасности">
							<span><strong>Система защиты с семью подушками<br>безопасности</strong>
							Система защиты Grand Santa Fe с семью подушками безопасности
							обеспечивает максимальную защиту от травм. <br>
							Подушки безопасности водителя и пассажира со сниженным <br>
							усилием раскрытия минимизируют повреждения при лобовом<br>
							столкновении, а боковые подушки и шторки безопасности <br>
							обеспечивают защиту пассажиров при боковом ударе.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="/media/images/flat/GSF/elements/safety_slider_4.jpg" width="1920" height="540" alt="Система управления торможением на спуске (DBC) и система помощи при трогании на склоне (HAC)">
							<span><strong>Система управления торможением на спуске (DBC)<br>и система помощи при трогании на склоне (HAC)</strong>
							Преодолевайте наклоны уверенно. Система управления <br>
							торможением на спуске (DBC) поможет вам сохранить контроль <br>
							над автомобилем при движении вниз по наклонной поверхности. <br>
							Система помощи при трогании на склоне (HAC) автоматически <br>
							задействует тормоза для предотвращения откатывания<br>
							автомобиля назад при движении на подъем.
							</span>
                                    </li>
                                    <li class="safety_slider-item">
                                        <img src="/media/images/flat/GSF/elements/safety_slider_5.jpg" width="1920" height="540" alt="Система контроля давления в шинах (TPMS)">
							<span><strong>Система контроля давления в шинах (TPMS)</strong>
							Больше никогда не беспокойтесь о давлении в шинах.<br>
							Пусть об этом позаботится система контроля давления в шинах (TPMS),
							которая предупредит вас, если давление в шине упадет ниже нормального значения.
							</span>
                                    </li>
                                </ul>
                                <ul class="safety_slider-paginator">
                                    <!--
                                                            <li>
                                                                <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/GSF/elements/safety_preview_1.jpg" width="90" height="90">
                                                                <div class="bordered"></div>
                                                            </li>
                                    -->
                                    <li class="alive">
                                        <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/GSF/elements/safety_preview_2.jpg" width="90" height="90">
                                        <div class="bordered-ghost"></div>
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/GSF/elements/safety_preview_3.jpg" width="90" height="90">
                                        <!-- 							<div class="bordered-ghost"></div> -->
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/GSF/elements/safety_preview_4.jpg" width="90" height="90">
                                        <div class="bordered"></div>
                                    </li>
                                    <li>
                                        <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/GSF/elements/safety_preview_5.jpg" width="90" height="90">
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
                                        ощущение роскоши – на что бы ни упал Ваш взгляд и чего бы<br>
                                        ни коснулась Ваша рука.
                                    </div>
                                </div>
                            </div>
                            <div class="main_wrap">
                                <ul class="list_wrap">
                                    <li class="list list1">
                                        <a href="#">
                                            <strong>Система помощи<br>при парковке</strong>
                                            <img src="/media/images/flat/GSF/elements/convenience_1.jpg" width="470" height="250" alt="Помощь при парковке" />
                                        </a>
                                    </li>
                                    <li class="list list2">
                                        <a href="#">
                                            <strong>Приборная ЖК-панель<br>с технологией TFT</strong>
                                            <img src="/media/images/flat/GSF/elements/convenience_2.jpg" width="470" height="250" alt="Приборная ЖК-панель с технологией TFT" />
                                        </a>
                                    </li>
                                    <li class="list list3">
                                        <a href="#">
                                            <strong>Функциональный<br>руль</strong>
                                            <img src="/media/images/flat/GSF/elements/convenience_3.jpg" width="470" height="250" alt="Функциональный руль" />
                                        </a>
                                    </li>
                                    <li class="list list4">
                                        <a href="#">
                                            <strong>Система электрического привода задней двери<br>с автоматическим открыванием</strong>
                                            <img src="/media/images/flat/GSF/elements/convenience_4.jpg" width="470" height="250" alt="Система электрического привода задней двери" />
                                        </a>
                                    </li>
                                </ul>


                                <div class="convenience__slider-cut">
                                    <ul class="view_wrap">
                                        <li class="view view1 alive">
                                            <img src="/media/images/flat/GSF/elements/convenience_popup_1.jpg" width="940" height="500" alt="Система помощи при парковке задним ходом (RPAS)" />
                                            <div class="text">
                                                <strong>Система помощи при парковке <br>задним ходом (RPAS)</strong>
                                                Двигайтесь назад с уверенностью, что система<br>
                                                помощи при парковке задним ходом подстрахует<br>
                                                вас. Предупреждающий датчик в заднем бампере<br>
                                                помогает предотвратить происшествия при<br>
                                                движении задним ходом. Это особенно полезно,<br>
                                                когда сзади на пути вашего движения находится<br>
                                                небольшой объект. Такой, как коробка или низкое<br>
                                                дорожное ограждение. Датчики ничего не<br>
                                                упустят из виду.
                                            </div>
                                        </li>
                                        <li class="view view2">
                                            <img src="/media/images/flat/GSF/elements/convenience_popup_2.jpg" width="940" height="500" alt="Приборная ЖК-панель с технологией TFT" />
                                            <div class="text">
                                                <strong>Приборная ЖК-панель<br>с технологией TFT</strong>
                                                Вся необходимая информация об автомобиле и вождении<br>доступна
                                                на приборной ЖК-панели с диагональю 4,2 дюйма,<br>выполненной по
                                                технологии с использованием<br>тонкоплёночных транзисторов (TFT).<br>
                                                Панель стала ярче, подверглась<br>модернизации
                                                и устремлена в будущее,<br>как и остальная
                                                отделка интерьера.
                                            </div>
                                        </li>
                                        <li class="view view3">
                                            <img src="/media/images/flat/GSF/elements/convenience_popup_3.jpg" width="940" height="500" alt="Функциональный руль" />
                                            <div class="text">
                                                <strong>Функциональный руль</strong>
                                                Находясь за рулем Grand Santa Fe, вы <br>
                                                можете пользоваться мобильным телефоном <br>
                                                с поддержкой Bluetooth. При этом вам даже <br>
                                                не придется отнимать руки от руля. При<br>
                                                помощи кнопок на руле вы также можете<br>
                                                управлять аудиосистемой и регулировать<br>
                                                громкость телефонного разговора.
                                            </div>
                                        </li>
                                        <li class="view view4">
                                            <img src="/media/images/flat/GSF/elements/convenience_popup_4.jpg" width="940" height="500" alt="Система электрического привода задней двери" />
                                            <div class="text">
                                                <strong>Система электрического привода задней двери<br>с автоматическим открыванием</strong>
                                                Задняя дверь открывается и закрывается<br>
                                                нажатием кнопки на месте водителя. <br>
                                                Загрузка и выгрузка сумок теперь <br>
                                                стала намного проще.
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
                                                    <span class="img"><img width="306" height="200" alt="Ионизатор воздуха" src="/media/images/flat/GSF/elements/convenience_5.jpg"/></span>
										<span class="description">
											<strong>Дистанционное складывание<br>второго ряда сидений</strong>
											Требуется больше пространства <br>
											для багажа? Просто задействуйте <br>
											рычаг для складывания второго<br>
											ряда сидений, и оно появится. <br>
											Максимальный комфорт <br>
											достигается минимумом усилий.
										</span>
                                                </li>
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Бесконтактный ключ Hyundai Grand Santa Fe" src="/media/images/flat/GSF/elements/convenience_6.jpg"/></span>
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
                                                    <span class="img"><img width="306" height="200" alt="Окна с безопасными стеклоподъемниками" src="/media/images/flat/GSF/elements/convenience_7.jpg"/></span>
										<span class="description">
											<strong>Автоматическая система<br>антизапотевания</strong>
											Датчик автоматически определяет <br>
											конденсацию на лобовом стекле <br>
											и задействует систему<br>
											климат-контроля.
										</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="carousel-item morelist">
                                            <ul class="clearfix">
                                                <li>
                                                    <span class="img"><img width="306" height="200" alt="Подогрев зоны покоя стеклоочистителей" src="/media/images/flat/GSF/elements/convenience_8.jpg"/></span>
										<span class="description">
											<strong>Подогрев зоны покоя<br>стеклоочистителей</strong>
											Подогреваемые зоны покоя стеклоочистителей предотвратят обмерзание щеток стеклоочистителей.
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
                                <h2 class="title_wrap_h2">Технические характеристики Hyundai Grand Santa Fe</h2>
                                <a href="#" class="open-all isWillClose">Свернуть все</a>
                            </div>
                            <div class="specs-listing_wrap">
                                <ul class="specs-listing">
                                    <li class="head-line">
                                        <table>
                                            <tr>
                                                <th>Модификации</th>
                                                <td>2.2 CRDi - 6AT</td>
                                                <td>3.0 - 6AT</td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div class="opened">Двигатель</div>
                                        <table>
                                            <tr>
                                                <th>Мощность*</th>
                                                <td>200 л.с.</td>
                                                <td>249 л.с.</td>
                                            </tr>
                                            <tr>
                                                <th>Объем двигателя</th>
                                                <td>2.2 л.</td>
                                                <td>3.0 л.</td>
                                            </tr>
                                            <tr>
                                                <th>Двигатель</th>
                                                <td>R2.2 VGT CRDi Diesel </td>
                                                <td>Lambda II 3.0 GDI D-CVVT</td>
                                            </tr>
                                            <tr>
                                                <th>Объем, см3</th>
                                                <td>2199</td>
                                                <td>2999</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность, кВт</th>
                                                <td>147</td>
                                                <td>183</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. мощность, л.с.</th>
                                                <td>200</td>
                                                <td>249</td>
                                            </tr>
                                            <tr>
                                                <th>Топливный бак</th>
                                                <td>71</td>
                                                <td>71</td>
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
                                                <th>Тип трансмиссии</th>
                                                <td>Гидромеханическая</td>
                                                <td>Гидромеханическая</td>
                                            </tr>
                                            <tr>
                                                <th>Ускорение 0-100 км/ч, сек </th>
                                                <td>9.9</td>
                                                <td>9.2</td>
                                            </tr>
                                            <tr>
                                                <th>Макс. скорость, км/ч </th>
                                                <td>201</td>
                                                <td>207</td>
                                            </tr>
                                        </table>
                                    </li>

                                    <li class="listing-item">
                                        <div>Расход топлива</div>
                                        <table>
                                            <tr>
                                                <th>Городской цикл, л/100 км*</th>
                                                <td>10.1 </td>
                                                <td>14.1 </td>
                                            </tr>
                                            <tr>
                                                <th>Загородный цикл, л/100 км*</th>
                                                <td>6.4 </td>
                                                <td>8.4 </td>
                                            </tr>
                                            <tr>
                                                <th>Смешанный цикл, л/100 км*</th>
                                                <td>7.8 </td>
                                                <td>10.5 </td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2<br>в городском цикле, г/км*</th>
                                                <td>265 </td>
                                                <td>329 </td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2<br>в загородном цикле, г/км*</th>
                                                <td>169 </td>
                                                <td>195 </td>
                                            </tr>
                                            <tr>
                                                <th>Выделение CO2<br>в смешанном цикле, г/км*</th>
                                                <td>205 </td>
                                                <td>244 </td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="listing-item">
                                        <div>Подвеска</div>
                                        <table>
                                            <tr>
                                                <th>Колесная база</th>
                                                <td>2800</td>
                                                <td>2800</td>
                                            </tr>
                                            <tr>
                                                <th>Минимальный дорожный<br>просвет, мм*</th>
                                                <td>180</td>
                                                <td>180</td>
                                            </tr>
                                            <tr>
                                                <th>Передняя колея</th>
                                                <td>1 628 / 1 628 (шины 18" / 19")</td>
                                                <td>1 628 / 1 628 (шины 18" / 19")</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя колея</th>
                                                <td>1 639 / 1 639 (шины 18" / 19")</td>
                                                <td>1 639 / 1 639 (шины 18" / 19")</td>
                                            </tr>
                                            <tr>
                                                <th>Передний свес</th>
                                                <td>955 </td>
                                                <td>955 </td>
                                            </tr>
                                            <tr>
                                                <th>Задний свес</th>
                                                <td>1150 </td>
                                                <td>1150 </td>
                                            </tr>
                                            <tr>
                                                <th>Передняя подвеска</th>
                                                <td>Независимая, типа McPherson с пружинами,<br>со стабилизатором поперечной устойчивости</td>
                                                <td>Независимая, типа McPherson с пружинами,<br>со стабилизатором поперечной устойчивости</td>
                                            </tr>
                                            <tr>
                                                <th>Задняя подвеска</th>
                                                <td>Независимая, многорычажная,<br>со стабилизатором поперечной устойчивости </td>
                                                <td>Независимая, многорычажная,<br>со стабилизатором поперечной устойчивости </td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="detailedSpecLink">
                            <a href="/configurator/car/13" onClick="ga('send', 'event', 'knopka', 'click');">Подробные характеристики</a>
                        </div>
                        <div class="spec_message">
                            <div>
                                <span class="add-blue-color">*</span> — Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа транспортного средства<br>
                                <span class="add-blue-color">**</span> — Показатели расхода топлива и массы выделяемого CO2 представлены согласно методике испытаний по Правилам ЕЭК ООН №83 и 101<br>
                                <span class="add-blue-color">***</span> — Согласно сертификату соответствия по Директиве ЕС 92/21/EEC представлено значение межосевого дорожного просвета<br>
                            </div>
                        </div>
                    </div>
                </div> <!-- //content-type__specs -->
                <div class="content-type content-type__gallery">
                    <div id="contents_gallery" class="contents_gallery pip">
                        <div class="gallery_wrap">
                            <div class="title_wrap clearfix">
                                <h2 class="title_wrap_h2">Фото Hyundai Grand Santa Fe</h2>
                                <div class="thumbs-toggler">
                                    <a href="#" data-type="all" class="alive">Все</a>
                                    <a href="#" data-type="exterior">Экстерьер</a>
                                    <a href="#" data-type="interior">Интерьер</a>
                                </div>
                            </div>

                            <ul id="all-gallery-items" style="display: none;">
                                <li><img data-type="exterior" width="229" height="144" alt="Hyundai Grand Santa Fe: вместительный багажник" src="/media/images/flat/GSF/gallery_pics/gallery_preview_1.jpg" data-href="/media/images/flat/GSF/gallery_pics/gallery_1.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="Фото Хендай Гранд Санта Фе" src="/media/images/flat/GSF/gallery_pics/gallery_preview_2.jpg" data-href="/media/images/flat/GSF/gallery_pics/gallery_2.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="Hyundai Grand Santa Fe" src="/media/images/flat/GSF/gallery_pics/gallery_preview_3.jpg" data-href="/media/images/flat/GSF/gallery_pics/gallery_3.jpg"/></li>
                                <li><img data-type="interior" width="229" height="144" alt="Фото: вместительный салон Хендай Гранд Санта Фе" src="/media/images/flat/GSF/gallery_pics/gallery_preview_4.jpg" data-href="/media/images/flat/GSF/gallery_pics/gallery_4.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="Фото Гранд Санта Фе в движении" src="/media/images/flat/GSF/gallery_pics/gallery_preview_5.jpg" data-href="/media/images/flat/GSF/gallery_pics/gallery_5.jpg"/></li>
                                <li><img data-type="exterior" width="229" height="144" alt="Авто Хендай Гранд Санта Фе" src="/media/images/flat/GSF/gallery_pics/gallery_preview_6.jpg" data-href="/media/images/flat/GSF/gallery_pics/gallery_6.jpg"/></li>
                            </ul>

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
                                <h2 class="promo-title">Станьте владельцем<br>Santa Fe уже сегодня</h2>
					<span class="promo-text">
						Выберите ближайший дилерский центр Hyundai, пройдите тест-драйв и примите единственно правильное решение: купить Grand Santa Fe! <br>Для вас всегда есть удобные программы кредитования и другие предложения Drive Hyundai. Изучите доступные комплектации и цены на Hyundai Grand Santa Fe в разделе <a href="/configurator/car/13">«Конфигуратор»</a>.
					</span>
                                <a href="/test-drive/" class="btn-flat">Пройти тест-драйв</a>
                            </div>
                            <img src="https://www.hyundai.ru/media/images/flat/GSF/elements/promo_pic.png" width="587" height="331" alt="Тест драйв Хендай Гранд Санта Фе">
                        </div>
                        <div class="promo-grid">
                            <ul class="clearfix">
                                <li><a href="https://www.hyundai.ru/configurator/car/13"><span>Конфигуратор Grand Santa Fe</span></a></li>
                                <li><a target="_blank" href="https://www.hyundai.ru/media/downloads/accessoires/SantaFe_Acc.pdf"><span>Каталог аксессуаров</span></a></li>
                                <li><a href="https://www.hyundai.ru/configurator/car/13#calculator"><span>Рассчитать кредит</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="promo-slider_wrap">
                        <div class="promo-slider_cut">
                            <ul class="promo-slider">
                                <li>
                                    <a href="/H-1/" class="promo-slider-link">
                                        <img src="https://www.hyundai.ru/media/images/carmodels/H-1_3185b17f6c10d2a9.png" alt="H-1">
                                        <span class="model">H-1</span>
                                        <span class="price">от 2 079 000  ₽</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/SantaFe/" class="promo-slider-link">
                                        <img src="https://www.hyundai.ru/media/images/carmodels/Santa fe_8385a0ed6004e51b.png" alt="SANTA FE">
                                        <span class="model">SANTA FE</span>
                                        <span class="price">от 1 964 000  ₽</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Tucson/" class="promo-slider-link">
                                        <img src="https://www.hyundai.ru/media/images/carmodels/Tucson_8655a0ed607025b4.png" alt="TUCSON">
                                        <span class="model">TUCSON</span>
                                        <span class="price">от 1 369 000  ₽</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Elantra/" class="promo-slider-link">
                                        <img src="https://www.hyundai.ru/media/images/carmodels/Elantra_7505a0ed5f602de8.png" alt="ELANTRA">
                                        <span class="model">ELANTRA</span>
                                        <span class="price">от  979 000  ₽</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>		<div class="disc-block"><p class="dicslamer-casco"><sup>*</sup>

Платеж рассчитан в рамках программы Hyundai (Старт), исходя из цены Hyundai Grand Santa Fe (Family, 2,2л CRDi 6AT) 2 439 000 р., 2018 года производства, на условиях кредитного продукта «ДИРЕКТ Баллун ПСП КЛАССИКА: Hyundai в кредит»: Первоначальный взнос 1 249 700 р., сумма кредита 1 328 827 р., срок кредита 36 мес.; процентная ставка 9,4% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Тарифным планом предусмотрена финансовая защита кредита. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.08.18 по 31.08.18г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru

</p></div>
                <div class="disc-block"><p class="dicslamer-casco"><sup>**</sup>

Полис КАСКО на безвозмездной основе оформляется на срок 1 (один) год в САО «ВСК» при покупке нового Hyundai Grand Santa Fe в кредит по программе СТАРТ. Указанная информация носит справочный характер и не является публичной офертой. Условия и тарифы могут быть изменены САО «ВСК» в одностороннем порядке. Предложение действует до 31.08.2018г.

</p></div>
            </div>

        </div> <!-- // container -->
        <style type="text/css" media="screen">
            .prefooter-promo .promo-main {
                background-size: auto 100%;
                height: auto;
                max-width: 1920px;
                margin: 0 auto;
            }
            .promo-text > a {
                color: currentColor;
                text-decoration: underline;
            }
            .promo-text > a:hover {
                text-decoration: none;
            }
        </style>
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

        <!--RuTarget-->
        <script type="text/javascript">
            var _rutarget=window._rutarget||[];
            _rutarget.push({
                'event':'showOffer',
                'sku':'GrandSantaFe',
                'nosync':'true'});
        </script>
        <!--/RuTarget-->
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/pip_flat_spritespin.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/cars/pip_flat_GSF.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>