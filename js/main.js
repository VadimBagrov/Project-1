$(".slider").slick({
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 1100,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: true,
  prevArrow: $('.mit__prev'),
  nextArrow: $('.mit__next'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 654,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});


$(".review-sl").slick({
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 1100,
  slidesToShow: 3,
  slidesToScroll: 1,
  dots: true,
  prevArrow: $('.mit__prev'),
  nextArrow: $('.mit__next'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 654,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$(".slider2").slick({
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 1100,
  slidesToShow: 2,
  slidesToScroll: 1,
  dots: true,
  prevArrow: $('.mit__prev'),
  nextArrow: $('.mit__next'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 654,
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

$('#dark').hide();
$('.header__menu').hide();

$('#header__burger').click(function () {
  $('#dark').show();
  $('.header__menu').show();
});

$('.header__close').click(function () {
  $('#dark').hide();
  $('.header__menu').hide();
});
$('.header__li').click(function () {
  $('#dark').hide();
  $('.header__menu').hide();
});