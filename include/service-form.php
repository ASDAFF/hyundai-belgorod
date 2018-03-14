<link type="text/css" href="http://www.hyundai.ru/media/css/dropit.css" rel="stylesheet" />
<link type="text/css" href="http://www.hyundai.ru/media/css/service_styles.css" rel="stylesheet" />
<link type="text/css" href="http://www.hyundai.ru/media/css/service_overrides.css" rel="stylesheet" />

<script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="http://www.hyundai.ru/media/js/libs/dropit.js"></script>
<script type="text/javascript" src="/bitrix/js/calc/service-pages.js"></script>
<style>
    .content-wrap.content--warranty{
        width: 100%!important;
    }
    .maintenance-calc{
        max-width: 520px;
    }
    .maintenance-calculator-wrapper {
        border-bottom: none;
        margin-bottom: 0;
    }
    .content--warranty .content-inner {
        padding-top: 0px;
    }
    .service-right-block{
        margin: 0px auto;
    }
    .offers_divider__content__offers-grid-section{
        margin-bottom: 0;
    }
</style>





<div class="maintenance-calculator-wrapper" id="maintenance-calculator-wrapper">
    <div class="maintenance-calculator grid">
        <div class="grid-el grid-el-50 maintenance-car">
            <div class="car-wrap">
                <div class="heading heading-02">Ваш автомобиль</div>
                <div id="models" class="models drop-down drop-down--models" tabindex="0" data-current="">
                    <div class="drop-down-active-item"></div>
                    <div class="drop-down-list">
                        <ul class="drop-down-items">
                            <li data-value="Solaris New"       	data-type="2"	class="drop-down-item active">Solaris New</li>
                            <li data-value="Solaris"       	data-type="2"	class="drop-down-item">Solaris</li>
                            <li data-value="Sonata"       	data-type="4"	class="drop-down-item">Sonata</li>
                            <li data-value="i30"           	data-type="1"	class="drop-down-item">i30</li>
                            <li data-value="Elantra"       	data-type="1"	class="drop-down-item">Elantra</li>
                            <li data-value="Elantra New"   	data-type="1"	class="drop-down-item">Elantra New</li>
                            <li data-value="Veloster"      	data-type="1"	class="drop-down-item">Veloster</li>
                            <li data-value="i40"           	data-type="1"	class="drop-down-item">i40</li>
                            <li data-value="Creta"         	data-type="3"	class="drop-down-item">Creta</li>
                            <li data-value="ix35"          	data-type="3"	class="drop-down-item">ix35</li>
                            <li data-value="Tucson"        	data-type="3"	class="drop-down-item">Tucson</li>
                            <li data-value="Santa Fe"	   	data-type="3"	class="drop-down-item">Santa Fe</li>
                            <li data-value="Grand Santa Fe"	data-type="3"	class="drop-down-item">Grand Santa Fe</li>
                            <li data-value="H-1"           	data-type="3"	class="drop-down-item">H-1</li>
                        </ul>
                    </div>
                </div>
                <div class="car-image">
                    <img src="http://www.hyundai.ru/media/img/service-pages/cars/car-image--solarisnew.png" class="car-image__img" alt=""/>
                </div>
                <div class="materials-pdf-wrap">
                    <div class="heading heading-02">Материалы</div>
                    <a href="#" target="_blank" class="materials-pdf docs-link docs-link--base-works">Базовые работы, входящие в периодическое ТО</a>
                    <a href="http://www.hyundai.ru/media/downloads/pdf/maintenance/maintenance-harsh-conditions.pdf" download="" class="docs-link docs-link--harsh-conditions">Тяжелые условия эксплуатации</a>
                    <a href="http://www.hyundai.ru/media/downloads/pdf/Sonata(LF).pdf" download="" class="docs-link docs-link--sonata-reglament">Регламент технического обслуживания</a>
                </div>
            </div>
        </div>
        <div class="grid-el grid-el-50 maintenance-calc">
            <div class="calc-wrap">
                <div class="heading heading-02 heading-light">Калькулятор ТО</div>
                <div class="calc-controls clearfix">
                    <div class="calc-controls-title">Автомобиль</div>
                    <ul class="calc-controls auto-type clearfix" data-count="2" data-current="">
                        <li class="auto-type-item active" data-value="1">Гарантийный</li>
                        <li class="auto-type-item" data-value="0">Постгарантийный</li>
                    </ul>
                    <div class="calc-controls-title">Двигатель</div>
                    <ul class="calc-controls engine-control clearfix" data-count="4" data-current="">
                        <li class="engine-control-item active" data-value="2.0 MPi">2.0 MPi</li>
                        <li class="engine-control-item" data-value="1.6 GDi">1.6 GDi</li>
                        <li class="engine-control-item" data-value="1.6 T-GDi">1.6 T-GDi</li>
                        <li class="engine-control-item" data-value="2.0 CRDi">2.0 CRDi</li>
                    </ul>

                    <div class="calc-controls-title">Тип двигателя</div>
                    <ul class="calc-controls engine-type clearfix" data-count="2" data-current="">
                        <li class="engine-control-item active" data-value="Бензиновый">Бензиновый</li>
                        <li class="engine-control-item" data-value="Дизельный">Дизельный</li>
                    </ul>

                    <div class="calc-controls-title">Пробег, тыс. км</div>
                    <div class="calc-controls mileage-control">
                        <div class="mileage-control-value"><span class="mileage-control-value-nums">45 000</span> км</div>
                        <div class="mileage-control-item" data-current="45"></div>
                        <div class="mileage-control-scale">
                            <span class="mileage-control-scale__item">15</span>
                            <span class="mileage-control-scale__item">30</span>
                            <span class="mileage-control-scale__item">45</span>
                            <span class="mileage-control-scale__item">60</span>
                            <span class="mileage-control-scale__item">75</span>
                            <span class="mileage-control-scale__item">90</span>
                        </div>
                    </div>
                    <div class="calc-controls-city-dealer clearfix">
                        <div id="dealer-city" class="dealer-city drop-down drop-down--dealer-city" tabindex="0" data-current="">
                            <div class="drop-down-active-item"></div>
                            <div class="drop-down-list">
                                <ul class="drop-down-items">
                                    <li class="drop-down-item" data-value="84">Воронеж</li>
                                </ul>
                            </div>
                        </div>
                        <div id="dealers" class="dealers drop-down drop-down--dealers" tabindex="0" data-current="">
                            <div class="drop-down-active-item"></div>
                            <div class="drop-down-list">
                                <ul class="drop-down-items">
                                    <li class="drop-down-item disabled" data-value="">Выберите город</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="sums" style="display:none">
                        <div class="sum">
                            <span class="sum__text">Стоимость работ</span>
                            <span class="sum__repairs"></span>
                        </div>
                        <div class="sum">
                            <input id="original-spares" name="sum-spares" checked type="radio" class="sum-spares__input" value="0">
                            <label for="original-spares" class="sum-spares__circle">
                                <span class="sum__text">Стоимость оригинальных зап. частей</span>
                                <span class="sum__spares"></span>
                            </label>

                            <input id="pl2-spares" name="sum-spares" type="radio" class="sum-spares__input" value="1">
                            <label for="pl2-spares" class="sum-spares__circle sum-spares_visible">
                                <span class="sum__text">Стоимость зап. частей Product&nbsp;Line&nbsp;2<span class="sum-spares__about"></span></span>
                                <span class="sum__spares"></span>
                                <div class="sum-spare__popup">
                                    <div class="sum-spare__popup-close"></div>
                                    <div class="sum-spare__popup-text">
                                        Запасные части PL2 — уникальное предложение для автомобилей HYUNDAI старше 3-х лет.<br>
                                        PL2 - это качественная альтернатива основной линейке запасных частей, рекомендованная для автомобилей старше 3-х лет, по сниженным ценам.<br>
                                        PL2 производятся на тех же предприятиях и по тем же технологиям, которые используются при производстве оригинальных запасных частей Hyundai.
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="total">
                        <span class="total-default">Выберите<br/>дилера</span>
                        <span class="calc-total-value"></span>
                        <a class="request-service-btn maintenance_form_toggler disabled" target="_blank">запись на сервис</a>
                    </div>
                </div>
                <p class="disclaimer">
                    <sup>*</sup>  &mdash; Стоимость Технического обслуживания носит исключительно информационный характер, указана на основании данных, предоставленных официальными дилерами Hyundai, и может отличаться от действительных цен уполномоченных дилеров Hyundai.
                </p>
                <p class="disclaimer disclaimer_zakaz">
                    <sup>**</sup>  &mdash; Точную стоимость вам необходимо узнать обратившись в дилерский центр.
                </p>
            </div>
        </div>
    </div>
