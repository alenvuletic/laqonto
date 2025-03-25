<?php get_header(); ?>

<div class="container">
  <div class="hero-subheader">
    <div class="hero-subheader__inner text-white">
      <h1><?php _e("Jednostavno knjigovodstvo za novu generaciju poduzetnika.", "laqonto"); ?></h1>
    </div>
    <div class="hero-subheader__arrow">
      <svg width="32" height="77" viewBox="0 0 32 77" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 62C5 62 8 62.7222 10 65.6111C11.6 67.9222 14.6667 72.8333 16 75C17.3333 72.8333 20.4 67.9222 22 65.6111C23.9375 62.8125 27 62 32 62" stroke="#FC663D" stroke-width="4" stroke-linejoin="bevel"/><path d="M16 60L16 0" stroke="#FC663D" stroke-width="4"/></svg>
    </div>
    <img class="hero-subheader__background" src="<?php echo esc_url( get_template_directory_uri() . '/images/content/homepage-1.webp' ); ?>" alt="" >
  </div>
</div>

<div class="grid mt-30 mb-45 lg:mb-55">
  <div class="col-span-12 lg:col-span-4 hidden lg:block">
    <div class="mb-1 mt-3">
      <?php do_action('wpml_add_language_selector'); ?>
    </div>
    <p class="text-xs">Jezik / Language</p>
  </div>
  <div class="col-span-12 lg:col-span-7 lg:col-start-5">
    <h2 class="mb-10 lg:mb-12"><?php _e("Vođenje usluga financijskog knjigovodstva, prilagođene potrebama vašeg poslovanja.", "laqonto"); ?></h2>
    <div class="content-block">
      <p><?php _e("Brinemo o vašim financijama – vođenje knjigovodstva, obračun plaća, poslovno savjetovanje i financijsko izvještavanje. Usklađujemo vaše poslovanje sa zakonom i pojednostavljujemo administraciju.", "laqonto"); ?></p>
      <p><?php _e("Fokusirajte se na rast, a papirologiju prepustite nama!", "laqonto"); ?></p>
    </div>
  </div>
</div>

<div class="container">
  <div class="hero">
    <img class="hero__background" src="<?php echo esc_url( get_template_directory_uri() . '/images/content/homepage-2.webp' ); ?>" alt="" >
    <div class="hero__content hero__content--bottom-right text-white">
      <p><?php _e("Moderno knjigovodstvo, prilagođeno tvom poslovanju.", "laqonto"); ?></p>
    </div>
  </div>
</div>

<div class="anchor-offset" id="services"></div>

