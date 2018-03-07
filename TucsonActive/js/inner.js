$(document).ready(function () {

    $(".sliding_on .tips").click(function () {
        $(this).parent().find(".advice").slideToggle();
    });

    $('.tips_advice .show_btn .expand').click(function () { $('.tips_advice .tips_wrap').addClass('on'); $('.tips_advice .show_btn').addClass('off'); $(".show_btn .expand").hide(); $(".show_btn .collapse").show(); return false; });
    $('.tips_advice .show_btn .collapse').click(function () { $('.tips_advice .tips_wrap').removeClass('on'); $('.tips_advice .show_btn').removeClass('off'); $(".show_btn .expand").show(); $(".show_btn .collapse").hide(); return false; });


    $('.legal-info-show').on('click', function (e) {
        e.preventDefault();
        $('.legal-info-modal').fadeIn();
        $('.container').css('z-index', 500);
    });
    $('.legal-info-close').on('click', function (e) {
        e.preventDefault();
        $('.legal-info-modal').fadeOut();
        $('.container').css('z-index', 50);
    });

    $('.legal-info-modal').on('click', function (e) {
        $('.legal-info-modal').fadeOut();
        $('.container').css('z-index', 50);
    }).on('click', '.legal-info-container', function (e) {
        e.stopPropagation();
    })
});