var $ = jQuery.noConflict();

(function($) {


  $.fn.visible = function(partial) {
    
      var $t            = $(this),
          $w            = $(window),
          viewTop       = $w.scrollTop(),
          viewBottom    = viewTop + $w.height(),
          _top          = $t.offset().top,
          _bottom       = _top + $t.height(),
          compareTop    = partial === true ? _bottom : _top,
          compareBottom = partial === true ? _top : _bottom;
    
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop));

  };
    
})(jQuery);

$(document).ready(function () {
  setTimeout(function(){
    // $(".home_banner p,.heading_text_animation").addClass("animated");
    // $(".banner_hero").addClass("animated");
  },400)

  

  $('.investor-empower .info_text .with-line h2').addClass('animate')


  // Lottie Anim Init
  // lottieTrigger();

  $(".with-line h2 span").each(function(){
      if($(this).text().split(" ").length <= 2){
          $(this).parent().addClass("two_str")
      }
  })

  // Blog IMG Sizing Fixing
  $(".g-page .content").length > 0 ? $(".wp-caption").attr('style',"") : ""

  

  // Click GoTo Scroll In new Page
  



  // Click GoTo Scroll In new Page
  $('.home_banner .goto_sec a') && $('.home_banner .goto_sec a').bind('click', function(e) {
  // e.preventDefault(); // prevent hard jump, the default behavior

  var target = $(this).attr("href"); // Set the target as variable
  var index = target.indexOf("#");
  if (index !== -1)
  {
    var hash = '#'+target.substring(index + 1);
    if($(hash).length > 0){
      $('html, body').stop().animate({
          scrollTop: $(hash).offset().top - $('header').outerHeight()
      }, 1200);
    }
  }
});
  

  $(` header .header_wrap nav .menu li .sub-menu li.nav_col .nav_item ul li .nav_link,footer .top_footer .foot_menu_list .foot_menu ul li a `).bind('click', function(e) {
    var _has =  window.location.hash.slice(1);
      if(_has){
      jQuery( 'html, body' ).animate({
              scrollTop: jQuery('.'+_has).offset().top - ($('header').outerHeight() + 50),
          },1000);        
      }
    })


if($('[data-pagination]').length > 0){
  if (window.location.hash) {
    
    var hash = window.location.hash;  
    $('html, body').animate({
        scrollTop: $("[data-pagination="+hash+"]").offset().top - $('header').outerHeight()
    }, 500, 'swing');
  }
}  

  // Adding Popup Class to select Box
  $('.popup .popup_wrap form select').addClass('makeMeList');
  

  
  // Back To Previous Page
  $('.banner a.back_btn').on('click', function(e){
    window.location.replace(document.referrer);
  });

  $(document).on("click",".thankyou-popup  .close_btn,.thankyou-popup  .close_btn img,.thankyou-popup  .popup_wrap .thankyou-popup .content .btn,.thankyou-popup .popup_overlay",function(){
    location.reload();
  });
  

  // Fix Resources Page Button Hide
  if($(".tags li.active a").text() === "All"){
    $("#explore_more_btn").hide()
    $("#explore_more_btn").hide()
  $("#tag_explore_more_arc_btn").hide()
  } else {
    $("#explore_more_btn").show()
    $("#explore_more_arc_btn").show()
    $("#tag_explore_more_arc_btn").show()
  }

  $(document).on("click",".tags li",function(){
    if($(".tags li.active a").text() === "All"){
      $("#explore_more_btn").hide();
    $("#explore_more_arc_btn").hide()
    $("#tag_explore_more_arc_btn").hide()
    } else {
      $("#explore_more_btn").show();
    $("#explore_more_arc_btn").show()
    $("#tag_explore_more_arc_btn").show()
    }
  });

let currentPage_arc = 1;
  let loaded_blogs_arc = [];  
  $('#explore_more_arc_btn').on("click",function(e){
    e.preventDefault();
    currentPage_arc++; 
    var recent_post_id_hidden = $("input#recent_post_id_hidden").val();
    $("#loader_explore").show(); 
    $("#explore_more_arc_btn").hide();   
   var catid =  $("#archive_field").attr("data-cat");

$("#blog_list_ajax_response [class*='col-']").each(function(){
    let currentVal = $(this).data('blogid');
    loaded_blogs_arc.push(currentVal)
  });

  var total_loaded_elem = $('.filter .search_items#blog_list_ajax_response [class*=col-]').length;
  jQuery.ajax({
    type: "post",
    dataType: "json",
    url: myAjax.ajaxurl,
    data: {   
      recent_post_id_hidden: recent_post_id_hidden,
      catid: catid,  
      loaded_blogs: loaded_blogs_arc,  
      paged: currentPage_arc,
      action: "ajax_blog_list_agora_acc_archive"       
    },
    beforeSend: function () {},
    success: function (response) {
      $("#loader_explore").hide();
      $("#explore_more_arc_btn").show();      
      if(response.max == 1) {
        $("#explore_more_arc_btn").hide();
      }
      $("#blog_list_ajax_response").append(response.html);
      if (response.count_blogs == 0) {
        $("#loader_explore").hide();
        $("#explore_more_arc_btn").hide();     
      }

      if(response.whole_post == total_loaded_elem){
        $("#explore_more_arc_btn").hide();
      }
    },
    error: function (errorThrown) {
      console.log(errorThrown);
    },
  });

  });



  // Certification Animation
  if($('.certificate-wrap .certificate-logo').length > 0){
    var _length = $('.certificate-wrap .certificate-logo').length;
    var _midle = Math.round(_length / 2);
    var _ii = 1;
    $('.certificate-wrap .certificate-logo').each(function(i) {
      if(_ii == _midle){
        $(this).addClass('active');
      }
      _ii++;
    });
  }


  
  // Counter Js
  $("span.counter").counterUp({
    delay: 5,
    time: 1000,
  });

  $(document).on('click','.popup .popup_wrap .popup_header .close_btn',function(){
    $(".thankyou-popup-header").removeClass('active');
    // location.reload();
  })
  // Modals
  $(document).on("click", "[data-popup]",function () {
    $("[data-id]").removeClass("show-modal");
    // if($(this).parents('section').next('.popup').length > 0){
    //   $(this).parents('section').next('.popup').addClass("show-modal")
    // } else {
    // }
    $("[data-id=" + $(this).attr("data-popup") + "]").addClass("show-modal");
    
    
    // $("[data-id=" + $(this).attr("data-popup") + "]").addClass("show-modal");

    // let currentVal =  $(".popup .popup_wrap select > option:selected")
    // $('.popup .popup_wrap .scrollableList').children('div.selectedOption').text(currentVal);
    setTimeout(function(){
      $(".popup .popup_wrap select > option:selected").each(function() {
        $(this).parents(".input").find('.selectedOption').text(this.text)
      })
    },200)
  });
  $(document).on("click", ".close_btn,.popup .popup_overlay" ,function () {
    $(".popup").removeClass("show-modal");
    $(".popup .scrollableList").remove();
  });

  // AutoTabbing
  $(document).on("click",".tabbing-menu ul li", function () {
    

    var target = $(this).attr("data-rel");
    setTimeout(() => {
      $('.agora_blocks .tabbing-menu').length > 0 ? stickyNav() : ""
      // $('.agora_blocks .tabbing-content').length > 0 ? lottieTrigger() : ""
    }, 600);

    if($('#solution').length > 0){
      if ($('.lottie-player').length > 0) {
        $('.lottie-player').html('')
        var win = $(window);
        var allMods = $(".lottie-player");
        var _ary = [];
        allMods.each(function (i, el) {
          
          var _loop = $(this).attr('data-loop');
          var _id = $(this).attr('id');
          var _url = $(this).attr('data-url');
          if(_loop == 'true'){
          var _loop_status = true;
          }else{
            var _loop_status = false;
          }
    
          _ary[i] = {
            container: document.getElementById(_id),
            path: _url,
            renderer: 'svg',
            autoplay: false,
            loop: _loop_status,
          };
          var anim = bodymovin.loadAnimation(_ary[i]);
          anim.playSegments(1,true)
          
        })
      }
    }

    // if ($("#solution").length > 0) {
    //   if ($(".lottie-player").length > 0) {
    //     $('.lottie-player').html('')
    //     var win = $(window);
    //     var allMods = $(".lottie-player");
    //     var _ary = [];
    //     allMods.each(function (i, el) {
    //       var _loop = $(this).attr("data-loop");
    //       var _id = $(this).attr("id");
    //       var _url = $(this).attr("data-url");
    //       if (_loop == "true") {
    //         var _loop_status = true;
    //       } else {
    //         var _loop_status = false;
    //       }
    
    //       _ary[i] = {
    //         container: document.getElementById(_id),
    //         path: _url,
    //         renderer: "svg",
    //         autoplay: false,
    //         loop: _loop_status,
    //       };
    //       var anim = bodymovin.loadAnimation(_ary[i]);
    //       anim.playSegments(1,true)
    //       win.scroll(function (event) {
    //         var $this = $(this);
    //         setTimeout(function () {
    //           var _id = $(el).attr("id");
    //           var el1 = $("#" + _id);
    //           if (el1.length > 0) {
    //             if (el1.visible(true)) {
    //               if (!el1.hasClass("done")) {
    //                 el1.addClass("done");
    //                 anim.playSegments(1, true);
    //               }
    //             } else {
    //               el1.removeClass("done");
    //               anim.stop();
    //             }
    //           }
    //         }, 100);
    //       });
    //     });
    //   }
    // }
    

    $(".tabbing-menu ul li").removeClass("active");
    $(this).addClass("active");
    $("#" + target).fadeIn("slow").siblings(".tab-box").hide();
    $(".portal_block .portal_content .sm-height").removeClass('animated');
    $(".portal_block .portal_content .sm-height h2").removeClass('animate')

    var _id = $("#" + target).find('.lottie-player').attr('id');
    var _loop = $("#" + target).find('.lottie-player').attr('data-loop');
    var _url = $("#" + target).find('.lottie-player').attr('data-url');
    // $("#" + target).find('.lottie-player').html('');
    $("#" + target).find('.lottie-player').removeClass('done');
    $(window).scrollTop($(window).scrollTop()+1);

    if($('#solution').length > 0)
    {

    }else{
      $('html, body').animate({
          scrollTop: $("#" + target).offset().top - $('header').outerHeight() - $('.agora_blocks .tabbing-menu ul').outerHeight()
      }, 500);
    }
    
    if($('.faqs').length > 0){
        faq_sticky();
1    }

    return false;
  });

  $('.solution .tabbing-menu .tags li:first-child').addClass('active');
 

  
  let hasBeenAnimated = false;

  $.fn.isInViewport = function () {
    let elementTop = $(this).offset().top;
    let elementBottom = elementTop + $(this).outerHeight();

    let viewportTop = $(window).scrollTop();
    let viewportBottom = viewportTop + window.innerHeight;

    return elementBottom > viewportTop && elementTop < viewportBottom;
  };



  // FAQ Js
  $('.faqs_list > li > .answer').hide();
  $(document).on('click','.faqs_list > li',function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active").find(".answer").slideUp();
    } else {
      $(".faqs_list > li.active .answer").slideUp();
      $(".faqs_list > li.active").removeClass("active");
      $(this).addClass("active").find(".answer").slideDown();
    }
    // return false;
  });



  // Sticku Nav on software Page

  $('.software-sticky_nav .tags li a').on('click', function(e) {
    // var currentResolution2;
    // if (window.innerWidth > 1367){
    //   currentResolution2 = $($(this).attr("href")).offset().top - 0
    //   console.log("big Screen")
    // } else if (window.innerWidth > 767){
    //   currentResolution2 = $($(this).attr("href")).offset().top - 60
    //   console.log("Mac Screen")
    // } else {
    //   currentResolution2 = $($(this).attr("href")).offset().top - 100
    //   console.log("big Screen")
    // }
    var currentResolution = window.innerWidth > 767 ? $($(this).attr("href")).offset().top + 20   :   $($(this).attr("href")).offset().top - 100 ;
    e.preventDefault();
    $('html, body').stop().animate({
        scrollTop: currentResolution 
    }, 500)
    return false;
  });

  

  // Adding Misc Element inside Mobile view (testimonial and arrow buttons etc./)
  if (window.matchMedia('(max-width: 767px)').matches){
    $( ".testimonial .testimonial_nav" ).insertAfter( $( ".testimonial_slider .swiper-wrapper" ) );
    $( ".blog_slider_sec .blog_nav_wrapper" ).insertAfter( $( ".blog_slider .swiper-wrapper" ) );
    $( ".blog_slider_wrap .product_slider_wrap" ).insertAfter( $( ".product_slider .swiper-wrapper" ) );
    $("footer .top_footer .foot_menu_list .foot_menu h6").append("<span class='arrow'></span>");
    $(".pagination_elem li:first").append("<i>/</i>")
    $("footer .top_footer .foot_menu_list .foot_menu").each(function(){
      if($(this).find('ul li').length === 0){
        $(this).find(".arrow").remove()
      }
    })
    $("footer .top_footer .foot_menu_list .foot_menu h6 .arrow").on("click", function () {
      $(this).parents('.foot_menu').siblings().find('ul').slideUp();
      $(this).parent().next('ul').slideToggle();
      if($(this).parent().next('ul').length < 0){
        $(this).parents('.foot_menu ').siblings().find('h6 .arrow').hide()
      }
    });
  }


  // Resize Blog Slider in viewport
  resizeContainer();


  // VIdeo Js
  var vids = $("header .video_wrap video, .ip_video .video_section video"); 
  $.each(vids, function(){
        this.controls = false; 
  });
  $("header .video_wrap video, .ip_video .video_section video").click(function() {
    var currentVideo = $(this)[0]
    if (currentVideo.paused) {
      
      currentVideo.play();
      $(this).next(".play-btn").addClass('active')
    } else {
      currentVideo.pause();
      
      $(this).next(".play-btn").removeClass('active')
    }
  });


  // On Submit show toast
  $(document).on('click',".notify_from .submit", function(e){
    $("#toast").addClass('show')
    setTimeout(function(){ $("#toast").removeClass('show') }, 5000);
  })
  $(".cs_banner").length > 0 ? $(".cs_banner .banner").removeClass("banner_bg") : "";


});


