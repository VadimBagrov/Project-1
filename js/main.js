
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

let second = document.querySelector('.second__an');
let services = document.querySelector('.services');
let feedback = document.querySelector('.feedback');
let photos = document.querySelector('.photos');
let contact = document.querySelector('.contact');

const observer = new IntersectionObserver(entries => {
  // перебор записей
  entries.forEach(entry => {
    // если элемент появился
    if (entry.isIntersecting) {
      // добавить ему CSS-класс
      entry.target.classList.add('animate__animated animate__fadeInUp');
    }
  });
});
observer.observe(document.querySelector('.second__an'));

observer.observe(document.querySelector('.services'));
observer.observe(document.querySelector('.feedback__an'));
observer.observe(document.querySelector('.photos'));
observer.observe(document.querySelector('.contact'));

(function () {
  var square = document.querySelector('.second__an');
  var square1 = document.querySelector('.services');
  var square2 = document.querySelector('.feedback__an');
  var square3 = document.querySelector('.photos');
  var square4 = document.querySelector('.contact');

  var observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (typeof getCurrentAnimationPreference === 'function' && !getCurrentAnimationPreference()) {
        return;
      }

      if (entry.isIntersecting) {
        entry.target.classList.add('square-animation');
      }
    });
  });

  observer.observe(square);
  observer.observe(square1);
  observer.observe(square2);
  observer.observe(square3);
  observer.observe(square4);
})();

let wow = new WOW(
  {
    boxClass: 'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset: 0,          // distance to the element when triggering the animation (default is 0)
    mobile: true,       // trigger animations on mobile devices (default is true)
    live: true,       // act on asynchronously loaded content (default is true)
    callback: function (box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null,    // optional scroll container selector, otherwise use window,
    resetAnimation: true,     // reset animation on end (default is true)
  }
);
wow.init();