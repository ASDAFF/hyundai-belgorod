$(function(){
	var $root = $('html, body').on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function(){$root.stop()});
});
$(document).ready(function(){
	$('.sub-header') && setActiveSubnav(); // add active sub header item if exist
	$('.subject-tabs-btns').on('click', '.tab-btn-link', toggleContent);
	toggleContent();

	// functions
	function setActiveSubnav() {
		var $subHeader = $('.sub-header'), $items = $subHeader.find('.sub-header__item'), path = window.location.pathname, href;

		$items.each(function(){
			href = $(this).find('.sub-header__item-link').attr('href');
			if (path === href) $(this).addClass('active');
		});
	}
	function toggleContent(e){
		var $target = e ? $(e.target) : undefined, // check for init or click event
			index = $target ? $target.parent().index() : 0, // check for init or click event
			$btns = $('.tab-btn-link').parent(),
			$tabsWrap = $('.subject-content-tabs'),
			$tabs = $('.as-tab'),
			$curTab = $('.subject-content.as-tab[data-tabIndex="'+index+'"]');

		if ($target && $target.parent().hasClass('on')) return false; // check for already active button

		$btns
			.removeClass('on')
			.eq(index).addClass('on');

		$tabs
			.removeClass('on')
			.stop()
			.slideUp(800);
		$curTab
			.prependTo($tabsWrap)
			.addClass('on')
			.stop()
			.delay(400)
			.slideDown(800, function(){
				$(this).css('height', 'auto');
			});
		return false;
	}
});
// spoilers listing
$(function() {
	var $spoilers = $('.spoilers'),
		$item = $spoilers.find('.spoiler'),
		$title = $item.find('.spoiler-title');

	$title.on('click', function (e) {
		var _this = $(this),
			_thisItem = _this.parent();
		_thisItem.toggleClass('alive');
	});
});
// content folding links
$(function() {
	var $showerLink = $('[data-role=content-folding]').on('click', toggleBlockFolding),
		$targetBlock = $(''+$showerLink.attr('href')+'');

	function toggleBlockFolding () {
		if ($showerLink.attr('data-state') === 'on') {
			$showerLink.attr('data-state', 'off');
			$targetBlock.stop().slideUp(500, "easeInOutExpo");
		} else {
			$showerLink.attr('data-state', 'on');
			$targetBlock.stop().slideDown(500, "easeInOutExpo");
		}
		return false;
	}
});
// content scroller links
$(function() {
	var $scrollerLink = $('[data-role=content-scroller]').on('click', scrollToMyTarget);

	function scrollToMyTarget () {
		var $targetBlock = $(''+$(this).attr('href')+''),
			targetOffset = $targetBlock.offset().top;
		$('html, body').stop().animate({scrollTop: targetOffset}, 500, "easeInOutExpo");
		return false;
	}
});
// maintenance
$(function() {
	// vars and events, inits
	var $models = $('.drop-down.drop-down--models'),
		$currentModelImg = $('.car-image__img'),
		$calcWrapper = $('.maintenance-calculator-wrapper'),
		$autoTypeItem = $(".calc-controls.auto-type").find('.auto-type-item').on('click', changeAutoType),
		$autoTypeControls = $('.calc-controls.auto-type')
			.attr('data-count', $(this).find('.auto-type-item').length)
			.attr('data-current', $(this).find('.auto-type-item.active').attr('data-value')),
		$engineControls = $('.calc-controls.engine-control')
			.attr('data-count', $(this).find('.engine-control-item').length)
			.attr('data-current', $(this).find('.engine-control-item.active').attr('data-value')),
		$engineItem = $engineControls.find('.engine-control-item').on('click', changeEngine),
		$engineTypeControls = $('.calc-controls.engine-Type')
			.attr('data-count', $(this).find('.engine-control-item').length)
			.attr('data-current', $(this).find('.engine-control-item.active').attr('data-value')),
		$engineTypeItem = $engineTypeControls.find('.engine-control-item').on('click', changeEngineType),
		$mileageRange = $('.calc-controls.mileage-control'),
		$mileageRangeSlider = $mileageRange.find('.mileage-control-item'),
		$mileageControlValue = $('.mileage-control-value-nums'),
		$cities = $('.drop-down.drop-down--dealer-city'),
		$dealers = $('.drop-down.drop-down--dealers'),
		$sumspares = $('[name=sum-spares]').on('change', changeSumspares),
		autotype,
		engine,
		enginetype,
		model,
		mileage,
		city,
		dealer,
		spares,
		mileageScaleMap = [],
		nanoScrollerOptions = {
			contentClass: 'drop-down-items',
			paneClass: 'custom-nano-pane',
			sliderClass: 'custom-nano-slider',
			sliderMaxHeight: 47,
			sliderMinHeight: 47,
			alwaysVisible: true,
			preventPageScrolling: true
		};


	$('.mileage-control-scale .mileage-control-scale__item').each(function(){
		mileageScaleMap.push($(this).text());
	});

	$models.length && $models.dropit({
		onSelect: changeModel,
		onInit: function(){
			$(this).find('.drop-down-list').nanoScroller(nanoScrollerOptions).find('.drop-down-items').removeAttr('tabindex');
		},
		onDrop: function(){
			$(this).find('.drop-down-list').nanoScroller(nanoScrollerOptions).find('.drop-down-items').removeAttr('tabindex');
		}
	});
	$cities.length && $cities.dropit({
		placeholder: '<span class="lblue">Выбрать город</span>',
		onSelect: function() {
			refreshDealers();
			changeCity()
		},
		onInit: function(){
			$(this).find('.drop-down-list').nanoScroller(nanoScrollerOptions).find('.drop-down-items').removeAttr('tabindex');
		},
		onDrop: function(){
			$(this).find('.drop-down-list').nanoScroller(nanoScrollerOptions).find('.drop-down-items').removeAttr('tabindex');
		}
	});
	$dealers.length && $dealers.dropit({
		placeholder: '<span class="lblue">Выбрать дилера</span>',
		onSelect: changeDealer,
		onInit: function(){
			$(this).find('.drop-down-list').nanoScroller(nanoScrollerOptions).find('.drop-down-items').removeAttr('tabindex');
		},
		onDrop: function(){
			$(this).find('.drop-down-list').nanoScroller(nanoScrollerOptions).find('.drop-down-items').removeAttr('tabindex');
		}
	});

	$mileageRangeSlider.length && $mileageRangeSlider.slider({
		orientation: "horizontal",
		min: 0,
		max: mileageScaleMap.length - 1,
		value: 2,
		slide: function(event,ui) {
			changeRange(mileageScaleMap[ui.value]);
		}
	});

	// calc fns
	// dealers
	function refreshDealers () {
		var cityid = $cities.attr('data-current'),
			$dealersList = $dealers.find('.drop-down-items');

		$.post('https://www.hyundai.ru/requestnew/servicedealers', 'city_id='+cityid, function(res){
			$dealersList.html(res);
			$dealers.find('.drop-down-active-item').text('Дилер');
			$dealers.data('plugin_dropit').refresh();
			$('.sums').hide();
		});
	};
	function changeModel () {
		refreshLinks();
		model = $models.attr('data-current');
		var _model = (model.split(' ').join('')).toLowerCase();
		var _model2 = model.toLowerCase();
		var src = 'https://www.hyundai.ru/media/img/service-pages/cars/car-image--'+_model+'.png';
		$currentModelImg.attr('src', src);

		$.post('https://www.hyundai.ru/requestnew/getserviceengines', 'car=' + _model2, function(res){
			$('.engine-control').attr('data-count', res.count);
			$('.engine-control').html(res.data);
			$engineItem = $('.calc-controls.engine-control').find('.engine-control-item').on('click', changeEngine);
			$('.engine-control li').first().trigger('click');

		}, 'json')
			.fail(function(response) {
			    console.log('An error occured: ' + response.responseText);
			});

		reCalc ();
	}
	function changeEngine (selector) {
		var _v = $(this).attr('data-value');
		model = $models.attr('data-current');
		var _model = (model.split(' ').join('')).toLowerCase();
		var _model2 = model.toLowerCase();

		$engineItem.removeClass('active');
		$(this).addClass('active');
		$engineControls.attr('data-current', _v);
		engine = _v;

		$.post('https://www.hyundai.ru/requestnew/getserviceenginetypes', 'car=' + _model2 + '&engine=' + _v, function(res){
			$('.engine-type').attr('data-count', res.count);
			$('.engine-type').html(res.data);
			$engineTypeItem = $('.calc-controls.engine-type').find('.engine-control-item').on('click', changeEngineType);
			$('.engine-type li').first().trigger('click');
		}, 'json');

		reCalc ();
	}
	function changeEngineType (selector) {
		var _v = $(this).attr('data-value');

		$engineTypeItem.removeClass('active');
		$(this).addClass('active');
		$engineTypeControls.attr('data-current', _v);
		enginetype = _v;

		reCalc ();
	}
	function changeAutoType (selector) {
		var _v = $(this).attr('data-value');

		$autoTypeItem.removeClass('active');
		$(this).addClass('active');
		$autoTypeControls.attr('data-current', _v);
		autotype = _v;

		reCalc ();
	}
	function changeRange (finalValue) {
		mileage = finalValue;
		$mileageRangeSlider.attr('data-current', mileage);
		$mileageControlValue.text(mileage + ' 000');
		if(mileage >= 30)
			$('.row-mileage').removeClass('hidden');
		else
			$('.row-mileage').addClass('hidden');
		reCalc ();
	}
	function changeCity () {
		city = $cities.attr('data-current');
		$('.calc-total-value').html('');
		$dealers.attr('data-current', '');
		dealer = '';
		$('.maintenance_form_toggler').addClass('disabled')

		reCalc ();
	}
	function changeDealer () {
		dealer = $dealers.attr('data-current');
		reCalc ();
	}
	function changeSumspares() {
		spares = $("[name=sum-spares]:checked").val();
		reCalc();
	}
	function reCalc () {
		model	= model		|| $models.attr('data-current');
		model2 = model.toLowerCase();
		autotype = autotype || $('.calc-controls.auto-type').attr('data-current');
		engine  = engine	|| $('.calc-controls.engine-control').attr('data-current');
		enginetype  = enginetype	|| $('.calc-controls.engine-type').attr('data-current');
		mileage = mileage 	|| $mileageRangeSlider.attr('data-current');
		city 	= city 		|| $cities.attr('data-current');
		dealer 	= dealer	|| $dealers.attr('data-current');
		spares 	= spares	|| $("[name=sum-spares]:checked").val();

		// Если выбран дилер - то выбрано все. Можно запрашивать стоимость

		if(dealer.length > 0)
		{

			// check mileage

			var mlist = [15, 30, 45, 60, 75, 90];
			var mlg = 0;
			delta = 100;
			for(i=0; i < mlist.length; i++)
			{
				if(Math.abs( mlist[i] - mileage) < delta )
				{
					mlg = mlist[i];
					delta = Math.abs( mlist[i] - mileage);
				}
			}

			$.post(
				'https://www.hyundai.ru/requestnew/getservicecost',
				{
					car: model2,
					dealer: dealer,
					engine: engine,
					enginetype: enginetype,
					mileage: mlg,
					autotype: autotype,
					spares: spares
				},
				function(res){
					res = JSON.parse(res);
					if(res != 0)
					{
						$('.calc-total-value').html(res.total + '*');
						$('.sum__repairs').html(res.repairs + '*');
						$('#original-spares + .sum-spares__circle .sum__spares').html(res.originspares + '*');
						if (res.pl2spares == null) {
							$('#pl2-spares').prop('disabled', true);
							$('#pl2-spares + .sum-spares__circle .sum__spares').html('');
							$('#pl2-spares + .sum-spares__circle').removeClass('sum-spares_visible');
							$('#original-spares').click();
						} else {
							$('#pl2-spares').prop('disabled', false);
							$('#pl2-spares + .sum-spares__circle').addClass('sum-spares_visible');
							$('#pl2-spares + .sum-spares__circle .sum__spares').html(res.pl2spares + '*');
						}
						$('.sums').show();
						$('.total-default').hide();
						$('.calc-total-value').show();

						$('.maintenance_form_toggler').removeClass('disabled');

						$('.calc-total-value::after').show();

						$('.disclaimer_zakaz').hide();

					}
					else
					{
						$('.calc-total-value').html('');
						$('.maintenance_form_toggler').addClass('disabled');

						console.log('hide');
						$('.sums').hide();

						$('.maintenance_form_toggler').removeClass('disabled');

						$('.calc-total-value').html(' <span class="small-text">по запросу**</span>');

						$('.disclaimer_zakaz').show();
/*
						$('.total-default').show();
						$('.total-default').html('Свяжитесь<br/>с дилером!');
*/
/*
						$('.calc-total-value').hide()
						$('.calc-total-value::after').hide();
*/
					}
				}
			);
		}
	}


	// slider
	$('.maintenance-slider-wrapper') && createSlider ();

	function createSlider () {
		var $el = $('.maintenance-slider'),
			$cut = $el.find('.maintenance-slider-cut'),
			$views = $el.find('.views'),
			$view = $el.find('li.view'),
			$nav = $el.find('.slide_nav'),
			$prev = $nav.find('.slider-prev'),
			$next = $nav.find('.slider-next'),
			$pag = $nav.find('.paginator'),
			o = {
				total: $view.length,
				width: $cut.width(),
				speed: 500,
				index: 0
			};
		$view.width(o.width);
		$views.width(o.width * o.total);
		$pag.text(o.index + 1 + ' / ' + o.total);

		$(window).on('resize', function () {
			o.width = $cut.width();
			$view.width(o.width);
			$views.width(o.width * o.total).css({left: -o.index * o.width +'px'});
		});
		function moveSlide(index) {
			$view.removeClass('alive').eq(o.index).addClass('alive');
			$views.stop().animate({left: -o.index * o.width +'px'}, o.speed, "easeInOutExpo").promise().done(function() {
				$pag.text(o.index + 1 + ' / ' + o.total);
			});
		};
		$prev.click(function() {
			o.index -= 1;
			moveSlide(o.index = (o.index < 0) ? o.total - 1 : o.index);
		});
		$next.click(function() {
			o.index += 1;
			moveSlide(o.index = (o.index > o.total - 1) ? 0 : o.index);
		});
		$el.addClass('loaded');
	}
/*
});
$(function(){
*/
	//if ($('.car-wrap').length) {
/*
		$('.drop-down--models').dropit({
			onSelect: refreshLinks
		});
*/
		function refreshLinks() {
			var $wrap = $('.materials-pdf-wrap'),
				$docLink = $wrap.find('.docs-link.docs-link--base-works'),
				types = {
					1: 'maintenance-general',
					2: 'maintenance-solaris',
					3: 'maintenance-suv',
					4: 'maintenance-general'
				},
				thisType = $('.drop-down-item.selected').data('type');
// 				console.log(types[thisType], $(this).find('.drop-down-item.selected'));
			$docLink.attr('href', '/media/downloads/pdf/maintenance/'+types[thisType]+'.pdf');
			if(thisType == 4)
				$('.docs-link--sonata-reglament').show();
			else
				$('.docs-link--sonata-reglament').hide();
		}
	//}

});
// warranty
$(function() {
	var $vinCheckForm = $('.vin-check-form').on('submit', vinCheckFormSubmit),
		$vinCheckFormVin = $vinCheckForm.find('[name=vin]').on('input change keypress', vinCheckInputVal),
		$vinCheckFormSubmit = $vinCheckForm.find('[type=submit]'),
		_vinCode;

	function vinCheckFormSubmit () {
		$vinCheckFormVin.removeClass('has-error');
		_vinCode = $vinCheckFormVin.val();
		if ($vinCheckFormSubmit.hasClass('disabled')) return;
		if (_vinCode !== '') {
// 			console.info('VIN-code: '+_vinCode+'.');
// 			console.info('Getting result..');
			$.ajax({
				url : 'https://www.hyundai.ru/requestnew/checkvin',
				data: {
                    vin: _vinCode
                },
				beforeSend: function(){
					$vinCheckFormSubmit.addClass('disabled');
					$('.vin-check-result.vin-yes').slideUp();
					$('.vin-check-result.vin-no').slideUp();
				},
				complete: function(){
					$vinCheckFormSubmit.removeClass('disabled');
				},
				success: function(response) {
                    if (response == 'Y') {
	                   $('.vin-check-result.vin-yes').slideDown();
                    } else if (response == 'N') {
	                   $('.vin-check-result.vin-no').slideDown();
                    }
				},
				error: function() {
                    alert('Something goes wrong.. Please, try again later.');
                    console.warn('Server response error. See AJAX request details.');
				}
			});

		} else {
			console.warn('Exception: VIN-code can not be empty.');
			$vinCheckFormVin.addClass('has-error');
		}
		return false;
	}
	function vinCheckInputVal () {
		$vinCheckFormVin.val() !== '' && $vinCheckFormVin.removeClass('has-error');
	}

});
// manuals car slider
$(function() {
	$('.manuals-car-silder').length && createManualsCarSlider();

	function createManualsCarSlider() {
		var $sliderWrap = $('.car-slider_wrap'),
			$slider = $sliderWrap.find('.car-slider'),
			$item = $slider.find('li').on('click', changeDocuments),
			$prev = $sliderWrap.find('.slider-prev'),
			$next = $sliderWrap.find('.slider-next'),
			total = $item.length,
			width = $item.width(),
			slideScopes = 5,
			index = 0,
			moveBy = 1,
			speed = 250;
		changeDocuments.apply($item.eq(0));
		$slider.width( total * width );
		function moveSlide(index) {
			$slider.stop().animate({left: -index * width +'px'}, speed);
		};
		$prev.click(function() {
			index -= moveBy;
			moveSlide(index = (index < 0) ? total - slideScopes : index);
		});
		$next.click(function() {
			index += moveBy;
			moveSlide(index = (index > total - slideScopes) ? 0 : index);
		});
		$(window).resize(function(){
			slideScopes = ($(this).width() < 1100) ? 4 : 5;
		});
		function changeDocuments () {
			var _model = $(this).data('model');
			$item.removeClass('active');
			$(this).addClass('active');
			$('.content').find('.avaible-documents').hide().filter('[data-model='+_model+']').show();
		}
	}
});
// bodyworks
$(function() {
	// slider obj
	var bwSlider = {
		init: function () {
			var self = this;
			this.$slider = $('.bw-slider');
			this.$sliderCut = this.$slider.find('.bw-slider-cut');
			this.$sliderContent = this.$slider.find('.bw-slides');
			this.$item = this.$slider.find('li');
			this.$controls = this.$slider.parent().find('.bodyworks-highlights-nav-item').on('click', self, this.moveSlide);
			this.$prev = this.$controls.filter('.prev');
			this.$next = this.$controls.filter('.next');
			this.total = this.$item.length;
			this.width = this.$item.outerWidth();
			this.slideScopes = 3;
			this.index = 0;
			this.moveBy = 3;
			this.refreshActives();
		},
		refreshActives: function () {
			this.$item.removeClass('active');
			for (var i=this.index;i < this.slideScopes+this.index; i++) {
				this.$item.eq(i).addClass('active');
			}
		},
		moveSlide: function (event) {
			var _self = event.data;
			if (this.classList.contains('disabled')) return false;
			_self.index = $(this).is(_self.$prev) ? _self.index-=_self.moveBy : _self.index+=_self.moveBy;
			if (_self.index > 0) {
				_self.$prev.removeClass('disabled');
				if (_self.index < _self.total - _self.slideScopes) {
					_self.$next.removeClass('disabled');
				} else {
					_self.$next.addClass('disabled');
				}
			} else {
				_self.$prev.addClass('disabled');
			}
			_self.$sliderContent.css({marginLeft: -_self.index * _self.width +'px'});
// 			console.log(-_self.index, _self.width);
			_self.refreshActives();
			return false;
		}
	}
	$('.bw-slider').length && bwSlider.init(); // init slider if it exists
	// bw views
	var bwViews = {
		init: function () {
			var self = this;
			this.$views = $('.bw-views');
			this.$view = this.$views.find('.bw-view');
			this.$wrapper = $('.bw-view-pluses');
			this.$pluses = this.$wrapper.find('.bw-view-plus');
			this.$plusesLinks = this.$pluses.find('.bw-view-plus-icon');
			this.$navs = $('.bw-views-nav-btn');
			this.index = 0;
			this.total = this.$view.length - 1;
			this.width = this.$view.width();
			this.bindEvents();
			this.changeStates(this);
		},
		bindEvents: function () {
			this.$plusesLinks
				.on('mouseover', this, this.overThis)
				.on('click', false);
			this.$navs.on('click', this, this.slide);
		},
		overThis: function (_this) {
			_this.data.$pluses.removeClass('over');
			$(this).parent('.bw-view-plus').addClass('over');
		},
		slide: function (self) {
			var _this = self.data;
			if (this.classList.contains('disabled')) return;

			if (this.classList.contains('next')) {
				++_this.index;
				_this.index === _this.total && _this.$navs.filter('.next').addClass('disabled');
				_this.index > 0 && _this.$navs.filter('.prev').removeClass('disabled');
			} else {
				--_this.index;
				_this.index === 0 && _this.$navs.filter('.prev').addClass('disabled');
				_this.index < _this.total && _this.$navs.filter('.next').removeClass('disabled');
			}
			_this.$views.css({marginLeft: - _this.index * _this.width +'px'});
			_this.changeStates(_this);
			return false;
		},
		changeStates: function (_this) {
			_this.$view.removeClass('active').eq(_this.index).addClass('active');
		}
	}
	$('.bw-views').length && bwViews.init();
	$('.bodyworks-insurance-osago-rules').on('click', function(){
		$(''+$(this).attr('href')+'').fadeToggle(500, "easeInOutExpo").toggleClass('active');
	});
	$('.bodyworks-popup').on('click', function(e){
		if ($(e.target).closest('.bodyworks-popup-body').length === 0 || $(e.target).is('.bodyworks-popup__close')) {
			e.preventDefault();
			$('.bodyworks-popup').fadeToggle(500, "easeInOutExpo").toggleClass('active');
		}
	});
});
// parts
$(function() {
	// pluses obj
	var partsPl = {
		init: function () {
			var self = this;
			this.bindEvents();
		},
		bindEvents: function () {

		},
		clickThis: function (_this) {
			$(this).parent('.parts-view-plus').addClass('over');
		}
	},
	// big slider
	partsSl = {
		init: function() {
			var self = this;

			this.$plusWrap = $('.parts-view-pluses');
			this.$pluses = this.$plusWrap.find('.parts-view-plus');

			this.$wrapper = $('.parts-slider');
			this.$nav = this.$wrapper.find('.parts-slider-nav');
			this.$navItems = this.$nav.find('.parts-slider-nav-item');
			this.$navItemActive = this.$navItems.filter('.active').length !== 0 ? this.$navItems.filter('.active') : this.$navItems.eq(0);
			this.$slider = this.$wrapper.find('.parts-slider-content');
			this.$slides = this.$slider.find('.parts-slide');
			this.$slideActive = this.$slides.filter('.active').length !== 0 ? this.$slides.filter('.active') : this.$slides.eq(0);
			this._index = 0;
			this.total = this.$slides.length;
			this.$imageCont = this.$wrapper.find('.parts-slide-image-container');

			this.$imageCont.twentytwenty({
				default_offset_pct: 0.5
			});

			this.bindEvent();
		},
		bindEvent: function() {
			this.$navItems.on('click', this, this.changeActives);
			this.$pluses.on('click', this, this.changeActives);
			this.changeAll();
		},
		clickPlus: function(self) {
			var self = self.data,
				curi = $(this).index();
		},
		changeActives: function(self) {
			var self = self.data;
// 			self._index = $(this).index();
			self._index = this.classList.contains('parts-view-plus') ? $(this).attr('data-index') : $(this).index();
			self.$navItemActive = self.$navItems.eq(self._index);
			self.$slideActive = self.$slides.eq(self._index);
			self.changeAll();
			if (this.classList.contains('parts-view-plus')) {
				$('html, body').stop().animate({scrollTop: self.$nav.offset().top-20}, 800, "easeInOutExpo");
			}
			$(window).trigger('resize');
			return false;
		},
		changeAll: function() {
			var self = this;
			self.$slider.find('.parts-slide').eq(-1).after(self.$slideActive);
			self.$navItems.removeClass('active');
			self.$slides.removeClass('active').stop().slideUp(500, "easeInOutExpo");
			self.$navItemActive.addClass('active');
			self.$slideActive.addClass('active').stop().slideDown(500, "easeInOutExpo");
			$(window).trigger('resize');
		}
	}
	$('.parts-views').length && partsPl.init();
	$('.parts-slider').length && partsSl.init();
});
// plugins
(function($){
  // https://github.com/zurb/twentytwenty
  $.fn.twentytwenty = function(options) {
    var options = $.extend({default_offset_pct: 0.5, orientation: 'horizontal'}, options);
    return this.each(function() {

      var sliderPct = options.default_offset_pct;
      var container = $(this);
      var sliderOrientation = options.orientation;
      var beforeDirection = (sliderOrientation === 'vertical') ? 'down' : 'left';
      var afterDirection = (sliderOrientation === 'vertical') ? 'up' : 'right';


      container.wrap("<div class='twentytwenty-wrapper twentytwenty-" + sliderOrientation + "'></div>");
      container.append("<div class='twentytwenty-overlay'></div>");
      var beforeImg = container.find("img:first");
      var afterImg = container.find("img:last");
      container.append("<div class='twentytwenty-handle'></div>");
      var slider = container.find(".twentytwenty-handle");
      slider.append("<span class='twentytwenty-" + beforeDirection + "-arrow'></span>");
      slider.append("<span class='twentytwenty-middle'></span>");
      slider.append("<span class='twentytwenty-" + afterDirection + "-arrow'></span>");
      container.addClass("twentytwenty-container");
      beforeImg.addClass("twentytwenty-before");
      afterImg.addClass("twentytwenty-after");

      var overlay = container.find(".twentytwenty-overlay");
      overlay.append("<div class='twentytwenty-before-label'></div>");
      overlay.append("<div class='twentytwenty-after-label'></div>");

      var calcOffset = function(dimensionPct) {
        var w = beforeImg.width();
        var h = beforeImg.height();
        return {
          w: w+"px",
          h: h+"px",
          cw: (dimensionPct*w)+"px",
          ch: (dimensionPct*h)+"px"
        };
      };

      var adjustContainer = function(offset) {
      	if (sliderOrientation === 'vertical') {
      	  beforeImg.css("clip", "rect(0,"+offset.w+","+offset.ch+",0)");
      	}
      	else {
          beforeImg.css("clip", "rect(0,"+offset.cw+","+offset.h+",0)");
    	}
        container.css("height", offset.h);
      };

      var adjustSlider = function(pct) {
        var offset = calcOffset(pct);
        slider.css((sliderOrientation==="vertical") ? "top" : "left", (sliderOrientation==="vertical") ? offset.ch : offset.cw);
        adjustContainer(offset);
      }

      $(window).on("resize.twentytwenty", function(e) {
        adjustSlider(sliderPct);
      });

      var offsetX = 0;
      var offsetY = 0;
      var imgWidth = 0;
      var imgHeight = 0;

      slider.on("movestart", function(e) {
        if (((e.distX > e.distY && e.distX < -e.distY) || (e.distX < e.distY && e.distX > -e.distY)) && sliderOrientation !== 'vertical') {
          e.preventDefault();
        }
        else if (((e.distX < e.distY && e.distX < -e.distY) || (e.distX > e.distY && e.distX > -e.distY)) && sliderOrientation === 'vertical') {
          e.preventDefault();
        }
        container.addClass("active");
        offsetX = container.offset().left;
        offsetY = container.offset().top;
        imgWidth = beforeImg.width();
        imgHeight = beforeImg.height();
      });

      slider.on("moveend", function(e) {
        container.removeClass("active");
      });

      slider.on("move", function(e) {
        if (container.hasClass("active")) {
          sliderPct = (sliderOrientation === 'vertical') ? (e.pageY-offsetY)/imgHeight : (e.pageX-offsetX)/imgWidth;
          if (sliderPct < 0) {
            sliderPct = 0;
          }
          if (sliderPct > 1) {
            sliderPct = 1;
          }
          adjustSlider(sliderPct);
        }
      });

      container.find("img").on("mousedown", function(event) {
        event.preventDefault();
      });

      $(window).trigger("resize.twentytwenty");
    });
  };

})(jQuery);
// jquery.event.move
// 1.3.6
// Stephen Band
(function(fn) {
	if (typeof define === 'function' && define.amd) {
        define([], fn);
    } else if ((typeof module !== "undefined" && module !== null) && module.exports) {
        module.exports = fn;
	} else {
		fn();
	}
})(function(){
	var assign = Object.assign || window.jQuery && jQuery.extend;

	// Number of pixels a pressed pointer travels before movestart
	// event is fired.
	var threshold = 8;

	// Shim for requestAnimationFrame, falling back to timer. See:
	// see http://paulirish.com/2011/requestanimationframe-for-smart-animating/
	var requestFrame = (function(){
		return (
			window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame ||
			window.oRequestAnimationFrame ||
			window.msRequestAnimationFrame ||
			function(fn, element){
				return window.setTimeout(function(){
					fn();
				}, 25);
			}
		);
	})();

	var ignoreTags = {
			textarea: true,
			input: true,
			select: true,
			button: true
		};

	var mouseevents = {
		move:   'mousemove',
		cancel: 'mouseup dragstart',
		end:    'mouseup'
	};

	var touchevents = {
		move:   'touchmove',
		cancel: 'touchend',
		end:    'touchend'
	};

	var rspaces = /\s+/;


	// DOM Events

	var eventOptions = { bubbles: true, cancelable: true };

	var eventsSymbol = Symbol('events');

	function createEvent(type) {
		return new CustomEvent(type, eventOptions);
	}

	function getEvents(node) {
		return node[eventsSymbol] || (node[eventsSymbol] = {});
	}

	function on(node, types, fn, data, selector) {
		types = types.split(rspaces);

		var events = getEvents(node);
		var i = types.length;
		var handlers, type;

		function handler(e) { fn(e, data); }

		while (i--) {
			type = types[i];
			handlers = events[type] || (events[type] = []);
			handlers.push([fn, handler]);
			node.addEventListener(type, handler);
		}
	}

	function off(node, types, fn, selector) {
		types = types.split(rspaces);

		var events = getEvents(node);
		var i = types.length;
		var type, handlers, k;

		if (!events) { return; }

		while (i--) {
			type = types[i];
			handlers = events[type];
			if (!handlers) { continue; }
			k = handlers.length;
			while (k--) {
				if (handlers[k][0] === fn) {
					node.removeEventListener(type, handlers[k][1]);
					handlers.splice(k, 1);
				}
			}
		}
	}

	function trigger(node, type, properties) {
		// Don't cache events. It prevents you from triggering an event of a
		// given type from inside the handler of another event of that type.
		var event = createEvent(type);
		if (properties) { assign(event, properties); }
		node.dispatchEvent(event);
	}


	// Constructors

	function Timer(fn){
		var callback = fn,
		    active = false,
		    running = false;

		function trigger(time) {
			if (active){
				callback();
				requestFrame(trigger);
				running = true;
				active = false;
			}
			else {
				running = false;
			}
		}

		this.kick = function(fn) {
			active = true;
			if (!running) { trigger(); }
		};

		this.end = function(fn) {
			var cb = callback;

			if (!fn) { return; }

			// If the timer is not running, simply call the end callback.
			if (!running) {
				fn();
			}
			// If the timer is running, and has been kicked lately, then
			// queue up the current callback and the end callback, otherwise
			// just the end callback.
			else {
				callback = active ?
					function(){ cb(); fn(); } :
					fn ;

				active = true;
			}
		};
	}


	// Functions

	function noop() {}

	function preventDefault(e) {
		e.preventDefault();
	}

	function isIgnoreTag(e) {
		return !!ignoreTags[e.target.tagName.toLowerCase()];
	}

	function isPrimaryButton(e) {
		// Ignore mousedowns on any button other than the left (or primary)
		// mouse button, or when a modifier key is pressed.
		return (e.which === 1 && !e.ctrlKey && !e.altKey);
	}

	function identifiedTouch(touchList, id) {
		var i, l;

		if (touchList.identifiedTouch) {
			return touchList.identifiedTouch(id);
		}

		// touchList.identifiedTouch() does not exist in
		// webkit yet… we must do the search ourselves...

		i = -1;
		l = touchList.length;

		while (++i < l) {
			if (touchList[i].identifier === id) {
				return touchList[i];
			}
		}
	}

	function changedTouch(e, data) {
		var touch = identifiedTouch(e.changedTouches, data.identifier);

		// This isn't the touch you're looking for.
		if (!touch) { return; }

		// Chrome Android (at least) includes touches that have not
		// changed in e.changedTouches. That's a bit annoying. Check
		// that this touch has changed.
		if (touch.pageX === data.pageX && touch.pageY === data.pageY) { return; }

		return touch;
	}


	// Handlers that decide when the first movestart is triggered

	function mousedown(e){
		// Ignore non-primary buttons
		if (!isPrimaryButton(e)) { return; }

		// Ignore form and interactive elements
		if (isIgnoreTag(e)) { return; }

		on(document, mouseevents.move, mousemove, e);
		on(document, mouseevents.cancel, mouseend, e);
	}

	function mousemove(e, data){
		checkThreshold(e, data, e, removeMouse);
	}

	function mouseend(e, data) {
		removeMouse();
	}

	function removeMouse() {
		off(document, mouseevents.move, mousemove);
		off(document, mouseevents.cancel, mouseend);
	}

	function touchstart(e) {
		// Don't get in the way of interaction with form elements
		if (ignoreTags[e.target.tagName.toLowerCase()]) { return; }

		var touch = e.changedTouches[0];

		// iOS live updates the touch objects whereas Android gives us copies.
		// That means we can't trust the touchstart object to stay the same,
		// so we must copy the data. This object acts as a template for
		// movestart, move and moveend event objects.
		var data = {
			target:     touch.target,
			pageX:      touch.pageX,
			pageY:      touch.pageY,
			identifier: touch.identifier,

			// The only way to make handlers individually unbindable is by
			// making them unique.
			touchmove:  function(e, data) { touchmove(e, data); },
			touchend:   function(e, data) { touchend(e, data); }
		};

		on(document, touchevents.move, data.touchmove, data);
		on(document, touchevents.cancel, data.touchend, data);
	}

	function touchmove(e, data) {
		var touch = changedTouch(e, data);
		if (!touch) { return; }
		checkThreshold(e, data, touch, removeTouch);
	}

	function touchend(e, data) {
		var touch = identifiedTouch(e.changedTouches, data.identifier);
		if (!touch) { return; }
		removeTouch(data);
	}

	function removeTouch(data) {
		off(document, touchevents.move, data.touchmove);
		off(document, touchevents.cancel, data.touchend);
	}

	function checkThreshold(e, data, touch, fn) {
		var distX = touch.pageX - data.pageX;
		var distY = touch.pageY - data.pageY;

		// Do nothing if the threshold has not been crossed.
		if ((distX * distX) + (distY * distY) < (threshold * threshold)) { return; }

		triggerStart(e, data, touch, distX, distY, fn);
	}

	function triggerStart(e, data, touch, distX, distY, fn) {
		var touches = e.targetTouches;
		var time = e.timeStamp - data.timeStamp;

		// Create a movestart object with some special properties that
		// are passed only to the movestart handlers.
		var template = {
			altKey:     e.altKey,
			ctrlKey:    e.ctrlKey,
			shiftKey:   e.shiftKey,
			startX:     data.pageX,
			startY:     data.pageY,
			distX:      distX,
			distY:      distY,
			deltaX:     distX,
			deltaY:     distY,
			pageX:      touch.pageX,
			pageY:      touch.pageY,
			velocityX:  distX / time,
			velocityY:  distY / time,
			identifier: data.identifier,
			targetTouches: touches,
			finger: touches ? touches.length : 1,
			enableMove: function() {
				this.moveEnabled = true;
				this.enableMove = noop;
				e.preventDefault();
			}
		};

		// Trigger the movestart event.
		trigger(data.target, 'movestart', template);

		// Unbind handlers that tracked the touch or mouse up till now.
		fn(data);
	}


	// Handlers that control what happens following a movestart

	function activeMousemove(e, data) {
		var timer  = data.timer;

		data.touch = e;
		data.timeStamp = e.timeStamp;
		timer.kick();
	}

	function activeMouseend(e, data) {
		var target = data.target;
		var event  = data.event;
		var timer  = data.timer;

		removeActiveMouse();

		endEvent(target, event, timer, function() {
			// Unbind the click suppressor, waiting until after mouseup
			// has been handled.
			setTimeout(function(){
				off(target, 'click', preventDefault);
			}, 0);
		});
	}

	function removeActiveMouse() {
		off(document, mouseevents.move, activeMousemove);
		off(document, mouseevents.end, activeMouseend);
	}

	function activeTouchmove(e, data) {
		var event = data.event;
		var timer = data.timer;
		var touch = changedTouch(e, event);

		if (!touch) { return; }

		// Stop the interface from gesturing
		e.preventDefault();

		event.targetTouches = e.targetTouches;
		data.touch = touch;
		data.timeStamp = e.timeStamp;

		timer.kick();
	}

	function activeTouchend(e, data) {
		var target = data.target;
		var event  = data.event;
		var timer  = data.timer;
		var touch  = identifiedTouch(e.changedTouches, event.identifier);

		// This isn't the touch you're looking for.
		if (!touch) { return; }

		removeActiveTouch(data);
		endEvent(target, event, timer);
	}

	function removeActiveTouch(data) {
		off(document, touchevents.move, data.activeTouchmove);
		off(document, touchevents.end, data.activeTouchend);
	}


	// Logic for triggering move and moveend events

	function updateEvent(event, touch, timeStamp) {
		var time = timeStamp - event.timeStamp;

		event.distX =  touch.pageX - event.startX;
		event.distY =  touch.pageY - event.startY;
		event.deltaX = touch.pageX - event.pageX;
		event.deltaY = touch.pageY - event.pageY;

		// Average the velocity of the last few events using a decay
		// curve to even out spurious jumps in values.
		event.velocityX = 0.3 * event.velocityX + 0.7 * event.deltaX / time;
		event.velocityY = 0.3 * event.velocityY + 0.7 * event.deltaY / time;
		event.pageX =  touch.pageX;
		event.pageY =  touch.pageY;
	}

	function endEvent(target, event, timer, fn) {
		timer.end(function(){
			trigger(target, 'moveend', event);
			return fn && fn();
		});
	}


	// Set up the DOM

	function movestart(e) {
		if (e.defaultPrevented) { return; }
		if (!e.moveEnabled) { return; }

		var event = {
			startX:        e.startX,
			startY:        e.startY,
			pageX:         e.pageX,
			pageY:         e.pageY,
			distX:         e.distX,
			distY:         e.distY,
			deltaX:        e.deltaX,
			deltaY:        e.deltaY,
			velocityX:     e.velocityX,
			velocityY:     e.velocityY,
			identifier:    e.identifier,
			targetTouches: e.targetTouches,
			finger:        e.finger
		};

		var data = {
			target:    e.target,
			event:     event,
			timer:     new Timer(update),
			touch:     undefined,
			timeStamp: e.timeStamp
		};

		function update(time) {
			updateEvent(event, data.touch, data.timeStamp);
			trigger(data.target, 'move', event);
		}

		if (e.identifier === undefined) {
			// We're dealing with a mouse event.
			// Stop clicks from propagating during a move
			on(e.target, 'click', preventDefault);
			on(document, mouseevents.move, activeMousemove, data);
			on(document, mouseevents.end, activeMouseend, data);
		}
		else {
			// In order to unbind correct handlers they have to be unique
			data.activeTouchmove = function(e, data) { activeTouchmove(e, data); };
			data.activeTouchend = function(e, data) { activeTouchend(e, data); };

			// We're dealing with a touch.
			on(document, touchevents.move, data.activeTouchmove, data);
			on(document, touchevents.end, data.activeTouchend, data);
		}
	}

	on(document, 'mousedown', mousedown);
	on(document, 'touchstart', touchstart);
	on(document, 'movestart', movestart);


	// jQuery special events
	//
	// jQuery event objects are copies of DOM event objects. They need
	// a little help copying the move properties across.

	if (!window.jQuery) { return; }

	var properties = ("startX startY pageX pageY distX distY deltaX deltaY velocityX velocityY").split(' ');

	function enableMove1(e) { e.enableMove(); }
	function enableMove2(e) { e.enableMove(); }
	function enableMove3(e) { e.enableMove(); }

	function add(handleObj) {
		var handler = handleObj.handler;

		handleObj.handler = function(e) {
			// Copy move properties across from originalEvent
			var i = properties.length;
			var property;

			while(i--) {
				property = properties[i];
				e[property] = e.originalEvent[property];
			}

			handler.apply(this, arguments);
		};
	}

	jQuery.event.special.movestart = {
		setup: function() {
			// Movestart must be enabled to allow other move events
			on(this, 'movestart', enableMove1);

			// Do listen to DOM events
			return false;
		},

		teardown: function() {
			off(this, 'movestart', enableMove1);
			return false;
		},

		add: add
	};

	jQuery.event.special.move = {
		setup: function() {
			on(this, 'movestart', enableMove2);
			return false;
		},

		teardown: function() {
			off(this, 'movestart', enableMove2);
			return false;
		},

		add: add
	};

	jQuery.event.special.moveend = {
		setup: function() {
			on(this, 'movestart', enableMove3);
			return false;
		},

		teardown: function() {
			off(this, 'movestart', enableMove3);
			return false;
		},

		add: add
	};
});


