// chrome scrollfix; 25 jan 2016
$(document).ready(function () {
	var isFinded = false,
		isDisableIcons = false,
		mapLoaded = false,
		dealerInfoBoxCounter = 0,
		currentCity = 'Старый Оскол',
		address_setMapCenterRussia = "309537, Белгородская обл. г. Старый Оскол, просп. Алексея Угарова, 22";
		isNanoBeingDragged = false;

	var mapObj = {
		initialize: function () {
			var self = this;
			this.latlng = undefined;
			this.infoWindow;
			this.markers = [];
			this.routeStart = undefined;
			this.routeEnd = undefined;
			this.routeMode = this.routeMode || 'DRIVING';
			this.routeMarkerId = undefined;
			this.searchType = "city"; // dealer or city
			this.dealersArray = [];
			this.geocoder = new google.maps.Geocoder();
			this.directionsService = new google.maps.DirectionsService;
			this.directionsDisplay = new google.maps.DirectionsRenderer;
			this.mapOptions = {
				zoom: 6,
				scrollwheel: false,
				backgroundColor: '#fff',
				zoomControl: true,
				zoomControlOptions: {
					position: google.maps.ControlPosition.LEFT_CENTER,
					//style: google.maps.ZoomControlStyle.LARGE
				},
				scaleControl: false,
				streetViewControl: false,
				mapTypeControl: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: [
					{
						"featureType": "administrative",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"saturation": -100
							},
							{
								"lightness": 20
							}
						]
					},
					{
						"featureType": "landscape.man_made",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "simplified"
							},
							{
								"saturation": -60
							},
							{
								"lightness": 10
							}
						]
					},
					{
						"featureType": "landscape.natural",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "simplified"
							},
							{
								"saturation": -60
							},
							{
								"lightness": 60
							}
						]
					},
					{
						"featureType": "poi",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "off"
							},
							{
								"saturation": -100
							},
							{
								"lightness": 60
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"saturation": -100
							},
							{
								"lightness": 40
							}
						]
					},
					{
						"featureType": "transit",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "off"
							},
							{
								"saturation": -100
							},
							{
								"lightness": 60
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "on"
							},
							{
								"saturation": -10
							},
							{
								"lightness": 30
							}
						]
					}
				]
			};

			this.map = new google.maps.Map(document.getElementById("map_canvas"), self.mapOptions);
			this.directionsDisplay.setMap(this.map);
			this.getAllPoints(this.renderMarkers);
			this._setMapCenterRussia();
			//this.checkGeoLocationApi();
			return this;
		},

		getAllPoints: function (callback) {
			var self = this;
			$.getJSON('/request/getalldealers/', function (data) {
				console.log(data);
				callback(data, self);
			});
		},

		renderMarkers: function (data, self) {
			var numPoint;
			var markerId = 0;
			self.dealersArray = data;

			// define info window options;
			var infoWindowOptions = {
				content: 'nocontent',
				pixelOffset: new google.maps.Size(180, 180)
			}
			// have to use infoWindow declared in mapObj scope;
			self.infoWindow = new google.maps.InfoWindow(infoWindowOptions);

			for (numPoint in data) {
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(data[numPoint].latitude, data[numPoint].longitude),
					map: self.map,
					title: data[numPoint].name.replace('<span>', '').replace('</span>', ''),
					title_full: data[numPoint].name,
					email: data[numPoint].email,
					phone: data[numPoint].phone,
					encodePhone: data[numPoint].encode_phone,
					address: data[numPoint].address,
					site: data[numPoint].site,
					icon: '/media/img/icon_df_map_dealer_hyundai_off_new.png',
					cityId: data[numPoint].city_id,
					markerId: data[numPoint].id,
					special: data[numPoint].special,
					wa: data[numPoint].wa
				});
				self.markers.push(marker);

				/*
				 var infoWindowOptions = {
				 content: 'nocontent',
				 pixelOffset: new google.maps.Size(-280,240)
				 }
				 var infoWindow = new google.maps.InfoWindow(infoWindowOptions);
				 */

				// close infoWindows
				// before define changing icon as function
				var removeMarkersActivity = function () {
					for (var i = 0; i < self.markers.length; i++) {
						self.markers[i].setIcon('/media/img/icon_df_map_dealer_hyundai_off_new.png');
					}
					;
				};



				google.maps.event.addListener(self.infoWindow, 'closeclick', function () {
					self.setMarkersActivity();
				});

				// info window style
				var clearGmStyle = function () {
					var gmObj = $('.gm-style'),
						obj = gmObj.find('.gm-style-iw');
					obj.each(function () {
						var objParent = obj.parent();
						obj.removeAttr('style');
						$('.gm-style-parent').css({'width': '', 'height': ''});
						obj.parent().addClass('gm-style-parent');
						$('.gm-style-parent').parent().css({'width': '', 'height': ''});
						$('.gm-style-parent div').eq(-1).children().addClass('hideThis');
						$('.gm-style-parent div').eq(-1).addClass('infoWindow-close');
						$('.gm-style-parent div').first().addClass('hideThis');
						$('.gm-style-parent').removeAttr('style');
					});
				};
				google.maps.event.addListener(marker, 'click', (function (marker, numPoint) {
					return function () {
						if (isDisableIcons === false) {
							removeMarkersActivity();
							if (marker.special === '1') {
								marker.setIcon('/media/img/icon_df_map_dealer_special_on.png');
							} else {
								marker.setIcon('/media/img/icon_df_map_dealer_hyundai_on_new.png');
							}
						}
						var dealerCity = marker.address;
						dealerCity = dealerCity.split(',');
						dealerCity = dealerCity[0];

						dealerCity = dealerCity.toLowerCase();

						;
						var specialClass = marker.special === '1' ? 'special' : '';
						var waClass = marker.wa === '1' ? 'wa' : '';
						var template = _.template($('#dealerTemplate').html(), {
							name: marker.title_full,
							address: marker.address,
							phone: marker.phone,
							site: '<a target="_blank" href="' + marker.site + '" >' + marker.site + '</a>',
							email: '<a href="mailto:' + marker.email + '">' + marker.email + '</a>',
							encodePhone: marker.encodePhone,
							city: dealerCity,
							special: specialClass,
							wa: waClass,
							id: marker.markerId
						});
						var dealerInfoBoxObj = $('.dealer-info-box');
						var dealerInfoBoxObjDevider = ('<div class="dealer-info-box-devider"></div>');
						if (isDisableIcons === false) {
							self.map.setCenter(marker.position);
							self.map.panBy(160, 0);
							self.infoWindow.setContent(template);
						//	self.infoWindow.open(self.map, marker);
							clearGmStyle();
							self.routeEnd = marker.position;
							self.routeMarkerId = marker.markerId;
						} else {
							self.infoWindow.close();
							$(dealerInfoBoxObj).append(template);
							dealerInfoBoxCounter = ++dealerInfoBoxCounter;
							if (dealerInfoBoxCounter > 2) {
								$(dealerInfoBoxObj).append(dealerInfoBoxObjDevider);
								dealerInfoBoxCounter = 0;
							}
							;
						}
					}
				})(marker, numPoint));
			}
		},
		findDealers: function (searchValue) {
			var self = this,
				dealerNum,
				findedList = new Array();

			// Clear before paste
			$('.dealer-info-box').html('');
			dealerInfoBoxCounter = 0;
			for (var i = 0; i < self.markers.length; i++) {
				self.markers[i].setIcon('/media/img/icon_df_map_dealer_hyundai_off_new.png');
			}

			if (self.searchType === 'dealer') {
				var findNum;
				isFinded = true;
				isDisableIcons = true;
				for (dealerNum in self.dealersArray) {
					var dealerName = self.dealersArray[dealerNum].name.toLowerCase();
					if (dealerName.indexOf(searchValue.toLowerCase()) != -1) {
						findedList.push({dealer: self.dealersArray[dealerNum], num: dealerNum});
					}
				}
				for (findNum in findedList) {
					var findItem = findedList[findNum];
					var latLng = new google.maps.LatLng(findItem.dealer.latitude, findItem.dealer.longitude);
					self.map.setCenter(latLng);
					self.map.setZoom(10);
					new google.maps.event.trigger(self.markers[findItem.num], 'click');
				}
				isDisableIcons = false;
			} else {
				var findNum,
					bounds = new google.maps.LatLngBounds();
				isFinded = true;
				isDisableIcons = true;
				for (dealerNum in self.dealersArray) {
					var dealerCityId = self.dealersArray[dealerNum].city_id;
					if (typeof(searchValue) == 'string') {
						var findedCitiesList = searchValue.split(',');
						if (findedCitiesList.indexOf('19') >= 0)
							findedCitiesList = [19];

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
					new google.maps.event.trigger(self.markers[findItem.num], 'click');

					var icon = self.markers[findItem.num].special === '1' ? '/media/img/icon_df_map_dealer_special_on.png' : '/media/img/icon_df_map_dealer_hyundai_on_new.png';
					if (self.markers[findItem.num].markerId == 223)
						var icon = '/media/img/pin_showroom.png';

					self.markers[findItem.num].setIcon(icon);

					var latLngPoint = new google.maps.LatLng(findItem.dealer.latitude, findItem.dealer.longitude);
					bounds.extend(latLngPoint);
				}
				isDisableIcons = false;
				self.vAlignDealersGrid();
				var newLoc = $('.dropdown-item.active').text()
				this.geocoder.geocode({'address': newLoc}, function (results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						if (findedList.length > 1) {
							self.latlng = results[0].geometry.location;
							self.map.fitBounds(bounds);
						} else {
							self.map.setCenter(latLngPoint);
							self.map.setZoom(13);
						}
					}
				});

			}
		},
		_setMapCenterRussia: function () {
			var self = this;
			var setCity = function (city) {

				self.geocoder.geocode({'address': city}, function (results, status) {
					if (status == google.maps.GeocoderStatus.OK) {
						self.latlng = results[0].geometry.location;
						self.map.setCenter(self.latlng);
						self.map.setZoom(17);
					}
				});

			};

			setCity(address_setMapCenterRussia);

		},

		setMarkersActivity: function () {
			for (var i = 0; i < mapObj.markers.length; i++) {
				if (mapObj.markers[i].special === '1') {
					mapObj.markers[i].setIcon('/media/img/icon_df_map_dealer_special_on.png');
				} else {
					mapObj.markers[i].setIcon('/media/img/icon_df_map_dealer_hyundai_on_new.png');
				}
				if (mapObj.markers[i].markerId == 223)
					mapObj.markers[i].setIcon('/media/img/pin_showroom.png');
				//mapObj.markers[i].setIcon('/media/img/icon_df_map_dealer_hyundai_off_new.png');
			}
		},
		checkGeoLocationApi: function (createRoute) { // using navigator geolocation api
			var self = this;


			if (self.routeStart === undefined) { // check if we need origin coords
				if (navigator.geolocation) {
					// define functions
					function locatingError(error) { // handling errors

						//  console.warn('Location error: ',error);
						//  console.warn('Error code: '+error.code+'.');

						switch (error.code) {
							case 0: //
								//  console.warn('Something wents wrong: \nUnknown error.');
								break;
							case 1:
								//   console.warn('Something wents wrong: \nAccess denied by navigator.');
								break;
							case 2:
								//  console.warn('Something wents wrong: \nPosition unavailable.');
								break;
							case 3: // we don't need this, during Timeout: infinity (default);
								//   console.warn('Something wents wrong: \nTimed out.');
								break;
							default: // anyway...
								//   console.warn('Something wents wrong: \nUnknown error.');
								break;
						}
					}

					function locatingSuccess(position) { // we've got coord succesfull
						//	console.info('Navigator geolocation status: OK');
						//   console.info('Location accuracy: ' + position.coords.accuracy + 'meters.');

						self.routeStart = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
						if (createRoute) {//create routing or just show route button?
							self.createRoute(); // now we can show create route
						} else {
							self.showRouting(); // now we can show location button
						}
					}

					navigator.geolocation.getCurrentPosition(locatingSuccess, locatingError, {enableHighAccuracy: true}); // initialize Navigator Geolocation API
				} else {
					//  console.warn('Something wents wrong: Geolocation is not supported by your Browser.');
				}
			} else { // we have all we need; just create my direction
				//  console.info('Allright! Create route only!');
				self.createRoute();
			}
		},
		showRouting: function () {
			var self = this;
			//  console.log('OK, lets show the Button...');
			$('#map_canvas').removeClass('no-directions');
		},
		createRoute: function (mode) { // create directions on the map
			//	console.info('Creating Route...');
			var self = this;
			mode = mode || self.routeMode;

			//	console.info('Travel Mode: '+mode);

			if (self.routeStart === undefined) { // return if no dealer was selected
				//     console.warn('Route Start coords does not exist! Trying to get coords from Navigator Geolocation API...');
				self.checkGeoLocationApi(true);
				return false;
			} else if (self.routeEnd === undefined) { // return if no dealer was selected
				//    console.warn('Route End coords does not exist!');
				return false;
			}
			var request = {
				origin: self.routeStart,
				destination: self.routeEnd,
				travelMode: google.maps.TravelMode[mode]
			};
			self.directionsService.route(request, function (response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
					self.directionsDisplay.setDirections(response);
				}
			});
		},
		vAlignDealersGrid: function () {
			var $element = $('.dealer-info-box').find('.dealer-info');
			$element.each(function () {
				var _this = $(this),
					_thisH = $(this).find('.dealer-address').outerHeight();

				if (_thisH > 45) {
					var _checkArray = [],
						_i = _this.index();
					// go next
					for (; _i <= $element.length; _i++) {
						_checkArray.push($element.eq(_i)); // push this and next elements
						if (!$element.eq(_i).next().is('.dealer-info')) break; // if a next one isn't a dealer info element – break;
					}
					// go back
					if (_i > 0) {
						_i = _this.index(); // reset indexes
						for (; _i > -1; _i--) {
							if (_i !== _this.index()) _checkArray.push($element.eq(_i)); // thing this element already exists in the checking array; so push only previous elements;
							if (!$element.eq(_i).prev().is('.dealer-info')) break; // if a previous element is not a siblings dealer info – break this loop;
						}
					}
				}
				if (_checkArray) {
					var a = 0,
						b;
					for (var i = 0; i < _checkArray.length; i++) {
						b = _checkArray[i].find('.dealer-address').outerHeight();
						if (a < b) a = b;
					}
					for (var i = 0; i < _checkArray.length; i++) {
						_checkArray[i].find('.dealer-address').outerHeight(a);
					}
				}
			});
		}
	};

	mapObj.initialize();

