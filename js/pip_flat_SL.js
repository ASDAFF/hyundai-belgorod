// Bug fix - Ie Flicker
try {document.execCommand('BackgroundImageCache', false, true);} catch(e) {};

// 2015-12
var isMobile = 0;
$(document).ready(function() {
	if (navigator.userAgent.match(/iPhone|iPad|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i)) {
		$(".contents_highlights .main_wrap .main_list ul.view .view3 .view3_1 .slider_wrap .slider_img .img2").css("width", 940);
		$(".contents_highlights .main_wrap .main_list .new_point > div").show();
		isMobile = 1;
	};
});

// pip main text
/*
	$(document).ready(function() {
		if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {

		} else {
			$(".text_play").each(function() {
				if(!$(this).parent().parent().hasClass("contents_highlights")) $(this).find(".pip_title, .text1, .text2").css("top", "300px").attr("ready", "yes").css("opacity", 0);
			});
		}
	});
*/
/*
	$(window).scroll(function() {
		$(".text_play").each(function() {
			var s = parseInt($(window).height())*2/3; // 2/3 up
			var n = parseInt($(this).offset().top);
			if($(window).scrollTop() > n-s) {
				if($(this).find(".text1").attr("ready") == "yes") {
					var obj0 = $(this).find(".pip_title");
					var obj1 = $(this).find(".text1");
					var obj2 = $(this).find(".text2");
					obj0.attr("ready", "");
					obj1.attr("ready", "");
					obj2.attr("ready", "");
					obj0.stop().animate({top:"80px", opacity:1}, 400);
					obj1.stop().delay(200).animate({top:"120px", opacity:1}, 400);
					obj2.stop().delay(300).animate({top:"124px", opacity:1}, 400);
				}
			}
		});
	});
*/

// Highlights
	$(document).ready(function() {
		var _c = $(".pip.contents_highlights"),
		_a = _c.find(".robust_on_style"),
		_list = _a.find(".list > ul > li a"),
		_view = _a.find(".view > ul"),
		m = function(){
			_a.find(".list .thumb0").stop().animate({top:-153, opacity:1},1200,"easeOutCirc");
			_a.find(".list .thumb1").stop().animate({top:-153, opacity:1},1200,"easeOutCirc");
			_a.find(".list .thumb2").stop().animate({top:-153, opacity:1},1200,"easeOutCirc");
			_a.find(".list .thumb3").stop().animate({top:-153, opacity:1},1200,"easeOutCirc",function(){
				_a.addClass("animated");
				bindEvent();
			}); //top 0
		}


// 		if(!$("body").hasClass("mobile")) {
			$(window).scroll(function() {
				if(parseInt($(window).scrollTop()) > parseInt(_a.offset().top)-600 && !_a.find(".thumb1").is(":animated")) {
					if(_a.hasClass("animated")) return false;
					m();
				}
			});
// 		} else {

/*
			bindEvent();
			$(".robust_on_style").find("img").each(function(i){
				var _imgurl =$(this).attr("data-url")
				$(this).attr("src",_imgurl);
				if($(this).parent().is("div.img")){
					$(this).attr("src",_imgurl).attr("width","940").attr("height","300");
				}else if($(this).parent().is("span.img_wrap")){
					$(this).attr("src",_imgurl).attr("width","310").attr("height","300");
				};
			});
*/
// 		}

		function bindEvent() {
			if(!$("body").hasClass("mobile")) {
				_list.mouseenter(function() {
// 					$(this).attr("isOver", 1);
					exeEvent("mouseenter", $(this));
				}).mouseleave(function() {
// 					$(this).attr("isOver", 0);
					exeEvent("mouseleave", $(this));
				});
			}
			_list.unbind("click").bind("click", function() {
				$(this).attr("isClick", 0);
				$(this).attr("isClick", 1);
				exeEvent("click", $(this));
				return false;
			});
			_view.find(".close a").unbind("click").bind("click", function() {
				$(this).attr("isClick", 0);
				$(this).attr("isClick", 1);
				exeEvent("click", $(this));
				return false;
			});
		};
// old
/*
		function exeEvent(e, target){
			if(e=="mouseenter" && !target.find(".cover").is(":animated")){
				target.parent().addClass("on");
				target.find(".img_wrap").stop().animate({width:296,height:296,marginTop:-148,marginLeft:-148},200);
				target.find(".cover").css({display:"block"}).stop().animate({opacity:1},300);
			}else if(e=="mouseleave"){
				target.parent().removeClass("on");
				target.find(".img_wrap").stop().animate({width:306,height:306,marginTop:-153,marginLeft:-153},200);
				target.find(".cover").stop().animate({opacity:0},300);
			}else if(e=="click"){
				var _class = "."+(target.parents("li").attr("class").split(" ")[0]),
					curClass = _view.find(_class);
				if(target.parent().hasClass("close")) {
					_view.removeClass("on");
					curClass.stop().animate({width:"0"},500);
				}else{
					_view.find("li").each(function() {
							$(this).removeClass("on").stop().animate({width:"0px"},500);
					});
					_view.removeClass("on");
					curClass.addClass("on");
					curClass.stop().animate({width:"623px"},500);
				}
			return false;
			};
		};
*/
		function exeEvent(e, target){
			if(e=="click"){
				var _class = "."+(target.parents("li").attr("class").split(" ")[0]),
					curClass = _view.find(_class);
				if(target.parent().hasClass("close")) {
					_view.removeClass("on");
					curClass.stop().animate({width:"0"},500);
				}else{
					_view.find("li").each(function() {
							$(this).removeClass("on").stop().animate({width:"0px"},500);
					});
					_view.removeClass("on");
					curClass.addClass("on");
					curClass.stop().animate({width:"623px"},500);
				}
			return false;
			};
		};

		_c.find('.desc_icon_wrap a').click(function(){
			var _iconidx = $(this).index();
			if ( $(this).hasClass('on')) {
				_c.find('.desc_wrap > div').hide();
				_c.find('.desc_icon_wrap a').removeClass('on');
			} else {
				_c.find('.desc_wrap > div').hide();
				_c.find('.desc_icon_wrap a').removeClass('on');
				$(this).addClass('on');
				_c.find('.desc_wrap > div').eq(_iconidx).show();
			}
			return false;
		});
	});

