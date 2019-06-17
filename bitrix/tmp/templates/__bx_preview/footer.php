<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__); ?>

<?
$ar = desc_model_to_url($APPLICATION->GetCurPage());
if(!empty($ar['IMG_SLIDE']) and $APPLICATION->GetCurPage() != '/'){
    $APPLICATION->IncludeFile("/include/model-slider-all.php", Array(
        "RESULT" => $ar
));
}
?>



<div id="footer">
    <footer class="footer-primary" role="contentinfo">
        <div class="footer-primary__pre">
            <nav class="footer-nv" role="navigation">
                <ul class="footer-nv__cont">
                    <li class="footer-nv__c">
                        <strong class="footer-nv__c-header">Покупателю</strong>
                        <ul class="footer-nv__c-list">

                            <li class="footer-nv__c-list-i"><a href="http://www.hyundai.ru/configurator" target="_blank" class="footer-nv__c-list-lnk">Конфигуратор</a></li>
                            <li class="footer-nv__c-list-i"><a href="#" class="footer-nv__c-list-lnk models-open">Модельный ряд</a></li>
                            <li class="footer-nv__c-list-i"><a href="http://www.hyundai.ru/configurator" target="_blank" class="footer-nv__c-list-lnk">Расчет кредита</a></li>

                        </ul>
                    </li>
                    <li class="footer-nv__c">
                        <strong class="footer-nv__c-header">Сервис</strong>
                        <ul class="footer-nv__c-list">
                            <li class="footer-nv__c-list-i"><a href="/all-offers/" class="footer-nv__c-list-lnk">Сервисные акции</a></li>
                            <li class="footer-nv__c-list-i"><a href="/warranty/" class="footer-nv__c-list-lnk">Гарантия</a></li>
                            <li class="footer-nv__c-list-i"><a href="/maintenance/" class="footer-nv__c-list-lnk">Обслуживание</a></li>
                            <li class="footer-nv__c-list-i"><a href="/HyundaiAssurance/" class="footer-nv__c-list-lnk">Premium Assurance</a></li>
                        </ul>
                    </li>
                    <li class="footer-nv__c">
                        <strong class="footer-nv__c-header">Пресс-центр</strong>
                        <ul class="footer-nv__c-list">
                            <li class="footer-nv__c-list-i"><a href="/news/" class="footer-nv__c-list-lnk">Новости</a></li>
<!--                            <li class="footer-nv__c-list-i"><a href="/press-release/" class="footer-nv__c-list-lnk">Пресс-релизы</a></li>-->
                            <li class="footer-nv__c-list-i"><a href="http://www.hyundai.ru/HyundaiMotorWorldmagazine" class="footer-nv__c-list-lnk" target="_blank">Hyundai Motor CIS</a></li>
                            <li class="footer-nv__c-list-i"><a href="/awards/" class="footer-nv__c-list-lnk">Награды</a></li>
                        </ul>
                    </li>
                    <li class="footer-nv__c">
                        <strong class="footer-nv__c-header">О Hyundai</strong>
                        <ul class="footer-nv__c-list">
                            <li class="footer-nv__c-list-i"><a href="/AboutUs/" class="footer-nv__c-list-lnk">Хендэ Мотор СНГ</a></li>
                            <li class="footer-nv__c-list-i"><a href="/IntroductoryRemarks/" class="footer-nv__c-list-lnk">Социальная ответственность</a></li>
                            <li class="footer-nv__c-list-i"><a href="/XMMP/" class="footer-nv__c-list-lnk">Завод ХММР</a></li>
                            <li class="footer-nv__c-list-i"><noindex><a href="https://motorsport.hyundai.com/" class="footer-nv__c-list-lnk">World Rally Championship</a></noindex></li>
                            <li class="footer-nv__c-list-i"><noindex><a href="http://motorstudio.hyundai.ru/" class="footer-nv__c-list-lnk">Hyundai MotorStudio</a></noindex></li>
                            <li class="footer-nv__c-list-i"><noindex><a href="https://www.hyundai.com/worldwide/en" class="footer-nv__c-list-lnk">Worldwide</a></noindex></li>
                        </ul>
                    </li>
                    <li class="footer-nv__c">
                        <strong class="footer-nv__c-header">Г. ВОРОНЕЖ, УЛ. ИЗЫСКАТЕЛЕЙ, 39, КОРП. 2</strong>
                        <a href="tel:+74732617777" class="footer-nv__c-phone">+7 473 261-7777</a>
                        <strong class="footer-nv__c-header">Г. ВОРОНЕЖ, 7 КМ АВТОДОРОГИ ВОРОНЕЖ-МОСКВА, НАПРОТИВ СИТИ-ПАРКА «ГРАД»</strong>
                        <a href="tel:+74733477777" class="footer-nv__c-phone">+7 473 347-77-77</a>
