<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Это пять!");
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

            <img class="promo-head" src="img/7a48bc030ebd638713f3192503ddd302_Hyundai-5_webbanner_offer.jpg" style=""/>

            <!-- old syntax: -->
            <!-- <img class="promo-head" src="http://www.hyundai.ru/media/offers_image/41fb8a0a716cb03b5fe406bea54aa47d_Hyundai-5_webbanner_offer_preview.jpg" style=""/> -->

            <!-- end of hiding banner-->

            <div class="offers-content">

                <h1 class="title-offer bordr-btm"><span class="nowrp">Это пять!</span></h1>

                <div class="offer-terms bordr-btm" style="border-bottom: none">
                    <div class="offers-block">
                        <div class="row-inline clearfix">
                            <!--<h2 class="title-offer__lev02 multiple-cars">Это пять!</h2>-->
                            <div class="row-inline__cell">
                                <strong>Кредит</strong>
                                <div class="offer-price-count">5%</div>
                            </div>
                        </div>

                        <div class="row-inline">
                            <p class="offer-terms__text">
                                Начиная с 1 марта 2018 года вы можете воспользоваться специальным весенним предложением на покупку в кредит моделей Solaris, Creta, Elantra и Tucson по специальной ставке 5%*.<br><br>
                                По условиям финансовой программы при покупке новых автомобилей Solaris, Creta, Elantra и Tucson в кредит по стандартным условиям при первоначальном взносе от 30% процентная ставка составит всего 5%. Безусловными преимуществами программы являются сниженная процентная ставка, представленность во всех официальных дилерских центрах России и быстрое принятие решения о выдаче кредита - ответ от банков - партнеров приходит потенциальному заемщику в течение 30 минут. Кредитный договор оформляется в рублях сроком на 36 месяцев. Специальные условия на покупку в кредит действуют до 30 апреля 2018 года.<br><br>
                                <b>Для расчета кредита нажмите на картинку интересующего вас автомобиля ниже.</b>
                            </p>
                        </div>


                        <div class="offer-actions clearfix">
                            <div class="row row-left">
                                <a href="http://www.hyundai.ru/configurator/car/23/#calculator" target="_blank"><img src="img/Solaris.jpg" alt="Solaris" width="400" height="230"></a>
                            </div>
                            <div class="row row-right">
                                <div class="offer-actions__button-span">
                                    <a href="http://www.hyundai.ru/configurator/car/22/#calculator" target="_blank"><img src="img/Creta.jpg" alt="Creta" width="400" height="230"></a>
                                </div></div>

                            <div class="offer-actions clearfix">
                                <div class="row row-left" style="margin-top: 50px">
                                    <a href="http://www.hyundai.ru/configurator/car/18/#calculator" target="_blank"><img src="img/Tucson.jpg" alt="Tucson" width="400" height="230"></a>
                                </div>
                                <div class="row row-right" style="margin-top: 50px">
                                    <div class="offer-actions__button-span">
                                        <a href="http://www.hyundai.ru/configurator/car/7/#calculator" target="_blank"><img src="img/Elantra.jpg" alt="Elantra" width="400" height="230"></a>
                                    </div>
                                </div>

                                <!-- additional terms as footer -->

                                <div class="clearfix"></div>



                                <div class="tip-supscript ">
                                    <p style="font-size: 10px;">
                                        *5.0% годовых – процентная ставка в кредитном договоре. Валюта кредита - рубли РФ; уровень первоначального взноса от 30% от стоимости автомобиля. Срок кредита 12-36 месяцев. Программа распространяется на покупку в кредит Hyundai Solaris, Creta (код комплектации: CTW52G61GGG013), Elantra, Tucson. Программой предусмотрено страхование жизни и здоровья заемщика. Минимальная сумма кредита – 50 000 руб., максимальная сумма кредита – 6 500 000 руб. Обязательно подтверждение дохода клиента. Залоговое обеспечение - залог приобретаемого ТС. Предложение действительно при подтверждении дохода Заемщика. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» - генеральная лицензия ЦБ РФ №1792 от 13.02.2013, ООО «Сетелем Банк» - генеральная лицензия ЦБ РФ №2168. Предложение действует с 01.03.18 по 30.04.18, не является офертой. Условия могут быть изменены Банком в одностороннем порядке.
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
