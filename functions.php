<?php
add_action('wp_enqueue_scripts', 'neivanmade_styles');
add_action('wp_footer', 'neivanmade_scripts');
add_action('after_setup_theme', 'theme_register_nav_menu');
add_action('init', 'register_post_types');

function register_post_types()
{

    register_post_type('Projects', [
        'taxonomies' => [], // post related taxonomiesk
        'label' => null,
        'labels' => [
            'name' => 'Projects', // name for the post type.
            'singular_name' => 'Projects', // name for single post of that type.
            'add_new' => 'Add Project', // to add a new post.
            'add_new_item' => 'Adding Project', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Project', // for editing post type.
            'new_item' => 'New Project', // new post's text.
            'view_item' => 'See Project', // for viewing this post type.
            'search_items' => 'Search Project', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Projects', // menu name.
        ],
        'description' => 'Our Projects',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Biography', [
        'taxonomies' => [], // post related taxonomies
        'label' => null,
        'labels' => [
            'name' => 'Biographys', // name for the post type.
            'singular_name' => 'Biographys', // name for single post of that type.
            'add_new' => 'Add Biography', // to add a new post.
            'add_new_item' => 'Adding Biography', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Biography', // for editing post type.
            'new_item' => 'New Biography', // new post's text.
            'view_item' => 'See Biography', // for viewing this post type.
            'search_items' => 'Search Biography', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Biographys', // menu name.
        ],
        'description' => 'Our Biographys',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Artworks', [
        'taxonomies' => [], // post related taxonomies
        'label' => null,
        'labels' => [
            'name' => 'Artworks', // name for the post type.
            'singular_name' => 'Artworks', // name for single post of that type.
            'add_new' => 'Add artwork', // to add a new post.
            'add_new_item' => 'Adding artwork', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit artwork', // for editing post type.
            'new_item' => 'New artwork', // new post's text.
            'view_item' => 'See artwork', // for viewing this post type.
            'search_items' => 'Search artwork', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Artworks', // menu name.
        ],
        'description' => 'Our Artworks',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 4,
        'menu_icon' => 'dashicons-admin-customizer',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_post_type('Publication', [
        'taxonomies' => [], // post related taxonomies
        'label' => null,
        'labels' => [
            'name' => 'Publication', // name for the post type.
            'singular_name' => 'Publication', // name for single post of that type.
            'add_new' => 'Add artwork', // to add a new post.
            'add_new_item' => 'Adding artwork', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit artwork', // for editing post type.
            'new_item' => 'New artwork', // new post's text.
            'view_item' => 'See artwork', // for viewing this post type.
            'search_items' => 'Search artwork', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Publication', // menu name.
        ],
        'description' => 'Our Publication',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => null, // whether to in admin panel menu
        //'show_in_admin_bar'   => null, // depends on show_in_menu.
        'show_in_rest' => null, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-site',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'thumbnail', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

    register_taxonomy('years', ['Exhibitions'], [
        'label' => '', // определяется параметром $labels->name
        'labels' => [
            'name' => 'Years',
            'singular_name' => 'Year',
            'search_items' => 'Search Years',
            'all_items' => 'All Years',
            'view_item ' => 'View Years',
            'parent_item' => 'Parent Year',
            'parent_item_colon' => 'Parent Year:',
            'edit_item' => 'Edit Year',
            'update_item' => 'Update Year',
            'add_new_item' => 'Add New Year',
            'new_item_name' => 'New Year',
            'menu_name' => 'Year',
            'back_to_items' => '← Back to Year',
        ],
        'description' => 'Years when the exhibitions been', // описание таксономии
        'public' => true,
        'publicly_queryable' => null, // равен аргументу public
        'hierarchical' => false,
        'rewrite' => true,
    ]);

    register_post_type('Exhibitions', [
        'taxonomies' => ['years'], // post related taxonomies
        'label' => null,
        'labels' => [
            'name' => 'Exhibitions', // name for the post type.
            'singular_name' => 'Exhibitions', // name for single post of that type.
            'add_new' => 'Add Exhibitions', // to add a new post.
            'add_new_item' => 'Adding Exhibitions', // title for a newly created post in the admin panel.
            'edit_item' => 'Edit Exhibitions', // for editing post type.
            'new_item' => 'New Exhibitions', // new post's text.
            'view_item' => 'See Exhibitions', // for viewing this post type.
            'search_items' => 'Search Exhibitions', // search for these post types.
            'not_found' => 'Not Found', // if search has not found anything.
            'parent_item_colon' => '', // for parents (for hierarchical post types).
            'menu_name' => 'Exhibitions', // menu name.
        ],
        'description' => 'Our Exhibitions',
        'public' => true,
        'publicly_queryable' => true, // depends on public
        'exclude_from_search' => true, // depends on public
        'show_ui' => true, // depends on public
        'show_in_nav_menus' => true, // depends on public
        'show_in_menu' => true, // whether to in admin panel menu
        'show_in_admin_bar' => true, // depends on show_in_menu.
        'show_in_rest' => true, // Add to REST API. WP 4.7.
        'rest_base' => null, // $post_type. WP 4.7.
        'menu_position' => 6,
        'menu_icon' => 'dashicons-marker',
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // Array of additional rights for this post type.
        //'map_meta_cap'      => null, // Set to true to enable the default handler for meta caps.
        'hierarchical' => false,
        // [ 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ]
        'supports' => ['title', 'editor', 'excerpt', 'post-formats'],
        'has_archive' => false,
        'rewrite' => true,
        'query_var' => true,
    ]);

}

function neivanmade_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('neivanmade-styles-reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('fontCDN', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap');
    wp_enqueue_style('neivanmade-styles', get_template_directory_uri() . '/assets/css/style.css');
    // wp_enqueue_style('neivanmade-styles-fonts', get_template_directory_uri() . '/assets/fonts/stylesheet.css');
    wp_enqueue_style('jQuery', 'https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js');
    wp_enqueue_style('owlCarouselCss', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('slickCss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css');
    wp_enqueue_style('slickTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

};

// // checking page ID
// add_action('wp_head', function () {
//     $page_id = get_queried_object_id();
//     echo $page_id;
// });

add_action('wp_enqueue_scripts', 'my_theme_styles');
function my_theme_styles()
{
    if (get_queried_object_id() == 204 || get_queried_object_id() == 36) {
        wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/projects-style.css');
        wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/projects-style.css');
    }

    if (get_queried_object_id() == 390 || get_queried_object_id() == 36) {
        wp_register_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/projects-style.css');
        wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/assets/css/projects-style.css');
    }

}

function neivanmade_scripts()
{
    wp_enqueue_script('slickJs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js');
    wp_enqueue_script('OWL', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
    wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/main.min.js');
};

function theme_register_nav_menu()
{
    register_nav_menu('top', 'Меню в шапке');
    register_nav_menu('footer', 'Меню в подвале');
    add_theme_support('post-thumbnails', array('post', 'projects', 'artworks', 'publication'));
}

// add Carbon Field plugin
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('post_meta', 'Image gallery')
        ->where('post_type', '=', 'artworks')
        ->or_where('post_type', '=', 'projects')
        ->or_where('post_type', '=', 'exhibitions')
        ->add_fields(array(
            Field::make('media_gallery', 'crb_media_gallery', 'Gallery')
                ->set_type(array('image', 'video')),

        ));

    Container::make('post_meta', 'Date')
        ->where('post_type', '=', 'publication')
        ->add_fields(array(
            Field::make('date', 'crb_event_start', 'Choose date')
                ->set_attribute('placeholder', 'Date of event ')
                ->set_storage_format('d F Y'),

        ));

    Container::make('post_meta', 'Exhibitions')
        ->where('post_type', '=', 'biography')
        ->add_fields(array(
            Field::make('complex', 'bio_rates', 'Перелік виставок')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'rate_title', 'Заголовок'),
                    Field::make('rich_text', 'rate_text', 'Перелік'),
                )),
        ));

    Container::make('post_meta', 'Title')
        ->where('post_type', '=', 'projects')
        ->add_fields(array(
            Field::make('text', 'title', ''),
        ));

    Container::make('post_meta', 'About artist')
        ->where('post_type', '=', 'biography')
        ->add_fields(array(
            Field::make('complex', 'bio_text_about', 'Біографія')
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'years', 'Народився'),
                    Field::make('text', 'bio_status', 'Заголовок'),
                    Field::make('rich_text', 'bio_text', 'BIO'),
                    Field::make('text', 'bio_title', 'Заголовок'),
                    Field::make('rich_text', 'bio_education', 'Education'),
                )),
        ));

}

