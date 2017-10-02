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

function statsAnimate () {
    jQuery('figcaption span').each(function () {
        var $this = $(this);
        jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
            duration: 5000,
            easing: 'swing',
            step: function () {
                $this.text(Math.ceil(this.Counter));
            }
        });
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
    homeCarousel();
    colorChange();
    menuTrigger();
    activeNav();
    dropdownList();
    aosJS();
    statsAnimate();
});
/* END DOC READY */

jQuery(window).on( 'load', function() {
	/*test*/
});
/* END WINDOW LOAD */
