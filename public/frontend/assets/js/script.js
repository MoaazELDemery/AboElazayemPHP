(function($) {

    "use strict";

    $('.select').niceSelect();

    /*------------------------------------------
        = ALL ESSENTIAL FUNCTIONS
    -------------------------------------------*/

    // Toggle mobile navigation
    
    console.log($('.testWrapper p '));     
    console.log('ASDFAFA');

    let mainWidth  = 100 ; 
    let spanelement  = document.querySelectorAll('.ay7aga p') ; 
    
    spanelement.forEach((ele) =>  {
        console.log(ele.textContent);


        if((ele.firstElementChild && ele.firstElementChild.offsetWidth  < 250 ))
        {
            ele.style.width = '250px';
        }else
        {
            ele.style.width = 'max-content'
        }


      
        console.log( ele.style.width);
       let  eleLength = ele.textContent.split(' ').length  ; 
       console.log(ele.parentElement.offsetWidth);
       console.log((ele.parentElement.offsetWidth - ele.offsetWidth));
       if((ele.firstElementChild && ele.firstElementChild.offsetWidth  < 250 ))
       {
           console.log((250 - ele.firstElementChild.offsetWidth));
           
           if((250 - ele.firstElementChild.offsetWidth) / (ele.firstElementChild.textContent.split(' ').length) > 0 )
           {
                ele.style.wordSpacing =(250 - ele.firstElementChild.offsetWidth) / (ele.firstElementChild.textContent.split(' ').length) + 'px' ; 
           }else
           {
                ele.style.wordSpacing = 0  + 'px'
           }
       
        ele.style.fontFamily = 'hanimation Arabic'  ;  
         
       }else{
           debugger
           if((250 - ele.offsetWidth) / (ele.textContent.split(' ').length) >  0 )
           {
                ele.style.wordSpacing =(250 - ele.offsetWidth) / (ele.textContent.split(' ').length) + 'px' ; 
           }else
           {
               ele.style.wordSpacing = 0 ; 
           }
           console.log(ele);
       
        ele.style.fontFamily = 'hanimation Arabic'  ;  

       }

    })



    // window.onload = function (){
    //     $('.testWrapper p ').each((e)=> {
    //         if(e.innerHTML)
    //         {
    //             let words  = e.split() ; 
    //             console.log(words.length );
    //           $(this).css('wordSpacing' , 100 / words.length)
    //         }
    //     })
    // }
    


























    function toggleMobileNavigation() {
        var navbar = $(".navigation-holder");
        var openBtn = $(".navbar-header .open-btn");
        var closeBtn = $(".navigation-holder .close-navbar");
        var body = $(".page-wrapper");

        openBtn.on("click", function() {
            if (!navbar.hasClass("slideInn")) {
                navbar.addClass("slideInn");
                body.addClass("body-overlay");
            }
            return false;
        })

        closeBtn.on("click", function() {
            if (navbar.hasClass("slideInn")) {
                navbar.removeClass("slideInn");
            }
            body.removeClass("body-overlay");
            return false;
        })
    }

    toggleMobileNavigation();


    // Function for toggle class for small menu
    function toggleClassForSmallNav() {
        var windowWidth = window.innerWidth;
        var mainNav = $("#navbar > ul");

        if (windowWidth <= 991) {
            mainNav.addClass("small-nav");
        } else {
            mainNav.removeClass("small-nav");
        }
    }

    toggleClassForSmallNav();


    // Function for small menu
    function smallNavFunctionality() {
        var windowWidth = window.innerWidth;
        var mainNav = $(".navigation-holder");
        var smallNav = $(".navigation-holder > .small-nav");
        var subMenu = smallNav.find(".sub-menu");
        var megamenu = smallNav.find(".mega-menu");
        var menuItemWidthSubMenu = smallNav.find(".menu-item-has-children > a");

        if (windowWidth <= 991) {
            subMenu.hide();
            megamenu.hide();
            menuItemWidthSubMenu.on("click", function(e) {
                var $this = $(this);
                $this.siblings().slideToggle();
                e.preventDefault();
                e.stopImmediatePropagation();
            })
        } else if (windowWidth > 991) {
            mainNav.find(".sub-menu").show();
            mainNav.find(".mega-menu").show();
        }
    }

    smallNavFunctionality();


    // Parallax background
    function bgParallax() {
        if ($(".parallax").length) {
            $(".parallax").each(function() {
                var height = $(this).position().top;
                var resize = height - $(window).scrollTop();
                var doParallax = -(resize / 5);
                var positionValue = doParallax + "px";
                var img = $(this).data("bg-image");

                $(this).css({
                    backgroundImage: "url(" + img + ")",
                    backgroundPosition: "50%" + positionValue,
                    backgroundSize: "cover"
                });
            });
        }
    }


    // Hero slider background setting
    function sliderBgSetting() {
        if ($(".hero-slider .slide").length) {
            $(".hero-slider .slide").each(function() {
                var $this = $(this);
                var img = ($this.find(".slider-bg").attr("src")) ? $this.find(".slider-bg").attr("src") : false;

                if (img) {
                    $this.css({
                        backgroundImage: "url(" + img + ")",
                        backgroundSize: "cover",
                        backgroundPosition: "center center"
                    })
                }
            });
        }
    }


    //Setting hero slider
    function heroSlider() {
        if ($(".hero-slider").length) {
            $(".hero-slider").slick({
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                dots: true,
                fade: true,
                cssEase: 'linear',
            });
        }
    }

    //Active heor slider
    heroSlider();






    $('.wpo-payment-select .addToggle').on('click', function() {
        $('.payment-name').addClass('active')
        $('.wpo-payment-option').removeClass('active')
    })


    $('.wpo-payment-select .removeToggle').on('click', function() {
        $('.wpo-payment-option').addClass('active')
        $('.payment-name').removeClass('active')
    });


    /*------------------------------------------
    = HIDE PRELOADER
    -------------------------------------------*/
    function preloader() {
        if ($('.preloader').length) {
            $('.preloader').delay(100).fadeOut(500, function() {

                //active wow
                wow.init();

            });
        }
    }


    /*------------------------------------------
        = WOW ANIMATION SETTING
    -------------------------------------------*/
    var wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    });


    /*------------------------------------------
        = ACTIVE POPUP IMAGE
    -------------------------------------------*/
    if ($(".fancybox").length) {
        $(".fancybox").fancybox({
            openEffect: "elastic",
            closeEffect: "elastic",
            wrapCSS: "project-fancybox-title-style"
        });
    }


    /*------------------------------------------
        = POPUP VIDEO
    -------------------------------------------*/
    if ($(".video-btn").length) {
        $(".video-btn").on("click", function() {
            $.fancybox({
                href: this.href,
                type: $(this).data("type"),
                'title': this.title,
                helpers: {
                    title: { type: 'inside' },
                    media: {}
                },

                beforeShow: function() {
                    $(".fancybox-wrap").addClass("gallery-fancybox");
                }
            });
            return false
        });
    }


    /*------------------------------------------
        = ACTIVE GALLERY POPUP IMAGE
    -------------------------------------------*/
    if ($(".popup-gallery").length) {
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',

            gallery: {
                enabled: true
            },

            zoom: {
                enabled: true,

                duration: 300,
                easing: 'ease-in-out',
                opener: function(openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    }


    /*------------------------------------------
        = FUNCTION FORM SORTING GALLERY
    -------------------------------------------*/
    function sortingGallery() {
        if ($(".sortable-grid .grid-filters").length) {
            var $container = $('.grid-container');
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false,
                }
            });

            $(".grid-filters li a").on("click", function() {
                $('.grid-filters li .current').removeClass('current');
                $(this).addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false,
                    }
                });
                return false;
            });
        }
    }

    sortingGallery();


    /*------------------------------------------
        = MASONRY GALLERY SETTING
    -------------------------------------------*/
    function masonryGridSetting() {
        if ($('.masonry-gallery').length) {
            var $grid = $('.masonry-gallery').masonry({
                itemSelector: '.grid-item',
                columnWidth: '.grid-item',
                percentPosition: true
            });

            $grid.imagesLoaded().progress(function() {
                $grid.masonry('layout');
            });
        }
    }

    // masonryGridSetting();


    /*------------------------------------------
        = STICKY HEADER
    -------------------------------------------*/

    // Function for clone an element for sticky menu
    function cloneNavForSticyMenu($ele, $newElmClass) {
        $ele.addClass('original').clone().insertAfter($ele).addClass($newElmClass).removeClass('original');
    }

    // clone home style 1 navigation for sticky menu
    if ($('.wpo-site-header .navigation').length) {
        cloneNavForSticyMenu($('.wpo-site-header .navigation'), "sticky-header");
    }

    var lastScrollTop = '';

    function stickyMenu($targetMenu, $toggleClass) {
        var st = $(window).scrollTop();
        var mainMenuTop = $('.wpo-site-header .navigation');

        if ($(window).scrollTop() > 1000) {
            if (st > lastScrollTop) {
                // hide sticky menu on scroll down
                $targetMenu.removeClass($toggleClass);

            } else {
                // active sticky menu on scroll up
                $targetMenu.addClass($toggleClass);
            }

        } else {
            $targetMenu.removeClass($toggleClass);
        }

        lastScrollTop = st;
    }


    /*------------------------------------------
        = Header search toggle
    -------------------------------------------*/
    if ($(".header-search-form-wrapper").length) {
        var searchToggleBtn = $(".search-toggle-btn");
        var searchContent = $(".header-search-form");
        var body = $("body");

        searchToggleBtn.on("click", function(e) {
            searchContent.toggleClass("header-search-content-toggle");
            e.stopPropagation();
        });

        body.on("click", function() {
            searchContent.removeClass("header-search-content-toggle");
        }).find(searchContent).on("click", function(e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = Header shopping cart toggle
    -------------------------------------------*/
    if ($(".mini-cart").length) {
        var cartToggleBtn = $(".cart-toggle-btn");
        var cartContent = $(".mini-cart-content");
        var body = $("body");

        cartToggleBtn.on("click", function(e) {
            cartContent.toggleClass("mini-cart-content-toggle");
            e.stopPropagation();
        });

        body.on("click", function() {
            cartContent.removeClass("mini-cart-content-toggle");
        }).find(cartContent).on("click", function(e) {
            e.stopPropagation();
        });
    }


    /*------------------------------------------
        = NEW PRODUCT SLIDER
    -------------------------------------------*/
    if ($(".new-product-slider".length)) {
        $(".new-product-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 500,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="fi ti-angle-left"></i>', '<i class="fi ti-angle-right"></i>'],
            dots: false,
            items: 1
        });
    }


    /*------------------------------------------
        = FUNFACT
    -------------------------------------------*/
    if ($(".odometer").length) {
        $('.odometer').appear();
        $(document.body).on('appear', '.odometer', function(e) {
            var odo = $(".odometer");
            odo.each(function() {
                var countNumber = $(this).attr("data-count");
                $(this).html(countNumber);
            });
        });
    }


    /*------------------------------------------
        = TESTIMONIALS SLIDER
    -------------------------------------------*/
    if ($(".wpo-testimonial-slider").length) {
        $(".wpo-testimonial-slider").owlCarousel({
            center: true,
            loop: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                },

                650: {
                    items: 2,
                    center: false,
                    margin: 10
                },

                992: {
                    items: 3
                }
            }
        });
    }

    /*------------------------------------------
        = POST SLIDER
    -------------------------------------------*/
    if ($(".post-slider".length)) {
        $(".post-slider").owlCarousel({
            mouseDrag: false,
            smartSpeed: 500,
            margin: 30,
            loop: true,
            nav: true,
            navText: ['<i class="fi ti-angle-left"></i>', '<i class="fi ti-angle-right"></i>'],
            dots: false,
            items: 1
        });
    }


    /*------------------------------------------
        = CONTACT FORM SUBMISSION
    -------------------------------------------*/
    if ($("#contact-form").length) {
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },

                name2: "required",

                email: "required",

                subject: "required",

                address: "required"
            },

            messages: {
                name: "Please enter your name",
                name2: "Please enter your name",
                email: "Please enter your email address",
                subject: "Please enter your Subject",
            },

            submitHandler: function(form) {
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: $(form).serialize(),
                    success: function() {
                        $("#loader").hide();
                        $("#success").slideDown("slow");
                        setTimeout(function() {
                            $("#success").slideUp("slow");
                        }, 3000);
                        form.reset();
                    },
                    error: function() {
                        $("#loader").hide();
                        $("#error").slideDown("slow");
                        setTimeout(function() {
                            $("#error").slideUp("slow");
                        }, 3000);
                    }
                });
                return false; // required to block normal submit since you used ajax
            }

        });
    }



    /*------------------------------------------
        = BACK TO TOP BTN SETTING
    -------------------------------------------*/
    $("body").append("<a href='#' class='back-to-top'><i class='ti-arrow-up'></i></a>");

    function toggleBackToTopBtn() {
        var amountScrolled = 1000;
        if ($(window).scrollTop() > amountScrolled) {
            $("a.back-to-top").fadeIn("slow");
        } else {
            $("a.back-to-top").fadeOut("slow");
        }
    }

    $(".back-to-top").on("click", function() {
        $("html,body").animate({
            scrollTop: 0
        }, 700);
        return false;
    })


    /*==========================================================================
        WHEN DOCUMENT LOADING
    ==========================================================================*/
    $(window).on('load', function() {

        preloader();

        sliderBgSetting();

        toggleMobileNavigation();

        smallNavFunctionality();

    });



    /*==========================================================================
        WHEN WINDOW SCROLL
    ==========================================================================*/
    $(window).on("scroll", function() {

        if ($(".wpo-site-header").length) {
            stickyMenu($('.wpo-site-header .navigation'), "sticky-on");
        }

        toggleBackToTopBtn();

    });


    /*==========================================================================
        WHEN WINDOW RESIZE
    ==========================================================================*/
    $(window).on("resize", function() {

        toggleClassForSmallNav();

        clearTimeout($.data(this, 'resizeTimer'));
        $.data(this, 'resizeTimer', setTimeout(function() {
            smallNavFunctionality();
        }, 200));

    });



    // login

    $(".reveal6").on('click', function() {
        var $pwd = $(".pwd6");
        if ($pwd.attr('type') === 'text') {
            $pwd.attr('type', 'password');
        } else {
            $pwd.attr('type', 'text');
        }
    });


    $(".reveal3").on('click', function() {
        var $pwd = $(".pwd2");
        if ($pwd.attr('type') === 'text') {
            $pwd.attr('type', 'password');
        } else {
            $pwd.attr('type', 'text');
        }
    });

    $(".reveal2").on('click', function() {
        var $pwd = $(".pwd3");
        if ($pwd.attr('type') === 'text') {
            $pwd.attr('type', 'password');
        } else {
            $pwd.attr('type', 'text');
        }
    });



    $(document).ready(function($) {
        function animateElements() {
            $('.progressbar').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.circle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.circle').circleProgress({
                        startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size: 160,
                        thickness: 30,
                        emptyFill: "rgba(182,228,254, .2)",
                        fill: {
                            color: '#0dc2f8'
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                    }).stop();
                }
            });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);

    });
    $(document).ready(function($) {
        function animateElements() {
            $('.progressbar2').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.circle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.circle').circleProgress({
                        startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size: 160,
                        thickness: 30,
                        emptyFill: "#ffdadc",
                        fill: {
                            color: '#ff8f84'
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                    }).stop();
                }
            });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);

    });

    $(document).ready(function($) {
        function animateElements() {
            $('.progressbar3').each(function() {
                var elementPos = $(this).offset().top;
                var topOfWindow = $(window).scrollTop();
                var percent = $(this).find('.circle').attr('data-percent');
                var percentage = parseInt(percent, 10) / parseInt(100, 10);
                var animate = $(this).data('animate');
                if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
                    $(this).data('animate', true);
                    $(this).find('.circle').circleProgress({
                        startAngle: -Math.PI / 2,
                        value: percent / 100,
                        size: 160,
                        thickness: 30,
                        emptyFill: "#d6d3ff",
                        fill: {
                            color: '#8379fe'
                        }
                    }).on('circle-animation-progress', function(event, progress, stepValue) {
                        $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
                    }).stop();
                }
            });
        }

        // Show animated elements
        animateElements();
        $(window).scroll(animateElements);

    });


})(window.jQuery);

