<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Купить Hyundai H1 в Воронеже. Цена на минивэн Хендай Старекс н1");
$APPLICATION->SetTitle("H-1");
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


    <input type="hidden" name="irCalName" id="irCalName" value="H-1 | HYUNDAI - NEW THINKING NEW POSSIBILITIES "/><input
    type="hidden" name="irCalDesc" id="irCalDesc"
    value="Hyundai motor company - Hyundai H1 highlights, exterior, interior, performance, safety, convenience, specifications, accessories, reviews "/><input
    type="hidden" name="irCalLink" id="irCalLink" value="/media/img/h1/hw013628.jpg"/><input type="hidden"
                                                                                             name="resetImage"
                                                                                             id="resetImage"
                                                                                             value="aaa"/><input
    type="hidden" name="carName" id="carName" value=""/><input type="hidden" name="NameImage" id="NameImage"
                                                               value=""/><input type="hidden" name="imageNum"
                                                                                id="imageNum" value=""/><input
    type="hidden" name="lastNum" id="lastNum" value=""/><input type="hidden" name="example" id="example" value=""/>

    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/ru_RU/all.js"></script>
    <script type="text/javascript" src="/media/js/sc_json2.js"></script>
    <script type="text/javascript" src="/media/js/sc_support_ru.js"></script>

    <script type="text/javascript">
        function sharefacebook(url) {
            var bothImage = document.getElementById("resetImage").value;
            var aaabbb = document.getElementById("example");
            aaabbb.value = url;

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
        WCM.sitePath = "/H1"
    </script>
    <script type='text/javascript' src=""></script>
    <script>var firstCube = 1;</script>
    <div class="wrap" id="wrap">


        <link rel="stylesheet" type="text/css" href="/media/css/styles_RU_.css"/>

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
                        <div class="items ui-draggable" style="width: 300%;">
                            <div class="item">
                                <script>
                                    //
                                    function cubeMainMovie(vYoutubeURL) {

                                        pipMovieLayer(this, vYoutubeURL, 0);


                                        $(".cubebox .cubelist .items a img.movie").click(function() {
                                            // 1)	ÃÂ«ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ URL (youtubeÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ iframeÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ¤ÃÂ«ÃÂ¥ÃÂ¼ ÃÂ¬ÃÂ°ÃÂ¾ÃÂ¬ÃÂÃÂ iframeÃÂ¬ÃÂÃÂ srcÃÂ«ÃÂ¥ÃÂ¼ ÃÂ¬ÃÂÃÂÃÂ«ÃÂ ÃÂ¥)
                                            // 2)	ÃÂ¬ÃÂÃÂÃÂ«ÃÂÃÂÃÂ¬ÃÂ°ÃÂ¨ ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¦ÃÂ (ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ¤ÃÂ­ÃÂÃÂ¸)
                                            // 3)	ÃÂ¬ÃÂÃÂÃÂ«ÃÂÃÂÃÂ¬ÃÂ°ÃÂ¨ ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¦ÃÂ (ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¯ÃÂ¸ÃÂ¬ÃÂ§ÃÂ)
                                            // 4)	ÃÂ­ÃÂÃÂ´ÃÂ«ÃÂÃÂ¹ ÃÂ«ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ´ÃÂ­ÃÂÃÂ
                                            // 5)	movie (ÃÂ­ÃÂÃÂ­ÃÂ¬ÃÂÃÂ)
                                            // 6)	ÃÂ«ÃÂÃÂ¤ÃÂ¬ÃÂÃÂ´ÃÂ«ÃÂ¡ÃÂÃÂ«ÃÂÃÂ ÃÂ«ÃÂ§ÃÂÃÂ­ÃÂÃÂ¬
                                            // 7)	ÃÂ­ÃÂÃÂ¸ÃÂ¬ÃÂÃÂÃÂ­ÃÂÃÂ° ÃÂ«ÃÂ§ÃÂÃÂ­ÃÂÃÂ¬ (ÃÂ¬ÃÂ¶ÃÂÃÂ­ÃÂÃÂ ÃÂ¬ÃÂÃÂ´ ÃÂ«ÃÂ¶ÃÂÃÂ«ÃÂ¶ÃÂ ÃÂªÃÂµÃÂ¬ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂªÃÂ´ÃÂÃÂ­ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ)
                                            // 8)	ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ´ÃÂ¬ÃÂÃÂ¤ÃÂ«ÃÂ¶ÃÂ ÃÂ«ÃÂ§ÃÂÃÂ­ÃÂÃÂ¬ (ÃÂ¬ÃÂ¶ÃÂÃÂ­ÃÂÃÂ ÃÂ¬ÃÂÃÂ´ ÃÂ«ÃÂ¶ÃÂÃÂ«ÃÂ¶ÃÂ ÃÂªÃÂµÃÂ¬ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂªÃÂ´ÃÂÃÂ­ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ)
                                            // 9)   Stumble Upon ÃÂ«ÃÂ²ÃÂÃÂ­ÃÂÃÂ¼URL, ÃÂ«ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂÃÂ¬ÃÂÃÂ¼ÃÂ«ÃÂÃÂÃÂ«ÃÂ§ÃÂ ÃÂ«ÃÂÃÂ¤ÃÂ¬ÃÂÃÂ´ÃÂªÃÂ°ÃÂ (ÃÂ¬ÃÂ¶ÃÂÃÂ­ÃÂÃÂ ÃÂ¬ÃÂÃÂ´ ÃÂ«ÃÂ¶ÃÂÃÂ«ÃÂ¶ÃÂ ÃÂªÃÂµÃÂ¬ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂªÃÂ´ÃÂÃÂ­ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ ÃÂ­ÃÂÃÂÃÂ¬ÃÂÃÂ)
                                            // 10)	Like ÃÂ«ÃÂ²ÃÂÃÂ­ÃÂÃÂ¼ URL
                                            // 11)	main (ÃÂ­ÃÂÃÂ­ÃÂ¬ÃÂÃÂ)
                                            showGalleryLargeLayer("http://www.youtube.com/embed/vtb2XLpAMBw?rel=0","azera","/img_tmp/txt_azera_layer.png","High Glass Sun Roof","movie","downloadurl","twitter link","facebook link","stumbleupon link","http://test.com","main");
                                        });
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
                                    //</script>
                                <div class="info">
                                    <img alt="RU_h-1_pip" src="/media/img/h1/ru_h-1_pip.png"/><br/></div>

                                <img class="car" alt="H-1" src="/media/img/h1/hw015515.png"/>
                                <style>
                                    .fb_edge_widget_with_comment span.fb_edge_comment_widget {
                                        top: -185px !important;
                                        left: -250px !important;
                                    }
                                </style>


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
                                            tmpCateBtn += '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" >Bce</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');">Экстерьер</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');">Интерьер</a></li>';
                                        } else if (cate == "exterior") {
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" >Bce</a></li>' +
                                                '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        } else if (cate == "interior") {
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" >Bce</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        } else {
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" >Bce</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                                '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                        }
                                        if (MovieLength > 0) {
                                            if (cate == "All" || cate == "exterior" || cate == "interior") {
                                                tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'movies\');">Видео</a></li>' + '</ul></div>';
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
                                                $(".layer_gallery .layer_gallery_links").append('<a href="#" onClick="sharefacebook(document.location.href)"><img src="/media/img/hw000676.gif" alt="" /></a> ');
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
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026408/~renditions/5.jpg", "/media/img/h1/hw026408.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026408/~renditions/5.jpg", "/media/img/h1/hw026408.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026409/~renditions/5.jpg", "/media/img/h1/hw026409.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026409/~renditions/5.jpg", "/media/img/h1/hw026409.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026410/~renditions/5.jpg", "/media/img/h1/hw026410.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026410/~renditions/5.jpg", "/media/img/h1/hw026410.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026411/~renditions/5.jpg", "/media/img/h1/hw026411.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026411/~renditions/5.jpg", "/media/img/h1/hw026411.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026412/~renditions/5.jpg", "/media/img/h1/hw026412.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026412/~renditions/5.jpg", "/media/img/h1/hw026412.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026413/~renditions/5.jpg", "/media/img/h1/hw026413.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026413/~renditions/5.jpg", "/media/img/h1/hw026413.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026414/~renditions/5.jpg", "/media/img/h1/hw026414.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026414/~renditions/5.jpg", "/media/img/h1/hw026414.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026415/~renditions/5.jpg", "/media/img/h1/hw026415.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026415/~renditions/5.jpg", "/media/img/h1/hw026415.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026416/~renditions/5.jpg", "/media/img/h1/hw026416.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026416/~renditions/5.jpg", "/media/img/h1/hw026416.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026417/~renditions/5.jpg", "/media/img/h1/hw026417.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026417/~renditions/5.jpg", "/media/img/h1/hw026417.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("exterior", "/media/img/h1/hw026418/~renditions/6.jpg", "/media/img/h1/hw026418.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/h1/hw026418/~renditions/6.jpg", "/media/img/h1/hw026418.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026419/~renditions/5.jpg", "/media/img/h1/hw026419.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026419/~renditions/5.jpg", "/media/img/h1/hw026419.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026420/~renditions/6.jpg", "/media/img/h1/hw026420.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026420/~renditions/6.jpg", "/media/img/h1/hw026420.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026421/~renditions/6.jpg", "/media/img/h1/hw026421.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026421/~renditions/6.jpg", "/media/img/h1/hw026421.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026422/~renditions/6.jpg", "/media/img/h1/hw026422.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026422/~renditions/6.jpg", "/media/img/h1/hw026422.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026423/~renditions/6.jpg", "/media/img/h1/hw026423.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026423/~renditions/6.jpg", "/media/img/h1/hw026423.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026424/~renditions/6.jpg", "/media/img/h1/hw026424.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026424/~renditions/6.jpg", "/media/img/h1/hw026424.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026425/~renditions/6.jpg", "/media/img/h1/hw026425.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026425/~renditions/6.jpg", "/media/img/h1/hw026425.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                </script>
                                <script>
                                    List.actionArray.push(new actionArray("interior", "/media/img/h1/hw026426/~renditions/6.jpg", "/media/img/h1/hw026426.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
                                    InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/h1/hw026426/~renditions/6.jpg", "/media/img/h1/hw026426.jpg", "H-1", "/media/img/h1/hw015032.png", "", "image", "downloadurl", "", "", "", "", "", "twitter link", "facebook link", 'http://test.com'));
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
                                    <img alt="Gallery" src="/media/img/cubetitle_gallery.png"/>
                                    <h2 style="font-size: 32px;">Фото Hyundai H1</h2>
                                </div>
                                <div class="gallerybox">

                                    <div class="gallerybox"><div class="gallery_category"><ul><li class="on"><a href="javascript:cubeGalleryCustomiz('1','All');">Bce</a></li><li><a href="javascript:cubeGalleryCustomiz('1','exterior');">Экстерьер</a></li><li><a href="javascript:cubeGalleryCustomiz('1','interior');">Интерьер</a></li></ul></div><ul class="gallerylist"><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026408.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026408.jpg','','','','','','twitter link','facebook link','http://test.com','All','0','19');return false;"><img src="/media/img/h1/hw026408/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026409.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026409.jpg','','','','','','twitter link','facebook link','http://test.com','All','1','19');return false;"><img src="/media/img/h1/hw026409/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026410.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026410.jpg','','','','','','twitter link','facebook link','http://test.com','All','2','19');return false;"><img src="/media/img/h1/hw026410/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026411.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026411.jpg','','','','','','twitter link','facebook link','http://test.com','All','3','19');return false;"><img src="/media/img/h1/hw026411/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026412.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026412.jpg','','','','','','twitter link','facebook link','http://test.com','All','4','19');return false;"><img src="/media/img/h1/hw026412/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026413.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026413.jpg','','','','','','twitter link','facebook link','http://test.com','All','5','19');return false;"><img src="/media/img/h1/hw026413/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026414.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026414.jpg','','','','','','twitter link','facebook link','http://test.com','All','6','19');return false;"><img src="/media/img/h1/hw026414/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026415.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026415.jpg','','','','','','twitter link','facebook link','http://test.com','All','7','19');return false;"><img src="/media/img/h1/hw026415/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026416.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026416.jpg','','','','','','twitter link','facebook link','http://test.com','All','8','19');return false;"><img src="/media/img/h1/hw026416/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026417.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026417.jpg','','','','','','twitter link','facebook link','http://test.com','All','9','19');return false;"><img src="/media/img/h1/hw026417/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="exterior" onclick="showGalleryLargeLayer('/media/img/h1/hw026418.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026418.jpg','','','','','','twitter link','facebook link','http://test.com','All','10','19');return false;"><img src="/media/img/h1/hw026418/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026419.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026419.jpg','','','','','','twitter link','facebook link','http://test.com','All','11','19');return false;"><img src="/media/img/h1/hw026419/~renditions/5.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026420.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026420.jpg','','','','','','twitter link','facebook link','http://test.com','All','12','19');return false;"><img src="/media/img/h1/hw026420/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026421.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026421.jpg','','','','','','twitter link','facebook link','http://test.com','All','13','19');return false;"><img src="/media/img/h1/hw026421/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026422.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026422.jpg','','','','','','twitter link','facebook link','http://test.com','All','14','19');return false;"><img src="/media/img/h1/hw026422/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026423.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026423.jpg','','','','','','twitter link','facebook link','http://test.com','All','15','19');return false;"><img src="/media/img/h1/hw026423/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026424.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026424.jpg','','','','','','twitter link','facebook link','http://test.com','All','16','19');return false;"><img src="/media/img/h1/hw026424/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt=""></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026425.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026425.jpg','','','','','','twitter link','facebook link','http://test.com','All','17','19');return false;"><img src="/media/img/h1/hw026425/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li><a href="#" class="interior" onclick="showGalleryLargeLayer('/media/img/h1/hw026426.jpg','H-1','/media/img/h1//hw015032.png','','image','/media/img/h1/hw026426.jpg','','','','','','twitter link','facebook link','http://test.com','All','18','19');return false;"><img src="/media/img/h1/hw026426/~renditions/6.jpg" alt=""><img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" style="z-index: 8;"></a></li><li class="paging"><strong>1</strong> из 1</li></ul><div class="cube_shadow"><div><img src="/media/img/bg_cube_shadow.png" alt=""></div></div></div>

                                </div>
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

                <div class="" style="margin-top:100px"><? offer_filter_auto($APPLICATION->GetCurPage()); ?></div>
                <script type='text/javascript'>
                    //
                    var cubeList = new Array();
                    // cubeList = ["home", "gallery", "mostlike"];
                    cubeList = ["home", "gallery"];
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
                            cubeExterienceCustomiz('exterior','0','');
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
                    <input type="hidden" id="modelCode" name="modelCode" value="GD"/>


                    <style>
                        .floating_cubemenu .cubemenu ul.cubeitem {
                            float: right;
                            padding: 0 10px 0 0;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.gallery {
                            width: 51px;
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat 0 0;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.gallery.on {
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat 0 -65px;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.mostlike {
                            width: 50px;
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat -142px 0;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.mostlike.on {
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat -142px -65px;
                        }

                        .floating_cubemenu .cubemenu ul.cubeitem li a.gallery_fix {
                            width: 51px;
                            background: url("/media/img/ru_bg_cubemenu_item.gif") no-repeat 0 0;
                        }
                        .slideToGallery{
                            cursor: pointer;
                            /*display: none;*/
                        }
                    </style>




                    <div class="cubemenu">
                        <ul class="cubeitem">
                            <li class="slideToGallery"><a href="#" onclick="javascript:cubeGalleryCustomiz('1','All');" class="gallery"><span>2</span><strong>gallery</strong></a></li>
                            <!-- <li><a href="#wrap" class="mostlike view360" onclick=""><span>3</span><strong>mostlike</strong></a></li> -->
                            <li class="back" style="border-bottom:5px solid blue;height:30px;position:absolute;"></li>
                        </ul>

                        <div class="information">
                            <div class="home"><h1 class="car_logo"><a href="#wrap"> <img alt="Hyundai-Motors-H-1"
                                                                                         src="/media/img/h1/hw015032.png"/></a><br/>
                                </h1>

                                <div class="price"><sup></sup><strong></strong></div>
                            </div>
                        </div>
                        <div class="shoppingtool">
                            <ul>
                                <li class="buildyourown"><a
                                        href="/configurator/?car_id=11"
                                        onclick="">Цены и комплектации</a>
                                </li>

                                <li id="brochure_requester">
                                    <a target="_blank" class="zing_form_toggler" for="brochures_request" data-model="H-1" href="#" data-gtm-havas-model="h1">Загрузить брошюру</a></li>

                                <li><a href="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/CompareCars/index.html"
                                       onclick="">Сравнить
                                        автомобили</a></li>
                                <li>
                                    <a href="http://www.hyundai.com/ru/ru/Shopping/ShoppingTools/RequestBrochure/BrochureDownload/index.html?wwn_country_code=RU&modelCode=GD&incomeType=PIP"
                                       onclick="">Запрос
                                        брошюры</a></li>

                            </ul>
                        </div>
                    </div>


                    <div class="submenu">
                        <ul>
                            <li>
                                <a href="#contents_highlights" class="highlights"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'h1/highlights']);">Особенности</a>
                            </li>
                            <li>
                                <a href="#contents_exterior" class=" exterior"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'h1/exterior']);">ЭКСТЕРЬЕР</a>
                            </li>
                            <li>
                                <a href="#contents_interior" class=" interior"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'h1/interior']);">ИНТЕРЬЕР</a>
                            </li>
                            <li>
                                <a href="#contents_performance" class=" performance"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'h1/performance']);">ДИНАМИКА</a>
                            </li>
                            <li>
                                <a href="#contents_safety" class=" safety"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'h1/safety']);">БЕЗОПАСНОСТЬ</a>
                            </li>
                            <li>
                                <a href="#contents_convenience" class=" convenience"
                                   onclick="
                   window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'h1/convenience']);">КОМФОРТ</a>
                            </li>
                        </ul>
                    </div>


                </div>

                <input type="hidden" id="modelCode" name="modelCode" value="GD"/>
                <input type="hidden" id="trakingModelCode"
                                                                                        name="trakingModelCode" value="H-1"/><input
                    type="hidden" id="wwn_country_code" name="wwn_country_code" value="RU"/>

                <div class="contents_highlights general" id="contents_highlights">
                    <script>
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
                                    <img src="/media/img/h1/hw026474.png" alt=""/><br/></div>
                                <div class="description">
                    <span class="Apple-style-span"
                          style="widows: 2; text-transform: none; background-color: rgb(239,239,237); text-indent: 0px; font: 12px/18px Arial,AppleGothic,sans-serif,Helvetica; white-space: normal; orphans: 2; letter-spacing: normal; color: rgb(51,51,51); word-spacing: 0px"><strong
                            style="color: rgb(51,51,51); font-size: 15px; font-weight: bold">&laquo;Лучший автомобиль
                            Австралии&raquo;</strong> <br/>
