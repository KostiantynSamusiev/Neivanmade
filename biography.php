<?php
/*
Template Name: Biography
 */
?>

<?php get_header();?>
<?php
wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/biography.css');
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/biography.css');
?>


<main>
    <!-- ARTIST  -->
    <div class="artist">
        <div class="artist__pic">
            <img data-src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Neivamade.webp" alt="">
        </div>
        <div class="container-artist">

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
            <!-- <?php the_title();?> -->
            <?php the_content();?>
            <?php
$items = carbon_get_post_meta(
    get_the_ID(),
    "bio_text_about"
);
if (true) {?>

            <?php foreach ($items as $item) {?>
            <div class="artist__title">
                <h1>#NEIVANMADE</h1>
            </div>
            <div class="artist__sub-title">
                <h2>Mykhailo Skop</h2>
            </div>
            <div class="artist__about-artist">
                <div class="born">
                    <p><?=$item['years'];?></p>
                </div>
                <div class="profession">
                    <h3><?=$item['bio_status'];?></h3>
                </div>
                <div class="bio">
                    <?php echo wpautop($item["bio_text"]); ?>

                    <?php }?>

                    <?php }
?>
                    <?php wp_reset_postdata(); // сброс
?>



                </div>
                <div class="links">
                    <ul>
                        <li><a href="">neivanmade@gmail.com</a></li>
                        <li><a href="">instagram.com/neivanmade</a></li>
                        <li><a href="">behance.net/mykhailoskop</a></li>
                    </ul>
                </div>
            </div>

            <!-- EDUCATION -->
            <div class="education bio-block">

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
                <!-- <?php the_title();?> -->
                <?php the_content();?>
                <?php
$items = carbon_get_post_meta(
    get_the_ID(),
    "bio_text_about"
);
if (true) {?>
                <div class="education__title title">
                    <h3><?=$item['bio_title'];?></h3>
                </div>
                <div class="education__info info">

                    <?php foreach ($items as $item) {?>

                    <?php echo wpautop($item["bio_education"]); ?>

                    <?php }?>

                    <?php }
?>

                    <?php wp_reset_postdata(); // сброс
?>

                </div>
            </div>
        </div>
    </div>


    <?php
// параметры по умолчанию
$my_posts = get_posts(array(
    'numberposts' => 10,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'biography',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
));

foreach ($my_posts as $post) {
    setup_postdata($post);

    // формат вывода the_title() ...
}?>
    <!-- <?php the_title();?> -->
    <?php the_content()?>
    <?php $items = carbon_get_post_meta(get_the_ID(), 'bio_rates');
if (true) {?>
    <div class="container">
        <?php
foreach ($items as $item) {?>
        <div class="bio-block">
            <div class="title">
                <h3><?=$item['rate_title'];?></h3>
            </div>
            <div class="info">
                <?php echo wpautop($item['rate_text']); ?>
            </div>
        </div>


        <?php }
    ?>
    </div>
    <?php
}
?>

    <?php
wp_reset_postdata(); // сброс
?>

</main>



<?php get_footer();?>