add_action('init', 'polylang_strings');

function polylang_strings()
{

    if (!function_exists('pll_register_string')) {
        return;
    }

    pll_register_string(
        'publication__title', // название строки
        'Publication', // сама строка
        'Pages', // категория для удобства
        false// будут ли тут переносы строк в тексте или нет
    );

    pll_register_string(
        'exhibitions__title',
        'Exhibitions',
        'Pages',
        false
    );

    pll_register_string(
        'artworks__title',
        'Artworks',
        'Pages',
        false
    );

    pll_register_string(
        'project__title',
        'Prorjects',
        'Pages',
        false
    );

    pll_register_string(
        'Prorjects info',
        'Prorjects info',
        'Pages',
        false
    );

    pll_register_string(
        'artist__title',
        'Mykhailo Skop',
        'First page',
        false
    );

    pll_register_string(
        'btn',
        'Look more',
        'First page',
        false
    );

    pll_register_string(
        'btn',
        'Look more',
        'First page',
        false
    );

    pll_register_string(
        'Number',
        'Number',
        'First page',
        false
    );

    pll_register_string(
        'Name of the exhibition',
        'Name of the exhibition',
        'First page',
        false
    );

    pll_register_string(
        'Artworks info',
        'Artworks info',
        'First page',
        false
    );
}

// function defer_parsing_of_js($url)
// {
//     if (false === strpos($url, '.js')) {
//         return $url;
//     }

//     if (strpos($url, 'jquery.js')) {
//         return $url;
//     }

//     return "$url' defer ";
// }
// add_filter('clean_url', 'defer_parsing_of_js', 11, 1);