<!-- 
                        <a href="tel:+74732617777" class="footer-nv__c-phone">+7 (473) 347-7777</a>
-->
                        <a href="" class="footer-nv__c-mail zing_form_back_tel" for="feedback_home"><i class="i-0008-mail-icon"></i>Обратная связь</a>

<!--                        <div id="socialmedia" class="nofloat">	-->
<!--                            <ul class="socials-list socials-list--footer-primary">-->
<!--                                <li class="social-item">-->
<!--                                    <noindex>-->
<!--                                        <a rel="nofollow" target="_blank" href="https://www.facebook.com/hyundairussia" class="socials-link socials-link--tw" title="Страница Facebook" style="background-image: url(/_img/socialmedia/facebook.png);"></a>-->
<!--                                    </noindex>-->
<!--                                </li>-->
<!--                                <li class="social-item">-->
<!--                                    <noindex>-->
<!--                                        <a rel="nofollow" target="_blank" href="https://vk.com/hyundairussia" class="socials-link socials-link--tw" title="Страница Вконтакте" style="background-image: url(/_img/socialmedia/vk.png);"></a>-->
<!--                                    </noindex>-->
<!--                                </li>-->
<!--                                <li class="social-item">-->
<!--                                    <noindex>-->
<!--                                        <a rel="nofollow" target="_blank" href="https://twitter.com/HyundaiRussia" class="socials-link socials-link--tw" title="Канал в Twitter" style="background-image: url(/_img/socialmedia/twitter.png);"></a>-->
<!--                                    </noindex>-->
<!--                                </li>-->
<!--                                <li class="social-item">-->
<!--                                    <noindex>-->
<!--                                        <a rel="nofollow" target="_blank" href="http://instagram.com/hyundairussia" class="socials-link socials-link--tw" title="Канал в Instagram" style="background-image: url(/_img/socialmedia/instagram.png);"></a>-->
<!--                                    </noindex>-->
<!--                                </li>-->
<!--                                <li class="social-item">-->
<!--                                    <noindex>-->
<!--                                        <a rel="nofollow" target="_blank" href="http://www.youtube.com/hyundairussia" class="socials-link socials-link--tw" title="Канал в YouTube" style="background-image: url(/_img/socialmedia/youtube.png);"></a>-->
<!--                                    </noindex>-->
<!--                                </li>-->
<!--                                <li class="social-item">-->
<!--                                    <noindex>-->
<!--                                        <a rel="nofollow" target="_blank" href="/company/contacts/" class="socials-link socials-link--tw" title="Напишите нам" style="background-image: url(/_img/socialmedia/email.png);"></a>-->
<!--                                    </noindex>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
                        <div class="subscribe-form subscribe-form--footer-primary">
                            <div style="height: 85px;"></div>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="footer-primary__includes">
                <div class="footer-primary__includes-cont">
                    <img src="http://www.hyundai.ru/assets/img/home/fifa-partner.png" class="fifa-partner-image" alt="" />
                </div>
            </div>	</div>	<div class="footer-primary__main">
            <div class="footer-global-navigation">

                <nav class="footer-global-navigation__cust-nav" role="navigation">
                    <ul class="cust-nav__list">
                        <li class="cust-nav__item"><a href="/Sitemap/" class="cust-nav__link">Карта сайта</a></li>
                        <li class="cust-nav__item"><a href="/Legal/" class="cust-nav__link">Юридическая информация</a></li>
                        <li class="cust-nav__item"><a href="/Privacy/" class="cust-nav__link">Конфиденциальность</a></li>
                        <li class="cust-nav__item"><a href="/TermsConditions/" class="cust-nav__link">Авторские права</a></li>
                    </ul>
                </nav>
            </div>

            <div class="footer-copyright">
                <p>Вся представленная на сайте информация, касающаяся автомобилей и сервисного обслуживания, носит информационный характер и не является публичной офертой, определяемой положениями ст. 437 (2) ГК РФ. Для получения подробной информации просьба обращаться к ближайшему официальному дилеру ООО "Хендэ Мотор СНГ" Опубликованная на данном сайте информация может быть изменена в любое время без предварительного уведомления.</p>
            </div>




        </div>
    </footer>
