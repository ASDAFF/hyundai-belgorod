<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("all-offers");
?>

    <div class="offers__main offers-divider">
        <div class="offers__container offers_divider__content clearfix">
            <!-- kroshki -->
            <div class="offers__breadcrumbs breadcrumbs-fromtop">
                <ul><li><a href="/" title="">Главная</a> &gt;</li>
                    <li><a href="#" title="">Акции</a></li>
                </ul>
            </div>
            <!-- true offers -->
            <!-- title -->
            <h1 class="offers_divider__content__title">Акции</h1>

            <!-- just offers ok let's go -->
            <div class="offers_divider__content__offers-grid-section clearfix">
                <?
                if(CModule::IncludeModule("iblock")) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
                    $arFilter = Array("IBLOCK_ID" => 5, "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                    while ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        if($arProps['ENABLE_SPEC']['VALUE'] == 'Y'){
                            ?>
                            <div class="insection-offer-unit">
                                <a href="<?= $arFields['CODE'] ?>" class="insection-offer-unit__link">
                                    <img src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']); ?>" alt=""
                                         class="insection-offer-unit__back-img">

                                    <div class="insection-offer-unit__info">
                                        <span class="name"><?= $arFields['NAME'] ?></span>
                                        <span class="addinfo"></span>
                                    </div>
                                </a>
                            </div>
                            <?
                        }
                    }
                }
                ?>

                <?
                if(CModule::IncludeModule("iblock")) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
                    $arFilter = Array("IBLOCK_ID" => 10, "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                    while ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        if($arProps['ENABLE_SPEC']['VALUE'] == 'Y'){
                            ?>
                            <div class="insection-offer-unit">
                                <a href="<?= $arFields['CODE'] ?>" class="insection-offer-unit__link">
                                    <img src="<?= CFile::GetPath($arFields['DETAIL_PICTURE']); ?>" alt=""
                                         class="insection-offer-unit__back-img">

                                    <div class="insection-offer-unit__info">
                                        <span class="name"><?= $arFields['NAME'] ?></span>
                                        <span class="addinfo"></span>
                                    </div>
                                </a>
                            </div>
                            <?
                        }
                    }
                }
                ?>

                <?
                if(CModule::IncludeModule("iblock")) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "CODE", "PROPERTY_ENABLE_SPEC");
                    $arFilter = Array("IBLOCK_ID" => 11, "SECTION_ID" => 16, "ACTIVE" => "Y");
                    $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                    while ($ob = $res->GetNextElement()) {
                        $arFields = $ob->GetFields();
                        $arProps = $ob->GetProperties();
                        if($arProps['ENABLE_SPEC']['VALUE'] == 'Y'){
                            ?>
                            <div class="insection-offer-unit">
                                <a href="<?= $arFields['CODE'] ?>" class="insection-offer-unit__link">
                                    <img src="<?= CFile::GetPath($arFields['PREVIEW_PICTURE']); ?>" alt=""
                                         class="insection-offer-unit__back-img">

                                    <div class="insection-offer-unit__info">
                                        <span class="name"><?= $arFields['NAME'] ?></span>
                                        <span class="addinfo"></span>
                                    </div>
                                </a>
                            </div>
                            <?
                        }
                    }
                }
                ?>




                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/solaris-special-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/d308a9d099eddef6dc761a31e85c9edc_banner_special_offer_preview.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Специальное предложение для владельцев Hyundai</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/santa-fe-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/3b6b0e6d05c664a63fd2d85e9af37735_1900x520px_new_mini.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Выгода до 300 000р. на Hyundai Santa fe!</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://www.hyundai.ru/start" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/0fcfbe172cb5d46f056a5940d90a9640_mini.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Программа Старт.<br>Creta за 7 000 руб./мес.</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/elantra-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/e9af6d87b8b138685dc83ab3a302d792_Elantra.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Hyundai Elantra.<br>За 8 000 руб./мес.</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/santa-fe-offer/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/23b1a222ff29e8fb318252ccd04a6de1_Leasing_1920x530_small.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Hyundai Leasing Boost</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="http://hyundai-ringauto.ru/promo/major-leasing/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/04cbeb84a054d5e241ea61acbfabdf67_5_19.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Лизинг для физических лиц</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="https://hpromise.hyundai.ru/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/f93728a7c2fef9c6b084c56a75ccb4fb_HPromise.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Автомобили с пробегом</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>


            </div>
            <!-- service stuff next -->
            <!-- not fully offers -->

            <!-- title -->
            <a id="service-offers" style="padding-top: 30px;"></a>

            <h2 class="offers_divider__content__title">Сервисные программы</h2>
            <div class="offers_divider__content__offers-grid-section clearfix">
                <div class="insection-offer-unit">
                    <a href="/promo/parts/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/428fb4346f911f205e484e956314de54_Zapchasti.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Запчасти Product Line 2</span>
                            <span class="addinfo"></span>
                        </div>
                    </a>
                </div>

                <div class="insection-offer-unit">
                    <a href="/service/best/" class="insection-offer-unit__link">
                        <img src="http://www.hyundai.ru/media/offers_image/f9c45be738044798df716ee341806265_luchsheei.jpg" alt="" class="insection-offer-unit__back-img">
                        <div class="insection-offer-unit__info">
                            <span class="name">Лучшее для своих</span>
                            <span class="addinfo">Сервисная акция</span>
                        </div>
                    </a>
                </div>

            </div>
        </div>

        <!-- prefooter banners -->
        <!--
                <div class="offers__prefooter-banner clearfix">
                    <div class="offers__prefooter-banner__subscribe clearfix">
                        <span class="subscribe-q">Хотите получать информацию об акциях и новостях?</span>
                        <a href="#" class="subscribe-btn">Подписаться</a>
                    </div>
                    <div class="offers__prefooter-banner__biglinks clearfix">
                        <div class="biglinks__unit">
                            <a href="#" class="biglinks__unit__wrap-link">
                                <img class="biglinks__unit__img" src="/media/img/offers/bnnrs/configurator.jpg" alt="Configurator">
                                <span class="biglinks__unit__title">Создайте свой<br>Hyundai</span>
                                <a href="#" class="biglinks__unit__link">Конфигуратор</a>
                            </a>
                        </div>
                        <div class="biglinks__unit">
                            <a href="#" class="biglinks__unit__wrap-link">
                                <img class="biglinks__unit__img" src="/media/img/offers/bnnrs/dealers.jpg" alt="Dealers">
                                <span class="biglinks__unit__title">Найдите<br>ближайшего<br>дилера</span>
                                <a href="#" class="biglinks__unit__link">Дилеры</a>
                            </a>
                        </div>
                        <div class="biglinks__unit">
                            <a href="#" class="biglinks__unit__wrap-link">
                                <img class="biglinks__unit__img" src="/media/img/offers/bnnrs/test-drive.jpg" alt="Test-Drive">
                                <span class="biglinks__unit__title">Попробуйте<br>Hyundai в деле</span>
                                <a href="#" class="biglinks__unit__link">Тест-драйв</a>
                            </a>
                        </div>
                    </div>

                </div>
        -->

        <link rel="stylesheet" type="text/css" href="/media/css_new/newalloffers.css">

        <script>
            $('.objects_box').remove();
        </script>


    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>