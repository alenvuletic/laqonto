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
          <h2 class="documents-block__title">Punomoći</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Dodjela punomoći e-RGFI</p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/Dodjela-punomoci-e-RGFI.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Uputa dodjele punomoći e-RGFI (putem e-Građana)</p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/Uputa-dodjele-punomoci-e-RGFI-putem-e-Gradana.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Pristupni list e-mirovinsko</p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/Pristupni-list-e-mirovinsko.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Pristupni list e-zdravstveno</p>
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
          <h2 class="documents-block__title">Certifikati</h2>
          <ul>
            <li class="documents-block-item">
              <div class="documents-block-item__main">
                <span class="documents-block-item__icon">
                  <?php include get_theme_file_path( '/icons/file-text.svg' ); ?>
                </span>
                <p>Izdavanje certifikata</p>
              </div>
              <a href="https://www.fina.hr/finadigicert/dokumentacija-za-izdavanje-certifikata#poslovni" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>e-građani</p>
              </div>
              <a href="https://gov.hr/" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>e-potpis poduzeća</p>
              </div>
              <a href="https://eposlovanje.fina.hr/WebEPotpis" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>e-potpis fizičke osobe</p>
              </div>
              <a href="https://web.epotpis.rdd.hr/" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Putni nalog 2025</p>
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
                <p>Obračun loko vožnje</p>
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
                <p>Tiskanice HZZO</p>
              </div>
              <a href="http://www.hzzo.hr/tiskanice" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Tiskanice HZMO</p>
              </div>
              <a href="http://www.mirovinsko.hr/default.aspx?id=752" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Obračun naknade za odvojeni život</p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/obracun-naknade-za-odvojeni-zivot.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Obračun pomorskog dodatka</p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/obracun-pomorskog-dodatka.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
                <span class="button__icon">
                  <?php include get_theme_file_path( '/icons/download.svg' ); ?>
                </span>
                <span>Preuzmi</span>
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
                <p>Prijava činjenica bitnih za oporezivanja</p>
              </div>
              <a href="https://laqonto.com/wp-content/uploads/2025/03/Obrazac_Prijava_cinjenica_bitnih_za_oporezivanje_NN4519.pdf" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
                <p>Interni akt</p>
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
                <p>Izvadak iz sudskog registra</p>
              </div>
              <a href="https://sudreg.pravosudje.hr/registar/f?p=150:1" target="_blank" class="button button--secondary button--medium button--has-icon gap-3">
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
