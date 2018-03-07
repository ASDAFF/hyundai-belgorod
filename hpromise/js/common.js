(function($) {

  $(document).ready(function() {

    if ($('.tabs').get(0)) {
      $(".tabs").lightTabs();
    }
    //backbutton
    $('.back_btn').click(function() {
      window.history.back();
    });

    $('.compare_list_table_custom').mCustomScrollbar({
      axis: "x",
      theme: "dark"
    });

    if ($(window).width() > 1100) {
      $('.main_slick .left_half').mouseover(function() {
        if (!$(this).hasClass('click')) {
          $('.main_slick .left_half.hover').show();
          $('.main_slick .right_half.hover').hide();
          $('.main_slick .slick-next').removeClass('hover');
          $('.main_slick .slick-prev').addClass('hover');
        }
      });

      $('.main_slick .right_half').mouseover(function() {
        if (!$(this).hasClass('click')) {
          $('.main_slick .right_half.hover').show();
          $('.main_slick .left_half.hover').hide();
          $('.main_slick .slick-prev').removeClass('hover');
          $('.main_slick .slick-next').addClass('hover');
        }
      });
    }

    $('.main_slick .left_half.hover, .main_slick .slick-prev').click(function() {
      //отключаем действия на блоках после клика по одному из них
      $('.main_slick .left_half').addClass('click').css('cursor', 'default');
      $('.main_slick .right_half').addClass('click').css('cursor', 'default');

      //скрываем стрелку вторго блока
      $('.main_slick .slick-next').fadeOut("slow");

      //скрываем контент второго блока
      $('.main_slick .right_half *').fadeOut("slow", function() {
        // Анимация завершена.
        if ($(window).width() < 1100 && $(window).width() > 991) {
          $('.main_slick .right_half.hover').animate({
            width: "0"
          }, 1000);
          $('.main_slick .left_half.hover').animate({
            width: "0"
          }, 2000, function() {
            window.location.href = "/hpromise/trade-in/";
          });
        } else if ($(window).width() <= 991) {
          $('.main_slick .slick-prev').fadeOut("slow");
          $('.main_slick .right_half.hover').animate({
            height: "0"
          }, 1000);
          $('.main_slick .left_half.hover').animate({
            height: "0"
          }, 2000, function() {
            window.location.href = "/hpromise/trade-in/";
          });
        } else {
          $('.main_slick .left_half.hover').animate({
            width: "0"
          }, 2000, function() {
            $('.main_slick .slick-prev').fadeOut("slow");
            window.location.href = "/hpromise/trade-in/";
          });
        }

      });
    });

    $('.main_slick .right_half.hover, .main_slick .slick-next').click(function() {
      //отключаем действия на блоках после клика по одному из них
      $('.main_slick .left_half').addClass('click').css('cursor', 'default');
      $('.main_slick .right_half').addClass('click').css('cursor', 'default');

      //скрываем стрелку вторго блока
      $('.main_slick .slick-prev').fadeOut("slow");

      //скрываем контент второго блока
      $('.main_slick .left_half *').fadeOut("slow", function() {
        // Анимация завершена.
        if ($(window).width() <= 1100 && $(window).width() > 991) {
          $('.main_slick .left_half.hover').animate({
            width: "0"
          }, 1000);
          $('.main_slick .right_half.hover').animate({
            width: "0"
          }, 2000, function() {
            window.location.href = "/hpromise/avtomobili-s-probegom/";
          });
        } else if ($(window).width() <= 991) {
          $('.main_slick .slick-next').fadeOut("slow");
          $('.main_slick .left_half.hover').animate({
            height: "0"
          }, 1000);
          $('.main_slick .right_half.hover').animate({
            height: "0"
          }, 2000, function() {
            window.location.href = "/hpromise/avtomobili-s-probegom/";
          });
        } else {
          $('.main_slick .right_half.hover').animate({
            width: "0"
          }, 2000, function() {
            $('.main_slick .slick-next').fadeOut("slow");
            window.location.href = "/hpromise/avtomobili-s-probegom/";
          });
        }
      });
    });

    $(".scroll_top").click(function() {
      $("html, body").animate({
        scrollTop: 0
      }, "slow");
      return false;
    });

    $('.navbar-toggle').click(function() {
      if ($(this).hasClass('opened')) {
        $('.topnav').toggleClass('opened');
        $('.top_mob_offsite').toggleClass('opened');
        $('.top_mob_social').toggleClass('opened');
      } else {
        setTimeout(function() {
          $('.topnav').toggleClass('opened');
          $('.top_mob_offsite').toggleClass('opened');
          $('.top_mob_social').toggleClass('opened');
        }, 800);
      }
      $(this).toggleClass('opened');
    });

    window.PopUp = new Popup();

    // Custom form items
    $(document.body).on('form.ajax', function(event) {
      drawCustomFormItem(event.target);
    });
    drawCustomFormItem(document.body);

    $('body').on('click', '.custom-file-input__button', function(e) {
      var $this = $(this);
      var input = '<input type="file" class="hidden" name="oe_photos[]"/>';
      var label = '<span></span>';
      var remove = '<a href="#" class="remove-file-input"></a>';

      if ($('.custom-file-input__mark input').length === 0) {
        $('.custom-file-input__mark').text('');
      }

      if ($('.custom-file-input__mark input:last').val() || !$('.custom-file-input__mark input:last').length) {
        $('.custom-file-input__mark').append('<div>' + input + label + remove + '</div>');
        changeFileInput();
      }

      $('.custom-file-input__mark input:last').trigger('click');

      e.preventDefault();
    });
    $('body').on('click', '.remove-file-input', function(e) {
      $(this).parent('div').remove();
      if ($('.custom-file-input__mark input').length === 0) {
        $('.custom-file-input__mark').text('Файл не выбран');
      }
      e.preventDefault();
    });

    $('body').on('click', '.car_in_compare_fixed_cont', function() {
      window.location.href = '/hpromise/avtomobili-s-probegom/compare.php';
    });

    $('body').on('click', '.more_search_fields', function() {
      if ($(this).hasClass('opened')) {
        $(this).removeClass('opened').text('Расширенный поиск');
        $('.autos_list_head .form_search_block .hidden_filter').slideUp();
      } else {
        $(this).addClass('opened').text('Обычный поиск');
        $('.autos_list_head .form_search_block .hidden_filter').slideDown();
      }
    });

    $('body').on('click', '.compare_list_cell h3', function() {
      if ($(this).hasClass('opened')) {
        $(this).removeClass('opened');
        $('.compare_list_row.hidden').css('display', 'none');
      } else {
        $(this).addClass('opened');
        $('.compare_list_row.hidden').css('display', 'table-row');
      }
    });

    if ($('.js-range-slider-from-to').get(0)) {
      $('.js-range-slider-from-to').each(function() {
        var $this = $(this),
          $min = $this.find('.js-range-slider__min'),
          $max = $this.find('.js-range-slider__max'),
          $rangeSlider = $this.find('.js-range-slider__holder'),
          $min_marker = $('<!--span class="min_marker"></span-->'),
          $max_marker = $('<!--span class="max_marker"></span-->');

        setMarkerVal = function(val) {

          if ($this.hasClass('js-number-format-val')) {
            $(this).text(number_format(val, 0, ',', ' '));
          } else {
            $(this).text(val);
          }

        };

        $min_marker.setMarkerVal = setMarkerVal;
        $max_marker.setMarkerVal = setMarkerVal;

        var min = $min.data('basic-value') * 1,
          max = $max.data('basic-value') * 1,
          from = $min.val() * 1,
          to = $max.val() * 1;

        var step = 1;
        if ($this.hasClass('js-range-slider-from-to__decimal')) {
          step = 0.1;
        }

        $rangeSlider.ionRangeSlider({
          min: min,
          max: max,
          from: from,
          to: to,
          type: 'double',
          grid: false,
          hide_min_max: true,
          hide_from_to: true,
          onChange: function(slider) {
            $min.val(slider.from);
            $min.prev('.range-slider__input-value').text(slider.from);
            $max.val(slider.to);
            $max.next('.range-slider__input-value').text(slider.to);
            $min_marker.setMarkerVal(slider.from);
            $max_marker.setMarkerVal(slider.to);
          },
          onStart: function(slider) {
            $min_marker.setMarkerVal(slider.from);
            $max_marker.setMarkerVal(slider.to);
            slider.slider
              .before($min_marker)
              .before($max_marker);
          },
          step: step
        });

        // Saving it's instance to var
        var slider = $rangeSlider.data("ionRangeSlider");

        $min.on('input keyup', function() {
          slider.update({
            from: $(this).val(),
          });
        });

        $max.on('input keyup', function() {
          slider.update({
            to: $(this).val(),
          });
        });
      });
    }

    if ($('.js-range-slider').get(0)) {
      $('.js-range-slider').each(function() {
        var $this = $(this),
          $min = $this.find('.js-range-slider__min'),
          $max = $this.find('.js-range-slider__max'),
          $rangeSlider = $this.find('.js-range-slider__holder'),

          setMarkerVal = function(val) {

            if ($this.hasClass('js-number-format-val')) {
              $(this).text(number_format(val, 0, ',', ' '));
            } else {
              $(this).text(val);
            }

          };

        var min = $min.data('basic-value') * 1,
          max = $max.data('basic-value') * 1,
          from = $min.val() * 1,
          to = $max.val() * 1;

        var step = 1;
        if ($this.hasClass('js-range-slider-from-to__decimal')) {
          step = 0.1;
        }

        $rangeSlider.ionRangeSlider({
          min: min,
          max: max,
          from: from,
          to: to,
          grid: false,
          hide_min_max: true,
          hide_from_to: true,
          onChange: function(slider) {
            $min.val(slider.from);
            $min.prev('.range-slider__input-value').text(slider.from);
            $max.val(slider.to);
            $max.next('.range-slider__input-value').text(slider.to);
          },
          onStart: function(slider) {},
          step: step
        });

        // Saving it's instance to var
        var slider = $rangeSlider.data("ionRangeSlider");
      });
    }


    if ($('.js-car-photo-mobile-slider').get(0)) {
      $('.js-car-photo-mobile-slider').slick({
        dots: false,
        infinite: true,
        speed: 200,
        speed: 300,
        slidesToShow: 1,
        variableWidth: true,

        prevArrow: '.thumb-slide-arrow--prev',
        nextArrow: '.thumb-slide-arrow--next'
      });
    }

    if ($('.js-car-photo-slider').get(0)) {
      $('.js-car-photo-slider').slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        speed: 200,
        prevArrow: '.thumb-slide-arrow--prev',
        nextArrow: '.thumb-slide-arrow--next',
        responsive: [{
          breakpoint: 400,
          settings: {
            slidesToShow: 2,
          }
        }]
      });
    }

    if ($('.js-car-view__photo-thumb').get(0)) {
      $('.js-car-view__photo-thumb').on('click', function(event) {
        event.preventDefault();
        var $photo = $('.js-car-view__photo__medium');
        var $zoom = $('.car-view__photo__medium a.zoom');
        $zoom.attr('href', $(this).attr('href'));
        $photoHolder = $photo.parent();
        $photo.attr('src', $(this).attr('href'));
        $photoHolder.addClass('loading');
        $photo.on('load', function() {
          $photoHolder.removeClass('loading');
        })
      });
    }

    // hpromise dealer list
    if ($('.js-hpromise-view').get(0)) {
      var Hpromise = new hpromiseView({
        view: '.js-hpromise-view',
        toggle: '.js-view-toggle'
      });

      Hpromise.setView('list');
      Hpromise.setRegion($('.js-dealer-location').val());

      Hpromise.$toggle.on('click', function(event) {
        var viewMatch = $(this).attr('class').match('js-([^\w]+)-view');
        var view = viewMatch[1];
        Hpromise.setView(view);
        event.preventDefault();
      });

      $('.js-dealer-location').on('change', function(event) {
        Hpromise.setRegion($(this).val());
      });
    }

    PopUpFilter = new Popup();

    $('.mob_car_filter').click(function() {
      PopUpFilter.ShowLoad();
      $ajaxContent = $(".smartfilter");

      PopUpFilter.Open($ajaxContent, {
        title: ' ',
        wrapClass: 'popup-filter'
      });
      PopUpFilter.HideLoad();
    });

    if ($(window).width() < 1100) {
      $('#chips_wrap').append($('.chips'));
    }
    // Всплывай-ка с информационным текстом, инициализируеться отдельно,
    // что бы не зависить от других окон
    PopUpInfo = new Popup();

    $('body').on('click', '.js-ajax-content', function(event) {
      event.preventDefault();
      var href = $(this).attr('href');
      var is_rules = $(this).attr('data-rules');
      //console.log(href);
      if (href) {
        PopUpInfo.ShowLoad();
        // console.log("ShowLoad");
        $.ajax(href).done(function(data) {
            var $ajaxContent = data;
            if (is_rules === 'Y') {
              PopUpInfo.Open($ajaxContent, {
                title: 'Программа H-Promise'
              });
            } else {
              PopUpInfo.Open($ajaxContent, {
                title: 'Правила обработки персональных данных',
                wrapClass: 'popup-info'
              });
            }

          })
          .fail(function(data) {
            alert("Ошибка загрузки информации");
          })
          .always(function(data) {
            // console.log("HideLoad");
            PopUpInfo.HideLoad();
          });
      }
    });

    // Форма заказа
    (function() {

      // Загружаю отдельно форму заказ, что бы до нее не добрались спам боты.
      var car_order_form_class = "js-car-order-form";
      var car_order_form_selector = '.' + car_order_form_class;

      // Сама загрузка формы
      ajaxLoadForm({
        link: '/ajax/catalog.php?action=get_car_order_form',
        placeHolderSelector: car_order_form_selector
      });


      // Открытие формы заказа авто
      $('.js-order-this-car').on('click', function(event) {
        event.preventDefault();

        $orderButton = $(this);
        var $car_order_form_block = $(car_order_form_selector);
        var $car_order_form = $car_order_form_block.find('form');
        //$car_order_form.get(0).reset();
        // Отмечаю id машины
        $car_order_form.find('.js-car-id').val($orderButton.attr('data-car-id'));

        $car_order_form.on('submit', function(event) {
          event.preventDefault();
          PopUp.ShowLoad();

          $.ajax("/ajax/catalog.php?action=car_order", {
              type: "POST",
              data: $(this).serialize(),
              dataType: 'json'
            })
            .done(function(data) {


              $('.js-success, .js-errors').html(false);

              if (data.code == 'success') {
                /*
                $car_order_form_block
                	.find('.js-success')
                	.append(data.response);
                */
                PopUp.Close();
                showSuccessMessage();
              } else {

                var $errorsBlock = $car_order_form_block.find('.js-errors')
                var errorLsitText = [];
                if (typeof data.errorLsitText != 'undefined') {
                  for (var i = 0; data.errorLsitText.length > i; i++) {
                    var errorText = data.errorLsitText[i];
                    errorLsitText.push(errorText);
                  }
                }

                $errorsBlock.append(data.response);
                $errorsBlock.append(errorLsitText.join(', '));

              }
              PopUp.HideLoad();
            })
            .fail(function(data) {
              alert("Ошибка добавления заявки, попробуйте позже");
            })
            .always(function(data) {
              //alert( "complete" );
              PopUp.HideLoad();
            });
        });

        PopUp.Open($car_order_form_block, {
          title: 'Забронировать'
        });
      });

    })();

    // Форма вопроса
    (function() {

      // Загружаю отдельно форму заказ, что бы до нее не добрались спам боты.
      var car_order_form_class = "js-car-question-form";
      var car_order_form_selector = '.' + car_order_form_class;

      // Сама загрузка формы
      ajaxLoadForm({
        link: '/ajax/catalog.php?action=get_car_question_form',
        placeHolderSelector: car_order_form_selector
      });


      // Открытие формы заказа авто
      $('.js-question-this-car').on('click', function(event) {
        event.preventDefault();

        $orderButton = $(this);
        var $car_order_form_block = $(car_order_form_selector);
        var $car_order_form = $car_order_form_block.find('form');
        //$car_order_form.get(0).reset();
        // Отмечаю id машины
        $car_order_form.find('.js-car-id').val($orderButton.attr('data-car-id'));

        $car_order_form.on('submit', function(event) {
          event.preventDefault();
          PopUp.ShowLoad();

          $.ajax("/ajax/catalog.php?action=car_question", {
              type: "POST",
              data: $(this).serialize(),
              dataType: 'json'
            })
            .done(function(data) {


              $('.js-success, .js-errors').html(false);

              if (data.code == 'success') {
                /*
                $car_order_form_block
                	.find('.js-success')
                	.append(data.response);
                */
                PopUp.Close();
                showSuccessMessage();

              } else {

                var $errorsBlock = $car_order_form_block.find('.js-errors')
                var errorLsitText = [];
                if (typeof data.errorLsitText != 'undefined') {
                  for (var i = 0; data.errorLsitText.length > i; i++) {
                    var errorText = data.errorLsitText[i];
                    errorLsitText.push(errorText);
                  }
                }

                $errorsBlock.append(data.response);
                $errorsBlock.append(errorLsitText.join(', '));

              }
              PopUp.HideLoad();
            })
            .fail(function(data) {
              alert("Ошибка добавления заявки, попробуйте позже");
            })
            .always(function(data) {
              //alert( "complete" );
              PopUp.HideLoad();
            });
        });

        PopUp.Open($car_order_form_block, {
          title: 'Задать вопрос'
        });
      });

    })();

    // Форма тест драйва
    (function() {

      // Загружаю отдельно форму тест драйва, что бы до нее не добрались спам боты.
      var car_order_form_class = "js-car-testdrive-form";
      var car_order_form_selector = '.' + car_order_form_class;

      // Сама загрузка формы
      ajaxLoadForm({
        link: '/ajax/catalog.php?action=get_car_testdrive_form',
        placeHolderSelector: car_order_form_selector
      });


      $('.car-view__photo__medium a.zoom').on('click', function(event) {
        event.preventDefault();
        $zoomButton = $(this);
        $img_src = $zoomButton.attr('href');
        PopUp.ShowLoad();
        $ajaxContent = '<img src="' + $img_src + '" alt="" />';

        console.log($ajaxContent);

        PopUp.Open($ajaxContent, {
          title: '',
          wrapClass: 'popup-img-zoom'
        });

        PopUp.HideLoad();
      });

      // Открытие формы тест драйва авто
      $('.js-testdrive-this-car').on('click', function(event) {
        event.preventDefault();

        $orderButton = $(this);
        var $car_order_form_block = $(car_order_form_selector);
        var $car_order_form = $car_order_form_block.find('form');
        //$car_order_form.get(0).reset();
        // Отмечаю id машины
        $car_order_form.find('.js-car-id').val($orderButton.attr('data-car-id'));

        $car_order_form.on('submit', function(event) {
          event.preventDefault();
          PopUp.ShowLoad();

          $.ajax("/ajax/catalog.php?action=car_testdrive", {
              type: "POST",
              data: $(this).serialize(),
              dataType: 'json'
            })
            .done(function(data) {


              $('.js-success, .js-errors').html(false);

              if (data.code == 'success') {
                /*
                $car_order_form_block
                	.find('.js-success')
                	.append(data.response)
                */
                PopUp.Close();
                showSuccessMessage();
              } else {

                var $errorsBlock = $car_order_form_block.find('.js-errors')
                var errorLsitText = [];
                if (typeof data.errorLsitText != 'undefined') {
                  for (var i = 0; data.errorLsitText.length > i; i++) {
                    var errorText = data.errorLsitText[i];
                    errorLsitText.push(errorText);
                  }
                }

                $errorsBlock.append(data.response);
                $errorsBlock.append(errorLsitText.join(', '));

              }
              PopUp.HideLoad();
            })
            .fail(function(data) {
              alert("Ошибка добавления заявки, попробуйте позже");
            })
            .always(function(data) {
              PopUp.HideLoad();
            });
        });

        PopUp.Open($car_order_form_block, {
          title: 'Тест-драйв'
        });
      });

    })();

    // Сообщени об отправке обычной, перезагружаемой формы
    $('body').on('form.success', function() {
      showSuccessMessage();
    });

    /* Слайдер "4 шага до нового Hyundai" */

    //Перетаскивание бегунка
    $(".js-slider-runner-inner").ionRangeSlider({
      type: "single",
      min: 1,
      max: 4,
      step: 1,
      grid: true,
      grid_snap: true,
      onStart: function(data) {

      },
      onChange: function(data) {

      },
      onFinish: function(data) {
        var textNext = $('.slider-inner-text-single.next');
        var textMain = $('.slider-inner-text-single.main');

        textMain.addClass('maingap');
        textNext.addClass('nextgap');
        setTimeout(function() {
          var numberIndex = data.from - 1;
          var textIndex = $('.slider-inner-text-single:eq(' + numberIndex + ')');
          textMain.removeClass('main maingap');
          textNext.removeClass('next nextgap');
          textIndex.addClass('main');
          if (textIndex.next('.slider-inner-text-single').length !== 0) {
            textIndex.next('.slider-inner-text-single').addClass('next');
          } else {
            $('.js-slider-inner-text').children('.slider-inner-text-single:eq(0)').addClass('next');
          }
        }, 400);


        var numberIndex = data.from - 1;
        var mainimgIndex = $('.slider-inner-mainimg-single:eq(' + numberIndex + ')');
        var mainimgNext = $('.slider-inner-mainimg-single.next');
        var mainimgMain = $('.slider-inner-mainimg-single.main');
        mainimgMain.removeClass('main');
        mainimgNext.removeClass('next');
        mainimgIndex.addClass('main');
        setTimeout(function() {
          if (mainimgIndex.next('.slider-inner-mainimg-single').length !== 0) {
            mainimgIndex.next('.slider-inner-mainimg-single').addClass('next');
          } else {
            $('.js-slider-inner-mainimg').children('.slider-inner-mainimg-single:eq(0)').addClass('next');
          }
        }, 400);
      },
      onUpdate: function(data) {

      }
    });

    $(".js-slider-runner-inner").on("change", function() {
      var $this = $(this),
        value = $this.prop("value");
      var numberIndex = value - 1;
      $('.slider-runner>.irs>.irs-grid .irs-grid-text:gt(' + numberIndex + ')').removeClass('active');
      $('.slider-runner>.irs>.irs-grid .irs-grid-text:lt(' + numberIndex + ')').addClass('active');
    });

    // Клик по следующему элементу

    $('.slider-inner-text .slider-inner-text-single:eq(0)').addClass('main');
    $('.slider-inner-mainimg .slider-inner-mainimg-single:eq(0)').addClass('main');
    $('.slider-inner-text .slider-inner-text-single:eq(1)').addClass('next');
    $('.slider-inner-mainimg .slider-inner-mainimg-single:eq(1)').addClass('next');

    function slideNext() {

      var textNext = $('.slider-inner-text-single.next');
      var textMain = $('.slider-inner-text-single.main');
      var numberIndex2 = textNext.index();
      var coordsNow = $('.slider-runner>.irs>.irs-grid .irs-grid-text:eq(' + numberIndex2 + ')').offset();
      var event = jQuery.Event("mousedown");
      event.pageX = coordsNow.left;
      $('.irs-line').trigger(event);
      $('.irs-line').trigger("mouseup");

      textMain.addClass('maingap');
      textNext.addClass('nextgap');
      setTimeout(function() {
        textMain.removeClass('main maingap');
        textNext.removeClass('next nextgap');
        textNext.addClass('main');
        if (textNext.next('.slider-inner-text-single').length !== 0) {
          textNext.next('.slider-inner-text-single').addClass('next');
        } else {
          $('.js-slider-inner-text').children('.slider-inner-text-single:eq(0)').addClass('next');
        }
      }, 400);

      var mainimgNext = $('.slider-inner-mainimg-single.next');
      var mainimgMain = $('.slider-inner-mainimg-single.main');
      mainimgMain.removeClass('main');
      mainimgNext.removeClass('next');
      mainimgNext.addClass('main');
      setTimeout(function() {
        if (mainimgNext.next('.slider-inner-mainimg-single').length !== 0) {
          mainimgNext.next('.slider-inner-mainimg-single').addClass('next');
        } else {
          $('.js-slider-inner-mainimg').children('.slider-inner-mainimg-single:eq(0)').addClass('next');
        }
      }, 400);

    }

    $('.js-slider-inner-nextbut').click(slideNext);

    var sliderRunner = $(".js-slider-runner-inner").data("ionRangeSlider");
    /* Слайдер "4 шага до нового Hyundai" */


    /* Слайдер "Фиксированная скидка" */

    $('.carslider-inner-single:eq(0)').addClass('main');
    $('.carslider-inner-single:eq(1)').addClass('next');
    $('.carslider-inner-single:eq(2)').addClass('next2');
    $('.carslider-inner-single:eq(1)').children('.carslider-inner-single-button.buttonkonf').addClass('buttonkonf2');
    $('.carslider-inner-single:eq(1)').children('.carslider-inner-single-button.buttontd').addClass('buttontd2');
    var prevSlideCons = $('.carslider-inner-single.prev');
    if (prevSlideCons.length === 0) {
      //	$('.carslider-button.buttonprev').hide();
      prev_ind = $('.carslider-inner-single').length - 1;
      prev2_ind = $('.carslider-inner-single').length - 2;

      $('.carslider-inner-single:eq(' + prev_ind + ')').addClass('prev');
      $('.carslider-inner-single:eq(' + prev2_ind + ')').addClass('prev2');
    }

    /* Следующий слайд */

    function slickCircle() {
      $('.carslider-circle').addClass('slick');
      setTimeout(function() {
        $('.carslider-circle').removeClass('slick');
      }, 100);
    }

    function carSlideNext() {
      slickCircle();
      var nextSlide = $('.carslider-inner-single.next');
      var next2Slide = $('.carslider-inner-single.next2');
      var mainSlide = $('.carslider-inner-single.main');
      var prevSlide = $('.carslider-inner-single.prev');
      var prev2Slide = $('.carslider-inner-single.prev2');
      nextSlide.removeClass('next');
      mainSlide.removeClass('main');
      prevSlide.removeClass('prev');
      if (prev2Slide.length !== 0) {
        prev2Slide.removeClass('prev2');
      }
      if (next2Slide.length !== 0) {
        next2Slide.removeClass('next2');
        next2Slide.addClass('next');
        if (next2Slide.next('.carslider-inner-single').length !== 0) {
          next2Slide.next('.carslider-inner-single').addClass('next2');
        }
      } else {
        //	    $('.carslider-button.buttonnext').hide();

        $('.carslider-inner-single:eq(0)').addClass('next');
        $('.carslider-inner-single:eq(1)').addClass('next2');
      }
      nextSlide.addClass('main');
      mainSlide.addClass('prev');
      prevSlide.addClass('prev2');

      if ($('.carslider-button.buttonprev').hide()) {
        $('.carslider-button.buttonprev').show();
      }

      setTimeout(function() {
        mainSlide.children('.carslider-inner-single-button.buttonkonf').removeClass('buttonkonf2');
        mainSlide.children('.carslider-inner-single-button.buttontd').removeClass('buttontd2');
        nextSlide.children('.carslider-inner-single-button.buttonkonf').addClass('buttonkonf2');
        nextSlide.children('.carslider-inner-single-button.buttontd').addClass('buttontd2');
      }, 1000);

    }

    $('.carslider-button.buttonnext').click(carSlideNext);
    $('body').on('click', '.carslider-inner-single.next .carslider-inner-single-img', carSlideNext);


    function carSlidePrev() {
      slickCircle();
      var nextSlide = $('.carslider-inner-single.next');
      var next2Slide = $('.carslider-inner-single.next2');
      var mainSlide = $('.carslider-inner-single.main');
      var prevSlide = $('.carslider-inner-single.prev');
      var prev2Slide = $('.carslider-inner-single.prev2');
      nextSlide.removeClass('next');
      mainSlide.removeClass('main');
      prevSlide.removeClass('prev');
      if (next2Slide.length !== 0) {
        next2Slide.removeClass('next2');
      }
      if (prev2Slide.length !== 0) {
        prev2Slide.removeClass('prev2');
        prev2Slide.addClass('prev');
        if (prev2Slide.prev('.carslider-inner-single').length !== 0) {
          prev2Slide.prev('.carslider-inner-single').addClass('prev2');
        }
      } else {
        //	    $('.carslider-button.buttonprev').hide();
        prev_ind = $('.carslider-inner-single').length - 1;
        prev2_ind = $('.carslider-inner-single').length - 2;

        $('.carslider-inner-single:eq(' + prev_ind + ')').addClass('prev');
        $('.carslider-inner-single:eq(' + prev2_ind + ')').addClass('prev2');
      }
      prevSlide.addClass('main');
      mainSlide.addClass('next');
      nextSlide.addClass('next2');



      if ($('.carslider-button.buttonnext').hide()) {
        $('.carslider-button.buttonnext').show();
      }

      setTimeout(function() {
        mainSlide.children('.carslider-inner-single-button.buttonkonf').removeClass('buttonkonf2');
        mainSlide.children('.carslider-inner-single-button.buttontd').removeClass('buttontd2');
        prevSlide.children('.carslider-inner-single-button.buttonkonf').addClass('buttonkonf2');
        prevSlide.children('.carslider-inner-single-button.buttontd').addClass('buttontd2');
      }, 1000);
    }

    $('.carslider-button.buttonprev').click(carSlidePrev);
    $('body').on('click', '.carslider-inner-single.prev .carslider-inner-single-img', carSlidePrev);

    /* Слайдер "Фиксированная скидка" */


    $('.js-drop-it-down[name="arrFilter_94"]').on('change', function() {
      console.log('change');
      var city = $(this).find(":selected").data("city");
      var options = '<select name="arrFilter_24" class="drop-it-down js-drop-it-down" style="display: none;"><option value="">Выберите дилера</option>';

      if (typeof city == "undefined") {
        for (city_id in dealers_of_cities) {
          var dealers_of_city = dealers_of_cities[city_id];
          dealers_of_city.forEach(function(item, i, dealers_of_city) {
            options += '<option value="' + item.option_value + '">' + item.value + '</option>';
          });
        }
      } else {
        var dealers_of_city = dealers_of_cities[city];
        dealers_of_city.forEach(function(item, i, dealers_of_city) {
          options += '<option value="' + item.option_value + '">' + item.value + '</option>';
        });
      }

      options += '</select>';

      or_dealer_parent = $(".js-drop-it-down[name='arrFilter_24']").parent();
      $(".js-drop-it-down[name='arrFilter_24']").remove();
      $(or_dealer_parent).find('.drop-it-down-custom').remove();
      $(or_dealer_parent).append(options);
      $(".js-drop-it-down[name='arrFilter_24']").customSelect();
    });

    if ($('.js-drop-it-down[name="arrFilter_94"] :selected').val() != '') {
      $('.js-drop-it-down[name="arrFilter_94"]').trigger('change');
    }
  });

})(jQuery);

