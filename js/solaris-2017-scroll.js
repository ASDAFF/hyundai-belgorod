/* pip flat solaris 2017 redesign scripts */
$(function(){
	'use strict'

	/*

	Логика обработки скролла:
	1) Сохраним все данные в нумерованный массив, вычислим точки начала скролла. При ресайзе - пересчитаем.
	2) Создадим объект текущего состояния
	3) На каждом моменте времени нам нужно проверить к какому элементу мы ближе, но для этого не нужно дергать DOM.

	*/

	var currentScrollSection = {
		contentHeight: 0,
		blocknumber: 0,
		selector: 'none',
		scrollStart: 0,
		scrollEnd: 0,
		subsections: [],
		subsection: {
			blocknumber: 0,
			selector: 'none',
			scrollStart: 0,
			scrollEnd: 0,
			nodeObject: []
		},
		scrollObjects: [],
		init: function(){
			var self = this;
			var k = 1;

			self.contentHeight = $('.content-type__explore').outerHeight();

			$('.content-type__explore section').each(function(){
				/*
				Для объекта нам надо сохранитиь:
				- Номер
				- Селектор
				- Позицию скролла, начиная с которой объект активен
				- Позицию скролла, до которой объект активен
				*/

				var subsectionsObjects = [];

				/* Соберем список подсекций */

				var sectionData = {
					number: k,
					selector: $(this).attr('data-anchor'),
					scrollStart: $(this).offset().top - Math.round($(window).height() / 2),
					scrollEnd: $(this).offset().top + $(this).height() - Math.round($(window).height() / 2),
					subsections: []
				};

				k++;

				$(this).find('[data-watch-scroll=true]').each(function(){
					var subsectionData = {
						number: k,
						selector: $(this).attr('data-anchor'),
						scrollStart: $(this).offset().top - Math.round($(window).height() / 2),
						scrollEnd: $(this).offset().top + $(this).outerHeight() - Math.round($(window).height() / 2),
						nodeObject: $(this)
					};
					sectionData.subsections.push(subsectionData);
				});
				
				self.scrollObjects.push(sectionData);

			});
			
			// не дождеимя скролла для инита, если обновили страницу, находясь в середине
			self.set();
		},
		update: function(){
			var self = this;
			var h = $('.content-type__explore').outerHeight();

			if(self.contentHeight != h) {
				self.init();
			}
		},
		set: function(){
			var self = this;
			var wtop = $(window).scrollTop();

			// Проверим, нужна ли доп.обработка

			// Если мы внутри текущей секции
			if(wtop < self.scrollStart || wtop >= self.scrollEnd) {

				self.blocknumber = 0;
				self.selector = '';
				self.scrollStart = 0;
				self.scrollEnd = 0;

				self.scrollObjects.forEach(function(item, i, scrollObjects){

					// Сравним положение

					if(wtop >= item.scrollStart && wtop < item.scrollEnd) {
						// Элемент выбран

						// Сохраним текущее состояние

						self.blocknumber = item.number;
						self.selector = item.selector;
						self.scrollStart = item.scrollStart;
						self.scrollEnd = item.scrollEnd;
						self.subsections = item.subsections;
						
						self.change();
					}
				});

				if(self.blocknumber == 0) {
					// Скрыть блок в меню
					$('.pip-primary-nav-current').hide();
				}
			}

			// А теперь в рамках текущей секции проверим подсекции

			if(wtop < self.subsection.scrollStart || wtop >= self.subsection.scrollEnd) {
				self.subsections.forEach(function(subitem, i, lst){
					if(wtop >= subitem.scrollStart && wtop < subitem.scrollEnd) {
						self.subsection.blocknumber = subitem.number;
						self.subsection.selector = subitem.selector;
						self.subsection.scrollStart = subitem.scrollStart;
						self.subsection.scrollEnd = subitem.scrollEnd;
						self.subsection.nodeObject = subitem.nodeObject;

						// Триггерим анимацию
						self.subsection.nodeObject.trigger('appear');
					}
				});
			}
		},
		change: function(){
			var self = this;
			/* Меняем текст в верхнем меню */
			
			// Сначала проверим подсекцию
			if(self.selector.length > 0 && $('.pip-sub-nav-link[data-anchor='+ self.selector +']').length > 0) { // просто чтобы не typedef, ну и проверим, что такой пункт точно есть
				// выбираем объект в верхнем меню
				var txt = self.blocknumber + '. ' + $('.pip-sub-nav-link[data-anchor='+ self.selector +']').text();
				
				$('.pip-primary-nav-current').text(txt);
				$('.pip-primary-nav-current').show();
			}
		}
	};

	// Вызываем инициализацию

	currentScrollSection.init();

	$(window).resize(function(){
		if ($('.content-type__explore').is(':visible')) { // не грузим, если мы невидимы
			currentScrollSection.init();
		}
	});

	$(window).on('scroll', function(){
		if ($('.content-type__explore').is(':visible')) { // не грузим, если мы невидимы
			setTimeout(function(){
				currentScrollSection.update();
				currentScrollSection.set();
			}, 50)
		}
	});
});
