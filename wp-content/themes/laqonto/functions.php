<?php

/**
 * Enqueue scripts and styles.
 */
function laqonto_scripts_styles() {
  wp_enqueue_style( "style-swiper", get_template_directory_uri() . "/css/swiper-bundle.min.css" );
  wp_enqueue_style( "style-settings", get_template_directory_uri() . "/css/settings.css" );
  wp_enqueue_style( "style-preflight", get_template_directory_uri() . "/css/preflight.css" );
  wp_enqueue_style( "style-google-fonts", "//fonts.googleapis.com/css2?family=Platypi:ital,wght@0,300..800;1,300..800&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap", [], null );
  wp_enqueue_style( "style", get_stylesheet_uri() );
  wp_enqueue_script( "script-swiper", get_template_directory_uri() . "/js/swiper-bundle.min.js", [], false, true );
  wp_enqueue_script( "script-accordion", get_template_directory_uri() . "/js/accordion.js", [], false, true );
  wp_enqueue_script( "script-header", get_template_directory_uri() . "/js/header.js", [], false, true );
  wp_enqueue_script( "script-sliders", get_template_directory_uri() . "/js/sliders.js", [], false, true );
}
add_action( "wp_enqueue_scripts", "laqonto_scripts_styles" );

/**
 * Check if the current page should have a hero CTA.
 */
function has_hero_cta() {
  return
    is_home() ||
    (
      get_page_template_slug() !== 'page-templates/documents.php' &&
      get_page_template_slug() !== 'page-templates/form.php'
    );
}
