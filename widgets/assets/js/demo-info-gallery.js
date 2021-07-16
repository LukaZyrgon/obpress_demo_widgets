jQuery(window).on("elementor/frontend/init", function () {
  //hook name is 'frontend/element_ready/{widget-name}.{skin} - i dont know how skins work yet, so for now presume it will
  //always be 'default', so for example 'frontend/element_ready/slick-slider.default'
  //$scope is a jquery wrapped parent element
  elementorFrontend.hooks.addAction(
    "frontend/element_ready/SpaBot.default",
    function ($scope, $) {
      const swiper = new Swiper(".obpress-spa-top-swiper .swiper-container", {
        // Optional parameters
        direction: "horizontal",
        slidesPerView: 1,
        slidesPerColumn: 3,
        speed: 1000,
        //   slidesPerColumnFill: "row",
        slidesPerGroup: 1,
        //   spaceBetween: 1,

        // If we need pagination
        pagination: {
          el: ".obpress-spa-top-widget-gallery .swiper-pagination",
        },

        // Navigation arrows
        navigation: {
          nextEl: ".obpress-spa-top-widget-gallery .swiper-button-next",
          prevEl: ".obpress-spa-top-widget-gallery .swiper-button-prev",
        },
      });
      jQuery(".obpress-swiper-overlay")
        .first()
        .addClass("obpress-overlay-selected");

      jQuery(document).on(
        "click",
        ".obpress-spa-top-swiper-slide",
        function () {
          jQuery(this)
            .find(".obpress-swiper-overlay")
            .addClass("obpress-overlay-selected");

          jQuery(".obpress-spa-top-swiper-slide")
            .not(this)
            .each(function () {
              jQuery(this)
                .find(".obpress-swiper-overlay")
                .removeClass("obpress-overlay-selected");
            });
        }
      );

      jQuery(".obpress-spa-top-swiper-slide")
        .on("mouseenter", function () {
          jQuery(this).find(".obpress-swiper-overlay").css("opacity", "0");

          jQuery(".obpress-spa-top-swiper-slide")
            .not(this)
            .each(function () {
              jQuery(this).find(".obpress-swiper-overlay").css("opacity", "1");
            });

          if (
            jQuery(this)
              .find(".obpress-swiper-overlay")
              .hasClass("obpress-overlay-selected") == false
          ) {
            jQuery(".obpress-overlay-selected").css("opacity", "1");
          }
        })
        .on("mouseleave", function () {
          jQuery(this).find(".obpress-swiper-overlay").css("opacity", "1");

          jQuery(".obpress-overlay-selected").css("opacity", "0");
        });
    
        jQuery('.obpress-spa-top-swiper .swiper-slide').on('click', function(){
          var location = jQuery(this).attr('data-location');
          var title = jQuery(this).attr('data-title');
          var description = jQuery(this).attr('data-description');
          var weekday = jQuery(this).attr('data-weekday-time');
          var weekend = jQuery(this).attr('data-weekend-time');

          description = description.replace(/(<([^>]+)>)/ig,"");

          jQuery('.obpress-spa-top-widget-info h4').text(location);
          jQuery('.obpress-spa-top-widget-info h3').text(title);
          jQuery('.obpress-spa-top-description').text(description);
          jQuery('.obpress-spa-time-weekday').text(weekday);
          jQuery('.obpress-spa-time-weekend').text(weekend);
        });
      }
  );
});
