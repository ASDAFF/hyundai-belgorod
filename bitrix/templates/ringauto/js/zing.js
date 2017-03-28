var $parent;

$(document).ready(function(){
	$(document).on("click", ".zing_form_toggler", function(e){
		e.preventDefault();
		var  $zing_form = $("#blabla")
			,what		= $(this).attr("for")

		$zing_form.children(".zing_form").first().attr("for",what);

		switch (what)
		{
			case "brochures_request":
				$zing_form.find(".zing_ok").first().val("Получить брошюру о "
														+ $(this).attr("data-model"));
				$zing_form
					.children(".zing_form").first()
					.attr(	"data-for-model",$(this).attr("data-model")	);

/*
				dataLayer2.push({
					'event': 'buttonconfirmationbrochure-click',
					'countrycode': 'RU',
					'carmodelname':$(this).attr("data-gtm-havas-model")
				});
*/
				break;

			case "zing_dealer_btn":
				$parent = $(this).parents('.call-to-dealer');
				$zing_form.find(".zing_ok").first().val("Позвонить дилеру");
				break;

			case "zing_hotline_btn":
				$zing_form.find(".zing_ok").first().val("Позвонить в Службу поддержки Hyundai");
				break;

			case "newslist":
				$zing_form.find(".zing_ok").first().val("Подписаться на новости Hyundai");
				break;

			default:
				$zing_form.find(".zing_ok").first().val("Позвонить");
		}


		//$zing_form.fadeIn();
		$zing_form.modal({
			closeClass	: "zing_close",
			persist		: true,
			overlayCss	: {background:"#000"},
			zIndex		: 500
		});
	});



	$(".zing_mobile").inputmask("+7 (999) 999-99-99");

	$(".zing_birthdate").datepicker({
		changeYear		: true,
		changeMonth		: true,
		showOtherMonths	: false,
		prevText		: "<",
		nextText		: ">",
		monthNames		: [	"Январь","Февраль","Март",
							"Апрель","Май","Июнь",
							"Июль","Август","Сентябрь",
							"Октябрь","Ноябрь","Декабрь"	],
		monthNamesShort	: [	"Январь","Февраль","Март",
							"Апрель","Май","Июнь",
							"Июль","Август","Сентябрь",
							"Октябрь","Ноябрь","Декабрь"	],
		dayNamesMin		: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
		firstDay		: 1,
		dateFormat		: 'dd.mm.yy',
		defaultDate		: "-30y",
		yearRange		: "-100:-21"
	});


	$(".zing_rules_agree_txt a").click(function(){
		$(this).closest(".zing_rules_wrp").prev().fadeToggle();
	});
	$(".zing_rules_agree_cb").change(function(){
		if ($(this).prop("checked") === true)
			$(this).closest(".zing_rules_wrp").prev().fadeOut();
	});

	$.fn.sanitize_spaces = function() {
		return this.val().replace(/^\s+|\s+$/g,"").substr(0,50);
	}
	$.fn.sanitize_zing_mobile = function() {
		return this.val()
					.replace(/^\s+|\s+$/g,"")
					.replace("+7","")
					.replace(/[^0-9]/g, "")
					.substr(0,50);
	}
	$.fn.sanitize_zing_date = function() {
		return this.val().split(".").reverse().join("").substr(0,8);
	}


	$.validator.addMethod("check_siebel_email",function(val,el){
		return !!$(el).val()
			.match(/^[-a-z0-9_]+[-a-z0-9_.]*[@]{1}[-a-z0-9_]+[-a-z0-9_.]*[.]{1}[a-z]{2,5}$/ig);
	});

	$.validator.addMethod("check_mobile",function(val,el){
		return $(el).sanitize_zing_mobile().length === 10;
	});

	$(".zing_form").validate({
		rules	: {
			zing_last_name	: {
				required	: true
			},
			zing_first_name	: {
				required	: true
			},
			zing_middle_name: {
				required	: true
			},
			zing_email	: {
				required			: true,
				check_siebel_email	: true
			},
			zing_mobile	: {
				required	: true,
				check_mobile: true
			},
			zing_rules_agree_cb : {
				required	: true
			}
		},
		messages	: {
			zing_last_name		: "Пожалуйста, введите фамилию",
			zing_first_name		: "Пожалуйста, введите имя",
			zing_middle_name	: "Пожалуйста, введите отчество",
			zing_email			: "Пожалуйста, введите email",
			zing_mobile			: "Пожалуйста, введите телефон",
			zing_rules_agree_cb : "Пожалуйста, подтвердите ваше согласие на обработку данных"
		}
	});

	$(".zing_form").submit(function(e){
		e.preventDefault();

		var $this		= $(this),
			post_data	= {
				last_name	: $this.find(".zing_last_name").sanitize_spaces(),
				first_name	: $this.find(".zing_first_name").sanitize_spaces(),
				middle_name	: $this.find(".zing_middle_name").sanitize_spaces(),
				email		: $this.find(".zing_email").sanitize_spaces(),
				mobile		: $this.find(".zing_mobile").sanitize_zing_mobile(),
				birthdate	: $this.find(".zing_birthdate").sanitize_zing_date(),
				agree		: $this.find(".zing_rules_agree_cb").prop("checked") ? "Y" : "N"
			};

		$this.find(".zing_pers_rules_wrp").fadeOut();
		//console.log(post_data);

		if (	!$(this).valid()
			||	!post_data.last_name
			||	!post_data.first_name
			||	!post_data.middle_name
			||	!post_data.email
			||	!post_data.mobile
			||	post_data.agree == "N"	)
		{
			return false;
		}


		$.modal.close();


		var  what		= $(this).attr("for")
			,ajax_url	= "";

		switch (what)
		{
			case "brochures_request":
				//RuTarget
				//RuTarget

				ajax_url = "/request/request_brochure";

				//post_data.model	= $("#brochure_requester a").attr("data-model");
				post_data.model	= $(this).attr("data-for-model");
/*
				dataLayer2.push({
					'event': 'buttonbrochure',
					'countrycode': 'RU',
					'carmodelname': $("#brochure_requester .zing_form_toggler").attr("data-gtm-havas-model")
				});
*/

				$("#brochure_email").text(post_data.email);
				$("#brochure_go_check_email").modal({
					closeClass	: "go_check_close",
					persist		: true,
					overlayCss	: {background:"#000"},
					zIndex		: 500
				});
				break;

			case "newslist":
				ajax_url = "/request/newslist";
				break;

			default:
				ajax_url = "/request/send_crm_before_zingaya";
				if(what == 'zing_dealer_btn')
				{
//					console.log($parent.parents('.pop_body').find('.dealer-name').html());
					$parent.find("#" + what).trigger("click");
				}
				else
					$("#" + what).trigger("click");

				console.log($("#" + what).attr('class'));
		}


		$.ajax({
			url		: ajax_url,
			type	: "POST",
			data	: post_data,
			success	: function(msg){
				console.log(msg);
			}
		});
	});


	$(document).on('click', '.newsletter_form_toggler', function (a) {
        function b() {
            $.ajax({
                type: 'POST',
                url: '/ajax/request_add_newsletter',
                data: d.serialize(),
                dataType: 'json',
                success: function (a) {
                    if ('1' == a.code) d.find('input').removeClass('error'),
                    d.find('.error').hide(),
                    $('.js-form-wrap').hide(),
                    $('.js-form-message').fadeIn(200),
                    setTimeout(function () {
                        $('.js-form-message').hide(),
                        $('.js-form-wrap').fadeIn(200)
                    }, 5000);
                     else {
                        var b = a.errors;
                        d.find('input').removeClass('error'),
                        d.find('.error').hide();
                        for (var c in b) console.log(c),
                        d.find('input[name="' + c + '"]').addClass('error'),
                        d.find('label[for="' + c + '"]').show()
                    }
                }
            })
        }
        a.preventDefault();
        var c = $('#newsletter');
        c.modal({
            closeClass: 'zing_close',
            persist: !0,
            overlayCss: {
                background: '#000'
            },
            zIndex: 500
        });
        var d = $('.js-newsletter_form'),
        e = d.find('.js-submit');
        console.log(d.serialize()),
        e.click(function () {
            return b(),
            !1
        })
    }),
    $('.zing_mobile').inputmask('+7 (999) 999-99-99')
});