<?php
/*
Template Name: Artworks
 */
?>

<?php get_header();?>
<?php
wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/artworks-style.css');
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/artworks-style.css');
?>

<main>
    <div class="projects">

        <div class="projects-info">
            <div class="projects__title">
                <h2><?php echo esc_attr(pll__('Artworks')) ?></h2>
            </div>
        </div>


        <div class="projects-gallery widget-list">

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
            <div class="projects__block widget">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail();?>
                    <div class="projects__block-info">
                        <div class="name"><?php the_title();?></div>
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
