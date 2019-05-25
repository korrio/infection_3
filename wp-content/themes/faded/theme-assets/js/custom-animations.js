(function ($)
{
    "use strict";
    if ($(".animate").length > 0) {
        $(".animate").css('opacity', 0);
    }
    if ($('#home .col-sm-7 .animate').length > 0) {
        $('#home .col-sm-7 .animate').waypoint(function () {
            $('#home .col-sm-7 h1.animate').addClass('fadeInLeft');
            $('#home .col-sm-7 p.animate').addClass('fadeInLeft');
            $('#home .col-sm-7 a.animate').addClass('fadeInUp');
        }, {offset: '80%'});
    }
    if ($('#home img.animate').length > 0) {
        $('#home img.animate').waypoint(function () {
            $('#home img.animate').addClass('fadeInRightBig');
        }, {offset: '80%'});
    }
    if($(''))
    
    
    if ($('#home img.img-header-sm').length > 0) {
        $('#home img.img-header-sm').waypoint(function () {
            $('#home img.img-header-sm').addClass('fadeInLeftBigSolid');
        }, {offset: '80%'});
    }
    if ($('.overview-area .animate').length > 0) {
        $('.overview-area .animate').waypoint(function () {
            $('.overview-area .col-md-3:nth-child(odd) .animate').addClass('fadeInUp');
            $('.overview-area .col-md-3:nth-child(even) .animate').addClass('fadeInDown');
        }, {offset: '80%'});
    }
    if ($('.steps-area .animate').length > 0) {
        $('.steps-area .animate').waypoint(function () {
            $('.steps-area .animate').addClass('fadeInUp');
        }, {offset: '80%'});
    }
    if ($('.feature-area .animate.feat-top-left').length > 0) {
        $('.feature-area .animate.feat-top-left').waypoint(function () {
            $('.feature-area .animate.feat-top-left').addClass('fadeInLeftBig');
        }, {offset: '80%'});
    }
    if ($('.feature-area .animate.feat-top-right').length > 0) {
        $('.feature-area .animate.feat-top-right').waypoint(function () {
            $('.feature-area .animate.feat-top-right').addClass('fadeInRightBig');
        }, {offset: '80%'});
    }
    if ($('.feature-area .animate.feat-bottom-left').length > 0) {
        $('.feature-area .animate.feat-bottom-left').waypoint(function () {
            $('.feature-area .animate.feat-bottom-left').addClass('fadeInLeftBig');
        }, {offset: '80%'});
    }
    if ($('.feature-area .animate.feat-bottom-right').length > 0) {
        $('.feature-area .animate.feat-bottom-right').waypoint(function () {
            $('.feature-area .animate.feat-bottom-right').addClass('fadeInRightBig');
        }, {offset: '80%'});
    }
    if ($('.team-area .animate').length > 0) {
        $('.team-area .animate').waypoint(function () {
            $('.team-area .animate').addClass('fadeInUp');
        }, {offset: '80%'});
    }

    if ($('.pricing-area .animate').length > 0) {
        $('.pricing-area .animate').waypoint(function () {
            $('.pricing-area .animate').addClass('fadeInUp');
        }, {offset: '80%'});
    }

    if ($('.faq-area .animate').length > 0) {
        $('.faq-area .animate').waypoint(function () {
            $('.faq-area img.animate').addClass('fadeInRightBig');
            $('.faq-area .panel.animate').addClass('fadeInLeft');
        }, {offset: '80%'});
    }

    if ($('.bog-area .animate').length > 0) {
        $('.bog-area .animate').waypoint(function () {
            $('.bog-area .animate').addClass('fadeInUp');
        }, {offset: '80%'});
    }

    if ($('.get-aps-area .animate').length > 0) {
        $('.get-aps-area .animate').waypoint(function () {
            $('.get-aps-area .animate').addClass('fadeInRight');
        }, {offset: '80%'});
    }

    if ($('.contact-area .animate').length > 0) {
        $('.contact-area .animate').waypoint(function () {
            $('.contact-area .animate:not(.delay-a)').addClass('fadeInLeft');
            $('.contact-area .animate.delay-a').addClass('fadeInRight');
        }, {offset: '80%'});
    }


    if ($('#blog-list .animate:eq(0)').length > 0) {
        $('#blog-list .animate:eq(0)').waypoint(function () {
            $('#blog-list .animate:eq(0), #blog-list .animate:eq(1), #blog-list .animate:eq(2)').addClass("fadeInUp");
        }, {offset: '80%'});
    }
    if ($('#blog-list .animate:eq(3)').length > 0) {
        $('#blog-list .animate:eq(3)').waypoint(function () {
            $('#blog-list .animate:eq(3), #blog-list .animate:eq(4), #blog-list .animate:eq(5)').addClass("fadeInUp");
        }, {offset: '80%'});
    }
    if ($('#blog-list .animate:eq(6)').length > 0) {
        $('#blog-list .animate:eq(6)').waypoint(function () {
            $('#blog-list .animate:eq(6), #blog-list .animate:eq(7), #blog-list .animate:eq(8)').addClass("fadeInUp");
        }, {offset: '80%'});
    }


})(jQuery);
