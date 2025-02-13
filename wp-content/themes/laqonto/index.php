<?php get_header(); ?>

<div class="container">
  <div class="hero-subheader">
    <div class="hero-subheader__inner text-white">
      <h1>Jednostavno knjigovodstvo za novu generaciju poduzetnika.</h1>
    </div>
    <div class="hero-subheader__arrow">
      <svg width="32" height="77" viewBox="0 0 32 77" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 62C5 62 8 62.7222 10 65.6111C11.6 67.9222 14.6667 72.8333 16 75C17.3333 72.8333 20.4 67.9222 22 65.6111C23.9375 62.8125 27 62 32 62" stroke="#FC663D" stroke-width="4" stroke-linejoin="bevel"/><path d="M16 60L16 0" stroke="#FC663D" stroke-width="4"/></svg>
    </div>
    <?php echo wp_get_attachment_image( 11, array( "1328", "720" ), false, array( "class" => "hero-subheader__background" ) ); ?>
  </div>
</div>

<div class="grid mt-30 mb-45 lg:mb-55">
  <div class="col-span-12 lg:col-span-7 lg:col-start-5 ms-auto">
    <h2 class="mb-10 lg:mb-12">Vođenje usluga financijskog knjigovodstva, prilagođene potrebama vašeg poslovanja.</h2>
    <p>Pružamo precizno evidentiranje svih financijskih transakcija, izradu financijskih izvještaja, praćenje potraživanja i obveza, te redovito podnošenje zakonskih izvješća.</p>
  </div>
</div>

<div class="container">
  <div class="hero">
    <?php echo wp_get_attachment_image( 11, array( "1328", "720" ), false, array( "class" => "hero__background" ) ); ?>
    <div class="hero__content">
      <p>Moderno knjigovodstvo, prilagođeno tvom poslovanju.</p>
    </div>
  </div>
</div>

<div class="container">
  <div class="hero text-white">
    <?php echo wp_get_attachment_image( 11, array( "1328", "720" ), false, array( "class" => "hero__background" ) ); ?>
    <div class="hero__content">
      <p>Digitalno knjigovodstvo koje ide u korak s tvojim biznisom.</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
