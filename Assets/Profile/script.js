var swiper = new Swiper(".slide-container", {
  slidesPerView: 3,
  spaceBetween: 63,
  slidesPerGroup: 3,
  loopFillGroupWithBlank: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    815: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});