</div>

<div class="zing_form_wrp" id="newsletter" style="display: none">
    <form class="js-newsletter_form newsletter_form zing_form" action="/ajax/request_add_newsletter" for="newsletter_hotline_btn">
        <div class="zing_form_content">
            <a class="closePopup zing_close" href="javascript:;"></a>
            <p class="js-form-message message">Вы подписались на новости</p>
            <div class="js-form-wrap">

                <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
                <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>

                <div class="zing-input">
                    <input
                        type		= "text"
                        class		= "zing_last_name zing_txt"
                        name		= "last_name"
                        id			= "zing_last_name_news"
                        maxlength	= "50">
                    <label for="zing_last_name_news">Фамилия<sup class="skyblue">*</sup></label>
                </div>

                <div class="zing-input">
                    <input
                        type		= "text"
                        class		= "zing_first_name zing_txt"
                        name		= "first_name"
                        id			= "zing_first_name_news"
                        maxlength	= "50">
                    <label for="zing_first_name_news">Имя<sup class="skyblue">*</sup></label>
                </div>

                <div class="zing-input">
                    <input
                        type		= "email"
                        class		= "zing_email zing_txt"
                        name		= "email"
                        id			= "zing_email_news"
                        maxlength	= "50">
                    <label for="zing_email_news">E-mail<sup class="skyblue">*</sup></label>
                </div>

                <div class="zing-input">
                    <input
                        type		= "tel"
                        class		= "zing_mobile zing_txt"
                        name		= "mobile"
                        id			= "zing_mobile_news"
                        maxlength	= "50">
                    <label for="zing_mobile_news">Телефон<sup class="skyblue">*</sup></label>
                </div>

                <div class="zing_rules_wrp">
                    <input
                        type	= "checkbox"
                        class	= "zing_rules_agree_cb zing-agreement-input"
                        name	= "agree"
                        id		= "zing_rules_agree_news">
                    <label for="zing_rules_agree_news">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
                </div>
                <div class="zing-submit-wrap">
                    <input type="submit" value="OK" class="btn js-submit zing-news-submit">
                </div>

            </div>
        </div>
    </form>
</div>


<div class="zing_form_wrp" id="blabla-back_tel" style="display: none;height: 560px;">
    <form class="zing_form" action="#" for="feedback_home">
        <div class="zing_form_content">
            <a class="closePopup  zing_close" href="javascript:;"></a>
            <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
            <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_last_name zing_txt"
                    name		= "zing_last_name"
                    id			= "zing_last_name"
                    maxlength	= "50">
                <label for="zing_last_name">ФИО<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing-input">
                <input
                    type		= "tel"
                    class		= "zing_mobile zing_txt"
                    name		= "zing_mobile"
                    id			= "zing_mobile"
                    maxlength	= "50">
                <label for="zing_mobile">Телефон<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_first_name zing_txt"
                    name		= "first_name"
                    id			= "zing_first_name_news"
                    maxlength	= "50">
                <label for="zing_first_name_news">Ваш вопрос<sup class="skyblue">*</sup></label>
            </div>


            <div class="zing_pers_rules_wrp">
                <noindex>
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.2009 г. №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в т.ч. с использованием средств автоматизации. Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; -для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи. Согласие дается Hyundai Motor Company(Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10) ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург г, Сестрорецк г, Левашовскоеш, 20, литер А). Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д.48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </noindex>
            </div>

            <div class="zing_rules_wrp">
                <input
                    checked="checked"
                    type	= "checkbox"
                    class	= "zing_rules_agree_cb zing-agreement-input"
                    id		= "zing_rules_agree_cb"
                    name	= "zing_rules_agree_cb">
                <label for="zing_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
            </div>

            <div class="zing-agreement-popup-wrapper" style="display: none;">
                <div class="zing-agreement-popup">
                    <span class="zing-agreement-header">Правила обработки<br>персональных данных</span>
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

            <div class="zing-submit-wrap">
                <input
                    type		= "hidden"
                    class		= "zing_email zing_txt"
                    value="test@mail.ru"
                    name		= "zing_email"
                    id			= "zing_email"
                    maxlength	= "50">
                <input type="hidden" name="now_url" class="now_url" value="<?=$_SERVER['SERVER_NAME']?>">
                <input type="submit" class="zing_ok zing-submit">
            </div>
        </div>
    </form>
