<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<html>
    <head>
<?
$APPLICATION->SetTitle("about");
?>
<?$APPLICATION->ShowHead();?>

    <script src="/bitrix/templates/ringauto/js/jquerymin.js"></script>





    <link href="/hpromise/css/common.css" rel="stylesheet">
    <link href="/hpromise/css/design.css" rel="stylesheet">

    </head>


<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

    <div class="design">
        <div class="wrapper">



            <div class="head-section base__section">

                <header class="header">
                    <div class="header__inner">

                        <div class="header__menu">
                            <a href="/" class="header__logo"></a><nav class="header__nav js-head-nav">
                                <i class="head-nav-icon js-head-nav-icon icon">
                                    <svg class="icon__cnt"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#ei-navicon-icon"></use></svg>
                                </i>

                                <ul class="head-nav-list">

                                    <li class="head-nav-list__item  -active">
                                        <a class="head-nav-list__link" href="/hpromise/about">
                                            H-Promise        </a>
                                    </li>

                                    <li class="head-nav-list__item  -active">
                                        <a class="head-nav-list__link" href="/hpromise/trade-in">
                                            Программа лояльности        </a>
                                    </li>


                                    <li class="head-nav-list__item ">
                                        <a class="head-nav-list__link" href="/hpromise/avtomobili-s-probegom">
                                            Автомобили с пробегом        </a>
                                    </li>



                                </ul>
                            </nav>
                            <div class="header__contacts">
                                <div class="head-phone">+7 473 261-7777</div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>


            <div class="content-section base__section">
                <!--Убираем
                                Убираем-->
                <div class="main-content">
                    <div class="main-content-left" style="height: 761px; margin-bottom: -50px;">
                        <div class="main-content-left__logoh"></div>
                        <div class="main-content-left__text">
                            <!--p>Компания Hyundai всегда стремится максимально удовлетворить и предвосхитить ожидания наших клиентов, именно поэтому в 2015 году мы запустили специальные программы лояльности и продаж сертифицированных автомобилей с пробегом H-Promise.</p>

                            <p><b>Теперь наши клиенты получают пакет опций, включающий дополнительные привилегии:</b></p>
                            <ul>
                                <li>в случае обмена своего Hyundai с пробегом на новый по схеме Trade-In, которую мы назвали программой лояльности H-Promise;</li>
                                <li>в случае покупки Hyundai с пробегом — высочайшие стандарты предпродажной подготовки автомобилей, программу помощи на дорогах и гарантию на автомобиль с пробегом.</li>
                            </ul-->
                            <h1>Сертифицированные автомобили с пробегом</h1>
                            <p>Вы хотите купить автомобиль Hyundai с пробегом, в надежности и качестве которого вы будете абсолютно уверены? Это просто! Все автомобили, сертифицированные по программе H-Promise, прошли комплексную техническую диагностику и предпродажную подготовку.</p>
                        </div>
                        <div class="main-content-left__links">
                            <div class="main-content-left__single check">Комплексная проверка по 100 пунктам</div>
                            <div class="main-content-left__single oil">Предпродажная подготовка</div>
                            <div class="main-content-left__single prise">1 год гарантии</div>
                            <div class="main-content-left__single maz">1 год помощи на дороге</div>
                            <div class="main-content-left__single calc">Спецпрограммы кредитования и страхования</div>
                        </div>
                        <div style="clear: both;"></div>
                        <!--<a href="/hpromise/avtomobili-s-probegom/?arrFilter_94=&arrFilter_32=&arrFilter_3=&arrFilter_4=&arrFilter_6=&arrFilter_36_MIN=0&arrFilter_36_MAX=3437000&arrFilter_16_MIN=2323&arrFilter_16_MAX=171017&arrFilter_14_MIN=2007&arrFilter_14_MAX=2015&arrFilter_8_MIN=1.4&arrFilter_8_MAX=5&arrFilter_21=2322626082&set_filter=#searchavto" class="go1">Выбрать автомобиль</a>-->
                        <a href="/hpromise/avtomobili-s-probegom#search-results" class="go1">Выбрать автомобиль</a>
                    </div>
                    <div class="main-content-righttop js-main-content-righttop" style="height: 380.5px; margin-bottom: -25px;">
                        <div class="main-content-side">
                            <div class="main-content__fich righttop-fich js-righttop-fich" style="background-size: 100%;"></div>
                            <div class="main-content__fich2 righttop-fich2 js-righttop-fich2" style="right: -164px;"></div>
                            <div class="main-content-fix">
                                <div class="main-content__title">Хочу купить<br>автомобиль<br>с пробегом</div>
                                <a href="/hpromise/avtomobili-s-probegom" class="main-content__text righttop-text">Узнать больше о преимуществах<br>H-Promise</a>
                            </div>
                            <a href="/hpromise/avtomobili-s-probegom" class="go2">Найти автомобиль</a>
                        </div>
                    </div>
                    <div class="main-content-rightbottom js-main-content-rightbottom" style="height: 380.5px; margin-bottom: -25px;">
                        <div class="main-content-side js-main-content-side-rightbottom">
                            <div class="main-content__fich rightbottom-fich js-rightbottom-fich" style="background-size: 100%;"></div>
                            <div class="main-content__fich2 rightbottom-fich2 js-rightbottom-fich2" style="right: -164px;"></div>
                            <div class="main-content-fix">
                                <div class="main-content__title">Хочу продать<br>автомобиль</div>
                                <a href="/hpromise/trade-in" class="main-content__text rightbottom-text">Узнать больше о программе лояльности Hyundai</a>
                            </div>
                            <a href="/hpromise/trade-in" class="go3">Trade-In</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-form js-hidden-form hide-this" style="display: none">
                <!-- forms here -->
                <div class="js-car-order-form"></div>
                <div class="js-car-question-form"></div>
                <div class="js-car-testdrive-form"></div>
            </div>
            <div class="hidden-counters hide-this" style="display: none">
                <!-- counters here -->
            </div>

        </div>
    </div>

<script>

    //main page animate
    $('.js-main-content-righttop').mouseover(function(){
        $('.js-righttop-fich').stop().animate({backgroundSize: '52px'}, 150);
        $('.js-righttop-fich2').stop().animate({right: '-9px'}, 150);
    }).mouseout(function(){
        $('.js-righttop-fich').stop().animate({backgroundSize: '100%'}, 150);
        $('.js-righttop-fich2').stop().animate({right: '-164px'}, 150);
    });
    $('.js-main-content-rightbottom').mouseover(function(){
        $('.js-rightbottom-fich').stop().animate({backgroundSize: '52px'}, 150);
        $('.js-rightbottom-fich2').stop().animate({right: '0'}, 150);
    }).mouseout(function(){
        $('.js-rightbottom-fich').stop().animate({backgroundSize: '100%'}, 150);
        $('.js-rightbottom-fich2').stop().animate({right: '-164px'}, 150);
    });

</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>