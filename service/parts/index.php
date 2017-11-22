<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("parts");
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

                <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/8faf22a9aba6324e5867e14a4881d726_Hyundai_PL2_webbanner.jpg" style=""/>

                <!-- old syntax: -->
                <!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/64a4a1357f703d9aa949fe8c9ded3c8e_bdc94321-ed4e-4f2a-92e3-a6a74829070d.jpg" style=""/> -->

                <!-- end of hiding banner-->

                <div class="offers-content">

                    <h1 class="title-offer bordr-btm" style="border-bottom: none;">Запасные части PL2</h1>

                    <div class="offers-block">

                        <div class="offer-terms">
                            <a href="/service/" class="bw-views-link" role="button">Пройти ТО с запчастями PL-2 с максимальной выгодой >></a><br clear="all"/>

                            <p class="offer-terms__text">
                                Запасные части PL2 – уникальное предложение для автомобилей HYUNDAI старше 3-х лет.</p><br>

                            <p class="offer-terms__text">PL2 - это качественная альтернатива основной линейке запасных частей, рекомендованная для автомобилей старше 3-х лет, по сниженным ценам.<br><br>PL2 производятся на тех же предприятиях и по тем же технологиям, которые используются при производстве оригинальных запасных частей Hyundai.<br><br>
                                PL2 – результат постоянного исследования рынка и стремления ООО «Хендэ Мотор СНГ» заботиться о своих клиентах.</p><br>

                            <p class="offer-terms__text"><b>Основные преимущества:</b><br><br>
                                •	Выгода от 20% до 50% по сравнению с основной линейкой запасных частей;<br>
                                •	Гарантия 1 год или 20 000 км пробега у всех официальных дилеров;<br>
                                •	Контроль качества специалистами Hyundai;<br>
                                •	Приобретение и установка запасных частей в официальных сервисных центрах HYUNDAI.</p><br><br>

                            <p class="offer-terms__text">Линейка запасных частей PL2 включает в себя более 100 позиций для различных моделей* Hyundai, в том числе:<br><br>
                                •	Масляный фильтр<br>
                                •	Воздушный фильтр<br>
                                •	Салонный фильтр<br>
                                •	Топливный фильтр<br>
                                •	Ремень ГРМ<br>
                                •	Свечи зажигания<br>
                                •	Тормозные колодки<br>
                                •	Тормозные диски<br>
                                •	Амортизаторы<br>
                                •	Стойки стабилизатора<br>
                                •	Ролик натяжителя<br>
                            </p><br><br>




                        </div>




                    </div>

                </div>

            </div>
        </div>

        <div class="bottom-area-line">
            <div class="bottom-area-line__inner grid">
                <div class="grid-el grid-el-50 bottom-area-line__inner-left">
                    <div class="main-message">Мы хотим, чтобы владеть автомобилем Hyundai было просто и удобно</div>
                </div>
                <div class="grid-el grid-el-50 bottom-area-line__inner-right">
                    <a href="#" class="request-service-btn zing_form_toggler" for="zing_cuzov_btn">запись на сервис</a>
                    <a href="/all-offers/" class="offers-link">Сервисные акции<i class="icon icon-right"></i></a>
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
            .bw-views-link[role="button"] {
                background: #1d88ce none repeat scroll 0 0;
                border: 2px solid #1d88ce;
                color: #fff!important;
                line-height: 40px;
                text-decoration: none;
                transition: background 0.15s cubic-bezier(0.65, 0.05, 0.36, 1) 0s, color 0.15s cubic-bezier(0.65, 0.05, 0.36, 1) 0s;
                width: auto;
                font-size: 16px;
                padding: 0px 20px;
                margin-bottom: 20px;
                float: left;
                margin-top: -20px;
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