// Scrolling Event Js
$(window).scroll(function() {
  setTimeout(function(){
    $('.software .software-section').each(function(i) {
      var scrollDistance = $(window).scrollTop() - ($('#ivestor_portal'+i).outerHeight() - 50);
      console.log("===========================================");
      console.log("#ivestor_portal"+i+ "<<>>" +$('#ivestor_portal'+i).outerHeight())
      console.log("===========================================");
      if ($(this).position().top <= scrollDistance) {
            $('.software-sticky_nav .tags li.active').removeClass('active');
            $('.software-sticky_nav .tags li').eq(i).addClass('active');
            if(window.innerWidth < 768 && $(".software-section").length > 0){
              var $element = $('.software-sticky_nav .tags li.active')
              $element.removeClass('active');
              $element.addClass('active');
              var elOffset = $element.offset().left;
              var elWidth = $element.outerWidth(true);
              var menuScrollLeft = $(".software-sticky_nav .tags").scrollLeft();
              var menuWidth = $(".software-sticky_nav .tags").width();
              var myScrollPos = elOffset + (elWidth / 2) + menuScrollLeft - (menuWidth / 2 ) - 50  ;
              $(".software-sticky_nav .tags").scrollLeft(myScrollPos);
            }
        }
    });
  },500)
}).scroll();