// actions on map loaded
	google.maps.event.addListener(mapObj.map, 'idle', function () {
		if (!mapLoaded) {
			$('.dropdown-item.active').trigger('click');
			$('.dropdown-item.first').text($('.dropdown-item.active').text());
			mapLoaded = true;
		}
	});

// directions
	$(document).on('click', '.js-build-direction', function (e) {
		e.preventDefault();
		/*

		 var $this = $(this);
		 if (!$this.hasClass('active')) {
		 var mode = $this.data('type');
		 $('.js-build-direction').removeClass('active');
		 $this.addClass('active');
		 }
		 */
		mapObj.createRoute(self.routeMode);
	});

// OPENIN
	// prevent close menu if nano scrollbar has been drugged
	$(document).mouseup(function (e) {
		if ($('.nano-pane').hasClass('active')) {
			isNanoBeingDragged = true;
		} else {
			isNanoBeingDragged = false;
		}
	});
	$(document).on('click', '.drop-it-down', function (event) {
		if (isNanoBeingDragged) {
			return
		} else {
			if ($('.dealer__location-dropdown').hasClass('is-dropped')) {
				// closing
				currentCity = $('.dropdown-item.active').text();
				$('.dealer__location-dropdown').stop().animate({
					height: 45
				}, 200, function () {
					$('.dropdown-item.first').removeClass('first-active').text(currentCity);
				});

				$('.dealer__location-dropdown').removeClass('is-dropped');
			} else {
				// opening
				$('.dealer__location-dropdown').stop().animate({
					height: 290
				}, 200);
				$('.dropdown-item.first').addClass('first-active').text('Выберите город');

				$('.dealer__location-dropdown').addClass('is-dropped');
			}
		}
	});

	$(document).click(function (event) {
		if ($(event.target).closest(".dealer__location-dropdown").length || isNanoBeingDragged) return;
		if ($('.dealer__location-dropdown').hasClass('is-dropped')) {
			currentCity = $('.dropdown-item.active').text();
			$('.dealer__location-dropdown').stop().animate({
				height: 45
			}, 200, function () {
				$('.dropdown-item.first').removeClass('first-active').text(currentCity);
			});
			$('.dealer__location-dropdown').removeClass('is-dropped');
		}
		;
		event.stopPropagation();
	});