// Exterior
	$(document).ready(function() {
		var _c = $(".pip.contents_exterior");
		var _list = _c.find(".list_wrap .list");
		var _view = _c.find(".view_wrap .view")
		var _a = _list.find("li a");
		var _thumb = _view.find(".thumb ul li a");
		var _plus = _view.find(".plus_wrap .plus a");
		var _sub = _view.find(".sub_wrap ul li")
		var _old = 0;
		var _time = 5200;
		var _isReady = 1;
		var _isReady2 = 1;
		var _t;
		var _auto_current = -1;
		// init
		_list.find(">li a").each(function() {
			$(this).attr("isOver", 0);
		});
		if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
			_view.find(".thumb ul li .cover").hide();
		} else {
			_view.find(".thumb ul li .cover").css({opacity:0});
		}
		_plus.each(function() {
			$(this).attr("isOver", 0);
			$(this).attr("isClick", 0);
		});
		bindEvent();
		bindListEvent();
		function bindListEvent() {
			_a.unbind("click").mouseenter(function() {
				$(this).attr("isOver", 1);
			}).mouseleave(function() {
				$(this).attr("isOver", 0);
			}).click(function() {
				//var _u = _view.find("> li").eq(_old).find(".plus_wrap .plus");
				//_u.stop(true);
/*
				$('view_wrap *').each(function(){
					$(this).stop(true);
				});
*/
				console.log('list click');
				clearTimeout(_t);
				_isReady=0;
				if($(this).attr("isOver")==1) _isReady2=0;
				var _idx = $(this).parent().index();
				var _dir = "me";
				if (_idx > _old)  _dir="next";
				else if (_idx < _old) _dir="prev";
				else _dir="me";
				var _time2 = 200; // hide plus
				var _time3 = 300; // move thumb to (0,0)
				var _time4 = 300; // hide thumb
				var _time1 = 500; // move view's position
				//var _text1 = $(this).attr("data-text1");
				//var _text2 = $(this).attr("data-text2");
				// unbind Event
				unbindEvent();

				_a.unbind("click").click(function() {return false;});
				// init
				_list.find("li").removeClass("on").eq(_idx).addClass("on");
				if(_dir=="next") {
					_view.find("> li").stop().css({left:"100%"}).eq(_old).css({left:0});
				} else if(_dir=="prev") {
					_view.find("> li").stop().css({left:"-100%"}).eq(_old).css({left:0});
				}
				_sub.find(".close a").trigger("click");
				if(_dir=="next" || _dir=="prev") {
					// hide new thumb
					var _us = _view.find("> li").eq(_idx).find(".plus_wrap .plus a");
					var _ts = _us.find(".cover");
/*
					if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {

					} else {

					}
					if(_idx!=1) {
					} else {
					}
*/

					// hide old thumb
					var _u = _view.find("> li").eq(_old).find(".plus_wrap .plus");
					var _t = _u.find(".cover");
					//_u.stop(true);
					// hide first thumb over
					_view.find("> li").eq(_old).find(".plus_wrap > div").removeClass("on");
					// hide text
					_view.find("> li").eq(_old).find(".subject").css({opacity:1}).stop().animate({opacity:0}, 200);
					_view.find("> li").eq(_idx).find(".subject").css({opacity:0});
					function goList() {
						if(_old!=1) _u.stop().animate({}, _time3);
						else _u.stop().animate({}, _time3);

						if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
						_u.show();

							} else {
								_u.stop().animate({opacity:1}, 600);
							}
						_t.stop().animate({"null":0}, _time3).promise().done(function() {
							_u.parent().eq(0).stop().animate({"null":1}, 1).promise().done(function() {
								// move
								console.log(_dir);
								if(_dir=="next") {
									_view.find("> li").eq(_idx).stop().animate({left:0}, _time1);
									_view.find("> li").eq(_old).stop().animate({left:"-100%"}, _time1);
								} else if(_dir=="prev") {
									_view.find("> li").eq(_idx).stop().animate({left:0}, _time1);
									_view.find("> li").eq(_old).stop().animate({left:"100%"}, _time1);
								}
								//_view.find("> li").eq(_idx).find(".subject").stop().delay(_time1).animate({opacity:1}, 500);

/*
								_us.stop().animate({"null":1}, 600).promise().done(function() {
									// mouseover first thumb

								});
*/
								// show new thumb
								_us.stop().animate({"null":1}, _time1).promise().done(function() {
									if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
										_t.hide();

									}
									_us.eq(0).stop().animate({"null":1}, 50).promise().done(function() {
										_us.stop().animate({"null":1}, 50).promise().done(function() {
											// mouseover first thumb
											_view.find("> li").eq(_idx).find(".plus_wrap > div").eq(0).find("a").trigger("mouseover");
										});
									});
								});
							});
						});

					}
					if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
						_t.hide();
						_u.hide();
						goList();
					} else {
						_u.stop().animate({opacity:0}, 200).promise().done(function() {
							goList();
						});

					}
					_total_time = _time1 + _time2 + (2*(_time3+_time4));
					$(this).stop().animate({"null":1}, _total_time).promise().done(function() {
						// event
						bindEvent();
						bindListEvent();
						_old = _idx;

						_list.find("> li").find("> a .progress").css({width:0});
						_list.find("> li").eq(_idx).find("> a .progress").animate({width:"100%"}, _time);
						$(".wrap").stop().animate({"null":1}, 200).promise().done(function() {
							console.log('autoplay start');
							autoPlay_exterior();
						});
					});
				} else { // first
					// mouseover first thumb
					_view.stop().animate({"null":1}, 100).promise().done(function() {
						_view.find("> li ").eq(0).find(".plus_wrap > div").eq(0).find("a").trigger("mouseover");
					});
					// event
					bindEvent();
					bindListEvent();

					_list.find("> li").find("> a .progress").css({width:0});
					_list.find("> li").eq(_idx).find("> a .progress").animate({width:"100%"}, _time);
					$(".wrap").stop().animate({"null":1}, 200).promise().done(function() {
						console.log('autoplay start');
						autoPlay_exterior();
					});

				}
				return false;
			});
		}
		function bindEvent() {

			_plus.mouseenter(function() {
				$(this).attr("isOver", 1);
				exeEvent("mouseenter", $(this));
			}).mouseleave(function() {
				$(this).attr("isOver", 0);
				exeEvent("mouseleave", $(this));
			}).unbind("click").bind("click", function() {
				_plus.attr("isClick", 0);
				$(this).attr("isClick", 1);
				exeEvent("click", $(this));

				return false;
			});
		}
		function unbindEvent() {
			_thumb.unbind("click").unbind("mouseenter").unbind("mouseleave").unbind("mouseover").unbind("mouseout").click(function() {
				return false;
			});
			_plus.unbind("click").unbind("mouseenter").unbind("mouseleave").unbind("mouseover").unbind("mouseout").click(function() {
				return false;
			});
		}
		function exeEvent(e, _this) {
			if(e=="mouseenter") {
				var _idx = _this.parent().index();
				//_plus.parent().removeClass("on");
				var _time1 = 100;
				if(_this.attr("isOver") == 1) {
					if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
						_this.parent().parent().find(".cover").hide();
						_this.parent().parent().find(".dim").show();
					} else {
						_this.parent().parent().find(".cover").stop().animate({opacity:0}, _time1);
						_this.parent().parent().find(".dim").stop().animate({opacity:1}, _time1);
					}
					_this.stop().animate({"null":1}, _time1).promise().done(function() {
						if(_this.attr("isOver") == 1) {
							if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
								_this.find(".dim").hide();
								_this.find(".cover").show();
							} else {
								_this.find(".dim").stop().animate({opacity:0}, _time1);
								_this.find(".cover").stop().animate({opacity:1}, _time1);
							}
							console.log('enter');
							if(!_this.parent().parent().parent().parent().find(".plus").eq(_idx).hasClass('on'))
								_this.parent().parent().parent().parent().find(".plus").removeClass("on").eq(_idx).addClass("on");
						}
					});
				}
			} else if(e=="mouseleave") {
				var isSub = 0;
				_this.parent().parent().find("> li").each(function() {
					if($(this).find("> a").attr("isClick")==1) isSub = 1;
				});
				if(isSub==1 && _this.attr("isClick") == 0) {
					var _idx = _this.parent().index();
					if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
						_this.parent().parent().find(".cover").hide();
						_this.parent().parent().find(".dim").show();
					} else {
						_this.parent().parent().find(".cover").stop().css({opacity:0});
						_this.parent().parent().find(".dim").stop().css({opacity:1});
					}
					console.log('leave');
					_this.parent().parent().parent().parent().find(".plus").eq(_idx).removeClass("on");
					_this.parent().parent().find("> li").each(function() {
						if($(this).find("> a").attr("isClick")==1) $(this).find("> a").trigger("mouseover");
					});
				} else {
					$(this).find("> a").trigger("mouseover");
				}
			} else if(e=="click") {
				clearTimeout(_t);
				_isReady=0;
				_isReady2=0;
				var _cs = _this.parent().parent().parent().parent().parent();
				var _idx = _this.parent().index();
				_cs.find(".sub_wrap ul li").hide().eq(_idx).css("display", "block");
				_cs.find(".plus_wrap .plus").stop().animate({"null":1}, 600).promise().done(function() {
					_cs.find(".plus_wrap .plus").removeClass("on").eq(_idx).addClass("on");
				});
				if(_cs.index()==1) {
					if(parseInt(_cs.find(".sub_wrap").css("left")) != 0) {
						_cs.find(".sub_wrap").stop().animate({left:0}, 300);
						_cs.find(".car").stop().delay(300).animate({marginLeft:"250px"}, 300);
					}
				} else if ( _cs.index()==2 ) {
					if(parseInt(_cs.find(".sub_wrap").css("left")) != 0) {
						_cs.find(".sub_wrap").stop().animate({right:0}, 300);
						_cs.find(".car").stop().delay(300).animate({marginRight:"240px"}, 300);
					}
				} else {
					if(parseInt(_cs.find(".sub_wrap").css("right")) != 0) {
						_cs.find(".sub_wrap").stop().animate({right:0}, 300);
						_cs.find(".car").stop().delay(300).animate({marginRight:"280px"}, 300);
					}
				}
				return false;
			}
		}
		_sub.find(".close a").click(function() {
			var _p = $(this).parent().parent().parent().parent();
			_p.parent().parent().find(".thumb ul li").eq($(this).parent().parent().index()).find("> a").trigger("mouseover");
			unbindEvent();
			if(_p.parent().parent().index()==1) {
				_p.stop().animate({left:"-1100px"}, 600).promise().done(function() {
					_p.find("ul li").hide();
				});
				_p.parent().find(".car").stop().delay(300).animate({marginLeft:0}, 300);
			} else if ( _p.parent().parent().index()==2 ) {
				_p.stop().animate({right:"-1100px"}, 600).promise().done(function() {
					_p.find("ul li").hide();
				});
				_p.parent().find(".car").stop().delay(600).animate({marginRight:0}, 300);
			} else {
				_p.stop().animate({right:"-1100px"}, 600).promise().done(function() {
					_p.find("ul li").hide();
				});
				_p.parent().find(".car").stop().delay(600).animate({marginRight:0}, 300);
			}
			_thumb.attr("isClick", 0);
			setTimeout(function() {
				bindEvent();
			}, 700);


			return false;
		});

		$(window).scroll(function() {
			if(parseInt($(window).scrollTop()) > parseInt(_a.offset().top)-600 && _isReady==1) {
				_isReady=0;
				if(_isReady2==1) {
					$(".wrap").stop().animate({"null":1}, 100).promise().done(function() { // add delay
						if(_isReady2==1) {
							_auto_current = _auto_current + 1;
							if(_auto_current < 2 ) {
								_list.find("> li").eq(_auto_current).find("> a").trigger("click");
							}
						}
					});
				}
			}
		});

		function autoPlay_exterior() {
			console.log('autoplay');
			console.log(_time);
			console.log(_auto_current);
			if(_isReady2==1) {
				_t = setTimeout(function() {
					if(_isReady2==1) {
						_auto_current = _auto_current + 1;
						// if(_auto_current >= 2 ) return false;
						if(_auto_current >= 2 ) _auto_current = 0;
						bindListEvent();
						_list.find("> li").eq(_auto_current).find("> a").trigger("click");
					}
				}, _time);
			}
		}
	});

	// exterior morelist slider
	$(document).ready(function() {
		var $slider = $('.carousel-wrap.exterior-morelist').find('.carousel-slider'),
		$item = $('.carousel-wrap.exterior-morelist').find('.carousel-item'),
		$prev = $('.carousel-wrap.exterior-morelist').find('.carousel-prev'),
		$next = $('.carousel-wrap.exterior-morelist').find('.carousel-next'),
		$pg = $('.carousel-wrap.exterior-morelist').find('.carousel-paginator ul'),
		$pgItem = $('.carousel-wrap.exterior-morelist .carousel-paginator ul').find('li'),
		$pgItemTpl = '<li><span></span></li>',
		total = $item.length,
		width = $item.width(),
		index = 0,
		speed = 500;

		$slider.width( total * width );
		$prev.hide();
		for(var i=0;i < total; i++) {
			$pg.append($pgItemTpl);
		}
		$pg.find('li').eq(0).addClass('alive');
		function moveSlide(index) {
				$item.removeClass('alive');
				$pg.find('li').removeClass('alive');
			$slider.stop().delay(150).animate({left: -index * width +'px'}, speed, "easeInOutExpo").promise().done(function() {
				$item.eq(index).addClass('alive');
				$pg.find('li').eq(index).addClass('alive');
			});
			if (index === 0) {
				$prev.fadeOut(speed, "easeInOutExpo");
				$next.fadeIn(speed, "easeInOutExpo");
			} else if (index === total - 1){
				$prev.fadeIn(speed, "easeInOutExpo");
				$next.fadeOut(speed, "easeInOutExpo");
			} else {
				$prev.fadeIn(speed, "easeInOutExpo");
				$next.fadeIn(speed, "easeInOutExpo");
			}
		};
		$prev.click(function() {
			index -= 1;
			moveSlide( index );
		});
		$next.click(function() {
			index += 1;
			moveSlide( index );
		});

		//$pgItem.live('click', function() {
		$(document).on('click', '.carousel-wrap.exterior-morelist .carousel-paginator ul li', function() {
			if ($(this).hasClass('alive')) {return false}
				index = $(this).index();
				moveSlide( index );
		});
	});

