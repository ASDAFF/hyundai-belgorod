hpromiseView = (function($) {

  function hpromiseView(options) {
    var _this = this;
    this.$view = $(options.view);
    this.$toggle = $(options.toggle);
    this.addressList = [];
    this.viewType = 'list';

    this.map_marker_list = [];

    var googleMaps_is_init = false;
    try {
      googleMaps_is_init = google.maps;
    } catch (e) {}

    if (!googleMaps_is_init) {
      var googleScript = document.createElement('script');
      googleScript.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCg3II6UgahN4akFiKCe1Vjrm4wRMBPp8A&callback=initHpromiseMap';

      (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(googleScript);
    } else {
      initHpromiseMap();
    }

    $('body').on('google.map.ready', function() {
      _this.drawGoogleMap();
    });
  }

  hpromiseView.prototype.setView = function(viewType) {

    if (!viewType) {
      return false;
    }

    this.$toggle.removeClass('view-toggle__item--active');
    $('.js-' + viewType + '-view').addClass('view-toggle__item--active');

    switch (viewType) {
      case 'map':
        $('.js-dealer-list').hide();
        $('.js-dealer-map').addClass('active');
        $('body').addClass('show_map');
        initHpromiseMap();
        break;
      case 'list':
        $('.js-dealer-list').show();
        $('.js-dealer-map').removeClass('active');
        $('body').removeClass('show_map');
        break;
    }

    this.viewType = viewType;

    return true;

  };

  hpromiseView.prototype.setRegion = function(regionList) {
    if (!regionList) {
      return;
    }
    var regionListSplit = regionList.split(',');
    var regionAddressIdList = [];
    for (var i = 0; i < regionListSplit.length; i++) {
      regionAddressIdList.push($.trim(regionListSplit[i]));
    }
    var self = this;
    this.getAddressList(function(addressList) {
      var addressListHTML = '';

      var mapAddressLst = [];

      var ind = 1;

      for (var i = 0; i < regionAddressIdList.length; i++) {

        var addressCityId = regionAddressIdList[i];

        for (var j = 0; j < addressList.length; j++) {
          var addressListItem = addressList[j];
          var city_id = addressListItem.city_id;
          if (city_id == addressCityId) {
            // добавляю в список
            addressListHTML += self.getAddressHTML(addressListItem, ind);
            ind++;
            // добавляю в список карты
            if (addressListItem.latitude && addressListItem.longitude) {
              mapAddressLst.push(addressListItem);
            }
          }
        }


      }
      // добавляю на карту

      if (self.map_is_ready) {
        self.setMarkers(mapAddressLst);
      } else {
        $('body').on('google.map.ready', function() {
          self.setMarkers(mapAddressLst);
        });
      }

      $('.js-dealer-list').html(addressListHTML);

    });

  };

  hpromiseView.prototype.getAddressList = function(onGetFunc) {
    if (this.addressList.length < 1) {
      // Тут должен быть ajax, а пока
      this.addressList = hpromiseAddressList;
      onGetFunc(this.addressList);
    } else {
      onGetFunc(this.addressList);
    }

  };

  hpromiseView.prototype.getAddressHTML = function(addressItem, ind) {
    // console.log(addressItem);
    var wa_ico = '';
    if (addressItem.wa_ico === '1') {
      wa_ico = '<span class="wa_ico"></span>';
    }
    var new_standart = '';
    if (addressItem.new_standart === '1') {
      new_standart = ' new_standart_numb';
    }
    var tpl =
      '<div class="dealer-list__item">\
				<div class="dealer-list__address dealer-list__contacts-item">\
          <span class="numb__row' + new_standart + '">' + ind + '</span>\
					<div class="dealer-list__name">{$russian_name}' + wa_ico + '</div>\
					<div class="dealer-list__address">{$address}</div>\
				</div>\
				<div class="dealer-list__phone dealer-list__contacts-item">\
					<span class="dealer-list__phone-text">{$phone}</span>\
				</div>\
				<div class="dealer-list__site dealer-list__contacts-item">\
					<a class="dealer-list__site-link" href="{$site}">{$site}</a>\
				</div>\
			</div>';
    var out = this.renderTpl(tpl, addressItem);
    return out;

  };

  hpromiseView.prototype.renderTpl = function(tpl, vars) {
    // "Шаблонизатор", превращает все что в {} на переменные

    for (varName in vars) {
      eval('var ' + varName + '="' + vars[varName] + '";');
    }

    var regexp = /\{\$(.+?)\}/gi;
    var matches = tpl.replace(regexp, function(a, b) {
      try {
        var out = eval(b);
      } catch (e) {
        var out = a;
      }
      return out;
    });

    return matches;
  };


  hpromiseView.prototype.drawGoogleMap = function() {
    this.map = new google.maps.Map(document.getElementById('hpromise-map'), {
      center: {
        lat: 55.754661,
        lng: 37.616707
      },
      zoom: 8,
      zoomControl: true,
      zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_CENTER,
        style: google.maps.ZoomControlStyle.LARGE
      },
      scaleControl: true,
      streetViewControl: false,
      mapTypeControl: false,
      scrollwheel: false,
      mapTypeId: google.maps.MapTypeId.ROADMAP,

      // Стили:
      backgroundColor: '#fff',
      styles: [{
          "featureType": "administrative",
          "elementType": "all",
          "stylers": [{
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
          "stylers": [{
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
          "stylers": [{
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
          "stylers": [{
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
          "stylers": [{
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
          "stylers": [{
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
          "stylers": [{
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
    });

    this.map_is_ready = true;

  };

  hpromiseView.prototype.setMarkers = function(locations) {

    // удаляем cтарые все маркеры
    for (i in this.map_marker_list) {
      this.map_marker_list[i].setMap(null);
    }

    this.map_marker_list = [];

    //Определяем область показа маркеров
    var latlngbounds = new google.maps.LatLngBounds();
    for (var i = 0; i < locations.length; i++) {
      var location = locations[i];
      var myLatLng = new google.maps.LatLng(location.latitude, location.longitude);
      //Добавляем координаты маркера в область
      latlngbounds.extend(myLatLng);

      var mapsOptions = {
        position: myLatLng,
        map: this.map,
        icon: mapIconList.on,
        title: location.name,
        special: location.special,
      }

      if (location.special) {
        mapsOptions.icon = mapIconList.special
      }

      var marker = new google.maps.Marker(mapsOptions);

      this.map_marker_list.push(marker);
      this.makeInfoWin(marker, location);
    }


    //Центрируем и масштабируем карту
    this.map.setCenter(latlngbounds.getCenter(), this.map.fitBounds(latlngbounds));
    if (this.map.getZoom() > 18) {
      this.map.setZoom(15);
    }
  };

  hpromiseView.prototype.makeInfoWin = function(marker, data) {
    var InfoWindowHtml = [
      '<div class="dealer-info special">',
      '<div class="pop_body">',
      '<div class="dealer-name">' + data.russian_name + '</div>',
      '<div class="pop_text">',
      '<span class="dealer-address">' + data.address + '</span>',
      '<span class="dealer-phone">' + data.phone + '</span>',
      '<span class="dealer-site"><a target="_blank" href="' + data.site + '">' + data.site + '</a></span>',
      '</div>',
      '</div>',
      '</div>'
    ]

    var infowindow = new google.maps.InfoWindow({
      content: InfoWindowHtml.join(''),
      pixelOffset: new google.maps.Size(180, 180)
    });

    var map_marker_list = this.map_marker_list;
    var _self = this;
    var clearGmStyle = function() {
      var gmObj = $('.gm-style'),
        obj = gmObj.find('.gm-style-iw');
      obj.each(function() {
        var objParent = obj.parent();
        // 							console.log(objParent);
        obj.removeAttr('style');
        $('.gm-style-parent').css({
          'width': '',
          'height': ''
        });
        obj.parent().addClass('gm-style-parent');
        $('.gm-style-parent').parent().css({
          'width': '',
          'height': ''
        });
        $('.gm-style-parent div').eq(-1).children().addClass('hideThis');
        $('.gm-style-parent div').eq(-1).addClass('infoWindow-close');
        $('.gm-style-parent div').first().addClass('hideThis');
      });
    };

    google.maps.event.addListener(marker, 'click', function() {
      new google.maps.event.trigger(this.map, 'click');
      infowindow.open(this.map, marker);

      this.map.setCenter(marker.getPosition());
      
      clearGmStyle();

      // _self.setMapIconsStyle('off');
      // if (marker.special) {
      //   marker.setIcon(mapIconList.special);
      // } else {
      //   marker.setIcon(mapIconList.on);
      // }

      marker.setIcon(mapIconList.off);

    });

    google.maps.event.addListener(this.map, 'click', function() {
      _self.setMapIconsStyle();
      infowindow.close();
    });
  };

  hpromiseView.prototype.setMapIconsStyle = function(type) {
    this.map_marker_list.forEach(function(item) {
      if (type) {
        item.setIcon(mapIconList[type]);
      } else {
        // default
        if (item.special) {
          item.setIcon(mapIconList.special);
        } else {
          item.setIcon(mapIconList.on);
        }

      }

    });
  };

  return hpromiseView;

})(jQuery);
