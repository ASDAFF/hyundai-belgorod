$(function () {
	var isFinded = false,
		isDisableIcons = false,
		mapLoaded = false,
		mapReady = false,
		currentDealer,
		currentSelectedDealer,
		currentCity,
		currentCar,
		salutation = 'Mr.',
		isDealerselected = false,
		tempHeight,
		showMapTopOffset,
		dropDownMenu = $('.drop-it-down'),
		dropDownMenuItemFirst = $('.drop-it-down .dropdown-item.first'),
		dropDownMenuItemActive = $('.drop-it-down .dropdown-item.active'),
		clickedMenu,
		currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').text();

	//Список доступных дилеров для i30N
/*
	var i30NAllowDealers = [
		'C40AF01155',
		'C40AF01028',
		'C40AF01052',
		'C40AF01093',
		'C40AF00272',
		'C40AF00352',
		'C40AF00985',
		'C40AF01016',
		'C40AF00256',
		'C40AF01047',
		'C40AF00182',
		'C40AF00288',
		'C40AF01146',
		'C40AF01145'
	]
*/

	var mapObj = {
		initialize: function () {
			var self = this;
			this.latlng = undefined;
			this.markers = [];
			this.searchType = "city"; // dealer or city
			this.dealersArray = [];
			this.points = [];
			this.myMap = new ymaps.Map("map_canvas", {
				center: [55.753559, 37.609218],
				zoom: 8,
				controls: ['zoomControl']
			}, {
					suppressMapOpenBlock: true,
				});
			this.objectManager = new ymaps.ObjectManager({
				clusterize: false
			});

			this.getAllPoints(this.renderMarkers);

			return this;
		},
		getAllPoints: function (callback) {
			var self = this;
			$.getJSON('https://www.hyundai.ru/request/getalldealers', function (data) {
				callback(data, self);
			})
			.done(function() {
				// map onLoad
					if (!mapLoaded){
						$('.dropdown-item.active').trigger('click');
						$('#dropdown-carlisting .dropdown-item.first').text($('#dropdown-carlisting .dropdown-item.active').text());
						if (currentDealerId) {
							isDealerselected = true;
							var currentDealerFr = currentDealer.toString().toLowerCase();
							currentDealerCity = currentDealerCity.toLowerCase();
							currentDealerCity = currentDealerCity.split(',');
							dealerCityCurrentFinded = currentDealerCity[0].replace('г. ','');

							$('#dropdown-dealercitylisting .dropdown-item').each(function () {
								var self = this,
								searchValue =  $(self).text().toString();
								searchValue = searchValue.toLowerCase();
								console.log(searchValue);

								if (searchValue === 'москва и подмосковье') {
									searchValue = 'москва';
								};
								if (dealerCityCurrentFinded.indexOf(searchValue) != -1) {
									$(self).trigger('click');
								};
							});

							// А тут поиск дилера по ID
							$('#dropdown-dealerlisting .dropdown-item').each(function () {
								var self = this,
								popupselected =	 $(self).attr('data-id');
								if (popupselected == currentDealerId) {
									$(self).trigger('click');
								}
							});
							if (!isDealerselected) {
								$('#dropdown-dealerlisting').removeClass('isDealerselected');
							} else {
								$('#dropdown-dealerlisting').addClass('isDealerselected');
							}
						}
						else if (currentDealerName) {
							currentDealer = currentDealerName;
							isDealerselected = true;
							var currentDealerFr = currentDealer.toString().toLowerCase();
							currentDealerCity = currentDealerCity.toLowerCase();
							currentDealerCity = currentDealerCity.split(',');
							dealerCityCurrentFinded = currentDealerCity[0].replace('г. ','');

							$('#dropdown-dealercitylisting .dropdown-item').each(function () {
								var self = this,
								searchValue =  $(self).text().toString();
								searchValue = searchValue.toLowerCase();

								if (searchValue === 'белгород') {
									searchValue = 'белгород';
								};
								if (dealerCityCurrentFinded.indexOf(searchValue) != -1) {
									$(self).trigger('click');
								};
							});

							$('#dropdown-dealerlisting .dropdown-item').each(function () {
								var self = this,
								popupselected =	 $(self).text().toString().toLowerCase();
								if (popupselected == currentDealerFr) {
									$(self).trigger('click');
								}
							});
							if (!isDealerselected) {
								$('#dropdown-dealerlisting').removeClass('isDealerselected');
							} else {
								$('#dropdown-dealerlisting').addClass('isDealerselected');
							}
						}
						mapLoaded = true;
					}
			})
			.fail(function() {
				if (confirm( "Something went wrong :(\n Let's try to reload this page." )) {
					location.reload(true);
				} else {
					return false;
				};
			});
		},
		renderMarkers: function (data, self) {
			var numPoint;
			var markerId = 0;
			self.dealersArray = data;

			for (pointNum in data) {
				let dp = data[pointNum];

				let pointImage = '/media/img/icon_df_map_dealer_hyundai_on_new.png';
				if (dp.special === '1') {
					pointImage = '/media/img/icon_df_map_dealer_special_on.png';
				}

				if (dp.id == 223) {
					pointImage = '/media/img/avilon.png';
				}

				var dealerCity = dp.address;
				dealerCity = dealerCity.split(',');
				dealerCity = dealerCity[0];

				dealerCity = dealerCity.toLowerCase();
				if (dealerCity === 'москва и подмосковье') {
					dealerCity = 'москва';
				};
				var specialClass = dp.special === '1' ? 'special' : '';
				var waClass = dp.wa === '1' ? 'wa' : '';
				var ratingClass = dp.rating === '1' ? 'rating' : '';

				var template = _.template($('#dealerTemplate').html(), {
					name: dp.name,
					address: dp.address,
					phone: dp.phone,
					site: '<a target="_blank" href="' + dp.site + '" >Перейти на сайт</a>',
					email: '<a href="mailto:' + dp.email + '">' + dp.email + '</a>',
					encodePhone: dp.encodePhone,
					city: dealerCity,
					special: specialClass,
					wa: waClass,
					id: dp.id,
					rating: ratingClass,
					code: dp.code
				});

				myBalloonContentLayout = ymaps.templateLayoutFactory.createClass(
					template
				);

				let point = {
					type: 'Feature',
					id: pointNum,
					geometry: {
						type: 'Point',
						coordinates: [dp.latitude, dp.longitude]
					},
					properties: {
						pointId: dp.id,
						hintContent: dp.name,
						address: dp.address,
						phone: dp.phone,
						site: dp.site,
						dealerId: dp.code,
						balloonContent: 'Содержание балуна',
						city_id: dp.city_id
					},
					options: {
						iconLayout: 'default#image',
						iconImageHref: pointImage,
						hideIconOnBalloonOpen: false,
						balloonShadow: false,
						// balloonLayout: MyBalloonLayout,
						balloonContentLayout: myBalloonContentLayout,
						balloonMaxWidth: 220,
					}
				};


				self.points.push(point);
			}


			self.objectManager.add(self.points);
			self.myMap.geoObjects.add(self.objectManager);

			self.objectManager.events.add('click_', function (e) {
				var objectId = e.get('objectId');

				obj = self.objectManager.objects.getById(objectId);

				if (!obj) {
					obj = e.originalEvent;
				}

				var dealerTemplateInfo = _.template($('#dealerTemplateInfo').html(), {
					address: obj.properties.address,
					phone: obj.properties.phone,
					site: '<a target="_blank" href="' + obj.properties.site + '" >' + obj.properties.site + '</a>'
				});

				$('#selected-dealer').html(dealerTemplateInfo);
				$('.selected-dealer__wrap').addClass('active');

				//открыть попап у точки
				self.objectManager.objects.each(function (item) {
					if (obj.properties.pointId == item.properties.pointId) {
						self.objectManager.objects.balloon.open(item.id);

						//Записываем выбранного дилера
						currentSelectedDealer = item.properties.dealerId;
					}
				})
			})
		},
		findDealers: function (searchValue, searchId) {
			var self = this,
				dealerNum,
				findedList = new Array();

			// Clear before paste
			if (self.searchType === 'city') {
				$('#dropdown-dealerlisting .nano .dropdown-list').html('');
			};

			// find it
			if (self.searchType === 'dealer') { // process dealer dropdown item click
				var findNum;
				isFinded = true;
				isDisableIcons = true;
				for (dealerNum in self.dealersArray) {
					var dealerName = self.dealersArray[dealerNum].name.toLowerCase();
					var dealerId = self.dealersArray[dealerNum].id;

					if (searchId > 0) {
						if (dealerId == searchId) {
							findedList.push({dealer: self.dealersArray[dealerNum], num: dealerNum});
						}
					}
					else if (dealerName.indexOf(searchValue.toLowerCase()) != -1) {
						findedList.push({dealer: self.dealersArray[dealerNum], num: dealerNum});
					}
				}
				for (findNum in findedList) {

				}
				isDisableIcons = false;

				var city = findedList[0].dealer.city_id;

				if ('util' in ymaps) {
					if (findedList.length != 0) {
						if (self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId }); })) {
							var obj = ymaps.util.bounds.getCenterAndZoom(self.objectManager.setFilter(function (object) {
								return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId });
							}).getBounds(), self.myMap.container.getSize());

							self.myMap.setCenter(obj.center, obj.zoom);

							//Чтобы с карты не убирались точки вне целевого региона
							self.objectManager.setFilter(function (object) { return city == object.properties.city_id && i30NAllowDealers.indexOf(object.properties.dealerId) >= 0 || currentCar !== 'i30 N' && city == object.properties.city_id; })
						}
					}

					if (findedList.length === 1) {
						self.myMap.setZoom(15);
					}
				}

				for (findNum in findedList) {
					var findItem = findedList[findNum];
					var target;

					//console.log(findItem);

					self.objectManager.objects.each(function (item) {
						if (findItem.dealer.id == item.properties.pointId) {
							target = item;
						}
					})

					self.objectManager.events.fire('click_', target);
				}

			} else { // or find dealers in selected location
				var findNum;
				isFinded = false;
				isDisableIcons = true;

				//Добавляем дилеров в список (исключая дилеров, в которых нет выбраной тачки)
				var filteredDealersCities = [];

				for (dealerNum in self.dealersArray) {
					 var dealerCityId = self.dealersArray[dealerNum].city_id;

					 if (currentCar === 'i30 N' && i30NAllowDealers.indexOf(self.dealersArray[dealerNum].code) < 0) {
						continue;
					}

					filteredDealersCities.push(+self.dealersArray[dealerNum].city_id)

					if (typeof(searchValue) == 'string') {
						var findedCitiesList = searchValue.split(',');

						for (var i = 0; i < findedCitiesList.length; i++) {
							if (findedCitiesList[i] == dealerCityId) {
								 findedList.push({dealer: self.dealersArray[dealerNum], num: dealerNum});
							}
						}
					} else {
							 if (searchValue == dealerCityId) {
								findedList.push({dealer: self.dealersArray[dealerNum], num: dealerNum});
							 }
					}
				}



				for (findNum in findedList) {
					var findItem = findedList[findNum];
					var $container = $('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list');
					var item = document.createElement('li');

					$(item).attr('data-id', findItem.dealer.id);
					$(item).html(findItem.dealer.name);
					$(item).addClass('dropdown-item');

					//оставляем только одного дилера белгород
					if(findItem.dealer.id !== "249"){
						continue;
					}

					$container.append(item);
				}

				//Изменим высоту дропдауна
				var height = $('#dropdown-dealerlisting .dropdown-item:not(.first)').length * $('#dropdown-dealerlisting .dropdown-item:not(.first,.divider)').outerHeight();

				if (height > 233) {
					$('.dealerlistdropdown #dropdown-dealerlisting .nano').css('height', '233px')
				} else {
					$('.dealerlistdropdown #dropdown-dealerlisting .nano').css('height', height + 'px')
				}

				$("#dropdown-dealerlisting .nano").nanoScroller({
					alwaysVisible: true,
					sliderMinHeight: 45,
					sliderMaxHeight: 45,
					preventPageScrolling: true
				});

				//Исключим из списка городов города, в которых нет дилеров
				$('#dropdown-dealercitylisting .dropdown-item:not(.first,.divider)').each(function() {
					var searchValue = $(this).data('value');

					if (typeof(searchValue) == 'string') {
						var findedCitiesList = searchValue.split(','),
							flag = false;

						for (var i = 0; i < findedCitiesList.length; i++) {
							if (filteredDealersCities.indexOf(+findedCitiesList[i]) >= 0) {
								flag = true;
							}
						}

						if (flag) {
							$(this).show();
						} else {
							$(this).hide();
						}
					} else {
						if (filteredDealersCities.indexOf(searchValue) < 0) {
							$(this).hide();
						} else {
							$(this).show();
						}
					}
				})

				//Если у этого ророда нет доступных дилеров, ставим активным первый город в списке
				if ($('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list .dropdown-item').length === 0) {
					$('#dropdown-dealercitylisting .dropdown-item:not(.first,.divider):first-child').trigger('click');
				}

				$('#dropdown-dealerlisting .dropdown-item.first').text('Выберите дилера');
				$('#selected-dealer').html('');
				$('.selected-dealer__wrap').removeClass('active');

				// sort result
				   var $elements = $('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list .dropdown-item');
				   var $target = $('.dealerlistdropdown #dropdown-dealerlisting .nano .dropdown-list');
				   $elements.sort(function (a, b) {
						var an = $(a).text(),
							 bn = $(b).text();
						if (an && bn) {
							 return an.toUpperCase().localeCompare(bn.toUpperCase());
						}
						return 0;
				   });

				   $elements.detach().appendTo($target);

				isDisableIcons = false;

				if ('util' in ymaps) {
					if (findedList.length != 0) {
						if (self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId }); })) {
							var obj = ymaps.util.bounds.getCenterAndZoom(self.objectManager.setFilter(function (object) {
								return findedList.some(function (obj) { return obj.dealer.id == object.properties.pointId });
							}).getBounds(), self.myMap.container.getSize());

							self.myMap.setCenter(obj.center, obj.zoom);

							//Чтобы с карты ну убирались точки вне целевого региона
							//self.objectManager.setFilter(function (object) { return findedList.some(function (obj) { return true }); })
						}
					}

					if (findedList.length === 1) {
						self.myMap.setZoom(12);
					}
				}

			}

			if (isDealerselected) { $('.js-dealer-map-selector').text('Дилер выбран') }
		}
	};

	ymaps.ready(mapObj.initialize.bind(mapObj));

