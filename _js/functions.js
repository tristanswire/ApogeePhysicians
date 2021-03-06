function footerCollapse() {
  jQuery('.footer-links-holder h4').click(function () {
    jQuery(this).parent().toggleClass('active');
  });
};

function swapBackground() {
    jQuery('nav a:first-of-type').hover( function () {
        /*if (jQuery(this).hasClass('.active')) {
            jQuery(this).removeClass('.active')
            jQuery('.hero.home').removeClass('careers');
        } else {
            jQuery(this).addClass('.active')
            jQuery('.hero.home').addClass('careers');
        }*/
    });
}

function homeCarousel () {
    jQuery('.carousel').slick();
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
        jQuery('.stats').addClass('visible');
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

function bootstrapTabs () {
    jQuery('.tabs').click(function (e) {
        jQuery(this).tab('show');
        e.preventDefault();
    });
}

function tabHeight () {
    var currentHeight = 0;
	var maxHeight = 0;
	jQuery('.stats li').each(function() {
		currentHeight = $(this).outerHeight();
		if(currentHeight > maxHeight) {
			maxHeight = currentHeight;
        }
	});
	jQuery('.stats li').css('height', maxHeight);
}

function matchHeight () {
    /*var currentHeight = 0;
	var maxHeight = 0;
	jQuery('.professional-development .tabs li a h2').each(function() {
		currentHeight = $(this).outerHeight();
		if(currentHeight > maxHeight) {
			maxHeight = currentHeight;
        }
	});
	jQuery('.professional-development .tabs li a h2').css('height', maxHeight);*/
}

function toggleModal () {
    jQuery('.modal-trigger').click(function(e) {
        if(jQuery('.modal').hasClass('visible')) {
            jQuery('.modal').removeClass('visible');
            jQuery('body').removeClass('fixed');
        } else {
            jQuery('.modal').addClass('visible');
            jQuery('body').addClass('fixed');
        }
        e.preventDefault();
    });
    jQuery('.modal').click(function(e) {
        //jQuery('.modal').removeClass('visible');
        //jQuery('body').removeClass('fixed');
        //e.preventDefault();
    });
}

jQuery(document).ready( function() {
    footerCollapse();
    homeCarousel();
    menuTrigger();
    activeNav();
    gridShow();
    numberAnimation();
    dropdownList();
    aosJS();
    bootstrapTabs();
    matchHeight();
    swapBackground();
    tabHeight();
    toggleModal();
});
/* END DOC READY */

jQuery(window).on( 'load', function() {
	/*test*/
});
/* END WINDOW LOAD */
