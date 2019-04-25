jQuery(document).ready(function () {

    /*-----Sticky nav-----*/

    $('.js--section-features').waypoint(function (direction) {
        if (direction == "down") {
            $('nav').addClass('sticky');
        } else {
            $('nav').removeClass('sticky');
        }
    }, {
        offset: '70px'
    })

    /*-----Scroll on buttons-----*/

    $('.js--section-offer').click(function () {
        $('html, body').animate({
            scrollTop: $('.js--section-scroll-to-offer').offset().top
        }, 1000);
    });

    $('.js--section-features').click(function () {
        $('html, body').animate({
            scrollTop: $('.js--scroll-to-features').offset().top
        }, 1000);
    });




    /*------Navigation Scroll---------*/

    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function () {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });



    /*Animation on scroll*/
    $('.js--wp-1').waypoint(function (direction) {
        $('.js--wp-1').addClass('animated fadeIn')

    }, {
        offset: '50%'
    });



    $('.js--wp-2').waypoint(function (direction) {
        $('.js--wp-2').addClass('animated fadeInLeft')

    }, {
        offset: '50%'
    });



    $('.js--wp-3').waypoint(function (direction) {
        $('.js--wp-3').addClass('animated fadeInRight')

    }, {
        offset: '50%'
    });






    /*------Mobile Navigation------*/

    $('.js--nav-icon').click(function () {
        var nav = $('.js--main-nav');
        var icon = $('.js--nav-icon i');

        nav.slideToggle(200);
        if (icon.hasClass('fa-bars')) {
            icon.addClass('fa-times');
            icon.removeClass('fa-bars');
        } else {
            icon.addClass('fa-bars');
            icon.removeClass('fa-times');
        }


    });




});


    /*------Slider------*/ 
        $('.fullBackground').fullClip({
            images: [ 'http://support.browa.co.uk/wp-content/uploads/2018/11/header.png'],
            transitionTime: 2000,
            wait: 5000
        });  
