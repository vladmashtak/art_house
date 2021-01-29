<?php get_header(); ?>

<main class="art-content__main">
  <section class="art-content__main-section">
    <!--<h1 class="main-title"><img class="img-fluid" src="assets/img/main-logo.png" alt="заведение"></h1>-->
    <img class="img-fluid main-img" src="<?php the_field('main_img'); ?>" alt="заведение">
    <div class="front-tile"></div>
    <div data-aos="zoom-in" class="glass">
      <img class="img-fluid main-logo" src="<?php the_field('logo'); ?>" alt="главное лого">
    </div>
    <h2 data-aos="fade-in" class="description"><?php the_field('description'); ?></h2>
    <a data-aos="fade-up" href="#menu" class="art-button menu-button">Посмотреть Меню</a>
  </section>

  <h3 class="art-content__h3">Галерея</h3>
  <section class="art-content__gallery">
    <img class="img-fluid background-logo" src="<?php the_field('logo'); ?>" alt="главное лого">
    <div class="container">
      <div data-aos="fade-left" class="row">
        <div class="col-sm-12 col-lg-7">
          <img class="img-fluid art-gallery__img" src="<?php the_field('gallery_1_img'); ?>" alt="галлерея паба">
        </div>
        <div class="col-sm-12 col-lg-5 art-gallery">
          <a href="<?php the_field('gallery_1_link'); ?>" class="art-button art-gallery__button">
            <?php the_field('gallery_1'); ?>
          </a>
          <div class="art-gallery__text">
            <?php the_field('gallery_1_description'); ?>
          </div>
        </div>
      </div>
      <div data-aos="fade-right" class="row">
        <div class="col-sm-12 col-lg-5 art-gallery">
          <div class="art-gallery__text">
            <?php the_field('gallery_2_description'); ?>
          </div>
          <a href="<?php the_field('gallery_2_link'); ?>" class="art-button art-gallery__button">
            <?php the_field('gallery_2'); ?>
          </a>
        </div>
        <div class="col-sm-12 col-lg-7">
          <img class="img-fluid art-gallery__img" src="<?php the_field('gallery_2_img'); ?>" alt="галлерея паба">
        </div>
      </div>
    </div>
  </section>

  <section class="art-content__menu" id="menu">
    <img class="img-fluid art-content__menu-img" src="<?php echo get_template_directory_uri(); ?>/images/steak.jpg" alt="стейк">
    <div class="glass">
      <h3 class="art-content__h3">Меню</h3>
    </div>
    <div class="container art-content__menu-types">
      <div class="row">
        <div data-aos="fade-up" data-aos-delay="50" class="col-sm-12 col-md-4 menu-type__item">
          <img class="menu-type__item-img" src="<?php the_field('menu_1_img'); ?>" alt="<?php the_field('menu_1'); ?>">
          <a class="art-button menu-type__item-button" href="<?php the_field('menu_1_link'); ?>"><?php the_field('menu_1'); ?></a>
        </div>
        <div data-aos="fade-up" data-aos-delay="100" class="col-sm-12 col-md-4 menu-type__item">
          <img class="menu-type__item-img" src="<?php the_field('menu_2_img'); ?>" alt="<?php the_field('menu_2'); ?>">
          <a class="art-button menu-type__item-button" href="<?php the_field('menu_2_link'); ?>"><?php the_field('menu_2'); ?></a>
        </div>
        <div data-aos="fade-up" data-aos-delay="150" class="col-sm-12 col-md-4 menu-type__item">
          <img class="menu-type__item-img" src="<?php the_field('menu_3_img'); ?>" alt="<?php the_field('menu_3'); ?>">
          <a class="art-button menu-type__item-button" href="<?php the_field('menu_3_link'); ?>"><?php the_field('menu_3'); ?></a>
        </div>
      </div>
    </div>
  </section>

  <h3 class="art-content__h3 about-us__h3">Почему мы</h3>
  <section class="art-content__about-us">
    <img class="about-us__img" src="<?php echo get_template_directory_uri(); ?>/images/about-as-background.jpg" alt="фон секции о нас">
    <div class="container">
      <div class="row justify-content-center justify-content-sm-center">
        <?php if( get_field('about_tech') ): ?>
          <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
            <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about1.svg" alt="about_tech icon">
            <div class="about-us__label"><?php the_field('about_tech'); ?></div>
          </div>
        <?php endif; ?>

        <?php if( get_field('about_products') ): ?>
          <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
            <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about5.svg" alt="about_products icon">
            <div class="about-us__label"><?php the_field('about_products'); ?></div>
          </div>
        <?php endif; ?>

        <?php if( get_field('about_smokehouse') ): ?>
          <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
            <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about2.svg" alt="about_smokehouse icon">
            <div class="about-us__label"><?php the_field('about_smokehouse'); ?></div>
          </div>
        <?php endif; ?>

        <?php if( get_field('about_brewery') ): ?>
        <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
          <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about6.svg" alt="about_brewery icon">
          <div class="about-us__label"><?php the_field('about_brewery'); ?></div>
        </div>
        <?php endif; ?>

        <?php if( get_field('about_grill') ): ?>
        <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
          <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about3.svg" alt="about_grill icon">
          <div class="about-us__label"><?php the_field('about_grill'); ?></div>
        </div>
        <?php endif; ?>

        <?php if( get_field('about_delivery') ): ?>
        <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
          <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about7.svg" alt="about_delivery icon">
          <div class="about-us__label"><?php the_field('about_delivery'); ?></div>
        </div>
        <?php endif; ?>

        <?php if( get_field('about_chef') ): ?>
        <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
          <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about4.svg" alt="about_chef icon">
          <div class="about-us__label"><?php the_field('about_chef'); ?></div>
        </div>
        <?php endif; ?>

        <?php if( get_field('about_dish') ): ?>
        <div data-aos="fade-right" class="col-11 col-sm-8 col-md-6 about-us__item">
          <img class="about-us__icon" src="<?php echo get_template_directory_uri(); ?>/images/about8.svg" alt="about_dish icon">
          <div class="about-us__label"><?php the_field('about_dish'); ?></div>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="art-content__contacts">
    <div class="container">
      <div class="row">
        <div data-aos="fade-right" class="col-sm-12 col-md-4">
          <h3 class="art-content__h3">Наши контакты</h3>
          <div class="info-line">
            <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/mail2.svg" alt="email">
            <div class="info-line__label"><?php the_field('email'); ?></div>
          </div>
          <div class="info-line">
            <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/tel2.svg" alt="телефон">
            <div class="info-line__label"><?php the_field('phone'); ?></div>
          </div>
          <div class="info-line">
            <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/map2.svg" alt="карта">
            <div class="info-line__label"><?php the_field('address'); ?></div>
          </div>
          <div class="info-line">
            <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/clock2.svg" alt="часы">
            <div class="info-line__label"><?php the_field('work_time'); ?></div>
          </div>
        </div>
        <div data-aos="fade-left" class="col-sm-12 col-md-8">
          <a href="<?php the_field('map_link'); ?>">
            <img class="img-fluid art-content__contacts-map" src="<?php the_field('map'); ?>" alt="большая карта">
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