<div class="grid mt-6 lg:mt-12 mb-45 lg:mb-55">
  <div class="col-span-12 lg:col-span-6">
    <h2 class="text-primary text-8xl lg:text-9xl"><?php _e("Usluge", "laqonto"); ?></h2>
  </div>
  <div class="col-span-12 lg:col-span-6">
    <div class="accordion mt-22 lg:mt-6">
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-1" class="accordion-toggle"><?php _e("Vođenje financijskog knjigovodstva", "laqonto"); ?></button>
        <div data-accordion-panel data-value="item-1" class="accordion-panel">
          <div class="content-block">
            <p><?php _e("Vođenje financijskog knjigovodstva obuhvaća precizno evidentiranje svih poslovnih transakcija, izradu financijskih izvještaja te praćenje potraživanja i obveza. Ključni cilj je osigurati točne i ažurne financijske podatke koji omogućuju donošenje pravih poslovnih odluka te usklađenost sa zakonskim propisima. Naš tim osigurava stručnu i pouzdanu podršku kako bi vaše poslovanje bilo stabilno i transparentno.", "laqonto"); ?></p>
          </div>
        </div>
      </div>
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-2" class="accordion-toggle"><?php _e("Obračun plaća", "laqonto"); ?></button>
        <div data-accordion-panel data-value="item-2" class="accordion-panel">
          <div class="content-block">
            <p><?php _e("Pojednostavite svoje poslovanje i prepustite obračun plaća našem stručnom timu. Osiguravamo točan i pravodoban obračun plaća, doprinosa i drugog dohotka, uz potpuno poštivanje zakonskih propisa. Brinemo o izradi ugovora o radu, prijavama i odjavama zaposlenika, evidenciji radnog vremena te podnošenju svih potrebnih izvještaja.", "laqonto"); ?></p>
            <p><?php _e("Naš cilj je osigurati pouzdan i efikasan sustav obračuna plaća, uz sigurnost i usklađenost s važećim zakonodavstvom.", "laqonto"); ?></p>
          </div>
        </div>
      </div>
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-3" class="accordion-toggle"><?php _e("Poslovno savjetovanje", "laqonto"); ?></button>
        <div data-accordion-panel data-value="item-3" class="accordion-panel">
          <div class="content-block">
            <p><?php _e("Pružamo sveobuhvatne usluge poslovnog savjetovanja kako bismo vam pomogli u postizanju financijske stabilnosti i održivog rasta. Naš tim analizira vaše poslovne procese i predlaže strategije za optimizaciju troškova, efikasnije upravljanje financijama te usklađenost s poreznim i zakonskim zahtjevima.", "laqonto"); ?></p>
            <p><?php _e("Fokusiramo se na:", "laqonto"); ?></p>
            <ul>
              <li><?php _e("Financijsko planiranje i analizu", "laqonto"); ?></li>
              <li><?php _e("Strateško savjetovanje", "laqonto"); ?></li>
              <li><?php _e("Optimizaciju poslovnih procesa", "laqonto"); ?></li>
              <li><?php _e("Upravljanje rizicima", "laqonto"); ?></li>
              <li><?php _e("Planiranje poreza i izvještavanje", "laqonto"); ?></li>
            </ul>
            <p><?php _e("Naš cilj je osigurati da vaše poslovanje bude učinkovito, konkurentno i dugoročno održivo.", "laqonto"); ?></p>
          </div>
        </div>
      </div>
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-4" class="accordion-toggle"><?php _e("Financijsko izvještavanje", "laqonto"); ?></button>
        <div data-accordion-panel data-value="item-4" class="accordion-panel">
          <div class="content-block">
            <p><?php _e("Precizno i pravovremeno financijsko izvještavanje ključno je za uspješno poslovanje i usklađenost s propisima. Naš računovodstveni ured priprema, obrađuje i podnosi financijske izvještaje nadležnim institucijama, omogućujući vam fokus na rast poslovanja bez administrativnih opterećenja, pružajući sigurnost i jasan uvid u vaše financije.", "laqonto"); ?></p>
            <p><?php _e("Naše usluge uključuju:", "laqonto"); ?></p>
            <ul>
              <li><?php _e("Pripremu godišnjih financijskih izvještaja (bilanca, račun dobiti i gubitka, bilješke, odluke)", "laqonto"); ?></li>
              <li><?php _e("Podnošenje obveznih izvještaja Poreznoj upravi (PDV obrasci, porezne prijave, ZP)", "laqonto"); ?></li>
              <li><?php _e("Praćenje financijskih rezultata i izrada prilagođenih izvještaja", "laqonto"); ?></li>
              <li><?php _e("Izvještavanje o isplatama dohodaka i naknadama", "laqonto"); ?></li>
              <li><?php _e("Redovite analize i sastanke o financijskom stanju vašeg poslovanja", "laqonto"); ?></li>
            </ul>
          </div>
        </div>
      </div>
      <div data-accordion-group class="accordion-group">
        <button data-accordion-toggle data-value="item-5" class="accordion-toggle"><?php _e("Izrada izlaznih računa i slanje e-računa", "laqonto"); ?></button>
        <div data-accordion-panel data-value="item-5" class="accordion-panel">
          <div class="content-block">
            <p><?php _e("Pomažemo vam u izdavanju e-računa i prilagodbi novim zakonskim zahtjevima. Naš računovodstveni ured izdaje izlazne račune u vaše ime i osigurava njihovu brzu i sigurnu dostavu prema važećim standardima.", "laqonto"); ?></p>
            <p><?php _e("Budući da je od 2024. godine obvezno slanje e-računa (B2G), a od 2025. godine stupaju na snagu novi propisi, pružamo vam stručnu podršku i pojednostavljujemo cijeli proces kako biste poslovali bez prepreka.", "laqonto"); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="hero text-white">
    <img class="hero__background" src="<?php echo esc_url( get_template_directory_uri() . '/images/content/homepage-3.webp' ); ?>" alt="" >
    <div class="hero__content">
      <p><?php _e("Digitalno knjigovodstvo koje ide u korak s tvojim biznisom.", "laqonto"); ?></p>
    </div>
  </div>
