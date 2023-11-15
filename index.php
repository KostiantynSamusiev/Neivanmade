<?php get_header();?>

<main>
  <!-- Preloader -->
  <!-- <div id="preloader">
     <div id="status">&nbsp;</div>
  </div> -->

  <!-- PRESENTATION  -->
  <div class="presentation" id="presentation">
    <!-- <video src="<?php echo bloginfo('template_url'); ?>" autoplay="" loop="" playsinline="" muted=""></video> -->
    <!-- <img src="<?php echo bloginfo('template_url'); ?>/assets/img/main-pic.webp"></img> -->
    <div class="text">#NEIVANMADE</div>
  </div>

  <!-- ARTIST  -->
  <div class="artist  notemp" data-400="opacity: 0" data-center="opacity: 1;" data-top-bottom="opacity: 0">

    <div class="artist__pic">
      <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/Misha.webp" alt="">
    </div>

    <div class="artist__title">
      <h1><?php echo esc_attr(pll__('Mykhailo Skop')) ?></h1>
    </div>

    <?php
// параметры по умолчанию
$my_posts = get_posts([
    "numberposts" => 10,
    "category" => 0,
    "orderby" => "date",
    "order" => "DESC",
    "include" => [],
    "exclude" => [],
    "meta_key" => "",
    "meta_value" => "",
    "post_type" => "biography",
    "suppress_filters" => true, // подавление работы фильтров изменения SQL запроса
]);

foreach ($my_posts as $post) {
    setup_postdata($post);

    // формат вывода the_title() ...
}
?>

    <?php $items = carbon_get_post_meta(get_the_ID(), "bio_text_about");
if (true) {?>

    <?php foreach ($items as $item) {?>
    <div class="artist__about-artist">
      <div class="born">
        <p><?=$item['years'];?></p>
      </div>
      <div class="profession">
        <?=$item['bio_status'];?>
      </div>
      <div class="bio">
        <?php echo wpautop($item["bio_text"]); ?>
      </div>
      <?php }?>

      <?php }
?>
      <?php wp_reset_postdata(); // сброс
?>

      <div class="links">
        <ul>
          <li><a href="">neivanmade@gmail.com</a></li>
          <li><a href="">instagram.com/neivanmade</a></li>
          <li><a href="">behance.net/mykhailoskop</a></li>
        </ul>
      </div>

    </div>
  </div>


  <!-- ARTWORKS  -->
  <div class="artworks notemp" data-400="opacity: 0" data-center="opacity: 1;" data-top-bottom="opacity: 0">
    <div class="artworks-info">
      <div class="artworks__title">
        <h2><?php echo esc_attr(pll__('Artworks')) ?></h2>
      </div>
      <div class="artworks__info">
        <?php echo esc_attr(pll__('Artworks info')) ?>
      </div>
      <div class="artworks__btn btn">
        <a href="<?php echo get_permalink(get_page_by_path('artworks')); ?>"><?php echo esc_attr(pll__('Look more')) ?>
          <div class="icon">
            <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/artworks-arrow.svg" alt="">
          </div>
        </a>
      </div>

      <div>

      </div>

    </div>
    <div class="owl-carousel">

      <?php
global $post;