// Interior
	$(document).ready(function() {
		var _o = $(".pip.contents_interior");
		// section1
			var _s1 = _o.find(".section1");
			_s1.find(".car img").hide().eq(0).show();
			_s1.find(".color .details img").hide().eq(0).show();
			_s1.find(".color ul li a").click(function() {
				var _i = $(this).parent().index();
				_s1.find(".car img").hide().eq(_i).show();
				_s1.find(".color ul li").removeClass("on").eq(_i).addClass("on");
				_s1.find(".color .details ul.detail").hide().eq(_i).show();
				return false;
			}).mouseenter(function() {
				$(this).parent().append('<span class="text"><span>'+$(this).find("img").attr("alt")+'</span><i></i></span>');
			}).mouseleave(function() {
				$(this).parent().find("span.text").remove();
			});
			// _s1.find(".color .details ul.detail li").mouseenter(function() {
			// 	$(this).append('<span class="text"><span>'+$(this).find("span").html()+'</span><i></i></span>');
			// }).mouseleave(function() {
			// 	$(this).find("span.text").remove();
			// });
		// section2
			var _s2 = _o.find(".section2");
			var _sc1 = _s2.find(".scene1");
			var _sc2 = _s2.find(".scene2");

			_s2.find(".scene_wrap .scene_cut .plus a").click(function() {
/*
				if(!_s2.find(".scene_wrap .scene_cut").hasClass("freeze")) {
					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
				}
*/
				var a = $(this).html();
				var b = 0;
				for(var i=0;i<_s2.find(".details > div").length;i++) {
					if(parseInt(_s2.find(".details > div").eq(i).css("right")) == 0) {
						b=1;
					}
				}

				if(b == 0) { // first
					_s2.find(".scene_wrap .offset2").delay(50).animate({marginLeft:"230px"},1000);
// 							jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('unfreeze');
					_s2.find(".details > div").hide().parent().find(".pop_"+a).css("right", "-525px").show().stop().animate({right:"0"}, 500);
				} else {
					_s2.find(".details > div").css("zIndex", "10").stop().animate({right:"-525"}, 500).parent().find(".pop_"+a).show().css("zIndex", "11").stop().animate({right:"0"}, 250);
// 					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('unfreeze');
				}
				_s2.find(".scene_wrap .scene_cut .plus").removeClass("on");
				$(this).parent().addClass("on");
				return false;
			});
			_s2.find(".scene_wrap .scene_offset .details .close a").click(function() {
/*
				if(!_s2.find(".scene_wrap .scene_cut").hasClass("freeze")) {
					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
				}
*/
				_s2.find(".scene_wrap .offset2").animate({marginLeft:"490px"},300);
				_s2.find(".scene_wrap .scene_offset .scene_cut").animate({left:"0", marginLeft:"-320px"},300);
				_s2.find(".details > div").animate({right:"-525px"}, 300);
				_s2.find(".scene_wrap .scene_cut .plus").removeClass("on");
				return false;
			});

	});
