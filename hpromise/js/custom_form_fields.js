// mini custom select

(function($) {

  var methods = {
    init: function(options) {
      return this.each(function() {

        var self = this;

        var settings = $.extend({
          wrap: '<div class="drop-it-down-custom"></div>',
          selectTitle: '<div class="drop-it-down-custom__title"></div>',
          selected: '<span class="drop-it-down-custom__placeholder"></span>',
          selectList: '<ul class="drop-it-down-custom__list"></ul>',
          selectListWrap: '<div class="drop-it-down-custom__list-wrap"></div>',
          selectListItem: '<li class="drop-it-down-custom__option"></li>',
          selectListItemTitle: '<span class="drop-it-down-custom__list__title"></span>',
          selectIcon: '<i class="drop-it-down-custom__icon"></i>',
          openClass: 'drop-it-down-custom--open'
        }, options);


        this.settings = settings;

        var $thisSelect = $(this),
          $thisSelectOptionList = $thisSelect.find('option'),
          $selectTitle = $(settings.selectTitle),
          $customSelect = $(settings.wrap),
          $customSelectPlaceholder = $(settings.selected),
          $customSelectList = $(settings.selectList),
          $customSelectListWrap = $(settings.selectListWrap),
          openClass = settings.openClass;

        this.$customOptionList = $();
        this.$customSelect = $customSelect;

        $customSelectPlaceholder.setOption = function($option) {
          $(this).text($option.text());
          if ($option.hasClass('default')) {
            $(this).addClass('default');
          } else {
            $(this).removeClass('default');
          }
        }


        $thisSelectOptionList.each(function() {
          var $thisOption = $(this);
          var $customOption =
            $(settings.selectListItem)
            .attr('data-value', $thisOption.val())
            .attr('data-index', $thisOption.index())
            .addClass($thisOption.attr('class'));
          var $customOptionTitle = $(settings.selectListItemTitle).text($thisOption.text());

          $customOption.append($customOptionTitle);
          $customSelectList.append($customOption);

          if ($thisOption.prop('selected')) {
            $customSelectPlaceholder.setOption($thisOption);
            if ($thisOption.val() > 0) {
              $customSelectPlaceholder.addClass('selected_item');
            }
            $customOption.addClass('selected');
          }

          if ($thisOption.prop('disabled')) {
            $customOption.addClass('disabled');
          }
          self.$customOptionList = self.$customOptionList.add($customOption);

        });
        // Важно! сначала добавляю список, если его добавлять последним
        // то появляеться отступ внизу
        $customSelect
          .append($selectTitle.append($customSelectPlaceholder))
          .append($customSelectListWrap.append($customSelectList));


        $selectTitle.append(settings.selectIcon);
        $customSelectList.children().first().append(settings.selectIcon);

        $selectTitle.on('click', function(event) {
        	// methods.open.apply(self);
          if ($($customSelect).hasClass(openClass)) {
            methods.close.apply(self);
          } else {
            methods.open.apply(self);
          }
        });


        this.$customOptionList.on('click', function() {
          var optionIndex = $(this).data('index');
          var $thisOption = $thisSelectOptionList.eq(optionIndex);
          $thisOption
            .prop('selected', 'selected')
            .trigger('change');
          $customSelectList.find('.selected').removeClass('selected');
          $(this).addClass('selected');
          $customSelectPlaceholder.setOption($thisOption);
          if ($thisOption.val() > 0) {
            $customSelectPlaceholder.addClass('selected_item');
          }
          $customSelectPlaceholder.addClass('selected_item');
          methods.close.apply(self);

          return false;
        });


        $(document.body).on('click', function(event) {
          var click_on_this_item = $customSelect.find(event.target).get(0);
          if (!click_on_this_item) {
            methods.close.apply(self);
          }
        });

        $thisSelect.css('display', 'none');
        $thisSelect.after($customSelect);

      });
    },
    update: function() {
      methods.destroy();
      methods.init();
    },
    destroy: function() {
      this.$customSelect.remove();
      $thisSelect.css('display', 'block');
    },
    open: function() {
      this.$customSelect.width(this.$customSelect.width());
      this.$customSelect.addClass(this.settings.openClass);
      $.mCustomScrollbar.defaults.scrollButtons.enable = true; //enable scrolling buttons by default
      // $.mCustomScrollbar.defaults.axis = "y"; //enable 2 axis scrollbars by default
      $('.drop-it-down-custom__list').mCustomScrollbar("destroy");
      setTimeout(function() {
        $('.drop-it-down-custom--open .drop-it-down-custom__list').mCustomScrollbar({
          theme: "dark-3"
        });
      }, 30);

    },
    close: function() {
      this.$customSelect.width('');
      this.$customSelect.removeClass(this.settings.openClass);
    },
  };

  $.fn.customSelect = function(method) {

    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Метод с именем ' + method + ' не существует для jQuery.customSelect');
    }
  };

})(jQuery);

// mini custom multi select