</span>

                                    <p style="padding-bottom: 0px; line-height: 18px; border-right-width: 0px; margin: 0px; padding-left: 0px; padding-right: 0px; border-top-width: 0px; border-bottom-width: 0px; color: rgb(102,102,102); font-size: 12px; border-left-width: 0px; padding-top: 0px">
                                        Австралийская автомобильная ассоциация два года подряд называла H-1 &laquo;Лучшим автомобилем
                                        Австралии&raquo; в категории &laquo;Автомобиль для перевозки пассажиров&raquo;.</p>
                                </div>
                            </li>
                            <li class="two">
                                <div class="img" style="padding-bottom:15px;">
                                    <img src="/media/img/h1/hw061846.png" alt="Ru_h1_Hig_2012Sep19_02"/><br/></div>
                                <div class="description">
                    <span class="Apple-style-span"
                          style="widows: 2; text-transform: none; background-color: rgb(239,239,237); text-indent: 0px; font: 12px/18px Arial,AppleGothic,sans-serif,Helvetica; white-space: normal; orphans: 2; letter-spacing: normal; color: rgb(51,51,51); word-spacing: 0px"><strong
                            style="color: rgb(51,51,51); font-size: 15px; font-weight: bold">Способный к
                            маневру</strong> <br/> </span>

                                    <p style="padding-bottom: 0px; line-height: 18px; border-right-width: 0px; margin: 0px; padding-left: 0px; padding-right: 0px; border-top-width: 0px; border-bottom-width: 0px; color: rgb(102,102,102); font-size: 12px; border-left-width: 0px; padding-top: 0px">
                                        Узкие улочки и резкие повороты &ndash; это не проблема для водителя H-1. Несмотря на то, что
                                        длина автомобиля более 5 метров, минимальный радиус поворота не превышает 5,6 метров.</p>
                                </div>
                            </li>
                            <li class="three">
                                <div class="img" style="padding-bottom:15px;">
                                    <img src="/media/img/h1/hw063144.png" alt=""/><br/></div>
                                <div class="description">
                    <span class="Apple-style-span"
                          style="widows: 2; text-transform: none; background-color: rgb(239,239,237); text-indent: 0px; font: 12px/18px Arial,AppleGothic,sans-serif,Helvetica; white-space: normal; orphans: 2; letter-spacing: normal; color: rgb(51,51,51); word-spacing: 0px"><strong
                            style="color: rgb(51,51,51); font-size: 15px; font-weight: bold">Различные варианты
                            расположения сидений</strong><br/> </span>

                                    <p style="padding-bottom: 0px; line-height: 18px; border-right-width: 0px; margin: 0px; padding-left: 0px; padding-right: 0px; border-top-width: 0px; border-bottom-width: 0px; color: rgb(102,102,102); font-size: 12px; border-left-width: 0px; padding-top: 0px">
                                        Водители могут более практично использовать внутреннее пространство, изменяя расположение
                                        сидений в салоне.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="overview2">
                        <ul>
                            <li><span class="img"><img src="/media/img/h1/hw063145.jpg" alt=""/></span><span class="subject">ВНЕШНИЙ ВИД<br/></span><span
                                    class="description">- Фары<br/> - Задние фонари комбинированного типа<br/> - Противотуманные фары</span>
                            </li>
                            <li><span class="img"><img src="/media/img/h1/hw063146.jpg" alt=""/></span><span class="subject">САЛОН<br/></span><span
                                    class="description">- Многофункциональные сиденья</span></li>
                            <li><span class="img"><img src="/media/img/h1/hw035825.jpg" alt=""/></span><span class="subject">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ<br/></span><span
                                    class="description">- Двигатель A2 2.5 CRDi (VGT)<br/> - Коробка передач<br/> - Подвеска<br/> - Улучшенная маневренность</span>
                            </li>
                        </ul>
                        <ul>
                            <li><span class="img"><img src="/media/img/h1/ru_h1_hil_07_oct17.jpg" alt=""/></span><span class="subject">БЕЗОПАСНОСТЬ</span><span
                                    class="description">- Система подушек безопасности<br/> - Дисковые тормоза</span></li>
                            <li><span class="img"><img src="/media/img/h1/ru_h1_hil_08_oct17.jpg" alt="Ru_H1_Hil_08_Oct17"/></span><span
                                    class="subject">УДОБСТВО<br/></span><span
                                    class="description">- Климат-контроль с раздельным управлением (кабина/салон)<br/>
										- USB/AUX разъемы для подключения внешних аудиоустройств<br/>
										- Пульт управления центральным замком в раскладном ключе + сигнализация<br/>
										- Bluetooth</span>
                            </li>
                            <li class="downloadBrochuresPIPLink"><a href="/brochures" onclick=""><span class="pdfIcon"></span><span class="arrow"></span><span class="text"></span><span class="text2"></span><img alt='RU_gotodownloads' src='/media/img/RU_gotodownloads.jpg'/></a><br/></li>

                        </ul>
                    </div>
                </div>
                <div class="contents_exterior general" id="contents_exterior">
                    <div class="title">ЭКСТЕРЬЕР<br/></div>
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
                    <div class="visual_pip">
                        <div class="intro_texts pos_lt white">
                            <style type="text/css">
                                .general .visual_pip .intro_texts.pos_lt {
                                    right: 40px;
                                }
                            </style>
                            <h3 style="text-align: right">Захватывающее путешествие<br/>
                                начинается здесь</h3>

                            <p style="text-align: right">Представьте себе следующую ситуацию. <br/>
                                Микроавтобус H-1 без труда вмещает группу <br/>
                                сотрудников одной компании или просто старых <br/>
                                друзей и доставляет их из города в аэропорт. <br/>
                                Все готово к путешествию, багаж загружен, <br/>
                                и пассажиры увлеченно обсуждают то, что им <br/>
                                предстоит увидеть в ближайшие дни. Восьмиместный <br/>
                                салон автомобиля обеспечивает удобную посадку/высадку <br/>
                                пассажиров. Здесь вполне достаточно места и для <br/>
                                пассажиров, и для их багажа. Боковые окна увеличивают <br/>
                                обзор и защищают от шума.</p>
                        </div>
                        <img height="461" alt="" src="/media/img/transparent.gif" data-original="/media/img/h1/hw063148.jpg" width="940"
                             class="lazy"/></div>
                    <div class="freelist">
                        <ul>
                            <li class="left clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                             data-original="/media/img/h1/hw035827.jpg" width="540"
                                                                             class="lazy"/><br/></span><span class="txt">
                        <span class="subtitle">Фары<br/>