/*
	jQuery(document).ready(function(){
		if(navigator.userAgent.indexOf('MSIE 8.0')>0) {
			jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').parallax({ // sc_wwpip_flat.js
				mouseport: jQuery(".pip.contents_interior .section2 .scene_wrap .offset2"),
				yparallax: false,
				decay: 0.6
			});
		} else {
			jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').parallax({ // sc_wwpip_flat.js
				mouseport: jQuery(".pip.contents_interior .section2 .scene_wrap .offset2"),
				yparallax: false,
				decay: 0.8
			});
		}
		jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
	});
*/

// Performance
	$(document).ready(function() {
		var _m =$(".pip.contents_performance .menu ul li");
		var _c =$(".pip.contents_performance .engine_list ul li");
		var _time1;
		var _time2;
		bindMenu();
		function bindMenu() {
			_m.find("a").bind("click", function() {
				var _i=$(this).parent().index();
				_m.removeClass("on").eq(_i).addClass("on");
				_c.hide().eq(_i).show();
				console.log(_i);
				console.log(_c);
				drawGraph(_i);
				var _m1 = _c.eq(_i).find(".max dl.max_power dd strong");
				var _m2 = _c.eq(_i).find(".max dl.max_toque dd strong");
				if(!_m1.attr("value")) _m1.attr("value", _m1.html());
				if(!_m2.attr("value")) _m2.attr("value", _m2.html());
				_m1.html(parseInt(_m1.attr("value"))-100);
				_m2.html(parseInt(_m2.attr("value"))-100);
				numberUp1(_m1, _m1.attr("value"), _i);
				numberUp2(_m2, _m2.attr("value"), _i);
				_m.find("a").unbind("click").bind("click", function() {return false;});
				return false;
			});
		}
		function drawGraph(va) {
			var _c = $(".pip.contents_performance .engine_list ul li");
			var _t = 1200;
			if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {
				_c.eq(va).find(".graph .pos .text").hide();
				_c.eq(va).find(".graph .pos").css({width:0}).animate({width:"470px"}, 1200, function() {
					_c.eq(va).find(".graph .pos .text").show();
				});
			} else {
				_c.eq(va).find(".graph .pos .text").hide().css({opacity:0});
				_c.eq(va).find(".graph .pos").css({width:0, opacity:0}).animate({width:"470px", opacity:1}, 1200, function() {
					_c.eq(va).find(".graph .pos .text").show().animate({opacity:1}, 300);
				});
			}
		}
		function numberUp1(obj, va, _idx) {
			if(parseInt(obj.html()) < va) {
				obj.html(parseInt(obj.html())+1);
				_time1=setTimeout(function(){numberUp1(obj, va, _idx)}, 7);
			} else {
				clearTimeout(_time1);
				_m.find("a").unbind("click").bind("click", bindMenu());
			}
		}
		function numberUp2(obj, va, _idx) {
			if(parseInt(obj.html()) < va) {
				obj.html(parseInt(obj.html())+1);
				_time2=setTimeout(function(){numberUp2(obj, va, _idx)}, 7);
			} else {
				clearTimeout(_time2);
			}
		}

		var _r = $(".pip.contents_performance .sub_contents");//
		var _rl = _r.find(".list ul li");
		var _rv = _r.find(".view ul li");
		_rl.find("a").click(function() {
			var n = $(this).parent().index();
			_rl.removeClass("on").eq(n).addClass("on");
			_rv.removeClass("on").eq(n).addClass("on");
			return false;
		});
	});

