<div class="obpress-interest-slider-holder">
    <div class="obpress-interest-slider-swiper" data-allow-loop="<?= $settings['obpress_interest_allow_loop']; ?>" data-centered-slides="<?= $settings['obpress_interest_center_slides']; ?>" data-slides-per-view="<?= $settings['obpress_interest_slides_per_view']['size']; ?>" data-space-between="<?= $settings['obpress_interest_slider_space_between']['size']; ?>" data-transition="<?= $settings['obpress_interest_slider_transition']['size']; ?>" data-pagination="<?= $settings['obpress_interest_slide_pagination'] ?>"  data-number-of-slides="<?= $settings['obpress_interest_number_of_slides']; ?>" data-slides-per-view-mobile="<?= $settings['obpress_interest_slides_per_view_mobile']['size']; ?>" data-space-between-mobile="<?= $settings['obpress_interest_slider_space_between_mobile']['size']; ?>">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
            $slides = 12;
            $slide = 0;
            ?>
            <?php foreach ($settings['obpress_interest_slider_content'] as $interest_slide) : ?>
                <div class="swiper-slide">
                    <div class="obpress-swiper-image" style="background-image:url(<?php
                        if (isset($interest_slide['obpress_interest_image'])) {
                            echo $interest_slide['obpress_interest_image']['url'];
                        } 
                        ?>
                        )">
                    </div>
                    <div class="obpress-interest-info-holder">
                        <div class="obpress-interest-info">
                            <div class="obpress-interest-description">
                                <h5><?= $interest_slide['obpress_interest_slider_title'] ?></h5>
                                <p><?= substr($interest_slide['obpress_interest_slider_description'], 0, 180) . '...' ?></p>
                            </div>
                            <div class="obpress-offer-price-button">
                                <div class="obpress-offer-button">
                                    <a class="obpress-interest-more" href="/package?package_id=<?= $offer["rate_plan"]->RatePlanID ?>"><?php _e('See more','OBPress_Demo_Widgets') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="obpress-swiper-nav">
            <div class="swiper-button-prev obpress-swiper-prev" <?php if(!empty($prevIcon)){ echo 'style="background-image:<?= '. $prevIcon . '?>"';} ?>>
            </div>
            <div class="swiper-pagination obpress-swiper-pagination <?php if($settings['obpress_interest_slide_pagination'] == 'lines'){echo 'obpress-swiper-lines';} ?><?php if($settings_so['so_slide_pagination'] == 'disabled'){echo 'obpress-swiper-pagination-disabled';} ?>"></div>
            <div class="swiper-button-next obpress-swiper-next" <?php if(!empty($nextIcon)){ echo 'style="background-image:<?= '. $nextIcon . '?>"';} ?>>
            </div>
        </div>

    </div>
</div>