</div>

<div class="anchor-offset" id="about-us"></div>

<div class="grid mt-6 lg:mt-12 mb-45 lg:mb-55">
  <div class="col-span-12 lg:col-span-6">
    <h2 class="text-primary text-8xl lg:text-9xl"><?php _e("O nama", "laqonto"); ?></h2>
  </div>
  <div class="col-span-12 lg:col-span-6">
    <div class="text-xl lg:text-2xl mt-22 lg:mt-4">
      <p><?php _e("LAQONTO, osnovan 1995. godine, pruža precizne i pouzdane knjigovodstvene usluge poduzetnicima i obrtnicima. Kroz digitalizaciju, stručnost i individualni pristup, pojednostavljujemo poslovanje i osiguravamo financijsku sigurnost. Dostupni smo lokalno, širom Hrvatske i online.", "laqonto"); ?></p>
    </div>
  </div>
  <div class="col-span-12 mt-12 lg:mt-28">
    <div class="stats-grid">
      <div class="stats-grid__item">
        <p class="stats-grid__number">11</p>
        <p class="stats-grid__label"><?php _e("Iskusnih zaposlenika", "laqonto"); ?></p>
      </div>
      <div class="stats-grid__item">
        <p class="stats-grid__number">28</p>
        <p class="stats-grid__label"><?php _e("Godina iskustva", "laqonto"); ?></p>
      </div>
      <div class="stats-grid__item">
        <p class="stats-grid__number">200+</p>
        <p class="stats-grid__label"><?php _e("Zadovoljnih partnera", "laqonto"); ?></p>
      </div>
      <div class="stats-grid__item">
        <a href="<?php echo ICL_LANGUAGE_CODE === 'en' ? '/en/offer' : '/ponuda'; ?>" class="button button--primary button--small button--rounded"><?php _e("Zatraži ponudu", "laqonto"); ?></a>
        <p class="stats-grid__label"><?php _e("Personalizirana ponuda", "laqonto"); ?></p>
      </div>
    </div>
  </div>
</div>

