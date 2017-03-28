// 2017 pip flat
$.fn.css3transfrom = function (property) {
    this.each(function() {
		$(this).css({
			'-ms-transform':		property,
			'-moz-transform':		property,
			'-webkit-transform':	property,
			'transform':			property
		});
    });
    return this;
};
$.fn.css3transition = function (property) {
    this.each(function() {
		$(this).css({
			'-ms-transition':		property,
			'-moz-transition':		property,
			'-webkit-transition':	property,
			'transition':			property
		});
    });
    return this;
};

/* 201404031445 */
// chrome render bug
/*
$(document).ready(function() {
	// $(function() { $('body').hide().show(); });
	jQuery('body').delay(500).queue(
		function(next){
			jQuery(this).css('padding-right', '1px');
		}
	);
});
*/
$(document).ready(function() {
	if (navigator.userAgent.match(/iPhone|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i)) {
		$('body').addClass('mobile');
	};
});
/*
 * Lazy Load - jQuery plugin for lazy loading images
 * Copyright (c) 2007-2012 Mika Tuupola
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 * Project home:
 *   http://www.appelsiini.net/projects/lazyload
 * Version:  1.8.0
 */
(function(a,b){var c=a(b);a.fn.lazyload=function(d){function h(){var b=0;e.each(function(){var c=a(this);if(g.skip_invisible&&!c.is(":visible"))return;if(!a.abovethetop(this,g)&&!a.leftofbegin(this,g))if(!a.belowthefold(this,g)&&!a.rightoffold(this,g))c.trigger("appear");else if(++b>g.failure_limit)return!1})}var e=this,f,g={threshold:0,failure_limit:0,event:"scroll",effect:"show",container:b,data_attribute:"original",skip_invisible:!0,appear:null,load:null};return d&&(undefined!==d.failurelimit&&(d.failure_limit=d.failurelimit,delete d.failurelimit),undefined!==d.effectspeed&&(d.effect_speed=d.effectspeed,delete d.effectspeed),a.extend(g,d)),f=g.container===undefined||g.container===b?c:a(g.container),0===g.event.indexOf("scroll")&&f.bind(g.event,function(a){return h()}),this.each(function(){var b=this,c=a(b);b.loaded=!1,c.one("appear",function(){if(!this.loaded){if(g.appear){var d=e.length;g.appear.call(b,d,g)}a("<img />").bind("load",function(){c.hide().attr("src",c.data(g.data_attribute))[g.effect](g.effect_speed),b.loaded=!0;var d=a.grep(e,function(a){return!a.loaded});e=a(d);if(g.load){var f=e.length;g.load.call(b,f,g)}}).attr("src",c.data(g.data_attribute))}}),0!==g.event.indexOf("scroll")&&c.bind(g.event,function(a){b.loaded||c.trigger("appear")})}),c.bind("resize",function(a){h()}),h(),this},a.belowthefold=function(d,e){var f;return e.container===undefined||e.container===b?f=c.height()+c.scrollTop():f=a(e.container).offset().top+a(e.container).height(),f<=a(d).offset().top-e.threshold},a.rightoffold=function(d,e){var f;return e.container===undefined||e.container===b?f=c.width()+c.scrollLeft():f=a(e.container).offset().left+a(e.container).width(),f<=a(d).offset().left-e.threshold},a.abovethetop=function(d,e){var f;return e.container===undefined||e.container===b?f=c.scrollTop():f=a(e.container).offset().top,f>=a(d).offset().top+e.threshold+a(d).height()},a.leftofbegin=function(d,e){var f;return e.container===undefined||e.container===b?f=c.scrollLeft():f=a(e.container).offset().left,f>=a(d).offset().left+e.threshold+a(d).width()},a.inviewport=function(b,c){return!a.rightofscreen(b,c)&&!a.leftofscreen(b,c)&&!a.belowthefold(b,c)&&!a.abovethetop(b,c)},a.extend(a.expr[":"],{"below-the-fold":function(b){return a.belowthefold(b,{threshold:0})},"above-the-top":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-screen":function(b){return a.rightoffold(b,{threshold:0})},"left-of-screen":function(b){return!a.rightoffold(b,{threshold:0})},"in-viewport":function(b){return!a.inviewport(b,{threshold:0})},"above-the-fold":function(b){return!a.belowthefold(b,{threshold:0})},"right-of-fold":function(b){return a.rightoffold(b,{threshold:0})},"left-of-fold":function(b){return!a.rightoffold(b,{threshold:0})}})})(jQuery,window)

/* motion */
jQuery.easing.motion = function (x, t, b, c, d) {if (t==0) return b;if (t==d) return b+c;if ((t/=d/2) < 1) return c/2 * Math.pow(2, 10 * (t - 1)) + b;return c/2 * (-Math.pow(2, -10 * --t) + 2) + b;}

/* current OS */
var isMobile=0;
function isTouchDevice(){try{document.createEvent("TouchEvent");return true;}catch(e){return false;}}
if(isTouchDevice()) isMobile==1;
function touchScroll(id){
	if(isTouchDevice()){
		if (document.getElementById(id)) {
			var el=document.getElementById(id);
			var scrollStartPos=0;
			document.getElementById(id).addEventListener("touchstart", function(event) {
				scrollStartPos=this.scrollTop+event.touches[0].pageY;
				event.preventDefault();
			},false);
			document.getElementById(id).addEventListener("touchmove", function(event) {
				this.scrollTop=scrollStartPos-event.touches[0].pageY;
				event.preventDefault();
			},false);
		}
	}
}
function TrimString( strVal ) {
	if( strVal.split(" ").join("") == "" ) return false;
	else return true;
}
function gnbToggle(obj,onoff) {
	if(onoff=="off") {
		$(obj).css("visibility","hidden").css("height",0).css("padding-bottom","0");
	} else {
		$(obj).css("visibility","visible").css("height","auto").css("padding-bottom","2px");
	}
}
$(document).ready(function() {
	/* for worldwide gnb */
	$('.gnb_layer .sGnb .tab ul a').click(function(){
		var currentTab=$(this).attr('href');
		$('.gnb_layer .sGnb .tab a').removeClass('on');
		gnbToggle('.gnb_layer .sGnb>.list ul','off');
		gnbToggle('.gnb_layer .sGnb .see_all','off');
		$(this).addClass('on');
		gnbToggle(currentTab,"on");
		$(".gnb_layer .sGnb>.list").show();
		return false;
	});

	$('.gnb_layer .sGnb .tab .btn_see_all').click(function(){
		$('.gnb_layer .sGnb .tab a').removeClass('on');
		gnbToggle('.gnb_layer .sGnb>.list ul','off');
		gnbToggle('.gnb_layer .sGnb .other_list','off');
		$(".gnb_layer .sGnb>.list").hide();
		$(this).addClass('on');
		gnbToggle('.gnb_layer .sGnb .see_all','on');
		gnbToggle('.header .gnb_layer .sGnb .list ul','on');
		return false;
	});
	$('.gnb_layer .btn_close').click(function(){
		gnbToggle('.gnb_layer','off');
		$('.gnb li a').removeClass('on');
	});
	$('.gnb_layer .showroom .tab ul a').click(function(){
		var currentTab=$(this).attr('href');
		$('.gnb_layer .showroom .tab a').removeClass('on');
		$('.gnb_layer .showroom>.list ul').hide();
		$('.gnb_layer .showroom .carfinder').hide();
		$(this).addClass('on');
		$(currentTab).show();
		$('.gnb_layer .showroom .banners').show();
		return false;
	});
	$('.gnb_layer .showroom .tab .btn_finder').click(function(){
		$('.gnb_layer .showroom .tab a').removeClass('on');
		$('.gnb_layer .showroom>.list ul').hide();
		$('.gnb_layer .showroom .banners').hide();
		$(this).addClass('on');
		$('.gnb_layer .showroom .carfinder').show();
		return false;
	});
	$('#fb_like').css("left",($(window).width()-940)/2).css("display","block");

	fixedPosition();
	if (document.getElementById("cubebox")) {
		cubeMotionInit();
	}
/*
	$('#slider_deposit').bind("mouseup",function() {
		var deposit = $('#slider_deposit .jslider-value span').text();
		var Price = $('.con_price .price').text();
		var v_num = /[^0-9]/g;
		var c_num = Price.replace(v_num,'');
		var d_price = (c_num*deposit)/100
		$('#deposit_price').val(d_price.toLocaleString());
	});
	$('#slider_month').bind("mouseup",function() {
		var changeMonth = $('#slider_month .jslider-value span').text();
		$('.change_month').text(changeMonth);
	});
*/
	$('.tips_advice .show_btn .expand').click(function(){$('.tips_advice .tips_wrap').addClass('on');$('.tips_advice .show_btn').addClass('off');$(".show_btn .expand").hide();$(".show_btn .collapse").show();return false;});
	$('.tips_advice .show_btn .collapse').click(function(){$('.tips_advice .tips_wrap').removeClass('on');$('.tips_advice .show_btn').removeClass('off');$(".show_btn .expand").show();$(".show_btn .collapse").hide();return false;});
	$('.tips_advice .tips').click(function(){$(this).parent().toggleClass('on');});
	$(".cubebox .cubelist .talkntalk_form form .input textarea").bind("focus",function() {
		$(".cubebox .cubelist .talkntalk_form form .input").css("height",152);
		$(".cubebox .cubelist .talkntalk_form form .input div textarea").css("height",151);
	});
	$(".cubebox .cubelist .talkntalk_form form .input textarea").bind("blur",function() {
		$(".cubebox .cubelist .talkntalk_form form .input").css("height",27);
		$(".cubebox .cubelist .talkntalk_form form .input div textarea").css("height",26);
	});
	$(".cubebox .cubelist .experience_seemore .button a").click(function() {var w = parseInt(($(window).width()-600)/2);$(".layer_experience").css("left",w).fadeIn();});
	$(".layer_experience .layer_close a").click(function() {$(".layer_experience").fadeOut();});
	$(".open_layer").click(function() {showTranslucency();$("#layer_popup").css("top",(parseInt($(window).scrollTop())+50) + "px");$("#layer_popup").show();});

	/* CB_popup input del icon */
/*
	$('input.#deposit_price').wrap('<span class="deleteicon" />').after($('<span/>').click(function() {
		$(this).prev('input').val('').focus();
	}));
*/

	/* close layer */
	$("#layer_myplace .close_layer").click(function() {hideTranslucency();$("#layer_myplace").hide();});
	$("#layer_popup .close_layer").click(function() {hideTranslucency();$("#layer_popup").hide();});
	$("#layer_cb01 .close_layer").click(function() {hideTranslucency();$("#layer_cb01").hide();});
	$("#layer_cb02 .close_layer").click(function() {hideTranslucency();$("#layer_cb02").hide();});
	$("#layer_cb03 .close_layer").click(function() {hideTranslucency();$("#layer_cb03").hide();});
	$("#layer_cb04 .close_layer").click(function() {hideTranslucency();$("#layer_cb04").hide();});
	$("#layer_cb05 .close_layer").click(function() {hideTranslucency();$("#layer_cb05").hide();});
	$("#layer_cb06 .close_layer").click(function() {hideTranslucency();$("#layer_cb06").hide();});
	$("#layer_cb07 .close_layer").click(function() {hideTranslucency();$("#layer_cb07").hide();});
	$("#layer_cb08 .close_layer").click(function() {hideTranslucency();$("#layer_cb08").hide();});
	$("#layer_cb09 .close_layer").click(function() {hideTranslucency();$("#layer_cb09").hide();});
	$("#layer_cb10 .close_layer").click(function() {hideTranslucency();$("#layer_cb10").hide();});
	$("#layer_cb11 .close_layer").click(function() {hideTranslucency();$("#layer_cb11").hide();});
	$("#layer_pagenotfound .close_layer").click(function() {hideTranslucency();$("#layer_pagenotfound").hide();});
	$("#compare_popup01 .close_layer").click(function() {hideTranslucency();$("#compare_popup01").hide();});
	$("#compare_popup02 .close_layer").click(function() {hideTranslucency();$("#compare_popup02").hide();});
	$("#package_compare .con_popup .close_layer").click(function() {hideTranslucency();$("#package_compare").hide();});
	$("#compare_car .con_popup .close_layer").click(function() {hideTranslucency();$("#compare_car").hide();});
	$("#compare_option .con_popup .close_layer").click(function() {hideTranslucency();$("#compare_option").hide();});
	$("#code_popup .close_layer").click(function() {hideTranslucency();$("#code_popup").hide();});
	$("#rebuild_pop .close_layer").click(function() {hideTranslucency();$("#rebuild_pop").hide();});
	$("#layer_over140 .close_layer").click(function() {hideTranslucency();$("#layer_over140").hide();});
	$("#layer_legal01 .close_layer").click(function() {hideTranslucency();$("#layer_legal01").hide();});
	$("#layer_legal02 .close_layer").click(function() {hideTranslucency();$("#layer_legal02").hide();});
	$("#social_cube01 .close_layer").click(function() {hideTranslucency();$("#social_cube01").hide();});
	$("#social_cube02 .close_layer").click(function() {hideTranslucency();$("#social_cube02").hide();});
	$("#error_popup .close_layer").click(function() {hideTranslucency();$("#error_popup").hide();});
	$("#operamini_popup .close_layer").click(function() {hideTranslucency();$("#operamini_popup").hide();});
    // talk n talk layer
    $(".layer_talkntalk_more .layer_close a").click(function() {$(".layer_talkntalk_more").hide();});

	$(".ads_list .con_ads li dl dt a").click(function() {
		var h=$(document).height()
		$('#layer_popup.play_movie').css("height",h);
		$("#layer_popup").show();
		$(".thum_list .car_list").jCarouselLite({btnNext: ".thum_list .arrow_right",btnPrev: ".thum_list .arrow_left",scroll: 1,visible: 4,circular: false});
	});
	$(".car_photo .car_list_sort ul li").css("width","198px");
	$(".car_photo .car_list_sort ul li").css("height","130px");
	var liSize = $(".car_photo .car_list_sort ul li").size();
	var ulWidth = liSize * 198;
	$(".car_photo .car_list_sort ul").css("width", ulWidth);

	/* car bulder option select button */
	$('.car_builder .options_lists .btn').toggle(function(){$(this).addClass('selected');return false;},function(){$(this).removeClass('selected');return false;});
	if($('div').hasClass('main_gallery')){
		$('.main_gallery .photo').cycle({fx:     'fade',speed:  'slow',timeout: 0,
			pager:  '.car_list .car_list_sort ul',
			pagerAnchorBuilder: function(idx, slide) {
				return '.car_list .car_list_sort ul li:eq(' + idx + ')';
			}
		});
		for(var i=0;i<$('.car_photo .car_list_sort .photo img').length;i++){
			$('.car_photo .car_list_sort .photo img').eq(i).click(function(i){
				$('.car_photo .information strong').text($(this).parent().parent().find('.name').text());
				$('.car_photo .information span').text($(this).attr('alt'));
			});
		}
		$(".car_list .car_list_sort").jCarouselLite({btnNext: ".car_list .list_next",btnPrev: ".car_list .list_prev",scroll: 1,visible: 4,circular: false});
	}
	//$(".car_list .car_list_sort ul li").hover(function(){$(this).addClass('selected');return false;},function(){$(this).removeClass('selected');return false;});
	$('.car_selectlist li').hover(function(){
		$(this).addClass('select');
		$(this).find('.thumb').css('background','transparent url(/wcm/images/common/function/bg_carlist_select_on.png) no-repeat 0 65px');
		$(this).find('.thumb').animate({
			marginTop:'-13px',
			paddingBottom:'13px'
		},400);
	},function(){
		$(this).removeClass('select');
		$(this).find('.thumb').animate({
			marginTop:'0',
			paddingBottom:'0'
		},{duration:100,complete:function() {
			$(this).css('backgroundImage','none');
		}});
	});
	// scroll for smart phone // overflow:auto;
	if (isMobile==1) {
		$(".dealerfinder_direction .direction .direction_result").css("height","auto");
		$(".cb_img_table .con_explain").css("height","auto");
		touchScroll('group_explain');
	}
	/* scripts for spec */
	$(".expand_contract a.plus").click(function() {
		// open all
		$(".expand_contract a.plus").hide();
		$(".expand_contract a.minus").show();
		$(".contents_specification .spec_performance .spec_table").css("height","auto");
		$(".contents_specification .spec_dimemsion .spec_table").css("height","auto");
		$(".contents_specification .spec_chassis .spec_table").css("height","auto");
		$(".contents_specification .spec_performance .spec_performance_title a").addClass("on");
		$(".contents_specification .spec_dimemsion .spec_dimemsion_title a").addClass("on");
		$(".contents_specification .spec_chassis .spec_chassis_title a").addClass("on");
		return false;
	});
	$(".expand_contract a.minus").click(function() {
		// close all
		$(".expand_contract a.plus").show();
		$(".expand_contract a.minus").hide();
		$(".contents_specification .spec_performance .spec_table").css("height","1px");
		$(".contents_specification .spec_dimemsion .spec_table").css("height","1px");
		$(".contents_specification .spec_chassis .spec_table").css("height","1px");
		$(".contents_specification .spec_performance .spec_performance_title a").removeClass("on");
		$(".contents_specification .spec_dimemsion .spec_dimemsion_title a").removeClass("on");
		$(".contents_specification .spec_chassis .spec_chassis_title a").removeClass("on");
		return false;
	});
	$(".contents_specification .spec_performance .spec_performance_title a").click(function() {toggleSpecItem("performance");return false;});
	$(".contents_specification .spec_dimemsion .spec_dimemsion_title a").click(function() {toggleSpecItem("dimemsion");return false;});
	$(".contents_specification .spec_chassis .spec_chassis_title a").click(function() {toggleSpecItem("chassis");return false;});
	if (document.getElementById("floating_top")) {floating_top();}
	$(".show_legal").hover(function() { $(".layer_legal_wrap").css("display","block");},function() { $(".layer_legal_wrap").css("display","none");});
	/* price text */
	$(".table_compare tr.price td a.compare_price_1").mouseover(function(){$("#layer_price_1").css("bottom","auto").css("left","200px").show();});
	$(".table_compare tr.price td a.compare_price_1").mouseout(function(){$("#layer_price_1").hide();});
	$(".table_compare tr.price td a.compare_price_2").mouseover(function(){$("#layer_price_2").css("bottom","auto").css("left","200px").show();});
	$(".table_compare tr.price td a.compare_price_2").mouseout(function(){$("#layer_price_2").hide();});
	$(".table_compare tr.price td a.compare_price_3").mouseover(function(){$("#layer_price_3").css("bottom","auto").css("left","250px").show();});
	$(".table_compare tr.price td a.compare_price_3").mouseout(function(){$("#layer_price_3").hide();});
	$(".table_compare tr.price td a.compare_price_4").mouseover(function(){$("#layer_price_4").css("bottom","auto").css("left","250px").show();});
	$(".table_compare tr.price td a.compare_price_4").mouseout(function(){$("#layer_price_4").hide();});
	$(".content_area .thanks_request ul li .car_price a.help").mouseover(function(){$(".content_area .thanks_request ul li .layer_legal_wrap").css("bottom","auto").css("left","120px").show();});
	$(".content_area .thanks_request ul li .car_price a.help").mouseout(function(){$(".content_area .thanks_request ul li .layer_legal_wrap").hide();});
	$(".content_area .request_center .car_info .charge a.help").mouseover(function(){$(".content_area .request_center .car_info .charge .layer_legal_wrap").css("bottom","auto").css("left","130px").show();});
	$(".content_area .request_center .car_info .charge a.help").mouseout(function(){$(".content_area .request_center .car_info .charge .layer_legal_wrap").hide();});
});

$(document).ready(function(e) {
	var userAgent = navigator.userAgent;
	if(userAgent.indexOf('Mobile')>0||userAgent.indexOf('Android')>0) monileTopBtn();
	if($('#pip .pip iframe[src*="youtube"]').length>0 && userAgent.indexOf('MSIE')>0){
		$('#floating_cubemenu').append('<iframe frameborder="0" style="width:940px; height:95px; position:absolute; left:50%; top:0; margin-left:-470px; z-index:0;"></iframe>');
		$('#floating_cubemenu').find('.cubemenu,.submenu').css({'position':'relative','z-index':2});
	};
});
function monileTopBtn(){
    $('#floating_top').remove();
    if($('.pip').length>0 || $('.general').length>0){
        $('.pip').each(function(index, element) {
            $(this).append('<div class="mobile_topbtn"><a href="#wrap">Top</a></div>'); });
	  $('.general').each(function(index, element) {
            $(this).append('<div class="mobile_topbtn"><a href="#wrap">Top</a></div>'); });

    }else {
        $('.container').append('<div class="mobile_topbtn"><a href="#wrap">Top</a></div>');
		$("#test_drive").css("marginBottom","0");
		$(".cenceptCon").css("marginBottom","0");
		$(".cencept_content").css("paddingBottom","10px");
		$(".ir_content .contents").css("paddingBottom","0");
    }
    $('.mobile_topbtn').click(function(e) {
        setTimeout(scrollTo, 0, 0, 1); return false;
    });
}
/* resize event */
$(window).resize(function(e){
	$('#fb_like').css("left",($(window).width()-940)/2);
	if (isMobile==0) {fixedPosition();galleryPopup();}
	if($(".layer_experience_panorama .large .panorama img").is("img.panorama_large")) {
		var w=$(".layer_experience_panorama .large .panorama img.panorama_large").width();
		var h=$(".layer_experience_panorama .large .panorama img.panorama_large").height();
		$(".layer_experience_panorama .large .panorama").css("width",$(window).width()).css("height",parseInt($(window).width()*h/w));
		$(".layer_experience_panorama .large .panorama img.panorama_large").css("width",$(window).width()).css("height",parseInt($(window).width()*h/w));
		$(".pano_loading_percent").css("left",parseInt($(".layer_experience_panorama .large .panorama").width()/2-55) + 'px').css("top",parseInt($(".layer_experience_panorama .large .panorama").height()/2-50) + 'px');
		$(".pano_loading_start").css("left",parseInt($(".layer_experience_panorama .large .panorama").width()/2-55) + 'px').css("top",parseInt($(".layer_experience_panorama .large .panorama").height()/2-50) + 'px');
	}
	if (document.getElementById("floating_top")) {floating_top();}
    //if(navigator.userAgent.indexOf('Mobile')>0||navigator.userAgent.indexOf('Android')>0) mobileTopBtn();
});
/* scroll event */
$(window).scroll(function(e){
	fixedPosition();
	if($("#floating_top").is("div")) {
		if ($(window).scrollTop() > 410) {$("#floating_top").show();}
		else {$("#floating_top").hide();}
	}
});
/* ********** functions ********** */
function fn_print() {
	var objBrowse = window.navigator;
	if (objBrowse.appName == "Opera" || objBrowse.appName == "Netscape") {
		setTimeout('window.print()', 1000);
	} else {
		window.print();
	}
}
function floating_top() {
	var leftvalue = ($(window).width()-960)/2 + 960;
	$("#floating_top").css("left",leftvalue).hide();
}
function chkInput(obj) {
	var nowV = obj.val();
	if (obj.parent().parent().css("display") != "none") {
		if(!TrimString(nowV)) {
			obj.parent().parent().addClass("check");
			return 0;
		} else {
			obj.parent().parent().removeClass("check");
			return 1;
		}
	} else {
		return 1;
	}
}
function chkSelect(obj) {
	var nowV = obj.val();
	if(nowV == "") {
		obj.parent().parent().parent().addClass("check");
		return 0;
	} else {
		obj.parent().parent().parent().removeClass("check");
		return 1;
	}
}
function chkSelectThis(obj) {
	var nowV = obj.val();
	if(nowV == "") {
		obj.parent().addClass("check");
		return 0;
	} else {
		obj.parent().removeClass("check");
		return 1;
	}
}
function toggleSpecItem(va) {
	var cl = $(".contents_specification .spec_"+va+" .spec_table").css("height");
	if (cl==1 || cl=="1" || cl=="1px") {
		// open
		$(".contents_specification .spec_"+va+" .spec_table").css("height","auto");
		$(".contents_specification .spec_"+va+" .spec_"+va+"_title a").addClass("on");
	} else {
		// close
		$(".contents_specification .spec_"+va+" .spec_table").css("height","1px");
		$(".contents_specification .spec_"+va+" .spec_"+va+"_title a").removeClass("on");
	}
}
function cubeTalknTalkInit() {
	$(".cubebox .cubelist .talkntalk_list ul li .comment").each(function() {$(this).empty();});
	$(".cubebox .cubelist .talkntalk_list ul li .name").each(function() {$(this).empty();});
}
function cubeTalknTalk(num,socialType,profileImg,name,txt,txtLayer) {
    var escapeTxt = escape(txtLayer);
	$(".cubebox .cubelist .talkntalk_list ul li.comment"+num+" .name").append('<img src="/wcm/images/common/icon/icon_cube_talkntalk_'+socialType+'.png" alt="" /><img src="'+profileImg+'" alt="" class="profile" /> <span>'+name+'</span>');
	if(!txtLayer || txtLayer=="") {
		$(".cubebox .cubelist .talkntalk_list ul li.comment"+num+" .comment").txtloopit(txt);
	} else {
		$(".cubebox .cubelist .talkntalk_list ul li.comment"+num+" .comment").append("<a href=\"#\" onclick=\"displayTalknTalkMore('comment"+num+"','"+escapeTxt+"');\"></a>");
		$(".cubebox .cubelist .talkntalk_list ul li.comment"+num+" .comment a").txtloopit(txt);
	}
}
function displayTalknTalkMore(val, alltxt) {
    var unescapeTxt = unescape(alltxt);
	$(".layer_talkntalk_more").show();
	var author = $("."+val+" span.name").html();
	$(".layer_talkntalk_more .author").html(author);
	$(".layer_talkntalk_more .memo .scroll").html(unescapeTxt);
}
function cubeMostLikeCate(selectNum, profile1, profile2, profile3, name1, name2, name3) {
	$(".mostlike_best3").empty();
	$(".mostlike_best3").append("<ul></ul>");
	if (selectNum==1) {
		$(".mostlike_best3 ul").append('<li class="best1 on"><a href="#"><img src="'+profile1+'" alt="" /><strong>'+name1+'\'s</strong><br />Chosen</a></li>');
		$(".mostlike_best3 ul").append('<li class="best2"><a href="#"><img src="'+profile2+'" alt="" /><strong>'+name2+'\'s</strong><br />Chosen</a></li>');
		$(".mostlike_best3 ul").append('<li class="best3"><a href="#"><img src="'+profile3+'" alt="" /><strong>'+name3+'\'s</strong><br />Chosen</a></li>');
	} else if (selectNum==2) {
		$(".mostlike_best3 ul").append('<li class="best1"><a href="#"><img src="'+profile1+'" alt="" /><strong>'+name1+'\'s</strong><br />Chosen</a></li>');
		$(".mostlike_best3 ul").append('<li class="best2 on"><a href="#"><img src="'+profile2+'" alt="" /><strong>'+name2+'\'s</strong><br />Chosen</a></li>');
		$(".mostlike_best3 ul").append('<li class="best3"><a href="#"><img src="'+profile3+'" alt="" /><strong>'+name3+'\'s</strong><br />Chosen</a></li>');
	} else {
		$(".mostlike_best3 ul").append('<li class="best1 on"><a href="#"><img src="'+profile1+'" alt="" /><strong>'+name1+'\'s</strong><br />Chosen</a></li>');
		$(".mostlike_best3 ul").append('<li class="best2"><a href="#"><img src="'+profile2+'" alt="" /><strong>'+name2+'\'s</strong><br />Chosen</a></li>');
		$(".mostlike_best3 ul").append('<li class="best3"><a href="#"><img src="'+profile3+'" alt="" /><strong>'+name3+'\'s</strong><br />Chosen</a></li>');
	}
}
function cubeMostLike(carName,trim,exteriorColor,interiorColor,carImg,seemoreLink,carbuilderLink,likeCode,exteriorColorName,interiorColorName) {
	$(".mostlike_option .carname").empty();
	$(".mostlike_option .option").empty();
	$(".mostlike_option .car_image").empty();
	$(".mostlike_option .button").empty();
	$(".mostlike_option .like").empty();
	$(".mostlike_option .carname").append('<strong>'+carName+'</strong><br />'+trim);
	$(".mostlike_option .option").append('<span><img src="'+exteriorColor+'" alt="" width="28" height="28" /> <img src="/wcm/images/'+country+'/cube/mostlike_exteriorcolor.png" alt="Exterior Color" class="option_title" /><br>'+exteriorColorName+'</span> <span><img src="'+interiorColor+'" alt="" width="28" height="28" /> <img src="/wcm/images/'+country+'/cube/mostlike_interiorcovering.png" alt="Interior Color" class="option_title" /><br>'+interiorColorName+'</span>');
	$(".mostlike_option .car_image").append('<img src="'+carImg+'" alt="" /><br />');
	$(".mostlike_option .button").append('<a href="'+seemoreLink+'"><img src="/wcm/images/'+country+'/btn/btn_seedetail.gif" alt="See Detail" /></a>');
	$(".mostlike_option .button").append('<a href="'+carbuilderLink+'"><img src="/wcm/images/'+country+'/btn/btn_carbuilder.gif" alt="Build Your Own" /></a>');
	$(".mostlike_option .like").append(likeCode);
}
function cubeExperience(cate,panoramaImg,largeImg,isColor) {
	var orig_src = "";
	if (isColor=="color") orig_src = $(".experience_panoramabox img").attr("src");
	else orig_src = panoramaImg;
	$(".experience_category").empty();
	$(".experience_panoramabox").empty();
	$(".experience_large").empty();
	$(".experience_option").empty();
	var src_prefix = panoramaImg.substr(0, orig_src.lastIndexOf('_')+1);
	var src_sufix = panoramaImg.substr(orig_src.indexOf(src_number,0)+String(src_number).length);
	var src_number = parseInt(orig_src.substr(orig_src.lastIndexOf('_')+1));
	if (cate=="exterior") {
		$(".experience_category").append('<ul><li><a href="#" class="on">Exterior</a></li><li><a href="#">Interior</a></li></ul>');
		$(".experience_panoramabox.exterior").show();
		$(".experience_panoramabox.interior").hide();
		$(".experience_panoramabox.exterior").append('<img src="'+panoramaImg+'" class="panorama" width="640" height="289" alt="" /><br />');
		$(".exterior img.panorama").panorama({views_number: 36,views_columns: 36});
		$(".experience_large").append('<a href="#" onclick="showPanoramaLargeLayer(\''+largeImg+'\', \'exterior\');return false;"><img src="/wcm/images/common/btn/btn_large2.png" alt="+" /></a><br />');
		$(".experience_option").append("<ul></ul>");
		$(".cube_shadow_interior").hide();
	} else {
		$(".experience_category").append('<ul><li><a href="#">Exterior</a></li><li><a href="#" class="on">Interior</a></li></ul>');
		$(".experience_panoramabox.exterior").hide();
		$(".experience_panoramabox.interior").show();
		$(".experience_panoramabox.interior").append('<img src="'+panoramaImg+'" class="panorama" width="640" height="251" alt="" /><br />');
		$(".interior img.panorama").panorama();
		$(".experience_large").append('<a href="#" onclick="showPanoramaLargeLayer(\''+largeImg+'\', \'interior\');return false;"><img src="/wcm/images/common/btn/btn_large2.png" alt="+" /></a><br />');
		$(".experience_option").append("<ul></ul>");
		$(".cube_shadow_interior").show();
	}
}
function cubeExperienceColorList(num,onoff,colorImg) {
	if (onoff=="on") {
		$(".experience_option ul").append('<li class="color'+num+'"><a href="#"><img src="'+colorImg+'" alt="" /></a><br /><span><img src="/wcm/images/common/bg/cover_color.png" alt="" /></span></li>');
	} else {
		$(".experience_option ul").append('<li class="color'+num+'"><a href="#"><img src="'+colorImg+'" alt="" /></a></li>');
	}
}
function showPanoramaLargeLayer(imgurl,mode) {
	$(".layer_experience_panorama").empty();
	$(".layer_experience_panorama").append('<div class="layer_panorama_close"><a href="#"><img src="/wcm/images/common/btn/btn_layer_close.png" alt="close" /></a><br /></div>');
	$(".layer_experience_panorama .layer_panorama_close a").click(function(){fadeinout('.layer_experience_panorama','fadeout');return false;});
	if (mode=="exterior") {
		$(".layer_experience_panorama").append('<div class="normal"><div class="box"><img src="'+imgurl+'" width="1024" height="462" class="panorama_large" alt="" /></div></div>');
		if (document.getElementById("pip") || document.getElementById("main")) {
			$(".layer_experience_panorama").append('<div class="experience_category"><ul><li><a href="#" class="on">Exterior</a></li><li><a href="#">Interior</a></li></ul></div>');
		}
		$("img.panorama_large").panorama({views_number: 36,views_columns: 36});
	} else {
		$(".layer_experience_panorama").append('<div class="large"><img src="'+imgurl+'" width="1024" height="590" class="panorama_large" alt="" /></div>');
		$(".layer_experience_panorama").append('<div class="experience_category"><ul><li><a href="#">Exterior</a></li><li><a href="#" class="on">Interior</a></li></ul></div>');
		$("img.panorama_large").attr("width",$(window).width());
		$("img.panorama_large").attr("height",parseInt($(window).width()*590/1024));
		$("img.panorama_large").panorama();
	}
	if (country=="es") {
		$(".layer_experience_panorama").append('<div class="experience_desc"><span>Las ilustraciones de producto podr?a diferir de la actual oferta de producto en el mercado Espa?ol.</span></div>');
	} else {
		$(".layer_experience_panorama").append('<div class="experience_desc"><span>The image may differ from the actual product.</span></div>');
	}
	fadeinout('.layer_experience_panorama','fadein');
}
function cubeGalleryLayout(ob,cate) {
	var obj = ob;
	obj.empty();
	if (cate=="all") obj.append('<div class="gallery_category"><ul><li class="on"><a href="#">All</a></li><li><a href="#">Exterior</a></li><li><a href="#">Interior</a></li><li><a href="#">Movies</a></li></ul></div>');
	else if (cate=="exterior") obj.append('<div class="gallery_category"><ul><li><a href="#">All</a></li><li><a href="#" class="on">Exterior</a></li><li><a href="#">Interior</a></li><li><a href="#">Movies</a></li></ul></div>');
	else if (cate=="interior") obj.append('<div class="gallery_category"><ul><li><a href="#">All</a></li><li><a href="#">Exterior</a></li><li><a href="#" class="on">Interior</a></li><li><a href="#">Movies</a></li></ul></div>');
	else obj.append('<div class="gallery_category"><ul><li><a href="#">All</a></li><li><a href="#">Exterior</a></li><li><a href="#">Interior</a></li><li><a href="#" class="on">Movies</a></li></ul></div>');
	obj.append('<ul class="gallerylist"></ul>');
	obj.append('<div class="cube_shadow"><div><img src="/wcm/images/common/bg/bg_cube_shadow.png" alt="" /></div></div>');
}
function cubeGalleryList(cate,listImg,largeImg,titletxt,titleimg,description,mode,download,twitter,facebook,stumbleupon,like) {
	$(".gallerylist").append('<li><a href="#" class="'+cate+'" onclick="showGalleryLargeLayer(\''+largeImg+'\',\''+titletxt+'\',\''+titleimg+'\',\''+description+'\',\''+mode+'\',\''+download+'\',\''+twitter+'\',\''+facebook+'\',\''+stumbleupon+'\',\''+like+'\', \'\');return false;"><img src="'+listImg+'" alt="" /></a></li>');
}
function cubeGalleryPaging(current,all) {
	if (current==1) $(".gallerylist").append('<li class="paging"><strong>'+current+'</strong> of '+all+'</a><a href="#" class="next">next</a></li>');
	else if(current==all) $(".gallerylist").append('<li class="paging"><a href="#" class="prev">previous</a><strong>'+current+'</strong> of '+all+'</a></li>');
	else $(".gallerylist").append('<li class="paging"><a href="#" class="prev">previous</a><strong>'+current+'</strong> of '+all+'</a><a href="#" class="next">next</a></li>');
}
function showGalleryLargeLayer(code,carname,titleimg,description,isImg,download,twitter,facebook,stumbleupon,like,isMain) {
	if (navigator.userAgent.match(/MSIE 8.0/i)){$(".layer_gallery .large_movie iframe").attr("src","about:blank");}
	$(".layer_gallery").empty();
	$(".layer_gallery").append('<div class="layer_gallery_close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close" /></a><br /></div>');
	$(".layer_gallery .layer_gallery_close a").click(function() {if (navigator.userAgent.match(/MSIE 8.0/i)){$(".layer_gallery .large_movie iframe").attr("src","about:blank");};galleryPopup();$(".layer_gallery").empty();$(".layer_gallery").hide(); $('.container,.footer').show(); $('body').removeAttr('showGallery'); $('#layer_gallery').removeAttr('style'); return false;});//0710
	$(".layer_gallery").append('<div class="layer_gallery_title"><img src="'+titleimg+'" alt="'+carname+'" /> '+description+'</div>');
	if (isImg=="image") {
		$(".layer_gallery").addClass("layer_gallery_image");
		$(".layer_gallery").append('<div class="large"><img src="'+code+'" class="img" alt="" /><br /></div>');
		if (isMobile==0) {
			$(".layer_gallery").append('<div class="layer_gallery_control"><ul><li class="zoomin"><a href="#"><img src="/media/img/btn_zoomin.png" alt="Zoom In" /></a></li><li class="zoomout" style="display:none;"><a href="#"><img src="/media/img/btn_zoomout.png" alt="Zoom Out" /></a></li></ul></div>');
			$(".layer_gallery").append('<div class="minimap"><div class="in"><img src="'+code+'" class="small" /><br /><div class="move"><img src="/wcm/images/common/bg/blank.gif" alt="" /></div></div></div>');
			$(".layer_gallery_control .zoomin a").click(function() {galleryZoomIn();return false;});
			$(".layer_gallery_control .zoomout a").click(function() {galleryZoomOut();return false;});
			$(".layer_gallery .minimap .in .move").draggable({containment:".layer_gallery .minimap .in", cursor:"move",
				start:function(event) {},
				stop:function(event) {
					// image size - 1920*1152 // 108 * 64 // 2560 * 1536
					var x = parseInt(parseInt($(this).css("left"))*2560/108) * -1;
					var y = parseInt(parseInt($(this).css("top"))*1536/64) * -1 + parseInt($(window).scrollTop());
					$(".layer_gallery .large").css("left",x).css("top",y);
				}
			});
		}
	} else { // movie
		$(".layer_gallery").removeClass("layer_gallery_image");
		if (code.indexOf("www.youtube.com") != -1) {
			if(country=="ww" || country=="gt") {
				if(navigator.userAgent.toLowerCase().indexOf("msie 7") != -1 || navigator.userAgent.toLowerCase().indexOf("msie 6") != -1) {
					$(".layer_gallery").append('<div class="large_movie"><iframe width="613" height="460" src="/wcm/images/common/upgrade_ie.html" frameborder="0" allowfullscreen></iframe></div>');
				} else {
					$(".layer_gallery").append('<div class="large_movie"><iframe width="613" height="460" src="'+code+'" frameborder="0" allowfullscreen></iframe></div>');
				}
			} else {
				$(".layer_gallery").append('<div class="large_movie"><iframe width="613" height="460" src="'+code+'" frameborder="0" allowfullscreen></iframe></div>');
			}
		} else {
			VideoJS.setupAllWhenReady();
			var tmp_code = '<div class="large_movie">';
			tmp_code=tmp_code+'	<div class="video-js-box">';
			tmp_code=tmp_code+'		<video id="example_video_1" class="video-js" width="640" height="460" controls="controls" preload="auto" poster="'+code+'.jpg">';
			tmp_code=tmp_code+'			<source src="'+code+'.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />';
			tmp_code=tmp_code+'			<source src="'+code+'.webm" type=\'video/webm; codecs="vp8, vorbis"\' />';
			tmp_code=tmp_code+'			<source src="'+code+'.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />';
			tmp_code=tmp_code+'			<object id="flash_fallback_1" class="vjs-flash-fallback" width="613" height="460" type="application/x-shockwave-flash" data="/wcm/flash/mp4Player.swf">';
			tmp_code=tmp_code+'				<param name="movie" value="/wcm/flash/mp4Player.swf" />';
			tmp_code=tmp_code+'				<param name="autostart" value="false" />';
			tmp_code=tmp_code+'				<param name="allowfullscreen" value="true" />';
			tmp_code=tmp_code+'				<param name="allowScriptAccess" value="always" />';
			tmp_code=tmp_code+'				<param name="wmode" value="opaque" />';
			tmp_code=tmp_code+'				<param name="flashvars" value="mp4_path='+code+'.mp4&default_volume=0.5&play_delay=0&on_loadbar=1&poster='+code+'.jpg" />';
			tmp_code=tmp_code+'				<img src="'+code+'.jpg" width="613" height="460" alt="Poster Image" title="" />';
			tmp_code=tmp_code+'			</object>';
			tmp_code=tmp_code+'		</video>';
			tmp_code=tmp_code+'		<p class="vjs-no-video"><img src="'+code+'.jpg" width="613" height="460" alt="Poster Image" title="" /></p>';
			tmp_code=tmp_code+'	</div>';
			tmp_code=tmp_code+'</div>';
			$(".layer_gallery").append(tmp_code);
		}
	}
	if (isMain!="main") {
		$(".layer_gallery").append('<div class="layer_gallery_left"><a href="#"><img src="/media/img/btn_layer_left.png" alt="previous" /></a><br /></div>');
		$(".layer_gallery").append('<div class="layer_gallery_right"><a href="#"><img src="/media/img/btn_layer_right.png" alt="next" /></a><br /></div>');
	}
	var tmp_strumbleCode = "";
	if (isImg=="image") {
		tmp_strumbleCode = "";
	}else {
		tmp_strumbleCode = '<a href="'+stumbleupon+'"><img src="/wcm/images/common/icon/icon_su_black.gif" alt="" /></a>';
	}
	var tmp_txt = '<div class="layer_gallery_links">';
	if (facebook!="notuse") tmp_txt = tmp_txt + '<iframe src="http://www.facebook.com/plugins/like.php?href='+like+'&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px;" allowTransparency="true"></iframe> ';
	tmp_txt = tmp_txt + '<span><img src="/wcm/images/'+country+'/cube/txt_download.png" alt="" /></span> <a href="'+download+'"><img src="/wcm/images/common/btn/btn_cube_gallery_download.png" alt="" /></a> ';
	if (facebook!="notuse" || twitter!="notuse" || stumbleupon!="notuse") tmp_txt = tmp_txt + '<span><img src="/wcm/images/'+country+'/cube/txt_share.png" alt="" /></span> ';
	if (facebook!="notuse") tmp_txt = tmp_txt + '<a href="'+facebook+'"><img src="/wcm/images/common/btn/btn_cube_gallery_facebook.png" alt="" /></a>';
	if (twitter!="notuse") tmp_txt = tmp_txt + '<a href="'+twitter+'"><img src="/wcm/images/common/btn/btn_cube_gallery_twitter.png" alt="" /></a> ';
	if (stumbleupon!="notuse") tmp_txt = tmp_txt + tmp_strumbleCode;
	tmp_txt = tmp_txt + '</div>';
	$(".layer_gallery").append(tmp_txt);
	galleryPopup();
	fadeinout('.layer_gallery','fadein');
}
function fadeinout(selector, op) {//0710
	if (op=="fadein") {$(selector).fadeIn();}else{$(selector).fadeOut();}
	var h=$(document).height();
	if($('body').attr('showGallery') == 'view'){
		$(selector).css("height",'100%');
	}else{
		$(selector).css("height",h);
	}
}
function galleryOver() {
	$(".gallerylist img.cover").remove();
	$(".gallerylist li a").each(function() {
		var classname = $(this).attr("class");
		var appendobj="";
		if (classname=="exterior") {
			$(this).append('<img src="/wcm/images/'+country+'/cube/gallery_item_cover_exterior.png" class="cover" alt="" />');
		} else if (classname=="interior") {
			$(this).append('<img src="/wcm/images/'+country+'/cube/gallery_item_cover_interior.png" class="cover" alt="" />');
		} else if (classname=="movie") {
			$(this).append('<img src="/wcm/images/'+country+'/cube/gallery_item_cover_movie2.png" class="cover" alt="" />');
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
function galleryZoomIn() { // image size - 1920*1152 // 108 * 64 //  2560 * 1536
	var w=parseInt($(".layer_gallery .large img.img").css("width"));
	var h=parseInt($(".layer_gallery .large img.img").css("height"));
	$(".layer_gallery .large img.img").css("left",0);
	$(".layer_gallery .large img.img").animate({"width":2560},{duration:900,easing:"motion"});
	$(".layer_gallery_control .zoomin").hide();
	$(".layer_gallery_control .zoomout").show();
	$(".layer_gallery .minimap").show();
	var all_w = $(window).width();
	var all_h = $(window).height();
	var img_w = 2560; // 1920
	var img_h = 1536; // 1152
	var ratio_w = parseInt((all_w/img_w)*100) * 108 / 100;
	var ratio_h = parseInt((all_h/img_h)*100) * 64 / 100;
	$(".layer_gallery .minimap .in .move").css("width",ratio_w).css("height",ratio_h).css("left",0).css("top",0);
	return false;
}
function galleryZoomOut() { // image size - 1920*1152 // 108 * 64
	var w=parseInt($(".layer_gallery .large img.img").css("width"));
	var h=parseInt($(".layer_gallery .large img.img").css("height"));
	$(".layer_gallery .large img.img").css("left",0);
	if ($(window).width()<960) {
		$(".layer_gallery .large img.img").animate({"width":960},{duration:900,easing:"motion"});
	} else {
		$(".layer_gallery .large img.img").animate({"width":$(window).width()},{duration:900,easing:"motion"});
	}
	$(".layer_gallery .large").css("left",0).css("top",parseInt($(window).scrollTop()));
	$(".layer_gallery .minimap .in .move").css("left",0).css("top",0);
	$(".layer_gallery_control .zoomin").show();
	$(".layer_gallery_control .zoomout").hide();
	$(".layer_gallery .minimap").hide();
	return false;
}
function fixedPosition() {
	var w = parseInt(($(window).width()-960)/2);
	if (w<0) w=0;
	$(".wrap").css("width",$(window).width()).css("overflow","hidden");
	$(".objects_box").css("width",$("window").width()).css("overflow","hidden");
	if (w<=100) {
		$(".prevbtn").css("left",10);
		$(".nextbtn").css("right",10);
	} else if (w>=480) { // over 1920
		$(".prevbtn").css("left",375);
		$(".nextbtn").css("right",375);
	} else {
		$(".prevbtn").css("left",w-100);
		$(".nextbtn").css("right",w-100);
	}
}
/*
$.fn.autoSlide = function(op) {
	var settings = {duration: 300,direction: "horizontal",minimumDrag: 20, easing: "motion" ,beforeStart: function(){},afterStart: function(){},beforeStop: function(){},afterStop: function(){}};
	var isCube=0;
	if (op=="cube") {isCube=1;}
	return this.each(function() {
		var originalList = $(this);
		var pages = originalList.children();
		if(isCube==1) pages = originalList.children().children();
		var width = originalList.width();
		var height = originalList.height();

		var containerCss = {position: "relative", overflow: "hidden", width: width, height: height};
		var listCss = {position: "relative", padding: "0", margin: "0", listStyle: "none", width: pages.length * width};
		var listItemCss = {width: width, height: height};
		var container = $("<div>").attr("class",originalList.attr("class")).css(containerCss);
		var list;
		if(isCube==1) $("div.cubelist").css(containerCss);
		if(isCube==0) list = $("<div class='items'>").css(listCss);
		else list = $("div.items", originalList).css(listCss);

		var currentPage = 1, start, stop;
		if (settings.direction.toLowerCase() === "horizontal") {
			list.css({float: "left"});
			if(isCube==0) {
				$.each(pages, function(i) {
					var li = $("<div>").attr("class", "item")
						.html($(this).html());
					list.append(li);
				});
			}
			list.draggable({
				axis: "x",
				start: function(event) {
					settings.beforeStart.apply(list, arguments);
					var data = event.originalEvent.touches ? event.originalEvent.touches[0] : event;
					start = {coords: [ data.pageX, data.pageY ]};
					settings.afterStart.apply(list, arguments);
				},
				stop: function(event) {
					settings.beforeStop.apply(list, arguments);
					var data = event.originalEvent.touches ? event.originalEvent.touches[0] : event;
					stop = {coords: [ data.pageX, data.pageY ]};

					if (op=="cube") {
						var h=0,v=0,hs=0,vs=0;
						h = start.coords[0] - stop.coords[0];
						if (h<0) hs=h*-1;
						else hs=h;
						v = start.coords[1] - stop.coords[1];
						if (v<0) vs=v*-1;
						else vs=v;
						if (hs>vs) {
							if (hs > 50 || hs < -50) {
								function moveLeft() {
									if (currentPage === pages.length || dragDelta() < settings.minimumDrag) {list.animate({ left: "+=" + dragDelta()}, settings.duration, settings.easing);return;}
									var new_width = -1 * width * currentPage;
									list.animate({ left: new_width}, settings.duration, settings.easing);
									currentPage++;
								}
								function moveRight() {
									if (currentPage === 1 || dragDelta() < settings.minimumDrag) {list.animate({ left: "-=" + dragDelta()}, settings.duration, settings.easing);return;}
									var new_width = -1 * width * (currentPage - 1);
									list.animate({ left: -1 * width * (currentPage - 2)}, settings.duration, settings.easing);
									currentPage--;
								}
								function dragDelta() {return Math.abs(start.coords[0] - stop.coords[0]);}
								function adjustment() {return width - dragDelta();}
								start.coords[0] > stop.coords[0] ? moveLeft() : moveRight();
								settings.afterStop.apply(list, arguments);
								if (currentPage > pages.length) currentPage=pages.length;
								view_cube(currentPage,originalList);
							} else {
								//$(".cubebox .cubelist .ui-draggable").css('left',-960*(currentPage-1));
								$(".cubebox .cubelist .ui-draggable").animate({
									left: (-960*(currentPage-1)) + "px"
								},900,'motion');
							}
						} else {
						}
					} else {
						function moveLeft() {
							if (currentPage === pages.length || dragDelta() < settings.minimumDrag) {list.animate({ left: "+=" + dragDelta()}, settings.duration, settings.easing);return;}
							var new_width = -1 * width * currentPage;
							list.animate({ left: new_width}, settings.duration, settings.easing);
							currentPage++;
						}
						function moveRight() {
							if (currentPage === 1 || dragDelta() < settings.minimumDrag) {list.animate({ left: "-=" + dragDelta()}, settings.duration, settings.easing);return;}
							var new_width = -1 * width * (currentPage - 1);
							list.animate({ left: -1 * width * (currentPage - 2)}, settings.duration, settings.easing);
							currentPage--;
						}
						start.coords[0] > stop.coords[0] ? moveLeft() : moveRight();
						function dragDelta() {return Math.abs(start.coords[0] - stop.coords[0]);}
						function adjustment() {return width - dragDelta();}
						settings.afterStop.apply(list, arguments);
						if (currentPage > pages.length) currentPage=pages.length;
						view_cube(currentPage,originalList);
					}
				}
			});
		}
		if(isCube==0) {
			container.append(list);
			originalList.replaceWith(container);
		}
		$(window).load(function(e){
			// scrollAnimation();
			if (isCube==1) {
				if (!firstCube) firstCube = 1;
				view_cube(firstCube, originalList);
			} else {
				view_cube(1, originalList);
			}
		});
		if (isCube==1) {
			$(".carlist ul li.on a").click(function() {
				view_cube(1, originalList);return false;
			});
		}
		function view_cube(num,obj) {
			if (isCube==1) {
				cubeMotionJS(num);
			}
			if (num>0 && num <= pages.length) {
				$(".items", "."+obj.attr("class")).animate({left:-1* width * (num-1) + "px"},900, 'motion',function() {
					change_button(num,obj);
				});
			}
			if (num==0 || currentPage==0) {
				$(".items", "."+obj.attr("class")).animate({left:0},900,'motion',function() {
					change_button(1,obj);
				});
			}
		}
		function change_button(num,obj) {
			if (num>0 && num<=pages.length) {
				currentPage=num;
				if (isCube==1) {
					// change cubemenu's style
					for (var i=0; i<=$(".floating_cubemenu .cubemenu ul.cubeitem li a").length; i++) {
						if (i==num-2) {
							$(".floating_cubemenu .cubemenu ul.cubeitem li a").eq(i).addClass("on");
						} else {
							$(".floating_cubemenu .cubemenu ul.cubeitem li a").eq(i).removeClass("on");
						}
					}
					// change left & right button
					if (num==1) {
						$("div.prevbtn a img").attr("src","/worldwide/images/common/bg/blank.gif");
					} else {
						if(pip_car_name == "GrandSantaFe") $("div.prevbtn a img").attr("src","/worldwide/images/common/btn/btn_cube_left_white.png");
						else $("div.prevbtn a img").attr("src","/worldwide/images/common/btn/btn_cube_left.png");
					}
					if (num==pages.length) {
						$("div.nextbtn a img").attr("src","/worldwide/images/common/bg/blank.gif");
					} else {
						if(pip_car_name == "GrandSantaFe") $("div.nextbtn a img").attr("src","/worldwide/images/common/btn/btn_cube_right_white.png");
						else $("div.nextbtn a img").attr("src","/worldwide/images/common/btn/btn_cube_right.png");
					}
					// cube motion
					cubeStart(num);
				}
				//if (isCube==0) {
					var tmpTxt = "";
					pages.each(function(i) {
						var now=i-1+2;
						var isDark = 0;
						if ($('body').eq(0).attr('class').indexOf('dark') != -1){
							isDark = 1;
						}
						if (currentPage==now) {
							if (isCube==1) {
								if (isDark == 1){
									tmpTxt = tmpTxt + '<a href="#"><img src="/wcm/images/common/bg/bg_pagingtouch_off.png" alt="'+now+'" /></a>';
								} else {
									tmpTxt = tmpTxt + '<a href="#"><img src="/wcm/images/common/bg/bg_pagingtouch_on2.png" alt="'+now+'" /></a>';
								}

							} else {
								tmpTxt = tmpTxt + '<a href="#"><img src="/wcm/images/common/bg/bg_pagingtouch_on.png" alt="'+now+'" /></a>';
							}
						} else {
							if (isDark == 1){
								tmpTxt = tmpTxt + '<a href="#"><img src="/wcm/images/common/bg/bg_pagingtouch_on2.png" alt="'+now+'" /></a>';
							} else {
								tmpTxt = tmpTxt + '<a href="#"><img src="/wcm/images/common/bg/bg_pagingtouch_off.png" alt="'+now+'" /></a>';
							}
						}
					});

					tmpTxt = tmpTxt + '<br />';
					$("."+op).replaceWith('<div class="'+op+'">'+tmpTxt+'</div>');
					$("."+op).css("width",pages.length*26);
					if (isCube==0) {
						$("."+op).css("margin","0 auto");
					} else {
						$("."+op).css("paddingLeft",parseInt((960-pages.length*26)/2));
					}
					if (op=="paging_touch") {
						if (num==1) {
							$(".mainbanner a.prev").replaceWith('<span class="prev">prev</span>');
						} else {
							$(".mainbanner a.prev").replaceWith('<a class="prev" href="#">prev</a>');
							$(".mainbanner span.prev").replaceWith('<a class="prev" href="#">prev</a>');
							$(".mainbanner a.prev").bind("click",function(e) {
								view_cube(currentPage-1,originalList);return false;
							});
						}
						if (num==pages.length) {
							$(".mainbanner a.next").replaceWith('<span class="next">next</span>');
						} else {
							$(".mainbanner a.next").replaceWith('<a class="next" href="#">next</a>');
							$(".mainbanner span.next").replaceWith('<a class="next" href="#">next</a>');
							$(".mainbanner a.next").bind("click",function(e) {
								view_cube(currentPage-1+2,originalList);return false;
							});
						}
					}
					$("a", "."+op).click(function() {
						view_cube($("img", this).attr("alt"),originalList);
						// tagging
						if (isCube==1) {
							var tagging_length = cubeList.length;
							for(var i=1;i<=tagging_length;i++) {
								if($("img", this).attr("alt") == i) {
									//cubeList = ["home","gallery", "experience", "mostlike", "talkntalk"];
									if(cubeList[i-1] == "home") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Main_KV_dot','Click']);
									else if(cubeList[i-1] == "gallery") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Main_Gallery_dot','Click']);
									else if(cubeList[i-1] == "experience") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Main_Experience_dot','Click']);
									else if(cubeList[i-1] == "mostlike") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Main_Mostlike_dot','Click']);
									else if(cubeList[i-1] == "talkntalk") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Main_Talkntalk_dot','Click']);
								}
							}
						}
						return false;
					});
				//}
			}
		}
		function LeftBtn() {var nowcube = currentPage;if (!nowcube) nowcube=1;view_cube(nowcube-1,  originalList);return false;}
		function RightBtn() {var nowcube = currentPage;if (!nowcube) nowcube=1;view_cube(nowcube-1+2,  originalList);return false;}
		if (isCube==1) {
			$(".cubebox .prevbtn a").click(function() {
				LeftBtn();
				// tagging
				var tagging_length = cubeList.length;
				for(var i=1;i<=tagging_length;i++) {
					if(currentPage == i) {
						if(cubeList[i-1] == "gallery") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Experience_Left','Click']);
						else if(cubeList[i-1] == "experience") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Gallery_Left','Click']);
						else if(cubeList[i-1] == "mostlike") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Mostlike_Left','Click']);
						else if(cubeList[i-1] == "talkntalk") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Talkntalk_Left','Click']);
					}
				}
				return false;
			});
			$(".cubebox .nextbtn a").click(function() {
				RightBtn();
				// tagging
				var tagging_length = cubeList.length;
				for(var i=1;i<=tagging_length;i++) {
					if(currentPage == i) {
						if(cubeList[i-1] == "home") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Main_Right','Click']);
						else if(cubeList[i-1] == "gallery") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Experience_Right','Click']);
						else if(cubeList[i-1] == "experience") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Gallery_Right','Click']);
						else if(cubeList[i-1] == "mostlike") _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_Mostlike_Right','Click']);
					}
				}
				return false;
			});
			$(".floating_cubemenu .cubemenu ul.cubeitem li a").click(function(e) {
				var num = $("span", $(this)).html();
				num=num-1+1;
				$(".cubelist .items").animate({
					left:"-960" * num - "-960" + "px"
				},900,'motion');
				//change_button(num);
				view_cube(num, originalList);
				$(".floating_cubemenu .cubemenu .information").removeClass("on");
				initSubmenuHighlight();
			});
			$(".floating_cubemenu .cubemenu .information .home a").click(function() {
				view_cube(1,originalList);
				$(".floating_cubemenu .cubemenu .information").addClass("on");
				initSubmenuHighlight();
			});

			// 2013.04.04 thej phoebe modify (if gt then 3 --> 2)
			if(country=="gt") $(".cubebox .cubelist .item .info .vr360").click(function() {view_cube(2,originalList);return false;});
			else $(".cubebox .cubelist .item .info .vr360").click(function() {view_cube(3,originalList);return false;});
		}
	});
};
*/
$.fn.panorama = function(options) {
	this.each(function(){
		var settings = {views_number: 120,views_columns: 20};
		var pano_element = this;
		var orig_src = $(this).attr("src");
		var loaded = 0;
		var pano_mouse_position_x;
		var pano_mouse_position_y;
		var pano_mouse_delta_x = 0;
		var pano_mouse_delta_y = 0;
		var pano_mouse_down = false;
		var pano_current_number;
		var pano_timer;
		var pano_loading_stop = false;
		var pano_width = parseInt($(pano_element).attr("width"));
		pano_mouse_position_x = parseInt(pano_width/2);
		var pano_height = parseInt($(pano_element).attr("height"));
		pano_mouse_position_y = parseInt(pano_height/2);
		$(pano_element).css("margin", "0 0 0 0").css("padding", "0 0 0 0").wrap('<div class="panorama" style="position: relative; margin: 0; padding: 0; height: '+pano_height+'px; width: '+pano_width+'px; overflow: hidden;"></div>');
		if(options) $.extend(settings, options);
		$(pano_element).after('<a class="pano_loading_stop" href="#" style="display: none; color: white; position: absolute; top: 5px; right: 5px; text-decoration: none;">[stop]</a>');
		if (settings.views_columns==settings.views_number) { // exterior
			$(pano_element).after('<p class="pano_loading_percent" style="position: absolute; display: none; top: '+parseInt(pano_height/2-45)+'px; left: '+parseInt(pano_width/2-45)+'px; text-align: center; width:90px; height:90px;"><img src="/wcm/images/'+country+'/loading.gif" alt="loading" /><span style="position:relative;height:18px;display:block;width:80px;margin:-29px auto 0 auto;font-size:12px;color:#333;background:url(/wcm/images/common/bg/bg_loading_txt.gif) repeat-x 0 0 #f0efed;">0 %</span></p>');
		} else { // interior
			$(pano_element).after('<p class="pano_loading_percent" style="position: absolute; display: none; top: '+parseInt(pano_height/2-45)+'px; left: '+parseInt(pano_width/2-45)+'px; text-align: center; width:90px; height:90px;"><img src="/wcm/images/'+country+'/loading.gif" alt="loading" /><span style="position:relative;height:18px;display:block;width:80px;margin:-29px auto 0 auto;font-size:12px;color:#333;background:url(/wcm/images/common/bg/bg_loading_txt.gif) repeat-x 0 0 #f0efed;">0 %</span></p>');
		}
		var src_prefix = orig_src.substr(0, orig_src.lastIndexOf('_')+1);
		var src_number = parseInt(orig_src.substr(orig_src.lastIndexOf('_')+1));
		pano_current_number = src_number;
		//var src_sufix = orig_src.substr(orig_src.indexOf(src_number,0)+String(src_number).length);
		var array_data = orig_src.split(".");
		var src_sufix = "."+array_data[array_data.length-1];
		if (settings.views_columns==settings.views_number) { // exterior
			$(pano_element).after('<p class="pano_loading_start" style="position: absolute; top: '+parseInt(pano_height/2-45)+'px; left: '+parseInt(pano_width/2-45)+'px;text-align: center; width:90px; height:90px;"><a href="#"><img src="/wcm/images/'+country+'/btn/btn_start.png" alt="Start" /></a></p>');
		} else { // interior
			$(pano_element).after('<p class="pano_loading_start" style="position: absolute; top: '+parseInt(pano_height/2-45)+'px; left: '+parseInt(pano_width/2-45)+'px;text-align: center; width:90px; height:90px;"><a href="#"><img src="/wcm/images/'+country+'/btn/btn_start2.png" alt="Start" /></a></p>');
		}
		$(pano_element).after('<div class="pano_loading_masque" style="position: absolute; top: 0; left: 0; width: '+pano_width+'px; height: '+pano_height+'px; opacity: .5; filter:alpha(opacity=50);"></div>');
		$(pano_element).parent().find(".pano_loading_stop").bind('click', function(){
			pano_loading_stop = true;
			return false;
		});
		$(pano_element).parent().find(".pano_loading_start a").bind('click', function(){
			$(pano_element).parent().css("cursor", "wait");
			$(pano_element).parent().find(".pano_loading_start").hide();
			$(pano_element).parent().find(".pano_loading_percent").show();
			$(pano_element).parent().find(".pano_loading_animation").show();
			$(pano_element).parent().find(".pano_vues").remove();
			pano_timer = setTimeout(function(){
				clearTimeout(pano_timer);
				for (var i=0; i<settings.views_number; i++) {
					if (i!=src_number){
						$(pano_element).after('<img class="pano_vues vue'+i+'" src="'+src_prefix+i+src_sufix+'" style="visibility: hidden;" />');
						$(pano_element).parent().find("img.vue"+i).bind('load', function(){
							//if ($(pano_element).parent().find(".pano_loading_stop").css("display")=="none") $(pano_element).parent().find(".pano_loading_stop").show();
							loaded++;
							if (pano_loading_stop) {
								pano_loading_stop=false;
								//$(pano_element).parent().find(".pano_loading_stop").hide();
								$(pano_element).parent().css("cursor", "default");
								$(pano_element).parent().find(".pano_loading_percent").hide();
								$(pano_element).parent().find(".pano_loading_start").show();
								$(pano_element).parent().find(".pano_loading_percent span").html('loading');
								pano_timer = setTimeout(function(){
									 clearTimeout(pano_timer); window.stop();
								});

							}
							//if (loaded >= (settings.views_number-1)) {
							if (parseInt((loaded/settings.views_number)*100) > 90) {
								$(pano_element).parent().css("cursor", "pointer");
								//$(pano_element).parent().find(".pano_loading_stop").hide();
								$(pano_element).parent().find(".pano_loading_percent").hide();
								$(pano_element).parent().find(".pano_loading_animation").hide();
								$(pano_element).parent().find(".pano_loading_masque").hide();
								$(pano_element).bind('mousedown', function(e){
									pano_mouse_down = true;
									pano_mouse_position_x = e.clientX;
									pano_mouse_position_y = e.clientY;
									$(pano_element).parent().css("cursor", "move");
									return false;
								});
								$(pano_element).bind('mouseup', function(){
									pano_mouse_down = false;
									$("div.panorama").css("cursor", "pointer");
									return false;
								});
								$(pano_element).bind('mousemove', function(e){
										if (pano_mouse_down) {
										pano_mouse_delta_x = parseInt((pano_mouse_position_x - e.clientX)/20);
										pano_mouse_delta_y = parseInt((pano_mouse_position_y - e.clientY)/20);
										if (pano_mouse_delta_x!=0||pano_mouse_delta_y!=0) {
											var pageCoords = "( " + e.pageX + ", " + e.pageY + " )";
												var clientCoords = "( " + e.clientX + ", " + e.clientY + " )";
											if (settings.views_columns==settings.views_number) { // exterior
												pano_current_number=pano_current_number - pano_mouse_delta_x - settings.views_columns*pano_mouse_delta_y;
											} else { // interior
												pano_current_number=pano_current_number + pano_mouse_delta_x + settings.views_columns*pano_mouse_delta_y;
											}
											if (pano_current_number<0) pano_current_number = settings.views_columns-1;
											if (pano_current_number>(settings.views_number-1)) pano_current_number = settings.views_number-settings.views_columns;
											$(pano_element).attr('src', src_prefix+pano_current_number+src_sufix);
											pano_mouse_position_x= e.clientX;
											pano_mouse_position_y= e.clientY;
										}
									}
									return false;
								});
							}
							else {
								$(pano_element).parent().find(".pano_loading_percent span").html(parseInt((loaded/settings.views_number)*100) + " %");
							}
						});
					}
				}
			}, 500);

			// taging
			if(settings.views_number == 120) _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_360experience_Interior_Start', 'Click']);
			else _gaq.push(['_trackEvent', 'PIP_Socialcube_'+pip_car_name+'_360experience_Exterior_Start', 'Click']);

			return false;
		});
	});
};
$.fn.txtloopit = function(op) {
	this.each(function(){
		//var my_chars=["h", "y", "u", "n", "d", "a", "i","e", "w","t","h", "k","g","p", "o","s","b","l"];
		var my_chars=[" "," "];
		var my_array=[];
		var my_position=0;
		var temp_str=""
		var end_str="";
		var charNumber=0;
		var p;
		var t;
		if (op) {loopit($(this),op);}
		function loopit(thediv, my_str) {
			var my_array = my_str.split("");
			if(my_position < my_array.length+1){
				for (var i = 0; i<(my_array.length - end_str.length); i++) {
					charNumber = Math.floor(Math.random()*my_chars.length);
					temp_str += my_chars[charNumber];
				}
				thediv.empty();
				thediv.append(end_str+temp_str);
				temp_str = "";
				end_str += my_array[my_position];
				my_position++;
				p=setTimeout(function(){loopit(thediv,my_str)}, 20);
			}else{
				my_position = 0;
				temp_str = "";
				end_str = "";
				clearTimeout(p);
			}
			thediv.css("visibility","visible");
		}
	});
};
function showTranslucency() { // show translucency layer
	var obj = document.getElementById("translucency");
	setOpacity(obj, 50);
	obj.style.display="block";
	var h=$(document).height() + 30;
	$("#translucency").css("height",h);
}
function hideTranslucency() { // hide translucency layer
	var obj = document.getElementById("translucency");
	obj.style.display="none";
}
function setOpacity(id, op) { // set opacity
	var obj = id.style;
	obj.opacity = (op/100);
	obj.filter = "alpha(opacity="+op+")";
	obj.MozOpacity=(op/100);
	obj.KhtmlOpacity=(op/100);
}
/** ajax error handling script **/
$().ready(function(){
	$.ajaxSetup({
		error:function(x,e){
			if(x.status==500){
				fn_openAjaxErrorPopup(e);
			}
		}
	});
});
function fn_openAjaxErrorPopup(err){
	if ($("#error_popup").html() == null){
		$("#wrap").append("<div id='error_popup' class='pop_error'></div>");
	}
	$.ajax({
		url : "/wcm/common/error/systemErrorPopup.do",
		success : function(htmDoc){
			$("#error_popup").html("");
			$("#error_popup").html(htmDoc);
		},
		error : function(err){ //alert("Please try again.");
								}
	});
}
$(function(){
	if (!document.getElementById("search_select") && !document.getElementById("select_trim")) return false;
	$('.find_accessories .search').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.usedcar_top').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.inquiry_table .select_title').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.form_table .select_title').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.inquiry_table .select_topic').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('#form .select_design').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.contents_accessories #search_select').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.contents_specification .select_trim #selectbox').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.most_like .sort').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('#layer_popup .select_topic').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
	$('.con_popup .select_topic').jqTransform({imgPath:'/wcm/images/common/jqtransform/'});
});
/* Start the Plugin */
(function($){
	var defaultOptions = {preloadImg:true};
	var jqTransformImgPreloaded = false;
	var jqTransformPreloadHoverFocusImg = function(strImgUrl) {
		//guillemets to remove for ie
		strImgUrl = strImgUrl.replace(/^url\((.*)\)/,'$1').replace(/^\"(.*)\"$/,'$1');
		var imgHover = new Image();
		imgHover.src = strImgUrl.replace(/\.([a-zA-Z]*)$/,'-hover.$1');
		var imgFocus = new Image();
		imgFocus.src = strImgUrl.replace(/\.([a-zA-Z]*)$/,'-focus.$1');
	};
	/***************************
	  Labels
	***************************/
	var jqTransformGetLabel = function(objfield){
		var selfForm = $(objfield.get(0).form);
		var oLabel = objfield.next();
		if(!oLabel.is('label')) {
			oLabel = objfield.prev();
			if(oLabel.is('label')){
				var inputname = objfield.attr('id');
				if(inputname){
					oLabel = selfForm.find('label[for="'+inputname+'"]');
				}
			}
		}
		if(oLabel.is('label')){return oLabel.css('cursor','pointer');}
		return false;
	};
	/* Hide all open selects */
	var jqTransformHideSelect = function(oTarget){
		var ulVisible = $('.jqTransformSelectWrapper ul:visible');
		ulVisible.each(function(){
			var oSelect = $(this).parents(".jqTransformSelectWrapper:first").find("select").get(0);
			//do not hide if click on the label object associated to the select
			if( !(oTarget && oSelect.oLabel && oSelect.oLabel.get(0) == oTarget.get(0)) ){$(this).hide();}
		});
	};
	/* Check for an external click */
	var jqTransformCheckExternalClick = function(event) {
		if ($(event.target).parents('.jqTransformSelectWrapper').length === 0) { jqTransformHideSelect($(event.target)); }
	};
	/* Apply document listener */
	var jqTransformAddDocumentListener = function (){
		$(document).mousedown(jqTransformCheckExternalClick);
	};
	/* Add a new handler for the reset action */
	var jqTransformReset = function(f){
		var sel;
		$('.jqTransformSelectWrapper select', f).each(function(){sel = (this.selectedIndex<0) ? 0 : this.selectedIndex; $('ul', $(this).parent()).each(function(){$('a:eq('+ sel +')', this).click();});});
		$('a.jqTransformCheckbox, a.jqTransformRadio', f).removeClass('jqTransformChecked');
		$('input:checkbox, input:radio', f).each(function(){if(this.checked){$('a', $(this).parent()).addClass('jqTransformChecked');}});
	};
	/***************************
	  Check Boxes
	 ***************************/
	$.fn.jqTransCheckBox = function(){
		return this.each(function(){
			if($(this).hasClass('jqTransformHidden')) {return;}

			var $input = $(this);
			var inputSelf = this;

			//set the click on the label
			var oLabel=jqTransformGetLabel($input);
			oLabel && oLabel.click(function(){aLink.trigger('click');});

			var aLink = $('<a href="#" class="jqTransformCheckbox"></a>');
			//wrap and add the link
			$input.addClass('jqTransformHidden').wrap('<span class="jqTransformCheckboxWrapper"></span>').parent().prepend(aLink);
			//on change, change the class of the link
			$input.change(function(){
				this.checked && aLink.addClass('jqTransformChecked') || aLink.removeClass('jqTransformChecked');
				return true;
			});
			// Click Handler, trigger the click and change event on the input
			aLink.click(function(){
				//do nothing if the original input is disabled
				if($input.attr('disabled')){return false;}
				//trigger the envents on the input object
				$input.trigger('click').trigger("change");
				return false;
			});

			// set the default state
			this.checked && aLink.addClass('jqTransformChecked');
		});
	};
	/***************************
	  Radio Buttons
	 ***************************/
	$.fn.jqTransRadio = function(){
		return this.each(function(){
			if($(this).hasClass('jqTransformHidden')) {return;}

			var $input = $(this);
			var inputSelf = this;

			oLabel = jqTransformGetLabel($input);
			oLabel && oLabel.click(function(){aLink.trigger('click');});

			var aLink = $('<a href="#" class="jqTransformRadio" rel="'+ this.name +'"></a>');
			$input.addClass('jqTransformHidden').wrap('<span class="jqTransformRadioWrapper"></span>').parent().prepend(aLink);

			$input.change(function(){
				inputSelf.checked && aLink.addClass('jqTransformChecked') || aLink.removeClass('jqTransformChecked');
				return true;
			});
			// Click Handler
			aLink.click(function(){
				if($input.attr('disabled')){return false;}
				$input.trigger('click').trigger('change');

				// uncheck all others of same name input radio elements
				$('input[name="'+$input.attr('name')+'"]',inputSelf.form).not($input).each(function(){
					$(this).attr('type')=='radio' && $(this).trigger('change');
				});

				return false;
			});
			// set the default state
			inputSelf.checked && aLink.addClass('jqTransformChecked');
		});
	};

	/***************************
	  Select
	 ***************************/
	$.fn.jqTransSelect = function(){
		return this.each(function(index){
			var $select = $(this);
			if($select.hasClass('jqTransformHidden')) {return;}
			if($select.attr('multiple')) {return;}
			var oLabel  =  jqTransformGetLabel($select);
			/* First thing we do is Wrap it */
			var $wrapper = $select
				.addClass('jqTransformHidden')
				.wrap('<div class="jqTransformSelectWrapper"></div>')
				.parent()
			/* Now add the html for the select */
			$wrapper.prepend('<div><span></span><a href="#" class="jqTransformSelectOpen"></a></div><ul></ul>');
			var $ul = $('ul', $wrapper).hide();
			/* Now we add the options */
			$('option', this).each(function(i){
				var oLi = $('<li><a href="#" index="'+ i +'">'+ $(this).html() +'</a></li>');
				$ul.append(oLi);
			});
			var obj = $(".jqTransformSelectWrapper");
			var objNum = obj.length;
			for(var i=0 ; i<objNum ;i++) {
				$(".jqTransformSelectWrapper").eq(i).css({zIndex: 24-i});
			}

			/* Add click handler to the a */
			$ul.find('a').click(function(){
					$('a.selected', $wrapper).removeClass('selected');
					$(this).addClass('selected');
					/* Fire the onchange event */
					if ($select[0].selectedIndex != $(this).attr('index') && $select[0].onchange) { $select[0].selectedIndex = $(this).attr('index'); $select[0].onchange(); }
					$select[0].selectedIndex = $(this).attr('index');
					$('span:eq(0)', $wrapper).html($(this).html());
					$ul.hide();
					return false;
			});
			/* Set the default */
			$('a:eq('+ this.selectedIndex +')', $ul).click();
			$('span:first', $wrapper).click(function(){$("a.jqTransformSelectOpen",$wrapper).trigger('click');});
			oLabel && oLabel.click(function(){$("a.jqTransformSelectOpen",$wrapper).trigger('click');});
			this.oLabel = oLabel;
			/* Apply the click handler to the Open */
			var oLinkOpen = $('a.jqTransformSelectOpen', $wrapper)
				.click(function(){
					//Check if box is already open to still allow toggle, but close all other selects
					if( $ul.css('display') == 'none' ) {jqTransformHideSelect();}
					if($select.attr('disabled')){return false;}
					$ul.slideToggle('fast', function(){
						/*
						var offSet = ($('a.selected', $ul).offset().top - $ul.offset().top);
						$ul.animate({scrollTop: offSet});
						*/
					});
					return false;
				});
			// Set the new width
			var iSelectWidth = $select.outerWidth();
			var oSpan = $('span:first',$wrapper);
			var newWidth = (iSelectWidth > oSpan.innerWidth())?iSelectWidth+oLinkOpen.outerWidth():$wrapper.width();
			$wrapper.css('width',newWidth);
			$ul.css('width',newWidth-2);
			oSpan.css({width:iSelectWidth});
			// Calculate the height if necessary, less elements that the default height
			//show the ul to calculate the block, if ul is not displayed li height value is 0
			$ul.css({display:'block',visibility:'hidden'});
			var iSelectHeight = ($('li',$ul).length)*($('li:first',$ul).height());//+1 else bug ff
			//(iSelectHeight < $ul.height()) && $ul.css({height:iSelectHeight,'overflow':'hidden'});//hidden else bug with ff
			$ul.css({display:'none',visibility:'visible'});
		});
	};
	$.fn.jqTransform = function(options){
		var opt = $.extend({},defaultOptions,options);
		/* each form */
		 return this.each(function(){
			var selfForm = $(this);
			if(selfForm.hasClass('jqtransformdone')) {return;}
			selfForm.addClass('jqtransformdone');
			$('input:checkbox', this).jqTransCheckBox();
			$('input:radio', this).jqTransRadio();

			if( $('select', this).jqTransSelect().length > 0 ){jqTransformAddDocumentListener();}
			selfForm.bind('reset',function(){var action = function(){jqTransformReset(this);}; window.setTimeout(action, 10);});
		}); /* End Form each */
	};
})(jQuery);/* End the Plugin */

/*	SWFObject v2.2 <http://code.google.com/p/swfobject/> */
var swfobject=function(){var D="undefined",r="object",S="Shockwave Flash",W="ShockwaveFlash.ShockwaveFlash",q="application/x-shockwave-flash",R="SWFObjectExprInst",x="onreadystatechange",O=window,j=document,t=navigator,T=false,U=[h],o=[],N=[],I=[],l,Q,E,B,J=false,a=false,n,G,m=true,M=function(){var aa=typeof j.getElementById!=D&&typeof j.getElementsByTagName!=D&&typeof j.createElement!=D,ah=t.userAgent.toLowerCase(),Y=t.platform.toLowerCase(),ae=Y?/win/.test(Y):/win/.test(ah),ac=Y?/mac/.test(Y):/mac/.test(ah),af=/webkit/.test(ah)?parseFloat(ah.replace(/^.*webkit\/(\d+(\.\d+)?).*$/,"$1")):false,X=!+"\v1",ag=[0,0,0],ab=null;if(typeof t.plugins!=D&&typeof t.plugins[S]==r){ab=t.plugins[S].description;if(ab&&!(typeof t.mimeTypes!=D&&t.mimeTypes[q]&&!t.mimeTypes[q].enabledPlugin)){T=true;X=false;ab=ab.replace(/^.*\s+(\S+\s+\S+$)/,"$1");ag[0]=parseInt(ab.replace(/^(.*)\..*$/,"$1"),10);ag[1]=parseInt(ab.replace(/^.*\.(.*)\s.*$/,"$1"),10);ag[2]=/[a-zA-Z]/.test(ab)?parseInt(ab.replace(/^.*[a-zA-Z]+(.*)$/,"$1"),10):0}}else{if(typeof O.ActiveXObject!=D){try{var ad=new ActiveXObject(W);if(ad){ab=ad.GetVariable("$version");if(ab){X=true;ab=ab.split(" ")[1].split(",");ag=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}}catch(Z){}}}return{w3:aa,pv:ag,wk:af,ie:X,win:ae,mac:ac}}(),k=function(){if(!M.w3){return}if((typeof j.readyState!=D&&j.readyState=="complete")||(typeof j.readyState==D&&(j.getElementsByTagName("body")[0]||j.body))){f()}if(!J){if(typeof j.addEventListener!=D){j.addEventListener("DOMContentLoaded",f,false)}if(M.ie&&M.win){j.attachEvent(x,function(){if(j.readyState=="complete"){j.detachEvent(x,arguments.callee);f()}});if(O==top){(function(){if(J){return}try{j.documentElement.doScroll("left")}catch(X){setTimeout(arguments.callee,0);return}f()})()}}if(M.wk){(function(){if(J){return}if(!/loaded|complete/.test(j.readyState)){setTimeout(arguments.callee,0);return}f()})()}s(f)}}();function f(){if(J){return}try{var Z=j.getElementsByTagName("body")[0].appendChild(C("span"));Z.parentNode.removeChild(Z)}catch(aa){return}J=true;var X=U.length;for(var Y=0;Y<X;Y++){U[Y]()}}function K(X){if(J){X()}else{U[U.length]=X}}function s(Y){if(typeof O.addEventListener!=D){O.addEventListener("load",Y,false)}else{if(typeof j.addEventListener!=D){j.addEventListener("load",Y,false)}else{if(typeof O.attachEvent!=D){i(O,"onload",Y)}else{if(typeof O.onload=="function"){var X=O.onload;O.onload=function(){X();Y()}}else{O.onload=Y}}}}}function h(){if(T){V()}else{H()}}function V(){var X=j.getElementsByTagName("body")[0];var aa=C(r);aa.setAttribute("type",q);var Z=X.appendChild(aa);if(Z){var Y=0;(function(){if(typeof Z.GetVariable!=D){var ab=Z.GetVariable("$version");if(ab){ab=ab.split(" ")[1].split(",");M.pv=[parseInt(ab[0],10),parseInt(ab[1],10),parseInt(ab[2],10)]}}else{if(Y<10){Y++;setTimeout(arguments.callee,10);return}}X.removeChild(aa);Z=null;H()})()}else{H()}}function H(){var ag=o.length;if(ag>0){for(var af=0;af<ag;af++){var Y=o[af].id;var ab=o[af].callbackFn;var aa={success:false,id:Y};if(M.pv[0]>0){var ae=c(Y);if(ae){if(F(o[af].swfVersion)&&!(M.wk&&M.wk<312)){w(Y,true);if(ab){aa.success=true;aa.ref=z(Y);ab(aa)}}else{if(o[af].expressInstall&&A()){var ai={};ai.data=o[af].expressInstall;ai.width=ae.getAttribute("width")||"0";ai.height=ae.getAttribute("height")||"0";if(ae.getAttribute("class")){ai.styleclass=ae.getAttribute("class")}if(ae.getAttribute("align")){ai.align=ae.getAttribute("align")}var ah={};var X=ae.getElementsByTagName("param");var ac=X.length;for(var ad=0;ad<ac;ad++){if(X[ad].getAttribute("name").toLowerCase()!="movie"){ah[X[ad].getAttribute("name")]=X[ad].getAttribute("value")}}P(ai,ah,Y,ab)}else{p(ae);if(ab){ab(aa)}}}}}else{w(Y,true);if(ab){var Z=z(Y);if(Z&&typeof Z.SetVariable!=D){aa.success=true;aa.ref=Z}ab(aa)}}}}}function z(aa){var X=null;var Y=c(aa);if(Y&&Y.nodeName=="OBJECT"){if(typeof Y.SetVariable!=D){X=Y}else{var Z=Y.getElementsByTagName(r)[0];if(Z){X=Z}}}return X}function A(){return !a&&F("6.0.65")&&(M.win||M.mac)&&!(M.wk&&M.wk<312)}function P(aa,ab,X,Z){a=true;E=Z||null;B={success:false,id:X};var ae=c(X);if(ae){if(ae.nodeName=="OBJECT"){l=g(ae);Q=null}else{l=ae;Q=X}aa.id=R;if(typeof aa.width==D||(!/%$/.test(aa.width)&&parseInt(aa.width,10)<310)){aa.width="310"}if(typeof aa.height==D||(!/%$/.test(aa.height)&&parseInt(aa.height,10)<137)){aa.height="137"}j.title=j.title.slice(0,47)+" - Flash Player Installation";var ad=M.ie&&M.win?"ActiveX":"PlugIn",ac="MMredirectURL="+encodeURI(O.location).toString().replace(/&/g,"%26")+"&MMplayerType="+ad+"&MMdoctitle="+j.title;if(typeof ab.flashvars!=D){ab.flashvars+="&"+ac}else{ab.flashvars=ac}if(M.ie&&M.win&&ae.readyState!=4){var Y=C("div");X+="SWFObjectNew";Y.setAttribute("id",X);ae.parentNode.insertBefore(Y,ae);ae.style.display="none";(function(){if(ae.readyState==4){ae.parentNode.removeChild(ae)}else{setTimeout(arguments.callee,10)}})()}u(aa,ab,X)}}function p(Y){if(M.ie&&M.win&&Y.readyState!=4){var X=C("div");Y.parentNode.insertBefore(X,Y);X.parentNode.replaceChild(g(Y),X);Y.style.display="none";(function(){if(Y.readyState==4){Y.parentNode.removeChild(Y)}else{setTimeout(arguments.callee,10)}})()}else{Y.parentNode.replaceChild(g(Y),Y)}}function g(ab){var aa=C("div");if(M.win&&M.ie){aa.innerHTML=ab.innerHTML}else{var Y=ab.getElementsByTagName(r)[0];if(Y){var ad=Y.childNodes;if(ad){var X=ad.length;for(var Z=0;Z<X;Z++){if(!(ad[Z].nodeType==1&&ad[Z].nodeName=="PARAM")&&!(ad[Z].nodeType==8)){aa.appendChild(ad[Z].cloneNode(true))}}}}}return aa}function u(ai,ag,Y){var X,aa=c(Y);if(M.wk&&M.wk<312){return X}if(aa){if(typeof ai.id==D){ai.id=Y}if(M.ie&&M.win){var ah="";for(var ae in ai){if(ai[ae]!=Object.prototype[ae]){if(ae.toLowerCase()=="data"){ag.movie=ai[ae]}else{if(ae.toLowerCase()=="styleclass"){ah+=' class="'+ai[ae]+'"'}else{if(ae.toLowerCase()!="classid"){ah+=" "+ae+'="'+ai[ae]+'"'}}}}}var af="";for(var ad in ag){if(ag[ad]!=Object.prototype[ad]){af+='<param name="'+ad+'" value="'+ag[ad]+'" />'}}aa.outerHTML='<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"'+ah+">"+af+"</object>";N[N.length]=ai.id;X=c(ai.id)}else{var Z=C(r);Z.setAttribute("type",q);for(var ac in ai){if(ai[ac]!=Object.prototype[ac]){if(ac.toLowerCase()=="styleclass"){Z.setAttribute("class",ai[ac])}else{if(ac.toLowerCase()!="classid"){Z.setAttribute(ac,ai[ac])}}}}for(var ab in ag){if(ag[ab]!=Object.prototype[ab]&&ab.toLowerCase()!="movie"){e(Z,ab,ag[ab])}}aa.parentNode.replaceChild(Z,aa);X=Z}}return X}function e(Z,X,Y){var aa=C("param");aa.setAttribute("name",X);aa.setAttribute("value",Y);Z.appendChild(aa)}function y(Y){var X=c(Y);if(X&&X.nodeName=="OBJECT"){if(M.ie&&M.win){X.style.display="none";(function(){if(X.readyState==4){b(Y)}else{setTimeout(arguments.callee,10)}})()}else{X.parentNode.removeChild(X)}}}function b(Z){var Y=c(Z);if(Y){for(var X in Y){if(typeof Y[X]=="function"){Y[X]=null}}Y.parentNode.removeChild(Y)}}function c(Z){var X=null;try{X=j.getElementById(Z)}catch(Y){}return X}function C(X){return j.createElement(X)}function i(Z,X,Y){Z.attachEvent(X,Y);I[I.length]=[Z,X,Y]}function F(Z){var Y=M.pv,X=Z.split(".");X[0]=parseInt(X[0],10);X[1]=parseInt(X[1],10)||0;X[2]=parseInt(X[2],10)||0;return(Y[0]>X[0]||(Y[0]==X[0]&&Y[1]>X[1])||(Y[0]==X[0]&&Y[1]==X[1]&&Y[2]>=X[2]))?true:false}function v(ac,Y,ad,ab){if(M.ie&&M.mac){return}var aa=j.getElementsByTagName("head")[0];if(!aa){return}var X=(ad&&typeof ad=="string")?ad:"screen";if(ab){n=null;G=null}if(!n||G!=X){var Z=C("style");Z.setAttribute("type","text/css");Z.setAttribute("media",X);n=aa.appendChild(Z);if(M.ie&&M.win&&typeof j.styleSheets!=D&&j.styleSheets.length>0){n=j.styleSheets[j.styleSheets.length-1]}G=X}if(M.ie&&M.win){if(n&&typeof n.addRule==r){n.addRule(ac,Y)}}else{if(n&&typeof j.createTextNode!=D){n.appendChild(j.createTextNode(ac+" {"+Y+"}"))}}}function w(Z,X){if(!m){return}var Y=X?"visible":"hidden";if(J&&c(Z)){c(Z).style.visibility=Y}else{v("#"+Z,"visibility:"+Y)}}function L(Y){var Z=/[\\\"<>\.;]/;var X=Z.exec(Y)!=null;return X&&typeof encodeURIComponent!=D?encodeURIComponent(Y):Y}var d=function(){if(M.ie&&M.win){window.attachEvent("onunload",function(){var ac=I.length;for(var ab=0;ab<ac;ab++){I[ab][0].detachEvent(I[ab][1],I[ab][2])}var Z=N.length;for(var aa=0;aa<Z;aa++){y(N[aa])}for(var Y in M){M[Y]=null}M=null;for(var X in swfobject){swfobject[X]=null}swfobject=null})}}();return{registerObject:function(ab,X,aa,Z){if(M.w3&&ab&&X){var Y={};Y.id=ab;Y.swfVersion=X;Y.expressInstall=aa;Y.callbackFn=Z;o[o.length]=Y;w(ab,false)}else{if(Z){Z({success:false,id:ab})}}},getObjectById:function(X){if(M.w3){return z(X)}},embedSWF:function(ab,ah,ae,ag,Y,aa,Z,ad,af,ac){var X={success:false,id:ah};if(M.w3&&!(M.wk&&M.wk<312)&&ab&&ah&&ae&&ag&&Y){w(ah,false);K(function(){ae+="";ag+="";var aj={};if(af&&typeof af===r){for(var al in af){aj[al]=af[al]}}aj.data=ab;aj.width=ae;aj.height=ag;var am={};if(ad&&typeof ad===r){for(var ak in ad){am[ak]=ad[ak]}}if(Z&&typeof Z===r){for(var ai in Z){if(typeof am.flashvars!=D){am.flashvars+="&"+ai+"="+Z[ai]}else{am.flashvars=ai+"="+Z[ai]}}}if(F(Y)){var an=u(aj,am,ah);if(aj.id==ah){w(ah,true)}X.success=true;X.ref=an}else{if(aa&&A()){aj.data=aa;P(aj,am,ah,ac);return}else{w(ah,true)}}if(ac){ac(X)}})}else{if(ac){ac(X)}}},switchOffAutoHideShow:function(){m=false},ua:M,getFlashPlayerVersion:function(){return{major:M.pv[0],minor:M.pv[1],release:M.pv[2]}},hasFlashPlayerVersion:F,createSWF:function(Z,Y,X){if(M.w3){return u(Z,Y,X)}else{return undefined}},showExpressInstall:function(Z,aa,X,Y){if(M.w3&&A()){P(Z,aa,X,Y)}},removeSWF:function(X){if(M.w3){y(X)}},createCSS:function(aa,Z,Y,X){if(M.w3){v(aa,Z,Y,X)}},addDomLoadEvent:K,addLoadEvent:s,getQueryParamValue:function(aa){var Z=j.location.search||j.location.hash;if(Z){if(/\?/.test(Z)){Z=Z.split("?")[1]}if(aa==null){return L(Z)}var Y=Z.split("&");for(var X=0;X<Y.length;X++){if(Y[X].substring(0,Y[X].indexOf("="))==aa){return L(Y[X].substring((Y[X].indexOf("=")+1)))}}}return""},expressInstallCallback:function(){if(a){var X=c(R);if(X&&l){X.parentNode.replaceChild(l,X);if(Q){w(Q,true);if(M.ie&&M.win){l.style.display="block"}}if(E){E(B)}}a=false}}}}();
/*
VideoJS - HTML5 Video Player v2.0.2
You should have received a copy of the GNU Lesser General Public License
along with VideoJS.  If not, see <http://www.gnu.org/licenses/>.
*/
(function(window, undefined){var document = window.document;(function(){var initializing=false, fnTest=/xyz/.test(function(){xyz;}) ? /\b_super\b/ : /.*/; this.JRClass = function(){}; JRClass.extend = function(prop) { var _super = this.prototype; initializing = true; var prototype = new this(); initializing = false; for (var name in prop) { prototype[name] = typeof prop[name] == "function" && typeof _super[name] == "function" && fnTest.test(prop[name]) ? (function(name, fn){ return function() { var tmp = this._super; this._super = _super[name]; var ret = fn.apply(this, arguments); this._super = tmp; return ret; }; })(name, prop[name]) : prop[name]; } function JRClass() { if ( !initializing && this.init ) this.init.apply(this, arguments); } JRClass.prototype = prototype; JRClass.constructor = JRClass; JRClass.extend = arguments.callee; return JRClass;};})();var VideoJS = JRClass.extend({init: function(element, setOptions){if (typeof element == 'string') {this.video = document.getElementById(element);} else {this.video = element;}this.video.player = this;this.values = {};this.elements = {};this.options = {autoplay: false,preload: true,useBuiltInControls: false,controlsBelow: false,controlsAtStart: false,controlsHiding: true,defaultVolume: 0.85,playerFallbackOrder: ["html5", "flash", "links"],flashPlayer: "htmlObject",flashPlayerVersion: false};if (typeof VideoJS.options == "object") { _V_.merge(this.options, VideoJS.options);};if (typeof setOptions == "object") { _V_.merge(this.options, setOptions);};if (this.getPreloadAttribute() !== undefined) { this.options.preload = this.getPreloadAttribute();};if (this.getAutoplayAttribute() !== undefined) { this.options.autoplay = this.getAutoplayAttribute();};this.box = this.video.parentNode;this.linksFallback = this.getLinksFallback();this.hideLinksFallback();this.each(this.options.playerFallbackOrder, function(playerType){if (this[playerType+"Supported"]()) {this[playerType+"Init"]();return true;}});this.activateElement(this, "player");this.activateElement(this.box, "box");},behaviors: {},newBehavior: function(name, activate, functions){this.behaviors[name] = activate;this.extend(functions);},activateElement: function(element, behavior){if (typeof element == "string") { element = document.getElementById(element);};this.behaviors[behavior].call(this, element);},errors: [],warnings: [],warning: function(warning){this.warnings.push(warning);this.log(warning);},history: [],log: function(event){if (!event) { return; }if (typeof event == "string") { event = { type: event }; };if (event.type) { this.history.push(event.type); };if (this.history.length >= 50) { this.history.shift();};try { console.log(event.type); } catch(e) { try { opera.postError(event.type); } catch(e){} }},setLocalStorage: function(key, value){if (!localStorage) { return; };try {localStorage[key] = value;} catch(e) {if (e.code == 22 || e.code == 1014) {this.warning(VideoJS.warnings.localStorageFull);}}},getPreloadAttribute: function(){if (typeof this.video.hasAttribute == "function" && this.video.hasAttribute("preload")) {var preload = this.video.getAttribute("preload");if (preload === "" || preload === "true") { return "auto"; };if (preload === "false") { return "none"; };return preload;}},getAutoplayAttribute: function(){if (typeof this.video.hasAttribute == "function" && this.video.hasAttribute("autoplay")) {var autoplay = this.video.getAttribute("autoplay");if (autoplay === "false") { return false; };return true;}},bufferedPercent: function(){ return (this.duration()) ? this.buffered()[1] / this.duration() : 0; },each: function(arr, fn){if (!arr || arr.length === 0) { return; };for (var i=0,j=arr.length; i<j; i++) {if (fn.call(this, arr[i], i)) { break; }}},extend: function(obj){for (var attrname in obj) {if (obj.hasOwnProperty(attrname)) { this[attrname]=obj[attrname]; }}}});VideoJS.player = VideoJS.prototype;VideoJS.player.extend({flashSupported: function(){if (!this.flashElement) { this.flashElement = this.getFlashElement();};if (this.flashElement && this.flashPlayerVersionSupported()) {return true;} else {return false;}},flashInit: function(){this.replaceWithFlash();this.element = this.flashElement;this.video.src = "";var flashPlayerType = VideoJS.flashPlayers[this.options.flashPlayer];this.extend(VideoJS.flashPlayers[this.options.flashPlayer].api);(flashPlayerType.init.context(this))();},getFlashElement: function(){var children = this.video.children;for (var i=0,j=children.length; i<j; i++) {if (children[i].className == "vjs-flash-fallback") {return children[i];}}},replaceWithFlash: function(){if (this.flashElement) {this.box.insertBefore(this.flashElement, this.video);this.video.style.display = "none";}},flashPlayerVersionSupported: function(){var playerVersion = (this.options.flashPlayerVersion) ? this.options.flashPlayerVersion : VideoJS.flashPlayers[this.options.flashPlayer].flashPlayerVersion;return VideoJS.getFlashVersion() >= playerVersion;}});VideoJS.flashPlayers = {};VideoJS.flashPlayers.htmlObject = {flashPlayerVersion: 9,init: function() { return true; },api: {width: function(width){if (width !== undefined) {this.element.width = width;this.box.style.width = width+"px";this.triggerResizeListeners();return this;};return this.element.width;},height: function(height){if (height !== undefined) {this.element.height = height;this.box.style.height = height+"px";this.triggerResizeListeners();return this;};return this.element.height;}}};VideoJS.player.extend({linksSupported: function(){ return true; },linksInit: function(){this.showLinksFallback();this.element = this.video;},getLinksFallback: function(){ return this.box.getElementsByTagName("P")[0]; },hideLinksFallback: function(){if (this.linksFallback) { this.linksFallback.style.display = "none";}},showLinksFallback: function(){if (this.linksFallback) { this.linksFallback.style.display = "block";}}});VideoJS.merge = function(obj1, obj2, safe){for (var attrname in obj2){if (obj2.hasOwnProperty(attrname) && (!safe || !obj1.hasOwnProperty(attrname))) {obj1[attrname]=obj2[attrname]; }};return obj1;};VideoJS.extend = function(obj){ this.merge(this, obj, true); };VideoJS.extend({setupAllWhenReady: function(options){VideoJS.options = options;VideoJS.DOMReady(VideoJS.setup);},DOMReady: function(fn){VideoJS.addToDOMReady(fn);},setup: function(videos, options){var returnSingular = false,playerList = [],videoElement;if (!videos || videos == "All") {videos = VideoJS.getVideoJSTags();} else if (typeof videos != 'object' || videos.nodeType == 1) {videos = [videos];returnSingular = true;};for (var i=0; i<videos.length; i++) {if (typeof videos[i] == 'string') {videoElement = document.getElementById(videos[i]);} else {videoElement = videos[i];};playerList.push(new VideoJS(videoElement, options));};return (returnSingular) ? playerList[0] : playerList;},getVideoJSTags: function() {var videoTags = document.getElementsByTagName("video"),videoJSTags = [], videoTag;for (var i=0,j=videoTags.length; i<j; i++) {videoTag = videoTags[i];if (videoTag.className.indexOf("video-js") != -1) {videoJSTags.push(videoTag);}};return videoJSTags;},browserSupportsVideo: function() {if (typeof VideoJS.videoSupport != "undefined") { return VideoJS.videoSupport;}VideoJS.videoSupport = !!document.createElement('video').canPlayType;return VideoJS.videoSupport;},getFlashVersion: function(){if (typeof VideoJS.flashVersion != "undefined") { return VideoJS.flashVersion; };var version = 0, desc;if (typeof navigator.plugins != "undefined" && typeof navigator.plugins["Shockwave Flash"] == "object") {desc = navigator.plugins["Shockwave Flash"].description;if (desc && !(typeof navigator.mimeTypes != "undefined" && navigator.mimeTypes["application/x-shockwave-flash"] && !navigator.mimeTypes["application/x-shockwave-flash"].enabledPlugin)) {version = parseInt(desc.match(/^.*\s+([^\s]+)\.[^\s]+\s+[^\s]+$/)[1], 10);}} else if (typeof window.ActiveXObject != "undefined") {try {var testObject = new ActiveXObject("ShockwaveFlash.ShockwaveFlash");if (testObject) {version = parseInt(testObject.GetVariable("$version").match(/^[^\s]+\s(\d+)/)[1], 10);}}catch(e) {}};VideoJS.flashVersion = version;return VideoJS.flashVersion;},isIE: function(){ return !+"\v1"; },isIPad: function(){ return navigator.userAgent.match(/iPad/i) !== null; },isIPhone: function(){ return navigator.userAgent.match(/iPhone/i) !== null; },isIOS: function(){ return VideoJS.isIPhone() || VideoJS.isIPad(); },iOSVersion: function() {var match = navigator.userAgent.match(/OS (\d+)_/i);if (match && match[1]) { return match[1]; }},isAndroid: function(){ return navigator.userAgent.match(/Android/i) !== null; },androidVersion: function() {var match = navigator.userAgent.match(/Android (\d+)\./i);if (match && match[1]) { return match[1]; }},warnings: {videoNotReady: "Video is not ready yet (try playing the video first).",localStorageFull: "Local Storage is Full"}});if(VideoJS.isIE()) { document.createElement("video");};window.VideoJS = window._V_ = VideoJS;VideoJS.player.extend({html5Supported: function(){if (VideoJS.browserSupportsVideo() && this.canPlaySource()) {return true;} else {return false;}},html5Init: function(){this.element = this.video;this.fixPreloading();this.supportProgressEvents();this.volume((localStorage && localStorage.volume) || this.options.defaultVolume);if (VideoJS.isIOS()) {this.options.useBuiltInControls = true;this.iOSInterface();} else if (VideoJS.isAndroid()) {this.options.useBuiltInControls = true;this.androidInterface();};if (!this.options.useBuiltInControls) {this.video.controls = false;if (this.options.controlsBelow) { _V_.addClass(this.box, "vjs-controls-below"); };this.activateElement(this.video, "playToggle");this.buildStylesCheckDiv();this.buildAndActivatePoster();this.buildBigPlayButton();this.buildAndActivateSpinner();this.buildAndActivateControlBar();this.loadInterface();this.getSubtitles();}},canPlaySource: function(){if (this.canPlaySourceResult) { return this.canPlaySourceResult; };var children = this.video.children;for (var i=0,j=children.length; i<j; i++) {if (children[i].tagName.toUpperCase() == "SOURCE") {var canPlay = this.video.canPlayType(children[i].type) || this.canPlayExt(children[i].src);if (canPlay == "probably" || canPlay == "maybe") {this.firstPlayableSource = children[i];this.canPlaySourceResult = true;return true;}}};this.canPlaySourceResult = false;return false;},canPlayExt: function(src){if (!src) { return ""; };var match = src.match(/\.([^\.]+)$/);if (match && match[1]) {var ext = match[1].toLowerCase();if (VideoJS.isAndroid()) {if (ext == "mp4" || ext == "m4v") { return "maybe"; }} else if (VideoJS.isIOS()) {if (ext == "m3u8") { return "maybe"; }}};return "";},forceTheSource: function(){this.video.src = this.firstPlayableSource.src;this.video.load();},fixPreloading: function(){if (typeof this.video.hasAttribute == "function" && this.video.hasAttribute("preload") && this.video.preload != "none") {this.video.autobuffer = true;} else {this.video.autobuffer = false;this.video.preload = "none";}},supportProgressEvents: function(e){_V_.addListener(this.video, 'progress', this.playerOnVideoProgress.context(this));},playerOnVideoProgress: function(event){this.setBufferedFromProgress(event);},setBufferedFromProgress: function(event){if(event.total > 0) {var newBufferEnd = (event.loaded / event.total) * this.duration();if (newBufferEnd > this.values.bufferEnd) { this.values.bufferEnd = newBufferEnd; }}},iOSInterface: function(){if(VideoJS.iOSVersion() < 4) { this.forceTheSource(); };if(VideoJS.isIPad()) {this.buildAndActivateSpinner();}},androidInterface: function(){this.forceTheSource();_V_.addListener(this.video, "click", function(){ this.play(); }); this.buildBigPlayButton(); _V_.addListener(this.bigPlayButton, "click", function(){ this.play(); }.context(this));this.positionBox();this.showBigPlayButtons();},loadInterface: function(){if(!this.stylesHaveLoaded()) {if (!this.positionRetries) { this.positionRetries = 1; };if (this.positionRetries++ < 100) {setTimeout(this.loadInterface.context(this),10);return;}}this.hideStylesCheckDiv();this.showPoster();if (this.video.paused !== false) { this.showBigPlayButtons(); };if (this.options.controlsAtStart) { this.showControlBars(); };this.positionAll();},buildAndActivateControlBar: function(){this.controls = _V_.createElement("div", { className: "vjs-controls" });this.box.appendChild(this.controls);this.activateElement(this.controls, "controlBar");this.activateElement(this.controls, "mouseOverVideoReporter");this.playControl = _V_.createElement("div", { className: "vjs-play-control", innerHTML: "<span></span>" });this.controls.appendChild(this.playControl);this.activateElement(this.playControl, "playToggle");this.progressControl = _V_.createElement("div", { className: "vjs-progress-control" });this.controls.appendChild(this.progressControl);this.progressHolder = _V_.createElement("div", { className: "vjs-progress-holder" });this.progressControl.appendChild(this.progressHolder);this.activateElement(this.progressHolder, "currentTimeScrubber");this.loadProgressBar = _V_.createElement("div", { className: "vjs-load-progress" });this.progressHolder.appendChild(this.loadProgressBar);this.activateElement(this.loadProgressBar, "loadProgressBar");this.playProgressBar = _V_.createElement("div", { className: "vjs-play-progress" });this.progressHolder.appendChild(this.playProgressBar);this.activateElement(this.playProgressBar, "playProgressBar");this.timeControl = _V_.createElement("div", { className: "vjs-time-control" });this.controls.appendChild(this.timeControl);this.currentTimeDisplay = _V_.createElement("span", { className: "vjs-current-time-display", innerHTML: "00:00" });this.timeControl.appendChild(this.currentTimeDisplay);this.activateElement(this.currentTimeDisplay, "currentTimeDisplay");this.timeSeparator = _V_.createElement("span", { innerHTML: " / " });this.timeControl.appendChild(this.timeSeparator);this.durationDisplay = _V_.createElement("span", { className: "vjs-duration-display", innerHTML: "00:00" });this.timeControl.appendChild(this.durationDisplay);this.activateElement(this.durationDisplay, "durationDisplay");this.volumeControl = _V_.createElement("div", {className: "vjs-volume-control",innerHTML: "<div><span></span><span></span><span></span><span></span><span></span><span></span></div>"});this.controls.appendChild(this.volumeControl);this.activateElement(this.volumeControl, "volumeScrubber");this.volumeDisplay = this.volumeControl.children[0];this.activateElement(this.volumeDisplay, "volumeDisplay");this.fullscreenControl = _V_.createElement("div", {className: "vjs-fullscreen-control",innerHTML: "<div><span></span><span></span><span></span><span></span></div>"});this.controls.appendChild(this.fullscreenControl);this.activateElement(this.fullscreenControl, "fullscreenToggle");},buildAndActivatePoster: function(){this.updatePosterSource();if (this.video.poster) {this.poster = document.createElement("img");this.box.appendChild(this.poster);this.poster.src = this.video.poster;this.poster.className = "vjs-poster";this.activateElement(this.poster, "poster");} else {this.poster = false;}},buildBigPlayButton: function(){this.bigPlayButton = _V_.createElement("div", {className: "vjs-big-play-button",innerHTML: "<span></span>"});this.box.appendChild(this.bigPlayButton);this.activateElement(this.bigPlayButton, "bigPlayButton");},buildAndActivateSpinner: function(){this.spinner = _V_.createElement("div", {className: "vjs-spinner",innerHTML: "<div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>"});this.box.appendChild(this.spinner);this.activateElement(this.spinner, "spinner");},buildStylesCheckDiv: function(){this.stylesCheckDiv = _V_.createElement("div", { className: "vjs-styles-check" });this.stylesCheckDiv.style.position = "absolute";this.box.appendChild(this.stylesCheckDiv);},hideStylesCheckDiv: function(){ this.stylesCheckDiv.style.display = "none"; },stylesHaveLoaded: function(){if (this.stylesCheckDiv.offsetHeight != 5) {return false;} else {return true;}},positionAll: function(){this.positionBox();this.positionControlBars();this.positionPoster();},positionBox: function(){if (this.videoIsFullScreen) {this.box.style.width = "";this.element.style.height="";if (this.options.controlsBelow) {this.box.style.height = "";this.element.style.height = (this.box.offsetHeight - this.controls.offsetHeight) + "px";}} else {this.box.style.width = this.width() + "px";this.element.style.height=this.height()+"px";if (this.options.controlsBelow) {this.element.style.height = "";}}},getSubtitles: function(){var tracks = this.video.getElementsByTagName("TRACK");for (var i=0,j=tracks.length; i<j; i++) {if (tracks[i].getAttribute("kind") == "subtitles" && tracks[i].getAttribute("src")) {this.subtitlesSource = tracks[i].getAttribute("src");this.loadSubtitles();this.buildSubtitles();}}},loadSubtitles: function() {V_.get(this.subtitlesSource, this.parseSubtitles.context(this)); },parseSubtitles: function(subText) {var lines = subText.split("\n"),line = "",subtitle, time, text;this.subtitles = [];this.currentSubtitle = false;this.lastSubtitleIndex = 0;for (var i=0; i<lines.length; i++) {line = _V_.trim(lines[i]);if (line) {subtitle = {id: line,index: this.subtitles.length};line = _V_.trim(lines[++i]);time = line.split(" --> ");subtitle.start = this.parseSubtitleTime(time[0]);subtitle.end = this.parseSubtitleTime(time[1]);text = [];for (var j=i; j<lines.length; j++) {line = _V_.trim(lines[++i]);if (!line) { break; };text.push(line);};subtitle.text = text.join('<br/>');this.subtitles.push(subtitle);}}},parseSubtitleTime: function(timeText) {var parts = timeText.split(':'),time = 0;time += parseFloat(parts[0])*60*60;time += parseFloat(parts[1])*60;var seconds = parts[2].split(/\.|,/);time += parseFloat(seconds[0]);ms = parseFloat(seconds[1]);if (ms) { time += ms/1000; }return time;},buildSubtitles: function(){this.subtitlesDisplay = _V_.createElement("div", { className: 'vjs-subtitles' });this.box.appendChild(this.subtitlesDisplay);this.activateElement(this.subtitlesDisplay, "subtitlesDisplay");},addVideoListener: function(type, fn){ _V_.addListener(this.video, type, fn.rEvtContext(this)); },play: function(){this.video.play();return this;},onPlay: function(fn){ this.addVideoListener("play", fn); return this; },pause: function(){this.video.pause();return this;},onPause: function(fn){ this.addVideoListener("pause", fn); return this; },paused: function() { return this.video.paused; },currentTime: function(seconds){if (seconds !== undefined) {try { this.video.currentTime = seconds; }catch(e) { this.warning(VideoJS.warnings.videoNotReady); };this.values.currentTime = seconds;return this;};return this.video.currentTime;},onCurrentTimeUpdate: function(fn){this.currentTimeListeners.push(fn);},duration: function(){return this.video.duration;},buffered: function(){if (this.values.bufferStart === undefined) {this.values.bufferStart = 0;this.values.bufferEnd = 0;};if (this.video.buffered && this.video.buffered.length > 0) {var newEnd = this.video.buffered.end(0);if (newEnd > this.values.bufferEnd) { this.values.bufferEnd = newEnd;}}return [this.values.bufferStart, this.values.bufferEnd];},volume: function(percentAsDecimal){if (percentAsDecimal !== undefined) {this.values.volume = Math.max(0, Math.min(1, parseFloat(percentAsDecimal)));this.video.volume = this.values.volume;this.setLocalStorage("volume", this.values.volume);return this;};if (this.values.volume) { return this.values.volume; };return this.video.volume;},onVolumeChange: function(fn){ _V_.addListener(this.video, 'volumechange', fn.rEvtContext(this)); },width: function(width){if (width !== undefined) {this.video.width = width;this.box.style.width = width+"px";this.triggerResizeListeners();return this;}return this.video.offsetWidth;},height: function(height){if (height !== undefined) {this.video.height = height;this.box.style.height = height+"px";this.triggerResizeListeners();return this;}return this.video.offsetHeight;},supportsFullScreen: function(){if(typeof this.video.webkitEnterFullScreen == 'function') {if (!navigator.userAgent.match("Chrome") && !navigator.userAgent.match("Mac OS X 10.5")) {return true;}};return false;},html5EnterNativeFullScreen: function(){try {this.video.webkitEnterFullScreen();} catch (e) {if (e.code == 11) { this.warning(VideoJS.warnings.videoNotReady);}}return this;},enterFullScreen: function(){if (this.supportsFullScreen()) {this.html5EnterNativeFullScreen();} else {this.enterFullWindow();}},exitFullScreen: function(){if (this.supportsFullScreen()) {} else {this.exitFullWindow();}},enterFullWindow: function(){this.videoIsFullScreen = true;this.docOrigOverflow = document.documentElement.style.overflow;_V_.addListener(document, "keydown", this.fullscreenOnEscKey.rEvtContext(this));_V_.addListener(window, "resize", this.fullscreenOnWindowResize.rEvtContext(this));document.documentElement.style.overflow = 'hidden';_V_.addClass(this.box, "vjs-fullscreen");this.positionAll();},exitFullWindow: function(){this.videoIsFullScreen = false;document.removeEventListener("keydown", this.fullscreenOnEscKey, false);window.removeEventListener("resize", this.fullscreenOnWindowResize, false);document.documentElement.style.overflow = this.docOrigOverflow;_V_.removeClass(this.box, "vjs-fullscreen");this.positionAll();},onError: function(fn){ this.addVideoListener("error", fn); return this; },onEnded: function(fn){this.addVideoListener("ended", fn); return this;}});VideoJS.player.newBehavior("player", function(player){this.onError(this.playerOnVideoError);this.onPlay(this.playerOnVideoPlay);this.onPlay(this.trackCurrentTime);this.onPause(this.playerOnVideoPause);this.onPause(this.stopTrackingCurrentTime);this.onEnded(this.playerOnVideoEnded);this.trackBuffered();this.onBufferedUpdate(this.isBufferFull);},{playerOnVideoError: function(event){this.log(event);this.log(this.video.error);},playerOnVideoPlay: function(event){ this.hasPlayed = true; },playerOnVideoPause: function(event){}, playerOnVideoEnded: function(event){this.currentTime(0);this.pause();},trackBuffered: function(){this.bufferedInterval = setInterval(this.triggerBufferedListeners.context(this), 500);},stopTrackingBuffered: function(){ clearInterval(this.bufferedInterval); },bufferedListeners: [],onBufferedUpdate: function(fn){this.bufferedListeners.push(fn);},triggerBufferedListeners: function(){this.isBufferFull();this.each(this.bufferedListeners, function(listener){(listener.context(this))();});},isBufferFull: function(){if (this.bufferedPercent() == 1) {this.stopTrackingBuffered(); }},trackCurrentTime: function(){if (this.currentTimeInterval) { clearInterval(this.currentTimeInterval); };this.currentTimeInterval = setInterval(this.triggerCurrentTimeListeners.context(this), 100);this.trackingCurrentTime = true;},stopTrackingCurrentTime: function(){clearInterval(this.currentTimeInterval);this.trackingCurrentTime = false;},currentTimeListeners: [],triggerCurrentTimeListeners: function(late, newTime){this.each(this.currentTimeListeners, function(listener){(listener.context(this))(newTime || this.currentTime());});},resizeListeners: [],onResize: function(fn){this.resizeListeners.push(fn);},triggerResizeListeners: function(){this.each(this.resizeListeners, function(listener){(listener.context(this))();});}});VideoJS.player.newBehavior("mouseOverVideoReporter", function(element){_V_.addListener(element, "mousemove", this.mouseOverVideoReporterOnMouseMove.context(this)); _V_.addListener(element, "mouseout", this.mouseOverVideoReporterOnMouseOut.context(this));},{mouseOverVideoReporterOnMouseMove: function(){this.showControlBars();clearInterval(this.mouseMoveTimeout);this.mouseMoveTimeout = setTimeout(this.hideControlBars.context(this), 4000);},mouseOverVideoReporterOnMouseOut: function(event){var parent = event.relatedTarget;while (parent && parent !== this.box) {parent = parent.parentNode;}if (parent !== this.box) {this.hideControlBars();}}});VideoJS.player.newBehavior("box", function(element){this.positionBox();_V_.addClass(element, "vjs-paused");this.activateElement(element, "mouseOverVideoReporter");this.onPlay(this.boxOnVideoPlay);this.onPause(this.boxOnVideoPause);},{boxOnVideoPlay: function(){_V_.removeClass(this.box, "vjs-paused");_V_.addClass(this.box, "vjs-playing");},boxOnVideoPause: function(){_V_.removeClass(this.box, "vjs-playing");_V_.addClass(this.box, "vjs-paused");}});VideoJS.player.newBehavior("poster", function(element){this.activateElement(element, "mouseOverVideoReporter");this.activateElement(element, "playButton");this.onPlay(this.hidePoster);this.onEnded(this.showPoster);this.onResize(this.positionPoster);},{showPoster: function(){if (!this.poster) { return; };this.poster.style.display = "block";this.positionPoster();},positionPoster: function(){if (!this.poster || this.poster.style.display == 'none') { return; }this.poster.style.height = this.height() + "px";this.poster.style.width = this.width() + "px";},hidePoster: function(){if (!this.poster) { return; };this.poster.style.display = "none";},updatePosterSource: function(){if (!this.video.poster) {var images = this.video.getElementsByTagName("img");if (images.length > 0) { this.video.poster = images[0].src; }}}});VideoJS.player.newBehavior("controlBar", function(element){if (!this.controlBars) {this.controlBars = [];this.onResize(this.positionControlBars);};this.controlBars.push(element);_V_.addListener(element, "mousemove", this.onControlBarsMouseMove.context(this));_V_.addListener(element, "mouseout", this.onControlBarsMouseOut.context(this));},{showControlBars: function(){if (!this.options.controlsAtStart && !this.hasPlayed) { return; }this.each(this.controlBars, function(bar){bar.style.display = "block";});},positionControlBars: function(){this.updatePlayProgressBars();this.updateLoadProgressBars();},hideControlBars: function(){if (this.options.controlsHiding && !this.mouseIsOverControls) {this.each(this.controlBars, function(bar){bar.style.display = "none";});}},onControlBarsMouseMove: function(){ this.mouseIsOverControls = true; },onControlBarsMouseOut: function(event){this.mouseIsOverControls = false;}});VideoJS.player.newBehavior("playToggle", function(element){if (!this.elements.playToggles) {this.elements.playToggles = [];this.onPlay(this.playTogglesOnPlay);this.onPause(this.playTogglesOnPause);};this.elements.playToggles.push(element);_V_.addListener(element, "click", this.onPlayToggleClick.context(this));},{onPlayToggleClick: function(event){if (this.paused()) {this.play();} else {this.pause();}},playTogglesOnPlay: function(event){this.each(this.elements.playToggles, function(toggle){_V_.removeClass(toggle, "vjs-paused");_V_.addClass(toggle, "vjs-playing");});},playTogglesOnPause: function(event){this.each(this.elements.playToggles, function(toggle){_V_.removeClass(toggle, "vjs-playing");_V_.addClass(toggle, "vjs-paused");});}});VideoJS.player.newBehavior("playButton", function(element){_V_.addListener(element, "click", this.onPlayButtonClick.context(this));},{onPlayButtonClick: function(event){ this.play(); }});VideoJS.player.newBehavior("pauseButton", function(element){_V_.addListener(element, "click", this.onPauseButtonClick.context(this));},{onPauseButtonClick: function(event){ this.pause();}});VideoJS.player.newBehavior("playProgressBar", function(element){if (!this.playProgressBars) {this.playProgressBars = [];this.onCurrentTimeUpdate(this.updatePlayProgressBars);};this.playProgressBars.push(element);},{updatePlayProgressBars: function(newTime){var progress = (newTime !== undefined) ? newTime / this.duration() : this.currentTime() / this.duration();if (isNaN(progress)) { progress = 0; };this.each(this.playProgressBars, function(bar){if (bar.style) { bar.style.width = _V_.round(progress * 100, 2) + "%"; }});}});VideoJS.player.newBehavior("loadProgressBar", function(element){if (!this.loadProgressBars) { this.loadProgressBars = []; }this.loadProgressBars.push(element);this.onBufferedUpdate(this.updateLoadProgressBars);},{updateLoadProgressBars: function(){this.each(this.loadProgressBars, function(bar){if (bar.style) { bar.style.width = _V_.round(this.bufferedPercent() * 100, 2) + "%"; }});}});VideoJS.player.newBehavior("currentTimeDisplay", function(element){if (!this.currentTimeDisplays) {this.currentTimeDisplays = [];this.onCurrentTimeUpdate(this.updateCurrentTimeDisplays);}this.currentTimeDisplays.push(element);},{updateCurrentTimeDisplays: function(newTime){if (!this.currentTimeDisplays) { return; };var time = (newTime) ? newTime : this.currentTime();this.each(this.currentTimeDisplays, function(dis){dis.innerHTML = _V_.formatTime(time);});}});VideoJS.player.newBehavior("durationDisplay", function(element){if (!this.durationDisplays) {this.durationDisplays = [];this.onCurrentTimeUpdate(this.updateDurationDisplays);}this.durationDisplays.push(element);},{updateDurationDisplays: function(){if (!this.durationDisplays) { return; };this.each(this.durationDisplays, function(dis){if (this.duration()) { dis.innerHTML = _V_.formatTime(this.duration()); }});}});VideoJS.player.newBehavior("currentTimeScrubber", function(element){_V_.addListener(element, "mousedown", this.onCurrentTimeScrubberMouseDown.rEvtContext(this));},{onCurrentTimeScrubberMouseDown: function(event, scrubber){event.preventDefault();this.currentScrubber = scrubber;this.stopTrackingCurrentTime();this.videoWasPlaying = !this.paused();this.pause();_V_.blockTextSelection();this.setCurrentTimeWithScrubber(event);_V_.addListener(document, "mousemove", this.onCurrentTimeScrubberMouseMove.rEvtContext(this));_V_.addListener(document, "mouseup", this.onCurrentTimeScrubberMouseUp.rEvtContext(this));},onCurrentTimeScrubberMouseMove: function(event){this.setCurrentTimeWithScrubber(event);},onCurrentTimeScrubberMouseUp: function(event){_V_.unblockTextSelection();document.removeEventListener("mousemove", this.onCurrentTimeScrubberMouseMove, false);document.removeEventListener("mouseup", this.onCurrentTimeScrubberMouseUp, false);if (this.videoWasPlaying) {this.play();this.trackCurrentTime();}},setCurrentTimeWithScrubber: function(event){var newProgress = _V_.getRelativePosition(event.pageX, this.currentScrubber);var newTime = newProgress * this.duration();this.triggerCurrentTimeListeners(0, newTime); if (newTime == this.duration()) { newTime = newTime - 0.1; };this.currentTime(newTime);}});VideoJS.player.newBehavior("volumeDisplay", function(element){if (!this.volumeDisplays) {this.volumeDisplays = [];this.onVolumeChange(this.updateVolumeDisplays);};this.volumeDisplays.push(element);this.updateVolumeDisplay(element);},{updateVolumeDisplays: function(){if (!this.volumeDisplays) { return; }this.each(this.volumeDisplays, function(dis){this.updateVolumeDisplay(dis);});},updateVolumeDisplay: function(display){var volNum = Math.ceil(this.volume() * 6);this.each(display.children, function(child, num){if (num < volNum) {_V_.addClass(child, "vjs-volume-level-on");} else {_V_.removeClass(child, "vjs-volume-level-on");}});}});VideoJS.player.newBehavior("volumeScrubber", function(element){_V_.addListener(element, "mousedown", this.onVolumeScrubberMouseDown.rEvtContext(this));},{onVolumeScrubberMouseDown: function(event, scrubber){_V_.blockTextSelection();this.currentScrubber = scrubber;this.setVolumeWithScrubber(event);_V_.addListener(document, "mousemove", this.onVolumeScrubberMouseMove.rEvtContext(this));_V_.addListener(document, "mouseup", this.onVolumeScrubberMouseUp.rEvtContext(this));},onVolumeScrubberMouseMove: function(event){this.setVolumeWithScrubber(event);},onVolumeScrubberMouseUp: function(event){this.setVolumeWithScrubber(event);_V_.unblockTextSelection();document.removeEventListener("mousemove", this.onVolumeScrubberMouseMove, false);document.removeEventListener("mouseup", this.onVolumeScrubberMouseUp, false);},setVolumeWithScrubber: function(event){var newVol = _V_.getRelativePosition(event.pageX, this.currentScrubber);this.volume(newVol);}});VideoJS.player.newBehavior("fullscreenToggle", function(element){_V_.addListener(element, "click", this.onFullscreenToggleClick.context(this));},{onFullscreenToggleClick: function(event){if (!this.videoIsFullScreen) {this.enterFullScreen();} else {this.exitFullScreen();}},fullscreenOnWindowResize: function(event){this.positionControlBars();},fullscreenOnEscKey: function(event){if (event.keyCode == 27) {this.exitFullScreen();}}});VideoJS.player.newBehavior("bigPlayButton", function(element){if (!this.elements.bigPlayButtons) {this.elements.bigPlayButtons = [];this.onPlay(this.bigPlayButtonsOnPlay);this.onEnded(this.bigPlayButtonsOnEnded);}this.elements.bigPlayButtons.push(element);this.activateElement(element, "playButton");},{bigPlayButtonsOnPlay: function(event){ this.hideBigPlayButtons(); },bigPlayButtonsOnEnded: function(event){ this.showBigPlayButtons(); },showBigPlayButtons: function(){this.each(this.elements.bigPlayButtons, function(element){element.style.display = "block";});},hideBigPlayButtons: function(){this.each(this.elements.bigPlayButtons, function(element){element.style.display = "none";});}});VideoJS.player.newBehavior("spinner", function(element){if (!this.spinners) {this.spinners = [];_V_.addListener(this.video, "loadeddata", this.spinnersOnVideoLoadedData.context(this));_V_.addListener(this.video, "loadstart", this.spinnersOnVideoLoadStart.context(this));_V_.addListener(this.video, "seeking", this.spinnersOnVideoSeeking.context(this));_V_.addListener(this.video, "seeked", this.spinnersOnVideoSeeked.context(this));_V_.addListener(this.video, "canplay", this.spinnersOnVideoCanPlay.context(this));_V_.addListener(this.video, "canplaythrough", this.spinnersOnVideoCanPlayThrough.context(this));_V_.addListener(this.video, "waiting", this.spinnersOnVideoWaiting.context(this));_V_.addListener(this.video, "stalled", this.spinnersOnVideoStalled.context(this));_V_.addListener(this.video, "suspend", this.spinnersOnVideoSuspend.context(this));_V_.addListener(this.video, "playing", this.spinnersOnVideoPlaying.context(this));_V_.addListener(this.video, "timeupdate", this.spinnersOnVideoTimeUpdate.context(this));};this.spinners.push(element);},{showSpinners: function(){this.each(this.spinners, function(spinner){spinner.style.display = "block";});clearInterval(this.spinnerInterval);this.spinnerInterval = setInterval(this.rotateSpinners.context(this), 100);},hideSpinners: function(){this.each(this.spinners, function(spinner){spinner.style.display = "none";});clearInterval(this.spinnerInterval);},spinnersRotated: 0,rotateSpinners: function(){this.each(this.spinners, function(spinner){spinner.style.WebkitTransform = 'scale(0.5) rotate('+this.spinnersRotated+'deg)';spinner.style.MozTransform =    'scale(0.5) rotate('+this.spinnersRotated+'deg)';});if (this.spinnersRotated == 360) { this.spinnersRotated = 0; }this.spinnersRotated += 45;},spinnersOnVideoLoadedData: function(event){ this.hideSpinners(); },spinnersOnVideoLoadStart: function(event){ this.showSpinners(); },spinnersOnVideoSeeking: function(event){ /* this.showSpinners(); */ },spinnersOnVideoSeeked: function(event){ /* this.hideSpinners(); */ },spinnersOnVideoCanPlay: function(event){ /* this.hideSpinners(); */ },spinnersOnVideoCanPlayThrough: function(event){ this.hideSpinners(); },spinnersOnVideoWaiting: function(event){this.showSpinners();},spinnersOnVideoStalled: function(event){},spinnersOnVideoSuspend: function(event){},spinnersOnVideoPlaying: function(event){ this.hideSpinners(); },spinnersOnVideoTimeUpdate: function(event){if(this.spinner.style.display == "block") { this.hideSpinners(); }}});VideoJS.player.newBehavior("subtitlesDisplay", function(element){if (!this.subtitleDisplays) {this.subtitleDisplays = [];this.onCurrentTimeUpdate(this.subtitleDisplaysOnVideoTimeUpdate);this.onEnded(function() { this.lastSubtitleIndex = 0; }.context(this));}this.subtitleDisplays.push(element);},{subtitleDisplaysOnVideoTimeUpdate: function(time){if (this.subtitles) {if (!this.currentSubtitle || this.currentSubtitle.start >= time || this.currentSubtitle.end < time) {var newSubIndex = false,reverse = (this.subtitles[this.lastSubtitleIndex].start > time),i = this.lastSubtitleIndex - (reverse) ? 1 : 0;while (true) {if (reverse) {if (i < 0 || this.subtitles[i].end < time) { break; };if (this.subtitles[i].start < time) {newSubIndex = i;break;}i--;} else {if (i >= this.subtitles.length || this.subtitles[i].start > time) { break; };if (this.subtitles[i].end > time) {newSubIndex = i;break;};i++;}};if (newSubIndex !== false) {this.currentSubtitle = this.subtitles[newSubIndex];this.lastSubtitleIndex = newSubIndex;this.updateSubtitleDisplays(this.currentSubtitle.text);} else if (this.currentSubtitle) {this.currentSubtitle = false;this.updateSubtitleDisplays("");}}}},updateSubtitleDisplays: function(val){this.each(this.subtitleDisplays, function(disp){disp.innerHTML = val;});}});VideoJS.extend({addClass: function(element, classToAdd){if ((" "+element.className+" ").indexOf(" "+classToAdd+" ") == -1) {element.className = element.className === "" ? classToAdd : element.className + " " + classToAdd;}},removeClass: function(element, classToRemove){if (element.className.indexOf(classToRemove) == -1) { return; };var classNames = element.className.split(/\s+/);classNames.splice(classNames.lastIndexOf(classToRemove),1);element.className = classNames.join(" ");},createElement: function(tagName, attributes){return this.merge(document.createElement(tagName), attributes);},blockTextSelection: function(){document.body.focus();document.onselectstart = function () { return false; };},unblockTextSelection: function(){ document.onselectstart = function () { return true; }; },formatTime: function(secs) {var seconds = Math.round(secs);var minutes = Math.floor(seconds / 60);minutes = (minutes >= 10) ? minutes : "0" + minutes;seconds = Math.floor(seconds % 60);seconds = (seconds >= 10) ? seconds : "0" + seconds;return minutes + ":" + seconds;},getRelativePosition: function(x, relativeElement){return Math.max(0, Math.min(1, (x - this.findPosX(relativeElement)) / relativeElement.offsetWidth));},findPosX: function(obj) {var curleft = obj.offsetLeft;while(obj = obj.offsetParent) {curleft += obj.offsetLeft;}return curleft;},getComputedStyleValue: function(element, style){return window.getComputedStyle(element, null).getPropertyValue(style);},round: function(num, dec) {if (!dec) { dec = 0; }return Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);},addListener: function(element, type, handler){if (element.addEventListener) {element.addEventListener(type, handler, false);} else if (element.attachEvent) {element.attachEvent("on"+type, handler);}},removeListener: function(element, type, handler){if (element.removeEventListener) {element.removeEventListener(type, handler, false);} else if (element.attachEvent) {element.detachEvent("on"+type, handler);}},get: function(url, onSuccess){if (typeof XMLHttpRequest == "undefined") {XMLHttpRequest = function () {try { return new ActiveXObject("Msxml2.XMLHTTP.6.0"); } catch (e) {};try { return new ActiveXObject("Msxml2.XMLHTTP.3.0"); } catch (f) {};try { return new ActiveXObject("Msxml2.XMLHTTP"); } catch (g) {} throw new Error("This browser does not support XMLHttpRequest.");};};var request = new XMLHttpRequest();request.open("GET",url);request.onreadystatechange = function() {if (request.readyState == 4 && request.status == 200) {onSuccess(request.responseText);}}.context(this);request.send();},trim: function(string){ return string.toString().replace(/^\s+/, "").replace(/\s+$/, ""); },bindDOMReady: function(){if (document.readyState === "complete") {return VideoJS.onDOMReady();}if (document.addEventListener) {document.addEventListener("DOMContentLoaded", VideoJS.DOMContentLoaded, false);window.addEventListener("load", VideoJS.onDOMReady, false);} else if (document.attachEvent) {document.attachEvent("onreadystatechange", VideoJS.DOMContentLoaded);window.attachEvent("onload", VideoJS.onDOMReady);}},DOMContentLoaded: function(){if (document.addEventListener) {document.removeEventListener( "DOMContentLoaded", VideoJS.DOMContentLoaded, false);VideoJS.onDOMReady();} else if ( document.attachEvent ) {if ( document.readyState === "complete" ) {document.detachEvent("onreadystatechange", VideoJS.DOMContentLoaded);VideoJS.onDOMReady();}}},DOMReadyList: [],addToDOMReady: function(fn){if (VideoJS.DOMIsReady) {fn.call(document);} else {VideoJS.DOMReadyList.push(fn);}},DOMIsReady: false,onDOMReady: function(){if (VideoJS.DOMIsReady) { return; };if (!document.body) { return setTimeout(VideoJS.onDOMReady, 13); };VideoJS.DOMIsReady = true;if (VideoJS.DOMReadyList) {for (var i=0; i<VideoJS.DOMReadyList.length; i++) {VideoJS.DOMReadyList[i].call(document);};VideoJS.DOMReadyList = null;}}});VideoJS.bindDOMReady();Function.prototype.context = function(obj){var method = this,temp = function(){return method.apply(obj, arguments);};return temp;};Function.prototype.evtContext = function(obj){var method = this,temp = function(){var origContext = this;return method.call(obj, arguments[0], origContext);};return temp;};Function.prototype.rEvtContext = function(obj, funcParent){if (this.hasContext === true) { return this; };if (!funcParent) { funcParent = obj; };for (var attrname in funcParent) {if (funcParent[attrname] == this) {funcParent[attrname] = this.evtContext(obj);funcParent[attrname].hasContext = true;return funcParent[attrname];}}return this.evtContext(obj);};if (window.jQuery) {(function($) {$.fn.VideoJS = function(options) {this.each(function() {VideoJS.setup(this, options);});return this;};$.fn.player = function() {return this[0].player;};})(jQuery);}window.VideoJS = window._V_ = VideoJS;})(window);
/* jQuery cycle.lite.min */
(function($){var ver="2.88";if($.support==undefined){$.support={opacity:!($.browser.msie)};}function debug(s){if($.fn.cycle.debug){log(s);}}function log(){if(window.console&&window.console.log){window.console.log("[cycle] "+Array.prototype.join.call(arguments," "));}}$.fn.cycle=function(options,arg2){var o={s:this.selector,c:this.context};if(this.length===0&&options!="stop"){if(!$.isReady&&o.s){log("DOM not ready, queuing slideshow");$(function(){$(o.s,o.c).cycle(options,arg2);});return this;}log("terminating; zero elements found by selector"+($.isReady?"":" (DOM not ready)"));return this;}return this.each(function(){var opts=handleArguments(this,options,arg2);if(opts===false){return;}opts.updateActivePagerLink=opts.updateActivePagerLink||$.fn.cycle.updateActivePagerLink;if(this.cycleTimeout){clearTimeout(this.cycleTimeout);}this.cycleTimeout=this.cyclePause=0;var $cont=$(this);var $slides=opts.slideExpr?$(opts.slideExpr,this):$cont.children();var els=$slides.get();if(els.length<2){log("terminating; too few slides: "+els.length);return;}var opts2=buildOptions($cont,$slides,els,opts,o);if(opts2===false){return;}var startTime=opts2.continuous?10:getTimeout(els[opts2.currSlide],els[opts2.nextSlide],opts2,!opts2.rev);if(startTime){startTime+=(opts2.delay||0);if(startTime<10){startTime=10;}debug("first timeout: "+startTime);this.cycleTimeout=setTimeout(function(){go(els,opts2,0,(!opts2.rev&&!opts.backwards));},startTime);}});};function handleArguments(cont,options,arg2){if(cont.cycleStop==undefined){cont.cycleStop=0;}if(options===undefined||options===null){options={};}if(options.constructor==String){switch(options){case"destroy":case"stop":var opts=$(cont).data("cycle.opts");if(!opts){return false;}cont.cycleStop++;if(cont.cycleTimeout){clearTimeout(cont.cycleTimeout);}cont.cycleTimeout=0;$(cont).removeData("cycle.opts");if(options=="destroy"){destroy(opts);}return false;case"toggle":cont.cyclePause=(cont.cyclePause===1)?0:1;checkInstantResume(cont.cyclePause,arg2,cont);return false;case"pause":cont.cyclePause=1;return false;case"resume":cont.cyclePause=0;checkInstantResume(false,arg2,cont);return false;case"prev":case"next":var opts=$(cont).data("cycle.opts");if(!opts){log('options not found, "prev/next" ignored');return false;}$.fn.cycle[options](opts);return false;default:options={fx:options};}return options;}else{if(options.constructor==Number){var num=options;options=$(cont).data("cycle.opts");if(!options){log("options not found, can not advance slide");return false;}if(num<0||num>=options.elements.length){log("invalid slide index: "+num);return false;}options.nextSlide=num;if(cont.cycleTimeout){clearTimeout(cont.cycleTimeout);cont.cycleTimeout=0;}if(typeof arg2=="string"){options.oneTimeFx=arg2;}go(options.elements,options,1,num>=options.currSlide);return false;}}return options;function checkInstantResume(isPaused,arg2,cont){if(!isPaused&&arg2===true){var options=$(cont).data("cycle.opts");if(!options){log("options not found, can not resume");return false;}if(cont.cycleTimeout){clearTimeout(cont.cycleTimeout);cont.cycleTimeout=0;}go(options.elements,options,1,(!opts.rev&&!opts.backwards));}}}function removeFilter(el,opts){if(!$.support.opacity&&opts.cleartype&&el.style.filter){try{el.style.removeAttribute("filter");}catch(smother){}}}function destroy(opts){if(opts.next){$(opts.next).unbind(opts.prevNextEvent);}if(opts.prev){$(opts.prev).unbind(opts.prevNextEvent);}if(opts.pager||opts.pagerAnchorBuilder){$.each(opts.pagerAnchors||[],function(){this.unbind().remove();});}opts.pagerAnchors=null;if(opts.destroy){opts.destroy(opts);}}function buildOptions($cont,$slides,els,options,o){var opts=$.extend({},$.fn.cycle.defaults,options||{},$.metadata?$cont.metadata():$.meta?$cont.data():{});if(opts.autostop){opts.countdown=opts.autostopCount||els.length;}var cont=$cont[0];$cont.data("cycle.opts",opts);opts.$cont=$cont;opts.stopCount=cont.cycleStop;opts.elements=els;opts.before=opts.before?[opts.before]:[];opts.after=opts.after?[opts.after]:[];opts.after.unshift(function(){opts.busy=0;});if(!$.support.opacity&&opts.cleartype){opts.after.push(function(){removeFilter(this,opts);});}if(opts.continuous){opts.after.push(function(){go(els,opts,0,(!opts.rev&&!opts.backwards));});}saveOriginalOpts(opts);if(!$.support.opacity&&opts.cleartype&&!opts.cleartypeNoBg){clearTypeFix($slides);}if($cont.css("position")=="static"){$cont.css("position","relative");}if(opts.width){$cont.width(opts.width);}if(opts.height&&opts.height!="auto"){$cont.height(opts.height);}if(opts.startingSlide){opts.startingSlide=parseInt(opts.startingSlide);}else{if(opts.backwards){opts.startingSlide=els.length-1;}}if(opts.random){opts.randomMap=[];for(var i=0;i<els.length;i++){opts.randomMap.push(i);}opts.randomMap.sort(function(a,b){return Math.random()-0.5;});opts.randomIndex=1;opts.startingSlide=opts.randomMap[1];}else{if(opts.startingSlide>=els.length){opts.startingSlide=0;}}opts.currSlide=opts.startingSlide||0;var first=opts.startingSlide;$slides.css({position:"absolute",top:0,left:0}).hide().each(function(i){var z;if(opts.backwards){z=first?i<=first?els.length+(i-first):first-i:els.length-i;}else{z=first?i>=first?els.length-(i-first):first-i:els.length-i;}$(this).css("z-index",z);});$(els[first]).css("opacity",1).show();removeFilter(els[first],opts);if(opts.fit&&opts.width){$slides.width(opts.width);}if(opts.fit&&opts.height&&opts.height!="auto"){$slides.height(opts.height);}var reshape=opts.containerResize&&!$cont.innerHeight();if(reshape){var maxw=0,maxh=0;for(var j=0;j<els.length;j++){var $e=$(els[j]),e=$e[0],w=$e.outerWidth(),h=$e.outerHeight();if(!w){w=e.offsetWidth||e.width||$e.attr("width");}if(!h){h=e.offsetHeight||e.height||$e.attr("height");}maxw=w>maxw?w:maxw;maxh=h>maxh?h:maxh;}if(maxw>0&&maxh>0){$cont.css({width:maxw+"px",height:maxh+"px"});}}if(opts.pause){$cont.hover(function(){this.cyclePause++;},function(){this.cyclePause--;});}if(supportMultiTransitions(opts)===false){return false;}var requeue=false;options.requeueAttempts=options.requeueAttempts||0;$slides.each(function(){var $el=$(this);this.cycleH=(opts.fit&&opts.height)?opts.height:($el.height()||this.offsetHeight||this.height||$el.attr("height")||0);this.cycleW=(opts.fit&&opts.width)?opts.width:($el.width()||this.offsetWidth||this.width||$el.attr("width")||0);if($el.is("img")){var loadingIE=($.browser.msie&&this.cycleW==28&&this.cycleH==30&&!this.complete);var loadingFF=($.browser.mozilla&&this.cycleW==34&&this.cycleH==19&&!this.complete);var loadingOp=($.browser.opera&&((this.cycleW==42&&this.cycleH==19)||(this.cycleW==37&&this.cycleH==17))&&!this.complete);var loadingOther=(this.cycleH==0&&this.cycleW==0&&!this.complete);if(loadingIE||loadingFF||loadingOp||loadingOther){if(o.s&&opts.requeueOnImageNotLoaded&&++options.requeueAttempts<100){log(options.requeueAttempts," - img slide not loaded, requeuing slideshow: ",this.src,this.cycleW,this.cycleH);setTimeout(function(){$(o.s,o.c).cycle(options);},opts.requeueTimeout);requeue=true;return false;}else{log("could not determine size of image: "+this.src,this.cycleW,this.cycleH);}}}return true;});if(requeue){return false;}opts.cssBefore=opts.cssBefore||{};opts.animIn=opts.animIn||{};opts.animOut=opts.animOut||{};$slides.not(":eq("+first+")").css(opts.cssBefore);if(opts.cssFirst){$($slides[first]).css(opts.cssFirst);}if(opts.timeout){opts.timeout=parseInt(opts.timeout);if(opts.speed.constructor==String){opts.speed=$.fx.speeds[opts.speed]||parseInt(opts.speed);}if(!opts.sync){opts.speed=opts.speed/2;}var buffer=opts.fx=="shuffle"?500:250;while((opts.timeout-opts.speed)<buffer){opts.timeout+=opts.speed;}}if(opts.easing){opts.easeIn=opts.easeOut=opts.easing;}if(!opts.speedIn){opts.speedIn=opts.speed;}if(!opts.speedOut){opts.speedOut=opts.speed;}opts.slideCount=els.length;opts.currSlide=opts.lastSlide=first;if(opts.random){if(++opts.randomIndex==els.length){opts.randomIndex=0;}opts.nextSlide=opts.randomMap[opts.randomIndex];}else{if(opts.backwards){opts.nextSlide=opts.startingSlide==0?(els.length-1):opts.startingSlide-1;}else{opts.nextSlide=opts.startingSlide>=(els.length-1)?0:opts.startingSlide+1;}}if(!opts.multiFx){var init=$.fn.cycle.transitions[opts.fx];if($.isFunction(init)){init($cont,$slides,opts);}else{if(opts.fx!="custom"&&!opts.multiFx){log("unknown transition: "+opts.fx,"; slideshow terminating");return false;}}}var e0=$slides[first];if(opts.before.length){opts.before[0].apply(e0,[e0,e0,opts,true]);}if(opts.after.length>1){opts.after[1].apply(e0,[e0,e0,opts,true]);}if(opts.next){$(opts.next).bind(opts.prevNextEvent,function(){return advance(opts,opts.rev?-1:1);});}if(opts.prev){$(opts.prev).bind(opts.prevNextEvent,function(){return advance(opts,opts.rev?1:-1);});}if(opts.pager||opts.pagerAnchorBuilder){buildPager(els,opts);}exposeAddSlide(opts,els);return opts;}function saveOriginalOpts(opts){opts.original={before:[],after:[]};opts.original.cssBefore=$.extend({},opts.cssBefore);opts.original.cssAfter=$.extend({},opts.cssAfter);opts.original.animIn=$.extend({},opts.animIn);opts.original.animOut=$.extend({},opts.animOut);$.each(opts.before,function(){opts.original.before.push(this);});$.each(opts.after,function(){opts.original.after.push(this);});}function supportMultiTransitions(opts){var i,tx,txs=$.fn.cycle.transitions;if(opts.fx.indexOf(",")>0){opts.multiFx=true;opts.fxs=opts.fx.replace(/\s*/g,"").split(",");for(i=0;i<opts.fxs.length;i++){var fx=opts.fxs[i];tx=txs[fx];if(!tx||!txs.hasOwnProperty(fx)||!$.isFunction(tx)){log("discarding unknown transition: ",fx);opts.fxs.splice(i,1);i--;}}if(!opts.fxs.length){log("No valid transitions named; slideshow terminating.");return false;}}else{if(opts.fx=="all"){opts.multiFx=true;opts.fxs=[];for(p in txs){tx=txs[p];if(txs.hasOwnProperty(p)&&$.isFunction(tx)){opts.fxs.push(p);}}}}if(opts.multiFx&&opts.randomizeEffects){var r1=Math.floor(Math.random()*20)+30;for(i=0;i<r1;i++){var r2=Math.floor(Math.random()*opts.fxs.length);opts.fxs.push(opts.fxs.splice(r2,1)[0]);}debug("randomized fx sequence: ",opts.fxs);}return true;}function exposeAddSlide(opts,els){opts.addSlide=function(newSlide,prepend){var $s=$(newSlide),s=$s[0];if(!opts.autostopCount){opts.countdown++;}els[prepend?"unshift":"push"](s);if(opts.els){opts.els[prepend?"unshift":"push"](s);}opts.slideCount=els.length;$s.css("position","absolute");$s[prepend?"prependTo":"appendTo"](opts.$cont);if(prepend){opts.currSlide++;opts.nextSlide++;}if(!$.support.opacity&&opts.cleartype&&!opts.cleartypeNoBg){clearTypeFix($s);}if(opts.fit&&opts.width){$s.width(opts.width);}if(opts.fit&&opts.height&&opts.height!="auto"){$slides.height(opts.height);}s.cycleH=(opts.fit&&opts.height)?opts.height:$s.height();s.cycleW=(opts.fit&&opts.width)?opts.width:$s.width();$s.css(opts.cssBefore);if(opts.pager||opts.pagerAnchorBuilder){$.fn.cycle.createPagerAnchor(els.length-1,s,$(opts.pager),els,opts);}if($.isFunction(opts.onAddSlide)){opts.onAddSlide($s);}else{$s.hide();}};}$.fn.cycle.resetState=function(opts,fx){fx=fx||opts.fx;opts.before=[];opts.after=[];opts.cssBefore=$.extend({},opts.original.cssBefore);opts.cssAfter=$.extend({},opts.original.cssAfter);opts.animIn=$.extend({},opts.original.animIn);opts.animOut=$.extend({},opts.original.animOut);opts.fxFn=null;$.each(opts.original.before,function(){opts.before.push(this);});$.each(opts.original.after,function(){opts.after.push(this);});var init=$.fn.cycle.transitions[fx];if($.isFunction(init)){init(opts.$cont,$(opts.elements),opts);}};function go(els,opts,manual,fwd){if(manual&&opts.busy&&opts.manualTrump){debug("manualTrump in go(), stopping active transition");$(els).stop(true,true);opts.busy=false;}if(opts.busy){debug("transition active, ignoring new tx request");return;}var p=opts.$cont[0],curr=els[opts.currSlide],next=els[opts.nextSlide];if(p.cycleStop!=opts.stopCount||p.cycleTimeout===0&&!manual){return;}if(!manual&&!p.cyclePause&&!opts.bounce&&((opts.autostop&&(--opts.countdown<=0))||(opts.nowrap&&!opts.random&&opts.nextSlide<opts.currSlide))){if(opts.end){opts.end(opts);}return;}var changed=false;if((manual||!p.cyclePause)&&(opts.nextSlide!=opts.currSlide)){changed=true;var fx=opts.fx;curr.cycleH=curr.cycleH||$(curr).height();curr.cycleW=curr.cycleW||$(curr).width();next.cycleH=next.cycleH||$(next).height();next.cycleW=next.cycleW||$(next).width();if(opts.multiFx){if(opts.lastFx==undefined||++opts.lastFx>=opts.fxs.length){opts.lastFx=0;}fx=opts.fxs[opts.lastFx];opts.currFx=fx;}if(opts.oneTimeFx){fx=opts.oneTimeFx;opts.oneTimeFx=null;}$.fn.cycle.resetState(opts,fx);if(opts.before.length){$.each(opts.before,function(i,o){if(p.cycleStop!=opts.stopCount){return;}o.apply(next,[curr,next,opts,fwd]);});}var after=function(){$.each(opts.after,function(i,o){if(p.cycleStop!=opts.stopCount){return;}o.apply(next,[curr,next,opts,fwd]);});};debug("tx firing; currSlide: "+opts.currSlide+"; nextSlide: "+opts.nextSlide);opts.busy=1;if(opts.fxFn){opts.fxFn(curr,next,opts,after,fwd,manual&&opts.fastOnEvent);}else{if($.isFunction($.fn.cycle[opts.fx])){$.fn.cycle[opts.fx](curr,next,opts,after,fwd,manual&&opts.fastOnEvent);}else{$.fn.cycle.custom(curr,next,opts,after,fwd,manual&&opts.fastOnEvent);}}}if(changed||opts.nextSlide==opts.currSlide){opts.lastSlide=opts.currSlide;if(opts.random){opts.currSlide=opts.nextSlide;if(++opts.randomIndex==els.length){opts.randomIndex=0;}opts.nextSlide=opts.randomMap[opts.randomIndex];if(opts.nextSlide==opts.currSlide){opts.nextSlide=(opts.currSlide==opts.slideCount-1)?0:opts.currSlide+1;}}else{if(opts.backwards){var roll=(opts.nextSlide-1)<0;if(roll&&opts.bounce){opts.backwards=!opts.backwards;opts.nextSlide=1;opts.currSlide=0;}else{opts.nextSlide=roll?(els.length-1):opts.nextSlide-1;opts.currSlide=roll?0:opts.nextSlide+1;}}else{var roll=(opts.nextSlide+1)==els.length;if(roll&&opts.bounce){opts.backwards=!opts.backwards;opts.nextSlide=els.length-2;opts.currSlide=els.length-1;}else{opts.nextSlide=roll?0:opts.nextSlide+1;opts.currSlide=roll?els.length-1:opts.nextSlide-1;}}}}if(changed&&opts.pager){opts.updateActivePagerLink(opts.pager,opts.currSlide,opts.activePagerClass);}var ms=0;if(opts.timeout&&!opts.continuous){ms=getTimeout(els[opts.currSlide],els[opts.nextSlide],opts,fwd);}else{if(opts.continuous&&p.cyclePause){ms=10;}}if(ms>0){p.cycleTimeout=setTimeout(function(){go(els,opts,0,(!opts.rev&&!opts.backwards));},ms);}}$.fn.cycle.updateActivePagerLink=function(pager,currSlide,clsName){$(pager).each(function(){$(this).children().removeClass(clsName).eq(currSlide).addClass(clsName);});};function getTimeout(curr,next,opts,fwd){if(opts.timeoutFn){var t=opts.timeoutFn.call(curr,curr,next,opts,fwd);while((t-opts.speed)<250){t+=opts.speed;}debug("calculated timeout: "+t+"; speed: "+opts.speed);if(t!==false){return t;}}return opts.timeout;}$.fn.cycle.next=function(opts){advance(opts,opts.rev?-1:1);};$.fn.cycle.prev=function(opts){advance(opts,opts.rev?1:-1);};function advance(opts,val){var els=opts.elements;var p=opts.$cont[0],timeout=p.cycleTimeout;if(timeout){clearTimeout(timeout);p.cycleTimeout=0;}if(opts.random&&val<0){opts.randomIndex--;if(--opts.randomIndex==-2){opts.randomIndex=els.length-2;}else{if(opts.randomIndex==-1){opts.randomIndex=els.length-1;}}opts.nextSlide=opts.randomMap[opts.randomIndex];}else{if(opts.random){opts.nextSlide=opts.randomMap[opts.randomIndex];}else{opts.nextSlide=opts.currSlide+val;if(opts.nextSlide<0){if(opts.nowrap){return false;}opts.nextSlide=els.length-1;}else{if(opts.nextSlide>=els.length){if(opts.nowrap){return false;}opts.nextSlide=0;}}}}var cb=opts.onPrevNextEvent||opts.prevNextClick;if($.isFunction(cb)){cb(val>0,opts.nextSlide,els[opts.nextSlide]);}go(els,opts,1,val>=0);return false;}function buildPager(els,opts){var $p=$(opts.pager);$.each(els,function(i,o){$.fn.cycle.createPagerAnchor(i,o,$p,els,opts);});opts.updateActivePagerLink(opts.pager,opts.startingSlide,opts.activePagerClass);}$.fn.cycle.createPagerAnchor=function(i,el,$p,els,opts){var a;if($.isFunction(opts.pagerAnchorBuilder)){a=opts.pagerAnchorBuilder(i,el);debug("pagerAnchorBuilder("+i+", el) returned: "+a);}else{a='<a href="#">'+(i+1)+"</a>";}if(!a){return;}var $a=$(a);if($a.parents("body").length===0){var arr=[];if($p.length>1){$p.each(function(){var $clone=$a.clone(true);$(this).append($clone);arr.push($clone[0]);});$a=$(arr);}else{$a.appendTo($p);}}opts.pagerAnchors=opts.pagerAnchors||[];opts.pagerAnchors.push($a);$a.bind(opts.pagerEvent,function(e){e.preventDefault();opts.nextSlide=i;var p=opts.$cont[0],timeout=p.cycleTimeout;if(timeout){clearTimeout(timeout);p.cycleTimeout=0;}var cb=opts.onPagerEvent||opts.pagerClick;if($.isFunction(cb)){cb(opts.nextSlide,els[opts.nextSlide]);}go(els,opts,1,opts.currSlide<i);});if(!/^click/.test(opts.pagerEvent)&&!opts.allowPagerClickBubble){$a.bind("click.cycle",function(){return false;});}if(opts.pauseOnPagerHover){$a.hover(function(){opts.$cont[0].cyclePause++;},function(){opts.$cont[0].cyclePause--;});}};$.fn.cycle.hopsFromLast=function(opts,fwd){var hops,l=opts.lastSlide,c=opts.currSlide;if(fwd){hops=c>l?c-l:opts.slideCount-l;}else{hops=c<l?l-c:l+opts.slideCount-c;}return hops;};function clearTypeFix($slides){debug("applying clearType background-color hack");function hex(s){s=parseInt(s).toString(16);return s.length<2?"0"+s:s;}function getBg(e){for(;e&&e.nodeName.toLowerCase()!="html";e=e.parentNode){var v=$.css(e,"background-color");if(v.indexOf("rgb")>=0){var rgb=v.match(/\d+/g);return"#"+hex(rgb[0])+hex(rgb[1])+hex(rgb[2]);}if(v&&v!="transparent"){return v;}}return"#ffffff";}$slides.each(function(){$(this).css("background-color",getBg(this));});}$.fn.cycle.commonReset=function(curr,next,opts,w,h,rev){$(opts.elements).not(curr).hide();opts.cssBefore.opacity=1;opts.cssBefore.display="block";if(w!==false&&next.cycleW>0){opts.cssBefore.width=next.cycleW;}if(h!==false&&next.cycleH>0){opts.cssBefore.height=next.cycleH;}opts.cssAfter=opts.cssAfter||{};opts.cssAfter.display="none";$(curr).css("zIndex",opts.slideCount+(rev===true?1:0));$(next).css("zIndex",opts.slideCount+(rev===true?0:1));};$.fn.cycle.custom=function(curr,next,opts,cb,fwd,speedOverride){var $l=$(curr),$n=$(next);var speedIn=opts.speedIn,speedOut=opts.speedOut,easeIn=opts.easeIn,easeOut=opts.easeOut;$n.css(opts.cssBefore);if(speedOverride){if(typeof speedOverride=="number"){speedIn=speedOut=speedOverride;}else{speedIn=speedOut=1;}easeIn=easeOut=null;}var fn=function(){$n.animate(opts.animIn,speedIn,easeIn,cb);};$l.animate(opts.animOut,speedOut,easeOut,function(){if(opts.cssAfter){$l.css(opts.cssAfter);}if(!opts.sync){fn();}});if(opts.sync){fn();}};$.fn.cycle.transitions={fade:function($cont,$slides,opts){$slides.not(":eq("+opts.currSlide+")").css("opacity",0);opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts);opts.cssBefore.opacity=0;});opts.animIn={opacity:1};opts.animOut={opacity:0};opts.cssBefore={top:0,left:0};}};$.fn.cycle.ver=function(){return ver;};$.fn.cycle.defaults={fx:"fade",timeout:4000,timeoutFn:null,continuous:0,speed:1000,speedIn:null,speedOut:null,next:null,prev:null,onPrevNextEvent:null,prevNextEvent:"click.cycle",pager:null,onPagerEvent:null,pagerEvent:"click.cycle",allowPagerClickBubble:false,pagerAnchorBuilder:null,before:null,after:null,end:null,easing:null,easeIn:null,easeOut:null,shuffle:null,animIn:null,animOut:null,cssBefore:null,cssAfter:null,fxFn:null,height:"auto",startingSlide:0,sync:1,random:0,fit:0,containerResize:1,pause:0,pauseOnPagerHover:0,autostop:0,autostopCount:0,delay:0,slideExpr:null,cleartype:!$.support.opacity,cleartypeNoBg:false,nowrap:0,fastOnEvent:0,randomizeEffects:1,rev:0,manualTrump:true,requeueOnImageNotLoaded:true,requeueTimeout:250,activePagerClass:"activeSlide",updateActivePagerLink:null,backwards:false};})(jQuery);
(function($){$.fn.cycle.transitions.none=function($cont,$slides,opts){opts.fxFn=function(curr,next,opts,after){$(next).show();$(curr).hide();after();};};$.fn.cycle.transitions.scrollUp=function($cont,$slides,opts){$cont.css("overflow","hidden");opts.before.push($.fn.cycle.commonReset);var h=$cont.height();opts.cssBefore={top:h,left:0};opts.cssFirst={top:0};opts.animIn={top:0};opts.animOut={top:-h};};$.fn.cycle.transitions.scrollDown=function($cont,$slides,opts){$cont.css("overflow","hidden");opts.before.push($.fn.cycle.commonReset);var h=$cont.height();opts.cssFirst={top:0};opts.cssBefore={top:-h,left:0};opts.animIn={top:0};opts.animOut={top:h};};$.fn.cycle.transitions.scrollLeft=function($cont,$slides,opts){$cont.css("overflow","hidden");opts.before.push($.fn.cycle.commonReset);var w=$cont.width();opts.cssFirst={left:0};opts.cssBefore={left:w,top:0};opts.animIn={left:0};opts.animOut={left:0-w};};$.fn.cycle.transitions.scrollRight=function($cont,$slides,opts){$cont.css("overflow","hidden");opts.before.push($.fn.cycle.commonReset);var w=$cont.width();opts.cssFirst={left:0};opts.cssBefore={left:-w,top:0};opts.animIn={left:0};opts.animOut={left:w};};$.fn.cycle.transitions.scrollHorz=function($cont,$slides,opts){$cont.css("overflow","hidden").width();opts.before.push(function(curr,next,opts,fwd){$.fn.cycle.commonReset(curr,next,opts);opts.cssBefore.left=fwd?(next.cycleW-1):(1-next.cycleW);opts.animOut.left=fwd?-curr.cycleW:curr.cycleW;});opts.cssFirst={left:0};opts.cssBefore={top:0};opts.animIn={left:0};opts.animOut={top:0};};$.fn.cycle.transitions.scrollVert=function($cont,$slides,opts){$cont.css("overflow","hidden");opts.before.push(function(curr,next,opts,fwd){$.fn.cycle.commonReset(curr,next,opts);opts.cssBefore.top=fwd?(1-next.cycleH):(next.cycleH-1);opts.animOut.top=fwd?curr.cycleH:-curr.cycleH;});opts.cssFirst={top:0};opts.cssBefore={left:0};opts.animIn={top:0};opts.animOut={left:0};};$.fn.cycle.transitions.slideX=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$(opts.elements).not(curr).hide();$.fn.cycle.commonReset(curr,next,opts,false,true);opts.animIn.width=next.cycleW;});opts.cssBefore={left:0,top:0,width:0};opts.animIn={width:"show"};opts.animOut={width:0};};$.fn.cycle.transitions.slideY=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$(opts.elements).not(curr).hide();$.fn.cycle.commonReset(curr,next,opts,true,false);opts.animIn.height=next.cycleH;});opts.cssBefore={left:0,top:0,height:0};opts.animIn={height:"show"};opts.animOut={height:0};};$.fn.cycle.transitions.shuffle=function($cont,$slides,opts){var i,w=$cont.css("overflow","visible").width();$slides.css({left:0,top:0});opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,true,true);});if(!opts.speedAdjusted){opts.speed=opts.speed/2;opts.speedAdjusted=true;}opts.random=0;opts.shuffle=opts.shuffle||{left:-w,top:15};opts.els=[];for(i=0;i<$slides.length;i++){opts.els.push($slides[i]);}for(i=0;i<opts.currSlide;i++){opts.els.push(opts.els.shift());}opts.fxFn=function(curr,next,opts,cb,fwd){var $el=fwd?$(curr):$(next);$(next).css(opts.cssBefore);var count=opts.slideCount;$el.animate(opts.shuffle,opts.speedIn,opts.easeIn,function(){var hops=$.fn.cycle.hopsFromLast(opts,fwd);for(var k=0;k<hops;k++){fwd?opts.els.push(opts.els.shift()):opts.els.unshift(opts.els.pop());}if(fwd){for(var i=0,len=opts.els.length;i<len;i++){$(opts.els[i]).css("z-index",len-i+count);}}else{var z=$(curr).css("z-index");$el.css("z-index",parseInt(z)+1+count);}$el.animate({left:0,top:0},opts.speedOut,opts.easeOut,function(){$(fwd?this:curr).hide();if(cb){cb();}});});};opts.cssBefore={display:"block",opacity:1,top:0,left:0};};$.fn.cycle.transitions.turnUp=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,false);opts.cssBefore.top=next.cycleH;opts.animIn.height=next.cycleH;});opts.cssFirst={top:0};opts.cssBefore={left:0,height:0};opts.animIn={top:0};opts.animOut={height:0};};$.fn.cycle.transitions.turnDown=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,false);opts.animIn.height=next.cycleH;opts.animOut.top=curr.cycleH;});opts.cssFirst={top:0};opts.cssBefore={left:0,top:0,height:0};opts.animOut={height:0};};$.fn.cycle.transitions.turnLeft=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,false,true);opts.cssBefore.left=next.cycleW;opts.animIn.width=next.cycleW;});opts.cssBefore={top:0,width:0};opts.animIn={left:0};opts.animOut={width:0};};$.fn.cycle.transitions.turnRight=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,false,true);opts.animIn.width=next.cycleW;opts.animOut.left=curr.cycleW;});opts.cssBefore={top:0,left:0,width:0};opts.animIn={left:0};opts.animOut={width:0};};$.fn.cycle.transitions.zoom=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,false,false,true);opts.cssBefore.top=next.cycleH/2;opts.cssBefore.left=next.cycleW/2;opts.animIn={top:0,left:0,width:next.cycleW,height:next.cycleH};opts.animOut={width:0,height:0,top:curr.cycleH/2,left:curr.cycleW/2};});opts.cssFirst={top:0,left:0};opts.cssBefore={width:0,height:0};};$.fn.cycle.transitions.fadeZoom=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,false,false);opts.cssBefore.left=next.cycleW/2;opts.cssBefore.top=next.cycleH/2;opts.animIn={top:0,left:0,width:next.cycleW,height:next.cycleH};});opts.cssBefore={width:0,height:0};opts.animOut={opacity:0};};$.fn.cycle.transitions.blindX=function($cont,$slides,opts){var w=$cont.css("overflow","hidden").width();opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts);opts.animIn.width=next.cycleW;opts.animOut.left=curr.cycleW;});opts.cssBefore={left:w,top:0};opts.animIn={left:0};opts.animOut={left:w};};$.fn.cycle.transitions.blindY=function($cont,$slides,opts){var h=$cont.css("overflow","hidden").height();opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts);opts.animIn.height=next.cycleH;opts.animOut.top=curr.cycleH;});opts.cssBefore={top:h,left:0};opts.animIn={top:0};opts.animOut={top:h};};$.fn.cycle.transitions.blindZ=function($cont,$slides,opts){var h=$cont.css("overflow","hidden").height();var w=$cont.width();opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts);opts.animIn.height=next.cycleH;opts.animOut.top=curr.cycleH;});opts.cssBefore={top:h,left:w};opts.animIn={top:0,left:0};opts.animOut={top:h,left:w};};$.fn.cycle.transitions.growX=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,false,true);opts.cssBefore.left=this.cycleW/2;opts.animIn={left:0,width:this.cycleW};opts.animOut={left:0};});opts.cssBefore={width:0,top:0};};$.fn.cycle.transitions.growY=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,false);opts.cssBefore.top=this.cycleH/2;opts.animIn={top:0,height:this.cycleH};opts.animOut={top:0};});opts.cssBefore={height:0,left:0};};$.fn.cycle.transitions.curtainX=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,false,true,true);opts.cssBefore.left=next.cycleW/2;opts.animIn={left:0,width:this.cycleW};opts.animOut={left:curr.cycleW/2,width:0};});opts.cssBefore={top:0,width:0};};$.fn.cycle.transitions.curtainY=function($cont,$slides,opts){opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,false,true);opts.cssBefore.top=next.cycleH/2;opts.animIn={top:0,height:next.cycleH};opts.animOut={top:curr.cycleH/2,height:0};});opts.cssBefore={left:0,height:0};};$.fn.cycle.transitions.cover=function($cont,$slides,opts){var d=opts.direction||"left";var w=$cont.css("overflow","hidden").width();var h=$cont.height();opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts);if(d=="right"){opts.cssBefore.left=-w;}else{if(d=="up"){opts.cssBefore.top=h;}else{if(d=="down"){opts.cssBefore.top=-h;}else{opts.cssBefore.left=w;}}}});opts.animIn={left:0,top:0};opts.animOut={opacity:1};opts.cssBefore={top:0,left:0};};$.fn.cycle.transitions.uncover=function($cont,$slides,opts){var d=opts.direction||"left";var w=$cont.css("overflow","hidden").width();var h=$cont.height();opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,true,true);if(d=="right"){opts.animOut.left=w;}else{if(d=="up"){opts.animOut.top=-h;}else{if(d=="down"){opts.animOut.top=h;}else{opts.animOut.left=-w;}}}});opts.animIn={left:0,top:0};opts.animOut={opacity:1};opts.cssBefore={top:0,left:0};};$.fn.cycle.transitions.toss=function($cont,$slides,opts){var w=$cont.css("overflow","visible").width();var h=$cont.height();opts.before.push(function(curr,next,opts){$.fn.cycle.commonReset(curr,next,opts,true,true,true);if(!opts.animOut.left&&!opts.animOut.top){opts.animOut={left:w*2,top:-h/2,opacity:0};}else{opts.animOut.opacity=0;}});opts.cssBefore={left:0,top:0};opts.animIn={left:0};};$.fn.cycle.transitions.wipe=function($cont,$slides,opts){var w=$cont.css("overflow","hidden").width();var h=$cont.height();opts.cssBefore=opts.cssBefore||{};var clip;if(opts.clip){if(/l2r/.test(opts.clip)){clip="rect(0px 0px "+h+"px 0px)";}else{if(/r2l/.test(opts.clip)){clip="rect(0px "+w+"px "+h+"px "+w+"px)";}else{if(/t2b/.test(opts.clip)){clip="rect(0px "+w+"px 0px 0px)";}else{if(/b2t/.test(opts.clip)){clip="rect("+h+"px "+w+"px "+h+"px 0px)";}else{if(/zoom/.test(opts.clip)){var top=parseInt(h/2);var left=parseInt(w/2);clip="rect("+top+"px "+left+"px "+top+"px "+left+"px)";}}}}}}opts.cssBefore.clip=opts.cssBefore.clip||clip||"rect(0px 0px 0px 0px)";var d=opts.cssBefore.clip.match(/(\d+)/g);var t=parseInt(d[0]),r=parseInt(d[1]),b=parseInt(d[2]),l=parseInt(d[3]);opts.before.push(function(curr,next,opts){if(curr==next){return;}var $curr=$(curr),$next=$(next);$.fn.cycle.commonReset(curr,next,opts,true,true,false);opts.cssAfter.display="block";var step=1,count=parseInt((opts.speedIn/13))-1;(function f(){var tt=t?t-parseInt(step*(t/count)):0;var ll=l?l-parseInt(step*(l/count)):0;var bb=b<h?b+parseInt(step*((h-b)/count||1)):h;var rr=r<w?r+parseInt(step*((w-r)/count||1)):w;$next.css({clip:"rect("+tt+"px "+rr+"px "+bb+"px "+ll+"px)"});(step++<=count)?setTimeout(f,13):$curr.css("display","none");})();});opts.cssBefore={display:"block",opacity:1,top:0,left:0};opts.animIn={left:0};opts.animOut={left:0};};})(jQuery);
(function($){$.fn.jCarouselLite=function(o){o=$.extend({btnPrev:null,btnNext:null,btnGo:null,mouseWheel:false,auto:null,speed:200,easing:null,vertical:false,circular:true,visible:4,start:0,scroll:1,beforeStart:null,afterEnd:null},o||{});return this.each(function(){var b=false,animCss=o.vertical?"top":"left",sizeCss=o.vertical?"height":"width";var c=$(this),ul=$("ul",c),tLi=$("li",ul),tl=tLi.size(),v=o.visible;if(o.circular){ul.prepend(tLi.slice(tl-v-1+1).clone()).append(tLi.slice(0,v).clone());o.start+=v}var f=$("li",ul),itemLength=f.size(),curr=o.start;c.css("visibility","visible");f.css({overflow:"hidden",float:o.vertical?"none":"left"});ul.css({margin:"0",padding:"0",position:"relative","list-style-type":"none","z-index":"1"});c.css({overflow:"hidden",position:"relative","z-index":"2",left:"0px"});var g=o.vertical?height(f):width(f);var h=g*itemLength;var j=g*v;f.css({width:f.width(),height:f.height()});ul.css(sizeCss,h+"px").css(animCss,-(curr*g));c.css(sizeCss,j+"px");if(o.btnPrev)$(o.btnPrev).click(function(){return go(curr-o.scroll)});if(o.btnNext)$(o.btnNext).click(function(){return go(curr+o.scroll)});if(o.btnGo)$.each(o.btnGo,function(i,a){$(a).click(function(){return go(o.circular?o.visible+i:i)})});if(o.mouseWheel&&c.mousewheel)c.mousewheel(function(e,d){return d>0?go(curr-o.scroll):go(curr+o.scroll)});if(o.auto)setInterval(function(){go(curr+o.scroll)},o.auto+o.speed);function vis(){return f.slice(curr).slice(0,v)};function go(a){if(!b){if(o.beforeStart)o.beforeStart.call(this,vis());if(o.circular){if(a<=o.start-v-1){ul.css(animCss,-((itemLength-(v*2))*g)+"px");curr=a==o.start-v-1?itemLength-(v*2)-1:itemLength-(v*2)-o.scroll}else if(a>=itemLength-v+1){ul.css(animCss,-((v)*g)+"px");curr=a==itemLength-v+1?v+1:v+o.scroll}else curr=a}else{if(a<0||a>itemLength-v)return;else curr=a}b=true;ul.animate(animCss=="left"?{left:-(curr*g)}:{top:-(curr*g)},o.speed,o.easing,function(){if(o.afterEnd)o.afterEnd.call(this,vis());b=false});if(!o.circular){$(o.btnPrev+","+o.btnNext).removeClass("disabled");$((curr-o.scroll<0&&o.btnPrev)||(curr+o.scroll>itemLength-v&&o.btnNext)||[]).addClass("disabled")}}return false}})};function css(a,b){return parseInt($.css(a[0],b))||0};function width(a){return a[0].offsetWidth+css(a,'marginLeft')+css(a,'marginRight')};function height(a){return a[0].offsetHeight+css(a,'marginTop')+css(a,'marginBottom')}})(jQuery);
/* pip small movie layer */
function pipMovieLayer(obj,code,position) {
	if(document.getElementById('pipMovieLayer')) {
		$("#pipMovieLayer").empty();$("#pipMovieLayer").remove();
	}
	$("#wrap .container").append('<div id="pipMovieLayer" class="pip_movielayer" style="top: 0px;"></div>');
	if (code.indexOf("www.youtube.com") != -1) {
		//$("#pipMovieLayer").append('<div class="pip_movie"><div class="close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close"></a></div><iframe  width="613" height="460" src="'+code+'" frameborder="0" allowfullscreen></iframe></div>');
     			if(country=="ww" || country=="gt") {
					if(navigator.userAgent.toLowerCase().indexOf("msie 7") != -1 || navigator.userAgent.toLowerCase().indexOf("msie 6") != -1) {
                    	$("#pipMovieLayer").append('<div class="pip_movie"><div class="close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close"></a></div><iframe  width="613" height="460" scrolling="no" src="/wcm/images/common/upgrade_ie.html" frameborder="0" allowfullscreen></iframe></div>');
					} else {
                    	$("#pipMovieLayer").append('<div class="pip_movie"><div class="close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close"></a></div><iframe  width="613" height="460" scrolling="no" src="'+code+'" frameborder="0" allowfullscreen></iframe></div>');
					}
     			} else {
                    $("#pipMovieLayer").append('<div class="pip_movie"><div class="close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close"></a></div><iframe  width="613" height="460" scrolling="no" src="'+code+'" frameborder="0" allowfullscreen></iframe></div>');
     			}

	} else {
		VideoJS.setupAllWhenReady();
		var tmp_code = '<div class="pip_movie">';
		tmp_code=tmp_code+'	<div class="close"><a href="#"><img src="/media/img/btn_layer_close2.png" alt="close"></a></div>';
		tmp_code=tmp_code+'	<div class="video-js-box">';
		tmp_code=tmp_code+'		<video id="example_video_1" class="video-js" width="640" height="460" controls="controls" preload="auto" poster="'+code+'.jpg">';
		tmp_code=tmp_code+'			<source src="'+code+'.mp4" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />';
		tmp_code=tmp_code+'			<source src="'+code+'.webm" type=\'video/webm; codecs="vp8, vorbis"\' />';
		tmp_code=tmp_code+'			<source src="'+code+'.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />';
		tmp_code=tmp_code+'			<object id="flash_fallback_1" class="vjs-flash-fallback" width="613" height="460" type="application/x-shockwave-flash" data="/wcm/flash/mp4Player.swf">';
		tmp_code=tmp_code+'				<param name="movie" value="/wcm/flash/mp4Player.swf" />';
		tmp_code=tmp_code+'				<param name="autostart" value="false" />';
		tmp_code=tmp_code+'				<param name="allowfullscreen" value="true" />';
		tmp_code=tmp_code+'				<param name="allowScriptAccess" value="sameDomain" />';
		tmp_code=tmp_code+'				<param name="wmode" value="opaque" />';
		tmp_code=tmp_code+'				<param name="flashvars" value="mp4_path='+code+'.mp4&default_volume=0.5&play_delay=0&on_loadbar=1&poster='+code+'.jpg" />';
		tmp_code=tmp_code+'				<img src="'+code+'.jpg" width="613" height="460" alt="Poster Image" title="" />';
		tmp_code=tmp_code+'			</object>';
		tmp_code=tmp_code+'		</video>';
		tmp_code=tmp_code+'		<p class="vjs-no-video"><img src="'+code+'.jpg" width="613" height="460" alt="Poster Image" title="" /></p>';
		tmp_code=tmp_code+'	</div>';
		tmp_code=tmp_code+'</div>';
	}
	 if ($(window).scrollTop() > 75 ){
             $("#pipMovieLayer").css("top",parseInt($(window).scrollTop())+45).append(tmp_code);
        }
	$("#pipMovieLayer .pip_movie .close a").click(function() {
		if (navigator.userAgent.match(/MSIE 8.0/i)){$("#pipMovieLayer iframe").attr("src","about:blank");}
		$("#pipMovieLayer").remove();
		return false;
	});
	return false;
}
/* price layer for es */
$(document).ready(function() {
	$("a.price_info_1").mouseover(function() {$("#price_info_1").show();$(".cubebox .cubelist img.car").css("zIndex",1);$(".cubebox .cubelist .info").css("zIndex",2);});
	$("a.price_info_1").mouseout(function() {$("#price_info_1").hide();$(".cubebox .cubelist img.car").css("zIndex",2);$(".cubebox .cubelist .info").css("zIndex",1);});
	$("a.price_info_2").mouseover(function() {$("#price_info_2").show();});
	$("a.price_info_2").mouseout(function() {$("#price_info_2").hide();});
});
function mobileTopBtn(){
	$('#floating_top').remove();
	if($('.pip').length>0 || $('.general').length>0){
		$('.pip').each(function(index, element) {
			$(this).append('<div class="mobile_topbtn"><a href="#wrap">Top</a></div>'); });
			 $('.general').each(function(index, element) {
			$(this).append('<div class="mobile_topbtn"><a href="#wrap">Top</a></div>'); });
	}else {
		$('.container').append('<div class="mobile_topbtn"><a href="#wrap">Top</a></div>');
	}
	$('.mobile_topbtn').click(function(e) {
		setTimeout(scrollTo, 0, 0, 1); return false;
	});
}
function pipLoadImg(){
	$("img.lazy").lazyload({
		 appear:function(e){
			$(this).addClass('lazyaddbg');
		 },
		 load:function(e){
			$(this).removeClass('lazyaddbg');
		 },
		 skip_invisible : false
	});
};

