/**
 *
 * Всплывай-ка
 * Пример использования
 * Popup.Open('<div>123</div>');
 */

function Popup() {
  this.Init();
}

Popup.prototype.Init = function() {

  this.popupWrapHtml = '<div class="popup"><div class="popup-handle js-handle"><i class="popup-close"></i><div class="popup-title js-popup-title"></div><div class="clearfix"></div></div><div class="popup-inner js-popup-inner"></div></div>';
  this.placeholderHtml = '<div class="placeholder"></div>';
  this.popupOverlayHtml = '<div class="popup-overlay"></div>';
  this.popupLoadHtml = '<div class="popup-load"></div>';
  this.popupCloseClass = '.popup-close';
  this.popupInnerClass = '.js-popup-inner';
  this.popupTitleClass = '.js-popup-title';
  this.$popupWrap = $();
  this.$placeholder = $();
  this.$popupOverlay = $();
  this.$popupLoad = $();
  this.$content = $();
};

Popup.prototype.Open = function($content, options) {

  //this.Close();
  //this.Init();


  default_options = {
    title: '',
    wrapClass: ''
  };

  if (typeof options == "object") {
    params = $.merge(options, default_options);
  } else {
    params = default_options;
  }

  if (typeof $content == undefined) {
    console.warn('Нечего открывать');
    return false;
  }


  if ($content instanceof jQuery) {
    this.$content = $content;
  } else {

    try {
      this.$content = $($content);
      if (this.$content.length == 0) {
        throw new Error("Ничего не нашлось");
      }

    } catch (e) {
      this.$content = $('<div class="text">' + $content + '</div>');
    }

  }

  this.$placeholder = $(this.placeholderHtml);
  this.$popupWrap = $(this.popupWrapHtml);
  this.$popupWrap.addClass(params.wrapClass);

  this.$popupOverlay = $(this.popupOverlayHtml);
  this.$content.before(this.$placeholder);

  this.$popupWrap.appendTo('body');
  this.$popupOverlay.appendTo('body');

  this.$popupWrap.hide();

  this.$popupWrap.find(this.popupInnerClass).append(this.$content);
  this.$popupWrap.find(this.popupTitleClass).append(params.title);

  this.SetPosition(this.$popupWrap, 'center');

  this.$popupWrap.show();

  this.BindClose();
  this.SetDrag();

  return this;
};

Popup.prototype.Close = function() {
  if (typeof this.$placeholder != 'undefined') {
    this.$placeholder.before(this.$content);
    this.$placeholder.remove();
    delete this.$placeholder;
    this.$popupWrap.remove();
    this.$popupOverlay.remove();
    this.ClearDrag();
  }
  return this;
};

Popup.prototype.BindClose = function() {
  var self = this;
  var $closeElem =
    $().add(this.$popupWrap.find(this.popupCloseClass))
    .add(this.$popupOverlay);

  $closeElem.on('click', function() {
    self.Close();
    //console.log(self);
  });

  $(window).one('keydown', function(event) {

    if (event.keyCode == 27) {
      self.Close();
    }

  })
};

Popup.prototype.SetPosition = function($object, data) {
  var coord = {
    x: 0,
    y: 0
  };

  if (typeof $object == 'undefined') {
    $object = this.$popupWrap;
  }

  if (typeof data == 'undefined') {
    data = 'center';
  }

  if (typeof data == 'object' && typeof data == data.coord) {
    coord = data.coord;
  }

  if (typeof data == 'string') {

    if (data == 'center') {
      var $doc = $(document);
      var $win = $(window);
      if ($object.width() > $doc.width()) {
        $object.width($doc.width());
      }
      coord = {
        x: ($doc.width() / 2) - ($object.width() / 2),
        y: ($doc.scrollTop() + ($win.height() / 2)) - $object.height() / 2
      }
    }

  }

  if ($(window).width() < 768) {
    coord.x = 0;
    if ($(document).height() < $object.height()) {
      coord.y = 0;
    }
  }

  if ($object.hasClass('popup-filter')) {
    coord.y = 0;
    coord.x = 0;
    $object.css({
      'width': '100%'
    });
  }

  $object.css({
    'left': coord.x,
    'top': coord.y
  });
};

Popup.prototype.SetDrag = function() {
  var $popupWrap = this.$popupWrap;
  var $handle = this.$popupWrap.find('.js-handle');
  var offsetX = 0;
  var offsetY = 0;
  $handle
    .on("mousedown", function(event) {
      event.preventDefault();
      offsetX = event.offsetX;
      offsetY = event.offsetY;
      if (event.target != event.currentTarget) {
        var offsetElement = event.target;
        while (offsetElement != event.currentTarget) {
          offsetY += offsetElement.offsetTop;
          offsetX += offsetElement.offsetLeft;
          offsetElement = offsetElement.parentElement;
        }
      }

      $popupWrap.addClass('draggable');
    })
    .on("mouseup", function() {
      $popupWrap.removeClass('draggable');
    });

  $('body').on('mousemove.popup', function(event) {
    if ($popupWrap.hasClass('draggable')) {
      var X = event.pageX - offsetX;
      var Y = event.pageY - offsetY;
      var px = 'px';
      $popupWrap.css({
        left: X + px,
        top: Y + px
      });
    }
  });
};

Popup.prototype.ClearDrag = function() {
    if ($('.js-handle').length == 0) {
      $('body').off('.popup');
    }
  },

  Popup.prototype.ShowLoad = function() {
    this.HideLoad();
    this.$popupLoad = $(this.popupLoadHtml);
    this.$popupLoad.appendTo('body');
    this.SetPosition(this.$popupLoad);
  };

Popup.prototype.HideLoad = function() {
  if (typeof this.$popupLoad != "undefined") {
    this.$popupLoad.remove();
  }
}
