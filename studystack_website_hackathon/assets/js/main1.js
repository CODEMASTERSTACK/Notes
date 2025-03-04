/*=============== SWIPER JS ===============*/
let swiperCards = new Swiper('.card__content', {
  loop: true,
  spaceBetween: 3,
  grabCursor: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  breakpoints: {
    600: {
      slidesPerView: 2,
    },
  },
});
