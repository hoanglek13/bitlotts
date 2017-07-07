/*
    Main Jquery File
*/
(function($) {
    "use strict";

    jQuery(document).ready(function() {
        //jQuery to collapse the navbar on scroll
        $(window).on('scroll', function() {
            if ($(".navbar").offset().top > 50) {
                $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
                $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
        });

        //jQuery for page scrolling feature - requires jQuery Easing plugin
        $(function() {
            $(document).on('click', 'a.page-scroll', function(event) {
                var $anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1500, 'easeInOutExpo');
                event.preventDefault();
            });
        });


        /*----------------------------------------------------*/
        /*  Slider Preloader
        /*----------------------------------------------------*/
        $(".preloader").delay(700).fadeOut();

        // scroll to top
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('#scroll_up').fadeIn();
            } else {
                $('#scroll_up').fadeOut();
            }
        });

        $('#scroll_up').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
            return false;
        });


    });


    /*----------------------------------------------------*/
    /*  Testimonial Slider
    /*----------------------------------------------------*/
    $('.testimonial_slider').flexslider({
        animation: "fade",
        directionNav: false
    });


    /*--------------------------
     ajaxChimp
    ---------------------------- */
    $("#notifyMe").notifyMe();


})(jQuery)