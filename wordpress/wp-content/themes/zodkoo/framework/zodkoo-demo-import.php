<?php
//================================//
//==== Setup Demo Data Import ====//
//================================//
function zodkoo_import_files() {
  return array(
    array(
      'import_file_name'             => esc_html__('Zodkoo Demo Import','zodkoo'),
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/widgets.json',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-data/customizer.dat',
      'local_import_redux'           => array(
        array(
          'file_path'   => trailingslashit( get_template_directory() ) . 'demo-data/theme_option.json',
          'option_name' =>  esc_html__('zodkoo_setting','zodkoo' ),
        ),
      ),
      'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the Front page separately.', 'zodkoo' ),
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'zodkoo_import_files' );

//============================================================//
//==== Setup Bydefault home & Blog Page and Menu Location ====//
//============================================================// 
function zodkoo_after_import_setup() {
	// Assign Theme Location to Menu.
    $header_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
		   'primary' => $header_menu->term_id,
	   )
    );
	   
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
}
add_action( 'pt-ocdi/after_import', 'zodkoo_after_import_setup' );