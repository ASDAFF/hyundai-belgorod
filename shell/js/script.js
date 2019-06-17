function scrollToSection(_anchor, callback){ // find and scroll to element in any [.content-type] block with [data-anchor="{_anchor}"] @ [string]
	if (!_anchor || !_anchor === 'string' || _anchor.length === 0) return;
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

	console.log(_pxtarget);

// 	if (scrolled !== _pxtarget) {
		$('html,body').animate({scrollTop: _pxtarget}, 1000).promise().done(function(){
			callback instanceof Function && callback();
		});
/*
	} else {
		callback instanceof Function && callback();
	}
*/
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
		$('#videobg-item').volume = 1;
		if (self.total > 1){
			self.el.append(self._controls);
			self.controls = {}
			self.controls.btns = self.el.find('.pip-slider-control--btn')
			self.controls.current = self.el.find('[data-role="_current"]')
			self.controls.total = self.el.find('[data-role="_all"]')
		}
		self.bind();
		self.buildFrame();
	},
	bind: function () {
		var self = this;
		self.slides.on('click', self.exeVideo);
	},
	buildFrame: function (){
		var self = this;
		return false;
	},
	exeVideo: function (){
		var self = this;
		if($('.pip-slide').hasClass('is-playing'))
		{
			var _this = $(this);

			$('.pip-slide').removeClass('is-playing');

			$('.embedded_vd').fadeOut(500);
			document.getElementById('videobg-item').pause();
			$('.video-preview').fadeIn(500);
		}
		else
		{
			console.log('exevideo');
			var _this = $(this),
				_id = _this.attr('data-src'),
				_src = 'https://www.youtube.com/embed/'+_id+'?rel=0&amp;showinfo=0;autoplay=1';
			_this.addClass('is-playing');
			_this.find('.embedded_vd').fadeIn(500);
			_this.find('.video-preview').fadeOut(500);
			document.getElementById('videobg-item').play();
		}


		return false;
	},
	stopVideo: function(){
		var _this = $(this);

		$('.pip-slide').removeClass('is-playing');

		$('.embedded_vd').fadeOut(500);
		document.getElementById('videobg-item').pause();
		$('.video-preview').fadeIn(500);
	}
};

var popupIndex = 0;


