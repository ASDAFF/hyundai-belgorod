<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Solaris-5dr");
?>



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

    <input type="hidden" name="irCalName" id="irCalName" value="Solaris хэтчбек"/><input type="hidden" name="irCalDesc"
                                                                                         id="irCalDesc"
                                                                                         value="Hyundai motor company - Hyundai Solaris хэтчбек highlights, exterior, interior, performance, safety, convenience, specifications, accessories, reviews "/><input
    type="hidden" name="irCalLink" id="irCalLink" value="/media/img/solaris5dr/hw035211.jpg"/><input type="hidden"
                                                                                                     name="resetImage"
                                                                                                     id="resetImage"
                                                                                                     value="aaa"/><input
    type="hidden" name="carName" id="carName" value=""/><input type="hidden" name="NameImage" id="NameImage"
                                                               value=""/><input type="hidden" name="imageNum"
                                                                                id="imageNum" value=""/><input
    type="hidden" name="lastNum" id="lastNum" value=""/>

    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/ru_RU/all.js"/>
    <script type="text/javascript" src="/media/js/sc_json2.js"></script>
    <script type="text/javascript" src="/media/js/sc_support_ru.js"></script>
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
        WCM.sitePath = "/Solaris-5dr"
    </script>
    <script type='text/javascript'
            src="/wcm/idc/groups/sgsitedesignasset/@hmc/documents/sitedesignasset/mdaw/mdi1/~edisp/sc_movingobject_accent.js"></script>
    <script>var firstCube = 1;</script>
    <div class="wrap" id="wrap">

        <link rel="stylesheet" type="text/css" href="/media/css_new/styles_RU_.css"/>

        <div class="wrap" id="wrap">

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
                            "/wcm/ru/front/sns/getExperienceStats.do"
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
                    <a href="#"><img src="/media/img/btn_close_layer_cb.gif" alt="close"/></a><br/>
                </div>
                <div class="title">
                    <img src="/media/img/layer_experience_title.png" alt="What people like the best option?"/><br/>
                </div>
                <div class="trim">
                    <div class="subtitle_trim">
                        <img src="/media/img/layer_experience_title_trim.gif" alt="Trim"/><br/>
                    </div>
                    <div class="graph" id="experienceGraph">
                        <!-- style의 height 값은 Best3의 %값과 동일한 것이 아닙니다. -->
                        <!-- 55(a)/25(b)/15(c)에 대한 백분률 값을 다시 계산한 후, 188을 곱해 주시면 됩니다. 188은 고정임 -->
                        <!-- best1의 height: x=a*188/(a+b+c) -->
                        <!-- best2의 height: y=b*188/(a+b+c) -->
                        <!-- best3의 height: z=188-x-y -->
                        <!-- 3가지 합쳐서 188이 되도록 마지막 값은 100에서 위의 두 값을 빼 줍니다. -->
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
                                    <li class="best1" style="height:px;"><!-- 그래프의 픽셀과 동일 -->
                                        <span class="percent">%</span>
                                        <span class="name"></span>
                                        <span class="help"></span>
                                    </li>
                                </c:when>
                                <c:otherwise>
                                    <li class="best" style="height:px;"><!-- 그래프의 픽셀과 동일 -->
                                        <span class="percent">%</span>
                                        <span class="name"></span>
                                        <span class="help"></span>
                                    </li>
                                </c:otherwise>
                            </c:choose>
                        </c:forEach>
                    </ul>
                    <!--
                    혹시 Best3가 1개만 존재하는 경우에는 best1 만 써 주시면 되고,
                    2개만 존재하는 경우에는 best1과 best3을 써 주시면 됩니다.
                    계산은 동일합니다.
                -->
                </div>
                <div class="color">
                    <div class="subtitle">
                        <img src="/media/img/layer_experience_title_exterior.gif" alt="Exterior Color"/><br/>
                    </div>
                    <div class="colorlist">
                        <ul id="exteriorRank">
                            <c:forEach var="exterior" items="" varStatus="status">
                                <li><span>%</span><br/><img src="" alt=""/></li>
                            </c:forEach>
                        </ul>
                    </div>
                    <div class="subtitle">
                        <img src="/media/img/layer_experience_title_interior.gif" alt="Interior Covering"/><br/>
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
                        <div class="items ui-draggable">
                            <div class="item">
                                <script type="text/javascript">
                                    //
                                    function cubeMainMovie(vYoutubeURL) {

                                        pipMovieLayer(this, vYoutubeURL, 0);


//      $(".cubebox .cubelist .items a img.movie").click(function() {
                                        // 1)   ÃÂ«ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ URL (youtubeÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ iframeÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ¤ÃÂ«ÃÂ¥ÃÂ¼ ÃÂ¬ÃÂ°ÃÂ¾ÃÂ¬ÃÂÃÂ iframeÃÂ¬ÃÂÃÂ srcÃÂ«ÃÂ¥ÃÂ¼ ÃÂ¬ÃÂÃÂÃÂ«ÃÂ ÃÂ¥)
                                        // 2)   ÃÂ¬ÃÂÃÂÃÂ«ÃÂÃÂÃÂ¬ÃÂ°ÃÂ¨ ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¦ÃÂ (ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ¤ÃÂ­ÃÂÃÂ¸)
                                        // 3)   ÃÂ¬ÃÂÃÂÃÂ«ÃÂÃÂÃÂ¬ÃÂ°ÃÂ¨ ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¦ÃÂ (ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¯ÃÂ¸ÃÂ¬ÃÂ§ÃÂ)
                                        // 4)   ÃÂ­ÃÂÃÂ´ÃÂ«ÃÂÃÂ¹ ÃÂ«ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ´ÃÂ­ÃÂÃÂ
                                        // 5)   movie (ÃÂ­ÃÂÃÂ­ÃÂ¬ÃÂÃÂ)
                                        // 6)   ÃÂ«ÃÂÃÂ¤ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¡ÃÂÃÂ«ÃÂÃÂ ÃÂ«ÃÂ§ÃÂÃÂ­ÃÂÃÂ¬
                                        // 7)   ÃÂ­ÃÂÃÂ¸ÃÂ¬ÃÂÃÂÃÂ­ÃÂÃÂ° ÃÂ«ÃÂ§ÃÂÃÂ­ÃÂÃÂ¬ (ÃÂ¬ÃÂ¶ÃÂÃÂ­ÃÂÃÂ ÃÂ¬ÃÂÃÂ´ ÃÂ«ÃÂ¶ÃÂÃÂ«ÃÂ¶ÃÂ ÃÂªÃÂµÃÂ¬ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂªÃÂ´ÃÂÃÂ­ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ)
                                        // 8)   ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ´ÃÂ¬ÃÂÃÂ¤ÃÂ«ÃÂ¶ÃÂ ÃÂ«ÃÂ§ÃÂÃÂ­ÃÂÃÂ¬ (ÃÂ¬ÃÂ¶ÃÂÃÂ­ÃÂÃÂ ÃÂ¬ÃÂÃÂ´ ÃÂ«ÃÂ¶ÃÂÃÂ«ÃÂ¶ÃÂ ÃÂªÃÂµÃÂ¬ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂªÃÂ´ÃÂÃÂ­ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ)
                                        // 9)   Stumble Upon ÃÂ«ÃÂ²ÃÂÃÂ­ÃÂÃÂ¼URL, ÃÂ«ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ¼ÃÂ«ÃÂÃÂÃÂ«ÃÂ§ÃÂ ÃÂ«ÃÂÃÂ¤ÃÂ¬ÃÂÃÂ´ÃÂªÃÂ°ÃÂ (ÃÂ¬ÃÂ¶ÃÂÃÂ­ÃÂÃÂ ÃÂ¬ÃÂÃÂ´ ÃÂ«ÃÂ¶ÃÂÃÂ«ÃÂ¶ÃÂ ÃÂªÃÂµÃÂ¬ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂªÃÂ´ÃÂÃÂ­ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ)
                                        // 10)  Like ÃÂ«ÃÂ²ÃÂÃÂ­ÃÂÃÂ¼ URL
                                        // 11)  main (ÃÂ­ÃÂÃÂ­ÃÂ¬ÃÂÃÂ)
                                        //showGalleryLargeLayer("http://www.youtube.com/embed/vtb2XLpAMBw?rel=0","azera","/img_tmp/txt_azera_layer.png","High Glass Sun Roof","movie","downloadurl","twitter link","facebook link","stumbleupon link","http://test.com","main");
//      });
                                    }

                                    function cubeGalleryList(cate, listImg, largeImg, titletxt, titleimg, description, mode, download, twitter, facebook, stumbleupon, like) {
                                        $(".layer_gallery").append('<div class="layer_gallery_links"><iframe src="http://www.facebook.com/plugins/like.php?href=' + like + '&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe> <span><img src="/wcm/images/' + country + '/cube/txt_download.png" alt="" /></span> <a href="' + download + '"><img src="/wcm/images/common/btn/btn_cube_gallery_download.png" alt="" /></a> <span><img src="/wcm/images/' + country + '/cube/txt_share.png" alt="" /></span> <a href="' + facebook + '"><img src="/wcm/images/common/btn/btn_cube_gallery_facebook.png" alt="" /></a> <a href="' + twitter + '"><img src="/wcm/images/common/btn/btn_cube_gallery_twitter.png" alt="" /></a> ' + tmp_strumbleCode + '</div>');
                                        galleryPopup();
                                        fadeinout('.layer_gallery', 'fadein');
                                    }

                                    function galleryPopup() {
                                        var w = $(window).width();
                                        var h = $(document).height();
                                        if (w < 960) {
                                            w = 960
                                        }
                                        ;
                                        $(".layer_gallery").css("width", w).css("height", h);
                                        $(".layer_gallery .large").css("width", w).css("left", 0).css("top", 0);
                                        $(".layer_gallery .minimap .in .move").css("left", 0).css("top", 0);
                                    }

                                    function loadAdsLayer(carName, carLink, adsDesc, adsDate, uTubeURL, totalCnt) {

                                        /*$(".car_list ul li").css("width","115px");
                                         $(".car_list ul li").css("height","69px");
                                         var liSize = $(".layer_popup play_movie .car_list ul li").size();
                                         var ulWidth = liSize * 115
                                         $(".car_list ul").css("width", ulWidth);*/

                                        $("#layer_popup").empty();
                                        $("#layer_popup").show();

                                        $(".thum_list .car_list").jCarouselLite({btnNext: ".thum_list .arrow_right", btnPrev: ".thum_list .arrow_left", scroll: 1, visible: 4, circular: false});

                                        $("#layer_popup").append('<div class="desc"></div>');
                                        $("#layer_popup").append('<div class="movie_player"></div>');
                                        $("#layer_popup").append('<div class="movie_list"></div>');
                                        $("#layer_popup .desc").append('<strong>' + carName + '</strong>');
                                        $("#layer_popup .desc").append('<span class="btn"><a href="' + carLink + '" class="detail btn">Product Detail</a></span>');
                                        $("#layer_popup .desc").append('<span>' + adsDesc + '</span>');
                                        $("#layer_popup .desc").append('<span class="date">' + adsDate + '</span>');
                                        $("#layer_popup .desc").append('<div class="social">');
                                        $("#layer_popup .desc").append('  <a href="#"><img src="/wcm/images/common/icon/icon_facebook_black.gif" alt="facebook" /></a>');
                                        $("#layer_popup .desc").append('  <a href="#"><img src="/wcm/images/common/icon/icon_twitter_black.gif" alt="twitter" /></a>');
                                        $("#layer_popup .desc").append('  <a href="#"><img src="/wcm/images/common/icon/icon_su_black.gif" alt="" /></a>');
                                        $("#layer_popup .desc").append('</div>');
                                        $("#layer_popup .desc").append('<a href="javascript:closeAdsLayer()"><img class="close_layer" src="/wcm/images/common/btn/btn_close_layer_bk.gif" alt="Close"/></a>');

                                        $("#layer_popup .movie_player").append('<iframe width="560" height="349" src="' + uTubeURL + '" frameborder="0" allowfullscreen></iframe>');

                                    }

                                    function closeAdsLayer() {
                                        $("#layer_popup").hide();

                                    }
                                    function SendGAEventCubeMain(EventFirstName, EventName) {

                                    }
                                    //</script>
                                <div class="info">
                                    <img src="/media/img/solarisnew/ru_solaris_pip.png" alt="RU_solaris_5dr_pip2"/><br/><a
                                        href="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/BuildYourOwn/Trim/index.html?modelCode=RB&wwn_country_code=RU"
                                        ></a><a href="#" class="vr360"></a>
                                </div>
                                <img alt="solaris_2013_ggg" src="/media/img/solarisnew5dr/solaris_2013_g1.png" style="
    left: 88px;
    position: relative;
