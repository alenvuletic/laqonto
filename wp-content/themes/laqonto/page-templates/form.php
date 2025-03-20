<?php
/**
 * Template Name: Form
 */
?>

<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <div class="grid">
      <div class="col-span-12 lg:col-span-4 mb-7 lg:mb-0 lg:mt-12">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--secondary button--rounded button--small button--has-icon">
          <span class="button__icon">
            <?php include get_theme_file_path( '/icons/arrow-left.svg' ); ?>
          </span>
          <span><?php _e("Naslovnica", "laqonto"); ?></span>
        </a>
      </div>
      <div class="col-span-12 lg:col-span-6">
        <h1 class="entry-title mb-7"><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <main>
      <?php gravity_form( 1 ); ?>
    </main>
  </div>
</article>

<?php get_footer(); ?>
