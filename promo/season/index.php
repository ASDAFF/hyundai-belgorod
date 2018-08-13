<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Акция");
?>


    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <style>
            #wrapper {
                background: #f5f5f5 !important;
            }
        </style>

        <div class="offers-container">
            <div class="content_area">
                <!-- hide elantra and ix35 banner-->

                <!-- WARNING -->
                <!-- this checks only img src!! no checking by offer ID -->

                <img class="promo-head" src="images/c86e24a64a023b84f0d0d2b0086357e2_banner_team.jpg" style=""/>

                <!-- old syntax: -->
                <!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/2d1d0ce07c4559f2076b1f4ca92cb81e_465х330_FIFA2108_banner.jpg" style=""/> -->

                <!-- end of hiding banner-->

                <div class="offers-content">

                    <div class="offer-terms bordr-btm">
                        <div class="offers-block">
                            <div class="row-inline">
                                <h2 class="title-offer__lev02 multiple-cars">Дорогие владельцы!</h2>
                                <p class="offer-terms__text">
                                    В честь проведения Чемпионата мира по футболу FIFA 2018 в России™ мы подготовили выгодное сервисное предложение специально для владельцев Hyundai Solaris, Creta и ix35!
                                    <br/><br/>
                                    В период с 1 июня по 14 августа действуют специальные условия при прохождении технического обслуживания во всех дилерских центрах Хендэ: бесплатная диагностика и проверка по 36-ти пунктам в рамках программы «Лучшее для Своих»<sup>1</sup> вне зависимости от возраста автомобиля и специальная цена на замену передних тормозных колодок, включая работы и запасные части - 3 000  рублей РФ<sup>2</sup>!
                                </p>
                                <h2 class="title-offer__lev02 multiple-cars">Замена передних колодок!</h2>
                                <img src="images/table.png"/><br/><br/>
                                <p class="offer-terms__text">Всех тех, кто только присоединился к команде Hyundai и впервые посетил официальный сервис Hyundai ожидают приятные подарки из коллекции оригинальных аксессуаров Hyundai Collection<sup>***</sup>!
                                    <br/><br/>Предложение ограничено наличием товара в дилерских центрах Hyundai
                                </p>
                            </div>

                            <!-- additional terms as footer -->

                            <div class="clearfix"></div>



                            <div class="tip-supscript ">
                                <p style="font-size: 10px;">
                                    1 Сервисная программа «Лучшее для своих» включает в себя комплексную бесплатную диагностику автомобилей Hyundai старше 2-х лет с момента их выпуска по 36 ключевым пунктам без ограничений по сроку эксплуатации и пробегу автомобилей (в рамках кампании услуга предоставляется для автомобилей любого возраста).
                                </p>

                                <p style="font-size: 10px;">
                                    2 Указанная цена действительна при проведении замены передних колодок для модели Hyundai Solaris с использованием линейки запасных частей PL-2* для автомобилей старше 2 лет
                                </p>

                                <p style="font-size: 10px;">
                                    * PL-2 (Product line - 2) –Продукт Лайн 2. Запасные части Product Line 2 производятся в соответствии с технологиями и стандартам качества бренда Hyundai и гарантией  от производителя сроком на 1 год или 20 000 км пробега, в зависимости от того, что наступит раньше, при установке специалистами официальных сервисных центров Hyundai
                                </p>

                                <p style="font-size: 10px;">
                                    ** Рекомендованные максимальные розничные цены
                                </p>

                                <p style="font-size: 10px;">
                                    *** Hyundai Collection – бренд-коллекция Hyundai, которая включат в себя оригинальные аксессуары для повседневного использования.
                                </p>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>


            <div class="bottom-area-line">
                <div class="bottom-area-line__inner grid">
                    <div class="grid-el grid-el-50 bottom-area-line__inner-left">
                        <div class="main-message">Мы хотим, чтобы владеть автомобилем Hyundai было просто и удобно</div>
                    </div>
                    <div class="grid-el grid-el-50 bottom-area-line__inner-right">
                        <a href="#" class="request-service-btn zing_form_toggler" for="zing_cuzov_btn">запись на сервис</a>
                        <a href="/all-offers#service-offers" class="offers-link">Сервисные акции<i class="icon icon-right"></i></a>
                    </div>
                </div>
            </div>

            <style>
                .bottom-area-line {
                    background: #1d88ce none repeat scroll 0 0;
                }
                .bottom-area-line__inner {
                    margin: 0 auto;
                    padding: 40px 0;
                    width: 940px;
                }
                .bottom-area-line__inner-right {
                    text-align: right;
                }
                .main-message {
                    color: #fff;
                    font-family: "HyundaiSans";
                    font-size: 24px;
                    font-weight: normal;
                    line-height: 30px;
                    width: 470px;
                }
                .bottom-area-line__inner-right {
                    padding-top: 5px;
                }
                .offers-link {
                    color: #fff;
                    display: inline-block;
                    font-family: "Arial",sans-serif;
                    font-size: 13px;
                    font-weight: bold;
                    letter-spacing: 0.3px;
                    margin-left: 50px;
                    text-transform: uppercase;
                    transition: opacity 0.15s ease 0s;
                    vertical-align: middle;
                }
                .offers-link:hover {
                    opacity: 0.75;
                    text-decoration: none;
                }
                .request-service-btn {
                    display: inline-block;
                }

                .request-service-btn {
                    -moz-user-select: none;
                    background: transparent none repeat scroll 0 0;
                    border: 2px solid #fff;
                    color: #fff;
                    display: inline-block;
                    font-family: "Arial",sans-serif;
                    font-size: 13px;
                    font-weight: bold;
                    padding: 16px 29px;
                    text-align: center;
                    text-transform: uppercase;
                    transition: background 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, border-color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s, color 0.15s cubic-bezier(0.18, 0.89, 0.32, 1.28) 0s;
                }
                .request-service-btn:hover {
                    background: #fff none repeat scroll 0 0;
                    color: #1d88ce;
                    text-decoration: none;
                }

                .offers-link {
                    color: #fff;
                    display: inline-block;
                    font-family: "Arial",sans-serif;
                    font-size: 13px;
                    font-weight: bold;
                    letter-spacing: 0.3px;
                    margin-left: 50px;
                    text-transform: uppercase;
                    transition: opacity 0.15s ease 0s;
                    vertical-align: middle;
                }
                .offers-link:hover {
                    opacity: 0.75;
                    text-decoration: none;
                }
                .grid .grid-el-50 {
                    width: 50%;
                }
                .grid .grid-el {
                    float: left;
                    position: relative;
                }

                .grid::after {
                    clear: both;
                    content: ".";
                    display: block;
                    height: 0;
                    line-height: 0;
                    visibility: hidden;
                }
                .grid {
                    position: relative;
                }
            </style>
        </div>
        </div>

        <!--RuTarget-->
        <script type="text/javascript">
            var _rutarget=window._rutarget||[];
            _rutarget.push({
                'event':'otherPage',
                'nosync': 'true'
            });
        </script>
        <!--/RuTarget-->
    </main>


    <!--
    Контент страницы закончится тут
    -->



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>