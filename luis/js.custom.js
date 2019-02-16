// ******************************************************************************************
// Contact Form Start
// ******************************************************************************************
jQuery(document).ready(function ($) {
    "use strict";
    $("#form").validate({
        debug: false,
        rules: {
            name: "required",
            guest: "digits",
            message: "required",
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: "Please let us know who you are.",
            email: "A valid email will help us get in touch with you."

        },
        submitHandler: function (form) {
            // do other stuff for a valid form
            $.post('email_process.html', $("#form").serialize(), function (data) {
                $('#post_message').html(data);
            });
        }
    });
});
//Contact Form END


/***************************************************
 Latest Tweets 
 ***************************************************/
jQuery(document).ready(function ($) {
    "use strict";
    $(".twitter").tweet({
        modpath: 'js/lib/twitter/',
        join_text: "",
        count: 1,
        loading_text: "loading tweets...",
        username: 'jquery'
    });
});
//Latest Tweets END

/***************************************************
 // Portfolio on mouseover opactiy
 ***************************************************/
jQuery(document).ready(function ($) {
    "use strict";
    if (jQuery.hasOwnProperty("prettyPhoto")) {
        jQuery(".lightbox").prettyPhoto({
            animation_speed: 'normal',
            theme: 'pp_default',
            social_tools: ''
        });
    }

    jQuery("area[rel^='prettyPhoto']").prettyPhoto();
    jQuery(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'normal', theme: 'light_square', slideshow: 3000, autoplay_slideshow: true});
    jQuery(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed: 'fast', slideshow: 10000, hideflash: true});
    jQuery("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
        custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
        changepicturecallback: function () {
            initialize();
        }
    });
    jQuery("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
        custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
        changepicturecallback: function () {
            _bsap.exec();
        }
    });
});
//prettyPhoto END

/***************************************************
 Isotope Portfolio
 ***************************************************/
jQuery(document).ready(function ($) {
    "use strict";

// Needed variables
    var jQuerycontainer = jQuery('#portfolio-list');
    var jQueryfilter = jQuery('#portfolio-filter');

// Run Isotope  
//    jQuerycontainer.isotope({
//        filter: '*',
//        layoutMode: 'masonry',
//        animationOptions: {
//            duration: 750,
//            easing: 'linear'
//        }
//    });
//
//// Isotope Filter 
//    jQueryfilter.find('a').click(function () {
//        var selector = jQuery(this).attr('data-filter');
//        jQuerycontainer.isotope({
//            filter: selector,
//            animationOptions: {
//                duration: 750,
//                easing: 'linear',
//                queue: false,
//            }
//        });
//        return false;
//    });
//
//// Adding Class to current selected items
//    jQueryfilter.find('a').click(function () {
//        var currentOption = jQuery(this).attr('data-filter');
//        jQueryfilter.find('a').removeClass('current');
//        jQuery(this).addClass('current');
//    });
//
//
//// Portfolio on mouse over image Adipoli animation 
//    var jQuerycontainer = jQuery('#portfolio-list');
////    jQuerycontainer.find('img').adipoli({
////        'hoverEffect': 'boxRainGrowReverse',
////        'startEffect': 'transparent',
////        'animSpeed': 200,
////    });


});

//Isotope Portfolio END

/***************************************************
 Card Slides start
 ***************************************************/

