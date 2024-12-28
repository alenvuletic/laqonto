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
})();
