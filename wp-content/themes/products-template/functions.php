<?php
// === Custom Post Type & Taxonomy για Προϊόντα === //
function kl_register_products_post_type() {
    register_post_type('product_item', array(
        'labels' => array(
            'name' => 'Προϊόντα',
            'singular_name' => 'Προϊόν',
            'add_new_item' => 'Προσθήκη Νέου Προϊόντος',
            'edit_item' => 'Επεξεργασία Προϊόντος',
            'new_item' => 'Νέο Προϊόν',
            'view_item' => 'Προβολή Προϊόντος',
            'search_items' => 'Αναζήτηση Προϊόντων',
            'not_found' => 'Δεν βρέθηκαν προϊόντα',
            'menu_name' => 'Προϊόντα'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-products',
        'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
        'rewrite' => array('slug' => 'proion'),
        'show_in_rest' => true
    ));

    register_taxonomy('product_category', 'product_item', array(
        'labels' => array(
            'name' => 'Κατηγορίες Προϊόντων',
            'singular_name' => 'Κατηγορία Προϊόντος',
            'menu_name' => 'Κατηγορίες'
        ),
        'hierarchical' => true,
        'rewrite' => array('slug' => 'katigories-proionton'),
        'show_in_rest' => true
    ));
}
add_action('init', 'kl_register_products_post_type');

// === Φόρτωση CSS === //
function kl_products_styles() {
    wp_enqueue_style('kl-products-style', get_stylesheet_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'kl_products_styles');

add_theme_support('post-thumbnails');
