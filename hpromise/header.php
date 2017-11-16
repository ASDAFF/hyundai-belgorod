<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="https://hpromise.hyundai.ru/local/templates/hyundai_2017/favicon.ico">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        // На случай, если code.jquery.com отвалиться...
        if (typeof(jQuery) == 'undefined') {
            document.write('<'+'script src="' + '/bitrix/templates/common/js/jquery-1.11.3.min.js' + '">'+'</'+'script>');
        }
    </script>


    <script src="/hpromise/js/ion.rangeSlider.min.js"></script>
    <link href="/hpromise/css/ion.rangeSlider.css" rel="stylesheet">
    <script src="/hpromise/js/slick.min.js"></script>
    <link href="/hpromise/css/slick.css" rel="stylesheet">


    <link rel="stylesheet" href="/hpromise/css/jquery.mCustomScrollbar.min.css" />
    <script src="/hpromise/js/jquery.mousewheel.min.js"></script>
    <script src="/hpromise/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <link href="/hpromise/css/kernel_main.css?150660253348075" type="text/css"  rel="stylesheet" />
    <link href="/hpromise/css/template_css.css" type="text/css"  data-template-style="true"  rel="stylesheet" />




    <script type="text/javascript" src="/hpromise/js/kernel_main.js?1506602533268079"></script>


    <script src="/hpromise/js/popup.js?v=1510585376"></script>
    <script src="/hpromise/js/custom_form_fields.js?v=1510585376"></script>
    <script src="/hpromise/js/hpromise_view.js?v=1510585376"></script>
    <script src="/hpromise/js/common.js?v=1510585376"></script>

    <link href="/hpromise/css/small_desk.css?v=1510585376" rel="stylesheet">
    <link href="/hpromise/css/tablet.css?v=1510585376" rel="stylesheet">
    <link href="/hpromise/css/mobile.css?v=1510585376" rel="stylesheet">
    <link href="/hpromise/css/zing.css" rel="stylesheet">



</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="wrapper">
    <div class="head_wrap_border">
        <header class="nblock">
            <a href="/" class="header-logo"></a>
            <a href="/" class="header-logooff"></a>
            <ul class="topnav">
                <li><a href="/hpromise/trade-in/">HYUNDAI TRADE-IN</a></li>
                <li><a href="/hpromise/avtomobili-s-probegom/">Автомобили с пробегом</a></li>
            </ul>

            <div class="compare_btns">
                <a href="?action=DELETE_FROM_COMPARE_LIST&id=0" class="clear_compare"></a>
                <a href="/hpromise/avtomobili-s-probegom/" class="compare_add"></a>
            </div>

            <button type="button" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="http://www.hyundai.ru" class="top_mob_offsite">WWW.HYUNDAI.RU</a>
            <div class="top_mob_social">
                <a target="_blank" href="https://vk.com/HyundaiRussia" class="footer-social-vk"></a>
                <a target="_blank" href="https://www.facebook.com/HyundaiRussia" class="footer-social-fb"></a>
                <a target="_blank" href="https://www.instagram.com/HyundaiRussia/" class="footer-social-ins"></a>
                <a target="_blank" href="https://twitter.com/HyundaiRussia" class="footer-social-tw"></a>
            </div>

        </header>
        <div class="clearfix"></div>
    </div>


