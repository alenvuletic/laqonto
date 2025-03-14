const swiper = new Swiper('.slider', {
  loop: true,
  grabCursor: true,
  spaceBetween: 20,
  pagination: {
    el: '.swiper-pagination',
    type: 'fraction',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    1024: {
      slidesPerView: 2,
    },
  },
});