/**
 * Вызывается при ajax и загрузке страницы
 * @context - Или DOM страницы, или кусок html из ajax
 *
 */
function changeFileInput() {
  $('.custom-file-input__mark input:last').change(function() {
    var $this = $(this);
    var value = this.value;
    var fileName = typeof value == 'string' ? value.match(/[^\/\\]+$/)[0] : value[0];

    if (fileName) {
      $this.siblings('span').text(fileName);
      $this.parent('div').removeClass('hidden');
    } else {
      $this.parent('div').remove();
    }
  })
}

function drawCustomFormItem(context) {
  $(context).find('.js-drop-it-down').customSelect();
  $(context).find('.js-multiple-drop-it-down').customMultipleSelect();
  $(context).find('.js-custom-checkbox').customCheckbox();
  $(context).find('.js-custom-checkbox_big').customCheckbox({
    customCheckbox: '<span class="custom-checkbox_big"></span>'
  });
  $(context).find('.js-custom-file-input').customFileInput();

  // $(context).find('.js-custom-file-input-type-2').customFileInput({
  //   markText: 'Файл не выбран',
  //   buttonText: 'Выбрать...',
  //   build: function($input, settings) {
  //     $input.element.addClass("custom-file-input__input");
  //     var $customInput = $($input.wrap);
  //     $customInput.insertAfter($input.element);
  //     $customInput
  //       .append($input.button.text($input.buttonText))
  //       .append($input.mark.text($input.markText))
  //       .append($input.element);
  //     return $customInput;
  //   }
  // });
}

