<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
<div id="content">

    <div class="content_wrap" style="margin-top: 70px">

        <div class="f-row-item w-40">
            <img src="/img/404.png">
        </div>

        <div class="f-row-item w-60">
            <div class="h1-404">
                Извините ошибка
            </div>
            <div class="h2-404">
                запрос не найден!
            </div>

            <div class="h3-404">
                <ul>
                    <li>Перейти на <a href="/">главную страницу</a></li>
                    <li>Посмотреть <a href="/">модельный ряд</a></li>
                    <li>Совершить <a href="/">покупку</a></li>
                    <li id="order-phone">Заказать обратный звонок</li>
                </ul>
            </div>
            <div class="h3-404" style="margin-bottom: 70px;">
                <div class="news-line"></div>
                <ul style="margin-top:30px">
                    <li>Ринг Авто — +7 473 347-77-77</li>
                </ul>
            </div>

        </div>

    </div>

    <div class="news-line"></div>

    <div class="news-center">
        <div class="setting-offer">
            <h1 style="color: #1D88CD;font-size: 30px;font-weight: 100;font-family: 'HyundaiSans',sans-serif;">Автомобили в наличии с птс</h1>
        </div>
    </div>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "offers_page",
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "CACHE_FILTER" => "N",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
                0 => "",
                1 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "8",
            "IBLOCK_TYPE" => "products",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "20",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Новости",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "PREVIEW_TRUNCATE_LEN" => "",
            "PROPERTY_CODE" => array(
                0 => "CREDIT",
                1 => "NEW_PRICE",
                2 => "OLD_PRICE",
                3 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "COMPONENT_TEMPLATE" => "offers_home"
        ),
        false
    );?>

</div>

<script>
    $(function(){
        $('#order-phone').click(function(){
            console.log(1);
            $('.stream-wood-btn').submit();
        });
    });
</script>


<style>
    #footer{
        background: #f5f5f5;
        margin-top: 100px;
    }
    .offers{
        background: #fff;
    }
   body.main #wrapper{
        background: #fff!important;
    }
#content{
    background: #fff;
}
.w-40{
    width: 40%;
    position: relative;
}
.w-60{
    width: 60%;
    text-align: center;
}

.w-40 img{
    position: absolute;
    max-width: 700px;
    top: 25px;
    left: -85px;
}
.h1-404{
    color: #1D88CD;
    font-size: 65px;
    font-family: 'HyundaiSans',sans-serif;
    }
.h2-404{
    font-size: 45px;
    color: #888888;
    font-family: 'HyundaiSans',sans-serif;
}
.h3-404{
    text-align: left;
    margin-bottom: 130px;
    font-family: 'HyundaiSans',sans-serif;
}
.h3-404 ul{
    margin-left: 130px;
    font-size: 20px;
    color: #888888;
    margin-top: 60px;
    line-height: 35px;
}
.h3-404 ul li a{
    color: #888888;
    text-decoration: underline;
    font-family: 'HyundaiSans',sans-serif;
}
.h3-404 ul li#order-phone{
    color: #1D88CD;
    cursor: pointer;
}


</style>
<?


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>