// JavaScript Document


(function () {

  
//   const pageLink = document.querySelectorAll(".page-scroll");

// pageLink.forEach((elem) => {
//   elem.addEventListener("click", (e) => {
//     e.preventDefault();
//     document.querySelector(elem.getAttribute("href")).scrollIntoView({
//       behavior: "smooth",
//       offsetTop: 1 - 60,
//     });
//   });
// });

// section menu active
// function onScroll(event) {
//   const sections = document.querySelectorAll(".page-scroll");
//   const scrollPos =
//     window.pageYOffset ||
//     document.documentElement.scrollTop ||
//     document.body.scrollTop;

//   for (let i = 0; i < sections.length; i++) {
//     const currLink = sections[i];
//     const val = currLink.getAttribute("href");
//     const refElement = document.querySelector(val);
//     const scrollTopMinus = scrollPos + 73;
//     if (
//       refElement.offsetTop <= scrollTopMinus &&
//       refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
//     ) {
//       document.querySelector(".page-scroll").classList.remove("active");
//       currLink.classList.add("active");
//     } else {
//       currLink.classList.remove("active");
//     }
//   }
// }

// window.document.addEventListener("scroll", onScroll);



    $("#comaresec1").click(function(){
      $("#shocarset").toggle('#shocarset');
      $("#shocar").toggle();
      $("#comaresec1").toggle('.comphotohidebtnsec');
      $("#comptotalsec").toggle('.compdtlsechide');
      $(".chngtext").text("Back To Details");
    });
    
    $("#bactoserc").click(function(){
      $("#shocar").addClass('.showallthings');
       $("#comptotalsec").toggle('.showallthings');
       $("#shocarset").toggle('.showallthings');
       $("#shocar").toggle();
       $(".chngtext").text("Back To Search");
    });


    // var stickyOffset = $('.sticky').offset().top;

    // $(window).scroll(function(){
    //   var sticky = $('.sticky'),
    //       scroll = $(window).scrollTop();
        
    //   if (scroll >= stickyOffset) sticky.addClass('fixed');
    //   else sticky.removeClass('fixed');
    // });
    


})();


jQuery(document).ready(function($){
	
    var HTHeight = $(".hdrtop").outerHeight();
    var SRCHHeight = $(".srchsec").outerHeight();
    var WHeight = $(window).outerHeight();
    

    
    
    $('.inrpg').css('margin-top',HTHeight + SRCHHeight);
    $('.-hdrhight, .slick-vertical .slick-list').css('height',WHeight - HTHeight - SRCHHeight);
    
    setTimeout(function() {
        
        $('.slick-vertical .slick-list, .slider-for .slider-banner-image').css('max-height',WHeight - HTHeight - SRCHHeight);
    }, 1000);
    
    
    $(window).scroll(function () {
		if ($(this).scrollTop() > 20 ) {
			$('header.header').addClass('fixed');
		} else {
			$('header.header').removeClass('fixed');
		}
	});
    
  $(".mnutog").click(function(){
        $("header.header").addClass("active");
    });
    $(".mnucls").click(function(){
        $("header.header").removeClass("active");
    });
    
    var offset = $( "#pagew" ).offset();
    
    
    setTimeout(function() {
        $('.instaslide .slick-disabled + .slick-list > .slick-track').css('left',+ offset.left );
    }, 1000);
    

    $('.homeslider').slick({
  dots: false,
  infinite: true,
        autoplay: true,
        arrows: false,
        pauseOnHover:false,
  fade: true,
  cssEase: 'linear'
});
    
    
    $('.slide5').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        //autoplay: true,
        infinite: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
        ]
    });
    
    $('.instaslide').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        //autoplay: true,
        infinite: false,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }
        ]
    });
    
    
    
    $('.productslide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        centerMode: true,
        focusOnSelect: true,
        centerPadding: '80px',
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerPadding: '70px',
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                  centerPadding: '50px',
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                  centerPadding: '40px',
              }
            }
        ]
    });


    
    $('.slide3').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
        ]
    });


    $('.slider360').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      //autoplay: true,
      infinite: false,
      autoplaySpeed: 2000,
      arrows: true,
      dots: false,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          }
      ]
  });

  




    
    

    $('[data-toggle="popover"]').popover()
    $('[data-toggle="tooltip"]').tooltip()
    
    $(".js-range-slider").ionRangeSlider();
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
        $('#toTopBtn').fadeIn('slow');
        } else {
        $('#toTopBtn').fadeOut('slow');
        }
    });

    $('#toTopBtn').click(function() {
        $("html, body").animate({
        scrollTop: 0
        }, 800);
        return false;
    });
    
    
    
     $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
         infinite: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: false,
        vertical:true,
        asNavFor: '.slider-for',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        verticalSwiping:true,
        responsive: [
        {
            breakpoint: 992,
            settings: {
              vertical: false,
            }
        },
        {
          breakpoint: 768,
          settings: {
            vertical: false,
          }
        },
        {
          breakpoint: 580,
          settings: {
            vertical: false,
            slidesToShow: 3,
          }
        },
        {
          breakpoint: 380,
          settings: {
            vertical: false,
            slidesToShow: 2,
          }
        }
        ]
    });
    
     $('.slidertab-for').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
         dots: false,
          asNavFor: '.slidertab-nav'
        });
        $('.slidertab-nav').slick({
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '.slidertab-for',
          dots: false,
          focusOnSelect: true
        });
    
    
  
  
 

    $('.modal').on('shown.bs.modal', function (e) {
        $('.slidertab-for').slick('setPosition');
        $('.slidertab-nav').slick('setPosition');
    })
    $('a[data-slide]').click(function(e) {
       e.preventDefault();
       var slideno = $(this).data('slide');
       $('.slidertab-nav').slick('slickGoTo', slideno - 0);
     });
    
    $('.knowwhatslide').slick({
          dots: false,
          slidesToShow: 1,
        autoplay: true
        });
    
    
    
    var $animation_elements = $('.imgeffect');
    var $window = $(window);
    function check_if_in_view() {
      var window_height = $window.height();
      var window_top_position = $window.scrollTop();
      var window_bottom_position = (window_top_position + window_height);
      $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
            
            
            var CWidth = $('#contttt').outerWidth();
            $('.wayitsecbg, .seltradsecbg').css('min-width',CWidth - 200);
            
            $(window).scroll(function() {
              var scroll = $(window).scrollTop();
              $(".in-view .wayitsecbg").css({
                width: (60 + scroll/30) + "%"
              }); 
                /*$(".in-view .wayitsecbg span").css({
                opacity: (0.2 + scroll/20) + "%"
              }); */
                
            });
            
            $(window).scroll(function() {
              var scroll = $(window).scrollTop();
              $(".in-view .seltradsecbg").css({
                width: (60 + scroll/60) + "%"
              })
               /* $(".in-view .seltradsecbg span").css({
                opacity: (0.005 + scroll/30) + "%"
              });*/
            })
            
            
           
            
        } else {
          $element.removeClass('in-view');
        }
      });
    }
    $window.on('scroll resize', check_if_in_view);
    $window.trigger('scroll');
    

        
        
    
    
    
    
    
    
    
    function reveal() {
  var reveals = document.querySelectorAll(".fadeUp");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("in-view");
    } else {
      reveals[i].classList.remove("in-view");
    }
  }
}

