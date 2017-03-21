/* pip flat solaris 2017 redesign scripts */
$(function(){
	'use strict'

	/*

	Логика обработки скролла:
	1) Сохраним все данные в нумерованный массив, вычислим точки начала скролла. При ресайзе - пересчитаем.
	2) Создадим объект текущего состояния
	3) На каждом моменте времени нам нужно проверить к какому элементу мы ближе, но для этого не нужно дергать DOM.

	*/

	var parallax = {
		blocks: [],
		emptyBlock: {
			visible: false
		},
		currentBlock: [],
		init: function(){
			var self = this;
			self.currentBlock = self.emptyBlock;

			$('.section-parallax').each(function(){
				var layerHeight = $(this).find('.parallax-layer').outerHeight();
				var contentHeight = $(this).find('.section-parallax-content').outerHeight();
				var blockHeight = $(this).outerHeight();

				// Считаем проценты отступов фона относительно высоты слоя параллакса
				var delta = Math.round(( (layerHeight - blockHeight) / layerHeight ) * 50 * 1000) / 1000;

				// Считаем проценты отступов текстовых блоков относительно высоты видимого блока
				var deltaText = Math.round(( (blockHeight - contentHeight) / contentHeight ) * 50 * 1000) / 1000;

				var blockData = {
					visible: true,
					layerObject: $(this).find('.parallax-layer'),
					contentObject: $(this).find('.section-parallax-content'),
					scrollStart: $(this).offset().top - $(window).height(),
					scrollEnd: $(this).offset().top + $(this).height(),
					delta: delta,
					deltaText: deltaText,
					process: function(){
						// А тут считаем актуальный CSS Translate
						var self = this;
						if (!self.layerObject.is(':visible')) return; // нам не нужно обрабатывать элемент, если он (== его предки) не видимы
						var currentScroll = $(window).scrollTop();
						var translateY = delta - 2 * delta * (currentScroll - self.scrollStart) / (self.scrollEnd - self.scrollStart);
						var textTranslateY = (deltaText - 2 * deltaText * (currentScroll - self.scrollStart) / (self.scrollEnd - self.scrollStart)) * 1.7;
						
						self.layerObject.css3transfrom('translate(0,' + translateY + '%)');
						self.contentObject.css3transfrom('translate(0,' + textTranslateY + '%)');
					}
				};
				self.blocks.push(blockData);
			});
		},
		scroll: function(){
			// Нужно определить, какой блок у нас в зоне видимости

			var self = this;
			var wtop = $(window).scrollTop();

			// Если мы НЕ в рамках текущего блока - то переопределяем блок
			if((wtop < self.currentBlock.scrollStart || wtop >= self.currentBlock.scrollEnd)  || !self.currentBlock.visible) {
				
				self.currentBlock = self.emptyBlock; // Обнуляем

				self.blocks.forEach(function(item, i, blocks){
					if(wtop >= item.scrollStart && wtop < item.scrollEnd) {
						self.currentBlock = item;
					}
				});
			}

			if(self.currentBlock.visible)
				self.currentBlock.process();
		}
	}

	// Вызываем инициализацию
	parallax.init();

	$(window).on('scroll', function(){
		setTimeout(function(){
			parallax.scroll();
		}, 50)
	});
});