// Safety
	// slider

	$(document).ready(function() {
		var $slider = $('.safety_slider-wrap').find('.safety_slider'),
		$item = $slider.find('.safety_slider-item'),
		$prev = $('.safety_slider-wrap').find('.safety_slider-prev'),
		$next = $('.safety_slider-wrap').find('.safety_slider-next'),
		$pg = $('.safety_slider-wrap').find('.safety_slider-paginator'),
		$pgItem = $pg.find('li'),
		total = $item.length,
		width = $item.width(),
		index = 0,
		speed = 500;
		$item.eq(0).fadeIn(speed, "easeInOutExpo");
		function fadeMe(index) {
			if (index === $pg.find('li.alive').index()) {return}
			$slider.find('.safety_slider-item.alive').fadeOut(speed, "easeInOutExpo").removeClass('alive');
			$item.eq(index).fadeIn(speed, "easeInOutExpo").addClass('alive');
			$pg.find('li.alive').removeClass('alive');
			$pg.find('li').eq(index).addClass('alive');
		};
		$prev.click(function() {
			index -= 1;
			fadeMe( index = (index < 0) ? total - 1 : index );
		});
		$next.click(function() {
			index += 1;
			fadeMe( index = (index > total - 1) ? 0 : index );
		});
		$pgItem.click(function() {
			index = $(this).index();
			fadeMe( index );
		});
	});


