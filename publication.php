<?php
/*
Template Name: Publication
 */
?>
<?php
wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/publication.css');
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/publication.css');
?>
<?php get_header();?>
<main>
    <div class="publication">

        <div class="publication-info">
            <div class="publication__title">
                <h2><?php echo esc_attr(pll__('Publication')) ?></h2>
            </div>
        </div>

        <div class="publication-container">
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
            <div class="publication__block">
                <a href="<?php the_permalink();?>">
                    <div class="number">
                        <?php echo "/0" . $counter; ?>
                    </div>
                    <div class="pic">
                        <?php the_post_thumbnail();?>
                    </div>
                    <div class="publication__block-info info">
                        <div class="name"><?php the_title();?></div>
                    </div>
                    <div class="date">
                        <?php echo carbon_get_post_meta(get_the_ID(), 'crb_event_start') ?> year
                    </div>
                </a>

            </div>
            <?php
}
wp_reset_postdata();
?>



        </div>

    </div>
</main>
<?php get_footer();?>