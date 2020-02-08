<?php

  /** Import files  */
  require get_template_directory()."/includes/queries.php";
  require get_template_directory()."/includes/shortcodes.php";

  function gym_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('medium-size', 700, 400, true);
    add_image_size('blog', 966, 644, true);
  }

  add_action('after_setup_theme', 'gym_setup');

  function gym_menus() {
    register_nav_menus(array(
      'main-menu' => __('main-menu', 'gymfitness')
    ));
  }

  add_action('init', 'gym_menus');

  function load_scripts_styles() {
    wp_enqueue_style('mainMenu', get_template_directory_uri().'/css/main_menu.css', array(), '1.0.1');
    wp_enqueue_style('header', get_template_directory_uri().'/css/header.css', array(), '1.0.1');
    wp_enqueue_style('footer', get_template_directory_uri().'/css/footer.css', array(), '1.0.1');
    wp_enqueue_style('sidebar', get_template_directory_uri().'/css/sidebar.css', array(), '1.0.1');
    wp_enqueue_style('main_forms', get_template_directory_uri().'/css/main_forms.css', array(), '1.0.1');
    wp_enqueue_style('card', get_template_directory_uri().'/css/card.css', array(), '1.0.1');
    wp_enqueue_style('gallery', get_template_directory_uri().'/css/gallery.css', array(), '1.0.1');
    wp_enqueue_style('workouts_list', get_template_directory_uri().'/css/workouts_list.css', array(), '1.0.1');
    wp_enqueue_style('coaches_list', get_template_directory_uri().'/css/coaches_list.css', array(), '1.0.1');
    wp_enqueue_style('front_page', get_template_directory_uri().'/css/front_page.css', array(), '1.0.1');
    wp_enqueue_style('slicknavCSS', get_template_directory_uri().'/css/slicknav.css', array(), '1.0.1');
    if(is_page('gallery')):
      wp_enqueue_style('lightboxCSS', get_template_directory_uri().'/css/lightbox.min.css', array(), '2.11.0');
    endif;
    if(is_page('contact')):
      wp_enqueue_style('leafletCSS', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.css', array(), '1.6.0');
    endif;
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
    wp_enqueue_script('slicknavJS', get_template_directory_uri().'/js/jquery.slicknav.js', array('jquery'), '1.0.0', true);
    if(is_page('gallery')):
      wp_enqueue_script('lightboxJS', get_template_directory_uri().'/js/lightbox.min.js', array('jquery'), '2.11.0', true);
    endif;
    if(is_page('contact')):
      wp_enqueue_script('leafletJS', 'https://unpkg.com/leaflet@1.6.0/dist/leaflet.js', '1.6.0', true);
      wp_enqueue_script('leafletJquery', get_template_directory_uri().'/js/jquery.leaflet.js', array('jquery'), '1.0.0', true);
    endif;
    wp_enqueue_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery'), '1.0.0', true);
  };

  add_action('wp_enqueue_scripts', 'load_scripts_styles');

  function load_custom_widgets() {
    register_sidebar(array(
      'name' => 'Sidebar 1',
      'id' => 'sidebar_1',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-center primary-text">',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => 'Sidebar 2',
      'id' => 'sidebar_2',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="text-center primary-text">',
      'after_title' => '</h3>'
    ));
  }

  add_action('widgets_init', 'load_custom_widgets');

  function home_hero_image() {
    $front_page_id = get_option('page_on_front');
    $image_id = get_field('hero_image', $front_page_id);
    $image = wp_get_attachment_image_src($image_id, 'full')[0];

    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $featured_hero_image_css = "
      body.home .site-header {
        background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($image);
      }
    ";

    wp_add_inline_style('custom', $featured_hero_image_css);
  }

  add_action('init', 'home_hero_image');