// document functionality
//--------------------------------------------------------------------------------------
	$('#phone').mask("+7 (999)999-99-99");
// dropdown slider plugin init

	$("#dropdown-carlisting .nano").nanoScroller({
		alwaysVisible: true,
		sliderMinHeight: 45,
		sliderMaxHeight: 45,
		preventPageScrolling: true
	});
	$("#dropdown-dealercitylisting .nano").nanoScroller({
		alwaysVisible: true,
		sliderMinHeight: 45,
		sliderMaxHeight: 45,
		preventPageScrolling: true
	});
	$("#dropdown-dealerlisting .nano").nanoScroller({
		alwaysVisible: true,
		sliderMinHeight: 45,
		sliderMaxHeight: 45,
		preventPageScrolling: true
	});

	if (!mapReady) {
		currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').text();
		mapObj.searchType = 'city';
		mapObj.findDealers(currentCity);
		mapReady = true;
	};

// popups
	$(document).on('click', '.show-legal', function (e) {
		e.preventDefault();
		$('.legal-wrap').fadeIn();
	});
	$(document).on('click', '.show-map', function (e) {
		e.preventDefault();
		$('.map-overlayed').fadeIn();
		$('.map_canvas_wrap').addClass('vis');

		if (isDealerselected) {
			var currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
			var currentDealerId = $('#dropdown-dealerlisting .dropdown-item.active').attr('data-id');
			mapObj.searchType = 'dealer';
			mapObj.findDealers(currentDealer, currentDealerId);
		} else {
 			currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').data('value');
			mapObj.searchType = 'city';
			mapObj.findDealers(currentCity);
		};
	});
	$(document).on('click', '.test-drive-popup', function (e) {
		e.stopImmediatePropagation();
	});
