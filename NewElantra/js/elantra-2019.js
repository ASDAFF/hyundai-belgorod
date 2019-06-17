var controller = new ScrollMagic.Controller({ globalSceneOptions: { offset: -107 } });
var controller2 = new ScrollMagic.Controller({ globalSceneOptions: { offset: -107 } });

$.extend($.lazyLoadXT, {
    edgeY:  500
});

//Подсветка активного пункта меню
setTimeout(function () {
    new ScrollMagic.Scene({triggerElement: "#design",  triggerHook: '0', duration: $('.design--1').outerHeight() + $('.design--2').outerHeight() - 50 })
        .setClassToggle("a[href='#design']", "active")
        .addTo(controller2);
    new ScrollMagic.Scene({triggerElement: "#dynamics",  triggerHook: '0', duration: $('.dynamics--1').outerHeight() + $('.dynamics--2').outerHeight() - 50})
        .setClassToggle("a[href='#dynamics']", "active")
        .addTo(controller2);
    new ScrollMagic.Scene({triggerElement: "#comfort",  triggerHook: '0', duration: $('.comfort--1').outerHeight() + $('.comfort--2').outerHeight() - 50})
        .setClassToggle("a[href='#comfort']", "active")
        .addTo(controller2);
    new ScrollMagic.Scene({triggerElement: "#safety",  triggerHook: '0', duration: $('.safety--1').outerHeight() + $('.safety--2').outerHeight() + $('.safety--3').outerHeight() + $('.safety--4').outerHeight() + $('.safety--5').outerHeight() - 50})
        .setClassToggle("a[href='#safety']", "active")
        .addTo(controller2);
    new ScrollMagic.Scene({triggerElement: "#specs",  triggerHook: '0', duration: $('.specs').outerHeight() - 50 })
        .setClassToggle("a[href='#specs']", "active")
        .addTo(controller2);
}, 1000)

//ScrollTo
$('a.scroll').on('click', function(e) {
    e.preventDefault();
    var obj = $(this).attr('href');
    
    $('html, body').animate({ scrollTop: $(obj).offset().top - 107 }, 500);
})

if (window.location.hash !== '') {
    var hash = window.location.hash.substr(1);

    $('html, body').animate({ scrollTop: $('#'+hash).offset().top - 107 }, 500);
}

//View
new Vue({
    el: '#view360',
    data: {
        success: true,
        spritespinAPI: null,
        colorsAPI: [],
        activeColor: 0,
        spritespin: null,
        frame: 0,
        lastFrameSrc: 0,
        isLoaded: false,
        isInit: false,
        progress: 0
    },
    computed: {
        sourceArray: function () {
            var folder = this.spritespin[this.activeColor].folder;
            var ext = this.spritespin[this.activeColor].extension;
            var result = []
            for (var i = 0; i < 36; i++) {
                result.push(folder + '/' + i + '.' + ext)
            }

            return result
        },
        colors: function () {
            var colors = [];

            for (var group in this.colorsAPI) {
                for (var color in this.colorsAPI[group]) {
                    colors.push(this.colorsAPI[group][color])
                }
            }

            return colors;
        },
        currentColor: function () {
            for (var i = 0; i < this.colors.length; i++) {
                if (this.colors[i].id === this.activeColor) {
                    return this.colors[i].nameRus+' / '+this.colors[i].name+', '+ this.priceFormat(this.colors[i].cost)
                }
            }
        },
        preview: function () {
            if (this.activeColor !== 0 ) {
                return this.spritespin[this.activeColor].folder + '/' + this.frame + '.' + this.spritespin[this.activeColor].extension;
            }
        },
        progressFormatted: function () {
            return Math.round(this.progress)
        }
      },
    methods: {
        set360: function () {
            var that = this;

            $("#spritespin").spritespin({
                source: that.sourceArray,
                animate: false,
                behavior: 'drag',
                frames: 36,
                frameTime: 40,
                frame: that.frame,
                lanes: 1,
                mods: ['drag', '360'],
                module: null,
                renderer: 'canvas',
                reverse: false,
                scrollThreshold: 500,
                width   : 910,  // width in pixels of the window/frame
                height  : 411,  // height in pixels of the window/frame
                onLoad: function () {
                    that.isLoaded = true
                  }
            });

            var api = $("#spritespin").spritespin('api');

            this.spritespinAPI = api;

            $("#spritespin").bind('onFrame', function () {
                that.frame = api.data.frame
                that.lastFrameSrc = api.data.source[that.frame]
            })
        },
        getData: function () {
            var that = this;

            axios.get('https://api.cofigurator.hyundai.ru/car/27')
                .then(function (response) {
                    that.colorsAPI = response.data.exterior.colors.groups;
                    that.spritespin = response.data.exterior.spritespin;

                    that.setColor(response.data.exterior.colors.defaultColor);
                    that.success = true;
                })
                .catch(function (error) {
                    that.success = false;
                    console.log(error);
                });
        },
        prev: function() {
            this.spritespinAPI.prevFrame()
        },
        next: function() {
            this.spritespinAPI.nextFrame()
        },
        setColor: function (color) {
            this.activeColor = color;
        },
        init360: function () {
            if (!this.isInit) {
                this.isInit = true;
                this.set360();
                this.preloader();
            }
        },
        preloader: function () {
            var t = new TimelineMax();

            t
                .to(this, 2, {
                    progress: 100
                })
        },
        priceFormat: function (value) {
            return value.toString().replace(/\D/g, '').replace(/(?!^)(?=(?:\d{3})+(?:\.|$))/g, ' ') + ' ₽'
        }
    },
    mounted: function () {
        var that = this;

        this.getData();
        this.$nextTick(function () {
            
        })
    },
    watch: {
        activeColor: function () {
            if (this.isInit) {
                this.isLoaded = false;
                this.progress = 0;
                this.set360();
                this.preloader();
            }
        }
    }
})