$(document).ready(function() {
    $("#Search-toggle  .fa-plus-square").hide();
    $("#Search-toggle").click(function() {
        $("#search").toggle('slow');
        $("#Search-toggle .fa-minus-square , #Search-toggle  .fa-plus-square").toggle();
    });
});

$(document).ready(function(){
    $(".btn1").click(function(){
      $("one").hide();
    });
    $(".btn1").click(function(){
      $("one").show();
    });
  });

$(document).ready(function() {
    $("#shikh-filter  .fa-plus-square").hide();
    $("#shikh-filter").click(function() {
        $("#shikh").toggle('slow');
        $("#shikh-filter .fa-minus-square , #shikh-filter  .fa-plus-square").toggle();
    });

    $(document).ready(function(){
        $("#in").click(function(){
          $("#on").toggle();
        });
      });

      $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
      })
  

});



$("#ourSelect").on("change",()=>{
    ;
    $("#ourSelect option:selected").val();

});



function selectOption(element){
    $id = $('#ourSelect :selected').attr('class');
    $('.imam_tafser').css('display','none');
    $('#'+ $id).css('display','block');
}


$(".btn-1").on("click",function(){
    $(".show-1").toggle();
});

$(".btn-2").on("click",function(){
    $(".show-2").toggle();
});

