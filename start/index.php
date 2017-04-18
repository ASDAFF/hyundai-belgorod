<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>


<link type="text/css" href="http://www.hyundai.ru/media/css_new/styles_RU_.css" rel="stylesheet" />
<link type="text/css" href="http://www.hyundai.ru/media/js_new/fancybox/jquery.fancybox.css" rel="stylesheet" />
<link type="text/css" href="http://www.hyundai.ru/media/css_new/start-new.css" rel="stylesheet" />
<script type="text/javascript" src="http://www.hyundai.ru/media/js_new/fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="http://www.hyundai.ru/media/js_new/start-new.js"></script>
<script>

    //Редирект на мобильную версию
    var isMobile = {
        Opera: function() {
            return navigator.userAgent.match(/Mini/i);
        }
    };

    //получения переменных из адреса
    var from_mobile = false;

    if (window.location.hash != ''){
        var query = document.location.hash.substring(1);
    }else{
        var query = window.location.search.substring(1);
    }
    var vars = query.split("?");
    var params = window.location.search.substring(1);
    console.log(vars);
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if(pair[0] == 'from_mobile'){pair[1];}
        if (pair[1] == 1) from_mobile = true;
    }
    if(!from_mobile){
        if (device.mobile() && !device.tablet() || isMobile.Opera()){
            if(window.location.pathname == '/start')
                document.location.href="http://m.hyundai.ru/start" + "?" + params;
            else if(window.location.pathname == '/NewSolaris')
                document.location.href="http://m.hyundai.ru/NewSolaris" + "?" + params;
            else
                document.location.href="http://m.hyundai.ru";
        }
    }