$('.js-change-view').on('click', function (e) {
    e.preventDefault();
    var view = $(this).data('view');

    $('.js-change-view').each(function () {
        $(this).parents('.dynamics').removeClass($(this).data('view'));
    }).removeClass('active')

    $(this).addClass('active');
    $(this).parents('.dynamics').addClass(view);

    if (view === 'view1') {
        counterAnim2.play();
    }
})

var dynamics1 = new ScrollMagic.Scene({ triggerElement: ".dynamics--1", duration: '0', triggerHook: '0.45' })
//.addIndicators({ name: "design" })
.addTo(controller);

dynamics1.on("enter", function (event) {
    $('.dynamics--1').addClass('isEntered');
    dynamics1.destroy();
});

var dynamics11 = new ScrollMagic.Scene({ triggerElement: ".dynamics--1", duration: $('.dynamics--1').height(), triggerHook: '0.5' })
//.addIndicators({ name: "v1" })
.addTo(controller);

//Счётчики
var count1 = { 
    score: 0,
    update: function() {
        $('#count1').text(this.score);
    }
};
var count2 = { 
    score: 0,
    update: function() {
        $('#count2').text(this.score);
    }
};

var count3 = { 
    score: 0,
    update: function() {
        $('#count3').text(this.score);
    }
};

var count4 = { 
    score: 0,
    update: function() {
        $('#count4').text(this.score);
    }
};

var counterAnim = new TimelineMax({
    paused: true
})

var counterAnim2 = new TimelineMax({
    paused: true
})

counterAnim
    .add('start')
    .to(count1, 2, { score: "+=128", roundProps: "score", onUpdate: count1.update.bind(count1), ease: Linear.easeNone }, 'start')
    .to(count2, 2, { score: "+=10", roundProps: "score", onUpdate: count2.update.bind(count2), ease: Linear.easeNone }, 'start')

counterAnim2
    .add('start')
    .to(count3, 2, { score: "+=150", roundProps: "score", onUpdate: count3.update.bind(count3), ease: Linear.easeNone }, 'start')
    .to(count4, 2, { score: "+=8", roundProps: "score", onUpdate: count4.update.bind(count4), ease: Linear.easeNone }, 'start')

dynamics11.on("enter", function (event) {
    $('#d-video1').get(0).play();
    counterAnim.play();
});
dynamics11.on("leave", function (event) {
    $('#d-video1').get(0).pause();
    counterAnim.kill();
});

