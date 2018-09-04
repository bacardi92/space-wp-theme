<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<!-- Skippy -->
<a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
        <span class="u-skiplink-text">Skip to main content</span>
    </div>
</a>
<!-- End Skippy -->

<!-- ========== HEADER ========== -->
<header id="header"
        class="u-header u-header--modern u-header--bordered u-header--left-aligned-nav u-header--sticky-top-lg">
    <div class="u-header__section">
        <div id="logoAndNav" class="container-fluid">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
                <!-- Logo -->
                <div class="u-header__navbar-brand-wrapper">
                    <a class="navbar-brand u-header__navbar-brand" href="<?php echo home_url('/'); ?>"
                       aria-label="Space">
                        <img class="u-header__navbar-brand-default"
                             src="<?php echo THEME_DIR_URI . 'assets/svg/logos/logo.svg'; ?>" alt="Logo">
                        <img class="u-header__navbar-brand-mobile"
                             src="<?php echo THEME_DIR_URI . 'assets/svg/logos/logo-short.svg'; ?>" alt="Logo">
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar"
                        data-toggle="collapse"
                        data-target="#navBar">
                    <span class="d-none d-sm-inline-block">Menu</span>
                    <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <?php wp_nav_menu(
                        array(
                            'theme_location' => "primary",
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse u-header__navbar-collapse py-0',
                            'container_id' => 'navBar',
                            'menu_class' => 'navbar-nav u-header__navbar-nav',
                            'walker' => new Space_Walker_Nav

                        )
                ); ?>

                <ul class="navbar-nav flex-row u-header__secondary-nav">
                    <!-- Shopping Cart -->
                    <li class="nav-item u-header__navbar-icon-wrapper u-header__navbar-icon">
                        <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-dark"
                           href="javascript:;" role="button"
                           aria-controls="shoppingCartDropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-unfold-event="click"
                           data-unfold-target="#shoppingCartDropdown"
                           data-unfold-type="css-animation"
                           data-unfold-duration="300"
                           data-unfold-delay="300"
                           data-unfold-hide-on-scroll="true"
                           data-unfold-animation-in="slideInUp"
                           data-unfold-animation-out="fadeOut">
                            <span class="fa fa-shopping-cart btn-icon__inner"></span>
                        </a>

                        <div id="shoppingCartDropdown"
                             class="u-unfold u-unfold--cart text-center border rounded-0 right-0 p-7"
                             aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px;">
                <span class="u-icon u-icon--primary u-icon--md rounded-circle mb-3">
                  <span class="fa fa-shopping-basket u-icon__inner"></span>
                </span>
                            <span class="d-block">Your Cart is Empty</span>
                        </div>
                    </li>
                    <!-- End Shopping Cart -->

                    <!-- Account Signin -->
                    <li class="nav-item u-header__navbar-icon">
                        <!-- Account Sidebar Toggle Button -->
                        <a id="sidebarNavToggler" class="btn btn-xs btn-icon btn-text-dark" href="javascript:;"
                           role="button"
                           aria-controls="sidebarContent"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-unfold-event="click"
                           data-unfold-hide-on-scroll="false"
                           data-unfold-target="#sidebarContent"
                           data-unfold-type="css-animation"
                           data-unfold-animation-in="fadeInRight"
                           data-unfold-animation-out="fadeOutRight"
                           data-unfold-duration="500">
                            <span class="fa fa-bars btn-icon__inner font-size-13"></span>
                        </a>
                        <!-- End Account Sidebar Toggle Button -->
                    </li>
                    <!-- End Account Signin -->
                </ul>
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>