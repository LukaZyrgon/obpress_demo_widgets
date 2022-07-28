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
                <?php foreach($settings['obpress_custom_slider_top'] as $image): ?>
                    <div class="swiper-slide">
                        <div class="obpress-spa-swiper-image" style="background-image:url(<?= $image['obpress_custom_slider_top_gallery']['url'] ?>)">
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
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34.964" height="34.964" viewBox="0 0 34.964 34.964">
                        <g id="back" data-name="back" transform="translate(34.964 34.964) rotate(180)">
                            <g class="custtom_bg_color" id="Rectangle_4721" data-name="Rectangle 4721" transform="translate(0 0)" fill="none" stroke="#191919" stroke-width="1">
                            <rect width="34.964" height="34.964" stroke="none"/>
                            <rect x="0.5" y="0.5" width="33.964" height="33.964" fill="none"/>
                            </g>
                            <path class="custtom_color" id="Path_10521" data-name="Path 10521" d="M0,0,7.095,6.845,13.94,0" transform="translate(20.049 9.937) rotate(90)" fill="none" stroke="#191919" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>
                    </svg>
                </div>
                <div class="swiper-pagination <?php if($settings['obpress_custom_slider_top_slide_pagination'] == 'lines'){echo 'obpress-spa-swiper-lines';} ?><?php if($settings['obpress_custom_slider_top_slide_pagination'] == 'disabled'){echo 'obpress-spa-swiper-pagination-disabled';} ?>"></div>
                <div class="swiper-button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="34.964" height="34.964" viewBox="0 0 34.964 34.964">
                        <g id="next" data-name="next" transform="translate(34.964 34.964) rotate(180)">
                            <g class="custtom_bg_color" id="Rectangle_4721" data-name="Rectangle 4721" transform="translate(0 0)" fill="none" stroke="#191919" stroke-width="1">
                            <rect width="34.964" height="34.964" stroke="none"/>
                            <rect x="0.5" y="0.5" width="33.964" height="33.964" fill="none"/>
                            </g>
                            <path class="custtom_color" id="Path_10521" data-name="Path 10521" d="M0,0,7.095,6.845,13.94,0" transform="translate(20.049 9.937) rotate(90)" fill="none" stroke="#191919" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>
                    </svg>
                </div>
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