<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("configurator");
?>


    <link type="text/css" href="https://www.hyundai.ru/config_src/dist/static/css/main.css?ver=1537874648" rel="stylesheet" />
    <link type="text/css" href="https://www.hyundai.ru/assets/css/config_layout.css" rel="stylesheet" />


    <style>
       #panel{
           display: none;
       }

       .header{
           position: unset;
           width: unset;
           height: unset;
           margin-left: unset;
           margin: unset;
       }

       body.main, body.main #wrapper {
           background: #FFF !important;
       }
       .ranger-input {
           border: none!important;
           font: 15px HyundaiSansHead,Hevetica,Arial,sans-serif!important;
       }

       .header-primary{
           max-width: none;
       }

       .car-list{
           padding-top: inherit;
       }
    </style>

    <main class="main main-configurator-holder">
        <div id="app"></div>
    </main>

    <script type="text/javascript" src="http://www.hyundai.ru/config_src/dist_dealers/static/js/main.js?ver=25.07.2018"></script>
    <script type="text/javascript" src="js/config_layout.js"></script>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>