<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Гарантия");
?>

    <link type="text/css" href="https://www.hyundai.ru/media/css/dropit.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/service_styles.css" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/media/css/service_overrides.css?v=1" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=3.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <div class="content-wrapper">
            <div class="content content--warranty">
                <div class="content-header-fw">
                    <div class="content-header-fw__text">
                        <div class="content-title">Гарантия</div>
                        <div class="content-descr"><!-- Мы хотим, чтобы владеть автомобилем Hyundai было просто и удобно в течение всего срока эксплуатации и предлагаем программу помощи на дорогах. -->
                            По всем вопросам технического обслуживания и ремонта автомобиля, включая кузовной ремонт, следует обращаться только к авторизованным сервисным партнерам Хёндэ (Hyundai).</div>
                        <a href="#warranty-info" class="content-scroller content-scroller--warranty" data-role="content-scroller"><i class="icon icon-dark icon-down"></i> что предлагает программа</a>
                    </div>
                </div>
                <div class="warranty-info" id="warranty-info">
                    <div class="content-inner">
                        <div class="content-descr">Для поддержания автомобиля в исправном техническом состоянии и сохранения гарантии необходимо соблюдать все правила нормальной эксплуатации автомобиля и рекомендации изготовителя, а также установленный регламент технического обслуживания.</div>
                        <div class="subject subject-warranty-info grid">
                            <div class="warranty-info-block grid-el grid-el-50">
                                <div class="warranty-info-heading">Общая гарантия</div>
                                <div class="warranty-info-period">
                                    <div class="wrrnty-p__years">3</div>
                                    <div class="wrrnty-p__years-sup">Года</div>
                                    <div class="wrrnty-p__years-divider"></div>
                                    <div class="wrrnty-p__years-milage">100 000</div>
                                    <div class="wrrnty-p__years-milage-sup-sub">Км пробега</div>
                                </div>
                                <div class="warranty-info-image"><img src="http://hyundai.ru/media/img/service-pages/warranty-info-image-1.jpg" class="warranty-info-img" alt=""/></div>
                            </div>
                            <div class="warranty-info-block grid-el grid-el-50">
                                <div class="warranty-info-heading">двигатель и коробка передач</div>
                                <div class="warranty-info-period">
                                    <div class="wrrnty-p__years">5</div>
                                    <div class="wrrnty-p__years-sup">Лет</div>
                                    <div class="wrrnty-p__years-divider"></div>
                                    <div class="wrrnty-p__years-milage">120 000</div>
                                    <div class="wrrnty-p__years-milage-sup-sub">Км пробега</div>
                                </div>
                                <div class="warranty-info-image"><img src="http://hyundai.ru/media/img/service-pages/warranty-info-image-2.png" class="warranty-info-img" alt=""/></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-inner">
                    <div class="subject subject-warranty">
                        <div class="subject-blackboard">
                            <a id="wcontent"></a>
                            <div class="subject-tabs-btns">
                                <ul>
                                    <li class="tab-btn"><a class="tab-btn-link" href="#">Все модели</a></li><!--
						 --><li class="tab-btn"><a class="tab-btn-link" href="#">Genesis, Equus</a></li><!--
						 --><li class="tab-btn"><a class="tab-btn-link stab" href="#">Solaris, Creta</a></li>
                                </ul>
                            </div>

                            <div class="subject-content subject-content-tabs">
                                <div class="subject-content as-tab" data-tabIndex="0">
                                    <div class="spoilers">
                                        <div class="spoilers-content">
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантийный период
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">3<sup>Года</sup></span>
                                                        <span class="warranty-value--milage">100 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на элементы новых автомобилей Хёндэ (Hyundai), за исключением отдельных комплектующих изделий, указанных в настоящей гарантии, составляет 3 года или 100 тыс. км пробега (в зависимости от того, что наступит раньше), начиная с момента продажи (передачи) автомобиля Хёндэ (Hyundai) первому покупателю (т. е. с указанной в сервисной книжке даты начала гарантии).
                                                    <br><br>
                                                    Срок службы автомобиля Хёндэ (Hyundai) составляет 6 лет или 180 тыс. км пробега (в зависимости от того,
                                                    что наступит раньше).
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">
                                                    Гарантия на отдельные комплектующие
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">1<sup>Год</sup></span>
                                                        <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    12 месяцев или 20 тыс. км пробега (в зависимости от того, что наступит раньше):
                                                    <ul>
                                                        <li>Тормозные диски и барабаны;</li>
                                                        <li>Газоразрядные лампы;</li>
                                                        <li>Заправка системы кондиционирования хладагентом;</li>
                                                        <li>Приводные ремни.</li>
                                                        <li>Аккумуляторная батарея;</li>
                                                        <li>Прокладки различных типов (кроме прокладки головки блока цилиндров);</li>
                                                        <li>Втулки стабилизаторов передней и задней подвески.</li>
                                                    </ul>
                                                    36 месяцев или 100 тыс. км пробега (в зависимости от того, что наступит раньше):
                                                    <ul>
                                                        <li>Аудиоаппаратура, установленная изготовителем</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на лакокрасочное покрытие
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">3<sup>Года</sup></span>
                                                        <span class="warranty-value--milage">100 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на лакокрасочное покрытие новых автомобилей Хёндэ (Hyundai) составляет 3 года или 100 тыс. км пробега (в зависимости от того, что наступит раньше) начиная с момента продажи (передачи) первому покупателю (т. е. с указанной в сервисной книжке даты начала гарантии).
                                                    <br><br>
                                                    Владелец вправе предъявить требования к качеству лакокрасочного покрытия только в течение гарантийного периода.
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на запасные части
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">1<sup>Год</sup></span>
                                                        <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на оригинальные запасные части для автомобиля Хёндэ (Hyundai), кроме отдельных комплектующих изделий, составляет 1 год или 20 тыс. км пробега (в зависимости от того, что наступит раньше) начиная с момента покупки и установки запасной части на автомобиль Хёндэ (Hyundai) у официального дилера.
                                                </div>
                                            </div>

                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на комплектующие сторонних поставщиков
                                                    <!--
                                                                                                <div class="warranty-value">
                                                                                                     <span class="warranty-value--years">1<sup>Год</sup></span>
                                                                                                    <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                                                                </div>
                                                    -->
                                                </div>
                                                <div class="spoiler-inner">
                                                    На некоторые комплектующие автомобилей Хёндэ (Hyundai) гарантия предоставляется поставщиками данных комплектующих и на их условиях.<br/>
                                                    В частности, к таким комплектующим относятся:
                                                    <ul class="spoiler-ul">
                                                        <li>шины, изначально установленные на автомобиль</li>
                                                        изготовителем;
                                                        <li>мультимедийные и навигационные системы,установленные на автомобиль под контролем изготовителя.</li></ul>
                                                    Информацию по условиям гарантии для данных комплектующих вы сможете получить у авторизованных сервисных партнеров Хёндэ (Hyundai).
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- //spoilers -->
                                    <div class="warranty-dl">
                                        <div class="warranty-file">Подробная информация о всех гарантийных условиях<a href="/media/downloads/warranty.pdf" rel="download" class="file-dl" target="_blank">Скачать</a></div>
                                    </div>
                                </div>
                                <div class="subject-content as-tab" data-tabIndex="1">
                                    <div class="spoilers">
                                        <div class="spoilers-content">
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантийный период
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">5<sup>Лет</sup></span>
                                                        <span class="warranty-value--milage">150 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на элементы новых автомобилей Hyundai Equus, Hyundai Genesis, за исключением отдельных комплектующих изделий, указанных в настоящей гарантии, составляет 5 лет или 150 тыс. км пробега (в зависимости от того, что наступит раньше), начиная с момента продажи (передачи) автомобиля Hyundai Equus, Genesis первому покупателю (т. е. с указанной в сервисной книжке даты начала гарантии).
                                                    <br><br>
                                                    Владелец вправе предъявить требования по гарантии, связанные только с качеством материалов или изготовления и только в течение гарантийного периода.
                                                    <br><br>
                                                    Срок службы автомобилей Хёндэ (Hyundai) составляет 6 лет или 180 тыс. км пробега (в зависимости от того, что наступит раньше).
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">
                                                    Гарантия на отдельные комплектующие
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">1<sup>Год</sup></span>
                                                        <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    На отдельные комплектующие автомобиля Hyundai Equus, Genesis, перечисленные ниже, предоставляется гарантия с момента продажи (передачи) автомобиля Hyundai Equus, Genesis первому покупателю (т. е. с указанной в регистрационной карточке сервисной книжки даты начала гарантии) в пределах 12 месяцев или 20 тыс. км пробега (в зависимости от того, что наступит раньше):
                                                    <ul>
                                                        <li>Тормозные диски и барабаны;</li>
                                                        <li>Газоразрядные лампы;</li>
                                                        <li>Заправка системы кондиционирования хладагентом;</li>
                                                        <li>Приводные ремни;</li>
                                                        <li>Аккумуляторная батарея;</li>
                                                        <li>Прокладки различных типов (кроме прокладки головки блока цилиндров);</li>
                                                        <li>Втулки стабилизаторов передней и задней подвески.</li>
                                                    </ul>
                                                    36 месяцев или 100 тыс. км пробега (в зависимости от того, что наступит раньше):
                                                    <ul>
                                                        <li>Аудиоаппаратура, установленная изготовителем.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на лакокрасочное покрытие
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">5<sup>Лет</sup></span>
                                                        <span class="warranty-value--milage">150 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на лакокрасочное покрытие новых автомобилей Hyundai Equus, Genesis составляет 5 лет или 150 тыс. км пробега (в зависимости от того, что наступит раньше) начиная с момента продажи (передачи) первому покупателю (т. е. с указанной в сервисной книжке даты начала гарантии).
                                                    <br><br>
                                                    Владелец вправе предъявить требования к качеству лакокрасочного покрытия только в течение гарантийного периода.
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на запасные части
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">1<sup>Год</sup></span>
                                                        <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на оригинальные запасные части для автомобиля Hyundai Equus, Genesis, кроме отдельных комплектующих изделий, составляет 1 год или 20 тыс. км пробега (в зависимости от того, что наступит раньше) начиная с момента покупки и установки запасной части на автомобиль Hyundai Equus, Genesis у официального дилера. На запасные части, отремонтированные или установленные взамен неисправных в ходе гарантийного ремонта, распространяется гарантия исключительно в рамках гарантийного срока на автомобиль Hyundai Equus, Genesis или до конца срока гарантии на отдельные комплектующие (в зависимости от того, что наступит раньше).
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- //spoilers -->
                                    <div class="warranty-dl">
                                        <div class="warranty-file">Подробная информация о всех гарантийных условиях<a href="/media/downloads/warranty.pdf" rel="download" class="file-dl" target="_blank">Скачать</a></div>
                                    </div>
                                </div>
                                <div class="subject-content as-tab" data-tabIndex="2">
                                    <div class="spoilers">
                                        <div class="spoilers-content">
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантийный период
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">5<sup>Лет</sup></span>
                                                        <span class="warranty-value--milage">150 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на элементы новых автомобилей Hyundai Solaris или Hyundai Creta, за исключением отдельных комплектующих изделий, указанных в настоящей гарантии, составляет 5 лет или 150 тыс. км пробега (в зависимости от того, что наступит раньше), начиная с момента продажи (передачи) автомобиля Hyundai Solaris или Hyundai Creta первому покупателю (т. е. с указанной в сервисной книжке даты начала гарантии).
                                                    <br><br>
                                                    Владелец вправе предъявить требования по гарантии, связанные только с качеством материалов или изготовления и только в течение гарантийного периода.
                                                    <br><br>
                                                    Срок службы автомобилей Хёндэ (Hyundai) составляет 6 лет или 180 тыс. км пробега (в зависимости от того, что наступит раньше).
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">
                                                    Гарантия на отдельные комплектующие
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">1<sup>Год</sup></span>
                                                        <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    На отдельные комплектующие автомобиля Hyundai Solaris или Hyundai Creta, перечисленные ниже, предоставляется гарантия с момента продажи (передачи) автомобиля Hyundai Solaris или Hyundai Creta первому покупателю (т. е. с указанной в регистрационной карточке сервисной книжки даты начала гарантии) в пределах 12 месяцев или 20 тыс. км пробега (в зависимости от того, что наступит раньше):
                                                    <ul>
                                                        <li>Тормозные диски и барабаны;</li>
                                                        <li>Газоразрядные лампы;</li>
                                                        <li>Заправка системы кондиционирования хладагентом;</li>
                                                        <li>Приводные ремни;</li>
                                                        <li>Аккумуляторная батарея;</li>
                                                        <li>Прокладки различных типов (кроме прокладки головки блока цилиндров);</li>
                                                        <li>Втулки стабилизаторов передней и задней подвески.</li>
                                                    </ul>
                                                    36 месяцев или 100 тыс. км пробега (в зависимости от того, что наступит раньше):
                                                    <ul>
                                                        <li>Аудиоаппаратура, установленная изготовителем.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на лакокрасочное покрытие
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">5<sup>Лет</sup></span>
                                                        <span class="warranty-value--milage">150 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на лакокрасочное покрытие новых автомобилей Hyundai Solaris или Hyundai Creta составляет 5 лет или 150 тыс. км пробега (в зависимости от того, что наступит раньше) начиная с момента продажи (передачи) первому покупателю (т. е. с указанной в сервисной книжке даты начала гарантии).
                                                    <br><br>
                                                    Владелец вправе предъявить требования к качеству лакокрасочного покрытия только в течение гарантийного периода.
                                                </div>
                                            </div>
                                            <div class="spoiler">
                                                <div class="spoiler-title">Гарантия на запасные части
                                                    <div class="warranty-value">
                                                        <span class="warranty-value--years">1<sup>Год</sup></span>
                                                        <span class="warranty-value--milage">20 000<sup>Км</sup><sub>пробега</sub></span>
                                                    </div>
                                                </div>
                                                <div class="spoiler-inner">
                                                    Срок гарантии на оригинальные запасные части для автомобиля Hyundai Solaris или Hyundai Creta, кроме отдельных комплектующих изделий, составляет 1 год или 20 тыс. км пробега (в зависимости от того, что наступит раньше) начиная с момента покупки и установки запасной части на автомобиль Hyundai Solaris или Hyundai Creta у официального дилера. На запасные части, отремонтированные или установленные взамен неисправных в ходе гарантийного ремонта, распространяется гарантия исключительно в рамках гарантийного срока на автомобиль Hyundai Solaris или Hyundai Creta или до конца срока гарантии на отдельные комплектующие (в зависимости от того, что наступит раньше).
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- //spoilers -->
                                    <div class="warranty-dl">
                                        <div class="warranty-file">Подробная информация о всех гарантийных условиях<a href="/media/downloads/warranty.pdf" rel="download" class="file-dl" target="_blank">Скачать</a></div>
                                    </div>
                                </div>
                            </div><!-- // subject-content-tabs -->
                        </div>
                    </div>
                    <!-- // subjects -->
                </div>
                <div class="vin-check">
                    <div class="vin-check-content">
                        <div class="vin-check-heading">Проверь свой автомобиль по&nbsp;базе сервисных кампаний</div>
                        <div class="vin-check-descr">Укажите VIN-номер для проверки действующих сервисных кампаний на Ваш автомобиль</div>
                        <div class="vin-check-form-wrap">
                            <form accept-charset="utf-8" class="vin-check-form">
                                <input id="vin-input" class="vin-input" type="text" name="vin" value="" placeholder="VIN-номер" spellcheck="false">
                                <input id="vin-submit" class="vin-submit" type="submit" value="Проверить">
                            </form>
                        </div>
                        <div class="vin-check-result vin-yes">Ваш автомобиль участвует в сервисной кампании! Просим Вас незамедлительно обратиться в официальный дилерский центр Hyundai или воспользоваться <a href="/service-request"><strong>он-лайн записью</strong></a> на Сервис!</div>
                        <div class="vin-check-result vin-no">Ваш автомобиль не участвует в сервисных кампаниях!</div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" >
            var _rutarget = window._rutarget || [];
            _rutarget.push({'event': 'otherPage'});
        </script>
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/dropit.js"></script>
    <script type="text/javascript" src="js/service-pages.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>