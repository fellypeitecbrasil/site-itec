<?php
//Menu Register
function zodkoo_register_my_menus() {
register_nav_menus(
    array(
        'primary' => esc_html__( 'Primary Menu','zodkoo' ),
    )
);
}
add_action( 'after_setup_theme', 'zodkoo_register_my_menus' );

//Menu Walker

class zodkoo_Walker_Nav_Menu extends Walker_Nav_Menu {

// add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = array() ){
        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'submenu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // build html
        $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
    }

// add main/sub classes to li's and links
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $item_output = '';
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // depth dependent classes
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // passed classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // build html
        if(strpos($class_names, 'menu-item-has-children') != true) {
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
        }
        else{
            $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="has-submenu ' . $depth_class_names . ' ' . $class_names . '">';
        }
        // link attributes
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        //echo $classes[6];
         if(strpos($class_names, 'menu-item-has-children') != true) {
            $attributes .= ' class="menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '"';
        }
        else{
            $attributes .= ' class="menu-link ' . ($depth > 0 ? 'sub-menu-link' : 'main-menu-link') . '" ';
        }
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );

// build html
        //echo $classes[6];
         
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
       
        if(strpos($class_names, 'menu-item-has-children') == false || strpos($depth_class_names, 'menu-item-depth-0') != true) {
                     
        }else{
            $output .= '<span class="fa fa-caret-down menu-xs-arrow"></span>';
        }
        if(strpos($class_names, 'menu-item-has-children') == false || strpos($depth_class_names, 'menu-item-depth-1') != true){
               
        } else {
            $output .= '<span class="fa fa-caret-down menu-xs-arrow menu-xs-arrow-sub"></span>';
        }
    }
}