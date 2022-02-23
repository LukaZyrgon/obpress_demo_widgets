<div class="obpress-spa-offer-holder">
    <div class="obpress-spa-offer-holder-title desktop">
        <p class="obpress-spa-offer-holder-type"><?= $settings['obpress_custom_demo_type'] ?></p>
        <h2><?= $settings['obpress_custom_demo_title']?></h2>
        <div class="obpress-spa-offer-holder-description">
           <?= $settings['obpress_custom_demo_description']?>
        </div>
        <a href="/chain-results" class="obpress-spa-widget-button"><?= $settings['obpress_custom_button_content']?></a>
    </div>
    <div class="obpress-spa-swiper" data-allow-loop="<?= $settings['obpress_custom_slider_top_allow_loop']; ?>" data-centered-slides="<?= $settings['obpress_custom_slider_top_center_slides']; ?>" data-slides-per-view="<?= $settings['obpress_custom_slider_top_slides_per_view']['size']; ?>" data-space-between="<?= $settings['obpress_custom_slider_top_slider_space_between']['size']; ?>" data-transition="<?= $settings['obpress_custom_slider_top_slider_transition']['size']; ?>" data-pagination="<?= $settings['obpress_custom_slider_top_slide_pagination'] ?>">
        <!-- Slider main container -->
        <div class="swiper-container">
        <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php if(isset($settings['obpress_custom_slider_top_gallery']) && !empty($settings['obpress_custom_slider_top_gallery'])): ?>
                <?php foreach($settings['obpress_custom_slider_top_gallery'] as $image): ?>
                    <div class="swiper-slide">
                        <div class="obpress-spa-swiper-image" style="background-image:url(<?= $image['url'] ?>)">
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php else: ?>
                    <div class="swiper-slide">
                        <div class="obpress-spa-swiper-image" style="background-image:url(<?= \Elementor\Utils::get_placeholder_image_src() ?>)"></div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="obpress-spa-swiper-nav">
                <div class="swiper-button-prev" style="background-image:url(<?= $prevIcon ?>)"></div>
                <div class="swiper-pagination <?php if($settings['obpress_custom_slider_top_slide_pagination'] == 'lines'){echo 'obpress-spa-swiper-lines';} ?><?php if($settings['obpress_custom_slider_top_slide_pagination'] == 'disabled'){echo 'obpress-spa-swiper-pagination-disabled';} ?>"></div>
                <div class="swiper-button-next" style="background-image:url(<?= $nextIcon ?>)"></div>
            </div>
        </div>
    </div>
    <div class="obpress-spa-offer-holder-title mobile">
        <div class="obpress-spa-offer-holder-description">
           <?= $settings['obpress_custom_demo_description']?>
        </div>
        <a href="/chain-results" class="obpress-spa-widget-button"><?= $settings['obpress_custom_button_content']?></a>
    </div>           
</div>