</div>


<div class="zing_form_wrp" id="blabla-spec" style="display: none;height: 570px;">
    <form class="zing_form" action="#" for="testdrive">
        <div class="zing_form_content">
            <a class="closePopup  zing_close" href="javascript:;"></a>
            <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
            <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>
            <div class="zing-select">

                <select  class = "zing_last_name zing_txt"  name ="zing_last_name" id ="zing_last_name" maxlength = "50">
                    <?
                    if(CModule::IncludeModule('iblock')):
                        $arSelect = Array("ID", "NAME","CODE");
                        $arFilter = Array("IBLOCK_ID" => 7, "ACTIVE"=>"Y");
                        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                        while($ob = $res->GetNextElement())
                        {
                            $arFields = $ob->GetFields();
                            ?>
                            <option value="<?=$arFields['NAME']?>"><?=$arFields['NAME']?></option>
                            <?

                        }
                    endif;
                    ?>

                </select>
                <div class="arrow-down">▼</div>


            </div>


            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_first_name zing_txt"
                    name		= "zing_first_name"
                    id			= "zing_first_name"
                    maxlength	= "50">
                <label for="zing_first_name">ФИО<sup class="skyblue">*</sup></label>
            </div>


            <div class="zing-input">
                <input
                    type		= "tel"
                    class		= "zing_mobile zing_txt"
                    name		= "zing_mobile"
                    id			= "zing_mobile"
                    maxlength	= "50">
                <label for="zing_mobile">Телефон<sup class="skyblue">*</sup></label>
            </div>


            <div class="zing_pers_rules_wrp">
                <noindex>
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.2009 г. №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в т.ч. с использованием средств автоматизации. Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; -для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи. Согласие дается Hyundai Motor Company(Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10) ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург г, Сестрорецк г, Левашовскоеш, 20, литер А). Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д.48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </noindex>
            </div>

            <div class="zing_rules_wrp">
                <input
                    checked="checked"
                    type	= "checkbox"
                    class	= "zing_rules_agree_cb zing-agreement-input"
                    id		= "zing_rules_agree_cb"
                    name	= "zing_rules_agree_cb">
                <label for="zing_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
            </div>

            <div class="zing-agreement-popup-wrapper" style="display: none;">
                <div class="zing-agreement-popup">
                    <span class="zing-agreement-header">Правила обработки<br>персональных данных</span>
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

            <div class="zing-submit-wrap">
                <input
                    type		= "hidden"
                    class		= "zing_email zing_txt"
                    value="test@mail.ru"
                    name		= "zing_email"
                    id			= "zing_email"
                    maxlength	= "50">
                <input type="hidden" name="now_url" class="now_url" value="<?=$_SERVER['SERVER_NAME']?>">
                <input type="submit" class="zing_ok zing-submit" value="Отправить">
            </div>
        </div>
    </form>