// slider js


// slider js
if ($(".jsCompSlider").length > 0) {
  var swiper = new Swiper(".jsCompSlider--slider", {
    slidesPerView: 2.8,
    spaceBetween: 0,
    loop: true,
    centeredSlides:true,
    allowTouchMove: false,
    navigation: {
      nextEl: ".jsCompSlider .swiper-next",
      prevEl: ".jsCompSlider .swiper-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 2.1,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      1198: {
        slidesPerView: 3,
        spaceBetween: 0,
      }
    },
  });
}
if (window.matchMedia('(max-width: 767px)').matches){
  var swiper = new Swiper(".certificate-slider", {
    slidesPerView: 2.5,
    spaceBetween: 30,
    centeredSlides:true,
    loop:true,
    initialSlide: 1,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  });
}

if ($(".blog_slider").length > 0 && $(".blog_slider .swiper-slide").length >= 3) {
  var swiper = new Swiper(".blog_slider", {
    // slidesPerView: 2.5,
    spaceBetween: 48,
    loop: true,
    navigation: {
      nextEl: ".blog_nav_wrapper .swiper-next",
      prevEl: ".blog_nav_wrapper .swiper-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1.1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 1.5,
        spaceBetween: 30,
      },
      992: {
        slidesPerView: 2.5,
        spaceBetween: 32,
        loop: true,
},
      3840: {
        slidesPerView: 2.5,
      }
    },
  });
}
// slider js
if ($(".product_slider").length > 0) {
  var swiper = new Swiper(".product_slider", {
    slidesPerView: 3.3,
    spaceBetween: 24,
    loop: true,
	  allowTouchMove: false,
    navigation: {
      nextEl: ".product_slider_wrap .swiper-next",
      prevEl: ".product_slider_wrap .swiper-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1.3,
        spaceBetween: 30,
		   allowTouchMove: true,
      },
      768: {
        slidesPerView: 2.2,
        spaceBetween: 15,
		  allowTouchMove: true,
      },
      992: {
        slidesPerView: 3.3,
        spaceBetween: 24,
      }
    },
  });
}

