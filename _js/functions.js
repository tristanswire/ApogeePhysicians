function footerCollapse() {
  jQuery('.footer-links-holder h4').click(function () {
    jQuery(this).parent().toggleClass('active');
  });
};

function homeCarousel () {
    jQuery('.carousel').slick();
}

function colorChange () {
    jQuery('nav a:last-of-type').hover( function () {
        jQuery('.hero').toggleClass('active');
    });
}

function menuTrigger () {
    jQuery('.menu-trigger').click( function () {
        jQuery(this).toggleClass('active');
        jQuery('nav.main').toggleClass('active');
    });
}

function activeNav () {
    jQuery(function(){
        var path = location.href;
        if ( path )
        jQuery('nav.main a[href="' + path + '"]').attr('class', 'current-nav-item');
    });
}

function gridOne () {
    jQuery('.grid-container').waypoint(function(direction) {
        if (direction === 'down') {
            jQuery('.stats').addClass('visible');
            //alert('hello');
        /* Grid Item #1 */
            jQuery('#animate_circle_one').delay(400).animateNumber(
                {
                    number: 100,
                    easing: 'easeInQuad',
                },
                3750
            );
        /* Grid Item #2 */
            jQuery('#counter_one span').delay(400).animateNumber(
                {
                    number: 146,
                    easing: 'easeInQuad',
                },
                5000
            );
        /* Grid Item #3 */
            jQuery('#counter_two span').delay(400).animateNumber(
                {
                    number: 65,
                    easing: 'easeInQuad',
                },
                5000
            );
        /* Grid Item #4 */
            jQuery('#animate_circle_two span').delay(400).animateNumber(
                {
                    number: 90,
                    easing: 'easeInQuad',
                },
                3750
            );
        /* Grid Item #5 */
            jQuery('#animate_circle_three span').delay(800).animateNumber(
                {
                    number: 100,
                    easing: 'easeInQuad',
                },
                3750
            );
        /* Grid Item #6 */
            jQuery('#animate_circle_four span').delay(1200).animateNumber(
                {
                    number: 97,
                    easing: 'easeInQuad',
                },
                3750
            );
        }
        }, {
        offset: 700
    });
}

function gridTwo () {
    /*jQuery(window).scroll(gridTwo);
    function gridTwo() {
        if (jQuery(window).scrollTop() > 2200) {
            jQuery(window).off("scroll", gridTwo);
            jQuery('.stats-two').addClass('visible');
        /* Grid Item #4
            jQuery('#animate_circle_two span').delay(400).animateNumber(
                {
                    number: 90,
                    easing: 'easeInQuad',
                },
                3750
            );
        /* Grid Item #5
            jQuery('#animate_circle_three span').delay(800).animateNumber(
                {
                    number: 100,
                    easing: 'easeInQuad',
                },
                3750
            );
        /* Grid Item #6
            jQuery('#animate_circle_four span').delay(1200).animateNumber(
                {
                    number: 97,
                    easing: 'easeInQuad',
                },
                3750
            );
        }
    } */
}

function countAnimate () {

    /*$(window).scroll(startCounter);
    function startCounter() {
        if (jQuery(window).scrollTop() > 1400) {
            jQuery(window).off("scroll", startCounter);
            jQuery('#animate_circle_one').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                    duration: 3250,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            jQuery('.counter-1 span').each(function () {
                jQuery(this).fadeIn("slow");
                jQuery({ Counter: 0 }).delay(600).animate({ Counter: $this.text() }, {
                    duration: 3250,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
                jQuery( ".counter-1 span" ).delay(600).animate({
                    fontSize: "5em",
                    duration: 4000,
                });
            });
            jQuery('.counter-2 span').each(function () {
                jQuery({ Counter: 0 }).delay(1200).animate({ Counter: $this.text() }, {
                    duration: 3250,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
                jQuery( ".counter-2 span" ).delay(1200).animate({
                    fontSize: "5em",
                    duration: 4000,
                });
            });
            jQuery('#animate_circle_two').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).delay(1800).animate({ Counter: $this.text() }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            jQuery('#animate_circle_three').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).delay(2400).animate({ Counter: $this.text() }, {
                    duration: 4150,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
            jQuery('#animate_circle_four').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).delay(3000).animate({ Counter: $this.text() }, {
                    duration: 4300,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.ceil(this.Counter));
                    }
                });
            });
        }
    }*/
}

function dropdownList () {
    jQuery('.dropdown-list > li').click(function(e) {
        jQuery(this).children('ul').slideToggle();
        jQuery(this).toggleClass('visible');
        e.preventDefault();
    });
}

function aosJS () {
    AOS.init();
}

jQuery(document).ready( function() {
    footerCollapse();
    homeCarousel();
    colorChange();
    menuTrigger();
    activeNav();
    dropdownList();
    aosJS();
    gridOne();
    gridTwo();
    countAnimate();
});
/* END DOC READY */

jQuery(window).on( 'load', function() {
	/*test*/
});
/* END WINDOW LOAD */
