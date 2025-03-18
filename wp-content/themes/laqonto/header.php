<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div class="site-header">
      <div class="site-header__inner container">
        <p class="site-header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header-logo__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 48" fill="none" class="site-header-logo__svg"><path fill="#FC663D" fill-rule="evenodd" d="M131.435 38.478a5.53 5.53 0 0 0 3.672 1.411h2.351v8.096h-4.306a9.555 9.555 0 0 1-6.555-2.59l-13.583-12.05a5.504 5.504 0 0 0-3.672-1.411h-2.351V23.87h4.321a9.553 9.553 0 0 1 6.554 2.591l4.82 4.279c.489-2.204.72-4.457.686-6.714 0-3.663-.461-6.968-1.528-9.216-1.067-2.247-2.257-3.926-4.481-4.97-2.224-1.043-4.701-1.18-8.218-1.18-3.517 0-5.995.137-8.219 1.18-2.224 1.044-3.423 2.723-4.48 4.97-1.058 2.248-1.528 5.605-1.528 9.216 0 3.61.479 6.925 1.527 9.177 1.049 2.252 2.253 3.94 4.481 4.984 2.229 1.044 4.697 1.18 8.219 1.18 1.542 0 2.887-.028 4.095-.14v8.56c-1.36.15-2.727.22-4.095.212-4.961 0-8.365-.738-12.07-2.708a21.628 21.628 0 0 1-8.622-8.585c-2.04-3.592-3.06-7.824-3.056-12.695.003-4.87 1.021-9.102 3.056-12.694a21.674 21.674 0 0 1 8.623-8.585C100.785.762 104.17 0 109.13 0c4.96 0 8.364.743 12.074 2.708a21.632 21.632 0 0 1 8.618 8.585c2.04 3.597 3.061 7.829 3.061 12.695 0 4.866-1.43 8.717-3.466 12.304l-.145.25 2.162 1.936ZM163.938.023c4.96 0 8.364.743 12.074 2.709a21.69 21.69 0 0 1 8.618 8.585c2.034 3.592 3.053 7.823 3.056 12.694.003 4.871-1.015 9.103-3.056 12.695a21.662 21.662 0 0 1-8.618 8.585c-3.71 1.97-7.114 2.708-12.074 2.708s-8.364-.738-12.074-2.708a21.662 21.662 0 0 1-8.618-8.585c-2.034-3.592-3.053-7.824-3.056-12.695-.003-4.87 1.015-9.102 3.056-12.694a21.69 21.69 0 0 1 8.618-8.585c3.71-1.966 7.114-2.709 12.074-2.709Zm8.233 38.183c2.224-1.044 3.413-2.732 4.48-5.003 1.068-2.29 1.528-5.515 1.528-9.178 0-3.662-.46-6.967-1.528-9.215-1.067-2.247-2.256-3.926-4.48-4.97-2.224-1.043-4.702-1.18-8.219-1.18-3.517 0-5.994.137-8.218 1.18-2.224 1.044-3.423 2.723-4.481 4.97-1.058 2.248-1.528 5.605-1.528 9.216 0 3.61.461 6.906 1.528 9.177s2.257 3.959 4.481 5.003c2.224 1.043 4.701 1.18 8.218 1.18 3.517 0 5.995-.137 8.219-1.18ZM8.966.719H0v46.57h32.117v-8.331H8.967V.719Zm43.965 0L35.578 47.266h10.01l3.864-11.19h21.374l3.841 11.19h10.288L67.605.719H52.931Zm-.69 27.312 6.582-19.117h2.647l6.582 19.117H52.24Zm173.458 6.54h2.13L227.655.72h8.966v46.57h-12.459l-18.553-33.226h-2.064l.103 33.226h-8.966V.72h12.465l18.552 33.852ZM241.347.72v8.332h15.289v38.238h8.896V9.051h15.219V.719h-39.404Zm85.34 10.598a21.697 21.697 0 0 0-8.618-8.585C314.359.766 310.955.023 305.995.023c-4.961 0-8.365.743-12.074 2.709a21.69 21.69 0 0 0-8.618 8.585c-2.041 3.592-3.06 7.823-3.057 12.694.004 4.871 1.022 9.103 3.057 12.695a21.655 21.655 0 0 0 8.618 8.585c3.709 1.97 7.113 2.708 12.074 2.708 4.96 0 8.364-.738 12.074-2.708a21.668 21.668 0 0 0 8.618-8.585c2.04-3.592 3.059-7.824 3.056-12.695-.003-4.87-1.022-9.102-3.056-12.694Zm-7.993 21.867c-1.067 2.271-2.257 3.96-4.481 5.003-2.224 1.044-4.702 1.18-8.218 1.18-3.517 0-5.995-.136-8.219-1.18-2.224-1.044-3.413-2.732-4.481-5.003-1.067-2.27-1.528-5.566-1.528-9.177 0-3.611.47-6.968 1.528-9.216 1.058-2.247 2.257-3.925 4.481-4.97 2.224-1.043 4.702-1.18 8.219-1.18 3.516 0 5.994.137 8.218 1.18 2.224 1.045 3.414 2.723 4.481 4.97 1.067 2.248 1.528 5.553 1.528 9.216 0 3.662-.461 6.906-1.528 9.196v-.019Z" clip-rule="evenodd"/></svg>
          </a>
        </p>
        <nav class="hidden lg:block">
          <ul class="site-header-nav">
            <li class="site-header-nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services" class="site-header-nav__link">Usluge</a>
            </li>
            <li class="site-header-nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about-us" class="site-header-nav__link">O nama</a>
            </li>
            <li class="site-header-nav__item">
              <a href="/ponuda" class="button button--primary button--small button--rounded">Zatraži ponudu</a>
            </li>
          </ul>
        </nav>
        <button class="hamburger-icon js-hamburger-icon js-offcanvas-toggle lg:hidden -me-4" type="button">
          <span class="hamburger-icon__box">
            <span class="hamburger-icon__inner"></span>
          </span>
        </button>
      </div>
    </div>

    <div class="site-header site-header--sticky js-header-sticky">
      <div class="site-header__inner container">
        <p class="site-header-logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-header-logo__link">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 48" fill="none" class="site-header-logo__svg"><path fill="#FC663D" fill-rule="evenodd" d="M131.435 38.478a5.53 5.53 0 0 0 3.672 1.411h2.351v8.096h-4.306a9.555 9.555 0 0 1-6.555-2.59l-13.583-12.05a5.504 5.504 0 0 0-3.672-1.411h-2.351V23.87h4.321a9.553 9.553 0 0 1 6.554 2.591l4.82 4.279c.489-2.204.72-4.457.686-6.714 0-3.663-.461-6.968-1.528-9.216-1.067-2.247-2.257-3.926-4.481-4.97-2.224-1.043-4.701-1.18-8.218-1.18-3.517 0-5.995.137-8.219 1.18-2.224 1.044-3.423 2.723-4.48 4.97-1.058 2.248-1.528 5.605-1.528 9.216 0 3.61.479 6.925 1.527 9.177 1.049 2.252 2.253 3.94 4.481 4.984 2.229 1.044 4.697 1.18 8.219 1.18 1.542 0 2.887-.028 4.095-.14v8.56c-1.36.15-2.727.22-4.095.212-4.961 0-8.365-.738-12.07-2.708a21.628 21.628 0 0 1-8.622-8.585c-2.04-3.592-3.06-7.824-3.056-12.695.003-4.87 1.021-9.102 3.056-12.694a21.674 21.674 0 0 1 8.623-8.585C100.785.762 104.17 0 109.13 0c4.96 0 8.364.743 12.074 2.708a21.632 21.632 0 0 1 8.618 8.585c2.04 3.597 3.061 7.829 3.061 12.695 0 4.866-1.43 8.717-3.466 12.304l-.145.25 2.162 1.936ZM163.938.023c4.96 0 8.364.743 12.074 2.709a21.69 21.69 0 0 1 8.618 8.585c2.034 3.592 3.053 7.823 3.056 12.694.003 4.871-1.015 9.103-3.056 12.695a21.662 21.662 0 0 1-8.618 8.585c-3.71 1.97-7.114 2.708-12.074 2.708s-8.364-.738-12.074-2.708a21.662 21.662 0 0 1-8.618-8.585c-2.034-3.592-3.053-7.824-3.056-12.695-.003-4.87 1.015-9.102 3.056-12.694a21.69 21.69 0 0 1 8.618-8.585c3.71-1.966 7.114-2.709 12.074-2.709Zm8.233 38.183c2.224-1.044 3.413-2.732 4.48-5.003 1.068-2.29 1.528-5.515 1.528-9.178 0-3.662-.46-6.967-1.528-9.215-1.067-2.247-2.256-3.926-4.48-4.97-2.224-1.043-4.702-1.18-8.219-1.18-3.517 0-5.994.137-8.218 1.18-2.224 1.044-3.423 2.723-4.481 4.97-1.058 2.248-1.528 5.605-1.528 9.216 0 3.61.461 6.906 1.528 9.177s2.257 3.959 4.481 5.003c2.224 1.043 4.701 1.18 8.218 1.18 3.517 0 5.995-.137 8.219-1.18ZM8.966.719H0v46.57h32.117v-8.331H8.967V.719Zm43.965 0L35.578 47.266h10.01l3.864-11.19h21.374l3.841 11.19h10.288L67.605.719H52.931Zm-.69 27.312 6.582-19.117h2.647l6.582 19.117H52.24Zm173.458 6.54h2.13L227.655.72h8.966v46.57h-12.459l-18.553-33.226h-2.064l.103 33.226h-8.966V.72h12.465l18.552 33.852ZM241.347.72v8.332h15.289v38.238h8.896V9.051h15.219V.719h-39.404Zm85.34 10.598a21.697 21.697 0 0 0-8.618-8.585C314.359.766 310.955.023 305.995.023c-4.961 0-8.365.743-12.074 2.709a21.69 21.69 0 0 0-8.618 8.585c-2.041 3.592-3.06 7.823-3.057 12.694.004 4.871 1.022 9.103 3.057 12.695a21.655 21.655 0 0 0 8.618 8.585c3.709 1.97 7.113 2.708 12.074 2.708 4.96 0 8.364-.738 12.074-2.708a21.668 21.668 0 0 0 8.618-8.585c2.04-3.592 3.059-7.824 3.056-12.695-.003-4.87-1.022-9.102-3.056-12.694Zm-7.993 21.867c-1.067 2.271-2.257 3.96-4.481 5.003-2.224 1.044-4.702 1.18-8.218 1.18-3.517 0-5.995-.136-8.219-1.18-2.224-1.044-3.413-2.732-4.481-5.003-1.067-2.27-1.528-5.566-1.528-9.177 0-3.611.47-6.968 1.528-9.216 1.058-2.247 2.257-3.925 4.481-4.97 2.224-1.043 4.702-1.18 8.219-1.18 3.516 0 5.994.137 8.218 1.18 2.224 1.045 3.414 2.723 4.481 4.97 1.067 2.248 1.528 5.553 1.528 9.216 0 3.662-.461 6.906-1.528 9.196v-.019Z" clip-rule="evenodd"/></svg>
          </a>
        </p>
        <nav class="hidden lg:block">
          <ul class="site-header-nav">
            <li class="site-header-nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>#services" class="site-header-nav__link">Usluge</a>
            </li>
            <li class="site-header-nav__item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about-us" class="site-header-nav__link">O nama</a>
            </li>
            <li class="site-header-nav__item">
              <a href="/ponuda" class="button button--primary button--small button--rounded">Zatraži ponudu</a>
            </li>
          </ul>
        </nav>
        <button class="hamburger-icon js-hamburger-icon js-offcanvas-toggle lg:hidden -me-4" type="button">
          <span class="hamburger-icon__box">
            <span class="hamburger-icon__inner"></span>
          </span>
        </button>
      </div>
    </div>

    <div class="offcanvas">
      <div class="offcanvas__inner container">
        <div>
        <p class="offcanvas__title">Izbornik</p>
          <nav>
            <ul class="offcanvas-nav">
              <li class="offcanvas-nav__item is-current">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="offcanvas-nav__link">Naslovnica</a>
              </li>
              <li class="offcanvas-nav__item">
                <a href="/ponuda" class="offcanvas-nav__link">Zatraži ponudu</a>
              </li>
            </ul>
          </nav>
        </div>
        <div>
          <hr class="divider mb-2" />
          <p class="offcanvas__title">Jezik</p>
          <div class="toggle">
            <a href="#" class="toggle__button is-active">HRV</a>
            <a href="#" class="toggle__button">ENG</a>
          </div>
          <hr class="divider mt-9 mb-2" />
          <p class="offcanvas__title">Povežimo se</p>
          <ul class="list-arrow">
            <li class="list-arrow__item">
              <a href="https://linkedin.com/company/laqonto" target="_blank" class="list-arrow__link">
                <i class="list-arrow__icon">
                  <?php include get_theme_file_path( '/icons/arrow-right.svg' ); ?>
                </i>
                <span>LinkedIn</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
