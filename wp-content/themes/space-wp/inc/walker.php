<?php


class Space_Walker_Nav extends Walker_Nav_Menu
{
    // add classes to ul sub-menus
    function start_lvl( &$output, $depth, $args ) {
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        $mega ='row list-unstyled u-header__mega-menu-list';
        // build html
        if($display_depth == 2 && $args->megaStart){
            $output .= "\n" . $indent . '<ul class="list-unstyled">' . "\n";
        }elseif($args->megamenu){
            $output .= "\n" . $indent . '<ul class="row list-unstyled u-header__mega-menu-list">' . "\n";
            $args->megaStart = true;
        }else{
            $output .= "\n" . $indent . '<ul class="list-inline hs-sub-menu u-header__sub-menu mb-0" style="min-width: 220px;" aria-labelledby="'.$args->menuLabel.'MegaMenu">' . "\n";
        }
    }

    // add main/sub classes to li's and links
    function start_el( &$output, $item, $depth, $args ) {
        global $wp_query;
        $menuType = get_post_meta( $item->ID, '_menu_item_custom', true );
//        if($menuType){
//            var_dump($menuType); die;
//        }
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'nav-item u-header__nav-item' : 'sub-menu-item' ),
            ( $depth >=0 && in_array('menu-item-has-children', $item->classes) && $menuType !="hs-has-mega-menu" ? 'hs-has-sub-menu' : '' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        //$classes = empty( $item->classes ) ? array() : (array) $item->classes;
        //$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
        // build html
        if($depth == 0)
            $output .= $indent . '<li class="' . $depth_class_names .' '.($menuType == 'u-header__nav-item-btn'? "u-header__nav-item-btn": ""). ' '.($menuType == "hs-has-mega-menu"? "hs-has-mega-menu": ""). '" data-position data-event="hover" data-animation-in="fadeInUp" data-animation-out="fadeOut">';
        if($depth == 1 && !$args->megaStart)
            $output .= $indent . '<li class="dropdown-item hs-has-sub-menu ">';
        if($depth > 1 && !$args->megaStart)
            $output .= $indent . '<li class="dropdown-item u-header__sub-menu-list-item">';
        if($depth == 1 && $args->megaStart)
            $output .= $indent . '<li class="col-sm-6 col-lg-2 u-header__mega-menu-col mb-3 mb-lg-0">';
        if($depth == 2 && $args->megaStart)
            $output .= $indent . '<li>';
        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        if($menuType == 'u-header__nav-item-btn'){
            $attributes .= ' role="button" data-modal-target="#signupModal" data-overlay-color="#151b26"';
            $args->link_before = '<span class="fa fa-user-circle mr-1"></span>';
            $attributes .= ' class="btn btn-sm btn-primary" ';
        }elseif($depth == 2 && $args->megaStart){
            $attributes .= ' class="nav-link u-header__sub-menu-nav-link px-0" ';
        }else{
            $attributes .= ' class="' . ( $depth == 0 ? 'nav-link u-header__nav-link' : 'nav-link u-header__sub-menu-nav-link' ) . '"';
        }
        $attributes .= ( $depth == 0 ? 'aria-haspopup="true" aria-expanded="false" aria-labelledby="homeSubMenu"':'');
        if($depth == 0 && in_array('menu-item-has-children', $item->classes)) {
            $args->link_after = '<span class="fa fa-angle-down u-header__nav-link-icon"></span>';
        }elseif($depth >= 1 && in_array('menu-item-has-children', $item->classes)){
            $args->link_after = '<span class="fa fa-angle-right u-header__sub-menu-nav-link-icon"></span>';
        }else{
            $args->link_after = '';
        }
        if($depth == 0 && $menuType =="hs-has-mega-menu"){
            $args->after = '<div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="PagesMegaMenu">
                  <div class="u-header__mega-menu-wrapper-v1">';
            $args->megamenu = true;
        }else{
            $args->after = '';
            $args->megamenu = false;
        }
        if($depth == 1 && $args->megaStart) {
            $item_output = '<span class="u-header__sub-menu-title">' . $item->title . '</span>';
        }else {
            $item_output = sprintf('%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                $args->before,
                $attributes,
                $args->link_before,
                apply_filters('the_title', $item->title, $item->ID),
                $args->link_after,
                $args->after
            );
        }
        $args->menuLabel=$item->title;
        // build html
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    function end_el(&$output, $item, $depth, $args){
        $menuType = get_post_meta( $item->ID, '_menu_item_custom', true );
        if($depth == 0 && $menuType =="hs-has-mega-menu"){
            $args->megaStart = false;
            $output .= '</div></div>';
        }
        $output .= "</li>";
    }


}