</script>




    <div id="content">
        <div class="st-head">
            <div class="st-head-highlights">
                <div class="st-fluid-fi">
                    <img class="st-logo" src="/media/img_new/srart-new/st-logo.png"/>
                    <div class="st-vd">
                        <a href="#" class="st-vd__link st-video" data-youtube="fPXodE1G5UY"></a>
                    </div>
                </div>
                <div class="st-fluid-se">
                    <div class="st-about">
                        <h3 class="st-h3">Что такое<!-- Старт? --></h3>
                        <p class="st-about__description">Hyundai Старт позволяет существенно снизить ежемесячные платежи по кредиту.</p>
                        <!-- 					<a href="#models" class="st-btn st-btn--orange st-btn--model-selector st-rolling">Выбрать модель</a> -->
                        <ul class="st-about__buttons">
                            <li class="st-about__button"><a href="#faq" class="st-about__button-link st-rolling">FAQ</a></li>
                            <li class="st-about__button"><a href="#calculator" class="st-about__button-link st-rolling">Калькулятор</a></li>
                        </ul>

                        <ul class="st-about__buttons">
                            <li class="st-about__button" style="width: 100%;"><a href="#" class="st-vd__link st-video small" data-youtube="079fITMMm4o">Подробнее о программе СТАРТ</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div id="models" class="st-head-models">
                <h3 class="st-h3">Выберите модель</h3>
                <div class="st-models-main">
                    <ul class="st-models-list">
                        <!--
                                            <li class="st-model" data-model="solaris" data-modeltitle="Solaris" data-youtube-id="fJEx_Pcg4h0">
                                                <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--solaris.png"/>
                                                <span class="st-model__name">Solaris</span>
                                            </li>
                        -->
                        <li class="st-model" data-model="solarisnew" data-modeltitle="Новый Solaris">
                            <img class="st-model__image" src="/img/st-car-icon--solarisnew.png"/>
                            <span class="st-model__name">Новый Solaris</span>
                        </li>
                        <li class="st-model" data-model="elantra" data-modeltitle="Elantra" data-youtube-id="mhDPWVylgbY">
                            <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--elantra.png"/>
                            <span class="st-model__name">Elantra</span>
                        </li>
                        <li class="st-model" data-model="i40" data-modeltitle="i40" data-youtube-id="">
                            <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--i40.png"/>
                            <span class="st-model__name">i40</span>
                        </li>
                        <li class="st-model" data-model="creta" data-modeltitle="Creta" data-youtube-id="">
                            <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--creta.png"/>
                            <span class="st-model__name">Creta</span>
                        </li>
                        <li class="st-model" data-model="tucson" data-modeltitle="Tucson" data-youtube-id="">
                            <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--tucson.png"/>
                            <span class="st-model__name">Tucson</span>
                        </li>
                        <li class="st-model" data-model="santafe" data-modeltitle="Santa Fe" data-youtube-id="">
                            <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--santafe.png"/>
                            <span class="st-model__name">Santa Fe</span>
                        </li>
                        <li class="st-model" data-model="grandsantafe" data-modeltitle="Grand Santa Fe" data-youtube-id="">
                            <img class="st-model__image" src="/media/img_new/srart-new/st-car-icon--grandsantafe.png"/>
                            <span class="st-model__name">Grand Santa Fe</span>
                        </li>
                    </ul>
                    <a href="#calculator" class="st-btn st-btn--orange st-btn--calculate st-rolling">Сделать расчет</a>
                </div>
                <!-- img cache -->
                <div class="hidden" style="display: none;">
                    <!-- 				<img class="hidden" src="/media/img_new/srart-new/st-model--solaris.png"/> -->
                    <img class="hidden" src="/media/img_new/srart-new/st-model--elantra.png"/>
                    <img class="hidden" src="/media/img_new/srart-new/st-model--i40.png"/>
                    <img class="hidden" src="/media/img_new/srart-new/st-model--tucson.png"/>
                    <img class="hidden" src="/media/img_new/srart-new/st-model--creta.png"/>
                    <img class="hidden" src="/media/img_new/srart-new/st-model--santafe.png"/>
                    <img class="hidden" src="/media/img_new/srart-new/st-model--grandsantafe.png"/>
                </div>
                <!-- //img cache -->
                <div class="st-current-model">
                    <img class="st-current-model-image" src="/media/img_new/srart-new/st-model--solaris.png"/>
                    <div class="st-current-model-info">
                        <div class="current-model-price">
                            <span class="value">7 000</span><span class="rouble">7</span><span class="stars">*</span>
                            <span class="period">в месяц</span>
                        </div>
                        <div class="current-vd">
                            <a href="#" class="current-vd__link st-video st-video--model" data-youtube=""><div class="model-name">Solaris</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ -->
        <div class="faq" id="faq">
            <div class="faq-center">
                <div class="faq-title">Часто задаваемые вопросы</div>
                <a href="#" class="faq-toggler">
                    <span class="faq-toggler__hide">Свернуть все</span>
                    <span class="faq-toggler__show">Развернуть все</span>
                </a>
                <div class="faq-wrap">
                    <div class="faq-item alive">
                        <div class="faq-question">Что такое СТАРТ?</div>
                        <div class="faq-answer">СТАРТ – это новая финансовая программа Hyundai, которая позволяет существенно снизить ежемесячные платежи по кредиту, а также регулярно обновлять автомобиль.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Чем СТАРТ отличается от обычного кредита?</div>
                        <div class="faq-answer">Ежемесячные платежи по программе СТАРТ в среднем в 2 раза ниже, чем по обычному кредиту, что делает покупку и обслуживание автомобиля более комфортными.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Кому необходим СТАРТ?</div>
                        <div class="faq-answer">
                            <ul>
                                <li>Клиентам, которые рационально планируют бюджет и предпочитают минимальные выплаты по кредиту.</li>
                                <li>Клиентам, которые выбирают между доступной и дорогой версией автомобиля, но не хотят увеличивать свою нагрузку по кредиту.</li>
                                <li>Клиентам, которые привыкли идти в ногу со временем и каждые три года менять автомобиль на новый и более современный.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">За счет чего получаются маленькие платежи по кредиту?</div>
                        <div class="faq-answer">Часть кредита, а именно 45% (остаточная стоимость), фиксируется Банком и не включатся в ежемесячные платежи. Таким образом Клиент имеет возможность эксплуатировать автомобиль 3 года, не оплачивая сразу всю его стоимость. Через 3 года у Клиента есть выбор, что делать с автомобилем и остатком долга.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Существуют ли риски для Клиента?</div>
                        <div class="faq-answer">Чтобы Клиент не сталкивался с рисками, в договоре заранее зафиксирована гарантированная остаточная стоимость, т.е. минимальная сумма, которую может получить Клиент при продаже автомобиля Дилеру в рамках программы СТАРТ. Эта сумма достаточна для погашения кредита, при этом это только минимальная стоимость. Фактическая стоимость будет зависеть от технического состояния автомобиля и условий рынка, ее назовет Дилер при оценке автомобиля.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Какие преимущества получает Клиент?</div>
                        <div class="faq-answer">
                            <ul>
                                <li>Комфортные ежемесячные платежи &mdash; в 2 раза ниже по сравнению с обычным кредитом.</li>
                                <li>Регулярное обновление автомобиля.</li>
                                <li>Более дорогая версия автомобиля без существенного влияния на платеж.</li>
                                <li>Гарантия остаточной стоимости.</li>
                                <li>Несколько вариантов погашения кредита на выбор.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Что делать с автомобилем по прошествии трех лет?</div>
                        <div class="faq-answer">
                            У Клиента есть три опции:
                            <ul class="">
                                <li>Обновить свой автомобиль на новый Hyundai, реализовав автомобиль Дилеру, а полученные от продажи средства использовать для погашения текущего кредита и в качестве взноса за новый автомобиль.</li>
                                <li>Продолжить пользоваться своим автомобилем, погасив кредит за счет собственных средств или продлив кредит еще на 2 года.</li>
                                <li>Вернуть автомобиль Банку по гарантированной минимальной остаточной стоимости и закрыть задолженность по кредиту.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Что если через 3 года автомобиль будет стоить дешевле 45%?</div>
                        <div class="faq-answer">Средняя рыночная стоимость подержанного Solaris составляет около 70% от цены нового.<br>Но даже если случится так, что ситуация на рынке кардинально изменится, у Клиента есть гарантированная остаточная стоимость 45%, в пределах которой автомобиль будет выкуплен, а кредит, соответственно, будет погашен. Кроме того, есть возможность продлить кредит еще на 2 года.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">Какие существуют условия для получения гарантированной остаточной стоимости?</div>
                        <div class="faq-answer">
                            <ul class="">
                                <li>Пробег не более 90000 км за 3 года.</li>
                                <li>Прохождение плановых ТО у официального Дилера.</li>
                                <li>Качественное состояние автомобиля, соответствующее возрасту автомобиля и нормальным условиям эксплуатации Положительная кредитная история в Банке.</li>
                                <li>Наступление 36 платежа (не ранее).</li>
                                <li>Обновление автомобиля на новый Hyundai.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- // FAQ -->
        <div class="calculator" id="calculator">
            <div class="calculator-center">
                <form action="#">
                    <div class="calculator-head">Сделать расчет</div>
                    <div class="clearfix">
                        <div class="calculator-wrapper">
                            <!--
                                                <ul class="calculator-tabs clearfix js-calculator-tabs">
                                                    <li data-model="solaris" data-modelid="19" class="calculator-tab js-calculator-tab cartype"><img src="/media/img_new/solaris-sedan.png" alt=""/>Solaris</li>
                                                    <li data-model="elantra" data-modelid="7" class="calculator-tab js-calculator-tab cartype"><img src="/media/img_new/elantra.png" alt=""/>Elantra</li>
                                                </ul>
                            -->

                            <div class="calculator-item clearfix">
                                <div class="calculator-item-label">Выберите модель:</div>
                                <div class="calculator-item-content">
                                    <select class="calculator-item-content-select js-styled-select model-select">

                                        <!-- 										<option data-model="solaris" value="19" data-showtype="1" data-min-prepay="20">Hyundai Solaris</option> -->
                                        <option data-model="solarisnew" value="23" data-showtype="0">Новый Solaris</option>
                                        <option data-model="elantra" value="7" data-showtype="0">Hyundai Elantra</option>
                                        <option data-model="i40" value="6" data-showtype="1">Hyundai i40</option>
                                        <option data-model="creta" value="22" data-showtype="0">Hyundai Creta</option>
                                        <option data-model="tucson" value="18" data-showtype="0" data-max-prepay="54">Hyundai Tucson</option>
                                        <option data-model="santafe" value="17" data-showtype="0" data-max-prepay="54">Hyundai Santa Fe</option>
                                        <option data-model="grandsantafe" value="13" data-showtype="0" data-max-prepay="54">Hyundai Grand Santa Fe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator-model clearfix js-calculator-model">
                                <div class="calculator-item-label">Тип кузова:</div>
                                <div class="calculator-item-content">
                                    <!--
                                                                    <div class="calculator-carcase"  data-model="solaris">
                                                                        <span class="calculator-model-item active js-toggle-class" id="car19">
                                                                            <span class="calculator-model-item-pic"><img src="/media/img_new/solaris-sedan.png" alt=""/></span>
                                                                            <span class="calculator-model-item-text">Solaris седан</span>
                                                                        </span><span class="calculator-model-item js-toggle-class" id="car20">
                                                                            <span class="calculator-model-item-pic"><img src="/media/img_new/solaris-hatchback.png" alt=""/></span>
                                                                            <span class="calculator-model-item-text">Solaris хэтчбэк</span>
                                                                        </span>
                                                                    </div>
                                    -->
                                    <div class="calculator-carcase" data-state="active" data-model="solarisnew">
									<span class="calculator-model-item active js-toggle-class" id="car23">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--solarisnew.png" alt=""/></span>
										<span class="calculator-model-item-text">Новый Solaris</span>
									</span>
                                    </div>
                                    <div class="calculator-carcase" data-model="elantra">
									<span class="calculator-model-item active js-toggle-class" id="car7">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--elantra.png" alt=""/></span>
										<span class="calculator-model-item-text">Elantra седан</span>
									</span>
                                    </div>
                                    <div class="calculator-carcase" data-model="i40">
									<span class="calculator-model-item js-toggle-class active" id="car6">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--i40.png" alt=""/></span>
										<span class="calculator-model-item-text">i40<br/>седан</span>
									</span><!--
									--><span class="calculator-model-item js-toggle-class" id="car5">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--i40w.png" alt=""/></span>
										<span class="calculator-model-item-text">i40<br/>универсал</span>
									</span>
                                    </div>
                                    <div class="calculator-carcase" data-model="creta">
									<span class="calculator-model-item active" id="0">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--creta.png" alt=""/></span>
										<span class="calculator-model-item-text">Creta Кроссовер</span>
									</span>
                                    </div>
                                    <div class="calculator-carcase" data-model="tucson">
									<span class="calculator-model-item active" id="car18">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--tucson.png" alt=""/></span>
										<span class="calculator-model-item-text">Tucson Кроссовер</span>
									</span>
                                    </div>
                                    <div class="calculator-carcase" data-model="santafe">
									<span class="calculator-model-item active" id="car17">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--santafe.png" alt=""/></span>
										<span class="calculator-model-item-text">Santa Fe</span>
									</span>
                                    </div>
                                    <div class="calculator-carcase" data-model="grandsantafe">
									<span class="calculator-model-item active" id="car13">
										<span class="calculator-model-item-pic"><img src="/media/img_new/srart-new/st-car-icon--grandsantafe.png" alt=""/></span>
										<span class="calculator-model-item-text">Grand Santa Fe</span>
									</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-item clearfix">
                                <div class="calculator-item-label">Модификация:</div>
                                <div class="calculator-item-content">
                                    <select class="calculator-item-content-select js-styled-select mod-select">
                                        <option value="183">1.4 - 5MT</option>
                                        <option value="184">1.4 - 4AT</option>
                                        <option value="185">1.6 - 6MT</option>
                                        <option value="186">1.6 - 6AT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator-item clearfix">
                                <div class="calculator-item-label">Комплектация:</div>
                                <div class="calculator-item-content">
                                    <select class="calculator-item-content-select js-styled-select compl-select">
                                        <option value="623900" data-id="298">Active</option>
                                        <option value="729900" data-id="299">Comfort</option>
                                        <option value="796400" data-id="300">Elegance</option>
                                        <option value="670000" data-id="359">Super Series 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculator-item calculator-item__cur-car-price clearfix">
                                <div class="calculator-item-label">Стоимость автомобиля:</div>
                                <div class="calculator-item-content">
                                    <div class="calculator-item-content-text-wrapper">
									<span class="calculator-item-content-span">
										<span class="js-current-car-price">569 900</span> <span class="rouble">"</span>
									</span>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-item clearfix">
                                <div class="calculator-item-label">Срок:</div>
                                <div class="calculator-item-content">
                                    <div class="calculator-item-content-radio-wrapper">
                                        <label class="calculator-item-content-radio">
                                            <i class="switch">
                                                <input type="radio" name="term" value="36" checked="checked"><i></i>
                                            </i>
                                            36 месяцев
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="calculator-item clearfix">
                                <div class="calculator-item-label">Первоначальный взнос:</div>
                                <div class="calculator-item-content">
                                    <div class="calculator-item-content-text-wrapper calculator-item-content-text-wrapper__prepay">
									<span class="calculator-item-content-span">
										<span class="js-current-prepay">245 057</span> <span class="rouble">"</span>
									</span>
                                    </div>
                                    <div class="calculator-item-range">
                                        <div id="range" class="calculator-item-range-item"></div>
                                        <div class="calculator-item-range-num clearfix">
                                            <div class="calculator-item-range-num-item f-left">30%</div>
                                            <div class="calculator-item-range-num-item f-right">46%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calculator-right">
                            <div class="calculator-right-top">
                                <div class="calculator-graph graph1">
                                    <div class="graph-descr">
                                        <span class="graph-descr-title">Программа Старт</span>
                                        <span class="graph-descr-price"><strong class="graph-descr-price-result">6 000</strong> <span class="rouble">"</span> в мес.</span>
                                    </div>
                                    <div class="graph-fill"></div>
                                </div>
                                <div class="calculator-graph graph2">
                                    <div class="graph-descr">
                                        <span class="graph-descr-title">Стандартный кредит</span>
                                        <span class="graph-descr-price"><strong class="graph-descr-price-full">9 500</strong> <span class="rouble">"</span> в мес.</span>
                                    </div>
                                    <div class="graph-fill"></div>
                                </div>
                            </div>
                            <div class="calculator-right-bottom">
                                <span class="calculator-right-text">Процентнтая ставка: <span class="value js-percent-value">8,9%</span></span>
                                <div class="calculator-right-price">
                                    <span class="calculator-right-price-item">6 000</span> <span class="rouble">"</span>
                                </div>
                                <button class="calculator-btn" type="button">ОТПРАВИТЬ НА EMAIL <i class="calculator-btn-arr"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="details">
            <div class="details-center clearfix">
                <div class="details-center-header">Преимущества</div>
                <div class="details-center-item">
                    <div class="details-center-item-pic"><img src="/media/img_new/money-icons.png" alt=""/></div>
                    <div class="details-center-item-text">Платить минимум <br> в месяц</div>
                </div>
                <div class="details-center-item">
                    <div class="details-center-item-pic"><img src="/media/img_new/car-icon.png" alt=""/></div>
                    <div class="details-center-item-text">Менять автомобиль <br> каждые 2-3 года</div>
                </div>
                <div class="details-center-item">
                    <div class="details-center-item-pic"><img src="/media/img_new/car-icon1.png" alt=""/></div>
                    <div class="details-center-item-text">Позволить себе автомобиль более высокого уровня</div>
                </div>
                <div class="details-center-item">
                    <div class="details-center-item-pic"><img src="/media/img_new/garantee-icon.png" alt=""/></div>
                    <div class="details-center-item-text">Иметь гарантию будущей стоимости</div>
                </div>
            </div>
        </div>
        <div class="credit-details">
            <div class="credit-details-center clearfix">
                <div class="credit-details-center-head">По окончании программы<br>вы можете</div>
                <div class="credit-details-center-selection">
                    <div class="credit-details-center-selection-item">
                        <div class="credit-details-center-selection-item-pic">
                            <img src="/media/img_new/end-credit_1.png" alt=""/>
                        </div>
                        <div class="credit-details-center-selection-item-head">Оставить <br>автомобиль себе,<br>погасив остаточную стоимость</div>
                    </div>
                    <div class="credit-details-center-selection-item">
                        <div class="credit-details-center-selection-item-pic">
                            <img src="/media/img_new/end-credit_2.png" alt="" />
                        </div>
                        <div class="credit-details-center-selection-item-head">Обменять автомобиль<br>на новый, отдав<br>прежний дилеру в<br>trade-in</div>
                    </div>
                    <div class="credit-details-center-selection-item">
                        <div class="credit-details-center-selection-item-pic">
                            <img src="/media/img_new/end-credit_3.png" alt="" />
                        </div>
                        <div class="credit-details-center-selection-item-head">Вернуть<br>автомобиль<br>Банку</div>
                    </div>
                </div>
                <div class="credit-details-center-text credit-details-center-text--last">
                    <p>Чтобы продажа была максимально выгодна для Вас, в договоре заранее
                        зафиксирована минимальная выкупная стоимость, т.е. минимальная сумма, которую
                        может заплатить дилер при покупке автомобиля в рамках программы «Старт».</p>
                    <p>Полученные средства от продажи Вы сможете использовать в
                        качестве первоначального взноса на новый автомобиль.</p>
                </div>
                <div class="credit-disclaimer-center-text">
                    <p>
                        <sup>1</sup>Платеж рассчитан по программе Hyundai Старт, срок кредита 36 мес., процентная ставка 10,10% годовых для автомобилей Hyundai Solaris (с учетом государственной программы льготного автокредитования), исходя из цены Solaris 1.4 6MT Active (Актив) 599 000 р., первоначальный взнос 214 020 р., сумма кредита 384 980 р. Гарантированная остаточная стоимость автомобиля (часть стоимости автомобиля, подлежащая оплате в конце срока кредита) ― 45% от цены на момент покупки. Обеспечение по кредиту - залог приобретаемого автомобиля. Обязательное условие – оформление страхования КАСКО в страховой компании, соответствующей требованиям Банка к страховым компаниям и условиям страхования. Предложение носит информационный характер, не является публичной офертой (ст. 437 ГК РФ), действует с 01.04.2017 по 30.04.2017.Условия и тарифы могут быть изменены Банком в одностороннем порядке. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Подробные условия кредитования, требования к условиям страхования и требования к заемщикам уточняйте у менеджеров в официальных дилерских центрах Хендэ или на сайтеwww.rusfinancebank.ru
                    </p>
                    <p>
                        <sup>2</sup>Платеж рассчитан по программе Hyundai Старт, срок кредита 36 мес., процентная ставка 10,10% для автомобилей Hyundai Elantra (с учетом государственной программы льготного автокредитования), исходя из цены Elantra 1.6 6МТ Start (Старт) 909 900 р., первоначальный взнос 359 500 р., сумма кредита 550 400 р. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) ― 45%. Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. Предложение действует с 01.04.17 по 30.04.17, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробные условия кредитования на сайте www.rusfinancebank.ru.
                    </p>
                    <p>
                        <sup>3</sup>Указанный платеж рассчитан в рамках программы Hyundai(Старт) с учетом гос. программы льготного автокредитования, исходя из цены Hyundai i40 1.6 6МТComfort (Комфорт) 1 124 000 р. первоначальный взнос 471 400 р., сумма кредита 652 600 р.,срок кредита 36 мес.; процентная ставка 10,10% годовых.Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) - 45% от цены покупки. Обеспечение по кредиту - залог приобретаемого автомобиля. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.04.17 по 30.04.17, не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru.
                    </p>
                    <p><sup>4</sup>Указанный платеж рассчитан в рамках программы Hyundai (Старт) с учетом гос. программы льготного автокредитования, исходя из цены Hyundai Creta 1.6 6MT 2WD Start (Старт) 789 900 р. первоначальный взнос 310 430 р., сумма кредита 479 470 р., срок кредита 36 мес.; процентная ставка 10,10% годовых. Гарантированная остаточная стоимость автомобиля (часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита) - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.04.17 по 30.04.17 г , не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru.</p>
                    <p><sup>5</sup>Указанный платеж рассчитан в рамках программы Hyundai (Старт), исходя из цены Hyundai Tucson (Comfort , 2,0л 6AT 2WD) 1 505 900 р. на условиях кредитного продукта «ДИРЕКТ Баллун КЛАССИКА: Hyundai в кредит»: первоначальный взнос 802 500 р., сумма кредита 703 400 р., срок кредита 36 мес.; процентная ставка 16,1% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.04.17 г. по 30.04.17 г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru.</p>
                    <p><sup>6</sup>Указанный платеж рассчитан в рамках программы Hyundai (Старт), исходя из цены Hyundai Santa Fe (Старт 2,4л 6MT) 1 794 000 р. на условиях кредитного продукта «ДИРЕКТ Баллун КЛАССИКА: Hyundai в кредит»: первоначальный взнос 953 500 р., сумма кредита 840 500 р.,срок кредита 36 мес., процентная ставка 16,1% годовых.Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.04.17 г. по 30.04.17 г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru.</p>
                    <p><sup>7</sup>Указанный платеж рассчитан в рамках программы Hyundai (Старт), исходя из цены Hyundai Grand Santa Fe (Family, 2,2л CRDi 6AT) 2 374 000 р на условиях кредитного продукта «ЭКСПРЕСС Баллун: Hyundai в кредит»: Первоначальный взнос 1 258 200 р., сумма кредита 1 115 800 р.,срок кредита 36 мес.; процентная ставка 16,1% годовых. Часть задолженности по кредиту в процентах от стоимости автомобиля на момент его покупки, подлежащая оплате в конце срока кредита - 45%. Кредит погашается равными ежемесячными платежами (за исключением первого и последнего). Обязательно оформление полиса КАСКО на весь срок кредита в страховых компаниях, соответствующих требованиям Банка. Кредит предоставляется ООО «Русфинанс Банк» Генеральная лицензия ЦБ РФ №1792 от 13.02.2013 г. (далее - Банк). Кредит обеспечивается залогом приобретаемого автомобиля. Предложение действует с 01.04.17 г. по 30.04.17 г., не является офертой. Условия могут быть изменены Банком в одностороннем порядке. Подробности на www.rusfinancebank.ru.</p>
                </div>
            </div>
        </div>
    </div><!--content-->

    <div style="display: none;">
        <a class="fancybox" id="popup-open"></a>
        <div id="popup">
            <div class="p-block">
                <h3>Оформление заявки</h3>
                <form id="send" class="form pform">
                    <input type="hidden" name="carid" id="carid" value=""/>
                    <input type="hidden" name="mod" id="mod" value=""/>
                    <input type="hidden" name="compl" id="compl" value=""/>
                    <input type="hidden" name="pay" id="pay" value=""/>
                    <input type="hidden" name="term" id="term" value=""/>
                    <input type="hidden" name="prepay" id="prepay" value=""/>
                    <input type="hidden" name="sum" id="sum" value=""/>
                    <input type="hidden" name="prepay_rub" id="prepay_rub" value=""/>
                    <div class="frow"><input name="last_name" class="input js-maxlength" placeholder="Фамилия" /></div>
                    <div class="frow"><input name="name" class="input js-maxlength" placeholder="Имя" /></div>
                    <div class="frow"><input name="email" class="input js-maxlength" placeholder="E-Mail" /></div>
                    <div class="frow"><label> <input type="checkbox" name="accept" value="Y" checked="checked">&nbsp;Я согласен на обработку моих <a href="#modal-legal" title="Показать соглашение">персональных данных</a></label></div>
                    <div class="frow"><input class="button button-blue calculator_send email_send s-send" type="submit" name="send" value=""/></div>
                    <input type="hidden" name="link" id="link" value="">
                </form>
            </div>
            <div class="success-block">
                <h3 style="text-align: center;">Результат расчета успешно отправлен на ваш E-Mail</h3>
            </div>
        </div>
    </div>

    <div id="modal-legal">
        <a title="Закрыть" class="modal-legal__wrap"></a>
        <div class="modal-legal">
            <h2 class="skyblue">Правила обработки<br>персональных данных</h2>
            <div class="clearfix">
                <p class="offers__text fleft">
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе
                    на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.
                    <br><br>
                    Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон;
                    для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания;
                    для рекламных, исследовательских, информационных,
                </p>
                <p class="offers__text fleft">
                    а также иных целей, в том числе, путем осуществления
                    со мной прямых контактов по различным средствам связи.
                    <br><br>
                    Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш.,
                    д. 20, литер А).
                    <br><br>
                    Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица,
                    д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва,
                    ул. Новослободская, д. 31, стр. 2); ЗАО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3),
                    ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5),
                    а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </p>
            </div>
            <a href="#!" title="" class="closeIt">&times;</a>
        </div>
    </div>
    <div class="videoPopup" style="display: none;">
        <div class="videoContainer">
            <a title="Закрыть" href="#" class="closeButton">×</a>
            <iframe width="100%" height="" frameborder="0" allowfullscreen="" src="" class="videoFrame"></iframe>
        </div>
    </div>
    <script src="/media/js_new/jquery.ui.touch-punch.min.js"></script>
    <script>
        function bindSliderTouch (_handleFound) {
            var _timer,
                _handle;
            _timer = setTimeout(function(e){
                _handle = $('.ui-slider');
                if (!_handleFound) {
                    _handleFound = _handle.length != 0 ? true : false;
                    bindSliderTouch (_handleFound);
                } else {
                    _handle.draggable();
                    clearTimeout(_timer);
                }
                console.log(_handleFound);
            }, 100)
        }
        bindSliderTouch ();
    </script>


    <script type="text/javascript" >
        var _rutarget = window._rutarget || [];
        _rutarget.push({'event': 'otherPage'});
    </script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

