<script>

    var slides

</script>
<div class="obpress-spa-top-holder" data-slides-per-view="<?php if ($current_url == "restaurants") { echo '2'; } else { echo '1'; } ?>">
    <div class="obpress-spa-top-widget-holder">
        <div class="obpress-spa-top-widget-info">
            <h4><?= $settings['obpress_custom_demo_bot_demo'][0]['obpress_custom_demo_bot_location'] ?></h4>
            <h3><?= $settings['obpress_custom_demo_bot_demo'][0]['obpress_custom_demo_bot_title'] ?></h3>
            <p class="obpress-spa-top-description"><?= strip_tags($settings['obpress_custom_demo_bot_demo'][0]['obpress_custom_demo_bot_description']) ?></p>
            <span class="obpress-spa-top-line"></span>
            <p class="obrpress-spa-top-time-title">Working Hours</p>
            <p class="obpress-spa-top-time"><strong>Monday to Friday:</strong> <span class="obpress-spa-time-weekday"><?= $settings['obpress_custom_demo_bot_demo'][0]['obpress_custom_demo_bot_workdays'] ?></span></p> 
            <p class="obpress-spa-top-time"><strong>Saturday and Sunday:</strong> <span class="obpress-spa-time-weekend"><?= $settings['obpress_custom_demo_bot_demo'][0]['obpress_custom_demo_bot_weekends'] ?></span></p> 
            <a href="/chain-results" class="obpress-spa-top-widget-button">Go to Hotel</a>
        </div>
        <div class="obpress-spa-top-widget-gallery">
            <div class="obpress-spa-top-swiper">
                <!-- Slider main container -->
                <div class="swiper-container obpress-spa-top-swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach($settings['obpress_custom_demo_bot_demo'] as $demo): ?>
                            <div class="swiper-slide obpress-spa-top-swiper-slide" data-location="<?= $demo['obpress_custom_demo_bot_location']; ?>" data-title="<?= $demo['obpress_custom_demo_bot_title']; ?>" data-description="<?= $demo['obpress_custom_demo_bot_description']; ?>" data-weekday-time="<?= $demo['obpress_custom_demo_bot_workdays']; ?>" data-weekend-time="<?= $demo['obpress_custom_demo_bot_weekends']; ?>">
                                <div class="obpress-spa-top-swiper-image" style="background-image:url(<?= $demo['obpress_custom_demo_bot_image']['url'] ?>);"></div>
                                <div class="obpress-swiper-overlay">
                                    <h4><?= $demo['obpress_custom_demo_bot_title'] ?></h4>
                                    <p><?= $demo['obpress_custom_demo_bot_location'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>                        
                    </div>
                </div>
            </div>
            <div class="obpress-spa-top-swiper-nav">
                <div class="swiper-button-prev" style="background-image:url(<?= $prevIcon ?>)"></div>
                <div class="swiper-pagination <?php if($settings['obpress_custom_demo_bot_slide_pagination'] == 'lines'){echo 'obpress-custom-demo-bot-swiper-lines';} ?><?php if($settings['obpress_custom_demo_bot_slide_pagination'] == 'disabled'){echo 'obpress-custom-demo-bot-pagination-disabled';} ?>"></div>
                <div class="swiper-button-next" style="background-image:url(<?= $nextIcon ?>)"></div>
            </div>
        </div>
    </div>
</div>