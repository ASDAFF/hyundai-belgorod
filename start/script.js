/**
 * jQuery-viewport-checker - v1.8.7 - 2015-12-17
 * https://github.com/dirkgroenen/jQuery-viewport-checker
 *
 * Copyright (c) 2015 Dirk Groenen
 * Licensed MIT <https://github.com/dirkgroenen/jQuery-viewport-checker/blob/master/LICENSE>
 */

(function($){$.fn.viewportChecker=function(useroptions){var options={classToAdd:'visible',classToRemove:'invisible',classToAddForFullView:'full-visible',removeClassAfterAnimation:false,offset:100,repeat:false,invertBottomOffset:true,callbackFunction:function(elem,action){},scrollHorizontal:false,scrollBox:window};$.extend(options,useroptions);var $elem=this,boxSize={height:$(options.scrollBox).height(),width:$(options.scrollBox).width()};this.checkElements=function(){var viewportStart,viewportEnd;if(!options.scrollHorizontal){viewportStart=Math.max($('html').scrollTop(),$('body').scrollTop(),$(window).scrollTop());viewportEnd=(viewportStart+boxSize.height);}
else{viewportStart=Math.max($('html').scrollLeft(),$('body').scrollLeft(),$(window).scrollLeft());viewportEnd=(viewportStart+boxSize.width);}
	$elem.each(function(){var $obj=$(this),objOptions={},attrOptions={};if($obj.data('vp-add-class'))
		attrOptions.classToAdd=$obj.data('vp-add-class');if($obj.data('vp-remove-class'))
		attrOptions.classToRemove=$obj.data('vp-remove-class');if($obj.data('vp-add-class-full-view'))
		attrOptions.classToAddForFullView=$obj.data('vp-add-class-full-view');if($obj.data('vp-keep-add-class'))
		attrOptions.removeClassAfterAnimation=$obj.data('vp-remove-after-animation');if($obj.data('vp-offset'))
		attrOptions.offset=$obj.data('vp-offset');if($obj.data('vp-repeat'))
		attrOptions.repeat=$obj.data('vp-repeat');if($obj.data('vp-scrollHorizontal'))
		attrOptions.scrollHorizontal=$obj.data('vp-scrollHorizontal');if($obj.data('vp-invertBottomOffset'))
		attrOptions.scrollHorizontal=$obj.data('vp-invertBottomOffset');$.extend(objOptions,options);$.extend(objOptions,attrOptions);if($obj.data('vp-animated')&&!objOptions.repeat){return;}
		if(String(objOptions.offset).indexOf("%")>0)
			objOptions.offset=(parseInt(objOptions.offset)/100)*boxSize.height;var rawStart=(!objOptions.scrollHorizontal)?$obj.offset().top:$obj.offset().left,rawEnd=(!objOptions.scrollHorizontal)?rawStart+$obj.height():rawStart+$obj.width();var elemStart=Math.round(rawStart)+objOptions.offset,elemEnd=(!objOptions.scrollHorizontal)?elemStart+$obj.height():elemStart+$obj.width();if(objOptions.invertBottomOffset)
			elemEnd-=(objOptions.offset*2);if((elemStart<viewportEnd)&&(elemEnd>viewportStart)){$obj.removeClass(objOptions.classToRemove);$obj.addClass(objOptions.classToAdd);objOptions.callbackFunction($obj,"add");if(rawEnd<=viewportEnd&&rawStart>=viewportStart)
			$obj.addClass(objOptions.classToAddForFullView);else
			$obj.removeClass(objOptions.classToAddForFullView);$obj.data('vp-animated',true);if(objOptions.removeClassAfterAnimation){$obj.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){$obj.removeClass(objOptions.classToAdd);});}}else if($obj.hasClass(objOptions.classToAdd)&&(objOptions.repeat)){$obj.removeClass(objOptions.classToAdd+" "+objOptions.classToAddForFullView);objOptions.callbackFunction($obj,"remove");$obj.data('vp-animated',false);}});};if('ontouchstart'in window||'onmsgesturechange'in window){$(document).bind("touchmove MSPointerMove pointermove",this.checkElements);}
	$(options.scrollBox).bind("load scroll",this.checkElements);$(window).resize(function(e){boxSize={height:$(options.scrollBox).height(),width:$(options.scrollBox).width()};$elem.checkElements();});this.checkElements();return this;};})(jQuery);

