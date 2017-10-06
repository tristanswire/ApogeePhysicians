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

function gridShow () {
    // hide our element on page load
    jQuery('.grid-container').waypoint(function(direction) {
        if (direction === 'down') {
            jQuery('.grid-container').addClass('fade-in');
        }
    }, { offset: '75%' });

    jQuery('.grid-one, .grid-two, .grid-three, .grid-four, .grid-five, .grid-six').waypoint(function(direction) {
        if (direction === 'down') {
            jQuery('.grid-one, .grid-two, .grid-three, .grid-four, .grid-five, .grid-six').addClass('fade-in');
        }
    }, { offset: '70%' });

    /*jQuery('.grid-four, .grid-five, .grid-six').waypoint(function(direction) {
        if (direction === 'down') {
            jQuery('.grid-four, .grid-five, .grid-six').addClass('fade-in');
        }
    }, { offset: '60%' });*/
}

function numberAnimation () {
    function gridOne(){
        $('#counter_one').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
    function gridTwo(){
        $('#counter_two span').each(function () {
            $(this).prop('Counter',0).delay(800).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
    function gridThree(){
        $('#counter_three span').each(function () {
            $(this).prop('Counter',0).delay(1600).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
    function gridFour(){
        $('#counter_four').each(function () {
            $(this).prop('Counter',0).delay(2400).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
    function gridFive(){
        $('#counter_five').each(function () {
            $(this).prop('Counter',0).delay(2400).delay(1200).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
    function gridSix(){
        $('#counter_six').each(function () {
            $(this).prop('Counter',0).delay(3000).delay(1600).animate({
                Counter: $(this).text()
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    }
    jQuery.initialize(".grid-one.fade-in", function() {
    	gridOne();
    });
    jQuery.initialize(".grid-two.fade-in", function() {
    	gridTwo();
    });
    jQuery.initialize(".grid-three.fade-in", function() {
    	gridThree();
    });
    jQuery.initialize(".grid-four.fade-in", function() {
    	gridFour();
    });
    jQuery.initialize(".grid-five.fade-in", function() {
    	gridFive();
    });
    jQuery.initialize(".grid-six.fade-in", function() {
    	gridSix();
    });
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
    gridShow();
    numberAnimation();
    dropdownList();
    aosJS();
});
/* END DOC READY */

jQuery(window).on( 'load', function() {
	/*test*/
});
/* END WINDOW LOAD */
