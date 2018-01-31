$.fn.dataImg = function(options) {

  var settings = $.extend({
    sml: 400,
    med: 992,
    lrg: 1200,
    resize: false
  }, options );

  var elements = $(this);

  function getSrc(element) {
    var screen = window.innerWidth;

    if (screen > settings.med) { 
        return element.data('lrg');
    }
    else if (screen <= settings.med && screen > settings.sml) {
        return element.data('med');
    }
    return element.data('sml');
  }

  function breakpoints() {
    elements.each(function () {
        var e = $(this);
        var src = getSrc(e);
        if(src != undefined){
            if (e.is('img')) {
                e.attr('src', src);
            } else {
                e.css('background-image', 'url(' + src + ')');
            }
        }        
    });
  }breakpoints();

  if(settings.resize == true){
    $(window).resize(function(){
      breakpoints();
    });
  }

};