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

/**
 * Loading laqonto text domain.
 */
function laqonto_load_textdomain() {
  load_theme_textdomain('laqonto', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'laqonto_load_textdomain');

/**
 * Custom WPML language switcher output.
 */
function custom_language_switcher() {
  if (function_exists('icl_get_languages')) {
      $languages = icl_get_languages('skip_missing=0');

      if (!empty($languages)) {
          echo '<div class="toggle">';
          foreach ($languages as $lang) {
              $active_class = $lang['active'] ? 'toggle__button is-active' : 'toggle__button';
              echo '<a href="' . $lang['url'] . '" class="' . $active_class . '">';

              // Use your custom language labels
              $code = $lang['language_code'];
              $custom_labels = array(
                  'hr' => 'HRV',
                  'en' => 'ENG'
              );

              echo isset($custom_labels[$code]) ? $custom_labels[$code] : strtoupper($code);
              echo '</a>';
          }
          echo '</div>';
      }
  }
}

// Remove default actions first
remove_all_actions('wpml_add_language_selector');

// Add your custom action
add_action('wpml_add_language_selector', 'custom_language_switcher');
