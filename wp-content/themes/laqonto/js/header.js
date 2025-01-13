(function () {
  const headerStickyElements =
    document.getElementsByClassName('js-header-sticky');

  if (headerStickyElements.length > 0) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        headerStickyElements[0].classList.add('is-visible');
        document.querySelector('html').classList.add('has-sticky-header');
      } else {
        headerStickyElements[0].classList.remove('is-visible');
        document.querySelector('html').classList.remove('has-sticky-header');
      }
    });
  }

  const hamburgerIconElements = document.querySelectorAll(
    '.js-offcanvas-toggle'
  );

  hamburgerIconElements.forEach(function (element) {
    element.addEventListener('click', function () {
      this.classList.toggle('is-active');
    });
  });

  const offcanvasToggleElements = document.querySelectorAll(
    '.js-offcanvas-toggle'
  );

  offcanvasToggleElements.forEach(function (element) {
    element.addEventListener('click', function () {
      document.querySelector('.offcanvas').classList.toggle('is-active');
      document.querySelector('html').classList.toggle('has-locked-scroll');
    });
  });
})();
