let swiper1 = new Swiper('.mySwiper1', {
  centeredSlides: true,
  spaceBetween: 10,
  slidesPerView: 'auto',
  autoplay: {
    delay: 0,
    reverseDirection: true,
  },
  speed: 3000,
  loop: true,
});

let swiper2 = new Swiper('.mySwiper2', {
  centeredSlides: true,
  spaceBetween: 10,
  slidesPerView: 'auto',
  autoplay: {
    delay: 0,
    reverseDirection: false,
  },
  speed: 3000,
  loop: true,
});
