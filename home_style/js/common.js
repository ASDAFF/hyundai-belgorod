;$(function(){
    (function () {
        var elements = document.querySelectorAll('[data-rippled]'), timing = 0.5;

        function init (){
            for (var i = 0; i<elements.length;i++) {
                var _svg = $('<svg xmlns="http://www.w3.org/2000/svg" class="rippled-circle"><use class="rippled-circle-use" xlink:href="#rippled-circle" height="100" width="100"></use></svg>');
                elements[i].appendChild(_svg[0]);
                elements[i].addEventListener('click', rippleIt, false);
            }
        }

        function rippleIt (ev) {
            if (this.getAttribute('href') && this.getAttribute('href') === '#') ev.preventDefault();

            var tl = new TimelineMax(),
                color = this.getAttribute('data-rippled'),
                circle = this.querySelector('.rippled-circle-use'),
                csvg = this.querySelector('.rippled-circle'),
                x = ev.offsetX,
                y = ev.offsetY,
                w = ev.target.offsetWidth,
                h = ev.target.offsetHeight,
                offsetX = Math.abs( (w / 2) - x ),
                offsetY = Math.abs( (h / 2) - y ),
                deltaX = (w / 2) + offsetX,
                deltaY = (h / 2) + offsetY,
                scale_ratio = Math.sqrt(Math.pow(deltaX, 2) + Math.pow(deltaY, 2));

            csvg.style.fill = color;

            tl.fromTo(circle, timing, {
                x: x,
                y: y,
                transformOrigin: '50% 50%',
                scale: 0,
                opacity: 1,
                ease: Linear.easeOut
            },{
                scale: scale_ratio,
                opacity: 0
            });
        }

        if (elements.length) init();
    })();
})

/*!
 * Spreader вЂ“ simple modal windows plugin
 * licensed MIT, @ 2017 nickensoul@gmail.com
 * ver: 0.02
 * dependences: jquery
 */
'use strict'
var Spreader = (function(){
    /*
     *	private helpers;
     */
    var _helpers = {
        animationEnd: function () {
            var el = document.createElement('div'),
                animEndEventNames = {
                    animation		: 'animationend',
                    OAnimation	  	: 'oAnimationEnd',
                    MozAnimation	: 'animationend',
                    WebkitAnimation : 'webkitAnimationEnd'
                };

            for (var name in animEndEventNames) {
                if (el.style[name] !== undefined) {
                    return animEndEventNames[name];
                }
            }
        },
        iosScrollFix: function ($element) {
            var el = $element[0];
            if (!el.iosScrollFix) {
                el.iosScrollFix = true;
                el.addEventListener('touchstart', function(e){
                    this.aup = (this.scrollTop > 0)
                    this.ud = (this.scrollTop < this.scrollHeight - this.clientHeight)
                    this.prevTop = null
                    this.prevBot = null
                    this.lastY = e.pageY
                })
                el.addEventListener('touchmove', function(e){
                    var up = (e.pageY > this.lastY), down = !up;
                    this.lastY = e.pageY
                    if ((up && this.aup) || (down && this.ud)) e.stopPropagation()
                    else e.preventDefault()
                })
            }
        },
        closeEvent: function(){
            var event = $.Event({
                type: 'spreader.close'
            });
            $(document.documentElement).trigger(event);
        }
    };

    function Spreader (target, options) {
        this.target = target
        this.$wrapper = null
        this.$content = null
        this.$container = null
        var _this = this;

        this.defaults = {
            wrapperClass		:	'spreader-wrapper',
            wrapperActiveClass	: 	'spreader-wrapper--active',
            wrapperOverflowClass: 	'spreader-wrapper--overflow',
            containerClass		: 	'spreader',
            containerActiveClass: 	'spreader--visible',
            speed				: 	500,
            autoClose			: 	0,
            autoCloseTimer		: 	null,
            extra				: 	null,
            root				: 	document.documentElement,
            rootActiveClass		: 	'is-spreader-active',
            subRoot				: 	document.getElementById('wrapper'),
            containerTemplate	: 	'<div class="spreader" tabindex="-1" role="dialog"><div class="spreader-content"><a href="#" data-spreader="close" class="spreader-close" role="button"><svg xmlns="http://www.w3.org/2000/svg" class="ic-svg ic-close-sm"><use xlink:href="#ic-close-sm"></use></svg></a><div class="spreader-inner"></div></div></div>',
            animationEnd		: 	_helpers.animationEnd(),
            onInit				: 	null,
            onMount				: 	null,
            onShow				: 	null,
            onHide				: 	null,
            onClose				: 	null
        }

        this.options = $.extend({}, this.defaults, options)

        this.mount = function(){
            /*
             *	get common wrapper or create it at first creation of Spreader instance;
             *	then, create jQuery-based object $content with contents of targeted template element;
             *	so we have ready element to bind events or anything else, like it already exist in the DOM;
             */
            if (_this.options.subRoot.getElementsByClassName(_this.options.wrapperClass).length === 0) {
                var _div = document.createElement('div');
                _div.className = _this.options.wrapperClass
                _div.style.display = 'none'
                _this.$wrapper = $(_div).appendTo(_this.options.subRoot)

                _this.options.root.addEventListener('keypress', function(ev){
                    if (ev.keyCode === 27) {
                        _helpers.closeEvent()
                    }
                }, false)
            } else {
                _this.$wrapper = $(_this.options.subRoot).find('.'+_this.options.wrapperClass)
            }

            _this.$content = $($(_this.target).html())
            _this.$container = $(_this.options.containerTemplate)

            _this.$container.find('.spreader-inner').append(_this.$content)

            // add extra class form [data-classlist="classnames"] template property to the new $container

            if ($(_this.target).attr('data-classlist') !== '') {
                _this.$container.addClass($(_this.target).attr('data-classlist'));
            }

            // events

            $(_this.options.root).on('spreader.close', function(){
                _this.close();
            })

            $(window).on('resize', function(){
                if (_this.$container.hasClass(_this.options.containerActiveClass)) {
                    if (this._t) clearTimeout(this._t)
                    this._t = setTimeout(function(){_this.watchHeight.call(_this)},50)
                }
            });

            _this.$container[0].addEventListener('click', function(ev){
                ev.stopPropagation();
                if (ev.target.getAttribute('data-spreader') === 'close') {
                    ev.preventDefault()
                    _helpers.closeEvent()
                }
            }, false)

            _this.$wrapper[0].addEventListener('click', function(ev){
                if (_this.$container.hasClass(_this.options.containerActiveClass)) {
                    ev.preventDefault()
                    _helpers.closeEvent()
                }
            }, false)

            if (typeof this.options.onMount === 'function') {
                _this.options.onMount.call(_this);
            }
        }

        this.show = function(){
            _this.$container
                .appendTo(_this.$wrapper)
                .addClass(_this.options.containerActiveClass)
                .on(_this.options.animationEnd, function(){
                    _this.$container.off(_this.options.animationEnd)
                    _this.watchHeight();
                })

            if (!_this.$wrapper.hasClass(_this.options.wrapperActiveClass)) {
                _this.options.root.classList.add(_this.options.rootActiveClass)
                _this.$wrapper.stop().fadeIn(_this.options.speed, function(){
                    _this.$wrapper[0].iosScrollFix !== true && _helpers.iosScrollFix(_this.$wrapper);
                }).addClass(_this.options.wrapperActiveClass)
            }

            if (typeof _this.options.onShow === 'function') {
                _this.options.onShow.call(_this);
            }
        }

        this.hide = function(){
            /*
             *	only hide contaner, nothing will removed
             */
            if (_this.$container.hasClass(_this.options.containerActiveClass)) {
                _this.$container.removeClass(_this.options.containerActiveClass).on(_this.options.animationEnd, function(){
                    if (typeof _this.options.onHide === 'function') {
                        _this.options.onHide.call(_this)
                    }
                })
            }
        }

        this.close = function(){
            /*
             *	hide and close contaner, remove from DOM;
             *	hide wrapper;
             *	maybe clear events;
             */

            if (_this.$container.hasClass(_this.options.containerActiveClass)) {
                _this.$container
                    .removeClass(_this.options.containerActiveClass)
                    .on(_this.options.animationEnd, function(e){
                        _this.$container.detach().off(_this.options.animationEnd)

                        if (typeof _this.options.onClose === 'function') {
                            _this.options.onClose.call(_this)
                        }
                    })
            }

            if (_this.$wrapper.find('.'+_this.options.containerClass).length <= 1) {
                _this.options.root.classList.remove(_this.options.rootActiveClass)
                _this.$wrapper.stop().fadeOut(_this.options.speed, function(){
                    _this.$wrapper.removeClass(_this.options.wrapperActiveClass)
                })
            }
        }

        this.watchHeight = function(){
            var viewHeight = _this.$wrapper[0].clientHeight,
                contentHeight = _this.$container[0].clientHeight,
                yMargins = 100;
            if (contentHeight%2) {
                _this.$container.height(++contentHeight)
            }
            if (viewHeight < contentHeight + yMargins) {
                _this.$wrapper[0].classList.add(_this.options.wrapperOverflowClass)
            } else {
                _this.$wrapper[0].classList.remove(_this.options.wrapperOverflowClass)
            }

        }

        this.mount();
    }

    return Spreader

})();

/*!
 * 'valid it' jquery plugin
 * nickensoul@gmail.com
 * licensed MIT, @ 2016-2017 nickensoul
 * beta, no version at all
 * dependences: jquery, inputmask
 * use at your own risk only,
 * but mail me first =]
 */