function number_format(number, decimals, dec_point, thousands_sep) {
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}

function ajaxLoadForm(options) {
  var _default = {
    link: '',
    placeHolderSelector: ''
  }

  var params = $.extend(_default, options);

  $.ajax(params.link)
    .done(function(data) {
      $form = $();
      try {
        $form = $(data);
      } catch (e) {
        $form = $('<div>' + data + '</div>');
      }
      $form.appendTo(params.placeHolderSelector);
      $(params.placeHolderSelector).trigger('form.ajax');
    })
    .fail(function(data) {
      //alert( "error" );
    })
    .always(function(data) {
      //alert( "complete" );
    });

}

// Всплывай-ка с сообщением об успешной отправке
function showSuccessMessage() {
  // что бы не зависить от других окон
  var PopUpSuccessInfo = new Popup();
  var successHtml = '\
			<i class="success-info__icon"></i>\
			<h2 class="success-info__title">Запрос успешно отправлен<h2>\
			<p class="success-info__text">В ближайшее время с вами свяжется сотрудник дилерского центра для уточнения информации</p>';
  PopUpSuccessInfo.Open($(successHtml), {
    wrapClass: 'success-info'
  });
}

// hpromise dealer list
function initHpromiseMap() {
  $(document).ready(function() {
    $('body').trigger('google.map.ready');
  });
}

