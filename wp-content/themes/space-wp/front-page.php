<?php get_header(); ?>
<!-- Content -->
<!-- ========== MAIN CONTENT ========== -->
<?php $prefix = '__home_option_'; ?>
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="bg-img-hero-center"
         style="background-image: url(<?php echo get_option($prefix . 'banner_bg_image'); ?>">
        <div class="container space-2 space-4-top--lg space-3-bottom--lg">
            <div class="w-md-75">
                <!-- Title -->
                <div class="mb-7">
                    <span class="d-block text-white text-uppercase mb-2"><?php echo get_option($prefix . 'banner_text'); ?></span>
                    <h1 class="display-2 font-size-48--md-down text-white">
                        <?php echo get_option($prefix . 'typing_start'); ?>
                        <strong class="u-text-animation u-text-animation--typing"></strong>
                    </h1>
                </div>
                <!-- End Title -->
            </div>

            <div class="w-md-75 w-lg-50">
                <button type="submit"
                        class="btn btn-primary"><?php echo get_option($prefix . 'banner_button_text'); ?></button>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Features Section -->
    <div class="container space-2 space-3--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
            <span class="u-label u-label--sm u-label--purple mb-3"><?php echo get_option($prefix . 'features_label_text'); ?></span>
            <h2 class="h3"><?php echo get_option($prefix . 'features_title_text'); ?></h2>
            <p><?php echo get_option($prefix . 'features_subtitle_text'); ?></p>
        </div>
        <!-- End Title -->

        <div class="card-deck d-block d-lg-flex">
            <div class="card u-info-v1 mb-4 mb-lg-0">
                <!-- Icon Block -->
                <a class="card-body p-4" href="#">
                    <span class="d-block text-muted text-right font-weight-medium mb-3">01</span>
                    <img class="max-width-9 mb-2" src="<?php echo get_option($prefix . 'tab_image_1'); ?>"
                         alt="Image Description">
                    <h4 class="h6 text-dark mb-1"><?php echo get_option($prefix . 'tab_title_1'); ?></h4>
                    <p class="mb-0"><?php echo get_option($prefix . 'tab_title_description_1'); ?></p>
                </a>
                <!-- End Icon Block -->
            </div>

            <div class="card u-info-v1 mb-4 mb-lg-0">
                <!-- Icon Block -->
                <a class="card-body p-4" href="#">
                    <span class="d-block text-muted text-right font-weight-medium mb-3">02</span>
                    <img class="max-width-9 mb-2" src="<?php echo get_option($prefix . 'tab_image_2'); ?>"
                         alt="Image Description">
                    <h4 class="h6 text-dark mb-1"><?php echo get_option($prefix . 'tab_title_2'); ?></h4>
                    <p><?php echo get_option($prefix . 'tab_title_description_2'); ?></p>
                </a>
                <!-- End Icon Block -->
            </div>

            <div class="card u-info-v1 mb-4 mb-lg-0">
                <!-- Icon Block -->
                <a class="card-body p-4" href="#">
                    <span class="d-block text-muted text-right font-weight-medium mb-3">03</span>
                    <img class="max-width-9 mb-2" src="<?php echo get_option($prefix . 'tab_image_3'); ?>"
                         alt="Image Description">
                    <h4 class="h6 text-dark mb-1"><?php echo get_option($prefix . 'tab_title_3'); ?></h4>
                    <p><?php echo get_option($prefix . 'tab_title_description_3'); ?></p>
                </a>
                <!-- End Icon Block -->
            </div>

            <div class="card u-info-v1">
                <!-- Icon Block -->
                <a class="card-body p-4" href="#">
                    <span class="d-block text-muted text-right font-weight-medium mb-3">04</span>
                    <img class="max-width-9 mb-2" src="<?php echo get_option($prefix . 'tab_image_4'); ?>"
                         alt="Image Description">
                    <h4 class="h6 text-dark mb-1"><?php echo get_option($prefix . 'tab_title_4'); ?></h4>
                    <p><?php echo get_option($prefix . 'tab_title_description_4'); ?></p>
                </a>
                <!-- End Icon Block -->
            </div>
        </div>
    </div>
    <!-- End Features Section -->

    <!-- Responsive Section -->
    <div class="container space-2-bottom space-3-bottom--lg">
        <div class="gradient-overlay-half-dark-v1 bg-img-hero-center"
             style="background-image: url(<?php echo get_option($prefix . 'mobile_section_bg'); ?>);">
            <div class="w-lg-50 p-9">
                <!-- Title -->
                <div class="mb-7">
                    <span class="u-label u-label--sm u-label--light mb-2"><?php echo get_option($prefix . 'mobile_section_label_text'); ?></span>
                    <h2 class="text-white"><?php echo get_option($prefix . 'mobile_section_title_text'); ?></h2>
                    <p class="text-white"><?php echo get_option($prefix . 'mobile_section_subtitle_text'); ?></p>
                </div>
                <!-- End Title -->

                <!-- Button -->
                <button type="button" class="btn btn-xs btn-dark text-left mb-2 mb-md-0 mr-md-2">
            <span class="media align-items-center">
              <span class="fab fa-apple fa-3x mr-3"></span>
              <span class="d-block">
                <span class="d-block">Download on the</span>
                <strong class="d-block font-size-14">App Store</strong>
              </span>
            </span>
                </button>
                <!-- End Button -->

                <!-- Button -->
                <button type="button" class="btn btn-xs btn-dark text-left mb-2 mb-md-0">
            <span class="media align-items-center">
              <span class="fab fa-google-play fa-3x mr-3"></span>
              <span class="d-block">
                <span class="d-block">Get it on</span>
                <strong class="d-block font-size-14">Google Play</strong>
              </span>
            </span>
                </button>
                <!-- End Button -->
            </div>
        </div>
    </div>
    <!-- End Responsive Section -->

    <!-- About Section -->
    <div class="bg-gray-100">
        <div class="container space-2 space-3--lg">
            <div class="row justify-content-lg-between align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-9 mb-lg-0">
                    <!-- Title -->
                    <div class="mb-5">
                        <span class="u-label u-label--sm u-label--purple mb-3"><?php echo get_option($prefix . 'about_us_section_label'); ?></span>
                        <h2 class="h3"><?php echo get_option($prefix . 'about_us_section_title'); ?></h2>
                        <p><?php echo get_option($prefix . 'about_us_section_text'); ?></p>
                    </div>
                    <!-- End Title -->

                    <a class="btn btn-sm btn-primary" href="<?php echo home_url('about-us'); ?>">Learn More <span
                                class="fa fa-angle-right ml-2"></span></a>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <!-- Cubeportfolio -->
                    <div class="cbp"
                         data-layout="mosaic"
                         data-animation="quicksand"
                         data-x-gap="15"
                         data-y-gap="15"
                         data-load-more-selector="#cubeLoadMore"
                         data-load-more-action="auto"
                         data-load-items-amount="4"
                         data-media-queries='[
                {"width": 1500, "cols": 4},
                {"width": 1100, "cols": 4},
                {"width": 800, "cols": 3},
                {"width": 480, "cols": 2},
                {"width": 400, "cols": 2}
            ]'>
                        <!-- Item -->
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <img src="<?php echo stripslashes(get_option($prefix . 'about_us_image')); ?>"
                                     alt="Image Description">
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <img src="<?php echo stripslashes(get_option($prefix . 'about_us_image_2')); ?>"
                                     alt="Image Description">
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <img src="<?php echo stripslashes(get_option($prefix . 'about_us_image_3')); ?>"
                                     alt="Image Description">
                            </div>
                        </div>
                        <!-- End Item -->

                        <!-- Item -->
                        <div class="cbp-item">
                            <div class="cbp-caption">
                                <img src="<?php echo stripslashes(get_option($prefix . 'about_us_image_4')); ?>"
                                     alt="Image Description">
                            </div>
                        </div>
                        <!-- End Item -->
                    </div>
                    <!-- End Cubeportfolio -->
                </div>
            </div>
        </div>
    </div>
    <!-- End About Section -->

    <!-- Contact Us Section -->
    <div class="container space-2 space-3--lg">
        <div class="row justify-content-lg-between">
            <div class="col-md-6 mb-9 mb-md-0">
                <!-- Title -->
                <div class="mb-7">
                    <span class="u-label u-label--sm u-label--purple mb-3"><?php echo stripslashes(get_option($prefix . 'contact_us_section_label')); ?></span>
                    <h2 class="h3"><?php echo stripslashes(get_option($prefix . 'contact_us_section_title')); ?></h2>
                    <p><?php echo stripslashes(get_option($prefix . 'contact_us_section_text')); ?></p>
                </div>
                <!-- End Title -->

                <!-- Google Map -->
                <div class="bg-white shadow-sm rounded p-2 mb-5">
                    <div id="GMapCustomized-light"
                         class="js-g-map embed-responsive embed-responsive-21by9 min-height-280 rounded"
                         data-type="custom"
                         data-lat="40.674"
                         data-lng="-73.946"
                         data-zoom="12"
                         data-title="Agency"
                         data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
                         data-pin="true"
                         data-pin-icon="<?php echo get_template_directory_uri(); ?>/assets/img/map-markers/map-marker1.png"></div>
                </div>
                <!-- End Google Map -->

                <!-- Info -->
                <div class="media">
                    <h5 class="h6 d-flex mr-3">Office hours:</h5>
                    <div class="media-body">
                        <small class="d-block text-muted"><?php echo stripslashes(get_option($prefix . 'contact_us_section_office_hours')); ?></small>
                    </div>
                </div>
                <!-- End Info -->
            </div>

            <div class="col-md-6 col-lg-5 d-flex align-items-end gradient-overlay-half-dark-v2 bg-img-hero height-600 px-0"
                 data-bg-img-src="<?php echo stripslashes(get_option($prefix . 'contact_us_bg')); ?>">
                <div class="w-100 text-center shadow-sm p-5">
                    <!-- Title -->
                    <div class="mb-5">
                        <h3 class="text-white"><?php echo stripslashes(get_option($prefix . 'contact_us_section_city')); ?>
                            , <strong
                                    class="text-primary"><?php echo stripslashes(get_option($prefix . 'contact_us_section_country')); ?></strong>
                        </h3>
                        <p class="text-white"><?php echo stripslashes(get_option($prefix . 'contact_us_section_address')); ?></p>
                    </div>
                    <!-- End Title -->

                    <!-- Info -->
                    <div class="mb-5">
                        <h4 class="h6 text-primary">Phone number</h4>
                        <span class="d-block text-white"><?php echo stripslashes(get_option($prefix . 'contact_us_section_phone')); ?></span>
                    </div>
                    <!-- End Info -->

                    <!-- Input -->
                    <form class="js-validate js-form-message">
                        <div class="js-focus-state input-group form form--no-brd form--no-addon-brd">
                            <input type="email" class="form-control form__input" name="email" required
                                   placeholder="Enter your email address"
                                   aria-label="Enter your email address">
                            <span class="input-group-append form__append">
                  <button type="submit" class="btn btn-primary">Subscribe</button>
                </span>
                        </div>
                    </form>
                    <!-- End Input -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Us Section -->

    <hr class="my-0">

    <!-- Clients -->
    <div class="container space-2">
        <div class="js-slick-carousel u-slick"
             data-autoplay="true"
             data-speed="5000"
             data-infinite="true"
             data-slides-show="6"
             data-responsive='[{
             "breakpoint": 1200,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 992,
             "settings": {
               "slidesToShow": 4
             }
           }, {
             "breakpoint": 768,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 576,
             "settings": {
               "slidesToShow": 3
             }
           }, {
             "breakpoint": 480,
             "settings": {
               "slidesToShow": 2
             }
           }]'>
            <?php $slides = get_option($prefix . 'bottom_slides'); ?>
            <?php foreach ($slides as $slide): ?>
                <?php if ($slide): ?>
                    <div class="js-slide">
                        <img class="u-clients" src="<?php echo stripslashes($slide); ?>" alt="Image Description">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- End Clients -->
</main>
<!-- ========== END MAIN CONTENT ========== -->
<!-- End Content -->
<?php get_footer(); ?>
