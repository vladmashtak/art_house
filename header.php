<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package art_house
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <header id="masthead" class="site-header art-header fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="логотип" class="art-header__site-logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon"></span>
          <span class="icon"></span>
          <span class="icon"></span>
          <span class="icon"></span>
        </button>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <div class="info-line">
                <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/tel2.svg" alt="телефон">
                <div class="info-line__label"><?php the_field('phone'); ?></div>
              </div>
              <?php if( get_field('phone_2') ): ?>
                <div class="info-line">
                  <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/tel2.svg" alt="телефон">
                  <div class="info-line__label"><?php the_field('phone_2'); ?></div>
                </div>
              <?php endif; ?>
            </li>
            <li class="nav-item">
              <div class="info-line">
                <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/map2.svg" alt="карта">
                <div class="info-line__label"><?php the_field('address'); ?></div>
              </div>
              <div class="info-line">
                <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/clock2.svg" alt="часы">
                <div class="info-line__label"><?php the_field('work_time'); ?></div>
              </div>
            </li>
            <li class="nav-item">
              <div class="info-line">
                <a href="<?php the_field('facebook'); ?>" target="_blank">
                  <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/facebook2.svg" alt="фейсбук">
                </a>
              </div>
              <div class="info-line">
                <a href="<?php the_field('instagram'); ?>" target="_blank">
                  <img class="info-line__img" src="<?php echo get_template_directory_uri(); ?>/images/insta2.svg" alt="интсаграм">
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

</header>
