jQuery(window).on("elementor/frontend/init", function () {
  elementorFrontend.hooks.addAction(
    "frontend/element_ready/DemoInterestSlider.default",
    function ($scope, $) {
      var swiperSettings = {};
      var swiperSelector = jQuery(".obpress-interest-slider-swiper");

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

      jQuery(".obpress-interest-slider-swiper")
        .find(".obpress-offer-info-holder")
        .css(
          "-webkit-transition",
          "opacity " + swiperSettings.speed / 1000 + "s ease-in"
        );

      const swiper = new Swiper(".obpress-interest-slider-swiper", {
        // Optional parameters
        direction: "horizontal",
        loop: swiperSettings.loop,
        speed: swiperSettings.speed,
        slidesPerView: swiperSettings.slidesPerView,
        centeredSlides: swiperSettings.centeredSlides,
        spaceBetween: swiperSettings.spaceBetween,
        autoHeight: true,

        // If we need pagination
        pagination: {
          el: ".obpress-interest-slider-swiper .swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".obpress-interest-slider-swiper .swiper-button-next",
          prevEl: ".obpress-interest-slider-swiper .swiper-button-prev",
        },
      });

      swiper.on("init", function () {
        console.log("asd");
      });

      // const swiper = new Swiper(".obpress-interest-slider-swiper", {
      //   speed: 400,
      //   spaceBetween: 100,
      // });
    }
  );
});