<div class="grid mt-6 lg:mt-12 mb-45 lg:mb-55">
  <div class="col-span-12">
    <hr class="divider mb-2">
  </div>
  <div class="col-span-12 lg:col-span-6">
    <h2 class="text-primary text-8xl lg:text-9xl"><?php _e("Naš tim", "laqonto"); ?></h2>
  </div>
  <div class="col-span-12 lg:col-span-6">
    <div class="text-xl lg:text-2xl mt-22 lg:mt-4">
      <p><?php _e("Naš tim čine iskusni i predani stručnjaci koji osiguravaju točnost, pouzdanost i pravovremenu podršku u svim knjigovodstvenim i financijskim procesima. S individualnim pristupom i dugogodišnjim iskustvom, brinemo o vašem poslovanju kako biste se mogli posvetiti svojim ciljevima i uspjehu.", "laqonto"); ?></p>
    </div>
  </div>
  <div class="col-span-12 mt-12 lg:mt-28">
    <div class="swiper slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/tihomir-vuletic.webp' ); ?>" class="slider-box__image" alt="Tihomir Vuletić">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Tihomir Vuletić</p>
              <p><?php _e("Direktor", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/jasna-vuletic.webp' ); ?>" class="slider-box__image" alt="Jasna Vuletić">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Jasna Vuletić</p>
              <p><?php _e("Direktor", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/doris-turic.webp' ); ?>" class="slider-box__image" alt="Doris Turić">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Doris Turić</p>
              <p><?php _e("Viši knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/antonia-alac.webp' ); ?>" class="slider-box__image" alt="Antonia Alač">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Antonia Alač</p>
              <p><?php _e("Viši knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/filip-vuletic.webp' ); ?>" class="slider-box__image" alt="Filip Vuletić">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Filip Vuletić</p>
              <p><?php _e("Viši knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/stela-duvancic.webp' ); ?>" class="slider-box__image" alt="Stela Duvančić">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Stela Duvančić</p>
              <p><?php _e("Knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/barbara-cvitanovic.webp' ); ?>" class="slider-box__image" alt="Barbara Cvitanović">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Barbara Cvitanović</p>
              <p><?php _e("Knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/martina-roso.webp' ); ?>" class="slider-box__image" alt="Martina Roso">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Martina Roso</p>
              <p><?php _e("Knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/content/vera-suturovic.webp' ); ?>" class="slider-box__image" alt="Vera Suturović">
            <div class="slider-box__content text-white">
              <p class="text-5xl font-display leading-none mb-2">Vera Suturović</p>
              <p><?php _e("Viši knjigovođa", "laqonto"); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>

<div class="grid mt-6 lg:mt-12 mb-45 lg:mb-55">
  <div class="col-span-12">
    <hr class="divider mb-2">
  </div>
  <div class="col-span-12 lg:col-span-6">
    <h2 class="text-primary text-8xl lg:text-9xl"><?php _e("Naši partneri", "laqonto"); ?></h2>
  </div>
  <div class="col-span-12 lg:col-span-6">
    <div class="text-xl lg:text-2xl mt-22 lg:mt-4">
      <p><?php _e("Naši klijenti dolaze iz različitih industrija, od malih poduzetnika i obrtnika do srednjih tvrtki i slobodnih zanimanja. Pružamo im precizne, pouzdane i prilagođene knjigovodstvene usluge, omogućujući im sigurnost i jednostavnije poslovanje. Povjerenje naših klijenata rezultat je dugogodišnje stručnosti, individualnog pristupa i pravovremene podrške.", "laqonto"); ?></p>
    </div>
  </div>
  <div class="col-span-12 mt-12 lg:mt-28">
    <div class="swiper slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("Izuzetno sam zadovoljan suradnjom s LAQONTO. Profesionalni su, precizni, uvijek dostupni te daju korisne savjete koji olakšavaju poslovanje. Toplo preporučujem!"); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Aratrum d.o.o."); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("Brzi, precizni i uvijek spremni pomoći. Preporuka svima koji žele pouzdanog knjigovodstvenog partnera!"); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Brnić d.o.o."); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("Izuzetno ljubazni, susretljivi i odgovorni - jednostavno rečeno, pravi profesionalci. Sva pitanja objašnjavaju jasno i jednostavnim rječnikom. Već 20 godina surađujemo i definitivno ih preporučujemo svima."); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Restoran Vicenco"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("LAQONTO je izvrstan izbor za vođenje mojih knjiga. Pouzdani su, vrlo temeljiti i uvijek odrade sve na vrijeme. Zahvaljujući njihovoj podršci, mogu mirno raditi svoj posao znajući da se o svim administrativnim obvezama netko kvalitetno brine. Svakako preporučujem suradnju!"); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Neno Mikulić"); ?></p>
              <p><?php _e("Akademski slikar, kipar i karikaturist"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("Otkad surađujem s njima nemam više brige oko papirologije i rokova. Sve odrade na vrijeme i uvijek su tu ako nešto trebam. Osim što su stručni, stvarno su i ljubazni, tako da ih preporučujem svima koji žele bezbrižno poslovati."); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Cvjetni studio Vanda"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("S LAQONTO surađujemo dugi niz godina jer su, osim stručnosti, pokazali da svoje usluge izvršavaju profesionalno i brzo, te su u koraku s potrebama klijenata i tržišta. Uvijek dostupni za savjete i pomoć te ih definitivno preporučujemo."); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Siniša immobilien d.o.o."); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("Njihov klijent sam već 15 godina i mogu napisati samo riječi hvale. Nikada nisam imao problema, sve obavljaju brzo i bez greške. Moja topla preporuka!"); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Konoba Veza"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("Usluge LAQONTO koristim već trinaest godina. Iznimno sam zadovoljan njihovom profesionalnošću i kvalitetom usluge. Sve preporuke!"); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("Budanko travel"); ?></p>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-box">
            <div class="slider-box__content">
              <p><?php _e("S LAQONTO surađujemo već duže vrijeme i iznimno cijenimo njihovu pouzdanu i profesionalnu podršku u svim računovodstvenim poslovima. Tim radi izuzetno precizno, točno na vrijeme i uvijek je dostupan za pitanja. Zahvaljujući njihovom stručnom savjetovanju, možemo se u potpunosti posvetiti svom glavnom poslu."); ?></p>
              <p class="text-3xl text-primary font-display leading-none mb-2 mt-7"><?php _e("MaDuHoliday"); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
