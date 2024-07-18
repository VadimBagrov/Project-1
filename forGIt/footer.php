<footer class="footer">
  <div class="container">
    <div class="footer__left ">
      <img class="footer__logo" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/logo.png" alt="logo">
      <p class="footer__logo-t">Надежные <span class="colortext" под ключ>дома под ключ</span></p>
      <a href="<?php the_field('url-phone');?>" class="footer__p"><?php the_field('phone');?></a>
      <p class="footer__city"><?php the_field('addres');?></p>

      <p class="footer__time"><?php the_field('time');?></p>
      <p class="footer__email"><?php the_field('email');?></p>
    </div>

    <div class="footer__right ">
      <div class="footer__mb">
        <img class="footer__logo-mb" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/logo.png" alt="logo">
        <p class="footer__logo-t-mb">Надежные <span class="colortext" под ключ>дома под ключ</span></p>
      </div>
      <div class="footer__links">
        <ul class="footer__ul">
          <li class="footer__li"><a href="#usl">Услуги</a></li>
          <li class="footer__li"><a href="#house-block">Наши проекты</a></li>
          <li class="footer__li"><a href="#preim">О нас</a></li>
          <li class="footer__li"><a href="#gallery">Галерея</a></li>
          <li class="footer__li"><a href="#contact">Контакты</a></li>
        </ul>
      </div>
      <div class="footer__d">
        <p class="footer__ip"><?php the_field('ip');?><br><?php the_field('inn');?><br><?php the_field('ogrn');?></p>

        <p class="footer__prava">2024, Все права защищены</p>

        <a class="footer__pol-a" href="politik.html">
          <p>Политика конфиденциальности и обработки персональных данных</p>
        </a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>