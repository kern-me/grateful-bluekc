$( document ).ready(function() {
  var screenWidth = $(window).width();
  hero();
  signSlider();
  articleSlider();

  if(screenWidth > 480) {
    $('.article-slide-wrapper').matchHeight();
  }

  function hero() {
    var swiper = new Swiper('.js-hero-bg-swiper', {
      loop: true,
      effect: 'fade',
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });
  }

  function signSlider() {
    var galleryThumbs = new Swiper('.js-sign-thumb-slider', {
      spaceBetween: 20,
      slidesPerView: 2,
      //loop: true,
      freeMode: true,
      //loopedSlides: 4, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      navigation: {
        nextEl: '.js-sign-thumb-slider-next',
        prevEl: '.js-sign-thumb-slider-prev',
      },
      breakpoints: {
        // when window width is >= 320px
        990: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        // // when window width is >= 480px
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 30
        // },
        // // when window width is >= 640px
        // 640: {
        //   slidesPerView: 4,
        //   spaceBetween: 40
        // }
      }
    });
    var galleryTop = new Swiper('.js-sign-slider-top', {
      //loop:true,
      slidesPerView: 1,
      centeredSlides: true,
      //loopedSlides: 4, //looped slides should be the same
      thumbs: {
        swiper: galleryThumbs,
      },
      pagination: {
        el: '.js-sign-slider-pagination',
        clickable: true,
      },
    });
  }

  function articleSlider() {
    if($('.article-slide').length > 3) {
      var articleSwiper = new Swiper('.js-articles-slider', {
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
          nextEl: '.js-articles-slider-next',
          prevEl: '.js-articles-slider-prev',
        },
        breakpoints: {
        480: {
          slidesPerView: 2,
          spaceBetween: 50
        },
        // when window width is >= 320px
        1300: {
          slidesPerView: 3,
          spaceBetween: 50
        },
        // // when window width is >= 480px
        // 480: {
        //   slidesPerView: 3,
        //   spaceBetween: 30
        // },
        // // when window width is >= 640px
        // 640: {
        //   slidesPerView: 4,
        //   spaceBetween: 40
        // }
      }
      });
      $('.js-articles-slider-arrow').css('opacity', '1');
    } else {
      var articleSmall = undefined;
      $('.articles-slider').addClass('articles-slider--disabled')
      $('.articles-slider').find('.article-slide').removeClass('swiper-slide'); 
      function initSwiper() {
          var screenWidth = $(window).width();
          if(screenWidth < 992 && articleSmall == undefined) {  
            $('.articles-slider').removeClass('articles-slider--disabled')
            $('.articles-slider').find('.article-slide').addClass('swiper-slide'); 
              $('.js-articles-slider-arrow').css('opacity', '1');          
              articleSmall = new Swiper('.js-articles-slider', {            
                  slidesPerView: 1,
                  spaceBetween: 0,
                  navigation: {
                    nextEl: '.js-articles-slider-next',
                    prevEl: '.js-articles-slider-prev',
                  },
                  breakpoints: {
                  480: {
                    slidesPerView: 2,
                    spaceBetween: 50
                  },
                  // // when window width is >= 480px
                  // 480: {
                  //   slidesPerView: 3,
                  //   spaceBetween: 30
                  // },
                  // // when window width is >= 640px
                  // 640: {
                  //   slidesPerView: 4,
                  //   spaceBetween: 40
                  // }
                }
              });
          } else if (screenWidth > 991 && articleSmall != undefined) {
              articleSmall.destroy();
              articleSmall = undefined;
              $('.articles-slider').addClass('articles-slider--disabled')
              $('.articles-slider').find('.article-slide').removeClass('swiper-slide');          
          }        
      }

      //Swiper plugin initialization
      initSwiper();

      //Swiper plugin initialization on window resize
      $(window).on('resize', function(){
          initSwiper();        
      });
    }

  }

});