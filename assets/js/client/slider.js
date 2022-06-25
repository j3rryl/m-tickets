$(document).ready(function () {
  var cube = new Swiper(".cube-swipe", {
    autoplay: {
      delay: 12000,
    },
    effect: "cube",
    mousewheel: true,
    loop: true,
    cubeEffect: {
      shadow: true,
      slideShadows: true,
      shadowOffset: 20,
      shadowScale: 0.94,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  var categories = new Swiper(".categories", {
    direction: "horizontal",
    loop: true,
    mousewheel: true,
    slidesPerView: 4,
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});
