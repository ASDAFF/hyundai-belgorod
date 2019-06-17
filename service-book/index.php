<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Электронная сервисная книжка в Мире Хёндэ");
?>

    <link type="text/css" href="https://www.hyundai.ru/assets/css/servicebook.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.hyundai.ru/assets/css/overrides.css?v=4.0">

    <!--
    Контент страницы начнется тут
    -->

    <main class="main" data-model="home">

        <section class="main-banner">
            <div class="main-banner__center section">
                <h1 class="h1 main-banner__title">
                    Электронная<br />
                    сервисная книжка<br />
                    в&nbsp;Мире Хёндэ
                </h1>
                <div class="main-banner__text">
                    Это защищенная база данных, которая хранит информацию о&nbsp;вашем Hyundai.
                </div>
                <a href="#access" class="main-banner__button default-button js-scroll">Как воспользоваться</a>
            </div>
        </section>

        <section class="advantages section">
            <h2 class="h2">Преимущества</h2>
            <ul class="advantages__list">
                <li class="advantages__item">
                    <div class="advantages__icon">
                        <img src="https://www.hyundai.ru/assets/img/servicebook/svg/01_TO.svg" alt="">
                    </div>
                    <div class="advantages__description">
                        Контролируйте<br />
                        техническое состояние<br />
                        вашего автомобиля
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__icon">
                        <img src="https://www.hyundai.ru/assets/img/servicebook/svg/02_history.svg" alt="">
                    </div>
                    <div class="advantages__description">
                        Храните сервисную<br />
                        историю
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__icon">
                        <img src="https://www.hyundai.ru/assets/img/servicebook/svg/03_garanty.svg" alt="">
                    </div>
                    <div class="advantages__description">
                        Следите за&nbsp;гарантийным<br />
                        статусом
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__icon">
                        <img src="https://www.hyundai.ru/assets/img/servicebook/svg/04_process.svg" alt="">
                    </div>
                    <div class="advantages__description">
                        Упрощайте процесс<br />
                        обслуживания
                    </div>
                </li>
            </ul>
            <ul class="advantages__list advantages__list--mt">
                <li class="advantages__item">
                    <div class="advantages__text">
                        Информация о&nbsp;пройденных&nbsp;ТО записывается автоматически
                        в&nbsp;хронологическом порядке.
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__text">
                        Все данные об&nbsp;автомобиле надежно защищены.
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__text">
                        Электронная сервисная книжка всегда под рукой в&nbsp;профиле
                        в&nbsp;Мире Хёндэ.
                    </div>
                </li>
                <li class="advantages__item">
                    <div class="advantages__text">
                        Комфортное и&nbsp;быстрое обслуживание автомобиля в&nbsp;дилерских центрах Hyundai.
                    </div>
                </li>
            </ul>
        </section>

        <section id="access" class="access">
            <div class="access__center section">
                <h2 class="h2">
                    Получите доступ к&nbsp;Электронной сервисной <br />
                    книжке удобным для вас способом
                </h2>
                <div class="access__subtitle">Самостоятельно онлайн</div>
                <ul class="access__numbers">
                    <li class="access__number">
                        <div class="access__circle">
                            01
                        </div>
                    </li>
                    <li class="access__number">
                        <div class="access__circle">
                            02
                        </div>
                    </li>
                    <li class="access__number">
                        <div class="access__circle">
                            03
                        </div>
                    </li>
                </ul>
                <ul class="access__list">
                    <li class="access__item">
                        Зарегистрируйтесь в программе привилегий Мир Хёндэ.
                        <br>
                        <a href="https://mir.hyundai.ru/login" target="_blank" class="default-button default-button--large access__button">Зарегистрироваться</a>
                    </li>
                    <li class="access__item">
                        В&nbsp;разделе &laquo;Гараж&raquo; введите vin-номер автомобиля, загрузите документы, подтверждающие владение автомобилем: фотографии СТС или ПТС с&nbsp;двух сторон в&nbsp;хорошем качестве.
                    </li>
                    <li class="access__item">
                        После прохождения верификации автомобиля вы&nbsp;получите доступ к&nbsp;информации о&nbsp;вашем автомобиле и&nbsp;остальным возможностям программы привилегий Мир Хёнде.
                    </li>
                </ul>
                <div class="access__subtitle access__subtitle--mt">В официальном дилерском центре</div>
                <ul class="access__numbers">
                    <li class="access__number">
                        <div class="access__circle">
                            01
                        </div>
                    </li>
                    <li class="access__number">
                        <div class="access__circle">
                            02
                        </div>
                    </li>
                    <li class="access__number">
                        <div class="access__circle">
                            03
                        </div>
                    </li>
                </ul>
                <ul class="access__list">
                    <li class="access__item">
                        Найдите удобный для вас дилерский центр Hyundai.
                        <br>
                        <a href="/contacts/" target="_blank" class="default-button default-button--large access__button">Найти дилера</a>
                    </li>
                    <li class="access__item">
                        Сотрудник дилерского центра заполнит за&nbsp;вас все данные для регистрации. Моментально добавит ваш автомобиль в&nbsp;профиль на&nbsp;сайте без загрузки документов.
                    </li>
                    <li class="access__item">
                        Пользуйтесь сервисной книжкой онлайн или получите pdf-версию у&nbsp;дилера, а&nbsp;также остальными возможностями программы привилегий Мира Хёндэ.
                    </li>
                </ul>
            </div>
        </section>

        <section class="last-block section">
            <h2 class="h2">Важно знать</h2>
            <ul class="last-block__list">
                <li class="last-block__item">
                    <div class="last-block__icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                    L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                </svg>
                    </div>
                    <div class="last-block__description">
                        Электронная сервисная книжка доступна всем зарегистрированным пользователям Мира Хёндэ с&nbsp;верифицированным автомобилем
                    </div>
                    <div class="last-block__text">
                        Если было проведено техническое обслуживание, оно будет отображено в&nbsp;Электронной сервисной книжке.
                    </div>
                </li>
                <li class="last-block__item">
                    <div class="last-block__icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                    L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                </svg>
                    </div>
                    <div class="last-block__description">
                        Пользуйтесь Электронной сервисной книжкой любым удобным способом
                    </div>
                    <div class="last-block__text">
                        Вы&nbsp;можете распечать, сохранить PDF или отправить на&nbsp;e-mail документ Электронной сервисной книжки в&nbsp;разделе &laquo;Гараж&raquo; или обратиться к&nbsp;любому официальному дилеру.
                    </div>
                </li>
                <li class="last-block__item">
                    <div class="last-block__icon">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 26 18" style="enable-background:new 0 0 26 18;" xml:space="preserve">
                <path d="M9.5,18c-0.9,0-1.8-0.3-2.5-1l-6.3-6.3c-1-1-1-2.7,0-3.7c1-1,2.7-1,3.7,0l5.1,5.1l12-11.3c1-1,2.7-1,3.7,0c1,1,1,2.7,0,3.7
                    L12,17C11.3,17.7,10.4,18,9.5,18z"/>
                </svg>
                    </div>
                    <div class="last-block__description">
                        Ваши персональные данные надежно защищены
                    </div>
                    <div class="last-block__text">
                        Для получения печатной версии Электронной сервисной книжки мы&nbsp;используем верификацию через код подтверждения из&nbsp;смс.
                    </div>
                </li>
            </ul>
        </section>
    </main>


    <!--
    Контент страницы закончится тут
    -->

    <script src="https://www.hyundai.ru/assets/js/vendors.js?v=1"></script>



    <!-- ! specific stuff for current page only ! -->
    <script type="text/javascript" src="https://maps.google.ru/maps/api/js?key=AIzaSyDX8W8BnupAAQjlKYfnq8J51ZLY3hpnxgA"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/underscore.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/media/js/libs/jquery.nanoscroller.min.js"></script>
    <script type="text/javascript" src="https://www.hyundai.ru/assets/js/servicebook.js"></script>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>