$('.responsive').slick({
  infinite: true,
  speed: 1000,
  autoplay: true,
  autoplaySpeed: 1500,
  slidesToShow: 4,
  slidesToScroll: 1,
  variableWidth: true,
  prevArrow: $('.prev'),
  nextArrow: $('.next'),
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
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
const button = document.querySelector('.catalog__more'); //ищем кнопку
const menu = document.querySelector('.catalog__bottom-bl'); //ищем в DOM элемент с классом навигации, которая скрыта за бургером
const cat = document.querySelector('.catalog');
// создаем функцию-хэндлер для смены класса

// const onToggleMenuHandler = () => menu.classList.toggle('catalog__bottom-bl--active'); // тут добавляешь класс к меню, который будет открывать это меню

const height = () => cat.classList.toggle('catalog--active');

// button.addEventListener('click', onToggleMenuHandler); //накидываем на кнопку обработчик событий по клику и передаем вторым аргументом нашу функцию.

document.querySelector('.catalog__more').onclick = function () {
  document.querySelector('.catalog__bottom-bl').classList.toggle('catalog__bottom-bl--active');
  document.querySelector('.catalog__more').classList.add('catalog__more--none');
  document.querySelector('.catalog__mob').classList.add('catalog__bottom-bl--active');
}

document.querySelector('.seo__bolee').onclick = function () {
  document.querySelector('.seo__text ').classList.add('seo__text--active');
  document.querySelector('.seo__bolee').classList.add('seo__bolee--none');
}

button.addEventListener('click', height);

document.querySelector('.service__dvs').onclick = function () {
  document.querySelector('.service__general').classList.add('service__general--none');
  document.querySelector('.service__transmission').classList.add('service__transmission--none');
  document.querySelector('.service__obslug').classList.add('service__obslug--none');
  document.querySelector('.service__dvigatel').classList.remove('service__dvigatel--none');
}

document.querySelector('.header-mb__menu-btn').onclick = function () {
  document.querySelector('.header__pop').classList.toggle('header__pop--none');
}

document.querySelector('.service__tran').onclick = function () {
  document.querySelector('.service__general').classList.add('service__general--none');
  document.querySelector('.service__dvigatel').classList.add('service__dvigatel--none');
  document.querySelector('.service__obslug').classList.add('service__obslug--none');
  document.querySelector('.service__transmission').classList.remove('service__transmission--none');
}

document.querySelector('.service__obsl').onclick = function () {
  document.querySelector('.service__general').classList.add('service__general--none');
  document.querySelector('.service__dvigatel').classList.add('service__dvigatel--none');
  document.querySelector('.service__transmission').classList.add('service__transmission--none');
  document.querySelector('.service__obslug').classList.remove('service__obslug--none');
}