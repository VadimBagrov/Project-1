<?php
/*
Template Name: home

*/
?>

<?php get_header(); ?>

<main>
  <section class="main ">
    <div class="main__container container">
      <h1 class="main__title"><?php the_field('zagolovok');?></h1>
      <h5 class="main__text"><?php the_field('text-2');?></h5>
      <h5 class="main__text-b"><?php the_field('text-3');?></h5>
      <h5 class="main__text-c"><?php the_field('text-4');?></h5>
      <div class="main__btn">
        <a href="#kviz">
          <button class="main__kons">Рассчитать стоимость дома</button>
        </a>
        <a href="#house-block">
          <button class="main__posmot">Смотреть проекты</button>
        </a>
      </div>
    </div>
  </section>

  <section class="menu">
    <div class="header__m-btnn"></div>
    <div class="menu__div">
      <ul class="menu__ul">
        <li class="menu__li">
          <a class="menu__link" href="#usl">Услуги</a>
        </li>
        <li class="menu__li">
          <a class="menu__link" href="#house-block">Наши проекты</a>
        </li>
        <li class="menu__li">
          <a class="menu__link" href="#preim">О нас</a>
        </li>
        <li class="menu__li">
          <a class="menu__link" href="#gallery">Галерея</a>
        </li>
        <li class="menu__li">
          <a class="menu__link" href="#contact">Контакты</a>
        </li>
      </ul>
      <div class="menu__soc">
        <a class="menu__soc-l" href="#">
          <img class="menu__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/whatsapp.svg" alt="whatsapp">
        </a>
        <a class="menu__soc-l" href="#">
          <img class="menu__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/email.svg" alt="email">
        </a>
      </div>
      <p class="menu__number"><?php the_field('phone');?></p>
      <img class="menu__logo" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/logo-menu.png" alt="logo">
    </div>
  </section>

  <section class="usl" id="usl">
    <div class="usl__main ">
      <h3 class="usl__tit container">Наши услуги:</h3>
      <div class="usl__slides">
        <img class="usl__left prev10" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/left.png" alt="left">
        <div class="slider usl__pc usl-slider">

        <?php
        global $post;

        $myposts = get_posts([
          'numberposts' => -1,
          'category'    => 2 // ID категории(рубрики)
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>

            <!-- Вывод постов, функции цикла: the_title() и т.д. -->

            <div class="usl__div usl__1">

            <?php the_post_thumbnail(
              array(540, 325),
              array(
                'class' => "usl__img",
              )
            ) ?>
            <!-- <img class="usl__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/key.png" alt="key"> -->

            <div class="usl__fl">
              <h4 class="usl__title"><?php the_title(); ?></h4>
              <div class="usl__flex">
                <p class="usl__text"><?php the_content(); ?>
                </p>
              </div>
            </div>
          </div>

            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>

        </div>
        <img class="usl__right next10" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/right.png" alt="right">
      </div>
    </div>

    <div class="usl__com container">
      <img class="usl__com-img" src="<?php the_field('photo');?>" alt="man">
      <div class="usl__com-right">
        <h5 class="usl__com-title"><?php the_field('name');?></h5>
        <p class="usl__com-dol"><?php the_field('doljnost');?></p>
        <p class="usl__com-stroi"><?php the_field('top-text');?></p>
        <p class="usl__com-text"><?php the_field('bottom-text');?></p>
      </div>
    </div>
  </section>

  <section class="house" id="house-block">
    <div class="house__title container">
      <div class="house__col1">
        <h3 class="house__col">Большая коллекция домов</h3>
        <p class="house__p">Все наши проекты продуманы: планировка, решения, эргономика</p>
      </div>
      <p class="house__text">Мы строим в четком архитектурном стиле. В нашем каталоге представлены проекты на любой
        вкус с точки зрения площади,этажности и внешнему виду</p>
    </div>

    <div class="house__skandi">
      <h6 class="house__skandi-t container">ДОМА СКАНДИ</h6>
      

      <?php
        global $post;

        $myposts1 = get_posts([
          'numberposts' => 1,
          'category'    => 11 // ID категории(рубрики)
        ]);

        if( $myposts1 ){
          foreach( $myposts1 as $post ){
            setup_postdata( $post );
            ?>

          <?php the_content(); ?>


          

            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>
    </div>

    <div class="house__euro">
      <h6 class="house__euro-t container">ДОМА ЕВРО</h6>
      <?php
        global $post;

        $myposts1 = get_posts([
          'numberposts' => 1,
          'category'    => 12 // ID категории(рубрики)
        ]);

        if( $myposts1 ){
          foreach( $myposts1 as $post ){
            setup_postdata( $post );
            ?>

          <?php the_content(); ?>


          

            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>

    </div>

    <div class="house__dvuh">
          <h6 class="house__euro-t container">ДВУХЭТАЖНЫЕ ДОМА</h6>
          <?php
        global $post;

        $myposts1 = get_posts([
          'numberposts' => 1,
          'category'    => 13 // ID категории(рубрики)
        ]);

        if( $myposts1 ){
          foreach( $myposts1 as $post ){
            setup_postdata( $post );
            ?>

          <?php the_content(); ?>


          

            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>
    </div>

    <div class="house__karkas">

          <h6 class="house__euro-t container">КАРКАСНЫЕ ДОМА</h6>

          <?php
        global $post;

        $myposts1 = get_posts([
          'numberposts' => 1,
          'category'    => 14 // ID категории(рубрики)
        ]);

        if( $myposts1 ){
          foreach( $myposts1 as $post ){
            setup_postdata( $post );
            ?>

          <?php the_content(); ?>


          

            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>
    </div>
  </section>

  <section class="kviz container" id="kviz">
    <div class="kviz__after">
      <div class="kviz__top">
        <h6 class="kviz__t-text">Не нашли нужный проект?</h6>
        <div class="kviz__top-b">
          <h4 class="kviz__title">Ответьте на несколько вопросов и мы подберем для вас лучший вариант</h4>
        </div>

      </div>
    </div>

      <?php echo do_shortcode('[contact-form-7 id="5a5b926" title="Квизы"]')?>



    <!-- <div class="kviz__bottom">
      <button class="kviz__nazad">
        <img class="kviz__nazad-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/left-ar.png" alt="назад">
        <p class="kviz__nazad-p">Назад</p>
      </button>
      <button class="kviz__dalee">
        <p class="kviz__dalee-p">Далее</p>
        <img class="kviz__dalee-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/right-ar.png" alt="далее">
      </button>
    </div> -->
  </section>

  <section class="preim" id="preim">
    <h5 class="preim__title container">Почему вы можете довериться нам и быть спокойны за сроки и качество работ</h5>
    <h6 class="preim__text container">Наши преимущества и сильные стороны</h6>
    <div class="preim__blocks container">

      <div class="preim__block">
        <img class="preim__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-1.png" alt="1">
        <div class="preim__content">
          <h4 class="preim__zag"><?php the_field('zag-preim-1');?></h4>
          <p class="preim__cont"><?php the_field('text-preim-1');?>
          </p>
        </div>
      </div>

      <div class="preim__block">
        <img class="preim__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-2.png" alt="2">
        <div class="preim__content">
        <h4 class="preim__zag"><?php the_field('zag-preim-2');?></h4>
          <p class="preim__cont"><?php the_field('text-preim-2');?>
          </p>
        </div>
      </div>

      <div class="preim__block">
        <img class="preim__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-3.png" alt="3">
        <div class="preim__content">
        <h4 class="preim__zag"><?php the_field('zag-preim-3');?></h4>
          <p class="preim__cont"><?php the_field('text-preim-3');?>
          </p>
        </div>
      </div>

      <div class="preim__block">
        <img class="preim__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-4.png" alt="4">
        <div class="preim__content">
        <h4 class="preim__zag"><?php the_field('zag-preim-4');?></h4>
          <p class="preim__cont"><?php the_field('text-preim-4');?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="etap container">

    <div class="etap__left">
      <div class="etap__one">
        <img class="etap__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/etap-1.png" alt="фото">
        <div class="etap__content1">
          <div class="etap__content-l1">
            <h5 class="etap__title">КУРИРОВАНИЕ ЗАКРЕПЛЕННЫМ ЗА ПРОЕКТОМ МЕНЕДЖЕРОМ СТРОЙКИ</h5>
            <p class="etap__text">Который следит за соблюдением сроков, приёмки этапов по актам, график поставки
              материалов</p>
          </div>
          <div class="etap__contet-r"><img class="etap__contet-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-1.png" alt=""></div>
        </div>
      </div>

      <div class="etap__three">
        <img class="etap__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/etap-3.png" alt="фото">
        <div class="etap__content2">
          <div class="etap__content-l2">
            <h5 class="etap__title">ФОТО/ВИДЕО-ФИКСАЦИЯ РЕЗУЛЬТАТА И СКРЫТЫХ СТРОИТЕЛЬНЫХ РАБОТ</h5>
            <p class="etap__text">Доступ к наглядным отчетам в специальном чате проекта 24/7
              в мессенджере</p>
          </div>
          <div class="etap__contet-r"><img class="etap__contet-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-3.png" alt=""></div>
        </div>
      </div>
    </div>

    <div class="etap__central">
      <img class="etap__cent-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/line.png" alt="img">
    </div>

    <div class="etap__right">
      <div class="etap__two">
        <img class="etap__img etap__img1" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/etap-2.png" alt="фото">
        <div class="etap__content3">
          <div class="etap__content-l3">
            <h5 class="etap__title">ПОЭТАПНЫЙ КОНТРОЛЬ</h5>
            <p class="etap__text etap__text3">Этапы стройки сведены в чек лист — без принятия по акту прораба одно
              этапа
              невозможно
              приступить к следующему</p>
          </div>
          <div class="etap__contet-r"><img class="etap__contet-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-2.png" alt=""></div>
        </div>
      </div>
    </div>

    <div class="etap__1024">
      <div class="etap__one">
        <img class="etap__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/etap-1.png" alt="фото">
        <div class="etap__content1">
          <div class="etap__content-l1">
            <h5 class="etap__title">КУРИРОВАНИЕ ЗАКРЕПЛЕННЫМ ЗА ПРОЕКТОМ МЕНЕДЖЕРОМ СТРОЙКИ</h5>
            <p class="etap__text">Который следит за соблюдением сроков, приёмки этапов по актам, график поставки
              материалов</p>
          </div>
          <div class="etap__contet-r"><img class="etap__contet-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-1.png" alt=""></div>
        </div>
      </div>

      <div class="etap__two">
        <img class="etap__img etap__img1" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/etap-2.png" alt="фото">
        <div class="etap__content3">
          <div class="etap__content-l3">
            <h5 class="etap__title">ПОЭТАПНЫЙ КОНТРОЛЬ</h5>
            <p class="etap__text etap__text3">Этапы стройки сведены в чек лист — без принятия по акту прораба одно
              этапа
              невозможно
              приступить к следующему</p>
          </div>
          <div class="etap__contet-r"><img class="etap__contet-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-2.png" alt=""></div>
        </div>
      </div>

      <div class="etap__three">
        <img class="etap__img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/etap-3.png" alt="фото">
        <div class="etap__content2">
          <div class="etap__content-l2">
            <h5 class="etap__title">ФОТО/ВИДЕО-ФИКСАЦИЯ РЕЗУЛЬТАТА И СКРЫТЫХ СТРОИТЕЛЬНЫХ РАБОТ</h5>
            <p class="etap__text">Доступ к наглядным отчетам в специальном чате проекта 24/7
              в мессенджере</p>
          </div>
          <div class="etap__contet-r"><img class="etap__contet-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/preim-3.png" alt=""></div>
        </div>
      </div>
    </div>
  </section>

  <section class="video container">
    <h3 class="video__h gallery__title">Наши видео</h3>
    <p class="video__text gallery__text">Больше наших видео на нашем ютуб канале <a class="video__a" href="https://www.youtube.com/@ZaGorodStroy">ZaGorodStroy</a></p>
    <div class="video__main">
      <iframe width="600" height="315"
      src="https://www.youtube.com/embed/FemajEv0wHU">
      </iframe>
      <iframe width="600" height="315"
      src="https://www.youtube.com/embed/U20CW4Pn7Zs">
      </iframe>
    </div>
  </section>

  <section class="gallery" id="gallery">
    <h6 class="gallery__title container">Галерея работ</h6>
    <p class="gallery__text container">Построили более <span class="colortext">150 домов</span> за 10 лет работы.
      Наглядно
      оцените уже выполненные объекты
      строительной компании "Загородстрой"</p>
    <div class="gallery__sliders slider variable-width">

      <?php
        global $post;

        $myposts = get_posts([
          'numberposts' => 10,
          'category'    => 7 // ID категории(рубрики)
        ]);

        if( $myposts ){
          foreach( $myposts as $post ){
            setup_postdata( $post );
            ?>
          
        <img class="gallery__slide" src="<?php the_content(); ?>" alt="photo">

            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>
    </div>
  </section>


  <section class="kviz container" id="kviz">
    <div class="kviz__after">
      <div class="kviz__top">
        <h6 class="kviz__t-text">Не нашли нужный проект?</h6>
        <div class="kviz__top-b">
          <h4 class="kviz__title">Ответьте на несколько вопросов и мы подберем для вас лучший вариант</h4>
        </div>

      </div>
    </div>

      <?php echo do_shortcode('[contact-form-7 id="5a5b926" title="Квизы"]')?>



    <!-- <div class="kviz__bottom">
      <button class="kviz__nazad">
        <img class="kviz__nazad-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/left-ar.png" alt="назад">
        <p class="kviz__nazad-p">Назад</p>
      </button>
      <button class="kviz__dalee">
        <p class="kviz__dalee-p">Далее</p>
        <img class="kviz__dalee-img" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/right-ar.png" alt="далее">
      </button>
    </div> -->
  </section>

  <section class="otzyv">
    <h4 class="otzyv__title container">ОТЗЫВЫ КЛИЕНТОВ</h4>
    <div class="otzyv__blocks container ">
      <div class="otzyv__blocks slider otzyv-s">

      <?php
        global $post;

        $myposts2 = get_posts([
          'numberposts' => -1,
          'category'    => 6 // ID категории(рубрики)
        ]);

        if( $myposts2 ){
          foreach( $myposts2 as $post ){
            setup_postdata( $post );
            ?>

          <div class="otzyv__block">
            <p class="otzyv__name"><?php the_title(); ?></p>
            <p class="otzyv__text"><?php the_content(); ?></p>
          </div>
          
            <?php } }  wp_reset_postdata(); // Сбрасываем $post ?>
        <!-- <div class="otzyv__block">
          <p class="otzyv__name">Виктор П.</p>
          <p class="otzyv__text">Обратились в компанию для строительства загородного дома. Нам предложили различные
            проекты на любой вкус и кошелёк. Рассказали о различных рисках при строительстве. Ребята , действительно,
            профессионалы! Дом построили и оштукатурили без проволочек. Мы очень рады, что обратились в эту компанию!
            Всем рекомендую!</p>
        </div>

        <div class="otzyv__block">
          <p class="otzyv__name">Алексей Т.</p>
          <p class="otzyv__text">Замечательная строительная компания. Строили мне дачу,результат просто на высоте.
            Быстро и качественно все построили. Команда дружная,профессиональная. Огромное спасибо!</p>
        </div>

        <div class="otzyv__block">
          <p class="otzyv__name">Сергей А.</p>
          <p class="otzyv__text">Команда строителей работала очень оперативно и качественно, так что весь процесс
            прошел без задержек и проблем. Стоимость работ оказалась весьма разумной в сравнении с другими
            предложениями на рынке. Советую!</p>
        </div>

        <div class="otzyv__block">
          <p class="otzyv__name">Юлия Б.</p>
          <p class="otzyv__text">Мастера на все руки!
            Очень хорошая бригада! Приехали максимально оперативно, сделали работу как я считаю очень круто! Я задавал
            много вопросов, парни терпеливые, спокойные и отвечали на всё.</p>
        </div> -->
      </div>
       
    </div>
  </section>

  <section class="svyaz container" id="contact">
    <div class="svyaz__left">
      <p class="svyaz__title">Свяжитесь с нами</p>
      <p class="svyaz__text">Оставьте свои контактные данные в заявке или позвоните нам</p>
      <p class="svyaz__phone"><?php the_field('phone');?></p>
      <p class="svyaz__city"><?php the_field('addres');?></p>
      <a href='#' class='svyaz__em'><?php the_field('email');?></a>
      <div class="svyaz__soc">
        <a href="https://wa.me/79259187555"><img class="svyaz__wh" src="http://localhost:8888/wp-content/uploads/2024/07/wha.png" alt="whatsapp"></a>
        <a href="mailto:info@zagorodstroy.pro"><img class="svyaz__wh" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/email.png" alt="email"></a>
      </div>
    </div>

    <div class="svyaz__right">
      <p class="svyaz__ras">Расскажем все подробности и ответим на вопросы о вашем будущем доме!</p>
      <form>
      <?php echo do_shortcode('[contact-form-7 id="0535e03" title="Контактная форма"]')?>
      </form>
    </div>
  </section>

  <section class="right__menu ">
    <div class="right__otk"><img class="right__otk-img" id="right--main" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/otk-menu.svg" alt="Открыть меню"></div>

    <div class="right__active">
      <a href="#contact">
      <img class="right__active-im right__active-im1" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/otp-btn-r-1.png" alt="Отправить свой проект">
          </a>
      <a href="#house-block">
      <img class="right__active-im right__active-im2" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/proekt-btn-r-1.png" alt="Подобрать проект">
          </a>
      <a href="mailto:info@zagorodstroy.pro">
      <img class="right__active-im right__active-im3" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/email-btn-r-1.png" alt="Написать на почту">
          </a>
      <a href="https://wa.me/79259187555">
      <img class="right__active-im right__active-im4" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/what-brn-r.png" alt="Связаться в WhatsApp">
          </a>
      <a href="#">
      <img class="right__active-img right__active-im5" id="right--close" src="http://zagorodstroy.pro/wp-content/uploads/2024/07/zac-menu.svg" alt="Закрыть меню">
          </a>
    </div>
  </section>
</main>

<?php get_footer(); ?>