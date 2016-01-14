
jQuery(document).ready(function ($) {
  //initialize swiper when document ready  
  SWIPER = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    onSlideChangeStart: function (s) {
      $('nav .menu-item').removeClass('active');
      $('nav .menu-item').each(function (i, v) {
        var el = $('nav .menu-item').length;
        var new_index = s.activeIndex ? s.activeIndex : el;
        new_index = new_index > el ? 1 : new_index;
        if (i === new_index - 1){
          $(this).addClass('active');
          return false;
        }
      });
    }
  });

  $('nav .menu-item').each(function (i, page) {
    $(this).children('a').click(function () {
      SWIPER.slideTo(i + 1);
      return false;
    });
  });

});

var manipulator = {}