</div>



<div class="content--roadside" style="">

    <div class="content-inner">
        <div class="subject subject-wa">
            <div class="subject-blackboard">
                <div class="subject-wa-left" id="wa-block">
                    <div class="subject-wa-title content-inner-title">Workshop Automation</div>
                    <div class="subject-wa-text">– это автоматизированная система обслуживания клиентов и контроля за рабочими процессами в дилерском центре, реализованная как мобильное приложение для планшетных компьютеров.
                    </div>
                    <div class="subject-wa-link"><a href="http://www.hyundai.ru/find-dealer">найти дилера<img src="http://www.hyundai.ru/media/img/service-pages/wa_arrow.png"></a></div>
                </div>
                <div class="subject-wa-right">
                    <img src="http://www.hyundai.ru/media/img/service-pages/wa_pic.jpg">
                </div>
            </div>
        </div>


        <div class="subject subject-wa-icons">
            <div class="subject-blackboard">
                <div class="subject-wa-ico-33 wa-title">Преимущества
                    системы WA</div>
                <div class="subject-wa-ico-33">
                    <div class="wa-ico-pic ico1"></div>
                    <div class="wa-ico-title">Отслеживание<br/>хода работ</div>
                    <div class="wa-ico-text">Онлайн информация в клиентской зоне о статусе выполнения работ</div>
                </div>
                <div class="subject-wa-ico-33">
                    <div class="wa-ico-pic ico2"></div>
                    <div class="wa-ico-title">Всегда<br/>вовремя</div>
                    <div class="wa-ico-text">Отсутствие задержек благодаря системе он-лайн оповещений о ходе выполнения работ между мастером-консультантом и механиком</div>
                </div>
                <div class="subject-wa-ico-33">
                    <div class="wa-ico-pic ico3"></div>
                    <div class="wa-ico-title">Фото<br/>и голосовая запись</div>
                    <div class="wa-ico-text">Фото и аудио фиксация ваших пожеланий и состояния вашего автомобиля. Фотографии до и после ремонта</div>
                </div>
                <div class="subject-wa-ico-33">
                    <div class="wa-ico-pic ico4"></div>
                    <div class="wa-ico-title">Специальные<br/>предложения</div>
                    <div class="wa-ico-text">Интерактивное отображение наших специальных предложений для вас</div>
                </div>
                <div class="subject-wa-ico-33">
                    <div class="wa-ico-pic ico5"></div>
                    <div class="wa-ico-title">Обратная<br/>связь</div>
                    <div class="wa-ico-text">Интерактивный опрос при выдаче автомобиля о качестве обслуживания</div>
                </div>
            </div>
        </div>
    </div>