var swiper = new Swiper(".authorSlider", {
  slidesPerView: 4,
  spaceBetween: 20,
  allowTouchMove: false,
  navigation: {
    nextEl:  ".authorList .swiper-button-next",
    prevEl:  ".authorList .swiper-button-prev",
  },
  breakpoints: {
    300:{
      slidesPerView: 1.3,
      allowTouchMove:true,
    },
    768:{
      slidesPerView: 3,
      allowTouchMove:false,
    },
    1200: {
      slidesPerView: 4,
      allowTouchMove: false,
    }
  }
});


// G2 Testimonial
var swiper = new Swiper(".g2_testimonial .testimonalSlider", {
    slidesPerView: 1,
    navigation: {
      nextEl:  ".g2_testimonial .swiper-button-next",
      prevEl:  ".g2_testimonial .swiper-button-prev",
    } 
    
})

// client_testimonial_slider
if ($(".client_testimonial_slider").length > 0) {
  var swiper = new Swiper(".client_testimonial_slider", {
    slidesPerView: 1.2,
    spaceBetween: 24,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: ".client_testimonial_nav_wrapper .swiper-next",
      prevEl: ".client_testimonial_nav_wrapper .swiper-prev",
    },
    breakpoints: {
      320: {
        slidesPerView: 1.5,
        spaceBetween: 40,
      },
      480: {
        slidesPerView: 1.7,
        spaceBetween: 20,
      },
      531: {
        slidesPerView: 1.8,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2.1,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
      }
    },
  });
}

if($('.service_box_swiper').length > 0)
{
  var init = false;
  function swiperCard() {
    if (window.innerWidth <= 768) {
      if (!init) {
        init = true;
        swiper = new Swiper(".service_box_swiper", {
          direction: "horizontal",
          slidesPerView: 1.5,
          spaceBetween: 24,
          loop:false,        
          pagination: {
            el: ".swiper_nav__services .swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            320: {
              slidesPerView: 1,
              spaceBetween: 24,

            },
          }
        });
      }
    } else if (init) {
      swiper.destroy();
      init = false;
    }
  }
}

if($('.stand-with-isreal-banner .service_box_swiper').length > 0)
{
  var init1 = false;
  function swiperCardSI() {
    
    if (window.innerWidth <= 768) {
      if (!init1) {
        let items = $('.stand-with-isreal-banner').length > 0 ? 2.5 : 1
        init1 = true;
        swiper = new Swiper(".stand-with-isreal-banner .service_box_swiper", {         
          freeModeMomentum: false,
          loop: true,
          speed: 4000,
          autoplay: {
            delay: -1,
          },  
          allowTouchMove: false,
          disableOnInteraction: false,      
          breakpoints: {
            320: {
              slidesPerView: items,
              spaceBetween: 24,

            },
          }
        });
      }
    } else if (init1) {
      swiper.destroy();
      init1 = false;
    }
  } 
}







$(".service_box_swiper").length ?  swiperCard() : "";
window.addEventListener("resize", swiperCard);
$('.stand-with-isreal-banner .service_box_swiper').length ?  swiperCardSI() : "";
window.addEventListener("resize", swiperCardSI);


// Resize Container Js
function resizeContainer() {
  var _container = $('.blog_slider_sec .blog_slider_wrap.container').width();
  var _window = $(window).width();
  var margin = _window - _container;
  var _devide = margin / 2;
  var plus = _container + _devide;
  $('.blog_slider_sec .blog_slider_wrap.container').css({
          "max-width": plus + 7.5 +"px",
          "margin-right": "0",
      }
  )
};


// Banner SocialIcons
$(".banner .social_icons .lg-icon").on("click", function () {
  $(".banner .social_icons li").prevAll().toggleClass("active");
});
let total_sm = $(".banner .social_icons li").length;
$(".banner .social_icons li").each(function (i) {
  jQuery(this).css("transition-delay", total_sm * 0.02 + "s");
  total_sm--;
});


// Hide Misc tag in dropdown menu
$("#mega-menu-wrap-header_menu #mega-menu-header_menu p a").text() === ""
  ? $("#mega-menu-wrap-header_menu #mega-menu-header_menu p a").hide()
  : $("#mega-menu-wrap-header_menu #mega-menu-header_menu p a").show();

// Company Slider 

