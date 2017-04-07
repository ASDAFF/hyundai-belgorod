<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("about");
?>
    <link href="http://www.hyundai-rolf.ru/hpromise/css/design.css" rel="stylesheet">

<style>
    h1{
        font-family: "HyundaiSans",sans-serif!important;
    }
    p{
        font-family: "HyundaiSans",sans-serif!important;
    }
    a{
        font-family: "HyundaiSans",sans-serif!important;
    }

</style>

    <div class="main-content" style="margin-top: 61px">
        <div class="main-content-left" style="height: 797px;">
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
            <a href="/hpromise/avtomobili-s-probegom" class="go1">Выбрать автомобиль</a>
        </div>
        <div class="main-content-righttop js-main-content-righttop" style="height: 398.5px;">
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
        <div class="main-content-rightbottom js-main-content-rightbottom" style="height: 398.5px;">
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