// Convenience
	$(document).ready(function() {
		// popup
		var $popupList = $('.contents_convenience').find('.list_wrap'),
		$popupListItem = $popupList.find('li.list'),
		$popupWrpSlider = $('.contents_convenience').find('.convenience__slider-cut'),
		$popupWrp = $popupWrpSlider.find('.view_wrap'),
		$popupItem = $popupWrp.find('li.view'),
		$slideNav = $popupWrpSlider.find('.slide_nav');
		$prevPopup = $slideNav.find('.slider-prev'),
		$nextPopup = $slideNav.find('.slider-next'),
		$paginator = $slideNav.find('.paginator'),
		total = $popupItem.length,
		width = $popupItem.width(),
		speed = 500,
		index = 0;

		$popupWrp.width( total * width );
		$paginator.text(index + 1 + ' / ' + total );
		// showin popup
		$popupListItem.click(function() {
			$(this).find('a').unbind('click');
			$popupWrpSlider.fadeIn(speed, "easeInOutExpo");
			index = $(this).index();
			moveSlide(index);
			return false;
		});
		// slide it!
		function moveSlide(index) {
			$popupItem.removeClass('alive');
			$popupWrp.stop().animate({left: -index * width +'px'}, speed, "easeInOutExpo").promise().done(function() {
				$popupItem.eq(index).addClass('alive');
				$paginator.text(index + 1 + ' / ' + total );
			});
		};
		$prevPopup.click(function() {
			index -= 1;
			moveSlide(index = (index < 0) ? total - 1 : index);
		});
		$nextPopup.click(function() {
			index += 1;
			moveSlide(index = (index > total - 1) ? 0 : index);
		});
		$popupWrpSlider.find(".close a").click(function() {
			$popupWrpSlider.fadeOut(speed, "easeInOutExpo");
			return false;
		});

	});
	// convenience morelist slider
	$(document).ready(function() {
		var $slider = $('.carousel-wrap.convenience-morelist').find('.carousel-slider'),
		$item = $('.carousel-wrap.convenience-morelist').find('.carousel-item'),
		$prev = $('.carousel-wrap.convenience-morelist').find('.carousel-prev'),
		$next = $('.carousel-wrap.convenience-morelist').find('.carousel-next'),
		$pg = $('.carousel-wrap.convenience-morelist').find('.carousel-paginator ul'),
		$pgItem = $('.carousel-wrap.convenience-morelist .carousel-paginator ul').find('li'),
		$pgItemTpl = '<li><span></span></li>',
		total = $item.length,
		width = $item.width(),
		index = 0,
		speed = 500;

		$slider.width( total * width );
		$prev.hide();
		for(var i=0;i < total; i++) {
			$pg.append($pgItemTpl);
		}
		$pg.find('li').eq(0).addClass('alive');
		function moveSlide(index) {
				$item.removeClass('alive');
				$pg.find('li').removeClass('alive');
			$slider.stop().delay(150).animate({left: -index * width +'px'}, speed, "easeInOutExpo").promise().done(function() {
				$item.eq(index).addClass('alive');
				$pg.find('li').eq(index).addClass('alive');
			});
			if (index === 0) {
				$prev.fadeOut(speed, "easeInOutExpo");
				$next.fadeIn(speed, "easeInOutExpo");
			} else if (index === total - 1){
				$prev.fadeIn(speed, "easeInOutExpo");
				$next.fadeOut(speed, "easeInOutExpo");
			} else {
				$prev.fadeIn(speed, "easeInOutExpo");
				$next.fadeIn(speed, "easeInOutExpo");
			}
		};
		$prev.click(function() {
			index -= 1;
			moveSlide( index );
		});
		$next.click(function() {
			index += 1;
			moveSlide( index );
		});
		//$pgItem.live('click', function() {
		$(document).on('click', '.carousel-wrap.convenience-morelist .carousel-paginator ul li', function() {
			index = $(this).index();
			moveSlide( index );
		});
	});
	// specs listin
	$(document).ready(function() {
		var $listItemBtn = $('.specs-listing_wrap .specs-listing .listing-item > div'),
		$listItemOpnAll = $('.title_wrap .open-all'),
		isOpen;
		$listItemBtn.click(function(e) {
			$(this).toggleClass('opened');

			$('.specs-listing_wrap .specs-listing .listing-item').each(function(){
 				if ($(this).find('div').hasClass('opened')){isOpen=0; return false;} else {isOpen=1}
			});
			if (isOpen) {
				$listItemOpnAll.removeClass('isWillClose').text('Развернуть все');
			} else {
				$listItemOpnAll.addClass('isWillClose').text('Свернуть все');
			}
		});
		$listItemOpnAll.click(function(e) {
			e.preventDefault();
			$listItemBtn.each(function(){
				if ($(this).hasClass('opened')){isOpen = 1}
			});
			if (isOpen) {
				$listItemOpnAll.removeClass('isWillClose').text('Развернуть все');
				$listItemBtn.removeClass('opened')
			} else {
				$listItemOpnAll.addClass('isWillClose').text('Свернуть все');
				$listItemBtn.addClass('opened')
			}
			isOpen = 0;
		});
	});
	// gallery
	$(document).ready(function() {
	// thumbs listing
		// define global variables
		var thumbs = $('#all-gallery-items li'),
		$slider = $('.gallery-list-wrap .gallery-list-slider'),
		$sliderItem = $slider.find('ul'),
		$sliderSubItems = $slider.find('li'),
		$next = $('.gallery-list-wrap .slide-next'),
		$prev = $('.gallery-list-wrap .slide-prev'),
		$pg = $('.gallery-list-wrap .slide-paginator ul'),
		$pgItem,
		holderW = 948,
		speed = 500,
		total = $sliderItem.length + 1,
		viewTotal,
		pgItemTpl = '<li><span></span></li>';

		// define global variables
		var _aArr = $slider.find('ul'),
		_bArr,
		$viewWrap = $('.gallery-view-wrap'),
		$viewHolder = $('.gallery-view-holder'),
		$viewSlider = $viewHolder.find('.gallery-view-slider'),
		$view = $viewSlider.find('ul'),
		$viewItem,
		$pagination = $viewHolder.find('.pagination'),
		$paginationC = $pagination.find('.count'),
		$nextG = $pagination.find('.next'),
		$prevG = $pagination.find('.prev'),
		$viewClose = $viewHolder.find('.view-close'),
		_imgs = 0,
		index = 0,
		indexG = 0,
		_saveScroll,
		type = 'all',
		$typeTogglers = $('.gallery_wrap .thumbs-toggler').find('a');

		// render slider
		renderListSlides(type);
		renderView();

		// define functions
		// define rendering fns first
		function renderListSlides(type) {
			var _ilCount = 0;

			thumbs.each(function(){
				if (type === 'all') {
					_ilCount++;
					$(this).clone().hide().appendTo($slider.find('ul').eq(-1)).fadeIn(speed);
				} else if (type === 'exterior') {
					if ( $(this).find('img').data('type') === type ) {
						_ilCount++;
						$(this).clone().hide().appendTo($slider.find('ul').eq(-1)).fadeIn(speed);
					}
				} else if ( type === 'interior' && $(this).find('img').data('type') === type ) {
					$(this).clone().hide().appendTo($slider.find('ul').eq(-1)).fadeIn(speed);
					_ilCount++;
				}

				if (_ilCount > 11) {
					$slider.append('<ul class="clearfix"></ul>');
					_ilCount = 0;
				}

			});

			var _slides = $slider.find('ul');
			$slider.width(holderW * _slides.length);
			_slides.eq(0).addClass('alive').css('display', 'block');
			for (var i=0;i < _slides.length; i++) {
				$pg.append(pgItemTpl);
			}
			if (_slides.length < 2) {
				$prev.addClass('dead');
				$next.addClass('dead');
			} else {
				$prev.removeClass('dead');
				$next.removeClass('dead');
			}
			$pgItem = $pg.find('li');
			$pgItem.eq(0).addClass('alive');
			$sliderSubItems = $('.gallery-list-slider').find('li');
		};
		function renderView() {
			_aArr = $slider.find('ul'),
			_bArr,
			$view = $viewSlider.find('ul'),
			_imgs = 0;

			_aArr.each(function(){
				_bArr = $(this).find('li');
				_bArr.each(function(){
					var _imgSrc = $(this).find('img').data('href'),
// 					_st = '<li><img src="/media/images/common/transparent.gif" data-original='+_imgSrc+' class="lazy" width="200" height="100"></li>';
					_st = '<li><img src="'+_imgSrc+'"></li>';
					$view.append(_st);
				});
			});

			// conf slider
			$viewItem = $view.find('li');
			viewTotal = $viewItem.length;
			$paginationC.text(indexG + 1 + ' / ' + viewTotal);
			var _slides = $view.find('li');
			_slides.eq(0).addClass('alive').css('display', 'block');
		};

		// define sliders fns
		function fadeMe(index) {
			var _slides = $slider.find('ul');
			$slider.find('ul.alive').fadeOut(speed, "easeInOutExpo").removeClass('alive');
			_slides.eq(index).fadeIn(speed, "easeInOutExpo").addClass('alive');
			$pg.find('li.alive').removeClass('alive');
			$pg.find('li').eq(index).addClass('alive');
		};
		function fadeMeG(indexG) {
			var _slides = $view.find('li'),
			_tempLink = _slides.eq(indexG).find('img').attr('src');
			$view.find('li.alive').fadeOut(speed, "easeInOutExpo").removeClass('alive');
			_slides.eq(indexG).fadeIn(speed, "easeInOutExpo").addClass('alive');
			$paginationC.text(indexG + 1 + ' / ' + viewTotal);
			$('.dl-img').attr('href', _tempLink);
		};


		// bind events
		// gallery
		$prevG.click(function() {
			indexG -= 1;
			fadeMeG( indexG = (indexG < 0) ? viewTotal - 1 : indexG );
		});
		$nextG.click(function() {
			indexG += 1;
			fadeMeG( indexG = (indexG > viewTotal - 1) ? 0 : indexG );
		});
		// list
		$prev.click(function() {
			if ($(this).hasClass('dead')){return false}
			index -= 1;
			fadeMe( index = (index < 0) ? total - 1 : index );
		});
		$next.click(function() {
			if ($(this).hasClass('dead')){return false}
			index += 1;
			fadeMe( index = (index > total - 1) ? 0 : index );
		});
// 		$pgItem.live('click', function() {
		$(document).on('click', '.gallery-body .gallery-list-holder .slide-paginator ul li', function() {
			if (!$(this).hasClass('alive')) {
				index = $(this).index();
				fadeMe(index);
			}
		});
		//$sliderSubItems.live('click', function() {
		$(document).on('click', '.gallery-list-slider > ul li', function(){
			_saveScroll = $(window).scrollTop();
			// with fix
			$viewWrap.fadeIn(speed, function(){
// 			$('.wrap').css('height', '100%');
			});

// 			$('.wrap').stop().animate({null:5},100).promise().done(function(){$(this).css('height', '100%')});
			$view.find('li.alive').hide().removeClass('alive');
			var _href = $(this).find('img').data('href');

			$('.gallery-view-wrap div .gallery-view-slider > ul li').each(function () {
				var _th = $(this).find('img').attr('src');
				if (_th === _href) { indexG = $(this).index() };
				console.info(_th, ' : ', _href);
			});
			console.info($(this));
			fadeMeG(indexG);
		});
		$viewClose.click(function() {
			$('.wrap').css('height', '');
			$viewWrap.fadeOut(speed);
			$(window).scrollTop(_saveScroll);
			return false;
		});
		$typeTogglers.click(function() {
			if ($(this).hasClass('alive')){return false}
					type = $(this).data('type');
					$typeTogglers.removeClass('alive');
					$(this).addClass('alive');
			// clean
				$slider.find('li').fadeOut(speed);
					$view.empty();
					$pg.empty();
				$slider.stop().animate({null:5},speed).promise().done(function(){
					$slider.empty();
					$slider.append('<ul class="clearfix"></ul>');
					// change
					renderListSlides(type);
					renderView();

				});
			return false;
		});
	});


	// page nav
	$(document).ready(function() {
		var speedScrt = 500,
		scr = 0;
		// scroll values hook
		$(window).scroll(function() {
			scr = parseInt($(window).scrollTop());
			if (scr > 579) {
				$('.top-menu__wrap').addClass('fixedTop');
			} else {
				$('.top-menu__wrap').removeClass('fixedTop');
			}
			speedScrt = (scr !==542 )?500 : 0;

			if( $('.content-type__explore').hasClass('on') ) {

				$('.side-menu li span').each(function () {
			        var currLink = $(this);
			        var refElement = $(currLink.attr("data-href"));
			        if (refElement.position().top-25 <= scr && refElement.position().top + refElement.height()  > scr+25) {
			            currLink.addClass("on");
			        }
			        else {
			            currLink.removeClass("on");
			        };
				});
			}
		});
		// side menu
		$('.side-menu li span').click(function(){
			var trgt = $(this).attr("data-href"),
			$trgt = $(trgt).find('.pip_cont');

			if( $('.content-type__explore').hasClass('on') ) {
				trgtOffs =  $trgt.offset().top-95;
				$('html,body').stop().animate({scrollTop:trgtOffs}, speedScrt, 'easeInOutExpo');
			} else {
				$('a.main-toggler__explore').trigger('click')
				$(this).stop().animate({null:500},500).promise().done(function(){
					trgtOffs = $trgt.offset().top-95;
					$('html,body').stop().animate({scrollTop:trgtOffs}, 500, 'easeInOutExpo');
				});
			}
		});
		// top menu
		var $menu = $('.top-menu .cubeitem').find('ul'),
		$menuItem = $menu.find('li'),
		$menuLink = $menuItem.find('a.main-toggler');
		$menuLink.click(function(e){
			e.preventDefault();
			var trgt = $(this).data("href").replace('#', ''),
			$trgt = $('.'+trgt),
			$trgts = $('.container .content-type'),
			self = this;
			//go
			$('html,body').stop().animate({scrollTop:542}, speedScrt, 'easeInOutExpo', function(){
				if (!$(self).parent('li').hasClass('on')) {
					$menuItem.removeClass('on');
					$(self).parent('li').addClass('on');
					$('.side-menu li span').removeClass('on');
					$trgts.fadeOut(500).removeClass('on');
					$trgt.delay(400).fadeIn(800).addClass('on');
				}
			});
		});
	});
	// prefooter car slider
	$(document).ready(function() {
		var $slider = $('.promo-slider_wrap').find('.promo-slider'),
		$item = $slider.find('li'),
		$prev = $('.promo-slider_wrap .slider-prev'),
		$next = $('.promo-slider_wrap .slider-next'),
		total = $item.length,
		width = $item.width()+8,
		slideScopes = 6,
		index = 0,
		speed = 500;
		$slider.width( total * width );
// 		$prev.hide();
		function moveSlide(index) {
// 			console.log(index,' : ',total)
// 				$item.removeClass('alive');
			$slider.stop().animate({left: -index * width +'px'}, speed, "easeInOutExpo");

		};
		$prev.click(function() {
			index -= 1;
			moveSlide(index = (index < 0) ? total - slideScopes : index);
		});
		$next.click(function() {
			index += 1;
			moveSlide(index = (index > total - slideScopes) ? 0 : index);
		});
		$(window).resize(function(){
// 			if ( $(this).width() )
			slideScopes = ($(this).width() < 1100) ? 5 : 6;
			console.log(slideScopes);
		});
	});
	// 360 scripts