</span>Изящно встроенные в кузов фары характерной формы выдают в H-1 члена семейства Hyundai.
                    </span></li>
                            <li class="right clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                              data-original="/media/img/h1/hw035828.jpg" width="540"
                                                                              class="lazy"/><br/></span><span class="txt">
                        <span class="subtitle">Задние фонари комбинированного типа<br/>
</span>Блоки задних фонарей плавно перетекают на бока автомобиля и объединяют в себе стоп-сигналы, огни заднего хода, указатели поворота и отражатели.
                    </span></li>
                            <li class="left clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                             data-original="/media/img/h1/hw035829.jpg" width="540"
                                                                             class="lazy"/><br/></span><span class="txt">
                        <span class="subtitle">Противотуманные фары<br/>
</span> Комплектация микроавтобуса может включать противотуманные фары, которые аккуратно встроены в нижнюю часть переднего бампера.
                    </span></li>
                        </ul>
                    </div>
                    <div class="morelist">
                        <ul class='clearfix'>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063149.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Наклонные двери</strong> <br/> Благодаря шарнирному креплению передние двери открываются
                      под определенным углом, что облегчает водителю и переднему пассажиру доступ внутрь автомобиля.</p>
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw035831.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Микроантенна</strong><br/>
                      Устанавливаемая в стандартной комплектации антенна на крыше обеспечит хороший прием радио.</p>
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw013639.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Обтекаемые боковые стекла</strong> <br/>
                      Многоместные версии фургона H-1 снабжены боковыми стеклами, выполненными заподлицо с кузовом.
                      Такие стекла смотрятся более эстетично и снижают уровень шума.</p>
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063150.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Хромированная решетка радиатора</strong><br/> В большинстве стран доступна стильная опция в
                      виде хромированного покрытия для характерной решетки радиатора Hyundai.</p>
                </span></li>
                        </ul>
                        <ul class='clearfix'>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw035833.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Боковые накладки</strong><br/>
                      Между колесными арками топовых версий микроавтобуса установлены привлекательные боковые накладки.
                  </p>
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw013642.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>16-дюймовые легкосплавные диски</strong><br/>
                      H-1 оснащается колесными дисками увеличенного диаметра.</p>
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw013644.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Тройные форсунки стеклоомывателя</strong><br/>
                      Обновленные высокоэффективные тройные форсунки стеклоомывателя улучшают видимость и не создают
                      помех для встречного потока воздуха.</p>
                </span></li>
                        </ul>
                    </div>
                </div>
                <div class="contents_interior general" id="contents_interior">
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
                    <div class="visual_pip">
                        <div class="intro_texts pos_rt white">
                            <h3 style="text-align: right">Универсальный, комфортабельный <br/> и элегантный</h3>

                            <p style="text-align: right"><span
                                    style="color: #ffffff">Инженеры Hyundai разработали интерьер, который <br/> ничем не уступает интерьерам современных <br/> высококлассных легковых автомобилей по уровню <br/> комфорта и стиля. Достаточно упомянуть такие <br/> элементы, как механизм переключения передач на <br/> центральной консоли и переключатели, встроенные <br/> в рукоятку двери водителя и приборную панель. </span>
                            </p>
                        </div>
                        <img height="461" alt="" src="/media/img/transparent.gif" data-original="/media/img/h1/hw039785.jpg" width="940"
                             class="lazy"/></div>
                    <div class="freelist">
                        <ul>
                            <li class="gallery right clearfix"><span class="img"><img height="339" alt=""
                                                                                      src="/media/img/transparent.gif"
                                                                                      data-original="/media/img/h1/hw063151.jpg"
                                                                                      width="620" class="lazy"/><br/><ul
                                        class="gallery_link">
                                        <li><img height="56" alt="" src="/media/img/transparent.gif"
                                                 data-original="/media/img/h1/hw061847.jpg" width="200" class="lazy"/></li>
                                    </ul></span><span class="txt">
                    <span class="subtitle">Перемены придают жизни остроту</span>Команда дизайнеров Hyundai разработала интерьер, который не уступит салонам большинства современных высококлассных легковых автомобилей. Вам остается только наслаждаться безупречными формами и качеством отделки его компонентов, по достоинству оценивая достижения дизайнеров, конструкторов и специалистов.
                </span></li>
                            <li class="left clearfix">
                <span class="img"style="width:230px;"><img style="padding-left:52px;" alt="" src="/media/img/transparent.gif"
                                                           data-original="/media/img/h1/hw016531.png"
                                                           class="lazy"/></span>
                <span class="txt" style="width:590px;">
                    <span class="subtitle">Многофункциональная компоновка сидений</span> Интеллектуальная конструкция позволяет складывать, сдвигать и откидывать сиденья. В любых обстоятельствах обязательно найдется такая комбинация, которая подойдет для ваших целей. (Доступность различных комбинаций сидений может различаться в зависимости от страны.)
                </span></li>
                        </ul>
                    </div>
                    <div class="morelist">
                        <ul class='clearfix'>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063164.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Органы управления электроприводом стеклоподъемников</strong><br/> Как обычно, мы внимательны к
                  мелочам: подлокотник водительской двери снабжен изящными встроенными кнопками для управления
                  стеклоподъемниками и регулировки зеркал заднего вида.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063223.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Панель управления</strong><br/> Среди других радующих глаз особенностей конструкции приборной
                  панели &mdash; органы управления противотуманными фарами и реостатом.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063224.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Отделение между задними сиденьями</strong><br/> Небольшое отделение для мелочей между задними
                  сиденьями на некоторых моделях может также использоваться как поднос и подставка для напитков.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063225.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Солнцезащитный козырек</strong> <br/> Солнцезащитный козырек со стороны водителя снабжен
                  удобным карманом для квитанций и накладных.</p>
            </span></li>
                        </ul>
                        <ul class='clearfix'>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063226.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Отделение для солнцезащитных очков / лампа для чтения карт</strong> <br/> На потолке крепится
                  консоль с раскрывающимся вниз отделением для хранения солнцезащитных очков и лампы для чтения карт.
              </p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063227.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Электрохромное зеркало</strong> <br/> Салонное зеркало микроавтобуса электрохромного типа
                  автоматически затемняется в случае попадания дальнего света идущего сзади автомобиля.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063228.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Салонное освещение</strong><br/> На выбор предлагается шесть цветов подсветки салона, которая
                  осуществляется при помощи размещенной на потолке лампы салонного освещения светодиодного типа.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063229.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Подстаканники</strong> <br/> Консоль, расположенная между водителем и передним пассажиром,
                  снабжена выдвижным держателем для двух бутылок или стаканов.</p>
            </span></li>
                        </ul>
                        <ul class='clearfix'>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063230.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Фонари в дверях</strong><br/> По краям передних дверей микроавтобуса расположены встроенные
                  фонари, которые зажигаются при открытии дверей.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063231.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Складывающееся сиденье<br/> </strong>В 12-местной модификации четвертый ряд сидений
                  складывается и сдвигается вперед, чтобы освободить дополнительное пространство для багажа.</p>
            </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw063232.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
              <p><strong>Двойные карманы в дверях<br/> </strong>Передние двери снабжены двойными карманами, которые
                  легко вместят все многообразие журналов, карт и документов, столь необходимых в путешествии.</p>
            </span></li>
                        </ul>
                    </div>
                </div>
                <div class="contents_performance general" id="contents_performance">
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
                    <div class="visual_pip">
                        <div class="intro_texts pos_lt white">
                            <h3>Мощь, утонченность
                                и качество</h3>

                            <p>Независимо от того, какой двигатель на нем установлен &mdash; бензиновый или дизельный, <br/>
                                новый H-1 гарантированно обеспечит впечатляющую мощность в сочетании с присущей <br/>
                                Hyundai бескомпромиссной надежностью и экологичностью. Автомобиль может оснащаться <br/>
                                6-ступенчатой ручной коробкой передач, а также 5- или 4-ступенчатой автоматической <br/>
                                коробкой передач для оптимального распределения массы и динамического равновесия.</p>
                        </div>
                        <img height="243" alt="" src="/media/img/transparent.gif" data-original="/media/img/h1/hw039786.jpg" width="940"
                             class="lazy"/></div>
                    <div class="freelist">
                        <ul>
                            <li class="right clearfix"><span class="img"><img height="401" alt="" src="/media/img/transparent.gif"
                                                                              data-original="/media/img/h1/hw035834.jpg" width="540"
                                                                              class="lazy"/><br/></span><span class="txt">
                    <span class="subtitle">A2 2.5 CRDi (VGT)</span> <br/>