$(document).ready(function() {

	// cube
	var obj = $(".cubebox .cubelist");
	var len = obj.find(".item").length;
	if(len>1) {
		obj.attr("current", 1).find(".items").css("width", (len*100)+"%").find(".item").css("width", parseInt(100/len)+"%");
	}
	$(".cubebox .prevbtn a").click(function() {
		var ob=$(".cubebox .cubelist");
		var curr = parseInt(ob.attr("current"));
		viewCubeBox(curr-1);
	});
	$(".cubebox .nextbtn a").click(function() {
		var ob=$(".cubebox .cubelist");
		var curr = parseInt(ob.attr("current"));
		viewCubeBox(curr+1);
	});
	function viewCubeBox(va) {
		var ob=$(".cubebox .cubelist");
		if(va>1) $(".cubebox .prevbtn").show();
		else $(".cubebox .prevbtn").hide();
		if(va<ob.find(".item").length) $(".cubebox .nextbtn").show();
		else $(".cubebox .nextbtn").hide();
		$(".tnavi .tnavi_car .cubeitem ul li").removeClass("on").eq(va-1).addClass("on");
		if(va>0 && va<=ob.find(".item").length) {
			cubeStart(va);
			ob.find(".items").animate({"marginLeft": (-100*(va-1))+"%"}, 500, function() {
				ob.attr("current", va);
			});
		}
	}
	$(".tnavi .tnavi_car .cubeitem ul li a").click(function() {
		viewCubeBox(parseInt($(this).parent().index()) + 1);
	});
	$(".tnavi .tnavi_car .information .home .car_logo a").click(function() {
		viewCubeBox(1);
	});
	viewCubeBox(1);

	$(".tnavi .tnavi_car .information .sns a.print").click(function() {
		var url = $(this).attr("href");
		var left = (screen.availWidth-980)/2;
		var top = (screen.availHeight-600)/2;
		var printWin = window.open(url, "print_popup", "width=980, height=600, left="+left+", top="+top+" toobar=no, menubar=no, scrollbars=yes, resizable=no, directories=no, status=no");
		printWin.focus();
		return false;
	});

	// t navi
	var t_navi = $(".tnavi");
	var t_navi_car = t_navi.find(".tnavi_car");
	t_navi_car.find(".information .sns a.share").mouseenter(function() {
		t_navi_car.find(".information .sns span.show").hide();
		t_navi_car.find(".information .sns span.hide").show();
		return false;
	});
	t_navi_car.find(".information .sns a.share").click(function() {
		t_navi_car.find(".information .sns span.show").hide();
		t_navi_car.find(".information .sns span.hide").show();
		return false;
	});
	t_navi_car.find(".information .sns").mouseleave(function() {
		t_navi_car.find(".information .sns span.show").show();
		t_navi_car.find(".information .sns span.hide").hide();
		return false;
	});
	var t_ob = $(".tnavi .tnavi_submenu .shoppingtool");
	t_ob.find("a.tools").toggle(function() {
		t_ob.find("ul").show();
		t_ob.animate({width:"100%"}, 500, function(){
			t_ob.addClass("on");
		});
		return false;
	}, function() {
		var s = parseInt($(".tnavi .tnavi_submenu .shoppingtool a.tools").css("width")) + parseInt($(".tnavi .tnavi_submenu .shoppingtool a.tools").css("paddingLeft")) + parseInt($(".tnavi .tnavi_submenu .shoppingtool a.tools").css("paddingRight")) + 1;
		t_ob.animate({width:s}, 500, function() {
			t_ob.attr("style", "").removeClass("on").find("ul").hide();;
		});
		return false;
	});
	$(".tnavi .tnavi_submenu .submenu ul li a").click(function() {
		var n = $(this).attr("href").split("#")[1];
		var t = $("#"+n).offset().top;
		if(n!="contents_highlights" && n!="contents_review" && n!="contents_accessories" && n!="contents_specification") {
			if($(window).scrollTop() > 544) t = t+95;
			else t = t;
		} else if(n=="contents_highlights") {
			if($(window).scrollTop() > 544) t = t+1;
			else t = t-94;
		} else {
			if($(window).scrollTop() > 544) t = t;
			else t = t;
		}
		$('html,body').stop().animate({scrollTop:t}, {duration:500, easing:'motion'});
		return false;
	});

	// morelist's more button
	$(".pip .morelist .more .morebtn a").click(function() {
		$(this).parent().hide().parent().find("ul").show().find("img.lazy").lazyload({appear:function(e){$(this).addClass('lazyaddbg');}, load:function(e){$(this).removeClass('lazyaddbg');}, skip_invisible : false});
		$(this).parent().parent().find(".closebtn").show();
		return false;
	});
	$(".pip .morelist .more .closebtn a").click(function() {
		$(this).parent().hide().parent().find("ul").hide();
		$(this).parent().parent().find(".morebtn").show();
		return false;
	});

	// morelist's hover line effct
	$(".pip .morelist ul li").mouseenter(function() {
		$(this).find("span.img").append('<div class="line"></div>').find(".line").animate({width:"100%"}, 200);
	}).mouseleave(function() {
		$(this).find("span.img > div").animate({width:"0"}, 100, function() {
			$(this).remove();
		});
	});

	if(navigator.userAgent.toLowerCase().indexOf("iphone") != -1) {
		$(".parallax").css("background-attachment", "scroll");
	}

});
$(window).scroll(function() {
	// parallax
	//if(!isTouchDevice()) {
		$(".parallax").each(function() {
			var s = (parseInt($(window).height()) - 520)/2;
			var n = parseInt($(this).offset().top);
			if($(window).scrollTop() > n-parseInt($(window).height()) && $(window).scrollTop() < n+s) {
				var a = $(window).scrollTop()-$(this).offset().top+parseInt($(window).height());
				var b = 100-parseInt(a*100/parseInt($(window).height()))+7;
				// white space bugfix
				if (b < 0) {
					b = 0;
				} else if (b > 100) {
					b = 100;
				}
				$(this).css("background-position", "50% "+b+"%");
				// we don't need this now
// 				$(this).find("div").css("top", (100-b)*3);
			}
		});
	//}

	// tnavi
	if($("#tnavi").is("div")) {
		var tobj = $("#tnavi");
		if($(window).scrollTop() > 544) {
			if(!tobj.hasClass("isStuck")) {
				tobj.addClass("isStuck");
				$(".contents_highlights").addClass("isStuck");
			}
		} else {
			if(tobj.hasClass("isStuck")) {
				tobj.removeClass("isStuck");
				$(".contents_highlights").removeClass("isStuck");
			}
		}
	}

});


