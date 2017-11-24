/*! 
* name:		drop it – custom select drop downs
* type:		jquery plugin
* version:	0.2
* autor:	nickensoul@gmail.com
* licence:	MIT, 2016-2017
* warning!
* this plugin was developed for build-in using only, don't use it 'as is';
*/

(function ($, window, document, undefined) {
    var pluginName = 'dropit';
    function dropit ( element, options ) {
        this.element = element;
        this._name = pluginName;
        this._defaults = $.fn.dropit.defaults;
        this.options = $.extend( {}, this._defaults, options );
        this.init();
    }
    $.extend(dropit.prototype, {
        init: function () {
            this.buildCache();
            this.bindEvents();
            this.onInit();
        },
        destroy: function() {
            this.unbindEvents();
            this.$element.removeData();
        },
        buildCache: function () {
            this.$element = $(this.element);
			this.$activeItem = this.$element.find('.'+this.options.activeItemClass);
			this.$items = this.$element.find('.'+this.options.itemsClass);
			this.$item = this.$element.find('.'+this.options.itemClass);
			this.placeholder = this.options.placeholder;
			this.requiredTemplate = this.options.requiredTemplate;
			this.$selected = null;
			this.selectedVal = '';
			this.selectedText = '';
			this.transitionName = this.getTransitionVendorName();
			
			if (this.$item.filter('.active').length !== 0) {
                this.select.call(this, this.$item.filter('.active')[0]);
                this.$item.filter('.active').removeClass('active');
			} else {
				this.reset(); // set default content
			}
        },
		getTransitionVendorName: function() {
			var el = document.createElement('div');
			var transEndEventNames = {
				WebkitTransition : 'webkitTransitionEnd',
				MozTransition    : 'transitionend',
				OTransition      : 'oTransitionEnd otransitionend',
				transition       : 'transitionend'
			};
			for (var name in transEndEventNames) {
				if (el.style[name] !== undefined) {
					return transEndEventNames[name];
				}
			}
			return false;
		},
        bindEvents: function() {
            var plugin = this;
            plugin.$element.on('focus blur', function() {
                plugin.changeState.call(plugin);
            });
            plugin.$item.on('click', function() {
                plugin.select.call(plugin, this);
            });
            plugin.$activeItem.on('click'+'.'+plugin._name, function() {
                plugin.close.call(plugin);
            });
        },
        unbindEvents: function() {
            this.$element.off('.'+this._name);
            this.$item.off('.'+this._name);
            this.$activeItem.off('.'+this._name);
        },
        refresh: function() {
	        this.$item.off('.'+this._name);
	        this.$item = this.$element.find('.'+this.options.itemClass);
	        var plugin = this;
            plugin.$item.on('click'+'.'+plugin._name, function() {
                plugin.select.call(plugin, this);
            });
            this.reset();
        },
        reset: function() {
			this.$selected && this.$selected.removeClass('selected');
			this.$selected = null;
			this.selectedVal = '';
			this.selectedText = '';

			this.$element.attr('data-current', this.selectedVal);
	        this.$activeItem.html(this.placeholder);

	        if (this.$element.attr('data-required') && this.$element.attr('data-required') === 'true') {
		        this.$activeItem.html(this.$activeItem.html() + this.requiredTemplate);
	        }
	        this.onReset();
        },
        changeState: function () {
			self = this;
			if (self.$element.hasClass('active')) { // has focus, will close
				self.$element.removeClass('active');
				self.$items.on(self.transitionName, function(e) {
					if ($(e.target).is($(this))) {
						$(this).parents('.drop-down').removeAttr('data-dropped');
						self.onClose();
						$(this).off(self.transitionName);
					}
				});
			} else { // has no focus, will open
				self.$element.addClass('active');
				self.$items.on(self.transitionName, function(e) {
					if ($(e.target).is($(this))) {
						self.$element.attr('data-dropped', 'true');
						self.onDrop();
						$(this).off(self.transitionName);
					}
				});
			}
        },
        close: function () {
			if (this.$element[0].classList.contains('active')) {
				this.$element.trigger('blur');
			}
		},
        select: function (selectedItem) {
	        this.$selected && this.$selected.removeClass('selected');
	        this.$selected = null;
	        this.$selected = $(selectedItem);
			this.selectedVal = this.$selected.data('value');
			this.selectedText = this.$selected.text();
			this.$selected.addClass('selected');
			this.$activeItem.text(this.selectedText);
			this.$element.attr('data-current', this.selectedVal);
	        this.close();
	        this.onSelect();
		},
        onInit: function() {
            var onInit = this.options.onInit;
            if (typeof onInit === 'function') {
                onInit.call(this.element);
            }
        },
        onSelect: function() {
            var onSelect = this.options.onSelect;
            if (typeof onSelect === 'function') {
                onSelect.call(this.element);
            }
        },
        onDrop: function() {
            var onDrop = this.options.onDrop;
            if (typeof onDrop === 'function') {
                onDrop.call(this.element);
            }
        },
        onClose: function() {
            var onClose = this.options.onClose;
            if (typeof onClose === 'function') {
                onClose.call(this.element);
            }
        },
        onReset: function() {
            var onReset = this.options.onReset;
            if (typeof onReset === 'function') {
                onReset.call(this.element);
            }
        }
    });
    $.fn.dropit = function (options) {
        this.each(function() {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new dropit(this, options));
            }
        });
        return this;
    };
    $.fn.dropit.defaults = {
		placeholder: 'Select item',
		requiredTemplate: '*',
		activeItemClass: 'drop-down-active-item',
		itemsClass: 'drop-down-list',
		itemClass: 'drop-down-item',
		timing: 150,
		onInit: null,
		onSelect: null,
		onDrop: null,
		onClose: null,
		onReset: null
    };
})(jQuery, window, document);