var dynamics2 = new ScrollMagic.Scene({ triggerElement: ".dynamics--2", duration: $('.dynamics--2').height(), triggerHook: '0.5' })
//.addIndicators({ name: "v2" })
.addTo(controller);

dynamics2.on("enter", function (event) {
    //$('#d-video1').get(0).pause();
    //$('#d-video2').get(0).play();
});
dynamics2.on("leave", function (event) {
    //$('#d-video1').get(0).play();
   // $('#d-video2').get(0).pause();
});

//Анимация смена изображения
var animP = new TimelineMax({repeat:-1, yoyo:true, repeatDelay: 1})

animP
    .staggerFrom('.design .s-parallax__bg', 0.3, {
        opacity: 0
    }, 3)

var animD = new TimelineMax({repeat:-1, yoyo:true, repeatDelay: 3})

animD
    .staggerFrom('.dynamics__back--1', 0.5, {
        opacity: 0
    }, 5)

var animS = new TimelineMax({repeat:-1, yoyo:false, repeatDelay: 0})

animS
    .staggerFrom('.s-back__img img:not(:first-of-type)', 0.5, {
        visibility: 'hidden'
    }, 0.5)

//Presentation section
new Vue({
    el: '#design',
    data: {
        title: 'Дерзкий<br>дизайн.',
        enter: false,
        showIcons: false,
        slides: [
            {
                icon: 'https://www.hyundai.ru/assets/img/elantra/icons/design_1.svg',
                title: 'Новая каскадная решетка радиатора.',
                description: 'Широкая решетка радиатора с новой геометрией подчеркивает харизматичность ELANTRA.',
                background: 'https://www.hyundai.ru/assets/img/elantra/pics/design_slider_1.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: 'https://www.hyundai.ru/assets/img/elantra/icons/design_2.svg',
                title: 'Светодиодные фары.',
                description: 'Хищный прищур фар добавляет автомобилю очаровательной дерзости.',
                background: 'https://www.hyundai.ru/assets/img/elantra/pics/design_slider_2.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: 'https://www.hyundai.ru/assets/img/elantra/icons/design_3.svg',
                title: 'Новый дизайн дисков.',
                description: 'Новые 17-дюймовые легкосплавные диски дополняют образ ELANTRA.',
                background: 'https://www.hyundai.ru/assets/img/elantra/pics/design_slider_3.jpg',
                zoom: 2.6,
                correct: {
                    x: 0,
                    y: 0
                }
            }
        ],
        selectedId: 0,
        anim: null,
        out: null,
        controller: null
    },
    methods: {
        selectItem: function (index, zoom, cX, cY, r) {
            var back = this.$refs['back'],
                backHeight = $(back).outerHeight(),
                backWidth = $(back).outerWidth(),
                item = this.$refs['icon--' + index],
                r = r ? r : 0,
                itemY = $(item).position().top + r,
                itemX = $(item).position().left + r;

            this.selectedId = index;

            if (this.out) {
                this.out.kill();
                this.anim = null;
            }
            if (this.anim) {
                this.anim.kill();
                this.anim = null;
            }
            
            this.zoom(back, backWidth, backHeight, itemX, itemY, zoom, cX, cY);
        },
        nextItem: function () {
            if (this.selectedId < this.slides.length - 1) {
                this.selectItem(this.selectedId + 1, this.slides[this.selectedId + 1].zoom, this.slides[this.selectedId + 1].correct.x, this.slides[this.selectedId + 1].correct.y)
            } else {
                this.selectedId = 0;
                this.selectItem(this.selectedId, this.slides[this.selectedId].zoom, this.slides[this.selectedId].correct.x, this.slides[this.selectedId].correct.y)
            }
        },
        prevItem: function () {
            if (this.selectedId > 0) {
                this.selectItem(this.selectedId - 1, this.slides[this.selectedId - 1].zoom, this.slides[this.selectedId - 1].correct.x, this.slides[this.selectedId - 1].correct.y)
            } else {
                this.selectedId = this.slides.length - 1;
                this.selectItem(this.selectedId, this.slides[this.selectedId].zoom, this.slides[this.selectedId].correct.x, this.slides[this.selectedId].correct.y)
            }
        },
        close: function () {
            this.anim.kill();

            this.exit();
        },
        zoom: function (item, w, h, x, y, zoom, cX, cY) {
            //Анимация приближения области
            //Вычисляем размер сдвига по осям X, Y
            var cX = cX ? cX : 0;
            var cY = cY ? cY : 0;
            var dX = - (w / 2) / 2 - (x - (w / 2)) - cX;
            var dY = h / 2 - y - cY;
            var that = this;

            this.anim = new TimelineMax({
                onComplete: function () {
                    that.showIcons = false;
                }
            });
            
            this.anim
                .to('.design .presentation__icon', 0.3, {
                    opacity: 0
                })
                .add('start')
                .to(item, 1, {
                    ease: Expo.easeOut,
                    transform: 'translate(' + dX + 'px , ' + dY + 'px)'
                }, 'start')
                .to('.design .presentation__left', 1, {
                    ease: Expo.easeOut,
                    transform: 'scale(' + zoom + ')'
                }, 'start')
                .set(item, {
                    willChange: 'auto'
                })
                .to('.design .presentation__aside', 0.5, {
                    transform: 'translateX(0)'
                }, 'start')
                .to('.design .presentation__prev, .design .presentation__next, .design .presentation__close', 0.3, {
                    opacity: 1
                })
        },
        exit: function () {
            var item = this.$refs['back'];
            var that = this;

            this.out = new TimelineMax({
                onComplete: function () {
                    that.showIcons = true;
                }
            });
            
            this.out
                .set('.design .presentation__icon', {
                    opacity: 1
                })
                .to('.design .presentation__prev, .design .presentation__next, .design .presentation__close', 0.3, {
                    opacity: 0
                })
                .set(item, {
                    willChange: 'transform'
                })
                .add('start')
                .to('.design .presentation__aside', 0.5, {
                    transform: 'translateX(150%)'
                })
                .to('.design .presentation__left', 1, {
                    ease: Expo.easeOut,
                    transform: 'scale(1)'
                }, 'start')
                .to(item, 1, {
                    ease: Expo.easeOut,
                    transform: 'translate(0,0)'
                }, 'start')
                .set(item, {
                    willChange: 'auto'
                })
        }

    },
    mounted: function () {
        var that = this;

        this.$nextTick(function () {
            that.controller = new ScrollMagic.Controller({});

            var design = new ScrollMagic.Scene({ triggerElement: "#design", duration: '0', triggerHook: '0.45' })
            //.addIndicators({ name: "design" })
            .addTo(that.controller);
            
            design.on("enter", function (event) {
                that.enter = true;
                that.showIcons = true;
                design.destroy();
            });
            // design.on("leave", function (event) {
            //     that.enter = false;
            // });
        })
    }
})