/*
	$(document).ready(function() {
		// vars
		var $colSelect = $('.view-360-color-selector'),
		$colSelectList = $('.view-360-color-selector').find('ul'),
		spritespinInit = function(framesSrc) {
			$('.spritespin').spritespin({
				source: framesSrc,
				width: 700,
				height: 316,
				frame: 30,
				sense: -1,
				mods: ['drag', '360'],
				animate: false,
				module: null,
				reverse: false,
				scrollThreshold: 500
			});
		},
		framePath = '/media/images/360/solaris/Garnet/',
 		framesSrc = SpriteSpin.sourceArray(framePath + '/{frame}.png', { frame: [1,36], digits: 2 });
//  		spritespinInit(framesSrc);
		// will use the first item as default
		$colSelect.find('li').eq(0).addClass('current');
		// process el clicks
		$colSelect.on('click', 'li', function(e) {
			// checkin target; turn back if target has been already selected
			if ($(e.target).data('color') === $colSelectList.find('.current').data('color')) {
				return false
			} else {
				$colSelect.find('.current').removeClass('current');
				$(this).addClass('current');
				// try to reinit spritespin:
				// get new sources
				framePath = $(this).data('color');
				framesSrc = SpriteSpin.sourceArray('/media/images/360/solaris/' + framePath + '/{frame}.png', { frame: [1,36], digits: 2 });
				// init plugin
				spritespinInit(framesSrc);
			}
		});
*/
		// close menu onclick outside