$(".btn-3").on("click",function(){
    $(".show-3").toggle();
    $(".btn-content-2").hide();

});
// $(".btn-4").on("click",function(){
//     $(".show-4").toggle();
//     $(".show-5").hide();
//     $(".show-3").hide();
    
// });
$(".btn-5").on("click",function(){
    $(".show-5").toggle();
    $(".show-4").hide();
    $(".show-3").hide();
});
$(".btn-6").on("click",function(){
    $(".show-6").toggle();
    $(".show-7").hide();
    $(".show-8").hide();

});
$(".btn-7").on("click",function(){
    $(".show-7").toggle();
    $(".show-6").hide();
    $(".show-8").hide();

});
$(".btn-8").on("click",function(){
    $(".show-8").toggle();
    $(".show-6").hide();
    $(".show-7").hide();
});
$(".btn-9").on("click",function(){
    $(".share").toggle();


});

$('.btn-type').on("click",function(){
    $class = '.'+$(this).data('class');console.log($class);
    $('.type_tafcer').hide();
    $($class).show();
    console.log($($class));
    // .show;
});
$('.btn-student').on("click",function(){
    $class = '.'+$(this).data('class');console.log($class);
    $('.student_tafcer').hide();
    $($class).show();
    console.log($($class));
    // .show;
});





