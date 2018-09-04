<footer class="bg-dark">
    <div class="container space-2">
        <div class="row justify-content-md-between">
            <div class="col-6 col-md-3 col-lg-2 order-lg-3 mb-7 mb-lg-0">
                <?php dynamic_sidebar('footer-widget-1'); ?>
            </div>

            <div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">
                <?php dynamic_sidebar('footer-widget-2'); ?>
            </div>

            <div class="col-6 col-md-3 col-lg-2 order-lg-5 mb-7 mb-lg-0">
                <?php dynamic_sidebar('footer-widget-3'); ?>
            </div>

            <div class="col-6 col-md-3 col-lg-2 order-lg-6 mb-7 mb-lg-0">
                <?php dynamic_sidebar('footer-widget-4'); ?>
            </div>

            <div class="col-lg-4 order-lg-1 d-flex align-items-start flex-column">
                <!-- Logo -->
                <a class="d-inline-block mb-5" href="<?php echo get_template_directory_uri(); ?>/html/home/index.html"
                   aria-label="Space">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/logos/logo-short-white.svg" alt="Logo"
                         style="width: 40px; max-width: 100%;">
                </a>
                <!-- End Logo -->

                <!-- Language -->
                <div class="btn-group d-block position-relative mb-4 mb-lg-auto">
                    <a id="footerLanguageInvoker"
                       class="btn-text-secondary d-flex align-items-center u-unfold--language-btn rounded py-2 px-3"
                       href="javascript:;" role="button"
                       aria-controls="footerLanguage"
                       aria-haspopup="true"
                       aria-expanded="false"
                       data-unfold-event="click"
                       data-unfold-target="#footerLanguage"
                       data-unfold-type="css-animation"
                       data-unfold-duration="300"
                       data-unfold-delay="300"
                       data-unfold-hide-on-scroll="false"
                       data-unfold-animation-in="slideInUp"
                       data-unfold-animation-out="fadeOut">
                        <span class="font-size-14">English</span>
                        <span class="fa fa-angle-down u-unfold__icon-pointer u-unfold--language-icon-pointer ml-4"></span>
                    </a>

                    <!-- Content -->
                    <div id="footerLanguage" class="u-unfold u-unfold--language bottom-0 left-0"
                         aria-labelledby="footerLanguageInvoker">
                        <div class="py-6 px-5">
                            <h4 class="h6 mb-4">Select your language</h4>

                            <div class="row">
                                <div class="col-6">
                                    <!-- List of Languages -->
                                    <div class="list-group list-group-borderless list-group-flush">
                                        <a class="active d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/us.svg"
                                                 alt="United States Flag">
                                            English
                                        </a>
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/fr.svg"
                                                 alt="France Flag">
                                            Français
                                        </a>
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/de.svg"
                                                 alt="Germany Flag">
                                            Deutsch
                                        </a>
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/pt.svg"
                                                 alt="Portugal Flag">
                                            Português
                                        </a>
                                    </div>
                                    <!-- End List of Languages -->
                                </div>

                                <div class="col-6">
                                    <!-- List of Languages -->
                                    <div class="list-group list-group-borderless list-group-flush">
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/es.svg"
                                                 alt="Spain Flag">
                                            Español
                                        </a>
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/it.svg"
                                                 alt="Italy Flag">
                                            Italiano
                                        </a>
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/ru.svg"
                                                 alt="Russian Flag">
                                            Русский
                                        </a>
                                        <a class="d-flex align-items-center list-group-item list-group-item-action"
                                           href="#">
                                            <img class="max-width-3 mr-2"
                                                 src="<?php echo get_template_directory_uri(); ?>/assets/vendor/flag-icon-css/flags/4x3/tr.svg"
                                                 alt="Turkey Flag">
                                            Türkçe
                                        </a>
                                    </div>
                                    <!-- End List of Languages -->
                                </div>
                            </div>
                        </div>

                        <!-- Signup -->
                        <a class="u-unfold--language__link p-5"
                           href="<?php echo get_template_directory_uri(); ?>/html/pages/signup-simple.html">
                            <small class="d-block text-muted mb-1">More languages coming soon.</small>
                            <small class="d-block">Signup to get notified <span
                                        class="fa fa-arrow-right u-unfold__icon-pointer"></span></small>
                        </a>
                        <!-- End Signup -->
                    </div>
                    <!-- End Content -->
                </div>
                <!-- End Language -->

                <p class="small text-muted">All rights reserved. &copy; Space. 2018 Htmlstream.</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<?php $prefix = '__home_option_'; ?>

<!-- JS Plugins Init. -->
<script>
    // initialization of google map
    function initMap() {
        $.HSCore.components.HSGMap.init('.js-g-map');
    }

    $(window).on('load', function () {
        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            pageContainer: $('.container'),
            breakpoint: 767,
            hideTimeOut: 0
        });
    });

    $(document).on('ready', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#header'));

        // initialization of unfold component
        $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
            afterOpen: function () {
                if (!$('body').hasClass('IE11')) {
                    $(this).find('input[type="search"]').focus();
                }
            }
        });

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate', {
            rules: {
                confirmPassword: {
                    equalTo: '#password'
                }
            }
        });

        // initialization of forms
        $.HSCore.helpers.HSFocusState.init();

        // initialization of malihu scrollbar
        $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

        // initialization of autonomous popups
        $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
            autonomous: true
        });

        // initialization of show animations
        $.HSCore.components.HSShowAnimation.init('.js-animation-link');

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of text animation (typing)
        var typed = new Typed(".u-text-animation.u-text-animation--typing", {
            strings: ["<?php echo str_replace(',', '", "', get_option($prefix.'typing_words')); ?>"],
            typeSpeed: 60,
            loop: true,
            backSpeed: 25,
            backDelay: 3000
        });

        // initialization of cubeportfolio
        $.HSCore.components.HSCubeportfolio.init('.cbp');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
    });
</script>
<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async defer></script>

</body>
</html>