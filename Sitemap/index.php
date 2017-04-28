<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Sitemap");
?>

    <div class="container">
        <div class="content_wrap"><div class="title_area"><h1 class="title">Карта сайта</h1></div><div class="content_area"><script type="text/javascript" src="/media/js/wcm.consumption.js"></script>

                <script language="javascript">
                    WCM.consumptionContext=""
                    WCM.contributionContext="/wcm-contrib"
                    WCM.designContext="/wcm-design"
                    WCM.sitePath="http://www.hyundai.com/ru/ru/Sitemap/index.html"
                </script>
                <div class="sitemap_area clearfix">
                    <div class="sitemap_menu sitemap_menu1">
                        <h2>Модельный ряд</h2>
                        <ul class="list_site">
                            <?
                            if(CModule::IncludeModule('iblock')):
                            $arSelect = Array("ID", "NAME","CODE");
                            $arFilter = Array("IBLOCK_ID" => 7, "ACTIVE"=>"Y");
                            $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                            while($ob = $res->GetNextElement())
                            {
                                $arFields = $ob->GetFields();
                                ?>
                                <li><a href="/<?=$arFields['CODE']?>" title="<?=$arFields['NAME']?>"><?=$arFields['NAME']?></a></li>
                                <?

                            }
                             endif;
                            ?>
                        </ul>
                    </div>

                    <div class="sitemap_menu sitemap_menu2">
                        <h2>Покупка</h2>

                        <ul class="list_site">
                            <li>
                                <a href="/all-offers" title="Специальные предложения" target="">
                                    Специальные предложения                                </a>
                            </li>
                            <li>
                                <a href="/configurator" title="Создать свою конфигурацию" target="">
                                    Создать свою конфигурацию                                </a>
                            </li>
                            <li>
                                <a href="https://hpromise.hyundai.ru/" title="Автомобили с пробегом" target="">
                                    Автомобили с пробегом                                </a>
                            </li>
                            <li>
                                <a href="/corporate-clients" title="Корпоративным клиентам" target="">
                                    Корпоративным клиентам                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="sitemap_menu ">
                        <h2>Сервис</h2>

                        <ul class="list_site">
                            <li>
                                <a href="/service/roadside-assistance" title="

							Владельцам
						" target="">


                                    Владельцам
                                </a>
                            </li>
                            <li>
                                <a href="/service/warranty" title="

							Гарантия
						" target="">


                                    Гарантия
                                </a>
                            </li>
                            <li>
                                <a href="/service/maintenance" title="

							Обслуживание
						" target="">


                                    Обслуживание
                                </a>
                            </li>
                            <li>
                                <a href="/service/bodyworks" title="

							Кузовной ремонт
						" target="">


                                    Кузовной ремонт
                                </a>
                            </li>
                            <li>
                                <a href="/service/parts" title="

							Оригинальные запчасти
						" target="">


                                    Оригинальные запчасти
                                </a>
                            </li>
                            <li>
                                <a href="/service/manuals" title="

							Руководства и&nbsp;брошюры
						" target="">


                                    Руководства и&nbsp;брошюры
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="sitemap_menu ">
                        <h2>Медиа-центр</h2>

                        <ul class="list_site">
                            <li><a href="/news" title="Новости компании" target="">Новости компании</a><ul></ul></li></ul>
                        <ul class="list_site"><li><a href="/HyundaiMotorWorldmagazine" title="Журнал Hyundai Motor CIS" target="">Журнал Hyundai Motor CIS</a><ul></ul></li></ul>
                        <ul class="list_site"><li><a href="/awards" title="Награды" target="">Награды</a><ul></ul></li></ul>
                        <!--                     <ul class="list_site"><li><a href="/socialnetworks" title="Социальные сети" target="">Социальные сети</a><ul></ul></li></ul> -->
                    </div>
                    <div class="sitemap_menu ">
                        <h2>О нас</h2>
                        <ul class="list_site"><li><a href="/AboutUs" title="Хендэ Мотор СНГ" target="">Хендэ Мотор СНГ</a>
                                <ul>
                                    <li><a href="/AboutUs" title="обзор" target="">Обзор</a></li>
                                    <li><a href="/CareersMoscow" title="вакансии" target="">Карьера в Hyundai</a></li>
                                    <li><a href="/Partners" title="партнеры" target="">Партнеры</a></li>
                                    <li><a href="/Become-a-dealer" title="стать дилером" target="">Стать дилером</a></li>
                                    <li><a href="/Tenders" title="Тендеры ХМСНГ" target="">Тендеры ХМСНГ</a></li></ul></li></ul>

                        <ul class="list_site">
                            <li><a href="/XMMP" title="ХММР" target="">ХММР</a>
                                <ul>
                                    <li><a href="/XMMP" title="о заводе" target="">О заводе</a></li>
                                    <li><a href="/XMMP-manufacturing" title="Производство" target="">Производство</a></li>
                                    <li><a href="/XMMP-careers" title="Вакансии завода" target="">Вакансии завода</a></li>
                                    <li><a href="/Jobplacement" title="Трудоустройство" target="">Трудоустройство</a></li>
                                    <li><a href="/Anketa" title="заполнить анкету" target="">Заполнить анкету</a></li>
                                    <li><a href="/XMMP-Contacts" title="контакты" target="">Kонтакты</a></li></ul></li></ul>

                        <ul class="list_site">
                            <li><a href="/IntroductoryRemarks" title="" target="">Социальная ответственность</a>
                            </li></ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <style>
        .content_wrap .title_area .title {
            padding: 20px 0 0 29px;
            vertical-align: middle;
        }
    </style>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>