(function ($, window, document, undefined) {
    var pluginName = 'validit';
    function validit (element, options) {
        this.element = element;
        this._name = pluginName;
        this._defaults = $.fn.validit.defaults;
        this.options = $.extend( {}, this._defaults, options );
        this.init();
    }
    $.extend(validit.prototype, {
        init: function () {
            this.buildCache();
            this.bindEvents();
            this.onInit();
        },
        buildCache: function () {
            this.$element = $(this.element);
            this.$inputs = this.$element.find('input, textarea, select'); // grab all [!] inputs to collection, because of we can change something after cache was created
            this.validState = true;
            this.captchaValid = false;
            this._xhrtimer;
            this.serialized = [];
        },
        bindEvents: function() {
            var plugin = this;
            plugin.$inputs
                .on('input.validit', function(e) {
                    if ($(this).is('[name="captcha"]')) {
                        plugin.captchaValid = false;
                    }
                    /*
                     if ($(this).is('[type="password"]') && $(this).is(plugin.options.partialSelector) && this.value.length !== 0) {
                     plugin.$inputs.filter('[type="password"]').removeAttr(plugin.options.partialSelector.slice(1, plugin.options.partialSelector.indexOf('=')))
                     }
                     */
                    if (plugin.$element.attr('data-state') === 'processing') {
                        plugin.check($(this));
                    }
                    plugin.onChange(this);
                })
                .on('focus.validit', function(e){
                    plugin.onFocus(this, e);
                })
                .on('blur.validit', function(e){
                    plugin.onBlur(this, e);
                })
                .filter('select')
                .on('change.validit', function(e){
                    if (plugin.$element.attr('data-state') === 'processing') {
                        plugin.check($(this));
                    }
                    plugin.onChange(this);
                });

            plugin.$element.on('submit.validit', function(e){
                plugin.submit($(this), e); // we have the option to allow the default form action, after success validation
            });
        },
        check: function($field) {
            var plugin = this;
            plugin.$element.attr('data-state', 'processing');
            plugin.validState = true;
            function checkF ($field) {
                if (!$field) return _this.error('Undefined field.');

                /*
                 Checking conditions below.
                 Them depends on the input type, exclude password:
                 For the password type we may have an extra confirm field,
                 So, using predefined [name] properties will most simple way.
                 [data-empty] and [data-wrong] attributes, are used for add or change extra text to the helping label.
                 */
                if (!$field.is(plugin.options.ignoreSelector)) { // if we have to ignore an input
                    if ($field.val() === '' && !$field.attr('data-dependence')) {
                        if ($field.attr(plugin.options.optionalAttr)) {
                            var $optionalsPair = plugin.$inputs.filter('['+plugin.options.optionalAttr+'='+$field.attr(plugin.options.optionalAttr)+']'),
                                pairState = false;
                            $optionalsPair.each(function(){
                                if ($(this).val() !== '') {
                                    pairState = true;
                                }
                            });
                            if (pairState === false) {
                                $optionalsPair.addClass(plugin.options.invalidClass);
                                plugin.validState = false;
                            } else {
                                $optionalsPair.removeClass(plugin.options.invalidClass);
                            }
                        } else if ($field.is(plugin.options.partialSelector)) {
                            $field.removeClass(plugin.options.invalidClass);
                        } else {
                            plugin.validState = false;
                            $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-empty'));
                        }
                    } else if ($field.is('[type="email"]')) {
                        if (plugin.options.reEmail.test($field.val())) {
                            $field.removeClass(plugin.options.invalidClass);
                        } else {
                            plugin.validState = false;
                            $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                        }
                    } else if ($field.is('[type="tel"]')) {
                        if ($field.inputmask('isComplete')){
                            $field.removeClass(plugin.options.invalidClass);
                        } else {
                            plugin.validState = false;
                            $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                        }
                    } else if ($field.is('[data-type="date"]')) {
                        if ($field.inputmask('isComplete')){
                            $field.removeClass(plugin.options.invalidClass);
                        } else {
                            plugin.validState = false;
                            $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                        }
                    } else if ($field.is('[type="password"]')) {
                        var _simple = true,
                            _passes = plugin.$inputs.filter('[type="password"]'),
                            _ignore = true;

                        _passes.each(function(){
                            if ($(this).attr('data-dependence')) {
                                _simple = false;
                            }
                        });

                        if (_simple) {
                            if ($field.is('[name="password_confirm"]') && $field.val() !== plugin.$inputs.filter('[name="password"]').val()) {
                                plugin.validState = false;
                                $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                            } else if ($field.val().length < plugin.options.passwordLen) {
                                plugin.validState = false;
                                $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                            } else {
                                $field.removeClass(plugin.options.invalidClass);
                            }
                        } else {
                            _passes.each(function(){
                                if ($(this).val().length !== 0) {
                                    _ignore = false;
                                }
                            });
                            if (_ignore) {
                                _passes.removeClass(plugin.options.invalidClass);
                            } else {
                                if ($field.val() === '') {
                                    plugin.validState = false;
                                    $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-empty'));
                                } else if ($field.val().length < plugin.options.passwordLen) {
                                    plugin.validState = false;
                                    $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                                } else if ($field.is('[name="password_old"]')) {
                                    if ($field.val() === '') {
                                        plugin.validState = false;
                                        $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-empty'));
                                    } else if ($field.val().length < plugin.options.passwordLen) {
                                        plugin.validState = false;
                                        $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                                    } else {
                                        $field.removeClass(plugin.options.invalidClass);
                                    }
                                } else {
                                    if (plugin.$inputs.filter('[name="password_old"]').val() === '') {
                                        plugin.validState = false;
                                        plugin.$inputs.filter('[name="password_old"]').addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text(plugin.$inputs.filter('[name="password_old"]').attr('data-empty'));
                                    } else if (plugin.$inputs.filter('[name="password_old"]').val().length < plugin.options.passwordLen) {
                                        plugin.validState = false;
                                        plugin.$inputs.filter('[name="password_old"]').addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text(plugin.$inputs.filter('[name="password_old"]').attr('data-wrong'));
                                    } else if ($field.is('[name="password_confirm"]') && $field.val() !== plugin.$inputs.filter('[name="password"]').val()) {
                                        plugin.validState = false;
                                        $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                                    } else {
                                        $field.removeClass(plugin.options.invalidClass);
                                    }
                                }
                            }
                        }
                    } else if ($field.is('[type="radio"]')) {
                        var _holder = $field.parents('.input-holder--has-radios'),
                            _group = plugin.$inputs.filter('[name="'+$field.attr('name')+'"]'),
                            _selected = false;
                        // check if parent radio has ignore flag
                        if (!_holder.is(plugin.options.ignoreSelector)) {
                            _group.each(function(){
                                if (this.checked) {
                                    _selected = true;
                                }
                            });
                            if (_selected === false) {
                                plugin.validState = false;
                                $field.removeClass(plugin.options.invalidClass);
                                _holder.addClass(plugin.options.invalidClass).find(plugin.options.errorPlaceholder).text(_holder.attr('data-empty'));
                            } else {
                                _holder.removeClass(plugin.options.invalidClass);
                            }
                        }
                    } else if ($field.is('[type="checkbox"]')) {
                        if ($field[0].checked) {
                            $field.removeClass(plugin.options.invalidClass)
                            $field.parent().removeClass(plugin.options.invalidLabelClass);
                        } else {
                            plugin.validState = false
                            $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'))
                            if ($field.parent().is('label')) {
                                $field.parent().addClass(plugin.options.invalidLabelClass)
                            }
                        }
                    } else if ($field.is('[name="captcha"]')) {
                        if (!plugin.captchaValid) {
                            plugin.validState = false;
                            if ($field.val().length < 5) {
                                return;
                            }
                            clearTimeout(plugin._xhrtimer);
                            plugin._xhrtimer = setTimeout(function(){
                                var xhr;
                                xhr && xhr.abort();
                                xhr = $.ajax({
// 									url: '../check_captcha.php',
                                    data: {word: $field.val(), sid: $field.attr('data-sid')},
                                    beforeSend: function(){
                                        $field.addClass('processing');
                                    },
                                    success: function(data) {
                                        if (data === '1') {
                                            $field.removeClass(plugin.options.invalidClass);
                                            plugin.captchaValid = true;
                                            $field.attr('disabled', 'disabled');
                                        } else {
                                            plugin.validState = false;
                                            $field.trigger('focus.validit');
                                            $field.addClass(plugin.options.invalidClass).siblings(plugin.options.errorPlaceholder).text($field.attr('data-wrong'));
                                        }
                                    },
                                    error: function(data) {
                                        App && App.notify('An error occured!\nTry again or report us.', true);
                                    }
                                }).done(function(){
                                    $field.removeClass('processing');
                                    if (plugin.$element.attr('data-state') === 'processing' && plugin.captchaValid === true) {
                                        plugin.$element.trigger('submit.validit');
                                    }
                                });
                            }, 500);
                        } else {
                            //$field.removeClass(plugin.options.invalidClass);
                        }
                    } else {
                        $field.removeClass(plugin.options.invalidClass)
                    }
                }

                if (plugin.validState === false) {
                    !$field.attr(plugin.options.optionalAttr) && $field.trigger('focus.validit');
                    // check if we cant get focus on element (if hidden)
                    // and check if this input is type of radio, then scroll manually to its parent holder (we may not see focused radios)
                    if (!$field.is(':visible') || $field.is('[type="radio"]')) {
                        try {
                            if (!$field.is(':visible')) {
                                if ($field.parent().find('input').is(':visible')) {
                                    $field.parent().find('input').trigger('focus.validit');
                                } else {
// 									$field.parent()[0].scrollIntoView();
                                }
                            } else if ($field.is('[type="radio"]')) {
// 								$field.parents('.input-holder--has-radios')[0].scrollIntoView();
                            }
                        } catch(err) {
                            plugin.error('Unable to focus on the invalid input.');
                        }
                    }
                } else {
                    plugin.$inputs.filter('['+plugin.options.optionalAttr+'='+$field.attr(plugin.options.optionalAttr)+']').removeClass(plugin.options.invalidClass);
                }
            }
            plugin.onCheck();
            // verify only passed field or all fields from cache (because of this we need to filter only non-ingored inputs directly within check field function)
            if (!$field) {
                plugin.$inputs.each(function(){
                    if (plugin.validState) checkF($(this));
                });
            } else {
                checkF($field);
            }
        },
        submit: function(form, event) {
            var plugin = this;
            plugin.onSubmit();
            plugin.check();
            if (plugin.validState) {
                plugin.options.submitDefault === false && event.preventDefault();
                plugin.$element.removeAttr('data-state');
                plugin.serialized = plugin.$inputs.not('[data-no-grab="true"]').serializeArray();
                plugin.onSuccessSubmit();
            } else {
                event.preventDefault();
            }
        },
        error: function(code) {
            if (this.options.alerting) {
                if (!code) {
                    alert('ValidIt: There was an internal error.\nPlease try again later or contact this site admin.');
                } else {
                    alert('ValidIt: There was an internal error.\nPlease try again later or contact this site admin.\nError text: '+code);
                }
            }
            if (this.options.logging) {
                if (!code) {
                    console.warn('ValidIt: There was an internal error.\nPlease try again later or contact this site admin.');
                } else {
                    console.warn('ValidIt: There was an internal error.\nPlease try again later or contact this site admin.\nError text: '+code);
                }
            }
        },
        refresh: function() {},
        reset: function() {
            var plugin = this;
            plugin.$element[0].reset();
        },
        onInit: function() {
            var onInit = this.options.onInit;
            if (typeof onInit === 'function') {
                onInit.call(this);
            }
        },
        onCheck: function() {
            var onCheck = this.options.onCheck;
            if (typeof onCheck === 'function') {
                onCheck.call(this);
            }
        },
        onSubmit: function() {
            var onSubmit = this.options.onSubmit;
            if (typeof onSubmit === 'function') {
                onSubmit.call(this);
            }
        },
        onSuccessSubmit: function() {
            var onSuccessSubmit = this.options.onSuccessSubmit;
            if (typeof onSuccessSubmit === 'function') {
                onSuccessSubmit.call(this);
            }
        },
        onChange: function(inputNode) {
            var onChange = this.options.onChange,
                inputNode = inputNode;
            if (typeof onChange === 'function') {
                onChange.call(inputNode);
            }
        },
        onFocus: function(inputNode, event) {
            var onFocus = this.options.onFocus;
            if (typeof onFocus === 'function') {
                onFocus.call(inputNode, event);
            }
        },
        onBlur: function(inputNode, event) {
            var onBlur = this.options.onBlur;
            if (typeof onBlur === 'function') {
                onBlur.call(inputNode, event);
            }
        }
    });
    $.fn.validit = function (options) {
        var arg = arguments;
        this.each(function() {
            if (!$.data(this, pluginName)) {
                $.data(this, pluginName, new validit(this, options));
            }
            if (typeof options === 'string') {
                var $data = $(this).data(pluginName);
                if (arg.length > 1) {
                    $data[options].apply($data, Array.prototype.slice.call(arg, 1));
                } else {
                    $data[options]();
                }
            }
        });
        return this;
    };
    $.fn.validit.defaults = {
        invalidClass:		'wrong', // class to add if field is invalid or empty
        invalidLabelClass: 'mdl-error-label', // class to invalid label
        ignoreSelector:		'[data-novalidate="true"]', // no validate, at all
        partialSelector:	'[data-novalidate="partial"]', // validate if field value length != 0
        optionalAttr:		'data-optional-id', // validate multiple optional fields: like an OR condition between selected fields
        errorPlaceholder:	'.input-error-label', // node element to set error text
        // reEmail:			/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        reEmail: /^[-._A-Za-z0-9]+@(?:[A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,6}/,
        passwordLen:		6,
        submitDefault:		false, // if you prefer use native submit action (no default action will prevented)
        logging:			false,
        alerting:			false,
        onInit:				null,
        onCheck:			null,
        onSubmit:			null,
        onSuccessSubmit:	null,
        onChange:			null,
        onFocus:			null,
        onBlur:				null
    };
})(jQuery, window, document);


