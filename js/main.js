$('.usl-slider').slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  prevArrow: $('.prev10'),
  nextArrow: $('.next10'),
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.house-s-slider').slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev2'),
  nextArrow: $('.next2'),
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1
      }
    },
  ]
});

$('.house-e-slider').slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev3'),
  nextArrow: $('.next3'),
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1
      }
    },
  ]
});

$('.house-d-slider').slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev4'),
  nextArrow: $('.next4'),
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1
      }
    },
  ]
});

$('.house-k-slider').slick({
  dots: true,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.prev5'),
  nextArrow: $('.next5'),
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1
      }
    },
  ]
});

$('.variable-width').slick({
  dots: true,
  speed: 1500,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true,
  autoplay: true,
  autoplaySpeed: 1500
});

$('.otzyv-s').slick({
  dots: true,
  speed: 1500,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1
      }
    },
  ]
});

$('.house__close--active').click(function () {
  $('.house__slide1--active').hide();
});

$('.header__m-btn').click(function () {
  $('.dark').show();
  document.querySelector('.menu').classList.add('menu--active');
});

$('.menu__link').click(function () {
  document.querySelector('.menu').classList.remove('menu--active');
  $('.dark').hide();
});

$('.header__m-btnn').click(function () {
  document.querySelector('.menu').classList.remove('menu--active');
  $('.dark').hide();
});

$('.house__btn').click(function () {
  $('#house__active').show();
});

$('.1A1-71-b').click(function () {
  $('.1A1-71').show();
});

$('.1A2-81-b').click(function () {
  $('.1A2-81').show();
});

$('.1A3-88-b').click(function () {
  $('.1A3-88').show();
});

$('.1A3-88-b').click(function () {
  $('.1A3-88').show();
});


$('.1A3-95-b').click(function () {
  $('.1A3-95').show();
});


$('.1A4-107-b').click(function () {
  $('.1A4-107').show();
});


$('.1A5-125-b').click(function () {
  $('.1A5-125').show();
});


$('.1A5-126-b').click(function () {
  $('.1A5-126').show();
});

$('.1B1-83-b').click(function () {
  $('.1B1-83').show();
});


$('.1B2-91-b').click(function () {
  $('.1B2-91').show();
});


$('.1B3-101-b').click(function () {
  $('.1B3-101').show();
});


$('.1B4-105-b').click(function () {
  $('.1B4-105').show();
});


$('.1B5-112-b').click(function () {
  $('.1B5-112').show();
});


$('.1B6-120-b').click(function () {
  $('.1B6-120').show();
});


$('.1B7-125-b').click(function () {
  $('.1B7-125').show();
});


$('.1B8-128-b').click(function () {
  $('.1B8-128').show();
});


$('.1П1-103-b').click(function () {
  $('.1П1-103').show();
});


$('.1П2-113-b').click(function () {
  $('.1П2-113').show();
});

$('.2A1-116-b').click(function () {
  $('.2A1-116').show();
});

$('.2A2-121-b').click(function () {
  $('.2A2-121').show();
});


$('.2B1-122-b').click(function () {
  $('.2B1-122').show();
});


$('.2B2-137-b').click(function () {
  $('.2B2-137').show();
});


$('.2B3-134-b').click(function () {
  $('.2B3-134').show();
});


$('.2B3-146-b').click(function () {
  $('.2B3-146').show();
});


$('.2B4-160-b').click(function () {
  $('.2B4-160').show();
});


$('.2B6-142-b').click(function () {
  $('.2B6-142').show();
});


$('.2П1-124-b').click(function () {
  $('.2П1-124').show();
});

$('.КД-1-5-b').click(function () {
  $('.КД-1-5').show();
});

$('.КД1-1-52-b').click(function () {
  $('.КД1-1-52').show();
});

$('.КД1А-79-b').click(function () {
  $('.КД1А-79').show();
});

$('.КД2-1А-72-b').click(function () {
  $('.КД2-1А-72').show();
});

$('.КД5-1А-85-b').click(function () {
  $('.КД5-1А-85').show();
});

$('.КД6-1А-100-b').click(function () {
  $('.КД6-1А-100').show();
});

$('.КД7-1А-89-b').click(function () {
  $('.КД7-1А-89').show();
});

$('.КД8-1А-98-b').click(function () {
  $('.КД8-1А-98').show();
});

$('.КД10-1А-115-b').click(function () {
  $('.КД10-1А-115').show();
});

$('.КД13-1А157-b').click(function () {
  $('.КД13-1А157').show();
});

$('.КД17-2-100-b').click(function () {
  $('.КД17-2-100').show();
});

$('.КД18-1-5А-136-b').click(function () {
  $('.КД18-1-5А-136').show();
});

$('.КД20-1-5А-133-b').click(function () {
  $('.КД20-1-5А-133').show();
});

$('.КД21-1-5А-127-b').click(function () {
  $('.КД21-1-5А-127').show();
});

$('.КД23-1-5А-134-b').click(function () {
  $('.КД23-1-5А-134').show();
});

$('.КД25-1-5-201-b').click(function () {
  $('.КД25-1-5-201').show();
});

$('.КД26-1-5А-100-b').click(function () {
  $('.КД26-1-5А-100').show();
});

$('.КД27-1-5А-107-b').click(function () {
  $('.КД27-1-5А-107').show();
});

$('.КД32-1-5А-131-b').click(function () {
  $('.КД32-1-5А-131').show();
});

$('.КД35-1-120-b').click(function () {
  $('.КД35-1-120').show();
});

$('.КД36-1-5-77-b').click(function () {
  $('.КД36-1-5-77').show();
});