if (!jQuery.event.special.frame) {
// jquery.events.frame.js
// 1.1 - lite
// Stephen Band
//
// Project home:
// webdev.stephband.info/events/frame/
//
// Source:
// http://github.com/stephband/jquery.event.frame

/*
(function(f){function j(c,a){function b(){d.frameCount++;c.call(d)}var d=this,g;this.frameDuration=a||25;this.frameCount=-1;this.start=function(){b();g=setInterval(b,this.frameDuration)};this.stop=function(){clearInterval(g);g=null}}function k(){var c=f.event.special.frame.handler,a=f.Event("frame"),b=this.array,d=b.length;for(a.frameCount=this.frameCount;d--;)c.call(b[d],a)}function h(c,a,b){if(e[a])e[a].array.push(c);else{e[a]=new j(k,b);e[a].array=[c];var d=setTimeout(function(){e[a].start();clearTimeout(d);
d=null},0)}}function i(c,a){for(var b=e[a].array,d=b.length;d--;)if(b[d]===c){b.splice(d,1);break}if(b.length===0){e[a].stop();delete e[a]}}var e={};f.event.special.frame={setup:function(c,a){var b=a.length;if(b)for(;b--;)h(this,a[b],c&&c.frameDuration);else h(this,0,c&&c.frameDuration)},teardown:function(c){var a=c.length;if(a)for(;a--;)i(this,c[a]);else for(var b in e)i(this,b)},handler:function(){f.event.handle.apply(this,arguments)}}})(jQuery);
*/


/*
(function(d,h){function i(a,b){function e(){f.frameCount++;a.call(f)}var f=this,g;this.frameDuration=b||25;this.frameCount=-1;this.start=function(){e();g=setInterval(e,this.frameDuration)};this.stop=function(){clearInterval(g);g=null}}function j(){var a=d.event.special.frame.handler,b=d.Event("frame"),e=this.array,f=e.length;for(b.frameCount=this.frameCount;f--;)a.call(e[f],b)}var c;if(!d.event.special.frame)d.event.special.frame={setup:function(a){if(c)c.array.push(this);else{c=new i(j,a&&a.frameDuration);
c.array=[this];var b=setTimeout(function(){c.start();clearTimeout(b);b=null},0)}},teardown:function(){for(var a=c.array,b=a.length;b--;)if(a[b]===this){a.splice(b,1);break}if(a.length===0){c.stop();c=h}},handler:function(){d.event.handle.apply(this,arguments)}}})(jQuery);
*/

}