/* common global scripts */


// @codekit-prepend '../components/plugins.src.js';

window.notify = (function(){
    var notify = function(what, style, persist) {
        if (!what.length) return

        if (typeof what === 'string') what = what.replace(/\n/g, '<br>');
        $('.notify').not('.persist').length > 0 && $('.notify').not('.persist').stop().slideUp(250, function(){$(this).remove()});

        var $notify = $('<div class="notify'+ (persist === true ? ' persist' : '') + (style ? ' '+style+'' : '') +'"><span class="notify__text">'+what+'</span></div>')
            .hide()
            .appendTo('body')
            .slideDown({duration: 250, easing: 'linear'})
            .on('click', function(){
                $(this).stop().slideUp(250, function(){
                    $(this).remove()
                })
            });

        setTimeout(function(){
            $notify.not('.persist').length > 0 && $notify.not('.persist').stop().slideUp(250, function(){$(this).remove()});
        }, 10000)
    }
    return notify
})();

;(function($){
    var onlineCallModal = new Spreader('#online-call-template', {
        onShow: function() {
            toggleMenu()
        },
        onMount: function() {
            this.$container.find('[data-form-id="online-call"]')
                .validit({
                    onSuccessSubmit: function(){
                        var data = this.serialized,
                            submitButton = this.$element.find('[type="submit"]');

                        data.push({ name: 'googleId', value: gid});
                        data.push({ name: 'yandexId', value: yClientID});

                        $.ajax({
                            url: 'https://www.hyundai.ru/requestnew/send_crm_before_zingaya',
                            type: 'POST',
                            data: data,
                            success: function(r){
                                if (r === 'Y') {
                                    onlineCallModal.close();
                                    window.notify('РЈСЃРїРµС€РЅРѕ.', 'success');

                                    /*
                                     dataLayer.push({
                                     "event": "custom_event",
                                     "category" : 'РЎРІСЏР·СЊ',
                                     "action": 'Р—РІРѕРЅРѕРє РґРёР»РµСЂСѓ',
                                     "label" : 'РћС‚РїСЂР°РІРєР° С„РѕСЂРјС‹'
                                     });
                                     */

                                    // Р’С‹Р·РѕРІРµРј РєР»РёРє РїРѕ СЃСЃС‹Р»РєРµ
                                    $('#zing_hotline_btn').trigger('click');
                                } else {
                                    window.notify('РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР°.<br>РџРѕРІС‚РѕСЂРёС‚Рµ РїРѕР·РґРЅeРµ.', 'error')
                                }
                            },
                            beforeSend: function(){
                                submitButton.addClass('disabled').attr('disabled', 'disabled')
                            },
                            complete: function(){
                                submitButton.removeClass('disabled').removeAttr('disabled')
                            }
                        }).fail(function(jqXHR){
                            window.notify(jqXHR.statusText+': '+jqXHR.status, 'error')
                        })
                        // send xhr
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
                .parents('[data-form-id="online-call"]').find('#call-bday').inputmask({
                    alias: 'date',
                    showMaskOnHover: false,
                    greedy: false,
                    placeholder: 'РґРґ/РјРј/РіРіРіРі'
                })
        }
    });

    var primaryHeader = $('#header-primary'),
        activeClass = '_active',
        menus = [ 'navbar-support', 'showroom-submenu', 'n-submenu', 'service-submenu' ],
        menuOverlay = $('.menu-overlay');

    function toggleMenu (menu) {
        f = false;
        for (var i = 0; i < menus.length; i++) {
            var item = menus[i];
            if (item === menu) {
                primaryHeader.find('[data-role="' + item + '"]')[0].classList.toggle(activeClass)
                if (primaryHeader.find('[data-role="' + menus[i] + '-link"]').length) {
                    primaryHeader.find('[data-role="' + menus[i] + '-link"]')[0].classList.toggle(activeClass)
                }

                if(primaryHeader.find('[data-role="' + item + '"]').hasClass(activeClass))
                {
                    menuOverlay.addClass(activeClass);
                    f = true;
                }
                else
                    menuOverlay.removeClass(activeClass);

            } else {
                primaryHeader.find('[data-role="' + item + '"]')[0].classList.remove(activeClass)
                if (primaryHeader.find('[data-role="' + menus[i] + '-link"]').length) {
                    primaryHeader.find('[data-role="' + menus[i] + '-link"]')[0].classList.remove(activeClass)
                }
            }
        }
        if(!f)
            menuOverlay.removeClass(activeClass);
    }

    primaryHeader.find('[data-role="navbar-support"]').on('click', function (event) {
        event.stopPropagation()
        toggleMenu('navbar-support')
    }).find('> div').on('click', function (event) {
        event.stopPropagation()
    }).find('[data-role="online-call"]').on('click', function(event){
        event.preventDefault()
        event.stopPropagation()
        onlineCallModal.show()
        toggleMenu()
    })

    primaryHeader.find('[data-role="showroom-submenu-link"]').on('click', function (event) {
        event.stopPropagation()
        toggleMenu('showroom-submenu')
    }).find('> div').on('click', function (event) {
        event.stopPropagation()
    })


    primaryHeader.find('[data-role="n-submenu-link"]').on('click', function (event) {
        event.stopPropagation()
        toggleMenu('n-submenu')
    }).find('> div').on('click', function (event) {
        event.stopPropagation()
    })

    primaryHeader.find('[data-role="service-submenu-link"]').on('click', function (event) {
        event.stopPropagation()
        toggleMenu('service-submenu')
    }).find('> div').on('click', function (event) {
        event.stopPropagation()
    })

    window.addEventListener('scroll', function () {
        primaryHeader.find('.navbar-primary__sp')[0].classList.remove(activeClass)
    }, false)
    window.addEventListener('click', function () {
        toggleMenu()
    }, false)
    window.addEventListener('keyup', function (event) {
        if (event.keyCode === 27) {
            event.preventDefault()
            toggleMenu()
        }
    }, false)

})(jQuery);

$(function(){
    var newsletterModal = new Spreader('#newsletter-template', {
        onMount: function() {
            this.$container.find('[data-form-id="newsletter-form"]')
                .validit({
                    onSuccessSubmit: function(){
                        var data = this.serialized,
                            submitButton = this.$element.find('[type="submit"]');
                        // send xhr
                        console.log(data);

                        gid = ga.getAll()[0].get('clientId');
                        yClientID = yaCounter23259694.getClientID();

                        data.push({ name: 'googleId', value: gid});
                        data.push({ name: 'yandexId', value: yClientID});

                        /*
                         data.push({
                         googleId: gid,
                         yandexId: yClientID
                         });
                         */
                        $.ajax({
                            url: 'https://www.hyundai.ru/requestnew/request_add_newsletter',
                            type: 'POST',
                            data: data,
                            success: function(r){
                                if (r === 'Y') {
                                    newsletterModal.close()
                                    window.notify('РЈСЃРїРµС€РЅРѕ.', 'success')

                                    dataLayer.push({
                                        'event': 'custom_event',
                                        'category' : 'РЎРІСЏР·СЊ',
                                        'action': 'РџРѕРґРїРёСЃР°С‚СЊСЃСЏ РЅР° РЅРѕРІРѕСЃС‚Рё',
                                        'label' : 'РћС‚РїСЂР°РІРєР° С„РѕСЂРјС‹'
                                    });
                                } else {
                                    window.notify('РџСЂРѕРёР·РѕС€Р»Р° РѕС€РёР±РєР°.<br>РџРѕРІС‚РѕСЂРёС‚Рµ РїРѕР·РґРЅeРµ.', 'error')
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
                .parents('[data-form-id="newsletter-form"]').find('[name="news-bday"]').inputmask({
                    alias: 'date',
                    showMaskOnHover: false,
                    greedy: false,
                    placeholder: 'РґРґ/РјРј/РіРіРіРі'
                })
        }
    })

    $('[data-form-id="subscribe-form"]').validit({
        onSuccessSubmit: function(){
            var input = this.$inputs[0].value;
            newsletterModal.options.onShow = function() {
                this.$content.find('[type="email"]').val(input)
            };

            newsletterModal.show()
        },
        onFocus: function(){},
        onBlur: function(){}
    })

    $('[href="#showroom"]').on('click', function(ev){
        ev.preventDefault();
        $('html, body').animate({scrollTop: $('.main-header__submenus-holder').offset().top}, 250, function(){
            $('[data-role="showroom-submenu"').addClass('_active')
            $('[data-role="showroom-submenu-link"').addClass('_active')
        })
    })
});

// @codekit-append '../components/jquery.simplemodal.1.4.4.min.js';
// @codekit-append '../components/jquery.validate.js';
// @codekit-append '../components/zing.js';

/*
 * SimpleModal 1.4.4 - jQuery Plugin
 * http://simplemodal.com/
 * Copyright (c) 2013 Eric Martin
 * Licensed under MIT and GPL
 * Date: Sun, Jan 20 2013 15:58:56 -0800
 */
(function(b){"function"===typeof define&&define.amd?define(["jquery"],b):b(jQuery)})(function(b){var j=[],n=b(document),k=navigator.userAgent.toLowerCase(),l=b(window),g=[],o=null,p=/msie/.test(k)&&!/opera/.test(k),q=/opera/.test(k),m,r;m=p&&/msie 6./.test(k)&&"object"!==typeof window.XMLHttpRequest;r=p&&/msie 7.0/.test(k);b.modal=function(a,h){return b.modal.impl.init(a,h)};b.modal.close=function(){b.modal.impl.close()};b.modal.focus=function(a){b.modal.impl.focus(a)};b.modal.setContainerDimensions=
    function(){b.modal.impl.setContainerDimensions()};b.modal.setPosition=function(){b.modal.impl.setPosition()};b.modal.update=function(a,h){b.modal.impl.update(a,h)};b.fn.modal=function(a){return b.modal.impl.init(this,a)};b.modal.defaults={appendTo:"body",focus:!0,opacity:50,overlayId:"simplemodal-overlay",overlayCss:{},containerId:"simplemodal-container",containerCss:{},dataId:"simplemodal-data",dataCss:{},minHeight:null,minWidth:null,maxHeight:null,maxWidth:null,autoResize:!1,autoPosition:!0,zIndex:1E3,
    close:!0,closeHTML:'<a class="modalCloseImg" title="Close"></a>',closeClass:"simplemodal-close",escClose:!0,overlayClose:!1,fixed:!0,position:null,persist:!1,modal:!0,onOpen:null,onShow:null,onClose:null};b.modal.impl={d:{},init:function(a,h){if(this.d.data)return!1;o=p&&!b.support.boxModel;this.o=b.extend({},b.modal.defaults,h);this.zIndex=this.o.zIndex;this.occb=!1;if("object"===typeof a){if(a=a instanceof b?a:b(a),this.d.placeholder=!1,0<a.parent().parent().length&&(a.before(b("<span></span>").attr("id",
        "simplemodal-placeholder").css({display:"none"})),this.d.placeholder=!0,this.display=a.css("display"),!this.o.persist))this.d.orig=a.clone(!0)}else if("string"===typeof a||"number"===typeof a)a=b("<div></div>").html(a);else return alert("SimpleModal Error: Unsupported data type: "+typeof a),this;this.create(a);this.open();b.isFunction(this.o.onShow)&&this.o.onShow.apply(this,[this.d]);return this},create:function(a){this.getDimensions();if(this.o.modal&&m)this.d.iframe=b('<iframe src="javascript:false;"></iframe>').css(b.extend(this.o.iframeCss,
    {display:"none",opacity:0,position:"fixed",height:g[0],width:g[1],zIndex:this.o.zIndex,top:0,left:0})).appendTo(this.o.appendTo);this.d.overlay=b("<div></div>").attr("id",this.o.overlayId).addClass("simplemodal-overlay").css(b.extend(this.o.overlayCss,{display:"none",opacity:this.o.opacity/100,height:this.o.modal?j[0]:0,width:this.o.modal?j[1]:0,position:"fixed",left:0,top:0,zIndex:this.o.zIndex+1})).appendTo(this.o.appendTo);this.d.container=b("<div></div>").attr("id",this.o.containerId).addClass("simplemodal-container").css(b.extend({position:this.o.fixed?
    "fixed":"absolute"},this.o.containerCss,{display:"none",zIndex:this.o.zIndex+2})).append(this.o.close&&this.o.closeHTML?b(this.o.closeHTML).addClass(this.o.closeClass):"").appendTo(this.o.appendTo);this.d.wrap=b("<div></div>").attr("tabIndex",-1).addClass("simplemodal-wrap").css({height:"100%",outline:0,width:"100%"}).appendTo(this.d.container);this.d.data=a.attr("id",a.attr("id")||this.o.dataId).addClass("simplemodal-data").css(b.extend(this.o.dataCss,{display:"none"})).appendTo("body");this.setContainerDimensions();
    this.d.data.appendTo(this.d.wrap);(m||o)&&this.fixIE()},bindEvents:function(){var a=this;b("."+a.o.closeClass).bind("click.simplemodal",function(b){b.preventDefault();a.close()});a.o.modal&&a.o.close&&a.o.overlayClose&&a.d.overlay.bind("click.simplemodal",function(b){b.preventDefault();a.close()});n.bind("keydown.simplemodal",function(b){a.o.modal&&9===b.keyCode?a.watchTab(b):a.o.close&&a.o.escClose&&27===b.keyCode&&(b.preventDefault(),a.close())});l.bind("resize.simplemodal orientationchange.simplemodal",
    function(){a.getDimensions();a.o.autoResize?a.setContainerDimensions():a.o.autoPosition&&a.setPosition();m||o?a.fixIE():a.o.modal&&(a.d.iframe&&a.d.iframe.css({height:g[0],width:g[1]}),a.d.overlay.css({height:j[0],width:j[1]}))})},unbindEvents:function(){b("."+this.o.closeClass).unbind("click.simplemodal");n.unbind("keydown.simplemodal");l.unbind(".simplemodal");this.d.overlay.unbind("click.simplemodal")},fixIE:function(){var a=this.o.position;b.each([this.d.iframe||null,!this.o.modal?null:this.d.overlay,
    "fixed"===this.d.container.css("position")?this.d.container:null],function(b,e){if(e){var f=e[0].style;f.position="absolute";if(2>b)f.removeExpression("height"),f.removeExpression("width"),f.setExpression("height",'document.body.scrollHeight > document.body.clientHeight ? document.body.scrollHeight : document.body.clientHeight + "px"'),f.setExpression("width",'document.body.scrollWidth > document.body.clientWidth ? document.body.scrollWidth : document.body.clientWidth + "px"');else{var c,d;a&&a.constructor===
Array?(c=a[0]?"number"===typeof a[0]?a[0].toString():a[0].replace(/px/,""):e.css("top").replace(/px/,""),c=-1===c.indexOf("%")?c+' + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"':parseInt(c.replace(/%/,""))+' * ((document.documentElement.clientHeight || document.body.clientHeight) / 100) + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"',a[1]&&(d="number"===typeof a[1]?
    a[1].toString():a[1].replace(/px/,""),d=-1===d.indexOf("%")?d+' + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"':parseInt(d.replace(/%/,""))+' * ((document.documentElement.clientWidth || document.body.clientWidth) / 100) + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"')):(c='(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"',
    d='(document.documentElement.clientWidth || document.body.clientWidth) / 2 - (this.offsetWidth / 2) + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"');f.removeExpression("top");f.removeExpression("left");f.setExpression("top",c);f.setExpression("left",d)}}})},focus:function(a){var h=this,a=a&&-1!==b.inArray(a,["first","last"])?a:"first",e=b(":input:enabled:visible:"+a,h.d.wrap);setTimeout(function(){0<e.length?e.focus():h.d.wrap.focus()},
    10)},getDimensions:function(){var a="undefined"===typeof window.innerHeight?l.height():window.innerHeight;j=[n.height(),n.width()];g=[a,l.width()]},getVal:function(a,b){return a?"number"===typeof a?a:"auto"===a?0:0<a.indexOf("%")?parseInt(a.replace(/%/,""))/100*("h"===b?g[0]:g[1]):parseInt(a.replace(/px/,"")):null},update:function(a,b){if(!this.d.data)return!1;this.d.origHeight=this.getVal(a,"h");this.d.origWidth=this.getVal(b,"w");this.d.data.hide();a&&this.d.container.css("height",a);b&&this.d.container.css("width",
    b);this.setContainerDimensions();this.d.data.show();this.o.focus&&this.focus();this.unbindEvents();this.bindEvents()},setContainerDimensions:function(){var a=m||r,b=this.d.origHeight?this.d.origHeight:q?this.d.container.height():this.getVal(a?this.d.container[0].currentStyle.height:this.d.container.css("height"),"h"),a=this.d.origWidth?this.d.origWidth:q?this.d.container.width():this.getVal(a?this.d.container[0].currentStyle.width:this.d.container.css("width"),"w"),e=this.d.data.outerHeight(!0),f=
    this.d.data.outerWidth(!0);this.d.origHeight=this.d.origHeight||b;this.d.origWidth=this.d.origWidth||a;var c=this.o.maxHeight?this.getVal(this.o.maxHeight,"h"):null,d=this.o.maxWidth?this.getVal(this.o.maxWidth,"w"):null,c=c&&c<g[0]?c:g[0],d=d&&d<g[1]?d:g[1],i=this.o.minHeight?this.getVal(this.o.minHeight,"h"):"auto",b=b?this.o.autoResize&&b>c?c:b<i?i:b:e?e>c?c:this.o.minHeight&&"auto"!==i&&e<i?i:e:i,c=this.o.minWidth?this.getVal(this.o.minWidth,"w"):"auto",a=a?this.o.autoResize&&a>d?d:a<c?c:a:f?
    f>d?d:this.o.minWidth&&"auto"!==c&&f<c?c:f:c;this.d.container.css({height:b,width:a});this.d.wrap.css({overflow:e>b||f>a?"auto":"visible"});this.o.autoPosition&&this.setPosition()},setPosition:function(){var a,b;a=g[0]/2-this.d.container.outerHeight(!0)/2;b=g[1]/2-this.d.container.outerWidth(!0)/2;var e="fixed"!==this.d.container.css("position")?l.scrollTop():0;this.o.position&&"[object Array]"===Object.prototype.toString.call(this.o.position)?(a=e+(this.o.position[0]||a),b=this.o.position[1]||b):
    a=e+a;this.d.container.css({left:b,top:a})},watchTab:function(a){if(0<b(a.target).parents(".simplemodal-container").length){if(this.inputs=b(":input:enabled:visible:first, :input:enabled:visible:last",this.d.data[0]),!a.shiftKey&&a.target===this.inputs[this.inputs.length-1]||a.shiftKey&&a.target===this.inputs[0]||0===this.inputs.length)a.preventDefault(),this.focus(a.shiftKey?"last":"first")}else a.preventDefault(),this.focus()},open:function(){this.d.iframe&&this.d.iframe.show();b.isFunction(this.o.onOpen)?
    this.o.onOpen.apply(this,[this.d]):(this.d.overlay.show(),this.d.container.show(),this.d.data.show());this.o.focus&&this.focus();this.bindEvents()},close:function(){if(!this.d.data)return!1;this.unbindEvents();if(b.isFunction(this.o.onClose)&&!this.occb)this.occb=!0,this.o.onClose.apply(this,[this.d]);else{if(this.d.placeholder){var a=b("#simplemodal-placeholder");this.o.persist?a.replaceWith(this.d.data.removeClass("simplemodal-data").css("display",this.display)):(this.d.data.hide().remove(),a.replaceWith(this.d.orig))}else this.d.data.hide().remove();
    this.d.container.hide().remove();this.d.overlay.hide();this.d.iframe&&this.d.iframe.hide().remove();this.d.overlay.remove();this.d={}}}}});


/*!
 * jQuery Validation Plugin 1.11.1
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright 2013 JГ¶rn Zaefferer
 * Released under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */

(function($) {

    $.extend($.fn, {
        // http://docs.jquery.com/Plugins/Validation/validate
        validate: function( options ) {

            // if nothing is selected, return nothing; can't chain anyway
            if ( !this.length ) {
                if ( options && options.debug && window.console ) {
                    console.warn( "Nothing selected, can't validate, returning nothing." );
                }
                return;
            }

            // check if a validator for this form was already created
            var validator = $.data( this[0], "validator" );
            if ( validator ) {
                return validator;
            }

            // Add novalidate tag if HTML5.
            this.attr( "novalidate", "novalidate" );

            validator = new $.validator( options, this[0] );
            $.data( this[0], "validator", validator );

            if ( validator.settings.onsubmit ) {

                this.validateDelegate( ":submit", "click", function( event ) {
                    if ( validator.settings.submitHandler ) {
                        validator.submitButton = event.target;
                    }
                    // allow suppressing validation by adding a cancel class to the submit button
                    if ( $(event.target).hasClass("cancel") ) {
                        validator.cancelSubmit = true;
                    }

                    // allow suppressing validation by adding the html5 formnovalidate attribute to the submit button
                    if ( $(event.target).attr("formnovalidate") !== undefined ) {
                        validator.cancelSubmit = true;
                    }
                });

                // validate the form on submit
                this.submit( function( event ) {
                    if ( validator.settings.debug ) {
                        // prevent form submit to be able to see console output
                        event.preventDefault();
                    }
                    function handle() {
                        var hidden;
                        if ( validator.settings.submitHandler ) {
                            if ( validator.submitButton ) {
                                // insert a hidden input as a replacement for the missing submit button
                                hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val( $(validator.submitButton).val() ).appendTo(validator.currentForm);
                            }
                            validator.settings.submitHandler.call( validator, validator.currentForm, event );
                            if ( validator.submitButton ) {
                                // and clean up afterwards; thanks to no-block-scope, hidden can be referenced
                                hidden.remove();
                            }
                            return false;
                        }
                        return true;
                    }

                    // prevent submit for invalid forms or custom submit handlers
                    if ( validator.cancelSubmit ) {
                        validator.cancelSubmit = false;
                        return handle();
                    }
                    if ( validator.form() ) {
                        if ( validator.pendingRequest ) {
                            validator.formSubmitted = true;
                            return false;
                        }
                        return handle();
                    } else {
                        validator.focusInvalid();
                        return false;
                    }
                });
            }

            return validator;
        },
        // http://docs.jquery.com/Plugins/Validation/valid
        valid: function() {
            if ( $(this[0]).is("form")) {
                return this.validate().form();
            } else {
                var valid = true;
                var validator = $(this[0].form).validate();
                this.each(function() {
                    valid = valid && validator.element(this);
                });
                return valid;
            }
        },
        // attributes: space seperated list of attributes to retrieve and remove
        removeAttrs: function( attributes ) {
            var result = {},
                $element = this;
            $.each(attributes.split(/\s/), function( index, value ) {
                result[value] = $element.attr(value);
                $element.removeAttr(value);
            });
            return result;
        },
        // http://docs.jquery.com/Plugins/Validation/rules
        rules: function( command, argument ) {
            var element = this[0];

            if ( command ) {
                var settings = $.data(element.form, "validator").settings;
                var staticRules = settings.rules;
                var existingRules = $.validator.staticRules(element);
                switch(command) {
                    case "add":
                        $.extend(existingRules, $.validator.normalizeRule(argument));
                        // remove messages from rules, but allow them to be set separetely
                        delete existingRules.messages;
                        staticRules[element.name] = existingRules;
                        if ( argument.messages ) {
                            settings.messages[element.name] = $.extend( settings.messages[element.name], argument.messages );
                        }
                        break;
                    case "remove":
                        if ( !argument ) {
                            delete staticRules[element.name];
                            return existingRules;
                        }
                        var filtered = {};
                        $.each(argument.split(/\s/), function( index, method ) {
                            filtered[method] = existingRules[method];
                            delete existingRules[method];
                        });
                        return filtered;
                }
            }

            var data = $.validator.normalizeRules(
                $.extend(
                    {},
                    $.validator.classRules(element),
                    $.validator.attributeRules(element),
                    $.validator.dataRules(element),
                    $.validator.staticRules(element)
                ), element);

            // make sure required is at front
            if ( data.required ) {
                var param = data.required;
                delete data.required;
                data = $.extend({required: param}, data);
            }

            return data;
        }
    });

// Custom selectors
    $.extend($.expr[":"], {
        // http://docs.jquery.com/Plugins/Validation/blank
        blank: function( a ) { return !$.trim("" + $(a).val()); },
        // http://docs.jquery.com/Plugins/Validation/filled
        filled: function( a ) { return !!$.trim("" + $(a).val()); },
        // http://docs.jquery.com/Plugins/Validation/unchecked
        unchecked: function( a ) { return !$(a).prop("checked"); }
    });

// constructor for validator
    $.validator = function( options, form ) {
        this.settings = $.extend( true, {}, $.validator.defaults, options );
        this.currentForm = form;
        this.init();
    };

    $.validator.format = function( source, params ) {
        if ( arguments.length === 1 ) {
            return function() {
                var args = $.makeArray(arguments);
                args.unshift(source);
                return $.validator.format.apply( this, args );
            };
        }
        if ( arguments.length > 2 && params.constructor !== Array  ) {
            params = $.makeArray(arguments).slice(1);
        }
        if ( params.constructor !== Array ) {
            params = [ params ];
        }
        $.each(params, function( i, n ) {
            source = source.replace( new RegExp("\\{" + i + "\\}", "g"), function() {
                return n;
            });
        });
        return source;
    };

    $.extend($.validator, {

        defaults: {
            messages: {},
            groups: {},
            rules: {},
            errorClass: "error",
            validClass: "valid",
            errorElement: "label",
            focusInvalid: true,
            errorContainer: $([]),
            errorLabelContainer: $([]),
            onsubmit: true,
            ignore: ":hidden",
            ignoreTitle: false,
            onfocusin: function( element, event ) {
                this.lastActive = element;

                // hide error label and remove error class on focus if enabled
                if ( this.settings.focusCleanup && !this.blockFocusCleanup ) {
                    if ( this.settings.unhighlight ) {
                        this.settings.unhighlight.call( this, element, this.settings.errorClass, this.settings.validClass );
                    }
                    this.addWrapper(this.errorsFor(element)).hide();
                }
            },
            onfocusout: function( element, event ) {
                if ( !this.checkable(element) && (element.name in this.submitted || !this.optional(element)) ) {
                    this.element(element);
                }
            },
            onkeyup: function( element, event ) {
                if ( event.which === 9 && this.elementValue(element) === "" ) {
                    return;
                } else if ( element.name in this.submitted || element === this.lastElement ) {
                    this.element(element);
                }
            },
            onclick: function( element, event ) {
                // click on selects, radiobuttons and checkboxes
                if ( element.name in this.submitted ) {
                    this.element(element);
                }
                // or option elements, check parent select in that case
                else if ( element.parentNode.name in this.submitted ) {
                    this.element(element.parentNode);
                }
            },
            highlight: function( element, errorClass, validClass ) {
                if ( element.type === "radio" ) {
                    this.findByName(element.name).addClass(errorClass).removeClass(validClass);
                } else {
                    $(element).addClass(errorClass).removeClass(validClass);
                }
            },
            unhighlight: function( element, errorClass, validClass ) {
                if ( element.type === "radio" ) {
                    this.findByName(element.name).removeClass(errorClass).addClass(validClass);
                } else {
                    $(element).removeClass(errorClass).addClass(validClass);
                }
            }
        },

        // http://docs.jquery.com/Plugins/Validation/Validator/setDefaults
        setDefaults: function( settings ) {
            $.extend( $.validator.defaults, settings );
        },

        messages: {
            required: "This field is required.",
            remote: "Please fix this field.",
            email: "Please enter a valid email address.",
            url: "Please enter a valid URL.",
            date: "Please enter a valid date.",
            dateISO: "Please enter a valid date (ISO).",
            number: "Please enter a valid number.",
            digits: "Please enter only digits.",
            creditcard: "Please enter a valid credit card number.",
            equalTo: "Please enter the same value again.",
            maxlength: $.validator.format("Please enter no more than {0} characters."),
            minlength: $.validator.format("Please enter at least {0} characters."),
            rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
            range: $.validator.format("Please enter a value between {0} and {1}."),
            max: $.validator.format("Please enter a value less than or equal to {0}."),
            min: $.validator.format("Please enter a value greater than or equal to {0}.")
        },

        autoCreateRanges: false,

        prototype: {

            init: function() {
                this.labelContainer = $(this.settings.errorLabelContainer);
                this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
                this.containers = $(this.settings.errorContainer).add( this.settings.errorLabelContainer );
                this.submitted = {};
                this.valueCache = {};
                this.pendingRequest = 0;
                this.pending = {};
                this.invalid = {};
                this.reset();

                var groups = (this.groups = {});
                $.each(this.settings.groups, function( key, value ) {
                    if ( typeof value === "string" ) {
                        value = value.split(/\s/);
                    }
                    $.each(value, function( index, name ) {
                        groups[name] = key;
                    });
                });
                var rules = this.settings.rules;
                $.each(rules, function( key, value ) {
                    rules[key] = $.validator.normalizeRule(value);
                });

                function delegate(event) {
                    var validator = $.data(this[0].form, "validator"),
                        eventType = "on" + event.type.replace(/^validate/, "");
                    if ( validator.settings[eventType] ) {
                        validator.settings[eventType].call(validator, this[0], event);
                    }
                }
                $(this.currentForm)
                    .validateDelegate(":text, [type='password'], [type='file'], select, textarea, " +
                    "[type='number'], [type='search'] ,[type='tel'], [type='url'], " +
                    "[type='email'], [type='datetime'], [type='date'], [type='month'], " +
                    "[type='week'], [type='time'], [type='datetime-local'], " +
                    "[type='range'], [type='color'] ",
                    "focusin focusout keyup", delegate)
                    .validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", delegate);

                if ( this.settings.invalidHandler ) {
                    $(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
                }
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/form
            form: function() {
                this.checkForm();
                $.extend(this.submitted, this.errorMap);
                this.invalid = $.extend({}, this.errorMap);
                if ( !this.valid() ) {
                    $(this.currentForm).triggerHandler("invalid-form", [this]);
                }
                this.showErrors();
                return this.valid();
            },

            checkForm: function() {
                this.prepareForm();
                for ( var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++ ) {
                    this.check( elements[i] );
                }
                return this.valid();
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/element
            element: function( element ) {
                element = this.validationTargetFor( this.clean( element ) );
                this.lastElement = element;
                this.prepareElement( element );
                this.currentElements = $(element);
                var result = this.check( element ) !== false;
                if ( result ) {
                    delete this.invalid[element.name];
                } else {
                    this.invalid[element.name] = true;
                }
                if ( !this.numberOfInvalids() ) {
                    // Hide error containers on last error
                    this.toHide = this.toHide.add( this.containers );
                }
                this.showErrors();
                return result;
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/showErrors
            showErrors: function( errors ) {
                if ( errors ) {
                    // add items to error list and map
                    $.extend( this.errorMap, errors );
                    this.errorList = [];
                    for ( var name in errors ) {
                        this.errorList.push({
                            message: errors[name],
                            element: this.findByName(name)[0]
                        });
                    }
                    // remove items from success list
                    this.successList = $.grep( this.successList, function( element ) {
                        return !(element.name in errors);
                    });
                }
                if ( this.settings.showErrors ) {
                    this.settings.showErrors.call( this, this.errorMap, this.errorList );
                } else {
                    this.defaultShowErrors();
                }
            },

            // http://docs.jquery.com/Plugins/Validation/Validator/resetForm
            resetForm: function() {
                if ( $.fn.resetForm ) {
                    $(this.currentForm).resetForm();
                }
                this.submitted = {};
                this.lastElement = null;
                this.prepareForm();
                this.hideErrors();
                this.elements().removeClass( this.settings.errorClass ).removeData( "previousValue" );
            },

            numberOfInvalids: function() {
                return this.objectLength(this.invalid);
            },

            objectLength: function( obj ) {
                var count = 0;
                for ( var i in obj ) {
                    count++;
                }
                return count;
            },

            hideErrors: function() {
                this.addWrapper( this.toHide ).hide();
            },

            valid: function() {
                return this.size() === 0;
            },

            size: function() {
                return this.errorList.length;
            },

            focusInvalid: function() {
                if ( this.settings.focusInvalid ) {
                    try {
                        $(this.findLastActive() || this.errorList.length && this.errorList[0].element || [])
                            .filter(":visible")
                            .focus()
                            // manually trigger focusin event; without it, focusin handler isn't called, findLastActive won't have anything to find
                            .trigger("focusin");
                    } catch(e) {
                        // ignore IE throwing errors when focusing hidden elements
                    }
                }
            },

            findLastActive: function() {
                var lastActive = this.lastActive;
                return lastActive && $.grep(this.errorList, function( n ) {
                        return n.element.name === lastActive.name;
                    }).length === 1 && lastActive;
            },

            elements: function() {
                var validator = this,
                    rulesCache = {};

                // select all valid inputs inside the form (no submit or reset buttons)
                return $(this.currentForm)
                    .find("input, select, textarea")
                    .not(":submit, :reset, :image, [disabled]")
                    .not( this.settings.ignore )
                    .filter(function() {
                        if ( !this.name && validator.settings.debug && window.console ) {
                            console.error( "%o has no name assigned", this);
                        }

                        // select only the first element for each name, and only those with rules specified
                        if ( this.name in rulesCache || !validator.objectLength($(this).rules()) ) {
                            return false;
                        }

                        rulesCache[this.name] = true;
                        return true;
                    });
            },

            clean: function( selector ) {
                return $(selector)[0];
            },

            errors: function() {
                var errorClass = this.settings.errorClass.replace(" ", ".");
                return $(this.settings.errorElement + "." + errorClass, this.errorContext);
            },

            reset: function() {
                this.successList = [];
                this.errorList = [];
                this.errorMap = {};
                this.toShow = $([]);
                this.toHide = $([]);
                this.currentElements = $([]);
            },

            prepareForm: function() {
                this.reset();
                this.toHide = this.errors().add( this.containers );
            },

            prepareElement: function( element ) {
                this.reset();
                this.toHide = this.errorsFor(element);
            },

            elementValue: function( element ) {
                var type = $(element).attr("type"),
                    val = $(element).val();

                if ( type === "radio" || type === "checkbox" ) {
                    return $("input[name='" + $(element).attr("name") + "']:checked").val();
                }

                if ( typeof val === "string" ) {
                    return val.replace(/\r/g, "");
                }
                return val;
            },

            check: function( element ) {
                element = this.validationTargetFor( this.clean( element ) );

                var rules = $(element).rules();
                var dependencyMismatch = false;
                var val = this.elementValue(element);
                var result;

                for (var method in rules ) {
                    var rule = { method: method, parameters: rules[method] };
                    try {

                        result = $.validator.methods[method].call( this, val, element, rule.parameters );

                        // if a method indicates that the field is optional and therefore valid,
                        // don't mark it as valid when there are no other rules
                        if ( result === "dependency-mismatch" ) {
                            dependencyMismatch = true;
                            continue;
                        }
                        dependencyMismatch = false;

                        if ( result === "pending" ) {
                            this.toHide = this.toHide.not( this.errorsFor(element) );
                            return;
                        }

                        if ( !result ) {
                            this.formatAndAdd( element, rule );
                            return false;
                        }
                    } catch(e) {
                        if ( this.settings.debug && window.console ) {
                            console.log( "Exception occurred when checking element " + element.id + ", check the '" + rule.method + "' method.", e );
                        }
                        throw e;
                    }
                }
                if ( dependencyMismatch ) {
                    return;
                }
                if ( this.objectLength(rules) ) {
                    this.successList.push(element);
                }
                return true;
            },

            // return the custom message for the given element and validation method
            // specified in the element's HTML5 data attribute
            customDataMessage: function( element, method ) {
                return $(element).data("msg-" + method.toLowerCase()) || (element.attributes && $(element).attr("data-msg-" + method.toLowerCase()));
            },

            // return the custom message for the given element name and validation method
            customMessage: function( name, method ) {
                var m = this.settings.messages[name];
                return m && (m.constructor === String ? m : m[method]);
            },

            // return the first defined argument, allowing empty strings
            findDefined: function() {
                for(var i = 0; i < arguments.length; i++) {
                    if ( arguments[i] !== undefined ) {
                        return arguments[i];
                    }
                }
                return undefined;
            },

            defaultMessage: function( element, method ) {
                return this.findDefined(
                    this.customMessage( element.name, method ),
                    this.customDataMessage( element, method ),
                    // title is never undefined, so handle empty string as undefined
                    !this.settings.ignoreTitle && element.title || undefined,
                    $.validator.messages[method],
                    "<strong>Warning: No message defined for " + element.name + "</strong>"
                );
            },

            formatAndAdd: function( element, rule ) {
                var message = this.defaultMessage( element, rule.method ),
                    theregex = /\$?\{(\d+)\}/g;
                if ( typeof message === "function" ) {
                    message = message.call(this, rule.parameters, element);
                } else if (theregex.test(message)) {
                    message = $.validator.format(message.replace(theregex, "{$1}"), rule.parameters);
                }
                this.errorList.push({
                    message: message,
                    element: element
                });

                this.errorMap[element.name] = message;
                this.submitted[element.name] = message;
            },

            addWrapper: function( toToggle ) {
                if ( this.settings.wrapper ) {
                    toToggle = toToggle.add( toToggle.parent( this.settings.wrapper ) );
                }
                return toToggle;
            },

            defaultShowErrors: function() {
                var i, elements;
                for ( i = 0; this.errorList[i]; i++ ) {
                    var error = this.errorList[i];
                    if ( this.settings.highlight ) {
                        this.settings.highlight.call( this, error.element, this.settings.errorClass, this.settings.validClass );
                    }
                    this.showLabel( error.element, error.message );
                }
                if ( this.errorList.length ) {
                    this.toShow = this.toShow.add( this.containers );
                }
                if ( this.settings.success ) {
                    for ( i = 0; this.successList[i]; i++ ) {
                        this.showLabel( this.successList[i] );
                    }
                }
                if ( this.settings.unhighlight ) {
                    for ( i = 0, elements = this.validElements(); elements[i]; i++ ) {
                        this.settings.unhighlight.call( this, elements[i], this.settings.errorClass, this.settings.validClass );
                    }
                }
                this.toHide = this.toHide.not( this.toShow );
                this.hideErrors();
                this.addWrapper( this.toShow ).show();
            },

            validElements: function() {
                return this.currentElements.not(this.invalidElements());
            },

            invalidElements: function() {
                return $(this.errorList).map(function() {
                    return this.element;
                });
            },

            showLabel: function( element, message ) {
                var label = this.errorsFor( element );
                if ( label.length ) {
                    // refresh error/success class
                    label.removeClass( this.settings.validClass ).addClass( this.settings.errorClass );
                    // replace message on existing label
                    label.html(message);
                } else {
                    // create label
                    label = $("<" + this.settings.errorElement + ">")
                        .attr("for", this.idOrName(element))
                        .addClass(this.settings.errorClass)
                        .html(message || "");
                    if ( this.settings.wrapper ) {
                        // make sure the element is visible, even in IE
                        // actually showing the wrapped element is handled elsewhere
                        label = label.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
                    }
                    if ( !this.labelContainer.append(label).length ) {
                        if ( this.settings.errorPlacement ) {
                            this.settings.errorPlacement(label, $(element) );
                        } else {
                            label.insertAfter(element);
                        }
                    }
                }
                if ( !message && this.settings.success ) {
                    label.text("");
                    if ( typeof this.settings.success === "string" ) {
                        label.addClass( this.settings.success );
                    } else {
                        this.settings.success( label, element );
                    }
                }
                this.toShow = this.toShow.add(label);
            },

            errorsFor: function( element ) {
                var name = this.idOrName(element);
                return this.errors().filter(function() {
                    return $(this).attr("for") === name;
                });
            },

            idOrName: function( element ) {
                return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
            },

            validationTargetFor: function( element ) {
                // if radio/checkbox, validate first element in group instead
                if ( this.checkable(element) ) {
                    element = this.findByName( element.name ).not(this.settings.ignore)[0];
                }
                return element;
            },

            checkable: function( element ) {
                return (/radio|checkbox/i).test(element.type);
            },

            findByName: function( name ) {
                return $(this.currentForm).find("[name='" + name + "']");
            },

            getLength: function( value, element ) {
                switch( element.nodeName.toLowerCase() ) {
                    case "select":
                        return $("option:selected", element).length;
                    case "input":
                        if ( this.checkable( element) ) {
                            return this.findByName(element.name).filter(":checked").length;
                        }
                }
                return value.length;
            },

            depend: function( param, element ) {
                return this.dependTypes[typeof param] ? this.dependTypes[typeof param](param, element) : true;
            },

            dependTypes: {
                "boolean": function( param, element ) {
                    return param;
                },
                "string": function( param, element ) {
                    return !!$(param, element.form).length;
                },
                "function": function( param, element ) {
                    return param(element);
                }
            },

            optional: function( element ) {
                var val = this.elementValue(element);
                return !$.validator.methods.required.call(this, val, element) && "dependency-mismatch";
            },

            startRequest: function( element ) {
                if ( !this.pending[element.name] ) {
                    this.pendingRequest++;
                    this.pending[element.name] = true;
                }
            },

            stopRequest: function( element, valid ) {
                this.pendingRequest--;
                // sometimes synchronization fails, make sure pendingRequest is never < 0
                if ( this.pendingRequest < 0 ) {
                    this.pendingRequest = 0;
                }
                delete this.pending[element.name];
                if ( valid && this.pendingRequest === 0 && this.formSubmitted && this.form() ) {
                    $(this.currentForm).submit();
                    this.formSubmitted = false;
                } else if (!valid && this.pendingRequest === 0 && this.formSubmitted) {
                    $(this.currentForm).triggerHandler("invalid-form", [this]);
                    this.formSubmitted = false;
                }
            },

            previousValue: function( element ) {
                return $.data(element, "previousValue") || $.data(element, "previousValue", {
                        old: null,
                        valid: true,
                        message: this.defaultMessage( element, "remote" )
                    });
            }

        },

        classRuleSettings: {
            required: {required: true},
            email: {email: true},
            url: {url: true},
            date: {date: true},
            dateISO: {dateISO: true},
            number: {number: true},
            digits: {digits: true},
            creditcard: {creditcard: true}
        },

        addClassRules: function( className, rules ) {
            if ( className.constructor === String ) {
                this.classRuleSettings[className] = rules;
            } else {
                $.extend(this.classRuleSettings, className);
            }
        },

        classRules: function( element ) {
            var rules = {};
            var classes = $(element).attr("class");
            if ( classes ) {
                $.each(classes.split(" "), function() {
                    if ( this in $.validator.classRuleSettings ) {
                        $.extend(rules, $.validator.classRuleSettings[this]);
                    }
                });
            }
            return rules;
        },

        attributeRules: function( element ) {
            var rules = {};
            var $element = $(element);
            var type = $element[0].getAttribute("type");

            for (var method in $.validator.methods) {
                var value;

                // support for <input required> in both html5 and older browsers
                if ( method === "required" ) {
                    value = $element.get(0).getAttribute(method);
                    // Some browsers return an empty string for the required attribute
                    // and non-HTML5 browsers might have required="" markup
                    if ( value === "" ) {
                        value = true;
                    }
                    // force non-HTML5 browsers to return bool
                    value = !!value;
                } else {
                    value = $element.attr(method);
                }

                // convert the value to a number for number inputs, and for text for backwards compability
                // allows type="date" and others to be compared as strings
                if ( /min|max/.test( method ) && ( type === null || /number|range|text/.test( type ) ) ) {
                    value = Number(value);
                }

                if ( value ) {
                    rules[method] = value;
                } else if ( type === method && type !== 'range' ) {
                    // exception: the jquery validate 'range' method
                    // does not test for the html5 'range' type
                    rules[method] = true;
                }
            }

            // maxlength may be returned as -1, 2147483647 (IE) and 524288 (safari) for text inputs
            if ( rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength) ) {
                delete rules.maxlength;
            }

            return rules;
        },

        dataRules: function( element ) {
            var method, value,
                rules = {}, $element = $(element);
            for (method in $.validator.methods) {
                value = $element.data("rule-" + method.toLowerCase());
                if ( value !== undefined ) {
                    rules[method] = value;
                }
            }
            return rules;
        },

        staticRules: function( element ) {
            var rules = {};
            var validator = $.data(element.form, "validator");
            if ( validator.settings.rules ) {
                rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
            }
            return rules;
        },

        normalizeRules: function( rules, element ) {
            // handle dependency check
            $.each(rules, function( prop, val ) {
                // ignore rule when param is explicitly false, eg. required:false
                if ( val === false ) {
                    delete rules[prop];
                    return;
                }
                if ( val.param || val.depends ) {
                    var keepRule = true;
                    switch (typeof val.depends) {
                        case "string":
                            keepRule = !!$(val.depends, element.form).length;
                            break;
                        case "function":
                            keepRule = val.depends.call(element, element);
                            break;
                    }
                    if ( keepRule ) {
                        rules[prop] = val.param !== undefined ? val.param : true;
                    } else {
                        delete rules[prop];
                    }
                }
            });

            // evaluate parameters
            $.each(rules, function( rule, parameter ) {
                rules[rule] = $.isFunction(parameter) ? parameter(element) : parameter;
            });

            // clean number parameters
            $.each(['minlength', 'maxlength'], function() {
                if ( rules[this] ) {
                    rules[this] = Number(rules[this]);
                }
            });
            $.each(['rangelength', 'range'], function() {
                var parts;
                if ( rules[this] ) {
                    if ( $.isArray(rules[this]) ) {
                        rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
                    } else if ( typeof rules[this] === "string" ) {
                        parts = rules[this].split(/[\s,]+/);
                        rules[this] = [Number(parts[0]), Number(parts[1])];
                    }
                }
            });

            if ( $.validator.autoCreateRanges ) {
                // auto-create ranges
                if ( rules.min && rules.max ) {
                    rules.range = [rules.min, rules.max];
                    delete rules.min;
                    delete rules.max;
                }
                if ( rules.minlength && rules.maxlength ) {
                    rules.rangelength = [rules.minlength, rules.maxlength];
                    delete rules.minlength;
                    delete rules.maxlength;
                }
            }

            return rules;
        },

        // Converts a simple string to a {string: true} rule, e.g., "required" to {required:true}
        normalizeRule: function( data ) {
            if ( typeof data === "string" ) {
                var transformed = {};
                $.each(data.split(/\s/), function() {
                    transformed[this] = true;
                });
                data = transformed;
            }
            return data;
        },

        // http://docs.jquery.com/Plugins/Validation/Validator/addMethod
        addMethod: function( name, method, message ) {
            $.validator.methods[name] = method;
            $.validator.messages[name] = message !== undefined ? message : $.validator.messages[name];
            if ( method.length < 3 ) {
                $.validator.addClassRules(name, $.validator.normalizeRule(name));
            }
        },

        methods: {

            // http://docs.jquery.com/Plugins/Validation/Methods/required
            required: function( value, element, param ) {
                // check if dependency is met
                if ( !this.depend(param, element) ) {
                    return "dependency-mismatch";
                }
                if ( element.nodeName.toLowerCase() === "select" ) {
                    // could be an array for select-multiple or a string, both are fine this way
                    var val = $(element).val();
                    return val && val.length > 0;
                }
                if ( this.checkable(element) ) {
                    return this.getLength(value, element) > 0;
                }
                return $.trim(value).length > 0;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/email
            email: function( value, element ) {
                // contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
                return this.optional(element) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/url
            url: function( value, element ) {
                // contributed by Scott Gonzalez: http://projects.scottsplayground.com/iri/
                return this.optional(element) || /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/date
            date: function( value, element ) {
                return this.optional(element) || !/Invalid|NaN/.test(new Date(value).toString());
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/dateISO
            dateISO: function( value, element ) {
                return this.optional(element) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/number
            number: function( value, element ) {
                return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/digits
            digits: function( value, element ) {
                return this.optional(element) || /^\d+$/.test(value);
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/creditcard
            // based on http://en.wikipedia.org/wiki/Luhn
            creditcard: function( value, element ) {
                if ( this.optional(element) ) {
                    return "dependency-mismatch";
                }
                // accept only spaces, digits and dashes
                if ( /[^0-9 \-]+/.test(value) ) {
                    return false;
                }
                var nCheck = 0,
                    nDigit = 0,
                    bEven = false;

                value = value.replace(/\D/g, "");

                for (var n = value.length - 1; n >= 0; n--) {
                    var cDigit = value.charAt(n);
                    nDigit = parseInt(cDigit, 10);
                    if ( bEven ) {
                        if ( (nDigit *= 2) > 9 ) {
                            nDigit -= 9;
                        }
                    }
                    nCheck += nDigit;
                    bEven = !bEven;
                }

                return (nCheck % 10) === 0;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/minlength
            minlength: function( value, element, param ) {
                var length = $.isArray( value ) ? value.length : this.getLength($.trim(value), element);
                return this.optional(element) || length >= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/maxlength
            maxlength: function( value, element, param ) {
                var length = $.isArray( value ) ? value.length : this.getLength($.trim(value), element);
                return this.optional(element) || length <= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/rangelength
            rangelength: function( value, element, param ) {
                var length = $.isArray( value ) ? value.length : this.getLength($.trim(value), element);
                return this.optional(element) || ( length >= param[0] && length <= param[1] );
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/min
            min: function( value, element, param ) {
                return this.optional(element) || value >= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/max
            max: function( value, element, param ) {
                return this.optional(element) || value <= param;
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/range
            range: function( value, element, param ) {
                return this.optional(element) || ( value >= param[0] && value <= param[1] );
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/equalTo
            equalTo: function( value, element, param ) {
                // bind to the blur event of the target in order to revalidate whenever the target field is updated
                // TODO find a way to bind the event just once, avoiding the unbind-rebind overhead
                var target = $(param);
                if ( this.settings.onfocusout ) {
                    target.unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
                        $(element).valid();
                    });
                }
                return value === target.val();
            },

            // http://docs.jquery.com/Plugins/Validation/Methods/remote
            remote: function( value, element, param ) {
                if ( this.optional(element) ) {
                    return "dependency-mismatch";
                }

                var previous = this.previousValue(element);
                if (!this.settings.messages[element.name] ) {
                    this.settings.messages[element.name] = {};
                }
                previous.originalMessage = this.settings.messages[element.name].remote;
                this.settings.messages[element.name].remote = previous.message;

                param = typeof param === "string" && {url:param} || param;

                if ( previous.old === value ) {
                    return previous.valid;
                }

                previous.old = value;
                var validator = this;
                this.startRequest(element);
                var data = {};
                data[element.name] = value;
                $.ajax($.extend(true, {
                    url: param,
                    mode: "abort",
                    port: "validate" + element.name,
                    dataType: "json",
                    data: data,
                    success: function( response ) {
                        validator.settings.messages[element.name].remote = previous.originalMessage;
                        var valid = response === true || response === "true";
                        if ( valid ) {
                            var submitted = validator.formSubmitted;
                            validator.prepareElement(element);
                            validator.formSubmitted = submitted;
                            validator.successList.push(element);
                            delete validator.invalid[element.name];
                            validator.showErrors();
                        } else {
                            var errors = {};
                            var message = response || validator.defaultMessage( element, "remote" );
                            errors[element.name] = previous.message = $.isFunction(message) ? message(value) : message;
                            validator.invalid[element.name] = true;
                            validator.showErrors(errors);
                        }
                        previous.valid = valid;
                        validator.stopRequest(element, valid);
                    }
                }, param));
                return "pending";
            }

        }

    });

// deprecated, use $.validator.format instead
    $.format = $.validator.format;

}(jQuery));

// ajax mode: abort
// usage: $.ajax({ mode: "abort"[, port: "uniqueport"]});
// if mode:"abort" is used, the previous request on that port (port can be undefined) is aborted via XMLHttpRequest.abort()
(function($) {
    var pendingRequests = {};
    // Use a prefilter if available (1.5+)
    if ( $.ajaxPrefilter ) {
        $.ajaxPrefilter(function( settings, _, xhr ) {
            var port = settings.port;
            if ( settings.mode === "abort" ) {
                if ( pendingRequests[port] ) {
                    pendingRequests[port].abort();
                }
                pendingRequests[port] = xhr;
            }
        });
    } else {
        // Proxy ajax
        var ajax = $.ajax;
        $.ajax = function( settings ) {
            var mode = ( "mode" in settings ? settings : $.ajaxSettings ).mode,
                port = ( "port" in settings ? settings : $.ajaxSettings ).port;
            if ( mode === "abort" ) {
                if ( pendingRequests[port] ) {
                    pendingRequests[port].abort();
                }
                pendingRequests[port] = ajax.apply(this, arguments);
                return pendingRequests[port];
            }
            return ajax.apply(this, arguments);
        };
    }
}(jQuery));

// provides delegate(type: String, delegate: Selector, handler: Callback) plugin for easier event delegation
// handler is only called when $(event.target).is(delegate), in the scope of the jquery-object for event.target
(function($) {
    $.extend($.fn, {
        validateDelegate: function( delegate, type, handler ) {
            return this.bind(type, function( event ) {
                var target = $(event.target);
                if ( target.is(delegate) ) {
                    return handler.apply(target, arguments);
                }
            });
        }
    });
}(jQuery));


var $parent;
String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1);
};