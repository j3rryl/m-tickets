const swiper = new Swiper('.swiper', {
    autoplay: {
        delay: 5000,
      },
    //Optional parameters
    // direction: 'horizontal',
    loop: true,
    effect: 'fade',
    spaceBetween: 30,
  
    // Pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // Scrollbar
    // scrollbar: {
    //   el: '.swiper-scrollbar',
    // },
  });