new Vue({
    el: '#comfort',
    data: {
        title: 'Настоящий<br>комфорт.',
        enter: false,
        showIcons: false,
        slides: [
            {
                icon: 'https://www.hyundai.ru/assets/img/elantra/icons/comfort_1.svg',
                title: 'Цифровая приборная панель Supervision.',
                description: 'Красочная и лаконичная приборная панель подсказывает водителю всю информацию о состоянии автомобиля.',
                background: 'https://www.hyundai.ru/assets/img/elantra/pics/comfort_slider_1.jpg',
                zoom: 1.6,
                correct: {
                    x: -40,
                    y: 50
                }
            },
            {
                icon: 'https://www.hyundai.ru/assets/img/elantra/icons/comfort_2.svg',
                title: '7-дюймовая мультимедиа система.',
                description: 'Современная мультимедиа система с большим экраном и поддержкой Android Auto<sup>TM</sup> и Apple CarPlay<sup>TM</sup> дополняет автомферу технологичности.',
                background: 'https://www.hyundai.ru/assets/img/elantra/pics/comfort_slider_2.jpg',
                zoom: 1.8,
                correct: {
                    x: 0,
                    y: 0
                }
            },
            {
                icon: 'https://www.hyundai.ru/assets/img/elantra/icons/comfort_3.svg',
                title: '3 цвета интерьера.',
                description: 'Комбинация натуральной и искусственной кожи в отделке сидений. ',
                background: '',
                zoom: 1.5,
                carousel: true,
                frames: [
                    {
                        name: 'Черный',
                        img: 'https://www.hyundai.ru/assets/img/elantra/pics/comfort_slider_3a.jpg'
                    },
                    {
                        name: 'Серый',
                        img: 'https://www.hyundai.ru/assets/img/elantra/pics/comfort_slider_3b.jpg'
                    },
                    {
                        name: 'Бежевый',
                        img: 'https://www.hyundai.ru/assets/img/elantra/pics/comfort_slider_3c.jpg'
                    }
                ],
                correct: {
                    x: 180,
                    y: -180
                }
            }
        ],
        selectedId: 0,
        anim: null,
        out: null,
        controller: null,
        currentFrame: 0,
        currentSlide: 'Черный'
    },
    methods: {
        selectItem: function (index, zoom, cX, cY, r) {
            var back = this.$refs['back'],
                backHeight = $(back).outerHeight(),
                backWidth = $(back).outerWidth(),
                item = this.$refs['icon--' + index],
                r = r ? r : 0,
                itemY = $(item).position().top + r,
                itemX = $(item).position().left + r;

            this.selectedId = index;

            if (this.out) {
                this.out.kill();
                this.anim = null;
            }
            if (this.anim) {
                this.anim.kill();
                this.anim = null;
            }

            if (this.slides[index].animation) {
                this.framesAnimation(this.slides[index].frames.length);
            }
            
            this.zoom(back, backWidth, backHeight, itemX, itemY, zoom, cX, cY);
        },
        nextItem: function () {
            if (this.selectedId < this.slides.length - 1) {
                this.selectItem(this.selectedId + 1, this.slides[this.selectedId + 1].zoom, this.slides[this.selectedId + 1].correct.x, this.slides[this.selectedId + 1].correct.y)
            } else {
                this.selectedId = 0;
                this.selectItem(this.selectedId, this.slides[this.selectedId].zoom, this.slides[this.selectedId].correct.x, this.slides[this.selectedId].correct.y)
            }
        },
        prevItem: function () {
            if (this.selectedId > 0) {
                this.selectItem(this.selectedId - 1, this.slides[this.selectedId - 1].zoom, this.slides[this.selectedId - 1].correct.x, this.slides[this.selectedId - 1].correct.y)
            } else {
                this.selectedId = this.slides.length - 1;
                this.selectItem(this.selectedId, this.slides[this.selectedId].zoom, this.slides[this.selectedId].correct.x, this.slides[this.selectedId].correct.y)
            }
        },
        selectFrame: function (name) {
            this.currentSlide = name;
        },
        close: function () {
            this.anim.kill();

            this.exit();
        },
        zoom: function (item, w, h, x, y, zoom, cX, cY) {
            //Анимация приближения области
            //Вычисляем размер сдвига по осям X, Y
            var cX = cX ? cX : 0;
            var cY = cY ? cY : 0;
            var dX = - (w / 2) / 2 - (x - (w / 2)) - cX;
            var dY = h / 2 - y - cY;
            var that = this;

            this.anim = new TimelineMax({
                onComplete: function () {
                    that.showIcons = false;
                }
            });
            
            this.anim
                .to('.comfort .presentation__icon', 0.3, {
                    opacity: 0
                })
                .add('start')
                .to(item, 1, {
                    ease: Expo.easeOut,
                    transform: 'translate(' + dX + 'px , ' + dY + 'px)'
                }, 'start')
                .to('.comfort .presentation__left', 1, {
                    ease: Expo.easeOut,
                    transform: 'scale(' + zoom + ')'
                }, 'start')
                .set(item, {
                    willChange: 'auto'
                })
                .to('.comfort .presentation__aside', 0.5, {
                    transform: 'translateX(0)'
                }, 'start')
                .to('.comfort .presentation__prev, .comfort .presentation__next, .comfort .presentation__close', 0.3, {
                    opacity: 1
                })
        },
        exit: function () {
            var item = this.$refs['back'];
            var that = this;

            this.out = new TimelineMax({
                onComplete: function () {
                    that.showIcons = true;
                }
            });
            
            this.out
                .set('.comfort .presentation__icon', {
                    opacity: 1
                })
                .to('.comfort .presentation__prev, .comfort .presentation__next, .comfort .presentation__close', 0.3, {
                    opacity: 0
                })
                .set(item, {
                    willChange: 'transform'
                })
                .add('start')
                .to('.comfort .presentation__aside', 0.5, {
                    transform: 'translateX(150%)'
                })
                .to('.comfort .presentation__left', 1, {
                    ease: Expo.easeOut,
                    transform: 'scale(1)'
                }, 'start')
                .to(item, 1, {
                    ease: Expo.easeOut,
                    transform: 'translate(0,0)'
                }, 'start')
                .set(item, {
                    willChange: 'auto'
                })
        },
        framesAnimation: function (l) {
            var that = this,
                length = l;

            setInterval(function() {
                if (that.currentFrame < length - 1) {
                    that.currentFrame++
                } else {
                    that.currentFrame = 0
                }
            }, 2000)
        }
    },
    mounted: function () {
        var that = this;

        this.$nextTick(function () {
            that.controller = new ScrollMagic.Controller({});

            var design = new ScrollMagic.Scene({ triggerElement: "#comfort", duration: '0', triggerHook: '0.45' })
            //.addIndicators({ name: "design" })
            .addTo(that.controller);
            
            design.on("enter", function (event) {
                that.enter = true;
                that.showIcons = true;
                design.destroy();
            });
            // design.on("leave", function (event) {
            //     that.enter = false;
            // });
        })
    }
})

