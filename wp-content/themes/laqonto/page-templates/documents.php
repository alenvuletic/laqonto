<?php
/**
 * Template Name: Documents
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
          <span>Naslovnica</span>
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
  <div class="container mb-22">
    <main>
      <div class="documents-blocks-section">
        <section class="documents-block">
          <h2 class="documents-block__title">Porezni obrasci</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Prijedlog zahtjeva za registriranje za potrebe pdv-a</span></p>
              </div>
              <a href="#" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
              </a>
            </li>
          </ul>
        </section>
        <section class="documents-block">
          <h2 class="documents-block__title">Obrasci za plaće</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Punomoć Hrvatskom zavodu za mirovinsko osiguranje</span></p>
              </div>
              <a href="#" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
              </a>
            </li>
          </ul>
        </section>
        <section class="documents-block">
          <h2 class="documents-block__title">Isplate zaposlenicima</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Tablica putnih troškova</span></p>
              </div>
              <a href="#" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Putni nalog tuzemstvo</span></p>
              </div>
              <a href="#" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Putni nalog inozemstvo</span></p>
              </div>
              <a href="#" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Nove dnevnice za inozemstvo u 2024.</span></p>
              </div>
              <a href="#" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
              </a>
            </li>
          </ul>
        </section>
      </div>
    </main>
  </div>
</article>

<?php get_footer(); ?>
