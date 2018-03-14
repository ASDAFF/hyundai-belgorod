$(document).ready(function() {

	function __init() {
		selectFunc();
		slider();
	}

	function selectFunc() {




		function init() {
			var sel;
			$('select.model__select').each(function(){
				var $this = $(this);
				sel = $this;


				$this.addClass('select-hidden');
				$this.wrap('<div class="select"></div>');
				$this.after('<div class="select-styled"></div>');

				var $styledSelect = $this.next('div.select-styled');
				$styledSelect.text($this.children('option').eq(0).text());

				var $list = $('<ul />', {
					'class': 'select-options'
				}).insertAfter($styledSelect);
			});
			calc();
			update(sel);
		}

		function update(sel) {
			var $this = $(sel).parent()
				, numberOfOptions = $(sel).find("option").length;

			var $styledSelect = $this.find('.select-styled');
		    $styledSelect.text($this.find('option').eq(0).text());

			$list = $this.find(".select-options");
			$list.html("");
			for (var i = 0; i < numberOfOptions; i++) {
		        $('<li />', {
		            text: $($this).find('option').eq(i).text(),
		            rel: $($this).find('option').eq(i).val()
		        }).appendTo($list);
		    }

		    var $listItems = $list.children('li');
		    $styledSelect.next($listItems).fadeOut(0);

		  	$selectClass = $this;
		    $selectClass.hover(

		    	function(e) {
			        e.stopPropagation();
			        $styledSelect.next($listItems).stop();
			        $styledSelect.toggleClass('active').next($listItems).fadeIn(300);
			    }, function(e){
		    	 	e.stopPropagation();
			        $styledSelect.toggleClass('active').next($listItems).fadeOut(300);
			    }
		    );

		    $listItems.click(function(e) {
		        e.stopPropagation();
		        $styledSelect.text($(this).text()).next($listItems).fadeOut(300);
		        var val = $(this).attr('rel');
		        $this.find(".model__select option[value='"+val+"']").prop("selected", true);
		        calc();
	    	});

		}

		init();
	}

	function slider() {
		var slideWidth = $(".so-slider__item-box").outerWidth(true);
		var boxWidth = $(".so-slider__box").outerWidth(true);
		var curSlide = 0;

		$(document).on("keydown", function(e) {
			var KEY_LEFT_ARROW = 37;
			var KEY_RIGHT_ARROW = 39;
			var pressedKey = Number(e.keyCode);

			if (pressedKey == KEY_LEFT_ARROW) {
				slideLeft();
			}

			if (pressedKey == KEY_RIGHT_ARROW) {
				slideRight();
			}
		});

		$(".so-slider__item-box").on("click", function() {
			var i = $(".so-slider__item-box").index(this);
			curSlide = i;
			moveSlide();
		});


		$(".so-slider__config-btn").on("click", function() {
			var i = $(".so-slider__config-btn").index(this);
			curSlide = i;
			moveSlide();
		});

		$('.so-slider__leftarrow').on('click', function(){
			if($(this).hasClass('disabled')) return false;

			slideLeft();
		});

		$('.so-slider__rightarrow').on('click', function(){
			if($(this).hasClass('disabled')) return false;

			slideRight();
		});

		function slideLeft() {
			if (curSlide <= 0) {
				return;
			}
			curSlide--;

			moveSlide();
		}

		function slideRight() {
			if (curSlide >= 3) {
				return;
			}
			curSlide++;

			moveSlide();
		}

		function moveSlide() {
			$(".so-slider__box").css("left" , "-" + ((slideWidth + 3) * curSlide) +  "px");
			$(".so-slider__item").removeClass("so-slider__item_active");
			$($(".so-slider__item")[curSlide]).addClass("so-slider__item_active");

			var $sliderButtons = $(".so-slider__config-btn");
			$sliderButtons.removeClass("so-slider__config-btn_car").removeClass("so-slider__config-btn_active");
			$sliderButtons.each(function(index) {
				if (index > curSlide) {
					return;
				}
				$(this).addClass("so-slider__config-btn_active");
			});

			$(".so-slider__config-btn_active").last().addClass("so-slider__config-btn_car");

			if(curSlide == 0)
				$('.so-slider__leftarrow').addClass('disabled')
			else
				$('.so-slider__leftarrow').removeClass('disabled')


			if(curSlide == 3)
				$('.so-slider__rightarrow').addClass('disabled')
			else
				$('.so-slider__rightarrow').removeClass('disabled')
		}
	}

	function calc() {
		var tradein = $(".model__select").find("option:selected").attr("data-tradein")
			, programm = $(".model__select").find("option:selected").attr("data-programm")
			, points = $(".model__select").find("option:selected").attr("data-points")
			, total = Number(tradein) + Number(programm)
			, id = $(".model__select").val()
			, name = $(".model__select").find("option:selected").text();


		$(".so-calc__item-sum_total").stop().fadeOut(300, function() {
			$(this).html(total.toLocaleString());
		}).fadeIn(300);
		$(".subsum__sum_tradein").stop().fadeOut(300, function() {
			$(this).html(Number(tradein).toLocaleString());
			if (Number(programm) != 0) {
				$(".so-calc__item-subsum").removeClass("so-calc__item-subsum_hidden");
			}
		}).fadeIn(300);
		$(".subsum__sum_programm").stop().fadeOut(300, function() {
			$(this).html(Number(programm).toLocaleString());
		}).fadeIn(300);
		$(".so-calc__item-sum_points").stop().fadeOut(300, function() {
			$(this).html(Number(points).toLocaleString());
		}).fadeIn(300);
		$(".so-calc__img").stop().fadeOut(300, function() {
			$(this).attr("src", "http://www.hyundai.ru/media/start/img/cars/" + id + ".png").attr("alt", name);
		}).fadeIn(300);
		if (Number(programm) == 0 && id != 18) {
			$(".so-calc__item-subsum").addClass("so-calc__item-subsum_hidden");
		}
		else if(Number(programm) == 0 && id == 18) {

			$(".subsum__plus").addClass("so-calc__item-subsum_hidden");
			$(".subsum__sec").addClass("so-calc__item-subsum_hidden");
			$(".so-calc__item-subsum").removeClass("so-calc__item-subsum_hidden");
		}

		//var confLink = "/configurator/car/?compl_id=" + getConfigIdByCarId(Number(id)) + "&packets=";
		var confLink = "http://www.hyundai.ru/configurator/car/" + id;
		$(".so-calc__item-conf").attr("href", confLink);
	}

	function getConfigIdByCarId(carId) {
		switch (carId) {
			case 23:
				return 379;
			case 22:
				return 336;
			case 7:
				return 100;
			case 9:
				return 108;
			case 6:
				return 199;
			case 22:
				return 336;
			case 18:
				return 280;
			case 17:
				return 392;
			case 13:
				return 167;
			default:
				return 0;
		}
	}
	__init();

	$(document).on('click', '.show-popup', function (e) {
		e.preventDefault();
		$('.overlayed').fadeIn();
	});

	$(document).on('click', '.closeIt', function (e) {
		e.preventDefault();
		$('.overlayed').fadeOut();
	});

});