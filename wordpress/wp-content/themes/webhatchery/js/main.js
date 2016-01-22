var SWIPER, SWIPER_CHILD;//global variables
jQuery(document).ready(function ($) {
  //initialize swiper when document ready  
  SWIPER = new Swiper('.swiper-main', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
    spaceBetween: 50,
    nextButton: '.swiper-page-next',
    prevButton: '.swiper-page-prev',
    onSlideChangeStart: function (s) {
      $('nav .menu-item').removeClass('active');
      $('nav .menu-item').each(function (i, v) {
        var el = $('nav .menu-item').length;
        var new_index = s.activeIndex ? s.activeIndex : el;
        new_index = new_index > el ? 1 : new_index;
        if (i === new_index - 1) {
          $(this).addClass('active');
          return false;
        }
      });
    }
  });

  SWIPER_CHILD = new Swiper('.swiper-child', {
    // Optional parameters
    spaceBetween: 50,
    nextButton: '.swiper-child-next',
    prevButton: '.swiper-child-prev',
  });

  SWIPER_CHILD = new Swiper('.swiper-subchild', {
    // Optional parameters
    spaceBetween: 20,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-subchild-next',
    prevButton: '.swiper-subchild-prev',
  });

  $('nav .menu-item').each(function (i, page) {
    $(this).children('a').click(function () {
      SWIPER.slideTo(i + 1);
      return false;
    });
  });

});

var manipulator = {}