window.addEventListener("scroll", reveal);
    
    
    
    
    
    
        
      setTimeout(function() {
        $('select').SumoSelect();
    }, 2000);  

    
    
    
    $(".slick-vertical .slick-list, .slider-for .slider-banner-image").mCustomScrollbar({
        theme:"minimal-dark"
    });
    
    $('[data-fancybox="gallery"]').fancybox({
	
    });
    
    
    
    
    
    
    
    
    
    
    
    var $range = $(".redrange");
    var $input = $(".js-input");
    var instance;
    var min = 0;
    var max = 1000;
    
    $range.ionRangeSlider({
        skin: "round",
        type: "single",
        min: min,
        max: max,
        from: 500,
        onStart: function(data) {
            $input.prop("value", data.from);
        },
        onChange: function(data) {
            $input.prop("value", data.from);
        }
    });
    
    instance = $range.data("ionRangeSlider");
    
    $input.on("input", function() {
        var val = $(this).prop("value");
        if (val < min) {
            val = min;
        } else if (val > max) {
            val = max;
        }
    
        instance.update({
            from: val
        });
    });
    
    
    
    var $range2 = $(".redrange2");
    var $input2 = $(".js-input2");
    var instance2;
    var min2 = 0;
    var max2 = 1000;
    
    $range2.ionRangeSlider({
        skin: "round",
        type: "single",
        min: min,
        max: max,
        from: 500,
        onStart: function(data) {
            $input2.prop("value", data.from);
        },
        onChange: function(data) {
            $input2.prop("value", data.from);
        }
    });
    
    instance2 = $range2.data("ionRangeSlider");
    
    $input2.on("input", function() {
        var val = $(this).prop("value");
        if (val < min) {
            val = min;
        } else if (val > max) {
            val = max;
        }
    
        instance2.update({
            from: val
        });
    });
    
    
    
    
    
    var $range3 = $(".redrange3");
    var $input3 = $(".js-input3");
    var instance3;
    var min3 = 0;
    var max3 = 1000;
    
    $range3.ionRangeSlider({
        skin: "round",
        type: "single",
        min: min,
        max: max,
        from: 500,
        onStart: function(data) {
            $input3.prop("value", data.from);
        },
        onChange: function(data) {
            $input3.prop("value", data.from);
        }
    });
    
    instance3 = $range3.data("ionRangeSlider");
    
    $input3.on("input", function() {
        var val = $(this).prop("value");
        if (val < min) {
            val = min;
        } else if (val > max) {
            val = max;
        }
    
        instance3.update({
            from: val
        });
    });
    


    
    
    
    
    
    
});