$('.multiTestimonial_slide').length < 3 ? $('.multiTestimonial_slider .swiper-wrapper').addClass('center-slide') :  ""
if($('.multiTestimonial_slide').length > 3 || (window.innerWidth < 768 && $('.multiTestimonial_slide').length > 1)){
  $('.multiTestimonial .multiTestimonial_slide').removeClass('default-slide');
  var items = $('.stand-with-isreal-banner').length > 0 ?  1.7 : 1
  $('.testimonial').removeClass('no_slider');
  $(".multiTestimonial_slider") &&
    new Swiper(".multiTestimonial_slider", {
      slidesPerView: 3,
      spaceBetween: 24,
      loop: true,
      centeredSlides:true,
      breakpoints: {
        320: {
          slidesPerView: items,
          spaceBetween: 20,
        },
       
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
          centeredSlides:false,
        },
        1160: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      navigation: {
        nextEl: ".multiTestimonial_nav .swiper-next",
        prevEl: ".multiTestimonial_nav .swiper-prev",
      },
      pagination: {
        el: ".multiTestimonial_slider .swiper-pagination",
        clickable: true
      },
    });
    
} else {
  $('.multiTestimonial_nav').hide();
  $('.multiTestimonial .multiTestimonial_slide').addClass('default-slide');  
  $('.multiTestimonial').addClass('no_slider');
}


// testimonial_slider Slider 
$(".testimonial_slider") &&
  new Swiper(".testimonial_slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    effect: "fade",
    allowTouchMove:false,
    navigation: {
      nextEl: ".testimonial_nav .swiper-next",
      prevEl: ".testimonial_nav .swiper-prev",
    },
  });

// Contact Page Form Js
$(".contact-me-form .btn").on('submit',function () {
  if(!$('.contact-me-form form').hasClass("invalid")){
    $(".thankyou-popup").removeClass("active");
  } else {
    $(".thankyou-popup").addClass("active");
  }
});

// Thank You Page
$(".thankyou-popup .close_icon,.thankyou-popup .btn").click(function () {
  setTimeout(function(){
    $(".thankyou-popup").removeClass("active");
  },1500)
});


// on load animation
$(window).on("load", function () {
  setTimeout(function () {
    $('.popup .popup_wrap form select').addClass('makeMeList');
  }, 800);
  // $(".partnershipSuit").length > 0 ? $('header').removeClass('white_header') : ""
  $('.software-sticky_nav .tags li:first-child').addClass('active');
  $(".winning-block .content").each(function(){
    setTimeout(function(){
      $(".winning-block .content").css("height","0")
    },0)
  $(".banner .head_txt").addClass("animated")
  
  })  


  $(".winning-block .content").each(function(){
      let max = $(this).parent().outerHeight() 
      let totalBlocks = $(".winning-block .content").length / 3
      let bottomSpace = parseInt($(this).parent().css('margin-bottom')) * 2
      let bottomMarginSpace = parseInt($(this).parents('.winning').css('padding-bottom')) 
      // let totalHeight = max * totalBlocks - 60
      $('.winning-wrap').css('min-height',(max * totalBlocks + bottomSpace + bottomMarginSpace))
  })
  
  // 
});


// sidebar sticky js
$('.agora_blocks .tabbing-menu').length > 0 ? stickyNav() : ""
// sidebar sticky js end


// accordion
$('.pricing_wrap .collapse .accordion').click(function(){
  if($(this).hasClass('active'))
  {
      $(this).removeClass('active');
      $(this).next('.panel').slideUp(500);
  }
  else{
      $('.accordion').removeClass('active');
      $('.panel').slideUp(500);
      $(this).addClass('active');
      $(this).next('.panel').slideDown(500);
  }
  $('.page_wrapper .sticky_wrap').length > 0 ? sticky_ebook() : "" 
  $('.software').length > 0 ? sticky_software() : ""  
    if(window.innerWidth > 767){
      $('.pricing_wrap').length > 0 ? sticky_right() : "" 
    }
});
$('.software').length > 0 ? sticky_software() : ""  
  if(window.innerWidth > 767){
    $('.pricing_wrap').length > 0 ? sticky_right() : "" 
  }