// close popups
	$(document).on('click', '.map-overlayed', function (e) {
		e.preventDefault();
		$('.map-overlayed').fadeOut();
		$('.map_canvas_wrap').removeClass('vis');
	});
	$(document).on('click', '.closeMap', function (e) {
		e.preventDefault();
		$('.map-overlayed').fadeOut();
		$('.map_canvas_wrap').removeClass('vis');
	});
	$(document).on('click', '.closeIt', function (e) {
		e.preventDefault();
		$('.overlayed').fadeOut();
	});
	$(document).on('click', '.overlayed', function (e) {
		$('.overlayed').fadeOut();
	});
	$(document).keydown('click', function (e) {
		if (e.keyCode == 27) {
			$('.overlayed').fadeOut();
		};
	});

//		  --------------------------------------------------------------------------
// dropdown listener


	setTimeout(function () {
		$('.dropdown-item').trigger('click');
		console.log('click');
	}, 2000);

// exclude dealer list
	$(document).on('click', '.dropdown-item', function (event) {
		event.preventDefault();
		var dropDownMenuTarget = $( event.target ),
			self = dropDownMenuTarget,
			$this = $(this).parents('.drop-it-down'),
			carItem = $('#dropdown-carlisting .dropdown-list .dropdown-item');
		if ( $(event.target).is('.nano-slider') ) {
			return
		} else	{
			$('.dealerlistdropdown').removeClass('incorrect');
			if (mapLoaded) { // open droppers
				if ( $this.hasClass('is-dropped') ) {
					$this.removeClass('is-dropped');
							if (dropDownMenuTarget = $('#dropdown-dealerlisting')) {
								if (isDealerselected) {
									var currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
									$('#dropdown-dealerlisting .dropdown-item.first').removeClass('first-active').text(currentDealer);
								} else {
									$('#dropdown-dealerlisting .dropdown-item.first').addClass('first-active').text('Выберите дилера');
								};
							};
							if ( self.is(carItem) ) {
									carMenuClick(self);
							}
				} else { // close droppers
					$(dropDownMenu).each( function () {
						$(dropDownMenu).removeClass('is-dropped');
					});
					$this.addClass('is-dropped');
				}
			}
		};
	});

