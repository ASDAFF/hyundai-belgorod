/* pip flat solaris 2017 redesign scripts */
$(function(){
	//'use strict'
	try {
		// cache commons
		var $window = $(window),
			scrolled = $window.scrollTop(),
			$doc = $(document),
			$root = $('html, body');
		
		(function detectNavigator () {
			var _ua = navigator.userAgent, _detected;
			if (_ua.match(/iPad|iPhone|iPod/) && !window.MSStream) {
				_detected = 'is-ios';
			} else if (_ua.match(/MSIE |Trident\/|Edge\//)) {
				_detected = 'is-ie';
			} else if (_ua.match(/Android /)) {
				_detected = 'is-android';
			}
			if (_detected) $('html').addClass(_detected);
		})();

		// stop root amnimations of user actions (mouse scroll ex.)
// 		$root.on('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function(){$('html,body').stop()});
		// define using navigator transition end event
		function getTransitionEnd(){
			var el = document.createElement('div');
			var transEndEventNames = {
				transition       : 'transitionend',
				MozTransition    : 'transitionend',
				WebkitTransition : 'webkitTransitionEnd',
				OTransition      : 'oTransitionEnd otransitionend'
			};
			for (var name in transEndEventNames) {
				if (el.style[name] !== undefined) {
					return transEndEventNames[name];
				}
			}
			return false;
		};
		var _transitionEnd = getTransitionEnd();
		// fast menu
		var $fastMenu = $('.fast-menu').on('click', function(e){
				if ($(e.target).closest('.fast-menu-button--parent').length !== 0) {
					$(this).toggleClass('is-expanded');
					e.preventDefault();
				}
			});
		// primary navigation
		var $nav = $('.pip-primary-nav').hover(function() {$.data(this, 'hover', true)}, function() {$.data(this, 'hover', false)}).data('hover', false),
			navPos = document.getElementsByClassName('pip-primary-nav-pos')[0].getBoundingClientRect().top, // primary menu static positions (depends of its parent '.pip-primary-nav-pos' el)
			$navLinks = $nav.find('a[content-type]').on('click', checknavlink),
			isNavBusy = false;

		var toggleSubNav = function(ev, forceClose){
			if ($nav.hasClass('is-sub-active') || forceClose === true) {
				$nav.hasClass('is-sub-active') && $nav.removeClass('is-sub-active');
			} else {
				if (navPos > (Math.round($('.pip-sub-nav-w')[0].scrollHeight / 10) * 10) && !$nav.hasClass('is-fixed')) {
					$nav.addClass('is-at-top');
				} else {
					$nav.hasClass('is-at-top') && $nav.removeClass('is-at-top');
				}
				$nav.addClass('is-sub-active');
			}
			return false;
		}
		function toggleFixedNav(){
			if (navPos > 0) {
				$nav.hasClass('is-fixed') && $nav.removeClass('is-fixed');
			} else {
				$nav.addClass('is-fixed');
			}
		}
		toggleFixedNav();
		// process clicked nav links:
		// - check if need to expand subnav, if true - just open it;
		// - check if need to switch content type;
		// - check if need to scroll to section after content type was checked only (and after swithing if was needed);
		// - scroll to section if need;
		function checknavlink(ev){
			if (isNavBusy) return false;
			var _this = $(this),
				_contType = _this.attr('content-type'),
				_anchor = _this.attr('data-anchor'),
				_href = _this.attr('href').replace('#','');

			if ($('.content-type').filter('[content-type='+_contType+']').hasClass('is-active')) {
				// scroll only
				scrollToSection(_anchor);
			} else {
				// need change content
				switchContent(_contType, _anchor);
			}

			toggleSubNav(ev, _href === ''); // toggling subnav
			return false;
		}

		function switchContent(_contType, _anchor){ // @ _contType [string] - content type to switch content; @ _anchor [string] - [data-anchor] target section to scroll
			if (!_contType || !_contType === 'string' || _contType.length === 0 || isNavBusy) return;
			var _cont = $('.content-type'),
				_newActiveCont = _cont.filter('[content-type='+_contType+']'),
				_prevActiveCont = _cont.filter('.is-active'),
				_newActiveNav = $navLinks.filter('[data-active="true"]'),
				_currSubsectionText = $nav.find('.pip-primary-nav-current');

			if (_contType === 'explore') {
				if (_anchor) {
					$navLinks.removeAttr('data-active').filter('[content-type='+_contType+']').attr('data-active', true);
					_currSubsectionText.show();
					scrollToSection ('nav-pos', function () {
						_prevActiveCont.fadeOut(500).promise().done(function(){
							$(this).removeClass('is-active');
							_newActiveCont.fadeIn(500, function(){
								$(this).addClass('is-active');
								scrollToSection (_anchor);
							});
						});

					});
				}
			} else {
				$navLinks.removeAttr('data-active').filter('[content-type='+_contType+']').attr('data-active', true);
				scrollToSection ('nav-pos', function () {
				_currSubsectionText.hide();
					isNavBusy = true;
					_prevActiveCont.fadeOut(500).promise().done(function(){
						$(this).removeClass('is-active');
						_newActiveCont.fadeIn(500, function(){
							$(this).addClass('is-active');
							isNavBusy = false;
						});
					});
				});
			}
		}
		function scrollToSection(_anchor, callback){ // find and scroll to element in any [.content-type] block with [data-anchor="{_anchor}"] @ [string]
			if (!_anchor || !_anchor === 'string' || _anchor.length === 0 || isNavBusy) return;
			var $target = $('.content-type [data-anchor='+_anchor+']'), // find target in content area first
				_pxtarget,
				_offset;

			if ($target.length === 0) { // else find in all document
				$target = $('[data-anchor='+_anchor+']');
				_offset = 1;
			} else {
				_offset = 1 - $nav.height();
			}
			_pxtarget = $target.offset().top + _offset;

			if (scrolled !== _pxtarget) {
				$root.stop().animate({scrollTop: _pxtarget}, 1000, 'motion').promise().done(function(){
					callback instanceof Function && callback();
				});
			} else {
				callback instanceof Function && callback();
			}
		}

		// sections
		// difine sections-based fns
		var
		videos = {
			init: function () {
				var self = this;
				self.ready = true;
				self.el = $('[data-role="js-video"]')
				self.sl = self.el.find('.pip-slider')
				self.slides = self.el.find('[data-slide]')
				self.total = self.slides.length
				self.index = 1
				self.speed = 0.75
				self.speed2 = 1
				self.dir
				self.frameTpl = '<iframe class="embedded_vd" width="100%" height="" src="" frameborder="0" allowfullscreen></iframe>';
				self.cubic1 = 'cubic-bezier(.65,.05,.36,1)'
				self.cubic2 = 'cubic-bezier(.47,0,.74,.71)'
				self._controls = '<div class="pip-slider-controls"><button class="pip-slider-control pip-slider-control--btn" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg corner-right"><use xlink:href="#corner-left"></use></svg></button><button class="pip-slider-control pip-slider-control--btn" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg corner-right"><use xlink:href="#corner-right"></use></svg></button><span class="pip-slider-current"><strong data-role="_current">'+self.index+'</strong>/<span data-role="_all">'+self.total+'</span></span></div>'
				if (self.total > 1){
					self.sl.append(self._controls);
					self.controls = {}
					self.controls.btns = self.sl.find('.pip-slider-control--btn')
					self.controls.current = self.sl.find('[data-role="_current"]')
					self.controls.total = self.sl.find('[data-role="_all"]')
				}
				self.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
				self.slides.filter(':first-of-type').attr('data-active', true);
				self.bind();
				self.buildFrame();
			},
			bind: function () {
				var self = this;
				self.controls && self.controls.btns.on('click', function(){
					if (self.ready) {
						self.dir = $(this).attr('data-role');
						if (self.dir === 'prev') {
							self.index = self.index < 2 ? self.total : --self.index;
						} else if (self.dir === 'next') {
							self.index = self.index < self.total ? ++self.index : 1;
						}
						self.moveSlide();
					}
				});
				self.slides.on('click', self.exeVideo);
			},
			moveSlide: function () {
				var self = this;
				self.ready = false;
				self.controls.current.text(self.index);

				var _activeSlide = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlide = self.slides.filter('[data-active=true]');

				if (self.dir === 'prev') {
					_prevSlide
						.removeAttr('data-active')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed2+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css3transfrom('translate(100%, 0)')
								.css('zIndex', '');
							self.ready = true;
						});
					_activeSlide
						.attr('data-active', true)
						.css3transfrom('translate(-100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})
				} else if (self.dir === 'next') {
					_prevSlide
						.removeAttr('data-active')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed2+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css3transfrom('translate(100%, 0)')
								.css('zIndex', '')
							self.ready = true
						});

					_activeSlide
						.attr('data-active', true)
						.css('zIndex', 5)
						.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
						.css3transfrom('translate(0, 0)')
				}
			},
			buildFrame: function (){
				var self = this;
				self.slides.each(function(){
					$(this).find('.pip-slide__content').append(self.frameTpl);
				});
				return false;
			},
			exeVideo: function (){
				var _this = $(this),
					_id = _this.attr('data-src'),
					_src = 'https://www.youtube.com/embed/'+_id+'?rel=0&amp;showinfo=0;autoplay=1';
				if (!_id) return false;
				_this.addClass('is-playing');
				_this.find('.embedded_vd').attr('src', _src).fadeIn(500);
				_this.find('.video-preview').fadeOut(500);
				return false;
			}
		},
		highlights = {
			init: function () {
				var self = this;

				self.el = $('[data-role="js-hlsl"]');
				self.sl = self.el.find('.pip-slider');
				self.slides = self.el.find('[data-slide]');
				self.total = self.slides.length;
				self.index = {};
				self.index.active = 1;
				self.index.ready_1 = self.index.active + 1;
				self.index.ready_2 = self.index.ready_1 + 1;
				self.isReady = true;
				self.speed = 0.75;
				self.direction;
				self.cubic1 = 'cubic-bezier(.65,.05,.36,1)';
				self.cubic2 = 'cubic-bezier(.47,0,.74,.71)';
				self.controls = {};
				self.controls._tpl = '<div class="pip-slider-controls"><span class="pip-slider-current"><strong data-role="_current">'+self.index.active+'</strong> / <span data-role="_all">'+self.total/2+'</span></span></div>';
				self.sl.append(self.controls._tpl);
				self.controls.w = self.sl.find('.pip-slider-controls');
				self.controls.current = self.controls.w.find('[data-role="_current"]');
				self.controls.nav = self.sl.find('.pip-slider-nav [data-role]');
				self.bind();

				// init dom
				self.slides.each(function(){
					var _this = $(this);
					if (_this.attr('data-slide') == self.index.active) {
						_this.attr('data-active', 'active');
					} else if (_this.attr('data-slide') == self.index.ready_1 || _this.attr('data-slide') == self.index.ready_2) {
						_this.attr('data-active', 'ready');
					} else {
						_this.attr('data-active', 'passive');
					}
				});
				self.bind();
			},
			bind: function () {
				var self = this;
				self.controls.nav.on('click', function(ev){
					ev.preventDefault();
					if (self.isReady) {
						self.direction = $(this).attr('data-role');
						self.move();
					}
				});
			},
			move: function () {
				var self = this;
				// TODO: OPTIMIZE

				var _cssActive,
					_cssReady_1,
					_cssReady_2,
					_cssPassive,
					_cssPassive2,
					_transitionActive,
					_transitionReady,
					_transitionPassive;

				// get indexes
				if (self.direction === 'prev') {
					self.isReady = false;
					self.index.ready_2 = self.index.ready_1;
					self.index.ready_1 = self.index.active;
					self.index.active = self.index.active < 2 ? self.total : --self.index.active;

					_cssActive = {'z-index': 5, 'left': 0, 'width': '50.1%'};
					_cssReady_1 = {'z-index': 5, 'left': '50%', 'width': '25.1%'};
					_cssReady_2 = {'z-index': 5, 'left': '75%', 'width': '25.1%'};
					_cssPassive = {'z-index': 6, 'left': 0, 'width': '0'};
					_cssPassive2 = {'z-index': '', 'left': '100%', 'width': '0'};;

					_transitionActive	= 'left '+self.speed+'s '+self.cubic1+' 0s, width '+self.speed+'s '+self.cubic1+' 0s';
					_transitionReady	= 'left '+self.speed+'s '+self.cubic1+' 0.01s, width '+self.speed+'s '+self.cubic1+' 0.01s';
					_transitionPassive	= 'left '+self.speed+'s '+self.cubic2+' 0.01s, width '+self.speed+'s '+self.cubic2+' 0.01s';

					self.slides.each(function(){
						var _slide = $(this);
						if (_slide.attr('data-slide') == self.index.active) {
							_slide
								.css3transition('none')
								.css(_cssPassive)
								.stop()
								.animate({'null': 1}, 10).promise().done(function() {
									$(this)
										.css3transition(_transitionActive)
										.css(_cssActive)
										.attr('data-active', 'active')
										.one(_transitionEnd, function(){
											self.isReady = true;
										});
								});
						} else if (_slide.attr('data-slide') == self.index.ready_1) {
							_slide
								.stop()
								.animate({'null': 1}, 10).promise().done(function() {
									$(this)
										.css3transition(_transitionReady)
										.css(_cssReady_1)
										.attr('data-active', 'ready');
								});

						} else if (_slide.attr('data-slide') == self.index.ready_2) {
							_slide
								.stop()
								.animate({'null': 1}, 10).promise().done(function() {
									$(this)
										.css3transition(_transitionReady)
										.css(_cssReady_2)
										.attr('data-active', 'ready');
								});

						} else {
							_slide.animate({'null': 1}, 10).promise().done(function() {
								$(this)
									.css3transition(_transitionPassive)
									.css(_cssPassive2)
									.attr('data-active', 'passive');
							});
						}
					});
				} else if (self.direction === 'next') {
					self.isReady = false;
					self.index.active = self.index.ready_1;
					self.index.ready_1 = self.index.ready_2;
					self.index.ready_2 = self.index.ready_2 < self.total ? ++self.index.ready_2 : 1;

					_cssActive = {'z-index': 5, 'left': 0, 'width': '50.1%'};
					_cssReady_1 = {'z-index': 6, 'left': '50%', 'width': '25.1%'};
					_cssReady_2 = {'z-index': 6, 'left': '75%', 'width': '25.1%'};
					_cssPassive = {'z-index': '', 'left': 0, 'width': '0'};
					_cssPassive2 = {'z-index': '', 'left': '100%', 'width': '0'};

					_transitionActive	= 'left '+self.speed+'s '+self.cubic1+' 0.01s, width '+self.speed+'s '+self.cubic1+' 0.01s';
					_transitionReady	= 'left '+self.speed+'s '+self.cubic1+' 0s, width '+self.speed+'s '+self.cubic1+' 0s';
					_transitionPassive	= 'left '+self.speed+'s '+self.cubic2+' 0.01s, width '+self.speed+'s '+self.cubic2+' 0.01s';

					self.slides.each(function(){
						var _slide = $(this);
						if (_slide.attr('data-slide') == self.index.active) {
							_slide
								.stop()
								.animate({'null': 1}, 10).promise().done(function() {
									$(this)
										.css3transition(_transitionActive)
										.css(_cssActive)
										.attr('data-active', 'active')
										.one(_transitionEnd, function(){
											self.isReady = true;
										});
								});
						} else if (_slide.attr('data-slide') == self.index.ready_1) {
							_slide
								.stop()
								.animate({'null': 1}, 10).promise().done(function() {
									$(this)
										.css3transition(_transitionReady)
										.css(_cssReady_1)
										.attr('data-active', 'ready');
								});

						} else if (_slide.attr('data-slide') == self.index.ready_2) {
							_slide
								.css3transition('none')
								.css(_cssPassive2)
								.stop()
								.animate({'null': 1}, 10).promise().done(function() {
									$(this)
										.css3transition(_transitionReady)
										.css(_cssReady_2)
										.attr('data-active', 'ready');
								});

						} else {
							_slide.animate({'null': 1}, 10).promise().done(function() {
								$(this)
									.css3transition(_transitionPassive)
									.css(_cssPassive)
									.attr('data-active', 'passive')
							});
						}
					});
				}
				self.controls.current.text(self.index.active > self.total/2 ? self.index.active - (self.total /2) : self.index.active);
			}
		},
		exterior = {
			init: function () {
				var self = this;

				self.el				= $('[data-role="js-exterior"]');
				self.sl				= self.el.find('.pip-slider.pip-slider--exterior');
				self.slides			= self.sl.find('[data-slide]');
				self.total			= self.slides.length;
				self.index			= 1;
				self.speed			= 0.75;
				self.cubic1			= 'cubic-bezier(.65,.05,.36,1)';
				self.cubic2			= 'cubic-bezier(.47,0,.74,.71)';
				self.dir			= 'next';
				self.plusWrap 		= self.sl.find('.exterior-plus-area');
				self.extpop 		= {};
				self.extpop.el		= $('[data-role="js-ext-pluser"]');
				self.extpop.holder	= self.extpop.el.find('.pip-slides-holder');
				self.extpop.btns	= self.sl.find('.plus[data-for]');
				self.extpop.slides 	= self.extpop.el.find('[data-slide]');
				self.extpop.index 	= 1;
				self.extpop.total 	= self.extpop.slides.length ? self.extpop.slides.length : 'error';
				self.extpop.dir;
				self.isReady = 0;

				self._transitionVal	= 'transform '+self.speed+'s '+self.cubic1+' 0s, opacity '+self.speed+'s '+self.cubic1+' 0s';
				self._transitionVal2	= 'transform '+self.speed+'s '+self.cubic2+' 0s';
				self._transitionVal3	= 'transform '+self.speed+'s '+self.cubic2+' 0.05s';
				self._transitionVal4	= 'transform '+self.speed+'s '+self.cubic1+' 0s';
				self._transitionVal4	= 'transform '+self.speed+'s '+self.cubic1+' 0s';

				// init main exterior slider dom
				if (self.total > 1) {
					self._controls = '<div class="pip-slider-controls pip-slider-controls--arrows"><button class="pip-slider-control pip-slider-control--arrow" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg arrow-left"><use xlink:href="#arrow-left"></use></svg></button><button class="pip-slider-control pip-slider-control--arrow" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg arrow-right"><use xlink:href="#arrow-right"></use></svg></button></div><div class="pip-slider-controls pip-slider-controls--bullets"></div>'
					self._bullet = '<button class="pip-slider-control pip-slider-control--bullet"></button>'
					self.sl.append(self._controls);
					self.controls = self.sl.find('.pip-slider-controls');
					self.arrw = self.controls.find('.pip-slider-control.pip-slider-control--arrow')
					self.bullets = self.controls.filter('.pip-slider-controls.pip-slider-controls--bullets')
					self.bullet
					for (var i=0; i<self.total;++i) {
						self.bullets.append(self._bullet)
					}
					self.bullet = self.controls.find('.pip-slider-control.pip-slider-control--bullet')
					self.bullet.filter(':first-of-type').attr('data-active', true)
					self.control = self.controls.find('.pip-slider-control')
				}
				self.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
				self.slides.filter(':first-of-type').attr('data-active', true);

				// init popups slider dom
				if (self.extpop.total > 1) {
					self.extpop._controls = '<div class="pip-slider-controls"><button class="pip-slider-control pip-slider-control--btn" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg arr-tail-sm-l"><use xlink:href="#arr-tail-sm-l"></use></svg></button><button class="pip-slider-control pip-slider-control--btn" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg arr-tail-sm-r"><use xlink:href="#arr-tail-sm-r"></use></svg></button><span class="pip-slider-current"><strong data-role="_current">'+self.extpop.index+'</strong>/<span data-role="_all">'+self.extpop.total+'</span></span></div>'
					self.extpop.el.find('.pip-slides-holder').append(self.extpop._controls)
					self.extpop.controls = {}
					self.extpop.controls.btns =	self.extpop.el.find('.pip-slider-control--btn');
					self.extpop.controls.current = self.extpop.el.find('[data-role="_current"]');
					self.extpop.controls.total = self.extpop.el.find('[data-role="_all"]');
					self.extpop.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
					self.extpop.slides.filter(':first-of-type').attr('data-active', true);
				}
				self.bind();
			},
			bind: function () {
				var self = this;
				self.control && self.control.on('click', function(ev){
					ev.preventDefault();
					if (self.isReady===0) {
						var _thisControl = $(this);
						if (_thisControl.hasClass('pip-slider-control--arrow')) {
							self.dir = _thisControl.attr('data-role');
							if (self.dir === 'prev') {
								self.index = self.index < 2 ? self.total : --self.index;
							} else if (self.dir === 'next') {
								self.index = self.index < self.total ? ++self.index : 1;
							}
						} else if (_thisControl.hasClass('pip-slider-control--bullet')) {
							var _n = _thisControl.index() + 1;
							if (self.index === _n) {return false;}
							self.dir = _n > self.index ? 'next' : 'prev';
							self.index = _n;
						}
						self.moveSceneSlide(self.index);
					}
				});
				// pluses points
				self.extpop.btns && self.extpop.btns
					.on('click', function(ev){
						ev.preventDefault();
						var _thisPlus = $(this);
						if (!_thisPlus.hasClass('is-active') && self.isReady===0) {
							if (!self.el.hasClass('is-popuped')) self.openPluser();
							self.extpop.index = _thisPlus.attr('data-for');
							self.extpop.dir = parseInt(self.extpop.slides.filter('[data-active=true]').attr('data-slide')) > self.extpop.index ? 'prev' : 'next';
							self.movePluserSlide();
						}
					})
					.on(_transitionEnd, function(ev){
						ev.stopPropagation();
					})
					.on('mouseenter', function(ev){
						ev.stopPropagation();
						self.plusWrap.addClass('has-plus-hover');
						$(this).addClass('is-hover');
					})
					.on('mouseleave', function(ev){
						ev.stopPropagation();
						self.plusWrap.removeClass('has-plus-hover');
						self.extpop.btns.removeClass('is-hover');
					});
				// in popup nav
				self.extpop.controls.btns && self.extpop.controls.btns
					.on('click', function(ev){
						ev.preventDefault();
						var _thisControl = $(this);
						if (self.isReady===0) {
							self.extpop.dir = _thisControl.attr('data-role');
							if (self.extpop.dir === 'prev') {
								self.extpop.index = self.extpop.index < 2 ? self.extpop.total : --self.extpop.index;
							} else if (self.extpop.dir === 'next') {
								self.extpop.index = self.extpop.index < self.extpop.total ? ++self.extpop.index : 1;
							}
							self.movePluserSlide();
						}
					})
					.on(_transitionEnd, function(ev){
						ev.stopPropagation();
					});
				// close popup slider when outside clicked
				$doc.on('click.exterior', function(ev){
					var _evtarget = $(ev.target);
					if (self.isReady === 0 && self.el.hasClass('is-popuped') && _evtarget.closest('.plus[data-for]').length === 0 && _evtarget.closest('.pip-slider-control.pip-slider-control--bullet').length === 0 && _evtarget.closest('[data-role="js-ext-pluser"]').length === 0) {
						self.closePluser();
					}
				});
			},
			moveSceneSlide: function() {
				var self = this;

				var _activeSlide = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlide = self.slides.filter('[data-active=true]'),
					_activeTranslateVal,
					_prevTranslateVal;

				self.bullet.removeAttr('data-active').filter(':nth-child('+self.index+')').attr('data-active', true);

				if (!self.dir) {
					self.dir = self.extpop.dir;
				}

				if (self.dir === 'prev') {
					_activeTranslateVal = 'translate(-100%, 0)';
					_prevTranslateVal	= 'translate(100%, 0)';
				} else if (self.dir === 'next') {
					_activeTranslateVal = 'translate(100%, 0)';
					_prevTranslateVal	= 'translate(-100%, 0)';
				}

				++self.isReady;
				_prevSlide
					.removeAttr('data-active')
					.css3transition(self._transitionVal2)
					.css({'z-index': 4})
					.css3transfrom(_prevTranslateVal)
					.one(_transitionEnd, function(e){
						--self.isReady;
					});

				_activeSlide
					.attr('data-active', true)
					.css3transition('none')
					.css3transfrom(_activeTranslateVal)
					.animate({'null': 1}, 10).promise().done(function() {
						$(this)
							.css3transition(self._transitionVal)
							.css({'z-index': 5})
							.css3transfrom('translate(0, 0)');
					});
			},
			movePluserSlide: function () {
				var self = this;
				self.extpop.controls.current.text(self.extpop.index);
				var _activeSlide = self.extpop.slides.filter('[data-slide='+self.extpop.index+']'),
					_prevSlide = self.extpop.slides.filter('[data-active=true]'),
					_activeTranslateVal,
					_prevTranslateVal;

// 				if (_activeSlide.attr('data-active') === 'true') return false;

				// move popup slide
				if (self.extpop.dir === 'prev') {
					_activeTranslateVal = 'translate(-100%, 0)';
					_prevTranslateVal 	= 'translate(100%, 0)';
				} else if (self.extpop.dir === 'next') {
					_activeTranslateVal = 'translate(100%, 0)';
					_prevTranslateVal 	= 'translate(-100%, 0)';
				}
				_prevSlide
					.removeAttr('data-active')
					.css('z-index', 4)
					.css3transition(self.el.hasClass('is-popuped') ? self._transitionVal3 : '')
					.css3transfrom(_prevTranslateVal)
				if (self.el.hasClass('is-popuped')) {
					++self.isReady;
					_prevSlide.one(_transitionEnd, function(){
						--self.isReady;
					});
				}
				_activeSlide
					.attr('data-active', true)
					.css3transition('')
					.css3transfrom(_activeTranslateVal)
					.animate({'null': 1}, 10).promise().done(function() {
						$(this)
							.css('z-index', 5)
							.css3transition(self.el.hasClass('is-popuped') ? self._transitionVal4 : '')
							.css3transfrom('translate(0, 0)');
					});

				// move exterior parent slide if needed
				var _newActiveBtn = self.extpop.btns.filter('[data-for='+self.extpop.index+']'),
					_newParentSlide = _newActiveBtn.parents('[data-slide]');
				if (_newParentSlide.attr('data-active') !== 'true') {
					self.index = parseInt(_newParentSlide.attr('data-slide'))
					self.dir = undefined;
					self.moveSceneSlide(self.index);
				}
				// change active plus button
				self.extpop.btns.removeClass('is-active');
				_newActiveBtn.addClass('is-active');
			},
			openPluser: function () {
				var self = this;
				self.hideControls();
				self.sl
					.css3transition(self._transitionVal4)
					.css3transfrom('translate(235px, 0)');
				// show exterior popup slider
				++self.isReady;
				self.extpop.holder
					.css3transition(self._transitionVal)
					.css({'opacity': 1, 'z-index': 10})
					.css3transfrom('translate(0, 0)')
					.one(_transitionEnd, function(){
						$(this).css3transition('');
						self.el.addClass('is-popuped');
						--self.isReady;
					});
			},
			closePluser: function () {
				var self = this;
				self.el.removeClass('is-popuped')
				// shift back exterior wrapper
				++self.isReady;
				self.sl
					.css3transition(self._transitionVal4)
					.css3transfrom('translate(0, 0)')
					.one(_transitionEnd, function(){
						--self.isReady;
					});
				self.extpop.btns.removeClass('is-active');
				self.showControls();
				// hide exterior popup slider
				++self.isReady;
				self.extpop.holder
					.css3transition(self._transitionVal)
					.css('opacity', '0')
					.css3transfrom('translate(-100%, 0)')
					.one(_transitionEnd, function(){
						$(this).css3transition('').css('z-index', '-1')
						--self.isReady;
					});
			},
			hideControls: function() {
				var self = this;
				self.controls.filter('.pip-slider-controls--arrows').fadeOut(self.speed * 1000).attr('aria-visible', false);
			},
			showControls: function () {
				var self = this;
				self.controls.filter('.pip-slider-controls--arrows').fadeIn(self.speed * 1000).removeAttr('aria-visible');
			}
		},
		interior = {
			init: function() {
				var self = this;
				// main interior slider
				self.el				= $('[data-role="js-interior"]');
				self.sl				= self.el.find('.pip-slider.pip-slider--interior');
				self.slides			= self.sl.find('[data-slide]');
				self.total			= self.slides.length;
				self.index			= 1;
				self.speed			= 0.75;
				self.cubic1			= 'cubic-bezier(.65,.05,.36,1)';
				self.cubic2			= 'cubic-bezier(.47,0,.74,.71)';
				self.dir			= 'next';
				self.plusWrap 		= self.sl.find('.interior-plus-area');
				self.intpop = {};
				self.intpop.el		= $('[data-role="js-interior-pluser"]');
				self.intpop.holder	= self.intpop.el.find('.pip-slides-holder');
				self.intpop.btns	= self.sl.find('.plus[data-for]');
				self.intpop.slides 	= self.intpop.el.find('[data-slide]');
				self.intpop.index 	= 1;
				self.intpop.total 	= self.intpop.slides.length ? self.intpop.slides.length : 'error';
				self.intpop.dir;
				self.isReady 		= 0;

				// common

				self._transitionVal	 = 'transform '+self.speed+'s '+self.cubic1+' 0s, opacity '+self.speed+'s '+self.cubic1+' 0s';
				self._transitionVal2 = 'transform '+self.speed+'s '+self.cubic2+' 0s';
				self._transitionVal3 = 'transform '+self.speed+'s '+self.cubic2+' 0.05s';
				self._transitionVal4 = 'transform '+self.speed+'s '+self.cubic1+' 0s';

				// init main interior slider dom
				if (self.total > 1) {
					self._controls = '<div class="pip-slider-controls pip-slider-controls--arrows"><button class="pip-slider-control pip-slider-control--arrow" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg arrow-left"><use xlink:href="#arrow-left"></use></svg></button><button class="pip-slider-control pip-slider-control--arrow" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg arrow-right"><use xlink:href="#arrow-right"></use></svg></button></div><div class="pip-slider-controls pip-slider-controls--bullets"></div>'
					self._bullet = '<button class="pip-slider-control pip-slider-control--bullet"></button>'
					self.sl.append(self._controls);
					self.controls = self.sl.find('.pip-slider-controls');
					self.arrw = self.controls.find('.pip-slider-control.pip-slider-control--arrow')
					self.bullets = self.controls.filter('.pip-slider-controls.pip-slider-controls--bullets')
					self.bullet
					for (var i=0; i<self.total;++i) {
						self.bullets.append(self._bullet)
					}
					self.bullet = self.controls.find('.pip-slider-control.pip-slider-control--bullet')
					self.bullet.filter(':first-of-type').attr('data-active', true)
					self.control = self.controls.find('.pip-slider-control')
				}
				self.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
				self.slides.filter(':first-of-type').attr('data-active', true);

				// init popups slider dom
				if (self.intpop.total > 1) {
					self.intpop._controls = '<div class="pip-slider-controls"><button class="pip-slider-control pip-slider-control--btn" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg arr-tail-sm-l"><use xlink:href="#arr-tail-sm-l"></use></svg></button><button class="pip-slider-control pip-slider-control--btn" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg arr-tail-sm-r"><use xlink:href="#arr-tail-sm-r"></use></svg></button><span class="pip-slider-current"><strong data-role="_current">'+self.intpop.index+'</strong>/<span data-role="_all">'+self.intpop.total+'</span></span></div>'
					self.intpop.el.find('.pip-slides-holder').append(self.intpop._controls)
					self.intpop.controls = {}
					self.intpop.controls.btns =	self.intpop.el.find('.pip-slider-control--btn');
					self.intpop.controls.current = self.intpop.el.find('[data-role="_current"]');
					self.intpop.controls.total = self.intpop.el.find('[data-role="_all"]');
					self.intpop.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
					self.intpop.slides.filter(':first-of-type').attr('data-active', true);
				}
				self.bind();
			},
			bind: function() {
				var self = this;
				self.control && self.control.on('click', function(ev){
					ev.preventDefault();
					if (self.isReady===0) {
						var _thisControl = $(this);
						if (_thisControl.hasClass('pip-slider-control--arrow')) {
							self.dir = _thisControl.attr('data-role');
							if (self.dir === 'prev') {
								self.index = self.index < 2 ? self.total : --self.index;
							} else if (self.dir === 'next') {
								self.index = self.index < self.total ? ++self.index : 1;
							}
						} else if (_thisControl.hasClass('pip-slider-control--bullet')) {
							var _n = _thisControl.index() + 1;
							if (self.index === _n) {return false;}
							self.dir = _n > self.index ? 'next' : 'prev';
							self.index = _n;
						}
						self.moveSceneSlide(self.index);
					}
				});
				self.intpop.btns && self.intpop.btns
					.on('click', function(ev){
						ev.preventDefault();
						var _thisPlus = $(this);
						if (!_thisPlus.hasClass('is-active') && self.isReady===0) {
							if (!self.el.hasClass('is-popuped')) self.openPluser();
							self.intpop.index = _thisPlus.attr('data-for');
							self.intpop.dir = parseInt(self.intpop.slides.filter('[data-active=true]').attr('data-slide')) > self.intpop.index ? 'prev' : 'next';
							self.movePluserSlide();
						}
					})
					.on(_transitionEnd, function(ev){
						ev.stopPropagation();
					})
					.on('mouseenter', function(ev){
						ev.stopPropagation();
						self.plusWrap.addClass('has-plus-hover');
						$(this).addClass('is-hover');
					})
					.on('mouseleave', function(ev){
						ev.stopPropagation();
						self.plusWrap.removeClass('has-plus-hover');
						self.intpop.btns.removeClass('is-hover');
					});

				// in popup nav
				self.intpop.controls.btns && self.intpop.controls.btns
					.on('click', function(ev){
						ev.preventDefault();
						var _thisControl = $(this);
						if (self.isReady===0) {
							self.intpop.dir = _thisControl.attr('data-role');
							if (self.intpop.dir === 'prev') {
								self.intpop.index = self.intpop.index < 2 ? self.intpop.total : --self.intpop.index;
							} else if (self.intpop.dir === 'next') {
								self.intpop.index = self.intpop.index < self.intpop.total ? ++self.intpop.index : 1;
							}
							self.movePluserSlide();
						}
					})
					.on(_transitionEnd, function(ev){
						ev.stopPropagation();
					});
			},
			moveSceneSlide: function() {
				var self = this;
				var _activeSlide = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlide = self.slides.filter('[data-active=true]'),
					_activeTranslateVal,
					_prevTranslateVal;

				self.bullet.removeAttr('data-active').filter(':nth-child('+self.index+')').attr('data-active', true);

				if (!self.dir) {
					self.dir = self.intpop.dir;
				}

				if (self.dir === 'prev') {
					_activeTranslateVal = 'translate(-100%, 0)';
					_prevTranslateVal	= 'translate(100%, 0)';
				} else if (self.dir === 'next') {
					_activeTranslateVal = 'translate(100%, 0)';
					_prevTranslateVal	= 'translate(-100%, 0)';
				}

				++self.isReady;
				_prevSlide
					.removeAttr('data-active')
					.css3transition(self._transitionVal2)
					.css({'z-index': 4})
					.css3transfrom(_prevTranslateVal)
					.one(_transitionEnd, function(e){
						--self.isReady;
					});

				_activeSlide
					.attr('data-active', true)
					.css3transition('none')
					.css3transfrom(_activeTranslateVal)
					.animate({'null': 1}, 10).promise().done(function() {
						$(this)
							.css3transition(self._transitionVal)
							.css({'z-index': 5})
							.css3transfrom('translate(0, 0)');
					});
			},
			movePluserSlide: function() {
				var self = this;
				self.intpop.controls.current.text(self.intpop.index);
				var _activeSlide = self.intpop.slides.filter('[data-slide='+self.intpop.index+']'),
					_prevSlide = self.intpop.slides.filter('[data-active=true]'),
					_activeTranslateVal,
					_prevTranslateVal;

// 				if (_activeSlide.attr('data-active') === 'true') return false;

				// move popup slide
				if (self.intpop.dir === 'prev') {
					_activeTranslateVal = 'translate(-100%, 0)';
					_prevTranslateVal 	= 'translate(100%, 0)';
				} else if (self.intpop.dir === 'next') {
					_activeTranslateVal = 'translate(100%, 0)';
					_prevTranslateVal 	= 'translate(-100%, 0)';
				}
				_prevSlide
					.removeAttr('data-active')
					.css('z-index', 4)
					.css3transition(self.el.hasClass('is-popuped') ? self._transitionVal3 : '')
					.css3transfrom(_prevTranslateVal)
				if (self.el.hasClass('is-popuped')) {
					++self.isReady;
					_prevSlide.one(_transitionEnd, function(){
						--self.isReady;
					});
				}
				_activeSlide
					.attr('data-active', true)
					.css3transition('')
					.css3transfrom(_activeTranslateVal)
					.animate({'null': 1}, 10).promise().done(function() {
						$(this)
							.css('z-index', 5)
							.css3transition(self.el.hasClass('is-popuped') ? self._transitionVal4 : '')
							.css3transfrom('translate(0, 0)');
					})

				// move interior parent slide if needed
				var _newActiveBtn = self.intpop.btns.filter('[data-for='+self.intpop.index+']'),
					_newParentSlide = _newActiveBtn.parents('[data-slide]');
				if (_newParentSlide.attr('data-active') !== 'true') {
					self.index = parseInt(_newParentSlide.attr('data-slide'))
					self.dir = undefined;
					self.moveSceneSlide(self.index);
				}
				// change active plus button
				self.intpop.btns.removeClass('is-active');
				_newActiveBtn.addClass('is-active');
				// close popup slider when outside clicked
				$doc.on('click.interior', function(ev){
					var _evtarget = $(ev.target);
					if (self.isReady === 0 && self.el.hasClass('is-popuped') && _evtarget.closest('.plus[data-for]').length === 0 && _evtarget.closest('.pip-slider-control.pip-slider-control--bullet').length === 0 && _evtarget.closest('[data-role="js-interior-pluser"]').length === 0) {
						self.closePluser();
					}
				});

			},
			openPluser: function () {
				var self = this;
// 				self.controls && hideControls();
				self.sl
					.css3transition(self._transitionVal4)
					.css3transfrom('translate(235px, 0)');
				// show interior popup slider
				++self.isReady;
				self.intpop.holder
					.css3transition('')
					.css({'visibility': 'visible', 'z-index': 10})
					.css3transition(self._transitionVal)
					.css3transfrom('translate(0, 0)')
					.one(_transitionEnd, function(){
						$(this).css3transition('');
						self.el.addClass('is-popuped');
						--self.isReady;
// 						self.shifting();
					});
			},
			closePluser: function () {
				var self = this;
				// shift back interior wrapper
				self.el.removeClass('is-popuped')
// 				self.controls && showControls();
				self.intpop.btns.removeClass('is-active');
				++self.isReady;
				self.sl
					.css3transition(self._transitionVal4)
					.css3transfrom('translate(0, 0)')
					.one(_transitionEnd, function(){
						--self.isReady;
					});
				// hide interior popup slider
				++self.isReady;
				self.intpop.holder
					.css3transition(self._transitionVal)
					.css3transfrom('translate(-100%, 0)')
					.one(_transitionEnd, function(){
						$(this).css3transition('').css({'visibility': 'hidden', 'z-index': '-1'})
						--self.isReady;
					});
			},
			hideControls: function () {
				var self = this;
				self.controls.filter('.pip-slider-controls--arrows').fadeOut(self.speed * 1000).attr('aria-visible', false)
			},
			showControls: function () {
				var self = this;
				self.controls.filter('.pip-slider-controls--arrows').fadeIn(self.speed * 1000).removeAttr('aria-visible');
			},
			shifting: function (){
				var self = this;
				var _x;
				self.el.parent().off('mousemove.shifting').on('mousemove.shifting', function(e){
					_x = e.clientX;
				});
			},
		},
		performanceGraphics = {
			init: function(){
				var self = this;
				self.isReady = true;
				self.w = $('[data-role="js-graphics"]');
				self.controls = self.w.find('[data-role="tabs-buttons"] [data-for]');
				self.content = self.w.find('[data-role="tab-container"]');
				self.contentItems = self.content.find('[data-tab]');
				self.t = 1250;
				self.idx = 1;
				self.activeEngine = self.controls.filter('[data-for='+self.idx+']');
				self.points = {};
				self.points.power = self.w.find('.graphics-score.graphics-score--power .points .value');
				self.points.toque = self.w.find('.graphics-score.graphics-score--toque .points .value');
				self.scales = {};
				self.scales.power = self.w.find('.graphics-score.graphics-score--power .graphics-scale ._line');
				self.scales.toque = self.w.find('.graphics-score.graphics-score--toque .graphics-scale ._line');
				self.power		= self.activeEngine.attr('data-power');
				self.toque		= self.activeEngine.attr('data-toque');
				self.powerScale	= self.activeEngine.attr('data-power-scale');
				self.toqueScale	= self.activeEngine.attr('data-toque-scale');

				// bind
				self.controls.on('click.graphics', self.setTab);
				// setup
				self.contentItems.hide().css('position', 'absolute');
				self.points.power.html(0);
				self.points.toque.html(0);
				self.setContent();
			},
			setTab: function(_arg){
				var _node, self = performanceGraphics;
				if (_arg.hasOwnProperty('originalEvent')) {
					self.activeEngine = $(this);
				} else if (typeof _arg === 'object') {
					self.activeEngine = _arg;
				} else if (typeof _arg === 'number') {
					self.activeEngine = self.controls.filter('[data-for='+_arg+']')
				} else {
					throw 'Invalid argument: event, $(node) or number only.'
				}
				if (!self.activeEngine.hasClass('is-active') && self.isReady) {
					self.idx = self.activeEngine.attr('data-for');
					self.controls.removeClass('is-active').filter('[data-for='+self.idx+']').addClass('is-active');
					self.setContent();
					self.draw();
				}
			},
			setContent: function(){
				var self = this;
				var _node = self.contentItems.filter('[data-tab='+self.idx+']'),
					_h = _node.height();

				self.contentItems.not('[data-tab='+self.idx+']').fadeOut(750);
				_node.fadeIn(750);
				self.content.css('height', _h);
			},
			draw: function(){
				var self = this;
				self.power		= parseFloat(self.activeEngine.attr('data-power'));
				self.toque		= parseFloat(self.activeEngine.attr('data-toque'));
				self.powerScale	= self.activeEngine.attr('data-power-scale')+'%';
				self.toqueScale	= self.activeEngine.attr('data-toque-scale')+'%';

				self.scales.power.css('width', self.powerScale);
				self.scales.toque.css('width', self.toqueScale);

				self.isReady = false;

				$({countNum: parseFloat(self.points.power.html())}).animate({countNum: self.power}, {
					duration: self.t,
					easing:'easeInOutCubic',
					step: function() {
						self.points.power.html(this.countNum.toFixed(1));
					},
					complete: function() {
						self.points.power.html(self.power);
					}
				});
				$({countNum: parseFloat(self.points.toque.html())}).animate({countNum: self.toque}, {
					duration: self.t,
					easing:'easeInOutCubic',
					step: function() {
						self.points.toque.html(this.countNum.toFixed(1));
					},
					complete: function() {
						self.points.toque.html(self.toque);
						self.isReady = true;
					}
				});
			}
		},
		transmission = {
			init: function () {
				var self					= this;
				self.ready 					= true;
				self.el 					= $('[data-role="js-transmission"]')
				self.sl 					= self.el.find('[data-role="js-transmission-slider"]')
				self.slides 				= self.el.find('[data-slide]')
				self.total 					= self.slides.length
				self.index 					= 1
				self.speed 					= 0.75
				self.speed2 				= 1
				self.cubic1 				= 'cubic-bezier(.65,.05,.36,1)'
				self.cubic2 				= 'cubic-bezier(.47,0,.74,.71)'
				self._controls 				= '<div class="pip-slider-controls"><button class="pip-slider-control pip-slider-control--btn" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg corner-right"><use xlink:href="#corner-left"></use></svg></button><button class="pip-slider-control pip-slider-control--btn" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg corner-right"><use xlink:href="#corner-right"></use></svg></button><span class="pip-slider-current"><strong data-role="_current">'+self.index+'</strong>/<span data-role="_all">'+self.total+'</span></span></div>'
				self.sl.append(self._controls);
				self.controls 				= {}
				self.controls.previews 		= self.el.find('[data-for]')
				self.controls.btns 			= self.sl.find('.pip-slider-control--btn')
				self.controls.current 		= self.sl.find('[data-role="_current"]')
				self.controls.total 		= self.sl.find('[data-role="_all"]')
				self.dir 					= undefined;
				self.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
				self.slides.filter(':first-of-type').attr('data-active', true);
				self.bind();
			},
			bind: function () {
				var self = this;
				self.controls.btns.on('click', function(ev){
					ev.preventDefault();
					if (self.ready) {
						self.dir = $(this).attr('data-role');
						if (self.dir === 'prev') {
							self.index = self.index < 2 ? self.total : --self.index;
						} else if (self.dir === 'next') {
							self.index = self.index < self.total ? ++self.index : 1;
						}
						self.move();
					}
				});
				self.controls.previews.on('click', function(ev){
					ev.preventDefault();
					if (self.ready) {
						self.dir = undefined;
						self.index = $(this).attr('data-for');
						self.move();
					}
				});
				self.sl.on('click', function(ev){
					ev.preventDefault();
					if (self.ready && $(ev.target).closest('.pip-slider-controls').length === 0) {
						self.close();
					}
				});
				$doc.on('click.transmission', function(ev){
					var _evtarget = $(ev.target);
					if (self.ready === true && self.sl.attr('data-opened') === 'true' && _evtarget.closest('[data-role="js-transmission"]').length === 0) {
						self.close();
					}
				});
			},
			move: function () {
				var self = this;
				self.controls.current.text(self.index);

				var _activeSlide = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlide = self.slides.filter('[data-active=true]');

				if (self.dir === undefined) {
					_prevSlide
						.removeAttr('data-active')
						.css('z-index', '')
						.css3transition('')
						.css3transfrom('translate(100%, 0)')
					_activeSlide
						.attr('data-active', true)
						.css('z-index', 5)
						.css3transition('')
						.css3transfrom('translate(0, 0)');
					self.open();
				}
				if (self.dir === 'prev') {
					self.ready = false;
					_prevSlide
						.removeAttr('data-active')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed2+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css3transfrom('translate(100%, 0)')
								.css('zIndex', '');
							self.ready = true;
						});
					_activeSlide
						.attr('data-active', true)
						.css3transfrom('translate(-100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})
				} else if (self.dir === 'next') {
					self.ready = false;
					_prevSlide
						.removeAttr('data-active')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed2+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css3transfrom('translate(100%, 0)')
								.css('zIndex', '')
							self.ready = true
						});
					_activeSlide
						.attr('data-active', true)
						.css('zIndex', 5)
						.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
						.css3transfrom('translate(0, 0)')
				}
			},
			open: function () {
				var self = this;
				self.ready = false;
				self.sl
						.show()
						.css3transition('')
						.css3transfrom('translate(100%, 0)')
						.stop()
						.animate({'null': 1}, 10).promise().done(function() {
							$(this)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
								.one(_transitionEnd, function(){
									$(this).css3transition('').attr('data-opened', true);
									self.ready = true;
								});
						})
			},
			close: function () {
				var self = this;
				self.ready = false;
				self.sl
						.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this).hide().css3transition('').attr('data-opened', false);
							self.ready = true;
						});
			}
		},
		safety = {
			init: function () {
				var self = this;
				self.ready = true
				self.el = $('[data-role="js-safety"]')
				self.sl = self.el.find('.pip-slider')
				self.slides = self.el.find('[data-slide]')
				self.subslides = self.el.find('[data-pip-subslide]')
				self.total = self.slides.length / 2
				self.index = 1
				self.speed = 0.75
				self.cubic1 = 'cubic-bezier(.65,.05,.36,1)'
				self.cubic2 = 'cubic-bezier(.47,0,.74,.71)'
				self._controls = '<div class="pip-slider-controls"></div>'
				self._btn = '<button class="pip-slider-control pip-slider-control--btn"></button>'
				self.sl.append(self._controls);
				self.controls = self.sl.find('.pip-slider-controls');
				self.btns
				self.dir
				for (var i=0; i<self.total;++i) {
					self.controls.append(self._btn)
				}
				// init dom
				self.btns = self.controls.find('.pip-slider-control.pip-slider-control--btn')
				self.btns.filter(':first-of-type').attr('data-active', true)
				self.slides
					.not('[data-slide=1]')
					.filter('[data-slide-type=static]')
					.css3transition('none')
					.css('opacity', 0)
				self.slides
					.not('[data-slide=1]')
					.filter('[data-slide-type="mooving"]')
					.css3transition('none')
					.css3transfrom('translate(100%, 0)')
				self.slides
					.filter('[data-slide=1]')
					.attr('data-active', true)
				self.bind();
			},
			bind: function () {
				var self = this;
				self.subslides.on('click', function(ev){
					ev.preventDefault();
					if (self.ready) {
						self.dir = $(this).attr('data-pip-subslide');
						if (self.dir === 'left') {
							self.index = self.index < 2 ? self.total : --self.index;
						} else if (self.dir === 'right') {
							self.index = self.index < self.total ? ++self.index : 1;
						}
						self.move();
					}
				});
				self.btns.on('click', function(ev){
					ev.preventDefault();
					var _p = self.index, _n = $(this).index() + 1;
					if (self.ready && _p !== _n) {
						self.dir = _p < _n ? 'right' : 'left';
						self.index = _n;
						self.move();
					}
				});

			},
			move: function () {
				var self = this;
				self.ready = false

				var _activeSlides = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlides = self.slides.filter('[data-active=true]');

				self.btns.removeAttr('data-active').filter(':nth-child('+self.index+')').attr('data-active', true)
				if (self.dir === 'left') {
					// text side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 0, 'zIndex': 4})
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css({'opacity': 0, 'zIndex': ''});
						})
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 1, 'zIndex': 5})
					// image side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type="mooving"]')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css('zIndex', '')
							self.ready = true
						});
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type="mooving"]')
						.css3transition('none')
						.css3transfrom('translate(-100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})

				} else if (self.dir === 'right') {
					// text side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 0, 'zIndex': 4})
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css({'opacity': 0, 'zIndex': ''});
						})
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 1, 'zIndex': 5})
					// image side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type="mooving"]')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css('zIndex', '')
							self.ready = true
						});
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type="mooving"]')
						.css3transition('none')
						.css3transfrom('translate(100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})
				}
			}
		},
		conviencePopups = {
			init: function () {
				var self					= this;
				self.ready 					= true;
				self.el 					= $('[data-role="js-convience-popups"]')
				self.sl 					= self.el.find('[data-role="js-convience-popups-slider"]')
				self.slides 				= self.el.find('[data-slide]')
				self.total 					= self.slides.length
				self.index 					= 1
				self.speed 					= 0.75
				self.speed2 				= 1
				self.cubic1 				= 'cubic-bezier(.65,.05,.36,1)'
				self.cubic2 				= 'cubic-bezier(.47,0,.74,.71)'
				self._controls 				= '<div class="pip-slider-controls"><button class="pip-slider-control pip-slider-control--btn" data-role="prev"><svg xmlns="http://www.w3.org/2000/svg" class="svg corner-right"><use xlink:href="#corner-left"></use></svg></button><button class="pip-slider-control pip-slider-control--btn" data-role="next"><svg xmlns="http://www.w3.org/2000/svg" class="svg corner-right"><use xlink:href="#corner-right"></use></svg></button><span class="pip-slider-current"><strong data-role="_current">'+self.index+'</strong>/<span data-role="_all">'+self.total+'</span></span></div>'
				self.sl.append(self._controls);
				self.controls 				= {}
				self.controls.previews 		= self.el.find('[data-for]')
				self.controls.btns 			= self.sl.find('.pip-slider-control--btn')
				self.controls.current 		= self.sl.find('[data-role="_current"]')
				self.controls.total 		= self.sl.find('[data-role="_all"]')
				self.dir 					= undefined;
				self.slides.not(':first-of-type').css3transition('none').css3transfrom('translate(100%, 0)');
				self.slides.filter(':first-of-type').attr('data-active', true);
				self.bind();
			},
			bind: function () {
				var self = this;
				self.controls.btns.on('click', function(ev){
					ev.preventDefault();
					if (self.ready) {
						self.dir = $(this).attr('data-role');
						if (self.dir === 'prev') {
							self.index = self.index < 2 ? self.total : --self.index;
						} else if (self.dir === 'next') {
							self.index = self.index < self.total ? ++self.index : 1;
						}
						self.move();
					}
				});
				self.controls.previews.on('click', function(ev){
					ev.preventDefault();
					if (self.ready) {
						self.dir = undefined;
						self.index = $(this).attr('data-for');
						self.move();
					}
				});
				self.sl.on('click', function(ev){
					ev.preventDefault();
					if (self.ready && $(ev.target).closest('.pip-slider-controls').length === 0) {
						self.close();
					}
				});
				$doc.on('click.transmission', function(ev){
					var _evtarget = $(ev.target);
					if (self.ready === true && self.sl.attr('data-opened') === 'true' && _evtarget.closest('[data-role="js-transmission"]').length === 0) {
						self.close();
					}
				});
			},
			move: function () {
				var self = this;
				self.controls.current.text(self.index);

				var _activeSlide = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlide = self.slides.filter('[data-active=true]');

				if (self.dir === undefined) {
					_prevSlide
						.removeAttr('data-active')
						.css('z-index', '')
						.css3transition('')
						.css3transfrom('translate(100%, 0)')
					_activeSlide
						.attr('data-active', true)
						.css('z-index', 5)
						.css3transition('')
						.css3transfrom('translate(0, 0)');
					self.open();
				}
				if (self.dir === 'prev') {
					self.ready = false;
					_prevSlide
						.removeAttr('data-active')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed2+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css3transfrom('translate(100%, 0)')
								.css('zIndex', '');
							self.ready = true;
						});
					_activeSlide
						.attr('data-active', true)
						.css3transfrom('translate(-100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})
				} else if (self.dir === 'next') {
					self.ready = false;
					_prevSlide
						.removeAttr('data-active')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed2+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css3transfrom('translate(100%, 0)')
								.css('zIndex', '')
							self.ready = true
						});
					_activeSlide
						.attr('data-active', true)
						.css('zIndex', 5)
						.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
						.css3transfrom('translate(0, 0)')
				}
			},
			open: function () {
				var self = this;
				self.ready = false;
				self.sl
						.show()
						.css3transition('')
						.css3transfrom('translate(100%, 0)')
						.stop()
						.animate({'null': 1}, 10).promise().done(function() {
							$(this)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
								.one(_transitionEnd, function(){
									$(this).css3transition('').attr('data-opened', true);
									self.ready = true;
								});
						})
			},
			close: function () {
				var self = this;
				self.ready = false;
				self.sl
						.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this).hide().css3transition('').attr('data-opened', false);
							self.ready = true;
						});
			}
		},
		convienceSlider = {
			init: function () {
				var self = this;
				self.ready = true
				self.el = $('[data-role="js-convience-slider"]')
				self.sl = self.el.find('.pip-slider')
				self.slides = self.el.find('[data-slide]')
				self.subslides = self.el.find('[data-pip-subslide]')
				self.total = self.slides.length / 2
				self.index = 1
				self.speed = 0.75
				self.cubic1 = 'cubic-bezier(.65,.05,.36,1)'
				self.cubic2 = 'cubic-bezier(.47,0,.74,.71)'
				self._controls = '<div class="pip-slider-controls"></div>'
				self._btn = '<button class="pip-slider-control pip-slider-control--btn"></button>'
				self.sl.append(self._controls);
				self.controls = self.sl.find('.pip-slider-controls');
				self.btns
				self.dir
				for (var i=0; i<self.total;++i) {
					self.controls.append(self._btn)
				}
				// init dom
				self.btns = self.controls.find('.pip-slider-control.pip-slider-control--btn')
				self.btns.filter(':first-of-type').attr('data-active', true)
				self.slides
					.not('[data-slide=1]')
					.filter('[data-slide-type=static]')
					.css3transition('none')
					.css('opacity', 0)
				self.slides
					.not('[data-slide=1]')
					.filter('[data-slide-type="mooving"]')
					.css3transition('none')
					.css3transfrom('translate(100%, 0)')
				self.slides
					.filter('[data-slide=1]')
					.attr('data-active', true)
				self.bind();
			},
			bind: function () {
				var self = this;
				self.subslides.on('click', function(ev){
					ev.preventDefault();
					if (self.ready) {
						self.dir = $(this).attr('data-pip-subslide');
						if (self.dir === 'left') {
							self.index = self.index < 2 ? self.total : --self.index;
						} else if (self.dir === 'right') {
							self.index = self.index < self.total ? ++self.index : 1;
						}
						self.move();
					}
				});
				self.btns.on('click', function(ev){
					ev.preventDefault();
					var _p = self.index, _n = $(this).index() + 1;
					if (self.ready && _p !== _n) {
						self.dir = _p < _n ? 'right' : 'left';
						self.index = _n;
						self.move();
					}
				});

			},
			move: function () {
				var self = this;
				self.ready = false

				var _activeSlides = self.slides.filter('[data-slide='+self.index+']'),
					_prevSlides = self.slides.filter('[data-active=true]');

				self.btns.removeAttr('data-active').filter(':nth-child('+self.index+')').attr('data-active', true)
				if (self.dir === 'left') {
					// text side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 0, 'zIndex': 4})
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css({'opacity': 0, 'zIndex': ''});
						})
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 1, 'zIndex': 5})
					// image side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type="mooving"]')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css('zIndex', '')
							self.ready = true
						});
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type="mooving"]')
						.css3transition('none')
						.css3transfrom('translate(-100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})

				} else if (self.dir === 'right') {
					// text side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 0, 'zIndex': 4})
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css({'opacity': 0, 'zIndex': ''});
						})
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type=static]')
						.css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
						.css({'opacity': 1, 'zIndex': 5})
					// image side
					_prevSlides
						.removeAttr('data-active')
						.filter('[data-slide-type="mooving"]')
						.css('zIndex', 4)
						.css3transition('transform '+self.speed+'s '+self.cubic2+' 0s')
						.css3transfrom('translate(-100%, 0)')
						.one(_transitionEnd, function(){
							$(this)
								.css3transition('none')
								.css('zIndex', '')
							self.ready = true
						});
					_activeSlides
						.attr('data-active', true)
						.filter('[data-slide-type="mooving"]')
						.css3transition('none')
						.css3transfrom('translate(100%, 0)')
						.stop()
						.animate({'null': 1}, 0).promise().done(function() {
							$(this)
								.css('zIndex', 5)
								.css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
								.css3transfrom('translate(0, 0)')
						})
				}
			}
		};

		// init them
		if ($('[data-role="js-video"]').length) videos.init();
		if ($('[data-role="js-hlsl"]').length) highlights.init();
		if ($('[data-role="js-exterior"]').length) exterior.init();
		if ($('[data-role="js-interior"]').length) interior.init();
		if ($('[data-role="js-graphics"]').length) performanceGraphics.init();
		if ($('[data-role="js-transmission"]').length) transmission.init();
		if ($('[data-role="js-safety"]').length) safety.init();
		if ($('[data-role="js-convience-popups"]').length) conviencePopups.init();
		if ($('[data-role="js-convience-slider"]').length) convienceSlider.init();

		// bind animations in sections, based

		$('[data-watch-scroll]').on('appear', function(ev){
			$(this).addClass('in-view');
			if ($(this).attr('data-role') && $(this).attr('data-role') === 'js-graphics') {
				performanceGraphics.draw();
			}
		});

		// colors preview

		$('.configurator-360-selector').on('click', function(ev){
			ev.preventDefault();
			var _this = $(this);
			$('.configurator-360-selector').removeClass('is-active');
			_this.addClass('is-active');
			$('[data-role="js-360-preview"]').attr('src', _this.attr('data-src'));
			$('.configurator-360-color-name').text(_this.attr('data-name'));
		});

		// end of sections

		// common document click handlers
		$doc.on('click', function(ev){
			var $target = $(ev.target);
			// close fast menu
			if ($target.closest($fastMenu).length === 0) {
				$fastMenu.removeClass('is-expanded');
			}
			// close subnav
			if ($nav.hasClass('is-sub-active')) {
				toggleSubNav(null,true);
			}
		});

		// common window scroll handlers
		$window
			.on('scroll', function(ev){
				scrolled = $window.scrollTop();
				navPos = document.getElementsByClassName('pip-primary-nav-pos')[0].getBoundingClientRect().top;
				// close subnav
				setTimeout(function(){
					if ($nav.hasClass('is-sub-active') && !$nav.data('hover')) {
						toggleSubNav(null,true);
					}
				}, 100);
				setTimeout(function(){
					toggleFixedNav();
				}, 5)
			})
			.on('resize', function(ev){

			});
	} catch(er) {
		console.log(er);
		//alert('CRASHED');
	}
});

// import from old solaris
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

		total = _slides.length - 1;
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
		fadeMe( index = (index < 0) ? total : index );
	});
	$next.click(function() {
		if ($(this).hasClass('dead')){return false}
		index += 1;
		fadeMe( index = (index > total) ? 0 : index );
	});
	$(document).on('click', '.gallery-body .gallery-list-holder .slide-paginator ul li', function() {
		if (!$(this).hasClass('alive')) {
			index = $(this).index();
			fadeMe(index);
		}
	});

	$(document).on('click', '.gallery-list-slider > ul li', function(){
		_saveScroll = $(window).scrollTop();
		// with fix
		$viewWrap.fadeIn(speed, function(){

		});


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


