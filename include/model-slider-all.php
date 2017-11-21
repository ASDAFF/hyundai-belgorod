
<script type='text/javascript' src="/media/js_new/sc_wwpip_flat.js"></script>

<style>

    .section-content.section-content--convience-slider {
        border-bottom: 1px solid #ececec;
    }
    .convience-slider .pip-slider.pip-slider--convience {
        height: 500px;
    }
    .convience-slider [data-pip-subslide="left"] {
        overflow: hidden;
        height: 100%;
        background: #fff;
        cursor: url("/media/images/flat/SL2017/elements/cur-ar-le.cur") 0 21, pointer;
        width: 50%;
        float: left;
    }
    .convience-slider [data-pip-subslide="left"] .pip-slides-holder {
        float: right;
        max-width: 470px;
    }
    .convience-slider [data-pip-subslide="left"] .pip-slide {
        padding-top: 20px;
        padding-right: 150px;
    }
    .convience-slider [data-pip-subslide="right"] {
        overflow: hidden;
        height: 100%;
        background: #f5f5f5;
        cursor: url("/media/images/flat/SL2017/elements/cur-ar-ri.cur") 23 21, pointer;
        width: 50%;
        float: left;
    }
    .convience-slider [data-pip-subslide="right"] .pip-slides-holder {
        float: left;
    }
    .convience-slider .pip-slides-holder {
        width: 100%;
        height: 100%;
        position: relative;
    }
    .convience-slider .pip-slide {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100%;
        overflow: hidden;
        z-index: 4;
    }
    .convience-slider .pip-slide-image {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
    }
    .convience-slider .pip-slide-img {
        position: absolute;
        left: 50%;
        top: 0;
        -webkit-transform: translate(-50%,  0);
        -moz-transform: translate(-50%,  0);
        -ms-transform: translate(-50%,  0);
        -o-transform: translate(-50%,  0);
        transform: translate(-50%,  0);
    }
    .convience-slider .pip-slide-subt {
        font-family: 'HyundaiSansHead';
        font-size: 1.333em;
        font-weight: 500;
        line-height: 46px;
        letter-spacing: .01em;
        margin-bottom: 35px;
    }
    .convience-slider .pip-slide-descr {
        line-height: 18px;
        color: #a8a9ad;
        letter-spacing: .01em;
    }
    .convience-slider .pip-slider-controls {
        position: absolute;
        bottom: 10px;
        left: 50%;
        margin-left: -470px;
        text-align: left;
        z-index: 6;
    }
    .convience-slider .pip-slider-control {
        display: inline-block;
        width: 42px;
        height: 42px;
        position: relative;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: none;
        border-radius: 0;
        cursor: pointer;
        padding: 0;
        margin: 0;
        background: transparent;
    }
    .convience-slider .pip-slider-control::after {
        content: '';
        border-radius: 50%;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
        width: 8px;
        height: 8px;
        background: #e0e2e8;
        -webkit-transition: background .5s ease 0s;
        -o-transition: background .5s ease 0s;
        -moz-transition: background .5s ease 0s;
        transition: background .5s ease 0s;
    }
    .convience-slider .pip-slider-control[data-active="true"] {
        cursor: default;
        pointer-events: none;
    }
    .convience-slider .pip-slider-control[data-active="true"]::after, .convience-slider .pip-slider-control:hover::after {
        background: #013368;
    }
    .convience-slider .pip-slider-control:first-child {
        margin-left: -17px;
    }
    .prefooter {
        margin-top: -1px;
    }
    .prefooter-c {
        margin: 0 auto;
        background: #013368;
    }
    .prefooter-l {
        margin: 0 auto;
        max-width: 940px;
        font-family: 'HyundaiSansHead';
        font-weight: 500;
        color: #fff;
        text-align: center;
    }
    .prefooter-l::after {
        clear: both;
        content: '';
        display: table;
    }
    .prefooter-l-i {
        float: left;
        width: 50%}
    .prefooter-l-i .svg {
        display: block;
        margin: 0 auto 15px;
        width: 60px;
        height: 60px;
    }
    .prefooter-l-i .svg.svg--prefoter-steering-wheel {
        -webkit-transform: scale(0.98);
        -moz-transform: scale(0.98);
        -ms-transform: scale(0.98);
        -o-transform: scale(0.98);
        transform: scale(0.98);
    }
    .prefooter-l-l {
        display: block;
        color: inherit;
        padding-top: 43px;
        padding-bottom: 50px;
        background: transparent;
        -webkit-transition: background .15s ease-out 0s;
        -o-transition: background .15s ease-out 0s;
        -moz-transition: background .15s ease-out 0s;
        transition: background .15s ease-out 0s;
    }
    .prefooter-l-l:hover {
        text-decoration: none;
        background: #053f7d;
    }
    .prefooter-l-t {
        display: block;
    }
    .notice-w-ic {
        display: block;
        font-size: 12px;
        line-height: 1.3;
        margin-top: 1em;
        position: relative;
        color: #ececec;
    }
    .notice-w-ic::before {
        content: '';
        background: transparent url("data:image/png;
        base64, iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyppVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTMyIDc5LjE1OTI4NCwgMjAxNi8wNC8xOS0xMzoxMzo0MCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUuNSAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowN0NFNzA1MUU2Q0UxMUU2QkJFQjgzMDU2NTU4NUI4MiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowN0NFNzA1MkU2Q0UxMUU2QkJFQjgzMDU2NTU4NUI4MiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjA3Q0U3MDRGRTZDRTExRTZCQkVCODMwNTY1NTg1QjgyIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjA3Q0U3MDUwRTZDRTExRTZCQkVCODMwNTY1NTg1QjgyIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+oHxRgQAAASBJREFUeNpiZHCtZkACTEAcDsSRQGwBxKJA/BqITwDxciBeCcT/YIoZkTQrAfEqIDZmwA3OAnEYEN+D2QTTeBxZozA/F4OTtiyYRgLGUHVKMM1MUOeIIatqi3Fk2NufzlDub45uuxhUPRNIYwQQm6Cr+Pj5G5h+//U7NueD1EeANMdik4Vpev/5Oy7/xzJhsxVZ07tPODXrgzSLYJOBaXqD22ZhkOY32GSuP33HcOLKA4bXuG1+C9J8BpuMprQQw6ajV8A0DnARpHkxNpnCMDuGtnQfhiQvU1yaF4M0r8BlOx4AUr8CljyVgfgYekLBAV4BsRUQ34Ulz7tQgbMENJ6FaURO2zADzIA4Cog3A/EzIP4FxM+h/Gio/F2YBoAAAwDYE09xVBmkgAAAAABJRU5ErkJggg==") no-repeat center center;
        display: inline-block;
        height: 15px;
        margin: 0 6px 3px 0;
        position: relative;
        vertical-align: middle;
        width: 15px;
        }
        .is-ie .highlights .pip-slider-nav [data-role="prev"] {
        cursor: url("/media/images/flat/SL2017/elements/cur-ar-le.cur"), w-resize;
    }
    .is-ie .highlights .pip-slider-nav [data-role="next"] {
        cursor: url("/media/images/flat/SL2017/elements/cur-ar-ri.cur"), e-resize;
    }
    .is-ie .transmissions-slider, .is-ie .convience-popups-slider, .is-ie .is-popuped .pip-slide {
        cursor: url("/media/images/flat/SL2017/elements/cur-close.cur"), pointer;
    }
    .is-ie .safety [data-pip-subslide="left"], .is-ie .convience-slider [data-pip-subslide="left"] {
        cursor: url("/media/images/flat/SL2017/elements/cur-ar-le.cur"), w-resize;
    }
    .is-ie .safety [data-pip-subslide="right"], .is-ie .convience-slider [data-pip-subslide="right"] {
        cursor: url("/media/images/flat/SL2017/elements/cur-ar-ri.cur"), e-resize;
    }
    /*# sourceMappingURL=solaris-2017.css.map */

    .safety [data-pip-subslide="left"] {
        overflow: hidden;
        height: 100%;
        background: #fff;
        cursor: url(/media/images/flat/SL2017/elements/cur-ar-le.cur) 0 21,pointer;
    }

    .safety [data-pip-subslide="right"] {
        overflow: hidden;
        height: 100%;
        background: #f5f5f5;
        cursor: url(/media/images/flat/SL2017/elements/cur-ar-ri.cur) 23 21,pointer;
    }

</style>

<div class="container" style="margin-top: 0px">

    <section class="section section--convience" data-anchor="">
        <div class="convience-slider" data-role="js-convience-model-slider">
            <div class="dublay pip-slider pip-slider--convience">
                <div class="dublay-ch dublay-ch--by-50" data-pip-subslide="left">
                    <div class="pip-slides-holder">

                        <? foreach($arParams['RESULT']['DESC_SLIDE'] as $k => $desc):
                        $d = explode('~',$desc);
                        ?>
                        <div class="pip-slide" data-slide="<?=$k+1?>" data-slide-type="static">
                            <div class="pip-slide-subt">
                                <?=$d[0];?>
                            </div>
                            <div class="pip-slide-descr">
                                <?=$d[1];?>
                            </div>
                        </div>
                        <? endforeach; ?>

                    </div>
                </div>
                <div class="dublay-ch dublay-ch--by-50" data-pip-subslide="right">
                    <div class="pip-slides-holder">

                        <? foreach($arParams['RESULT']['IMG_SLIDE'] as $k => $img): ?>
                        <div class="pip-slide" data-slide="<?=$k+1?>" data-slide-type="mooving">
                            <div class="pip-slide-image"><img src="<?=CFile::GetPath($img)?>" class="pip-slide-img" alt=""/></div>
                        </div>
                        <? endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- //content-type__explore -->
</div>
<!-- // container -->

<script>
    function getTransitionEnd(){
        var el = document.createElement('div');
        var transEndEventNames = {
            transition       : 'transitionend',
            MozTransition    : 'transitionend',
            WebkitTransition : 'webkitTransitionEnd',
            OTransition      : 'oTransitionEnd otransitionend'
        };
        for (var name in transEndEventNames) {
            if (el.style[name] !== undefined) {
                return transEndEventNames[name];
            }
        }
        return false;
    };
    var _transitionEnd = getTransitionEnd();

    convienceModelSlider = {
        init: function () {
            var self = this;
            self.ready = true
            self.el = $('[data-role="js-convience-model-slider"]')
            self.sl = self.el.find('.pip-slider')
            self.slides = self.el.find('[data-slide]')
            self.subslides = self.el.find('[data-pip-subslide]')
            self.total = self.slides.length / 2
            self.index = 1
            self.speed = 0.75
            self.cubic1 = 'cubic-bezier(.65,.05,.36,1)'
            self.cubic2 = 'cubic-bezier(.47,0,.74,.71)'
            self._controls = '<div class="pip-slider-controls"></div>'
            self._btn = '<button class="pip-slider-control pip-slider-control--btn"></button>'
            self.sl.append(self._controls);
            self.controls = self.sl.find('.pip-slider-controls');
            self.btns
            self.dir
            for (var i=0; i<self.total;++i) {
                self.controls.append(self._btn)
            }
            // init dom
            self.btns = self.controls.find('.pip-slider-control.pip-slider-control--btn')
            self.btns.filter(':first-of-type').attr('data-active', true)
            self.slides
                .not('[data-slide=1]')
                .filter('[data-slide-type=static]')
                .css3transition('none')
                .css('opacity', 0)
            self.slides
                .not('[data-slide=1]')
                .filter('[data-slide-type="mooving"]')
                .css3transition('none')
                .css3transfrom('translate(100%, 0)')
            self.slides
                .filter('[data-slide=1]')
                .attr('data-active', true)
            self.bind();
        },
        bind: function () {
            var self = this;
            self.subslides.on('click', function(ev){
                ev.preventDefault();
                if (self.ready) {
                    self.dir = $(this).attr('data-pip-subslide');
                    if (self.dir === 'left') {
                        self.index = self.index < 2 ? self.total : --self.index;
                    } else if (self.dir === 'right') {
                        self.index = self.index < self.total ? ++self.index : 1;
                    }
                    self.move();
                }
            });
            self.btns.on('click', function(ev){
                ev.preventDefault();
                var _p = self.index, _n = $(this).index() + 1;
                if (self.ready && _p !== _n) {
                    self.dir = _p < _n ? 'right' : 'left';
                    self.index = _n;
                    self.move();
                }
            });

        },
        move: function () {
            var self = this;
            self.ready = false

            var _activeSlides = self.slides.filter('[data-slide='+self.index+']'),
                _prevSlides = self.slides.filter('[data-active=true]');

            self.btns.removeAttr('data-active').filter(':nth-child('+self.index+')').attr('data-active', true)
            if (self.dir === 'left') {
                // text side
                _prevSlides
                    .removeAttr('data-active')
                    .filter('[data-slide-type=static]')
                    .css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
                    .css({'opacity': 0, 'zIndex': 4})
                    .one(_transitionEnd, function(){
                        $(this)
                            .css3transition('none')
                            .css({'opacity': 0, 'zIndex': ''});
                    })
                _activeSlides
                    .attr('data-active', true)
                    .filter('[data-slide-type=static]')
                    .css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
                    .css({'opacity': 1, 'zIndex': 5})
                // image side
                _prevSlides
                    .removeAttr('data-active')
                    .filter('[data-slide-type="mooving"]')
                    .css('zIndex', 4)
                    .css3transition('transform '+self.speed+'s '+self.cubic2+' 0s')
                    .css3transfrom('translate(100%, 0)')
                    .one(_transitionEnd, function(){
                        $(this)
                            .css3transition('none')
                            .css('zIndex', '')
                        self.ready = true
                    });
                _activeSlides
                    .attr('data-active', true)
                    .filter('[data-slide-type="mooving"]')
                    .css3transition('none')
                    .css3transfrom('translate(-100%, 0)')
                    .stop()
                    .animate({'null': 1}, 0).promise().done(function() {
                        $(this)
                            .css('zIndex', 5)
                            .css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
                            .css3transfrom('translate(0, 0)')
                    })

            } else if (self.dir === 'right') {
                // text side
                _prevSlides
                    .removeAttr('data-active')
                    .filter('[data-slide-type=static]')
                    .css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
                    .css({'opacity': 0, 'zIndex': 4})
                    .one(_transitionEnd, function(){
                        $(this)
                            .css3transition('none')
                            .css({'opacity': 0, 'zIndex': ''});
                    })
                _activeSlides
                    .attr('data-active', true)
                    .filter('[data-slide-type=static]')
                    .css3transition('opacity '+self.speed+'s '+self.cubic2+' 0s')
                    .css({'opacity': 1, 'zIndex': 5})
                // image side
                _prevSlides
                    .removeAttr('data-active')
                    .filter('[data-slide-type="mooving"]')
                    .css('zIndex', 4)
                    .css3transition('transform '+self.speed+'s '+self.cubic2+' 0s')
                    .css3transfrom('translate(-100%, 0)')
                    .one(_transitionEnd, function(){
                        $(this)
                            .css3transition('none')
                            .css('zIndex', '')
                        self.ready = true
                    });
                _activeSlides
                    .attr('data-active', true)
                    .filter('[data-slide-type="mooving"]')
                    .css3transition('none')
                    .css3transfrom('translate(100%, 0)')
                    .stop()
                    .animate({'null': 1}, 0).promise().done(function() {
                        $(this)
                            .css('zIndex', 5)
                            .css3transition('transform '+self.speed+'s '+self.cubic1+' 0s')
                            .css3transfrom('translate(0, 0)')
                    })
            }
        }
    };

    if ($('[data-role="js-convience-model-slider"]').length) convienceModelSlider.init();


</script>

