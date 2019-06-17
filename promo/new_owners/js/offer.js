var serviceRequestModal = new Spreader('#service-request-template', {
	onShow: function() {

		this.$container.find('.list-component').on('click', function(){
			$(this).toggleClass('is-active');
			$('.list-component').not(this).removeClass('is-active');
		});

		this.$container.on('click', '.list .list-item', function(){
			if($(this).hasClass('is-active')) return false;

			var v = $(this).attr('value');

			$(this).addClass('is-active').siblings().removeClass('is-active');
			$(this).parents('.list-component').find('.selected-item').attr('value', v);
			$(this).parents('.list-component').find('.dataInput').val(v);

			$(this).parents('.list-component').find('.textVal').text($(this).text());

			if($(this).parents('.list-component').attr('data-dealer-refresh') == 1)
				refreshDealers(parseInt(v));
		});

		//Попап Обработка персональных данных
		this.$container.on('click', '.js-p-rules-open', function (e) {
			e.preventDefault();
			$('.p-rules').addClass('isOpened');
		});
	},
	onMount: function() {
		this.$container.find('[data-form-id="service-request"]')
			.validit({
				onSuccessSubmit: function(){
					var data = this.serialized,
						submitButton = this.$element.find('[type="submit"]');


					console.log(data);
					$.ajax({
						url: 'https://www.hyundai.ru/requestnew/sendcrm',
						type: 'POST',
						data: data,
						success: function(r){
							if (r === 'Y') {
								serviceRequestModal.close();
								window.notify('Успешно.', 'success');
								// Вызовем клик по ссылке
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
					mask: '+ 7 (999) 999-99-99',
					showMaskOnHover: false,
					greedy: false
				})
	}
});



var creditModal = new Spreader('#credit-template', {
	onShow: function() {

		this.$container.find('.list-component').on('click', function(){
			$(this).toggleClass('is-active');
			$('.list-component').not(this).removeClass('is-active');
		});

		this.$container.on('click', '.list .list-item', function(){
			if($(this).hasClass('is-active')) return false;

			var v = $(this).attr('value');

			$(this).addClass('is-active').siblings().removeClass('is-active');
			$(this).parents('.list-component').find('.selected-item').attr('value', v);
			$(this).parents('.list-component').find('.dataInput').val(v);

			$(this).parents('.list-component').find('.textVal').text($(this).text());

			if($(this).parents('.list-component').attr('data-dealer-refresh') == 1)
				refreshDealers(parseInt(v));
		});

		//Попап Обработка персональных данных
		this.$container.on('click', '.js-p-rules-open-common', function (e) {
			console.log('click');
			e.preventDefault();
			$('.p-rules-common').addClass('isOpened');
		});
	},
	onMount: function() {
		this.$container.find('[data-form-id="credit-request"]')
			.validit({
				onSuccessSubmit: function(){
					var data = this.serialized,
						submitButton = this.$element.find('[type="submit"]');

					console.log(data);
					$.ajax({
						url: 'https://www.hyundai.ru/requestnew/sendOffer',
						type: 'POST',
						data: data,
						success: function(r){
							if (r === 'Y') {
								serviceRequestModal.close();
								window.notify('Успешно.', 'success');

								dataLayer.push({
									'event': 'custom_event',
									'category': $('.title-offer span').html(),
									'action': 'Отправка заявки на кредит',
									'label': $('input[name=model]').val()
								});
								// Вызовем клик по ссылке
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
					mask: '+ 7 (999) 999-99-99',
					showMaskOnHover: false,
					greedy: false
				})
	}
});


function refreshDealers(cityNum)
{
	$('.dealers-block .list li').remove();

	dealersList = dealersData[cityNum].dealers;

	$('.dealers-block .textVal').text(dealersList[0].name);
	$('.dealers-block .selected-item').attr('value', dealersList[0].code);
	$('.dealers-block .dataInput').val(dealersList[0].code);

	var N = dealersList.length;

	for(i = 0; i < N; i++)
	{
		$('.dealers-block .list').append('<li value="' + dealersList[i].code + '" class="list-item">' + dealersList[i].name + '</li>');
	}
}

$(document).ready(function(){

	$(document).on('click', '[data-role="service-request-open"]', function(event){
		event.preventDefault()
		event.stopPropagation()

		//popupIndex = parseInt($(this).attr('data-popup'));
		serviceRequestModal.show()
	})


	$(document).on('click', '[data-role="credit-open"]', function(event){
		event.preventDefault()
		event.stopPropagation()

		//popupIndex = parseInt($(this).attr('data-popup'));
		creditModal.show()
	})

	//Попап Обработка персональных данных
	$('.js-p-rules-close').on('click', function(e){
		e.preventDefault();
		$('.p-rules').removeClass('isOpened');
		$('.p-rules-common').removeClass('isOpened');
	})

	$(document).on('click', function(e){
		if ($(e.target).hasClass('p-rules__wrap')) {
			$('.p-rules').removeClass('isOpened');
			$('.p-rules-common').removeClass('isOpened');
		}
	})
});