$myposts = get_posts([
    'posts_per_page' => '10000',
    'category_name' => '',
    'post_type' => 'artworks',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
      <div class="artworks__block owl-block">
        <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail();?>
          <div class=" artworks__block-info">
            <p><?php the_title();?></p>
          </div>
        </a>
      </div>

      <?php
}
wp_reset_postdata();
?>
    </div>
  </div>

  <!-- EXHIBITIONS old -->
  <!-- <div class="exhibitions ">
    <div class="exhibitions__title">
      <h2><?php echo esc_attr(pll__('Exhibitions')) ?></h2>
    </div>
    <div class="exhibitions-container">

      <?php
$counter = 5;
$myposts = get_posts([
    'post_type' => 'Exhibitions',
    'post_status' => 'publish',
    // 'orderby' => 'parent',
    'order' => 'ASEC',
    'posts_per_page' => '4',
    'category_name' => '',
]);
foreach ($myposts as $post) {
    $counter--;

    setup_postdata($post);
    ?>
      <a class="exhb-link" href="<?php echo get_permalink(get_page_by_path('exhibitions')); ?>">
        <div class="block">
          <div class="block__number"> <?php echo "/0" . $counter; ?></div>
          <div class="block__info">
            <div class="name"><?php the_title()?></div>
            <div class="gallery"><?php echo the_excerpt(); ?></div>
          </div>
          <div class="block__icon">
            <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/exhibition-icon.svg" alt="">
          </div>
        </div>
      </a>


      <?php
}
wp_reset_postdata();
?>

    </div>
    <div class="exhibitions__btn btn">
      <a href="<?php echo get_permalink(get_page_by_path('exhibitions')); ?>"><?php echo esc_attr(pll__('Look more')) ?>
        <div class="icon">
          <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/exhibition-arrow.svg" alt="">
        </div>
      </a>
    </div>
  </div> -->


  <!-- EXHIBITIONS  -->
  <div class="exhibitions notemp" data-400="opacity: 0" data-center="opacity: 1;" data-top-bottom="opacity: 0">
    <div class=" exhibitions__title">
      <h2><?php echo esc_attr(pll__('Exhibitions')) ?></h2>
    </div>
    <div class="exhibitions-container">
      <?php

$newCat = get_terms(['taxonomy' => 'years',
    'order' => 'DESC',
    'slug' => '2023',
    'hide_empty' => false]);

foreach ($newCat as $newCatData) {
    ?>
      <?php
$counter = 0;

    $args = [
        'post_type' => 'Exhibitions',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'years',
                'field' => 'term_id',
                'terms' => $newCatData->term_id,

            ),
        ),
    ];

    $custom_query = new WP_Query($args);
    while ($custom_query->have_posts()):
        $custom_query->the_post();
        $counter++;

        ?>
      <a class="exhb-link" href="<?php echo get_permalink(get_page_by_path('exhibitions')); ?>">
        <div class="block">
          <div class="block__number"> <?php echo "/0" . $counter; ?></div>
          <div class="block__info">
            <div class="name"><?php the_title()?></div>
            <div class="gallery"><?php echo the_excerpt(); ?></div>
          </div>
          <div class="block__icon">
            <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/exhibition-icon.svg" alt="">
          </div>
        </div>
      </a>


      <?php
endwhile;
    wp_reset_postdata();
    ?>
    </div>
    <div class="exhibitions__btn btn">
      <a href="<?php echo get_permalink(get_page_by_path('exhibitions')); ?>"><?php echo esc_attr(pll__('Look more')) ?>
        <div class="icon">
          <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/exhibition-arrow.svg" alt="">
        </div>
      </a>

    </div>
  </div>




  <?php }?>


  <?php

?>

  <!-- Projects  -->
  <div class="projects notemp" data-400="opacity: 0" data-center="opacity: 1;" data-top-bottom="opacity: 0">
    <div class=" projects-info">
      <div class="projects__title">
        <h2><?php echo esc_attr(pll__('Prorjects')) ?></h2>
      </div>
      <div class="projects__info">
        <?php echo esc_attr(pll__('Prorjects info')) ?>
      </div>
      <div class="projects__btn btn">
        <a href="<?php echo get_permalink(get_page_by_path('projects')); ?>"><?php echo esc_attr(pll__('Look more')) ?>
          <div class="icon">
            <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/artworks-arrow.svg" alt="">
          </div>
        </a>
      </div>
    </div>
    <div class="projects-gallery">

      <?php
global $post;

$myposts = get_posts([
    'posts_per_page' => 2,
    'order' => 'DESC',
    'category_name' => '',
    'post_type' => 'Projects',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
      <div class="projects__block first-page">
        <a href="<?php the_permalink();?>">
          <?php the_post_thumbnail();?>
          <div class="projects__block-info">
            <div class="name"><?php the_title();?></div>
            <div class="description">
              <p><?php echo get_the_content() ?></p>
            </div>
          </div>
        </a>

      </div>
      <?php
}
wp_reset_postdata();
?>
    </div>
  </div>

  <!-- NEWS  -->
  <div class="news ">

    <!-- <div class="news__block">
      <a href="">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/BIF.png" alt="">
      </a>
    </div> -->
    <?php
$counter = 0;
$myposts = get_posts([
    'posts_per_page' => '10000',
    'category_name' => '',
    'order' => 'ASC',
    'post_type' => 'publication',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    $counter++;

    ?>
    <div class="news__block">
      <a href="<?php the_permalink();?>">
        <div class="pic">
          <?php the_post_thumbnail();?>
        </div>
      </a>
    </div>


    <?php
}
wp_reset_postdata();
?>

  </div>
</main>

<?php get_footer();?>