<strong class="em">Вид топлива: дизельное</strong> <br/>
<strong class="em">Рабочий объем: 2497 см3</strong> <br/>
<strong class="em">Макс. мощность: 170 л. с. при 3600 об/мин</strong><br/>
<strong class="em">Макс. крутящий момент: 392 Н·м при 2000~2500 об/мин</strong>
                </span></li>
                            <li class="tinybox clearfix"><span class="subimg"><span class="img"><img height="100" alt=""
                                                                                                     src="/media/img/transparent.gif"
                                                                                                     data-original="/media/img/h1/hw038749.jpg"
                                                                                                     width="140" class="lazy"/></span>
                        <p class="desc"><strong>A2 2.5 CRDi (VGT)</strong> <br/>
                            Вид топлива: дизельное<br/>
                            Рабочий объем: 2497 см3<br/>
                            Макс. мощность: 170 л. с. при 3600 об/мин<br/>
                            Макс. крутящий момент: 392 Нм при 2000~2500 об/мин</p>
                    </span><span class="subimg"><span class="img"><img height="100" alt=""
                                                                       src="/media/img/transparent.gif"
                                                                       data-original="/media/img/h1/hw038751.jpg"
                                                                       width="140" class="lazy"/></span>
                        <p class="desc"><strong>Theta 2.4 MPi</strong> <br/>
                            Вид топлива: бензин<br/>
                            Рабочий объем: 2359 см3<br/>
                            Макс. мощность: 173 л. с. при 6000 об/мин<br/>
                            Макс. крутящий момент: 225 Нм при 4250 об/мин</p>
                    </span></li>
                            <li class="left clearfix"><span class="img"><img height="375" alt="" src="/media/img/transparent.gif"
                                                                             data-original="/media/img/h1/hw063233.jpg" width="540"
                                                                             class="lazy"/><br/></span><span class="txt">
                    <span class="subtitle">АКПП</span>  5-ступенчатая автоматическая коробка передач <br/> со спортивным режимом для дизельного двигателя <br/> 2.5 VGT. Она была разработана для того, <br/> чтобы сделать вождение более безопасным и <br/> непринужденным.
                </span></li>
                            <li class="tinybox clearfix"><span class="subimg"><span class="img"><img height="100" alt=""
                                                                                                     src="/media/img/transparent.gif"
                                                                                                     data-original="/media/img/h1/hw014975.jpg"
                                                                                                     width="140" class="lazy"/></span>
                        <p class="desc">
                            <strong>МКПП</strong> <br/>
                            <span>В этой новой 5-ступенчатой ручной коробке передач для заднего привода используется двухмассовый маховик, что позволило снизить уровень шума. Кроме того,   оптимизированные передаточные   числа и синхронизаторы   обеспечивают хорошую   экономичность и плавное   переключение передач.</span>
                        </p>
                    </span></li>
                            <li class="right clearfix"><span class="img"><img height="339" alt="" src="/media/img/transparent.gif"
                                                                              data-original="/media/img/h1/hw016532.png" width="620"
                                                                              class="lazy"/><br/></span><span class="txt">
                    <span class="subtitle">Зона комфорта</span> Подвеска имеет исключительно гибкую конструкцию. Она достаточно прочна, чтобы выдержать вес полностью груженого автомобиля, но в то же время достаточно мягка, чтобы обеспечить комфорт пассажиров независимо от качества дорожного покрытия.<br/>

                </span></li>
                            <li class="left clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                             data-original="/media/img/h1/hw016533.png" width="540"
                                                                             class="lazy"/><br/></span><span class="txt">
                    <span class="subtitle">Улучшенная маневренность</span> Узкие участки на центральных улицах городов или проселочных дорогах не доставят проблем водителю H-1. Несмотря на более чем пятиметровую длину, радиус поворота автомобиля не превышает 5,6&nbsp;м.<br/> &nbsp;
                </span></li>
                        </ul>
                    </div>
                </div>
                <div class="contents_safety general" id="contents_safety">
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
                    <div class="visual_pip">
                        <div class="intro_texts pos_lt white">
                            <h3>Продуманная <br/> безопасность</h3>

                            <p>Новый H-1 был оптимизирован для лучшей защиты <br/>водителя и пассажиров. Мы ни на миг не теряем <br/>
                                бдительности &mdash; чтобы вы могли чувствовать себя спокойно.</p>
                        </div>
                        <img height="243" alt="" src="/media/img/transparent.gif" data-original="/media/img/h1/ru_h1_sft_oct17_01.jpg"
                             width="940" class="lazy"/></div>
                    <div class="freelist">
                        <ul>
                            <li class="right clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                              data-original="/media/img/h1/ru_h1_sft_oct17_02.jpg"
                                                                              width="540" class="lazy"/></span><span class="txt">
                    <span class="subtitle">Система подушек безопасности<br/>
