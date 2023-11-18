<?php
wp_register_style('projects-single', get_stylesheet_directory_uri() . '/assets/css/projects-single.css');
wp_enqueue_style('projects-single', get_stylesheet_directory_uri() . '/assets/css/projects-single.css');
?>

<?php get_header();?>

<main>
    <div class="projects">
        <div class="projects-info">
            <div class="title-wraper">

                <div class="projects__title">
                    <h2><?php the_title();?></h2>

                </div>
            </div>
            <div class="projects__descr-project">
                <p><?php echo $slides = carbon_get_the_post_meta('title'); ?></p>
            </div>
            <div class="description"> <p><?php echo the_content() ?></p></div>
        </div>

<div class="image-gallery widget-list">
<?php
$gallery = carbon_get_post_meta(get_the_ID(), 'crb_media_gallery');

foreach ($gallery as $i => $image) {
    $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);

    echo '<a class="image-item widget"   data-fancybox="gallery"  data-caption="' . $image_alt . '"   href="' . wp_get_attachment_url($image) . '">';
    echo '<img data-src="' . esc_url(wp_get_attachment_image_url($image, "medium_large")) . '" class="" >';
    echo '</a>';

}
?>
</div>
    </div>
</main>

<?php get_footer();?>