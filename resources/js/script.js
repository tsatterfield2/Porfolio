$(document).ready(function() {

    /* Scroll on hero buttons */
    $(".js--scroll-to-about").click(function() {
        $('html, body').animate({ scrollTop: $('.js--about').offset().top }, 1000);
        return false;

    });

    $(".js--scroll-to-contact").click(function() {
        $('html, body').animate({ scrollTop: $('.js--contact').offset().top }, 1000);
        return false;
    });

    /* Scroll back to top */
    $(".js--scroll-to-top").click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1000);
        return false;
    });

    /* No action on a link */
    $(".js--no-link").click(function() {
        return false;
    });


    /* Animations on scroll */
    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated fadeInUp');
    }, {
        offset: '75%'
    });

    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated fadeIn');
    }, {
        offset: '60%'
    });

    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated bounceInLeft');
    }, {
        offset: '65%'
    });



    /* Navigation scrolling */
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });


    $('.js--nav-icon').click(function() {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon');


        nav.slideToggle(200);
    })

});