">
                                <style type="text/css">
                                    .fb_edge_widget_with_comment span.fb_edge_comment_widget {
                                        top: -190px !important;
                                        left: -320px !important;
                                    }
                                </style>
                                <div class="facebook_like">
                                    <div id="fb-root"></div>
                                    <script type="text/javascript" src="http://connect.facebook.net/ru_RU/all.js"></script>
                                    <fb:like send="false" layout="button_count" width="150" show_faces="false " action="like" font=""
                                        ></fb:like>
                                </div>
                            </div>
                            <div class="item">
                                <script type="text/javascript">
                                    var countryCodex = "ru";
                                </script>
                                <script>
                                    var varFacebookJS = "ON";
                                </script>
                                <script>
                                    var varTwitterJS = "ON";
                                </script>
                                <script>
                                    var varSTJS = "OFF";
                                </script>
                                <script type="text/javascript">
                                    //
                                    function cubeGalleryLayout(ob, cate) {
                                        MovieLength = MovieList.actionMovieArray.length;
                                        var tmpCateBtn = '<div class="gallery_category"><ul>';
                                        var obj = ob;
                                        obj.empty();
                                        if (cate == "All") {
                                            tmpCateBtn += '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        } else if (cate == "exterior") {
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                                '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        } else if (cate == "interior") {
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        } else {
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        }
                                        if (MovieLength > 0) {
                                            if (cate == "All" || cate == "exterior" || cate == "interior") {
                                                tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'movies\');" >Видео</a></li>' + '</ul></div>';
                                            } else {
                                                tmpCateBtn += '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'movies\');" >Видео</a></li>' + '</ul></div>';
                                            }
                                        } else {
                                            tmpCateBtn += '</ul></div>';
                                        }
                                        obj.append(tmpCateBtn);
                                        obj.append('<ul class="gallerylist"></ul>');
                                        obj.append('<div class="cube_shadow"><div><img src="/media/img/bg_cube_shadow.png" alt="" /></div></div>');
                                    }

                                    function cubeGalleryList(cate, listImg, largeImg, titletxt, titleimg, description, mode, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, like, cntx, totcnt, cateX) {
                                        $(".gallerylist").append('<li><a href="#" class="' + cate + '" onclick="showGalleryLargeLayer(\'' + largeImg + '\',\'' + titletxt + '\',\'' + titleimg + '\',\'' + description + '\',\'' + mode + '\',\'' + largeImg + '\',\'' + utubeUrl + '\',\'' + mp4Movie + '\',\'' + webmMovie + '\',\'' + ogvMovie + '\',\'' + thumbMovie + '\',\'' + twitter + '\',\'' + facebook + '\',\'' + like + '\',\'' + cateX + '\',\'' + cntx + '\',\'' + totcnt + '\');return false;"><img src="' + listImg + '" alt="" /></a></li>');
                                    }

                                    function cubeGalleryPaging(current, all, cateX) {
                                        ofString = "из";
                                        if (countryCodex == "") {
                                            ofString = "of";
                                        }
                                        current = current - 0;
                                        all = parseInt(all / 21);
                                        all = all - 1 + 2;
                                        if (current == all) {
                                            if (current == 1) {
                                                pageX = current - 1;
                                                $(".gallerylist").append('<li class="paging">' +
                                                    '<strong>' + current + '</strong> ' + ofString + ' ' + all + '</a>' +
                                                    '</li>');
                                            } else {
                                                pageX = current - 1;
                                                $(".gallerylist").append('<li class="paging">' +
                                                    '<a href="javascript:cubeGalleryCustomiz(\'' + pageX + '\',\'' + cateX + '\')" class="prev">previous</a>' +
                                                    '<strong>' + current + '</strong> ' + ofString + ' ' + all + '</a>' +
                                                    '</li>');
                                            }
                                        } else if (current == 1) {
                                            pageX = current + 1;
                                            $(".gallerylist").append('<li class="paging">' +
                                                '<strong>' + current + '</strong> ' + ofString + ' ' + all + '' +
                                                '<a href="javascript:cubeGalleryCustomiz(\'' + pageX + '\',\'' + cateX + '\')" class="next">next</a>' +
                                                '</li>');
                                        } else {
                                            pagePre = current - 1;
                                            pageX = current + 1;
                                            $(".gallerylist").append('<li class="paging">' +
                                                '<a href="javascript:cubeGalleryCustomiz(\'' + pagePre + '\',\'' + cateX + '\')" class="prev">previous</a>' +
                                                '<strong>' + current + '</strong> ' + ofString + ' ' + all + '' +
                                                '<a href="javascript:cubeGalleryCustomiz(\'' + pageX + '\',\'' + cateX + '\')" class="next">next</a>' +
                                                '</li>');
                                        }
                                    }

                                    function facebookImage(image) {
                                        var change = document.getElementById("resetImage");
                                        change.value = image;
                                    }
                                    function showGalleryLargeLayer(imgurl, carname, titleimg, description, isImg, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, like, cateX, cntx, totcnt) {


                                        facebookImage(imgurl);

                                        $(".layer_gallery").empty();

                                        $('body').attr('showGallery', 'view');//0710

                                        $(".layer_gallery").append('<div class="layer_gallery_close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close" /></a><br /></div>');
                                        $(".layer_gallery").append('<div class="layer_gallery_title"><img src="' + titleimg + '" alt="' + carname + '" /> ' + description + '</div>');
                                        //0719  $(".layer_gallery .layer_gallery_close a").click(function() {fadeinout('.layer_gallery','fadeout');galleryPopup();return false;});

                                        //0810 $(".layer_gallery .layer_gallery_close a").click(function() {if (navigator.userAgent.match(/MSIE 8.0/i)){$(".layer_gallery .large_movie iframe").attr("src","about:blank");};galleryPopup();$(".layer_gallery").empty();$(".layer_gallery").hide(); $('.container,.footer').show(); $('body').removeAttr('showGallery'); $('#layer_gallery').removeAttr('style'); return false;});//0710

                                        $(".layer_gallery .layer_gallery_close a").click(function () {
                                            if (navigator.userAgent.match(/MSIE 8.0/i)) {
                                                $(".layer_gallery .large_movie iframe").attr("src", "about:blank");
                                            }
                                            ;

                                            if (navigator.userAgent.match(/MSIE 9.0/i)) {

                                                $('testplayer').src = '';
                                                //setTimeout(function () {
                                                //    $('.layer_gallery').set('html','');},50);

                                                $('#layer_gallery iframe').attr('src', $('#layer_gallery iframe').attr('src'));
                                                $('#layer_gallery').hide();
                                                galleryPopup();
                                                $('.container,.footer').show();
                                                $('body').removeAttr('showGallery');
                                                $('#layer_gallery').removeAttr('style');
                                            }
                                            else {
                                                galleryPopup();
                                                $(".layer_gallery").empty();
                                                $(".layer_gallery").hide();
                                                $('.container,.footer').show();
                                                $('body').removeAttr('showGallery');
                                                $('#layer_gallery').removeAttr('style');
                                            }

                                            return false;
                                        });

                                        if (isImg == "image") {
                                            $(".layer_gallery").append('<div class="minimap" style="z-index:55"><div class="in"><img src="' + imgurl + '" class="small" /><br /><div class="move"><img src="/media/img/blank.gif" alt="" /></div></div></div>');
                                            $(".layer_gallery").append('<div class="layer_gallery_control"><ul><li class="zoomin"><a href="#"><img src="/media/img/btn_zoomin.png" alt="Zoom In" /></a></li><li class="zoomout" style="display:none;"><a href="#"><img src="/media/img/btn_zoomout.png" alt="Zoom Out" /></a></li></ul></div>');
                                            $(".layer_gallery").append('<div class="large"><img src="' + imgurl + '" class="img" alt="" /><br /></div>');
                                            $(".layer_gallery_control .zoomin a").click(function () {
                                                galleryZoomIn()
                                            });
                                            $(".layer_gallery_control .zoomout a").click(function () {
                                                galleryZoomOut()
                                            });
                                            $(".layer_gallery .minimap .in .move").draggable({containment: ".layer_gallery .minimap .in", cursor: "move",
                                                start: function (event) {
                                                },
                                                stop: function (event) {
                                                    // image size - 1920*1152 // 108 * 64
                                                    var x = parseInt(parseInt($(this).css("left")) * 1920 / 108) * -1;
                                                    var y = parseInt(parseInt($(this).css("top")) * 1152 / 64) * -1;
                                                    $(".layer_gallery .large").css("left", x).css("top", y);
                                                }
                                            });
                                            $(".layer_gallery").append('<div class="layer_gallery_links"></div>');
                                            $(".layer_gallery .layer_gallery_links").append('<span><img src="/wcm/images/' + country + '/cube/txt_download.png" alt="" /></span> ');
                                            $(".layer_gallery .layer_gallery_links").append('<a href="' + download + '" target="_blank"><img src="/wcm/images/common/btn/btn_cube_gallery_download.png" alt="" /></a> ');
                                            $(".layer_gallery .layer_gallery_links").append('<span><img src="/wcm/images/' + country + '/cube/txt_share.png" alt="" /></span> ');

                                            //2012-02-21 add
                                            if (varFacebookJS == "ON") {
                                                $(".layer_gallery .layer_gallery_links").append('<a href="#" onClick=" sharefacebook(document.location.href)"><img src="/media/img/hw000676.gif" alt="" /></a> ');
                                            }
                                            if (varTwitterJS == "ON") {
                                                $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="twitterOpen(document.location.href);"><img src="/media/img/hw000667.gif" alt="" /></a>');
                                            }
                                            if (varSTJS == "ON") {
                                                $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="stumbleuponOpen(document.location.href);"><img src="/media/img/hw000670.gif" alt="" /></a>');
                                            }
                                            //2012-02-21 add

                                            galleryPopup();
                                        } else {
                                            $(".layer_gallery").append('<div class="layer_gallery_links"></div>');
                                            $(".layer_gallery .layer_gallery_links").append('<span><img src="/wcm/images/' + country + '/cube/txt_share.png" alt="" /></span> ');
                                            //$(".layer_gallery .layer_gallery_links").append('<a href="#" onClick="sharefacebook(document.location.href)"><img src="/media/img/hw000676.gif" alt="" /></a> ');
                                            if (varFacebookJS == "ON") {
                                                $(".layer_gallery .layer_gallery_links").append('<a href="#" onClick="sharefacebook(document.location.href)"><img src="/media/img/hw000676.gif" alt="" /></a> ');
                                            }

                                            if (countryCodex != "es") {
                                                if (varTwitterJS == "ON") {
                                                    $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="twitterOpen(document.location.href);"><img src="/media/img/hw000667.gif" alt="" /></a>');
                                                }
                                                if (varSTJS == "ON") {
                                                    $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="stumbleuponOpen(document.location.href);"><img src="/media/img/hw000670.gif" alt="" /></a>');
                                                }
                                            }

                                            if (utubeUrl != "") {
                                                $(".layer_gallery").append('<div class="desc"></div>');
                                                $(".layer_gallery").append('<div class="movie_player" style="margin-top:100px;"></div>');
                                                $(".layer_gallery .movie_player").append('<iframe width="560" height="349" src="' + utubeUrl + '" frameborder="0" allowfullscreen></iframe>');
                                            } else {
                                            }
                                        }


                                        if (cateX == "All") {
                                            TotalLength = List.actionArray.length;
                                            Ptotcnt = TotalLength;
                                            for (var i = 0; i <= TotalLength - 1; i++) {
                                                if (i == cntx - 1 && i >= 0) {
                                                    Pcate = List.actionArray[i].division;
                                                    Pthum = List.actionArray[i].thum;
                                                    PlargeImg = List.actionArray[i].image;
                                                    Ptitletxt = List.actionArray[i].carname;
                                                    Ptitleimg = List.actionArray[i].nameimage;
                                                    Pdescription = List.actionArray[i].comment;
                                                    Pmode = List.actionArray[i].imgmov;
                                                    Pdownload = List.actionArray[i].download;
                                                    PutubeUrl = List.actionArray[i].utubeUrl;
                                                    Pmp4Movie = List.actionArray[i].mp4Movie;
                                                    PwebmMovie = List.actionArray[i].webmMovie;
                                                    PogvMovie = List.actionArray[i].ogvMovie;
                                                    PthumbMovie = List.actionArray[i].thumbMovie;
                                                    Ptwitter = List.actionArray[i].twitter;
                                                    Pfacebook = List.actionArray[i].facebook;
                                                    Plike = List.actionArray[i].urlx;
                                                    Pcntx = i;
                                                } else if (i == cntx - 1 + 2 && i <= TotalLength) {
                                                    Ncate = List.actionArray[i].division;
                                                    Nthum = List.actionArray[i].thum;
                                                    NlargeImg = List.actionArray[i].image;
                                                    Ntitletxt = List.actionArray[i].carname;
                                                    Ntitleimg = List.actionArray[i].nameimage;
                                                    Ndescription = List.actionArray[i].comment;
                                                    Nmode = List.actionArray[i].imgmov;
                                                    Ndownload = List.actionArray[i].download;
                                                    NutubeUrl = List.actionArray[i].utubeUrl;
                                                    Nmp4Movie = List.actionArray[i].mp4Movie;
                                                    NwebmMovie = List.actionArray[i].webmMovie;
                                                    NogvMovie = List.actionArray[i].ogvMovie;
                                                    NthumbMovie = List.actionArray[i].thumbMovie;
                                                    Ntwitter = List.actionArray[i].twitter;
                                                    Nfacebook = List.actionArray[i].facebook;
                                                    Nlike = List.actionArray[i].urlx;
                                                    Ncntx = i;
                                                }
                                            }
                                        } else if (cateX == "exterior") {
                                            TotalLength = ExteList.actionExteArray.length;
                                            Ptotcnt = TotalLength;
                                            for (var i = 0; i <= TotalLength - 1; i++) {
                                                if (i == cntx - 1 && i >= 0) {
                                                    Pcate = ExteList.actionExteArray[i].division;
                                                    Pthum = ExteList.actionExteArray[i].thum;
                                                    PlargeImg = ExteList.actionExteArray[i].image;
                                                    Ptitletxt = ExteList.actionExteArray[i].carname;
                                                    Ptitleimg = ExteList.actionExteArray[i].nameimage;
                                                    Pdescription = ExteList.actionExteArray[i].comment;
                                                    Pmode = ExteList.actionExteArray[i].imgmov;
                                                    Pdownload = ExteList.actionExteArray[i].download;
                                                    PutubeUrl = ExteList.actionExteArray[i].utubeUrl;
                                                    Pmp4Movie = ExteList.actionExteArray[i].mp4Movie;
                                                    PwebmMovie = ExteList.actionExteArray[i].webmMovie;
                                                    PogvMovie = ExteList.actionExteArray[i].ogvMovie;
                                                    PthumbMovie = ExteList.actionExteArray[i].thumbMovie;
                                                    Ptwitter = ExteList.actionExteArray[i].twitter;
                                                    Pfacebook = ExteList.actionExteArray[i].facebook;
                                                    Plike = ExteList.actionExteArray[i].urlx;
                                                    Pcntx = i;
                                                } else if (i == cntx - 1 + 2 && i <= TotalLength) {
                                                    Ncate = ExteList.actionExteArray[i].division;
                                                    Nthum = ExteList.actionExteArray[i].thum;
                                                    NlargeImg = ExteList.actionExteArray[i].image;
                                                    Ntitletxt = ExteList.actionExteArray[i].carname;
                                                    Ntitleimg = ExteList.actionExteArray[i].nameimage;
                                                    Ndescription = ExteList.actionExteArray[i].comment;
                                                    Nmode = ExteList.actionExteArray[i].imgmov;
                                                    Ndownload = ExteList.actionExteArray[i].download;
                                                    NutubeUrl = ExteList.actionExteArray[i].utubeUrl;
                                                    Nmp4Movie = ExteList.actionExteArray[i].mp4Movie;
                                                    NwebmMovie = ExteList.actionExteArray[i].webmMovie;
                                                    NogvMovie = ExteList.actionExteArray[i].ogvMovie;
                                                    NthumbMovie = ExteList.actionExteArray[i].thumbMovie;
                                                    Ntwitter = ExteList.actionExteArray[i].twitter;
                                                    Nfacebook = ExteList.actionExteArray[i].facebook;
                                                    Nlike = ExteList.actionExteArray[i].urlx;
                                                    Ncntx = i;
                                                }
                                            }
                                        } else if (cateX == "interior") {
                                            TotalLength = InteList.actionInteArray.length;
                                            Ptotcnt = TotalLength;
                                            for (var i = 0; i <= TotalLength - 1; i++) {
                                                if (i == cntx - 1 && i >= 0) {
                                                    Pcate = InteList.actionInteArray[i].division;
                                                    Pthum = InteList.actionInteArray[i].thum;
                                                    PlargeImg = InteList.actionInteArray[i].image;
                                                    Ptitletxt = InteList.actionInteArray[i].carname;
                                                    Ptitleimg = InteList.actionInteArray[i].nameimage;
                                                    Pdescription = InteList.actionInteArray[i].comment;
                                                    Pmode = InteList.actionInteArray[i].imgmov;
                                                    Pdownload = InteList.actionInteArray[i].download;
                                                    PutubeUrl = InteList.actionInteArray[i].utubeUrl;
                                                    Pmp4Movie = InteList.actionInteArray[i].mp4Movie;
                                                    PwebmMovie = InteList.actionInteArray[i].webmMovie;
                                                    PogvMovie = InteList.actionInteArray[i].ogvMovie;
                                                    PthumbMovie = InteList.actionInteArray[i].thumbMovie;
                                                    Ptwitter = InteList.actionInteArray[i].twitter;
                                                    Pfacebook = InteList.actionInteArray[i].facebook;
                                                    Plike = InteList.actionInteArray[i].urlx;
                                                    Pcntx = i;
                                                } else if (i == cntx - 1 + 2 && i <= TotalLength) {
                                                    Ncate = InteList.actionInteArray[i].division;
                                                    Nthum = InteList.actionInteArray[i].thum;
                                                    NlargeImg = InteList.actionInteArray[i].image;
                                                    Ntitletxt = InteList.actionInteArray[i].carname;
                                                    Ntitleimg = InteList.actionInteArray[i].nameimage;
                                                    Ndescription = InteList.actionInteArray[i].comment;
                                                    Nmode = InteList.actionInteArray[i].imgmov;
                                                    Ndownload = InteList.actionInteArray[i].download;
                                                    NutubeUrl = InteList.actionInteArray[i].utubeUrl;
                                                    Nmp4Movie = InteList.actionInteArray[i].mp4Movie;
                                                    NwebmMovie = InteList.actionInteArray[i].webmMovie;
                                                    NogvMovie = InteList.actionInteArray[i].ogvMovie;
                                                    NthumbMovie = InteList.actionInteArray[i].thumbMovie;
                                                    Ntwitter = InteList.actionInteArray[i].twitter;
                                                    Nfacebook = InteList.actionInteArray[i].facebook;
                                                    Nlike = InteList.actionInteArray[i].urlx;
                                                    Ncntx = i;
                                                }
                                            }
                                        } else if (cateX == "movies") {
                                            TotalLength = MovieList.actionMovieArray.length;
                                            Ptotcnt = TotalLength;
                                            for (var i = 0; i <= TotalLength - 1; i++) {
                                                if (i == cntx - 1 && i >= 0) {
                                                    Pcate = MovieList.actionMovieArray[i].division;
                                                    Pthum = MovieList.actionMovieArray[i].thum;
                                                    PlargeImg = MovieList.actionMovieArray[i].image;
                                                    Ptitletxt = MovieList.actionMovieArray[i].carname;
                                                    Ptitleimg = MovieList.actionMovieArray[i].nameimage;
                                                    Pdescription = MovieList.actionMovieArray[i].comment;
                                                    Pmode = MovieList.actionMovieArray[i].imgmov;
                                                    Pdownload = MovieList.actionMovieArray[i].download;
                                                    PutubeUrl = MovieList.actionMovieArray[i].utubeUrl;
                                                    Pmp4Movie = MovieList.actionMovieArray[i].mp4Movie;
                                                    PwebmMovie = MovieList.actionMovieArray[i].webmMovie;
                                                    PogvMovie = MovieList.actionMovieArray[i].ogvMovie;
                                                    PthumbMovie = MovieList.actionMovieArray[i].thumbMovie;
                                                    Ptwitter = MovieList.actionMovieArray[i].twitter;
                                                    Pfacebook = MovieList.actionMovieArray[i].facebook;
                                                    Plike = MovieList.actionMovieArray[i].urlx;
                                                    Pcntx = i;
                                                } else if (i == cntx - 1 + 2 && i <= TotalLength) {
                                                    Ncate = MovieList.actionMovieArray[i].division;
                                                    Nthum = MovieList.actionMovieArray[i].thum;
                                                    NlargeImg = MovieList.actionMovieArray[i].image;
                                                    Ntitletxt = MovieList.actionMovieArray[i].carname;
                                                    Ntitleimg = MovieList.actionMovieArray[i].nameimage;
                                                    Ndescription = MovieList.actionMovieArray[i].comment;
                                                    Nmode = MovieList.actionMovieArray[i].imgmov;
                                                    Ndownload = MovieList.actionMovieArray[i].download;
                                                    NutubeUrl = MovieList.actionMovieArray[i].utubeUrl;
                                                    Nmp4Movie = MovieList.actionMovieArray[i].mp4Movie;
                                                    NwebmMovie = MovieList.actionMovieArray[i].webmMovie;
                                                    NogvMovie = MovieList.actionMovieArray[i].ogvMovie;
                                                    NthumbMovie = MovieList.actionMovieArray[i].thumbMovie;
                                                    Ntwitter = MovieList.actionMovieArray[i].twitter;
                                                    Nfacebook = MovieList.actionMovieArray[i].facebook;
                                                    Nlike = MovieList.actionMovieArray[i].urlx;
                                                    Ncntx = i;
                                                }
                                            }
                                        }

                                        if (cntx != 0) {
                                            $(".layer_gallery").append('<div class="layer_gallery_left"><a href="javascript:showGalleryLargeLayer(\'' + PlargeImg + '\',\'' + Ptitletxt + '\',\'' + Ptitleimg + '\',\'' + Pdescription + '\',\'' + Pmode + '\',\'' + PlargeImg + '\',\'' + PutubeUrl + '\',\'' + Pmp4Movie + '\',\'' + PwebmMovie + '\',\'' + PogvMovie + '\',\'' + PthumbMovie + '\',\'' + Ptwitter + '\',\'' + Pfacebook + '\',\'' + Plike + '\',\'' + cateX + '\',\'' + Pcntx + '\',\'' + Ptotcnt + '\');"><img src="/media/img/btn_layer_left.png" alt="previous" /></a><br /></div>');
                                        }

                                        if (cntx != totcnt - 1) {
                                            $(".layer_gallery").append('<div class="layer_gallery_right"><a href="javascript:showGalleryLargeLayer(\'' + NlargeImg + '\',\'' + Ntitletxt + '\',\'' + Ntitleimg + '\',\'' + Ndescription + '\',\'' + Nmode + '\',\'' + NlargeImg + '\',\'' + NutubeUrl + '\',\'' + Nmp4Movie + '\',\'' + NwebmMovie + '\',\'' + NogvMovie + '\',\'' + NthumbMovie + '\',\'' + Ntwitter + '\',\'' + Nfacebook + '\',\'' + Nlike + '\',\'' + cateX + '\',\'' + Ncntx + '\',\'' + Ptotcnt + '\');"><img src="/media/img/btn_layer_right.png" alt="next" /></a><br /></div>');
                                        }


                                        fadeinout('.layer_gallery', 'fadein');
                                    }

                                    function showGalleryLargeLayer2(utubeUrl) {

                                        pipMovieLayer(this, utubeUrl, 0);


//        $(".layer_gallery").empty();
//        $(".layer_gallery").append('<div class="layer_gallery_close"><a href="javascript:closeGalleryLayer(document.getElementById("resetImage").value);"><img src="/media/img/btn_layer_close2.png" alt="close" /></a><br /></div>');
//        $(".layer_gallery .layer_gallery_close a").click(function() {fadeinout('.layer_gallery','fadeout');galleryPopup();return false;});
//        if(utubeUrl !=""){
//        $(".layer_gallery").append('<div class="desc"></div>');
//        $(".layer_gallery").append('<div class="movie_player" style="margin-top:100px;"></div>');

//        $(".layer_gallery .movie_player").append('<iframe width="560" height="349" src="'+utubeUrl+'" frameborder="0" allowfullscreen></iframe>');
//        }else{
//        }

//        fadeinout('.layer_gallery','fadein');

                                        // i??i��?
//        $("#layer_gallery .movie_player").css("paddingTop",parseInt($(window).scrollTop()) + 55);
//        $("#layer_gallery .layer_gallery_close").css("top",parseInt($(window).scrollTop()));
//        $("#layer_gallery .layer_gallery_title").css("top",parseInt($(window).scrollTop()) + 16);
//        $("#layer_gallery .layer_gallery_links").css("top",parseInt($(window).scrollTop()) + 14);

                                    }

                                    function fadeinout(selector, op) {//0710
                                        if (op == "fadein") {
                                            $(selector).fadeIn();
                                        } else {
                                            $(selector).fadeOut();
                                        }
                                        var h = $(document).height();
                                        if ($('body').attr('showGallery') == 'view') {
                                            $(selector).css("height", '100%');
                                        } else {
                                            $(selector).css("height", h);
                                        }
                                    }

                                    function galleryOver() {
                                        $(".gallerylist img.cover").remove();
                                        $(".gallerylist li a").each(function () {
                                            var classname = $(this).attr("class");
                                            var appendobj = "";
                                            if (classname == "exterior") {
                                                $(this).append('<img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt="" />');
                                            } else if (classname == "interior") {
                                                $(this).append('<img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" />');
                                            } else if (classname == "movie") {
                                                $(this).append('<img src="/wcm/images/ru/cube/gallery_item_cover_movie2.png" class="cover" alt="" />');
                                            }
                                            $(this).bind("mouseover", function () {
                                                $("img.cover", $(this)).css("zIndex", 10);
                                            });
                                            $(this).bind("mouseout", function () {
                                                $("img.cover", $(this)).css("zIndex", 8);
                                            });
                                        });
                                    }

                                    function galleryPopup() {//0710
                                        var w = $(window).width();
                                        var h = $(document).height();
                                        if ($('body').attr('showGallery') == 'view') {
                                            $('.container,.footer').hide();//0710
                                            w = $(window).width();
                                        }
                                        if (w < 960) {
                                            w = 960
                                        }
                                        ;
                                        $(".layer_gallery").css("width", w).css("height", h);
                                        $(".layer_gallery .large").css("left", 0).css("top", 0);
                                        $(".layer_gallery .minimap .in .move").css("left", 0).css("top", 0);
                                    }

                                    //   function closeGalleryLayer2(){
                                    //
                                    //       if (navigator.userAgent.match(/MSIE 8.0/i)){$(".layer_gallery .movie_player iframe").attr("src","about:blank");}
                                    //       galleryPopup();
                                    //       $(".layer_gallery").empty();
                                    //       $(".layer_gallery").hide();
                                    //   }


                                    //</script>
                                <script type="text/javascript">
                                    function actionList() {
                                        this.actionArray = [];
                                    }
                                    function actionExteList() {
                                        this.actionExteArray = [];
                                    }
                                    function actionInteList() {
                                        this.actionInteArray = [];
                                    }
                                    function actionMovieList() {
                                        this.actionMovieArray = [];
                                    }
                                    function actionArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx) {
                                        this.division = division;
                                        this.thum = thum;
                                        this.image = image;
                                        this.carname = carname;
                                        this.nameimage = nameimage;
                                        this.comment = comment;
                                        this.imgmov = imgmov;
                                        this.download = download;
                                        this.utubeUrl = utubeUrl;
                                        this.mp4Movie = mp4Movie;
                                        this.webmMovie = webmMovie;
                                        this.ogvMovie = ogvMovie;
                                        this.thumbMovie = thumbMovie;
                                        this.twitter = twitter;
                                        this.facebook = facebook;
                                        this.urlx = urlx;
                                    }
                                    function actionExteArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx) {
                                        this.division = division;
                                        this.thum = thum;
                                        this.image = image;
                                        this.carname = carname;
                                        this.nameimage = nameimage;
                                        this.comment = comment;
                                        this.imgmov = imgmov;
                                        this.download = download;
                                        this.utubeUrl = utubeUrl;
                                        this.mp4Movie = mp4Movie;
                                        this.webmMovie = webmMovie;
                                        this.ogvMovie = ogvMovie;
                                        this.thumbMovie = thumbMovie;
                                        this.twitter = twitter;
                                        this.facebook = facebook;
                                        this.urlx = urlx;
                                    }
                                    function actionInteArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx) {
                                        this.division = division;
                                        this.thum = thum;
                                        this.image = image;
                                        this.carname = carname;
                                        this.nameimage = nameimage;
                                        this.comment = comment;
                                        this.imgmov = imgmov;
                                        this.download = download;
                                        this.utubeUrl = utubeUrl;
                                        this.mp4Movie = mp4Movie;
                                        this.webmMovie = webmMovie;
                                        this.ogvMovie = ogvMovie;
                                        this.thumbMovie = thumbMovie;
                                        this.twitter = twitter;
                                        this.facebook = facebook;
                                        this.urlx = urlx;
                                    }
                                    function actionMovieArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx) {
                                        this.division = division;
                                        this.thum = thum;
                                        this.image = image;
                                        this.carname = carname;
                                        this.nameimage = nameimage;
                                        this.comment = comment;
                                        this.imgmov = imgmov;
                                        this.download = download;
                                        this.utubeUrl = utubeUrl;
                                        this.mp4Movie = mp4Movie;
                                        this.webmMovie = webmMovie;
                                        this.ogvMovie = ogvMovie;
                                        this.thumbMovie = thumbMovie;
                                        this.twitter = twitter;
                                        this.facebook = facebook;
                                        this.urlx = urlx;
                                    }

                                    var List = new actionList();
                                    var ExteList = new actionExteList();
                                    var InteList = new actionInteList();
                                    var MovieList = new actionMovieList();
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_3/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_3.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_3/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_3.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_5/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_5.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_5/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_5.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_1/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_1.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_1/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_1.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/downloads/price_lists/ru_solaris_gallery_05/~renditions/5.jpg", "/media/downloads/price_lists/ru_solaris_gallery_05.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/downloads/price_lists/ru_solaris_gallery_05/~renditions/5.jpg", "/media/downloads/price_lists/ru_solaris_gallery_05.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_2/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_2.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_2/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_2.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_4/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_4.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/solaris5dr/gallery_ru_rb5_ext_4/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_ext_4.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/hw032970/~renditions/6.jpg", "/media/img/solaris5dr/hw032970.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/hw032970/~renditions/6.jpg", "/media/img/solaris5dr/hw032970.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdm1/~edisp/hw032971/~renditions/6.jpg", "/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdm1/~edisp/hw032971.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdm1/~edisp/hw032971/~renditions/6.jpg", "/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdm1/~edisp/hw032971.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/hw032972/~renditions/6.jpg", "/media/img/solaris5dr/hw032972.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/hw032972/~renditions/6.jpg", "/media/img/solaris5dr/hw032972.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/hw032973/~renditions/6.jpg", "/media/img/solaris5dr/hw032973.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/hw032973/~renditions/6.jpg", "/media/img/solaris5dr/hw032973.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/gallery_rb5_int_1/~renditions/5.jpg", "/media/img/solaris5dr/gallery_rb5_int_1.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/gallery_rb5_int_1/~renditions/5.jpg", "/media/img/solaris5dr/gallery_rb5_int_1.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/gallery_ru_rb5_int_1/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_int_1.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/gallery_ru_rb5_int_1/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_int_1.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/gallery_ru_rb5_int/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_int.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/gallery_ru_rb5_int/~renditions/5.jpg", "/media/img/solaris5dr/gallery_ru_rb5_int.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/solaris5dr/hw032975/~renditions/6.jpg", "/media/img/solaris5dr/hw032975.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/solaris5dr/hw032975/~renditions/6.jpg", "/media/img/solaris5dr/hw032975.jpg", "Solaris 5 door", "/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdy4/~edisp/tnavi_ru_solaris_5dr.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    //
                                    function cubeGalleryCustomiz(pageX, cateX) {
                                        var ix = 0;
                                        var ix2 = 0;
                                        var TotalLength = 0;

                                        // all,exterior,interior,movies �� ���������� �ٽ� �޾Ƽ� �ѷ� �ּ���.
                                        // cubeGalleryLayout()�� ���̾ƿ��� ����ϴ� �Լ��̸�, category�� �ٲ� �ֽð� ����Ͻø� �˴ϴ�.  all / interior / exterior / movies �� ��1

                                        cubeGalleryLayout($(".cubebox .item .gallerybox"), cateX);

                                        if (pageX == 1) {
                                            ix = 0;
                                        } else {
                                            ix = pageX * 20 - 20;
                                        }
                                        ix2 = (pageX * 20);
                                        if (cateX == "All") {
                                            TotalLength = List.actionArray.length;
                                            if (ix2 > TotalLength) {
                                                ix2 = TotalLength
                                            }
                                            for (var iall = ix; iall < ix2; iall++) { // ��� 20�� ���
                                                cubeGalleryList(List.actionArray[iall].division, List.actionArray[iall].thum, List.actionArray[iall].image, List.actionArray[iall].carname, List.actionArray[iall].nameimage, List.actionArray[iall].comment, List.actionArray[iall].imgmov, List.actionArray[iall].download, List.actionArray[iall].utubeUrl, List.actionArray[iall].mp4Movie, List.actionArray[iall].webmMovie, List.actionArray[iall].ogvMovie, List.actionArray[iall].thumbMovie, List.actionArray[iall].twitter, List.actionArray[iall].facebook, List.actionArray[iall].urlx, iall, TotalLength, cateX);
                                            }
                                        } else if (cateX == "exterior") {
                                            TotalLength = ExteList.actionExteArray.length;
                                            if (ix2 > TotalLength) {
                                                ix2 = TotalLength
                                            }
                                            for (var iext = ix; iext < ix2; iext++) { // ��� 20�� ���
                                                cubeGalleryList(ExteList.actionExteArray[iext].division, ExteList.actionExteArray[iext].thum, ExteList.actionExteArray[iext].image, ExteList.actionExteArray[iext].carname, ExteList.actionExteArray[iext].nameimage, ExteList.actionExteArray[iext].comment, ExteList.actionExteArray[iext].imgmov, ExteList.actionExteArray[iext].download, ExteList.actionExteArray[iext].utubeUrl, ExteList.actionExteArray[iext].mp4Movie, ExteList.actionExteArray[iext].webmMovie, ExteList.actionExteArray[iext].ogvMovie, ExteList.actionExteArray[iext].thumbMovie, ExteList.actionExteArray[iext].twitter, ExteList.actionExteArray[iext].facebook, ExteList.actionExteArray[iext].urlx, iext, TotalLength, cateX);
                                            }
                                        } else if (cateX == "interior") {
                                            TotalLength = InteList.actionInteArray.length;
                                            if (ix2 > TotalLength) {
                                                ix2 = TotalLength
                                            }
                                            for (var iint = ix; iint < ix2; iint++) { // ��� 20�� ���
                                                cubeGalleryList(InteList.actionInteArray[iint].division, InteList.actionInteArray[iint].thum, InteList.actionInteArray[iint].image, InteList.actionInteArray[iint].carname, InteList.actionInteArray[iint].nameimage, InteList.actionInteArray[iint].comment, InteList.actionInteArray[iint].imgmov, InteList.actionInteArray[iint].download, InteList.actionInteArray[iint].utubeUrl, InteList.actionInteArray[iint].mp4Movie, InteList.actionInteArray[iint].webmMovie, InteList.actionInteArray[iint].ogvMovie, InteList.actionInteArray[iint].thumbMovie, InteList.actionInteArray[iint].twitter, InteList.actionInteArray[iint].facebook, InteList.actionInteArray[iint].urlx, iint, TotalLength, cateX);
                                            }
                                        } else if (cateX == "movies") {
                                            TotalLength = MovieList.actionMovieArray.length;
                                            if (ix2 > TotalLength) {
                                                ix2 = TotalLength
                                            }
                                            for (var imov = ix; imov < ix2; imov++) { // ��� 20�� ���
                                                cubeGalleryList(MovieList.actionMovieArray[imov].division, MovieList.actionMovieArray[imov].thum, MovieList.actionMovieArray[imov].image, MovieList.actionMovieArray[imov].carname, MovieList.actionMovieArray[imov].nameimage, MovieList.actionMovieArray[imov].comment, MovieList.actionMovieArray[imov].imgmov, MovieList.actionMovieArray[imov].download, MovieList.actionMovieArray[imov].utubeUrl, MovieList.actionMovieArray[imov].mp4Movie, MovieList.actionMovieArray[imov].webmMovie, MovieList.actionMovieArray[imov].ogvMovie, MovieList.actionMovieArray[imov].thumbMovie, MovieList.actionMovieArray[imov].twitter, MovieList.actionMovieArray[imov].facebook, MovieList.actionMovieArray[imov].urlx, imov, TotalLength, cateX);
                                            }
                                        }

                                        //cubeGalleryPaging()�� ��� ��� �Ŀ� �������� ����¡ �κ��� ����ϴ� �Լ��Դϴ�.
                                        //���ڸ� �ٲ� �ֽø� �˴ϴ�. ���ڴ� ���� ����� ��ü ����¡ ��ȣ �Դϴ�..

                                        cubeGalleryPaging(pageX, TotalLength, cateX); // ����¡ ���

                                        // prev/next ��ư ��ũ �Ŵ� ���
                                        //$(".gallerylist ul li.paging a.prev").click(function() {�������ڵ�})
                                        //$(".gallerylist ul li.paging a.next").click(function() {�������ڵ�})

                                        galleryOver();
                                        galleryPopup();
                                    }
                                    //</script>
                                <div class="cube_title">
                                    <img src="/media/img/ru_cubetitle_gallery.png" alt="ru_cubetitle_gallery"/><br/></div>

                                <div class="gallerybox"><div class="gallery_category"><ul><li class="on"><a href="javascript:cubeGalleryCustomiz('1','All');" >Bce</a></li><li><a href="javascript:cubeGalleryCustomiz('1','exterior');" >Экстерьер</a></li><li><a href="javascript:cubeGalleryCustomiz('1','interior');" >Интерьер</a></li></ul></div><ul class="gallerylist"><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_3.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_3.jpg','','','','','','twitter link','facebook link','http://test.com','All','0','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_3/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_5.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_5.jpg','','','','','','twitter link','facebook link','http://test.com','All','1','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_5/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_1.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_1.jpg','','','','','','twitter link','facebook link','http://test.com','All','2','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_1/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdcx/~edisp/ru_solaris_gallery_05.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdcx/~edisp/ru_solaris_gallery_05.jpg','','','','','','twitter link','facebook link','http://test.com','All','3','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdcx/~edisp/ru_solaris_gallery_05/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_2.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_2.jpg','','','','','','twitter link','facebook link','http://test.com','All','4','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_2/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_4.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_4.jpg','','','','','','twitter link','facebook link','http://test.com','All','5','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_ext_4/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032970.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032970.jpg','','','','','','twitter link','facebook link','http://test.com','All','6','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032970/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032971.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032971.jpg','','','','','','twitter link','facebook link','http://test.com','All','7','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032971/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032972.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032972.jpg','','','','','','twitter link','facebook link','http://test.com','All','8','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032972/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032973.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032973.jpg','','','','','','twitter link','facebook link','http://test.com','All','9','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032973/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_rb5_int_1.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_rb5_int_1.jpg','','','','','','twitter link','facebook link','http://test.com','All','10','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_rb5_int_1/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_int_1.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_int_1.jpg','','','','','','twitter link','facebook link','http://test.com','All','11','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_int_1/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_int.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_int.jpg','','','','','','twitter link','facebook link','http://test.com','All','12','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/gallery_ru_rb5_int/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032975.jpg','Solaris 5 door','/wcm/idc/groups/sggeneralcontent/@ru/documents/sitecontent/mdaw/mdc0/~edisp/tnavi_ru_solaris_5dr.png','','image','/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032975.jpg','','','','','','twitter link','facebook link','http://test.com','All','13','14');return false;"><img src="/wcm/idc/groups/sgvehiclecontent/@hmc/documents/sitecontent/mdaw/mdmy/~edisp/hw032975/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li class="paging"><strong>1</strong> из 1</li></ul><div class="cube_shadow"><div><img src="/wcm/images/common/bg/bg_cube_shadow.png" alt=""></div></div></div>

                            </div>
                            <div class="item">


                                <style>
                                    .mostlike_option div.like .fb_edge_widget_with_comment span.fb_edge_comment_widget iframe.fb_ltr {
                                        display: none !important;
                                    }
                                </style>
                                <script type="text/javascript">
                                    var currentData;

                                    function showLodingImage() {
                                        $('.loadingbox').css("display", "block");
                                    }

                                    //임시 로딩 이미지 삭제
                                    function hideLodingImage() {
                                        $('.loadingbox').css("display", "none");
                                    }
                                    function onMostLike(index, data) {

                                        currentData = data;

                                        $("#mostlikeBest ul li").each(function (i, obj) {
                                            $(this).removeClass("on")
                                            if (index == i) {
                                                $(this).addClass("on");
                                            }
                                        });
                                        $(".mostlike_option div.like").each(function (i) {

                                            $(this).css("display", "none");
                                            if (index == i) {
                                                $(this).css("display", "block");
                                            }
                                        })
                                        createMostLike(data);

                                    }

                                    function createMostLike(data) {

                                        $("#carModelName").text(decodeURIComponent(data.modelLocalName));
                                        // 러시아만 트림코드를 다른 형태로 조합한다.
                                        //$("#trimCode").text(data.trimCode);
                                        $("#trimCode").text(decodeURIComponent(data.enginecapaName) + " " + decodeURIComponent(data.fueltypeName) + " " + decodeURIComponent(data.transName));
                                        $("#option").html("");
                                        var optionHtml;
                                        optionHtml = "<span><img  id='exteriorColorImage' src='/wcm/images/ru/cube/mostlike_exteriorcolor.png' alt='Exterior Color' class='option_title' />";
                                        optionHtml += "<img id='exTemp' width='28' height='28' src='" + data.exteriorColorImagePath + "' />";
                                        optionHtml += "<br/>" + decodeURIComponent(data.exteriorColorName) + "</span>";
                                        optionHtml += "<span><img id='interiorColorImage' src='/wcm/images/ru/cube/mostlike_interiorcovering.png' alt='Interior Covering' class='option_title' />";
                                        optionHtml += "<img width='28' height='28' id='inTemp' src='" + data.interiorColorImagePath + "' />";
                                        optionHtml += "<br/>" + decodeURIComponent(data.interiorColorName) + "</span>";

                                        $("#option").html(optionHtml);
                                        $("#carImage").empty().append("<img src='" + data.carImagePath + "' /><br />");

                                    }


                                    var initMostLike = function (data, textStatus) {

                                        hideLodingImage();
                                        if (data == "") {
                                            return false;
                                        }
                                        if (data.error) {
                                            hmc.alert(decodeURIComponent(data.error));
                                        }
                                        else {

                                            var firstData;
                                            $.each(data, function (i, obj) {

                                                //create facebook like button
                                                $(".mostlike_option div.like").eq(i).empty();
                                                var likeButton = $("<fb:like send='false' width='200' show_faces='false' />").attr({href: obj.likeUrl, ref: obj.carBuilderSeq, onclick: ""});
                                                $(".mostlike_option div.like").eq(i).append(likeButton);
                                                FB.XFBML.parse($(".mostlike_option div.like").eq(i).get(0));

                                                //left rank list
                                                $("#mostlikeBest ul li").eq(i).find("a").empty().attr("href", "#").bind('click', function () {
                                                    onMostLike(i, obj);
                                                });
                                                $("#mostlikeBest ul li").eq(i).find("a").append("<img src='" + obj.imageUrl + "' art='" + obj.imageUrl + "'>");
                                                $("#mostlikeBest ul li").eq(i).find("a").append('<strong>' + decodeURIComponent(obj.userName) + '</strong><br />Like');

                                                if (i == 0) {
                                                    firstData = obj;
                                                }

                                            });
                                            onMostLike(0, firstData);
                                        }
                                    }

                                    function executeArea4() {
                                        hmc.commonErrorMessage = '<spring:message code="errors.server"/>';
                                        showLodingImage();

                                        $.ajaxSetup({dataType: "json"});
                                        var result = $.post(
                                            "/wcm/ru/front/sns/getHighRankLikeCarBuilder.do"
                                            , {wwn_country_code: $("#wwn_country_code").val(), modelCode: $("#modelCode").val()}
                                            , initMostLike
                                        );

                                        //Ajax 결과 처리
                                        result.success(function (re) {
                                        });

                                        result.error(function (error) {
                                            alert("most like error raise" + error);
                                            Comment.ajaxError(error);
                                            hideLodingImage();
                                        });

                                        result.complete(function (co) {

                                        });
                                    }
                                    function seeMore() {
                                        if (currentData) {
                                            var seemoreUrl = $("#wwn_link_SH-ML-011").val() + "?carBuilderSeq=" + currentData.carBuilderSeq + "&modelCode=" + $("#modelCode").val();
                                            $("#mostForm").attr("action", seemoreUrl);
                                            $("#mostForm").submit();
                                        }
                                    }
                                    function rebuilde() {
                                        if (currentData) {
                                            var rebuildeUrl = $("#wwn_link_SH-CB-030").val() + "?carBuilderSeq=" + currentData.carBuilderSeq + "&rebuildFlag=package" + "&modelCode=" + $("#modelCode").val();
                                            $("#mostForm").attr("action", rebuildeUrl);
                                            $("#mostForm").submit();
                                        }

                                    }
                                </script>

                                <input type="hidden" id="wwn_link_SH-ML-011" name="wwn_link_SH-ML-011"
                                       value="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/MostLike/detail/index.html"/>

                                <input type="hidden" id="wwn_link_SH-CB-020"
                                       value="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/BuildYourOwn/tim/index.html"/>

                                <input type="hidden" id="wwn_link_SH-CB-030"
                                       value="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/BuildYourOwn/pakage/index.html"/>

                                <form id="mostForm" method="post">
                                </form>
                                <div class="most_like">
                                    <div class="cube_title">
                                        <img src="/media/img/cubetitle_mostlike.png" alt=""/><br/>
                                    </div>
                                    <div class="mostlike_best3" id="mostlikeBest">
                                        <ul>
                                            <li class="best1 on"><a href="#"></a></li>
                                            <li class="best2"><a href="#"></a></li>
                                            <li class="best3"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                    <div class="mostlike_option" id="mostLikeOption">
                                        <div class="carname" id="carName">
                                            <strong id="carModelName"></strong><br/>

                                            <div id="trimCode"></div>
                                        </div>
                                        <div class="option" id="option">
                                        </div>
                                        <div class="car_image" id="carImage">
                                        </div>
                                        <div class="button">
                                            <a href="javascript://" onclick="seeMore();"><img alt="See Detail"
                                                                                              src="/media/img/btn_seedetail.gif"></a><a
                                                href="javascript://" onclick="rebuilde();"><img src="/media/img/btn_carbuilder.gif"
                                                                                                alt="car builder"/></a>
                                        </div>
                                        <div class="like" id="like"></div>
                                        <div class="like" id="like"></div>
                                        <div class="like" id="like"></div>
                                    </div>
                                    <div class="cube_shadow2">
                                        <div><img src="/media/img/bg_cube_shadow2.png" alt=""/></div>
                                    </div>
                                </div>
                                <div class="loadingbox">
                                    <img src="/media/img/loading.gif" alt="loading"/><br/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="prevbtn"><a href="#"><img src="/media/img/blank.gif" alt="previous"/></a><br/></div>
                    <div class="nextbtn"><a href="#"><img src="/media/img/blank.gif" alt="next"/></a><br/></div>
                    <div class="cube">&nbsp;</div>
                </div>
                <? offer_filter_auto($APPLICATION->GetCurPage()); ?>
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

                            // ì´ê¸°í ìí¤ë í¨ì
                            //cubeTalknTalkInit();

                            // ê°ê°ì íì¤í¸ë¥¼ ë¿ë ¤ ì¤ëë¤.
                            // 1) ë²í¸ 1~6
                            // 2) facebook or twitter
                            // 3) íë¡í ì´ë¯¸ì§
                            // 4) ì´ë¦
                            // 5) ë´ì©
                            //cubeTalknTalk(1,'facebook','/img_tmp/profile25.jpg','Dabby whistler','I can\'t belive my eyes. AZERA is so nice');
                            //cubeTalknTalk(2,'twitter','/img_tmp/profile25.jpg','Dabby whistler','I can\'t belive my eyes. AZERA is so nice');
                            //cubeTalknTalk(3,'facebook','/img_tmp/profile25.jpg','Dabby whistler','AZERA has a good performance to drive. It\'s really interesting for me');
                            //cubeTalknTalk(4,'twitter','/img_tmp/profile25.jpg','Dabby whistler','I can\'t belive my eyes. AZERA is so nice');
                            //cubeTalknTalk(5,'facebook','/img_tmp/profile25.jpg','Dabby whistler','AZERA has a good performance to drive. It\'s really interesting for me');
                            //cubeTalknTalk(6,'facebook','/img_tmp/profile25.jpg','Dabby whistler','I can\'t belive my eyes. AZERA is so nice');

                        }
                    }
                    //</script>
                <div class="floating_cubemenu" id="floating_cubemenu">
                    <script type="text/javascript" src="/media/js/sc_jqueryslidermin.js"></script>
                    <script type="text/javascript" src="/media/js/sc_numberformat.js"></script>
                    <script type="text/javascript" src=""></script>
                    <input type="hidden" id="modelCode" name="modelCode" value="RB"/>
                    <style>
                        .floating_cubemenu .cubemenu ul.cubeitem {
                            float: right;
                            padding: 0 10px 0 0;
                        }
                    </style>
                    <style>
                        .floating_cubemenu .cubemenu ul.cubeitem li a.gallery {
                            width: 51px;
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat 0 0;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.gallery.on {
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat 0 -65px;
                        }
                    </style>
                    <style>
                        .floating_cubemenu .cubemenu ul.cubeitem li a.mostlike {
                            width: 50px;
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat -142px 0;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.mostlike.on {
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat -142px -65px;
                        }
                    </style>
                    <div class="cubemenu">
                        <ul class="cubeitem">
                            <li style="display:none;" class="slideToGallery"><a href="#" class="gallery"
                                                                                onclick=""><span>2</span><strong>gallery</strong></a>
                            </li>
                            <li style="display:none;"><a href="#wrap" class="mostlike"
                                                         onclick=""><span>3</span><strong>mostlike</strong></a>
                            </li>
                            <li style="display:none;" class="back" style="border-bottom:5px solid blue;height:30px;position:absolute;"></li>
                        </ul>
                        <div class="information">
                            <div class="home"><h1 class="car_logo"><a href="#wrap"> <img alt="RRU_tnavi_accent5dr"
                                                                                         src="/media/img/solaris5dr/ru_tnavi_accent5dr.png"/></a><br/>
                                </h1>

                                <div class="price"><sup></sup><strong></strong></div>
                            </div>
                        </div>
                        <div class="shoppingtool">
                            <ul>
                                <li class="buildyourown"><a
                                        href="/configurator/?car_id=14"
                                        onclick="">Цены и комплектации</a></li>

                                <li id="brochure_requester">
                                    <a target="_blank" class="zing_form_toggler" for="brochures_request" data-model="Solaris" href="#" data-gtm-havas-model="solaris_5dr">Загрузить брошюру</a></li>


                                <li><a href="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/CompareCars/index.html"
                                       onclick="">Сравнить
                                        автомобили</a></li>
                                <li>
                                    <a href="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/RequestBrochure/BrochureDownload/index.html?wwn_country_code=RU&modelCode=RB&incomeType=PIP"
                                       onclick="">Запрос
                                        брошюры</a></li>


                            </ul>
                        </div>
                    </div>

                    <div class="submenu">
                        <ul>
                            <li><a href="#contents_highlights" class=" highlight"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'solaris5dr/highlights']);
                            ">Особенности</a>
                            </li>
                            <li><a href="#contents_exterior" class=" exterior"
                                   onclick="window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'solaris5dr/exterior']);
                           ">ЭКСТЕРЬЕР</a>
                            </li>
                            <li><a href="#contents_interior" class=" interior"
                                   onclick="window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'solaris5dr/interior']);
                            ">ИНТЕРЬЕР</a>
                            </li>
                            <li><a href="#contents_performance" class=" performance"
                                   onclick="window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'solaris5dr/performance']);
                           ">ДИНАМИКА</a>
                            </li>
                            <li><a href="#contents_safety" class=" safety"
                                   onclick="window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'solaris5dr/safety']);
                            ">БЕЗОПАСНОСТЬ</a>
                            </li>
                            <li><a href="#contents_convenience" class=" convenience"
                                   onclick="window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'solaris5dr/convenience']);
                            ">КОМФОРТ</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <input type="hidden" id="modelCode" name="modelCode" value="RB"/><input type="hidden" id="trakingModelCode"
                                                                                        name="trakingModelCode"
                                                                                        value="Accent5DR"/><input type="hidden"
                                                                                                                  id="wwn_country_code"
                                                                                                                  name="wwn_country_code"
                                                                                                                  value="RU"/>

                <div class="contents_highlights pip" id="contents_highlights">

                    <link rel="stylesheet" type="text/css" href="/media/css/pip_accent_5dr.css"/>


                    <script type="text/javascript">
                        function pipPrint() {
                            $(".cubebox .cubelist div.ui-draggable").css("left", 0);
                            fn_print();
                        }

                        function twitterOpen(url) {
                            var twitterURL = document.getElementById('hiddenTwitter').value;
                            window.open("http://twitter.com/share?url=" + twitterURL + "&text=Hyundai Motor Company", "");
                        }

                        function stumbleuponOpen(url) {
                            window.open("http://www.stumbleupon.com/submit?url=" + url + "/&title=Add stumbleupon share button' title='Share On StumbleUpon !", "");
                        }
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('.choice_btn li').click(function () {
                                var cName = $(this).attr("class");
                                $('.choice_btn li').removeClass("on");
                                $(this).addClass("on");
                                $($(this).parent().parent().parent()).attr("class", "change_img " + cName).find('.img .lazy').lazyload();
                            });
                            pipLoadImg();
                        });
                    </script>
                    <script type='text/javascript' src='/media/js/jquery.lazyload.min.js'></script>
                    <div class="title">Особенности</div>
                    <script type='text/javascript'>
                        function shareToGoogle(url) {
                            window.open('https://plus.google.com/share?url=' + url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                        }
                    </script>
                    <ul class="print_share">
                        <li><span>Поделиться</span><a href="javascript://"
                                                      onclick="sharefacebook(document.location.href)"><img
                                    src="/media/img/hw000676.png" alt="icon_facebook_general.gif"/></a><a href="javascript://"
                                                                                                          onclick="twitterOpen(document.location.href)"><img
                                    src="/media/img/hw000667.gif" alt="icon_twitter_general.gif"/></a></li>
                        <li class="print"><span>Распечатать</span><a href="#" class="print"
                                                                     onclick=""><img
                                    alt="icon_print_general.gif" src="/media/img/hw000673.gif"/></a></li>
                    </ul>
                    <div class="highlights3">
                        <ul>
                            <li class="one">
                                <div class="img" style="padding-bottom:15px;">
                                    <img src="/media/img/solaris5dr/ru_solaris_hig_20121112_01.jpg" alt=""/><br/></div>
                                <div class="description">
                                    <strong>Исключительная экономичность &mdash; всего 5,9 л на 100 км пути</strong><br/>

                                    <p>Solaris проезжает 100 км, расходуя всего 5,9 л топлива, что делает его исключительно экономичным
                                        и практичным.</p><span class="caution">Расход топлива указан для двигателя 1,4л с МКПП.</span>
                                </div>
                            </li>
                            <li class="two">
                                <div class="img" style="padding-bottom:15px;">
                                    <img src="/media/img/solaris5dr/hw035228.jpg" alt="img_pip_accent_highlights_02.jpg"/><br/></div>
                                <div class="description">
                                    <strong>Внушительная мощность</strong><br/>

                                    <p>Солидные технические характеристики при скромных размерах. Вот что выгодно отличает Solaris.
                                        Бензиновый двигатель Gamma обладает большой мощностью и крутящим моментом. Эта модель обеспечит
                                        вам новые впечатления от вождения.</p>
                                </div>
                            </li>
                            <li class="three">
                                <div class="img" style="padding-bottom:15px;">
                                    <img src="/media/img/solaris5dr/hw025510.jpg" alt="img_pip_accent_highlights_02.jpg"/><br/></div>
                                <div class="description">
                                    <strong>Продвинутая система безопасности</strong><br/>

                                    <p>Solaris оснащается системой ABS и может иметь шесть подушек безопасности, включая две
                                        фронтальные, две боковые и шторки безопасности.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="overview2">
                        <ul>
                            <li><span class="img"><img alt="RU_solaris5dr_hig_2013Mar06_04"
                                                       src="/media/img/solarisnew5dr/ru_solaris_highlight_mar06_01.jpg"/></span><span
                                    class="subject">ВНЕШНИЙ ВИД</span><span class="description">Стиль, технологии, безопасность &mdash;
                                    легко понять, что выделяет Solaris в ряду других компактных автомобилей.</span></li>

                            <li><span class="img"><img alt="" src="/media/img/solarisnew/hw025514.jpg"></span><span class="subject">САЛОН</span><span class="description">Внутри он продолжает очаровывать непринужденной элегантностью, плавными очертаниями, восхитительными контрастами.</span>
                            </li>

                            <li><span class="img"><img src="/media/img/solaris5dr/hw035229.jpg" alt="img_pip_accent_highlights_06.jpg"/></span><span
                                    class="subject">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</span><span class="description">Экономичность и экологическая сознательность не мешают этому автомобилю потакать вашему стремлению к комфорту и уверенности. Это настоящий шедевр инженерной мысли, который может оценить каждый.</span>
                            </li>
                        </ul>
                        <ul>
                            <li><span class="img"><img src="/media/img/solarisnew5dr/hw025516.jpg" alt="hw025516.jpg"/></span><span
                                    class="subject">БЕЗОПАСНОСТЬ
</span><span class="description">Solaris объединяет в себе новейшие системы активной и пассивной безопасности. Это является частью непреходящего стремления компании Hyundai защитить пассажиров от всех возможных угроз.</span>
                            </li>

                            <li><span class="img"><img alt="" src="/media/img/solarisnew/hw025517.jpg"></span><span class="subject">УДОБСТВО</span><span class="description">Новая аудиосистема с ярким дисплеем
и эргономичной панелью управления будет отличным дополнением к Вашей поездке.</span>
                            </li>

                            <li class="downloadBrochuresPIPLink"><a href="/brochures" onclick=""><span class="pdfIcon"></span><span class="arrow"></span><span class="text"></span><span class="text2"></span><img alt='RU_gotodownloads' src='/media/img/RU_gotodownloads.jpg'/></a><br/></li>
                        </ul>
                    </div>
                </div>
                <div class="contents_exterior pip" id="contents_exterior">
                    <div class="title">ЭКСТЕРЬЕР</div>
                    <script type='text/javascript'>
                        function shareToGoogle(url) {
                            window.open('https://plus.google.com/share?url=' + url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                        }
                    </script>
                    <ul class="print_share">
                        <li><span>Поделиться</span><a href="javascript://"
                                                      onclick=" sharefacebook(document.location.href)"><img
                                    src="/media/img/hw000676.png" alt="icon_facebook_general.gif"/></a><a href="javascript://"
                                                                                                          onclick="twitterOpen(document.location.href)"><img
                                    src="/media/img/hw000667.gif" alt="icon_twitter_general.gif"/></a></li>
                        <li class="print"><span>Распечатать</span><a href="#" class="print"
                                                                     onclick=""><img
                                    alt="icon_print_general.gif" src="/media/img/hw000673.gif"/></a></li>
                    </ul>
                    <div class="visual_pip v1">
                        <div class="intro_texts left">
                            <h3>Смелый взгляд в<br/>
                                будущее.</h3>

                            <p>Неповторимые акценты выделяют его из общего потока:<br/>интегрированные в кузов оригинальные
                                противотуманные<br/>фары, широкая и основательная хромированная решетка<br/>радиатора, изогнутые фары и
                                капот, очертания и размеры<br/>которого намекают на скрытую под ним мощь. Эта модель<br/>поистине
                                соткана из &laquo;струящихся линий&raquo;.</p>
                        </div>

                        <img height="543" alt="" src="/media/img/transparent.gif" width="940"
                             data-original="/media/img/solarisnew/ru_solaris_exteriort_mar06_01.jpg" class="lazy"/>

                    </div>
                    <div class="img02"><img height="206" usemap="#exterior2" alt="" id="exterior2" src="/media/img/transparent.gif"
                                            width="940" data-original="/media/img/solarisnew/ru_solaris_lights_0.jpg"
                                            class="lazy"/><br/>
                        <map name="exterior2">
                            <area
                                onclick="var obj=document.getElementById('exterior2');if(obj.src.indexOf('/media/img/solaris5dr/ru_solaris_h_lights.jpg') != -1) {obj.src='/media/img/solaris5dr/ru_solaris_h_lights.jpg';} else {obj.src='/media/img/solaris5dr/ru_solaris_h_lights.jpg';};return false;"
                                alt="" coords="864,134,921,187" href="#" shape="rect"/>
                        </map>
                        <div class="texts">
                            <strong>Эффективные фары</strong><br/>
                            Обеспечивая оптимальное освещение ночью, фары с черной окантовкой создают роскошный образ днем.
                        </div>
                    </div>
                    <div class="visual_pip v2">
                        <div class="intro_texts right">
                            <h3>Небольшой по размеру,<br/>мощный по сути</h3>

                            <p>Современный дизайн со всех точек зрения. Плавные линии, бампер с отражателями и обтекаемые<br/>задние
                                фонари выглядят роскошно и гармонично.
                            </p>
                        </div>
                        <img height="588" alt="" src="/media/img/transparent.gif" width="940"
                             data-original="/media/img/solarisnew5dr/ru_solaris5door_ext_01_030613.jpg" class="lazy"/></div>
                    <div class="img04"><img height="323" alt="" src="/media/img/transparent.gif" width="491"
                                            data-original="/media/img/solaris5dr/hw035076.jpg" class="lazy"/>

                        <div class="texts">
                            <strong>Задние фонари <br/>не останутся незамеченными</strong><br/>
                            Органично дополняя образ автомобиля сзади и с боков, обтекаемые задние фонари обеспечивают очень яркое
                            свечение и хорошо заметны для других участников движения.

                        </div>
                    </div>
                    <div class="visual_pip v3">
                        <div class="intro_texts center">
                            <h3>Всегда подтянутый и спортивный</h3>

                            <p>Силуэт наводит на мысли о купе благодаря плавным очертаниям крыши, сдвинутому вперед салону и резким<br/>линиям
                                в нижней части кузова.
                            </p>
                        </div>
                        <img height="529" alt="" src="/media/img/transparent.gif" width="940"
                             data-original="/media/img/solarisnew5dr/ru_solaris4door_ext_01_030613.jpg" class="lazy"/></div>












                    <div class="morelist">
                        <ul class="clearfix">

                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025529.jpg" width="220" data-original="/media/img/solarisnew/hw025529.jpg" class="lazy" style="display: inline;"><br></span><span class="description"><strong>Твоя стильная сторона</strong><br>
                        Плавные изгибы передних фар и характерная решетка радиатора создают неповторимый образ автомобиля.</span>
                            </li>


                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025527.jpg" width="220" data-original="/media/img/solarisnew/hw025527.jpg" class="lazy" style="display: inline;"><br></span>
                <span class="description">
                    <strong>Головные фары</strong>
                    <br>
                    Головные фары обеспечивают хорошее освещение дороги, облегчая движение в ночное время
                </span>
                            </li>

                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025528.jpg" width="220" data-original="/media/img/solarisnew/hw025528.jpg" class="lazy" style="display: inline;"><br></span><span class="description"><strong>Наружные зеркала с повторителями указателей поворота</strong><br> Большие зеркала заднего вида
с повторителями поворотников обеспечивают великолепный обзор и дополнительную безопасность при маневре.</span>
                            </li>


                            <li><span class="img">
                    <img height="141" alt="" src="/media/img/solarisnew/ru_solaris_ext_20121108_02-102.jpg" width="220" data-original="/media/img/solarisnew/ru_solaris_ext_20121108_02-102.jpg" class="lazy" style="display: inline;">
                        <br>
                </span>

                <span class="description">
                    <strong> Дневные ходовые огни</strong>
                    <br>
                </span>
                            </li>



                        </ul>

                        <ul class="clearfix">
                            <li>
                <span class="img">
                    <img height="141" alt="" src="/media/img/solarisnew/hw025529-12.jpg" width="220" data-original="/media/img/solarisnew/hw025529-12.jpg" class="lazy" style="display: inline;">

                                       <br></span><span class="description">
                                       <strong>Передний бампер и новая решетка радиатора <br> </strong>
                                       <br>
               </span>
                            </li>





                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew5dr/ru_solaris_ext_20121108_02.jpg" width="220" data-original="/media/img/solarisnew5dr/ru_solaris_ext_20121108_02.jpg" class="lazy" style="display: inline;"><br></span><span class="description"><strong>Колесные
                                        диски</strong><br> Покупателям Solaris предлагаются на выбор 15-дюймовые стальные и 16-дюймовые легкосплавные диски с привлекательным дизайном, которые обеспечивают автомобилю самую современную внешность.</span>
                            </li>

                            <li><span class="img">
                    <img height="141" alt="" src="/media/img/solarisnew5dr/ru_solaris_ext_20121108_02-19.jpg" width="220" data-original="/media/img/solarisnew5dr/ru_solaris_ext_20121108_02-19.jpg" class="lazy" style="display: inline;">
                    <br>
                </span>

                <span class="description">
                    <strong>Задний противотуманный фонарь</strong><br>
                </span>
                            </li>

                            <li><span class="img">
                    <img height="141" alt="" src="/media/img/solarisnew/ru_solaris_ext_20121108_02-145.jpg" width="220" data-original="/media/img/solarisnew/ru_solaris_ext_20121108_02-145.jpg" class="lazy" style="display: inline;">
                        <br>
                </span>

                <span class="description">
                    <strong>Увеличенный объем бачка стеклоомывателя (4,7 л)</strong>
                    <br>
                </span>
                            </li>


                        </ul>

                    </div>




                </div>
                <div class="contents_interior pip" id="contents_interior">
                    <div class="title">ИНТЕРЬЕР</div>
                    <script type='text/javascript'>
                        function shareToGoogle(url) {
                            window.open('https://plus.google.com/share?url=' + url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                        }
                    </script>
                    <ul class="print_share">
                        <li><span>Поделиться</span><a href="javascript://"
                                                      onclick="sharefacebook(document.location.href)"><img
                                    src="/media/img/hw000676.png" alt="icon_facebook_general.gif"/></a><a href="javascript://"
                                                                                                          onclick="twitterOpen(document.location.href)"><img
                                    src="/media/img/hw000667.gif" alt="icon_twitter_general.gif"/></a></li>
                        <li class="print"><span>Распечатать</span><a href="#" class="print"
                                                                     onclick=""><img
                                    alt="icon_print_general.gif" src="/media/img/hw000673.gif"/></a></li>
                    </ul>
                    <div class="visual_pip v1">
                        <div class="intro_texts left white">
                            <h3>Здесь все сделано для вас</h3>

                            <p>К вашим услугам эргономичное пространство, имеющее металлический оттенок,<br/>которое приятно для глаз и
                                практично при ежедневном использовании. Двери<br/>продолжают гармоничный изгиб панели, а обновленный
                                спортивный дизайн<br/>дверных рукояток завершает общую картину.
                            </p>
                        </div>
                        <img height="460" alt="" src="/media/img/transparent.gif" width="940"
                             data-original="/media/img/solarisnew/ru_solaris_int_20121108_01.jpg" class="lazy"/></div>
                    <div class="img02">
                        <div class="texts">

                        </div>
                    </div>

                    <div class="morelist">
                        <ul class="clearfix">


                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw063204.jpg" width="220" data-original="/media/img/solarisnew/hw063204.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
<strong>Карманы для хранения вещей задних пассажиров</strong><br>
</span></li>



                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw063205.jpg" width="220" data-original="/media/img/solarisnew/hw063205.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
<strong>Мягкие подлокотники на дверях</strong>
</span></li>

                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw063206.jpg" width="220" data-original="/media/img/solarisnew/hw063206.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
  <strong>Многофункциональный руль позволит управлять основными функциями автомобиля, не отрывая от него рук</strong><br>
</span></li>

                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025541.jpg" width="220" data-original="/media/img/solarisnew/hw025541.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
<strong>Новая обивка сидений не только эффектна, но и прочна</strong><br>

                </span>
                            </li>

                        </ul>

                        <ul class="clearfix">


                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew5dr/ru_accent5door_int_01_20121120-1.jpg" data-original="/media/img/solarisnew5dr/ru_accent5door_int_01_20121120-1.jpg" widht="220" class="lazy" style="display: inline;"><br></span><span class="description">
  <strong>Объем багажного отделения</strong><br> Объем перевозимого груза составляет внушительные 1345&nbsp;л. При сложенных задних сиденьях
</span></li>
                        </ul>
                    </div>



                </div>
                <div class="contents_performance pip" id="contents_performance">
                    <div class="title">ДИНАМИКА</div>
                    <script type='text/javascript'>
                        function shareToGoogle(url) {
                            window.open('https://plus.google.com/share?url=' + url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                        }
                    </script>
                    <ul class="print_share">
                        <li><span>Поделиться</span><a href="javascript://"
                                                      onclick="sharefacebook(document.location.href)"><img
                                    src="/media/img/hw000676.png" alt="icon_facebook_general.gif"/></a><a href="javascript://"
                                                                                                          onclick="twitterOpen(document.location.href)"><img
                                    src="/media/img/hw000667.gif" alt="icon_twitter_general.gif"/></a></li>
                        <li class="print"><span>Распечатать</span><a href="#" class="print"
                                                                     onclick=""><img
                                    alt="icon_print_general.gif" src="/media/img/hw000673.gif"/></a></li>
                    </ul>
                    <div class="engine">
                        <style type="text/css">
                            .contents_performance .engine ul.choice_btn {
                                background: url('/media/img/solaris5dr/n_bg_accent5dr.gif') no-repeat 0 0;
                            }
                        </style>
                        <div class="change_img t1">
                            <div class="engine_wrap">
                                <h3 class="tit e1">Gamma 1.4</h3>

                                <div class="img e1"><img height="512" alt="Gamma 1.4" src="/media/img/transparent.gif" width="514"
                                                         data-original="/media/img/solaris5dr/hw061880.jpg" class="lazy"/></div>
                                <h3 class="tit e2">Gamma 1.6</h3>

                                <div class="img e2"><img height="512" alt="Gamma 1.6" src="/media/img/transparent.gif" style=""
                                                         width="514" data-original="/media/img/solaris5dr/hw061879.jpg" class="lazy"/>
                                </div>

                                <div class="img e4"><img height="512" alt="1.6 CRDi  diesel engine with VGT"
                                                         src="/media/img/transparent.gif" style="" width="514" data-original=""
                                                         class="lazy"/></div>
                                <div class="txt">
                                    Снижение массы двигателей улучшило показатели экономичности, при этом Gamma 1.4 CVVT выдает
                                    максимальную мощность 107 л. с. при 6300 об/мин, Gamma 1.6 CVVT — 123 л. с. при 6300 об/мин.
                                    <br/>
                                    Под капотом Solaris не меньше преимуществ, чем снаружи.
                                </div>
                                <ul class="choice_btn" style="width:230px">
                                    <li class="t1">Gamma 1.4</li>
                                    <li class="t2">Gamma 1.6</li>
                                </ul>
                            </div>
                        </div>
                    </div>



                    <div class="img02">
                        <div class="left" style="padding-top:82px;"><img height="340" alt="" src="/media/img/solarisnew/ru_solaris_per_20121108_01.jpg" width="460" data-original="/media/img/solarisnew/ru_solaris_per_20121108_01.jpg" class="lazy" style="display: inline;"><br>

                            <div class="texts" style="width:454px;">
                                <strong>Автоматическая коробка передач</strong>
                                <br>6-ступенчатая АКПП* наделяет Solaris отменной динамикой и высокой плавностью.
                            </div>
                        </div>
                        <div class="right" style="padding-top:88px;">
                            <img height="340" alt="" src="/media/img/solarisnew/ru_solaris_per_20121108_02.jpg" width="460" data-original="/media/img/solarisnew/ru_solaris_per_20121108_02.jpg" class="lazy" style="display: inline;"><br>



                            <div class="texts" style="width:454px">
                                <strong>Механическая коробка передач</strong>
                                <br>6-ступенчатая МКПП* обеспечит комфортную и экономичную езду на высоких скоростях.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="automargin" style="width:960px; text-align:center; margin: 0 auto;">
                    <p>* - только для двигателя 1,6л</p>
                </div>

                <div class="contents_safety pip" id="contents_safety">
                    <div class="title">БЕЗОПАСНОСТЬ</div>
                    <script type='text/javascript'>
                        function shareToGoogle(url) {
                            window.open('https://plus.google.com/share?url=' + url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                        }
                    </script>
                    <ul class="print_share">
                        <li><span>Поделиться</span><a href="javascript://"
                                                      onclick="sharefacebook(document.location.href)"><img
                                    src="/media/img/hw000676.png" alt="icon_facebook_general.gif"/></a><a href="javascript://"
                                                                                                          onclick="twitterOpen(document.location.href)"><img
                                    src="/media/img/hw000667.gif" alt="icon_twitter_general.gif"/></a></li>
                        <li class="print"><span>Распечатать</span><a href="#" class="print"
                                                                     onclick=""><img
                                    alt="icon_print_general.gif" src="/media/img/hw000673.gif"/></a></li>
                    </ul>
                    <div class="visual_pip v1">
                        <div class="intro_texts left">
                            <h3>Антиблокировочная<br/> система (ABS)</h3>

                            <p>При торможении автомобиля активируется антиблокировочная система, <br />
                                которая
                                в случае необходимости предотвращает блокировку колес и <br /> соскальзывание автомобиля в занос, <br />а также помогает сохранить управление автомобилем.</p>
                        </div>
                        <img height="490" alt="" src="/media/img/transparent.gif" width="940"
                             data-original="/media/img/solarisnew/ru_solaris_saf_20121108_01-2.jpg" class="lazy"/></div>
                    <div class="img02"><img height="302"
                                            alt="Airbags all round, the way they should be. 6 airbags provide all-round protection. One for the driver, one for the front-seat passenger, two curtain airbags running the length of the cabin, plus two side airbags. / Stronger, better rigid body structure. Stronger suspension mounting and body using circular structure for center filler."
                                            src="/media/img/transparent.gif" width="540"
                                            data-original="/media/img/solarisnew5dr/hw039257.jpg" class="lazy"/><br/>

                        <div class="texts">
                            <strong>Подушки безопасности окружают вас со всех сторон</strong><br/>
                            6 подушек безопасности обеспечивают полную круговую защиту. Одна подушка для водителя, одна для пассажира на
                            переднем сиденье, две шторки безопасности во всю длину салона и две боковые подушки.
                        </div>
                    </div>

                    <div class="morelist">
                        <ul class="clearfix">
                            <li><span class="img"><img height="141" alt="" src="/media/img/solaris/hw025549.jpg" width="220" data-original="/media/img/solaris/hw025549.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
      <strong>Преднатяжители ремней безопасности</strong><br> В случае столкновения датчики немедленно регистрируют удар и автоматически натягивают ремни безопасности вокруг нижней части туловища для лучшей защиты.
  </span></li>
                            <li>
                                <span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025549-0.jpg" width="220" data-original="/media/img/solarisnew/hw025549-0.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
      <strong>Высокоэффективная тормозная система</strong><br>C четырьмя тормозными дисками обеспечивает идеальное замедление
и стабильную работу систем ABS и EBD даже при очень динамичном вождении.
  </span></li>


                            <!-- <li>
                                          <span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025549-099.jpg" width="220" data-original="/media/img/solarisnew5dr/hw025549-099.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
                                              <strong>6 подушек безопасности</strong>
                                              <br>
                                              Фронтальные
                                              и боковые передние подушки безопасности, а также шторки безопасности для передних и задних пассажиров делают Solaris одним из самых защищенных автомобилей
                                              в своем классе.
                                          </span>
                                      </li> -->


                        </ul>
                    </div>

                </div>




                <div class="contents_convenience pip" id="contents_convenience">
                    <div class="title">КОМФОРТ</div>
                    <script type='text/javascript'>
                        function shareToGoogle(url) {
                            window.open('https://plus.google.com/share?url=' + url, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                        }
                    </script>
                    <ul class="print_share">
                        <li><span>Поделиться</span><a href="javascript://"
                                                      onclick="sharefacebook(document.location.href)"><img
                                    src="/media/img/hw000676.png" alt="icon_facebook_general.gif"/></a><a href="javascript://"
                                                                                                          onclick="twitterOpen(document.location.href)"><img
                                    src="/media/img/hw000667.gif" alt="icon_twitter_general.gif"/></a></li>
                        <li class="print"><span>Распечатать</span><a href="#" class="print"
                                                                     onclick=""><img
                                    alt="icon_print_general.gif" src="/media/img/hw000673.gif"/></a></li>
                    </ul>
                    <div class="visual_pip v1">
                        <div class="intro_texts left">
                            <h3>Приборная панель<br/> Supervision</h3>

                            <p>Приборная панель с тахометром и спидометром имеет бело-синюю<br/> подсветку, что позволяет водителю легко
                                считывать данные в любых<br/> условиях. Необходимая информация отображается визуально и<br/> дублируется
                                звуковыми сигналами: серьезный функционал в сочетании с<br/> элегантным спортивным стилем.</p>

                            <div class="thumb"><img height="90" alt="" src="/media/img/transparent.gif" width="140"
                                                    data-original="/media/img/solaris5dr/hw035106.jpg" class="lazy"/><br/>
                                Обычная приборная панель
                            </div>
                            <p><strong>Маршрутный компьютер</strong><br/> Бортовой компьютер сообщит вам полезную информацию,<br/>
                                например время в пути и оставшийся запас хода по топливу.<br/> Здесь же вы найдете индикатор ECO Drive,
                                который поможет<br/>добиться наилучшей экономичности при управлении автомобилем.</p>
                        </div>
                        <img height="497" alt="" src="/media/img/transparent.gif" class="img lazy" width="460"
                             data-original="/media/img/solarisnew/ru_solaris_con_nov08-12.jpg"/>

                        <div class="img_text"></div>
                    </div>
                    <div class="img02"><img height="302" alt="" src="/media/img/transparent.gif" width="849"
                                            data-original="/media/img/solarisnew5dr/hw039239.jpg" class="lazy"/><br/>

                        <div class="texts">
                            <strong>Полностью автоматический климат-контроль позаботится о каждом</strong><br/> В качестве опции
                            доступен автоматический климат-контроль. Вам достаточно просто задать желаемую температуру, об остальном
                            система позаботится сама, обеспечив комфорт и уют для всех, кто находится на борту автомобиля.
                        </div>
                        <div class="img_text">
            <span style="float:left;margin-right:50px;">Автоматический<br/>
климат-контроль</span>

                        </div>
                    </div>
                    <div class="img03"><img height="391" alt="" src="/media/img/transparent.gif" width="940"
                                            data-original="/media/img/solaris5dr/hw039258.jpg" class="lazy"/><br/>

                        <div class="texts">
                            <strong>Органы управления на рулевом колесе</strong><br/>
                            Находясь за рулем Solaris вы можете пользоваться мобильным телефоном с поддержкой Bluetooth, при этом вам
                            даже не придется отнимать руки от руля. При помощи кнопок на руле вы также можете управлять аудиосистемой и
                            регулировать громкость телефонного разговора.
                        </div>
                        <div class="wheel">
                            <div class="text subtxt">
                                <strong>Органы управления на рулевом колесе</strong>

                                <p>Водитель может управлять аудиосистемой при помощи кнопок на левой спице рулевого колеса.</p>
                            </div>
                            <div class="text subtxt">
                                <strong>Управление телефоном с поддержкой</strong>

                                <p>Bluetooth и функцией «свободные руки»
                                    Беспроводное управление телефонными разговорами с использованием функции «свободные руки».</p>
                            </div>
                        </div>
                    </div>
                    <div class="img04"><img height="159" alt="" src="/media/img/transparent.gif" width="940"
                                            data-original="/media/img/solaris5dr/hw039240.jpg" class="lazy"/><br/>

                        <div class="texts">
                            <strong>Возможность подключения iPhone, iPod через USB-порт</strong><br/>
                            USB-порт на передней консоли позволяет вам подключать iPhone, iPod, MP3-плеер или другие мобильные
                            устройства мультимедиа и проигрывать любимую музыку через бортовую аудиосистему. Подключайте и слушайте,
                            дополнительная настройка не требуется.                    <!-- 2012-04-10 --><span class="i_notice">iPhone является зарегистрированным товарным знаком Apple Inc.</span>
                        </div>
                    </div>
                    <div class="img05"><img height="788" alt="" src="/media/img/transparent.gif" width="940"
                                            data-original="/media/img/solaris5dr/hw063216.jpg" class="lazy"/><br/>

                        <div class="texts">
                            <strong>Датчики парковки</strong><br/>
                            Датчики в заднем бампере реагируют на
                            объекты, которых вы не видите, и предупреждают о них звуковым сигналом.
                        </div>
                    </div>

                    <div class="morelist">
                        <ul class="clearfix">
                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025556.jpg" width="220" data-original="/media/img/solarisnew/hw025556.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
      <strong>Аудиосистема</strong><br> Аудиосистема с радио, CD, MP3, портами USB и AUX имеет 4 обычных и 2 высокочастотных громкоговорителя, которые обеспечат высококачественное звучание в пути.
  </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/solaris/hw025558.jpg" width="220" data-original="/media/img/solaris/hw025558.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
  <strong>Кнопка пуска\остановки двигателя и электронный ключ</strong><br>
  Высокие технологии помогут запустить двигатель. Для этого нажмите кнопку пуска двигателя.
</span></li>

                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw063203.jpg" width="220" data-original="/media/img/solarisnew/hw063203.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
                  <strong>Обогрев лобового стекла. Всего одно нажатие на кнопку — и лед на стекле исчезнет без следа, а поездка станет более безопасной</strong>
                  <br>
              </span></li>


                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025537.jpg" width="220" data-original="/media/img/solarisnew/hw025537.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
              <strong>Рулевая колонка с регулировкой по вылету и высоте</strong><br>

            </span></li>

                        </ul>

                        <ul class="clearfix">


                            <!-- <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025541-1.jpg" width="220" data-original="/media/img/solarisnew/hw025541-1.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
                                <strong>Камера заднего вида и зеркало с автоматическим затемнением</strong><br>

                                </span>
                            </li> -->

                            <li><span class="img"><img height="141" alt="" src="/media/img/solarisnew/hw025541-2.jpg" width="220" data-original="/media/img/solarisnew/hw025541-2.jpg" class="lazy" style="display: inline;"><br></span><span class="description">
                <strong>Руль с подогревом</strong><br>

                </span>
                            </li>

                        </ul>
                    </div>



                </div>


                <div class="spec_message">
                    <div>* - Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа
                        транспортного средства.<br/>** - Показатели расхода топлива и массы выделяемого CO2 представлены согласно
                        методике испытаний по Правилам ЕЭК ООН №83 и 101<br/></div>
                </div>

                <!-- <div id="contents_pricelist" class="contents_pricelist pip">
                    <div class="title">Цены</div>





                </div> -->
                <div class="contents_accessories pip" id="contents_accessories"></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>