$(document).ready(function() {
	var classes = {
		faq: {
			item: ".faq__item"
			, item01: ".faq__item_01"
			, item02: ".faq__item_02"
			, item03: ".faq__item_03"
			, active: "faq__item_active"
			, tip: ".faq__tip"
			, tip01: ".faq__tip_01"
			, tip02: ".faq__tip_02"
			, tip03: ".faq__tip_03"
			, hide: "faq__tip_hide"
			, tipText: ".faq__tip-text"
		}
		, popup: {
			item: ".popup"
			, box: ".popup__container"
			, close: ".popup__close"
			, iframe: ".popup__iframe"
			, hidden: "popup_hidden"
		}
		, buttons: {
			start: ".main__button-start"
		}
		, slider: {
			container: ".model__slider"
			, box: ".slider__box"
			, item: ".slider__item"
			, itemActive: "slider__item_active"
			, total: ".slider__control-total"
			, current: ".slider__control-current"
			, prev: ".slider__control-prev"
			, next: ".slider__control-next"
			, label: ".slider__label"
			, prevItem: "slider__item-prev"
			, nextItem: "slider__item-next"
		}
		, widget: {
			totalPrice: ".calc__total-price-digits"

		}
	};

	var widget, minVal, maxVal = 54, reset;

	var calc = {
		sum: {
			total: 624800
		}
		, getProgramPercent: function(prepay) {
			if(prepay >=0 && prepay < 20)
				return 0.1265;
			else if(prepay >= 20 && prepay < 30)
				return 0.111;
			else if(prepay >= 30 && prepay < 50)
				return 0.101;
			else if(prepay >= 50 && prepay < 55)
				return 0.096;

			return 0.1265;
		}
		, getDefaultPercent: function(car_id) {
			switch(car_id)
			{
				case 7: return 41; // Р­Р»Р°РЅС‚СЂР°,
				case 6: return 42; // i40
				case 5: return 41; // i40 wagon
				case 18: return 46; // Tucson
				case 22: return 42; // Creta
				case 17: return 48; // Santa Fe
				case 13: return 46; // Grand Santa Fe
				case 23: return 39; // New Solaris
				case 24: return 45; // New Solaris
			}

			return 35;
		}
		, updateData: function() {
			var newSum = parseInt($("[name=type]").val());
			console.log('newSum = ', newSum);
			if (!newSum) {
				return;
			}

			if (newSum === this.sum.total) {
				return;
			}

			this.sum.total = newSum;
			$(classes.widget.totalPrice).stop(true, true).animate({
				opacity: 0
				, left: "+=100"
			}, 300, function(){
				var number = newSum.toLocaleString()
				$(this).text(number).css("left", "-100px");
				$(".w-total-sum__item").text(number);
				$(this).animate({
					opacity: 1
					, left: "+=100"
				}, 300);
			});


			var obj = $(".calc__widget").data("roundSlider");

			var car_id = parseInt($("." + classes.slider.itemActive).attr("data-id"));

			var dperc = this.getDefaultPercent(car_id);

			obj.option("value", dperc);

			/*
			 if ( car_id == 23 || car_id == 22) {
			 minVal = 0;
			 obj.option("min", 0);
			 window.addEventListener('scroll', handler);
			 $('.calc_bg').fadeOut();
			 $(".solaris-spec").slideDown();
			 } else {
			 */
			minVal = 20;
			obj.option("value", 20);
			obj.option("value", dperc);
			setTimeout(function(){
				$('.calc_bg').fadeIn();
			}, 300);
			$(".solaris-spec").slideUp().removeClass("solaris-spec_active");
//			}

			this.calculate();
		},
		calculate: function ()
		{
			//var percent = 0.089;
			//var percent = 0.1267;

			var carid = parseInt(getCarId());

			var defaultPercent = calc.getDefaultPercent(carid);

			var DP_check = parseInt($( ".widget__val" ).html());

			if(isNaN(DP_check))
			{
				DP_check = 0;
			}

			var DP = DP_check / 100; // Первый взнос

			var percent = calc.getProgramPercent(DP_check);

			// Стоимость
			var C = $('select[name=type]').val();

			// Срок
			var N = 36;

			// Первый взнос

			RV = C * 0.45;

			//Добавляем страховку жизни к общей стоимости кредита
			var years_count = 3;
			//var insurance_percent = 3.5;
			var insurance_percent = 0;
			// (Цена - П.В.) * страховой тариф в год * кол-во лет
			var lifeinsurance = (C - DP) * insurance_percent/100 * years_count;




			S = Math.round( C * (1 - DP) / ( 1 - ((insurance_percent /100) * years_count) ) - RV );

			SMin = Math.round( C * (1 - 0.54) / ( 1 - ((insurance_percent /100) * years_count) ) - RV );

			SF = Math.round( C * (1 - DP));

			SMax = C;

			S += lifeinsurance;
			SF += lifeinsurance;

			P = percent / 12;

			payment = Math.round(  S * (P + ( P / ( Math.pow(1 + P, N) - 1 ) ) ) +  RV * P );

			payment_full = Math.round(  SF * (P + ( P / ( Math.pow(1 + P, N) - 1 ) ) ));

//			console.log(payment);

			if( Math.abs(payment - 6000) < 100)
				payment = 6000;

			// В числе прочего нам надо высчитать минимум, максимум, и запрограммировать длину обоих полос.

			// Минимум считаем как старт с максимальным DP

			payment_min = Math.round(  SMin * (P + ( P / ( Math.pow(1 + P, N) - 1 ) ) ) +  RV * P );

			// Максимум - как полный кредит при нуле

			payment_max = Math.round(  SMax * (P + ( P / ( Math.pow(1 + P, N) - 1 ) ) ));

			/* если процент - дефолтный, округлим до тысяч */

			if(DP_check == defaultPercent)
			{
				payment = Math.round(payment / 1000) * 1000;
			}

			// А теперь будем считать что минимум занимает 10%, максимум - 100%. И выстроим пропорцию

			var dst = payment_max - payment_min;

			// Сначала вычислим процентовку от нуля

			diff_start = Math.round( ( (payment - payment_min) / dst) * 100);
			diff_full = Math.round( ( (payment_full - payment_min) / dst) * 100);

			diff_start = Math.round((diff_start * 0.9)) + 10;
			diff_full = Math.round((diff_full * 0.9)) + 10;

			//diff = Math.round((payment / payment_full) * 100);

			$('.tprice').html(payment_full.toLocaleString() + ' ');
			$('.startprice').html(payment.toLocaleString() + ' ');
			$('.hc-badge__pay-value').html(payment.toLocaleString());

			$('.start-scale').css('width', diff_start + '%');
			$('.full-scale').css('width', diff_full + '%');
		}
	};

	function __init() {
		initSelect();
		initSlider();

		buttonsInit();
		popupInit();
		widget = initWidget();
		initMenuButton();
		initAnimation();

		scrollingPage();

		//$(window).trigger('scroll');

		setTimeout(function(){
			handler();
		}, 100);

		solarisSpec();
	}


	function buttonsInit() {
		$(classes.faq.item).not('.faq__item_inverse').on('click', function(){
			__deacivateFaq(this);
			$(this).toggleClass(classes.faq.active);
			var num = $(this).attr('data-num');

			$('.faq__tip_' + num).toggleClass(classes.faq.hide);
		});

		$(classes.buttons.start).on("click", function() {
			$(classes.popup.item).removeClass(classes.popup.hidden);
		});
	}

	function popupInit() {
		$(classes.popup.item).on("click", function(e) {
			var container = $(classes.popup.box);
			if (container.has(e.target).length === 0){

				$(classes.popup.item).addClass(classes.popup.hidden);
				__reinitVideo();
			}
		});
		$(classes.popup.close).on("click", function() {
			$(classes.popup.item).addClass(classes.popup.hidden);
			__reinitVideo();
		});
	}

	function initSelect() {
		$('select.model__select').each(function(){
			var $this = $(this);

			$this.addClass('select-hidden');
			$this.wrap('<div class="select"></div>');
			$this.after('<div class="select-styled"></div>');

			var $styledSelect = $this.next('div.select-styled');
			$styledSelect.text($this.children('option').eq(0).text());

			var $list = $('<ul />', {
				'class': 'select-options'
			}).insertAfter($styledSelect);
		});

	}

	function updateSelect(sel) {
		var $this = $(sel).parent()
			, numberOfOptions = $(sel).find("option").length;

		var $styledSelect = $this.find('.select-styled');
		$styledSelect.text($this.find('option').eq(0).text());

		$list = $this.find(".select-options");
		$list.html("").hide();
		for (var i = 0; i < numberOfOptions; i++) {
			$('<li />', {
				text: $($this).find('option').eq(i).text(),
				rel: $($this).find('option').eq(i).val()
			}).appendTo($list);
		}

		var $listItems = $list.children('li');

		$selectClass = $this;
		$selectClass.hover(
			function(e) {
				e.stopPropagation();
				$styledSelect.next($listItems).stop(true, true);
				$styledSelect.toggleClass('active').next($listItems).show(300);
			}, function(e){
				e.stopPropagation();
				$styledSelect.toggleClass('active').next($listItems).hide(300);
			}, function(e){
			}
		);


		$listItems.click(function(e) {
			console.log(1);
			e.stopPropagation();
			$styledSelect.text($(this).text()).next($listItems).hide(300);
			$this.find(".model__select").val($(this).attr('rel'));

			if ($this.find("[name=car]").length > 0) {
				var mod_id = $("[name=car]").val();
				var car_id = $("." + classes.slider.itemActive).attr("data-id");
				getComplectationList(car_id, mod_id);
			}

			calc.updateData();
		});

		if ($($this).find("[name=car]").length > 0) {
//	        var mod_id = $($this).find('option').eq(0).val();
			var mod_id = $("[name=car]").val();
			var car_id = $("." + classes.slider.itemActive).attr("data-id");
			getComplectationList(car_id, mod_id);
		}

		calc.updateData();
	}


	function initWidget() {
		//****************************************************//
		//** The below code is the sample as a workaround **//
		var fn1 = $.fn.roundSlider.prototype._setProperties;
		$.fn.roundSlider.prototype._setProperties = function () {
			fn1.apply(this);

			var o = this.options, r = o.radius, d = r * 2, r1 = r - (o.width / 2), svgNS = "http://www.w3.org/2000/svg";
			this._circum = Math.PI * (r1 * 2);

			/*background circle */
			var $circle2 = this._$circle2 = $(document.createElementNS(svgNS, 'circle'));
			$circle2.attr({
				"fill": "transparent", "class": "rs-transition circle2",
				"cx": r, "cy": r, "r": r1, "stroke-width": o.width, "stroke-dasharray": this._circum
			}).css({
				"transform-origin": "50% 50%", "transform": "rotate(" + (o.startAngle + 180) + "deg)"
			});

			/* filling circle */
			var $circle = this._$circle = $(document.createElementNS(svgNS, 'circle'));
			$circle.attr({
				"fill": "transparent", "class": "rs-transition circle1",
				"cx": r, "cy": r, "r": r1, "stroke-width": o.width, "stroke-dasharray": this._circum
				, 'stroke': 'url(#gradient)'
			}).css({
				"transform-origin": "50% 50%", "transform": "rotate(" + (o.startAngle + 180) + "deg)"
			});

			/* gradient */
			var $gradient = this._gradient = $(document.createElementNS(svgNS, 'linearGradient'));
			$gradient.attr({
				'id': 'gradient'
			});

			var $stop1 =  $(document.createElementNS(svgNS, "stop"));
			var $stop2 =  $(document.createElementNS(svgNS, "stop"));
			$stop1.attr({
				'offset': '0%'
				, 'stop-color': '#00aed3'
			});
			$stop2.attr({
				'offset': '100%'
				, 'stop-color': '#00aed3'
			});
			$gradient.append($stop1).append($stop2);
			/* gradient */

			var $svg = $(document.createElementNS(svgNS, "svg"));
			$svg.attr({ "height": d, "width": d }).append($gradient).append($circle2).append($circle);
			this.innerContainer.append($svg);

		}

		var fn2 = $.fn.roundSlider.prototype._changeSliderValue;
		$.fn.roundSlider.prototype._changeSliderValue = function () {
			fn2.apply(this, arguments);

			/* gradient rotate */
			var deg = (this.options.value - 54);
			this._gradient.attr({'gradientTransform': 'rotate('+deg+')'});

			var pct = ((80 - this.options.value) / 80) * this._circum ;
			this._$circle.css({ strokeDashoffset: pct });

		}
		//** The above code is the sample level workaround **//

		window.updateWidgetData = function (e) {
			$(".widget__val").text(this.options.value).css("transform", "rotate(" + (-4.5 * (this.options.value - 10)) + "deg)");
			var g= document.querySelector('g'),
				transform= getComputedStyle(g).getPropertyValue('transform');

			g.setAttribute('transform', transform);
		}

		window.changeTooltip = function (e) {
			if (e.value > maxVal) {
				this.option("value", maxVal);
				this.options.value = maxVal;
				e.value = maxVal;
			}
			if (e.value < minVal) {
				this.option("value", minVal);
				this.options.value = minVal;
				e.value = minVal;
			}
			updateWidgetData.call(this);
			calc.calculate();
			$(".w-sum").hide();
			console.log('sum = ' + calc.sum.total);
			return '<div class="w-header__title">Первый взнос</div>'
				+ '<div class="w-sum">' + (calc.sum.total/100 * e.value).toLocaleString() + ' ₽</div>'
				+ '<div class="w-total-sum">Общая стоимость '
				+ 	'<span class="w-total-sum__item">' + calc.sum.total.toLocaleString() + '</span>'
				+ '</div>'
				+ '<div class="w-line"></div>'
				+ '<div class="w-months">36 месяцев</div>';
		}


		return $(".calc__widget").roundSlider({
			sliderType: "min-range"
			, value: 37
			, radius: 200
			, width: 10
			, startAngle: 315
			, endAngle: 54 * 3.6
			, min: 0
			, max: 60
			, editableTooltip: false
			, handleSize: 100
			, circleShape: "pie"
			, tooltipFormat: "changeTooltip"
			, create: function() {
				$(".rs-first").append('<span class="big-circle circle-active"></span><span class="small-circle circle-active"></span><span class="small-circle-2 circle-active"></span><span class="widget__val">37</span>');
				$(".widget__val").css("transform", "rotate(" + (-4.5 * (37 - 10)) + "deg)");

				var o = this.options;
				for (var i = o.min; i <= o.max; i += o.step + 4) {
					var angle = this._valueToAngle(i);
					var numberTag = this._addSeperator(angle, "rs-custom");
					var number = numberTag.children();
					number.clone().css({
						"width": o.width + this._border(),
						"margin-top": this._border(true) / -2
					}).appendTo(numberTag);
					number.removeClass().addClass("rs-number").html(i).rsRotate(-4.5 * (i - 10));
				}

			}
		});
	}



	function initSlider() {
		var $box = $(classes.slider.box);
		var $items = $box.find(classes.slider.item);
		var length = $items.length;
		var activeItem, indexActiveItem, item, prev, next;

		sliderStart();

		function sliderStart() {
			$(classes.slider.total).text(length);

			findActiveItem();
			$(".slider__control-prev").text($(prev).attr("data-name"));
			$(".slider__control-next").text($(next).attr("data-name"));

			$(classes.slider.next).stop().click(nextSlide);
			$(classes.slider.prev).stop().click(prevSlide);
			$(classes.slider.label).fadeOut(200, function() {
				var labelText = $(activeItem).attr("data-name");
				$(this).text(labelText);
			}).fadeIn(200);

			getModificationList(activeItem.attr("data-id"));

			var docWidth = $(document).outerWidth(true);
			$(".slider__box").width(docWidth);
			$(".slider__box").css("left", "-" + (docWidth/2 - 590) + "px");
		}

		function nextSlide() {
			findActiveItem();

			item = indexActiveItem == length - 1
				? $items[0]
				: $items[indexActiveItem + 1];

			updateSliderInfo();
		}


		function prevSlide() {
			findActiveItem();

			item = indexActiveItem != 0
				? $items[indexActiveItem - 1]
				: $items[length - 1];

			updateSliderInfo();
		}

		function findPrevAndNextItems() {
			prev = indexActiveItem == 0
				? $items[length - 1]
				: $items[indexActiveItem - 1];

			next = indexActiveItem == length - 1
				? $items[0]
				: $items[indexActiveItem + 1];

			$(prev).addClass(classes.slider.prevItem);
			$(next).addClass(classes.slider.nextItem);

			activeItem.unbind();
			$(next).unbind();
			$(prev).unbind();
			$(next).stop().click(nextSlide);
			$(prev).stop().click(prevSlide);
		}

		function findActiveItem() {
			activeItem = $("." + classes.slider.itemActive);
			indexActiveItem = $items.index(activeItem);
			findPrevAndNextItems();
		}


		function updateSliderInfo() {
			___clearSliderInfo();

			$(item).addClass(classes.slider.itemActive);

			findActiveItem();
			$(prev).addClass(classes.slider.prevItem);
			$(next).addClass(classes.slider.nextItem);

			$(".slider__control-prev").text($(prev).attr("data-name"));
			$(".slider__control-next").text($(next).attr("data-name"));

			$(classes.slider.current).text(indexActiveItem + 1);

			$(classes.slider.label).stop(true, true).fadeOut(200, function() {
				var labelText = $(item).attr("data-name");
				$(this).text(labelText);
			}).fadeIn(200);

			$('.hc-badge').stop(true, true).fadeOut(300, function(){
				var id = $(item).attr("data-id");
				if(id == 5) id = 6; // i40 fix

				var $num = $('sup[data-car='+id+']').html();
				$('.hc-badge__pay sup').html($num);
			}).fadeIn(300);

			getModificationList(activeItem.attr("data-id"));

			reset = false;
			handler();
		}



		function ___clearSliderInfo() {
			$items.removeClass(classes.slider.itemActive).removeClass(classes.slider.nextItem).removeClass(classes.slider.prevItem);
		}
	}


	function initMenuButton() {
		$(".model__menu").click(function(){
			$(".slider-menu").css({"opacity": "1", "z-index": "105"});
			$(".slider-menu__item").removeClass("slider-menu__item_active");
			if ($("body").find(".slider-menu__popup-bg").length === 0) {
				$("body").append('<div class="slider-menu__popup-bg"></div>');
			}
			$(".slider-menu__popup-bg").css("z-index", 100).css("height", $(document).outerHeight(true) + "px");
			var dataId = $(".slider__item_active").attr("data-id");
			$(".slider-menu__item[data-id=" + dataId + "]").addClass("slider-menu__item_active");
		});

		$(".slider-menu__item").click(function(){
			var dataId = $(this).attr("data-id");
			$(classes.slider.item).removeClass(classes.slider.itemActive).removeClass(classes.slider.nextItem).removeClass(classes.slider.prevItem);
			var item = $(classes.slider.item + "[data-id=" + dataId + "]").addClass(classes.slider.itemActive);
			$(".slider-menu").css({"opacity": "0", "z-index": "-1"});
			$(".slider-menu__popup-bg").css("z-index", -1);
			//initSlider();

			var $box = $(classes.slider.box);
			var $items = $box.find(classes.slider.item);
			var indexActiveItem = $items.index(item);
			var length = $items.length;
			var prev = indexActiveItem == 0
				? $items[length - 1]
				: $items[indexActiveItem - 1];

			var next = indexActiveItem == length - 1
				? $items[0]
				: $items[indexActiveItem + 1];

			$(prev).addClass(classes.slider.prevItem);
			$(next).addClass(classes.slider.nextItem);

			$(".slider__control-prev").text($(prev).attr("data-name"));
			$(".slider__control-next").text($(next).attr("data-name"));


			$(classes.slider.label).fadeOut(200, function() {
				var labelText = $(item).attr("data-name");
				$(this).text(labelText);
			}).fadeIn(200);

			setTimeout(function(){
//				getModificationList(dataId);
				initSlider();
				calc.updateData();
			}, 500);
		});

		$(".slider-menu__close").click(function(){
			$(".slider-menu").css({"opacity": "0", "z-index": "-1"});
			$(".slider-menu__popup-bg").css("z-index", -1);
		});
	}



	function __reinitVideo() {
		$(classes.popup.iframe).attr("src", $(classes.popup.iframe).attr("src"));
	}

	function __deacivateFaq(t) {
		if (!$(t).hasClass(classes.faq.active)) {
			$(classes.faq.item).removeClass(classes.faq.active);
			$(classes.faq.tip).addClass(classes.faq.hide);
		}
	}


	function getModificationList(car_id)
	{

		$.post('https://www.hyundai.ru/requestnew/getpcpmod', 'carid=' + car_id, function(res){
			console.log(res);
			$('.model__select[name=car]').html(res);
			updateSelect($('.model__select[name=car]'));
		});
		/*
		 setTimeout(function(){

		 }, 200);
		 */
	}

	function getComplectationList(car_id, mod_id)
	{

		$.post('https://www.hyundai.ru/requestnew/getpcpcompl', 'carid=' + car_id + '&modid=' + mod_id, function(res){
			console.log(res);
			$('.model__select[name=type]').html(res);
			updateSelect($('.model__select[name=type]'));
			calc.updateData();
			calc.calculate();
		});
	}

	function initAnimation() {
		$(".options__spot").viewportChecker({
			classToAdd: 'options__spot_big'
			, offset: -200
		});
	}

	function scrollingPage() {
		$('.main__button-model[href^="#"], .slider__go-calc-button[href^="#"]').on('click', function (e) {
			e.preventDefault();
			$(document).off("scroll");

			var target = this.hash;
			$target = $(target);
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 1000, 'swing', function () {
			});
		});
	}

	function handler() {

		var carId = $(".slider__item_active").attr("data-id");
		if ((carId != 23  && carId != 22 ) || reset) {
			return;
		}
		var el = document.querySelector('#calc');
		if (window.pageYOffset + window.outerHeight - 500 > offsetPosition(el)) {
			reset = true;
			console.log('reset = ', reset);
			var obj = $(".calc__widget").data("roundSlider");
			minVal = 0;
			obj.option("min", 0);
			obj.option("value", 20);
			obj.option("value", 0);
		}

		function offsetPosition(element) {
			var offsetTop = 0;
			do {
				offsetTop  += element.offsetTop;
			} while (element = element.offsetParent);
			return offsetTop;
		}

	}

	function solarisSpec() {
		$(".solaris-spec__main").on("click", function() {
			$(this).parent().toggleClass("solaris-spec_active");
		});
	}

	$('.faq__button .button-link').on('click', function(){
		$('.hide').fadeIn();
		$(this).fadeOut();
	});


	setTimeout(function(){
		__init();
	}, 1000);


});


