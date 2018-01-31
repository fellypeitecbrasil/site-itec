<?php
//start defualt sidebar
function zodkoo_sidebar_widgets_init() {
register_sidebar( array(
'name'          => esc_html__( 'Sidebar Default', 'zodkoo' ),
'id'            => 'sidebar',
'description'   => esc_html__( 'Widgets in this area will be shown on all posts and pages.', 'zodkoo' ),
'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget'  => '</div>',
'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
) );

register_sidebar(array(
'name' => esc_html__('Footer Sidebar one','zodkoo'),
'id' => 'footer-sidebar-one',
'description'   => esc_html__( 'Widgets in this area will be shown on Footer.', 'zodkoo' ),
'before_widget' => '<div id="%1$s" class="widget %2$s list-unstyled">',
'after_widget' => '</div>',
'before_title' => '<h5 class="widgettitle">',
'after_title' => '</h5>',
));

register_sidebar(array(
'name' => esc_html__('Footer Sidebar Two','zodkoo'),
'id' => 'footer-sidebar-two',
'description'   => esc_html__( 'Widgets in this area will be shown on Footer.', 'zodkoo' ),
'before_widget' => '<div id="%1$s" class="widget %2$s list-unstyled">',
'after_widget' => '</div>',
'before_title' => '<h5 class="widgettitle">',
'after_title' => '</h5>',
));

register_sidebar(array(
'name' => esc_html__('Footer Sidebar Three','zodkoo'),
'id' => 'footer-sidebar-three',
'description'   => esc_html__( 'Widgets in this area will be shown on Footer.', 'zodkoo' ),
'before_widget' => '<div id="%1$s" class="widget %2$s list-unstyled">',
'after_widget' => '</div>',
'before_title' => '<h5 class="widgettitle">',
'after_title' => '</h5>',
));

register_sidebar(array(
'name' => esc_html__('Footer Sidebar Four','zodkoo'),
'id' => 'footer-sidebar-four',
'description'   => esc_html__( 'Widgets in this area will be shown on Footer.', 'zodkoo' ),
'before_widget' => '<div id="%1$s" class="widget %2$s list-unstyled">',
'after_widget' => '</div>',
'before_title' => '<h5 class="widgettitle">',
'after_title' => '</h5>',
));
}
add_action( 'widgets_init', 'zodkoo_sidebar_widgets_init' );