// closing droppers action
	$(document).on('mousedown', 'body', function (event) {
		var target = $( event.target ),
			dropDownMenuTarget = $('.is-dropped').find('*');
		if ( !target.is($(dropDownMenuTarget)) ) {
			$(dropDownMenu).each( function () {
				$(dropDownMenu).removeClass('is-dropped');
				if (dropDownMenuTarget = $('#dropdown-dealerlisting')) {
					if (isDealerselected) {
						var currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
						$('#dropdown-dealerlisting .dropdown-item.first').removeClass('first-active').text(currentDealer);
					} else {
						$('#dropdown-dealerlisting .dropdown-item.first').addClass('first-active').text('Выберите дилера');
					};
				};
			});
		}
	});

// cars dropper listener
	currentCar = $('#dropdown-carlisting .dropdown-item.active').text(),
	carLink = function(link) {
			var links = {
				'Equus':				  'Equus',
				'Genesis':				'GenesisNew',
				'Genesis Coupe':		'GenesisNew',
				'i40':					 'i40',
				'i40 wagon':		'i40-Wagon',
				'Elantra':				'Elantra',
				'Veloster':				 'Veloster',
				'i30':					 'i30',
				'i30 3DR':				'i30-3dr',
				'i30 универсал':		'i30-Wagon',
				'Solaris':				'Solaris',
				'Solaris Хетчбек':		  'Solaris-5dr',
				'Grand Santa Fe':		 'GrandSantaFe',
				'Santa Fe':				 'SantaFe',
				'Santa Fe Premium':	   'SantaFePremium',
				'ix35':					  'ix35',
				'Tucson':			   'Tucson',
				'Creta':				  'Creta',
				'H-1':					 'H1',
				'Solaris New':			'Solaris',
				'Sonata':				'Sonata',
				'New Santa Fe':				'NewSantaFe',
				'New Tucson':			'NewTucson',
				'New Elantra':			'NewElantra',
				'i30 N':			'/i30N',
			};
			return links[link];
		},
	carImg = function(img) {
			var imgs = {
				'Equus':				'hw034141',
				'Genesis':				'genesis2014_big',
				'Genesis Coupe':		'hw034951',
				'i40':					'hw032533',
				'i40 wagon':		'hw014876',
				'Elantra':				'Elantra',
				'Veloster':				'hw014896',
				'i30':					'hw035821',
				'i30 3DR':				'hw071553',
				'i30 универсал':		'i30_wagon_gnb',
				'Solaris':				'hw015671',
				'Solaris Хетчбек':		'hw032984',
				'Grand Santa Fe':		'gsf',
				'Santa Fe':				'SantaFe',
				'Santa Fe Premium':		'hw060307_premuim',
				'ix35':					'hw014892',
				'Tucson':				'tucson',
				'Creta':				'creta',
				'H-1':					'H-1',
				'Solaris New':			'solaris_td',
				'Sonata':				'sonata_td',
				'New Santa Fe':				'NewSantaFe',
				'New Tucson':			'NewTucson',
				'New Elantra':			'new-elantra',
				'i30 N':			'i30N',
			};
			return imgs[img];
		};

	// change car link in first run
	$('.car-about').attr('href', carLink( $('#dropdown-carlisting .dropdown-item.active').text() ));

	var carMenuClick = function (itemClicked) {
		var self = itemClicked;
		//clear selected status
		if(!$(self).hasClass('first'))
		{
			$('#dropdown-carlisting .dropdown-item').removeClass('active');
			$(self).addClass('active');
		}
		//update dropper, change link and img
		currentCar = $('#dropdown-carlisting .dropdown-item.active').attr('model');
		currentCarCode = $('#dropdown-carlisting .dropdown-item.active').attr('data-model');
		$('#dropdown-carlisting .dropdown-item.first').text(currentCar);
		$('#dropdown-carlisting .dropdown-item.first').attr('data-model', currentCarCode);
		$('.car-about').attr('href', carLink(currentCarCode));
		$(".currentCarImg").attr('src', 'https://www.hyundai.ru/media/img/test_drive_imgs/' + carImg(currentCarCode) + '.png');

		if(self.data('model') == 'Solaris New')
			$('#creta-test-drive').css('display', 'block');
		else
			$('#creta-test-drive').css('display', 'none');

		//Обновим список дилеров, чтобы убрать дилеров, у которых нет этой тачки
		searchValue = $('#dropdown-dealercitylisting .dropdown-item.active').data('value');

		isDealerselected = false;
		currentDealer = '';
		mapObj.searchType = 'city';
		mapObj.findDealers(searchValue);
	};

