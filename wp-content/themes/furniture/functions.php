<?php
add_action( 'wp_enqueue_scripts', function(){

    wp_enqueue_style( 'oswald', 'link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,500&display=swap');
    wp_enqueue_style( 'font1', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style( 'icon2', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css');
    wp_enqueue_style( 'font3', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap');
    wp_enqueue_style( 'anim', get_template_directory_uri() . '/assets/lib/animate/animate.min.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/assets/lib/lightbox/css/lightbox.min.css');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');



    wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() .'/assets/lib/wow/wow.min.js', 'null', true );
    wp_enqueue_script( 'waypoint', get_template_directory_uri() .'/assets/lib/waypoints/waypoints.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'counterup', get_template_directory_uri() .'/assets/lib/counterup/counterup.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'paralax', get_template_directory_uri() .'/assets/lib/parallax/parallax.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'lightbox', get_template_directory_uri() .'/assets/lib/lightbox/js/lightbox.min.js', array('jquery'), 'null', true );
    wp_enqueue_script( 'stycky', get_template_directory_uri() .'/assets/js/jquery.sticky.js', array('jquery'), 'null', true );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), 'null', true );

    wp_enqueue_script( 'jquery', get_template_directory_uri() .'/assets/js/jquery-3.3.1.min.js', array('jquery'), 'null', true );


});

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );


function wph_only_parent_category($query) {
    if (!is_admin() && $query->is_category())
        $query->set('category__in', array(get_queried_object_id()));
}
add_action('pre_get_posts', 'wph_only_parent_category');

add_filter( 'document_title', 'wp_kama_document_title_filter' );

/**
 * Function for `document_title` filter-hook.
 *
 * @param string $title Document title.
 *
 * @return string
 */
function wp_kama_document_title_filter( $title ){

    // filter...
    return $title;
}

add_filter( 'document_title', 'modify_document_title_for_front_page' );

/**
 * Изменяет заголовок главной страницы сайта.
 *
 * @param string $title
 *
 * @return string
 */
function modify_document_title_for_front_page( $title ) {
    return is_front_page() ? 'Главная' : $title;
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
    global $post;
}


?>


