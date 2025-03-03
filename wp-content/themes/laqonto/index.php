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

<div class="grid mt-6 lg:mt-12 mb-45 lg:mb-55">
  <div class="col-span-12 lg:col-span-6">
    <h2 class="text-primary text-8xl lg:text-9xl">Usluge</h2>
  </div>
  <div class="col-span-12 lg:col-span-6">
    <div class="accordion mt-22 lg:mt-6">
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-1" class="accordion-toggle">Vođenje financijskog knjigovodstva</button>
        <div data-accordion-panel data-value="item-1" class="accordion-panel">
          <p>Za potrebe poduzeća, obrtnika i slobodnih zanimanja i drugih, Savjetovanje preuzima brigu pripreme profesionalno izrađenog financijskog izvještaja, ovisno o pravnom obliku i vrsti financijskog izvještaja. Pri tome se na prvom mjestu uvijek nalazi klijent, te se financijski izvještaj prilagođava njegovim potrebama, naravno, u skladu s zakonom.</p>
        </div>
      </div>
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-2" class="accordion-toggle">Obračun plaća</button>
        <div data-accordion-panel data-value="item-2" class="accordion-panel">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam sunt omnis nulla voluptates itaque, facere atque eius? Ipsa tempore pariatur ad? Voluptate tenetur officiis quas accusantium in exercitationem sequi ipsam.</p>
        </div>
      </div>
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