$(document).ready(function(){

	$(document).on("click", ".maintenance_form_toggler", function(e) {
		e.preventDefault();

		if($(this).hasClass('disabled'))
			return false;

		var $zing_form = $("#maintenance_form");
		//	what = $(this).attr("for");
		//$zing_form.children(".zing_form").first().attr("for", what);
		$zing_form.modal({
			closeClass: "zing_close",
			persist: true,
			autoResize: true,
			overlayCss: {
				background: "#000"
			},
			containerCss: {
				'maxHeight': '100%',
				'height': '100%',
				'bottom': '0',
				'top': '0',
				'left': '0',
				'right': '0',
				'overflow': 'auto'
			},
			zIndex: 500,
			onOpen: function(dialog) {
				dialog.data.show();
				dialog.overlay.stop().fadeIn();
				dialog.container.stop().fadeIn()
				if (dialog.data.outerHeight() > dialog.container.height()) {
					$('body').css('overflow', 'hidden');
				} else {
					dialog.wrap.css({
						'top': (dialog.container.height() / 2) - (dialog.data.height() / 2)
					});
				}
			},
			onShow: function(dialog) {
				dialog.container.on('click.modal', function(e) {
					if ($(e.target).closest('.simplemodal-wrap').length == 0) {
						$.modal.close();
						dialog.container.off('click.modal');
					}
				});
			},
			onClose: function(dialog) {
				dialog.data.stop().fadeOut(function() {
					dialog.container.hide();
					dialog.wrap.css('top', '');
				});
				dialog.overlay.stop().fadeOut(function() {
					$.modal.close();
				});
				if ($('body').css('overflow') === 'hidden') {
					$('body').css('overflow', '');
				}
				if ($('.zing-agreement-popup-wrapper').is(':visible')) {
					$('.zing-agreement-popup-wrapper').fadeOut(500);
				}
			}
		});
	});

	$("#maintenance_form").submit(function(e) {
		e.preventDefault();
		var $mileageRange = $('.calc-controls.mileage-control'),
			$mileageRangeSlider = $mileageRange.find('.mileage-control-item');
		var $this = $(this),
			post_data = {
				name: $this.find(".zing_first_name").sanitize_spaces(),
				surname: $this.find(".zing_last_name").sanitize_spaces(),
				phone: $this.find(".zing_mobile").sanitize_zing_mobile(),
				email: $this.find(".zing_email").sanitize_spaces(),
				agree: $this.find(".zing_rules_agree_cb").prop("checked") ? "Y" : "N",
				model_year: $this.find(".zing_year").sanitize_spaces(),
				model_engine_type: 'Техническое обслуживание',
				comment: $this.find(".zing_comment").val(),
				salutaion: 'Mr.',
				dealer: $('#dealers').attr('data-current'),
				dealername: $('#dealers .drop-down-active-item').text(),
				city: $('#dealer-city .drop-down-active-item').text(),
				model: $('#models').attr('data-current'),
				model_mileage: parseInt($mileageRangeSlider.attr('data-current')) * 1000
			};
		$this.find(".zing_pers_rules_wrp").fadeOut();

		// Пропишем свою валидацию

		var _valid = true;

		$(this).find('input[type=text], input[type=tel], input[type=email], textarea').each(function(){
			if ( $('#mobile').val().indexOf('_') != -1 ) {
				$('#mobile').addClass('error');
				_valid = false;
			}
			if ($(this).val() == '') {
				$(this).addClass('error');
				_valid = false;
			}
		});

		$(this).find('input[type=checkbox]').each(function(){
			if($(this).not(':checked'))
				$(this).addClass('error');
		});

/*
		$(this).find('input[type=tel]').each(function(){
			if($(this).val() == '')
			{
				$(this).addClass('error');
				_valid = false;
			}
		});
*/

		if(_valid)
		{
			// ajax-запрос

			$.ajax({
				url: 'https://www.hyundai.ru/requestnew/ServiceRequestToCRM',
				type: "POST",
				data: post_data,
				success: function(msg) {
					console.log(msg);

					//$("#maintenance_form").reset();

					// И как-то надо сообщить о том, что все огонь

					$('.zing_ok').val('Отправлено!');

					setTimeout(function(){
						$('.zing_ok').val('Отправить заявку');
					}, 3000);
				}
			});


		}

		//$.modal.close();
	});

	$('#maintenance_form').find('input[type=text], input[type=tel], input[type=email], textarea').change(function(){
		$(this).removeClass('error');
	});

	$('#maintenance_form').find('input[type=checkbox]').click(function(){
		$(this).removeClass('error');
	});

	$(".sum-spares__about").on("click", function(){
		$(".sum-spare__popup").fadeIn();
	});

	$(".sum-spare__popup-close").on("click", function(){
		$(".sum-spare__popup").fadeOut();
	});


	$('.calc-block-header').on('click', function(){
		$('.calc-block-free').toggleClass('open-free');
	});


});
//Scroll to anchor /service/parts
(function(){
	$('.js-scroll-to-selling').on('click', function(e) {
		e.preventDefault();

		$('html, body').animate({ scrollTop: $('#selling').offset().top }, 1000);
	})
})();



/* Форма в Запчастях - попап */

$(function(){
	var partsModal = new Spreader('#parts-template', {
			onMount: function() {
				this.$container.find('[data-form-id="parts-form"]')
					.validit({
						onSuccessSubmit: function(){
							var data = this.serialized,
								submitButton = this.$element.find('[type="submit"]');
							// send xhr
							$.ajax({
								url: 'https://www.hyundai.ru/requestnew/partsRequest',
								type: 'POST',
								data: data,
								success: function(r){
									if (r === 'Y') {
										partsModal.close()
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
					.find('[type=tel]').inputmask({
						mask: '+ 7 999 999-99-99',
						showMaskOnHover: false,
						greedy: false
					})
			}
		})

	$('.showPartsPopup').on('click', function(){
		partsModal.show();
	});
});