function compare_tov(id) {
  var AddedGoodId = id;
  if (!$('#compareid_' + AddedGoodId).hasClass('in-compare')) {
    $.get("/hpromise/avtomobili-s-probegom/compare.php", {
        action: "ADD_TO_COMPARE_LIST",
        id: AddedGoodId
      },
      function(data) {
        // console.log(data);
        //$("#compare_list_count").html(data);
        // alert('Автомобиль успешно добавлен к сравнению');
        $('#compareid_' + AddedGoodId).addClass('in-compare');
        $('.car_in_compare_fixed_cont').text(parseInt($('.car_in_compare_fixed_cont').text()) + 1);
        //console.log(data);
        if ($(window).width() <= 768) {
          $('.mob_car_compare_added').fadeIn('slow');
          setTimeout(function() {
            $('.mob_car_compare_added').fadeOut('slow');
          }, 2000);
        }
      }
    );
  }
}

(function($) {
  jQuery.fn.lightTabs = function(options) {

    var createTabs = function() {
      tabs = this;
      i = 0;

      showPage = function(i) {
        $(tabs).children("form").children("div").hide();
        $(tabs).children("form").children("div").eq(i).show();
        $(tabs).children("ul").children("li").removeClass("active");
        $(tabs).children("ul").children("li").eq(i).addClass("active");
      }

      showPage(0);

      $(tabs).children("ul").children("li").each(function(index, element) {
        $(element).attr("data-page", i);
        i++;
      });

      // $(tabs).children("ul").children("li").click(function() {
      //   showPage(parseInt($(this).attr("data-page")));
      // });

      $('.js-not-hyundai-checkbox').bind('change', function() {
        if ($(this).prop("checked")) {
          $('.js-not-hyundai-input').css('display', 'block');
          $('.js-car_model-select').css('display', 'none');
          //$('.not-hyundai').text('у меня Hyundai');
        } else {
          $('.js-not-hyundai-input').css('display', 'none');
          $('.js-car_model-select').css('display', 'block');
          //$('.not-hyundai').text('у меня не Hyundai');
        }
      });

      $('body').on('click', '.next-tab', function() {
        var next_tab = parseInt($(this).attr("data-tabID"));
        var cur_tab = next_tab - 1;
        var has_error = false;
        if (cur_tab === 0) {
          var oe_name = $('#oe_name').val();
          var oe_phone = $('#oe_phone').val();
          var oe_email = $('#oe_email').val();

          if (oe_name == '' || !oe_name) {
            $('#oe_name').addClass('error').attr('placeholder', 'Укажите ваше Имя');
          }
          if (oe_phone == '' || !oe_phone) {
            $('#oe_phone').addClass('error').attr('placeholder', 'Укажите ваш Телефон');
          }
          if (oe_email == '' || !oe_email) {
            $('#oe_email').addClass('error').attr('placeholder', 'Укажите ваш E-mail');
          }
          if (oe_name == '' || !oe_name || oe_phone == '' || !oe_phone || oe_email == '' || !oe_email) {
            has_error = true;
          }
        }
        if (cur_tab === 1) {
          var oe_car_model = $('#oe_car_model').val();
          var oe_not_hyundai = $('#oe_not-hyundai-input').val();
          var oe_enginetype = $('#oe_enginetype').val();
          var oe_transmissiontype = $('#oe_transmissiontype').val();
          var oe_drivertype = $('#oe_drivertype').val();

          if (oe_car_model == 0 && oe_not_hyundai == '') {
            // console.log($('.js-not-hyundai-checkbox').prop("checked"));
            if ($('.js-not-hyundai-checkbox').prop("checked")) {
              $('#oe_not-hyundai-input').addClass('error');
            } else {
              $('#oe_car_model').next('.drop-it-down-custom').addClass('error').find('.drop-it-down-custom__placeholder').text('Выберите модель автомобиля');
            }
          }
          if (oe_enginetype == 0) {
            $('#oe_enginetype').next('.drop-it-down-custom').addClass('error').find('.drop-it-down-custom__placeholder').text('Выберите тип двигателя автомобиля');
          }
          if (oe_transmissiontype == 0) {
            $('#oe_transmissiontype').next('.drop-it-down-custom').addClass('error').find('.drop-it-down-custom__placeholder').text('Выберите тип трансмиссии автомобиля');
          }
          if (oe_drivertype == 0) {
            $('#oe_drivertype').next('.drop-it-down-custom').addClass('error').find('.drop-it-down-custom__placeholder').text('Выберите тип привода автомобиля');
          }

          if ((oe_car_model == 0 && oe_not_hyundai == '') || oe_enginetype == 0 || oe_transmissiontype == 0 || oe_drivertype == 0) {
            has_error = true;
          }
        }
        if (has_error) {
          return false;
        }
        showPage(next_tab);
      });

      $("#online_evaluation_form").bind('submit', function() {
        var oe_agree_data_processing = $('#oe_agree_data_processing').prop('checked');

        if (oe_agree_data_processing == false) {
          alert('Необходимо согласиться на обработку персональных данных');
          return false;
        }
      });
    };
    return this.each(createTabs);
  };
})(jQuery);