if (window.matchMedia('(max-width: 767px)').matches) {
    $('#sura_link_1').on("click",function(){
        $("#suras").hide();
    });
}

//print
$(document).on('click', '#print-btn', function() {

    $('.print-area').printThis();

});//end of click function

$(document).on('click', '#print-btn-Algalalyn', function() {

    $('.print-Algalalyn').printThis();

});//end of click function

$(document).on('click', '#print-btn-Alsaady', function() {

    $('.print-Alsaady').printThis();

});//end of click function

$(document).on('click', '#print-btn-AbnKatheer', function() {

    $('.print-AbnKatheer').printThis();

});//end of click function

$(document).on('click', '#print-btn-Tantawy', function() {

    $('.print-Tantawy').printThis();

});//end of click function

$(document).on('click', '#print-btn-Albagfwy', function() {

    $('.print-Albagfwy').printThis();

});//end of click function

$(document).on('click', '#print-btn-Alkortaby', function() {

    $('.print-Alkortaby').printThis();

});//end of click function

$(document).on('click', '#print-btn-Altabary', function() {

    $('.print-Altabary').printThis();

});//end of click function

$(document).on('click', '#print-btn-tafser', function() {

    $('.print-tafser').printThis();

});//end of click function

$(document).on('click', '#1', function() {

    $('.1').printThis();

});//end of click function

