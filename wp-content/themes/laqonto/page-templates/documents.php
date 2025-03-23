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
  <div class="container mb-22">
    <main>
      <div class="documents-blocks-section">
        <section class="documents-block">
          <h2 class="documents-block__title"><?php _e("Punomoći", "laqonto"); ?></h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Dodjela punomoći e-RGFI", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/punomoc-e-rgfi.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Uputa dodjele punomoći e-RGFI (putem e-Građani)", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/punomoc-e-rgfi-egradani.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Pristupni list e-mirovinsko", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/pristupni-list-e-mirovinsko.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Pristupni list e-zdravstveno", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/e-zdravstveno.docx" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
          </ul>
        </section>
        <section class="documents-block">
          <h2 class="documents-block__title">Certifikati</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Izdavanje certifikata", "laqonto"); ?></p>
              </div>
              <a href="https://www.fina.hr/finadigicert/dokumentacija-za-izdavanje-certifikata#poslovni" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("e-građani", "laqonto"); ?></p>
              </div>
              <a href="https://gov.hr/" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("e-potpis poduzeća", "laqonto"); ?></p>
              </div>
              <a href="https://eposlovanje.fina.hr/WebEPotpis" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("e-potpis fizičke osobe", "laqonto"); ?></p>
              </div>
              <a href="https://web.epotpis.rdd.hr/" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
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
                <p><?php _e("Putni nalog 2025", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/putni-nalog.xlsx" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Obračun loko vožnje", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/loko-voznja.xlsx" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Tiskanice HZZO", "laqonto"); ?></p>
              </div>
              <a href="http://www.hzzo.hr/tiskanice" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Tiskanice HZMO", "laqonto"); ?></p>
              </div>
              <a href="http://www.mirovinsko.hr/default.aspx?id=752" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Obračun naknade za odvojeni život", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/obracun-naknade-za-odvojeni-zivot-1.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Obračun pomorskog dodatka", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/obracun-pomorskog-dodatka-1.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
          </ul>
        </section>
        <section class="documents-block">
          <h2 class="documents-block__title">Ostalo</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Prijava činjenica bitnih za oporezivanja", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/obrazac-prijava-cinjenica-bitnih-za-oporezivanje-nn4519.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Interni akt", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/interni-akt.docx" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Blagajnički maksimum", "laqonto"); ?></p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/blagajnicki-maksimum.docx" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p><?php _e("Izvadak iz sudskog registra", "laqonto"); ?></p>
              </div>
              <a href="https://sudreg.pravosudje.hr/registar/f?p=150:1" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span><?php _e("Preuzmi", "laqonto"); ?></span>
              </a>
            </li>
          </ul>
        </section>
      </div>
    </main>
  </div>
</article>

<?php get_footer(); ?>