// click ddown item hook
	$(document).on('click', '.dropdown-item:not(.first,.divider)', function (e) {
		$('.dropdown-item').each(function () {
			$(this).removeClass('active');
		});
		$(this).addClass('active');
		currentCity = $('.dropdown-item.active').text();
		$('.dealer__map_results__city').text(currentCity);
		var searchValue = $('.dropdown-item.active').data('value');
		mapObj.findDealers(searchValue);
		$('.drop-it-down').stop().animate({
			height: 45
		}, 200, function () {
			$('.dropdown-item.first').removeClass('first-active').text(currentCity);
		});
		$('.drop-it-down').removeClass('is-dropped');
		e.stopImmediatePropagation();
	});

	$('.dealer__location-dropdown').find('.dropdown-item').each(function () {
		if ($(this).data('value').length != 0) {
			idlist = $(this).data('value').toString().split(',');
			id = '19';

			if (jQuery.inArray(id, idlist) != -1) {
				$(this).insertBefore('.dropdown-list.nano-content .dropdown-item.divider');
			}
		}
	});

	$('.dealer__location-dropdown .dropdown-item[data-value="17"]').insertBefore('.dropdown-list.nano-content .dropdown-item.divider');

	//$(".nano").nanoScroller({
	//	alwaysVisible: true,
	//	sliderMinHeight: 45
	//});

	$(window).load(function () {
		currentCity = $('.dropdown-item.active').text();
		$('.dropdown-item.active').trigger('click');
	});
	//currentCity = $('.dropdown-item.active').text(); // hmm...
});

