import Swiper from 'swiper'
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'
import 'swiper/css'

const swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  mousewheel: true,
  keyboard: true,
});
const button = document.querySelector('.catalog__more'); //ищем кнопку
const menu = document.querySelector('.catalog__bottom-bl'); //ищем в DOM элемент с классом навигации, которая скрыта за бургером
const cat = document.querySelector('.catalog');
// создаем функцию-хэндлер для смены класса

const onToggleMenuHandler = () => menu.classList.toggle('catalog__bottom-bl--active'); // тут добавляешь класс к меню, который будет открывать это меню

const height = () => cat.classList.toggle('catalog--active');

button.addEventListener('click', onToggleMenuHandler); //накидываем на кнопку обработчик событий по клику и передаем вторым аргументом нашу функцию.

button.addEventListener('click', height);

document.querySelector('.service__dvs').onclick = function () {
  document.querySelector('.service__general').classList.add('service__general--none');
  document.querySelector('.service__transmission').classList.add('service__transmission--none');
  document.querySelector('.service__obslug').classList.add('service__obslug--none');
  document.querySelector('.service__dvigatel').classList.remove('service__dvigatel--none');
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