$(function() {
    ! function() {
        function t() {
            for (var t = 0; t < i.length; t++) {
                var n = $('<svg xmlns="http://www.w3.org/2000/svg" class="rippled-circle"><use class="rippled-circle-use" xlink:href="#rippled-circle" height="100" width="100"></use></svg>');
                i[t].appendChild(n[0]), i[t].addEventListener("click", e, !1)
            }
        }

        function e(t) {
            this.getAttribute("href") && "#" === this.getAttribute("href") && t.preventDefault();
            var e = new TimelineMax,
                i = this.getAttribute("data-rippled"),
                s = this.querySelector(".rippled-circle-use"),
                a = this.querySelector(".rippled-circle"),
                o = t.offsetX,
                r = t.offsetY,
                l = t.target.offsetWidth,
                d = t.target.offsetHeight,
                u = Math.abs(l / 2 - o),
                c = Math.abs(d / 2 - r),
                h = l / 2 + u,
                p = d / 2 + c,
                m = Math.sqrt(Math.pow(h, 2) + Math.pow(p, 2));
            a.style.fill = i, e.fromTo(s, n, {
                x: o,
                y: r,
                transformOrigin: "50% 50%",
                scale: 0,
                opacity: 1,
                ease: Linear.easeOut
            }, {
                scale: m,
                opacity: 0
            })
        }
        var i = document.querySelectorAll("[data-rippled]"),
            n = .5;
        i.length && t()
    }()
});
var Spreader = function() {
    function t(t, i) {
        this.target = t, this.$wrapper = null, this.$content = null, this.$container = null;
        var n = this;
        this.defaults = {
            wrapperClass: "spreader-wrapper",
            wrapperActiveClass: "spreader-wrapper--active",
            wrapperOverflowClass: "spreader-wrapper--overflow",
            containerClass: "spreader",
            containerActiveClass: "spreader--visible",
            speed: 500,
            autoClose: 0,
            autoCloseTimer: null,
            extra: null,
            root: document.documentElement,
            rootActiveClass: "is-spreader-active",
            subRoot: document.getElementById("wrapper"),
            containerTemplate: '<div class="spreader" tabindex="-1" role="dialog"><div class="spreader-content"><a href="#" data-spreader="close" class="spreader-close" role="button"><svg xmlns="http://www.w3.org/2000/svg" class="ic-svg ic-close-sm"><use xlink:href="#ic-close-sm"></use></svg></a><div class="spreader-inner"></div></div></div>',
            animationEnd: e.animationEnd(),
            onInit: null,
            onMount: null,
            onShow: null,
            onHide: null,
            onClose: null
        }, this.options = $.extend({}, this.defaults, i), this.mount = function() {
            if (0 === n.options.subRoot.getElementsByClassName(n.options.wrapperClass).length) {
                var t = document.createElement("div");
                t.className = n.options.wrapperClass, t.style.display = "none", n.$wrapper = $(t).appendTo(n.options.subRoot), n.options.root.addEventListener("keypress", function(t) {
                    27 === t.keyCode && e.closeEvent()
                }, !1)
            } else n.$wrapper = $(n.options.subRoot).find("." + n.options.wrapperClass);
            n.$content = $($(n.target).html()), n.$container = $(n.options.containerTemplate), n.$container.find(".spreader-inner").append(n.$content), "" !== $(n.target).attr("data-classlist") && n.$container.addClass($(n.target).attr("data-classlist")), $(n.options.root).on("spreader.close", function() {
                n.close()
            }), $(window).on("resize", function() {
                n.$container.hasClass(n.options.containerActiveClass) && (this._t && clearTimeout(this._t), this._t = setTimeout(function() {
                    n.watchHeight.call(n)
                }, 50))
            }), n.$container[0].addEventListener("click", function(t) {
                t.stopPropagation(), "close" === t.target.getAttribute("data-spreader") && (t.preventDefault(), e.closeEvent())
            }, !1), n.$wrapper[0].addEventListener("click", function(t) {
                n.$container.hasClass(n.options.containerActiveClass) && (t.preventDefault(), e.closeEvent())
            }, !1), "function" == typeof this.options.onMount && n.options.onMount.call(n)
        }, this.show = function() {
            n.$container.appendTo(n.$wrapper).addClass(n.options.containerActiveClass).on(n.options.animationEnd, function() {
                n.$container.off(n.options.animationEnd), n.watchHeight()
            }), n.$wrapper.hasClass(n.options.wrapperActiveClass) || (n.options.root.classList.add(n.options.rootActiveClass), n.$wrapper.stop().fadeIn(n.options.speed, function() {
                !0 !== n.$wrapper[0].iosScrollFix && e.iosScrollFix(n.$wrapper)
            }).addClass(n.options.wrapperActiveClass)), "function" == typeof n.options.onShow && n.options.onShow.call(n)
        }, this.hide = function() {
            n.$container.hasClass(n.options.containerActiveClass) && n.$container.removeClass(n.options.containerActiveClass).on(n.options.animationEnd, function() {
                "function" == typeof n.options.onHide && n.options.onHide.call(n)
            })
        }, this.close = function() {
            n.$container.hasClass(n.options.containerActiveClass) && n.$container.removeClass(n.options.containerActiveClass).on(n.options.animationEnd, function(t) {
                n.$container.detach().off(n.options.animationEnd), "function" == typeof n.options.onClose && n.options.onClose.call(n)
            }), n.$wrapper.find("." + n.options.containerClass).length <= 1 && (n.options.root.classList.remove(n.options.rootActiveClass), n.$wrapper.stop().fadeOut(n.options.speed, function() {
                n.$wrapper.removeClass(n.options.wrapperActiveClass)
            }))
        }, this.watchHeight = function() {
            var t = n.$wrapper[0].clientHeight,
                e = n.$container[0].clientHeight,
                i = 100;
            e % 2 && n.$container.height(++e), t < e + 100 ? n.$wrapper[0].classList.add(n.options.wrapperOverflowClass) : n.$wrapper[0].classList.remove(n.options.wrapperOverflowClass)
        }, this.mount()
    }
    var e = {
        animationEnd: function() {
            var t = document.createElement("div"),
                e = {
                    animation: "animationend",
                    OAnimation: "oAnimationEnd",
                    MozAnimation: "animationend",
                    WebkitAnimation: "webkitAnimationEnd"
                };
            for (var i in e)
                if (void 0 !== t.style[i]) return e[i]
        },
        iosScrollFix: function(t) {
            var e = t[0];
            e.iosScrollFix || (e.iosScrollFix = !0, e.addEventListener("touchstart", function(t) {
                this.aup = this.scrollTop > 0, this.ud = this.scrollTop < this.scrollHeight - this.clientHeight, this.prevTop = null, this.prevBot = null, this.lastY = t.pageY
            }), e.addEventListener("touchmove", function(t) {
                var e = t.pageY > this.lastY,
                    i = !e;
                this.lastY = t.pageY, e && this.aup || i && this.ud ? t.stopPropagation() : t.preventDefault()
            }))
        },
        closeEvent: function() {
            var t = $.Event({
                type: "spreader.close"
            });
            $(document.documentElement).trigger(t)
        }
    };
    return t
}();
! function($, t, e, i) {
    function n(t, e) {
        this.element = t, this._name = s, this._defaults = $.fn.validit.defaults, this.options = $.extend({}, this._defaults, e), this.init()
    }
    var s = "validit";
    $.extend(n.prototype, {
        init: function() {
            this.buildCache(), this.bindEvents(), this.onInit()
        },
        buildCache: function() {
            this.$element = $(this.element), this.$inputs = this.$element.find("input, textarea, select"), this.validState = !0, this.captchaValid = !1, this._xhrtimer, this.serialized = []
        },
        bindEvents: function() {
            var t = this;
            t.$inputs.on("input.validit", function(e) {
                $(this).is('[name="captcha"]') && (t.captchaValid = !1), "processing" === t.$element.attr("data-state") && t.check($(this)), t.onChange(this)
            }).on("focus.validit", function(e) {
                t.onFocus(this, e)
            }).on("blur.validit", function(e) {
                t.onBlur(this, e)
            }).filter("select").on("change.validit", function(e) {
                "processing" === t.$element.attr("data-state") && t.check($(this)), t.onChange(this)
            }), t.$element.on("submit.validit", function(e) {
                t.submit($(this), e)
            })
        },
        check: function(t) {
            function e(t) {
                if (!t) return _this.error("Undefined field.");
                if (!t.is(i.options.ignoreSelector))
                    if ("" !== t.val() || t.attr("data-dependence"))
                        if (t.is('[type="email"]')) i.options.reEmail.test(t.val()) ? t.removeClass(i.options.invalidClass) : (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong")));
                        else if (t.is('[type="tel"]')) t.inputmask("isComplete") ? t.removeClass(i.options.invalidClass) : (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong")));
                        else if (t.is('[data-type="date"]')) t.inputmask("isComplete") ? t.removeClass(i.options.invalidClass) : (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong")));
                        else if (t.is('[type="password"]')) {
                            var e = !0,
                                n = i.$inputs.filter('[type="password"]'),
                                s = !0;
                            n.each(function() {
                                $(this).attr("data-dependence") && (e = !1)
                            }), e ? t.is('[name="password_confirm"]') && t.val() !== i.$inputs.filter('[name="password"]').val() ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong"))) : t.val().length < i.options.passwordLen ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong"))) : t.removeClass(i.options.invalidClass) : (n.each(function() {
                                0 !== $(this).val().length && (s = !1)
                            }), s ? n.removeClass(i.options.invalidClass) : "" === t.val() ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-empty"))) : t.val().length < i.options.passwordLen ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong"))) : t.is('[name="password_old"]') ? "" === t.val() ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-empty"))) : t.val().length < i.options.passwordLen ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong"))) : t.removeClass(i.options.invalidClass) : "" === i.$inputs.filter('[name="password_old"]').val() ? (i.validState = !1, i.$inputs.filter('[name="password_old"]').addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(i.$inputs.filter('[name="password_old"]').attr("data-empty"))) : i.$inputs.filter('[name="password_old"]').val().length < i.options.passwordLen ? (i.validState = !1, i.$inputs.filter('[name="password_old"]').addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(i.$inputs.filter('[name="password_old"]').attr("data-wrong"))) : t.is('[name="password_confirm"]') && t.val() !== i.$inputs.filter('[name="password"]').val() ? (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong"))) : t.removeClass(i.options.invalidClass))
                        } else if (t.is('[type="radio"]')) {
                            var a = t.parents(".input-holder--has-radios"),
                                o = i.$inputs.filter('[name="' + t.attr("name") + '"]'),
                                r = !1;
                            a.is(i.options.ignoreSelector) || (o.each(function() {
                                this.checked && (r = !0)
                            }), !1 === r ? (i.validState = !1, t.removeClass(i.options.invalidClass), a.addClass(i.options.invalidClass).find(i.options.errorPlaceholder).text(a.attr("data-empty"))) : a.removeClass(i.options.invalidClass))
                        } else if (t.is('[type="checkbox"]')) t[0].checked ? t.removeClass(i.options.invalidClass) : (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong")));
                        else if (t.is('[name="captcha"]')) {
                            if (!i.captchaValid) {
                                if (i.validState = !1, t.val().length < 5) return;
                                clearTimeout(i._xhrtimer), i._xhrtimer = setTimeout(function() {
                                    var e;
                                    e && e.abort(), e = $.ajax({
                                        data: {
                                            word: t.val(),
                                            sid: t.attr("data-sid")
                                        },
                                        beforeSend: function() {
                                            t.addClass("processing")
                                        },
                                        success: function(e) {
                                            "1" === e ? (t.removeClass(i.options.invalidClass), i.captchaValid = !0, t.attr("disabled", "disabled")) : (i.validState = !1, t.trigger("focus.validit"), t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-wrong")))
                                        },
                                        error: function(t) {
                                            App && App.notify("An error occured!\nTry again or report us.", !0)
                                        }
                                    }).done(function() {
                                        t.removeClass("processing"), "processing" === i.$element.attr("data-state") && !0 === i.captchaValid && i.$element.trigger("submit.validit")
                                    })
                                }, 500)
                            }
                        } else t.removeClass(i.options.invalidClass);
                    else if (t.attr(i.options.optionalAttr)) {
                        var l = i.$inputs.filter("[" + i.options.optionalAttr + "=" + t.attr(i.options.optionalAttr) + "]"),
                            d = !1;
                        l.each(function() {
                            "" !== $(this).val() && (d = !0)
                        }), !1 === d ? (l.addClass(i.options.invalidClass), i.validState = !1) : l.removeClass(i.options.invalidClass)
                    } else t.is(i.options.partialSelector) ? t.removeClass(i.options.invalidClass) : (i.validState = !1, t.addClass(i.options.invalidClass).siblings(i.options.errorPlaceholder).text(t.attr("data-empty")));
                if (!1 === i.validState) {
                    if (!t.attr(i.options.optionalAttr) && t.trigger("focus.validit"), !t.is(":visible") || t.is('[type="radio"]')) try {
                        t.is(":visible") ? t.is('[type="radio"]') : t.parent().find("input").is(":visible") && t.parent().find("input").trigger("focus.validit")
                    } catch (t) {
                        i.error("Unable to focus on the invalid input.")
                    }
                } else i.$inputs.filter("[" + i.options.optionalAttr + "=" + t.attr(i.options.optionalAttr) + "]").removeClass(i.options.invalidClass)
            }
            var i = this;
            i.$element.attr("data-state", "processing"), i.validState = !0, i.onCheck(), t ? e(t) : i.$inputs.each(function() {
                i.validState && e($(this))
            })
        },
        submit: function(t, e) {
            var i = this;
            i.onSubmit(), i.check(), i.validState ? (!1 === i.options.submitDefault && e.preventDefault(), i.$element.removeAttr("data-state"), i.serialized = i.$inputs.not('[data-no-grab="true"]').serializeArray(), i.onSuccessSubmit()) : e.preventDefault()
        },
        error: function(t) {
            this.options.alerting && (t ? alert("ValidIt: There was an internal error.\nPlease try again later or contact this site admin.\nError text: " + t) : alert("ValidIt: There was an internal error.\nPlease try again later or contact this site admin.")), this.options.logging
        },
        refresh: function() {},
        reset: function() {
            this.$element[0].reset()
        },
        onInit: function() {
            var t = this.options.onInit;
            "function" == typeof t && t.call(this)
        },
        onCheck: function() {
            var t = this.options.onCheck;
            "function" == typeof t && t.call(this)
        },
        onSubmit: function() {
            var t = this.options.onSubmit;
            "function" == typeof t && t.call(this)
        },
        onSuccessSubmit: function() {
            var t = this.options.onSuccessSubmit;
            "function" == typeof t && t.call(this)
        },
        onChange: function(t) {
            var e = this.options.onChange,
                t = t;
            "function" == typeof e && e.call(t)
        },
        onFocus: function(t, e) {
            var i = this.options.onFocus;
            "function" == typeof i && i.call(t, e)
        },
        onBlur: function(t, e) {
            var i = this.options.onBlur;
            "function" == typeof i && i.call(t, e)
        }
    }), $.fn.validit = function(t) {
        var e = arguments;
        return this.each(function() {
            if ($.data(this, s) || $.data(this, s, new n(this, t)), "string" == typeof t) {
                var i = $(this).data(s);
                e.length > 1 ? i[t].apply(i, Array.prototype.slice.call(e, 1)) : i[t]()
            }
        }), this
    }, $.fn.validit.defaults = {
        invalidClass: "wrong",
        ignoreSelector: '[data-novalidate="true"]',
        partialSelector: '[data-novalidate="partial"]',
        optionalAttr: "data-optional-id",
        errorPlaceholder: ".input-error-label",
        reEmail: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
        passwordLen: 6,
        submitDefault: !1,
        logging: !1,
        alerting: !1,
        onInit: null,
        onCheck: null,
        onSubmit: null,
        onSuccessSubmit: null,
        onChange: null,
        onFocus: null,
        onBlur: null
    }
}(jQuery, window, document), window.notify = function() {
    return function(t, e, i) {
        if (t.length) {
            "string" == typeof t && (t = t.replace(/\n/g, "<br>")), $(".notify").not(".persist").length > 0 && $(".notify").not(".persist").stop().slideUp(250, function() {
                $(this).remove()
            });
            var n = $('<div class="notify' + (!0 === i ? " persist" : "") + (e ? " " + e : "") + '"><span class="notify__text">' + t + "</span></div>").hide().appendTo("body").slideDown({
                duration: 250,
                easing: "linear"
            }).on("click", function() {
                $(this).stop().slideUp(250, function() {
                    $(this).remove()
                })
            });
            setTimeout(function() {
                n.not(".persist").length > 0 && n.not(".persist").stop().slideUp(250, function() {
                    $(this).remove()
                })
            }, 1e4)
        }
    }
}(),
    function($) {
        function t(t) {
            for (var e = 0; e < s.length; e++) {
                var a = s[e];
             }
        }
        var e = new Spreader("#online-call-template", {
                onShow: function() {
                    t()
                },
                onMount: function() {
                    this.$container.find('[data-form-id="online-call"]').validit({
                        onSuccessSubmit: function() {
                            var t = this.serialized,
                                i = this.$element.find('[type="submit"]');
                            $.ajax({
                                url: "/requestnew/send_crm_before_zingaya",
                                type: "POST",
                                data: t,
                                success: function(t) {
                                    "Y" === t ? (e.close(), window.notify("Успешно.", "success"), $("#zing_hotline_btn").trigger("click")) : window.notify("Произошла ошибка.<br>Повторите позднeе.", "error")
                                },
                                beforeSend: function() {
                                    i.addClass("disabled").attr("disabled", "disabled")
                                },
                                complete: function() {
                                    i.removeClass("disabled").removeAttr("disabled")
                                }
                            }).fail(function(t) {
                                window.notify(t.statusText + ": " + t.status, "error")
                            })
                        },
                        onFocus: function() {
                            $(this).parent(".form-row").addClass("in-focus")
                        },
                        onBlur: function() {
                            0 === this.value.length && $(this).parent(".form-row").removeClass("in-focus")
                        }
                    }).find("[type=tel]").inputmask({
                        mask: "+ 7 999 999-99-99",
                        showMaskOnHover: !1,
                        greedy: !1
                    }).parents('[data-form-id="online-call"]').find("#call-bday").inputmask({
                        alias: "date",
                        showMaskOnHover: !1,
                        greedy: !1,
                        placeholder: "дд/мм/гггг"
                    })
                }
            }),
            i = $("#header-primary"),
            n = "_active",
            s = ["navbar-support", "showroom-submenu", "service-submenu"];
        i.find('[data-role="navbar-support"]').on("click", function(e) {
            e.stopPropagation(), t("navbar-support")
        }).find("> div").on("click", function(t) {
            t.stopPropagation()
        }).find('[data-role="online-call"]').on("click", function(i) {
            i.preventDefault(), i.stopPropagation(), e.show(), t()
        }), i.find('[data-role="showroom-submenu-link"]').on("click", function(e) {
            e.stopPropagation(), t("showroom-submenu")
        }).find("> div").on("click", function(t) {
            t.stopPropagation()
        }), i.find('[data-role="service-submenu-link"]').on("click", function(e) {
            e.stopPropagation(), t("service-submenu")
        }).find("> div").on("click", function(t) {
            t.stopPropagation()
        }), window.addEventListener("scroll", function() {
            i.find(".navbar-primary__sp")[0].classList.remove(n)
        }, !1), window.addEventListener("click", function() {
            t()
        }, !1), window.addEventListener("keyup", function(e) {
            27 === e.keyCode && (e.preventDefault(), t())
        }, !1)
    }(jQuery), $(function() {
    var t = new Spreader("#newsletter-template", {
        onMount: function() {
            this.$container.find('[data-form-id="newsletter-form"]').validit({
                onSuccessSubmit: function() {
                    var e = this.serialized,
                        i = this.$element.find('[type="submit"]');
                    $.ajax({
                        url: "/requestnew/request_add_newsletter",
                        type: "POST",
                        data: e,
                        success: function(e) {
                            "Y" === e ? (t.close(), window.notify("Успешно.", "success")) : window.notify("Произошла ошибка.<br>Повторите позднeе.", "error")
                        },
                        beforeSend: function() {
                            i.addClass("disabled").attr("disabled", "disabled")
                        },
                        complete: function() {
                            i.removeClass("disabled").removeAttr("disabled")
                        }
                    })
                },
                onFocus: function() {
                    $(this).parent(".form-row").addClass("in-focus")
                },
                onBlur: function() {
                    0 === this.value.length && $(this).parent(".form-row").removeClass("in-focus")
                }
            }).find("[type=tel]").inputmask({
                mask: "+ 7 999 999-99-99",
                showMaskOnHover: !1,
                greedy: !1
            }).parents('[data-form-id="newsletter-form"]').find('[name="news-bday"]').inputmask({
                alias: "date",
                showMaskOnHover: !1,
                greedy: !1,
                placeholder: "дд/мм/гггг"
            })
        }
    });
    $('[data-form-id="subscribe-form"]').validit({
        onSuccessSubmit: function() {
            var e = this.$inputs[0].value;
            t.options.onShow = function() {
                this.$content.find('[type="email"]').val(e)
            }, t.show()
        },
        onFocus: function() {},
        onBlur: function() {}
    }), $('[href="#showroom"]').on("click", function(t) {
        t.preventDefault(), $("html, body").animate({
            scrollTop: $(".main-header__submenus-holder").offset().top
        }, 250, function() {
            $('div[data-role="showroom-submenu"]').addClass("_active"), $('[data-role="showroom-submenu-link"]').addClass("_active");
        })
    })
}),
    function(t) {
        "function" == typeof define && define.amd ? define(["jquery"], t) : t(jQuery)
    }(function(t) {
        var e = [],
            i = t(document),
            n = navigator.userAgent.toLowerCase(),
            s = t(window),
            a = [],
            o = null,
            r = /msie/.test(n) && !/opera/.test(n),
            l = /opera/.test(n),
            d, u;
        d = r && /msie 6./.test(n) && "object" != typeof window.XMLHttpRequest, u = r && /msie 7.0/.test(n), t.modal = function(e, i) {
            return t.modal.impl.init(e, i)
        }, t.modal.close = function() {
            t.modal.impl.close()
        }, t.modal.focus = function(e) {
            t.modal.impl.focus(e)
        }, t.modal.setContainerDimensions = function() {
            t.modal.impl.setContainerDimensions()
        }, t.modal.setPosition = function() {
            t.modal.impl.setPosition()
        }, t.modal.update = function(e, i) {
            t.modal.impl.update(e, i)
        }, t.fn.modal = function(e) {
            return t.modal.impl.init(this, e)
        }, t.modal.defaults = {
            appendTo: "body",
            focus: !0,
            opacity: 50,
            overlayId: "simplemodal-overlay",
            overlayCss: {},
            containerId: "simplemodal-container",
            containerCss: {},
            dataId: "simplemodal-data",
            dataCss: {},
            minHeight: null,
            minWidth: null,
            maxHeight: null,
            maxWidth: null,
            autoResize: !1,
            autoPosition: !0,
            zIndex: 1e3,
            close: !0,
            closeHTML: '<a class="modalCloseImg" title="Close"></a>',
            closeClass: "simplemodal-close",
            escClose: !0,
            overlayClose: !1,
            fixed: !0,
            position: null,
            persist: !1,
            modal: !0,
            onOpen: null,
            onShow: null,
            onClose: null
        }, t.modal.impl = {
            d: {},
            init: function(e, i) {
                if (this.d.data) return !1;
                if (o = r && !t.support.boxModel, this.o = t.extend({}, t.modal.defaults, i), this.zIndex = this.o.zIndex, this.occb = !1, "object" == typeof e) e = e instanceof t ? e : t(e), this.d.placeholder = !1, 0 < e.parent().parent().length && (e.before(t("<span></span>").attr("id", "simplemodal-placeholder").css({
                    display: "none"
                })), this.d.placeholder = !0, this.display = e.css("display"), !this.o.persist) && (this.d.orig = e.clone(!0));
                else {
                    if ("string" != typeof e && "number" != typeof e) return alert("SimpleModal Error: Unsupported data type: " + typeof e), this;
                    e = t("<div></div>").html(e)
                }
                return this.create(e), this.open(), t.isFunction(this.o.onShow) && this.o.onShow.apply(this, [this.d]), this
            },
            create: function(i) {
                this.getDimensions(), this.o.modal && d && (this.d.iframe = t('<iframe src="javascript:false;"></iframe>').css(t.extend(this.o.iframeCss, {
                    display: "none",
                    opacity: 0,
                    position: "fixed",
                    height: a[0],
                    width: a[1],
                    zIndex: this.o.zIndex,
                    top: 0,
                    left: 0
                })).appendTo(this.o.appendTo)), this.d.overlay = t("<div></div>").attr("id", this.o.overlayId).addClass("simplemodal-overlay").css(t.extend(this.o.overlayCss, {
                    display: "none",
                    opacity: this.o.opacity / 100,
                    height: this.o.modal ? e[0] : 0,
                    width: this.o.modal ? e[1] : 0,
                    position: "fixed",
                    left: 0,
                    top: 0,
                    zIndex: this.o.zIndex + 1
                })).appendTo(this.o.appendTo), this.d.container = t("<div></div>").attr("id", this.o.containerId).addClass("simplemodal-container").css(t.extend({
                    position: this.o.fixed ? "fixed" : "absolute"
                }, this.o.containerCss, {
                    display: "none",
                    zIndex: this.o.zIndex + 2
                })).append(this.o.close && this.o.closeHTML ? t(this.o.closeHTML).addClass(this.o.closeClass) : "").appendTo(this.o.appendTo), this.d.wrap = t("<div></div>").attr("tabIndex", -1).addClass("simplemodal-wrap").css({
                    height: "100%",
                    outline: 0,
                    width: "100%"
                }).appendTo(this.d.container), this.d.data = i.attr("id", i.attr("id") || this.o.dataId).addClass("simplemodal-data").css(t.extend(this.o.dataCss, {
                    display: "none"
                })).appendTo("body"), this.setContainerDimensions(), this.d.data.appendTo(this.d.wrap), (d || o) && this.fixIE()
            },
            bindEvents: function() {
                var n = this;
                t("." + n.o.closeClass).bind("click.simplemodal", function(t) {
                    t.preventDefault(), n.close()
                }), n.o.modal && n.o.close && n.o.overlayClose && n.d.overlay.bind("click.simplemodal", function(t) {
                    t.preventDefault(), n.close()
                }), i.bind("keydown.simplemodal", function(t) {
                    n.o.modal && 9 === t.keyCode ? n.watchTab(t) : n.o.close && n.o.escClose && 27 === t.keyCode && (t.preventDefault(), n.close())
                }), s.bind("resize.simplemodal orientationchange.simplemodal", function() {
                    n.getDimensions(), n.o.autoResize ? n.setContainerDimensions() : n.o.autoPosition && n.setPosition(), d || o ? n.fixIE() : n.o.modal && (n.d.iframe && n.d.iframe.css({
                        height: a[0],
                        width: a[1]
                    }), n.d.overlay.css({
                        height: e[0],
                        width: e[1]
                    }))
                })
            },
            unbindEvents: function() {
                t("." + this.o.closeClass).unbind("click.simplemodal"), i.unbind("keydown.simplemodal"), s.unbind(".simplemodal"), this.d.overlay.unbind("click.simplemodal")
            },
            fixIE: function() {
                var e = this.o.position;
                t.each([this.d.iframe || null, this.o.modal ? this.d.overlay : null, "fixed" === this.d.container.css("position") ? this.d.container : null], function(t, i) {
                    if (i) {
                        var n = i[0].style;
                        if (n.position = "absolute", 2 > t) n.removeExpression("height"), n.removeExpression("width"), n.setExpression("height", 'document.body.scrollHeight > document.body.clientHeight ? document.body.scrollHeight : document.body.clientHeight + "px"'), n.setExpression("width", 'document.body.scrollWidth > document.body.clientWidth ? document.body.scrollWidth : document.body.clientWidth + "px"');
                        else {
                            var s, a;
                            e && e.constructor === Array ? (s = e[0] ? "number" == typeof e[0] ? e[0].toString() : e[0].replace(/px/, "") : i.css("top").replace(/px/, ""), s = -1 === s.indexOf("%") ? s + ' + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"' : parseInt(s.replace(/%/, "")) + ' * ((document.documentElement.clientHeight || document.body.clientHeight) / 100) + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"', e[1] && (a = "number" == typeof e[1] ? e[1].toString() : e[1].replace(/px/, ""), a = -1 === a.indexOf("%") ? a + ' + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"' : parseInt(a.replace(/%/, "")) + ' * ((document.documentElement.clientWidth || document.body.clientWidth) / 100) + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"')) : (s = '(document.documentElement.clientHeight || document.body.clientHeight) / 2 - (this.offsetHeight / 2) + (t = document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop) + "px"', a = '(document.documentElement.clientWidth || document.body.clientWidth) / 2 - (this.offsetWidth / 2) + (t = document.documentElement.scrollLeft ? document.documentElement.scrollLeft : document.body.scrollLeft) + "px"'), n.removeExpression("top"), n.removeExpression("left"), n.setExpression("top", s), n.setExpression("left", a)
                        }
                    }
                })
            },
            focus: function(e) {
                var i = this,
                    e = e && -1 !== t.inArray(e, ["first", "last"]) ? e : "first",
                    n = t(":input:enabled:visible:" + e, i.d.wrap);
                setTimeout(function() {
                    0 < n.length ? n.focus() : i.d.wrap.focus()
                }, 10)
            },
            getDimensions: function() {
                var t = void 0 === window.innerHeight ? s.height() : window.innerHeight;
                e = [i.height(), i.width()], a = [t, s.width()]
            },
            getVal: function(t, e) {
                return t ? "number" == typeof t ? t : "auto" === t ? 0 : 0 < t.indexOf("%") ? parseInt(t.replace(/%/, "")) / 100 * ("h" === e ? a[0] : a[1]) : parseInt(t.replace(/px/, "")) : null
            },
            update: function(t, e) {
                if (!this.d.data) return !1;
                this.d.origHeight = this.getVal(t, "h"), this.d.origWidth = this.getVal(e, "w"), this.d.data.hide(), t && this.d.container.css("height", t), e && this.d.container.css("width", e), this.setContainerDimensions(), this.d.data.show(), this.o.focus && this.focus(), this.unbindEvents(), this.bindEvents()
            },
            setContainerDimensions: function() {
                var t = d || u,
                    e = this.d.origHeight ? this.d.origHeight : l ? this.d.container.height() : this.getVal(t ? this.d.container[0].currentStyle.height : this.d.container.css("height"), "h"),
                    t = this.d.origWidth ? this.d.origWidth : l ? this.d.container.width() : this.getVal(t ? this.d.container[0].currentStyle.width : this.d.container.css("width"), "w"),
                    i = this.d.data.outerHeight(!0),
                    n = this.d.data.outerWidth(!0);
                this.d.origHeight = this.d.origHeight || e, this.d.origWidth = this.d.origWidth || t;
                var s = this.o.maxHeight ? this.getVal(this.o.maxHeight, "h") : null,
                    o = this.o.maxWidth ? this.getVal(this.o.maxWidth, "w") : null,
                    s = s && s < a[0] ? s : a[0],
                    o = o && o < a[1] ? o : a[1],
                    r = this.o.minHeight ? this.getVal(this.o.minHeight, "h") : "auto",
                    e = e ? this.o.autoResize && e > s ? s : e < r ? r : e : i ? i > s ? s : this.o.minHeight && "auto" !== r && i < r ? r : i : r,
                    s = this.o.minWidth ? this.getVal(this.o.minWidth, "w") : "auto",
                    t = t ? this.o.autoResize && t > o ? o : t < s ? s : t : n ? n > o ? o : this.o.minWidth && "auto" !== s && n < s ? s : n : s;
                this.d.container.css({
                    height: e,
                    width: t
                }), this.d.wrap.css({
                    overflow: i > e || n > t ? "auto" : "visible"
                }), this.o.autoPosition && this.setPosition()
            },
            setPosition: function() {
                var t, e;
                t = a[0] / 2 - this.d.container.outerHeight(!0) / 2, e = a[1] / 2 - this.d.container.outerWidth(!0) / 2;
                var i = "fixed" !== this.d.container.css("position") ? s.scrollTop() : 0;
                this.o.position && "[object Array]" === Object.prototype.toString.call(this.o.position) ? (t = i + (this.o.position[0] || t), e = this.o.position[1] || e) : t = i + t, this.d.container.css({
                    left: e,
                    top: t
                })
            },
            watchTab: function(e) {
                0 < t(e.target).parents(".simplemodal-container").length ? (this.inputs = t(":input:enabled:visible:first, :input:enabled:visible:last", this.d.data[0]), (!e.shiftKey && e.target === this.inputs[this.inputs.length - 1] || e.shiftKey && e.target === this.inputs[0] || 0 === this.inputs.length) && (e.preventDefault(), this.focus(e.shiftKey ? "last" : "first"))) : (e.preventDefault(), this.focus())
            },
            open: function() {
                this.d.iframe && this.d.iframe.show(), t.isFunction(this.o.onOpen) ? this.o.onOpen.apply(this, [this.d]) : (this.d.overlay.show(), this.d.container.show(), this.d.data.show()), this.o.focus && this.focus(), this.bindEvents()
            },
            close: function() {
                if (!this.d.data) return !1;
                if (this.unbindEvents(), t.isFunction(this.o.onClose) && !this.occb) this.occb = !0, this.o.onClose.apply(this, [this.d]);
                else {
                    if (this.d.placeholder) {
                        var e = t("#simplemodal-placeholder");
                        this.o.persist ? e.replaceWith(this.d.data.removeClass("simplemodal-data").css("display", this.display)) : (this.d.data.hide().remove(), e.replaceWith(this.d.orig))
                    } else this.d.data.hide().remove();
                    this.d.container.hide().remove(), this.d.overlay.hide(), this.d.iframe && this.d.iframe.hide().remove(), this.d.overlay.remove(), this.d = {}
                }
            }
        }
    }),
    function($) {
        $.extend($.fn, {
            validate: function(t) {
                if (!this.length) return void(t && t.debug && window.console);
                var e = $.data(this[0], "validator");
                return e || (this.attr("novalidate", "novalidate"), e = new $.validator(t, this[0]), $.data(this[0], "validator", e), e.settings.onsubmit && (this.validateDelegate(":submit", "click", function(t) {
                        e.settings.submitHandler && (e.submitButton = t.target), $(t.target).hasClass("cancel") && (e.cancelSubmit = !0), void 0 !== $(t.target).attr("formnovalidate") && (e.cancelSubmit = !0)
                    }), this.submit(function(t) {
                        function i() {
                            var i;
                            return !e.settings.submitHandler || (e.submitButton && (i = $("<input type='hidden'/>").attr("name", e.submitButton.name).val($(e.submitButton).val()).appendTo(e.currentForm)), e.settings.submitHandler.call(e, e.currentForm, t), e.submitButton && i.remove(), !1)
                        }
                        return e.settings.debug && t.preventDefault(), e.cancelSubmit ? (e.cancelSubmit = !1, i()) : e.form() ? e.pendingRequest ? (e.formSubmitted = !0, !1) : i() : (e.focusInvalid(), !1)
                    })), e)
            },
            valid: function() {
                if ($(this[0]).is("form")) return this.validate().form();
                var t = !0,
                    e = $(this[0].form).validate();
                return this.each(function() {
                    t = t && e.element(this)
                }), t
            },
            removeAttrs: function(t) {
                var e = {},
                    i = this;
                return $.each(t.split(/\s/), function(t, n) {
                    e[n] = i.attr(n), i.removeAttr(n)
                }), e
            },
            rules: function(t, e) {
                var i = this[0];
                if (t) {
                    var n = $.data(i.form, "validator").settings,
                        s = n.rules,
                        a = $.validator.staticRules(i);
                    switch (t) {
                        case "add":
                            $.extend(a, $.validator.normalizeRule(e)), delete a.messages, s[i.name] = a, e.messages && (n.messages[i.name] = $.extend(n.messages[i.name], e.messages));
                            break;
                        case "remove":
                            if (!e) return delete s[i.name], a;
                            var o = {};
                            return $.each(e.split(/\s/), function(t, e) {
                                o[e] = a[e], delete a[e]
                            }), o
                    }
                }
                var r = $.validator.normalizeRules($.extend({}, $.validator.classRules(i), $.validator.attributeRules(i), $.validator.dataRules(i), $.validator.staticRules(i)), i);
                if (r.required) {
                    var l = r.required;
                    delete r.required, r = $.extend({
                        required: l
                    }, r)
                }
                return r
            }
        }), $.extend($.expr[":"], {
            blank: function(t) {
                return !$.trim("" + $(t).val())
            },
            filled: function(t) {
                return !!$.trim("" + $(t).val())
            },
            unchecked: function(t) {
                return !$(t).prop("checked")
            }
        }), $.validator = function(t, e) {
            this.settings = $.extend(!0, {}, $.validator.defaults, t), this.currentForm = e, this.init()
        }, $.validator.format = function(t, e) {
            return 1 === arguments.length ? function() {
                var e = $.makeArray(arguments);
                return e.unshift(t), $.validator.format.apply(this, e)
            } : (arguments.length > 2 && e.constructor !== Array && (e = $.makeArray(arguments).slice(1)), e.constructor !== Array && (e = [e]), $.each(e, function(e, i) {
                t = t.replace(new RegExp("\\{" + e + "\\}", "g"), function() {
                    return i
                })
            }), t)
        }, $.extend($.validator, {
            defaults: {
                messages: {},
                groups: {},
                rules: {},
                errorClass: "error",
                validClass: "valid",
                errorElement: "label",
                focusInvalid: !0,
                errorContainer: $([]),
                errorLabelContainer: $([]),
                onsubmit: !0,
                ignore: ":hidden",
                ignoreTitle: !1,
                onfocusin: function(t, e) {
                    this.lastActive = t, this.settings.focusCleanup && !this.blockFocusCleanup && (this.settings.unhighlight && this.settings.unhighlight.call(this, t, this.settings.errorClass, this.settings.validClass), this.addWrapper(this.errorsFor(t)).hide())
                },
                onfocusout: function(t, e) {
                    this.checkable(t) || !(t.name in this.submitted) && this.optional(t) || this.element(t)
                },
                onkeyup: function(t, e) {
                    9 === e.which && "" === this.elementValue(t) || (t.name in this.submitted || t === this.lastElement) && this.element(t)
                },
                onclick: function(t, e) {
                    t.name in this.submitted ? this.element(t) : t.parentNode.name in this.submitted && this.element(t.parentNode)
                },
                highlight: function(t, e, i) {
                    "radio" === t.type ? this.findByName(t.name).addClass(e).removeClass(i) : $(t).addClass(e).removeClass(i)
                },
                unhighlight: function(t, e, i) {
                    "radio" === t.type ? this.findByName(t.name).removeClass(e).addClass(i) : $(t).removeClass(e).addClass(i)
                }
            },
            setDefaults: function(t) {
                $.extend($.validator.defaults, t)
            },
            messages: {
                required: "This field is required.",
                remote: "Please fix this field.",
                email: "Please enter a valid email address.",
                url: "Please enter a valid URL.",
                date: "Please enter a valid date.",
                dateISO: "Please enter a valid date (ISO).",
                number: "Please enter a valid number.",
                digits: "Please enter only digits.",
                creditcard: "Please enter a valid credit card number.",
                equalTo: "Please enter the same value again.",
                maxlength: $.validator.format("Please enter no more than {0} characters."),
                minlength: $.validator.format("Please enter at least {0} characters."),
                rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
                range: $.validator.format("Please enter a value between {0} and {1}."),
                max: $.validator.format("Please enter a value less than or equal to {0}."),
                min: $.validator.format("Please enter a value greater than or equal to {0}.")
            },
            autoCreateRanges: !1,
            prototype: {
                init: function() {
                    function t(t) {
                        var e = $.data(this[0].form, "validator"),
                            i = "on" + t.type.replace(/^validate/, "");
                        e.settings[i] && e.settings[i].call(e, this[0], t)
                    }
                    this.labelContainer = $(this.settings.errorLabelContainer), this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm), this.containers = $(this.settings.errorContainer).add(this.settings.errorLabelContainer), this.submitted = {}, this.valueCache = {}, this.pendingRequest = 0, this.pending = {}, this.invalid = {}, this.reset();
                    var e = this.groups = {};
                    $.each(this.settings.groups, function(t, i) {
                        "string" == typeof i && (i = i.split(/\s/)), $.each(i, function(i, n) {
                            e[n] = t
                        })
                    });
                    var i = this.settings.rules;
                    $.each(i, function(t, e) {
                        i[t] = $.validator.normalizeRule(e)
                    }), $(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'] ", "focusin focusout keyup", t).validateDelegate("[type='radio'], [type='checkbox'], select, option", "click", t), this.settings.invalidHandler && $(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler)
                },
                form: function() {
                    return this.checkForm(), $.extend(this.submitted, this.errorMap), this.invalid = $.extend({}, this.errorMap), this.valid() || $(this.currentForm).triggerHandler("invalid-form", [this]), this.showErrors(), this.valid()
                },
                checkForm: function() {
                    this.prepareForm();
                    for (var t = 0, e = this.currentElements = this.elements(); e[t]; t++) this.check(e[t]);
                    return this.valid()
                },
                element: function(t) {
                    t = this.validationTargetFor(this.clean(t)), this.lastElement = t, this.prepareElement(t), this.currentElements = $(t);
                    var e = !1 !== this.check(t);
                    return e ? delete this.invalid[t.name] : this.invalid[t.name] = !0, this.numberOfInvalids() || (this.toHide = this.toHide.add(this.containers)), this.showErrors(), e
                },
                showErrors: function(t) {
                    if (t) {
                        $.extend(this.errorMap, t), this.errorList = [];
                        for (var e in t) this.errorList.push({
                            message: t[e],
                            element: this.findByName(e)[0]
                        });
                        this.successList = $.grep(this.successList, function(e) {
                            return !(e.name in t)
                        })
                    }
                    this.settings.showErrors ? this.settings.showErrors.call(this, this.errorMap, this.errorList) : this.defaultShowErrors()
                },
                resetForm: function() {
                    $.fn.resetForm && $(this.currentForm).resetForm(), this.submitted = {}, this.lastElement = null, this.prepareForm(), this.hideErrors(), this.elements().removeClass(this.settings.errorClass).removeData("previousValue")
                },
                numberOfInvalids: function() {
                    return this.objectLength(this.invalid)
                },
                objectLength: function(t) {
                    var e = 0;
                    for (var i in t) e++;
                    return e
                },
                hideErrors: function() {
                    this.addWrapper(this.toHide).hide()
                },
                valid: function() {
                    return 0 === this.size()
                },
                size: function() {
                    return this.errorList.length
                },
                focusInvalid: function() {
                    if (this.settings.focusInvalid) try {
                        $(this.findLastActive() || this.errorList.length && this.errorList[0].element || []).filter(":visible").focus().trigger("focusin")
                    } catch (t) {}
                },
                findLastActive: function() {
                    var t = this.lastActive;
                    return t && 1 === $.grep(this.errorList, function(e) {
                            return e.element.name === t.name
                        }).length && t
                },
                elements: function() {
                    var t = this,
                        e = {};
                    return $(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function() {
                        return !this.name && t.settings.debug && window.console, !(this.name in e || !t.objectLength($(this).rules())) && (e[this.name] = !0, !0)
                    })
                },
                clean: function(t) {
                    return $(t)[0]
                },
                errors: function() {
                    var t = this.settings.errorClass.replace(" ", ".");
                    return $(this.settings.errorElement + "." + t, this.errorContext)
                },
                reset: function() {
                    this.successList = [], this.errorList = [], this.errorMap = {}, this.toShow = $([]), this.toHide = $([]), this.currentElements = $([])
                },
                prepareForm: function() {
                    this.reset(), this.toHide = this.errors().add(this.containers)
                },
                prepareElement: function(t) {
                    this.reset(), this.toHide = this.errorsFor(t)
                },
                elementValue: function(t) {
                    var e = $(t).attr("type"),
                        i = $(t).val();
                    return "radio" === e || "checkbox" === e ? $("input[name='" + $(t).attr("name") + "']:checked").val() : "string" == typeof i ? i.replace(/\r/g, "") : i
                },
                check: function(t) {
                    t = this.validationTargetFor(this.clean(t));
                    var e = $(t).rules(),
                        i = !1,
                        n = this.elementValue(t),
                        s;
                    for (var a in e) {
                        var o = {
                            method: a,
                            parameters: e[a]
                        };
                        try {
                            if ("dependency-mismatch" === (s = $.validator.methods[a].call(this, n, t, o.parameters))) {
                                i = !0;
                                continue
                            }
                            if (i = !1, "pending" === s) return void(this.toHide = this.toHide.not(this.errorsFor(t)));
                            if (!s) return this.formatAndAdd(t, o), !1
                        } catch (t) {
                            throw this.settings.debug && window.console, t
                        }
                    }
                    if (!i) return this.objectLength(e) && this.successList.push(t), !0
                },
                customDataMessage: function(t, e) {
                    return $(t).data("msg-" + e.toLowerCase()) || t.attributes && $(t).attr("data-msg-" + e.toLowerCase())
                },
                customMessage: function(t, e) {
                    var i = this.settings.messages[t];
                    return i && (i.constructor === String ? i : i[e])
                },
                findDefined: function() {
                    for (var t = 0; t < arguments.length; t++)
                        if (void 0 !== arguments[t]) return arguments[t]
                },
                defaultMessage: function(t, e) {
                    return this.findDefined(this.customMessage(t.name, e), this.customDataMessage(t, e), !this.settings.ignoreTitle && t.title || void 0, $.validator.messages[e], "<strong>Warning: No message defined for " + t.name + "</strong>")
                },
                formatAndAdd: function(t, e) {
                    var i = this.defaultMessage(t, e.method),
                        n = /\$?\{(\d+)\}/g;
                    "function" == typeof i ? i = i.call(this, e.parameters, t) : n.test(i) && (i = $.validator.format(i.replace(n, "{$1}"), e.parameters)), this.errorList.push({
                        message: i,
                        element: t
                    }), this.errorMap[t.name] = i, this.submitted[t.name] = i
                },
                addWrapper: function(t) {
                    return this.settings.wrapper && (t = t.add(t.parent(this.settings.wrapper))), t
                },
                defaultShowErrors: function() {
                    var t, e;
                    for (t = 0; this.errorList[t]; t++) {
                        var i = this.errorList[t];
                        this.settings.highlight && this.settings.highlight.call(this, i.element, this.settings.errorClass, this.settings.validClass), this.showLabel(i.element, i.message)
                    }
                    if (this.errorList.length && (this.toShow = this.toShow.add(this.containers)), this.settings.success)
                        for (t = 0; this.successList[t]; t++) this.showLabel(this.successList[t]);
                    if (this.settings.unhighlight)
                        for (t = 0, e = this.validElements(); e[t]; t++) this.settings.unhighlight.call(this, e[t], this.settings.errorClass, this.settings.validClass);
                    this.toHide = this.toHide.not(this.toShow), this.hideErrors(), this.addWrapper(this.toShow).show()
                },
                validElements: function() {
                    return this.currentElements.not(this.invalidElements())
                },
                invalidElements: function() {
                    return $(this.errorList).map(function() {
                        return this.element
                    })
                },
                showLabel: function(t, e) {
                    var i = this.errorsFor(t);
                    i.length ? (i.removeClass(this.settings.validClass).addClass(this.settings.errorClass), i.html(e)) : (i = $("<" + this.settings.errorElement + ">").attr("for", this.idOrName(t)).addClass(this.settings.errorClass).html(e || ""), this.settings.wrapper && (i = i.hide().show().wrap("<" + this.settings.wrapper + "/>").parent()), this.labelContainer.append(i).length || (this.settings.errorPlacement ? this.settings.errorPlacement(i, $(t)) : i.insertAfter(t))), !e && this.settings.success && (i.text(""), "string" == typeof this.settings.success ? i.addClass(this.settings.success) : this.settings.success(i, t)), this.toShow = this.toShow.add(i)
                },
                errorsFor: function(t) {
                    var e = this.idOrName(t);
                    return this.errors().filter(function() {
                        return $(this).attr("for") === e
                    })
                },
                idOrName: function(t) {
                    return this.groups[t.name] || (this.checkable(t) ? t.name : t.id || t.name)
                },
                validationTargetFor: function(t) {
                    return this.checkable(t) && (t = this.findByName(t.name).not(this.settings.ignore)[0]), t
                },
                checkable: function(t) {
                    return /radio|checkbox/i.test(t.type)
                },
                findByName: function(t) {
                    return $(this.currentForm).find("[name='" + t + "']")
                },
                getLength: function(t, e) {
                    switch (e.nodeName.toLowerCase()) {
                        case "select":
                            return $("option:selected", e).length;
                        case "input":
                            if (this.checkable(e)) return this.findByName(e.name).filter(":checked").length
                    }
                    return t.length
                },
                depend: function(t, e) {
                    return !this.dependTypes[typeof t] || this.dependTypes[typeof t](t, e)
                },
                dependTypes: {
                    boolean: function(t, e) {
                        return t
                    },
                    string: function(t, e) {
                        return !!$(t, e.form).length
                    },
                    function: function(t, e) {
                        return t(e)
                    }
                },
                optional: function(t) {
                    var e = this.elementValue(t);
                    return !$.validator.methods.required.call(this, e, t) && "dependency-mismatch"
                },
                startRequest: function(t) {
                    this.pending[t.name] || (this.pendingRequest++, this.pending[t.name] = !0)
                },
                stopRequest: function(t, e) {
                    this.pendingRequest--, this.pendingRequest < 0 && (this.pendingRequest = 0), delete this.pending[t.name], e && 0 === this.pendingRequest && this.formSubmitted && this.form() ? ($(this.currentForm).submit(), this.formSubmitted = !1) : !e && 0 === this.pendingRequest && this.formSubmitted && ($(this.currentForm).triggerHandler("invalid-form", [this]), this.formSubmitted = !1)
                },
                previousValue: function(t) {
                    return $.data(t, "previousValue") || $.data(t, "previousValue", {
                            old: null,
                            valid: !0,
                            message: this.defaultMessage(t, "remote")
                        })
                }
            },
            classRuleSettings: {
                required: {
                    required: !0
                },
                email: {
                    email: !0
                },
                url: {
                    url: !0
                },
                date: {
                    date: !0
                },
                dateISO: {
                    dateISO: !0
                },
                number: {
                    number: !0
                },
                digits: {
                    digits: !0
                },
                creditcard: {
                    creditcard: !0
                }
            },
            addClassRules: function(t, e) {
                t.constructor === String ? this.classRuleSettings[t] = e : $.extend(this.classRuleSettings, t)
            },
            classRules: function(t) {
                var e = {},
                    i = $(t).attr("class");
                return i && $.each(i.split(" "), function() {
                    this in $.validator.classRuleSettings && $.extend(e, $.validator.classRuleSettings[this])
                }), e
            },
            attributeRules: function(t) {
                var e = {},
                    i = $(t),
                    n = i[0].getAttribute("type");
                for (var s in $.validator.methods) {
                    var a;
                    "required" === s ? (a = i.get(0).getAttribute(s), "" === a && (a = !0), a = !!a) : a = i.attr(s), /min|max/.test(s) && (null === n || /number|range|text/.test(n)) && (a = Number(a)), a ? e[s] = a : n === s && "range" !== n && (e[s] = !0)
                }
                return e.maxlength && /-1|2147483647|524288/.test(e.maxlength) && delete e.maxlength, e
            },
            dataRules: function(t) {
                var e, i, n = {},
                    s = $(t);
                for (e in $.validator.methods) void 0 !== (i = s.data("rule-" + e.toLowerCase())) && (n[e] = i);
                return n
            },
            staticRules: function(t) {
                var e = {},
                    i = $.data(t.form, "validator");
                return i.settings.rules && (e = $.validator.normalizeRule(i.settings.rules[t.name]) || {}), e
            },
            normalizeRules: function(t, e) {
                return $.each(t, function(i, n) {
                    if (!1 === n) return void delete t[i];
                    if (n.param || n.depends) {
                        var s = !0;
                        switch (typeof n.depends) {
                            case "string":
                                s = !!$(n.depends, e.form).length;
                                break;
                            case "function":
                                s = n.depends.call(e, e)
                        }
                        s ? t[i] = void 0 === n.param || n.param : delete t[i]
                    }
                }), $.each(t, function(i, n) {
                    t[i] = $.isFunction(n) ? n(e) : n
                }), $.each(["minlength", "maxlength"], function() {
                    t[this] && (t[this] = Number(t[this]))
                }), $.each(["rangelength", "range"], function() {
                    var e;
                    t[this] && ($.isArray(t[this]) ? t[this] = [Number(t[this][0]), Number(t[this][1])] : "string" == typeof t[this] && (e = t[this].split(/[\s,]+/), t[this] = [Number(e[0]), Number(e[1])]))
                }), $.validator.autoCreateRanges && (t.min && t.max && (t.range = [t.min, t.max], delete t.min, delete t.max), t.minlength && t.maxlength && (t.rangelength = [t.minlength, t.maxlength], delete t.minlength, delete t.maxlength)), t
            },
            normalizeRule: function(t) {
                if ("string" == typeof t) {
                    var e = {};
                    $.each(t.split(/\s/), function() {
                        e[this] = !0
                    }), t = e
                }
                return t
            },
            addMethod: function(t, e, i) {
                $.validator.methods[t] = e, $.validator.messages[t] = void 0 !== i ? i : $.validator.messages[t], e.length < 3 && $.validator.addClassRules(t, $.validator.normalizeRule(t))
            },
            methods: {
                required: function(t, e, i) {
                    if (!this.depend(i, e)) return "dependency-mismatch";
                    if ("select" === e.nodeName.toLowerCase()) {
                        var n = $(e).val();
                        return n && n.length > 0
                    }
                    return this.checkable(e) ? this.getLength(t, e) > 0 : $.trim(t).length > 0
                },
                email: function(t, e) {
                    return this.optional(e) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i.test(t)
                },
                url: function(t, e) {
                    return this.optional(e) || /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(t)
                },
                date: function(t, e) {
                    return this.optional(e) || !/Invalid|NaN/.test(new Date(t).toString())
                },
                dateISO: function(t, e) {
                    return this.optional(e) || /^\d{4}[\/\-]\d{1,2}[\/\-]\d{1,2}$/.test(t)
                },
                number: function(t, e) {
                    return this.optional(e) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)
                },
                digits: function(t, e) {
                    return this.optional(e) || /^\d+$/.test(t)
                },
                creditcard: function(t, e) {
                    if (this.optional(e)) return "dependency-mismatch";
                    if (/[^0-9 \-]+/.test(t)) return !1;
                    var i = 0,
                        n = 0,
                        s = !1;
                    t = t.replace(/\D/g, "");
                    for (var a = t.length - 1; a >= 0; a--) {
                        var o = t.charAt(a);
                        n = parseInt(o, 10), s && (n *= 2) > 9 && (n -= 9), i += n, s = !s
                    }
                    return i % 10 == 0
                },
                minlength: function(t, e, i) {
                    var n = $.isArray(t) ? t.length : this.getLength($.trim(t), e);
                    return this.optional(e) || n >= i
                },
                maxlength: function(t, e, i) {
                    var n = $.isArray(t) ? t.length : this.getLength($.trim(t), e);
                    return this.optional(e) || n <= i
                },
                rangelength: function(t, e, i) {
                    var n = $.isArray(t) ? t.length : this.getLength($.trim(t), e);
                    return this.optional(e) || n >= i[0] && n <= i[1]
                },
                min: function(t, e, i) {
                    return this.optional(e) || t >= i
                },
                max: function(t, e, i) {
                    return this.optional(e) || t <= i
                },
                range: function(t, e, i) {
                    return this.optional(e) || t >= i[0] && t <= i[1]
                },
                equalTo: function(t, e, i) {
                    var n = $(i);
                    return this.settings.onfocusout && n.unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
                        $(e).valid()
                    }), t === n.val()
                },
                remote: function(t, e, i) {
                    if (this.optional(e)) return "dependency-mismatch";
                    var n = this.previousValue(e);
                    if (this.settings.messages[e.name] || (this.settings.messages[e.name] = {}), n.originalMessage = this.settings.messages[e.name].remote, this.settings.messages[e.name].remote = n.message, i = "string" == typeof i && {
                                url: i
                            } || i, n.old === t) return n.valid;
                    n.old = t;
                    var s = this;
                    this.startRequest(e);
                    var a = {};
                    return a[e.name] = t, $.ajax($.extend(!0, {
                        url: i,
                        mode: "abort",
                        port: "validate" + e.name,
                        dataType: "json",
                        data: a,
                        success: function(i) {
                            s.settings.messages[e.name].remote = n.originalMessage;
                            var a = !0 === i || "true" === i;
                            if (a) {
                                var o = s.formSubmitted;
                                s.prepareElement(e), s.formSubmitted = o, s.successList.push(e), delete s.invalid[e.name], s.showErrors()
                            } else {
                                var r = {},
                                    l = i || s.defaultMessage(e, "remote");
                                r[e.name] = n.message = $.isFunction(l) ? l(t) : l, s.invalid[e.name] = !0, s.showErrors(r)
                            }
                            n.valid = a, s.stopRequest(e, a)
                        }
                    }, i)), "pending"
                }
            }
        }), $.format = $.validator.format
    }(jQuery),
    function($) {
        var t = {};
        if ($.ajaxPrefilter) $.ajaxPrefilter(function(e, i, n) {
            var s = e.port;
            "abort" === e.mode && (t[s] && t[s].abort(), t[s] = n)
        });
        else {
            var e = $.ajax;
            $.ajax = function(i) {
                var n = ("mode" in i ? i : $.ajaxSettings).mode,
                    s = ("port" in i ? i : $.ajaxSettings).port;
                return "abort" === n ? (t[s] && t[s].abort(), t[s] = e.apply(this, arguments), t[s]) : e.apply(this, arguments)
            }
        }
    }(jQuery),
    function($) {
        $.extend($.fn, {
            validateDelegate: function(t, e, i) {
                return this.bind(e, function(e) {
                    var n = $(e.target);
                    if (n.is(t)) return i.apply(n, arguments)
                })
            }
        })
    }(jQuery);
