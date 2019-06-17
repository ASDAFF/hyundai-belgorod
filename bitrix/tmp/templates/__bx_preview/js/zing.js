var $parent;
String.prototype.capitalize = function() {
	return this.charAt(0).toUpperCase() + this.slice(1);
}
$(document).ready(function() {
	$(document).on("click", ".zing_form_toggler_spec", function(e) {
		console.log(123);
		e.preventDefault();
		var $zing_form = $("#blabla-spec"),
			what = $(this).attr("for");
		$zing_form.children(".zing_form").first().attr("for", what);
		switch (what) {
			case "brochures_request":
				$zing_form.find(".zing_ok").first().val("Получить брошюру о " + $(this).attr("data-model"));
				$zing_form.children(".zing_form").first().attr("data-for-model", $(this).attr("data-model"));

				var _rutarget = window._rutarget || [];
				_rutarget.push({'event': 'thankYou', 'conv_id': 'brochure', 'sku': $(this).attr("data-model")});
				_rutarget.push({'event': 'addToSegment', 'name': 'hyundai', 'value': 'paper_service'});

				break;
			case "zing_dealer_btn":
				$parent = $(this).parents('.call-to-dealer');
				$zing_form.find(".zing_ok").first().val("РџРѕР·РІРѕРЅРёС‚СЊ РґРёР»РµСЂСѓ");
				break;
			case "zing_hotline_btn":
				$zing_form.find(".zing_ok").first().val("Отправить");
				break;
			case "zing_cuzov_btn":
				$zing_form.find(".zing_ok").first().val("Отправить");
				break;
			case "newslist":
				$zing_form.find(".zing_ok").first().val("Отправить");
				break;
			default:
				$zing_form.find(".zing_ok").first().val("Отправить");
		}
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
	$(document).on("click", ".zing_form_toggler", function(e) {
		e.preventDefault();
		var $zing_form = $("#blabla"),
			what = $(this).attr("for");
		$zing_form.children(".zing_form").first().attr("for", what);
		switch (what) {
			case "brochures_request":
				$zing_form.find(".zing_ok").first().val("Получить брошюру о " + $(this).attr("data-model"));
				$zing_form.children(".zing_form").first().attr("data-for-model", $(this).attr("data-model"));

				var _rutarget = window._rutarget || [];
				_rutarget.push({'event': 'thankYou', 'conv_id': 'brochure', 'sku': $(this).attr("data-model")});
				_rutarget.push({'event': 'addToSegment', 'name': 'hyundai', 'value': 'paper_service'});

				break;
			case "zing_dealer_btn":
				$parent = $(this).parents('.call-to-dealer');
				$zing_form.find(".zing_ok").first().val("РџРѕР·РІРѕРЅРёС‚СЊ РґРёР»РµСЂСѓ");
				break;
			case "zing_hotline_btn":
				$zing_form.find(".zing_ok").first().val("Отправить");
				break;
			case "newslist":
				$zing_form.find(".zing_ok").first().val("РџРѕРґРїРёСЃР°С‚СЊСЃСЏ РЅР° РЅРѕРІРѕСЃС‚Рё Hyundai");
				break;
			default:
				$zing_form.find(".zing_ok").first().val("Отправить");
		}
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
	// datepicker
	$(document).on("click", ".zing_form_back_tel", function(e) {

		e.preventDefault();
		var $zing_form = $("#blabla-back_tel"),
			what = $(this).attr("for");
		console.log(what);
		$zing_form.children(".zing_form").first().attr("for", what);
		switch (what) {
			default:
				$zing_form.find(".zing_ok").first().val("Отправить");
		}
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
	$(".zing_birthdate").datepicker({
		changeYear: true,
		changeMonth: true,
		showOtherMonths: false,
		prevText: "<",
		nextText: ">",
		monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
		monthNamesShort: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
		dayNamesMin: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],
		firstDay: 1,
		dateFormat: 'dd.mm.yy',
		defaultDate: "-18y",
		yearRange: "-100:-18"
	}).on('change', function() {
		if ($(this).val() !== '') {
			$(this).addClass('not-empty');
		} else {
			$(this).removeClass('not-empty');
		}
	})
	// check input values on input
	$(".zing-input .zing_txt").on('input', function() {
		if ($(this).val() !== '') {
			$(this).addClass('not-empty');
			// capitalize
			if ($(this).is('[name*=name]')) {
				$(this).val($(this).val().capitalize());
			}
		} else {
			$(this).removeClass('not-empty');
		}
	});
	$(".zing-input .zing_txt").each(function() {
		if ($(this).val() !== '') {
			$(this).addClass('not-empty');
			// capitalize
			if ($(this).is('[name*=name]')) {
				$(this).val($(this).val().capitalize());
			}
		} else {
			$(this).removeClass('not-empty');
		}
	});
	$(".zing_mobile").inputmask({
		mask: '+7 (999) 999-99-99',
		showMaskOnHover: false
	}).on('keydown', function() {
		if ($(this).val() !== '') {
			$(this).addClass('not-empty');
		} else {
			$(this).removeClass('not-empty');
		}
	});
	// showing rules
	$('.zing-show-rules').on('click', function(e) {
		e.preventDefault();
		$('.zing-agreement-popup-wrapper').insertAfter('#simplemodal-container').fadeIn(500).on('click', function(e) {
			if ($(e.target).closest('.zing-agreement-popup').length === 0 || $(e.target).is('.zing-agreement-close')) {
				e.preventDefault();
				$('.zing-agreement-popup-wrapper').fadeOut(500);
			}
		});
		return false;
	});
	$('.zing-agreement-close').on('click', function(e) {
		$(this).parent().parent().css('display','none');
	});
	$.fn.sanitize_spaces = function() {
		return this.val();
	}
	$.fn.sanitize_zing_mobile = function() {
		return this.val().replace(/^\s+|\s+$/g, "").replace("+7", "").replace(/[^0-9]/g, "").substr(0, 50);
	}
	$.fn.sanitize_zing_date = function() {
		return this.val();
	}
	$.fn.sanitize_now_url = function() {
		return this.val();
	}
	$.validator.addMethod("check_siebel_email", function(val, el) {
		return !!$(el).val().match(/^[-a-z0-9_]+[-a-z0-9_.]*[@]{1}[-a-z0-9_]+[-a-z0-9_.]*[.]{1}[a-z]{2,5}$/ig);
	});
	$.validator.addMethod("check_mobile", function(val, el) {
		return $(el).sanitize_zing_mobile().length === 10;
	});
	$(".zing_form").validate({
		rules: {
			zing_last_name: {
				required: true
			},
			zing_first_name: {
				required: true
			},
			//zing_middle_name: {
			//	required: true
			//},
			zing_email: {
				required: true,
				check_siebel_email: true
			},
			zing_mobile: {
				required: true,
				check_mobile: true
			},
			zing_rules_agree_cb: {
				required: true
			}
		},
		errorPlacement: function(error, element) {}
	});
	$(".zing_form").submit(function(e) {
		console.log(123);
		window.scrollTo(0, 0);
		e.preventDefault();
		var $this = $(this),
			post_data = {
				last_name: $this.find(".zing_last_name").sanitize_spaces(),
				first_name: $this.find(".zing_first_name").sanitize_spaces(),
				middle_name: $this.find(".zing_middle_name").sanitize_spaces(),
				email: $this.find(".zing_email").sanitize_spaces(),
				mobile: $this.find(".zing_mobile").sanitize_zing_mobile(),
				birthdate: $this.find(".zing_birthdate").sanitize_zing_date(),
				now_url: $this.find(".now_url").sanitize_now_url(),
				agree: $this.find(".zing_rules_agree_cb").prop("checked") ? "Y" : "N"
			};
		$this.find(".zing_pers_rules_wrp").fadeOut();
		if (!$(this).valid() || !post_data.last_name || !post_data.first_name || !post_data.email || !post_data.mobile || post_data.agree == "N") {
			return false;
		}
		$.modal.close();
		var what = $(this).attr("for"),
			ajax_url = "";
		switch (what) {
			case "brochures_request":
				//RuTarget
				var _rutarget = window._rutarget || [];
				_rutarget.push({
					'event': 'otherPage'
				});
				_rutarget.push({
					'event': 'addToSegment',
					'name': 'hyundai',
					'value': 'paper_service'
				});
				// // RuTarget

				ajax_url = "http://www.hyundai.ru/request/request_brochure";
				post_data.model = $(this).attr("data-for-model");
				$("#brochure_email").text(post_data.email);

				$("#brochure_go_check_email")
					.stop()
					.fadeIn()
					.on('click', function(e) {
						if ($(e.target).closest('.brochure_go_check_email-content').length === 0) {
							$("#brochure_go_check_email").stop().fadeOut();
						} else if ($(e.target).is('.go_check_close')) {
							$("#brochure_go_check_email").stop().fadeOut();
						}
					});

				break;
			case "newslist":
				ajax_url = "/ajax/zing_spec_form.php";
				break;
			case "testdrive":
				ajax_url = "/ajax/testdrive.php";
				break;
			case "zing_cuzov_btn":
				ajax_url = "/ajax/zing_cuzov_btn.php";
				break;
			case "feedback_home":
				ajax_url = "/ajax/feedback.php";
				break;
			default:
				ajax_url = "/ajax/zing_hotline_btn.php";
				if (what == 'zing_dealer_btn') {
					$parent.find("#" + what).trigger("click");
				} else $("#" + what).trigger("click");
				console.log($("#" + what).attr('class'));
		}
		console.log(ajax_url);
		$.ajax({
			url: ajax_url,
			type: "POST",
			data: post_data,
			success: function(msg) {
				if(msg == 'ok') {
					$('.dark-cover-all').css('display','block');
					$('.message-send').insertAfter('#simplemodal-container').fadeIn(500).on('click', function (e) {
						if ($(e.target).closest('.zing-agreement-popup').length === 0 || $(e.target).is('.zing-agreement-close')) {
							$('.dark-cover-all').css('display','none');
							e.preventDefault();
							$('.zing-agreement-popup-wrapper').fadeOut(500);
						}
					});
				}
				console.log(msg);
			}
		});
	});
	$(document).on('click', '.newsletter_form_toggler', function(a) {
		function b() {
			console.log(d.serialize());
			$.ajax({
				type: 'POST',
				url: 'http://www.hyundai.ru/ajax/request_add_newsletter',
				data: d.serialize(),
				dataType: 'json',
				success: function(a) {
					if ('1' == a.code) d.find('input').removeClass('error'), d.find('.error').hide(), $('.js-form-wrap').hide(), $('.js-form-message').fadeIn(200), setTimeout(function() {
						$('.js-form-message').hide(), $('.js-form-wrap').fadeIn(200)
					}, 5000);
					else {
						var b = a.errors;
						d.find('input').removeClass('error'), d.find('.error').hide();
						for (var c in b) console.log(c), d.find('input[name="' + c + '"]').addClass('error'), d.find('label[for="' + c + '"]').show()
					}
				}
			})
		}
		a.preventDefault();
		var c = $('#newsletter');
		c.modal({
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
				$('body').css('overflow', 'hidden');
				if (dialog.data.outerHeight() > dialog.container.height()) {

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
				$('body').css('overflow', '');

				if ($('.zing-agreement-popup-wrapper').is(':visible')) {
					$('.zing-agreement-popup-wrapper').fadeOut(500);
				}
			}
		});
		var d = $('.js-newsletter_form'),
			e = d.find('.js-submit');
		console.log(d.serialize()), e.click(function() {
			return b(), !1
		})
	}), $(".zing_mobile").inputmask({
		mask: '+7 (999) 999-99-99',
		showMaskOnHover: false
	})
});