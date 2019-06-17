//Модуль Круговая Диаграмма
function diagram() {
    var svg,
        svgStrokeWidth = 0,
        startPointDegree = 225,
        counter = 0,
        arcs = [];

    //Конструктор дуги
    function Arc() {
        this.arc = {};
        this.id = 0;
        this.color = '';
        this.from = 0;
        this.to = 0;
        this.score = 0;
        this.scoreFrom = 0;
        this.radius = 0;
        this.center = {
            x: 0,
            y: 0
        }
    }

    Arc.prototype.draw = function () {
        var start = polar_to_cartesian(this.center.x, this.center.y, this.radius, this.scoreFrom);
        var end = polar_to_cartesian(this.center.x, this.center.y, this.radius, this.score + this.scoreFrom);
        var arc_sweep = this.score - this.from + startPointDegree <= 180 ? "0" : "1";

        //Обновляем атрибуты дуги
        this.arc.setAttribute('d', 'M' + end.x + ' ' + end.y + ' A ' + this.radius + ' ' + this.radius + ' 0 ' + arc_sweep + ' 0 ' + start.x + ' ' + start.y)
    }

    Arc.prototype.init = function (color, to) {
        this.arc = document.createElementNS("http://www.w3.org/2000/svg", "path");
        this.color = color;
        this.to = Math.round(360 * to);
        this.id = counter;

        counter++;

        this.arc.setAttribute('fill', 'none');
        this.arc.setAttribute('stroke-width', svgStrokeWidth);
        this.arc.setAttribute('stroke', this.color);

        svg.append(this.arc);

        //Вычисление центра
        this.center.x = Math.round(svg.outerWidth() / 2);
        this.center.y = Math.round(svg.outerHeight() / 2);

        //Вычисление радиуса
        this.radius = Math.round((svg.outerWidth() / 2) - svgStrokeWidth / 2);

        //Вычисление точки начала дуги
        //Если это первая дуга
        if (arcs.length === 0) {
            this.scoreFrom = startPointDegree;
            this.from = startPointDegree;
        } else {
            var from = 0;

            for (var i = 0; i < arcs.length; i++) {
                from += arcs[i].to;
            }

            this.scoreFrom = from + startPointDegree;
        }

        //Анимация появления дуги
        var anim = new TimelineMax();

        if (this.to >= this.score) {
            anim
                .to(this, 2, { score: "+=" + (this.to - this.score), roundProps: "score", onUpdate: this.draw.bind(this), ease: Power4.easeOut })
        } else {
            anim
                .to(this, 2, { score: "-=" + (this.score - this.to), roundProps: "score", onUpdate: this.draw.bind(this), ease: Power4.easeOut })
        }
    }

    Arc.prototype.update = function (to) {
        this.to = Math.round(360 * to);

        //Перерисовать начальные точки у последующих дуг, если они есть
        //Проверяем есть ли впереди дуга
        if (this.id - 1 >= 0) {
            this.from = arcs[this.id - 1].to + arcs[this.id - 1].from;
        }

        //Пересчёт центра в случае ресайза
        this.center.x = Math.round(svg.outerWidth() / 2);
        this.center.y = Math.round(svg.outerHeight() / 2);

        //Пересчёт радиуса
        this.radius = Math.round((svg.outerWidth() / 2) - svgStrokeWidth / 2);

        //Анимация изменения дуги
        var anim = new TimelineMax();

        anim
            .to(this, 2, { scoreFrom: this.from > this.scoreFrom ? "+=" + (this.from - this.scoreFrom) : "-=" + (this.scoreFrom - this.from), score: this.to >= this.score ? "+=" + (this.to - this.score) : "-=" + (this.score - this.to), roundProps: { "from": 1, "score": 1 }, onUpdate: this.draw.bind(this), ease: Power4.easeOut })
    }

    // Перевод координат
    function polar_to_cartesian(centerX, centerY, radius, angle_in_degrees) {
        var angle_in_radians = (angle_in_degrees - 90) * Math.PI / 180.0;

        return {
            x: centerX + (radius * Math.cos(angle_in_radians)),
            y: centerY + (radius * Math.sin(angle_in_radians))
        };
    }

    return {
        init: function (svg_, svgStrokeWidth_) {
            if (svg_) {
                svg = $(svg_);
            }
            if (svgStrokeWidth_) {
                svgStrokeWidth = svgStrokeWidth_;
            }
        },
        addArc: function (color_, percent_) {
            var arc = new Arc();

            arc.init(color_, percent_);
            arcs.push(arc);

            return arc;
        }
    }
}

