<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
$APPLICATION->SetTitle("");
?>
<?
$APPLICATION->IncludeFile("/hpromise/header.php", Array(), Array(
    "MODE"      => "html",
    "NAME"      => "Редактирование включаемой области раздела",
    "TEMPLATE"  => ""
));
?>
<script>
    $(document).ready(function(){
        $('body').addClass('autos');
    });
</script>


    <div class="cont">
        <div class="nblock">
            <div class="main_slick">
                <span class="slick-prev slick-arrow" style="display: block;">Prev</span>
                <span class="slick-next slick-arrow" style="display: block;">Next</span>
                <div class="main_slick_item full_bg">
                    <div class="left_half">
                        <div class="slick_content">
                            <span class="small_text">Продать автомобиль с пробегом</span>
                            <div class="clearfix"></div>
                            <img class="slick_img" src="img/trade_in_text.png" alt="" />
                            <span class="big_text">hyundai<br />TRADE-IN</span>
                        </div>
                    </div>
                    <div class="left_half hover">
                        <div class="slick_content img_bg">
                            <span class="small_text">Продать автомобиль с пробегом</span>
                            <div class="clearfix"></div>
                            <span class="big_text">hyundai<br />TRADE-IN</span>
                        </div>
                    </div>
                    <!-- -->
                    <div class="right_half">
                        <div class="slick_content">
                            <img class="slick_img" src="img/h_promise_text.png" alt="" />
                            <span class="big_text">H-Promise</span>
                            <div class="clearfix"></div>
                            <span class="small_text">Купить автомобиль с пробегом</span>
                        </div>
                    </div>
                    <div class="right_half hover">
                        <div class="slick_bg"></div>
                        <div class="slick_content img_bg">
                            <span class="big_text">H-Promise</span>
                            <div class="clearfix"></div>
                            <span class="small_text">Купить автомобиль с пробегом</span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('body').addClass('main');
        });
    </script>
    <div class="clearfix"></div>


    <?
    $APPLICATION->IncludeFile("/hpromise/footer.php", Array(), Array(
        "MODE"      => "html",
        "NAME"      => "Редактирование включаемой области раздела",
        "TEMPLATE"  => ""
    ));
    ?>
