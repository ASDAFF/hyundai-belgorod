<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("configurator");
?>

    <div class="container">

        <div class="content_wrap">

    <iframe src="http://configurator.hyundai.ru/configurator" width="940" height="1060" scrolling="yes" align="left" id="configurator">
        configurator.hyundai.ru
    </iframe>

        </div>
    </div>
    <script>
     $(function(){

         $('iframe html').attr('style','background: #f5f5f5 !important');

     });

    </script>
    <div class="clear"></div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>