</div>


<div class="zing_form_wrp" id="maintenance_form">
    <form class="maintenance_form" action="#">
        <div class="zing_form_content">
            <a class="closePopup  zing_close" href="javascript:;"></a>
            <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
            <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_first_name zing_txt"
                    name		= "first_name"
                    id			= "first_name"
                    maxlength	= "50">
                <label for="first_name">Имя<sup class="skyblue">*</sup></label>
            </div>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_last_name zing_txt"
                    name		= "last_name"
                    id			= "last_name"
                    maxlength	= "50">
                <label for="last_name">Фамилия<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing-input">
                <input
                    type		= "tel"
                    class		= "zing_mobile zing_txt"
                    name		= "mobile"
                    id			= "mobile"
                    maxlength	= "50">
                <label for="mobile">Телефон<sup class="skyblue">*</sup></label>
            </div>
            <div class="zing-input">
                <input
                    type		= "email"
                    class		= "zing_email zing_txt"
                    name		= "zing_email"
                    id			= "zing_email"
                    maxlength	= "50">
                <label for="zing_email">E-mail<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_year zing_txt"
                    name		= "year"
                    id			= "year"
                    maxlength	= "50">
                <label for="year">Год выпуска<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing-input">
				<textarea
                    type		= "text"
                    class		= "zing_comment zing_txt"
                    name		= "comment"
                    id			= "comment"
                    ></textarea>
                <label for="comment">Опишите ваш запрос<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing_pers_rules_wrp">
                <noindex>
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.2009 г. №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в т.ч. с использованием средств автоматизации. Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; -для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи. Согласие дается Hyundai Motor Company(Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10) ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург г, Сестрорецк г, Левашовскоеш, 20, литер А). Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д.48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </noindex>
            </div>

            <div class="zing_rules_wrp">
                <input
                    type	= "checkbox"
                    class	= "zing_rules_agree_cb zing-agreement-input"
                    id		= "mf_rules_agree_cb"
                    name	= "mf_rules_agree_cb">
                <label for="mf_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
            </div>
            <div class="zing-agreement-text-wrapper">
                <div class="zing-agreement-text">
                    <div class="zing-agreement-text-content">
                        <noindex>
                            <span class="this-title">Правила обработки персональных данных</span>
						<span class="this-text">
							Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.
							Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи.
							Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш., д. 20, литер А).
							Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, д. 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
						</span>
                        </noindex>
                    </div>
                </div>
            </div>
            <div class="zing-submit-wrap">
                <input type="submit" value="Отправить заявку" class="zing_ok zing-submit">
            </div>
        </div>
    </form>
</div>