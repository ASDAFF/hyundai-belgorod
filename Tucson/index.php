<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Tucson");
?>





    <!--     <script type='text/javascript' src="/media/js/sc_jquery_ui_custom_min.js"></script> -->
    <script type='text/javascript' src="/media/js/sc_jquery_ui_ipad.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_wwpip_flat.js"></script>
    <link rel="stylesheet" type="text/css" href="/media/css_new/css_style_ru.css"/>
    <script type='text/javascript' src="/media/js/sc_ru_google.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_gt_default.js"></script>

    <script>
        function cubeMotionInit() {

        }

        function cubeMotionJS() {

        }
    </script>
    <!-- POPUP VIDEO CONTAINER -->
    <style type="text/css">
        .video_butt_popup_on_slider {
            background: transparent;
            height: 1px;
            width: 1px;
            position: absolute;
            z-index: 0;
            margin: auto auto;
            left: 0;
            bottom: 0;
            right: 0;
            top: 0;
        }
        .video_link {
            width: 100%;
            height: 100%;
            display: block;
            background: url('media/images/flat/play-arrow.png') center center no-repeat;
            position: absolute;
            top: 0;
            left: 0;
        }
        .video_link:focus {
            background: url('media/images/flat/play-arrow.png') center center no-repeat;
        }
        .videoPopup {
            display: none;
            top: 0px;
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 1100 !important;
            background-color: rgba(0, 0, 0, 0.8);
        }
        .videoPopup .closeButton {
            color: white;
            font-size: 60px;
            font-weight: 100;
            position: absolute;
            right: -60px;
            text-decoration: none;
            top: 15px;
        }
        .videoPopup .videoContainer {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        .videoPopup .videoContainer iframe,
        .videoPopup .videoContainer object,
        .videoPopup .videoContainer embed {
            max-width: 100%;
        }
        .videoPopup .videoContainer iframe {
            position: relative;
            top: 50px;
            height: 560px;
        }
        @media only screen and (max-width: 1000px) {
            .videoPopup .closeButton {
                right: 0%;
            }
        }
    </style>

    <input type="hidden" name="irCalName" id="irCalName" value="Tucson | HYUNDAI - NEW THINKING NEW POSSIBILITIES "/>
    <input type="hidden" name="irCalDesc" id="irCalDesc" value="Hyundai motor company - Hyundai Tucson highlights, exterior, interior, performance, safety, convenience, specifications, accessories, reviews"/>
    <input type="hidden" name="irCalLink" id="irCalLink" value="/media/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdez/~edisp/hw033895.jpg"/>
    <input type="hidden" name="resetImage" id="resetImage" value="aaa"/>
    <input type="hidden" name="carName" id="carName" value=""/>
    <input type="hidden" name="NameImage" id="NameImage" value=""/>
    <input type="hidden" name="imageNum" id="imageNum" value=""/>
    <input type="hidden" name="lastNum" id="lastNum" value=""/>

    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/ru_RU/all.js"/>
    <script type="text/javascript" src="/media/js/sc_json2.js"></script>
    <script type="text/javascript" src="/media/js/sc_support_ru.js"></script>
    <script type="text/javascript">
        FB.init({
            appId: '460620957307897', cookie: true,
            status: true, xfbml: true
        });
    </script>
    <script type="text/javascript">

        FB.Event.subscribe('edge.create', function (href, response) {
            if (href) {
                SnsSupport.updateLike(href, response._attr.ref);
            } else {
                $('#fanpageLike').hide();
                hideTranslucency();
                Comment.sendComment(Comment.snsObject);
            }
        });

        FB.Event.subscribe('edge.remove', function (href, response) {
            if (href) {
                SnsSupport.updateLike(href, response._attr.ref);
            } else {
                $('#fanpageLike').hide();
                hideTranslucency();
                Comment.sendComment(Comment.snsObject);
            }
        });

    </script>

    <script type="text/javascript">
        function sharefacebook(url) {
            var bothImage = document.getElementById("resetImage").value;
            if (bothImage == "aaa") {
                var share = {

                    method: 'feed',

                    link: url,

                    name: document.getElementById("irCalName").value,

                    description: document.getElementById("irCalDesc").value,

                    picture: document.getElementById("irCalLink").value

                };
            } else {
                var share = {

                    method: 'feed',

                    link: url + "?Cube=gallery&gallery=" + document.getElementById("resetImage").value + "&name=" + document.getElementById("carName").value + "&nameI=" + document.getElementById("NameImage").value + "&num=" + document.getElementById("imageNum").value + "&Inum=" + document.getElementById("lastNum").value,

                    name: document.getElementById("irCalName").value,

                    description: document.getElementById("irCalDesc").value,

                    picture: "http://" + document.domain + document.getElementById("resetImage").value

                };
            }
            FB.ui(share)
        }
    </script>

    <script type='text/javascript'>
        //
        var country = "ru";
        var cubeList = new Array();
        var firstCube = 2;
        cubeList = ["home", "gallery", "mostlike"];
        //</script>

    <script type="text/javascript" src="/media/js/wcm.consumption.js"></script>

    <script language="javascript">
        WCM.consumptionContext = ""
        WCM.contributionContext = "/wcm-contrib"
        WCM.designContext = "/wcm-design"
        WCM.sitePath = "/Tucson"
    </script>

    <script>var firstCube = 1;</script>

    <link rel="stylesheet" type="text/css" href="/media/css_new/styles_RU_.css"/>

    <link rel="stylesheet" type="text/css" href="/media/css_new/pip_flat_TL.css"/>

    <script type="text/javascript" src="/media/js_new/pip_flat_TL.js"></script>

    <style>
        /* parallax bg */
        .parallax1 {background:url('/media/images/flat/TL/parallax1.jpg') no-repeat fixed 50% 50% #e3e3e3;}/* 2015-07-31 */
        .parallax2 {background:url('/media/images/flat/TL/parallax2.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax3 {background:url('/media/images/flat/TL/parallax3.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax4 {background:url('/media/images/flat/TL/parallax4.jpg') no-repeat fixed 50% 50% #fff;}
        .parallax5 {background:url('/media/images/flat/TL/parallax5.jpg') no-repeat fixed 50% 50% #fff;}

        body.mobile .parallax { height:450px;}
        body.mobile .parallax1 {background:url('/media/images/flat/TL/parallax1_mobile.jpg') center top no-repeat #e3e3e3;}/* 2015-07-31 */
        body.mobile .parallax2 {background:url('/media/images/flat/TL/parallax2_mobile.jpg') center top no-repeat #fff;}
        body.mobile .parallax3 {background:url('/media/images/flat/TL/parallax3_mobile.jpg') center top no-repeat #fff;}
        body.mobile .parallax4 {background:url('/media/images/flat/TL/parallax4_mobile.jpg') center top no-repeat #fff;}
        body.mobile .parallax5 {background:url('/media/images/flat/TL/parallax5_mobile.jpg') center top no-repeat #fff;}
    </style>
    <!-- cache performance graphs -->
    <div style="display: none;">
        <img src="/media/images/flat/TL/performance_graph_1.gif">
        <img src="/media/images/flat/TL/performance_graph_1_text.png">
        <img src="/media/images/flat/TL/performance_graph_2.gif">
        <img src="/media/images/flat/TL/performance_graph_2_text.png">
        <img src="/media/images/flat/TL/performance_graph_3.gif">
        <img src="/media/images/flat/TL/performance_graph_3_text.png">
        <img src="/media/images/flat/TL/performance_graph_4.gif">
        <img src="/media/images/flat/TL/performance_graph_4_text.png">
    </div>
    <div class="wrap" id="wrap">

        <div class="videoPopup">
            <div class="videoContainer">
                <iframe class="videoP" width="100%" height="" src="" allowfullscreen></iframe>
                <a class="closeButton" onclick="videoClose();" href="javascript:;" title="Закрыть">&times;</a>
            </div>
        </div>

        <script type="text/javascript">
            var videoSource = $(".videoP"),
                videoPopup  = $(".videoPopup");
            $(document).on('click', '.videoPopup', function(event) {
                videoClose();
                event.stopImmediatePropagation();
            })
            $(document).on('click', ".video_link", function(e){
                e.preventDefault();
                this1 = $(this).index();
                oSrc = $(this).attr('data-src');
                videoSource.attr("src", oSrc);
                videoPopup.fadeIn();
                console.log(videoPopup);
                console.log(videoSource);
                console.log(oSrc);
            });

            function videoClose(){
                videoSource.attr("src",'');
                videoPopup.fadeOut();
            }
        </script>

        <div id="layer_myplace" class="df_popup"></div>
        <div class="objects_box">&nbsp;</div>
        <div id="layer_gallery" class="layer_gallery">&nbsp;</div>
        <div id="layer_experience_panorama" class="layer_experience_panorama">&nbsp;</div>
        <div id="layer_experience" class="layer_experience">
            <script src="/media/js/json2.js"/>
            <wcm:url type="resource" url="SC_SUPPORT_RU" var="support"/>
            <script type="text/javascript">

                function clearExperienceStats() {
                    $("#experienceGraph").empty();
                    $("#trimLabel").empty();
                    $("#interiorRank").empty();
                    $("#exteriorRank").empty();
                }
                function createColor(elementID, rank) {
                    $.each(rank, function (i, obj) {
                        $(elementID).append('<li><span>' + obj.percent + '%</span><br /><img src="' + obj.value + '" alt="" /></li>');
                    });
                }
                function createTrimGraph(trimRank) {

                    var trimSize = $(trimRank).size();

                    var bestIndex = 0;

                    $.each(trimRank, function (i, obj) {
                            var h = (obj.percent / 100) * 188;
                            ++bestIndex;
                            if (trimSize == 2 && i == 1) {
                                bestIndex += 1;
                            }
                            $("#experienceGraph").append('<div class="best' + bestIndex + '" style="height:' + h + 'px">&nbsp;</div>');
                            $("#trimLabel").append('<li class="best' + bestIndex + '" style="height:' + h + 'px;">' +
                                '<span class="percent">' + obj.percent + '%</span>' +
                                '<span class="name">' + decodeURIComponent(obj.value) + '</span>' +
                                '<span class="help"></span>' +
                                '</li>');
                        }
                    );
                }

                function createExperienceStats(data) {
                    if (data) {
                        clearExperienceStats();
                    } else {
                        Comment.hideLoadingImage("#experienceLoadingBox");
                        return false;
                    }
                    createTrimGraph(data.trimRank);
                    createColor("#interiorRank", data.interiorRank);
                    createColor("#exteriorRank", data.exteriorRank);
                    Comment.hideLoadingImage("#experienceLoadingBox");
                }

                function getExperienceStats() {

                    Comment.showLoadingImage("#experienceLoadingBox");

                    $.ajaxSetup({dataType: "json"});
                    var result = $.post(
                        "/media/ru/front/sns/getExperienceStats.do"
                        , {
                            wwn_country_code: $("#wwn_country_code").val(), modelCode: $("#modelCode").val()
                        }
                        , function (data, textStatus) {
                            createExperienceStats(data);
                        }
                    );
                    result.error(function (error) {
                        Comment.ajaxError(error);
                    });

                    result.complete(function (co) {
                        Comment.hideLoadingImage("#experienceLoadingBox");
                    });
                }

                function popupExperienceStats() {
                    var w = parseInt(($(window).width() - 600) / 2);
                    $(".layer_experience").css("left", w).fadeIn();
                    getExperienceStats();
                }
            </script>

            <div class="layer_close">
                <!--         <a href="#"><img src="/media/img/btn_close_layer_cb.gif" alt="close"/></a><br/> -->
            </div>
            <div class="title">
                <!--         <img src="/media/img/layer_experience_title.png" alt="What people like the best option?"/><br/> -->
            </div>
            <div class="trim">
                <div class="subtitle_trim">
                    <!--             <img src="/media/img/layer_experience_title_trim.gif" alt="Trim"/><br/> -->
                </div>
                <div class="graph" id="experienceGraph">
                    <c:forEach var="trim" items="" varStatus="status">
                        <c:set var="height" value="0.0"/>
                        <c:choose>
                            <c:when test="false">
                                <div class="best1" style="height:px">&nbsp;</div>
                            </c:when>
                            <c:otherwise>
                                <div class="best" style="height:px">&nbsp;</div>
                            </c:otherwise>
                        </c:choose>
                    </c:forEach>
                </div>
                <ul class="trim_best3" id="trimLabel">
                    <c:forEach var="trim" items="" varStatus="status">
                        <c:set var="height" value="0.0"/>
                        <c:choose>
                            <c:when test="false">
                                <li class="best1" style="height:px;">
                                    <span class="percent">%</span>
                                    <span class="name"></span>
                                    <span class="help"></span>
                                </li>
                            </c:when>
                            <c:otherwise>
                                <li class="best" style="height:px;">
                                    <span class="percent">%</span>
                                    <span class="name"></span>
                                    <span class="help"></span>
                                </li>
                            </c:otherwise>
                        </c:choose>
                    </c:forEach>
                </ul>
            </div>
            <div class="color">
                <div class="subtitle">
                    <!--             <img src="/media/img/layer_experience_title_exterior.gif" alt="Exterior Color"/><br/> -->
                </div>
                <div class="colorlist">
                    <ul id="exteriorRank">
                        <c:forEach var="exterior" items="" varStatus="status">
                            <li><span>%</span><br/><img src="" alt=""/></li>
                        </c:forEach>
                    </ul>
                </div>
                <div class="subtitle">
                    <!--             <img src="/media/img/layer_experience_title_interior.gif" alt="Interior Covering"/><br/> -->
                </div>
                <div class="colorlist">
                    <ul id="interiorRank">
                        <c:forEach var="interior" items="" varStatus="status">
                            <li><span>%</span><br/><img src="" alt=""/></li>
                        </c:forEach>
                    </ul>
                </div>
            </div>
            <div class="loadingbox" id="experienceLoadingBox">
                <img src="/media/img/loading.gif" alt="loading" style="display:none"/><br/>
            </div>
        </div>



        <div class="container">
            <div class="cubebox" id="cubebox">
                <div class="cubelist">
                    <div class="items">
                        <div class="item">
                            <div class="item_wrap"><!-- new template - add div -->
                                <div class="main mkv">
                                    <div class="title">
                                        <strong>НОВЫЙ TUCSON - <br> РЕШАЙСЯ!</strong>
                                    </div>
                                    <div class="title-price">
                                        <? price_to_url($APPLICATION->GetCurPage()); ?>
                                    </div>
                                    <div class="title-price">
                                        <strong>КАСКО:</strong>
                                        <div class="offer-price-count"><a target="_blank" href="/promo/tucson_special_offer">3,7%</a><!-- <sup>**</sup> --></div>
                                    </div>
                                    <div class="award">
                                        <img alt="IIHS TSP+ 2015" src="/media/images/flat/TL/2015_TSPplus_badge_box.png">
                                        <span style="line-height: 9px; font-size: 10px;">
                                            Новый Hyundai Tucson, получил высшую оценку в рейтинге безопасности американского Страхового института безопасности дорожного движения
                                        </span>
                                    </div>
                                </div>
                                <img alt="Агрессивные черты Hyundai Tucson" class="car" src="/media/images/flat/TL/main_car.png">
                                <div class="facebook_like">
                                    <iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Ftesturl.com&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowTransparency="true"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_wrap"><!-- new template - add div -->
                                <div class="cube_title">
                                    <!-- 								<img src="/media/images/flat/cubetitle_experience.png" alt="" /><br /> -->
                                </div>
                                <div class="experience_category">&nbsp;</div>
                                <div class="experience_panoramabox exterior">&nbsp;</div>
                                <div class="experience_panoramabox interior">&nbsp;</div>
                                <div class="experience_seemore">
                                    <!-- 								<img src="/media/images/gt/cube/experience_bestoption.png" alt="What people like the best option?" /><br /> -->
                                    <div class="button">
                                        <a href="#"><img src="/media/images/gt/cube/btn_seedetail.png" alt="See Detail" /></a><br />
                                    </div>
                                </div>
                                <div class="experience_large">&nbsp;</div>
                                <div class="experience_option">&nbsp;</div>
                                <div class="experience_desc">Реальный вид автомобиля может отличаться от изображения</div>
                                <div class="cube_shadow_interior"><div>
                                        <!-- 								<img src="/media/images/common/bg/bg_cube_experience_interior.png" alt="" /> -->
                                    </div></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_wrap"><!-- new template - add div -->
                                <div class="cube_title">
                                    <!-- 								<img src="/media/images/flat/cubetitle_gallery.png" alt="" /><br /> -->
                                </div>
                                <div class="gallerybox">&nbsp;</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_wrap"><!-- new template - add div -->
                                <div class="cube_title">
                                    <!-- 								<img src="/media/images/flat/cubetitle_mostlike.png" alt="" /><br /> -->
                                </div>
                                <div class="mostlike_best3">&nbsp;</div>
                                <div class="mostlike_option">
                                    <div class="carname">&nbsp;</div>
                                    <div class="option">&nbsp;</div>
                                    <div class="car_image">&nbsp;</div>
                                    <div class="button">&nbsp;</div>
                                    <div class="like">&nbsp;</div>
                                </div>
                                <div class="cube_shadow2"><div>
                                        <!-- 								<img src="/media/images/common/bg/bg_cube_shadow2.png" alt="" /> -->
                                    </div></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item_wrap"><!-- new template - add div -->
                                <div class="cube_title">
                                    <!-- 								<img src="/media/images/flat/cubetitle_talkntalk.png" alt="" /><br /> -->
                                </div>
                                <div class="talkntalk_form">
                                    <form name="__" method="post" action="../__">
                                        <div class="social">
                                            <!-- 										<a href="#"><img src="/media/images/common/btn/btn_talkntalk_facebook_off.gif" alt="facebook" /></a><a href="#"><img src="/media/images/common/btn/btn_talkntalk_twitter_off.gif" alt="twitter" /></a><br /> -->
                                        </div>
                                        <div class="input">
                                            <div><textarea>What's on your mind?</textarea></div>
                                        </div>
                                        <!-- 									<input type="image" src="/media/images/gt/btn/btn_send.gif" alt="Send" /> -->
                                    </form>
                                    <div class="morecomments">
                                        <!-- 									<a href="#"><img src="/media/images/gt/btn/btn_seemorecomments.gif" alt="See More" /></a><br /> -->
                                    </div>
                                </div>
                                <div class="talkntalk_list">
                                    <ul>
                                        <li class="comment1">
                                            <span class="comment"></span>
                                            <span class="name"></span>
                                        </li>
                                        <li class="comment2">
                                            <span class="comment"></span>
                                            <span class="name"></span>
                                        </li>
                                        <li class="comment3">
                                            <span class="comment"></span>
                                            <span class="name"></span>
                                        </li>
                                        <li class="comment4">
                                            <span class="comment"></span>
                                            <span class="name"></span>
                                        </li>
                                        <li class="comment5">
                                            <span class="comment"></span>
                                            <span class="name"></span>
                                        </li>
                                        <li class="comment6">
                                            <span class="comment"></span>
                                            <span class="name"></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="loadingbox">
                                    <!-- 								<img src="/media/images/gt/loading.gif" alt="loading" /><br /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="prevbtn">
                    <!-- 				<a href="#"><img src="/media/images/common/bg/blank.gif" alt="previous" /></a><br /> -->
                </div>
                <div class="nextbtn">
                    <!-- 				<a href="#"><img src="/media/images/common/bg/blank.gif" alt="next" /></a><br /> -->
                </div>
                <div class="cube">&nbsp;</div>
            </div>
            <!-- new template - #floating_cubemenu -->

            <!-- // new template -->
            <div id="contents_highlights" class="contents_highlights pip">
                <!-- new template -->
                <h2 class="hidden">ОСНОВНЫЕ ЧЕРТЫ</h2>
                <div class="pip_cont">
                    <div class="text_play">
                        <div class="text1">ДВИЖИМЫЙ СТРАСТЬЮ.<br />МОЩЬ, КОТОРУЮ СТОИТ ИСПЫТАТЬ</div>
                        <div class="text2">Гармоничный внешний вид и невероятная мощь внутри. <br> Почувствуйте мощь нашего нового компактного городского кроссовера, оцените улучшенную стабильность и динамику, которые придутся кстати во время любого городского приключения.</div>
                    </div>
                    <div class="main_wrap">
                        <div class="robust_on_style">
                            <div class="subject">
                                <h3>УСОВЕРШЕНСТВОВАННЫЙ ДИЗАЙН, ВЫПОЛНЕННЫЙ В КОНЦЕПЦИИ «СТРУЯЩИХСЯ ЛИНИЙ»</h3>
                                <p>Смелый и утонченный. Рельефный дизайн автомобиля представляет концепцию <br> «Струящиеся линии 2.0».</p>
                            </div>
                            <div class="car">
                                <img src="/media/images/flat/TL/highlight_style_car.png" data-url="/media/images/flat/TL/highlight_style_car_mobile.png" alt="" />
                            </div>
                            <div class="list">
                                <ul>
                                    <li class="thumb1 front">
                                        <a href="#">
										<span class="img_wrap">
											<img src="/media/images/flat/TL/highlight_style_list_1.jpg" data-url="/media/images/flat/TL/highlight_style_list_1_mobile.jpg" alt="Оформление передних фар Tucson" width="410" height="360" />
											<span class="dimd"></span>
										</span>
                                            <span class="cover"></span>
                                        </a>
                                    </li>
                                    <li class="thumb2 side">
                                        <a href="#">
										<span class="img_wrap">
											<img src="/media/images/flat/TL/highlight_style_list_2.jpg" data-url="/media/images/flat/TL/highlight_style_list_2_mobile.jpg" alt="Светодиодные фонари комбинированного типа" width="410" height="360" />
											<span class="dimd"></span>
										</span>
                                            <span class="cover"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="view">
                                <ul>
                                    <li class="thumb1 front">
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        <div class="img"><img src="/media/images/flat/TL/highlight_style_view_1.jpg" data-url="/media/images/flat/TL/highlight_style_view_1_mobile.jpg" width="1280" height="360" alt="Стильные черты Hyundai Tucson"></div>
                                        <div class="txt">
                                            <strong>Невероятно смелый <br> и спортивный</strong>
                                            Классическая шестиугольная решетка радиатора <br> Hyundai в сочетании с высокотехнологичными <br> фарами и рельефным бампером придают <br> автомобилю агрессивный и смелый <br> внешний вид.
                                        </div>
                                    </li>
                                    <li class="thumb2 side">
                                        <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                        <div class="img"><img src="/media/images/flat/TL/highlight_style_view_2.jpg" data-url="/media/images/flat/TL/highlight_style_view_2_mobile.jpg" width="1280" height="360" alt="Повышенная проходимость Hyundai Tucson"></div>
                                        <div class="txt">
                                            <strong>Спортивный <br>и стремительный</strong>
                                            Узнаваемые черты, яркая спортивная внешность автомобиля <br>гармонично сочетаются с функциональностью, <br>стабильностью и изяществом.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="highlight_design">
                            <div class="subject">
                                <h3>Аэродинамический дизайн</h3>
                                <p>
                                    Новый Tucson с оптимизированной конструкцией корпуса и устойчивостью на высоких скоростях является симбиозом последних инженерных решений и изящного дизайна нового поколения, что обеспечивает ни с чем не сравнимое удовольствие от вождения. <br> Благодаря дизайну, выполненному в концепции «струящихся линий», улучшенному коэффициенту лобового сопротивления и другим характеристикам автомобиля Вы можете насладиться новым уровнем комфорта и уверенности вождения в любое время.
                                </p>
                            </div>
                            <div class="img_area">
                                <img src="/media/images/flat/TL/highlight_design.jpg" width="1280" height="640" alt="Обтекаемые изгибы линий кузова" />
                                <div class="txt_area">
                                    <strong class="txt1">Установлена накладка <br>на передний бампер</strong>
                                    <strong class="txt2">Уменьшен наклон <br>передней стойки</strong>
                                    <strong class="txt3">Установлены <br>аэродинамические пороги</strong>
                                    <strong class="txt4">Установлен <br>задний спойлер</strong>
                                </div>
                            </div>
                        </div>
                        <div class="highlight_function">
                            <div class="subject">
                                <h3>Умные решения, обеспечивающие функциональный комфорт</h3>
                                <p>
                                    Вам нужна помощь? Позвольте новому Tucson выполнить за Вас всю работу.<br> Электропривод двери багажника автоматически открывает доступ к отсеку, когда вы находитесь возле нее с ключ-картой более 3 секунд. <br>Кроме того, складывающиеся задние сиденья предоставляют Вам максимальное багажное пространство, которое Вы можете отрегулировать по своему усмотрению.
                                </p>
                            </div>
                            <div class="visual">
                                <img src="/media/images/flat/TL/highlight_function.jpg" width="940" height="523" alt="Вместительное багажное отделение" />
                            </div>
                            <div class="desc_icon_wrap">
                                <a href="#" class="desc_01"><span>more</span></a>
                                <a href="#" class="desc_02"><span>more</span></a>
                                <div class="desc_01">
                                    <strong>Электропривод двери багажника<br> с системой автоматического<br> открывания</strong>
                                </div>
                                <div class="desc_02">
                                    <strong>Складывающиеся<br>сиденья (тип 6:4)</strong>
                                </div>
                            </div>
                            <div class="desc_wrap">
                                <div class="desc_1">
                                    <img src="/media/images/flat/TL/highlight_function_img_01.png" width="249" height="249" alt="Автоматическое открытие багажного отсека" />
                                </div>
                                <div class="desc_2">
                                    <img src="/media/images/flat/TL/highlight_function_img_02.png" width="259" height="259" alt="Складываемый ряд задних сидений" />
                                </div>
                            </div>
                        </div>
                        <div class="highlight_twin">
                            <div class="left">
                                <div class="subject">
                                    <h3>Повышенная безопасность</h3>
                                    <p>
                                        Новые активные системы безопасности обеспечивают Tucson отличную защиту.
                                    </p>
                                </div>
                                <div class="image">
                                    <img src="/media/images/flat/TL/highlight_twin_01.jpg" width="640" height="866" alt="Высокий уровень безопасности" />
                                </div>
                            </div>
                            <div class="right">
                                <div class="subject">
                                    <h3>Двигатель T-GDi с рабочим объемом 1,6 л и 7-ступенчатой коробкой передач с двойным сцеплением</h3>
                                    <p>
                                        Двигатель T-GDi с рабочим объемом 1,6 л. и высокопроизводительная 7-ступенчатая коробка передач с двумя сцеплениями от Hyundai дарят новые ощущения от динамичного вождения, улучшают управляемость автомобиля и увеличивают эффективность расхода топлива.
                                    </p>
                                    <span class="caution">Данная КПП доступна в комплектации только с некоторыми типами двигателя.</span>
                                </div>
                                <div class="image">
                                    <img src="/media/images/flat/TL/highlight_twin_02.jpg" width="640" height="866" alt="Двигатель Hyundai Tucson" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contents_exterior" class="contents_exterior pip">
                <!-- new template -->
                <h2 class="hidden">ВНЕШНИЙ ВИД</h2>
                <div class="parallax parallax1"><div>ВНЕШНИЙ ВИД</div></div>
                <div class="pip_cont">
                    <div class="text_play">
                        <div class="text1">БОЛЬШЕ, ЧЕМ СПОРТ – <br>РОЖДЕН, ЧТОБЫ СТАТЬ РЕКОРДСМЕНОМ</div>
                        <div class="text2">
                            Ставшая фирменным знаком Hyundai гексагональная решетка радиатора, окруженная оригинальными светодиодными фарами и гармонирующая со струящимися горизонтальными линиями передней части корпуса <br>не только заявляет о смелом городском характере автомобиля, <br>но и раскрывает его спортивную мощь.
                        </div>
                    </div>
                    <div class="list_wrap">
                        <ul class="list">
                            <li class="front on"><a href="#"><span class="progress">&nbsp;</span><span class="txt">Вид спереди</span></a></li>
                            <li class="side"><a href="#"><span class="progress">&nbsp;</span><span class="txt">Вид сбоку</span></a></li>
                            <li class="rear"><a href="#"><span class="progress">&nbsp;</span><span class="txt">Вид сзади</span></a></li>
                        </ul>
                    </div>
                    <div class="view_wrap">
                        <div class="pos">
                            <ul class="view">
                                <li class="front">
                                    <div class="scene">
                                        <div class="car">
                                            <img src="/media/images/flat/TL/highlight_style_car.png" alt="Фото передней части Hyundai Tucson" />
                                            <div class="plus_wrap">
                                                <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Фары проекционного типа <br> со светодиодными лампами</span></span></div>
                                                <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Противотуманные фары со светодиодными <br> дневными ходовыми огнями</span></span></div>
                                                <div class="plus plus3 right"><a href="#"><span>more</span></a><span class="txt"><span>Решетка радиатора</span></span></div>
                                            </div>
                                        </div>
                                        <div class="sub_wrap">
                                            <ul>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_front_sub1_on.jpg" width="540" height="600" alt="Мощные лампы дневных фар" /></div>
                                                    <div class="txt">
                                                        <strong>Фары проекционного типа <br>со светодиодными лампами</strong>
                                                        Обеспечивающие прекрасную видимость многофункциональные светодиодные фары освещают еще больше пространства и делают внешний вид автомобиля более эффектным.
                                                        <div class="toggle on"><a href="#" class="toggle_off" data-img="/media/images/flat/TL/exterior_front_sub1.jpg">Выключить</a><!-- no space --><a href="#" class="toggle_on" data-img="/media/images/flat/TL/exterior_front_sub1_on.jpg">Включить</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_front_sub2.jpg" width="540" height="600" alt="Ходовые огни повышенной яркости" /></div>
                                                    <div class="txt">
                                                        <strong>Противотуманные фары со светодиодными <br> дневными ходовыми огнями</strong>
                                                        Светодиодные дневные ходовые огни придают автомобилю современный прогрессивный внешний вид, а интегрированные противотуманные фары обеспечат безопасное движение в любую погоду.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_front_sub3_chrome.jpg" width="540" height="600" alt="Ходовые огни повышенной яркости" /></div>
                                                    <div class="txt">
                                                        <strong>Решетка радиатора</strong>
                                                        Фирменная хромированная гексагональная решетка Hyundai добавляет уникальности изящному и динамичному дизайну автомобиля.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="side">
                                    <div class="scene">
                                        <div class="car">
                                            <img src="/media/images/flat/TL/exterior_car_side.png" alt="Струящиеся линии кузова" />
                                            <div class="plus_wrap">
                                                <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Панорамная крыша</span></span></div>
                                                <!-- <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Молдинг</span></span></div> -->
                                                <div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Диски</span></span></div>
                                            </div>
                                        </div>
                                        <div class="sub_wrap">
                                            <ul>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_side_sub1.jpg" width="540" height="600" alt="Стеклянная панорамная крыша" /></div>
                                                    <div class="txt">
                                                        <strong>Панорамная крыша</strong>
                                                        Панорамная крыша позволит вам получить настоящее удовольствие от езды: вы сможете насладиться естественным светом, свежим воздухом, почувствовать себя ближе к природе.
                                                    </div>
                                                </li>
                                                <!-- 											<li>
                                                                                                <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                                                                <div class="img"><img src="/media/images/flat/TL/exterior_side_sub2.jpg" width="540" height="600" alt="" /></div>
                                                                                                <div class="txt">
                                                                                                    <strong>Молдинг</strong>
                                                                                                    Tucson демонстрирует новый уровень дизайна благодаря изысканным, отточенным линям корпуса, которые подчеркивают его сильный, спортивный характер.
                                                                                                </div>
                                                                                            </li> -->
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_side_sub3.jpg" width="540" height="600" alt="Большой выбор литых дисков" /></div>
                                                    <div class="txt">
                                                        <strong>Диски</strong>
                                                        Продемонстрируйте чувство стиля, выбрав 16, 17 или 19-дюймовые легкосплавные диски.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="rear">
                                    <div class="scene">
                                        <div class="car">
                                            <img src="/media/images/flat/TL/exterior_car_rear.png" alt="Плавность линий Hyundai Tucson" />
                                            <div class="plus_wrap">
                                                <div class="plus plus1 left"><a href="#"><span>more</span></a><span class="txt"><span>Задние светодиодные фонари<br /> комбинированного типа</span></span></div>
                                                <div class="plus plus2 left"><a href="#"><span>more</span></a><span class="txt"><span>Двойной глушитель</span></span></div>
                                                <div class="plus plus3 left"><a href="#"><span>more</span></a><span class="txt"><span>Задняя защитная пластина</span></span></div>
                                            </div>
                                        </div>
                                        <div class="sub_wrap">
                                            <ul>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_rear_sub1_on.jpg" width="540" height="600" alt="Плавность линий заднего стоп-сигнала" /></div>
                                                    <div class="txt">
                                                        <strong>Задние светодиодные фонари <br>комбинированного типа</strong>
                                                        Задние светодиодные фонари комбинированного типа обязательно привлекут внимание благодаря сочетанию последних светодиодных технологий с футуристическим 3D-дизайном.
                                                        <div class="toggle on"><a href="#" class="toggle_off" data-img="/media/images/flat/TL/exterior_rear_sub1.jpg">Выключить</a><a href="#" class="toggle_on" data-img="/media/images/flat/TL/exterior_rear_sub1_on.jpg">Включить</a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_rear_sub2.jpg" width="540" height="600" alt="Двойная хромированная выхлопная труба" /></div>
                                                    <div class="txt">
                                                        <strong>Сдвоенные патрубки выхлопной системы</strong>
                                                        Пара сдвоенных трапециевидных патрубков выхлопной системы добавляет элегантности экстерьеру автомобиля.
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="close"><a href="#"><span>Закрыть</span></a></div>
                                                    <div class="img"><img src="/media/images/flat/TL/exterior_rear_sub3.jpg" width="540" height="600" alt="Линии заднего бампера" /></div>
                                                    <div class="txt">
                                                        <strong>Задняя защитная пластина</strong>
                                                        Мы уделяем внимание каждой детали, и задняя защитная пластина не только служит для безопасности, но и удачно дополняет экстерьер автомобиля.
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="morelist">
                    <ul class="clearfix">
                        <li>
						<span class="img">
							<img class="lazy" width="306" height="133" alt="Встроенные повторители поворотного сигнала" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_1.jpg" />
						</span>
						<span class="description">
							<strong>Наружные зеркала с указателями поворота</strong><br />
							Боковые указатели поворота, встроенные в корпуса зеркал, указывают другим водителям, в какую сторону Вы движетесь.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Штампованная колесная арка" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_2.jpg" /></span>
						<span class="description">
							<strong>Штампованная колесная арка</strong><br />
							Прямоугольная конфигурация колесных арок и двухцветный окрас делают внешний вид автомобиля еще более внушительным.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Пороги в спортивном стиле" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_3.jpg" /></span>
						<span class="description">
							<strong>Пороги</strong><br />
                            Пороги придают автомобилю спортивный внешний вид.</span>
                        </li>
                    </ul>
                    <ul class="clearfix">
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Задний стеклоочиститель с омывателем" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_4.jpg" /></span>
						<span class="description">
							<strong>Задний стеклоочиститель-омыватель</strong><br />
                            Установленный задний стеклоочиститель обеспечивает лучшую видимость через заднее стекло в ненастную погоду.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Задний спойлер со встроенным стоп-сигналом" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_5.jpg" /></span>
						<span class="description">
							<strong>Задний спойлер с высоко расположенным стоп-сигналом</strong><br />
							Новый Tucson оснащен задним аэродинамическим спойлером с высоко расположенным стоп-сигналом.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Задний бампер со светоотражателем" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/exterior_common_6.jpg" /></span>
						<span class="description">
							<strong>Светоотражатель заднего бампера</strong><br />
							Светоотражатель заднего бампера сочетает в себе функциональную красоту и практическую необходимость.
						</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="contents_interior" class="contents_interior pip">
                <!-- new template -->
                <h2 class="hidden">САЛОН</h2>
                <div class="parallax parallax2"><div>САЛОН</div></div>
                <div class="pip_cont">
                    <div class="text_play">
                        <div class="text1">КОМПЛЕКСНАЯ СИСТЕМА УПРАВЛЕНИЯ  ДЛЯ ВСЕОБЪЕМЛЮЩИХ ОЩУЩЕНИЙ</div>
                        <div class="text2">Новый Tucson детально проработан эргономически и призван максимизировать удовольствие от вождения.</div>
                    </div>
                    <div class="section1">
                        <div class="car"><!-- no lazyload-->
                            <img src="/media/images/flat/TL/interior_color_1.png" width="858" height="461" alt="Интерьер салона в бежевом варианте" />
                            <img src="/media/images/flat/TL/interior_color_2.png" width="858" height="461" alt="Интерьер салона в черном варианте" />
                            <img src="/media/images/flat/TL/interior_color_3.png" width="858" height="461" alt="Интерьер салона в сером варианте" />
                        </div>
                        <div class="color">
                            <div class="txt">ЦВЕТ СИДЕНИЙ</div>
                            <ul class="chip">
                                <li class="on"><a href="#"><img src="/media/images/flat/TL/interior_color_icon_1.png" alt="Бежевая обивка салона" /></a></li>
                                <li><a href="#"><img src="/media/images/flat/TL/interior_color_icon_2.png" alt="Черная обивка салона" /></a></li>
                            </ul>
                            <div class="details">
                                <ul class="detail detail1">
                                    <li class="color_detail1"><span>Кожа</span></li>
                                </ul>
                                <ul class="detail detail2">
                                    <li class="color_detail1"><span>Кожа</span></li>
                                </ul>
                                <ul class="detail detail3">
                                    <li class="color_detail1"><span>Кожа</span></li>
                                </ul>
                                <ul class="detail_txt">
                                    <li>Материал обивки сидений: <br>ткань или кожа, в зависимости от комплектации</li>
                                </ul>
                            </div>
                        </div>
                        <div class="features">
                            <strong>Внутреннее пространство</strong>
                            <p>
                                С его рельефным дизайном экстерьера и просторным салоном новый Tucson<br> представляет собой сочетание современных технологий с изящным оформлением, <br>конечная цель которого – Ваш комфорт.
                            </p>
                        </div>
                    </div>
                    <div class="section2">
                        <div class="scene_wrap">
                            <div class="scene_offset">
                                <div class="offset2">
                                    <div class="scene_cut">
                                        <div class="scene1">
                                            <div class="img">
                                                <img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_point_1.jpg" class="lazy" width="1280" height="600" alt="Фото панели Hyundai Tucson" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1"><a href="#">11</a></div>
                                                    <div class="plus plus2"><a href="#">12</a></div>
                                                    <div class="plus plus3"><a href="#">13</a></div>
                                                    <div class="plus plus4"><a href="#">14</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scene2">
                                            <div class="img">
                                                <img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_point_2.jpg" class="lazy" width="1280" height="600" alt="Обивка салона из бежевой кожи" />
                                                <div class="plus_wrap">
                                                    <div class="plus plus1"><a href="#">21</a></div>
                                                    <div class="plus plus2"><a href="#">22</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control">
                                    <a href="#" class="up"><span>Переднее сидение</span></a><a href="#" class="dn"><span>Заднее сидение</span></a><br />
                                </div>
                                <div class="details">
                                    <div class="pop_11">
                                        <div class="details_txt">
                                            <strong>Панель приборов Supervision с 4.2" экраном</strong>
                                            <p>Панель приборов Supervision с 4.2" <br>экраном обеспечивает четкий контур приборов, информация с экрана считывается с одного взгляда.</p>
                                        </div>
                                        <img src="/media/images/flat/TL/interior_point_detail_11.jpg" width="570" height="600" alt="Фото приборной панели Supervision" />
                                        <span class="close"><a href="#">Закрыть</a></span>
                                    </div>
                                    <div class="pop_12">
                                        <div class="details_txt">
                                            <strong>Многофункциональное рулевое колесо</strong>
                                            <p>
                                                В любой момент возьмите управление в свои руки: для Вашего удобства в рулевую колонку встроен нагревательный элемент и многочисленные элементы системы управления.
                                            </p>
                                        </div>
                                        <div class="visuals">
                                            <p class="desc1">Удаленное управление <br> аудиосистемой и телефоном</p>
                                            <p class="desc2">Круиз-контроль</p>
                                        </div>
                                        <img src="/media/images/flat/TL/interior_point_detail_12.jpg" width="570" height="600" alt="Система управления на рулевом колесе" />
                                        <span class="close"><a href="#">Закрыть</a></span>
                                    </div>
                                    <div class="pop_13">
                                        <div class="details_txt">
                                            <strong>Навигационная система</strong>
                                            <p>Находите самые оптимальные маршруты к месту назначения при помощи новейшей системы навигации, которая отличается исключительными удобством и гибкостью.</p>
                                        </div>
                                        <img src="/media/images/flat/TL/interior_point_detail_13.jpg" width="570" height="600" alt="Современная система навигации" />
                                        <span class="close"><a href="#">Закрыть</a></span>
                                    </div>
                                    <div class="pop_14">
                                        <div class="details_txt">
                                            <strong>Полностью автоматизированная система кондиционирования воздуха</strong>
                                            <p>Где бы Вы ни находились в просторном салоне автомобиля, Вы везде сможете насладиться свежим воздухом благодаря системе кондиционирования, которая может работать автоматически для максимального комфорта.</p>
                                        </div>
                                        <img src="/media/images/flat/TL/interior_point_detail_14.jpg" width="570" height="600" alt="Автоматическая система кондиционера воздуха" /><br />
                                        <span class="close"><a href="#">Закрыть</a></span>
                                    </div>
                                    <div class="pop_21">
                                        <div class="details_txt">
                                            <strong>Вместимость</strong>
                                            <p>Обширное пространство для багажа может быть дополнительно увеличено за счет двухступенчатой перегородки и шторки багажного отделения,  благодаря чему в новом Tucson легко поместится любой багаж.</p>
                                        </div>
                                        <img src="/media/images/flat/TL/interior_point_detail_21.jpg" width="570" height="600" alt="Пространство багажного отделения" /><br />
                                        <span class="close"><a href="#">Закрыть</a></span>
                                    </div>
                                    <div class="pop_22">
                                        <div class="details_txt">
                                            <strong>Складывающиеся сидения (тип 6:4)</strong>
                                            <p>Удобны как в случае большого путешествия, так и для небольших поездок. Система складывающихся задних кресел в пропорции 6:4 позволяет взять с собой больше багажа и получить еще больше удовольствия от поездки.</p>
                                        </div>
                                        <img src="/media/images/flat/TL/interior_point_detail_22.jpg" width="570" height="600" alt="Большой объем багажного отделения" /><br />
                                        <span class="close"><a href="#">Закрыть</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="morelist">
                    <ul class="clearfix">
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Система вентиляции задней части салона" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_common_1.jpg" /></span>
						<span class="description">
							<strong>Вентиляция в задней части салона</strong><br />
							Система вентиляции воздуха в задней части салона обеспечивает комфортные условия поездки для пассажиров на задних сидениях.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Встроенная подушка для колена водителя" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/interior_common_2.jpg" /></span>
                        <span class="description">
                            <strong>Подушка для колена водителя</strong><br />
                            Подушка из искусственной кожи на консоли для колена водителя обеспечит дополнительный комфорт.
                        </span>
                        </li>
                        <li>
						<span class="img">
                            <img class="lazy" width="306" height="133" alt="Фото Хендай Туссан в движении" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/tucson_video.png" />
                            <a href="#" title="" class="video_link" data-src="https://www.youtube.com/embed/WORRW5Jcm-E?rel=0&amp;controls=0&amp;showinfo=0"></a>
                        </span>
						<span class="description">
							<strong></strong><br />

						</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="contents_performance" class="contents_performance pip">
                <!-- new template -->
                <h2 class="hidden">ДВИГАТЕЛЬ</h2>
                <div class="parallax parallax3"><div>ДВИГАТЕЛЬ</div></div>
                <div class="pip_cont">
                    <div class="text_play">
                        <div class="text1">ДИНАМИЧНЫЙ. МОЩНЫЙ. ЭФФЕКТИВНЫЙ</div>
                        <div class="text2">7-ступенчатая коробка передач с двойным сцеплением (DCT), а также двигатель уменьшенного размера <br> делает новый Tucson лидером по ходовым характеристикам и топливной экономичности для головокружительных поездок.</div>
                    </div>
                    <div class="menu">
                        <ul>
                            <li class="on"><a href="#">2.0 MPi</a></li><!-- no space
						--><li><a href="#">1.6 GDi</a></li><!-- no space
						--><li><a href="#">1.6 T-GDi</a></li><!-- no space
						--><li><a href="#">2.0 CRDi</a></li>
                        </ul>
                    </div>
                    <div class="engine_list">
                        <ul>
                            <li>
                                <div class="engine1">2.0 MPi <br /><span>Бензиновый двигатель</span></div>
                                <p>
                                    Бензиновый двигатель 2.0 MPi имеет максимальную мощность 149,6 л.с. при 6 300 об/мин. и крутящий момент 192 Нм при 4 850 об/мин.
                                    <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                </p>
                                <div class="graph">
                                    <div class="pos">
                                        <img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_graph_1.gif" class="lazy" width="420" height="668" alt="Показатели бензинового двигателя 2.0 MPi" /><br />
                                        <div class="text"><img src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_graph_1_text.png" class="lazy" width="420" height="668" alt="" /></div>
                                    </div>
                                </div>
                                <div class="max">
                                    <dl class="max_power">
                                        <dt>Максимальная мощность</dt>
                                        <dd><strong>149.6</strong> <span class="unit">л.с.</span></dd>
                                    </dl>
                                    <dl class="max_toque">
                                        <dt>Максимальный крутящий момент</dt>
                                        <dd><strong>192</strong> <span class="unit">Нм</span></dd>
                                    </dl>
                                </div>
                            </li>
                            <li>
                                <div class="engine1">1.6 GDi  <br /><span>Бензиновый двигатель</span></div>
                                <p>
                                    Бензиновый двигатель 1.6 GDi имеет максимальную мощность 132 л.с. при 6 300 об/мин. и крутящий момент 160.8 Нм при 4 850 об/мин.
                                    <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                </p>
                                <div class="graph">
                                    <div class="pos">
                                        <img src="/media/images/flat/TL/performance_graph_2.gif" data-original="/media/images/flat/TL/performance_graph_2.gif" class="lazy" width="420" height="668" alt="" /><br />
                                        <div class="text"><img src="/media/images/flat/TL/performance_graph_2_text.png" data-original="/media/images/flat/TL/performance_graph_2_text.png" class="lazy" width="420" height="668" alt="Максимальная мощность и крутящий момент 1.6 GDi" /></div>
                                    </div>
                                </div>
                                <div class="max">
                                    <dl class="max_power">
                                        <dt>Максимальная мощность</dt>
                                        <dd><strong>132</strong> <span class="unit">л.с.</span></dd>
                                    </dl>
                                    <dl class="max_toque">
                                        <dt>Максимальный крутящий момент</dt>
                                        <dd><strong>160.8</strong> <span class="unit">Нм</span></dd>
                                    </dl>
                                </div>
                            </li>
                            <li>
                                <div class="engine1">1.6 T-GDi <br /><span>Бензиновый двигатель</span></div>
                                <p>
                                    Бензиновый двигатель 1.6 T-GDi имеет максимальную мощность 177 л.с при 5 500 об/мин. и крутящий момент 265 Нм при 1 500 ~ 4 500 об/мин.
                                    <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                </p>
                                <div class="graph">
                                    <div class="pos">
                                        <img src="/media/images/flat/TL/performance_graph_3.gif" data-original="/media/images/flat/TL/performance_graph_3.gif" class="lazy" width="420" height="668" alt="Показатели бензинового двигателя 1.6 T-GDi" /><br />
                                        <div class="text"><img src="/media/images/flat/TL/performance_graph_3_text.png" data-original="/media/images/flat/TL/performance_graph_3_text.png" class="lazy" width="420" height="668" alt="Максимальная мощность и крутящий момент 1.6 T-GDi" /></div>
                                    </div>
                                </div>
                                <div class="max">
                                    <dl class="max_power">
                                        <dt>Максимальная мощность</dt>
                                        <dd><strong>177</strong> <span class="unit">л.с.</span></dd>
                                    </dl>
                                    <dl class="max_toque">
                                        <dt>Максимальный крутящий момент</dt>
                                        <dd><strong>265</strong> <span class="unit">Нм</span></dd>
                                    </dl>
                                </div>
                            </li>
                            <li>
                                <div class="engine1">2.0 CRDi  <br /><span>Дизельный двигатель</span></div>
                                <p>
                                    Дизельный двигатель 2.0 CRDi имеет максимальную мощность 185 л.с при 4 000 об/мин. и крутящий момент 400 Нм при 1 750 ~ 2 750 об/мин.
                                    <span class="caution type1">Двигатель отвечает экологическому стандарту Евро-5</span>
                                </p>
                                <div class="graph">
                                    <div class="pos">
                                        <img src="/media/images/flat/TL/performance_graph_4.gif" data-original="/media/images/flat/TL/performance_graph_4.gif" class="lazy" width="420" height="668" alt="Показатели дизельного двигателя 2.0 CRDi" /><br />
                                        <div class="text"><img src="/media/images/flat/TL/performance_graph_4_text.png" data-original="/media/images/flat/TL/performance_graph_4_text.png" class="lazy" width="420" height="668" alt="Максимальная мощность и крутящий момент 2.0 CRDi" /></div>
                                    </div>
                                </div>
                                <div class="max">
                                    <dl class="max_power">
                                        <dt>Максимальная мощность</dt>
                                        <dd><strong>185</strong> <span class="unit">л.с.</span></dd>
                                    </dl>
                                    <dl class="max_toque">
                                        <dt>Максимальный крутящий момент</dt>
                                        <dd><strong>400</strong> <span class="unit">Нм</span></dd>
                                    </dl>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main_wrap">
                    <div class="sub_contents">
                        <div class="list">
                            <ul>
                                <li class="on">
                                    <a href="#">
                                        <span class="img"><img src="/media/images/flat/TL/performance_sub_list_1.jpg" width="160" height="130" alt="7-ступенчатая коробка передач с двойным сцеплением" /><span class="dim">&nbsp;</span></span>
                                        <span class="txt">7-ступенчатая автоматическая коробка передач</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="img"><img src="/media/images/flat/TL/performance_sub_list_2.jpg" width="160" height="130" alt="Управление тягой в повороте" /><span class="dim">&nbsp;</span></span>
                                        <span class="txt">4WD</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="view">
                            <ul>
                                <li class="tab1 on">
                                    <img src="/media/images/flat/TL/performance_sub_view_1.jpg" width="1280" height="740" alt="7-ступенчатая коробка передач с двойным сцеплением (DCT)">
								<span class="text">
									<strong>7-ступенчатая коробка передач с двойным сцеплением (DCT)</strong>
									7-ступенчатая коробка передач с двойным сцеплением обеспечивает исключительную <br>экономию топлива и низкие выбросы углекислого газа, одновременно значительно<br> улучшая динамику разгона.
									<span class="caution">Доступна в комплектации только с некоторыми типами двигателя</span>
								</span>
                                </li>
                                <li class="tab2">
                                    <img src="/media/images/flat/TL/performance_sub_view_2.jpg" width="1280" height="740" alt="Управление тягой в повороте (ATCC)">
								<span class="text">
									<strong>Управление тягой в повороте (ATCC)</strong>
									Новый Tucson ловко справляется с любыми поворотами благодаря системе управления тягой<br> в поворотах (ATCC) и уникальной в своем роде системе полного привода.
								</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="morelist">
                    <ul class="clearfix">
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Передняя подвеска McPherson" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_common_1.jpg" /></span>
						<span class="description">
							<strong>Передняя подвеска McPherson</strong><br />
							Усовершенствованная конструкция подвески обеспечивает лучшую чувствительность рулевого управления и комфортное вождение.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Многорычажная задняя подвеска" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/performance_common_2.jpg" /></span>
						<span class="description">
							<strong>Многорычажная задняя подвеска</strong><br />
							Значительно доработанная конструкция задней подвески усиливает комфорт при вождении и улучшает стабильность автомобиля во время движения.
						</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="contents_safety" class="contents_safety pip">
                <!-- new template -->
                <h2 class="hidden">БЕЗОПАСНОСТЬ</h2>
                <div class="parallax parallax4"><div>БЕЗОПАСНОСТЬ</div></div>
                <div class="pip_cont">
                    <div class="text_play">
                        <div class="text1">БЕЗОПАСНОСТЬ И НАДЕЖНОСТЬ – ТО, О ЧЕМ МЫ ДУМАЕМ В ПЕРВУЮ ОЧЕРЕДЬ</div>
                        <div class="text2">Новый Hyundai Tucson продолжает повышать планку в области обеспечения безопасности интеллектуального вождения, используя самые современные технологии и ужесточая требования к надежности. <br>Это позволяет нам гарантировать Вашу безопасность при поездке на автомобиле Tucson.</div>
                    </div>
                    <div class="scene_wrap">
                        <div class="scene scene1">
                            <div class="bg">&nbsp;</div>
                            <div class="mycar">
                                <div class="car1">&nbsp;</div><div class="car2">&nbsp;</div><div class="car3">&nbsp;</div><div class="car4">&nbsp;</div><div class="car5">&nbsp;</div><div class="car6">&nbsp;</div><div class="car7">&nbsp;</div><div class="car8">&nbsp;</div><div class="car9">&nbsp;</div><div class="car10">&nbsp;</div><div class="car11">&nbsp;</div><div class="car12">&nbsp;</div><div class="car13">&nbsp;</div><div class="car14">&nbsp;</div><div class="car15">&nbsp;</div>
                            </div>
                            <div class="yourcar">
                                <div class="car1">&nbsp;</div><div class="car2">&nbsp;</div><div class="car3">&nbsp;</div><div class="car4">&nbsp;</div><div class="car5">&nbsp;</div><div class="car6">&nbsp;</div><div class="car7">&nbsp;</div><div class="car8">&nbsp;</div><div class="car9">&nbsp;</div><div class="car10">&nbsp;</div><div class="car11">&nbsp;</div>
                            </div>
                        </div>
                        <div class="scene scene2">
                            <div class="bg"><div class="bg1">&nbsp;</div><div class="bg2">&nbsp;</div></div>
                            <div class="mycar">
                                <div class="car">&nbsp;</div>
                                <div class="info"><div class="info1">&nbsp;</div><div class="info2">&nbsp;</div></div>
                                <div class="line"><div class="line1">&nbsp;</div><div class="line2">&nbsp;</div><div class="line3">&nbsp;</div><div class="line4">&nbsp;</div></div>
                            </div>
                            <div class="yourcar"><div class="car">&nbsp;</div></div>
                        </div>
                        <div class="scene scene3">
                            <div class="bg"><div class="bg1">&nbsp;</div><div class="bg2">&nbsp;</div></div>
                            <div class="mycar">
                                <div class="car"><div class="car1">&nbsp;</div><div class="car2">&nbsp;</div></div>
                                <div class="line"><div class="line1">&nbsp;</div><div class="line2">&nbsp;</div><div class="line3">&nbsp;</div><div class="line4">&nbsp;</div></div>
                            </div>
                            <div class="info">
                                <div class="info1">&nbsp;</div><div class="info2">&nbsp;</div>
                            </div>
                            <div class="red">&nbsp;</div>
                        </div>
                        <div class="scene scene4">
                            <div class="bg">&nbsp;</div>
                            <div class="mycar">
                                <div class="car1">&nbsp;</div><div class="car2">&nbsp;</div><div class="car3">&nbsp;</div><div class="car4">&nbsp;</div><div class="car5">&nbsp;</div><div class="car6">&nbsp;</div><div class="car7">&nbsp;</div><div class="car8">&nbsp;</div><div class="car9">&nbsp;</div><div class="car10">&nbsp;</div><div class="car11">&nbsp;</div><div class="car12">&nbsp;</div><div class="car13">&nbsp;</div><div class="car14">&nbsp;</div><div class="car15">&nbsp;</div><div class="car16">&nbsp;</div>
                            </div>
                        </div>
                        <div class="text_wrap">
                            <ul>
                                <li class="text1">
                                    <strong>Функция автоматического экстренного торможения (AEB)</strong>
                                    <div>
                                        <p>Функция автоматического экстренного торможения (AEB) спроектирована таким образом, чтобы обезопасить Вас от любого потенциального столкновения. Система готова применить тормоза раньше Вас благодаря использованию высокотехнологичного радара и камер, которые<br> оберегают Вас даже в тот момент, когда Вы не смотрите на дорогу.
                                        </p>
                                    </div>
                                </li>
                                <li class="text2">
                                    <strong>Система мониторинга слепых зон (BSD)</strong>
                                    <div>
                                        <p>Предупреждая вас об опасностях со всех сторон, система мониторинга слепых зон (BSD) постоянно следит за дорогой благодаря сенсорам, определяющим приближение транспортных средств в слепых зонах сбоку или сзади от вашего автомобиля.</p>
                                    </div>
                                </li>
                                <li class="text3">
                                    <strong>Система отслеживания линий разметки (Lane Keeping Assist System)</strong>
                                    <div>
                                        <p>Система отслеживания линий разметки (Lane Keeping Assist System) слегка корректирует положение рулевого колеса, чтобы не допустить случайного схода с полосы.</p>
                                    </div>
                                </li>
                                <li class="text4">
                                    <strong>Лампы дополнительной подсветки поворотов (SBL)</strong>
                                    <div>
                                        <p>Указывая вам путь даже в самых темных местах, лампы дополнительной подсветки поворотов (SBL) повысят вашу безопасность в ночное время, обеспечивая лучшую видимость при маневре.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="controls">
                            <a href="#" class="play">Play</a>
                            <a href="#" class="stop">Стоп</a>
                            <a href="#" class="next">Далее</a>
                        </div>
                        <div class="slider_wrap">
                            <div class="slider" id="safety_slider"></div>
                            <div class="slider_text">
                                <ul>
                                    <li class="on">AEB</li>
                                    <li>BSD</li>
                                    <li>LKAS</li>
                                    <li>SBL</li>
                                    <li>END</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ride_and_handling">
                        <div class="bluebox">
                            <div class="txt">УПРАВЛЕНИЕ АВТОМОБИЛЕМ</div>
                            <div class="list">
                                <ul>
                                    <li class="on"><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_1.jpg" width="120" height="100" alt="Система ATCC" /><span class="dim">&nbsp;</span></span><span class="txt">Управление тягой в повороте (ATCC)</span></a></li>
                                    <li><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_2.jpg" width="120" height="100" alt="Система динамической стабилизации" /><span class="dim">&nbsp;</span></span><span class="txt">Система динамической стабилизации (VSM)</span></a></li>
                                    <li class="transmission"><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_3.jpg" width="120" height="100" alt="Система помощи при спуске с горы" /><span class="dim">&nbsp;</span></span><span class="txt">Система помощи при спуске с горы (DBC) и система помощи при старте в гору (НАС)</span></a></li>
                                    <li><a href="#"><span class="img"><img src="/media/images/flat/TL/safety_ride_list_4.jpg" width="120" height="100" alt="Особо высокопрочная сталь" /><span class="dim">&nbsp;</span></span><span class="txt">Особо высокопрочная сталь (AHSS)</span></a></li>
                                </ul>
                            </div>
                            <div class="view">
                                <ul>
                                    <li class="tab1 on">
                                        <img src="/media/images/flat/TL/safety_ride_view_1.jpg" width="1280" height="750" alt="Управление тягой в повороте в действии" />
									<span class="text">
										<strong>Управление тягой в повороте (ATCC)</strong>
										Система ATCC – это система полного привода (AWD) нового поколения, которая эффективно перераспределяет крутящий момент между колесами, улучшая сцепление с дорогой и обеспечивая наилучшую управляемость на поворотах, на которую Вы можете положиться.
									</span>
									<span class="remarks">
										<p class="traction">Система управления тягой</p>
										<p class="braking">Система управления торможением</p>
									</span>
                                    </li>
                                    <li class="tab2">
                                        <img src="/media/images/flat/TL/safety_ride_view_2.jpg" width="1280" height="750" alt="Усилитель рулевого управления" />
									<span class="text">
										<strong>Система динамической стабилизации (VSM)</strong>
										Система динамической стабилизации(VSM)  помогает вам ездить с особенной уверенностью по мокрым и скользким дорогам, обеспечивая стабильность  благодаря слаженной работе системы электронного контроля устойчивости (ESC) и электроусилителя рулевого управления (MDPS).
									</span>
									<span class="desc">
										Усилитель рулевого управления помогает предотвратить избыточную или недостаточную поворачиваемость автомобиля  на дорогах с пониженным коэффициентом сцепления.
									</span>
                                    </li>
                                    <li class="tab3">
									<span class="text">
										<strong>Система помощи при спуске с горы (DBC) и система помощи при старте в гору (НАС)</strong>
										Новый Tucson вдохновит вас на приключения, ведь он словно создан для того,  чтобы справиться с движением по любой холмистой местности, обеспечивая контроль торможения на крутых спусках и  автоматическое торможение в случае отката автомобиля назад при подъемах.
									</span>
                                        <div class="car_wrap">
                                            <div class="car_down"><img src="/media/images/flat/TL/safety_ride_view_3_2.jpg" width="1280" height="750" alt="Помощь при спуске с горы" /></div>
                                            <div class="car_up"><img src="/media/images/flat/TL/safety_ride_view_3_1.jpg" width="1280" height="750" alt="Система помощи при старте в гору" /></div>
                                        </div>
                                    </li>
                                    <li class="tab4">
                                        <img src="/media/images/flat/TL/safety_ride_view_4.jpg" width="1280" height="750" alt="Высокая жесткость кузова" />
									<span class="text">
										<strong>Особо высокопрочная сталь (AHSS)</strong>
										Новый Tucson демонстрирует лучшую в своем классе жесткость кузова  благодаря увеличенной в нем доле  высокопрочной стали (AHSS) в  и обработки посредством горячей штамповки.
									</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="morelist">
                    <ul class="clearfix">
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="6 встроенных подушек безопасности" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/safety_common_2.jpg" /></span>
						<span class="description">
							<strong>6 подушек безопасности</strong><br />
							Система из 6 подушек безопасности включает в себя две фронтальные подушки, две боковые передние подушки и две шторки безопасности с обеих сторон по всей длине салона.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Система контроля давления в шинах" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/safety_common_3.jpg" /></span>
						<span class="description">
							<strong>Система контроля давления в шинах (TPMS)</strong><br />
                            Интеллектуальная система контроля давления в шинах точно определяет, в каком из колес давление упало ниже допустимого.</span>
                        </li>
                        <!-- 2015-10-28 -->
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Электронный стояночный тормоз" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/safety_common_4.jpg" /></span>
    					<span class="description">
    						<strong>Электронный стояночный тормоз (EPB)</strong><br />
    						Данное устройство экономит внутреннее пространство автомобиля, а современный дизайн обеспечивает удобство при его использовании.
    						<span class="caution" style="margin: 10px 0 30px;" >Доступно только с автоматической коробкой передач</span>
    					</span>
                        </li>
                        <!-- //2015-10-28 -->
                    </ul>
                </div>
            </div>
            <div id="contents_convenience" class="contents_convenience pip">
                <!-- new template  -->
                <h2 class="hidden">КОМФОРТ</h2>
                <div class="parallax parallax5"><div>КОМФОРТ</div></div>
                <div class="pip_cont">
                    <div class="text_play">
                        <div class="text1">РОСКОШЬ И КОМФОРТ, КОТОРЫЕ ЗАВОДЯТ </div>
                        <div class="text2">Автомобили Hyundai обеспечивают Вам первоклассный комфорт во время ежедневных поездок.<br> Новый компактный городской внедорожник Tucson сделает их еще комфортнее.</div>
                    </div>

                    <div class="main_wrap">
                        <ul class="list_wrap">
                            <li class="list list1">
                                <a href="#">
                                    <strong>Система автоматической парковки (PAS)</strong>
                                    <img src="/media/images/flat/TL/convenience_list_01.jpg" width="503" height="309" alt="Современная система автоматической парковки" />
                                </a>
                            </li>
                            <li class="list list2">
                                <a href="#">
                                    <strong>Электропривод двери багажника с системой автоматического открывания</strong>
                                    <img src="/media/images/flat/TL/convenience_list_02.jpg" width="436" height="309" alt="Багажная дверь с электроприводом" />
                                </a>
                            </li>
                            <li class="list list3">
                                <a href="#">
                                    <strong>Система регулировки сидений и трансформации задних сидений</strong>
                                    <img src="/media/images/flat/TL/convenience_list_03.jpg" width="370" height="310" alt="Система регулировки задних сидений" />
                                </a>
                            </li>
                            <li class="list list4">
                                <a href="#">
                                    <strong>Система подогрева и охлаждения сидений</strong>
                                    <img src="/media/images/flat/TL/convenience_list_04.jpg" width="569" height="310" alt="Встроенная система подогрева и охлаждения сидений" />
                                </a>
                            </li>
                        </ul>
                        <ul class="view_wrap">
                            <li class="view view1">
                                <div class="close"><a href="#">Закрыть</a></div>
                                <img src="/media/images/flat/TL/convenience_view_01.jpg" width="630" height="620" alt="Действие системы помощи при парковке" />
                                <div class="text">
                                    <strong>Система автоматической парковки (PAS)</strong>
                                    Сенсоры на переднем и заднем бамперах, которые оценивают расстояние между автомобилем и препятствиями на дороге, оповещая водителя об опасности, когда необходимо, пригождаются при парковке в условиях ограниченного пространства.
                                </div>
                            </li>
                            <li class="view view2">
                                <div class="close"><a href="#">Закрыть</a></div>
                                <img src="/media/images/flat/TL/convenience_view_02.jpg" width="630" height="620" alt="Автоматическое открывание багажной двери" />
                                <div class="text">
                                    <strong>Электропривод двери багажника с системой автоматического открывания</strong>
                                    Багажная дверь открывается автоматически, как только ключ оказывается в зоне обнаружения от 3 секунд и более. Для повышенной безопасности перед  открытием багажной двери срабатывают звуковой сигнал и аварийная сигнализация.
                                </div>
                            </li>
                            <li class="view view3">
                                <div class="close"><a href="#">Закрыть</a></div>
                                <img src="/media/images/flat/TL/convenience_view_03_front.jpg" width="630" height="620" alt="Регулировка положения спинки сиденья" />
                                <div class="text">
                                    <strong class="front on">Система регулировки сидений и трансформации задних сидений</strong>
                                    <strong class="rear">Складывающиеся задние сиденья</strong>
                                    <p class="front on">Чувствуйте себя комфортно благодаря настройке пассажирского кресла в 8 направлениях и водительского кресла в 10 направлениях, а также благодаря дополнительной двусторонней регулировке поясничной поддержки водительского кресла.</p>
                                    <p class="rear">Каждый пассажир может подобрать оптимальную  позицию сиденья, отрегулировав его наклон благодаря удобно расположенному рычагу.</p>
                                    <div class="toggle tabs on"><a href="#" class="toggle_on" data-img="/media/images/flat/TL/convenience_view_03_front.jpg">Передние сиденья</a><!-- no space --><a href="#" class="toggle_off" data-img="/media/images/flat/TL/convenience_view_03_rear.jpg">Задние сиденья</a></div>
                                </div>
                            </li>
                            <li class="view view4">
                                <div class="close"><a href="#">Закрыть</a></div>
                                <img src="/media/images/flat/TL/convenience_view_04.jpg" width="630" height="620" alt="Регулируемый обогрев сидений" />
                                <div class="text">
                                    <strong>Система подогрева и охлаждения сидений</strong>
                                    В жару насладитесь прохладным сухим воздухом благодаря системе воздушной вентиляции или окружите себя теплом благодаря подогреву передних и задних сидений.
                                </div>
                            </li>
                        </ul>
                        <div class="dim">&nbsp;</div>
                    </div>
                </div>
                <div class="morelist">
                    <ul class="clearfix">
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Круиз-контроль Tucson" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/convenience_common_1.jpg" /></span>
						<span class="description">
							<strong>Круиз-контроль</strong><br />
							Система поддерживает постоянную скорость, заданную водителем.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Шторка багажного отделения" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/convenience_common_2.jpg" /></span>
						<span class="description">
							<strong>Шторка багажного отделения</strong><br />
							Шторка необходима как для безопасности, так и для удобства: она позволяет скрыть содержимое багажного отделения и предотвратит попадание багажа в салон.
						</span>
                        </li>
                        <li>
                            <span class="img"><img class="lazy" width="306" height="133" alt="Съемный крючок для сумки и пакетов" src="/media/images/common/transparent.gif" data-original="/media/images/flat/TL/convenience_common_3.jpg" /></span>
						<span class="description">
							<strong>Крючок для сумки на спинке заднего сидения</strong><br />
							Спинка заднего сидения оснащена съемным крючком, созданным для размещения хозяйственных сумок и пакетов, что еще больше повышает вместимость автомобиля.
						</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="top" id="floating_top" style="display: block; left: 1112.5px;">
                <a href="#">top</a><br />
            </div>
        </div>




        <script type='text/javascript'>
            //
            var cubeList = new Array();
            cubeList = ["home", "gallery", "mostlike"];
            function cubeStart(va) {
                // ììíë¸ì ì¤ì  ì»¨íì¸ ë ì´ í¨ììì ajax í¨ìë¥¼ ì¤í ìì¼ì ë¿ë ¤ì£¼ëë¡ í´ì£¼ì¸ì.
                // ëëê·¸íê±°ë ë²í¼ì í´ë¦­íì¬ íë¸ê° ì¢ì° ì¤í¬ë¡¤ì´ ëë©´, í´ë¹íë íë¸ì ì«ì(1~5)ë¥¼ ì¸ìë¡ ë°ì ì´ í¨ìê° ì¤íë©ëë¤.
                // ì«ìì íë¸ê° í­ì 1:1 ëìì¸ ê²ì ìëëë¤.
                // íë¸ë ìµë 5ê°ê¹ì§ ì¶ë ¥ëê³ , ìì ì¬ì© ì¬ë¶/pipì¸ì§ generalì¸ì§ì ë°ë¼ 3ê°ë§ ì¶ë ¥ëë ê²½ì°ë ììµëë¤.
                //alert("Cube"+va+" is Ready.");

                if (va == 1) { // main
                    // ì²ë¦¬ ë´ì© ìì, HTMLìì ì¶ë ¥ëëë¡ í´ ì£¼ìë©´ ë©ëë¤.

                } else if (va == 2) { // gallery
                    cubeGalleryCustomiz('1', 'All')
                } else if (va == 3) { // experience
                    //cubeExterienceCustomiz('exterior','0','');
                    executeArea4();
                } else if (va == 4) { // talk n talk
                    executeArea4();
                    // ìµì´ ë¡ë©ì ë¿ë§ ìëë¼, ê° 1/2/3ì ë§í¬ í´ë¦­í ë ìë ë¤ì ì¤íëì´ì¼ í©ëë¤.

                    // cubeMostLikeCate()ë ì¹´íê³ ë¦¬ë¥¼ ì¶ë ¥íë í¨ììëë¤.
                    // 1) ì íë ë²í¸, 1~3 ì¤ íë.
                    // 2) ì²«ë²ì§¸ íë¡í ì´ë¯¸ì§
                    // 3) ëë²ì§¸ íë¡í ì´ë¯¸ì§
                    // 4) ì¸ë²ì§¸ íë¡í ì´ë¯¸ì§
                    // 5) ì²«ë²ì§¸ ì´ë¦
                    // 6) ëë²ì§¸ ì´ë¦
                    // 7) ì¸ë²ì§¸ ì´ë¦
                    //cubeMostLikeCate(1,'/img_tmp/profile30.jpg','/img_tmp/profile30.jpg','/img_tmp/profile30.jpg','Jeff','Antonio','Jane');

                    // cubeMostLike ë²í¼ì ì¤ë¥¸ìª½ ë´ì©ì´ ë°ëë í¨ììëë¤.
                    // 1) ìëì°¨ ì´ë¦
                    // 2) Trim (ìë§ë..)
                    // 3) ì íí ìµì¤íë¦¬ì´ ì´ë¯¸ì§ (ìì´ì½ ì´ë¯¸ì§ ê²½ë¡)
                    // 4) ì íí ì¸íë¦¬ì´ ì´ë¯¸ì§ (ìì´ì½ ì´ë¯¸ì§ ê²½ë¡)
                    // 5) ìëì°¨ ì´ë¯¸ì§
                    // 6) See More ë§í¬
                    // 7) Car Builder ë§í¬
                    // 8) Linkë²í¼ ì½ë
                    // cubeMostLike('AZERA','1.6 CRDi GLS FDU','/img_tmp/exterior_gray.png','/img_tmp/interior_brown.png','/img_tmp/car_mostlike.png','#','#','<a href="#"><img src="/img_tmp/like.gif" alt="" /></a>');


                } else if (va == 5) { // talk n talk
                    executeArea4();

                }
            }
            //</script>
        <input type="hidden" id="modelCode" name="modelCode" value="A6"/><input type="hidden" id="trakingModelCode" name="trakingModelCode" value="Tucson"/>
        <input type="hidden" id="wwn_country_code" name="wwn_country_code" value="RU"/>

        <!--
        <div class="spec_message">
            <div>*Максимально рекомендуемая розничная цена в комплектации Start («Старт») 1.6 GDI MT 2WD, действительна с 17.11.2015 до 31.12.2015. <br>
            **3,7% - величина страховой премии по договору Каско, срок 1 год, франшиза 50 000 руб. САО «ВСК», лицензии СЛ №0621, СИ №0621. Предложение действительно с 17.11.2015 до 31.12.2015, не является офертой. Условия могут быть изменены в одностороннем порядке САО «ВСК». <br>
            ***Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа транспортного средства.<br>
            ****Показатели расхода топлива и массы выделяемого CO2 представлены согласно методике испытаний по Правилам ЕЭК ООН №83 и 101<br></div>
        </div>
        -->
        <!-- <div id="contents_pricelist" class="contents_pricelist pip">
            <div class="title">Цены</div>


        </div> -->
        <div class="contents_accessories pip" id="contents_accessories"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>