$(document).on('click', '#21', function() {

    $('.21').printThis();

});//end of click function

$(document).on('click', '#22', function() {

    $('.22').printThis();

});//end of click function

$(document).on('click', '#23', function() {

    $('.23').printThis();

});//end of click function

$(document).on('click', '#3', function() {

    $('.3').printThis();

});//end of click function


$(window).on('scroll', () => {
    console.log(($(window).scrollTop()));
    if ($(window).scrollTop() >= $('#accordion').offset().top - 100 )
    {
        $('.sauraoverlay').fadeIn(500);
    }
    else {
        $('.sauraoverlay').fadeOut(500); 
            
    }
        
})

// $('.box-custom').addClass('d-none')

// $(document).ready(function () {
//     $('.ui.dropdown').dropdown();

//     // $('#table_id').DataTable({
//     //     'language' :{
//     //         "url" : "https://cdn.datatables.net/plug-ins/1.10.24/i18n/Arabic.json"
//     //     }
//     // });
//     $('.ui.checkbox')
//         .checkbox({
//             onChecked() {
//                 const options = $('#members_dropdown > option').toArray().map(
//                     (obj) => obj.value
                    
//                 );
               
//                 $('#members_dropdown').dropdown('set exactly', options);
//             },
//             onUnchecked() {
//                 $('#members_dropdown').dropdown('clear');
//             },
//     });
    