// location dropper listener
	$(document).on('click', '#dropdown-dealercitylisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isDealerselected = false;
		// clear dealer selecting first
		$('#dropdown-dealerlisting .dropdown-item.first').addClass('first-active').text('Выберите дилера');
		$('.selected-dealer__wrap').removeClass('active');
		$('#dropdown-dealercitylisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentCity = $('#dropdown-dealercitylisting .dropdown-item.active').text();
		$('#dropdown-dealercitylisting .dropdown-item.first').text(currentCity);
		// clear dealer selecting
		$('#selected-dealer').html('');
		$('#dropdown-dealerlisting').removeClass('isDealerselected');
		$('#dropdown-dealerlisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});

		searchValue = $('#dropdown-dealercitylisting .dropdown-item.active').data('value');

		currentDealer = '';
		mapObj.searchType = 'city';
		mapObj.findDealers(searchValue);
	});

// dealer dropper listener
	$(document).on('click', '#dropdown-dealerlisting .dropdown-item:not(.first,.divider)', function (e) {
		e.preventDefault();
		isDealerselected = true;
		$('.selected-dealer__wrap').addClass('active');

		$('#dropdown-dealerlisting .dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		//update menu - selected:
		currentDealer = $('#dropdown-dealerlisting .dropdown-item.active').text();
		$('#dropdown-dealerlisting .dropdown-item.first').text(currentDealer);
		// dealerListTemp
		// update map:
		mapObj.searchType = 'dealer';

		currentDealerId = $('#dropdown-dealerlisting .dropdown-item.active').data('id');

		$('#dropdown-dealerlisting .dropdown-item.first').attr('data-id', currentDealerId);

		mapObj.findDealers(currentDealer, currentDealerId);
	});

// select dealer on map listener
	$(document).on('click', '.js-dealer-map-selector', function(e) {
		e.preventDefault();
		isDealerselected = true;
		var currentCityFromPopUp = $(this).data('address').toString().toLowerCase(),
			_id = $(this).attr('data-id');

		$('#dropdown-dealercitylisting .dropdown-item').each(function () {
			var self = this,
			searchValue =  $(self).text().toString().toLowerCase(),
			dealerCityCurrent = currentCityFromPopUp;
			searchValue = searchValue.toLowerCase();

			dealerCityCurrent = dealerCityCurrent.split(',');
			dealerCityCurrentFinded = dealerCityCurrent[0];

			if (dealerCityCurrentFinded.indexOf(searchValue) != -1) {
				$(self).trigger('click');
			};
		});
		$('#dropdown-dealerlisting .dropdown-item').each(function () {
			var _this = $(this);

			if (void 0 !== _this.attr('data-id') && _id === _this.attr('data-id')) {
				$(this).trigger('click');
			}
		});

		if (!isDealerselected) {
			$('#dropdown-dealerlisting').removeClass('isDealerselected');
		} else {
			$('#dropdown-dealerlisting').addClass('isDealerselected');

			//Закрыть попап
			$('.map-overlayed').fadeOut();
			$('.map_canvas_wrap').removeClass('vis');
		}

		$(dropDownMenu).each( function () {
			$(dropDownMenu).removeClass('is-dropped');
		});

		//console.log(this);

	});

	//city list hook
	//it changes corrects dealer list order

	$('#dropdown-dealercitylisting').find('.dropdown-item').each(function(){
		if($(this).data('value').length != 0)
		{
			idlist = $(this).data('value').toString().split(',');
			id = '19';

			if(jQuery.inArray( id, idlist ) != -1) {
				 $(this).insertBefore('.dropdown-list.nano-content .dropdown-item.divider');
			}
		}
	});
	$('#dropdown-dealercitylisting .dropdown-item[data-value="17"]').insertBefore('.dropdown-list.nano-content .dropdown-item.divider');

	// fix tab focusing
	$(document).on('focus blur mousedown', '.drop-it-down[tabindex]', function(e){
		e.preventDefault();
		if (!$(this).hasClass('is-dropped') && e.type === 'focusin') {
			$(this).find('.dropdown-item.first').trigger('click');
		} else if ($(this).hasClass('is-dropped') && e.type === 'focusout') {
			$(this).find('.dropdown-item.first').trigger('click');
		}
	});
	$('.dropdown-list.nano-content').each(function(){
		$(this).attr('tabindex', '-1');
	});

	// validate form

	$('.controls__wrap input').on('input', function() {
		if ($(this).is('[name*=name]')) {
			$(this).val($(this).val().capitalize());
		}
	});

	// submit processing
	$(document).on('click', '.send-req', function (e) {
		e.preventDefault();
		var $name = $('#name'),
			$surname = $('#surname'),
			$phone = $('#phone'),
			$email = $('#email'),
			$agree = $('#agree_rules');

		if (currentDealer) {
			if ($name.val() == '') {
				$name.parent().addClass('incorrect')
				return;
			}
			if ($surname.val() == '') {
				$surname.parent().addClass('incorrect')
				return;
			}
			if ($phone.val() == '') {
				$phone.parent().addClass('incorrect')
				return;
			} else if ( $phone.val().indexOf('_') != -1 ) {
				$phone.parent().addClass('incorrect')
				return;
			}
			if ($email.val() == '') {
				$email.parent().addClass('incorrect')
				return;
			} else {
				var vEmail = /^[-._A-Za-z0-9]+@(?:[A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,6}/;
				var Email = $email.val();
				var firstName = vEmail.exec(Email);
				if (!firstName)
				{
					$email.parent().addClass('incorrect')
					return;
				}
			}
			if ($agree.is(':not(:checked)')) {
				$('.legal-info').addClass('incorrect')
				return;
			}
			var modelCode = $('#dropdown-carlisting .dropdown-item.active').attr('data-model');
			if(modelCode == '')
				modelCode = $('#dropdown-carlisting .dropdown-item.active').data('model');


			$('.layout-black').show();

			delta = 1000;
			prgrss = 0;
			step = 3;
			respFlag = '';
			isResult = false;

			drawProcessSlow();

			$.post(
				'https://www.hyundai.ru/requestnew/sendcrm',
				{
					name: $name.val(),
					surname: $surname.val(),
					city: $('#dropdown-dealercitylisting .dropdown-item.active').text(),
					phone: $phone.val(),
					email: $email.val(),
					model: modelCode,
					dealer: currentSelectedDealer,
					salutation: $('input[name=mrOrms]:checked').val(),
					campaignCode: !!window.campaignCode,
					code: window.campaignCode,
					from_url: window.location.href
				},
				function(response) {
					 isResult = true;
					 respFlag = response;
/*
					if (response === 'Y') {
						$('#test-drive-response h2').text("Запрос успешно отправлен");
						$('#test-drive-response .text').show();
						$('.response-wrap').fadeIn();
						setTimeout(function () {
							$('.response-wrap').fadeOut();
						}, 10000);

						$name.val(''),
						$surname.val(''),
						$phone.val(''),
						$email.val(''),
						$agree.prop('checked', false);



						dataLayer2.push({
							'countrycode': 'RU',
							'pagename': 'confirmationtestdrive',
							'carmodelname': testDrive.model
						});

						//RuTarget
						var _rutarget = window._rutarget || [];
						_rutarget.push({'event': 'thankYou'});
						//RuTarget

					} else {
						$('#test-drive-response .skyblue').text("Извините, сервис временно недоступен");
						$('#test-drive-response .text').hide();
						$('.response-wrap').fadeIn();
						setTimeout(function () {
							$('.response-wrap').fadeOut();
						}, 10000);
					}
*/
				}
			);
		} else {
			$('.dealerlistdropdown').addClass('incorrect');
		};
	});
	$('.controls__wrap input').focus(function () {
		$(this).parent().removeClass('incorrect');
	});
	$('#agree_rules').change(function() {
		$('.legal-info').removeClass('incorrect');
	});
});

function drawProcessSlow() {
	prgrss += step;

	stage = prgrss / 100;
	progressRingDraw(stage);

	if (!isResult) {
		setTimeout('drawProcessSlow()', delta)
	}
	else {
		delta = 300;
		step = parseInt((99 - prgrss) / 5);
		setTimeout('drawProcessFast()', delta)
	}
}
function drawProcessFast() {
	prgrss += step;

	if (prgrss > 100) prgrss = 100;

	stage = prgrss / 100;
	progressRingDraw(stage);

	if (prgrss < 100) {
		setTimeout('drawProcessFast()', delta)
	}
	else {
		setTimeout('showResult()', 500)
	}
}
function showResult() {
	var $name = $('#name'),
		$surname = $('#surname'),
		$phone = $('#phone'),
		$email = $('#email'),
		$comment = $('textarea#сomment'),
		enginetype = $('#dropdown-typelisting .dropdown-item.first').text(),
		$mileage = $('#mileage'),
		$vin = $('#vin'),
		$agree = $('#agree_rules');

	var modelCode = $('#dropdown-carlisting .dropdown-item.active').attr('data-model');

	if (modelCode == '') {
		modelCode = $('#dropdown-carlisting .dropdown-item.active').data('model');
	}

	$('.layout-black').hide();

	if (respFlag === 'Y') {
		$('#test-drive-response h2').text("Запрос успешно отправлен");
		$('#test-drive-response .text').show();
		$('.response-wrap').fadeIn();
		setTimeout(function () {
			$('.response-wrap').fadeOut();
		}, 10000);

		$name.val(''),
		$surname.val(''),
		$phone.val(''),
		$email.val(''),
		$agree.prop('checked', false);

		dataLayer.push({
	  		'event': 'custom_event',
	  		'category' : 'Тест-драйв',
	  		'action': 'Отправка заявки',
	  		'label' : modelCode
	  	});

		dataLayer2.push({
			'countrycode': 'RU',
			'pagename': 'confirmationtestdrive',
			'carmodelname': modelCode
		});

		//RuTarget
		var _rutarget = window._rutarget || [];
		_rutarget.push({'event': 'thankYou', 'conv_id': 'testdrive', 'sku': modelCode});
		//RuTarget

	} else {
		$('#test-drive-response h2').text("Извините, сервис временно недоступен");
		$('#test-drive-response .text').hide();
		$('.response-wrap').fadeIn();
		setTimeout(function () {
			$('.response-wrap').fadeOut();
		}, 10000);
	}

	delta = 1000;
	prgrss = 0;
	step = 3;
	respFlag = '';
	isResult = false;
}