/*
		$('body').on('click', function(e) {
			if ($colSelect.has(e.target).length === 0) {
				$colSelect.removeClass('dropped').stop().animate({height: colSelectHm}, speed, 'easeInOutExpo');
			} else {
				return false;
			};
		});
*/

		// show 360 content
/*
		$('.view-360_toggler').click(function(e){
			e.preventDefault();
			$(this).toggleClass('alive');
			$('.item_wrap img.car').fadeToggle(500);
			$('.item_wrap .view-360_wrap').fadeToggle(500);
		});
	});
*/

	$(document).ready(function() {
		$('.video_link *').click(function(e){
			e.preventDefault();
			$(".videoFrame").attr("src", $('.video_link').attr('data-src'));
			$(".videoPopup").fadeIn();
		});

		$('.videoPopup .closeButton').click(function(e) {
			e.preventDefault();
			$(".videoP").attr("src",'');
			$(".videoPopup").fadeOut();
			$(".videoFrame").attr("src", '');
		});
	});
	// additional
	// modified jsscrollpane
	$(document).ready(function() {
		$('.scroll-pane').jScrollPane({
			horizontalDragMinWidth: 360,
			horizontalDragMaxWidth: 360,
			autoReinitialise: true,
			autoReinitialiseDelay: 5000
		});
	});

/*
	$(document).ready(function(){
		var $video = $('#video'),
		$videoExecute = $('.solaris-hny-video__overlay div');
		$video.css('opacity',0);
		$videoExecute.click(function(e){
			$(this).parent().fadeOut(800);
			$video[0].play();
			$video.animate({opacity: 1}, 800);
			$video.attr('controls', 'controls');
		})
	});
*/