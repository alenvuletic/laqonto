(function () {
  const headerStickyElements =
    document.getElementsByClassName('js-header-sticky');

  if (headerStickyElements.length > 0) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        headerStickyElements[0].classList.add('is-visible');
      } else {
        headerStickyElements[0].classList.remove('is-visible');
      }
    });
  }

  document
    .querySelector('.js-hamburger-icon')
    .addEventListener('click', function () {
      this.classList.toggle('is-active');
    });

  document
    .querySelector('.js-offcanvas-toggle')
    .addEventListener('click', function () {
      document.querySelector('.offcanvas').classList.toggle('is-active');
    });
})();
