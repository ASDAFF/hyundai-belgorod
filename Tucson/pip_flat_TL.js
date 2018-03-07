try {document.execCommand('BackgroundImageCache', false, true);} catch(e) {};

var isMobile = 0;
$(document).ready(function() {
	if (navigator.userAgent.match(/iPhone|iPad|iPod|Android|Windows CE|BlackBerry|Symbian|Windows Phone|webOS|Opera Mini|Opera Mobi|POLARIS|IEMobile|lgtelecom|nokia|SonyEricsson/i)) {
		$(".contents_highlights .main_wrap .main_list ul.view .view3 .view3_1 .slider_wrap .slider_img .img2").css("width", 940);
		$(".contents_highlights .main_wrap .main_list .new_point > div").show();
		isMobile = 1;
	};
});

// Highlights
	$(document).ready(function() {
		var _c = $(".pip.contents_highlights"),
		_a = _c.find(".robust_on_style"),
		_t = _a.find(".subject"),
		_list = _a.find(".list > ul > li a"),
		_view = _a.find(".view > ul"),
		m = function(){
			_a.find(".list .thumb1").stop().animate({top:0},1200,"easeOutCirc");
			_a.find(".list .thumb2").stop().animate({left:870},1200,"easeOutCirc");
			_a.find(".car").stop().animate({left:105},1200,"easeOutCirc",function(){
				_a.addClass("animated");
			});
			_t.delay(600).animate({opacity:1},700,function(){
				bindEvent();
			});
		}

		if(!$("body").hasClass("mobile")) {
			_t.css({opacity:0,visibility:"visible"});
			$(window).scroll(function() {
				if(parseInt($(window).scrollTop()) > parseInt(_a.offset().top)-600 && !_a.find(".thumb1").is(":animated")) {
					if(_a.hasClass("animated")) return false;
					m();
				}
			});
		} else {
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
		}

		function bindEvent() {
			if(!$("body").hasClass("mobile")) {
				_list.mouseenter(function() {
					$(this).attr("isOver", 1);
					exeEvent("mouseenter", $(this));
				}).mouseleave(function() {
					$(this).attr("isOver", 0);
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

		function exeEvent(e, target){
			if(e=="mouseenter" && !target.find(".cover").is(":animated")){
				target.parent().addClass("on");
				target.find(".img_wrap").stop().animate({width:310,height:260,marginTop:-130,marginLeft:-155},200);
				target.find(".cover").css({display:"block"}).stop().animate({opacity:1},300);
			}else if(e=="mouseleave"){
				target.parent().removeClass("on");
				target.find(".img_wrap").stop().animate({width:410,height:360,marginTop:-180,marginLeft:-205},200);
				target.find(".cover").stop().animate({opacity:0},300);
			}else if(e=="click"){
				var _class = "."+(target.parents("li").attr("class").split(" ")[0]),
					curClass = _view.find(_class);
				if(target.parent().hasClass("close")) {
					_view.removeClass("on");
					curClass.stop().animate({width:"0"},500);
					if(!$("body").hasClass("mobile")){
						_a.find(".car").stop().animate({left:105},1000,"easeOutCirc");
					}
				}else{
					var _car = _view.find(_class).index() == 0 ? -80 : 300;
					_view.removeClass("on");
					curClass.addClass("on");
					curClass.stop().animate({width:"100%"},500);
					if(!$("body").hasClass("mobile")){
						_a.find(".car").stop().animate({left:_car},1000,"easeOutCirc");
					}
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
					if(navigator.appVersion.indexOf("MSIE 7.")!=-1 || navigator.appVersion.indexOf("MSIE 8.")!=-1) {

					} else {

					}
					if(_idx!=1) {
					} else {
					}

					// hide old thumb
					var _u = _view.find("> li").eq(_old).find(".plus_wrap .plus");
					var _t = _u.find(".cover");
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
								if(_dir=="next") {
									_view.find("> li").eq(_idx).stop().animate({left:0}, _time1);
									_view.find("> li").eq(_old).stop().animate({left:"-100%"}, _time1);
								} else if(_dir=="prev") {
									_view.find("> li").eq(_idx).stop().animate({left:0}, _time1);
									_view.find("> li").eq(_old).stop().animate({left:"100%"}, _time1);
								}
								_view.find("> li").eq(_idx).find(".subject").stop().delay(_time1).animate({opacity:1}, 500);

								_us.stop().animate({"null":1}, 600).promise().done(function() {
									// mouseover first thumb

								});
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
						_u.stop().animate({opacity:0}, 400).promise().done(function() {
							goList();
						});

					}
					_total_time = _time1 + _time2 + (2*(_time3+_time4));
					$(this).stop().animate({"null":1}, _total_time).promise().done(function() {
						// event
						bindEvent();
						bindListEvent();
						_old = _idx;
						// animate progress
						_list.find("> li").find("> a .progress").css({width:0});
						_list.find("> li").eq(_idx).find("> a .progress").animate({width:"100%"}, _time);
						$(".wrap").stop().animate({"null":1}, 200).promise().done(function() {
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
					// animate progress
					_list.find("> li").find("> a .progress").css({width:0});
					_list.find("> li").eq(_idx).find("> a .progress").animate({width:"100%"}, _time);
					$(".wrap").stop().animate({"null":1}, 200).promise().done(function() {
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
				_plus.parent().removeClass("on");
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
						_cs.find(".car").stop().delay(300).animate({marginRight:"410px"}, 300);
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
				_p.parent().find(".car").stop().delay(300).animate({marginRight:0}, 300);
			} else {
				_p.stop().animate({right:"-1100px"}, 600).promise().done(function() {
					_p.find("ul li").hide();
				});
				_p.parent().find(".car").stop().delay(300).animate({marginRight:0}, 300);
			}
			_thumb.attr("isClick", 0);
			setTimeout(function() {
				bindEvent();
			}, 700);


			return false;
		});
		_sub.find(".toggle a").click(function() {
			if($(this).hasClass("toggle_off")) {
				$(this).parent().removeClass("on");
			} else {
				$(this).parent().addClass("on");
			}
			$(this).parent().parent().parent().find(".img img").attr("src", $(this).attr("data-img"));
			return false;
		});
		_sub.find(".wheels .wheels_wrap a").click(function() {
			var num = parseInt($(this).index()) + 1;
			$(this).parent().removeClass("on_1").removeClass("on_2").removeClass("on_3").addClass("on_"+num);
			$(this).parent().find("a").removeClass("on").eq(num-1).addClass("on");
			return false;
		});
		$(window).scroll(function() {
			if(parseInt($(window).scrollTop()) > parseInt(_a.offset().top)-600 && _isReady==1) {
				_isReady=0;
				if(_isReady2==1) {
					$(".wrap").stop().animate({"null":1}, 100).promise().done(function() { // add delay
						if(_isReady2==1) {
							_auto_current = _auto_current + 1;
							if(_auto_current < 3 ) {
								_list.find("> li").eq(_auto_current).find("> a").trigger("click");
							}
						}
					});
				}
			}
		});
		function autoPlay_exterior() {
			if(_isReady2==1) {
				_t = setTimeout(function() {
					if(_isReady2==1) {
						_auto_current = _auto_current + 1;
						if(_auto_current >= 3 ) return false;
						bindListEvent();
						_list.find("> li").eq(_auto_current).find("> a").trigger("click");
					}
				}, _time);
			}
		}
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

		// section2
			var _s2 = _o.find(".section2");
			var _sc1 = _s2.find(".scene1");
			var _sc2 = _s2.find(".scene2");
			_s2.find(".control a").click(function() {
				if(!_s2.find(".scene_wrap .scene_cut").hasClass("freeze")) {
					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
				}
				_s2.find(".details > div").css({left:"-570px"});
				_s2.find(".scene_wrap .scene_offset .scene_cut").delay(11).animate({left: "-320px", marginLeft:0}, 100);
				_s2.find(".scene_wrap .scene_cut .plus").removeClass("on");
				if($(this).hasClass("up") && parseInt(_sc1.css("top"))!=0) {
					_sc1.stop().animate({top:0}, 500, 'motion');_sc2.stop().animate({top:"600px"}, 500, 'motion');
				}
				if($(this).hasClass("dn")==1 && parseInt(_sc2.css("top"))!=0) {
					_sc1.stop().animate({top:"-600px"}, 500, 'motion');_sc2.stop().animate({top:0}, 500, 'motion');
				}
				$(this).parent().removeClass("ov_0").removeClass("ov_1").addClass("ov_"+$(this).index());
				return false;
			});
			_s2.find(".scene_wrap .scene_cut .plus a").click(function() {
				if(!_s2.find(".scene_wrap .scene_cut").hasClass("freeze")) {
					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
				}
				var a = $(this).html();
				var b = 0;
				for(var i=0;i<_s2.find(".details > div").length;i++) {
					if(parseInt(_s2.find(".details > div").eq(i).css("left")) == 0) {
						b=1;
					}
				}
				if(b == 0) { // first
					_s2.find(".details > div").hide().parent().find(".pop_"+a).css("left", "-570px").show().stop().animate({left:"0"}, 500, function() {
						jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('unfreeze');
					});
				} else {
					_s2.find(".details > div").css({"left":0}).hide().parent().find(".pop_"+a).show();
					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('unfreeze');
				}
				_s2.find(".scene_wrap .scene_cut .plus").removeClass("on");
				$(this).parent().addClass("on");
				return false;
			});
			_s2.find(".scene_wrap .scene_offset .details span.close a").click(function() {
				if(!_s2.find(".scene_wrap .scene_cut").hasClass("freeze")) {
					jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
				}
				_s2.find(".details > div").animate({left:"-570px"}, 300);
				_s2.find(".scene_wrap .scene_offset .scene_cut").delay(50).animate({left:"0", marginLeft:"-320px"},300);
				_s2.find(".scene_wrap .scene_cut .plus").removeClass("on");
				return false;
			});
			var sfs = _s2.find(".sfs");
			var sfs_play = sfs.find(".play a");
			var sfs_img = sfs.attr("data-backgroundImg");
			sfs.thejAni({frameWidth: 330, frameHeight: 240, speed: 200, totalFrames:20, loop:false, bg:sfs_img});

			var n = 0;
			var _r = $(".pip.contents_interior .slider_contents2");
			var _rv = _r.find(".view ul li");
			var _sv = _r.find(".subject ul li");
			var clickFlag = 0;
			_rv.eq(0).show();
			_sv.eq(0).show();
			slide = function(){
				var _r = $(".pip.contents_interior .slider_contents2");
				var _rl = _r.find(".controls > div");
				var _rv = _r.find(".view ul li");
				var _id = _r.find(".ids ul li");
				var _rv2 = _rv.length;
				var _setWidth = _rv.eq(0).width();
				var _new, _old = 0;


				_r.find(".next").click(function() {
					if ( clickFlag == 0)
					{
						clickFlag = 1;
						_old = parseInt(_r.attr('data-current'));
						_new = _old + 1;
						_r.attr('data-current',_new);
						if ( _new >= _rv2 )
						{
							_new = 0;
						}
						_rv.eq(_old).stop().css({left:0}).show().stop().animate({left:(_setWidth*-1)}, 800,"easeInOutExpo",function() {$(this).hide()});
						_rv.eq(_new).stop().show().css({left:(_setWidth*2)}).stop().animate({left:0},800,"easeInOutExpo",function(){clickFlag = 0});
						_r.attr('data-current',_new);
						_id.removeClass('on');
						_id.eq(_new).addClass('on');
						_sv.removeClass('on');
						_sv.eq(_new).addClass('on');
						return false;
					} else {
						return false;
					}

				});

				_r.find(".prev").click(function() {
					if ( clickFlag == 0)
					{
						clickFlag = 1;
						_old = parseInt(_r.attr('data-current'));
						_new = _old - 1;
						_r.attr('data-current',_new);
						if ( _new <= -1 )
						{
							_new = _rv2-1;
						}
						_rv.eq(_old).stop().css({left:0}).show().stop().animate({left:(_setWidth)}, 800,"easeInOutExpo",function() {$(this).hide()});
						_rv.eq(_new).stop().show().css({left:(_setWidth*-1)}).stop().animate({left:0},800,"easeInOutExpo",function(){clickFlag = 0});
						_r.attr('data-current',_new);
						_id.removeClass('on');
						_id.eq(_new).addClass('on');
						_sv.removeClass('on');
						_sv.eq(_new).addClass('on');
						return false;
					} else {
						return false;
					}
				});

				_id.click(function(){
					var a = $(this).index();
					var b = parseInt(_r.attr('data-current'));
					if ( b > a)
					{
						_old = b;
						_new = a;
						_rv.eq(_old).stop().css({left:0}).show().stop().animate({left:(_setWidth)}, 800,"easeInOutExpo",function() {$(this).hide()});
					_rv.eq(_new).stop().show().css({left:(_setWidth*-1)}).stop().animate({left:0},800,"easeInOutExpo");
					} else if ( b < a)	{
						_old = b;
						_new = a;
						_rv.eq(_old).stop().css({left:0}).show().stop().animate({left:(_setWidth*-1)}, 800,"easeInOutExpo",function() {$(this).hide()});
						_rv.eq(_new).stop().show().css({left:(_setWidth)}).stop().animate({left:0},800,"easeInOutExpo");
					}
					_id.removeClass('on');
					_id.eq(_new).addClass('on');
					_sv.removeClass('on');
					_sv.eq(_new).addClass('on');
					_r.attr('data-current',a);
					return false;
				});
			};

			slide();
	});
	
	jQuery(document).ready(function(){
/*
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
*/
		jQuery('.pip.contents_interior .section2 .scene_wrap .scene_cut').trigger('freeze');
	});

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
				drawGraph(_i);
				var _m1 = _c.eq(_i).find(".max dl.max_power dd strong");
				var _m2 = _c.eq(_i).find(".max dl.max_toque dd strong");
				if(!_m1.attr("value")) _m1.attr("value", _m1.html());
				if(!_m2.attr("value")) _m2.attr("value", _m2.html());
				_m1.html(parseInt(_m1.attr("value"))-100);
				_m2.html(parseFloat(_m2.attr("value"))-10);
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
				_c.eq(va).find(".graph .pos").css({width:0}).animate({width:"400px"}, 1200, function() {
					_c.eq(va).find(".graph .pos .text").show();
				});
			} else {
				_c.eq(va).find(".graph .pos .text").hide().css({opacity:0});
				_c.eq(va).find(".graph .pos").css({width:0, opacity:0}).animate({width:"400px", opacity:1}, 1200, function() {
					_c.eq(va).find(".graph .pos .text").show().animate({opacity:1}, 300);
				});
			}
		}
		function numberUp1(obj, va, _idx) {
			if(parseInt(obj.html()) < va) {
				obj.html(parseInt(obj.html())+1);
				_time1=setTimeout(function(){numberUp1(obj, va, _idx)}, 8);
			} else {
				clearTimeout(_time1);
				_m.find("a").unbind("click").bind("click", bindMenu());
			}
		}
		function numberUp2(obj, va, _idx) {
			if(parseFloat(obj.html()) < va) {
				obj.html((((parseFloat(obj.html())*10)+1)/10).toFixed(1));
				_time2=setTimeout(function(){numberUp2(obj, va, _idx)}, 8);
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
	$(function() {
		var _s = $("#safety_slider");
		var _t;
		_s.slider({
			range: "min",
			value: 0,
			min: 0,
			max: 800,
			slide: function( event, ui ) {
				_s.attr("current", ui.value);
				exeSlider(ui.value);
				stopSlide();
			}
		});
		_s.attr("current", 0);
		function autoSlide() {
			var _o = $(".pip.contents_safety .scene_wrap");
			_o.find(".controls a.play").hide();
			_o.find(".controls a.stop").show();
			_t = setTimeout(function() {
				if(parseInt(_s.attr("current")) < 800) {
					_s.slider("value", (parseInt(_s.attr("current")) + 1));
					_s.attr("current", (parseInt(_s.attr("current")) + 1));
					exeSlider((parseInt(_s.attr("current"))));
					autoSlide();
				} else {
					clearTimeout(_t);
				}
			}, 25);
		}
		function stopSlide() {
			var _o = $(".pip.contents_safety .scene_wrap");
			_o.find(".controls a.play").show();
			_o.find(".controls a.stop").hide();
			clearTimeout(_t);
		}
		function nextSlide() {
			stopSlide();
			var a = parseInt(parseInt(_s.attr("current"))/200); // 0 ~ 3
			if(a<3) a= a+1;
			else a=0;
			_s.slider("value", (a)*200);
			_s.attr("current", (a)*200);
			exeSlider((parseInt(_s.attr("current"))));
			autoSlide();
		}
		function exeSlider(va) {
			var _e = parseInt((va-0)/200);
			var _o = $(".pip.contents_safety .scene_wrap");
			// slider text color
			var _st = _o.find(".slider_wrap .slider_text");
			_st.find("ul li").each(function() {
				if($(this).index() == _e && !$(this).hasClass("on")) $(this).addClass("on");
				if($(this).index() != _e && $(this).hasClass("on")) $(this).removeClass("on");
			});
			if(va==800) _st.find("ul li").removeClass("on").eq(4).addClass("on");
			// exe motion
			exeMotions(va);
		}
		function exeMotions(va) {
			var _a = parseInt(va/200);
			var s1 = $(".pip.contents_safety .scene_wrap .scene.scene1");
			var s2 = $(".pip.contents_safety .scene_wrap .scene.scene2");
			var s3 = $(".pip.contents_safety .scene_wrap .scene.scene3");
			var s4 = $(".pip.contents_safety .scene_wrap .scene.scene4");
			var _sTxt = $(".pip.contents_safety .scene_wrap .text_wrap ul li");
			s1.hide();s2.hide();s3.hide();s4.hide();
			_sTxt.hide();
			if(_a==0) { // 0 ~ 199
				s1.show();
				$(".pip.contents_safety .scene_wrap").removeClass("black");
				var n = va-0;
				if(n<10) { // show
					var m = n-0; // 0~9
					_sTxt.hide().eq(0).show();
					s1.css({opacity:1});
					s1.find(".mycar div").css("visibility", "hidden").eq(0).css("visibility", "visible");
					s1.find(".yourcar div").css("visibility", "hidden");
				} else if(n<170) { // ani
					var m = n-10; // 0 ~ 169
					_sTxt.hide().eq(0).show();
					s1.css({opacity:1});
					var o = Math.floor(m/10),
					carO = o >= s1.find(".mycar div").length ? 14 : o
					s1.find(".mycar div").css("visibility", "hidden").eq(carO).css("visibility", "visible");
					if(m>=50) {s1.find(".yourcar div").css("visibility", "hidden").eq(carO-5).css("visibility", "visible")}
					else{s1.find(".yourcar div").css("visibility", "hidden");}
				} else if(n<190) { // delay
					var m = n-170; // 0~189
					_sTxt.hide().eq(0).show();
					s1.css({opacity:1});
					s1.find(".mycar div").css("visibility", "hidden").eq(14).css("visibility", "visible");
					s1.find(".yourcar div").css("visibility", "hidden").eq(10).css("visibility", "visible");
				} else { // hide
					var m = n-190; // 0~9
					s1.css({opacity:(1/(m))});
					s1.find(".mycar div").css("visibility", "hidden").eq(14).css("visibility", "visible");
					s1.find(".yourcar div").css("visibility", "hidden").eq(10).css("visibility", "visible");
				}
				return false;
			} else if(_a==1) { // 200 ~ 299
				s2.show();
				$(".pip.contents_safety .scene_wrap").removeClass("black");
				var n = va-200;
				if(n<10) { // show
					var m = n-0; // 0~9
					_sTxt.hide().eq(1).show();
					//s2.css({opacity:(1/(9-n))});
					s2.css({opacity:1});
					s2.find(".bg .bg1").css("visibility", "visible");s2.find(".bg .bg2").css("visibility", "hidden");
					s2.find(".info .info1").css("visibility", "visible");s2.find(".info .info2").css("visibility", "hidden");
					s2.find(".line .line1").css("visibility", "visible");s2.find(".line .line2").css("visibility", "hidden");s2.find(".line .line3").css("visibility", "hidden");s2.find(".line .line4").css("visibility", "hidden");
					s2.find(".yourcar").css({left:"1258px"});
				} else if(n<170) { // ani
					var m = n-10; // 0 ~ 169
					_sTxt.hide().eq(1).show();
					s2.css({opacity:1});
					if((parseInt(m/10))%2 == 0) {s2.find(".bg .bg1").css("visibility", "visible");s2.find(".bg .bg2").css("visibility", "hidden");} else  {s2.find(".bg .bg1").css("visibility", "hidden");s2.find(".bg .bg2").css("visibility", "visible");}
					if(m<90) {s2.find(".info .info1").css("visibility", "visible");s2.find(".info .info2").css("visibility", "hidden");} else {s2.find(".info .info1").css("visibility", "hidden");s2.find(".info .info2").css("visibility", "visible");}
					if((parseInt(m/10))%4 == 0) {
						s2.find(".line .line1").css("visibility", "visible");s2.find(".line .line2").css("visibility", "hidden");s2.find(".line .line3").css("visibility", "hidden");s2.find(".line .line4").css("visibility", "hidden");
					} else if((parseInt(m/10))%4 == 2) {
						s2.find(".line .line1").css("visibility", "hidden");s2.find(".line .line2").css("visibility", "visible");s2.find(".line .line3").css("visibility", "hidden");s2.find(".line .line4").css("visibility", "hidden");
					} else if((parseInt(m/10))%4 == 3) {
						s2.find(".line .line1").css("visibility", "hidden");s2.find(".line .line2").css("visibility", "hidden");s2.find(".line .line3").css("visibility", "visible");s2.find(".line .line4").css("visibility", "hidden");
					} else {
						s2.find(".line .line1").css("visibility", "hidden");s2.find(".line .line2").css("visibility", "hidden");s2.find(".line .line3").css("visibility", "hidden");s2.find(".line .line4").css("visibility", "visible");
					}
					if(m<60) {s2.find(".yourcar").css({left:"1258px"});}
					else if(m<70) {s2.find(".yourcar").css({left:"1207px"});}
					else if(m<80) {s2.find(".yourcar").css({left:"1146px"});}
					else if(m<90) {s2.find(".yourcar").css({left:"1065px"});}
					else if(m<100) {s2.find(".yourcar").css({left:"976px"});}
					else {s2.find(".yourcar").css({left:"876px"});}
				} else if(n<190) { // delay
					_sTxt.hide().eq(1).show();
					var m = n-170; // 0~189
					s2.css({opacity:1});
					s2.find(".bg .bg1").css("visibility", "visible");s2.find(".bg .bg2").css("visibility", "hidden");
					s2.find(".info .info1").css("visibility", "hidden");s2.find(".info .info2").css("visibility", "visible");
					s2.find(".line .line1").css("visibility", "visible");s2.find(".line .line2").css("visibility", "hidden");s2.find(".line .line3").css("visibility", "hidden");s2.find(".line .line4").css("visibility", "hidden");
					s2.find(".yourcar").css({left:"876px"});
				} else { // hide
					var m = n-190; // 0~9
					s2.css({opacity:(1/(m))});
					s2.find(".bg .bg1").css("visibility", "visible");s2.find(".bg .bg2").css("visibility", "hidden");
					s2.find(".info .info1").css("visibility", "hidden");s2.find(".info .info2").css("visibility", "visible");
					s2.find(".line .line1").css("visibility", "visible");s2.find(".line .line2").css("visibility", "hidden");s2.find(".line .line3").css("visibility", "hidden");s2.find(".line .line4").css("visibility", "hidden");
					s2.find(".yourcar").css({left:"876px"});
				}
				return false;
			} else if(_a==2) {
				s3.show();
				$(".pip.contents_safety .scene_wrap").removeClass("black");
				var n = va-400;
				if(n<10) { // show
					var m = n-0; // 0~9
					_sTxt.hide().eq(2).show();
					//s3.css({opacity:(1/(9-n))});
					s3.css({opacity:1});
					s3.find(".bg .bg1").css("visibility", "visible");s3.find(".bg .bg2").css("visibility", "hidden");
					s3.find(".line .line1").css("visibility", "visible");s3.find(".line .line2").css("visibility", "hidden");s3.find(".line .line3").css("visibility", "hidden");s3.find(".line .line4").css("visibility", "hidden");
					s3.find(".yourcar").css({left:"1258px"});
				} else if(n<170) { // ani
					var m = n-10; // 0~159
					_sTxt.hide().eq(2).show();
					s3.css({opacity:1});
					if((parseInt(m/10))%2 == 0) {s3.find(".bg .bg1").css("visibility", "visible");s3.find(".bg .bg2").css("visibility", "hidden");} else  {s3.find(".bg .bg1").css("visibility", "hidden");s3.find(".bg .bg2").css("visibility", "visible");}
					if((parseInt(m/10))%4 == 0) {
						s3.find(".line .line1").css("visibility", "visible");s3.find(".line .line2").css("visibility", "hidden");s3.find(".line .line3").css("visibility", "hidden");s3.find(".line .line4").css("visibility", "hidden");
					} else if((parseInt(m/10))%4 == 1) {
						s3.find(".line .line1").css("visibility", "hidden");s3.find(".line .line2").css("visibility", "visible");s3.find(".line .line3").css("visibility", "hidden");s3.find(".line .line4").css("visibility", "hidden");
					} else if((parseInt(m/10))%4 == 2) {
						s3.find(".line .line1").css("visibility", "hidden");s3.find(".line .line2").css("visibility", "hidden");s3.find(".line .line3").css("visibility", "visible");s3.find(".line .line4").css("visibility", "hidden");
					} else {
						s3.find(".line .line1").css("visibility", "hidden");s3.find(".line .line2").css("visibility", "hidden");s3.find(".line .line3").css("visibility", "hidden");s3.find(".line .line4").css("visibility", "visible");
					}
					var o = Math.floor(m/10);
					if(o<6) {s3.find(".mycar").css("margin-top", 0);s3.find(".info div").hide().eq(0).show();s3.find(".red").hide();}
					else if(o==6) {s3.find(".mycar").css("margin-top", "-10px");s3.find(".info div").hide().eq(0).show();s3.find(".red").hide();}
					else if(o==7) {s3.find(".mycar").css("margin-top", "-20px");s3.find(".info div").hide().eq(0).show();s3.find(".red").hide();}
					else if(o==8) {s3.find(".mycar").css("margin-top", "-30px");s3.find(".info div").hide().eq(1).show();s3.find(".red").hide();}
					else if(o==9) {s3.find(".mycar").css("margin-top", "-40px");s3.find(".info div").hide().eq(1).show();s3.find(".red").show();}
					else if(o==10) {s3.find(".mycar").css("margin-top", "-40px");s3.find(".info div").hide().eq(1).show();s3.find(".red").show();}
					else if(o==11) {s3.find(".mycar").css("margin-top", "-40px");s3.find(".info div").hide().eq(1).show();s3.find(".red").show();}
					else if(o==12) {s3.find(".mycar").css("margin-top", "-30px");s3.find(".info div").hide().eq(1).show();s3.find(".red").show();}
					else if(o==13) {s3.find(".mycar").css("margin-top", "-20px");s3.find(".info div").hide().eq(0).show();s3.find(".red").hide();}
					else if(o==14) {s3.find(".mycar").css("margin-top", "-10px");s3.find(".info div").hide().eq(0).show();s3.find(".red").hide();}
					else if(o==15) {s3.find(".mycar").css("margin-top", 0);s3.find(".info div").hide().eq(0).show();s3.find(".red").hide();}
				} else if(n<190) { // delay
					_sTxt.hide().eq(2).show();
					var m = n-170; // 0~19
					s3.css({opacity:1});
					s3.find(".bg .bg1").css("visibility", "visible");s3.find(".bg .bg2").css("visibility", "hidden");
					s3.find(".line .line1").css("visibility", "visible");s3.find(".line .line2").css("visibility", "hidden");s3.find(".line .line3").css("visibility", "hidden");s3.find(".line .line4").css("visibility", "hidden");
				} else { // hide
					var m = n-190; // 0~9
					s3.css({opacity:(1/(m))});
					s3.find(".bg .bg1").css("visibility", "visible");s3.find(".bg .bg2").css("visibility", "hidden");
					s3.find(".line .line1").css("visibility", "visible");s3.find(".line .line2").css("visibility", "hidden");s3.find(".line .line3").css("visibility", "hidden");s3.find(".line .line4").css("visibility", "hidden");
				}
				return false;
			} else if(_a==3) {
				s4.show();
				$(".pip.contents_safety .scene_wrap").addClass("black");
				var n = va-600;
				if(n<10) { // show
					var m = n-0; // 0~9
					s4.css({opacity:(1/(9-n))});
					s4.find(".mycar div").css("visibility", "hidden").eq(0).css("visibility", "visible");
				} else if(n<170) { // ani
					var m = n-10; // 0 ~ 169
					_sTxt.hide().eq(3).show();
					s4.css({opacity:1});
					var o = Math.floor(m/10);
					s4.find(".mycar div").css("visibility", "hidden").eq(o).css("visibility", "visible");
				} else if(n<190) { // delay
					var m = n-170; // 0~189
					_sTxt.hide().eq(3).show();
					s4.css({opacity:1});
					s4.find(".mycar div").css("visibility", "hidden").eq(15).css("visibility", "visible");
				} else { // hide
					var m = n-190; // 0~9
					s4.css({opacity:(1/(m))});
					s4.find(".mycar div").css("visibility", "hidden").eq(15).css("visibility", "visible");
				}
			}
			if(va==800) { // last
				var _o = $(".pip.contents_safety .scene_wrap");
				_o.delay(1).animate({opacity:1},1,function() {
					_s.slider("value", 0);
					_s.attr("current", 0);
					stopSlide();
					exeSlider(0);
				});
				return false;
			}
		}
		var _c = $(".pip.contents_safety .scene_wrap");
		_c.find(".controls a.play").click(function() {
			autoSlide();return false;
		});
		_c.find(".controls a.stop").click(function() {
			stopSlide();return false;
		});
		_c.find(".controls a.next").click(function() {
			nextSlide();return false;
		});
	});

	var is_safety_auto=1;
	$(window).scroll(function() {
	if(parseInt($(window).scrollTop()) > parseInt($("#contents_safety").offset().top)+(520/2) && is_safety_auto==1) {
		$(".wrap").stop().animate({"null":1}, 200).promise().done(function() { // 2015-05-28
			$(".pip.contents_safety .scene_wrap .controls a.play").trigger("click");
		}); // 2015-05-28
		is_safety_auto = 0;
	}

	var _r = $(".pip.contents_safety .ride_and_handling");
	var _rl = _r.find(".list ul li");
	var _rv = _r.find(".view ul li");
	var car = {
		up : _rv.find(".car_wrap .car_up"),
		down : _rv.find(".car_wrap .car_down")
	};
	var t;
	var _time = 0;

	_rl.find("a").click(function() {
		var n = $(this).parent().index();
		_rl.removeClass("on").eq(n).addClass("on");
		_rv.removeClass("on").eq(n).addClass("on");

		if($(this).parent().hasClass("transmission")){
			t=setTimeout(function(){
				car.down.stop().animate(
					{opacity:0},
					{
						duration:1000,
						complete:function(){
							car.down.css({display:'none'});
							car.up.css({display:'block'}).stop().animate(
								{opacity:1},
								{
									duration:1000
								}
							);
						}
					}
				);
			},1000);
		}else{
			clearTimeout(t);
			car.down.stop().css({opacity:1,display:'block'});
			car.up.stop().css({opacity:0,display:'none'});
		};
		return false;
	});

	});

// Convenience
	$(document).ready(function() {
		var _c = $(".pip.contents_convenience");
		var _list = _c.find(".list_wrap");
		var _view = _c.find(".view_wrap");
		var _dim = _c.find(".dim");
		var _s = _view.find(".slider")
		var _t;

		if(!$("body").hasClass("mobile")) {
			_list.not(".list_title").find("li a").click(function() {
				var _idx = $(this).parent().index();
				_view.find("> li").hide().eq(_idx).show();
				_dim.show();
				if(_idx==2) {//trunk
					_s.slider("value", 0);
					exeSlider(0);
					setTimeout(function() {
						autoRolling_trunk();
					}, 80);
				}
				return false;
			});
		}else{
			_list.not(".list_title").find("li a").click(function() {
				var _idx = $(this).parent().index();

				_view.find("> li").hide().eq(_idx).show();
				_dim.show();
				if(_idx==2) {//trunk
					_s.slider("value", 0);
					exeSlider(0);
					setTimeout(function() {
						autoRolling_trunk();
					}, 80);
				}
				return false;
			});
		}

		_view.find(".close a").click(function() {
			_view.find("> li").hide();
			_dim.hide();
			return false;
		});

		_s.parent().find(".car").css({backgroundPosition:"0 0"});
		_s.slider({
			value: 0,
			min: 0,
			max: 20,
			slide: function( event, ui ) {
				exeSlider(ui.value);
			}
		});
		function autoRolling_trunk() {
			_t = setTimeout(function() {
				var i = parseInt(_s.slider("value"));
				i=i+1;
				if(i<=20) {
					_s.slider("value", i);
					exeSlider(i);
					autoRolling_trunk();
				} else {
					clearTimeout(_t);
				}
			}, 80);
		}
		function exeSlider(v) {
			var n = v;
			_s.parent().find(".car").css({backgroundPosition:"0 "+(n*-270)+"px"});
		}

		_c.find(".toggle a").click(function() {
			if($(this).hasClass("toggle_off")) {
				$(this).parent().removeClass("on");
				$(this).parent().parent().find("strong").removeClass("on");
				$(this).parent().parent().find("p").removeClass("on");
				$(this).parent().parent().find(".rear").addClass("on");
			} else {
				$(this).parent().addClass("on");

				$(this).parent().parent().find("strong").removeClass("on");
				$(this).parent().parent().find("p").removeClass("on");
				$(this).parent().parent().find(".front").addClass("on");
			}
			$(this).parents('.view').find("img").attr("src", $(this).attr("data-img"));
			return false;
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
			});
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
			if (scr > 1450) {
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
			$('html,body').stop().animate({scrollTop:1400}, speedScrt, 'easeInOutExpo', function(){
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
	
	/* theJ sequence animations */
	$.fn.thejAni = function(options) {
		return this.each(function() {
			var settings = {};
			var object = $(this);
			var curr = 0;
			var rollTimer;
			if(options) $.extend(settings, options);
			var objectcss = {backgroundImage: "url("+settings.bg+")", width: settings.frameWidth, height: settings.frameHeight, backgroundPosition: "0 0"};
			object.css(objectcss);
			$(".play a", object.parent()).unbind("click").click(function() {
				var curr=0;
				$(this).parent().hide();
				var currObject = $(this).parent().parent();
				if (rollTimer) clearInterval(rollTimer);
				object.attr("curr",0);
				object.css("background-position","0 0");
				rollTimer = setInterval(_animation, settings.speed);
				return false;
			});
			object.parent().find(".play a").trigger("click");
			$(".close a", object.parent()).click(function() {
				_stop();return false;
			});
			function _animation() {
				var ob = object;
				ob.addClass("nowPlaying");
				curr = ob.attr("curr");
				curr = curr-1+2;
				if(curr>=settings.totalFrames) {
					_stop(ob);
				} else {
					ob.attr("curr",curr);
					ob.css("background-position","0 " + eval(settings.frameHeight*curr*-1) + "px");
				}
			}
			function _stop() {
				var ob = object;
				clearInterval(rollTimer);
				ob.removeClass("nowPlaying");
				$(".play", ob.parent()).show();
				return false;
			}
		});
	}

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
		function moveSlide(index) {
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
			slideScopes = ($(this).width() < 1100) ? 5 : 6;
		});
	});

	$(document).ready(function() {
		var showError = function(code) {
			var	tpl = '<div id="error"></div>',
				style = {
				    backgroundColor: '#511',
				    color: 'red',
				    fontSize: '16px',
				    left: 0,
				    opacity: 0.8,
				    padding: '16px 30px',
				    position: 'fixed',
				    top: 0,
				    cursor: 'pointer',
				    zIndex: 500
				};
				code = code;
			if (!$('#error').length) {
				$('body').append(tpl);
			}
			$('#error').hide().html('Error: '+code).css(style).on('click', function(){$(this).stop().slideUp(400);return false;}).stop(false, true).slideDown(400).delay(5000).slideUp(800);
		};
		$('.video_link').click(function(e){
			e.preventDefault();
			e.stopImmediatePropagation();
			var id = $(this).attr('data-src');
			if (!id) {
				// if data-src is null
				showError('video id is null');
				return;
			}
			console.log($(".videoPopup"));
			console.log(id);
			$(".videoFrame").attr("src", 'https://www.youtube.com/embed/'+id+'?rel=0&amp;showinfo=0;autoplay=1');
			$(".videoPopup").fadeIn();
		});
		$('.videoPopup .closeButton').click(function(e) {
			e.preventDefault();
			$(".videoP").attr("src",'');
			$(".videoPopup").fadeOut();
			$(".videoFrame").attr("src", '');
		});
	});