$(".slides").slick({
  autoplay: true,
  mobileFirst: true
});
$('.service-slider').slick({
  dots: false,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  mobileFirst: true,
  variableWidth: true,
  centerMode: true,
  prevArrow: $('.left1'),
  nextArrow: $('.right1'),
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        centerMode: false,
      }
    },
    {
      breakpoint: 500,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        centerMode: false,
      }
    }
  ]
});

$('.feedback-slider').slick({
  dots: true,
  speed: 1500,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  mobileFirst: true,
  variableWidth: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        mobileFirst: true,

      }
    },
  ]
});

$('.photo-slider').slick({
  dots: false,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  variableWidth: true,
  centerMode: true,
  mobileFirst: true,
  prevArrow: $('.left3'),
  nextArrow: $('.right3'),
  responsive: [
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
  ]
});


function resetSlick($slick_slider, settings) {
  $(window).on('resize', function () {
    if ($(window).width() < 320) {
      if ($slick_slider.hasClass('slick-initialized')) {
        $slick_slider.slick('unslick');
      }
      return
    }

    if (!$slick_slider.hasClass('slick-initialized')) {
      return $slick_slider.slick(settings);
    }
  });
}

$('.photos__button').click(function () {
  $('.photos-ss').hide();
  $('.photos__all').show();
})

$('.header__closse').click(function () {
  $('.header__burg-c').show();
  $('.header__burger').show();
  $('.dark').show();
  $('.header__closse').hide();
})

$('.header__close').click(function () {
  $('.header__burg-c').hide();
  $('.header__burger').hide();
  $('.dark').hide();
  $('.header__closse').show();
})