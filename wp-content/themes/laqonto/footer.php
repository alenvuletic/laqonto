<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
    <?php if ( has_hero_cta() ) : ?>
      <div class="-mb-22">
        <?php include "inc/block-hero-cta.php"; ?>
      </div>
    <?php endif; ?>

    <div class="site-footer<?php echo has_hero_cta() ? ' site-footer--has-hero-cta' : ''; ?>">
      <div class="grid">
        <div class="col-span-12 lg:col-span-9 order-1">
          <p class="site-footer__title">Povežimo se</p>
        </div>
        <div class="col-span-12 lg:col-span-3 order-2">
          <ul class="list-arrow text-white mt-6 lg:mt-8">
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
        <div class="col-span-12 mt-35 lg:mt-67 order-3">
          <hr class="divider divider--orange-700 divider--thick" />
        </div>
        <div class="col-span-12 text-white mt-6 mb-12 lg:mb-6 order-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="227" viewBox="0 0 227 34" fill="none"><path fill="currentcolor" fill-rule="evenodd" d="M90.482 27.445a3.806 3.806 0 0 0 2.528.971h1.618v5.574h-2.965a6.578 6.578 0 0 1-4.511-1.784L77.8 23.911a3.79 3.79 0 0 0-2.528-.971h-1.618v-5.551h2.974a6.578 6.578 0 0 1 4.512 1.783l3.318 2.946c.337-1.517.495-3.069.472-4.622 0-2.522-.317-4.797-1.052-6.344-.735-1.547-1.553-2.703-3.084-3.422-1.531-.718-3.237-.812-5.658-.812-2.421 0-4.127.094-5.658.812-1.53.719-2.356 1.875-3.085 3.422-.728 1.547-1.051 3.858-1.051 6.344 0 2.485.33 4.767 1.051 6.318.722 1.55 1.55 2.712 3.085 3.43 1.534.72 3.234.813 5.658.813 1.061 0 1.987-.02 2.819-.097v5.894c-.936.103-1.877.151-2.82.146-3.414 0-5.757-.509-8.308-1.865a14.89 14.89 0 0 1-5.936-5.91c-1.405-2.473-2.106-5.386-2.104-8.74.002-3.352.704-6.265 2.104-8.738a14.922 14.922 0 0 1 5.936-5.91c2.554-1.357 4.884-1.88 8.3-1.88 3.414 0 5.757.51 8.311 1.863a14.888 14.888 0 0 1 5.933 5.91c1.405 2.477 2.107 5.39 2.107 8.74 0 3.35-.984 6-2.385 8.47l-.1.172 1.488 1.333ZM112.857.972c3.415 0 5.758.512 8.312 1.865a14.937 14.937 0 0 1 5.933 5.91c1.4 2.473 2.102 5.386 2.104 8.739.002 3.353-.699 6.266-2.104 8.739a14.913 14.913 0 0 1-5.933 5.91c-2.554 1.356-4.897 1.865-8.312 1.865-3.415 0-5.758-.509-8.312-1.865a14.915 14.915 0 0 1-5.933-5.91c-1.4-2.473-2.101-5.386-2.103-8.74-.003-3.352.699-6.265 2.103-8.738a14.939 14.939 0 0 1 5.933-5.91c2.554-1.353 4.897-1.865 8.312-1.865Zm5.668 26.285c1.531-.718 2.35-1.88 3.084-3.443.735-1.577 1.052-3.797 1.052-6.318 0-2.522-.317-4.797-1.052-6.344-.734-1.548-1.553-2.703-3.084-3.422-1.531-.718-3.237-.812-5.658-.812-2.421 0-4.127.094-5.658.812-1.531.719-2.356 1.874-3.084 3.422-.729 1.547-1.052 3.858-1.052 6.344 0 2.485.317 4.754 1.052 6.318.734 1.563 1.553 2.725 3.084 3.444 1.531.718 3.237.812 5.658.812 2.421 0 4.127-.094 5.658-.813ZM6.172 1.451H0v32.06h22.11v-5.736H6.172V1.451Zm30.267 0L24.492 33.495h6.892l2.66-7.704h14.714l2.645 7.704h7.081L46.541 1.45H36.439Zm-.476 18.802 4.532-13.16h1.822l4.532 13.16H35.963Zm119.412 4.503h1.466l-.119-23.305h6.172v32.06h-8.577l-12.772-22.874h-1.421l.071 22.874h-6.172V1.45h8.58l12.772 23.305ZM166.147 1.45v5.736h10.526V33.51h6.123V7.187h10.478V1.45h-27.127Zm58.749 7.296a14.937 14.937 0 0 0-5.933-5.91c-2.554-1.353-4.897-1.865-8.312-1.865-3.415 0-5.758.512-8.312 1.865a14.937 14.937 0 0 0-5.933 5.91c-1.404 2.473-2.106 5.386-2.103 8.739.002 3.353.703 6.266 2.103 8.739a14.92 14.92 0 0 0 5.933 5.91c2.554 1.356 4.897 1.865 8.312 1.865 3.415 0 5.758-.509 8.312-1.865a14.913 14.913 0 0 0 5.933-5.91c1.405-2.473 2.106-5.386 2.104-8.74-.002-3.352-.704-6.265-2.104-8.738ZM219.393 23.8c-.734 1.563-1.553 2.725-3.084 3.444-1.531.718-3.237.812-5.658.812-2.421 0-4.127-.094-5.658-.813-1.531-.718-2.349-1.88-3.084-3.443-.735-1.564-1.052-3.833-1.052-6.318 0-2.486.324-4.797 1.052-6.344.728-1.547 1.553-2.703 3.084-3.422 1.531-.718 3.237-.812 5.658-.812 2.421 0 4.127.094 5.658.812 1.531.719 2.35 1.875 3.084 3.422.735 1.547 1.052 3.822 1.052 6.344 0 2.521-.317 4.754-1.052 6.33v-.012Z" clip-rule="evenodd"/></svg>
        </div>
        <div class="col-span-12 lg:col-span-4 lg:mb-35 order-5">
          <p class="mb-5">Jednostavno knjigovodstvo za novu generaciju poduzetnika.</p>
          <p class="hidden lg:block">All rights reserved Ured Vuletić j.d.o.o. &copy; <?php echo date( "Y" ); ?>.</p>
        </div>
        <div class="col-span-12 lg:col-span-3 lg:col-start-10 mb-12 lg:mb-35 order-7 lg:order-6">
          <p>Ured Vuletić j.d.o.o. <br />Ante Starčevića 32, Makarska <br />OIB: 20510662888 <br />MB: 04741161</p>
        </div>
        <div class="col-span-12 lg:col-span-4 mb-13 lg:mb-9 order-6 lg:order-7">
          <nav>
            <ul>
              <li>
                <a href="#" class="link-underlined">Politika privatnosti</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-span-12 lg:hidden order-8">
          <p>All rights reserved Ured Vuletić j.d.o.o. &copy; <?php echo date( "Y" ); ?>.</p>
        </div>
        <div class="col-span-12 lg:col-span-3 lg:col-start-10 mb-15 lg:mb-9 order-9">
          <p>Designed by <a href="https://beta-and.co/" target="_blank" class="link-underlined">Beta&Co</a>.</p>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>