(function($) {

  var methods = {
    init: function(options) {
      return this.each(function() {
        var $this = $(this);

        var settings = $.extend({
          openClass: 'drop-it-down-custom--open',
          checkedClass: 'custom-multiple--checked',
          titleListClass: 'js-custom-multiple__list-title',
          titleClass: 'js-custom-multiple__title',
          titleValsClass: 'js-custom-multiple__title-vals',
          checkedList: [],
          input: 'input'
        }, options);


        // Сохраняю настройки
        $this.data('settings', settings);
        $this.data('checkedList', settings.checkedList);

        // При изменении значений обновляем
        // console.log($this.find(settings.input));
        $this.find(settings.input).on('change', function(event) {
          //console.log(event);
          methods.updateValues.apply($this);
        });

        // Открываем
        $this.on('click', function(event) {
          if ($this.hasClass(settings.openClass)) {
            methods.close.apply($this);
            event.stopPropagation();
          } else {
            methods.open.apply($this);
          }
        });

        // Закрываем по клику на title в списке
        $('.' + settings.titleListClass).on('click', function(event) {
          methods.close.apply($this);
          event.stopPropagation();
        });

        // Закрываем по клику в любое место, кроме самого списка
        $(document.body).on('click', function(event) {
          var click_on_this_item = $this.find(event.target).get(0);
          if (!click_on_this_item) {
            methods.close.apply($this);
          }
        });

        // Обновляем выбранные элементы
        methods.updateValues.apply($this);

      });

    },
    update: function() {

    },
    destroy: function() {

    },
    open: function() {
      var $this = $(this);
      var thisData = $this.data();
      var titleHtml = $this.find('.' + thisData.settings.titleClass).html();
      $this.addClass(thisData.settings.openClass);
      $this.find('.' + thisData.settings.titleListClass).html(titleHtml);
    },
    close: function() {
      $(this).removeClass($(this).data('settings').openClass);
    },
    updateValues: function() {
      var $this = $(this);
      var checkedList = $this.data('checkedList');
      var thisSettings = $(this).data('settings');
      var checkedListText = '';
      $(this)
        .find(thisSettings.input)
        .each(function(index) {
          var titleText = $.trim($(this).parents('label').text());
          if ($(this).prop('checked')) {
            checkedList[index] = titleText;
          } else {
            delete checkedList[index];
          }
        });

      var simpleCheckedList = [];
      for (var i in checkedList) {
        simpleCheckedList.push(checkedList[i]);
      }

      if (simpleCheckedList.length > 0) {
        $this.addClass(thisSettings.checkedClass);
      } else {
        $this.removeClass(thisSettings.checkedClass);
      }
      checkedListText += simpleCheckedList.join(', ');
      //console.log(checkedList);
      $this.find('.' + thisSettings.titleValsClass).text(checkedListText);
      $this.data('checkedList', checkedList);

    }
  };

  $.fn.customMultipleSelect = function(method) {

    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Метод с именем ' + method + ' не существует');
    }
  };

})(jQuery);

// customCheckbox

(function($) {

  var methods = {
    init: function(options) {
      // fix для radio
      var self = this;
      this.on('change', function() {
        self.trigger('refresh');
      });

      return this.each(function() {

        var settings = $.extend({
          customCheckbox: '<span class="custom-checkbox"></span>',
        }, options);

        this.settings = settings;
        var $thisCheckbox = $(this),
          $customCheckbox = $(settings.customCheckbox);

        $thisCheckbox.after($customCheckbox);
        $thisCheckbox.addClass('default-checkbox');
        var thisCheckbox = $thisCheckbox.get(0);
        thisCheckbox.$customCheckbox = $customCheckbox;

        SetCheckedClass = function() {
          var checked = $(this).prop('checked');
          var _this = $(this).get(0);
          if (checked) {
            _this.$customCheckbox.addClass('custom-checkbox--checked');
          } else {
            _this.$customCheckbox.removeClass('custom-checkbox--checked');
          }
        };
        SetCheckedClass.apply($thisCheckbox);


        $thisCheckbox.on('change refresh', function() {
          SetCheckedClass.apply($(this));
        });

      });

    },
    update: function() {

    },
    destroy: function() {

    }
  };

  $.fn.customCheckbox = function(method) {

    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Метод с именем ' + method + ' не существует для jQuery.customCheckbox');
    }
  };

})(jQuery);

// customFileInput

(function($) {

  var methods = {
    init: function(options) {
      return this.each(function() {

        var $this = $(this);
        var $input = {};

        var settings = $.extend({
          wrap: '<label class="custom-file-input"></label>',
          mark: '<span class="custom-file-input__mark"></span>',
          button: '<span class="custom-file-input__button"></span>',
          markText: 'Файл не выбран',
          buttonText: 'Выбрать фотографию',
          build: function($input, settings) {
            $input.element.addClass("custom-file-input__input");
            var $customInput = $($input.wrap);
            $customInput.insertAfter($input.element);
            $customInput
              .append($input.mark.text($input.markText))
              .append($input.button.text($input.buttonText))
              .append($input.element);
            return $customInput;
          }
        }, options);

        $input.wrap = $(settings.wrap);
        $input.mark = $(settings.mark);
        $input.button = $(settings.button);
        $input.element = $this;
        $input.markText = settings.markText;
        $input.buttonText = settings.buttonText;

        $input.customInput = settings.build($input, settings);

        $this.on('change', function(event) {
          var file_name = $(this).val().replace("C:\\fakepath\\", '');
          if (file_name.length > 0) {
            $input.mark.text(file_name);
          } else {
            $input.mark.text($input.markText);
          }

        });

        $this.data('customFileInput', {
          target: $this,
          customFileInput: $input,
        });

      });
    },
    update: function() {

    },
    destroy: function() {

    }
  };

  $.fn.customFileInput = function(method) {

    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
    } else if (typeof method === 'object' || !method) {
      return methods.init.apply(this, arguments);
    } else {
      $.error('Метод с именем ' + method + ' не существует для jQuery.customCheckbox');
    }
  };

})(jQuery);