//      $('.box-custom').hide() ; 
//     $("select").change(function () {
//         $("select").find("option:selected").each(function () {
//                 var optionValue = $(this).attr("value");
//                 // console.log(optionValue);
//                 // if (optionValue) {
//                 //     $("." + optionValue).show();
//                 //     // $("." + optionValue).css('background' , '#F00');
//                 // }
                
//                 // $(this).on('click' , () =>  {
//                 //     console.log('asda') ; 
//                 // })
//             });
            
//                     $("select").find("option:selected").each(function () {
//                     $(this).click(() =>  {
//                         console.log('asdfsa') ;
//                     })
                

//             });
            
//             allOptions = $(this).val() ; 
//             console.log(allOptions) ;
            
           
                
//                 function test(){
//                 {
                                
//                     if(allOptions !== null  )
//                     {
        
//                         if( allOptions.length > 0)
//                         {
                                                    
//                         $(`.box-custom`).hide() ;
//                         for(let i = 0 ; i < allOptions.length ; i++  )
//                         {
//                             // :not(.${allOptions[i]})
//                             console.log($(`select option`));
//                              $(`.${allOptions[i]}`).show() ;
                             
//                         }
//                         }else
//                         {
//                             $(`.box-custom`).hide() ;
//                         }

//                     }else
//                     {
//                         $(`.box-custom`).hide() ;
//                     }

//                 }
                
//                 }
//                 test() ; 

//     }).change()

        

// });
  