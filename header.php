<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neivanmade</title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="msapplication-TileColor" content="#da532c" />
  <meta name="theme-color" content="#ffffff" />

  <?php wp_head();?>
</head>

<body >
  <div class="wrapper">
    <header>
      <div class="header">

        <a href=" <?php get_home_url()?>" class="header__logo">
          #NEIVANMADE
        </a>
        <?php wp_nav_menu(array(
    'theme_location' => 'top',
    'menu' => '',
    'container' => 'div',
    'container_class' => 'header__nav links',
    'menu_class' => 'nav',
    'menu_id' => 'nav',
))?>

        <div class="header__burger-menu">
          <div class="menu btn4" data-menu="4">
            <div class="icon"></div>
          </div>
        </div>

        <div>

        </div>

        <div class="header__nav translate">
          <div class="translate-container">
            <div class="translate-block">

              <!-- <?php
// add "raw" key and save data to variable

$langs_array = pll_the_languages(array('dropdown' => 1, 'hide_current' => 0, 'raw' => 1));?>
              <?php if ($langs_array): ?>
              <div class="translate-block">
                <?php foreach ($langs_array as $lang): ?>
                <a href="<?php echo $lang['url']; ?>" class="trnslate-btn">
                  <?php echo $lang['slug']; ?>
                </a>
                <?php endforeach;?>
              </div>
              <?php endif;?> -->

              <div class="translate-block">
          <?php // outputs a flags list (without languages names) ?>
          <ul><?php pll_the_languages(array('show_flags' => 0, 'show_names' => 0));?></ul>
        </div>
            </div>

            <div class="icon" id="social-media">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/media-circle.svg" alt="">
            </div>

            <div class="overlay">
              <div class="popup">
                <div class="social-media">
                  <ul>
                    <li><a target="_blank" href="https://www.instagram.com/neivanmade/"><img
                          src="<?php echo bloginfo('template_url'); ?>/assets/img/instagram.svg" alt=""></a></li>
                    <li><a target="_blank" href="https://www.behance.net/mykhailoskop"><img
                          src="<?php echo bloginfo('template_url'); ?>/assets/img/behance.svg" alt=""></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/mykhailoskop"><img
                          src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.svg" alt=""></a></li>
                    <li><a target="_blank" href="mailto:neivanmade@gmail.com"><img
                          src="<?php echo bloginfo('template_url'); ?>/assets/img/gmail.svg" alt=""></a></li>
                  </ul>
                </div>
                <div class="close-popup"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>