var $parent;
String.prototype.capitalize = function() {
    return this.charAt(0).toUpperCase() + this.slice(1)
}, $(document).ready(function() {

    $(document).on("click", ".zing_form_toggler_spec", function(e) {
        console.log(123);
        e.preventDefault();
        var $zing_form = $("#blabla-spec"),
            what = $(this).attr("for");
        $zing_form.children(".zing_form").first().attr("for", what);
        switch (what) {
            case "brochures_request":
                $zing_form.find(".zing_ok").first().val("Получить брошюру о " + $(this).attr("data-model"));
                $zing_form.children(".zing_form").first().attr("data-for-model", $(this).attr("data-model"));

                var _rutarget = window._rutarget || [];
                _rutarget.push({'event': 'thankYou', 'conv_id': 'brochure', 'sku': $(this).attr("data-model")});
                _rutarget.push({'event': 'addToSegment', 'name': 'hyundai', 'value': 'paper_service'});

                break;
            case "zing_dealer_btn":
                $parent = $(this).parents('.call-to-dealer');
                $zing_form.find(".zing_ok").first().val("РџРѕР·РІРѕРЅРёС‚СЊ РґРёР»РµСЂСѓ");
                break;
            case "zing_hotline_btn":
                $zing_form.find(".zing_ok").first().val("Отправить");
                break;
            case "zing_cuzov_btn":
                $zing_form.find(".zing_ok").first().val("Отправить");
                break;
            case "newslist":
                $zing_form.find(".zing_ok").first().val("Отправить");
                break;
            default:
                $zing_form.find(".zing_ok").first().val("Отправить");
        }
        $zing_form.modal({
            closeClass: "zing_close",
            persist: true,
            autoResize: true,
            overlayCss: {
                background: "#000"
            },
            containerCss: {
                'maxHeight': '100%',
                'height': '100%',
                'bottom': '0',
                'top': '0',
                'left': '0',
                'right': '0',
                'overflow': 'auto'
            },
            zIndex: 500,
            onOpen: function(dialog) {
                dialog.data.show();
                dialog.overlay.stop().fadeIn();
                dialog.container.stop().fadeIn()
                if (dialog.data.outerHeight() > dialog.container.height()) {
                    $('body').css('overflow', 'hidden');
                } else {
                    dialog.wrap.css({
                        'top': (dialog.container.height() / 2) - (dialog.data.height() / 2)
                    });
                }
            },
            onShow: function(dialog) {
                dialog.container.on('click.modal', function(e) {
                    if ($(e.target).closest('.simplemodal-wrap').length == 0) {
                        $.modal.close();
                        dialog.container.off('click.modal');
                    }
                });
            },
            onClose: function(dialog) {
                dialog.data.stop().fadeOut(function() {
                    dialog.container.hide();
                    dialog.wrap.css('top', '');
                });
                dialog.overlay.stop().fadeOut(function() {
                    $.modal.close();
                });
                if ($('body').css('overflow') === 'hidden') {
                    $('body').css('overflow', '');
                }
                if ($('.zing-agreement-popup-wrapper').is(':visible')) {
                    $('.zing-agreement-popup-wrapper').fadeOut(500);
                }
            }
        });
    });

    $(document).on("click", ".zing_form_toggler", function(e) {
        e.preventDefault();
        var $zing_form = $("#blabla"),
            what = $(this).attr("for");
        $zing_form.children(".zing_form").first().attr("for", what);
        switch (what) {
            case "brochures_request":
                $zing_form.find(".zing_ok").first().val("Получить брошюру о " + $(this).attr("data-model"));
                $zing_form.children(".zing_form").first().attr("data-for-model", $(this).attr("data-model"));

                var _rutarget = window._rutarget || [];
                _rutarget.push({'event': 'thankYou', 'conv_id': 'brochure', 'sku': $(this).attr("data-model")});
                _rutarget.push({'event': 'addToSegment', 'name': 'hyundai', 'value': 'paper_service'});

                break;
            case "zing_dealer_btn":
                $parent = $(this).parents('.call-to-dealer');
                $zing_form.find(".zing_ok").first().val("РџРѕР·РІРѕРЅРёС‚СЊ РґРёР»РµСЂСѓ");
                break;
            case "zing_hotline_btn":
                $zing_form.find(".zing_ok").first().val("Отправить");
                break;
            case "newslist":
                $zing_form.find(".zing_ok").first().val("РџРѕРґРїРёСЃР°С‚СЊСЃСЏ РЅР° РЅРѕРІРѕСЃС‚Рё Hyundai");
                break;
            default:
                $zing_form.find(".zing_ok").first().val("Отправить");
        }
        $zing_form.modal({
            closeClass: "zing_close",
            persist: true,
            autoResize: true,
            overlayCss: {
                background: "#000"
            },
            containerCss: {
                'maxHeight': '100%',
                'height': '100%',
                'bottom': '0',
                'top': '0',
                'left': '0',
                'right': '0',
                'overflow': 'auto'
            },
            zIndex: 500,
            onOpen: function(dialog) {
                dialog.data.show();
                dialog.overlay.stop().fadeIn();
                dialog.container.stop().fadeIn()
                if (dialog.data.outerHeight() > dialog.container.height()) {
                    $('body').css('overflow', 'hidden');
                } else {
                    dialog.wrap.css({
                        'top': (dialog.container.height() / 2) - (dialog.data.height() / 2)
                    });
                }
            },
            onShow: function(dialog) {
                dialog.container.on('click.modal', function(e) {
                    if ($(e.target).closest('.simplemodal-wrap').length == 0) {
                        $.modal.close();
                        dialog.container.off('click.modal');
                    }
                });
            },
            onClose: function(dialog) {
                dialog.data.stop().fadeOut(function() {
                    dialog.container.hide();
                    dialog.wrap.css('top', '');
                });
                dialog.overlay.stop().fadeOut(function() {
                    $.modal.close();
                });
                if ($('body').css('overflow') === 'hidden') {
                    $('body').css('overflow', '');
                }
                if ($('.zing-agreement-popup-wrapper').is(':visible')) {
                    $('.zing-agreement-popup-wrapper').fadeOut(500);
                }
            }
        });
    });

        $(".zing-input .zing_txt").on("input", function() {
        "" !== $(this).val() ? ($(this).addClass("not-empty"), $(this).is("[name*=name]") && $(this).val($(this).val().capitalize())) : $(this).removeClass("not-empty")
    }), $(".zing-input .zing_txt").each(function() {
        "" !== $(this).val() ? ($(this).addClass("not-empty"), $(this).is("[name*=name]") && $(this).val($(this).val().capitalize())) : $(this).removeClass("not-empty")
    }), $(".zing_birthdate").inputmask({
        mask: "99.99.9999",
        showMaskOnHover: !1
    }).on("keydown", function() {
        "" !== $(this).val() ? $(this).addClass("not-empty") : $(this).removeClass("not-empty")
    }), $(".zing_mobile").inputmask({
        mask: "+7 (999) 999-99-99",
        showMaskOnHover: !1
    }).on("keydown", function() {
        "" !== $(this).val() ? $(this).addClass("not-empty") : $(this).removeClass("not-empty")
    }), $(".zing-show-rules").on("click", function(t) {
        t.preventDefault(), $(".zing-agreement-popup-wrapper").insertAfter("#simplemodal-container").fadeIn(500).on("click", function(t) {
            (0 === $(t.target).closest(".zing-agreement-popup").length || $(t.target).is(".zing-agreement-close")) && (t.preventDefault(), $(".zing-agreement-popup-wrapper").fadeOut(500))
        })
    }), $.fn.sanitize_spaces = function() {
        return this.val().replace(/^\s+|\s+$/g, "").substr(0, 50)
    }, $.fn.sanitize_zing_mobile = function() {
        return this.val().replace(/^\s+|\s+$/g, "").replace("+7", "").replace(/[^0-9]/g, "").substr(0, 50)
    }, $.fn.sanitize_zing_date = function() {
      //  return this.val().split(".").reverse().join("").substr(0, 8)
    }, $.validator.addMethod("check_siebel_email", function(t, e) {
        return !!$(e).val().match(/^[-a-z0-9_]+[-a-z0-9_.]*[@]{1}[-a-z0-9_]+[-a-z0-9_.]*[.]{1}[a-z]{2,5}$/gi)
    }), $.validator.addMethod("check_mobile", function(t, e) {
        return 10 === $(e).sanitize_zing_mobile().length
    }), $(".zing_form").validate({
        rules: {
            zing_last_name: {
                required: !0
            },
            zing_first_name: {
                required: !0
            },
            zing_middle_name: {
                required: !0
            },
            zing_email: {
                required: !0,
                check_siebel_email: !0
            },
            zing_mobile: {
                required: !0,
                check_mobile: !0
            },
            zing_rules_agree_cb: {
                required: !0
            }
        },
        errorPlacement: function(t, e) {}
    }), $(".zing_form").submit(function(t) {
        t.preventDefault();
        var e = $(this),
            i = {
                last_name: e.find(".zing_last_name").sanitize_spaces(),
                first_name: e.find(".zing_first_name").sanitize_spaces(),
                middle_name: e.find(".zing_middle_name").sanitize_spaces(),
                email: e.find(".zing_email").sanitize_spaces(),
                mobile: e.find(".zing_mobile").sanitize_zing_mobile(),
                birthdate: e.find(".zing_birthdate").sanitize_zing_date(),
                agree: e.find(".zing_rules_agree_cb").prop("checked") ? "Y" : "N"
            };
        if (e.find(".zing_pers_rules_wrp").fadeOut(), !($(this).valid() && i.last_name && i.first_name && i.middle_name && i.email && i.mobile && "N" != i.agree)) return !1;
        $.modal.close();
        var n = $(this).attr("for"),
            s = "";
        switch (n) {
            case "brochures_request":
                var a = window._rutarget || [];
                a.push({
                    event: "otherPage"
                }), a.push({
                    event: "addToSegment",
                    name: "hyundai",
                    value: "paper_service"
                }), s = "/request/request_brochure", i.model = $(this).attr("data-for-model"), $("#brochure_email").text(i.email), $("#brochure_go_check_email").stop().fadeIn().on("click", function(t) {
                    0 === $(t.target).closest(".brochure_go_check_email-content").length ? $("#brochure_go_check_email").stop().fadeOut() : $(t.target).is(".go_check_close") && $("#brochure_go_check_email").stop().fadeOut()
                });
                break;
            case "newslist":
                s = "/request/newslist";
                break;
            default:
                s = "/request/send_crm_before_zingaya", "zing_dealer_btn" == n ? $parent.find("#" + n).trigger("click") : $("#" + n).trigger("click")
        }
        $.ajax({
            url: s,
            type: "POST",
            data: i,
            success: function(t) {}
        })
    }), $(document).on("click", ".newsletter_form_toggler", function(t) {
        function e() {
            $.ajax({
                type: "POST",
                url: "/ajax/request_add_newsletter",
                data: i.serialize(),
                dataType: "json",
                success: function(t) {
                    if ("1" == t.code) i.find("input").removeClass("error"), i.find(".error").hide(), $(".js-form-wrap").hide(), $(".js-form-message").fadeIn(200), setTimeout(function() {
                        $(".js-form-message").hide(), $(".js-form-wrap").fadeIn(200)
                    }, 5e3);
                    else {
                        var e = t.errors;
                        i.find("input").removeClass("error"), i.find(".error").hide();
                        for (var n in e) i.find('input[name="' + n + '"]').addClass("error"), i.find('label[for="' + n + '"]').show()
                    }
                }
            })
        }
        t.preventDefault(), $("#newsletter").modal({
            closeClass: "zing_close",
            persist: !0,
            autoResize: !0,
            overlayCss: {
                background: "#000"
            },
            containerCss: {
                maxHeight: "100%",
                height: "100%",
                bottom: "0",
                top: "0",
                left: "0",
                right: "0",
                overflow: "auto"
            },
            zIndex: 500,
            onOpen: function(t) {
                t.data.show(), t.overlay.stop().fadeIn(), t.container.stop().fadeIn(), $("body").css("overflow", "hidden"), t.data.outerHeight() > t.container.height() || t.wrap.css({
                    top: t.container.height() / 2 - t.data.height() / 2
                })
            },
            onShow: function(t) {
                t.container.on("click.modal", function(e) {
                    0 == $(e.target).closest(".simplemodal-wrap").length && ($.modal.close(), t.container.off("click.modal"))
                })
            },
            onClose: function(t) {
                t.data.stop().fadeOut(function() {
                    t.container.hide(), t.wrap.css("top", "")
                }), t.overlay.stop().fadeOut(function() {
                    $.modal.close()
                }), $("body").css("overflow", ""), $(".zing-agreement-popup-wrapper").is(":visible") && $(".zing-agreement-popup-wrapper").fadeOut(500)
            }
        });
        var i = $(".js-newsletter_form");
        i.find(".js-submit").click(function() {
            return e(), !1
        })
    }), $(".zing_mobile").inputmask({
        mask: "+7 (999) 999-99-99",
        showMaskOnHover: !1
    })
});