var shellInfoModal = new Spreader('#shell-info-template', {
	onShow: function() {
		// А тут займемся рендерингом

		var pData = popupData[popupIndex];

		$('.shell-info-left img').attr('src', 'https://www.hyundai.ru/media/shell/pics/' + pData.image);
		$('.shell-info-title').html(pData.title);
		$('.shell-info-subtitle').html('');
		$('.shell-info-text').html(pData.text);

		// Рендерим блоки

		$('.shell-info-scrollblock').remove();

		blockData = pData.blocks;

		var N = blockData.length;

		for(i=0; i<N; i++)
		{
			$('.scrollHider').append('<div class="shell-info-scrollblock"><div class="shell-info-scrolltitle">' + blockData[i].name + '<svg tabindex="-1" aria-visible="false" class="ic-svg arrowdown"><use xlink:href="#ic-dropdown-corner"></use></svg></div><div class="shell-info-scrolltext">' + blockData[i].text + '</div></div>');
		}

		this.$container.find('.shell-info-scrollblock').on('click', function(){
			$(this).toggleClass('is-active');
		});
	},
	onMount: function() {

	}
});



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

		// Считать год и тачку
		var model = parseInt($('.model-block .selected-item').attr('value'));
		var year = parseInt($('.year-block .selected-item').attr('value'));

		var car = shellData[model];
		if(car.image == 'i30new')
			car.image = 'i30';

		$('.list-item[data-link='+car.image+']').trigger('click');
		$('.list-item[data-link='+car.image+']').trigger('click');
		$('.list-item[data-year=' + year + ']').trigger('click');
		$('.list-item[data-year=' + year + ']').trigger('click');
	},
	onMount: function() {
		this.$container.find('[data-form-id="service-request"]')
			.validit({
				onSuccessSubmit: function(){
					var data = this.serialized,
						submitButton = this.$element.find('[type="submit"]');


					console.log(data);
					$.ajax({
						url: 'https://www.hyundai.ru/requestnew/ServiceRequestToCRM',
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

function refreshDropdowns(carNum)
{
//	console.log('refreshing', carNum);

//	console.log(shellData);

	// Этап 1. Заменить фотку и подпись
	$('.content-form-car__backstage-block').text(shellData[carNum].name);

	$('.content-form__car-img').attr('src', 'https://www.hyundai.ru/media/shell/cars/' + shellData[carNum].image + '.png');

	// Этап 2. Перерисовать дропдаун с годами

	var yearFrom = parseInt(shellData[carNum].from);
	var yearTo = parseInt(shellData[carNum].to);

	if(yearTo == 0) yearTo = parseInt((new Date()).getFullYear());

	$('.year-block .textVal').text(yearTo);
	$('.year-block .selected-item').attr('value', yearTo);

	$('.year-block .list li').remove();

	for(i = yearTo; i >= yearFrom; i--)
	{
		if(i == yearTo)
			$('.year-block .list').append('<li value="' + i + '" class="list-item is-active">' + i + '</li>');
		else
			$('.year-block .list').append('<li value="' + i + '" class="list-item">' + i + '</li>');
	}



	// Этап 3. Перерисовать дропдаун с движками

	$('.engine-block .list li').remove();

	engineList = shellData[carNum].engines;

	$('.engine-block .textVal').text(engineList[0].name);
	$('.engine-block .selected-item').attr('value', 0);

	var N = engineList.length;

	for(i = 0; i < N; i++)
	{
		if(i == 0)
			$('.engine-block .list').append('<li value="' + i + '" class="list-item is-active">' + engineList[i].name + '</li>');
		else
			$('.engine-block .list').append('<li value="' + i + '" class="list-item">' + engineList[i].name + '</li>');
	}
}

function refreshOilList()
{
	var carNum = $('.model-block .selected-item').attr('value');
	var engineNum = $('.engine-block .selected-item').attr('value');

	var oilList = shellData[carNum].engines[engineNum].values;
	var N = popupData.length;

	$('.formresult-row').remove();

	var k = 1;
	for(i = 1; i<=N-1; i++)
	{
		if($.inArray( popupData[i].code, oilList ) == -1) continue;

		$('.content-formresult .content-inner').append('<div class="formresult-row" data-role="shell-info" data-popup="' + i + '"><div class="formresult-row-number">' + k + '</div><div class="formresult-row-image"><img src="https://www.hyundai.ru/media/shell/pics/' + popupData[i].image + '"><div class="formresult-row-best' + popupData[i].best + ' ">Лучший выбор</div></div><div class="formresult-row-data"><div class="formresult-row-data-header">' + popupData[i].title + '</div><div class="formresult-row-data-subheader"></div><div class="formresult-row-data-text"><div class="formresult-row-data-textblock">Разработано для бензиновых<br/>и дизельных двигателей</div><div class="formresult-row-data-volume"><div class="volume-header">Объем</div><div class="volume-value">' + shellData[carNum].engines[engineNum].volume + ' л</div></div></div></div></div>');
		k++;
	}
}

$(document).ready(function(){

	$(document).on('click', '[data-role="shell-info"]', function(event){
		event.preventDefault()
		event.stopPropagation()

		popupIndex = parseInt($(this).attr('data-popup'));
		shellInfoModal.show()
	})

	$(document).on('click', '[data-role="service-request-open"]', function(event){
		event.preventDefault()
		event.stopPropagation()

		//popupIndex = parseInt($(this).attr('data-popup'));
		serviceRequestModal.show()
	})

	$('.list-component').on('click', function(){
		$(this).toggleClass('is-active');
		$('.list-component').not(this).removeClass('is-active');
	});

	$(document).on('click', '.list .list-item', function(){
		if($(this).hasClass('is-active')) return false;

		var v = $(this).attr('value');

		$(this).addClass('is-active').siblings().removeClass('is-active');
		$(this).parents('.list-component').find('.selected-item').attr('value', v);

		$(this).parents('.list-component').find('.textVal').text($(this).text());

		if($(this).parents('.list-component').attr('data-refresh') == 1)
			refreshDropdowns(parseInt(v));
	});

	videos.init();


	$(document).mouseup(function (e) {
	    var container = $('.list-component');
	    if (container.has(e.target).length === 0){
	        container.removeClass('is-active');
	    }
	});

	$('.filter__button').on('click', function(){
		refreshOilList();
		$('.content-formresult').slideDown();
		scrollToSection('content-formresult');
	});

	$('.helper-link').on('click', function(){
		scrollToSection('content-form');
	});


	$('.faq-header').on('click', function(){
		$(this).parents('.faq-block').toggleClass('faq-open');
	});

});