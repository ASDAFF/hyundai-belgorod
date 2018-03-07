(function () {

  'use strict';

  //app.utils.transformPrefix = Modernizr.testAllProps('transform','pfx');

  //app.utils.transitionPrefix = Modernizr.testAllProps('transition','pfx');

  app.utils.getData = null;
  /**
   * Возвращает текущую позицию скрола
   * @returns {Number}
   */
  app.utils.getScrollPosition = function () {

    if (window.scrollY !== undefined) {
      return window.scrollY;
    } else if (document.documentElement && document.documentElement.scrollTop) { // for ie
      return document.documentElement.scrollTop;
    }
    return 0;
  };

  /**
   * получаем ширину системного скролла
   * @return {number} Ширина скролла.
   */
  app.utils.scrollWidth = function () {
    // создадим элемент с прокруткой
    var div = document.createElement('div');

    div.style.overflowY = 'scroll';
    div.style.width = '50px';
    div.style.height = '50px';

    // при display:none размеры нельзя узнать
    // нужно, чтобы элемент был видим,
    // visibility:hidden - можно, т.к. сохраняет геометрию
    div.style.visibility = 'hidden';

    document.body.appendChild(div);
    var scrollWidth = div.offsetWidth - div.clientWidth;
    document.body.removeChild(div);
    return scrollWidth;
  };

  /**
   * направление скролла window
   */
  app.utils.getDirection = {
    direction    : 1,
    lastScrollTop: 0,
    init         : function () {
      var self = this;
      $(window).scroll(function () {
        var scroll = $(window).scrollTop()
        ;

        if (self.lastScrollTop <= scroll) {
          self.direction = 1;
        } else {
          self.direction = -1;
        }
        self.lastScrollTop = scroll;
      });
    }
  };

  /**
   * Получаем путь background-image
   * @param jQuery object
   */
  app.utils.getBackgroundImageUrl = function ($obj) {
    var style = $obj[0].currentStyle || window.getComputedStyle($obj[0], false);
    return style.backgroundImage.slice(4, -1).replace(/"/g, '');
  };

  /**
   * Задает элементам одинаковую высоту
   * @param context
   * @returns {*}
   */
  app.utils.equalHeight = function (context) {
    var maxHeight = 0;
    return context.each(function (i, el) {
      var $el = $(el)
        , elHeight = $el.height();
      maxHeight = Math.max(maxHeight, elHeight);
    }).height(maxHeight);
  };

  /**
   * Делает скролл к нужному элементу
   * @param top - высота, которую нужно прокрутить от начала страницы
   * @param correction - поправка на высоту хедера
   * @param time - время выполнения анимации
   */
  app.utils.scrollTo = function(top, correction, time) {
    correction = correction || 0;
    time = time || 600;
    app.dom.$htmlbody.animate({
      'scrollTop': top - correction
    }, time);
  }

})();

;(function(){

	'use strict';

	var Advantages = {

		$el: $('.advantages'),

		state: {
			'canScroll': true,
			'scrollCanProgress': true,
			'mainSliderIsShow': false,
			'mainSliderCanPlay': true,
			'nestedSlidersCanPlay': true
		},

		init: function () {
			var
				self = this
			;

			self.imagesBg();

			self.initMainSlider();

			self.initTabs();

			self.initNestedSliders();

			console.log('Advantages module');
		},

		getTop: function () {
	      var top = Advantages.$el.offset().top;

	      app.dom.$window.on('resize', function () {
	        top = Advantages.$el.offset().top;
	      });

	      return top;
	    },

		// Вставление путей картинок в блоки
		imagesBg: function () {
			var $images = app.dom.$body.find('[data-bg]');

			$images.each(function () {
				var $this = $(this),
					src = $this.data('bg')
				;

				$this.css('background-image', 'url('+src+')')
			})
		},

		// Главгый слайдер преимуществ и скролл ивенты
		initMainSlider: function () {
			var self = this,
				$advantages = app.dom.$body.find('.js-advantages')
			;

			var	advantagesSlider = new Swiper('.js-advantages-slider', {
				direction: 'vertical',
				allowTouchMove: false,
				effect: 'fade'
			});

			$advantages.on('wheel', function (e) {
				var id = advantagesSlider.activeIndex,
					direction = e.originalEvent.deltaY > 0 ? 'bottom' : 'top',
					slidersLength = app.dom.$body.find('.js-images-swiper-container').length,
					scrollPos = $(this).offset().top
				;

				if (self.state.mainSliderIsShow) {
					var time = 1000;

					if (direction === 'top' && id !== 0) {
						e.preventDefault();

						self._scrollToFullscreen(scrollPos);

						if (self.state.mainSliderCanPlay) {
							advantagesSlider.slidePrev();

							self._canPlayTimeout('mainSliderCanPlay', time);
							self._canPlayTimeout('canScroll', time);
						}
					} else if (direction === 'bottom' && id !== slidersLength - 1) {
						e.preventDefault();

						self._scrollToFullscreen(scrollPos);

						if (self.state.mainSliderCanPlay) {
							advantagesSlider.slideNext();

							self._canPlayTimeout('mainSliderCanPlay', time);
							self._canPlayTimeout('canScroll', time);
						}
					} else if (self.state.canScroll) {
						scrollToFullStop();
					} else {
						e.preventDefault();
					}
				} else {
					showAdvanteges();
				}
			});

			function scrollToFullStop() {
				app.dom.$htmlbody.stop();
			}

			function showAdvanteges() {
				var timeout = 600;

				self._scrollToFullscreen($advantages.offset().top);
				self.state.mainSliderIsShow = true;

				$advantages.addClass('_show');

				self._canPlayTimeout('mainSliderCanPlay', timeout);
				self._canPlayTimeout('canScroll', timeout);
			}

			advantagesSlider.on('slideChange', function () {
				var id = advantagesSlider.activeIndex;

				self._tabsLine(id);
				self._advantagesCounter(id);
			});

			app.dom.$window.on('scroll', function (e) {
				var currScrollPos = $(this).scrollTop(),
					blockPosTop = $advantages.offset().top - $advantages.height() * 2 / 3,
					blockPosBottom = blockPosTop + $advantages.height()
				;

				if (currScrollPos > blockPosTop && currScrollPos < blockPosBottom && !self.state.mainSliderIsShow) {
					$advantages.addClass('_show');
				}

				// console.log((parseInt(app.dom.$htmlbody.scrollTop()) !== (parseInt($advantages.offset().top))));

				if (!self.state.scrollCanProgress) {
					e.preventDefault();
				}
			});

			self.advantagesSlider = advantagesSlider;
		},

		_scrollToFullscreen : function (top, time) {
			time = time || 600;
			var self = this,
				scrollEq = parseInt(app.dom.$htmlbody.scrollTop()) !== (parseInt(top))
			;

			if (scrollEq && self.state.scrollCanProgress) {
				self._canPlayTimeout('scrollCanProgress', time);

				app.dom.$htmlbody.animate({
					'scrollTop': top
				}, time);
			}
		},

		// Табы
		initTabs: function () {
			var self = this,
				$tabs = app.dom.$body.find('.js-tab-item')
			;

			self._tabsLine(0);

			$tabs.on('click', function () {
				var id = $(this).index(),
					time = 1000
				;

				self._scrollToFullscreen(app.dom.$body.find('.js-advantages').offset().top);

				if (self.state.mainSliderCanPlay) {
					self.advantagesSlider.slideTo(id);

					self._canPlayTimeout('mainSliderCanPlay', time);
					self._canPlayTimeout('canScroll', time);

					self._tabsLine(id);
				}


			})
		},

		// Управление линией под табами при помощи передаваемого id активного элемента
		_tabsLine: function (id) {
			var self = this,
				$line = app.dom.$body.find('.js-tabs-line'),
				$tabs = app.dom.$body.find('.js-tab-item'),
				width = parseInt($($tabs[id]).width()),
				offset = parseInt($($tabs[id]).offset().left - $($tabs[0]).offset().left)
			;

			$line.css({
				'width': width,
				'margin-left': offset
			})
		},

		// Слайдеры текста и картинок
		initNestedSliders: function () {
			var self = this,
				$sliderContainers = app.dom.$body.find('.js-images-swiper-container')
			;

			$sliderContainers.each(function () {
				var $this = $(this),
					$imagesSlider = $this.find('.js-images-slider'),
					$textSlider = $this.find('.js-text-slider')
				;

				var imagesSlider = new Swiper($imagesSlider, {
					allowTouchMove: false,
					effect: 'fade',
					nested: true,
					on: {
						'init': function () {
							app.dom.$body.find('.advantages__item--bg').addClass('_is-init')
						}
					}
				});

				var textSlider = new Swiper($textSlider, {
					allowTouchMove: false,
					effect: 'fade',
					nested: true
				});

				$this.find('.js-images-slider-prev').on('click', function () {
					if (self.state.nestedSlidersCanPlay) {
						imagesSlider.slidePrev();
						textSlider.slidePrev();
						getActiveIdSlide();

						self._canPlayTimeout('nestedSlidersCanPlay');
					}
				});

				$this.find('.js-images-slider-next').on('click', function () {
					if (self.state.nestedSlidersCanPlay) {
						imagesSlider.slideNext();
						textSlider.slideNext();
						getActiveIdSlide();

						self._canPlayTimeout('nestedSlidersCanPlay');
					}
				});

				function getActiveIdSlide() {
					var id = imagesSlider.activeIndex + 1,
						$counter = $this.find('.js-counter-active')
					;

					$counter.text(id);
				}
			});
		},


		// Счётчик активного преимущества
		_advantagesCounter: function (id) {
			var $el = app.dom.$body.find('.js-active-advantage'),
				index = id + 1
			;

			$el.text('0'+index);
		},

		// Задержка флага для слайдеров
		_canPlayTimeout: function (state, delay) {
			delay = delay || 400;
			var self = this;

			self.state[state] = false;

			setTimeout(function () {
				self.state[state] = true;
			}, delay)

		},
	};

	return app.modules.Advantages = Advantages;

})();
;(function(){

  'use strict';

  var Feat = {

    $el: $('.feat'),

    init: function () {

      Feat.playVideo();
      app.dom.$window.on('scroll', _.throttle(Feat.playVideo, 300));


      var $btn = Feat.$el.find('.feat__load');

      $btn.on('click', function () {
        app.utils.scrollTo(app.modules.Advantages.getTop());
      });

      console.log('Feat module');
    },

    getTop: function () {
      var top = Feat.$el.offset().top;

      app.dom.$window.on('resize', function () {
        top = Feat.$el.offset().top;
      });

      return top;
    },

    playVideo: function () {
      var
        $video = Feat.$el.find('video'),
        correction = 10
      ;

      if ( ! $video.is('[loop]') && app.utils.getScrollPosition() >= (Feat.getTop() - correction) ) {
        $video.attr('loop', '');
        $video[0].play();
      }
    }

  };

  return app.modules.Feat = Feat;

})();
;(function(){

  'use strict';

  var Hero = {

    $el: $('.hero'),

    init: function () {
      var $btn = Hero.$el.find('.hero__scroll-down');

      $btn.on('click', function () {
        app.utils.scrollTo(app.modules.Feat.getTop());
      });

      console.log('Hero module');
    }
  };

  return app.modules.Hero = Hero;

})();
; (function () {

    'use strict';

    var Plus = {

        $el: $('.plus'),

        init: function () {
            var headerOffTop = $('.header-primary').height();
            var blockOffLeft = $('.hero__img').offset().left + 90;
            var blockOffTop = $('.hero__img').offset().top + 90;

            $('.plus').css({
                'position': 'absolute',
                'bottom': 'calc(100% - ' + blockOffTop + 'px)',
                'left': 'calc(100% - ' + blockOffLeft + 'px)'
            });

            $(window).scroll(function () {
                // set plus color if blue section
                var featOffTop = $('.feat__inner').offset().top - 50;
                var plusOffTop = $('.plus').offset().top;
                var featHeight = $('.feat__inner').outerHeight();
                var featMax = featOffTop + featHeight + 25;
                if (plusOffTop >= featOffTop) {
                    $('.plus').addClass('plus_color');
                } else {
                    $('.plus').removeClass('plus_color');
                }
                if (plusOffTop >= featMax) {
                    $('.plus').removeClass('plus_color');
                }

                // set plus color if calc section
                var calcOffTop = $('.calc').offset().top - 50;
                var calcHeight = $('.calc').outerHeight();
                var calcMax = calcOffTop + calcHeight + 25;

                if (plusOffTop >= calcOffTop) {
                    $('.plus').addClass('plus_color');
                }
                if (plusOffTop >= calcMax) {
                    $('.plus').removeClass('plus_color');
                }

                // set position
                if ($(this).scrollTop() > headerOffTop) {
                    $('.plus').css({
                        'position': 'fixed',
                        'bottom': 'calc(100% - 90px)',
                        'left': 'calc(100% - ' + blockOffLeft + 'px)'
                    });
                } else {
                    $('.plus').css({
                        'position': 'absolute',
                        'bottom': 'calc(100% - ' + blockOffTop + 'px)',
                        'left': 'calc(100% - ' + blockOffLeft + 'px)'
                    });
                }
            });

            $('.plus').on('click', function () {
                $(this).toggleClass('plus_mod');
            });


            $('.plus__link_scroll').click(function() {
                var screenHeight = $(window).height();
                var calcHeight = $('.calc').outerHeight();
                var position;
                if (screenHeight <= calcHeight) {
                    position = 20;
                } else {
                    position = (screenHeight - calcHeight)/2;
                }
                $('html, body').animate({
                    scrollTop: $("#calc").offset().top - position
                }, 2000, 'swing');
            });
        }
    };

    return app.modules.Plus = Plus;

})();
; (function () {

    'use strict';

    var PulseBtn = {

        $el: $('.pulse-btn'),

        init: function () {
            // pulse button animation
            $(document).ready(function () {
                function loop() {
                    $('.pulse-btn__circle_first').css({
                        width: '100%',
                        height: '100%',
                        opacity: 1
                    });
                    $('.pulse-btn__circle_first').animate({
                        width: '150%',
                        height: '150%',
                        opacity: 0,
                    }, 1500, 'linear', function () {
                        loop();
                    });
                }
                loop();
            });

            // hover events, stop and reset
            $(document).on({
                mouseenter: function () {
                    $(".pulse-btn__circle_first").stop();
                    $(".pulse-btn__circle_first").animate({
                        width: '150%',
                        height: '150%',
                        opacity: 0,
                    }, 500)
                },
                mouseleave: function () {
                    function loop() {
                        $('.pulse-btn__circle_first').css({
                            width: '100%',
                            height: '100%',
                            opacity: 1
                        });
                        $('.pulse-btn__circle_first').animate({
                            width: '150%',
                            height: '150%',
                            opacity: 0,
                        }, 1500, 'linear', function () {
                            loop();
                        });
                    }
                    loop();
                }
            }, '.pulse-btn');

        }
    };

    return app.modules.PulseBtn = PulseBtn;

})();
;(function(){

  'use strict';

  var Video = {

    $el: $('.video'),

    states: {
      active: 'is-playing'
    },

    init: function () {
      var $btn = Video.$el.find('.pulse-btn');

      $btn.on('click', function() {
        Video.playVideo();
      });

      app.dom.$window.on('keydown', function() {
        if (app.keycodes.SPACE || app.keycodes.PAUSE_BREAK) {
          Video.playVideo();
        }
      });

      console.log('Video module');
    },

    playVideo: function () {
      var $video = Video.$el.find('video');

      if ($video[0].paused) {
        $video.attr('loop', '');
        Video.$el.addClass(Video.states.active);
        $video[0].play();
      }
    }
  };

  return app.modules.Video = Video;

})();
// добавляем jquery.browser
(function(){

	var matched, browser;

	// jQuery.uaMatch maintained for back-compat
	jQuery.uaMatch = function( ua ) {
		ua = ua.toLowerCase();

		var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
			/(webkit)[ \/]([\w.]+)/.exec( ua ) ||
			/(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
			/(msie) ([\w.]+)/.exec( ua ) ||
			ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
			[];

		return {
			browser: match[ 1 ] || "",
			version: match[ 2 ] || "0"
		};
	};

	matched = jQuery.uaMatch( navigator.userAgent );
	browser = {};

	if ( matched.browser ) {
		browser[ matched.browser ] = true;
		browser.version = matched.version;
	}

	// Chrome is Webkit, but Webkit is also Safari.
	if ( browser.chrome ) {
		browser.webkit = true;
	} else if ( browser.webkit ) {
		browser.safari = true;
	}

	jQuery.browser = browser;

})();

if (!String.prototype.trim) {
	String.prototype.trim = function () {
		return this.replace(/^\s+|\s+$/g, '');
	};
}

// Запускаем приложение
$(function(){
	app.initialize();
});


$(function(){svg4everybody();});
//# sourceMappingURL=scripts.js.map