$('.page_wrapper .sticky_wrap').length > 0 ? sticky_ebook() : "" 
function sticky_right(){
  setTimeout(function(){
      var stickySidebar = new StickySidebar('.pricing_wrap .right_pricing_wrap', {
        topSpacing: 180,
        bottomSpacing: 70,
        containerSelector: '.pricing_wrap .wrap_pricing',
        innerWrapperSelector: '#sidebar_price'
      });
  },600)
} 
function sticky_software(){
  var stickySidebar = new StickySidebar('.software-sticky_nav ', {
    topSpacing: 80,
    bottomSpacing: 360,
    containerSelector: '#ivestor_portal0',
    innerWrapperSelector: '.software-sticky_nav .tags'
  });
} 
function sticky_ebook(){
  let currentRes = window.innerWidth > 767 ? 230 : 150
  var stickySidebar = new StickySidebar('.page_wrapper .sticky_wrap', {
    topSpacing: currentRes,
    bottomSpacing: 0,
    containerSelector: '.page_wrapper ',
    innerWrapperSelector: '.page_wrapper .sticky_wrap'
  });
} 
if (window.matchMedia('(min-width: 768px)').matches){
}
function next_slide(){
  var current_block;
  var next_block;
  current_block = jQuery('.certificate-wrap').find('.certificate-logo.active');
  if(current_block.next('.certificate-wrap .certificate-logo').length>0){
      current_block.removeClass('active').next('.certificate-logo').addClass('active')
      next_block = current_block.next('.certificate-logo');
  }
  else{
      current_block.removeClass('active').parent('.certificate-wrap').find('.certificate-logo:first-child').addClass('active');
      next_block = current_block.parent('.certificate-wrap').find('.certificate-logo:first-child');
  }
}
setInterval(next_slide,3000);
$(function () {

  // Basic Select to UL Li
  $('#chapters').each(function (index, element) {
      $(this).parent()
          .after()
          .append("<div class='scrollableList'><div class='selectedOption'></div><ul></ul></div>");
      var elcnt = 1;
      var eltxt = 'Chapter';
      $(element).each(function (idx, elm) {
          $('option', elm).each(function (id, el) {
              $('.scrollableList ul:last').append('<li>' + el.text + '</li>');
              if(elcnt == 1){
                eltxt = el.text;
              }
              elcnt++;
          });
          $('.scrollableList ul').hide();
          $('.makeMeUl').children('div.selectedOption').text(eltxt);
          
        });
      $('.scrollableList:last').children('div.selectedOption').text(eltxt);
  });



  


  // HubSpot Generate UL LI
  $(document).on('click','.hubspotbtn',function(e){
    e.preventDefault();
    e.stopPropagation();
    $('.popup .popup_wrap .scrollableList').remove(); 
    setTimeout(function(){
      $('.popup .popup_wrap select').each(function (index, element) {
          $(this).parent().after().append("<div class='scrollableList'><div class='selectedOption'></div><ul></ul></div>");  
          $(element).each(function (idx, elm) {
              $('option', elm).each(function (id, el) {
                  $('.popup .scrollableList ul:last').append('<li>' + el.text + '</li>');
              });
              $('.popup .scrollableList ul').hide();
              $('.makeMeUl').children('div.selectedOption').text("Please Select");
          });
          $('.popup .scrollableList:last').children('div.selectedOption').text("Please Select");    
      });
      $('.popup .selectedOption').on('click',function () {
        $(".down_arrow").toggleClass("active")
        $(this).toggleClass("active")
        $(this).next('ul').slideToggle(200);
        $('.popup .selectedOption').not(this).next('ul').hide();
      });
      $('.popup .scrollableList ul li').on('click',function () {
          var selectedLI = $(this).text();
          $(this).parent().prev('.selectedOption').text(selectedLI);
          $(this).parent('ul').hide();
      });
      $('.popup .scrollableList').show();
      $('.makeMeList').hide();
    },100);
  });

  $('.selectedOption').on('click', function () {
      $(".down_arrow").toggleClass("active")
      $(this).toggleClass("active")
      $(this).next('ul').slideToggle(200);
      $('.selectedOption').not(this).next('ul').hide();
  });
  
  $(document).on('click',".explore .select_wrap .scrollableList ul li,.popup_wrap .scrollableList ul li", function (e) {
      $(".selectedOption").removeClass("active")
      var selectedLI = $(this).text();
      $(this).parent().prev('.selectedOption').text(selectedLI);
      $(this).parent('ul').hide();
      $('select#chapters option,.popup .popup_wrap select option').each(function() {
        $("select#chapters").length > 0 ? $("select#chapters option:contains("+ selectedLI +")").prop('selected', true) : "";
        $(".popup .popup_wrap select").length > 0 ? $(".popup .popup_wrap select option:contains("+ selectedLI +")").prop('selected', true) : "";
        
      })
      $("select#chapters,.popup .popup_wrap select").trigger('change');
  });

  // on change select popup
  $(document).on('click','.popup .scrollableList ul li',function(e){
    e.preventDefault();
    e.stopPropagation();
    setTimeout(function(){
      $('.popup .scrollableList').remove();
      $('.popup .popup_wrap select').each(function (index, element) {
          $(this).parent().after().append("<div class='scrollableList'><div class='selectedOption'></div><ul></ul></div>");  
          $(element).each(function (idx, elm) {
              $('option', elm).each(function (id, el) {
                  $('.popup .scrollableList ul:last').append('<li>' + el.text + '</li>');
              });
              $('.popup .scrollableList ul').hide();
              // $('.makeMeUl').children('div.selectedOption').text("Please Select");
          });
          $('.popup .scrollableList:last').children('div.selectedOption').text($(element).find(":selected").text());    
      });
      $('.popup .selectedOption').on('click', function () {
        $(".popup .down_arrow").toggleClass("active")
        $(this).toggleClass("active")
        $(this).next('ul').slideToggle(200);
        $('.popup .selectedOption').not(this).next('ul').hide();
      });
      $('.popup .scrollableList ul li').on('click', function () {
          var selectedLI = $(this).text();
          $(this).parent().prev('.selectedOption').text(selectedLI);
          $(this).parent('ul').hide();
      });
      $('.popup .scrollableList').show();
      $('.popup .makeMeList').hide();
    },100);
  })
  
  
  $('.scrollableList').show();
  $('.makeMeList').hide();
});


$(".archive").length > 0 ? $(".bg_gray > .pos_rel:first-child").addClass("bottom_space")  : "" ;








faq_sticky();
function faq_sticky(){
  if (window.matchMedia('(min-width: 767px)').matches){
    if($('.faqs').length > 0)
    {
      var sidebar = document.querySelector('.faqs_head');
      var content = document.querySelector('.faqs_list_block');
  
      var floatSidebar = FloatSidebar({
        sidebar: sidebar,
        relative: content,
        topSpacing: 140,
        bottomSpacing: 0
      });
      
    }

  }

}

