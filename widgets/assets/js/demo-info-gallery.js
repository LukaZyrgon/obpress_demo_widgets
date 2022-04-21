jQuery( window ).on( 'elementor/frontend/init', function() {
  //hook name is 'frontend/element_ready/{widget-name}.{skin} - i dont know how skins work yet, so for now presume it will
  //always be 'default', so for example 'frontend/element_ready/slick-slider.default'
  //$scope is a jquery wrapped parent element
  elementorFrontend.hooks.addAction( 'frontend/element_ready/SpaTop.default', function($scope, $){
    var swiperSettings = {};
    var swiperSelector = jQuery(".obpress-spa-swiper");

    swiperSettings.loop = swiperSelector.attr("data-allow-loop");
    swiperSettings.centeredSlides = swiperSelector.attr(
      "data-centered-slides"
    );
    swiperSettings.slidesPerView = swiperSelector.attr(
      "data-slides-per-view"
    );
    swiperSettings.spaceBetween = parseInt(
      swiperSelector.attr("data-space-between")
    );
    swiperSettings.speed =
      parseFloat(swiperSelector.attr("data-transition")) * 1000;
    swiperSettings.pagination = swiperSelector.attr("data-pagination");


    if (swiperSettings.loop != "true") {
      swiperSettings.loop = false;
    } else {
      swiperSettings.loop = true;
    }

    if (swiperSettings.centeredSlides != "true") {
      swiperSettings.centeredSlides = false;
    } else {
      swiperSettings.centeredSlides = true;
    }
  

    const swiper = new Swiper(".obpress-spa-swiper .swiper-container", {
      // Optional parameters
      direction: "horizontal",
      loop: swiperSettings.loop,
      speed: swiperSettings.speed,
      slidesPerView: swiperSettings.slidesPerView,
      spaceBetween: swiperSettings.spaceBetween,
      centeredSlides:swiperSettings.centeredSlides,
      autoHeight: true,

  
      // If we need pagination
      pagination: {
        el: ".obpress-spa-swiper .swiper-pagination",
      },
  
      // Navigation arrows
      navigation: {
        nextEl: ".obpress-spa-swiper .swiper-button-next",
        prevEl: ".obpress-spa-swiper .swiper-button-prev",
      },
    });
  });
} );
