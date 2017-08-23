<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetPageProperty("title", "Купить Hyundai H1 в Воронеже. Цена на минивэн Хендай Старекс н1");
//$APPLICATION->SetTitle("H-1");
?>





        <link rel="stylesheet" href="http://www.hyundai.ru/assets/css/style.css?v=2.0">

        <link type="text/css" href="http://www.hyundai.ru/media/css/cars/cars_common.css" rel="stylesheet" />
        <link type="text/css" href="http://www.hyundai.ru/media/css/cars/pip_flat_spritespin.css" rel="stylesheet" />
        <link type="text/css" href="http://www.hyundai.ru/media/css/cars/pip_flat_H1.css" rel="stylesheet" />
        <link rel="stylesheet" href="http://www.hyundai.ru/assets/css/overrides.css?v=2.0">


        <script src="http://www.hyundai.ru/media/js/libs/device.min.js"></script>











<div class="wrapper" id="wrapper">



        <!--
        Контент страницы начнется тут
        -->

        <main class="main" data-model="home">

            <script>
                function cubeMotionInit() {}
                function cubeMotionJS() {}
            </script>

            <style>
                /* parallax bg */
                .parallax0 {background:url('/media/images/flat/H1/elements/parallax_1.jpg') no-repeat fixed 50% 50% #fff;}/* dec 29 15 */
                .parallax1 {background:url('/media/images/flat/H1/elements/parallax_2.jpg') no-repeat fixed 50% 50% #fff;}/* 2015-07-31 */
                .parallax2 {background:url('/media/images/flat/H1/elements/parallax_3.jpg') no-repeat fixed 50% 50% #fff;}
                .parallax3 {background:url('/media/images/flat/H1/elements/parallax_4.jpg') no-repeat fixed 50% 50% #fff;}
                .parallax4 {background:url('/media/images/flat/H1/elements/parallax_5.jpg') no-repeat fixed 50% 50% #fff;}
                .parallax5 {background:url('/media/images/flat/H1/elements/parallax_6.jpg') no-repeat fixed 50% 50% #fff;}

                body.mobile .parallax { height:450px;}
                body.mobile .parallax1 {background:url('/media/images/flat/H1/elements/parallax_1.jpg') center top no-repeat #e3e3e3;}/* dec 29 15 */
                body.mobile .parallax1 {background:url('/media/images/flat/H1/elements/parallax_2.jpg') center top no-repeat #e3e3e3;}/* 2015-07-31 */
                body.mobile .parallax2 {background:url('/media/images/flat/H1/elements/parallax_3.jpg') center top no-repeat #fff;}
                body.mobile .parallax3 {background:url('/media/images/flat/H1/elements/parallax_4.jpg') center top no-repeat #fff;}
                body.mobile .parallax4 {background:url('/media/images/flat/H1/elements/parallax_5.jpg') center top no-repeat #fff;}
                body.mobile .parallax5 {background:url('/media/images/flat/H1/elements/parallax_6.jpg') center top no-repeat #fff;}
            </style>

            <div class="wrap" id="wrap">
                <div class="gallery-view-wrap">
                    <div class="gallery-view-holder">
                        <div class="gallery-view-slider">
                            <ul></ul>
                        </div>
                        <div class="topline">
                            <img src="/media/images/flat/H1/elements/logo-white.png">
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
                                                <img src="/media/images/flat/H1/elements/logo.png" title="H-1" alt="Эмблема H-1">
                                                <span>Покажите свой стиль</span>
                                            </div>
                                            <div class="title-price">
                                                <? price_to_url($APPLICATION->GetCurPage()); ?> <br>
                                                <? profit_to_url($APPLICATION->GetCurPage()); ?>
                                                <a href="http://www.hyundai.ru/configurator/?car_id=11&calc_open=1" class="title-price-notice">В кредит от 31 255 &#8381; / месяц</a>
                                            </div>
                                            <a href="/all-offers/H1" class="btn-flat">Все предложения</a>
                                            <div class="title-list">
                                                <ul>
                                                    <li>Экономный расход<br><strong>7.5 л на 100 км<span class="add-blue-color">*</span></strong></li>
                                                    <li>Макс. мощность<br><strong>170 л.с.</strong></li>
                                                </ul>
                                                <ul>
                                                    <li>Комфортный салон<br><strong>на 8 человек</strong></li>
                                                    <li>Большой список<br>опций</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <img class="info-car-pic" src="/media/images/flat/H1/elements/info_car_pic.png"/>
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
				--><li><span class="exterior" data-href="#contents_exterior">Экстерьер</span></li><!--
				--><li><span class="interior" data-href="#contents_interior">Интерьер</span></li><!--
				--><li><span class="performance" data-href="#contents_performance">Динамика</span></li><!--
				--><li><span class="safety" data-href="#contents_safety">Безопасность</span></li><!--
				--><li><span class="convenience" data-href="#contents_convenience">Комфорт</span></li>
                                <!-- parser hidden links -->
                                <li><a class="hidden highlights" href="#contents_highlights">Особенности</a></li>
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
					 --><li><a class="configurator" href="/configurator/?car_id=11" title="Цены комплектации">ЦЕНЫ И КОНФИГУРАЦИИ</a></li><!--
					 --><li class="broshure-item" title="Брошюра"><a data-gtm-havas-model="h1" href="#" data-model="H-1" for="brochures_request" class="zing_form_toggler broshure" target="_blank">БРОШЮРА</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <? offer_filter_auto($APPLICATION->GetCurPage()); ?>
                    <!-- content -->
                    <div class="content-type content-type__explore on" >
                        <div id="contents_highlights" class="contents_highlights pip">
                            <div class="parallax parallax0"></div>
                            <div class="pip_cont">
                                <div class="text_play_wrap">
                                    <div class="text_play">
                                        <h2 class="pip_title">ОСОБЕННОСТИ</h2>
                                        <div class="text1">Дизайн, пробуждающий эмоции</div>
                                        <div class="text2">Новый H-1 подходит для тех случаев, когда приоритетной задачей является транспортировка пассажиров, а не перевозка грузов.</div>
                                    </div>
                                    <div class="robust_on_style">
                                        <div class="highlights_thumbs">
                                            <div class="list">
                                                <ul>
                                                    <li class="thumb1 front">
                                                        <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/H1/elements/highlights_1.jpg" data-url="/media/images/flat/H1/elements/highlights_1.jpg" alt="Стильный" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                            <span class="txt-desc">Стильный</span>
                                                            <span class="cover"></span>
                                                        </a>
                                                    </li>
                                                    <li class="thumb2 side">
                                                        <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/H1/elements/highlights_2.jpg" data-url="/media/images/flat/H1/elements/highlights_2.jpg" alt="Безопасный" width="306" height="306" />
												<span class="dimd"></span>
											</span>
                                                            <span class="txt-desc">Безопасный</span>
                                                            <span class="cover"></span>
                                                        </a>
                                                    </li>
                                                    <li class="thumb3 safe">
                                                        <a href="#">
											<span class="img_wrap">
												<img src="/media/images/flat/H1/elements/highlights_3.jpg" data-url="/media/images/flat/H1/elements/highlights_3.jpg" alt="Комфортный" width="306" height="306" />
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
                                                        <div class="img"><img src="/media/images/flat/H1/elements/highlights_popup_1.jpg" data-url="/media/images/flat/H1/elements/highlights_popup_1.jpg" width="623" height="306" alt="Стильный"></div>
                                                        <div class="txt-wrap">
                                                            <div class="txt">
                                                                <strong>Стильный</strong>
                                                                Стиль, универсальность, безопасность – легко понять, что выделяет H1 в ряду других.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="thumb2 side">
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/H1/elements/highlights_popup_2.jpg" data-url="/media/images/flat/H1/elements/highlights_popup_3.jpg" width="623" height="306" alt="Безопасный"></div>
                                                        <div class="txt-wrap">
                                                            <div class="txt">
                                                                <strong>Безопасный</strong>
                                                                Новый H-1 был оптимизирован для лучшей защиты водителя и пассажиров. Мы ни на миг не теряем бдительности — чтобы вы могли чувствовать себя спокойно.
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="thumb3 safe">
                                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                        <div class="img"><img src="/media/images/flat/H1/elements/highlights_popup_3.jpg" data-url="/media/images/flat/H1/elements/highlights_popup_3.jpg" width="623" height="306" alt="Комфортный"></div>
                                                        <div class="txt-wrap">
                                                            <div class="txt">
                                                                <strong>Комфортный</strong>
                                                                H-1-это комфортабельным, многофункциональный и роскошный автомобиль, в котором удобно и водителю, и пассажирам.
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                                <div class="main_wrap">
                                                    <div class="highlight_twin clearfix">
                                                        <div class="left">
                                                            <div class="subject">
                                                                <h3>Многофункциональные сиденья</h3>
                                                                <p>
                                                                Водители могут более практично использовать внутреннее пространство, изменяя расположение сидений в салоне.
                                                                </p>
                                                            </div>
                                                            <div class="image">
                                                                <img src="/media/images/flat/H1/elements/highlights_4.jpg" width="" height="" alt="Большой грузовой отсек" />
                                                            </div>
                                                        </div>
                                                        <div class="mid">
                                                            <div class="subject">
                                                                <h3>«Лучший автомобиль Австралии»</h3>
                                                                <p>
                                                                Австралийская автомобильная ассоциация два года подряд называла H-1 «Лучшим автомобилем Австралии» в категории «Автомобиль для перевозки пассажиров»
                                                                </p>
                                                            </div>
                                                            <div class="image">
                                                                <img src="/media/images/flat/H1/elements/highlights_5.jpg" width="" height="" alt="Лучший автомобиль Австралии" />
                                                            </div>
                                                        </div>
                                                        <div class="right">
                                                            <div class="subject">
                                                                <h3>5-ступенчатая АКПП</h3>
                                                                <p>
                                                                Коробка передач обеспечивает великолепный разгон, экономичность и позволяет сократить выбросы CO2. Стандартная хромированная окантовка и опциональная отделка кожей рычага коробки переключения передач отлично сочетаются с кожаной отделкой руля.
                                                                </p>
                                                            </div>
                                                            <div class="image">
                                                                <img src="/media/images/flat/H1/elements/highlights_6.jpg" width="" height="" alt="6-ступенчатая коробка передач" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                -->
                            </div>
                        </div>
                        <div id="contents_exterior" class="contents_exterior pip">
                            <div class="parallax parallax1"></div>
                            <div class="pip_cont">
                                <div class="text_play_wrap">
                                    <div class="text_play">
                                        <h2 class="pip_title">ЭКСТЕРЬЕР</h2>
                                        <div class="text1">Захватывающее путешествие начинается здесь</div>
                                        <div class="text2">Представьте себе следующую ситуацию. Микроавтобус H-1 без труда вмещает группу сотрудников одной компании или просто старых друзей и доставляет их из города в аэропорт. Все готово к путешествию, багаж загружен, и пассажиры увлеченно обсуждают то, что им предстоит увидеть в ближайшие дни. Восьмиместный салон автомобиля обеспечивает удобную посадку/высадку пассажиров. Здесь вполне достаточно места и для пассажиров, и для их багажа. Боковые окна увеличивают обзор и защищают от шума. </div>
                                    </div>
                                </div>
                                <div class="view_wrap">
                                    <div class="pos">
                                        <ul class="view">
                                            <li class="front">
                                                <div class="scene">
                                                    <div class="car">
                                                        <img src="/media/images/flat/H1/elements/angle_1.png" alt="Экстерьер Hyundai H-1" />
                                                        <div class="plus_wrap">
                                                            <!-- 											<div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Микроантенна</span></span></div> -->
                                                            <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Противотуманные фары</span></span></div>
                                                            <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Боковые накладки</span></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="sub_wrap">
                                                        <ul>
                                                            <!--
                                                                                                        <li>
                                                                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                                            <div class="img"><img src="/media/images/flat/H1/elements/exterior_popup_1.jpg" width="470" height="470" alt="Микроантенна" /></div>
                                                                                                            <div class="txt">
                                                                                                                <strong>Микроантенна</strong>
                                                                                                                Устанавливаемая в стандартной комплектации антенна на крыше обеспечит хороший прием радио.
                                                                                                            </div>
                                                                                                        </li>
                                                            -->
                                                            <li>
                                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                <div class="img"><img src="/media/images/flat/H1/elements/exterior_popup_2.jpg" width="470" height="470" alt="Противотуманные фары" /></div>
                                                                <div class="txt">
                                                                    <strong>Противотуманные фары</strong>
                                                                    Комплектация микроавтобуса может включать противотуманные фары, которые аккуратно встроены в нижнюю часть переднего бампера.
                                                                </div>
                                                            </li>
                                                            <!--
                                                                                                        <li>
                                                                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                                            <div class="img"><img src="/media/images/flat/H1/elements/exterior_popup_3.jpg" width="470" height="470" alt="Обтекаемые боковые стекла" /></div>
                                                                                                            <div class="txt">
                                                                                                                <strong>Обтекаемые боковые стекла</strong>
                                                                                                                Многоместные версии фургона H-1 снабжены боковыми стеклами, выполненными заподлицо с кузовом. Такие стекла смотрятся более эстетично и снижают уровень шума.
                                                                                                            </div>
                                                                                                        </li>
                                                            -->
                                                            <li>
                                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                <div class="img"><img src="/media/images/flat/H1/elements/exterior_popup_3.jpg" width="470" height="470" alt="Боковые накладки" /></div>
                                                                <div class="txt">
                                                                    <strong>Боковые накладки</strong>
                                                                    Между колесными арками топовых версий микроавтобуса установлены привлекательные боковые накладки.
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>

                                            <!--
                                                                        <li class="rear">
                                                                            <div class="scene">
                                                                                <div class="car">
                                                                                    <img src="/media/images/flat/H1/elements/angle_2.png" alt="Экстерьер Hyundai H-1" />
                                                                                    <div class="plus_wrap">
                                                                                        <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Задние фонари комбинированного типа</span></span></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="sub_wrap">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                            <div class="img"><img src="/media/images/flat/H1/elements/exterior_popup_5.jpg" width="470" height="470" alt="Задние фонари комбинированного типа" /></div>
                                                                                            <div class="txt">
                                                                                                <strong>Задние фонари комбинированного типа</strong>
                                                                                                Задние фонари плавно обтекают изгибы кузова H-1 и подчеркивают современный образ модели.
                                                                                            </div>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                            -->
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
                                                        <span class="img"><img width="226" height="140" alt="Наклонные двери" src="/media/images/flat/H1/elements/exterior_1.jpg" /></span>
										<span class="description">
											<strong>Наклонные двери</strong>
											Благодаря шарнирному креплению передние двери открываются под определенным углом, что облегчает водителю и переднему пассажиру доступ внутрь автомобиля.
										</span>
                                                    </li>
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Микроантенна" src="/media/images/flat/H1/elements/exterior_2.jpg"/></span>
										<span class="description">
											<strong>Микроантенна</strong>
											Устанавливаемая в стандартной комплектации антенна на крыше обеспечит хороший прием радио.
										</span>
                                                    </li>
                                                    <!--
                                                                                        <li>
                                                                                            <span class="img"><img width="226" height="140" alt="Боковые накладки" src="/media/images/flat/H1/elements/exterior_3.jpg"/></span>
                                                                                            <span class="description">
                                                                                                <strong>Боковые накладки</strong>
                                                                                                Между колесными арками топовых версий микроавтобуса установлены привлекательные боковые накладки.
                                                                                            </span>
                                                                                        </li>
                                                    -->
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Легкосплавные диски" src="/media/images/flat/H1/elements/exterior_4.jpg"/></span>
										<span class="description">
											<strong>Легкосплавные диски</strong>
											H-1 оснащается колесными дисками увеличенного до 16 дюймов диаметра.
										</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!--
                                                                        <div class="carousel-item morelist">
                                                                            <ul class="clearfix">
                                                                                <li>
                                                                                    <span class="img"><img width="226" height="140" alt="Хромированная решетка радиатора" src="/media/images/flat/H1/elements/exterior_5.jpg" /></span>
                                                                                    <span class="description">
                                                                                        <strong>Хромированная решетка радиатора</strong>
                                                                                        В большинстве стран доступна стильная опция в виде хромированного покрытия для характерной решетки радиатора Hyundai.
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
                                        <div class="text1">Универсальный, комфортабельный и элегантный</div>
                                        <div class="text2">Инженеры Hyundai разработали интерьер, который ничем не уступает интерьерам современных высококлассных легковых автомобилей по уровню комфорта и стиля.</div>
                                    </div>
                                </div>
                                <div class="section2">
                                    <div class="scene_wrap">
                                        <div class="scene_offset">
                                            <div class="offset2">
                                                <div class="scene_cut">
                                                    <div class="scene1">
                                                        <div class="img">
                                                            <img src="/media/images/flat/H1/elements/view_1.jpg" width="1050" height="540" alt="Фото интерьера салона H-1" />
                                                            <div class="plus_wrap">
                                                                <div class="plus plus1"><a href="#">1</a></div>
                                                                <div class="plus plus2"><a href="#">2</a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="details">
                                            <div class="pop_1">
                                                <div class="details_txt">
                                                    <strong>Система кондиционирования воздуха</strong>
                                                    <p>Мощная система кондиционирования воздуха претерпела конструктивные изменения и теперь включает расположенные на потолке с обеих сторон отверстия воздуховодов для большего комфорта пассажиров на задних сиденьях.</p>
                                                </div>
                                                <img src="/media/images/flat/H1/elements/interior_popup_1.jpg" width="525" height="540" alt="Система кондиционирования воздуха" />
                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                            </div>

                                            <div class="pop_2">
                                                <div class="details_txt">
                                                    <strong>Охлаждаемый перчаточный ящик</strong>
                                                    <p>В жаркую погоду вы всегда можете насладиться прохладными напитками в салоне автомобиля благодаря охлаждаемому перчаточному ящику.</p>
                                                </div>
                                                <img src="/media/images/flat/H1/elements/interior_popup_2.jpg" width="525" height="540" alt="Охлаждаемый перчаточный ящик" />
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
                                                        <span class="img"><img width="226" height="140" alt="Органы управления стеклоподъемниками" src="/media/images/flat/H1/elements/interior_1.jpg"/></span>
				                        <span class="description">
				                            <strong>Органы управления стеклоподъемниками</strong>
											Как обычно, мы внимательны к мелочам: подлокотник водительской двери снабжен изящными встроенными кнопками для управления стеклоподъемниками и регулировки зеркал заднего вида.
				                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Панель управления" src="/media/images/flat/H1/elements/interior_2.jpg"/></span>
										<span class="description">
											<strong>Панель управления</strong>
											Среди других радующих глаз особенностей конструкции приборной панели — органы управления противотуманными фарами и реостатом.
										</span>
                                                    </li>
                                                    <!--
                                                                                        <li>
                                                                                            <span class="img"><img width="226" height="140" alt="Отделение между задними сиденьями" src="/media/images/flat/H1/elements/interior_3.jpg"/></span>
                                                                                            <span class="description">
                                                                                                <strong>Отделение между задними сиденьями</strong>
                                                                                                Небольшое отделение для мелочей между задними сиденьями на некоторых моделях может также использоваться как поднос и подставка для напитков.
                                                                                            </span>
                                                                                        </li>
                                                    -->
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Солнцезащитный козырек" src="/media/images/flat/H1/elements/interior_4.jpg"/></span>
				                        <span class="description">
				                            <strong>Солнцезащитный козырек</strong>
											Солнцезащитный козырек со стороны водителя снабжен удобным карманом для квитанций и накладных.
				                        </span>
                                                    </li>
                                                    <!--
                                                                                        <li>
                                                                                            <span class="img"><img width="226" height="140" alt="Электрохромное зеркало" src="/media/images/flat/H1/elements/interior_5.jpg"/></span>
                                                                                            <span class="description">
                                                                                                <strong>Электрохромное зеркало</strong>
                                                                                                Удобный очечник позволит не потерять и не повредить дорогие очки.
                                                                                            </span>
                                                                                        </li>
                                                    -->
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Отделение для очков и лампа для чтения карт" src="/media/images/flat/H1/elements/interior_6.jpg"/></span>
				                        <span class="description">
				                            <strong>Отделение для очков и&nbsp;лампа для чтения карт</strong>
											На потолке крепится консоль с раскрывающимся вниз отделением для хранения солнцезащитных очков и лампы для чтения карт.
				                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="carousel-item morelist">
                                                <ul class="clearfix">
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Салонное освещение" src="/media/images/flat/H1/elements/interior_7.jpg"/></span>
				                        <span class="description">
				                            <strong>Салонное освещение</strong>
											На выбор предлагается шесть цветов подсветки салона, которая осуществляется при помощи размещенной на потолке лампы салонного освещения светодиодного типа.
				                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Подстаканники" src="/media/images/flat/H1/elements/interior_8.jpg"/></span>
				                        <span class="description">
				                            <strong>Подстаканники</strong>
											Консоль, расположенная между водителем и передним пассажиром, снабжена выдвижным держателем для двух бутылок или стаканов.
				                        </span>
                                                    </li>
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Подстаканники" src="/media/images/flat/H1/elements/interior_9.jpg"/></span>
				                        <span class="description">
				                            <strong>Круиз-контроль</strong>
				                            Система поддерживает постоянную скорость, заданную водителем, обеспечивают комфорт во время движения.
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
                                        <div class="text1">Мощь, утонченность и качество</div>
                                        <div class="text2">Новый H-1 гарантированно обеспечит впечатляющую мощность в сочетании с присущей Hyundai бескомпромиссной надежностью и экологичностью.</div>
                                    </div>
                                </div>
                                <div class="menu">
                                    <ul>
                                        <li class="on"><a href="#">2.5 CRDi (VGT)</a></li><!-- no space
						--><li><a href="#">2.5 CRDi (WGT)</a></li>
                                    </ul>
                                </div>
                                <div class="engine_list">
                                    <ul>
                                        <li>
                                            <div class="engine1">A2 2.5 CRDi (VGT)</div>
                                            <p>
                                                Надежный двигатель с большим запасом мощности и крутящего момента.
                                            </p>
                                            <div class="graph">
                                                <div class="pos">
                                                    <img src="/media/images/flat/H1/elements/diagram_1_1.jpg" width="470" height="480" alt="График показателей двигателя 2.5 CRDi (VGT)" /><br>
                                                    <div class="text"><img src="/media/images/flat/H1/elements/diagram_1_2.png" width="470" height="480" alt="График показателей двигателя 2.5 CRDi (VGT)" /></div>
                                                </div>
                                            </div>
                                            <div class="max">
                                                <dl class="max_power">
                                                    <dt></dt>
                                                    <dd><strong>170</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                                </dl>
                                                <dl class="max_toque">
                                                    <dt></dt>
                                                    <dd><strong>441</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
                                                </dl>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="engine1">2.5 CRDi (WGT)</div>
                                            <p>
                                                Экономичный и тяговитый двигатель.
                                            </p>
                                            <div class="graph">
                                                <div class="pos">
                                                    <img src="/media/images/flat/H1/elements/diagram_2_1.jpg" class="lazy" width="470" height="480" alt="График показателей двигателя 2.4 MPi" /><br>
                                                    <div class="text"><img src="/media/images/flat/H1/elements/diagram_2_2.png" class="lazy" width="470" height="480" alt="График показателей двигателя 2.4 MPi" /></div>
                                                </div>
                                            </div>
                                            <div class="max">
                                                <dl class="max_power">
                                                    <dt></dt>
                                                    <dd><strong>116</strong> <span class="unit">Макс. мощность, Л.с.</span></dd>
                                                </dl>
                                                <dl class="max_toque">
                                                    <dt></dt>
                                                    <dd><strong>343</strong> <span class="unit">Макс. крутящий момент, Нм</span></dd>
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
							<strong>5-ступенчатая АКПП</strong>
							Классическая гидромеханическая коробка передач обеспечивает комфорт при движении в городе и за его пределами. Стандартная хромированная окантовка и отделка кожей рычага коробки переключения передач отлично сочетаются с кожаной отделкой руля.
						</span>
                                        <div class="btm_img"><img class="lazy" width="525" height="465" alt="Автоматическая коробка переключения передач" src="/media/images/common/transparent.gif" data-original="/media/images/flat/H1/elements/performance_1.jpg" /></div>
                                    </li>
                                    <li>
						<span class="description">
							<strong>6-ступенчатая МКПП</strong>
							6-ступенчатая ручная коробка передач обеспечивает точное и плавное переключение передач, добавляя уверенности за рулем.
						</span>
                                        <div class="btm_img"><img class="lazy" width="525" height="465" alt="Механическая коробка переключения передач" src="/media/images/common/transparent.gif" data-original="/media/images/flat/H1/elements/performance_2.jpg" /></div>
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
                                        <div class="text1">Продуманная безопасность</div>
                                        <div class="text2">Новый H-1 был оптимизирован для лучшей защиты водителя и пассажиров. Мы ни на миг не теряем бдительности — чтобы вы могли чувствовать себя спокойно.</div>
                                    </div>
                                </div>
                                <div class="scene_wrap">
                                    <div class="scene">
                                        <img class="car" src="/media/images/flat/H1/elements/safety_1.jpg" width="940" height="" title="" alt="Электронная система стабилизации курсовой устойчивости ESС">
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
                                            <img class="lazy" src="/media/images/common/transparent.gif" data-original="/media/images/flat/H1/elements/safety_slider_1.jpg" width="1920" height="540" alt="Улучшенная маневренность">
							<span><strong>Улучшенная маневренность</strong>
							Узкие участки на центральных улицах городов или проселочных дорогах не доставят проблем водителю H-1. Несмотря на более чем пятиметровую длину, радиус поворота автомобиля не превышает 5,6 м.
							</span>
                                        </li>
                                        <li class="safety_slider-item">
                                            <img src="/media/images/flat/H1/elements/safety_slider_2.jpg" width="1920" height="540" alt="Дисковые тормоза">
							<span><strong>Дисковые тормоза</strong>
							Большие и мощные дисковые тормоза (16 дюймов в диаметре) устанавливаются и на задние, и передние колеса. Они обеспечивают высокий уровень тормозных характеристик, который необходим при полной загрузке микроавтобуса.
							</span>
                                        </li>
                                    </ul>
                                    <ul class="safety_slider-paginator">
                                        <li class="alive">
                                            <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/H1/elements/safety_preview_1.jpg" width="90" height="90">
                                            <div class="bordered"></div>
                                        </li>
                                        <li>
                                            <img class="lazy" alt="" src="/media/images/common/transparent.gif" data-original="/media/images/flat/H1/elements/safety_preview_2.jpg" width="90" height="90">
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
                                        <div class="text1">Продуманный и непринужденный комфорт</div>
                                        <div class="text2">Добро пожаловать в восьмиместный H-1, отличающийся комфортабельным и просторным салоном. Это многофункциональный, стильный и роскошный автомобиль, в котором удобно и водителю, и пассажирам.</div>
                                    </div>
                                </div>
                                <div class="main_wrap">
                                    <ul class="list_wrap">
                                        <li class="list list1">
                                            <a href="#">
                                                <strong>Центральный замок с пультом дистанционного управления</strong>
                                                <img src="/media/images/flat/H1/elements/convenience_1.jpg" width="470" height="250" alt="Центральный замок с пультом дистанционного управления" />
                                            </a>
                                        </li>
                                        <li class="list list2">
                                            <a href="#">
                                                <strong>Аудиосистема</strong>
                                                <img src="/media/images/flat/H1/elements/convenience_2.jpg" width="470" height="250" alt="Аудиосистема" />
                                            </a>
                                        </li>
                                        <li class="list list3">
                                            <a href="#">
                                                <strong>Система помощи при парковке</strong>
                                                <img src="/media/images/flat/H1/elements/convenience_3.jpg" width="470" height="250" alt="Система помощи при парковке" />
                                            </a>
                                        </li>
                                        <!--
                                                                <li class="list list4">
                                                                    <a href="#">
                                                                        <strong>Боковые зеркала с электроприводом</strong>
                                                                        <img src="/media/images/flat/H1/elements/convenience_4.jpg" width="470" height="250" alt="Двустворчатые двери" />
                                                                    </a>
                                                                </li>
                                        -->
                                    </ul>

                                    <div class="convenience__slider-cut">
                                        <ul class="view_wrap">
                                            <li class="view view1 alive">
                                                <img src="/media/images/flat/H1/elements/convenience_popup_1.jpg" width="940" height="500" alt="Центральный замок" />
                                                <div class="text">
                                                    <strong>Центральный замок с пультом дистанционного управления</strong>
                                                    Двери автомобиля могут открываться и закрываться дистанционно при помощи встроенного в ключ зажигания пульта дистанционного управления.
                                                </div>
                                            </li>
                                            <li class="view view2">
                                                <img src="/media/images/flat/H1/elements/convenience_popup_2.jpg" width="940" height="500" alt="Двухступенчатый обогрев сидений" />
                                                <div class="text">
                                                    <strong>Аудиосистема</strong>
                                                    Лучшая аудиосистема для H-1: радио, CD- и MP3-проигрыватель.
                                                </div>
                                            </li>
                                            <li class="view view3">
                                                <img src="/media/images/flat/H1/elements/convenience_popup_3.jpg" width="940" height="500" alt="Многофункциональное рулевое колесо" />
                                                <div class="text">
                                                    <strong>Система помощи при парковке</strong>
                                                    Сложное место для парковки? Теперь это перестало быть проблемой благодаря суперточным ультразвуковым датчикам парковки!
                                                </div>
                                            </li>
                                            <!--
                                                                        <li class="view view4">
                                                                            <img src="/media/images/flat/H1/elements/convenience_popup_4.jpg" width="940" height="500" alt="Система адаптивного переднего освещения (AFLS)" />
                                                                            <div class="text">
                                                                                <strong>Боковые зеркала с электроприводом</strong>
                                                                                Складывающиеся боковые зеркала для защиты от повреждения при парковке или при стеснённых условиях.
                                                                            </div>
                                                                        </li>
                                            -->
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
                                                        <span class="img"><img width="226" height="140" alt="Управление обдувом на задних сиденьях" src="/media/images/flat/H1/elements/convenience_5.jpg"/></span>
										<span class="description">
											<strong>Управление обдувом на задних сиденьях</strong>
											Две вращающиеся ручки позволяют пассажирам на задних сиденьях микроавтобуса контролировать температуру и скорость работы вентилятора.
										</span>
                                                    </li>
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Разъемы для USB/AUX устройств" src="/media/images/flat/H1/elements/convenience_6.jpg"/></span>
										<span class="description">
											<strong>Разъемы для USB/AUX устройств</strong>
											H-1 оснащается разъемом для подключения MP3-плеера или магнитофона.
										</span>
                                                    </li>
                                                    <!--
                                                                                        <li>
                                                                                            <span class="img"><img width="226" height="140" alt="Обтекаемые боковые стекла" src="/media/images/flat/H1/elements/convenience_7.jpg"/></span>
                                                                                            <span class="description">
                                                                                                <strong>Обтекаемые боковые стекла</strong>
                                                                                                Между колесными арками топовых версий микроавтобуса установлены привлекательные боковые накладки.
                                                                                            </span>
                                                                                        </li>
                                                    -->
                                                    <li>
                                                        <span class="img"><img width="226" height="140" alt="Тройные форcунки стеклоомывателя" src="/media/images/flat/H1/elements/convenience_8.jpg"/></span>
										<span class="description">
											<strong>Тройные форcунки стеклоомывателя</strong>
											Обновленные высокоэффективные тройные форсунки стеклоомывателя улучшают видимость и не создают помех для встречного потока воздуха.
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
                                    <h2 class="title_wrap_h2">Технические характеристики Hyundai H-1</h2>
                                    <a href="#" class="open-all isWillClose">Свернуть все</a>
                                </div>
                                <div class="specs-listing_wrap">
                                    <ul class="specs-listing">
                                        <li class="head-line">
                                            <table>
                                                <tr>
                                                    <th>Модификации</th>
                                                    <td>2.5 - 6MT</td>
                                                    <td>2.5 - 5AT</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="listing-item">
                                            <div class="opened">Двигатель</div>
                                            <table>
                                                <tr>
                                                    <th>Мощность*</th>
                                                    <td>116 л.с.</td>
                                                    <td>170 л.с.</td>
                                                </tr>
                                                <tr>
                                                    <th>Объем двигателя</th>
                                                    <td>2.5 л</td>
                                                    <td>2.5 л</td>
                                                </tr>
                                                <tr>
                                                    <th>Двигатель</th>
                                                    <td>A2 2.5 CRDi</td>
                                                    <td>A2 2.5 CRDi</td>
                                                </tr>
                                                <tr>
                                                    <th>Объем, см3</th>
                                                    <td>2497</td>
                                                    <td>2497</td>
                                                </tr>
                                                <tr>
                                                    <th>Макс. мощность, кВт</th>
                                                    <td>85</td>
                                                    <td>125</td>
                                                </tr>
                                                <tr>
                                                    <th>Макс. мощность, л.с.</th>
                                                    <td>116 л.с.</td>
                                                    <td>170 л.с.</td>
                                                </tr>
                                                <tr>
                                                    <th>Топливный бак</th>
                                                    <td>75</td>
                                                    <td>75</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="listing-item">
                                            <div>Динамика</div>
                                            <table>
                                                <tr>
                                                    <th>Динамические характеристики</th>
                                                    <td>6МКПП</td>
                                                    <td>5АКПП</td>
                                                </tr>
                                                <tr>
                                                    <th>Тип трансмиссии</th>
                                                    <td>Механическая</td>
                                                    <td>Гидромеханическая</td>
                                                </tr>
                                                <tr>
                                                    <th>Ускорение 0-100 км/ч, сек </th>
                                                    <td>22.1</td>
                                                    <td>14.4</td>
                                                </tr>
                                                <tr>
                                                    <th>Макс. скорость, км/ч </th>
                                                    <td>154</td>
                                                    <td>180</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="listing-item">
                                            <div>Расход топлива</div>
                                            <table>
                                                <tr>
                                                    <th>Городской цикл, л/100 км*</th>
                                                    <td>9.2</td>
                                                    <td>11.2</td>
                                                </tr>
                                                <tr>
                                                    <th>Загородный цикл, л/100 км*</th>
                                                    <td>6.4</td>
                                                    <td>7.3</td>
                                                </tr>
                                                <tr>
                                                    <th>Смешанный цикл, л/100 км*</th>
                                                    <td>7.5</td>
                                                    <td>8.8</td>
                                                </tr>
                                                <tr>
                                                    <th>Выделение CO2<br>в городском цикле, г/км*</th>
                                                    <td>242</td>
                                                    <td>297</td>
                                                </tr>
                                                <tr>
                                                    <th>Выделение CO2<br>в загородном цикле, г/км*</th>
                                                    <td>171</td>
                                                    <td>193</td>
                                                </tr>
                                                <tr>
                                                    <th>Выделение CO2<br>в смешанном цикле, г/км*</th>
                                                    <td>197</td>
                                                    <td>231</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li class="listing-item">
                                            <div>Подвеска</div>
                                            <table>
                                                <tr>
                                                    <th>Колесная база</th>
                                                    <td>3200</td>
                                                    <td>3200</td>
                                                </tr>
                                                <tr>
                                                    <th>Минимальный дорожный<br>просвет, мм*</th>
                                                    <td>190</td>
                                                    <td>190</td>
                                                </tr>
                                                <tr>
                                                    <th>Передняя колея</th>
                                                    <td>1685</td>
                                                    <td>1685</td>
                                                </tr>
                                                <tr>
                                                    <th>Задняя колея</th>
                                                    <td>1660</td>
                                                    <td>1660</td>
                                                </tr>
                                                <tr>
                                                    <th>Передний свес</th>
                                                    <td>855</td>
                                                    <td>855</td>
                                                </tr>
                                                <tr>
                                                    <th>Задний свес</th>
                                                    <td>1070</td>
                                                    <td>1070</td>
                                                </tr>
                                                <tr>
                                                    <th>Передняя подвеска</th>
                                                    <td>Независимая, стойки McPherson с пружинами</td>
                                                    <td>Независимая, стойки McPherson с пружинами</td>
                                                </tr>
                                                <tr>
                                                    <th>Задняя подвеска</th>
                                                    <td>Пружинная или рессорная, зависимая</td>
                                                    <td>Пружинная или рессорная, зависимая</td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="detailedSpecLink">
                                <a href="/configurator/car?car_id=11#desc">Подробные характеристики</a>
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
                                    <h2 class="title_wrap_h2">Фото Hyundai H-1</h2>
                                    <div class="thumbs-toggler">
                                        <a href="#" data-type="all" class="alive">Все</a>
                                        <a href="#" data-type="exterior">Экстерьер</a>
                                        <a href="#" data-type="interior">Интерьер</a>
                                    </div>
                                </div>
                                <ul id="all-gallery-items" style="display: none;">
                                    <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_1.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_1.jpg"/></li>
                                    <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_2.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_2.jpg"/></li>

                                    <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_4.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_4.jpg"/></li>
                                    <li><img data-type="exterior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_6.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_6.jpg"/></li>
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_3.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_3.jpg"/></li>
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_5.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_5.jpg"/></li>

                                    <!-- 					<li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_7.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_7.jpg"/></li> -->
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_8.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_8.jpg"/></li>
                                    <!-- 					<li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_9.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_9.jpg"/></li> -->
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_10.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_10.jpg"/></li>
                                    <!-- 					<li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_11.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_11.jpg"/></li> -->
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_12.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_12.jpg"/></li>
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_13.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_13.jpg"/></li>
                                    <li><img data-type="interior" width="229" height="144" alt="" src="/media/images/flat/H1/gallery_pics/gallery_preview_14.jpg" data-href="/media/images/flat/H1/gallery_pics/gallery_14.jpg"/></li>
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
                                    <h2 class="promo-title">Станьте владельцем H-1 уже сегодня</h2>
					<span class="promo-text">
					Выберите ближайший дилерский центр, пройдите
					тест-драйв и станьте владельцем Hyundai H-1.
					Для вас всегда есть удобные программы
					кредитования и другие предложения Drive Hyundai.
					</span>
                                    <a href="/test-drive?old_car_id=11" class="btn-flat">Пройти тест-драйв</a>
                                </div>
                                <img src="/media/images/flat/H1/elements/promo_pic.png" alt="Тест драйв Hyundai H-1">
                            </div>
                            <div class="promo-grid">
                                <ul class="clearfix">
                                    <li><a href="/configurator/?car_id=11"><span>Конфигуратор H-1</span></a></li>
                                    <li><a href="/find-dealer"><span>Найти дилера</span></a></li>
                                    <li class="hidden"><!-- <a target="_blank" href="/media/downloads/accessoires/H-1_Acc.pdf"><span>Каталог аксессуаров</span></a> --></li>
                                    <li><a href="/configurator/?car_id=11&calc_open=1"><span>Рассчитать кредит</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="promo-slider_wrap">
                            <div class="promo-slider_cut">
                                <ul class="promo-slider">
                                    <li>
                                        <a href="/Elantra" class="promo-slider-link">
                                            <img src="/media/images/carmodels/Elantra_92157739ede44226.png" alt="Elantra">
                                            <span class="model">Elantra</span>
                                            <span class="price">от  957 000  &#8381;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/i40" class="promo-slider-link">
                                            <img src="/media/images/carmodels/i40_20157739ec501388.png" alt="i40">
                                            <span class="model">i40</span>
                                            <span class="price">от 1 124 000  &#8381;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/i40-Wagon" class="promo-slider-link">
                                            <img src="/media/images/carmodels/i40 универсал_64757739ed03829f.png" alt="i40 Универсал">
                                            <span class="model">i40 Универсал</span>
                                            <span class="price">от 1 304 000  &#8381;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Creta" class="promo-slider-link">
                                            <img src="/media/images/carmodels/Creta_955579f250bcf329.png" alt="Creta">
                                            <span class="model">Creta</span>
                                            <span class="price">от  799 900  &#8381;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Tucson" class="promo-slider-link">
                                            <img src="/media/images/carmodels/Tucson_57257739f51bbc7f.png" alt="Tucson">
                                            <span class="model">Tucson</span>
                                            <span class="price">от 1 505 900  &#8381;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/SantaFe" class="promo-slider-link">
                                            <img src="/media/images/carmodels/Santa Fe Premium_22757739f44cbfa3.png" alt="Santa Fe">
                                            <span class="model">Santa Fe</span>
                                            <span class="price">от 1 856 000  &#8381;</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/GrandSantaFe" class="promo-slider-link">
                                            <img src="/media/images/carmodels/Grand Santa Fe_76357f794c7e076a.png" alt="Grand Santa Fe">
                                            <span class="model">Grand Santa Fe</span>
                                            <span class="price">от 2 324 000  &#8381;</span>
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
                function cubeStart(va) {}
            </script>

            <!--RuTarget-->
            <script type="text/javascript" >
                var _rutarget = window._rutarget || [];
                _rutarget.push({'event': 'showOffer', 'sku': 'h1'});
            </script>
            <!--/RuTarget-->
        </main>


        <!--
        Контент страницы закончится тут
        -->

</div>




    <script src="http://www.hyundai.ru/assets/js/common.js"></script>


    <!-- ! specific stuff for current page only ! -->

    <script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/spritespin.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/cars/sc_gt_default.js"></script>
    <script type="text/javascript" src="http://www.hyundai.ru/media/js/cars/pip_flat_H1.js"></script>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>