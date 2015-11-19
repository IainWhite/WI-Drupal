jQuery(document).ready(function($) {
    "use strict";
    $('.dexp-container').find('.block-big-title').wrap('<div class="container">');
    $('.search-toggle').click(function() {
        $(this).parent().find('.search-form-block-wrapper').toggleClass('open').find('input[type=text]').focus();
    });
    $(document).keyup(function(e) {
        if (e.keyCode === 27) {
            $('.search-form-block-wrapper').removeClass('open');
        }
    });
    // Auto clear default value field
    $('.form-text,.form-textarea').cleardefault();
    // Tooltips 
    $('.bs-example-tooltips').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    });
    $('.dtooltip').tooltip({
        container: 'body'
    });
    $("#bs-example a").popover();

    //Go to top
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#go-to-top').css({
                bottom: "25px"
            });
        } else {
            $('#go-to-top').css({
                bottom: "-100px"
            });
        }
    });
    $('#go-to-top').click(function() {
        $('html, body').animate({
            scrollTop: '0px'
        }, 800);
        return false;
    });
    var animate = "flipUp";
    if (detectIE() > 1) {
        animate = "fade";
        $('body').addClass('ie');
    }
    $(".rotate").textrotator({
        animation: animate,
        speed: 2000
    });
    $("a[rel^='prettyPhoto']").prettyPhoto();
});

jQuery.fn.cleardefault = function() {
    return this.focus(function() {
        if (this.value == this.defaultValue) {
            this.value = "";
        }
    }).blur(function() {
        if (!this.value.length) {
            this.value = this.defaultValue;
        }
    });
};

function detectIE() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf('MSIE ');
    var trident = ua.indexOf('Trident/');

    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    if (trident > 0) {
        // IE 11 (or newer) => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    // other browser
    return false;
}