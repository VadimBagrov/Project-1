<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zagorodstroy</title>

  <?php wp_head(); ?>

</head>

<body>
  <div class="dark" id="dark"></div>
  <header class="header container">
    <a class="header__logo-a" href="#">
      <img class="header__logo" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/Zagorodstroy-1.png" alt="logo">
    </a>
    <ul class="header__links">
      <li class="header__link">
        <a class="header__a" href="#usl">Услуги</a>
      </li>
      <li class="header__link">
        <a class="header__a" href="#house-block">Наши проекты</a>
      </li>
      <li class="header__link">
        <a class="header__a" href="#preim">О нас</a>
      </li>
      <li class="header__link">
        <a class="header__a" href="#gallery">Галерея</a>
      </li>
      <li class="header__link">
        <a class="header__a" href="#contact">Контакты</a>
      </li>
    </ul>
    <div class="header__dv">
      <a href="<?php the_field('url-phone');?>" class="header__phone"><?php the_field('phone');?></a>
      <div class="header__soc">
        <a class="header__soc-a" href="#">
          <img class="header__soc-link" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/whatsapp.svg" alt="whatsapp"></a>
        <a class="header__soc-a" href="#">
          <img class="header__soc-link" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/email.svg" alt="email"></a>
      </div>
      <div class="header__mobile">
        <a href="<?php the_field('url-phone');?>" class="header__phone-mb"><?php the_field('phone');?></a>
        <div class="header__m-btn"></div>
      </div>
    </div>
  </header>