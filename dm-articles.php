<?php

/*
Plugin Name: DM Articles
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.6
Author URI: http://bradknowlton.com/
*/

add_action( 'init', 'register_cpt_article' );
    function register_cpt_article() {
    $labels = array(
    'name' => _x( 'Articles', 'article' ),
    'singular_name' => _x( 'Article', 'article' ),
    'add_new' => _x( 'Add New', 'article' ),
    'add_new_item' => _x( 'Add New Article', 'article' ),
    'edit_item' => _x( 'Edit Article', 'article' ),
    'new_item' => _x( 'New Article', 'article' ),
    'view_item' => _x( 'View Article', 'article' ),
    'search_items' => _x( 'Search Articles', 'article' ),
    'not_found' => _x( 'No articles found', 'article' ),
    'not_found_in_trash' => _x( 'No articles found in Trash', 'article' ),
    'parent_item_colon' => _x( 'Parent Article:', 'article' ),
    'menu_name' => _x( 'Articles', 'article' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => true,
    'supports' => array( 'title', 'editor' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'article', $args );
    } 


