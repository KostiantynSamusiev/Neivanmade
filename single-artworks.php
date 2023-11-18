
<?php get_header();?>

<?php
wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/artworks-sinegle-style.css');
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/artworks-sinegle-style.css');
?>
<main>
    <div class="artworks">
        <div class="projects-info">
            <div class="title-wraper">

                <div class="artworks__title">
                    <h2><?php the_title();?></h2>
                    <p></p>

                </div>
            </div>
            <div class="description"><?php the_content()?></div>

        </div>

<div class="image-gallery gallery widget-list">
<?php
$gallery = carbon_get_post_meta(get_the_ID(), 'crb_media_gallery');

foreach ($gallery as $i => $image) {
    $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);

    echo '<a class="image-item widget" data-fancybox="gallery"   data-caption="' . $image_alt . '"   href="' . wp_get_attachment_url($image) . '"> ';
    echo '<img data-src="' . esc_url(wp_get_attachment_image_url($image, "medium")) . '" class="">';
    echo '</a>';
}
?>
</div>
    </div>
</main>

<?php get_footer();?>
