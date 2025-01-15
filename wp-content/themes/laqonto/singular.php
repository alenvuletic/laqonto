<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <div class="grid">
      <div class="col-span-12 lg:col-span-4 mb-7 lg:mb-0 lg:mt-12">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="button button--secondary button--rounded button--small">Naslovnica</a>
      </div>
      <div class="col-span-12 lg:col-span-6">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>
    </div>
  </header>
  <div class="grid">
    <div class="col-span-12 lg:col-span-6 lg:col-start-5">
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</article>

<?php get_footer(); ?>