</div>
<div class="zing_form_wrp" id="blabla-spec" style="display: none;">
    <form class="zing_form" action="#" for="newslist">
        <div class="zing_form_content">
            <a class="closePopup  zing_close" href="javascript:;"></a>
            <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
            <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>
            <div class="zing-select">

                <select  class = "zing_last_name zing_txt"  name ="zing_last_name" id ="zing_last_name" maxlength = "50">
                    <?
                    if(CModule::IncludeModule('iblock')):
                        $arSelect = Array("ID", "NAME","CODE");
                        $arFilter = Array("IBLOCK_ID" => 7, "ACTIVE"=>"Y");
                        $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                        while($ob = $res->GetNextElement())
                        {
                            $arFields = $ob->GetFields();
                            ?>
                            <option value="<?=$arFields['NAME']?>"><?=$arFields['NAME']?></option>
                            <?

                        }
                    endif;
                    ?>

                </select>
                <div class="arrow-down">▼</div>


            </div>


            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_first_name zing_txt"
                    name		= "zing_first_name"
                    id			= "zing_first_name"
                    maxlength	= "50">
                <label for="zing_first_name">ФИО<sup class="skyblue">*</sup></label>
            </div>


            <div class="zing-input">
                <input
                    type		= "tel"
                    class		= "zing_mobile zing_txt"
                    name		= "zing_mobile"
                    id			= "zing_mobile"
                    maxlength	= "50">
                <label for="zing_mobile">Телефон<sup class="skyblue">*</sup></label>
            </div>


            <div class="zing_pers_rules_wrp">
                <noindex>
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.2009 г. №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в т.ч. с использованием средств автоматизации. Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; -для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи. Согласие дается Hyundai Motor Company(Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10) ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург г, Сестрорецк г, Левашовскоеш, 20, литер А). Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д.48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </noindex>
            </div>

            <div class="zing_rules_wrp">
                <input
                    checked="checked"
                    type	= "checkbox"
                    class	= "zing_rules_agree_cb zing-agreement-input"
                    id		= "zing_rules_agree_cb"
                    name	= "zing_rules_agree_cb">
                <label for="zing_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
            </div>

            <div class="zing-agreement-popup-wrapper" style="display: none;">
                <div class="zing-agreement-popup">
                    <span class="zing-agreement-header">Правила обработки<br>персональных данных</span>
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

            <div class="zing-submit-wrap">
                <input
                    type		= "hidden"
                    class		= "zing_email zing_txt"
                    value="test@mail.ru"
                    name		= "zing_email"
                    id			= "zing_email"
                    maxlength	= "50">
                <input type="hidden" name="now_url" class="now_url" value="<?=$_SERVER['SERVER_NAME']?>">
                <input type="submit" class="zing_ok zing-submit" value="Отправить">
            </div>
        </div>
    </form>
</div>




<div class="zing_form_wrp" id="blabla" style="display: none">
    <form class="zing_form" action="#" for="zing_cuzov_btn">
        <div class="zing_form_content">
            <a class="closePopup  zing_close" href="javascript:;"></a>
            <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
            <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_last_name zing_txt"
                    name		= "zing_last_name"
                    id			= "zing_last_name"
                    maxlength	= "50">
                <label for="zing_last_name">Фамилия<sup class="skyblue">*</sup></label>
            </div>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_first_name zing_txt"
                    name		= "zing_first_name"
                    id			= "zing_first_name"
                    maxlength	= "50">
                <label for="zing_first_name">Имя<sup class="skyblue">*</sup></label>
            </div>

            <? if(!preg_match('/avtomobili-s-probegom/',$APPLICATION->GetCurPage(),$preg)):?>

                <div class="zing-input">
                    <input type="text" class="zing_middle_name zing_txt" name="zing_middle_name" id="zing_middle_name" maxlength="50">
                    <label for="zing_middle_name">Отчество<sup class="skyblue">*</sup></label>
                </div>

            <? endif; ?>

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
                    type		= "tel"
                    class		= "zing_mobile zing_txt"
                    name		= "zing_mobile"
                    id			= "zing_mobile"
                    maxlength	= "50">
                <label for="zing_mobile">Телефон<sup class="skyblue">*</sup></label>
            </div>

            <div class="zing_pers_rules_wrp">
                <noindex>
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.2009 г. №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в т.ч. с использованием средств автоматизации. Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; -для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи. Согласие дается Hyundai Motor Company(Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10) ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург г, Сестрорецк г, Левашовскоеш, 20, литер А). Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д.48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </noindex>
            </div>

            <div class="zing_rules_wrp">
                <input
                    checked="checked"
                    type	= "checkbox"
                    class	= "zing_rules_agree_cb zing-agreement-input"
                    id		= "zing_rules_agree_cb"
                    name	= "zing_rules_agree_cb">
                <label for="zing_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
            </div>

            <div class="zing-agreement-popup-wrapper" style="display: none;">
                <div class="zing-agreement-popup">
                    <span class="zing-agreement-header">Правила обработки<br>персональных данных</span>
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

            <div class="zing-submit-wrap">
                <input type="hidden" name="now_url" class="now_url" value="<?=$_SERVER['SERVER_NAME']?>">
                <input type="submit" class="zing_ok zing-submit">
            </div>
        </div>
    </form>
