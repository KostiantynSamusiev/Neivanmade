<?php
/*
Template Name: Projects
 */
?>

<?php
wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/projects-style.css');
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/projects-style.css');
?>

<?php get_header();?>
<main>
    <div class="projects">

        <div class="projects-info">
            <div class="projects__title">
            <h2><?php echo esc_attr(pll__('Prorjects')) ?></h2>
            </div>
        </div>


        <div class="projects-gallery">

            <?php
global $post;

$myposts = get_posts([
    'posts_per_page' => 6,
    'category_name' => '',
    'post_type' => 'projects',
]);

foreach ($myposts as $post) {
    setup_postdata($post);
    ?>
            <div class="projects__block">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail();?>
                    <div class="projects__block-info">
                        <div class="name"><?php the_title();?></div>
                        <div class="description"><p><?php echo get_the_content() ?></p></div>
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