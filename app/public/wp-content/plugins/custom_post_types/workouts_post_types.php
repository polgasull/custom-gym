<?php

  /*
    Plugin Name: Custom workouts - Post Types
    Plugin URI:
    Description: Add Workouts Post Type to the site
    Version: 1.0.0
    Author: Pol Gasull Navarro
    Author URI:
    Text Domain: gymfitness
  */

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function custom_workouts_post_type() {

	$labels = array(
		'name'                  => _x( 'Workouts', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Workout', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Workouts', 'gymfitness' ),
		'name_admin_bar'        => __( 'Workout', 'gymfitness' ),
		'archives'              => __( 'File', 'gymfitness' ),
		'attributes'            => __( 'Attributes', 'gymfitness' ),
		'parent_item_colon'     => __( 'Parent Workout', 'gymfitness' ),
		'all_items'             => __( 'All workouts', 'gymfitness' ),
		'add_new_item'          => __( 'Add workout', 'gymfitness' ),
		'add_new'               => __( 'Add workout', 'gymfitness' ),
		'new_item'              => __( 'New workout', 'gymfitness' ),
		'edit_item'             => __( 'Edit workout', 'gymfitness' ),
		'update_item'           => __( 'Update workout', 'gymfitness' ),
		'view_item'             => __( 'View workout', 'gymfitness' ),
		'view_items'            => __( 'View workouts', 'gymfitness' ),
		'search_items'          => __( 'Find workout', 'gymfitness' ),
		'not_found'             => __( 'Not found', 'gymfitness' ),
		'not_found_in_trash'    => __( 'Not found on paper bin', 'gymfitness' ),
		'featured_image'        => __( 'Featured image', 'gymfitness' ),
		'set_featured_image'    => __( 'Save featured image', 'gymfitness' ),
		'remove_featured_image' => __( 'Delete Featured image', 'gymfitness' ),
		'use_featured_image'    => __( 'Use as Featured image', 'gymfitness' ),
		'insert_into_item'      => __( 'Insert into workout', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Add to workouts', 'gymfitness' ),
		'items_list'            => __( 'Workouts lists', 'gymfitness' ),
		'items_list_navigation' => __( 'Workouts navigation list', 'gymfitness' ),
		'filter_items_list'     => __( 'Workouts filter', 'gymfitness' ),
	);
	$args = array(
		'label'                 => __( 'Workout', 'gymfitness' ),
		'description'           => __( 'Site web workouts', 'gymfitness' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, /* true = posts, false = page */
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'workouts_post_type', $args );

}
add_action( 'init', 'custom_workouts_post_type', 0 );
