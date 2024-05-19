var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  loop: true,

  pagination: {
    el: ".drinkbar__content",
    clickable: true,
  },
  navigation: {
    nextEl: ".drinks-hero__next",
    prevEl: ".drinks-hero__previous",
  },
});