</div>

<div class="zing_form_wrp" id="blabla" style="display: none">
    <form class="zing_form" action="#" for="zing_hotline_btn">
        <div class="zing_form_content">
            <a class="closePopup  zing_close" href="javascript:;"></a>
            <p class="zing-heading">Пожалуйста, укажите Ваши контактные данные.</p>
            <p class="zing-p zing-p--note"><i class="ic-note-31"></i>Поля, отмеченные &laquo;<sup class="skyblue">*</sup>&raquo;, обязательны для заполнения.</p>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_last_name zing_txt"
                    name		= "zing_last_name"
                    id			= "zing_last_name"
                    maxlength	= "50">
                <label for="zing_last_name">Фамилия<sup class="skyblue">*</sup></label>
            </div>
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_first_name zing_txt"
                    name		= "zing_first_name"
                    id			= "zing_first_name"
                    maxlength	= "50">
                <label for="zing_first_name">Имя<sup class="skyblue">*</sup></label>
            </div>

            <? if(!preg_match('/avtomobili-s-probegom/',$APPLICATION->GetCurPage(),$preg)):?>

                <div class="zing-input">
                    <input type="text" class="zing_middle_name zing_txt" name="zing_middle_name" id="zing_middle_name" maxlength="50">
                    <label for="zing_middle_name">Отчество<sup class="skyblue">*</sup></label>
                </div>

            <? endif; ?>



            <!--
            <div class="zing-input">
                <input
                    type		= "text"
                    class		= "zing_middle_name zing_txt"
                    name		= "zing_middle_name"
                    id			= "zing_middle_name"
                    maxlength	= "50">
                <label for="zing_middle_name">Отчество<sup class="skyblue">*</sup></label>
            </div>
            -->
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
                    type		= "tel"
                    class		= "zing_mobile zing_txt"
                    name		= "zing_mobile"
                    id			= "zing_mobile"
                    maxlength	= "50">
                <label for="zing_mobile">Телефон<sup class="skyblue">*</sup></label>
            </div>

            <? if(!preg_match('/avtomobili-s-probegom/',$APPLICATION->GetCurPage(),$preg)):?>

                <div class="zing-input">
                    <input readonly="" type="text" class="zing_birthdate zing_txt " name="zing_birthdate" id="zing_birthdate" maxlength="10">
                    <label for="zing_birthdate">Дата рождения</label>
                </div>

            <? endif; ?>

            <!--
            <div class="zing-input">
                <input
                    readonly
                    type		= "text"
                    class		= "zing_birthdate zing_txt ignore"
                    name		= "zing_birthdate"
                    id			= "zing_birthdate"
                    maxlength	= "10">
                <label for="zing_birthdate">Дата рождения</label>
            </div>
            -->

            <div class="zing_pers_rules_wrp">
                <noindex>
                    Настоящим Я, в соответствии с требованиями Федерального закона от 27.07.2009 г. №152-ФЗ «О персональных данных» даю свое согласие лично, своей волей и в своем интересе на обработку (сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, распространение, передачу (включая трансграничную передачу), обезличивание, блокирование и уничтожение) моих персональных данных, в т.ч. с использованием средств автоматизации. Такое согласие мною даётся в отношении следующих персональных данных: фамилии, имя, отчество; контактный адрес электронной почты (e-mail); контактный телефон; -для определения потребностей в производственной мощности, мониторинга исполнения сервисными центрами гарантийной политики; ведения истории обращения в сервисные центры; проведения дилерами, дистрибьюторами, контрагентами маркетинговых исследований в области продаж, сервиса и послепродажного обслуживания; для рекламных, исследовательских, информационных, а также иных целей, в том числе, путем осуществления со мной прямых контактов по различным средствам связи. Согласие дается Hyundai Motor Company(Хёндэ Мотор Компани, 231 Янгджи-Донг, Сеочо-Гу, Сеул, 137-938, Республика Корея), ООО «Хендэ Мотор СНГ» (г. Москва, ул.Тестовская, д.10) ООО «Хендэ Мотор МануфактурингPус» (197706, Санкт-Петербург г, Сестрорецк г, Левашовскоеш, 20, литер А). Я даю свое согласие передавать мои персональные данные для обработки исследовательским агентствам: ООО «Международный институт маркетинговых и социальных исследований «ГФК-Русь» (г. Москва, 9-я Парковая улица, д.48, корп. 4), ЗАО «Бизнес Аналитика МК» (г. Москва, ул. Новослободская, 31, стр. 2); АО «АВТОАССИСТАНС» (г.Москва, ул. Обручева д. 52 стр.3), ООО «Ипсос» (г. Москва, Гамсоновскийпереулок, д. 5), а также любым другим третьим лицам, для целей, указанных в настоящем согласии.
                </noindex>
            </div>

            <div class="zing_rules_wrp">
                <input
                    checked="checked"
                    type	= "checkbox"
                    class	= "zing_rules_agree_cb zing-agreement-input"
                    id		= "zing_rules_agree_cb"
                    name	= "zing_rules_agree_cb">
                <label for="zing_rules_agree_cb">Я прочитал <a class="skyblue zing-show-rules" href="javascript:;">правила</a> и даю свое согласие<br>на обработку персональных данных</label>
            </div>

            <div class="zing-agreement-popup-wrapper" style="display: none;">
                <div class="zing-agreement-popup">
                    <span class="zing-agreement-header">Правила обработки<br>персональных данных</span>
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

            <div class="zing-submit-wrap">
                <input type="hidden" name="now_url" class="now_url" value="<?=$_SERVER['SERVER_NAME']?>">
                <input type="submit" class="zing_ok zing-submit">
            </div>
        </div>
    </form>