// jquery.jparallax.js
// 1.0
// Stephen Band
//
// Project and documentation site:
// webdev.stephband.info/jparallax/
//
// Repository:
// github.com/stephband/jparallax
//
// Dependencies:
// jquery.event.frame
(function(l,t){function y(i){return this.lib[i]}function q(i){return typeof i==="boolean"?i:!!parseFloat(i)}function r(i,b){var k=[q(i.xparallax),q(i.yparallax)];this.ontarget=false;this.decay=i.decay;this.pointer=b||[0.5,0.5];this.update=function(e,a){if(this.ontarget)this.pointer=e;else if((!k[0]||u(e[0]-this.pointer[0])<a[0])&&(!k[1]||u(e[1]-this.pointer[1])<a[1])){this.ontarget=true;this.pointer=e}else{a=[];for(var g=2;g--;)if(k[g])a[g]=e[g]+this.decay*(this.pointer[g]-e[g]);this.pointer=a}}}
function z(i,b){var k=this,e=i instanceof l?i:l(i),a=[q(b.xparallax),q(b.yparallax)],g=0,d;this.pointer=[0,0];this.active=false;this.activeOutside=b&&b.activeOutside||false;this.update=function(h){var j=this.pos,c=this.size,f=[],m=2;if(g>0){if(g===2){g=0;if(d)h=d}for(;m--;)if(a[m]){f[m]=(h[m]-j[m])/c[m];f[m]=f[m]<0?0:f[m]>1?1:f[m]}this.active=true;this.pointer=f}else this.active=false};this.updateSize=function(){var h=e.width(),j=e.height();k.size=[h,j];k.threshold=[1/h,1/j]};this.updatePos=function(){var h=
e.offset()||{left:0,top:0},j=parseInt(e.css("borderLeftWidth"))+parseInt(e.css("paddingLeft")),c=parseInt(e.css("borderTopWidth"))+parseInt(e.css("paddingTop"));k.pos=[h.left+j,h.top+c]};l(window).bind("resize",k.updateSize).bind("resize",k.updatePos);e.bind("mouseenter",function(){g=1}).bind("mouseleave",function(h){g=2;d=[h.pageX,h.pageY]});this.updateSize();this.updatePos()}function A(i,b){var k=[],e=[],a=[],g=[];this.update=function(d){for(var h=[],j,c,f=2,m={};f--;)if(e[f]){h[f]=e[f]*d[f]+a[f];
if(k[f]){j=g[f];c=h[f]*-1}else{j=h[f]*100+"%";c=h[f]*this.size[f]*-1}if(f===0){m.left=j;m.marginLeft=c}else{m.top=j;m.marginTop=c}}i.css(m)};this.setParallax=function(d,h,j,c){d=[d||b.xparallax,h||b.yparallax];j=[j||b.xorigin,c||b.yorigin];for(c=2;c--;){k[c]=o.px.test(d[c]);if(typeof j[c]==="string")j[c]=o.percent.test(j[c])?parseFloat(j[c])/100:v[j[c]]||1;if(k[c]){e[c]=parseInt(d[c]);a[c]=j[c]*(this.size[c]-e[c]);g[c]=j[c]*100+"%"}else{e[c]=d[c]===true?1:o.percent.test(d[c])?parseFloat(d[c])/100:
d[c];a[c]=e[c]?j[c]*(1-e[c]):0}}};this.getPointer=function(){for(var d=i.offsetParent(),h=i.position(),j=[],c=[],f=2;f--;){j[f]=k[f]?0:h[f===0?"left":"top"]/(d[f===0?"outerWidth":"outerHeight"]()-this.size[f]);c[f]=(j[f]-a[f])/e[f]}return c};this.setSize=function(d,h){this.size=[d||i.outerWidth(),h||i.outerHeight()]};this.setSize(b.width,b.height);this.setParallax(b.xparallax,b.yparallax,b.xorigin,b.yorigin)}function s(i){var b=l(this),k=i.data,e=b.data(n),a=k.port,g=k.mouse,d=e.mouse;if(k.timeStamp!==
i.timeStamp){k.timeStamp=i.timeStamp;a.update(w);if(a.active||!g.ontarget)g.update(a.pointer,a.threshold)}if(d){d.update(e.freeze?e.freeze.pointer:a.pointer,a.threshold);if(d.ontarget){delete e.mouse;e.freeze&&b.unbind(p).addClass(k.freezeClass)}g=d}else g.ontarget&&!a.active&&b.unbind(p);e.layer.update(g.pointer)}var n="parallax",x={mouseport:"body",xparallax:true,yparallax:true,xorigin:0.5,yorigin:0.5,decay:0.66,frameDuration:30,freezeClass:"freeze"},v={left:0,top:0,middle:0.5,center:0.5,right:1,
bottom:1},o={px:/^\d+\s?px$/,percent:/^\d+\s?%$/},p="frame."+n,u=Math.abs,w=[0,0];y.lib=v;l.fn[n]=function(i){var b=l.extend({},l.fn[n].options,i),k=arguments,e=this;if(!(b.mouseport instanceof l))b.mouseport=l(b.mouseport);b.port=new z(b.mouseport,b);b.mouse=new r(b);b.mouseport.bind("mouseenter",function(){b.mouse.ontarget=false;e.each(function(){var a=l(this);a.data(n).freeze||a.bind(p,b,s)})});return e.bind("freeze",function(a){var g=l(this),d=
g.data(n),h=d.mouse||d.freeze||b.mouse,j=o.percent.exec(a.x)?parseFloat(a.x.replace(/%$/,""))/100:a.x||h.pointer[0],c=o.percent.exec(a.y)?parseFloat(a.y.replace(/%$/,""))/100:a.y||h.pointer[1];a=a.decay;d.freeze={pointer:[j,c]};d.mouse=new r(b,h.pointer);if(a!==t)d.mouse.decay=a;g.bind(p,b,s)}).bind("unfreeze",function(a){var g=l(this),d=g.data(n);a=a.decay;var h;if(d.freeze){h=d.mouse?d.mouse.pointer:d.freeze.pointer;d.mouse=new r(b);d.mouse.pointer=h;if(a!==t)d.mouse.decay=a;delete d.freeze;g.removeClass(x.freezeClass).bind(p,
b,s)}}).each(function(a){var g=l(this);a=k[a+1]?l.extend({},b,k[a+1]):b;var d=new A(g,a);g.data(n,{layer:d,mouse:new r(a,d.getPointer())})})};l.fn[n].options=x;l(document).ready(function(){l(document).mousemove(function(i){w=[i.pageX,i.pageY]})})})(jQuery);