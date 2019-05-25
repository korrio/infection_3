(function ($) {
    "use strict";
    // Navbar Scroll Toggle
    $(window).on("scroll", function ()
    {
        if ($(window).scrollTop() > 20) {
            $("nav").addClass("bg-solid");
        } else {
            $("nav").removeClass("bg-solid");
        }
    }).scroll();
    $(".external").on("click", function (e)
    {
        e.preventDefault();
        window.location = $(e.currentTarget).attr('href');
    });
    
    // Nav Scroll Click
    $('.menu-item-has-children > a').on('click', function () {
        $('.menu-item-has-children > a').removeAttr("href");
    });
    
    /*=================== Menu Taggle Button new add===================*/

    // Screenshot Carousel
    if ($("#screenshots").length > 0)
    {
        var hideDiv = "<div id='hide' class='screenshot-hidden'></div>";
        $("#screenshots").append(hideDiv);
    }
    var owlID = $("#owl-id");
    if (owlID.length > 0)
    {
        owlID.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 2],
            itemsMobile: [640, 1]
        });
        owlID.magnificPopup({// Screenshot
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: "<a href='%url%'>The image #%curr%</a> could not be loaded."
            }
        });
    }
    // Screenshot Filter
    if ($("#screenshots").length > 0) {
        $("#screenshots").append("<div id='hide' class='screenshot-hidden'></div>");
    }
    var owlID = $("#owl-demo-a");
    if (owlID.length > 0) {
        owlID.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 2],
            itemsMobile: [640, 1]
        });
        owlID.magnificPopup({// Screenshot
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1]
            },
            image: {
                tError: "<a href='%url%'>The image #%curr%</a> could not be loaded."
            }
        });
    }
    // Screenshot Filter
    $(function ()
    {
        $('#Container').mixItUp();
    });
    // video Popup
    if ($(".youtube-popup").length > 0)
    {
        $(".youtube-popup").magnificPopup({
            type: "iframe"
        });
    }
    // Testimonial
    if ($("#owl-testimonial").length > 0)
    {
        $("#owl-testimonial").owlCarousel({
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [991, 1],
            itemsMobile: [785, 1],
            autoPlay: true,
            slideSpeed: 250
        });
    }
    //Contct Form
    var con_sub = $(".contact_form");
    //Contact From Validate
    con_sub.find(".form-control").each(function (index)
    {
        $(this).on("keyup", function ()
        {
            if ($(this).val() === "")
            {
                $(this).removeClass("input-expand");
                $(this).addClass("contact_error");
            }
            else
            {
                $(this).removeClass("contact_error");
                $(this).addClass("input-expand");
            }
        });
    });
    
    /*=================== One Page Scrolling ===================*/
      $(document).on('click', 'ul.multi li a', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top
          }, 1500, 'easeInOutCirc');
          event.preventDefault();
      });
    
    
    //Pre-Loader
    $(window).load(function ()
    {
        if ($(".loading").length > 0) {
            $(".loading").delay(125).fadeOut(500);
        }
        if ($("header#home .display-none").length > 0) {
            $("header#home .display-none").removeClass("display-none");
        }
    });
    //Scrollup Bottom
    $(window).scroll(function ()
    {
        if ($(this).scrollTop() > 100) {
            $(".scrollup").fadeIn();
        } else {
            $(".scrollup").fadeOut();
        }
    });
    if ($(".scrollup").length > 0)
    {
        $(".scrollup").on("click", function ()
        {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    }
    //Video Slider 
    if ($("#P1").length > 0) 
    {
        $("#P1").YTPlayer();
    }   
    
    /*===========Portfolio isotope js===========*/
    function portfolioMasonry(){
        var portfolio = $("#masonry");
        if( portfolio.length ){
            portfolio.imagesLoaded( function() {
              // images have loaded
                // Activate isotope in container
                portfolio.isotope({
                    itemSelector: "",
                    layoutMode: 'masonry',
                    transformsEnabled: true,
                    transitionDuration: "700ms",
                });
            })
        }
    }
    portfolioMasonry();
})(jQuery);