</div>

<div class="message-send" style="display: none">
    <div class="zing-agreement-popup" style="padding: 80px 55px;width: 500px;height: 200px;top:50%">
        <span class="zing-agreement-header">Сообщение отправлено!</span>
        <div class="zing-agreement-close">×</div>
    </div>
</div>

<div id="brochure_go_check_email" class="brochure_go_check_email" style="display: none">
    <div class="brochure_go_check_email-content">
        <div class="go_check_close">×</div>
        <p>На электронный адрес</p>
        <p id="brochure_email"></p>
        <p>отправлено письмо для&nbsp;подтверждения.</p>
        <p>Пожалуйста, проверьте почту</p>
    </div>
</div>



<div style="display: none;">
 <!--   <a href="http://zingaya.com/widget/7fa635d9bedd182ca122939b4d8769ba" onclick="typeof(_gat)=='undefined'?'':_gat._getTrackerByName()._setAllowLinker(true); window.open(typeof(_gat)=='undefined'?this.href+'?referrer='+escape(window.location.href)+'':_gat._getTrackerByName()._getLinkerUrl(this.href+'?referrer='+escape(window.location.href)+''), '_blank', 'width=236,height=220,resizable=no,toolbar=no,menubar=no,location=no,status=no'); return false" class="zingaya_button1373885756660 _zc2 zing_call_btn" id="zing_hotline_btn"></a> -->
</div>



<div class="scroll_me" style="display: block;"><a href="#wrapper"></a></div>

</div><!--wrapper-->




<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/bitrix/include/seo-script-".SITE_ID.".php"
    )
);?>


<!-- ************************************************************************************************************* -->

<!-- BEGIN CLICKTEX CODE {literal} -->
<script type="text/javascript" charset="utf-8" async="async" src="//www.clicktex.ru/code/5883"></script>
<!-- {/literal} END CLICKTEX CODE -->    <!-- scroll to top button -->
    <style>
        /* scroll to top button */
        .scroll_me a{
            width:50px;
            height: 50px;
            background: url("/media/img/to_top.png");
            position: fixed;
            bottom: 50px;
            right: 21px;
            z-index: 999;
            cursor: pointer;
            opacity: 0.7;
            display: none;
        }
        .scroll_me a:hover{
            opacity:1;
        }
        
        .btn_area1>a>img{
            max-width: 220px;
        }
        .btn_area1>a:hover{
            opacity:.8;
        }
    </style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116829458-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116829458-1');
</script>
</body>
    
</html>