/*

 Old Popup

 */

function getCarId()
{
	var car_id = $('.slider__item_active').attr('data-id');
	return car_id;
}


$(function(){
	startcreditModal = new Spreader('#start-credit', {
		onMount: function() {
			this.$container.find('[data-form-id="start-credit-form"]')
				.validit({
					onSuccessSubmit: function(){
						/* Наберем в форму все значения */
						var carid = getCarId();
						var mod = $('select[name=car] + .select-styled').html();
						var compl = $('select[name=type] + .select-styled').html();
						var pay = parseInt($('.startprice').html().replace(' ', '').replace(' ', '').replace('&nbsp;', '').replace('&nbsp;', ''));
						var term = 36;
						var prepay = parseInt($('.widget__val').html());
						var sum = parseInt($(".calc__total-price-digits" ).html().trim().replace(' ', '').replace(' ', '').replace('&nbsp;', '').replace('&nbsp;', ''));


						/*костыль для спец акции 2500 для Соляры*/
						if ($(".solaris-spec").hasClass("solaris-spec_active")) {
							pay = 2500;
							prepay = 50;
							term = 24
						}

						var prepay_rub = Math.round( sum * prepay / 100);


						$('[data-form-id="start-credit-form"]').find("[name=carid]").val(carid);
						$('[data-form-id="start-credit-form"]').find("[name=mod]").val(mod);
						$('[data-form-id="start-credit-form"]').find("[name=compl]").val(compl);
						$('[data-form-id="start-credit-form"]').find("[name=pay]").val(pay);
						$('[data-form-id="start-credit-form"]').find("[name=term]").val(term);
						$('[data-form-id="start-credit-form"]').find("[name=prepay]").val(prepay);
						$('[data-form-id="start-credit-form"]').find("[name=sum]").val(sum);
						$('[data-form-id="start-credit-form"]').find("[name=prepay_rub]").val(prepay_rub);

						var data = $('[data-form-id="start-credit-form"]').serialize(),
							submitButton = this.$element.find('[type="submit"]');

						// send xhr
						$.ajax({
							url: '/ajax/feedback.php',
							type: 'POST',
							data: data,
							success: function(r){
								if (r === 'ok') {
									startcreditModal.close()
									window.notify('Успешно.', 'success')
								} else {
									window.notify('Произошла ошибка.<br>Повторите позднeе.', 'error')
								}
							},
							beforeSend: function(){
								submitButton.addClass('disabled').attr('disabled', 'disabled')
							},
							complete: function(){
								submitButton.removeClass('disabled').removeAttr('disabled')
							}
						})
					},
					onFocus: function(){
						$(this).parent('.form-row').addClass('in-focus')
					},
					onBlur: function(){
						if (this.value.length === 0) {
							$(this).parent('.form-row').removeClass('in-focus')
						}
					}
				})
		}
	});

	$('.calculator-btn').click(function() {


		startcreditModal.show();
	});

	$(".solaris-spec__email").click(function() {


		startcreditModal.show();
	});

});