$(function () {
	window.setTimeout(makeControlsBigger, 5000);
	function makeControlsBigger() {
		var $itemblock = $('div.gmnoprint').eq(3);
		var $itemblockchild = $itemblock.find('div[draggable="false"]');

		$itemblockchild.width(42);
		$itemblockchild.height(83);

		var $item = $itemblock.find('div[title="Увеличить"]');
		$item.width(42);
		$item.height(41);
		$item.children().eq(0).css('left', '13.5px');
		$item.children().eq(0).css('top', '13px');

		var $item2 = $itemblock.find('div[title="Уменьшить"]');
		$item2.width(42);
		$item2.height(41);
		$item2.children().eq(0).css('left', '13.5px');
		$item2.children().eq(0).css('top', '13px');
	}
});


// wa popup
$(function () {
	// bind events
	$(document).on('click', '.wa_link', showWa);
	$(document).on('click', '.wap__close', closeWa);
	$(document).on('keypress', function (ev) {
		ev['keyCode'] === 27 && closeWa()
	});

	// - render underscore template (set href to thr '.wap__ref' from target '.wa_link' node href)
	// - append to body
	// don't open twice
	function showWa(ev) {
		ev && ev.preventDefault();
		if ($('.wap.ready').length > 0) {
			return false;
		}

		var _waTpl = _.template($('#waTpl').html(), {refLink: (_.isUndefined(this.getAttribute) ? '#' : this.getAttribute('href'))});

		$(_waTpl)
			.hide()
			.appendTo('body')
			.fadeIn(500, function () {
				this.removeAttribute('style');
			})
			.addClass('ready')
			.on('click', function (ev) {
				var targetClasslist = ev.target.classList;

				if (targetClasslist.contains('wap') && targetClasslist.contains('ready')) {
					closeWa();
				}
			});
		document.body.style.overflow = 'hidden';
	}

	// - hide
	// - remove from the DOM
	function closeWa(ev) {
		ev && ev.preventDefault();
		$('.wap.ready').removeClass('ready').fadeOut(500, function () {
			$(this).remove();
			document.body.removeAttribute('style');
		});
	}
});