$(function(){
    var acceptNextSlide = true,
        startScrolling = false;

    //Fullpage
    $('#fullpage').fullpage({
        sectionSelector: '.js-section',
        verticalCentered: false,
        fitToSection: false,
        keyboardScrolling: false,
        //scrollOverflow: true,
        normalScrollElements: '.compare, .faq__list, .p-send, .p-test, .p-rules',
        onLeave: function (index, nextIndex, direction) {
            //Смещение для правильного позиционирования слайдов при отступе
            if (direction == 'up' && nextIndex === 1) {
                $('main.main').css('margin-top', '0');
            }
            if (direction == 'down' && nextIndex === 2) {
                $('main.main').css('margin-top', (-$('.header-primary').outerHeight()) + 'px');
            }
            if (direction == 'up' && nextIndex != 1) {
                $('main.main').css('margin-top', (-$('.header-primary').outerHeight()) + 'px');
            }
            if (index === 2) {
                slide2.hide();
            }
            if (index === 4) {
                if (acceptNextSlide || !startScrolling) {
                    $('.js-open-question').removeClass('isOpened');
                } else {
                    return false;
                }
                
            } 
        },
        afterLoad: function(anchor, index) {
            if (index === 1) {
                $('.start').addClass('loaded');
            }
            if (index === 2) {
                slide2.init();
            }
            if (index === 4) {
                acceptNextSlide = false;
            }
        }
    });

    //Листаем на следующий слайд
    $('.js-next-clide').on('click', function(e) {
        e.preventDefault();

        $.fn.fullpage.moveSectionDown();
    })

    //Scrollbar
    var ps = new PerfectScrollbar('.select__center', {
        wheelPropagation: true
    });

    //Анимация появления карточек
    var cars = new TimelineMax({
            paused: true
        }),
        slide2 = {
            init: function() {
                cars.play();
            },
            hide: function() {
                cars.reverse();
            }
        }

    cars
        .staggerFrom('.select__carlist li', 0.5, {
            opacity: 0,
            onComplete: function (e) {
                $(e.target).find('.car__top-line').css('transform','translateX(0)');
                $(e.target).find('.car__bottom-line').css('transform','translateX(0)');
                $(e.target).find('.car-img').css('transform','translateX(0)');

                //Включаем ховер эффект по окончании анимации на карточке
                $(e.target).find('.car').addClass('animationComplete');
            },
            onReverseComplete: function(e) {
                $(e.target).find('.car__top-line').css('transform', 'translateX(25vw)');
                $(e.target).find('.car__bottom-line').css('transform', 'translateX(25vw)');
                $(e.target).find('.car-img').css('transform', 'translateX(100%)');

                $(e.target).find('.car').removeClass('animationComplete');
            },
            onCompleteParams: ["{self}"],
            onReverseCompleteParams: ["{self}"]
        }, 0.2)



    //Анимация выбора авто
    $('.car').on('click', function(e){
        e.preventDefault();

        //Получим данные по выбранной машине
        calc.$root.getDataCar($(this).data('id'));
        //Обновим данные по первому взносу
        calc.$data.firstOpen = true;
        //Запишем id
        calc.$data.id = $(this).data('id');

        var xCenter = $(this).offset().left + $(this).outerWidth() / 2,
            yCenter = $(this).offset().top + $(this).outerHeight() / 2,
            imgWidth = $(this).find('.car-img').outerWidth(),
            imgHeight = $(this).find('.car-img').outerHeight(),
            imgX = $(this).find('.car-img').offset().left,
            imgY = $(this).find('.car-img').offset().top,
            imgSrc = $(this).data('img'),
            currentImgX,
            currentImgY,
            currentWidth,
            deltaX,
            deltaY,
            scale,
            topLine = $(this).find('.car__top-line span'),
            bottomLine = $(this).find('.car__bottom-line span'),
            car = $(this).find('.car-img'),
            that = $(this);


        //Центрируем и показываем шторку
        function step1() {
            return new Promise(function(resolve){
                $('.car').removeClass('active');
                $(that).addClass('active');

                $('.shade__car img').attr('src', imgSrc);
                $('.shade').css({ 'transform-origin': xCenter + 'px ' + yCenter + 'px' })

                setTimeout(resolve, 300);
            })
        }
        
        step1()
            .then(function() {
                //Класс hidden добавляется при закрытии окна калькулятора для плавной анимации и скрытия окна
                $('.shade').removeClass('hidden');
                $('.shade').addClass('active');

                return new Promise(function (resolve) {
                    setTimeout(resolve, 500);
                })
            })
            .then(function(){
                //Вычисляем текущее положение картинки в калькуляторе
                currentImgX = $('.shade__car').offset().left;
                currentImgY = $('.shade__car').offset().top;

                //Вычисляем смещение картинки до целефой картинки
                deltaX = imgX - currentImgX;
                deltaY = imgY - currentImgY;
                
                //console.log(imgY, currentImgY);
                
                //Вычисляем масштаб
                currentWidth = $('.shade__car').outerWidth();
                scale = imgWidth / currentWidth;

                $('.shade__car').css({ 'visibility':'visible', 'transform': 'translate(' + deltaX + 'px, ' + deltaY + 'px) scale(' + scale + ')' });

                //Скрываем картинку айтема
                car.hide();

                return new Promise(function(resolve){
                    setTimeout(resolve, 10);
                })
            })
            .then(function(){
                $('.shade').addClass('show-inner');

                //Подгоняем размер шрифта под размер области в названии авто
                var maxSize = $('.car-info').outerWidth() - 40,
                    currentFontSize = 130;

                if ($('.shade__name').outerWidth() > maxSize) {
                    do {
                        currentFontSize--;
                        $('.shade__name').css('font-size', currentFontSize + 'px');
                    } while ($('.shade__name').outerWidth() > maxSize)
                }
            })
    })
   
    //Перемещение по опциям в секции По оканчании программы
    $('.js-hover-select').on('mouseenter', function(){
        $('.js-hover-select').removeClass('active');
        $(this).addClass('active');

        //Устанока фонового изображения
        $('.end').css('background-image', 'url("' + $(this).data('img') + '")')
    })

    //Аккордеон в секции FAQ
    $('.js-open-question').on('click', function(e){
        e.preventDefault();

        if ($(this).hasClass('isOpened')) {
            $(this).removeClass('isOpened');
        } else {
            $('.js-open-question').removeClass('isOpened');
            $(this).addClass('isOpened');
        }
    })

    //Footer
    $('.faq').append($('.footer-primary'));

    $('.faq').on('scroll', function() {
        startScrolling = true;

        if ($(this).scrollTop() === 0) {
            startScrolling = false;
            acceptNextSlide = true;
        }
    })

    //Scrollbar аккордеона
    // var ps = new PerfectScrollbar('.faq__list', {
    //     wheelPropagation: true
    // });
    var calc = new Vue({
        el: '#calc',
        data: {
            id: 0,
            car: {},
            carsList: {},
            modification: {},
            complectation: {},
            packets: {},
            selectedPackets: [],
            modifications: {},
            complectations: {},
            colors: {},
            activeColor: {},
            activeImg: '',
            compareSelected: 'modification',
            showCompare: false,
            creditTerm: 36,
            minPercent: 0.2,
            maxPercent: 0.54,
            firstPayment: 0,
            otherPayment: 0,
            monthPayment: 0,
            totalPrice: 0,
            percentFirstPayment: 20,
            modificationsOpened: false,
            complectationsOpened: false,
            optionsOpened: false,
            onlyDiff: false,
            money: {
                decimal: ' ',
                thousands: ' ',
                suffix: ' ₽',
                precision: 0,
                masked: false /* doesn't work with directive */
            },
            calculation: {},
            range: null,
            firstOpen: true,
            diagram: {
                body: null,
                credit: null,
                other: null
            },
            count1: {
                oldScore: 0,
                score: 0
            },
            count2: {
                oldScore: 0,
                score: 0
            },
            count3: {
                oldScore: 0,
                score: 0
            },
            hasProgram: true,
            percentCredit: 0.3333,
            percentOther: 0.3333,
            animCalc: 0,
            animCredit: 0,
            animOther: 0,
        },
        methods: {
            getDataFrom: function() {
                return new Promise(function(resolve){
                    axios.get('https://api.cofigurator.hyundai.ru/credit/startPlus/379/0/0')
                        .then(function (resp) {
                            axios.get('https://api.cofigurator.hyundai.ru/car/23')
                                .then(function (response) {
                                    resolve({
                                        programs: resp.data[36],
                                        dataCar: response.data
                                    });
                                })
                                .catch(function (error) {
                                    console.log(error);
                                })
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                })
            },
            getDataCar: function(carId) {
                this.reset();

                if (typeof carId !== 'undefined') {
                    var that = this;

                    axios.get('https://api.cofigurator.hyundai.ru/car/' + carId)
                        .then(function (response) {
                            that.car = response.data;

                            that.setSefault();

                            that.getDataModifications(carId);
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                } else {
                    console.error('Wrong carId');
                }
            },
            getDataModifications: function(carId) {
                if (typeof carId !== 'undefined') {
                    var that = this;

                    axios.get('https://api.cofigurator.hyundai.ru/car/modifications/' + carId)
                        .then(function (response) {
                            that.modifications = response.data;
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                } else {
                    console.error('Wrong carId');
                }
            },
            getDataComplectations: function (modId) {
                if (typeof modId !== 'undefined') {
                    var that = this;

                    axios.get('https://api.cofigurator.hyundai.ru/car/complectations/' + modId)
                        .then(function (response) {
                            that.complectations = response.data;
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                } else {
                    console.error('Wrong modId');
                }
            },
            getDataCars: function() {
                var that = this;

                axios.get('https://api.cofigurator.hyundai.ru/carList')
                    .then(function (response) {
                        that.carsList = response.data;

                        //Подгружаем данные в список с авто
                        var carList = $('.car');

                        carList.each(function (i, item) {
                            var id = $(item).data('id');

                            for (var car in that.carsList.cars) {
                                if (that.carsList.cars[car].id == id) {
                                    var minMaxPrice = that.priceFormat(that.carsList.cars[car].minPrice) + ' - ' + that.priceFormat(that.carsList.cars[car].maxPrice) + ' ₽';
                                    var monthPayment = 'от ' + that.priceFormat(that.carsList.cars[car].addCostStartPlus + that.carsList.cars[car].payment) + ' ₽/мес';
                                    var name = that.carsList.cars[car].name;
                                    
                                    $(item).find('.car__price span').text(minMaxPrice);
                                    $(item).find('.car__credit span').text(monthPayment);
                                    $(item).find('.car__name span').text(name);
                                }
                            }
                        })

                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            setSefault: function() {
                //Дефолтная модификация
                this.modification = this.car.modificationList[this.car.defaultModificationId];

                //Дефолтная комплектация
                this.complectation = this.modification.complectations[this.modification.defaultComplectation];

                // //Список цветов
                // this.colors = this.complectation.exterior.colors.groups

                // this.setPackets(this.complectation);
            },
            modificationsOpen: function () {
                this.modificationsOpened = !this.modificationsOpened;
                this.complectationsOpened = false;
                this.optionsOpened = false;
            },
            changeModification: function(modification) {
                //Установка текущей дефолтной комплектации после выбора модификации
                this.complectation = modification.complectations[modification.defaultComplectation];
                
                // //Обновим пакеты
                // this.setPackets(this.complectation);

                // //Обновим цвета
                // this.colors = this.complectation.exterior.colors.groups
                
                //Закроем дропдаун после выбора
                this.modificationsOpened = false;
            },
            complectationsOpen: function () {
                this.complectationsOpened = !this.complectationsOpened;
                this.modificationsOpened = false;
                this.optionsOpened = false;
            },
            changeComplectation: function(complectation) {
                // //Обновим пакеты
                // this.setPackets(complectation);

                // //Обновим цвета
                // this.colors = this.complectation.exterior.colors.groups

                // //Закроем дропдаун после выбора
                // this.complectationsOpened = false;
            },
            setPackets: function(complectation) {
                //Определение списка пакетов, если они есть, при установке комплектации
                if ('packets' in complectation) {
                    this.packets = complectation.packets;
                } else {
                    this.packets = {};
                    this.selectedPackets = [];
                    this.optionsOpened = false;
                }
            },
            changePacket: function(packet, e) {
                var that = this;

                //Выбран уникальный пакет
                if (packet.unique) {
                    this.selectedPackets = [];

                    //this.selectedPackets.push(packet);
                }
                //Выбран не уникальный пакет, но в списке уже есть уникальные
                if (!packet.unique && this.selectedPackets.some(function(p) { return p.unique })) {
                    this.selectedPackets = [];

                    //this.selectedPackets.push(packet);
                }
                //Выбран пакет с зависимостью
                if (packet.dependency && e.target.checked) {
                    for (var pack in this.packets) {
                        if (this.packets[pack].id === packet.dependency) {
                            if (!this.selectedPackets.some(function (p) { return p.id === that.packets[pack].id })) {
                                this.selectedPackets.push(this.packets[pack]);
                            }
                        }
                    }
                }
                //При отключении пакета проверяем были ли от него зависимые, если да, то их тоже отключаем
                if (!e.target.checked) {
                    for (var i = 0; i < this.selectedPackets.length; i++) {
                        if (this.selectedPackets[i].dependency === packet.id) {
                            this.selectedPackets.splice(i, 1);
                        }
                    }
                }

            },
            optionsOpen: function () {
                this.optionsOpened = !this.optionsOpened;
                this.modificationsOpened = false;
                this.complectationsOpened = false;
            },
            closeAllDropdowns: function() {
                this.modificationsOpened = false;
                this.complectationsOpened = false;
                this.optionsOpened = false;
            },
            commonEvent: function(e){
                if ($(e.target).closest('.selector').length === 0) {
                    this.closeAllDropdowns();
                }
            },
            reset: function() {
                this.car = {};
                this.modification = {};
                this.complectation = {};
                this.packets = {};
                this.selectedPackets = [];
                this.modifications = {};
                this.complectations = {};
                this.percentFirstPayment = 20;
                this.count1 = {
                    oldScore: 0,
                    score: 0
                };
                this.count2 = {
                    oldScore: 0,
                    score: 0
                };
                this.activeImg = '';
            },
            openDropdown: function(e) {
                $(e.target).closest('.category__name').toggleClass('isOpened'); 
            },
            toShowCompare: function(section) {
                this.showCompare = true;
                this.compareSelected = section;  
            },
            compareScroll: function (e) { 
                //Чтобы зафиксировать шапку окна при прокрутке, т.к. position: fixed не работает с translate3D и плагином fullpage + подключил кастомный скролл, чтобы в FF небыло дёргания шапки при прокрутке
                if ($(e.target).scrollTop() >= 80) {
                    $('.compare__top').css('transform', 'translateY(' + ($(e.target).scrollTop() - 80) + 'px)');
                } else {
                    $('.compare__top').css('transform', 'translateY(0px)');
                }
            },
            mouseenterColor: function(e) {
                var obj = $(e.target);

                if (obj.hasClass('active')) {
                    return null;
                }

                var prev = obj.prev().first(),
                    next = obj.next().first();

                obj.css('transform', 'scale(1.3)');
                prev.css('transform', 'scale(1) translateX(-20%)');
                next.css('transform', 'scale(1) translateX(20%)');
            },
            mouseLeaveColor: function(e) {
                var current = $(e.target),
                    prev = current.prev().first(),
                    next = current.next().first();

                current.css('transform', 'scale(1)');
                prev.css('transform', 'scale(1) translateX(0)');
                next.css('transform', 'scale(1) translateX(0)');
            },
            changeFirstPayment: function() {
                var value = $('.js-changeFirstPayment').val();

                //То что ниже - это для корректой работы с макой ввода
                value = value.replace(/ /g, "");
                value = +value.slice(0, value.length - 1);

                //console.log(value);
                

                if (value >= this.getCalculation * this.minPercent && value <= this.getCalculation * this.maxPercent) {
                    this.firstPayment = value;

                    //Рассчитываем процент первоначального взноса при вводе суммы
                    this.percentFirstPayment = Math.round((+this.firstPayment / +this.getCalculation) * 100);
                } else if (value < this.getCalculation * this.minPercent) {
                    this.firstPayment = Math.round(this.getCalculation * this.minPercent);

                    this.percentFirstPayment = this.minPercent * 100;
                } else {
                    this.firstPayment = Math.round(this.getCalculation * this.maxPercent);

                    this.percentFirstPayment = this.maxPercent * 100;
                }

                //Обновим позицию слайдера
                this.range.noUiSlider.set(this.percentFirstPayment); 
            },
            diagramUpdate: function(a,b) {
                this.diagram.credit.update(a);
                this.diagram.other.update(b);
            },
            openSendForm: function() {
                popups.$data.sendForm = true;
            },
            openTestForm: function() {
                popups.$data.testForm = true;
            },
            priceFormat: function (data) {
                return String(Math.round(data)).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')
            }
        },
        filters: {
            currencyFormat: function (data) {
                return String(Math.round(data)).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ')
            },
            keyTranslate: function(data) {
                if (data === 'Solid') {
                    return 'базовый'
                }
                if (data === 'Pearl') {
                    return 'перламутр'
                }
                if (data === 'Metallic') {
                    return 'металлик'
                }
            }
        },
        computed: {
            compareOptionsList: function() {
                //Скролим список вверх при смене категории
                $('.compare').scrollTop(0);

                if (this.compareSelected === 'modification') {
                    if (this.onlyDiff) {
                        var arr = this.modifications.specifications.filter(function (item) {
                            return item.hasDiff;
                        })

                        arr = arr.map(function(item){
                            item.data = item.data.filter(function(i){
                                return i.diff;
                            })

                            return item;
                        })

                        return arr;
                    } else {
                        return this.modifications.specifications;
                    }   
                }
                if (this.compareSelected === 'complectation') {
                    if (this.onlyDiff) {
                        var arr = this.complectations.specifications.filter(function (item) {
                            return item.hasDiff;
                        })

                        arr = arr.map(function (item) {
                            item.data = item.data.filter(function (i) {
                                return i.diff;
                            })

                            return item;
                        })

                        return arr;
                    } else {
                        return this.complectations.specifications;
                    }
                }
                if (this.compareSelected === 'packets') {
                    //Соберём спецификации отдельных пакетов в один массив
                    var specifications = [],
                        that = this;
                    
                    for (var packet in this.packets) {
                        for (var i = 0; i < this.packets[packet].specifications.length; i++) {
                            if (!specifications.some(function (s) {  return s.name == that.packets[packet].specifications[i].name })) {
                                var obj = {
                                    name: that.packets[packet].specifications[i].name,
                                    packets: {}
                                }

                                for (var pack in this.packets) {
                                    obj.packets[pack] = {};

                                    for (var j = 0; j < this.packets[pack].specifications.length; j++) {
                                        if (this.packets[pack].specifications[j].name === obj.name) {
                                            obj.packets[pack].value = this.packets[pack].specifications[j].value
                                        }
                                    }

                                    if (!'value' in obj.packets[pack]) {
                                        obj.packets[pack].value = false;
                                    }
                                }

                                specifications.push(obj);
                            }
                        }
                    }

                    //console.log(specifications);
                    

                    return specifications;
                }
            },
            getCalculation: function() {
                var that = this;
                //Стоимость выбранных пакетов
                var summPrice = 0;

                for (var i = 0; i < this.selectedPackets.length; i++ ) {
                    summPrice += this.selectedPackets[i].price;
                }

                if (typeof this.complectation.id != 'undefined' && typeof this.activeColor.cost != 'undefined') {
                    //Запрос на расчёт
                    //console.log(this.complectation.id + '/' + this.activeColor.cost + '/' + summPrice);
                    
                    axios.get('https://api.cofigurator.hyundai.ru/credit/startPlus/' + this.complectation.id + '/' + this.activeColor.cost + '/' + summPrice)
                        .then(function (response) {
                            that.calculation = response.data[36];

                            //console.log(that.calculation);
                            
                            //Дефолтное значение первого взноса
                            if (that.firstOpen) {

                                that.range.noUiSlider.set(that.minPercent);
                                
                                if ('defaultPV' in that.complectation) {
                                    setTimeout(function () {
                                        that.range.noUiSlider.set(that.complectation.defaultPV);
                                    }, 1000)
                                }
                                
                                that.firstOpen = false;
                            }
                        })
                        .catch(function (error) {
                            console.log(error);
                        })
                }

                //console.log('calc');
                
                //Обновим значение инпута после обновления стоимости авто (процент остаётся неизменным)
                that.firstPayment = +(this.complectation.price + this.activeColor.cost + summPrice) * that.percentFirstPayment / 100;
                this.totalPrice = this.complectation.price + this.activeColor.cost + summPrice;

                return this.complectation.price + this.activeColor.cost + summPrice;
            },
            // monthPayment: function() {
            //     for (var percent in this.calculation) {
            //         if (percent == this.percentFirstPayment) {
            //             for (var monthPayment in this.calculation[percent].programs) {
            //                 //Анимируем калькулятор
            //                 // var animCalc = new TimelineMax();

            //                 // animCalc
            //                 //     .to(this.count1, 2, { score: "+=" + (+monthPayment), roundProps: "score", ease: Linear.easeNone })

            //                 console.log(monthPayment);
                                

            //                 return monthPayment;
            //             }
            //         }
            //     }

            //     return 0;
            // }
        },
        watch: {
            calculation: function() {
                for (var percent in this.calculation) {
                    if (percent == this.percentFirstPayment) {
                        if (this.calculation[percent].programs) {
                            for (var monthPayment in this.calculation[percent].programs) {
                                //Анимируем калькулятор
                                var that = this,
                                    other = this.calculation[percent].addCosts[this.calculation[percent].programs[monthPayment]] //Берём номер программы
                                    credit = monthPayment - other;

                                monthPayment = +monthPayment;
                                this.monthPayment = monthPayment;
                                this.otherPayment = other;

                                this.hasProgram = true;
                                
                                //console.log(that.count1.oldScore, that.count1.score, monthPayment, that.percentFirstPayment);
                                // if (that.animCalc) {
                                //     that.animCalc.progress(1);
                                //     that.animCredit.progress(1);
                                //     that.animOther.progress(1);
                                // }

                                var animCalc = new TimelineMax({
                                    onComplete: function () {
                                        that.range.removeAttribute('disabled');
                                        that.count1.score = monthPayment;
                                    }
                                });

                                var animCredit = new TimelineMax({
                                    onComplete: function () {
                                        that.count2.score = credit;
                                    }
                                });
                                var animOther = new TimelineMax({
                                    onComplete: function () {
                                        that.count3.score = other;
                                    }
                                });

                                that.count1.oldScore = that.count1.score;
                                that.count2.oldScore = that.count2.score;
                                that.count3.oldScore = that.count3.score;

                                //Выключаем слайдер до окончания анимации числа, чтобы не было глюков при быстрой смене процентов
                                that.range.setAttribute('disabled', true);

                                animCalc
                                    .to(this.count1, 0.7, { score: that.count1.oldScore > monthPayment ? '-=' + (that.count1.oldScore - monthPayment) : '+=' + (monthPayment - that.count1.oldScore), roundProps: "score", ease: Linear.easeNone })
                                
                                animCredit
                                    .to(this.count2, 0.5, { score: that.count2.oldScore > credit ? '-=' + (that.count2.oldScore - credit) : '+=' + (credit - that.count2.oldScore), roundProps: "score", ease: Linear.easeNone })

                                animOther
                                    .to(this.count3, 0.5, { score: that.count3.oldScore > other ? '-=' + (that.count3.oldScore - other) : '+=' + (other - that.count3.oldScore), roundProps: "score", ease: Linear.easeNone })


                                //Анимируем диаграмму
                                this.percentCredit = Math.round((credit / monthPayment) * 100) / 100;
                                this.percentOther = Math.round((1 - this.percentCredit) * 100) / 100;

                                console.log(monthPayment + ' ' + credit, this.percentCredit, this.percentOther);

                                this.diagramUpdate(this.percentCredit, this.percentOther);

                                return monthPayment;
                            }
                        } else {
                            //Если такой программы нет
                            this.hasProgram = false;
                        }
                        
                    }
                }

                return 0;
            },
            complectation: function() {
                //Подгруржаем инфу по комплектациям данной модификациям
                if (this.modification.id) {
                    this.getDataComplectations(this.modification.id);
                }

                //Очистим список с выбраными пакетами
                this.selectedPackets = [];
                
                //Обновим пакеты
                this.setPackets(this.complectation);

                //Обновим цвета
                if ('exterior' in this.complectation) {
                    this.colors = this.complectation.exterior.colors.groups;

                    //Обновим дефолтный цвет
                    for (var group in this.complectation.exterior.colors.groups) {
                        for (var color in this.complectation.exterior.colors.groups[group]) {
                            if (color == this.complectation.exterior.colors.defaultColor) {
                                this.activeColor = this.complectation.exterior.colors.groups[group][color];
                            }
                        }
                    }
                }

                //Закроем дропдаун после выбора
                this.complectationsOpened = false;
            },
            activeColor: function() {
                //Обновим картинку авто после выбора цвета
                for (var img in this.complectation.exterior.spritespin) {
                    if (img == this.activeColor.id) {
                        if (this.car.name === 'CRETA') {
                            //Потому что у Креты нужная фотка под другим номером
                            this.activeImg = this.complectation.exterior.spritespin[img].folder + '/31.png';
                        } else {
                            this.activeImg = this.complectation.exterior.spritespin[img].folder + '/4.png';
                        }
                    }
                }
            }
        },
        mounted: function() {
            var that = this;

            this.getDataCars();

            this.$nextTick(function(){
                //Закрыть калькулятор
                $('.js-close-car-info').on('click', function(e) {
                    e.preventDefault();

                    //Красивое закрытие
                    $('.shade').addClass('hidden');
                    $('.car-img').show();

                    setTimeout(function(){
                        $('.car').removeClass('active');
                        $('.shade').removeClass('active');
                        $('.shade').removeClass('show-inner');
                        
                        //Сбрасываем стили
                        $('.shade__car').css({ 'visibility': 'hidden', 'transform': 'translate(0, 0) scale(1)' });
                    }, 300)
                })
                
                //Slider
                this.range = document.querySelector('.slider-p__slider');

                noUiSlider.create(this.range, {
                    start: [20],
                    connect: [true, true],
                    range: {
                        'min': 20,
                        'max': 54
                    },
                    step: 1,
                })

                //Добавляем значение внутрь маркера
                $('.noUi-handle').append('<div class="slider-p__value"></div>')

                this.range.noUiSlider.on('update', function (values, handle, unencoded) {
                    //Обновим значение инпута
                    that.firstPayment = +that.getCalculation * unencoded[0] / 100;
                    //Обновим значение внутри маркера
                    $('.slider-p__value').html(unencoded[0] + '<sup>%</sup>');
                });

                //Пересчёт значений вызываем 1 раз в конце слайда
                this.range.noUiSlider.on('set', function (values, handle, unencoded) {
                    that.percentFirstPayment = unencoded[0];
                });

                //Diagram
                that.diagram.body = diagram();

                that.diagram.body.init('#diagram', '17');

                that.diagram.credit = that.diagram.body.addArc('#a7b0b2', 0.5);
                that.diagram.other = that.diagram.body.addArc('#ae8a68', 0.5);

                $(window).on('resize', function () {
                    that.diagramUpdate(that.percentCredit, that.percentOther);
                })

                var ps = new PerfectScrollbar('.compare', {
                    wheelSpeed: 0.3
                });
            })
           

            
        }   
    })

    //Получим данные по минимальному платежу для главной страницы
    calc.$root.getDataFrom()
        .then(function(data){
            var min;

            //Вычисляем минимальный платёж
            var mod = data.dataCar.modificationList[data.dataCar.defaultModificationId];
            var comp = mod.complectations[mod.defaultComplectation];

            for (var item in data.programs[comp.defaultPV].programs) {
                min = item;
            }

            if (!isNaN(min)) {
                min = String(Math.round(min)).replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
                
                $('.js-set-from').text('от ' + min + ' ₽/мес')
            } else {
                $('.js-set-from').text('')
            } 
        })

    var popups = new Vue({
        el: '#modals',
        data: {
            surname: '',
            name: '',
            email: '',
            accept: false,
            processingSend: false,
            rules: false,
            sendForm: false,
            testForm: false,
            status: {
                show: false,
                response: false
            },
            dealers: [],
            dealersInCity: [],
            selectCities: {},
            selectDealers: {},
            testDriveData: {
                firstName: '',
                surname: '',
                phone: '',
                email: '',
                salutation: 'Mr.',
                agreement: false
            },
            processing: false,
            selectedCity: '',
            selectedDealer: ''
        },
        methods: {
            getDealers: function () {
                var that = this;

                axios.get('https://api.cofigurator.hyundai.ru/dealers')
                    .then(function (response) {
                        that.dealers = response.data;

                        that.dealersInCity = that.dealers[0].dealers;

                        setTimeout(function () {
                            that.selectCities = $('#citySelect').selectize({
                                onChange: function (val) {
                                    for (var i = 0; i < that.dealers.length; i++) {
                                        if (that.dealers[i].name == val) {
                                            that.dealersInCity = that.dealers[i].dealers;

                                            that.selectDealers[0].selectize.clearOptions()

                                            that.selectedCity = val;

                                            var arr = that.dealersInCity.map(function (item) {
                                                var obj = {};

                                                obj.value = item.code;
                                                obj.text = item.name;

                                                return obj;
                                            })
                                            
                                            that.selectDealers[0].selectize.addOption(arr);
                                            that.selectDealers[0].selectize.refreshOptions();

                                        }
                                    }
                                }
                            });


                            that.selectDealers = $('#dealerSelect').selectize({
                                placeholder: 'Выберите дилера',
                                onChange: function (val) {
                                    that.selectedDealer = val;
                                }
                            });
                        }, 1000)

                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            sendFormSubmit: function () {
                this.processingSend = true;

                if (this.isValidSend) {
                    var data = {
                        carid: calc.$data.id,
                        mod: calc.$data.modification.name,
                        compl: calc.$data.complectation.name,
                        pay: calc.$data.monthPayment,
                        term: 36,
                        prepay: calc.$data.percentFirstPayment,
                        sum: calc.$data.totalPrice,
                        prepay_rub: calc.$data.firstPayment,
                        addCost: calc.$data.otherPayment,
                        last_name: this.surname,
                        name: this.name,
                        email: this.email,
                        agree: 'Y' //Потому что в противном случае ничего не отправится
                    }

                    var dataEncoded = $.param(data, true),
                        that = this;

                    //console.log(data);
                    

                    axios.post('/requestnew/sendstart?startplus=1', dataEncoded)
                        .then(function (response) {
                            that.status.show = true;
                            that.status.response = true;

                            setTimeout(function(){
                                that.status.show = false;
                            }, 2000)
                            //console.log(response.data);
                        })
                        .catch(function (error) {
                            that.status.show = true;
                            that.status.response = false;

                            console.log(error);
                        })
                }

            },
            testFormSubmit: function () {
                this.processing = true;

                if (this.isValid) {
                    var data = {
                        city: this.selectedCity,
                        dealer: this.selectedDealer,
                        email: this.testDriveData.email,
                        from_url: document.location.href,
                        model: this.carName,
                        name: this.testDriveData.firstName,
                        surname: this.testDriveData.surname,
                        phone: this.testDriveData.phone,
                        salutation: this.testDriveData.salutation
                    };

                    var dataEncoded = $.param(data, true),
                        that = this;

                    //console.log(data);


                    axios.post('/requestnew/sendcrm', dataEncoded)
                        .then(function (response) {
                            that.status.show = true;
                            that.status.response = true;

                            setTimeout(function () {
                                that.status.show = false;
                            }, 2000)
                            //console.log(response.data);
                        })
                        .catch(function (error) {
                            that.status.show = true;
                            that.status.response = false;

                            console.log(error);
                        })
                }
            }
        },
        mounted: function () {
            that = this;

            this.getDealers();
            this.$nextTick(function () {
                //Фиксим баг, который происходит при использовании fullpage js с переходам по TAB  в инпутах формы
                $('#modals input').on('keydown', function (e) {
                    if (event.keyCode == 9) {
                        e.stopPropagation();
                    }
                });
            })
        },
        computed: {
            carImg: function () {
                return calc.$data.activeImg;
            },
            carName: function () {
                return calc.$data.car.name;
            },
            validationSend: function () {
                var reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

                return {
                    email: reEmail.test(this.email),
                    name: !!this.name.trim(),
                    surname: !!this.surname.trim(),
                    accept: this.accept
                }
            },
            isValidSend: function () {
                var validation = this.validationSend

                return Object.keys(validation).every(function (key) {
                    return validation[key]
                })
            },
            validation: function () {
                var reEmail = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/

                return {
                    email: reEmail.test(this.testDriveData.email),
                    firstName: !!this.testDriveData.firstName.trim(),
                    surname: !!this.testDriveData.surname.trim(),
                    phone: !!this.testDriveData.phone.trim(),
                    dealer: !!this.selectedDealer.trim(),
                    agreement: this.testDriveData.agreement
                }
            },
            isValid: function () {
                var validation = this.validation

                return Object.keys(validation).every(function (key) {
                    return validation[key]
                })
            },
        }
    })

})