jQuery(document).ready(function ($) {
    "use strict";
    // on  click logo	ul.list li
    $('ul.arrowunderline li,.menu > .item > .item_content >h2,.logo').hover(
            )


            // on  click navigation	
            .click(function () {
                var jQuerythis = jQuery(this);
                var name = this.className;
                jQuery('#wrapper').animate({marginTop: -900}, 500, function () { // upside slide animation 
                    var jQuerythis = $(this);

                    switch (name)
                    {
                        case 'home':
                            $('#home').show();
                            $('#about,#wedding,#contact,#portfolio,#features,#gift,#rsvp').hide();
                            break;

                        case 'logo':
                            $('#home').show();
                            $('#about,#wedding,#contact,#portfolio,#features,#gift,#rsvp').hide();
                            break;

                        case 'wedding':
                            $('#wedding').show();
                            $('#home,#about,#contact,#portfolio,#features,#gift,#rsvp').hide();
                            break;

                        case 'portfolio':
                            $('#portfolio').show();
                            $('#home,#about,#wedding,#contact,#features,#gift,#rsvp').hide();
                            break;

                        case 'features':
                            $('#features').show();
                            $('#home,#about,#wedding,#contact,#portfolio,#gift,#rsvp').hide();
                            break;

                        case 'gift':
                            $('#gift').show();
                            $('#home,#about,#wedding,#contact,#portfolio,#features,#rsvp').hide();
                            break;

                        case 'contact':
                            $('#contact').show();
                            $('#home,#about,#wedding,#portfolio,#features,#gift,#rsvp').hide();
                            break;

                        case 'about':
                            $('#about').show();
                            $('#home,#wedding,#contact,#portfolio,#features,#gift,#rsvp').hide();
                            break;

                        case 'rsvp':
                            $('#rsvp').show();
                            $('#home,#about,#wedding,#contact,#portfolio,#features,#gift').hide();
                            break;

                    } // end switch 

                    jQuerythis.animate({marginTop: 50}, 500);  // Downside slide animation 
                    jQuerythis.animate({marginTop: 28}, 500); //  slight animation 
                    jQuerythis.animate({marginTop: 50}, 500); // reset to normal

                })

            });

});

//Card Slides END

// for menu selection  
jQuery(document).ready(function ($) {
    "use strict";
    $("ul.arrowunderline li").click(function () {
        $('ul.arrowunderline  li').removeAttr('id');
        $(this).attr('id', 'selected');
    });
});

// for menu toogle
jQuery(document).ready(function ($) {
    "use strict";
    /* prepend menu icon */
    $('#nav-wrap').prepend('<div id="menu-icon">Menu</div>');

    /* menu toggle nav */
    $("#menu-icon").on("click", function () {
        $("#nav").slideToggle();
        $(this).toggleClass("active");
    });

});


/***************************************************
 //	Preloader Script
 ***************************************************/

jQuery(document).ready(function ($) {
    "use strict";
    jQuery('#preloader').fadeOut(300, function () {
        jQuery('body').css('overflow', 'visible');
        jQuery(this).remove();
    });
});

//Preloader Script


/***************************************************
 // Tabs	Toggle / Accordion  Script
 ***************************************************/

jQuery(document).ready(function ($) {
    "use strict";

    /* Toggle */

    $('.togg a.tog').click(function (i) {
        var dropDown = $(this).parent().find('.tab_content');

        $(this).parent().find('.tab_content').not(dropDown).slideUp();

        if ($(this).hasClass('current')) {
            $(this).removeClass('current');
        } else {
            $(this).addClass('current');
        }
        dropDown.stop(false, true).slideToggle().css({display: 'block'});
        i.preventDefault();
    });


    /* Accordion */
    $('.accordion a.tog').click(function (j) {
        var dropDown = $(this).parent().find('.tab_content');

        $(this).parent().parent().find('.tab_content').not(dropDown).slideUp();

        if ($(this).hasClass('current')) {
            $(this).removeClass('current');
        } else {
            $(this).parent().parent().find('.tog').removeClass('current');
            $(this).addClass('current');
        }

        dropDown.stop(false, true).slideToggle().css({display: 'block'});

        j.preventDefault();
    });


    /* Tabs */
    $('.tab ul.tabs li:first-child a').addClass('current');
    $('.tab .tab_content div.tabs_tab:first-child').show();

    $('.tab ul.tabs li a').click(function (g) {
        var tab = $(this).parent().parent().parent(),
                index = $(this).parent().index();

        tab.find('ul.tabs').find('a').removeClass('current');
        $(this).addClass('current');

        tab.find('.tab_content').find('div.tabs_tab').not('div.tabs_tab:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_tab:eq(' + index + ')').slideDown();

        g.preventDefault();
    });

});

//Tabs	Toggle / Accordion  Script
