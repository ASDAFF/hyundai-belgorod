var allowFirstAnimation = false;

//Если прелоадер не сработал
$(window).on('load', function() {
   $('.preloader').hide();
});

$(function() {
    //ScrollMagic Controller
    var controller = new ScrollMagic.Controller({});

    //ProgressBar
    var progress = {
        from: 0,
        to: 0,
        setPosition: function(to, f) {
            if (this.from == 100 && to == 100) {
                this.from = 0;
            } else {
                this.to = to;
            }
            

            //console.log(this.from, this.to, f);
            
            var progressBar = new TimelineMax();

            progressBar
                .fromTo('.scrollbar__indicator', 1, {
                    width: this.from + '%'
                }, {
                    width: this.to + '%'
                })

            this.from = this.to;
        },
        reset: function() {
            this.from = 0;
            this.to = 0;
        }
    }
    
    //Подсветка текущего блока при прокрутке и добавление прогресс бара
    var activeBlock = {
        active: null,
        setAcive: function(section) {
            if (typeof section == 'undefined' || this.active == section) {
                return null;
            }

            var li = document.createElement('li'),
                pb = document.createElement('div'),
                indicator = document.createElement('div'),
                progressBar = new TimelineMax({
                    onComplete: function() {
                        this.obj.remove();
                    }
                }),
                show = new TimelineMax();

            pb.classList.add('scrollbar');
            indicator.classList.add('scrollbar__indicator');
            li.classList.add('nav__item');
            li.classList.add('nav__item--scrollbar');

            pb.appendChild(indicator);
            li.appendChild(pb);

            this.active = section;

            $('.nav__item').removeClass('active');

            progressBar.obj = $('.nav__item--scrollbar');
            progressBar
                .to('.scrollbar', 0.5, {
                    ease: Expo.easeOut,
                    width: 0
                })
                .to('.nav__item--scrollbar', 0.5, {
                    ease: Expo.easeOut,
                    margin: 0
                }, '-=0.5')

            $('.nav__item').each(function(i, item) {
                if ($(item).data('section') == section) {
                    $(item).addClass('active');
                    $(item).after(li);
                    show
                        .to(pb, 0.5, {
                            ease: Expo.easeOut,
                            width: '230px'
                        })

                }
            })
        }
    }
    
    //Устанока активного пункта в меню при старте
    activeBlock.setAcive('start');

    $('.nav__link').on('click', function(e) {
        e.preventDefault();

        var hash = this.hash;

        allowNextSlide = true;
        allowPrevSlide = true;
        allowNextSlideAfterScroll = true;
        allowPrevSlideAfterScroll = true;
        toSlide = true;

        if (hash == '#start') {
            $.fn.fullpage.moveTo(1);
            progress.reset();
        }
        if (hash == '#design') {
            $.fn.fullpage.moveTo(2);
            s2a.reset();
            s2a.init('down');
            progress.reset();
        }
        if (hash == '#dynamic') {
            $.fn.fullpage.moveTo(4);
            s4a.reset();
            s4a.init('down');
            progress.reset();
        }
        if (hash == '#comfort') {
            $.fn.fullpage.moveTo(6);
            s5a.reset();
            s5a.init('down');
            progress.reset();
            sc2a.resetScrollPosition();
        }
        if (hash == '#safety') {
            $.fn.fullpage.moveTo(8);
            s6a.reset(); 
            s6a.init('down'); 
            progress.reset();
        }
        if (hash == '#config') {
            $.fn.fullpage.moveTo(10);
            ca.init('down');
            progress.reset();
        }
        toSlide = false;
    })

    //Анимация 1 экрана после загрузки фонового изображения
    var slide1Enter = new TimelineMax({
        paused: true
    });

    slide1Enter.to($('.slide1-anim-1'), 1, {
            transform: 'translateY(0%)'
        })
        .to($('.slide1-anim-2'), 1, {
            transform: 'translateY(0%)'
        }, '-=0.5')
        .from($('.blue-b'), 1, {
            transform: 'translateX(-100%)',
            ease: Expo.easeOut
        })
        .from($('.blue-b div'), 0.5, {
            opacity: 0
        }, '-=0.3');

    setTimeout(function() {
            slide1Enter.play();
    }, 5000);

    //OnePageScroll
    var allowNextSlide = true,
        allowPrevSlide = true,
        allowNextSlideAfterScroll = true,
        allowPrevSlideAfterScroll = true,
        toSlide = false;

    $('#fullpage').fullpage({
        verticalCentered: false,
        sectionSelector: '.js-fullpage',
        fixedElements: '.header-primary, .sub-menu',
        afterLoad: function (link, index) {
            if (index == 1) {
                progress.setPosition(100, 3);

                function interval() {
                    setTimeout(function() {
                        if (allowFirstAnimation) {
                            slide1Enter.play();
                        } else {
                            interval();
                        }
                    }, 500)
                }

                interval();
                
            }
        },
        onLeave: function (index, nextIndex, direction) {
            //console.log('toSlide', toSlide);
            //Если перемещаемся в раздел не по ссылке из меню
            if (!toSlide) {
                //console.log('ff allow', allowNextSlide, allowPrevSlide);
                if (index == 1) {
                    progress.reset();
                }
                //Slide 2
                if (nextIndex == 2 && direction == 'up' && allowPrevSlide) {
                    s2a.init(direction);
                }
                if (nextIndex == 2 && direction == 'down' && allowNextSlide) {
                    s2a.init(direction);
                }

                if (index == 2 && direction == 'down' && !allowNextSlide) {
                    s2a.run(direction);

                    return false;
                }
                if (index == 2 && direction == 'up' && !allowPrevSlide) {
                    s2a.run(direction);

                    return false;
                }
                //Slide 2 leave
                if (index == 2) {
                    s2a.leave(direction);
                }
                //--------

                //Slide 3
                if (nextIndex == 3 && (direction == 'up' && allowPrevSlide)) {
                    s3a.init(direction);
                }
                if (nextIndex == 3 && (direction == 'down' &&  allowNextSlide)) {
                    s3a.init(direction);
                }
                //Slide 3 leave
                if (index == 3 && direction == 'up') {
                    s3a.leave(direction);
                }
                if (index == 3) {
                    progress.reset();
                }
                //--------

                //Slide 4
                if (nextIndex == 4 && (direction == 'up' && allowPrevSlide)) {
                    s4a.init(direction);
                }
                if (nextIndex == 4 && (direction == 'down' && allowNextSlide)) {
                    s4a.init(direction);
                }
                if (index == 4 && direction == 'down' && !allowNextSlide) {
                    s4a.run(direction);

                    return false;
                }
                if (index == 4 && direction == 'up' && !allowPrevSlide) {
                    s4a.run(direction);

                    return false;
                }
                //Slide 4 leave
                if (index == 4) {
                    s4a.leave(direction);
                }
                //--------

                //Slide 4-1
                if (nextIndex == 5 && (direction == 'up' && allowPrevSlide)) {
                    s41a.init(direction);
                }
                if (nextIndex == 5 && (direction == 'down' && allowNextSlide)) {
                    s41a.init(direction);
                }
                //Slide 4-1 leave
                if (index == 5 && direction == 'up') {
                    s41a.leave(direction);
                }
                if (index == 5) {
                    progress.reset();
                }
                //--------

                //Slide 5
                if (nextIndex == 6 && (direction == 'up' && allowPrevSlide)) {
                    s5a.init(direction);
                }
                if (nextIndex == 6 && (direction == 'down' && allowNextSlide)) {
                    s5a.init(direction);
                }
                if (index == 6 && direction == 'down' && !allowNextSlide) {
                    s5a.run(direction);

                    return false;
                }
                if (index == 6 && direction == 'up' && !allowPrevSlide) {
                    s5a.run(direction);

                    return false;
                }
                //Slide 5 leave
                if (index == 6) {
                    s5a.leave(direction);
                }
                //--------

                //Slide Comfort 2
                if (nextIndex == 7 && (direction == 'up' && allowPrevSlide)) {
                    sc2a.init(direction);
                }
                if (nextIndex == 7 && (direction == 'down' && allowNextSlide)) {
                    sc2a.init(direction);
                }

                if (index == 7 && sc2a.scrollCounter >= 1) {
                    allowNextSlideAfterScroll = true;
                    console.log('scroll end');
                    sc2a.counter = 0;
                }

                if (index == 7 && direction == 'down' && !allowNextSlideAfterScroll) {
                    //Блокируем смену слайда до окончания скрола

                    return false;
                }


                if (index == 7 && direction == 'up' && !allowPrevSlideAfterScroll) {
                    //Блокируем смену слайда до окончания скрола

                    return false;
                }
                //Slide Comfort 2 leave
                if (index == 7) {
                    sc2a.leave(direction);
                }
                //--------

                //Slide 6

                if (nextIndex == 8 && (direction == 'up' && allowPrevSlide)) {
                    s6a.init(direction);
                }
                if (nextIndex == 8 && (direction == 'down' && allowNextSlide)) {
                    s6a.init(direction);
                }
                if (index == 8 && direction == 'down' && !allowNextSlide) {
                    s6a.run(direction);

                    return false;
                }
                if (index == 8 && direction == 'up' && !allowPrevSlide) {
                    s6a.run(direction);

                    return false;
                }
                //Slide 6 leave
                if (index == 8) {
                    s6a.leave(direction);
                }
                //--------

                //Slide Safety 2
                if (nextIndex == 9 && (direction == 'up' && allowPrevSlide)) {
                    ss2a.init(direction);
                }
                if (nextIndex == 9 && (direction == 'down' && allowNextSlide)) {
                    ss2a.init(direction);
                }

                if (index == 9 && direction == 'down' && !allowNextSlideAfterScroll) {
                    //Блокируем смену слайда до окончания скрола

                    return false;
                }


                if (index == 9 && direction == 'up' && !allowPrevSlideAfterScroll) {
                    //Блокируем смену слайда до окончания скрола

                    return false;
                }
                //Slide Comfort 2 leave
                if (index == 9) {
                    ss2a.leave(direction);
                }
                //--------

                //Slide Config
                if (nextIndex == 10 && (direction == 'up' && allowPrevSlide)) {
                    ca.init(direction);
                }
                if (nextIndex == 10 && (direction == 'down' && allowNextSlide)) {
                    ca.init(direction);
                }
                //Slide Config leave
                if (index == 10 && direction == 'up') {
                    ca.leave(direction);
                }
                //--------

                //Slide Table
                if (nextIndex == 11 && (direction == 'up' && allowPrevSlide)) {
                    st2a.init(direction);
                }
                if (nextIndex == 11 && (direction == 'down' && allowNextSlide)) {
                    st2a.init(direction);
                }

                if (index == 11 && direction == 'down' && !allowNextSlideAfterScroll) {
                    //Блокируем смену слайда до окончания скрола

                    return false;
                }


                if (index == 11 && direction == 'up' && !allowPrevSlideAfterScroll) {
                    //Блокируем смену слайда до окончания скрола

                    return false;
                }
                //Slide Comfort 2 leave
                if (index == 11) {
                    st2a.leave(direction);
                }
            //--------
            }

            

            //Смещение для правильного позиционирования слайдов при отступе
            if (direction == 'down') {
                $('.main').css('padding-top', '0');
            }
            if (direction == 'up') {
                $('.main').css('padding-top', '105px');
            }

            if (nextIndex == 1) {
                activeBlock.setAcive('start');
            }
            if (nextIndex == 2 || nextIndex == 3) {
                activeBlock.setAcive('design');
            }
            if (nextIndex == 4 || nextIndex == 5) {
                activeBlock.setAcive('dynamic');
            }
            if (nextIndex == 6 || nextIndex == 7) {
                activeBlock.setAcive('comfort');
            }
            if (nextIndex == 8 || nextIndex == 9) {
                activeBlock.setAcive('safety');
            }
            if (nextIndex > 9) {
                activeBlock.setAcive('config');
            }
        }
    });


    //Общие для всех блоков переменные
    var descriptionHeight = $('.js-description-get-height').height() + 'px',
        offset = -($('.main-header').outerHeight() + $('.sub-menu').outerHeight());

    //Контроллер анимации на 2 слайде
    var s2a = {
        counter: 0,
        length: 3,
        allowNext: true,
        init: function(direction) {
            if (direction == 'down') {
                if (this.counter != this.length){
                    allowNextSlide = false;
                }
                
                slide2Enter.play();
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
            }
            if (direction == 'up') {
                slide2Enter.play();
        
                if (this.counter != 0) {
                    allowPrevSlide = false;
                } else {
                    progress.setPosition(0);
                }
                if (this.counter != this.length) {
                    allowNextSlide = false;
                } else {
                    progress.setPosition(75);
                }
            } 
        },
        leave: function (direction) {
            if (direction == 'down') {
                allowPrevSlide = true;

                slide2Enter.progress(1);
                slide2Enter.reverse();
            }
            if (direction == 'up') {
                allowNextSlide = true;

                slide2Enter.progress(1);
                slide2Enter.reverse();
            } 
        },
        run: function (direction) {
            //console.log(this.allowNext);
            if (!this.allowNext) {
                return null;
            }

            //Вниз
            if (direction == 'down') {
                this.counter++;
                allowPrevSlide = false;

                if (this.counter == 1) {
                    grillZoom.play();

                    this.allowNext = false;
                    progress.setPosition(25);

                    return null;
                }
                if (this.counter == 2) {
                    grillLeave.play();

                    this.allowNext = false;
                    progress.setPosition(50);

                    return null;
                }
                if (this.counter == 3) {
                    lightLeave.play();

                    this.allowNext = false;

                    progress.setPosition(75);
                    
                    return null;
                }
            } else {
                //Вверх
                this.counter--;
                allowNextSlide = false;

                if (this.counter == 0) {
                    grillZoom.progress(1);
                    grillZoom.reverse();

                    //slide2Enter.play();

                    this.allowNext = false;
                    allowPrevSlide = true;
                    progress.setPosition(0);

                    return null;
                }
                if (this.counter == 1) {
                    grillLeave.progress(1);
                    grillLeave.reverse();

                    this.allowNext = false;
                    progress.setPosition(25);

                    return null;
                }
                if (this.counter == 2) {
                    lightLeave.progress(1);
                    lightLeave.reverse();

                    this.allowNext = false;
                    progress.setPosition(50);

                    return null;
                }
            }
            
        },
        setAllow: function (flag) {
            this.allowNext = true;
            //console.log('allow', this.allowNext);
        },
        reset: function() {
            lightLeave.totalProgress(0, true);
            lightLeave.pause();

            grillLeave.totalProgress(0, true);
            grillLeave.pause();

            grillZoom.totalProgress(0, true);
            grillZoom.pause();

            this.counter = 0;
        }
    }
    //Анимация появления элемментов 2 слайда
    var slide2Enter = new TimelineMax({
            paused: true
        }),
        slide2Zoom = new TimelineMax({
            paused: true,
            //onComplete: s2a.setAllow.bind(s2a)
        }),
        grillZoom = new TimelineMax({
            paused: true,
            onComplete: s2a.setAllow.bind(s2a),
            onReverseComplete: s2a.setAllow.bind(s2a)
        }),
        grillLeave = new TimelineMax({
            paused: true,
            onComplete: s2a.setAllow.bind(s2a),
            onReverseComplete: s2a.setAllow.bind(s2a)
        }),
        lightLeave = new TimelineMax({
            paused: true,
            onComplete: function() {
                allowNextSlide = true;
                s2a.setAllow();
            },
            onReverseComplete: function() {   
                s2a.setAllow();
            }  
        }),
        ledLeave = new TimelineMax({
            paused: true,
            onComplete: s2a.setAllow.bind(s2a),
            onReverseComplete: s2a.setAllow.bind(s2a)
        }),
        transformOriginLilght = { 'left': 60, 'top': 90 },
        transformOriginLed = { 'left': 76, 'top': 69 };

    slide2Enter
        .to($('.slide2-anim-1'), 1, {
            transform: 'translateY(0px)'
        })

    // slide2Zoom
    //     .add('start')
    //     .to('.slide2-anim-1', 1, {
    //         fontSize: 20,
    //         color: '#c3bab4',
    //         opacity: 0.35
    //     })
        
    grillZoom
        .add('start')
        .to($('.slide2-anim-1'), 0.5, {
            transform: 'translateY(105%)'
        })
        .set('.slide2-anim-1', {
            fontSize: 20,
            color: '#c3bab4',
            opacity: 0.35
        })
        .to($('.slide2-anim-1'), 0.5, {
            transform: 'translateY(0)'
        })

        //Решетка радиатора
        .add('grill')
        .to('.slide2-anim-2', 0, {
            transformOrigin: '60% 90%'
        })
        .set('.slide2-anim-2', {
            willChange: 'transform'
        })
        .to('.slide2-anim-2', 1, {
            ease: Expo.easeOut,
            transform: 'scale(3)'
        })
        .set('.slide2-anim-2', {
            willChange: 'auto'
        })
        .to('.slide2__shade--1', 0.5, {
            opacity: 1
        })
        .to('.slide2-anim-1', 1, {
            transform: 'translateY(0)'
        }, 'grill')

        //Появление надписей о решётке
        .to('.description--grille-anim-1', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.description--grille-anim-2', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to('.description--grille-anim-3', 0.4, {
            opacity: 1
        }, '-=0.2')

        //Убрать надписи о решётке
    grillLeave
        .to('.description--grille-anim-1', 0.4, {
            transform: 'translateY(105%)'
        })
        .to('.description--grille-anim-2', 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to('.description--grille-anim-3', 0.4, {
            opacity: 0
        }, '-=0.2')

        //Фары
        .to('.slide2__shade--1', 0.5, {
            opacity: 0
        })
        // .to('.slide2-anim-2', 1, {
        //     transform: 'scale(2)'
        // })
        .add('light')
        .set('.slide2-anim-2', {
            willChange: 'transform'
        })
        //.to(transformOriginLilght, 0.5, { left: 76, top: 69, roundProps: 'top, left', onUpdate: updateOriginLight })
        .to('.slide2-anim-2', 0.5, {
            transform: 'translate(-70%, 92%) scale(5.5)'
        })
        // .to('.slide2-anim-2', 1, {
        //     ease: Expo.easeOut,
        //     transform: 'scale(5.5)'
        // },'-=0.5')
        .set('.slide2-anim-2', {
            willChange: 'auto'
        })
        .to('.slide2__shade--2', 0.5, {
            opacity: 1
        })

        //Показать надписи о фарах
        .to('.description--light-anim-1', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.description--light-anim-2', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to('.description--light-anim-3', 0.4, {
            opacity: 1
        }, '-=0.2')

    function updateOriginLight() {
        TweenLite.set('.slide2-anim-2', { transformOrigin: transformOriginLilght.left + '% ' + transformOriginLilght.top + '%' });
    }

        //Убрать надписи о фарах
    lightLeave
        .to('.description--light-anim-1', 0.4, {
            transform: 'translateY(105%)'
        })
        .to('.description--light-anim-2', 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to('.description--light-anim-3', 0.4, {
            opacity: 0
        }, '-=0.2')

        .to('.slide2__shade--2', 0.5, {
            opacity: 0
        })
        // .to('.slide2-anim-2', 1, {
        //     transform: 'scale(2)'
        // })
        //Светодиоды
        .add('led')
        .set('.slide2-anim-2', {
            willChange: 'transform'
        })
        //.to(transformOriginLed, 0.5, { left: 77, top: 78, roundProps: 'top, left', onUpdate: updateOriginLed })
        .to('.slide2-anim-2', 0.5, {
            transform: 'translate(-97%, 80%) scale(7)'
        })
        // .to('.slide2-anim-2', 1, {
        //     ease: Expo.easeOut,
        //     transform: 'scale(7)'
        // },'-=0.5')
        .set('.slide2-anim-2', {
            willChange: 'auto'
        })
        .to('.slide2__shade--3', 0.5, {
            opacity: 1
        })

        //Показать надписи о фарах
        .to('.description--led-anim-1', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.description--led-anim-2', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to('.description--led-anim-3', 0.4, {
            opacity: 1
        }, '-=0.2')

    function updateOriginLed() {
        TweenLite.set('.slide2-anim-2', { transformOrigin: transformOriginLed.left + '% ' + transformOriginLed.top + '%' });
    }

    ledLeave
        .to('.description--led-anim-4', 10, {
            transform: 'translateY(-' + descriptionHeight + ')'
        })
        .to('.slide2__shade--3', 0.5, {
            opacity: 0
        })
        .to('.slide2-anim-2', 2, {
            transform: 'scale(1)'
        })

    $(window).on('resize', function() {
        
    })

    //Анимация смена изображения дисков
    var wheels = new TimelineMax()

    wheels
        .to('.slide3-anim-3', 1, {
            opacity: 0,
        })
        .to('.slide3-anim-2', 1, {
            opacity: 0,
            delay: 1
        })

    wheels.repeatDelay(1);
    wheels.yoyo(true);
    wheels.repeat(-1);

    //Контроллер анимации на 3 слайде
    var s3a = {
        init: function(direction) {
            if (direction == 'down') {
                slide3Enter.play();
                progress.setPosition(100, 4);
            } else {
                slide3Enter.play();
                setTimeout(function () {
                    progress.setPosition(100, 5);
                }, 200)
            }
        },
        leave: function(direction) {
            if (direction == 'up') {
                slide3Enter.progress(1);
                slide3Enter.reverse();
                progress.setPosition(75);
            } else {
                slide3Enter.progress(1);
                slide3Enter.reverse();
            }
        } 
    }
    //Анимация появления текста на 3 слайде
    var slide3Enter = new TimelineMax({
        paused: true
    });

    slide3Enter
        .from('.slide3-anim-4', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.slide3-anim-5', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.slide3-anim-6', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.slide3-anim-7', 0.5, {
            transform: 'translateY(100%)'
        })

    // a.on("enter", function (event) {
    //     $('#video').get(0).play();
    // });

    
    //Счётчики
    var count1 = { 
        score: 0,
        update: function() {
            $('#count1').text(this.score);
        }
    };
    var count2 = {
        score: 0,
        update: function () {
            $('#count2').text(this.score);
        }
    };
    var count3 = {
        score: 0,
        update: function () {
            $('#count3').text(this.score);
        }
    };
    var count4 = {
        score: 0,
        update: function () {
            $('#count4').text(this.score);
        }
    };

     //Контроллер анимации на 4 слайде
    var s4a = {
        counter: 0,
        length: 2,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                if (this.counter != this.length) {
                    allowNextSlide = false;
                }
                slide4Enter.play();
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
            }
            if (direction == 'up') {
                slide4Enter.play();
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
                if (this.counter != this.length) {
                    allowNextSlide = false;
                }
            }
        },
        leave: function (direction) {
            if (direction == 'down') {
                allowPrevSlide = true;

                slide4Enter.progress(1);
                slide4Enter.reverse();
            }
            if (direction == 'up') {
                allowNextSlide = true;

                slide4Enter.progress(1);
                slide4Enter.reverse();
            }
        },
        run: function (direction) {
            //console.log(this.allowNext);
            if (!this.allowNext) {
                return null;
            }

            //Вниз
            if (direction == 'down') {
                this.counter++;
                allowPrevSlide = false;

                if (this.counter == 1) {
                    slide4Zoom.play();

                    this.allowNext = false;
                    progress.setPosition(33);

                    return null;
                }
                if (this.counter == 2) {
                    a22Leave.play();

                    this.allowNext = false;
                    
                    progress.setPosition(66);

                    return null;
                }
            } else {
                //Вверх
                this.counter--;
                allowNextSlide = false;

                if (this.counter == 0) {
                    slide4Zoom.progress(1);
                    slide4Zoom.reverse();

                    this.allowNext = false;
                    allowPrevSlide = true;
                    progress.setPosition(0);

                    return null;
                }
                if (this.counter == 1) {
                    a22Leave.progress(1);
                    a22Leave.reverse();

                    this.allowNext = false;
                    progress.setPosition(33);

                    return null;
                }
            }

        },
        setAllow: function (flag) {
            this.allowNext = true;
            //console.log('allow', this.allowNext);
        },
        reset: function () {
            a22Leave.totalProgress(0, true);
            a22Leave.pause();

            slide4Zoom.totalProgress(0, true);
            slide4Zoom.pause();

            this.counter = 0;
        }
     }

    //Контроллер анимации на 4-1 слайде
    var s41a = {
        counter: 0,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                htrac.play();
                progress.setPosition(100, 6);
            } else {
                htrac.play();
                setTimeout(function() {
                    progress.setPosition(100, 7);
                }, 200)
            }
        },
        leave: function (direction) {
            if (direction == 'up') {
                htrac.progress(1);
                htrac.reverse();
                progress.setPosition(66);
            } else {
                htrac.progress(1);
                htrac.reverse();
            }
        }

    }

    //Анимация на 4 слайде
    var slide4Enter = new TimelineMax({
            paused: true
        }),
        slide4Zoom = new TimelineMax({
            paused: true,
            onComplete: s4a.setAllow.bind(s4a),
            onReverseComplete: s4a.setAllow.bind(s4a)
        }),
        a22Leave = new TimelineMax({
            paused: true,
            onComplete: function() {
                allowNextSlide = true
                s4a.setAllow();
            },
            onReverseComplete: s4a.setAllow.bind(s4a)
        }),
        a24Leave = new TimelineMax({
            paused: true,
            onComplete: s4a.setAllow.bind(s4a),
            onReverseComplete: s4a.setAllow.bind(s4a)
        }),
        htrac = new TimelineMax({
            paused: true,
            onComplete: s4a.setAllow.bind(s4a),
            onReverseComplete: s4a.setAllow.bind(s4a)
        }),
        htracLeave = new TimelineMax({
            paused: true,
            onComplete: s4a.setAllow.bind(s4a),
            onReverseComplete: s4a.setAllow.bind(s4a)
        });

    slide4Enter
        .to('.slide4-anim-1', 1, {
            transform: 'translateY(0px)'
        })

    slide4Zoom
        .to('.slide4-anim-1', 0.5, {
            transform: 'translateY(105%)'
        })
        .add('start')
        .set('.slide4-anim-1', {
            fontSize: 20,
            color: '#c3bab4',
            opacity: 0.35
        })
        .to('.slide4-anim-1', 0.5, {
            transform: 'translateY(0)'
        })

        .from('.slide4-anim-2', 0.6, {
            opacity: 0
        })
        .to('.description-22-anim-1', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.description-22-anim-2', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .from('.description-22-anim-3', 0.4, {
            opacity: 0
        }, '-=0.2')
        .from('.description-22-anim-4', 0.4, {
            opacity: 0
        }, '-=0.2')
        .to(count1, 2, { score: "+=200", roundProps: "score", onUpdate: count1.update.bind(count1), ease: Linear.easeNone }, 'start')
        .to(count2, 2, { score: "+=440", roundProps: "score", onUpdate: count2.update.bind(count2), ease: Linear.easeNone }, 'start')

    a22Leave
        .add('start')
        .to('.description-22-anim-1', 0.4, {
            transform: 'translateY(105%)'
        })
        .to('.description-22-anim-2', 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to('.description-22-anim-3', 0.4, {
            opacity: 0
        }, '-=0.2')
        .to('.description-22-anim-4', 0.4, {
            opacity: 0
        }, '-=0.2')

  
        .to('.description-24-anim-1', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.description-24-anim-2', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .from('.description-24-anim-3', 0.4, {
            opacity: 0
        }, '-=0.2')
        .from('.description-24-anim-4', 0.4, {
            opacity: 0
        }, '-=0.2')
        .to(count3, 2, { score: "+=188", roundProps: "score", onUpdate: count3.update.bind(count3), ease: Linear.easeNone }, 'start')
        .to(count4, 2, { score: "+=241", roundProps: "score", onUpdate: count4.update.bind(count4), ease: Linear.easeNone }, 'start')

    a24Leave
        .add('start')
        .to('.description-24-anim-5', 10, {
            transform: 'translateY(-' + descriptionHeight + ')'
        }, 'start')
        .to('.description-24-anim-3', 10, {
            transform: 'translateY(-' + descriptionHeight + ')'
        }, 'start')
        .to('.description-24-anim-4', 10, {
            transform: 'translateY(-100vh)'
        }, 'start')

    htrac
        .to('.description-h-anim-1', 0.4, {
            transform: 'translateY(0)'
        }, '+=1')
        .to('.description-h-anim-2', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to('.description-h-anim-3', 0.4, {
            opacity: 1
        }, '-=0.2')

    htracLeave
        .add('start')
        .to('.description-h-anim-4', 10, {
            transform: 'translateY(-' + descriptionHeight + ')'
        }, 'start')


    //Контроллер анимации на 5 слайде
    var s5a = {
        counter: 0,
        length: 3,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                if (this.counter != this.length) {
                    allowNextSlide = false;
                }
                slide5Enter.play();
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
            }
            if (direction == 'up') {
                slide5Enter.play();
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
                if (this.counter != this.length) {
                    allowNextSlide = false;
                }
            }
        },
        leave: function (direction) {
            if (direction == 'down') {
                allowPrevSlide = true;
            }
            if (direction == 'up') {
                allowNextSlide = true;

                slide5Enter.progress(1);
                slide5Enter.reverse();
            }
        },
        run: function (direction) {
            //console.log(this.allowNext);
            if (!this.allowNext) {
                return null;
            }

            //Вниз
            if (direction == 'down') {
                this.counter++;
                allowPrevSlide = false;

                if (this.counter == 1) {
                    slide5Scroll.play();

                    this.allowNext = false;
                    progress.setPosition(25);

                    return null;
                }
                if (this.counter == 2) {
                    navigationLeave.play();

                    this.allowNext = false;
                    progress.setPosition(50);

                    return null;
                }
                if (this.counter == 3) {
                    lcdLeave.play();
                    inerierChange.play();

                    this.allowNext = false;

                    progress.setPosition(75);

                    return null;
                }
            } else {
                //Вверх
                this.counter--;
                allowNextSlide = false;

                if (this.counter == 0) {
                    slide5Scroll.progress(1);
                    slide5Scroll.reverse();

                    this.allowNext = false;
                    allowPrevSlide = true;
                    progress.setPosition(0);

                    return null;
                }
                if (this.counter == 1) {
                    navigationLeave.progress(1);
                    navigationLeave.reverse();

                    this.allowNext = false;
                    progress.setPosition(25);

                    return null;
                }
                if (this.counter == 2) {
                    lcdLeave.progress(1);
                    lcdLeave.reverse();

                    this.allowNext = false;
                    progress.setPosition(50);

                    return null;
                }
            }

        },
        setAllow: function (flag) {
            this.allowNext = true;
            //console.log('allow', this.allowNext);
        },
        reset: function () {
            lcdLeave.totalProgress(0, true);
            lcdLeave.pause();

            navigationLeave.totalProgress(0, true);
            navigationLeave.pause();

            slide5Scroll.totalProgress(0, true);
            slide5Scroll.pause();

            this.counter = 0;
        }
    }
    //5 слайд
    var slide5Enter = new TimelineMax({
            paused: true
        }),
        slide5Scroll = new TimelineMax({
            paused: true,
            onComplete: s5a.setAllow.bind(s5a),
            onReverseComplete: s5a.setAllow.bind(s5a)
        }),
        navigationLeave = new TimelineMax({
            paused: true,
            onComplete: s5a.setAllow.bind(s5a),
            onReverseComplete: s5a.setAllow.bind(s5a)
        }),
        lcdLeave = new TimelineMax({
            paused: true,
            onComplete: function() {
                allowNextSlide = true;
                s5a.setAllow();
            },
            onReverseComplete: s5a.setAllow.bind(s5a)
        }),
        interierLeave = new TimelineMax({
            paused: true,
            onComplete: s5a.setAllow.bind(s5a),
            onReverseComplete: s5a.setAllow.bind(s5a)
        }),
        inerierChange = new TimelineMax({
            paused: true
        }),
        salonChange = new TimelineMax({
            paused: true
        }),
        comfort2Enter = new TimelineMax({
            paused: true
        }),
        transformOriginLcd = { 'left': 74, 'top': 20 };
        transformOriginInterier = { 'left': 48, 'top': 14 };

    slide5Enter
        .to($('.slide5-anim-1'), 1,{
            transform: 'translateY(0)'
        })

    slide5Scroll
        .set('.slide5-anim-2', {
            willChange: 'transform'
        })
        .add('start-zoom')

        .set('.slide5-anim-2', {
            transformOrigin: '74% 20%'
        }, 'start-zoom')

        .to('.slide5-anim-1', 0.5, {
            transform: 'translateY(105%)'
        })
        .to('.slide5-anim-1', 1, {
            fontSize: 20,
            color: '#c3bab4',
            opacity: 0.75
        }, 'start-zoom')
        .to('.slide5-anim-1', 0.5, {
            transform: 'translateY(0)'
        })
        .to('.slide5-anim-3', 1, {
            opacity: 0.4
        }, 'start-zoom')
        
        .to('.slide5-anim-2', 1, {
            transform: 'scale(2.5)'
        }, 'start-zoom')
        .set('.slide5-anim-2', {
            willChange: 'auto'
        })
        .to('.slide5-anim-3', 0.5, {
            opacity: 0
        })
        .to('.comfort__zone--1', 0.5, {
            opacity: 1
        }, '-=0.5')
        .from($('.sidebar--nav'), 1, {
            transform: 'translateX(100%)',
            ease: Expo.easeOut
        }, '-=0.5')

    //Navigation start
        .to($('.sidebar--nav-anim-1'), 0.4, {
            transform: 'translateY(0)'
        })
        .to($('.sidebar--nav-anim-2'), 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to($('.sidebar--nav-anim-3'), 0.4, {
            opacity: 1
        }, '-=0.2')

    navigationLeave
        .to($('.sidebar--nav-anim-1'), 0.4, {
            transform: 'translateY(105%)'
        })
        .to($('.sidebar--nav-anim-2'), 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to($('.sidebar--nav-anim-3'), 0.4, {
            opacity: 0
        }, '-=0.2')
        .add('start')
        .to($('.comfort__zone--1'), 1, {
            opacity: 0
        }, 'start')
        .to($('.sidebar--nav-anim-5'), 1, {
            opacity: 1
        }, 'start')
        .to($('.sidebar--nav-anim-6'), 1, {
            opacity: 0
        }, 'start+=0.5')
        
        //Navigation end
        //LCD start
        .set('.slide5-anim-2', {
            willChange: 'transform'
        })
        .add('lcd')
        
        .to(transformOriginLcd, 0.5, { left: 48, top: 14, roundProps: 'top, left', onUpdate: updateOriginLcd })
        .to('.slide5-anim-2', 0.5, {
            transform: 'scale(1.8)'
        }, '-=0.5')
        .set('.slide5-anim-2', {
            willChange: 'auto'
        })
        .to('.comfort__zone--2', 0.5, {
            opacity: 1
        })
        .fromTo('.sidebar--lcd-anim-6', 1, {
            opacity: 0
        }, {
            opacity: 1
        }, 'lcd-=0.5')

        .to($('.sidebar--lcd-anim-1'), 0.4, {
            transform: 'translateY(0)'
        })
        .to($('.sidebar--lcd-anim-2'), 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to($('.sidebar--lcd-anim-3'), 0.4, {
            opacity: 1
        }, '-=0.2')

    function updateOriginLcd() {
        TweenLite.set('.slide5-anim-2', { transformOrigin: transformOriginLcd.left + '% ' + transformOriginLcd.top + '%' });
    }

    lcdLeave
        .to($('.sidebar--lcd-anim-1'), 0.4, {
            transform: 'translateY(105%)'
        })
        .to($('.sidebar--lcd-anim-2'), 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to($('.sidebar--lcd-anim-3'), 0.4, {
            opacity: 0
        }, '-=0.2')
        .add('start')
        .to($('.comfort__zone--2'), 1, {
            opacity: 0
        }, 'start')
        .to($('.sidebar--lcd-anim-5'), 1, {
            opacity: 1
        }, 'start')
        .to('.sidebar--lcd-anim-6', 1, {
            opacity: 0
        }, 'start+=0.5')
        //LCD end

        //Interier start
        .add('interier')
        .set('.slide5-anim-2', {
            willChange: 'transform'
        })
        .to(transformOriginInterier, 0.5, { left: 111, top: 100, roundProps: 'top, left', onUpdate: updateOriginInterier })
        .to('.slide5-anim-2', 0.5, {
            transform: 'scale(3)'
        }, '-=0.5')
        .set('.slide5-anim-2', {
            willChange: 'auto'
        })
        .to('.comfort__zone--3', 0.5, {
            opacity: 1
        })
        .fromTo('.sidebar--interier-anim-6', 1, {
            opacity: 0
        }, {
            opacity: 1
        }, 'interier-=0.5')

        .to($('.sidebar--interier-anim-1'), 0.4, {
            transform: 'translateY(0)'
        })
        .to($('.sidebar--interier-anim-2'), 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to($('.sidebar--interier-anim-3'), 0.4, {
            opacity: 1
        }, '-=0.2')

    function updateOriginInterier() {
        TweenLite.set('.slide5-anim-2', { transformOrigin: transformOriginInterier.left + '% ' + transformOriginInterier.top + '%' });
    }

    interierLeave
        .to($('.sidebar--interier-anim-4'), 10, {
            transform: 'translateY(-' + descriptionHeight + ')'
        })

    comfort2Enter
        .from('.comfort2-anim-1', 0.5, {
            transform: 'translateY(100%)'
        }, '+=1')
        .from('.comfort2-anim-2', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.comfort2-anim-3', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.comfort2-anim-4', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.comfort2-anim-5', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.comfort2-anim-6', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.comfort2-anim-7', 0.5, {
            transform: 'translateY(100%)'
        })

    //Смена слайдов интерьера
    inerierChange
        .from('.sidebar--interier-anim-8', 1, {
            opacity: 0
        })
        .from('.sidebar--interier-anim-9', 1, {
            opacity: 0,
            delay: 1
        })
        .from('.sidebar--interier-anim-10', 1, {
            opacity: 0,
            delay: 1
        })

    inerierChange.repeatDelay(1);
    inerierChange.yoyo(true);
    inerierChange.repeat(-1);

    //Контроллер анимации на слайде Comfort 2
    var sc2a = {
        counter: 0,
        scrollCounter: 0,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                comfort2Enter.play();
                salonChange.play();

                if (scrollElemHeight - scrollContHeight != $('#scroll-container').scrollTop()) {
                    allowNextSlideAfterScroll = false;
                }
            } else {
                $('#scroll-container').scrollTop(scrollElemHeight - scrollContHeight);

                comfort2Enter.progress(0.6);
                comfort2Enter.play();
                salonChange.play();

                allowPrevSlideAfterScroll = false;
                setTimeout(function() {
                    progress.setPosition(100, 1);
                }, 200) 
            }
        },
        leave: function (direction) {
            if (direction == 'up') {
                comfort2Enter.progress(1);
                comfort2Enter.reverse();
                progress.setPosition(75);
            } else {
                progress.reset();
            }
            this.counter = 0;
            this.scrollCounter = 0;
            this.resetScroll();
        },
        holdScroll: function () {
            if (this.counter == 0) {
                allowNextSlideAfterScroll = false;
                allowPrevSlideAfterScroll = false;
                
                this.counter++;
            }     
        },
        resetScroll: function () {
            allowNextSlideAfterScroll = true;
            allowPrevSlideAfterScroll = true;
        },
        resetScrollPosition: function() {
            $('#scroll-container').scrollTop(0);
        }

    }

    //Определяем конец сколла
    var scrollContHeight = $('#scroll-container').outerHeight(),
        scrollElemHeight = $('#scroll-element').outerHeight();

    $('#scroll-container').on('scroll', function(e) {
        var scrollTop = this.scrollTop,
            percent = 0,
            scrollLength = scrollElemHeight - scrollContHeight;
        
        percent = Math.round((scrollTop / scrollLength) * 25);

        //console.log('scroll', percent);

        if (percent < 25) {
            progress.setPosition(75 + percent);
        }

        sc2a.holdScroll();

        if (scrollTop + scrollContHeight >= scrollElemHeight) {

            //Задержка перед выходом из блока
            console.log('hold');
            
            sc2a.scrollCounter++;
        }
        if (scrollTop == 0) {
            sc2a.counter = 0;
            allowPrevSlideAfterScroll = true;
            //console.log('scroll end');
        }
        
    })

    //Смена слайдов салона
    salonChange
        .from('.comfort2-anim-8', 1, {
            opacity: 0,
        })
        .from('.comfort2-anim-9', 1, {
            opacity: 0,
            delay: 1
        })

    salonChange.repeatDelay(1);
    salonChange.yoyo(true);
    salonChange.repeat(-1);
        
    //Контроллер анимации на 6 слайде
    var s6a = {
        counter: 0,
        lenght: 3,
        allowNext: true,
        init: function (direction) {
            //console.error('init s6a', 'direction', direction, 'counter', this.counter);

            allowNextSlide = true;
            allowPrevSlide = true;

            if (direction == 'down') {
                slide6Enter.play();
                this.allowNext = false;

                if (this.counter != this.length) {
                    allowNextSlide = false;
                }  
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
            }
            if (direction == 'up') {
                slide6Enter.play();
                if (this.counter != 0) {
                    allowPrevSlide = false;
                }
                if (this.counter != this.lenght) {
                    allowNextSlide = false;
                }
            }
            
        },
        leave: function (direction) {
            if (direction == 'down') {
                allowPrevSlide = true;
                slide6Enter.progress(1);
                slide6Enter.reverse();
            }
            if (direction == 'up') {
                slide6Enter.progress(1);
                slide6Enter.reverse();

                allowNextSlide = true;
            }
        },
        run: function (direction) {
            //console.log(this.allowNext, this.counter);
            if (!this.allowNext) {
                return null;
            }

            //Вниз
            if (direction == 'down') {
                this.counter++;
                allowPrevSlide = false;

                if (this.counter == 1) {
                    slide6Zoom.play();
                    schemaAnimate.play();

                    this.allowNext = false;
                    progress.setPosition(25);

                    return null;
                }
                if (this.counter == 2) {
                    circle6Reverse();
                    slide7Scroll.play();
                    
                    this.allowNext = false;
                    progress.setPosition(50);

                    return null;
                }
                if (this.counter == 3) {
                    circle8Reverse('down');

                    this.allowNext = false;
                    progress.setPosition(75);

                    return null;
                }
            } else {
                //Вверх
                this.counter--;
                allowNextSlide = false;

                if (this.counter == 0) {
                    circle6Reverse();
                    slide6Zoom.progress(1);
                    slide6Zoom.reverse();

                    this.allowNext = false;
                    progress.setPosition(0);

                    return null;
                }
                if (this.counter == 1) {
                    circle8Reverse('up');

                    this.allowNext = false;
                    progress.setPosition(25);

                    return null;
                }
                if (this.counter == 2) {
                    slide8Scroll.progress(1);
                    slide8Scroll.reverse();

                    this.allowNext = false;
                    progress.setPosition(50);

                    return null;
                }
            }

        },
        setAllow: function (flag) {
            this.allowNext = true;
            //console.log('allow', this.allowNext, flag);
        },
        reset: function () {
            slide8Scroll.totalProgress(0, true);
            slide8Scroll.pause();

            slide8Circle.totalProgress(0, true);
            slide8Circle.pause();

            slide7Scroll.totalProgress(0, true);
            slide7Scroll.pause();

            slide6Circle.totalProgress(0, true);
            slide6Circle.pause();
            
            slide6Zoom.totalProgress(0, true);
            slide6Zoom.pause();

            slide6Enter.totalProgress(0, true);
            slide6Enter.pause();

            this.counter = 0;
        }
    }
     //6 и последуюие слайды
    var slide6Enter = new TimelineMax({
            paused: true,
            onComplete: s6a.setAllow.bind(s6a, 1)
        }),
        slide6Zoom = new TimelineMax({
            paused: true,
            onComplete: function() {
                circle6Play();
            },
            onReverseComplete: function() {
                s6a.setAllow(2);
                allowPrevSlide = true;
            }
        }),
        slide6Circle = new TimelineMax({ 
            paused: true,
            onComplete: function() {
                s6a.setAllow(3);
            }
        }),
        slide7Scroll = new TimelineMax({
            paused: true,
            onComplete: function() {
                circle8Play();
            },
            onReverseComplete: function() {
                s6a.setAllow(4);
            }
        }),
        slide8Circle = new TimelineMax({ 
            paused: true,
            onComplete: s6a.setAllow.bind(s6a),
            onReverseComplete: function() {
                if (this.direction == 'up') {
                    slide7Scroll.progress(1);
                    slide7Scroll.reverse();
                } else {
                    slide8Scroll.play();
                }         
            } 
        }),
        slide8Scroll = new TimelineMax({
            paused: true,
            onComplete: function() {
                allowNextSlide = true;
                s6a.setAllow(5);
            },
            onReverseComplete: function () {
                circle8Play();
            } 
        }),
        slide9Scroll = new TimelineMax({
            paused: true,
            onComplete: s6a.setAllow.bind(s6a, 6)
        }),
        schemaAnimate = new TimelineMax({
            paused: true
        });


    slide6Enter
        .to('.slide6-anim-1', 1, {
            transform: 'translateY(0)'
        })
        .fromTo($('.slide6__circle1'), 0.6, {
            attr: {
                r: '0%'
            },
            ease: Back.easeOut.config(1.7)
        }, {
                attr: {
                    r: '30%'
                },
                ease: Back.easeOut.config(1.7)
            })
        .fromTo($('.slide6__circle2'), 0.6, {
            attr: {
                r: '0%'
            },
            ease: Back.easeOut.config(1.7)
        }, {
                attr: {
                    r: '50%'
                },
                ease: Back.easeOut.config(1.7)
            })

    slide6Zoom
        .add('start')
        .to('.slide6-anim-1', 0.5, {
            transform: 'translateY(105%)'
        })
        .set('.slide6-anim-1', {
            fontSize: 20,
            color: '#c3bab4',
            opacity: 0.75
        })
        .to('.slide6-anim-1', 0.5, {
            transform: 'translateY(0)'
        })
        .set('.slide7-anim-6', {
            attr: {
                r: 0
            }
        })
        .set('.slide7-anim-7', {
            attr: {
                r: 0
            }
        })
        .to($('.slide6__circle2'), 0.5, {
            attr: {
                r: '100%'
            },
            opacity: 0
        })
        .to($('.slide6__circle1'), 0.5, {
            attr: {
                r: '100%'
            },
            opacity: 0
        }, '-=0.25')
        .to('.slide6-anim-2', 0.7, {
            transform: 'translateX(-100%)'
        })
        .from('.slide7-anim-1', 0.7, {
            transform: 'translateX(100%)'
        }, '-=0.3')

        .add('car-stop')
        .to('.slide7-anim-2', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.slide7-anim-3', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .from('.slide7-anim-4', 0.4, {
            opacity: 0
        }, '-=0.2')

    function circle6Play() {
        slide6Circle.play();
    }
    function circle6Reverse() {
        slide6Circle.progress(1);
        slide6Circle.reverse();
    }

    slide6Circle
        .add('show-circle')
        .from('.slide7-anim-5', 0.5, {
            transform: 'scale(0)',
            opacity: 0
        }, 'show-circle')
        .fromTo($('.slide7-anim-6'), 0.7, {
            attr: {
                r: '0%'
            },
            ease: Power4.easeOut
        }, {
                attr: {
                    r: '50%'
                },
                ease: Power4.easeOut
            })
        .fromTo($('.slide7-anim-7'), 0.7, {
            attr: {
                r: '0%'
            },
            ease: Power4.easeOut
        }, {
                attr: {
                    r: '35%'
                },
                ease: Power4.easeOut
            }, '-=0.7')

    slide7Scroll
        .to('.slide7-anim-2', 0.4, {
            transform: 'translateY(105%)'
        })
        .to('.slide7-anim-3', 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to('.slide7-anim-4', 0.4, {
            opacity: 0
        }, '-=0.2')

        .to('.slide7-anim-1', 0.7, {
            transform: 'translateX(100%)'
        })
        .from('.slide8-anim-1', 0.7, {
            transform: 'translateX(-100%)'
        }, '-=0.3')

        .to('.slide8-anim-5', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .to('.slide8-anim-6', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')

    function circle8Play() {
        slide8Circle.play();
    }
    function circle8Reverse(direction) {
        slide8Circle.direction = direction;

        slide8Circle.progress(1);
        slide8Circle.reverse();
    }

    slide8Circle
        .add('show-circle8')
        .from('.slide8__line', 1, {
            width: 0
        }, 'show-circle8')
        .from('.slide8-anim-4', 0.7, {
            transform: 'scale(0)',
            opacity: 0
        }, 'show-circle8')
        .to($('.slide8-anim-2'), 0.7, {
            attr: {
                r: '50%'
            },
            ease: Power4.easeOut
        })
        .to($('.slide8-anim-3'), 0.7, {
            attr: {
                r: '35%'
            },
            ease: Power4.easeOut
        }, '-=0.7')
        .from('.slide8-anim-7', 0.7, {
            opacity: 0
        }, 'show-circle8+=0.5')
        .to('.slide8-anim-8', 0.7, {
            attr: {
                r: '29%'
            }
        }, 'show-circle8+=0.5')
        .to('.slide8-anim-9', 0.7, {
            attr: {
                r: '50%'
            }
        }, 'show-circle8+=0.5')

    slide8Scroll
        .to('.slide8-anim-5', 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')
        .to('.slide8-anim-6', 0.4, {
            transform: 'translateY(105%)'
        }, '-=0.2')

        .to('.slide8-anim-1', 0.7, {
            transform: 'translateX(-100%)'
        })
        .from('.slide9-anim-1', 0.7, {
            transform: 'translateX(100%)'
        }, '-=0.3')

        .add('show-circle9')
        .to('.slide9-anim-5', 0.4, {
            transform: 'translateY(0)'
        })
        .to('.slide9-anim-6', 0.4, {
            transform: 'translateY(0)'
        }, '-=0.2')
        .from('.slide9-anim-7', 0.4, {
            opacity: 0
        }, '-=0.2')

        .add('c')
        .to('.schema__point--tl .schema__circle1', 0.25, {
            attr: {
                r: 20
            }
        })
        .to('.schema__point--tl .schema__circle2', 0.25, {
            attr: {
                r: 35
            }
        }, '-=0.2')

        .to('.schema__point--bl .schema__circle1', 0.25, {
            attr: {
                r: 20
            }
        }, 'c+=0.2')
        .to('.schema__point--bl .schema__circle2', 0.25, {
            attr: {
                r: 35
            }
        }, '-=0.2')

        .to('.schema__point--br .schema__circle1', 0.25, {
            attr: {
                r: 20
            }
        }, 'c+=0.2')
        .to('.schema__point--br .schema__circle2', 0.25, {
            attr: {
                r: 35
            }
        }, '-=0.22')

        .to('.schema__point--tr .schema__circle1', 0.25, {
            attr: {
                r: 20
            }
        }, 'c+=0.2')
        .to('.schema__point--tr .schema__circle2', 0.25, {
            attr: {
                r: 35
            }
        }, '-=0.2')

        .from('.slide9__line', 1, {
            width: 0
        }, '-=0.5')
        .from('.slide9-anim-4', 0.7, {
            transform: 'scale(0)',
            opacity: 0
        })
        .fromTo($('.slide9-anim-2'), 0.7, {
            attr: {
                r: '0%'
            },
            ease: Power4.easeOut
        }, {
                attr: {
                    r: '50%'
                },
                ease: Power4.easeOut
            })
        .fromTo($('.slide9-anim-3'), 0.7, {
            attr: {
                r: '0%'
            },
            ease: Power4.easeOut
        }, {
                attr: {
                    r: '35%'
                },
                ease: Power4.easeOut
            }, '-=0.5')

    slide9Scroll
        .to('.safety', 1, {
            backgroundColor: '#f1efee'
        })
            

    //Смена слайдов схемы
    var slides = $('.schema__animate');

    schemaAnimate
        .staggerFrom(slides, 1, {
            visibility: 'hidden'
        }, 0.2)

    schemaAnimate.repeat(-1);

    //Контроллер анимации на слайде Safety 2
    var ss2a = {
        counter: 0,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                safety2Enter.play();

                allowNextSlideAfterScroll = false;
            } else {
                safety2Enter.progress(0.6);
                safety2Enter.play();

                $('#scroll-container-2').scrollTop(scrollElemHeight2 - scrollContHeight2);
                
                allowPrevSlideAfterScroll = false;
                setTimeout(function() {
                    progress.setPosition(100, 2);
                }, 200)
            }
        },
        leave: function (direction) {
            if (direction == 'up') {
                safety2Enter.progress(1);
                safety2Enter.reverse();
            } else {
                progress.reset();
            }
            this.counter = 0;
            this.resetScroll();
        },
        holdScroll: function () {
            if (this.counter == 0) {
                allowNextSlideAfterScroll = false;
                allowPrevSlideAfterScroll = false;

                this.counter++;
            }
        },
        resetScroll: function () {
            allowNextSlideAfterScroll = true;
            allowPrevSlideAfterScroll = true;
        }

    }

    //Определяем конец сколла
    var scrollContHeight2 = $('#scroll-container-2').outerHeight(),
        scrollElemHeight2 = $('#scroll-element-2').outerHeight();

    $('#scroll-container-2').on('scroll', function (e) {
        var scrollTop = this.scrollTop,
            percent = 0,
            scrollLength = scrollElemHeight2 - scrollContHeight2;

        percent = Math.round((scrollTop / scrollLength) * 25);

        if (percent < 25) {
            progress.setPosition(75 + percent);
        }

        ss2a.holdScroll();

        if (scrollTop + scrollContHeight2 >= scrollElemHeight2) {
            allowNextSlideAfterScroll = true;
            ss2a.counter = 0;
            //console.log('scroll end');

        }
        if (scrollTop == 0) {
            allowPrevSlideAfterScroll = true;
            ss2a.counter = 0;
            //console.log('scroll end');
        }

    })

    //Появление текста
    var safety2Enter = new TimelineMax({
            paused: true
        });

    safety2Enter
        .from('.safety2-anim-1', 0.5, {
            transform: 'translateY(100%)'
        }, '+=1')
        .from('.safety2-anim-2', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-3', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-4', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-5', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-6', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-7', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-8', 0.5, {
            transform: 'translateY(100%)'
        })
        .from('.safety2-anim-9', 0.5, {
            transform: 'translateY(100%)'
        })


    //Контроллер анимации на слайде Config

    var ca = {
        counter: 0,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                xLine.play();
                yLine.play();
            } else {
         
            }
        },
        leave: function (direction) {
            if (direction == 'up') {
                xLine.progress(1);
                xLine.reverse();

                yLine.progress(1);
                yLine.reverse();
            } else {

            }
        }
    }

    //Габариты
    var xLine = new TimelineMax({
            paused: true
        }),
        yLine = new TimelineMax({
            paused: true
        });

    xLine
        .add('start', '+=1')
        .from('.x-size__line-l', 1, {
            width: 0
        }, 'start')
        .from('.x-size__line-r', 1, {
            width: 0
        }, 'start')

    yLine
        .add('start', '+=1')
        .from('.y-size__line-t', 1, {
            height: 0
        }, 'start')
        .from('.y-size__line-b', 1, {
            height: 0
        }, 'start')

    //Выбор цвета
    var colorCar = {
        activeColor: '',
        setColor: function(obj) {
            var color = obj.data('color'),
                img = obj.data('img');

            if (typeof color == 'undefined' || typeof img == 'undefined') {
                return null;
            }

            this.activeColor = color;
            $('.js-set-color').text(color);


            $('#colorImg').attr('src', img);
            $('.colors__list li').removeClass('active-color');
            obj.closest('li').addClass('active-color'); 
        }
    }

    //Установка активного цвета при старте (первый в списке)
    colorCar.setColor($('.colors__color a').first());

    //Анимация выбора цвета
    $('.colors__color:not(.active-color)').on('mouseenter', function(){
        var current = $(this),
            prev = current.prev().first(),
            next = current.next().first();

        current.css('transform', 'scale(1.7)');
        prev.css('transform','scale(1) translateX(-20%)');
        next.css('transform','scale(1) translateX(20%)');
    })

    $('.colors__color:not(.active-color)').on('mouseleave', function () {
        var current = $(this),
            prev = current.prev().first(),
            next = current.next().first();

        current.css('transform', 'scale(1)');
        prev.css('transform', 'scale(1) translateX(0)');
        next.css('transform', 'scale(1) translateX(0)');
    })

    $('.colors__color a').on('click', function(e) {
        e.preventDefault();

        colorCar.setColor($(this)); 
    })

    //Прозрачность названия модели

    var modelImg = new Image();

    modelImg.src = 'assets/img/santaFe/pics/5_tech/tech_2_r.png';
    modelImg.onload = modelNameOpacity;

    function modelNameOpacity() {
        var modelName = new TimelineMax(),
            imgHeight = $('.config__trigger').height();

        modelName
            .fromTo('.config__name', 1, {
                opacity: 0
            }, {
                opacity: 1
            })

        new ScrollMagic.Scene({ triggerElement: ".config__trigger", duration: imgHeight, triggerHook: '1' })
            .setTween(modelName)
            //.addIndicators({ name: "ModelName" })
            .addTo(controller);
    }

    //Показать ещё
    $('.js-show-more').on('click', function(e) {
        e.preventDefault();

        $.fn.fullpage.moveTo(11);
    })
   
    //Контроллер анимации на слайде Table
    var st2a = {
        counter: 0,
        allowNext: true,
        init: function (direction) {
            if (direction == 'down') {
                allowNextSlideAfterScroll = false;
                //console.log(allowPrevSlideAfterScroll);
                
                progress.setPosition(33);
            } else {
                allowPrevSlideAfterScroll = false;
            }
        },
        leave: function (direction) {
            if (direction == 'up') {
                progress.setPosition(0);
            } else {

            }
            this.counter = 0;
            this.resetScroll();
        },
        holdScroll: function () {
            if (this.counter == 0) {
                allowNextSlideAfterScroll = false;
                allowPrevSlideAfterScroll = false;

                this.counter++;
            }
        },
        resetScroll: function () {
            allowNextSlideAfterScroll = true;
            allowPrevSlideAfterScroll = true;
        }
    }

    //Определяем конец сколла
    var scrollContHeight3 = $('#scroll-container-3').outerHeight(),
        scrollElemHeight3 = $('#scroll-element-3').outerHeight();

    $('#scroll-container-3').on('scroll', function (e) {
        var scrollTop = this.scrollTop,
            percent = 0,
            scrollLength = scrollElemHeight3 - scrollContHeight3;

        percent = Math.round((scrollTop / scrollLength) * 66);

        if (percent <= 66) {
            progress.setPosition(33 + percent);
        }
        //console.log('scroll');

        st2a.holdScroll();

        if (scrollTop + scrollContHeight3 >= scrollElemHeight3) {
            allowNextSlideAfterScroll = true;
        }
        if (scrollTop == 0) {
            allowPrevSlideAfterScroll = true;
            st2a.counter = 0;
            console.log('scroll end');
        }

    })

    //Footer
    $('#scroll-element-3').append($('.footer-primary'));

     
})
