<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интересное предложение для владельцев Santa Fe!");
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

                <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/af769b27850993d65279bf07a5090af2_santa-fe_banner_2.jpg" style=""/>

                <!-- old syntax: -->
                <!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/af769b27850993d65279bf07a5090af2_santa-fe_tiser_465_330.jpg" style=""/> -->

                <!-- end of hiding banner-->

                <div class="offers-content">

                    <div class="offer-terms bordr-btm">
                        <div class="offers-block">
                            <div class="row-inline">
                                <h2 class="title-offer__lev02 multiple-cars">Интересное предложение для владельцев Santa Fe!</h2>
                                <p class="offer-terms__text">
                                    только этим летом для наших клиентов действует дополнительная скидка<sup>1</sup> - 40 % на оригинальные аксессуары Hyundai<sup>2</sup> . Теперь оригинальные текстильные коврики салона с логотипом модели можно приобрести по привлекательной цене:<br/>
                                    <br/>
                                    Текстильные коврики, цвет темно-серый ( 4ZF14AC005NBC1 -комплект 4 шт.) – 1419<sup>3</sup> руб<br/>
                                    Текстильные коврики, цвет черный ( 4ZF14AC005RYN1 -комплект 4 шт.) - 1419 руб<br/>
                                </p>
                            </div>

                            <!-- additional terms as footer -->

                            <div class="clearfix"></div>



                            <div class="tip-supscript ">
                                <p style="font-size: 10px;">
                                    1 Предложение ограничено доступным количеством товара.
                                </p>

                                <p style="font-size: 10px;">
                                    2 Скидка действует только на товары с артикулом 4ZF14AC005NBC1, 4ZF14AC005RYN1.
                                </p>

                                <p style="font-size: 10px;">
                                    3 Указана рекомендованная розничная цена, может отличаться от действительных цен у официального дилера Hyundai.
                                </p>

                                <p style="font-size: 10px;">
                                    * Срок действия кампании - до 31 октября 2018
                                </p>

                            </div>

                            <div class="clearfix"></div>
                        </div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
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