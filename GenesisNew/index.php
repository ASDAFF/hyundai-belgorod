<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Hyundai Genesis цена и комплектации. Купить Хендай Генезис в Воронеже");
$APPLICATION->SetTitle("GenesisNew");
?>




    <script type='text/javascript' src="/media/js/sc_jquery_ui_ipad.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_wwpip_flat.js"></script>
    <link rel="stylesheet" type="text/css" href="/media/css_new/css_style_ru.css"/>
    <script type='text/javascript' src="/media/js/sc_ru_google.js"></script>
    <script type='text/javascript' src="/media/js_new/sc_gt_default.js"></script>


    <!-- RuTarget -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-4SJX"
                      height="0" width="0"
                      style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var
            f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j
            ,f);})(window,document,'script','_rutarget','GTM-4SJX');</script>
    <!-- /RuTarget -->

    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P3RGXN" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P3RGXN');
    </script>
    <!-- End Google Tag Manager -->


    <input type="hidden" name="irCalName" id="irCalName" value=""/><input type="hidden" name="irCalDesc" id="irCalDesc" value=""/><input type="hidden" name="irCalLink" id="irCalLink" value=""/><input type="hidden" name="resetImage" id="resetImage" value="aaa"/><input type="hidden" name="carName" id="carName" value=""/><input type="hidden" name="NameImage" id="NameImage" value=""/><input type="hidden" name="imageNum" id="imageNum" value=""/><input type="hidden" name="lastNum" id="lastNum" value=""/><div id="fb-root"></div><script src="http://connect.facebook.net/ru_RU/all.js"/><script type="text/javascript" src="/wcm/idc/groups/sgsitedesignasset/@hmc/documents/sitedesignasset/mdaw/mde5/~edisp/sc_json2.js"></script><script type="text/javascript" src="/media/js/sc_support_ru.js"></script><script type="text/javascript">


    FB.init({
        appId:'404977486202351', cookie:true,
        status:true, xfbml:true
    });
</script><script type="text/javascript">

    FB.Event.subscribe('edge.create', function(href, response) {
        if (href) {
            SnsSupport.updateLike(href, response._attr.ref);
        }else{
            $('#fanpageLike').hide();
            hideTranslucency();
            Comment.sendComment(Comment.snsObject);
        }
    });

    FB.Event.subscribe('edge.remove', function(href, response) {
        if (href) {
            SnsSupport.updateLike(href, response._attr.ref);
        }else{
            $('#fanpageLike').hide();
            hideTranslucency();
            Comment.sendComment(Comment.snsObject);
        }
    });

</script><script type="text/javascript">
    function sharefacebook(url){
        var bothImage = document.getElementById("resetImage").value;
        if(bothImage == "aaa"){
            var share = {

                method: 'feed',

                link : url,

                name : document.getElementById("irCalName").value,

                description : document.getElementById("irCalDesc").value,

                picture : document.getElementById("irCalLink").value

            };
        }else{
            var share = {

                method: 'feed',

                link : url + "?Cube=gallery&gallery=" + document.getElementById("resetImage").value +"&name="+ document.getElementById("carName").value +"&nameI="+ document.getElementById("NameImage").value +"&num="+ document.getElementById("imageNum").value +"&Inum="+ document.getElementById("lastNum").value,

                name : document.getElementById("irCalName").value,

                description : document.getElementById("irCalDesc").value,

                picture : "http://" + document.domain + document.getElementById("resetImage").value

            };
        }
        FB.ui(share)
    }