</span> Для лучшей безопасности в случае столкновения для H-1 предлагаются подушки безопасности для водителя и пассажира. Они помогают сохранить безопасное положение водителя и пассажира, а также снижают вероятность ранения обломками и позволяют создать эффективную зону безопасности.
                </span></li>
                            <li class="left clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                             data-original="/media/img/h1/hw016534.png" widht="540"
                                                                             class="lazy"/></span><span class="txt">
                    <span class="subtitle">Дисковые тормоза<br/>
</span> Большие и мощные дисковые тормоза (16 дюймов в диаметре) устанавливаются и на задние, и передние колеса. Они обеспечивают высокий уровень тормозных характеристик, который необходим при полной загрузке фургона или микроавтобуса.<br/>
<p>&nbsp;</p>
                </span></li>
                        </ul>
                    </div>
                </div>
                <div class="contents_convenience general" id="contents_convenience">
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
                    <div class="visual_pip">
                        <div class="intro_texts pos_rt white">
                            <h3 style="text-align: right">Продуманный и <br/>
                                непринужденный комфорт</h3>

                            <p style="text-align: right">Добро пожаловать в восьмиместный H-1, отличающийся комфортабельным и&nbsp;<br/>
                                просторным салоном. Это многофункциональный, стильный и роскошный <br/>автомобиль,&nbsp;в
                                котором удобно и водителю, и пассажирам.</p>
                        </div>
                        <img height="243" alt="" src="/media/img/transparent.gif" data-original="/media/img/h1/hw063167.jpg" width="940"
                             class="lazy"/></div>
                    <div class="freelist">
                        <ul>
                            <li class="right clearfix"><span class="img"><img height="295" alt="" src="/media/img/transparent.gif"
                                                                              data-original="/media/img/h1/hw016535.png" width="540"
                                                                              class="lazy"/><br/></span><span class="txt">
                    <span class="subtitle">Система кондиционирования воздуха</span> Мощная система кондиционирования воздуха претерпела конструктивные изменения и теперь включает расположенные на потолке с обеих сторон отверстия воздуховодов для большего комфорта пассажиров на задних сиденьях.
                </span></li>
                            <li class="right clearfix"><span class="img"><img height="296" alt="" src="/media/img/transparent.gif"
                                                                              data-original="/media/img/h1/hw015183.jpg" width="540"
                                                                              class="lazy"/><br/></span><span class="txt">
                    <span class="subtitle">USB/AUX разъемы для подключения внешних аудиоустройств</span> H-1 оснащается разъемом для подключения MP3-плеера или магнитофона.
                </span></li>
                        </ul>
                    </div>
                    <div class="morelist">
                        <ul class='clearfix'>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw015179.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <strong>Аудиосистема M445<br/>
                  </strong>Лучшая аудиосистема для H-1: радио, CD- и MP3-проигрыватель.
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/hw015177.jpg" width="220" class="lazy"/><br/></span><span
                                    class="description">
                  <p><strong>Центральный замок с пультом дистанционного управления<br/>
                      </strong>Двери автомобиля могут открываться и закрываться дистанционно при помощи встроенного в
                      ключ зажигания пульта дистанционного управления.</p>
                </span></li>
                            <li><span class="img"><img height="141" alt="" src="/media/img/transparent.gif"
                                                       data-original="/media/img/h1/ru_h1_con_oct17_06.jpg" width="220"
                                                       class="lazy"/><br/></span><span class="description">
                  <p><strong>Управление обдувом на задних сиденьях<br/> </strong>Две вращающиеся ручки позволяют
                      пассажирам на задних сиденьях микроавтобуса контролировать температуру и скорость работы
                      вентилятора.</p>
                </span></li>
                        </ul>
                    </div>
                </div>


                <div class="spec_message">
                    <div>* - Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа
                        транспортного средства.<br/>** - Показатели расхода топлива и массы выделяемого CO2 представлены согласно
                        методике испытаний по Правилам ЕЭК ООН №83 и 101<br/></div>
                </div>
                <!-- <div id="contents_pricelist" class="contents_pricelist general">
                    <div class="title">Цены</div>


                </div> -->
                <div class="contents_accessories general" id="contents_accessories"></div>
                <div id="floating_top" class="top"><a href="#">top</a><br/>
                </div>
            </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>