// Sticky Nav on Investor page
function stickyNav() {
  var stickySidebar = new StickySidebar('.agora_blocks .tabbing-menu', {
    topSpacing: window.innerWidth > 767 ? 91 : 80,
    bottomSpacing: 0,
    containerSelector: '.agora_blocks .tabbing-content',
    innerWrapperSelector: '.agora_blocks .tabbing-content',
    resizeSensor: true,
    stickyClass: 'is-affixed',
  });
}
// Header Sticky


$(document).on('click','#live_chat',function(e){
  e.preventDefault();
  e.stopPropagation();
  window.HubSpotConversations.widget.open();    
})

// match height js
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,n=function(t){return parseFloat(t)||0},a=function(e){var o=1,a=t(e),i=null,r=[];return a.each(function(){var e=t(this),a=e.offset().top-n(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(i-a))<=o?r[r.length-1]=s.add(e):r.push(e),i=a}),r},i=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=i(e);if(o.remove){var n=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(n)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="0.7.2",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=a,r._parse=n,r._parseOptions=i,r._apply=function(e,o){var s=i(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),u=h.parents().filter(":hidden");return u.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),u.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=a(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var a=t(o),i=0;if(s.target)i=s.target.outerHeight(!1);else{if(s.byRow&&a.length<=1)return void a.css(s.property,"");a.each(function(){var e=t(this),o=e.attr("style"),n=e.css("display");"inline-block"!==n&&"flex"!==n&&"inline-flex"!==n&&(n="block");var a={
display:n};a[s.property]="",e.css(a),e.outerHeight(!1)>i&&(i=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}a.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=n(e.css("border-top-width"))+n(e.css("border-bottom-width")),o+=n(e.css("padding-top"))+n(e.css("padding-bottom"))),e.css(s.property,i-o+"px"))})}),u.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),n=o.attr("data-mh")||o.attr("data-match-height");n in e?e[n]=e[n].add(o):e[n]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(n,a){if(a&&"resize"===a.type){var i=t(window).width();if(i===e)return;e=i;
}n?o===-1&&(o=setTimeout(function(){s(a),o=-1},r._throttle)):s(a)},t(r._applyDataApi);var h=t.fn.on?"on":"bind";t(window)[h]("load",function(t){r._update(!1,t)}),t(window)[h]("resize orientationchange",function(t){r._update(!0,t)})});

$(document).ready(function(){

  $('.contact_card .single-contact-box p').matchHeight();
  $('.contact_card .single-contact-box h2').matchHeight();  
  $(".multiTestimonial_content p").matchHeight();  
  $(".multiTestimonial_content span").matchHeight();  
  $(".multiTestimonial .bottomInfo").matchHeight();  
  
  $(".home_banner").length > 0 ? $(".company_wrap span.animatable").removeAttr("data-delay") : ""

  if($(".banner .head_txt").children().length <= 4){
    $(".company_wrap span.animatable").attr("data-delay","1000")
  }

  $(document).on('click','.compitetion-v1-content__btnWrap .btn',function(e){
    e.preventDefault();
    $('.popup .popup_wrap .popup_header .backBTN').hide();
  })
  $(document).on('click','.popup-initial .popup_wrap .popup_body-btnWrap a',function(e){
    e.preventDefault();
    $('.popup .popup_wrap .popup_header .backBTN').show();
  })
  

  $(".tags li").length < 1 ? $(".tags").remove() : ""


  // Load FAQ on Click
  $(".faqs_list_block .faqs_list li").slice(0, 3).show();
  $(".topic_faq_section .view_more .btn").on("click", function(e){
    e.preventDefault();
    $(".faqs_list_block .faqs_list li:hidden").slice(0, 3).slideDown();
    if($(".faqs_list_block .faqs_list li:hidden").length == 0) {
      $(".topic_faq_section .view_more .btn").hide();
    }
  });

  // Career Page JS starts
  $(".page-id-3743").length > 0  ? $('.comeet-outer-wrapper .comeet-position-info').addClass('g-page') :  ""
  $('.comeet-outer-wrapper .comeet-position-info').children().wrapAll("<div class='content'></div>");
  $(".all-jobs-link").length > 0 ? $("header").addClass('white_header') : ""
  $(".comeet-apply").length > 0 ? $(".role_section").addClass('jobDetail') : ""
  if($(".all-jobs-link").length > 0){
    $("header").addClass('white_header')
    $(".role_section").addClass('innerRoleSection')
    
    $('.role_section.innerRoleSection .comeet-outer-wrapper h2').replaceWith(function() {
      return $("<h1>", {
        class: this.className,
        html: $(this).html()
      });
    });
    
    let newString = $(".all-jobs-link a").text().replace(/^← +/, "");
    $(".all-jobs-link a").text("Back to all positions")
    
    $(".role_section.innerRoleSection .comeet-outer-wrapper h2,.role_section.innerRoleSection .comeet-outer-wrapper h1").wrapAll("<div class='with-line animatable animated'></div>")
    $(".role_section.innerRoleSection .comeet-outer-wrapper h2,.role_section.innerRoleSection .comeet-outer-wrapper h1").addClass('animate h_tag')
    setTimeout(function(){
      $(".comeet-outer-wrapper .comeet-groups-list .comeet-list .comeet-positions-list").addClass('animatable fade').attr('data-delay',"600") 
    },300)

  }
  $('.role_section.jobDetail .comeet-outer-wrapper p').each(function(){
    if(!$(this).text() || !$(this).text().trim())
      $(this).remove();
   })
  // Career Page JS ends
});


// Accessibility js
document.addEventListener('keydown', (e) => {
  if (e.keyCode === 9) {
      const elem = document.querySelector("body");
      elem.classList.add("accessibility_mode");
  }
});