</script><script type='text/javascript'>
    //
    var country = "ru";
    var cubeList = new Array();
    var firstCube = 2;
    cubeList = ["home","gallery"];
    //</script><script type="text/javascript" src="/media/js/wcm.consumption.js"></script>

    <script language="javascript">
        WCM.consumptionContext=""
        WCM.contributionContext="/wcm-contrib"
        WCM.designContext="/wcm-design"
        WCM.sitePath="/ru/ru/Showroom/Cars/Genesis-2014/PIP/index.html"
    </script>
    <script type='text/javascript' src="/media/js/sc_movingobject3.js"></script><script>var firstCube = 1;</script><div class="wrap" id="wrap" style="background-image:url('/media/img/genesisnew/hw081491.jpg');">

    <link rel="stylesheet" type="text/css" href="/media/css/styles_RU_.css"/>




    <div class="gnb_shadow"><div><img src="/media/img/bg_gnb_shadow.png" alt=""/></div></div><div id="layer_myplace" class="df_popup"></div><div class="objects_box">&nbsp;</div><div id="layer_gallery" class="layer_gallery">&nbsp;</div><div id="layer_experience_panorama" class="layer_experience_panorama">&nbsp;</div><div id="layer_experience" class="layer_experience">
        <script src="/media/js/json2.js" />
        <wcm:url type="resource" url="SC_SUPPORT_RU" var="support"/>
        <script type="text/javascript">

            function clearExperienceStats(){
                $("#experienceGraph").empty();
                $("#trimLabel").empty();
                $("#interiorRank").empty();
                $("#exteriorRank").empty();
            }
            function createColor(elementID, rank){
                $.each(rank, function(i, obj){
                    $(elementID).append('<li><span>'+obj.percent+'%</span><br /><img src="'+obj.value+'" alt="" /></li>');
                });
            }
            function createTrimGraph(trimRank){

                var trimSize = $(trimRank).size();

                var bestIndex = 0;

                $.each(trimRank, function(i, obj){
                        var h = (obj.percent/100)*188;
                        ++bestIndex;
                        if(trimSize==2 && i==1){
                            bestIndex+=1;
                        }
                        $("#experienceGraph").append('<div class="best'+bestIndex+'" style="height:'+h+'px">&nbsp;</div>');
                        $("#trimLabel").append('<li class="best'+bestIndex+'" style="height:'+h+'px;">'+
                            '<span class="percent">'+obj.percent+'%</span>'+
                            '<span class="name">'+decodeURIComponent(obj.value)+'</span>'+
                            '<span class="help"></span>'+
                            '</li>');
                    }
                );
            }

            function createExperienceStats(data){
                if (data) {
                    clearExperienceStats();
                }else{
                    Comment.hideLoadingImage("#experienceLoadingBox");
                    return false;
                }
                createTrimGraph(data.trimRank);
                createColor("#interiorRank", data.interiorRank);
                createColor("#exteriorRank", data.exteriorRank);
                Comment.hideLoadingImage("#experienceLoadingBox");
            }

            function getExperienceStats(){

                Comment.showLoadingImage("#experienceLoadingBox");

                $.ajaxSetup({dataType:"json"});
                var result = $.post(
                    "/wcm/ru/front/sns/getExperienceStats.do"
                    , {
                        wwn_country_code : $("#wwn_country_code").val()
                        , modelCode : $("#modelCode").val()
                    }
                    , function(data, textStatus){
                        createExperienceStats(data);
                    }
                );
                result.error(function(error) {
                    Comment.ajaxError(error);
                });

                result.complete(function(co) {
                    Comment.hideLoadingImage("#experienceLoadingBox");
                });
            }

            function popupExperienceStats(){
                var w = parseInt(($(window).width()-600)/2);$(".layer_experience").css("left",w).fadeIn();
                getExperienceStats();
            }
        </script>

        <div class="layer_close">
            <a href="#"><img src="/media/img/btn_close_layer_cb.gif" alt="close" /></a><br />
        </div>
        <div class="title">
            <img src="/wcm/images/ru/cube/layer_experience_title.png" alt="What people like the best option?" /><br />
        </div>
        <div class="trim">
            <div class="subtitle_trim">
                <img src="/wcm/images/ru/cube/layer_experience_title_trim.gif" alt="Trim" /><br />
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
                <img src="/wcm/images/ru/cube/layer_experience_title_exterior.gif" alt="Exterior Color" /><br />
            </div>
            <div class="colorlist">
                <ul  id="exteriorRank">
                    <c:forEach var="exterior" items="" varStatus="status">
                        <li><span>%</span><br /><img src="" alt="" /></li>
                    </c:forEach>
                </ul>
            </div>
            <div class="subtitle">
                <img src="/wcm/images/ru/cube/layer_experience_title_interior.gif" alt="Interior Covering" /><br />
            </div>
            <div class="colorlist">
                <ul id="interiorRank">
                    <c:forEach var="interior" items="" varStatus="status">
                        <li><span>%</span><br /><img src="" alt="" /></li>
                    </c:forEach>
                </ul>
            </div>
        </div>
        <div class="loadingbox" id="experienceLoadingBox">
            <img src="/media/img/loading.gif" alt="loading" style="display:none"/><br />
        </div></div>
    <div class="container">
        <div class="cubebox" id="cubebox">
            <div class="cubelist"><div class="items"><div class="item"><script type='text/javascript' src="/media/js_new/sc_pip_genesis2014.js"></script><link rel="stylesheet" type="text/css" href="/media/css_new/css_pip_genesis2014.css"/><script type="text/javascript">
                            //
                            function cubeMainMovie(vYoutubeURL) {

                                pipMovieLayer(this,vYoutubeURL,0);

                            }

                            function cubeGalleryList(cate,listImg,largeImg,titletxt,titleimg,description,mode,download,twitter,facebook,stumbleupon,like) {
                                $(".layer_gallery").append('<div class="layer_gallery_links"><iframe src="http://www.facebook.com/plugins/like.php?href='+like+'&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe> <span><img src="/wcm/images/'+country+'/cube/txt_download.png" alt="" /></span> <a href="'+download+'"><img src="/media/img/btn_cube_gallery_download.png" alt="" /></a> <span><img src="/wcm/images/'+country+'/cube/txt_share.png" alt="" /></span> <a href="'+facebook+'"><img src="/media/img/btn_cube_gallery_facebook.png" alt="" /></a> <a href="'+twitter+'"><img src="/media/img/btn_cube_gallery_twitter.png" alt="" /></a> '+tmp_strumbleCode+'</div>');
                                galleryPopup();
                                fadeinout('.layer_gallery','fadein');
                            }

                            function galleryPopup() {
                                var w = $(window).width();
                                var h = $(document).height();
                                if (w<960) {w=960};
                                $(".layer_gallery").css("width",w).css("height",h);
                                $(".layer_gallery .large").css("width",w).css("left",0).css("top",0);
                                $(".layer_gallery .minimap .in .move").css("left",0).css("top",0);
                            }

                            function loadAdsLayer(carName,carLink,adsDesc,adsDate,uTubeURL, totalCnt){

                                /*$(".car_list ul li").css("width","115px");
                                 $(".car_list ul li").css("height","69px");
                                 var liSize = $(".layer_popup play_movie .car_list ul li").size();
                                 var ulWidth = liSize * 115
                                 $(".car_list ul").css("width", ulWidth);*/

                                $("#layer_popup").empty();
                                $("#layer_popup").show();

                                $(".thum_list .car_list").jCarouselLite({btnNext: ".thum_list .arrow_right",btnPrev: ".thum_list .arrow_left",scroll: 1,visible: 4,circular: false});

                                $("#layer_popup").append('<div class="desc"></div>');
                                $("#layer_popup").append('<div class="movie_player"></div>');
                                $("#layer_popup").append('<div class="movie_list"></div>');
                                $("#layer_popup .desc").append('<strong>'+carName+'</strong>');
                                $("#layer_popup .desc").append('<span class="btn"><a href="'+carLink+'" class="detail btn">Product Detail</a></span>');
                                $("#layer_popup .desc").append('<span>'+adsDesc+'</span>');
                                $("#layer_popup .desc").append('<span class="date">'+adsDate+'</span>');
                                $("#layer_popup .desc").append('<div class="social">');
                                $("#layer_popup .desc").append('  <a href="#"><img src="/media/img/icon/icon_facebook_black.gif" alt="facebook" /></a>');
                                $("#layer_popup .desc").append('  <a href="#"><img src="/media/img/icon/icon_twitter_black.gif" alt="twitter" /></a>');
                                $("#layer_popup .desc").append('  <a href="#"><img src="/media/img/icon/icon_su_black.gif" alt="" /></a>');
                                $("#layer_popup .desc").append('</div>');
                                $("#layer_popup .desc").append('<a href="javascript:closeAdsLayer()"><img class="close_layer" src="/media/img/btn_close_layer_bk.gif" alt="Close"/></a>');

                                $("#layer_popup .movie_player").append('<iframe width="560" height="349" src="'+uTubeURL+'" frameborder="0" allowfullscreen></iframe>');

                            }

                            function closeAdsLayer(){
                                $("#layer_popup").hide();

                            }
                            function SendGAEventCubeMain(EventFirstName, EventName){

                            }
                            //</script><div class="item_wrap"><div class="main"><div class="title">
                                    <strong>Genesis</strong><br /> <small>ПОЛНЫЙ <br>ПРИВОД <br>ОЩУЩЕНИЙ</small>
                                </div>
                                <style>
                                    .featuresList li{
                                        font-size:10px !important;
                                    }
                                </style>
                                <ul class="featuresList" style="padding-top:5px; padding-bottom:2px;">

                                    <li>Воплощение технологических возможностей. </li>
                                    <li>Прислушайтесь к вашим ощущениям. </li>
                                    <li>Абсолютный комфорт. </li>
                                    <li>Точность во всех деталях. </li>
                                    <li>Безграничный контроль над дорогой.</li>
                                    <!-- <li>Воплощение технологических возможностей</li>
                                    <li>Выдающиеся характеристики, привлекательный стиль</li>
                                    <li>Самые совершенные функции — в одном автомобиле</li> -->


                                </ul>
                                <div class="btns" style="margin-bottom: 11px;">
                                    <a href="/configurator/?car_id=26" style="padding:6px 39px 7px 11px; font-family:Arial, sans-serif; font-weight:bold">Цены и комплектации</a>
					<span id="brochure_requester">
                    <a target="_blank" class="zing_form_toggler" for="brochures_request" data-model="Genesis" href="#" data-gtm-havas-model="genesis">Загрузить брошюру</a></span>
                                </div>

                                <div class="award">
                                    <img src="/media/img/genesisnew/hw081492.png" alt="cube_award" />
                        <span style="line-height: 9px; font-size: 10px;">
                            Новый Hyundai Genesis, получил высшую оценку в рейтинге безопасности американского Страхового института безопасности дорожного движения
                        </span>
                                </div></div>
                            <img alt="main_car" src="/media/img/genesisnew/hw081411.png" class="car" />

                            <div style="display:none;" class="facebook_like"><div id="fb-root"></div><script type="text/javascript" src="http://connect.facebook.net/ru_RU/all.js"></script><fb:like send="false" layout="button_count" width="150" show_faces="false " action="like" font=""></fb:like>
                            </div>

                        </div>
                    </div>

                    <div class="item">
                        <div class="item_wrap">
                            <script type="text/javascript">
                                var countryCodex = "ru";
                            </script>

                            <script>
                                var varFacebookJS ="ON";
                            </script><script>
                                var varTwitterJS ="ON";
                            </script><script>
                                var varSTJS ="OFF";
                            </script><script type="text/javascript">
                                //
                                function cubeGalleryLayout(ob,cate) {
                                    MovieLength = MovieList.actionMovieArray.length;
                                    var country = "ru";
                                    var tmpCateBtn = '<div class="gallery_category"><ul>';
                                    var obj = ob;
                                    obj.empty();
                                    if (cate=="All") {
                                        tmpCateBtn += '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                            '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');">Экстерьер</a></li>' +
                                            '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                    }else if (cate=="exterior"){
                                        tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                            '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                            '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                    }else if (cate=="interior") {
                                        tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                            '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                            '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                    }else {
                                        tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'All\');" ">Bce</a></li>' +
                                            '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'exterior\');" >Экстерьер</a></li>' +
                                            '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'interior\');" >Интерьер</a></li>';
                                    }
                                    if(MovieLength > 0){
                                        if(cate=="All" || cate=="exterior" || cate=="interior"){
                                            tmpCateBtn += '<li><a href="javascript:cubeGalleryCustomiz(\'1\',\'movies\');" >Видео</a></li>' + '</ul></div>';
                                        }else{
                                            tmpCateBtn += '<li class="on"><a href="javascript:cubeGalleryCustomiz(\'1\',\'movies\');" >Видео</a></li>' + '</ul></div>';
                                        }
                                    }else{
                                        tmpCateBtn += '</ul></div>';
                                    }
                                    obj.append(tmpCateBtn);
                                    obj.append('<ul class="gallerylist"></ul>');
                                    obj.append('<div class="cube_shadow"><div><img src="/media/img/bg_cube_shadow.png" alt="" /></div></div>');
                                }

                                function cubeGalleryList(cate,listImg,largeImg,titletxt,titleimg,description,mode,download,utubeUrl,mp4Movie,webmMovie,ogvMovie,thumbMovie,twitter,facebook,like,cntx,totcnt ,cateX) {
                                    $(".gallerylist").append('<li><a href="#" class="'+cate+'" onclick="showGalleryLargeLayer(\''+largeImg+'\',\''+titletxt+'\',\''+titleimg+'\',\''+description+'\',\''+mode+'\',\''+largeImg+'\',\''+utubeUrl+'\',\''+mp4Movie+'\',\''+webmMovie+'\',\''+ogvMovie+'\',\''+thumbMovie+'\',\''+twitter+'\',\''+facebook+'\',\''+like+'\',\''+cateX+'\',\''+cntx+'\',\''+totcnt+'\');return false;"><img src="'+listImg+'" alt="" /></a></li>');
                                }

                                function cubeGalleryPaging(current,all,cateX) {
                                    ofString = "из";
                                    if(countryCodex ==""){
                                        ofString = "of";
                                    }
                                    current = current -0;
                                    all = parseInt(all/21);
                                    all=all-1+2;
                                    if(current==all) {
                                        if(current==1){
                                            pageX = current - 1 ;
                                            $(".gallerylist").append('<li class="paging">' +
                                                '<strong>'+current+'</strong> '+ofString+' '+all+'</a>' +
                                                '</li>');
                                        }else{
                                            pageX = current - 1 ;
                                            $(".gallerylist").append('<li class="paging">' +
                                                '<a href="javascript:cubeGalleryCustomiz(\''+pageX+'\',\''+cateX+'\')" class="prev">previous</a>' +
                                                '<strong>'+current+'</strong> '+ofString+' '+all+'</a>' +
                                                '</li>');
                                        }
                                    }else if (current==1) {
                                        pageX = current + 1;
                                        $(".gallerylist").append('<li class="paging">' +
                                            '<strong>'+current+'</strong> '+ofString+' '+all+'' +
                                            '<a href="javascript:cubeGalleryCustomiz(\''+pageX+'\',\''+cateX+'\')" class="next">next</a>' +
                                            '</li>');
                                    }else {
                                        pagePre = current - 1;
                                        pageX = current + 1;
                                        $(".gallerylist").append('<li class="paging">' +
                                            '<a href="javascript:cubeGalleryCustomiz(\''+pagePre+'\',\''+cateX+'\')" class="prev">previous</a>' +
                                            '<strong>'+current+'</strong> '+ofString+' '+all+'' +
                                            '<a href="javascript:cubeGalleryCustomiz(\''+pageX+'\',\''+cateX+'\')" class="next">next</a>' +
                                            '</li>');
                                    }
                                }

                                function facebookImage(image){
                                    var change = document.getElementById("resetImage");
                                    change.value = image;
                                }
                                function showGalleryLargeLayer(imgurl,carname,titleimg,description,isImg,download,utubeUrl,mp4Movie,webmMovie,ogvMovie,thumbMovie,twitter,facebook,like,cateX,cntx,totcnt) {


                                    facebookImage(imgurl);

                                    $(".layer_gallery").empty();

                                    $('body').attr('showGallery','view');//0710

                                    $(".layer_gallery").append('<div class="layer_gallery_close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close" /></a><br /></div>');
                                    $(".layer_gallery").append('<div class="layer_gallery_title"><img src="'+titleimg+'" alt="'+carname+'" /></div>');
                                    //0719 $(".layer_gallery .layer_gallery_close a").click(function() {fadeinout('.layer_gallery','fadeout');galleryPopup();return false;});

                                    //0810$(".layer_gallery .layer_gallery_close a").click(function() {if (navigator.userAgent.match(/MSIE 8.0/i)){$(".layer_gallery .large_movie iframe").attr("src","about:blank");};galleryPopup();$(".layer_gallery").empty();$(".layer_gallery").hide(); $('.container,.footer').show(); $('body').removeAttr('showGallery'); $('#layer_gallery').removeAttr('style'); return false;});//0710

                                    $(".layer_gallery .layer_gallery_close a").click(function() {

                                        if (navigator.userAgent.match(/MSIE 8.0/i)){
                                            $(".layer_gallery .large_movie iframe").attr("src","about:blank");
                                        };

                                        if (navigator.userAgent.match(/MSIE 9.0/i)) {

                                            $('testplayer').src = '';
                                            //setTimeout(function () {
                                            //    $('.layer_gallery').set('html','');},50);

                                            $('#layer_gallery iframe').attr('src',$('#layer_gallery iframe').attr('src'));
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

                                    if (isImg=="image") {
                                        $(".layer_gallery").append('<div class="minimap" style="z-index:55"><div class="in"><img src="'+imgurl+'" class="small" /><br /><div class="move"><img src="/media/img/blank.gif" alt="" /></div></div></div>');
                                        $(".layer_gallery").append('<div class="layer_gallery_control"><ul><li class="zoomin"><a href="#"><img src="/media/img/btn_zoomin.png" alt="Zoom In" /></a></li><li class="zoomout" style="display:none;"><a href="#"><img src="/media/img/btn_zoomout.png" alt="Zoom Out" /></a></li></ul></div>');
                                        $(".layer_gallery").append('<div class="large"><img src="'+imgurl+'" class="img" alt="" /><br /></div>');
                                        $(".layer_gallery_control .zoomin a").click(function() {galleryZoomIn()});
                                        $(".layer_gallery_control .zoomout a").click(function() {galleryZoomOut()});
                                        $(".layer_gallery .minimap .in .move").draggable({containment:".layer_gallery .minimap .in", cursor:"move",
                                            start:function(event) {},
                                            stop:function(event) {
                                                // image size - 1920*1152 // 108 * 64
                                                var x = parseInt(parseInt($(this).css("left"))*1920/108) * -1;
                                                var y = parseInt(parseInt($(this).css("top"))*1152/64) * -1;
                                                $(".layer_gallery .large").css("left",x).css("top",y);
                                            }
                                        });
                                        $(".layer_gallery").append('<div class="layer_gallery_links"></div>');
                                        $(".layer_gallery .layer_gallery_links").append('<span><img src="/wcm/images/'+country+'/cube/txt_download.png" alt="" /></span> ');
                                        $(".layer_gallery .layer_gallery_links").append('<a href="'+download+'" target="_blank"><img src="/media/img/btn_cube_gallery_download.png" alt="" /></a> ');
                                        $(".layer_gallery .layer_gallery_links").append('<span><img src="/wcm/images/'+country+'/cube/txt_share.png" alt="" /></span> ');

                                        //2012-02-21 add
                                        if(varFacebookJS =="ON"){
                                            $(".layer_gallery .layer_gallery_links").append('<a href="#" onClick="sharefacebook(document.location.href)"><img src="/media/img/genesisnew/hw000676.gif" alt="" /></a> ');
                                        }
                                        if(varTwitterJS =="ON"){
                                            $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="twitterOpen(document.location.href);"><img src="/media/img/genesisnew/hw000667.gif" alt="" /></a>');
                                        }
                                        if(varSTJS =="ON"){
                                            $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="stumbleuponOpen(document.location.href);"><img src="/media/img/genesisnew/hw000670.gif" alt="" /></a>');
                                        }
                                        //2012-02-21 add

                                        galleryPopup();
                                    }else {
                                        $(".layer_gallery").append('<div class="layer_gallery_links"></div>');
                                        $(".layer_gallery .layer_gallery_links").append('<span><img src="/wcm/images/'+country+'/cube/txt_share.png" alt="" /></span> ');
                                        //$(".layer_gallery .layer_gallery_links").append('<a href="#" onClick="sharefacebook(document.location.href)"><img src="/media/img/genesisnew/hw000676.gif" alt="" /></a> ');
                                        if(varFacebookJS =="ON"){
                                            $(".layer_gallery .layer_gallery_links").append('<a href="#" onClick="sharefacebook(document.location.href)"><img src="/media/img/genesisnew/hw000676.gif" alt="" /></a> ');
                                        }

                                        if (countryCodex != "es"){
                                            if(varTwitterJS =="ON"){
                                                $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="twitterOpen(document.location.href);"><img src="/media/img/genesisnew/hw000667.gif" alt="" /></a>');
                                            }
                                            if(varSTJS =="ON"){
                                                $(".layer_gallery .layer_gallery_links").append('<a href="javascript://" onClick="stumbleuponOpen(document.location.href);"><img src="/media/img/genesisnew/hw000670.gif" alt="" /></a>');
                                            }
                                        }

                                        if(utubeUrl !=""){
                                            $(".layer_gallery").append('<div class="desc"></div>');
                                            $(".layer_gallery").append('<div class="movie_player" style="margin-top:100px;"></div>');
                                            $(".layer_gallery .movie_player").append('<iframe width="560" height="349" src="'+utubeUrl+'" frameborder="0" allowfullscreen></iframe>');
                                        }else{
                                        }
                                    }


                                    if(cateX == "All"){
                                        TotalLength = List.actionArray.length;
                                        Ptotcnt = TotalLength;
                                        for (var i=0; i<=TotalLength-1; i++) {
                                            if(i==cntx-1 && i>=0){
                                                Pcate         = List.actionArray[i].division;
                                                Pthum         = List.actionArray[i].thum;
                                                PlargeImg     = List.actionArray[i].image;
                                                Ptitletxt     = List.actionArray[i].carname;
                                                Ptitleimg     = List.actionArray[i].nameimage;
                                                Pdescription  = List.actionArray[i].comment;
                                                Pmode         = List.actionArray[i].imgmov;
                                                Pdownload     = List.actionArray[i].download;
                                                PutubeUrl     = List.actionArray[i].utubeUrl;
                                                Pmp4Movie     = List.actionArray[i].mp4Movie;
                                                PwebmMovie    = List.actionArray[i].webmMovie;
                                                PogvMovie     = List.actionArray[i].ogvMovie;
                                                PthumbMovie   = List.actionArray[i].thumbMovie;
                                                Ptwitter      = List.actionArray[i].twitter;
                                                Pfacebook     = List.actionArray[i].facebook;
                                                Plike         = List.actionArray[i].urlx;
                                                Pcntx         = i;
                                            }else if(i==cntx-1+2 && i<=TotalLength){
                                                Ncate         = List.actionArray[i].division;
                                                Nthum         = List.actionArray[i].thum;
                                                NlargeImg     = List.actionArray[i].image;
                                                Ntitletxt     = List.actionArray[i].carname;
                                                Ntitleimg     = List.actionArray[i].nameimage;
                                                Ndescription  = List.actionArray[i].comment;
                                                Nmode         = List.actionArray[i].imgmov;
                                                Ndownload     = List.actionArray[i].download;
                                                NutubeUrl     = List.actionArray[i].utubeUrl;
                                                Nmp4Movie     = List.actionArray[i].mp4Movie;
                                                NwebmMovie    = List.actionArray[i].webmMovie;
                                                NogvMovie     = List.actionArray[i].ogvMovie;
                                                NthumbMovie   = List.actionArray[i].thumbMovie;
                                                Ntwitter      = List.actionArray[i].twitter;
                                                Nfacebook     = List.actionArray[i].facebook;
                                                Nlike         = List.actionArray[i].urlx;
                                                Ncntx         = i;
                                            }
                                        }
                                    }else if(cateX == "exterior"){
                                        TotalLength = ExteList.actionExteArray.length;
                                        Ptotcnt = TotalLength;
                                        for (var i=0; i<=TotalLength-1; i++) {
                                            if(i==cntx-1 && i>=0){
                                                Pcate         = ExteList.actionExteArray[i].division;
                                                Pthum         = ExteList.actionExteArray[i].thum;
                                                PlargeImg     = ExteList.actionExteArray[i].image;
                                                Ptitletxt     = ExteList.actionExteArray[i].carname;
                                                Ptitleimg     = ExteList.actionExteArray[i].nameimage;
                                                Pdescription  = ExteList.actionExteArray[i].comment;
                                                Pmode         = ExteList.actionExteArray[i].imgmov;
                                                Pdownload     = ExteList.actionExteArray[i].download;
                                                PutubeUrl     = ExteList.actionExteArray[i].utubeUrl;
                                                Pmp4Movie     = ExteList.actionExteArray[i].mp4Movie;
                                                PwebmMovie    = ExteList.actionExteArray[i].webmMovie;
                                                PogvMovie     = ExteList.actionExteArray[i].ogvMovie;
                                                PthumbMovie   = ExteList.actionExteArray[i].thumbMovie;
                                                Ptwitter      = ExteList.actionExteArray[i].twitter;
                                                Pfacebook     = ExteList.actionExteArray[i].facebook;
                                                Plike         = ExteList.actionExteArray[i].urlx;
                                                Pcntx         = i;
                                            }else if(i==cntx-1+2 && i<=TotalLength){
                                                Ncate         = ExteList.actionExteArray[i].division;
                                                Nthum         = ExteList.actionExteArray[i].thum;
                                                NlargeImg     = ExteList.actionExteArray[i].image;
                                                Ntitletxt     = ExteList.actionExteArray[i].carname;
                                                Ntitleimg     = ExteList.actionExteArray[i].nameimage;
                                                Ndescription  = ExteList.actionExteArray[i].comment;
                                                Nmode         = ExteList.actionExteArray[i].imgmov;
                                                Ndownload     = ExteList.actionExteArray[i].download;
                                                NutubeUrl     = ExteList.actionExteArray[i].utubeUrl;
                                                Nmp4Movie     = ExteList.actionExteArray[i].mp4Movie;
                                                NwebmMovie    = ExteList.actionExteArray[i].webmMovie;
                                                NogvMovie     = ExteList.actionExteArray[i].ogvMovie;
                                                NthumbMovie   = ExteList.actionExteArray[i].thumbMovie;
                                                Ntwitter      = ExteList.actionExteArray[i].twitter;
                                                Nfacebook     = ExteList.actionExteArray[i].facebook;
                                                Nlike         = ExteList.actionExteArray[i].urlx;
                                                Ncntx         = i;
                                            }
                                        }
                                    }else if(cateX == "interior"){
                                        TotalLength = InteList.actionInteArray.length;
                                        Ptotcnt = TotalLength;
                                        for (var i=0; i<=TotalLength-1; i++) {
                                            if(i==cntx-1 && i>=0){
                                                Pcate         = InteList.actionInteArray[i].division;
                                                Pthum         = InteList.actionInteArray[i].thum;
                                                PlargeImg     = InteList.actionInteArray[i].image;
                                                Ptitletxt     = InteList.actionInteArray[i].carname;
                                                Ptitleimg     = InteList.actionInteArray[i].nameimage;
                                                Pdescription  = InteList.actionInteArray[i].comment;
                                                Pmode         = InteList.actionInteArray[i].imgmov;
                                                Pdownload     = InteList.actionInteArray[i].download;
                                                PutubeUrl     = InteList.actionInteArray[i].utubeUrl;
                                                Pmp4Movie     = InteList.actionInteArray[i].mp4Movie;
                                                PwebmMovie    = InteList.actionInteArray[i].webmMovie;
                                                PogvMovie     = InteList.actionInteArray[i].ogvMovie;
                                                PthumbMovie   = InteList.actionInteArray[i].thumbMovie;
                                                Ptwitter      = InteList.actionInteArray[i].twitter;
                                                Pfacebook     = InteList.actionInteArray[i].facebook;
                                                Plike         = InteList.actionInteArray[i].urlx;
                                                Pcntx         = i;
                                            }else if(i==cntx-1+2 && i<=TotalLength){
                                                Ncate         = InteList.actionInteArray[i].division;
                                                Nthum         = InteList.actionInteArray[i].thum;
                                                NlargeImg     = InteList.actionInteArray[i].image;
                                                Ntitletxt     = InteList.actionInteArray[i].carname;
                                                Ntitleimg     = InteList.actionInteArray[i].nameimage;
                                                Ndescription  = InteList.actionInteArray[i].comment;
                                                Nmode         = InteList.actionInteArray[i].imgmov;
                                                Ndownload     = InteList.actionInteArray[i].download;
                                                NutubeUrl     = InteList.actionInteArray[i].utubeUrl;
                                                Nmp4Movie     = InteList.actionInteArray[i].mp4Movie;
                                                NwebmMovie    = InteList.actionInteArray[i].webmMovie;
                                                NogvMovie     = InteList.actionInteArray[i].ogvMovie;
                                                NthumbMovie   = InteList.actionInteArray[i].thumbMovie;
                                                Ntwitter      = InteList.actionInteArray[i].twitter;
                                                Nfacebook     = InteList.actionInteArray[i].facebook;
                                                Nlike         = InteList.actionInteArray[i].urlx;
                                                Ncntx         = i;
                                            }
                                        }
                                    }else if(cateX == "movies"){
                                        TotalLength = MovieList.actionMovieArray.length;
                                        Ptotcnt = TotalLength;
                                        for (var i=0; i<=TotalLength-1; i++) {
                                            if(i==cntx-1 && i>=0){
                                                Pcate         = MovieList.actionMovieArray[i].division;
                                                Pthum         = MovieList.actionMovieArray[i].thum;
                                                PlargeImg     = MovieList.actionMovieArray[i].image;
                                                Ptitletxt     = MovieList.actionMovieArray[i].carname;
                                                Ptitleimg     = MovieList.actionMovieArray[i].nameimage;
                                                Pdescription  = MovieList.actionMovieArray[i].comment;
                                                Pmode         = MovieList.actionMovieArray[i].imgmov;
                                                Pdownload     = MovieList.actionMovieArray[i].download;
                                                PutubeUrl     = MovieList.actionMovieArray[i].utubeUrl;
                                                Pmp4Movie     = MovieList.actionMovieArray[i].mp4Movie;
                                                PwebmMovie    = MovieList.actionMovieArray[i].webmMovie;
                                                PogvMovie     = MovieList.actionMovieArray[i].ogvMovie;
                                                PthumbMovie   = MovieList.actionMovieArray[i].thumbMovie;
                                                Ptwitter      = MovieList.actionMovieArray[i].twitter;
                                                Pfacebook     = MovieList.actionMovieArray[i].facebook;
                                                Plike         = MovieList.actionMovieArray[i].urlx;
                                                Pcntx         = i;
                                            }else if(i==cntx-1+2 && i<=TotalLength){
                                                Ncate         = MovieList.actionMovieArray[i].division;
                                                Nthum         = MovieList.actionMovieArray[i].thum;
                                                NlargeImg     = MovieList.actionMovieArray[i].image;
                                                Ntitletxt     = MovieList.actionMovieArray[i].carname;
                                                Ntitleimg     = MovieList.actionMovieArray[i].nameimage;
                                                Ndescription  = MovieList.actionMovieArray[i].comment;
                                                Nmode         = MovieList.actionMovieArray[i].imgmov;
                                                Ndownload     = MovieList.actionMovieArray[i].download;
                                                NutubeUrl     = MovieList.actionMovieArray[i].utubeUrl;
                                                Nmp4Movie     = MovieList.actionMovieArray[i].mp4Movie;
                                                NwebmMovie    = MovieList.actionMovieArray[i].webmMovie;
                                                NogvMovie     = MovieList.actionMovieArray[i].ogvMovie;
                                                NthumbMovie   = MovieList.actionMovieArray[i].thumbMovie;
                                                Ntwitter      = MovieList.actionMovieArray[i].twitter;
                                                Nfacebook     = MovieList.actionMovieArray[i].facebook;
                                                Nlike         = MovieList.actionMovieArray[i].urlx;
                                                Ncntx         = i;
                                            }
                                        }
                                    }

                                    if(cntx!=0){
                                        $(".layer_gallery").append('<div class="layer_gallery_left"><a href="javascript:showGalleryLargeLayer(\''+PlargeImg+'\',\''+Ptitletxt+'\',\''+Ptitleimg+'\',\''+Pdescription+'\',\''+Pmode+'\',\''+PlargeImg+'\',\''+PutubeUrl+'\',\''+Pmp4Movie+'\',\''+PwebmMovie+'\',\''+PogvMovie+'\',\''+PthumbMovie+'\',\''+Ptwitter+'\',\''+Pfacebook+'\',\''+Plike+'\',\''+cateX+'\',\''+Pcntx+'\',\''+Ptotcnt+'\');"><img src="/media/img/btn_layer_left.png" alt="previous" /></a><br /></div>');
                                    }

                                    if(cntx!=totcnt-1){
                                        $(".layer_gallery").append('<div class="layer_gallery_right"><a href="javascript:showGalleryLargeLayer(\''+NlargeImg+'\',\''+Ntitletxt+'\',\''+Ntitleimg+'\',\''+Ndescription+'\',\''+Nmode+'\',\''+NlargeImg+'\',\''+NutubeUrl+'\',\''+Nmp4Movie+'\',\''+NwebmMovie+'\',\''+NogvMovie+'\',\''+NthumbMovie+'\',\''+Ntwitter+'\',\''+Nfacebook+'\',\''+Nlike+'\',\''+cateX+'\',\''+Ncntx+'\',\''+Ptotcnt+'\');"><img src="/media/img/btn_layer_right.png" alt="next" /></a><br /></div>');
                                    }


                                    fadeinout('.layer_gallery','fadein');
                                }

                                function showGalleryLargeLayer2(utubeUrl) {

                                    pipMovieLayer(this,utubeUrl,0);



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
                                    console.log($('body').attr('showGallery'));
                                    var h = $(document).height();
                                    if ($('body').attr('showGallery') == 'view') {
                                        $(selector).css("height", '100%');
                                        console.log('100%');
                                    } else {
                                        $(selector).css("height", h);
                                        console.log('h');
                                    }
                                }


                                function galleryOver() {
                                    $(".gallerylist img.cover").remove();
                                    $(".gallerylist li a").each(function() {
                                        var classname = $(this).attr("class");
                                        var appendobj="";
                                        if (classname=="exterior") {
                                            $(this).append('<img src="/media/img/genesisnew/gallery_item_cover_exterior.png" class="cover" alt="" />');
                                        } else if (classname=="interior") {
                                            $(this).append('<img src="/media/img/genesisnew/gallery_item_cover_interior.png" class="cover" alt="" />');
                                        } else if (classname=="movie") {
                                            $(this).append('<img src="/media/img/genesisnew/gallery_item_cover_movie2.png" class="cover" alt="" />');
                                        }
                                        $(this).bind("mouseover",function(){
                                            $("img.cover",$(this)).css("zIndex",10);
                                        });
                                        $(this).bind("mouseout",function(){
                                            $("img.cover",$(this)).css("zIndex",8);
                                        });
                                    });
                                }

                                function galleryPopup() {//0710
                                    var w = $(window).width();
                                    var h = $(document).height();
                                    if($('body').attr('showGallery') == 'view'){
                                        $('.container,.footer').hide();//0710
                                        w = $(window).width();
                                    }
                                    if (w<960) {w=960};
                                    $(".layer_gallery").css("width",w).css("height",h);
                                    $(".layer_gallery .large").css("left",0).css("top",0);
                                    $(".layer_gallery .minimap .in .move").css("left",0).css("top",0);
                                }



                                //</script><script type="text/javascript">
                                function actionList(){
                                    this.actionArray = [];
                                }
                                function actionExteList(){
                                    this.actionExteArray = [];
                                }
                                function actionInteList(){
                                    this.actionInteArray = [];
                                }
                                function actionMovieList(){
                                    this.actionMovieArray = [];
                                }
                                function actionArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx){
                                    this.division   = division;
                                    this.thum       = thum;
                                    this.image      = image;
                                    this.carname    = carname;
                                    this.nameimage  = nameimage;
                                    this.comment    = comment;
                                    this.imgmov     = imgmov;
                                    this.download   = download;
                                    this.utubeUrl   = utubeUrl;
                                    this.mp4Movie   = mp4Movie;
                                    this.webmMovie  = webmMovie;
                                    this.ogvMovie   = ogvMovie;
                                    this.thumbMovie = thumbMovie;
                                    this.twitter    = twitter;
                                    this.facebook   = facebook;
                                    this.urlx       = urlx;
                                }
                                function actionExteArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx){
                                    this.division   = division;
                                    this.thum       = thum;
                                    this.image      = image;
                                    this.carname    = carname;
                                    this.nameimage  = nameimage;
                                    this.comment    = comment;
                                    this.imgmov     = imgmov;
                                    this.download   = download;
                                    this.utubeUrl   = utubeUrl;
                                    this.mp4Movie   = mp4Movie;
                                    this.webmMovie  = webmMovie;
                                    this.ogvMovie   = ogvMovie;
                                    this.thumbMovie = thumbMovie;
                                    this.twitter    = twitter;
                                    this.facebook   = facebook;
                                    this.urlx       = urlx;
                                }
                                function actionInteArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx){
                                    this.division   = division;
                                    this.thum       = thum;
                                    this.image      = image;
                                    this.carname    = carname;
                                    this.nameimage  = nameimage;
                                    this.comment    = comment;
                                    this.imgmov     = imgmov;
                                    this.download   = download;
                                    this.utubeUrl   = utubeUrl;
                                    this.mp4Movie   = mp4Movie;
                                    this.webmMovie  = webmMovie;
                                    this.ogvMovie   = ogvMovie;
                                    this.thumbMovie = thumbMovie;
                                    this.twitter    = twitter;
                                    this.facebook   = facebook;
                                    this.urlx       = urlx;
                                }
                                function actionMovieArray(division, thum, image, carname, nameimage, comment, imgmov, download, utubeUrl, mp4Movie, webmMovie, ogvMovie, thumbMovie, twitter, facebook, urlx){
                                    this.division   = division;
                                    this.thum       = thum;
                                    this.image      = image;
                                    this.carname    = carname;
                                    this.nameimage  = nameimage;
                                    this.comment    = comment;
                                    this.imgmov     = imgmov;
                                    this.download   = download;
                                    this.utubeUrl   = utubeUrl;
                                    this.mp4Movie   = mp4Movie;
                                    this.webmMovie  = webmMovie;
                                    this.ogvMovie   = ogvMovie;
                                    this.thumbMovie = thumbMovie;
                                    this.twitter    = twitter;
                                    this.facebook   = facebook;
                                    this.urlx       = urlx;
                                }

                                var List      = new actionList();
                                var ExteList  = new actionExteList();
                                var InteList  = new actionInteList();
                                var MovieList = new actionMovieList();
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081665/~renditions/5.jpg", "/media/img/genesisnew/hw081665.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081665/~renditions/5.jpg", "/media/img/genesisnew/hw081665.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081666/~renditions/5.jpg", "/media/img/genesisnew/hw081666.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081666/~renditions/5.jpg", "/media/img/genesisnew/hw081666.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                //List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081667/~renditions/5.jpg", "/media/img/genesisnew/hw081667.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                //ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081667/~renditions/5.jpg", "/media/img/genesisnew/hw081667.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081668/~renditions/5.jpg", "/media/img/genesisnew/hw081668.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081668/~renditions/5.jpg", "/media/img/genesisnew/hw081668.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>
                            <script>
                                //List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081669/~renditions/5.jpg", "/media/img/genesisnew/hw081669.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                //ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081669/~renditions/5.jpg", "/media/img/genesisnew/hw081669.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081670/~renditions/5.jpg", "/media/img/genesisnew/hw081670.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081670/~renditions/5.jpg", "/media/img/genesisnew/hw081670.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081671/~renditions/5.jpg", "/media/img/genesisnew/hw081671.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081671/~renditions/5.jpg", "/media/img/genesisnew/hw081671.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081672/~renditions/5.jpg", "/media/img/genesisnew/hw081672.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081672/~renditions/5.jpg", "/media/img/genesisnew/hw081672.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                //List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081673/~renditions/5.jpg", "/media/img/genesisnew/hw081673.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                //ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081673/~renditions/5.jpg", "/media/img/genesisnew/hw081673.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081664/~renditions/5.jpg", "/media/img/genesisnew/hw081664.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081664/~renditions/5.jpg", "/media/img/genesisnew/hw081664.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081675/~renditions/5.jpg", "/media/img/genesisnew/hw081675.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081675/~renditions/5.jpg", "/media/img/genesisnew/hw081675.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081677/~renditions/5.jpg", "/media/img/genesisnew/hw081677.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081677/~renditions/5.jpg", "/media/img/genesisnew/hw081677.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/gallery/p_gallery001.jpg", "/media/img/genesisnew/gallery/gallery001.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/gallery/p_gallery001.jpg", "/media/img/genesisnew/gallery/gallery001.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>



                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081678/~renditions/5.jpg", "/media/img/genesisnew/gallery/gallery003.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081678/~renditions/5.jpg", "/media/img/genesisnew/gallery/gallery003.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/gallery/gallery002_p.jpg", "/media/img/genesisnew/gallery/gallery002.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/gallery/gallery002_p.jpg", "/media/img/genesisnew/gallery/gallery002.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>

                            <script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081679/~renditions/5.jpg", "/media/img/genesisnew/hw081679.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081679/~renditions/5.jpg", "/media/img/genesisnew/hw081679.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                //List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081680/~renditions/5.jpg", "/media/img/genesisnew/hw081680.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                //ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081680/~renditions/5.jpg", "/media/img/genesisnew/hw081680.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081681/~renditions/5.jpg", "/media/img/genesisnew/hw081681.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081681/~renditions/5.jpg", "/media/img/genesisnew/hw081681.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081682/~renditions/5.jpg", "/media/img/genesisnew/hw081682.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081682/~renditions/5.jpg", "/media/img/genesisnew/hw081682.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081683/~renditions/5.jpg", "/media/img/genesisnew/hw081683.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081683/~renditions/5.jpg", "/media/img/genesisnew/hw081683.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081674/~renditions/5.jpg", "/media/img/genesisnew/hw081674.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081674/~renditions/5.jpg", "/media/img/genesisnew/hw081674.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("exterior", "/media/img/genesisnew/hw081685/~renditions/5.jpg", "/media/img/genesisnew/hw081685.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                ExteList.actionExteArray.push(new actionExteArray("exterior", "/media/img/genesisnew/hw081685/~renditions/5.jpg", "/media/img/genesisnew/hw081685.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081686/~renditions/5.jpg", "/media/img/genesisnew/hw081686.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081686/~renditions/5.jpg", "/media/img/genesisnew/hw081686.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081687/~renditions/5.jpg", "/media/img/genesisnew/hw081687.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081687/~renditions/5.jpg", "/media/img/genesisnew/hw081687.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081688/~renditions/5.jpg", "/media/img/genesisnew/hw081688.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081688/~renditions/5.jpg", "/media/img/genesisnew/hw081688.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081689/~renditions/5.jpg", "/media/img/genesisnew/hw081689.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081689/~renditions/5.jpg", "/media/img/genesisnew/hw081689.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081690/~renditions/5.jpg", "/media/img/genesisnew/hw081690.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081690/~renditions/5.jpg", "/media/img/genesisnew/hw081690.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081691/~renditions/5.jpg", "/media/img/genesisnew/hw081691.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081691/~renditions/5.jpg", "/media/img/genesisnew/hw081691.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081692/~renditions/5.jpg", "/media/img/genesisnew/hw081692.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081692/~renditions/5.jpg", "/media/img/genesisnew/hw081692.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                //List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081693/~renditions/5.jpg", "/media/img/genesisnew/hw081693.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                //InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081693/~renditions/5.jpg", "/media/img/genesisnew/hw081693.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081684/~renditions/5.jpg", "/media/img/genesisnew/hw081684.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081684/~renditions/5.jpg", "/media/img/genesisnew/hw081684.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081695/~renditions/5.jpg", "/media/img/genesisnew/hw081695.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081695/~renditions/5.jpg", "/media/img/genesisnew/hw081695.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script><script>
                                List.actionArray.push(new actionArray("interior", "/media/img/genesisnew/hw081696/~renditions/5.jpg", "/media/img/genesisnew/hw081696.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                                InteList.actionInteArray.push(new actionInteArray("interior", "/media/img/genesisnew/hw081696/~renditions/5.jpg", "/media/img/genesisnew/hw081696.jpg", "Genesis", "/media/img/genesisnew/hw081498.png", "", "image","downloadurl","" ,"","", "", "", "twitter link","facebook link",'http://test.com'));
                            </script>


                            <script>
                                //
                                function cubeGalleryCustomiz(pageX,cateX){
                                    var ix = 0;
                                    var ix2 = 0;
                                    var TotalLength = 0;


                                    // all,exterior,interior,movies �� ���������� �ٽ� �޾Ƽ� �ѷ� �ּ���.
                                    // cubeGalleryLayout()�� ���̾ƿ��� ����ϴ� �Լ��̸�, category�� �ٲ� �ֽð� ����Ͻø� �˴ϴ�.  all / interior / exterior / movies �� ��1

                                    cubeGalleryLayout($(".cubebox .item .gallerybox"),cateX);

                                    if(pageX == 1){
                                        ix = 0;
                                    }else{
                                        ix = pageX * 20 - 20;
                                    }
                                    ix2 = (pageX * 20) ;
                                    if(cateX == "All"){
                                        TotalLength = List.actionArray.length;
                                        if(ix2 > TotalLength){ix2=TotalLength}
                                        for (var iall=ix; iall<ix2; iall++) { // ��� 20�� ���
                                            cubeGalleryList(List.actionArray[iall].division ,List.actionArray[iall].thum ,List.actionArray[iall].image  ,List.actionArray[iall].carname  ,List.actionArray[iall].nameimage ,List.actionArray[iall].comment ,List.actionArray[iall].imgmov ,List.actionArray[iall].download ,List.actionArray[iall].utubeUrl, List.actionArray[iall].mp4Movie ,List.actionArray[iall].webmMovie ,List.actionArray[iall].ogvMovie ,List.actionArray[iall].thumbMovie ,List.actionArray[iall].twitter ,List.actionArray[iall].facebook  ,List.actionArray[iall].urlx, iall, TotalLength ,cateX);
                                        }
                                    }else if(cateX == "exterior"){
                                        TotalLength = ExteList.actionExteArray.length;
                                        if(ix2 > TotalLength){ix2=TotalLength}
                                        for (var iext=ix; iext<ix2; iext++) { // ��� 20�� ���
                                            cubeGalleryList(ExteList.actionExteArray[iext].division ,ExteList.actionExteArray[iext].thum ,ExteList.actionExteArray[iext].image  ,ExteList.actionExteArray[iext].carname  ,ExteList.actionExteArray[iext].nameimage ,ExteList.actionExteArray[iext].comment ,ExteList.actionExteArray[iext].imgmov ,ExteList.actionExteArray[iext].download ,ExteList.actionExteArray[iext].utubeUrl, ExteList.actionExteArray[iext].mp4Movie ,ExteList.actionExteArray[iext].webmMovie ,ExteList.actionExteArray[iext].ogvMovie ,ExteList.actionExteArray[iext].thumbMovie ,ExteList.actionExteArray[iext].twitter ,ExteList.actionExteArray[iext].facebook  ,ExteList.actionExteArray[iext].urlx, iext, TotalLength ,cateX);
                                        }
                                    }else if(cateX == "interior"){
                                        TotalLength = InteList.actionInteArray.length;
                                        if(ix2 > TotalLength){ix2=TotalLength}
                                        for (var iint=ix; iint<ix2; iint++) { // ��� 20�� ���
                                            cubeGalleryList(InteList.actionInteArray[iint].division ,InteList.actionInteArray[iint].thum ,InteList.actionInteArray[iint].image  ,InteList.actionInteArray[iint].carname  ,InteList.actionInteArray[iint].nameimage ,InteList.actionInteArray[iint].comment ,InteList.actionInteArray[iint].imgmov ,InteList.actionInteArray[iint].download ,InteList.actionInteArray[iint].utubeUrl, InteList.actionInteArray[iint].mp4Movie ,InteList.actionInteArray[iint].webmMovie ,InteList.actionInteArray[iint].ogvMovie ,InteList.actionInteArray[iint].thumbMovie ,InteList.actionInteArray[iint].twitter ,InteList.actionInteArray[iint].facebook  ,InteList.actionInteArray[iint].urlx, iint, TotalLength ,cateX);
                                        }
                                    }else if(cateX == "movies"){
                                        TotalLength = MovieList.actionMovieArray.length;
                                        if(ix2 > TotalLength){ix2=TotalLength}
                                        for (var imov=ix; imov<ix2; imov++) { // ��� 20�� ���
                                            cubeGalleryList(MovieList.actionMovieArray[imov].division ,MovieList.actionMovieArray[imov].thum ,MovieList.actionMovieArray[imov].image  ,MovieList.actionMovieArray[imov].carname  ,MovieList.actionMovieArray[imov].nameimage ,MovieList.actionMovieArray[imov].comment ,MovieList.actionMovieArray[imov].imgmov ,MovieList.actionMovieArray[imov].download ,MovieList.actionMovieArray[imov].utubeUrl, MovieList.actionMovieArray[imov].mp4Movie ,MovieList.actionMovieArray[imov].webmMovie ,MovieList.actionMovieArray[imov].ogvMovie ,MovieList.actionMovieArray[imov].thumbMovie ,MovieList.actionMovieArray[imov].twitter ,MovieList.actionMovieArray[imov].facebook  ,MovieList.actionMovieArray[imov].urlx, imov, TotalLength ,cateX);
                                        }
                                    }

                                    //cubeGalleryPaging()�� ��� ��� �Ŀ� �������� ����¡ �κ��� ����ϴ� �Լ��Դϴ�.
                                    //���ڸ� �ٲ� �ֽø� �˴ϴ�. ���ڴ� ���� ����� ��ü ����¡ ��ȣ �Դϴ�..

                                    cubeGalleryPaging(pageX,TotalLength,cateX); // ����¡ ���

                                    // prev/next ��ư ��ũ �Ŵ� ���
                                    //$(".gallerylist ul li.paging a.prev").click(function() {�������ڵ�})
                                    //$(".gallerylist ul li.paging a.next").click(function() {�������ڵ�})

                                    galleryOver();galleryPopup();
                                }
                                //
                            </script>


                            <div class="cube_title">
                                <img alt="Gallery" src="/media/img/cubetitle_gallery.png"/>
                                <h2>Фото Hyundai Genesis</h2>
                            </div>

                            <div class="gallerybox">&nbsp;</div></div></div>

                </div></div></div>

        <!-- <div class="prevbtn"><a href="#"><img src="/media/img/blank.gif" alt="previous"/></a><br/></div> -->

        <!-- <div class="nextbtn"><a href="#"><img src="/media/img/blank.gif" alt="next"/></a><br/></div> -->
        <? offer_filter_auto($APPLICATION->GetCurPage()); ?>
        <style>.offers{padding: 50px 0;}</style>

        <div class="cube">&nbsp;</div>
        <!--     </div> -->
        <script type='text/javascript'>
            //
            var cubeList = new Array();
            cubeList = ["home","gallery"];
            function cubeStart(va) {

                if (va==1) { // main

                } else if (va==2) { // gallery
                    cubeGalleryCustomiz('1','All')
                } else if (va==3) { // experience
                    //cubeExterienceCustomiz('exterior','0','');
                    executeArea4();
                } else if (va==4) { // talk n talk
                    executeArea4();


                } else if (va==5) { // talk n talk
                    executeArea4();

                }
            }
            //</script><div class="tnavi" id="tnavi"><input type="hidden" id="hiddenTwitter" name="hiddenTwitter" value="http://bit.ly/1nVAZ7v"/><input type="hidden" id="modelCode" name="modelCode" value="B1"/><script type="text/javascript">
                function twitterOpen(url){
                    var twitterURL = document.getElementById('hiddenTwitter').value;
                    window.open("http://twitter.com/share?url="+twitterURL+"&text=Hyundai Motor Company","");
                }
                function shareToGoogle(url){
                    window.open('https://plus.google.com/share?url='+url,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                }
            </script><div class="tnavi_car"><div class="information"><div class="home"><div class="car_logo"><a href="#wrap"><img src="/media/img/genesisnew/hw081498.png" alt="logo_car" /></a><br/></div><div class="price"><span class="from"></span><strong></strong></div></div><div class="cubeitem">

                        <ul>
                            <li><a class="cover" href="#wrap"><strong>Обзор</strong></a></li>
                            <li><a class="gallery" href="#wrap"><strong>Галерея</strong></a></li>
                            <li class="" style="display:none;"><a class="experience" href="#wrap"><strong>Обзор</strong></a></li>
                        </ul>
                    </div>

                    <div style="display:none;" class="sns"><a href="http://dev.hyundai.com:80/ru/ru/Showroom/Cars/Genesis-2014/print/index.html" class="print"><span>print</span></a><a href="http://dev.hyundai.com:80/ru/ru/MediaCenter/Downloads/index.html?sectionID=13620" class="download"><span>Download</span></a><span class="show"><span>Share</span><a href="#" class="share"><span>Share</span></a></span><span class="hide"><a class="facebook" href="javascript://" onclick="sharefacebook(document.location.href)"><span>facebook</span></a><a class="twitter" href="javascript://" onclick="twitterOpen(document.location.href)"><span>twitter</span></a></span></div></div></div>

            <style>
                .submenu ul li a{
                    font-family: Helvetica !important;
                }
            </style>
            <div class="tnavi_submenu">
                <div class="submenu">
                    <ul>
                        <li><a class="hihglights" href="#contents_highlights" onclick="
                            window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'genesis/highlights']);">Особенности</a></li>
                        <li><a class="exterior" href="#contents_exterior" onclick="window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'genesis/exterior']);">Экстерьер</a></li>
                        <li><a class="interior" href="#contents_interior" onclick="
                            window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'genesis/interior']);">Интерьер</a></li>
                        <li><a class="performance" href="#contents_performance" onclick="
                            window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'genesis/performance']);">Динамика</a></li>
                        <li><a class="safety" href="#contents_safety" onclick="
                            window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'genesis/safety']);">Безопасность</a></li>
                        <li><a class="convenience" href="#contents_convenience" onclick="
                            window._nm = window._nm || [];
                            window._nm.push(['trackurl', 'genesis/convenience']);">Комфорт</a></li>
                    </ul>
                </div>

                <div style="display:none;" class="shoppingtool"><a href="#" class="tools">Shopping Tools</a><ul><li class="buildyourown"><a href="">Build Your Own</a></li><li><a href="">Compare Cars</a></li><li><a href="">Request a Brochure</a></li><li><a href="javascript:fn_openLayerPopup_Pip('B1','RU')">Payment Estimator</a></li></ul></div></div></div><input type="hidden" id="modelCode" name="modelCode" value="B1"/><input type="hidden" id="trakingModelCode" name="trakingModelCode" value=""/><input type="hidden" id="wwn_country_code" name="wwn_country_code" value="RU"/>

        <div class="contents_highlights pip" id="contents_highlights">

            <script type="text/javascript" src="/media/js/jquery.lazyload.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    // new template - delete
                    /*
                     $('.choice_btn li').click(function() {
                     var cName = $(this).attr("class");
                     $('.choice_btn li').removeClass("on");
                     $(this).addClass("on");
                     $($(this).parent().parent().parent()).attr("class", "change_img "+cName).find('.img .lazy').lazyload();
                     });
                     */
                    pipLoadImg();
                });
            </script>

            <div class="pip_cont hideMe">
                <div class="text_play">
                    <div class="text1">Genesis — СОЗДАН ЛЮДЬМИ ДЛЯ ЛЮДЕЙ И ПОДОБЕН ИМ</div>

                    <div class="text2"><br />
                        <br />
                        Обладающий сердцем и душой, скелетом и мускулами, интеллектом и эмоциями, подобными человеческим, Genesis — это продолжение вас самих на дороге.
                    </div>
                </div>
            </div>

            <div class="main_wrap hideMe" style="background:url('/media/img/genesisnew/hw081371.jpg') no-repeat center top;"><div class="main_list"><ul class="list"><li><a href="#">
                                <strong>ШАССИ, <br /> КУЗОВ И СИЛОВОЙ АГРЕГАТ</strong>
                                <div class="img"><img src="/media/img/genesisnew/hw081368.jpg" alt="highlights_main_1" /></div>
                                <div class="more"><span>Подробнее</span></div><!-- 2014-04-02 add -->
                                <!-- <p>The strong body is made <br />even sturdier with the <br />expanded use of AHSS and <br />body structure adhesives.</p> -->
                                <p>Прочная конструкция кузова стала еще более крепкой благодаря усовершенствованной высокопрочной стали. Силовой агрегат обеспечивает впечатляющую динамику.</p><!-- edit text 2014-03-26 -->
                            </a></li><li><a href="#">
                                <strong>ХОДОВЫЕ ХАРАКТЕРИСТИКИ, ВЫСОКИЕ ТЕХНОЛОГИИ</strong>
                                <div class="img"><img src="/media/img/genesisnew/hw081369.jpg" alt="highlights_main_2" /></div>
                                <div class="more"><span>Подробнее</span></div><!-- 2014-04-02 add -->
                                <!-- <p>New technologies, including <br />R-MDPS, HUD, AEB and <br />SCC, offer improved stability <br />when driving.</p> -->

                                <p>
                                    Улучшение ходовых характеристик благодаря высоким технологиям, включая Ассистент прохождения поворотов, Цветной проекционный дисплей на лобовом стекле (HUD) и Систему автономного экстренного торможения (AEB): стабильность и уверенность при движении.
                                </p><!-- edit text 2014-03-26 -->
                            </a></li><li><a href="#">
                                <strong>
                                    ДИЗАЙН: <br /> СТРУЯЩИЕСЯ ЛИНИИ 2.0
                                </strong>
                                <div class="img"><img src="/media/img/genesisnew/hw081370.jpg" alt="highlights_main_3" /></div>
                                <div class="more"><span>Подробнее</span></div><!-- 2014-04-02 add -->
                                <p>
                                    Концепция «Cтруящиеся линии 2.0» порождает уникальные стили внешнего вида и салона.

                                </p>
                            </a></li></ul><ul class="view"><li class="view1"><div class="menu">
                                <ul><!-- change the order 2014-03-26 -->
                                    <li class="menu1 on"><a href="#">Усовершенствованная высокопрочная сталь </a></li>
                                    <li class="menu2"><a href="#">Силовой агрегат</a></li>
                                    <li class="menu3"><a href="#">Шумовиброизоляция</a></li>
                                    <li class="menu4"><a href="#">Ходовые качества и управляемость </a></li>
                                </ul>
                            </div><div class="view_sub view1_1"><div class="img"><img src="/media/img/genesisnew/hw081372.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong>Усовершенствованная высокопрочная сталь </strong>
                                    <p>Прочность кузова и безопасность Genesis улучшена благодаря увеличению доли усовершенствованной
                                        высокопрочной стали до 51,5 %. Это повышает точность управления и помогает
                                        приглушить даже самые незначительные вибрации и шум, повышая удовольствие от вождения.</p>
                                </div></div><div class="view_sub view1_2"><div class="img"><img src="/media/img/genesisnew/hw081377.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong>Силовой агрегат</strong>

                                    <p><!-- Dynamic operations achieved at the actual speed range by intensively improving the performance at <br />
                                    the low-to-mid-speed range. -->

                                        Двигатель Genesis выдает высокий крутящий момент — 397 Нм — даже на низких оборотах (от 2000 об/мин), что значительно
                                        улучшает ходовые качества и приемистость автомобиля даже на скоростях от 80 до 120 км/ч. К тому же,
                                        установленная в моторном отсеке перегородка минимизирует высокочастотный шум, включая шум от запуска двигателя
                                        и звук двигателя при интенсивном разгоне.</p>
                                </div><div class="sub1">

                                    <strong>3.8 V6 GDi <br />бензиновый двигатель</strong><br />
                                    <div class="info">
                                        Genesis 2-го поколения  <br />
                                        Genesis 1-го поколения  <br />
                                    </div>
                                    <div class="toque">
                                        397
                                        <span class="unit">Нм</span>
                                    </div>
                                </div></div><div class="view_sub view1_3"><div class="img"><img src="/media/img/genesisnew/hw081626.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong>Шумовиброизоляция</strong>
                                    <p>
                                        Шумовиброизоляция в этом автомобиле принимает самые разные формы: <br /> от полного блокирования шума до создания новых звуков для <br /> еще большего удовольствия от вождения. Более того, <br /> проникновение шума двигателя и дороги тоже снижено <br /> благодаря перегородке в моторном отсеке и <br />эффективным звукоизоляционным материалам.

                                    </p>
                                </div><div class="sub1">
                                    <dl>
                                        <dt>Шумовиброизоляция</dt>
                                        <dd>51,5 % <br /> усовершенствованной <br />высокопрочной <br />стали
                                        </dd><!-- edit text 2014-03-28 -->
                                        <!-- <dd>Перегородка в моторном отсеке</dd> -->
                                    </dl>
                                    <dl>
                                        <dt>Звук двигателя <br />при наборе оборотов</dt><!-- edit text 2014-03-28 -->
                                        <dd>Динамическая настройка <br />звука при разгоне</dd>
                                    </dl>
                                    <div>Баланс</div>
                                </div><div class="sub2">
                                    <strong>Ромбовидная конструкция</strong>
                                    <p>
                                        Ромбовидные поперечные распорки усиливают жесткость моторного отсека, обеспечивая высокую маневренность и управляемость.
                                    </p>
                                </div></div><div class="view_sub view1_4"><div class="img"><img src="/media/img/genesisnew/hw081374.jpg" width="1280" height="619" alt=""/><img src="/media/img/genesisnew/hw081375.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong>Ходовые качества и управляемость</strong>
                                    <p>
                                        Маневренность и точность управления с  новой системой рулевого управления.
                                    </p>
                                </div><div class="sub1">
                                    <ul class="submenu">
                                        <li class="on"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                    </ul>
                                    <ul class="subview">
                                        <li>
                                            <strong>Реечное рулевое управление <br /> с электроусилителем (R-MDPS)</strong>
                                            <p>
                                                Это электрическая система рулевого управления с улучшенным откликом и стабильностью благодаря непосредственному управлению рейкой с помощью электрического двигателя высокой мощности с усилием 13 кН. Более того, эта система снижает расход топлива на 2,9 % по сравнению с обычной системой гидроусилителя.
                                            </p>
                                            <!--
                                            <div class="cut">
                                                Strut Bar<br />
                                                End Pipe<br />
                                            </div>
                                            -->
                                        </li>
                                        <!--
                                        <li>
                                            <strong>Advanced traction cornering <br />control (ATCC)</strong>
                                            <p>Advanced traction cornering control (ATCC) applies a braking force to wheels that do not require traction when making turns to increase traction of wheels on the opposite side and improve agility and stability when making turns.</p>
                                            <div class="cut2">
                                                Braking force <br />
                                                Driving force <br />
                                            </div>
                                        </li>
                                        -->
                                        <li>
                                            <strong>Рулевая рейка с электроусилителем</strong>
                                            <p>
                                                Переменное передаточное отношение
                                                •   Шаг расстановки зубьев по краям рулевой рейки шире, нежели чем по центру, «околонулевой» зоне. При небольшом угле поворота руля колеса поворачиваются плавно и медленно, а при большом угле – резче и быстрее. Таким образом, как на высоких скоростях, так и на парковке  автомобилем управлять проще.
                                            </p>
                                        </li>
                                    </ul>
                                </div></div><div class="close"><a href="#">Close</a></div></li><li class="view2"><div class="menu">
                                <ul><!-- edit 2014-03-27 -->
                                    <li class="menu1 on"><a href="#">Задний привод </a></li>
                                    <li class="menu2"><a href="#">Ассистент прохождения поворотов</a></li>
                                    <li class="menu3"><a href="#"><br />Новые технологии для большей безопасности</a></li>
                                </ul>
                            </div><div class="view_sub view2_1"><div class="img"><img src="/media/img/genesisnew/hw081379.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong>Задний привод </strong>
                                    <p>
                                        Заднеприводная компоновка позволяет оптимизировать распределение массы автомобиля и разделить роль рулевого управления и передачи мощности между передними и задними колесами соответственно для более точной и предсказуемой управляемости. Это обеспечивает более спортивные и вместе с тем более комфортные ощущения от вождения и выдающиеся реакции.
                                    </p>
                                </div></div><div class="view_sub view2_2"><div class="img"><img src="/media/img/genesisnew/hw081381.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong> Ассистент прохождения поворотов (ATCC) (опция) </strong>
                                    <p>
                                        Ассистент прохождения поворотов (ATCC) (опция) применяет тормозное усилие к колесам, тяга на которых не требуется, что увеличивает сцепление с поверхностью у колес на противоположной стороне и улучшает маневренность и устойчивость автомобиля при прохождении поворотов.
                                    </p>
                                    <div class="cut">
                                        Управление торможением  <br />
                                        Контроль тяги <br />
                                    </div>
                                </div></div><div class="view_sub view2_3"><div class="text">

                                    <strong>Новые технологии для большей безопасности</strong>

                                    <p>
                                        Максимальная безопасность благодаря заблаговременным предупреждениям и усовершенствованному контролю скорости, которые задействуются на потенциально опасной дистанции и скорости, а также органично встроенному цветному проекционному дисплею на лобовом стекле (HUD) (опция) и Системе автономного экстренного торможения (AEB) (опция)
                                    </p>
                                    <div class="sub1"><ul><li><img src="/media/img/genesisnew/hw081628.jpg" width="350" height="229" alt=""/><br/>
                                                <strong>Цветной проекционный дисплей на лобовом стекле (HUD) (опция)</strong>
                                                <p>
                                                    Позволяет водителю видеть всю важную информацию на лобовом стекле автомобиля, не отвлекаясь от управления, для еще более безопасного вождения.
                                                </p>
                                                <a href="#">Узнать больше</a>
                                            </li><li><img src="/media/img/genesisnew/hw081627.jpg" width="350" height="229" alt=""/><br/>
                                                <strong>Система автономного экстренного торможения (AEB) (опция) </strong>

                                                <p>
                                                    Определяет дистанцию до других автомобилей впереди с помощью радара и камеры.<br /><br />

                                                </p>
                                                <a href="#">Узнать больше</a>
                                            </li></ul></div></div></div>

                            <div class="close"><a href="#">Close</a></div></li>
                        <li class="view3">
                            <div class="menu">
                                <ul><!-- edit text 2014-03-31-->
                                    <li class="menu1 on"><a href="#">Экстерьер<!-- Fluidic Sculpture 2.0 --></a></li>
                                    <li class="menu2"><a href="#">Интерьер<!-- Horizontal layout --></a></li>
                                </ul>
                            </div><div class="view_sub view3_1"><div class="text">
                                    <strong>Экстерьер <!-- Fluidic Sculpture 2.0 --></strong><!-- edit text 2014-03-31 -->

                                    <p>
                                        Наша вдохновленная природой философия дизайна претерпела изменения. Аутентичный струящийся динамизм уравновешивает крутой нрав и органичную скульптурную мягкость линий. Результат — улучшенный коэффициент аэродинамического сопротивления 0,26, экономичность и совершенная красота.
                                    </p>
                                </div>

                                <div class="slider_wrap">
                                    <div class="slider_img">
                                        <div class="img1">
                                            <img src="/media/img/genesisnew/hw081383.jpg" width="940" height="619" alt=""/>
                                        </div>

                                        <div class="img2">
                                            <img src="/media/img/genesisnew/hw081382.jpg" width="940" height="619" alt=""/>
                                        </div>
                                    </div>

                                    <div class="slider_bg">&nbsp;</div>

                                    <div class="slider" id="highlights_slider">&nbsp;</div>

                                    <div class="slider_text">

                                        <ul><!-- edit text 2014-03-27 -->
                                            <li>Genesis 1-го поколения</li>
                                            <li>Genesis 2-го поколения</li>
                                        </ul>

                                    </div>

                                    <div class="new_point">
                                        <div class="new1">
                                            Изысканная <br />эстетика <br />струящихся <br />линий
                                        </div>
                                        <div class="new2">Современный <br />облик <br />Hyundai</div>
                                        <div class="new3">Престижное <br />исполнение</div>

                                    </div>
                                </div></div>

                            <div class="view_sub view3_2"><div class="img"><img src="/media/img/genesisnew/hw081384.jpg" width="1280" height="619" alt=""/></div><div class="text">
                                    <strong>Интерьер <!-- Horizontal layout --></strong><!-- edit text 2014-03-31 -->
                                    <p>
                                        Лаконичная горизонтальная компоновка, большой дисплей и последовательное расположение переключателей обеспечивают атмосферные визуальные эффекты и удобное управление. Расположенные по порядку сверху вниз аналоговые часы, монитор, система климат-контроля и мультимедийная система представляют собой воплощение удобного, продуманного и гармоничного дизайна.
                                    </p>
                                </div><div class="sub2">
                                    <ul>
                                        <li class="list1">Монитор</li>
                                        <li class="list2">Система климат-контроля</li>
                                        <li class="list3">Мультимедийная система</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="close">
                                <a href="#">Close</a></div></li></ul></div></div>

            <div class="main_img hideMe">
                <div><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081385.jpg" width="1920" height="680" alt="" class="lazy"/></div></div></div><div class="contents_exterior pip" id="contents_exterior"><div class="parallax parallax1" style="background:url('/media/img/genesisnew/hw081416.jpg') no-repeat fixed 50% 50% #111;"><div>Exterior</div></div><div class="pip_cont"><div class="text_play">

                    <div class="text1">СТРАСТЬ, ВСПЫХНУВШАЯ С НОВОЙ СИЛОЙ</div><div class="text2">Дизайн и достоинства, которые покорят вас</div></div>

                <div class="parallax parallax1" style="background:url('/media/img/genesisnew/hw081561.jpg') no-repeat fixed 50% 50% #111;"></div>
                <div class="list_wrap"><div class="list"><div class="list1"><ul class="thumbnail"><li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081355.jpg" class="lazy" width="430" height="350" alt=""/><br/>
                                        <div class="text"><strong>Панорамная крыша с люком (опция)</strong>
                                            <p>
                                                Панорамная крыша с люком Genesis создает ощущение простора в салоне, открывая взору небо над головой, даже когда он закрыт.
                                            </p>

                                        </div></a></li><li><a href="#" class="pds"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081356.jpg" class="lazy" width="430" height="249" alt=""/><br/>

                                        <div class="text"><strong>Электродоводчики дверей (опция)</strong>
                                            <p>
                                                Встроенные в замки дверей датчики активируют миниатюрные электродвигатели, которые полностью закрывают двери, если они неплотно прикрыты.
                                            </p>

                                        </div></a><div class="movie_images"><img src="/media/img/genesisnew/hw081647.jpg" width="570" height="3652" alt=""/></div></li></ul></div><div class="list2">

                            <ul class="thumbnail">
                                <li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081357.jpg" class="lazy" width="438" height="600" alt=""/><br/><div class="text">
                                            <strong>Передние фары с ксеноновым светом со светодиодными дневными ходовыми огнями</strong>
                                            <p>
                                                Передние фары с ксеноновым светом со светодиодными дневными ходовыми огнями обеспечивают точное, яркое освещение и потребляют меньше энергии, а также подчеркивают эстетику нового Genesis. При приближении к другому автомобилю интеллектуальная система дальнего света переключается на ближний свет. Вы также сможете смотреть вперед дальше благодаря более яркому дальнему свету без бликов.
                                            </p>

                                        </div></a></li></ul></div><div class="list3"><ul class="thumbnail"><li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081358.jpg" class="lazy" width="330" height="288" alt=""/><br/><div class="text">

                                            <strong>Задние фонари со светодиодами</strong>
                                            <p>
                                                Потрясающе стильные и одинаково эффективные под любым углом зрения задние фонари со светодиодами будут привлекать внимание в любую погоду.
                                            </p>

                                        </div></a></li><li><a href="#" class="sts"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081359.jpg" class="lazy" width="330" height="311" alt=""/><br/><div class="text">

                                            <strong>Автоматическое открытие крышки багажника (опция)</strong>
                                            <p>
                                                Если водитель находится сзади автомобиля со смарт-ключом в течение трех секунд, то багажник автоматически открывается. Данная функция очень удобна, поскольку водителю не требуется ставить сумки и вновь поднимать их.
                                            </p>

                                        </div></a><div class="movie_images"><img src="/media/img/genesisnew/hw081646.jpg" width="570" height="4648" alt=""/></div></li></ul></div></div></div></div><div class="morelist">
                <ul class='clearfix'>
                    <li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081348.jpg" class="lazy"/><br/></span><span class="description">

            <strong>Решетка радиатора</strong><br />
                            Красота заключена в линиях. На выбор предлагается серебристая окраска с хромированием или черная с хромированными акцентами. Выберите то, что лучше всего отвечает вашим представлениям об элегантности.
                        </span>

                    </li>

                    <li>
                            <span class="img">
                                <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081349.jpg" class="lazy"/>
                                <br/>
                            </span>
                            <span class="description">
                                <strong>Светодиодные передние противотуманные фары (опция)</strong><br />
                            Туманной может быть погода, но не дорога впереди Вас. Светодиодные передние противотуманные фары пробиваются через плотный туман, чтобы показать, что ожидает вас впереди.</span>
                    </li>

                    <li>
                            <span class="img">
                                <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081350.jpg" class="lazy"/>
                                <br/>
                            </span>

                            <span class="description"><strong>Эмблема на капоте</strong>
                                <br />
                            Эмблема на капоте усиливает элегантность передней части автомобиля и эстетику струящихся линий, подчеркивая всегда современный внешний вид Hyundai.

                            </span>

                    </li>
                </ul>

                <ul class='clearfix'>
                    <li>
                        <span class="img">
                            <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081351.jpg" class="lazy"/>
                            <br/>
                        </span>

                        <span class="description">
                            <strong>Повторители указателей поворота на зеркалах</strong>

                            <br />

                            Повторители указателей поворота на зеркалах заднего вида привлекают взгляд, делая автомобиль заметнее и повышая безопасность при смене полосы движения.

                        </span>

                    </li>

                    <li>
                        <span class="img">
                            <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081352.jpg" class="lazy"/>
                            <br/>
                        </span>

                        <span class="description"><strong>Светодиодные задние противотуманные фонари </strong><br />

                            Красный свет повышает заметность. Светодиодные задние противотуманные фонари излучают концентрированный красный свет, делая автомобиль более заметным в дождь, снег или в тумане.
                        </span>
                    </li>

                    <li>
                        <span class="img">
                            <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081354.jpg" class="lazy"/><br/></span>

                            <span class="description"><strong>Антенна в форме акульего плавника</strong><br />
                            Антенна в форме акульего плавника, отличающаяся великолепной чувствительностью, — это стильный акцент дизайна автомобиля.

                        </span>
                    </li>
                </ul>

                <ul class='clearfix'>
                    <li>
                <span class="img">
                    <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081353.jpg" class="lazy"/>
                    <br/>
                </span>

                <span class="description">

                    <strong>Лампы подсветки околодверного пространства</strong><br />
                            Лампы подсветки околодверного пространства автоматически включаются, когда водитель приближается к автомобилю. Они повышают удобство открывания дверей, а также посадки и высадки. Приглушенная подсветка в виде логотипа Genesis перед автомобилем создает особое удовольствие при посадке.

                        </span>
                    </li>

                    <li>
                        <span class="img">
                            <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081644.jpg" class="lazy"/><br/>
                        </span>

                        <span class="description">

                            <strong>Легкосплавные диски</strong>

                            <br />
                            17-, 18- и 19-дюймовые легкосплавные диски обеспечат плавное движение. Самые большие и стильные 19-дюймовые диски оснащаются шинами 245/40 R19 спереди и 275/35 R19 сзади и улучшают ходовые характеристики автомобиля.
                        </span>
                    </li>

                    <li>
                        <span class="img">
                            <a href="/HyundaiAssurance"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081644_0.jpg" class="lazy"/></a>
                            <br/>
                        </span>

                        <span class="description"><strong>ПРИВИЛЕГИИ ПРОГРАММЫ HYUNDAI PREMIUM ASSURANCE</strong><br />

                        </span>
                    </li>
                </ul>
            </div></div><div class="contents_interior pip" id="contents_interior"><div class="parallax parallax2" style="background:url('/media/img/genesisnew/hw081417.jpg') no-repeat fixed 50% 50% #111;">

                <div>Интерьер</div></div><div class="pip_cont"><div class="text_play">

                    <div class="text1">ДЛЯ ЦЕНИТЕЛЕЙ ЭКСТРАОРДИНАРНОГО</div>
                    <div class="text2">Домашний комфорт, куда бы вы ни отправились</div>
                </div>

                <div class="section1">

                    <div class="car">
                        <img src="/media/img/genesisnew/hw081388.png" alt="interior_color_1" />

                        <img src="/media/img/genesisnew/hw081389.png" alt="interior_color_2" />

                        <img src="/media/img/genesisnew/hw081390.png" alt="interior_color_3" />

                        <img src="/media/img/genesisnew/hw081391.png" alt="interior_color_4" />

                        <img src="/media/img/genesisnew/hw081392.png" alt="interior_color_5" />
                    </div><div class="color"><div class="txt">ЦВЕТ СИДЕНИЙ</div>

                        <ul class="chip">
                            <li class="on"><a href="#"><img src="/media/img/genesisnew/hw081393.png" alt="Кремовый"/></a></li>
                            &nbsp;<li><a href="#"><img src="/media/img/genesisnew/hw081394.png" alt="Бежевый"/></a></li>
                            &nbsp;<li><a href="#"><img src="/media/img/genesisnew/hw081395.png" alt="Карамельный"/></a></li>
                            &nbsp;<li><a href="#"><img src="/media/img/genesisnew/hw081396.png" alt="Серый"/></a></li>
                            &nbsp;<li><a href="#"><img src="/media/img/genesisnew/hw081397.png" alt="Черный"/></a></li></ul><div class="details">
                            <ul class="detail detail1">
                                <li class="color_detail1"><span>Кожа</span></li>
                                <li class="color_detail2"><span>Перфорированная кожа</span></li>
                                <li class="color_detail34"><span>Натуральное дерево (черный ясень)</span></li>
                            </ul>
                            <ul class="detail detail2">
                                <li class="color_detail1"><span>Кожа</span></li>
                                <li class="color_detail2"><span>Перфорированная кожа</span></li>
                                <li class="color_detail3"><span>Отделка под дерево (дуб, полосы)</span></li>
                                <li class="color_detail4"><span>Натуральное дерево (грецкий орех)</span></li>
                            </ul>
                            <ul class="detail detail3">
                                <li class="color_detail1"><span>Кожа</span></li>
                                <li class="color_detail2"><span>Перфорированная кожа</span></li>
                                <li class="color_detail34"><span>Натуральное дерево (грецкий орех)</span></li>
                            </ul>
                            <ul class="detail detail4">
                                <li class="color_detail1"><span>Кожа</span></li>
                                <li class="color_detail2"><span>Перфорированная кожа</span></li>
                                <li class="color_detail3"><span>Отделка под дерево (эбеновое дерево, полосы)</span></li>
                                <li class="color_detail4"><span>Натуральное дерево (коричневый ясень)</span></li>
                            </ul>
                            <ul class="detail detail5">
                                <li class="color_detail1"><span>Кожа</span></li>
                                <li class="color_detail2"><span>Перфорированная кожа</span></li>
                                <li class="color_detail3"><span>Отделка под дерево (эбеновое дерево, полосы)</span></li>
                                <li class="color_detail4"><span>Натуральное дерево (коричневый ясень)</span></li>
                            </ul>
                            <ul class="detail_txt">
                                <li>Материал обивки сидений</li>
                                <li>Материал отделки</li>
                            </ul>
                        </div><div class="features">

                            <strong>Роскошные материалы в салоне</strong>

                            <p>
                                Богатые и элегантные цвета придают глубину великолепно сработанному салону автомобиля. <br />Сиденья предлагаются в пяти вариантах отделки натуральной кожей. <br />В салоне Genesis используются специально обработанное натуральное дерево  и высококлассная кожа Наппа, <br />которые сохранили свою естественную красоту, а также детали из алюминия, придающие салону элегантность и изысканность (опция).

                            </p>
                        </div></div></div>

                <div class="section2"><div class="scene_wrap"><div class="scene_offset"><div class="offset2"><div class="scene_cut"><div class="scene1"><div class="img"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081402.jpg" class="lazy" width="1280" height="600" alt=""/><br/><div class="plus_wrap">
                                                <div class="plus plus1"><a href="#">11</a></div>
                                                <div class="plus plus2"><a href="#">12</a></div>
                                                <div class="plus plus3"><a href="#">13</a></div>
                                                <!--  <div class="plus plus4"><a href="#">14</a></div>
                                                <div class="plus plus5"><a href="#">15</a></div> -->
                                            </div></div></div><div class="scene2"><div class="img"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081403.jpg" class="lazy" width="1280" height="600" alt=""/><div class="plus_wrap">
                                                <div class="plus plus1"><a href="#">21</a></div>
                                                <div class="plus plus2"><a href="#">22</a></div>
                                                <div class="plus plus3"><a href="#">23</a></div>
                                            </div></div></div></div></div><div class="control"><a href="#" class="up">

                                    <span>Передние сиденья</span></a>

                                <a href="#" class="dn">
                                    <span>Задние сиденья</span>
                                </a>

                                <br/></div><div class="details"><div class="pop_11">

                                    <strong>Приборная панель с 7-дюймовым цветным TFT-дисплеем (опция) </strong><!-- edit text 2014-03-26 -->

                                    <p>
                                        Она предоставит вам всю необходимую информацию в стильном графическом исполнении. Приборная панель с 7-дюймовым цветным TFT-дисплеем отображает все сведения — от расхода энергии до давления в шинах — в легко читаемом формате.
                                    </p>
                                    <img src="/media/img/genesisnew/hw081404.jpg" width="290" height="170" alt=""/><br/><span class="close"><a href="#">Close</a></span></div><div class="pop_12">

                                    <strong>Рулевое колесо с усилителем</strong>

                                    <p>
                                        Рулевое колесо Genesis продумано до мелочей. Элементы дистанционного управления на рулевом колесе сгруппированы в зоне досягаемости от 50 до 105 мм для простоты использования. Более того, рулевое колесо с усилителем, оснащенное подогревом (опция), электрической регулировкой вылета и наклона (опция), позволяет вам регулировать температуру и положение рулевого колеса в соответствии с вашими предпочтениями.

                                    </p>
                                    <img src="/media/img/genesisnew/hw081405.jpg" width="290" height="170" alt=""/><br/><span class="close"><a href="#">Close</a></span></div><div class="pop_13">

                                    <strong>9,2-дюймовый сенсорный экран (опция)</strong>

                                    <p>

                                        Функция разделения экрана на 9,2-дюймовом дисплее высокого разрешения позволяет получать навигационную информацию одновременно с другой аудиовизуальной информацией. Сочетание интуитивно понятного интерфейса и дизайна иконок, сенсорного управления и аудиосистемы премиум-класса Lexicon (опция) обеспечивает удобство управления и выдающееся качество звучания.

                                    </p>
                                    <img src="/media/img/genesisnew/hw081406.jpg" width="290" height="150" alt=""/><br/><span class="close"><a href="#">Close</a></span></div><div class="pop_21">

                                    <strong>Электрическая шторка заднего стекла</strong>

                                    <p>

                                        Наслаждайтесь уединением и тенью благодаря электрической шторке заднего стекла, которая опускается и поднимается нажатием кнопки. При движении задним ходом шторка складывается автоматически.

                                    </p>

                                    <img src="/media/img/genesisnew/hw081409.jpg" width="290" height="170" alt=""/><br/><span class="close"><a href="#">Close</a></span></div><div class="pop_22">

                                    <strong>Центральный подлокотник заднего сиденья</strong>

                                    <p>
                                        Большой центральный подлокотник оснащен встроенными элементами управления задними сиденьями и мультимедийными функциями. В него также встроены большой отсек для хранения и двойные держатели для стаканов. Благодаря электрической системе регулировки сиденья в восьми направлениях вы можете отрегулировать сдвиг вперед и назад и положение спинки вашего сиденья (опция).
                                    </p>

                                    <img src="/media/img/genesisnew/hw081410.jpg" width="290" height="170" alt=""/><br/><span class="close"><a href="#">Close</a></span></div><div class="pop_23">

                                    <strong>Ручные шторки задних дверей (опция)</strong>

                                    <p>
                                        Для тех, кому недостаточно тонированных стекол. Ручные шторки задних дверей надежно защитят вас от посторонних взглядов и от солнечных лучей.
                                    </p>

                                    <img src="/media/img/genesisnew/hw081387.jpg" width="290" height="170" alt=""/><br/><span class="close"><a href="#">Close</a></span></div></div></div></div></div></div><div class="morelist">
                <ul class='clearfix'>
                    <li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081398.jpg" class="lazy"/><br/>
          </span>

          <span class="description">

            <strong>Пороги дверей с подсветкой</strong><br />

                            Пороги дверей с приглушенной элегантной подсветкой создают особое ощущение при посадке и высадке из автомобиля.

                        </span>
                    </li>

                    <li>
                        <span class="img">
                            <img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081399.jpg" class="lazy"/><br/>
                        </span>

                        <span class="description">
                            <strong>Аналоговые часы</strong><br />

                            Аналоговые часы дополняют современные системы и придают дизайну салона утонченность и шарм.

                        </span>
                    </li>

                    <li>
                        <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081401.jpg" class="lazy"/><br/>
                        </span>

                        <span class="description">
                            <strong>Потолочная консоль</strong><br />
                            Для удобства внутри потолочной консоли размещены три переключателя — для лампы освещения салона, панорамного люка (опция), шторок с приводом и системы включения ламп освещения при открывании дверей.

                        </span>
                    </li>

                </ul>

                <!-- <ul class='clearfix'>

                      <li>
                          <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081400.jpg" class="lazy"/><br/></span><span class="description"><strong>Rear seat entertainment system</strong><br />
                              Bring on the traffic. With a dual-monitor rear <br />seat entertainment system, your passengers <br />in the rear can watch movies and more, <br />on the go.</span></li>
                </ul> -->

            </div></div>

        <div class="contents_performance pip" id="contents_performance"><div class="parallax parallax3" style="background:url('/media/img/genesisnew/hw081418.jpg') no-repeat fixed 50% 50% #111;"><div>Performance</div></div><div class="pip_cont"><div class="text_play"><div class="text1">УЛУЧШЕННЫЕ ДИНАМИЧЕСКИЕ ХАРАКТЕРИСТИКИ</div>
                    <div class="text2">Мы увеличили мощность в диапазоне от низких до средних оборотов. В результате возросла динамика
                        в широком диапазоне скоростей.</div></div><div class="menu">
                    <ul>
                        <!-- <li class="on"><a href="#">5.0 V8</a></li> --><!-- no space
                        --><li><a href="#">3.8 V6</a></li><!-- no space
                        --><li><a href="#">3.0 V6</a></li>
                    </ul>
                </div>
                <div class="list">
                    <ul>
                        <!-- <li>
                            <div class="engine1">5.0 V8 GDi <br /><span>gasoline engine with D-CVVT</span></div>
                            <p>The V8 delivers aggressive accelerating force and power <br />                               that is smooth, quiet and silky. Controlled power, at its best.<br />                               It produces 413 ps at 6,000 rpm and 51.5 kg&middot;m of maximum <br />                              torque at 5,000 rpm. </p>
                            <div class="graph"><div class="pos"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081424.gif" class="lazy" width="455" height="647" alt=""/><br/><div class="text"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081425.png" class="lazy" width="455" height="647" alt=""/></div></div></div><div class="max">
                                <dl class="max_power">                                  <dt>Max. Power</dt>                                     <dd><strong>413</strong> <span class="unit">ps</span></dd>                              </dl>                               <dl class="max_toque">                                  <dt>Max. Toque</dt>                                     <dd><strong>51.5</strong> <span class="unit">kg&middot;m</span></dd>                                </dl>
                            </div>
                        </li> -->

                        <li>
                            <div class="engine1">3.8 GDi <br /><span>Бензиновый двигатель 3.8 GDi с системой D-CVVT</span></div>

                            <p>
                                Genesis оснащается самыми современными двигателями, которые может предложить компания Hyundai. Двигатель 3.8 GDI обладает мощностью 315 л. с. при 6000 об/мин и максимальным крутящим моментом 397 Нм при 5000 об/мин

                            </p>

                            <div class="graph"><div class="pos"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081426.gif" class="lazy" width="455" height="647" alt=""/><br/><div class="text"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081427.png" class="lazy" width="455" height="647" alt=""/></div></div></div><div class="max">
                                <dl class="max_power">
                                    <dt>Макс. Мощность</dt>
                                    <dd><strong>315</strong> <span class="unit">л.с.</span></dd>                              </dl>
                                <dl class="max_toque">
                                    <dt>Макс. Крутящий момент</dt>
                                    <dd><strong>397</strong> <span class="unit">Нм</span></dd>
                                </dl>
                            </div>
                        </li>

                        <li>
                            <div class="engine1">3.0 GDi <br /><span>Бензиновый двигатель 3.0 GDi с системой D-CVVT</span></div>
                            <p>
                                Genesis оснащается самым мощным и совершенным двигателем, который может предложить компания Hyundai. Двигатель обладает мощностью 249 л. с. при 6000 об/мин и максимальным крутящим моментом 304 Нм при 5000 об/мин.
                            </p>
                            <div class="graph">
                                <div class="pos"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081428.gif" class="lazy" width="455" height="647" alt=""/><br/>
                                    <div class="text">
                                        <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081421.png" class="lazy" width="455" height="647" alt=""/></div></div></div>
                            <div class="max">

                                <dl class="max_power">
                                    <dt>Макс. Мощность</dt>
                                    <dd><strong>249</strong> <span class="unit">л.с.</span></dd>
                                </dl>

                                <dl class="max_toque">
                                    <dt>Макс. Крутящий момент</dt>
                                    <dd><strong>304</strong> <span class="unit">Нм</span></dd>
                                </dl>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="morelist">
                <ul class='clearfix'>

                    <li>
            <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081422.jpg" class="lazy"/><br/>

            </span>

            <span class="description">

                <strong>8-ступенчатая автоматическая коробка передач</strong><br />

                            В Genesis реализовано множество технологических достижений, таких как гидравлический преобразователь крутящего момента, высокопрочный алюминиевый корпус коробки передач, встроенные датчики и электропроводка, а также блок электромагнитных клапанов с непосредственным управлением.

                        </span></li>

                    <li>
                            <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081423.jpg" class="lazy"/><br/>
                            </span>

                            <span class="description">
                                <strong>Многорычажная подвеска с электронным управлением (ECS)
                                </strong>
                                <br /><!-- edit title 2014-04-02-2 -->
                            Многорычажная подвеска с электронным управлением (ECS) регулирует степень амортизации в зависимости от дорожных условий и режима вождения, и помогает увеличить устойчивость автомобиля. Система ECS обеспечивает великолепный комфорт при движении в режимах normal, eco и snow.

                        </span></li>

                </ul>
            </div></div><div class="contents_safety pip" id="contents_safety"><div class="parallax parallax4" style="background:url('/media/img/genesisnew/hw081419.jpg') no-repeat fixed 50% 50% #111;"><div>safety</div></div><div class="pip_cont"><div class="text_play">

                    <div class="text1">ВСЕСТОРОННЯЯ ЗАЩИТА</div>

                    <div class="text2">
                        Отдыхайте и просто наслаждайтесь поездкой — высокие технологии стоят на страже вашей безопасности.

                    </div>

                </div>

                <div class="scene_wrap">
                    <div class="scene scene1">
                        <div class="bg">
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081289.png" class="lazy" width="1280" height="172" alt=""/>
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081290.png" class="lazy" width="1280" height="172" alt=""/>
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081291.png" class="lazy" width="1280" height="172" alt=""/>
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081292.png" class="lazy" width="1280" height="172" alt=""/>
                        </div>
                        <div class="mycar">
                            <div class="line">
                                <img src="/media/img/genesisnew/hw081308.png" width="579" height="817" alt=""/>
                                <img src="/media/img/genesisnew/hw081309.png" width="579" height="817" alt=""/>
                                <img src="/media/img/genesisnew/hw081310.png" width="579" height="817" alt=""/>
                                <img src="/media/img/genesisnew/hw081311.png" width="579" height="817" alt=""/><br/>
                            </div>
                            <div class="line2">
                                <img src="/media/img/genesisnew/hw081643.png" width="275" height="299" alt=""/><br/></div><div class="car">
                                <img src="/media/img/genesisnew/hw081432.png" alt="safety_mycar1" /></div><div class="info">
                                <img src="/media/img/genesisnew/hw081284.png" alt="safety_aeb_mycar_info_off" />
                                <img src="/media/img/genesisnew/hw081285.png" alt="safety_aeb_mycar_info_on" /><br/></div><div class="brake">&nbsp;</div></div><div class="yourcar">
                            <img src="/media/img/genesisnew/hw081437.png" alt="safety_yourcar2" />
                            <div class="brake">&nbsp;</div>
                        </div>

                    </div>
                    <div class="scene scene2">
                        <div class="bg">
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081289.png" class="lazy" width="1280" height="172" alt=""/>
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081290.png" class="lazy" width="1280" height="172" alt=""/>
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081291.png" class="lazy" width="1280" height="172" alt=""/>
                            <img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081292.png" class="lazy" width="1280" height="172" alt=""/><br/></div><div class="bg_light">&nbsp;</div><div class="mycar"><div class="line">
                                <img src="/media/img/genesisnew/hw081572.png" width="503" height="711" alt=""/>
                                <img src="/media/img/genesisnew/hw081573.png" width="503" height="711" alt=""/>
                                <img src="/media/img/genesisnew/hw081574.png" width="503" height="711" alt=""/>
                                <img src="/media/img/genesisnew/hw081575.png" width="503" height="711" alt=""/><br/></div><div class="car">
                                <img src="/media/img/genesisnew/hw081432.png" alt="safety_mycar1" /></div></div><div class="yourcar">
                            <img src="/media/img/genesisnew/hw081437.png" alt="safety_yourcar2" /><br/></div><div class="speed_mycar">
                            <strong>110</strong>
                            <span class="unit">km/h</span>
                        </div><div class="speed_yourcar">
                            <strong>110</strong>
                            <span class="unit">km/h</span>
                        </div></div>
                    <div class="scene scene3">
                        <div class="bg">
                            <img src="/media/img/genesisnew/hw081289.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081290.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081291.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081292.png" class="" width="1280" height="172" alt=""/><br/>
                        </div><div class="mycar"><div class="line">
                                <img src="/media/img/genesisnew/hw081312.png" width="507" height="732" alt=""/>
                                <img src="/media/img/genesisnew/hw081313.png" width="507" height="732" alt=""/>
                                <img src="/media/img/genesisnew/hw081314.png" width="507" height="732" alt=""/>
                                <img src="/media/img/genesisnew/hw081315.png" width="507" height="732" alt=""/><br/></div><div class="car">
                                <img src="/media/img/genesisnew/hw081432.png" alt="safety_mycar1" /></div><div class="info">
                                <img src="/media/img/genesisnew/hw081293.png" alt="safety_bsd_mycar_info_off" />
                                <img src="/media/img/genesisnew/hw081294.png" alt="safety_bsd_mycar_info_on" /><br/>
                            </div>
                        </div>
                        <div class="yourcar">
                            <img src="/media/img/genesisnew/hw081437.png" alt="safety_yourcar2" /><br/>
                        </div>
                    </div>
                    <div class="scene scene4"><div class="bg">
                            <img src="/media/img/genesisnew/hw081289.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081290.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081291.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081292.png" class="" width="1280" height="172" alt=""/><br/>
                        </div>
                        <div class="bg_alert">&nbsp;</div>
                        <div class="mycar">
                            <div class="line">
                                <img src="/media/img/genesisnew/hw081316.png" width="522" height="506" alt=""/>
                                <img src="/media/img/genesisnew/hw081317.png" width="522" height="506" alt=""/>
                                <img src="/media/img/genesisnew/hw081318.png" width="522" height="506" alt=""/>
                                <img src="/media/img/genesisnew/hw081319.png" width="522" height="506" alt=""/><br/></div><div class="car">
                                <img src="/media/img/genesisnew/hw081432.png" alt="safety_mycar1" /></div><div class="info">
                                <img src="/media/img/genesisnew/hw081296.png" alt="safety_lkas_mycar_info_off" />
                                <img src="/media/img/genesisnew/hw081297.png" alt="safety_lkas_mycar_info_on" /><br/></div></div></div>

                    <div class="scene scene5">
                        <div class="bg">
                            <img src="/media/img/genesisnew/hw081289.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081290.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081291.png" class="" width="1280" height="172" alt=""/>
                            <img src="/media/img/genesisnew/hw081292.png" class="" width="1280" height="172" alt=""/><br/>
                        </div><div class="mycar"><div class="default">
                                <img src="/media/img/genesisnew/hw081434.png" alt="safety_mycar2_off" /></div><div class="clean">
                                <img src="/media/img/genesisnew/hw081435.png" alt="safety_mycar2_on" /></div><div class="error">
                                <img src="/media/img/genesisnew/hw081433.png" alt="safety_mycar2_error" /></div><div class="error_bg">
                                <img src="/media/img/genesisnew/hw081320.png" alt="safety_car_line4_1" />
                                <img src="/media/img/genesisnew/hw081321.png" alt="safety_car_line4_2" />
                                <img src="/media/img/genesisnew/hw081322.png" alt="safety_car_line4_3" />
                                <img src="/media/img/genesisnew/hw081323.png" alt="safety_car_line4_4" />
                                <br/></div></div><div class="tire_img">
                            <img src="/media/img/genesisnew/hw081298.png" alt="safety_tire1" />
                            <img src="/media/img/genesisnew/hw081283.png" alt="safety_tire2" /><br/></div></div><div class="text_wrap">
                        <ul>
                            <li>
                                <strong>Система автономного экстренного торможения (AEB) (опция)</strong>


                                <p> Система автономного экстренного торможения (AEB) автоматически задействует тормоза при обнаружении внезапного сокращения дистанции до находящегося впереди автомобиля, считывая сигнал радара системы интеллектуального круиз-контроля (SCC) и сигналы от камеры Системы слежения за дорожной разметкой (LKAS). В экстренной ситуации она останавливает автомобиль и минимизирует повреждения.
                                    <span class="notice_wrap">


                                        <span class="notice">Тормозная система полностью активируется на скорости до 80 км/ч. </span>

                                    </span>
                                </p>
                            </li>
                            <li>
                                <strong>Интеллектуальный круиз-контроль (SCC) (опция)</strong>
                                <p>
                                    Передний радиолокационный датчик определяет дистанцию до находящегося впереди автомобиля и автоматически поддерживает ее и установленную водителем скорость.
                                </p>
                            </li>

                            <li>

                                <strong>Система мониторинга «слепых» зон (BSD) (опция)и Интелектуальная система оповещения об опасности при движении задним ходом (опция) </strong>

                                <p>
                                    Система мониторинга «слепых» зон (BSD) предупреждает водителя о нахождении объекта в мертвой зоне и подает второе предупреждение, если водитель включает сигнал поворота и пытается сменить полосу. Кроме того, система  оповещения об опасности при движении задним ходом предупреждает водителя, если какой-либо объект приближается справа или слева от задней части автомобиля.
                                </p>

                            </li>

                            <li>

                                <strong>Система слежения за дорожной разметкой (LKAS) (опция)</strong>

                                <p>
                                    Оставайтесь на своей полосе благодаря системе слежения за дорожной разметкой. Система LKAS определяет сход автомобиля с полосы движения посредством камеры в верхней части лобового стекла и создает вибрацию на рулевом колесе.
                                </p>
                            </li>
                            <li>

                                <strong>Система контроля давления в шинах (TPMS)</strong>
                                <p>
                                    Пусть о давлении в шинах заботится Genesis. Система контроля давления в шинах (TPMS) держит шины под контролем и подает сигнал на приборной панели, если что-то не в порядке.
                                </p>
                            </li>
                        </ul>
                    </div><div class="controls">
                        <a href="#" class="play">Play</a>
                        <a href="#" class="stop">Stop</a>
                        <a href="#" class="next">Next</a>
                    </div><div class="slider_wrap"><div class="slider" id="safety_slider"></div>
                        <div class="slider_text">
                            <div class="slider" id="safety_slider"></div>
                            <div class="slider_text">
                                <ul>
                                    <li class="on">AEB</li>
                                    <li>SCC</li>
                                    <li>BSD/RCTA</li>
                                    <li>LKAS</li>
                                    <li>TPMS</li>
                                    <li>END</li>
                                </ul>
                            </div>
                        </div></div></div></div><div class="morelist">
                <ul class='clearfix'>
                    <li>
            <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081429.jpg" class="lazy"/><br/>
            </span>

            <span class="description">

                <strong>Девять подушек безопасности</strong><br />

                            Чтобы сохранить Вас в безопасности в случае столкновения, Genesis оснащен современной системой подушек безопасности. Вас надежно защищают передние подушки безопасности, боковые шторки безопасности, передние и задние боковые подушки безопасности и коленная подушка безопасности водителя.

                        </span>
                    </li>

                    <li>
                        <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081430.jpg" class="lazy"/><br/>
                        </span>

                        <span class="description">
                            <strong>Ремень безопасности с системой Pre-Safe Belt (опция) </strong><br />
                            Теперь ремни стали «умными». Преднатяжители ремней безопасности помогут вам застегнуть ремень безопасности и, главное, подтянут его в случае обнаружения опасности столкновения.

                        </span>
                    </li>

                    <li>
                        <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081431.jpg" class="lazy"/><br/>
                        </span>

                        <span class="description"><strong>Активная система защиты пешеходов при столкновении </strong>

                            <br />
                            Крышка капота защищает голову пешехода в критической ситуации. Система защиты пешеходов при столкновении обеспечивает поглощение энергии удара — крышку капота моменально приподнимает специальный механизм. Всесторонняя защита.


                        </span></li>
                </ul>

                <ul class='clearfix'>
                    <li></li>
                    <li>
                      <span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081348-0.jpg" class="lazy"/><br/>
                        </span>

                        <span class="description"><strong>Интеллектуальный полный привод HTRAC <small>(опция)</small></strong>

                            <br />
                            HTRAC является передовой электронной системой полного привода, которая автоматически определяет оптимальное распределение крутящего момента между передней и задней осями автомобиля. При обнаружении неровностей или скользкого дорожного покрытия, система автоматически подключает переднюю ось автомобиля.


                        </span>
                    </li>
                </ul>

            </div></div>

        <div class="contents_convenience pip" id="contents_convenience">
            <div class="parallax parallax5" style="background:url('/media/img/genesisnew/hw081420.jpg') no-repeat fixed 50% 50% #111;">

                <div>Convenience</div></div><div class="pip_cont"><div class="text_play"><div class="text1">ИСПЫТАЙТЕ ВСЕ, ЧТО МОЖЕТ ПРЕДЛОЖИТЬ GENESIS</div>

                    <div class="text2">
                        <br />
                        <br />
                        От первоклассной информационной системы для водителя (DIS) (опция) и навигации до проекционного дисплея (HUD) (опция) —
                        все эти совершенные функции созданы для интеллектуального вождения.


                    </div></div>

                <div class="main_wrap">
                    <div class="main">
                        <ul>
                            <li class="left">
                                <div class="img">
                                    <img src="/media/img/genesisnew/hw081337.png" width="940" height="600" alt=""/></div><div class="text">
                                    <ul>
                                        <li class="txt1">Твердость спинки : <strong>средняя</strong></li>
                                        <li class="txt2">Твердость спинки : <strong>жесткая</strong></li>
                                        <li class="txt3"><strong class="white">Регулируемый выступ <br />боковой поддержки <br />сиденья водителя (опция)</strong></li><!-- edit text 2014-03-31 -->
                                        <li class="txt4"><strong class="white">Выдвигающаяся <br />подушка сиденья водителя (опция)</strong></li><!-- edit text 2014-03-31 -->
                                        <li class="txt5">Твердость спинки : <strong>мягкая</strong></li>
                                        <li class="txt6">Твердость подушки : <strong>средняя</strong></li>
                                        <li class="txt7">Твердость подушки : <strong>жесткая</strong></li>
                                        <li class="txt8">Твердость подушки : <strong>мягкая</strong></li>
                                    </ul>

                                    <div class="desc">

                                        Для повышенного комфорта в каждой секции сиденья Genesis используется набивка разной жесткости, <br />а выступы боковой поддержки с воздушными камерами снабжены регулировкой. <br />Более того, подушку сиденья водителя можно выдвинуть для создания оптимальной поддержки ног.

                                    </div></div></li><li class="center"><div class="img"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081336.gif" class="lazy" width="1280" height="600" alt=""/></div><div class="text">

                                    <strong>Концепция <br />интуитивно-понятного управления <br />(HMI)</strong>

                                    <p>

                                        Концепция интуитивно-понятного управления (HMI) реализована <br />чтобы водитель мог управлять системой проще, <br />отвлекаясь при этом от дороги как можно реже. <br />Основанный на эргономичном дизайне <br />для простоты и удобства использования, <br />интерфейс HMI объединяет в единое целое <br />рулевое колесо, регулировку сидений, <br />приборную панель, панели управления на дверях <br />и центральную консоль.

                                    </p>
                                </div></li><li class="right"><div class="img"><img src="/media/img/genesisnew/hw081338.png" width="940" height="600" alt=""/></div><div class="text">
                                    <ul>
                                        <li class="txt1"><strong>Вид в поперечном разрезе</strong></li>
                                        <li class="txt2"><strong style="font-size:10px;">Подрулевой переключатель АКПП</strong></li>
                                        <li class="txt3">
                                            <p>
                                                Рулевое колесо Genesis отклоняется от <br>традиционных форм <br>для более плотного и удобного хвата, <br>который обеспечивает больший комфорт <br>даже в дальних поездках.
                                            </p>
                                        </li>
                                        <li class="txt4">
                                            <strong>Дистанционное управление</strong>
                                            <p>
                                                На рулевом колесе находится группа переключателей — <br>для управления телефоном, активации автоматического <br>круиз-контроля и <br>дистанционного управления аудиосистемой, — <br>которыми водитель сможет пользоваться интуитивно.
                                            </p>
                                        </li>
                                        <li class="txt5">
                                            <strong>Большая область для рук</strong>

                                            <p>
                                                Оптимальное размещение и тип обивки <br>на рулевом колесе улучшают хват и <br>помогают предотвратить ошибки при управлении.
                                            </p>
                                        </li>
                                    </ul>
                                </div></li></ul><div class="controls"><div class="prev"><a href="#">Previous</a></div><div class="next"><a href="#">Next</a></div></div></div></div><div class="list_wrap"><div class="list"><div class="list1"><ul class="thumbnail"><li><a href="#" class="avds"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081330.jpg" class="lazy" width="530" height="356" alt=""/><br/>

                                        <div class="text">
                                            <strong>Система кругового обзора (AVM) (опция)
                                            </strong>

                                            <p>

                                                Изнутри видно все, что происходит снаружи.
                                                Система кругового обзора (AVM) на  сенсорном экране отображает то, что находится вокруг автомобиля с помощью четырех камер. Вы получаете всесторонний обзор на 360 градусов.

                                            </p></div></a>

                                    <div class="sub_images"><img src="/media/img/genesisnew/hw081776.jpg" width="256" height="133" alt=""/></div></li>

                                <li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081331.jpg" class="lazy" width="530" height="243" alt=""/><br/>

                                        <div class="text">

                                            <strong>3-зонный климат-контроль <small>(опция)</small> <br /></strong>

                                            <p>

                                                Трехзонный климат-контроль позволяет отдельно регулировать температуру для водителя и пассажиров спереди и сзади, что обеспечивает больший комфорт для всех. Дополнительно система кондиционирования оснащена функцией контроля за концентрацией CO2 внутри автомобиля (опция) для предотвращения сонливости во время движения, что помогает оптимальным образом использовать воздух из окружающей среды, снижая нагрузку на систему кондиционирования и расход топлива.

                                            </p></div></a></li></ul></div>

                        <div class="list2">
                            <ul class="thumbnail"><li><a href="#" class="ims"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081332.jpg" class="lazy" width="338" height="288" alt=""/><br/>

                                        <div class="text">

                                            <strong>Электрорегулировки сидений со встроенной памятью для двух водителей (опция)</strong>

                                            <p>

                                                Электрорегулировки сидений со встроенной памятью (IMS) способны воспроизвести положение сидений, внешних зеркал заднего вида, рулевого колеса и настройки проекционного дисплея (HUD) в соответствии с индивидуальными предпочтениями водителя.

                                            </p>
                                        </div>
                                    </a>

                                    <div class="movie_images">
                                        <img src="/media/img/genesisnew/hw081625.jpg" width="627" height="385" alt=""/><img src="/media/img/genesisnew/hw081624.jpg" width="627" height="385" alt=""/></div></li><li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081333.jpg" class="lazy" width="338" height="311" alt=""/><br/>

                                        <div class="text">

                                            <strong>Аудиосистема премиум-класса</strong>

                                            <p>

                                                В стандартной комплектации автомобиль оснащается семью динамиками, обеспечивающими великолепное воспроизведение звука. Дополнительно возможна установка аудиосистемы Lexicon с 14 или 17 динамиками — с ней качеству звука в вашем салоне не будет равных.

                                            </p>

                                        </div></a></li></ul></div>

                        <div class="list3">
                            <ul class="thumbnail"><li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081334.jpg" class="lazy" width="330" height="328" alt=""/><br/>
                                        <div class="text">

                                            <strong>Цветной проекционный дисплей <br />на лобовом стекле (HUD) (опция)</strong>

                                            <p>

                                                Вся важная информация проецируется на лобовое стекло, что позволяет водителю считывать ее, не отводя взгляда от дороги. А 9,7-дюймовое виртуальное изображение с яркостью 10 000 кд/м 2 и простой графикой великолепно читается.

                                            </p>
                                        </div></a></li><li><a href="#"><img src="/media/img/transparent.gif" data-original="/media/img/genesisnew/hw081335.jpg" class="lazy" width="330" height="271" alt=""/><br/><div class="text">

                                            <strong>Информационная система для водителя (DIS) (опция)</strong>

                                            <p>

                                                Информационная система для водителя воплощает в себе многофункциональность и удобство: вы сможете управлять радио, навигацией и телефоном с помощью кнопок с эргономичным дизайном и поворотного контроллерав соответствии с концепцией интуитивно-понятного управления (HMI) компании Hyundai.

                                            </p></div></a></li></ul></div></div></div></div><div class="morelist">
                <ul class='clearfix'>
                    <li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081325.jpg" class="lazy"/><br/></span><span class="description">
            <strong>Визуальный помощник при парковке (PGS)</strong><br />
                            Паркуйтесь с лёгкостью благодаря системе помощи при парковке (PGS), использующей графические линии, показывающие траекторию движения.</span></li>

                    <li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081326.jpg" class="lazy"/><br/></span><span class="description">

                                <strong>Электромеханический стояночный тормоз (EPB) (опция)</strong><br />
                            Тянуть за рычаг? Это уже вчерашний день. Электромеханический стояночный тормоз (EPB) можно задействовать одним нажатием кнопки.</span></li><li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081328.jpg" class="lazy"/><br/></span><span class="description">

                            <strong>Ключ-карта (опция)</strong><br />
                            Стильный ключ-карта не только удобен в использовании, но и является предметом гордости для владельцев Genesis.</span></li>
                </ul> <ul class='clearfix'>
                    <li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081329.jpg" class="lazy"/><br/></span><span class="description"><strong>Система вентиляции и подогрева задних сидений (опция)</strong><br /><!-- edit text 2014-04-02-2 -->
                            Система обогрева и охлаждения с тремя уровнями регулировки позволяет настраивать уровень вентиляции спинок и подушек сидений.
