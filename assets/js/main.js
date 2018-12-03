
$(document).ready(function () {
    // "use strict";
    //
    // var window_width = $(window).width(),
    //     window_height = window.innerHeight,
    //     header_height = $(".default-header").height(),
    //     header_height_static = $(".site-header.static").outerHeight(),
    //     fitscreen = window_height - header_height;
    //
    //
    // $(".fullscreen").css("height", window_height)
    // $(".fitscreen").css("height", fitscreen);
    // $(".default-header").sticky({ topSpacing: 0 });


    if (document.getElementById("default-select")) {
        $('select').niceSelect();
    };

    if (document.getElementById("kosan-list")) {
        $('select').niceSelect();
    };

    $('.img-pop-up').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });


    $("#range").ionRangeSlider({
        hide_min_max: true,
        keyboard: true,
        min: 100000,
        max: 5000000,
        from: 300000,
        to: 5000000,
        type: 'double',
        step: 50000,
        prefix: "",
        grid: true
    });

    $(window).scroll(function() {
    if ($(window).scrollTop() > 10) {
        $('#navbar-menu').addClass('floatingNav');
    } else {
        $('#navbar-menu').removeClass('floatingNav');
    }
    });

});