jQuery('h1,h2,h3,h4,h5,h6,p,.lottie-player,.testimonial_profileName span, .safegaurd .content .img_wrap img, .safegaurd .gaurdblocks .gaurdblock_img img, .setisfection span, .setisfection .certificate-wrap .certificate-logo img, .faqs_head span, .banking-partners li img,.banking-partners li img,.portal_block.keeping_service .newsletter_from > p,.banner .head_txt > span,.additinal_service .service_wrapper .service_box label,.faqs_list').each(function () {
  $(this).attr("tabindex", "0");
});

jQuery('header .header_wrap nav .menu li .sub-menu li.nav_col .nav_item a h5, .ratings li .content .rating, .ratings li .content label, .newsletter_from > p, .desktop_menu_text p, .product_block h6,.faqs_list_block .faqs_list h6').removeAttr('tabindex');
jQuery('.portal_block.keeping_service .newsletter_from > p').each(function(){
  $(this).attr("tabindex", "0");
})

jQuery( function ( $ ) {
  
  $('.menu-item-has-children').attr('tabindex', -1);
  element_ul = $('ul[data-roletype="listbox"]');
  element_ul.on( 'focus.aria mouseenter.aria', '[aria-haspopup="true"]', function ( ev ) {
     $( ev.currentTarget ).addClass('show');
  } );
  element_ul.on( 'blur.aria mouseleave.aria', '[aria-haspopup="true"]', function ( ev ) {
     $( ev.currentTarget ).removeClass('show');
  } );
});

jQuery(document).on("focus", ".accessibility_mode .faqs_list_block .faqs_list h6 a", function () {
  jQuery(this).parents('li').siblings().removeClass('active');
  jQuery(this).parents('li').siblings().find('.answer').slideUp();
  jQuery(this).parents('li').addClass('active');
  jQuery(this).parent().next().slideDown();
})


// Company Slider 
  $(".companyMarquee") &&
    new Swiper(".companyMarquee", {
      slidesPerView: "auto",
      speed: 8000,
      freeModeMomentum: false,
      autoplay: {
        delay: -1,
      },
      loop: true,
      allowTouchMove: false,
      disableOnInteraction: false,
      breakpoints: {
        320: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 100,
        },
        991: {
          slidesPerView: 5,
          spaceBetween: 100,
        },
        1440: {
          slidesPerView: 5,
          spaceBetween: 120,
        },
        1600: {
          slidesPerView: 6,
          spaceBetween: 160,
        },
      },
    });


  if (window.innerWidth > 767 && $(".coffee_section .stickyForm").length > 0) {
    var sidebar = new StickySidebar(".coffee_section .stickyForm", {
      containerSelector: ".coffee_section .innerWrap",
      innerWrapperSelector: ".stickyForm",
      topSpacing: window.innerWidth > 1366 ? 250 : 106,
      bottomSpacing: 50,
    });
  }


// Timeline Animation
function Timeline(selector, config) {
  this.el = $(selector);
  
  // options do not effect CSS, has to be set seperately
  const defaults = {
    track: {
      endAtLast: false
    },
    viewPointBottom: false,
    viewPoint: 400
  }
  this.options = $.extend({}, defaults, config || {})
  
  $(document).ready(() => {
    this.init()
  })
  
  this.init = function() {
    this.el.addClass('is-loading')
    this.el.addClass('is-init')
    this.el.each(function() {this.offsetHeight})
    this.el.removeClass('is-loading')
    this.animation()
    this.trackHeight()
    
    let self = this
    $(document).scroll(function() {
      self.animation()
    })
    $(document).resize(function() {
      self.trackHeight()
    })
  }
  
  this.animation = function() {
    let self = this
    
    let scrollTop = $(document).scrollTop()
    let viewPoint = scrollTop + this.options.viewPoint
    if (this.options.viewPointBottom) {
      viewPoint = scrollTop + window.innerHeight - this.options.viewPoint
    }

    this.updateTrack(viewPoint)

    $('.timeline__item', this.el).each(function(i, v) {
      let top = $(this).offset().top
      let bottom = $(this).offset().top + $(this).outerHeight(true)

      if (viewPoint < top) {
        self.updateClasses(this, 'is-below')

      } else if (viewPoint > bottom) {
        self.updateClasses(this, 'is-above is-visible')
      } else {
        self.updateClasses(this, 'is-current is-visible')
      }
    })
    
    if ($('.timeline__footer').length) {
      let footer = '.timeline__footer'
      let top = $(footer).offset().top

      if (viewPoint < top) {
        self.updateClasses(footer, '')
      } else {
        self.updateClasses(footer, 'is-visible')
      }
    }
  }
  
  this.updateClasses = function(el, newClass) {
    $(el).removeClass('is-above is-current is-below is-visible')
    $(el).addClass(newClass)
  }
  
  this.updateTrack = function(viewPoint) {
    $el = $('.timeline__track', '.timeline')
    let top = $el.offset().top
    let height = viewPoint - top
    $el.height(height)
  }
  
  this.trackHeight = function() {
    let trackMax =  this.el.outerHeight()
    if ($('.timeline__footer').length) {
      trackMax -= $('.timeline__footer').outerHeight()
    }
    if (this.options.track.endAtLast) {
      trackMax = trackMax - $('.timeline__item').last().outerHeight() + 9
    }
    $('.timeline__track', this.el).css('max-height', trackMax)
  }
}
$('.timeline').length > 0 ? new Timeline('.timeline') : "";