//Safety
var safety1 = new ScrollMagic.Scene({ triggerElement: ".safety--1", duration: '0', triggerHook: '0.45' })
//.addIndicators({ name: "design" })
.addTo(controller);

safety1.on("enter", function (event) {
    $('.safety--1').addClass('isEntered');
    safety1.destroy();
});
// safety1.on("leave", function (event) {
//     $('.safety--1').removeClass('isEntered');
// });

var safety2 = new ScrollMagic.Scene({ triggerElement: ".safety--2", duration: '0', triggerHook: '0.45' })
//.addIndicators({ name: "design" })
.addTo(controller);

safety2.on("enter", function (event) {
    $('.safety--2').addClass('isEntered');
    safety1.destroy();
});
// safety2.on("leave", function (event) {
//     $('.safety--2').removeClass('isEntered');
// });

var safety3 = new ScrollMagic.Scene({ triggerElement: ".safety--3", duration: '0', triggerHook: '0.45' })
//.addIndicators({ name: "design" })
.addTo(controller);

safety3.on("enter", function (event) {
    $('.safety--3').addClass('isEntered');
    safety1.destroy();
});
// safety3.on("leave", function (event) {
//     $('.safety--3').removeClass('isEntered');
// });

var safety4 = new ScrollMagic.Scene({ triggerElement: ".safety--4", duration: '0', triggerHook: '0.45' })
//.addIndicators({ name: "design" })
.addTo(controller);

safety4.on("enter", function (event) {
    $('.safety--4').addClass('isEntered');
    safety1.destroy();
});
// safety4.on("leave", function (event) {
//     $('.safety--4').removeClass('isEntered');
// });

//Parallax
var rellax = new Rellax('.s-parallax__list--right', {
    center: true,
    speed: 5
});

//Specs
new Vue({
    el: '#specs',
    data: {
        success: true,
        specifications: [],
        modifications: [],
        footnotes: []
    },
    methods: {
        getData: function () {
            var that = this;

            axios.get('https://api.cofigurator.hyundai.ru/car/modifications/27')
                .then(function (response) {
                    that.specifications = response.data.specifications;
                    that.modifications = response.data.modifications;
                    that.footnotes = response.data.footnotes
                    that.success = true;
                })
                .catch(function (error) {
                    that.success = false;
                    console.log(error);
                });
        },
        dropdown: function(index) {
            $(this.$refs[index]).slideToggle();
            $(this.$refs['arrow-' + index]).toggleClass('rotate');
        }
    },
    mounted: function () {
        this.getData();
    }
})