$(document).ready(function () {

    $('.call-online').click(function (e) {
        e.preventDefault();
        $('.call-online-popup').show();
    });

    $('.agree-call-online').click(function (e) {
        if ($(this).is(':checked')) {
            $('.call-button').show();
        } else {
            $('.call-button').hide();
        }
    });

    $('.cancel-call').click(function (e) {
        e.preventDefault();
        $('.call-online-popup').hide();
    });

});