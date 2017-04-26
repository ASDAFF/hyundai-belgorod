<link type="text/css" href="/media/css_new/dropit.css" rel="stylesheet" />
<script type="text/javascript" src="/media/js_new/jquery.nanoscroller.min.js"></script>
<script type="text/javascript" src="/media/js_new/dropit.js"></script>

<div class="maintenance-calculator-wrapper" id="maintenance-calculator-wrapper">
    <div class="maintenance-calculator grid">
        <div class="grid-el grid-el-50 maintenance-car">
            <div class="car-wrap">
                <div class="heading heading-02">Ваш автомобиль</div>
                <div id="models" class="models drop-down drop-down--models" tabindex="0" data-current="Veloster">
                    <div class="drop-down-active-item">Veloster</div>
                    <div class="drop-down-list has-scrollbar">
                        <ul class="drop-down-items" style="margin-right: -17px;">
                            <li data-value="Solaris" data-type="2" class="drop-down-item">Solaris</li>
                            <li data-value="i30" data-type="1" class="drop-down-item">i30</li>
                            <li data-value="Elantra" data-type="1" class="drop-down-item">Elantra</li>
                            <li data-value="Elantra New" data-type="1" class="drop-down-item">Elantra New</li>
                            <li data-value="Veloster" data-type="1" class="drop-down-item selected">Veloster</li>
                            <li data-value="i40" data-type="1" class="drop-down-item">i40</li>
                            <li data-value="Creta" data-type="3" class="drop-down-item">Creta</li>
                            <li data-value="ix35" data-type="3" class="drop-down-item">ix35</li>
                            <li data-value="Tucson" data-type="3" class="drop-down-item">Tucson</li>
                            <li data-value="Santa Fe" data-type="3" class="drop-down-item">Santa Fe</li>
                            <li data-value="Grand Santa Fe" data-type="3" class="drop-down-item">Grand Santa Fe</li>
                            <li data-value="H-1" data-type="3" class="drop-down-item">H-1</li>
                        </ul>
                        <div class="custom-nano-pane" style="opacity: 1; visibility: visible;"><div class="custom-nano-slider" style="height: 47px; transform: translate(0px, 0px);"></div></div></div>
                </div>
                <div class="car-image">
                    <img src="/media/img_new/service-pages/cars/car-image--veloster.png" class="car-image__img" alt="">
                </div>
                <div class="materials-pdf-wrap">
                    <div class="heading heading-02">Материалы</div>
                    <a href="/media/downloads/pdf/maintenance/maintenance-general.pdf" target="_blank" class="materials-pdf docs-link docs-link--base-works">Базовые работы, входящие в периодическое ТО</a>
                    <a href="/media/downloads/pdf/maintenance/maintenance-harsh-conditions.pdf" download="" class="docs-link docs-link--harsh-conditions">Тяжелые условия эксплуатации</a>
                </div>
            </div>
        </div>
        <div class="grid-el grid-el-50 maintenance-calc">
            <div class="calc-wrap">
                <div class="heading heading-02 heading-light">Калькулятор ТО</div>
                <div class="calc-controls clearfix">
                    <div class="calc-controls-title">Двигатель</div>
                    <ul class="calc-controls engine-control clearfix" data-count="2" data-current="1.6"><li class="engine-control-item active" data-value="1.6">1.6</li>
                        <li class="engine-control-item" data-value="1.6T GDI">1.6T GDI</li>
                    </ul>

                    <div class="calc-controls-title">Тип двигателя</div>
                    <ul class="calc-controls engine-type clearfix" data-count="1" data-current=""><li class="engine-control-item active" data-value="Бензиновый">Бензиновый</li>
                    </ul>

                    <div class="calc-controls-title">Пробег, тыс. км</div>
                    <div class="calc-controls mileage-control">
                        <div class="mileage-control-value"><span class="mileage-control-value-nums">30 000</span> км</div>
                        <div class="mileage-control-item ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-current="30"><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 20%;"></a></div>
                        <div class="mileage-control-scale">
                            <span class="mileage-control-scale__item">15</span>
                            <span class="mileage-control-scale__item">30</span>
                            <span class="mileage-control-scale__item">45</span>
                            <span class="mileage-control-scale__item">60</span>
                            <span class="mileage-control-scale__item">75</span>
                            <span class="mileage-control-scale__item">90</span>
                        </div>
                    </div>


                    <div class="total">
                        <span class="total-default">Выберите<br>дилера</span>
                        <span class="calc-total-value"></span>
                        <a class="request-service-btn maintenance_form_toggler disabled" target="_blank">запись на сервис</a>
                    </div>
                </div>
                <p class="disclaimer">
                    <sup>*</sup>  — Стоимость Технического обслуживания носит исключительно информационный характер, указана на основании данных, предоставленных официальными дилерами Hyundai, и может отличаться от действительных цен уполномоченных дилеров Hyundai.
                </p>
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

            <!--
                        <div id="types" class="models drop-down drop-down--types" tabindex="0" data-current="">
                            <div class="drop-down-active-item"></div>
                            <div class="drop-down-list">
                                <ul class="drop-down-items">
                                    <li data-value="Solaris"       	data-type="2"	class="drop-down-item active">Техническое обслуживание</li>
                                    <li data-value="i30"           	data-type="1"	class="drop-down-item">i30</li>
                                </ul>
                            </div>
                        </div>
            -->

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
                <label for="mf_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="#">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
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

<div class="zing-agreement-popup-wrapper" style="display: none;">
    <div class="zing-agreement-popup">
        <h2 class="zing-agreement-header">Правила обработки<br>персональных данных</h2>
        <div class="zing-agreement-text">
            <p class="zing-agreement-text__col">
                Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.09 <strong>№152-ФЗ</strong> «О персональных данных» даю свое согласие лично, своей волей и в своем интересе
                на обработку <i>(сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение)</i> моих персональных данных, в том числе с использованием средств автоматизации.
                <br><br>
                Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон;
                для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания;
                для рекламных, исследовательских, информационных,
            </p>
            <p class="zing-agreement-text__col">
                а также иных целей, в том числе, путем осуществления
                со мной прямых контактов по различным средствам связи.
                <br><br>
                Согласие дается Hyundai Motor Company (Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10), ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург, г. Сестрорецк, Левашовское ш.,
                д. 20, литер А).
                <br><br>
                Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица,
                д. 48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва,
                ул. Новослободская, д. 31, стр. 2); ЗАО «АвтоАссистанс»
                (г. Москва, 2-й Южнопортовый проезд, д.18 корп. 2),
                ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5),
                а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
            </p>
        </div>
        <div class="zing-agreement-close">×</div>
    </div>
</div>