</span></li>

                    <li><span class="img"><img height="133" alt="" src="/media/img/transparent.gif" width="306" data-original="/media/img/genesisnew/hw081623.jpg" class="lazy"/><br/></span><span class="description"><strong>Датчик дождя</strong><br />
                            Датчики автоматически настраивают скорость работы стеклоочистителей в зависимости от интенсивности дождя, обеспечивая лучшую видимость.</span></li>
                </ul>
            </div></div>















        <div class="spec_message">
            <div>* - Данные по максимальной мощности двигателя и крутящему моменту приведены согласно Одобрению типа транспортного средства.
                <br />** - Показатели расхода топлива и массы выделяемого CO2 представлены согласно методике испытаний по Правилам ЕЭК ООН №83 и 101
                <br />
            </div>

        </div>

        <div id="contents_pricelist" class="contents_pricelist pip">
            <!-- <div class="title">Цены</div>


             <br>
             <br>
 -->

            <script type='text/javascript'>
                function shareToGoogle(url){
                    window.open('https://plus.google.com/share?url='+url,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                }
            </script><ul class="print_share"><li><span>Поделиться</span><a href="javascript://" onclick="sharefacebook(document.location.href)"><img src="/media/img/genesisnew/hw000676.png" alt="icon_facebook_general.gif" /></a><a href="javascript://" onclick="twitterOpen(document.location.href)"><img src="/media/img/genesisnew/hw000667.gif" alt="icon_twitter_general.gif" /></a></li><li class="print"><span>Распечатать</span><a href="#" class="print" onclick=""><img alt="icon_print_general.gif" src="/media/img/genesisnew/hw000673.gif" /></a></li></ul><div style="width:940px;margin: 0 auto;"></div>

        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>