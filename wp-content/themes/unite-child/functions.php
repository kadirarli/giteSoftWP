<?php
/**
 * User: kadirarli
 * Date: 21/11/2017
 */

add_action( 'init', 'register_film_post_type' );
/**
 * Register a film post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function register_film_post_type() {
    $labels = array(
        'name'               => _x( 'Films', 'Film', 'film' ),
        'singular_name'      => _x( 'Film', 'film', 'film' ),
        'menu_name'          => _x( 'Films', 'Films', 'film' ),
        'name_admin_bar'     => _x( 'Film', 'Add New', 'film' ),
        'add_new'            => _x( 'Add New', 'film', 'film' ),
        'add_new_item'       => __( 'Add New Film', 'film' ),
        'new_item'           => __( 'New Film', 'film' ),
        'edit_item'          => __( 'Edit Film', 'film' ),
        'view_item'          => __( 'View Film', 'film' ),
        'all_items'          => __( 'All Films', 'film' ),
        'search_items'       => __( 'Search Films', 'film' ),
        'parent_item_colon'  => __( 'Parent Films:', 'film' ),
        'not_found'          => __( 'No films found.', 'film' ),
        'not_found_in_trash' => __( 'No films found in Trash.', 'film' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'film' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'film' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'film', $args );
}