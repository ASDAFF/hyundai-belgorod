$(function() {
    function t() {
        p.clearRect(0, 0, c.width, c.height), p.beginPath(), p.strokeStyle = C, p.lineWidth = 3, p.arc(g, f, P, Math.PI, 4 * Math.PI), p.stroke(), p.closePath(), m = 2 * Math.PI, u = 2 * Math.PI, u += 2 * Math.PI * w, p.beginPath(), p.strokeStyle = I, p.lineWidth = v, p.arc(g, f, P, m, u), p.stroke(), p.closePath()
    }

    function e() {
        !r.parent().hasClass("spritespin-loading-progress") && r.parent().addClass("spritespin-loading-progress"), p.clearRect(0, 0, c.width, c.height), p.beginPath(), p.strokeStyle = C, p.lineWidth = v, p.arc(g, f, P, Math.PI, 4 * Math.PI), p.stroke(), p.closePath()
    }

    function a() {
        r.parent().removeClass("spritespin-loading-progress")
    }
    var r = $(".spritespin"),
        s = r.data("model"),
        i = r.attr("data-init-frame") ? parseInt(r.attr("data-init-frame")) : 30,
        n = r.attr("data-width") ? parseInt(r.attr("data-width")) : 700,
        o = "creta" === s ? 316 : r.attr("data-height") ? parseInt(r.attr("data-height")) : 316,
        d, l, h = function(s) {
            r.spritespin({
                source: s,
                width: n,
                height: o,
                frame: d || i,
                sense: -1,
                mods: ["drag", "360"],
                animate: !1,
                module: null,
                reverse: !1,
                scrollThreshold: 500,
                onInit: function() {
                    e()
                },
                onProgress: function(e, a) {
                    w = a.percent / 100, t()
                },
                onLoad: function() {
                    a()
                }
            });
            var h = r.spritespin("api");
            r.bind("onFrame", function() {
                d = h.data.frame, l = h.data.source[d], 0 != W.length && W.attr("src", l)
            })
        },
        c = document.getElementById("progress-ring"),
        p = c.getContext("2d"),
        g = c.width / 2,
        f = c.height / 2,
        m, u, w = 0,
        P = 40,
        C = "#eee",
        I = "#1A85CA",
        v = 3,
        k = $(".view-360-color-selector"),
        M = $(".view-360-color-selector").find("ul"),
        S = k.find("li").eq(0).data("color"),
        y = SpriteSpin.sourceArray("http://www.hyundai.ru/media/images/360/" + s + "/" + S + "/{frame}.png", {
            frame: [1, 36],
            digits: 2
        }),
        b = $(".progress-ring-wrap"),
        A = i + 1,
        W = $(".progress-last-frame");

    tf = "http://www.hyundai.ru/media/images/360/" + s + "/" + S + "/" + A + ".png", $(".view-360_wrap").addClass("spritespin-loading-progress").css({
        width: n,
        height: o
    }), $(".progress-last-frame").css("width", n).attr("src", tf), h(y), k.on("click", "li", function(t) {
        if ($(t.target).hasClass("current") || $(t.target).parent().hasClass("current") || r.parent().hasClass("spritespin-loading-progress")) return !1;
        k.find(".current").removeClass("current"), $(this).addClass("current"), $(".view-360-color-name").text($(this).attr("data-name")), S = $(this).data("color"), y = SpriteSpin.sourceArray("http://www.hyundai.ru/media/images/360/" + s + "/" + S + "/{frame}.png", {
            frame: [1, 36],
            digits: 2
        }), h(y)
    }), k.find("li").eq(0).addClass("current")
});