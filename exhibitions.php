<?php
/*
Template Name: Exhibitions
 */
?>

<?php get_header();?>
<?php

wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/exhibitions.css');
wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/exhibitions.css');
?>
<div class="exhibitions">

    <div class="exhibitions__title">
        <h2><?php echo esc_attr(pll__('Exhibitions')) ?></h2>

    </div>

    <?php

$newCat = get_terms(['taxonomy' => 'years', 'order' => 'DESC', 'hide_empty' => false]);

foreach ($newCat as $newCatData) {
    ?>

    <div class="exhibitions__year-block block widget-list">

        <div class="year-info widget">
            <div class="year">
                <h2><?php echo $newCatData->name; ?></h2>
            </div>
            <div class="icon"><img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/exhibition-icon.svg"
                    alt="">
            </div>

        </div>

        <div class="block-info">
            <div class="date-and-name">
                <div class="date-and-name__name">
                    <p><?php echo esc_attr(pll__('Number')) ?></p>
                </div>
                <div>
                    <p><?php echo esc_attr(pll__('Name of the exhibition')) ?></p>

                </div>
            </div>

            <div class="all-exhibitions">

                <?php
$counter = 0;

    $args = [
        'post_type' => 'Exhibitions',
        'post_status' => 'publish',
        'order' => 'ASC',
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
						                <div class="exhibitions-container">

						                    <div class="block">
						                        <div class="block__number"> <?php echo $counter; ?>
						                        </div>
						                        <div class="block__info">
						                            <div class="name"> <?php echo the_title(); ?>
						                            </div>
						                            <div class="gallery"> <?php echo the_excerpt(); ?>
						                            </div>
						                        </div>
						                        <div class="block__icon icon">
						                            <img data-src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-black.svg" alt="">
						                        </div>
						                    </div>
						                    <div class="block inner-block">
						                        <div class="content" id="content">
						                            <?php the_content()?>
						                        </div>
						                        <div class="gallery">
						                            <?php
    $gallery = carbon_get_post_meta(get_the_ID(), 'crb_media_gallery');

        foreach ($gallery as $i => $image) {
            $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);

            echo '<a class="image-item" data-fancybox="gallery"  data-caption="' . $image_alt . '"   href="' . wp_get_attachment_url($image) . '">';
            echo '<img data-src="' . wp_get_attachment_url($image) . '" class="">';
            echo '</a>';

        }
        ?>
						                        </div>
						                    </div>
						                </div>

						                <?php
endwhile;
    wp_reset_postdata();
    ?>
            </div>

        </div>


    </div>

    <?php }?>


    <?php

?>
</div>



<?php get_footer();?>