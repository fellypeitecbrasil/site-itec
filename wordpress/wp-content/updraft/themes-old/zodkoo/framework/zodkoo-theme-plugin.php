<?php 
/**
 * Register the required plugins for this theme.
 * 
 * @since 1.0.0
 * @author tommusrhodus
 */
if(!( function_exists('zodkoo_register_required_plugins') )){
	function zodkoo_register_required_plugins() {
		$plugins = array(			
			array(
				'name'     				=> esc_html__('Contact Form 7','zodkoo'),
				'slug'     				=> esc_html__('contact-form-7','zodkoo'),
				'required' 				=> false,
			),
			array(
				'name' 					=> esc_html__('MailChimp for WordPress','zodkoo'),
				'slug' 					=> esc_html__('mailchimp-for-wp','zodkoo'),
				'required' 				=> false,
			),
			array(
                'name' 					=> esc_html__('AddToAny Share Buttons','zodkoo'),
                'slug' 					=> esc_html__('add-to-any','zodkoo'),
                'required' 				=> false,
            ),
			array(
                'name' 					=> esc_html__('Redux Framework','zodkoo'),
                'slug' 					=> esc_html__('redux-framework','zodkoo'),
                'required' 				=> false,
            ),
			array(
                'name' 					=> esc_html__('One Click Demo Import','zodkoo'),
                'slug' 					=> esc_html__('one-click-demo-import','zodkoo'),
                'required' 				=> false,
            ),
			array(
				'name'     				=> esc_html__('Zodkoo Shortcode','zodkoo'),
				'slug'     				=> esc_html__('zodkoo-shortcode','zodkoo'),
				'source'   				=> 'zodkoo-shortcode.zip',
				'required' 				=> false,
				'version'            	=> '', 
				'force_activation'   	=> false,
				'force_deactivation' 	=> false,
				'external_url' 			=> '',
			),
			array(
				'name'     				=> esc_html__('WPBakery Visual Composer','zodkoo'),
				'slug'     				=> esc_html__('js_composer','zodkoo'),
				'source'   				=> 'js_composer.zip',
				'required' 				=> false,
				'version'            	=> '', 
				'force_activation'   	=> false,
				'force_deactivation' 	=> false,
				'external_url' 			=> '',
			),           

		);
		$config = array(
			'default_path' => get_template_directory_uri() . '/framework/plugins/',
			'is_automatic' => true,
		);
		tgmpa( $plugins, $config );
	}
	add_action( 'tgmpa_register', 'zodkoo_register_required_plugins' );
}