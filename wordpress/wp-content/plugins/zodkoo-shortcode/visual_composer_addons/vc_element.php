<?php
add_action('init','init_visual_composer_custom',1000);
function init_visual_composer_custom(){
    if(function_exists('vc_map')){

        //Home Slider with Background Color
        vc_map( array(
            "name" => __( "Home Slider Color", "zodkoo" ),//front side display name
            "description" => __("Change home page Color and Set Background Color", 'zodkoo'),//addon discription
            "base" => "zodkoo_home_slider_color",//shortcode
            "category" => __('Zodkoo'),////category you will be display your addon
            "params" => array( 
				array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Layout", "zodkoo" ),
                    "param_name" => "layout",
                    "value" => array( 'Large', 'Small'),
                    "description" => __( "Select Layout", "zodkoo" )
                ),
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => __( "Title", "zodkoo" ),
                    "param_name" => "title",
                    "value" => __( "Zodkoo is a fully responsive landing page template", "zodkoo" ),
                    "description" => __( "Description for Title.", "zodkoo" )
                ),
				array(
                    "type" => "colorpicker",
                    "heading" => __( "Title Color", "zodkoo" ),
                    "param_name" => "title_color",
                    "value" => "#fff",
                    "description" => __( "Choose Color", "zodkoo" ),
                ),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Text Alignment", "zodkoo" ),
                    "param_name" => "textalignment",
                    'value' => array( 'center', 'left', 'right' ),
                    "description" => __( "Select title Alignment.", "zodkoo" )
                ),                
				array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Description", "zodkoo" ),
                    "param_name" => "descriptions",//title id
                    "value" => __( "Zodkoo is a fully responsive landing page built using the latest Bootstrap framework. It's designed for describing your app, agency or business. The clean and well commented code allows easy customization of the theme", "zodkoo" ),
                    "description" => __( "Enter your content.", "zodkoo" )
                ),
				array(
                    "type" => "colorpicker",
                    "heading" => __( "Text color", "zodkoo" ),
                    "param_name" => "textcolor",
                    "value" => '#eee',
                    "description" => __( "Choose text color", "zodkoo" )
                ),
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Button Title", "zodkoo" ),
                    "param_name" => "button_title",//title id
                    "value" => __( "GET STARTED", "zodkoo" ),
                    "description" => __( "Button Title.", "zodkoo" )
                ),
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Button Link", "zodkoo" ),
                    "param_name" => "button_url",//title id
                    "value" => __( "#", "zodkoo" ),
                    "description" => __( "Button Link.", "zodkoo" )
                ),
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Extra Class", "zodkoo" ),
                    "param_name" => "ext_class",//title id
                    "value" => __( "", "zodkoo" ),
                    "description" => __( "Add Extra Class to button.", "zodkoo" )
                ),
            )
        ) );
		
		//Home Slider with Details
        vc_map( array(
            "name" => __( "Home Slider Details", "zodkoo" ),//front side display name
            "description" => __("Change home page with Details", 'zodkoo'),//addon discription
            "base" => "zodkoo_home_slider_details",//shortcode
            "category" => __('Zodkoo'),////category you will be display your addon
            "params" => array( 
				array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => __( "Title", "zodkoo" ),
                    "param_name" => "title",
                    "value" => __( "Zodkoo is a fully responsive landing page template", "zodkoo" ),
                    "description" => __( "Description for Title.", "zodkoo" )
                ),
				array(
                    "type" => "colorpicker",
                    "heading" => __( "Title Color", "zodkoo" ),
                    "param_name" => "title_color",
                    "value" => "#fff",
                    "description" => __( "Choose Color", "zodkoo" ),
                ),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Text Alignment", "zodkoo" ),
                    "param_name" => "textalignment",
                    'value' => array( 'left', 'center', 'right' ),
                    "description" => __( "Select title Alignment.", "zodkoo" )
                ),                
				array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Description", "zodkoo" ),
                    "param_name" => "descriptions",//title id
                    "value" => __( "Zodkoo is a fully responsive landing page built using the latest Bootstrap framework. It's designed for describing your app, agency or business. The clean and well commented code allows easy customization of the theme", "zodkoo" ),
                    "description" => __( "Enter your content.", "zodkoo" )
                ),
				array(
                    "type" => "colorpicker",
                    "heading" => __( "Text color", "zodkoo" ),
                    "param_name" => "textcolor",
                    "value" => '#eee',
                    "description" => __( "Choose text color", "zodkoo" )
                ),
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Button Title", "zodkoo" ),
                    "param_name" => "button_title",//title id
                    "value" => __( "GET STARTED", "zodkoo" ),
                    "description" => __( "Button Title.", "zodkoo" )
                ),
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Button Link", "zodkoo" ),
                    "param_name" => "button_url",//title id
                    "value" => __( "#", "zodkoo" ),
                    "description" => __( "Button Link.", "zodkoo" )
                ),
            )
        ) );
		
		
	//Home Slider with Video
        vc_map( array(
            "name" => __( "Home Slider Video", "zodkoo" ),//front side display name
            "description" => __("Change home page with Video", 'zodkoo'),//addon discription
            "base" => "zodkoo_home_slider_video",//shortcode
            "category" => __('Zodkoo'),//category you will be display your addon
            "params" => array( 
			array(
				"type" => "textfield",//dropdown field
				"holder" => "div",
				"heading" => __( "Video URL", "zodkoo" ),
				"param_name" => "video_url",//title id
				"value" => __( "https://player.vimeo.com/video/99025203?color=01bf86&amp;title=0&amp;byline=0&amp;portrait=0", "zodkoo" ),
				"description" => __( "Enter Video Url", "zodkoo" )
			),
            )
        ) );
		
	//Home Slider with Form
        vc_map( array(
            "name" => __( "Home Slider Form", "zodkoo" ),//front side display name
            "description" => __("Change home page with Form", 'zodkoo'),//addon discription
            "base" => "zodkoo_home_slider_form",//shortcode
            "category" => __('Zodkoo'),//category you will be display your addon
            "params" => array( 
			array(
				"type" => "textfield",//Text field
				"holder" => "div",
				"heading" => __( "Form Title", "zodkoo" ),
				"param_name" => "form_title",//title id
				"value" => __( "Register For Free", "zodkoo" ),
				"description" => __( "Enter Form Title", "zodkoo" )
			),
			array(
				"type" => "textfield",//Text field
				"holder" => "div",
				"heading" => __( "Login Title", "zodkoo" ),
				"param_name" => "login_title",//title id
				"value" => __( "Start Now", "zodkoo" ),
				"description" => __( "Enter Login Title", "zodkoo" )
			),
            )
        ) );
		
        //Description Section
        vc_map( array(
            "name" => __( "Zodkoo Section", "zodkoo" ),//front side display name
            "description" => __("Zodkoo Section Details", 'zodkoo'),//addon discription
            "base" => "zodkoo_section",//shortcode
            "category" => __('Zodkoo'),////category you will be display your addon
            "params" => array( 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => __( "Title", "zodkoo" ),
                    "param_name" => "title",
                    "value" => __( "Praesent et viverra massa non varius magna eget nibh vitae velit posuere efficitur.", "zodkoo" ),
                    "description" => __( "Description for Title.", "zodkoo" )
                ),               
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Description", "zodkoo" ),
                    "param_name" => "descriptions",//title id
                    "value" => __( "The clean and well commented code allows easy customization of the theme.Its designed for describing your app, agency or business.We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.We put a lot of effort in design, as it’s the most important ingredient of successful website.", "zodkoo" ),
                    "description" => __( "Enter your content.", "zodkoo" )
                ),  
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Title Tag", "zodkoo" ),
                    "param_name" => "titletag",
                    'value' => array( 'h4', 'h3'),
                    "description" => __( "Select title Tag.", "zodkoo" )
                ),               
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Text Alignment", "zodkoo" ),
                    "param_name" => "textalignment",
                    'value' => array( 'left', 'center', 'right' ),
                    "description" => __( "Select title Alignment.", "zodkoo" )
                ), 
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Button Title", "zodkoo" ),
                    "param_name" => "button_title",//title id
                    "value" => __( "LEARN MORE", "zodkoo" ),
                    "description" => __( "Button Title.", "zodkoo" )
                ),
                array(
                    "type" => "textfield",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Button Link", "zodkoo" ),
                    "param_name" => "button_url",//title id
                    "value" => __( "#", "zodkoo" ),
                    "description" => __( "Button Link.", "zodkoo" )
                ),
            )
        ) );
        

	//Page Title
        vc_map( array(
            "name" => __( "Page Title", "zodkoo" ),//front side display name
            "description" => __("Set Page Title", 'zodkoo'),//addon discription
            "base" => "zodkoo_page_title",//shortcode
            "category" => __('Zodkoo'),////category you will be display your addon
            "params" => array( 
                array(
                    "type" => "textfield",
                    "holder" => "div",
                    "heading" => __( "Title", "zodkoo" ),
                    "param_name" => "title",
                    "value" => __( "Zodkoo Page Title", "zodkoo" ),
                    "description" => __( "Description for Title.", "zodkoo" )
                ),
				array(
                    "type" => "colorpicker",
                    "heading" => __( "Title Color", "zodkoo" ),
                    "param_name" => "title_color",
                    "value" => "#fff",
                    "description" => __( "Choose Color", "zodkoo" ),
                ),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Title Tag", "zodkoo" ),
                    "param_name" => "titletag",
                    "value" => array( 'h3','h1','h2','h4','h5','h6'),
                    "description" => __( "Description for Title Tag", "zodkoo" )
                ),
                array(
                    "type" => "dropdown",
                    "holder" => "div",
                    "heading" => __( "Text Alignment", "zodkoo" ),
                    "param_name" => "textalignment",
                    'value' => array( 'center', 'left', 'right' ),
                    "description" => __( "Select title Alignment.", "zodkoo" )
                ),
            )
        ) );

		
	//Service
    vc_map( array(
        "name" => __( "Zodkoo Service", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_services",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
            array(
                "type" => "dropdown",//dropdown field
                "holder" => "div",
                "heading" => __( "Select Icon Category", "zodkoo" ),
                "param_name" => "icon_category",//icon size id
                'value' => array( 'Font Awesome', 'Custom Image','Themify'),
                "description" => __( "Select Category.", "zodkoo" )
            ),         
            array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'js_composer' ),
                'param_name' => 'icon_themify',
                'value' => 'vc-material vc-material-cake',
                // default value to backend editor admin_label
                'settings' => array(
                    'emptyIcon' => false,
                    // default true, display an "EMPTY" icon?
                    'type' => 'themify',
                    'iconsPerPage' => 4000,
                    // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_category',
                    'value' => 'Themify',
                )
            ),
            
			array(
                "type" 			=> 	"attach_image",//choose image
                "holder"        => "img",
                "heading" 		=> 	__( 'Image', 'zodkoo' ),
                "param_name" 	=> 	"image_url",//image url id
                "description" 	=> 	__( 'Select the image', 'zodkoo' ),
                "dependency" 	=> 	array( 
						'element' => "icon_category", 
						'value' => "Custom Image"
						),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Alternate Text', 'zodkoo' ),
                "param_name" 	=> "image_alt",//image alt id
                "description" 	=> __( 'It will be used as alt attribute of img tag', 'zodkoo' ),
				"value" => __( "Image", "zodkoo" ),
				"dependency" 	=> 	array( 
						'element' => "icon_category", 
						'value' => "Custom Image"
						),
            ),
			array(
                "type" => "iconpicker",//dropdown for icon picker
                "heading" => __( "Icon", "zodkoo" ),
                "param_name" => "icon", //Default fa-bluetooth icon
                "value" => "fa fa-bluetooth",
                "description" => __( "Choose icon", "zodkoo" ),
                "dependency"    =>  array( 
                        'element' => "icon_category", 
                        'value' => "Font Awesome"
                        ),
			),
            array(
                "type" => "dropdown",//dropdown field
                "holder" => "div",
                "heading" => __( "Icon Size", "zodkoo" ),
                "param_name" => "iconsize",//icon size id
                'value' => array( 'mini', 'small', 'normal','large','extra large'),
                "description" => __( "Select Size.", "zodkoo" ),
				
            ),
            array(
                "type" => "textfield",//dropdown field
                "holder" => "div",
                "heading" => __( "Title", "zodkoo" ),
                "param_name" => "title",//title id
                "value" => __( "Lorem Ipsum", "zodkoo" ),
                "description" => __( "Description for Title.", "zodkoo" )
            ),
            array(
                "type" => "dropdown",//dropdown field
                "holder" => "div",
                "heading" => __( "Title Tag", "zodkoo" ),
                "param_name" => "titletag",
                "value" => array( 'h4', 'h1', 'h2','h3','h5','h6'),
                "description" => __( "Description for Title Tag", "zodkoo" )
            ),
            array(
                "type" => "dropdown",//dropdown field
                "holder" => "div",
                "heading" => __( "Text Alignment", "zodkoo" ),
                "param_name" => "textalignment",//title alignment id
                'value' => array( 'center', 'left', 'right' ),
                "description" => __( "Select title Alignment.", "zodkoo" )
            ),
            array(
                "type" => "textarea_html",//text area field
                "holder" => "div",
                "heading" => __( "Content", "zodkoo" ),
                "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
                "value" => __( "<p>zodkoo app landing page come along the working contact form with form validation and send mail ready. You just need to setup the quick installation</p>", "my-text-domain" ),
                "description" => __( "Enter your content.", "zodkoo" )
            ),
        )
    ) );



	//Pricing Table
    vc_map( array(
        "name" => __( "Zodkoo Pricing Table", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_pricing",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Title', 'zodkoo' ),
                "param_name" 	=> "title",//Title ID
                "description" 	=> __( 'It will be used as Title of Pricing Table', 'zodkoo' ),
				"value" => __( "BASIC", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Price', 'zodkoo' ),
                "param_name" 	=> "price",//Price ID
                "description" 	=> __( 'It will be used as Price of Pricing Table', 'zodkoo' ),
				"value" => __( "$19", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Duration', 'zodkoo' ),
                "param_name" 	=> "duration",//Duration ID
                "description" 	=> __( 'It will be used as Duration of Pricing Table', 'zodkoo' ),
				"value" => __( "Per Month", "zodkoo" ),
            ),
			array(
                'type' => 'param_group',//multiple point
                'value' => '',
                'heading' => __( 'List Content', 'zodkoo' ),
                'param_name' => 'listcontent',//add multiple icon
                'params' => array(
                array(
                    "type" => "dropdown",//dropdown field
                    "holder" => "div",
                    "heading" => __( "Select Icon Category", "zodkoo" ),
                    "param_name" => "icon_category",//icon size id
                    'value' => array( 'Font Awesome','Themify'),
                    "description" => __( "Select Category.", "zodkoo" ),
                 ),
                array(
                'type' => 'iconpicker',
                'heading' => __( 'Icon', 'js_composer' ),
                'param_name' => 'icon_themify',
                'value' => 'vc-material vc-material-cake',
                // default value to backend editor admin_label
                'settings' => array(
                    'emptyIcon' => false,
                    // default true, display an "EMPTY" icon?
                    'type' => 'themify',
                    'iconsPerPage' => 4000,
                    // default 100, how many icons per/page to display
                ),
                'dependency' => array(
                    'element' => 'icon_category',
                    'value' => 'Themify',
                    )
                 ),
					array(
						"type" => "iconpicker",//dropdown for icon picker
						"heading" => __( "Icon", "zodkoo" ),
						"param_name" => "icon", //Default fa-bluetooth icon
						"value" => "fa fa-bluetooth",
						"description" => __( "Choose icon", "zodkoo" ),	
                         "dependency"    =>  array( 
                            'element' => "icon_category", 
                            'value' => "Font Awesome"
                        ),					
					),
                    array(
						"type" 			=> "textfield",//text field
						"heading" 		=> __( 'Details', 'zodkoo' ),
						"param_name" 	=> "details",//Details ID
						"description" 	=> __( 'It will be used as Detail Text of Pricing Table', 'zodkoo' ),
						"value" => __( "10 GB Storage", "zodkoo" ),
					),
                )
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Button Text', 'zodkoo' ),
                "param_name" 	=> "buttontext",//Button Text ID
                "description" 	=> __( 'It will be used as Button Text of Pricing Table', 'zodkoo' ),
				"value" => __( "SIGNUP NOW", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'URL Link', 'zodkoo' ),
                "param_name" 	=> "url",//URL Link ID
                "description" 	=> __( 'It will be used as URL of Pricing Table', 'zodkoo' ),
				"value" => __( "", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Extra Class', 'zodkoo' ),
                "param_name" 	=> "extraclass",//Extra Class ID
                "description" 	=> __( 'It will be used as Extra Class of Pricing Table', 'zodkoo' ),
				"value" => __( "", "zodkoo" ),
            ),
        )
    ) );
	
	
	//Testimonial
    vc_map( array(
        "name" => __( "Zodkoo Testimonial", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_testimonial",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Title', 'zodkoo' ),
                "param_name" 	=> "title",//Title ID
                "description" 	=> __( 'It will be used as Title of Testimonial', 'zodkoo' ),
				"value" => __( "Calebogden", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Designation', 'zodkoo' ),
                "param_name" 	=> "designation",//Price ID
                "description" 	=> __( 'It will be used as Designation of Testimonial', 'zodkoo' ),
				"value" => __( "Another company , City", "zodkoo" ),
            ),
			array(
                "type" 			=> 	"attach_image",//choose image
                "holder"        => "img",
                "heading" 		=> 	__( 'Image', 'zodkoo' ),
                "param_name" 	=> 	"image_url",//image url id
                "description" 	=> 	__( 'Select the image', 'zodkoo' ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Image Alt', 'zodkoo' ),
                "param_name" 	=> "image_alt",//Price ID
                "description" 	=> __( 'It will be used as Image Alt of Testimonial', 'zodkoo' ),
				"value" => __( "Image", "zodkoo" ),
            ),
			array(
                "type" => "textarea_html",//text area field
                "holder" => "div",
                "heading" => __( "Content", "zodkoo" ),
                "param_name" => "content", // Important: Only one textarea_html param per content element allowed and it should have "content" as a "param_name"
                "value" => __( "<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>", "my-text-domain" ),
                "description" => __( "Enter your content.", "zodkoo" )
            ),
        )
    ) );
	
	
	//Team
    vc_map( array(
        "name" => __( "Zodkoo Team", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_team",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Title', 'zodkoo' ),
                "param_name" 	=> "title",//Title ID
                "description" 	=> __( 'It will be used as Title of Team', 'zodkoo' ),
				"value" => __( "Holden McGroin", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Designation', 'zodkoo' ),
                "param_name" 	=> "designation",//Designation ID
                "description" 	=> __( 'It will be used as Designation of Team', 'zodkoo' ),
				"value" => __( "Product Designer & Founder", "zodkoo" ),
            ),
			array(
                "type" 			=> 	"attach_image",//choose image
                "holder"        => "img",
                "heading" 		=> 	__( 'Image', 'zodkoo' ),
                "param_name" 	=> 	"image_url",//image url id
                "description" 	=> 	__( 'Select the image', 'zodkoo' ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Image Alt', 'zodkoo' ),
                "param_name" 	=> "image_alt",//Image Alt ID
                "description" 	=> __( 'It will be used as Image Alt of Team', 'zodkoo' ),
				"value" => __( "Team Member", "zodkoo" ),
            ),
			)
    ) );


	//Icon with text
    vc_map( array(
        "name" => __( "Zodkoo Icon Text", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_icon_text",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
			array(
				"type" => "iconpicker",//dropdown for icon picker
				"heading" => __( "Icon", "zodkoo" ),
				"param_name" => "icon", //Default fa-bluetooth icon
				"value" => "fa fa-map-marker",
				"description" => __( "Choose icon", "zodkoo" ),						
			),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Details', 'zodkoo' ),
                "param_name" 	=> "details",//Details ID
                "description" 	=> __( 'It will be used as Details of Icon With Text', 'zodkoo' ),
				"value" => __( "Lorem Ipsum Dolore", "zodkoo" ),
            ),
		)
    ) );
	
	//FAQ
    vc_map( array(
        "name" => __( "Zodkoo FAQ", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_faq",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Question Title', 'zodkoo' ),
                "param_name" 	=> "question_title",//Icon Title ID
                "description" 	=> __( 'It will be used as Question Title of FAQ', 'zodkoo' ),
				"value" => __( "Q", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Title', 'zodkoo' ),
                "param_name" 	=> "title",//Title ID
                "description" 	=> __( 'It will be used as Title of FAQ', 'zodkoo' ),
				"value" => __( "Lorem Ipsum Dolore?", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Answer Title', 'zodkoo' ),
                "param_name" 	=> "answer_title",//Icon Title ID
                "description" 	=> __( 'It will be used as Answer Title of FAQ', 'zodkoo' ),
				"value" => __( "A", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Details', 'zodkoo' ),
                "param_name" 	=> "details",//Details ID
                "description" 	=> __( 'It will be used as Details of FAQ', 'zodkoo' ),
				"value" => __( "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", "zodkoo" ),
            ),
		)
    ) );
	
	//Button
        vc_map( array(
            "name" => __( "Zodkoo Button", "zodkoo" ),//front side display name
            "description" => __("Button", 'zodkoo'),//addon discription
            "base" => "zodkoo_button",//shortcode
            "category" => __('Zodkoo'),////category you will be display your addon
            "params" => array(
                array(
                    "type" 			=> "textfield",//text field
                    "heading" 		=> __( 'Text', 'zodkoo' ),
                    "param_name" 	=> "button_text",//Details ID
                    "description" 	=> __( 'Button Text', 'zodkoo' ),
                    "value" => __( "Learn More", "zodkoo" ),
                ),
                array(
                    "type" 			=> "textfield",//text field
                    "heading" 		=> __( 'Button Link', 'zodkoo' ),
                    "param_name" 	=> "button_link",//Details ID
                    "description" 	=> __( 'Button Link', 'zodkoo' ),
                    "value" => __( "#", "zodkoo" ),
                ),
                array(
                    "type"          => "textfield",//text field
                    "heading"       => __( 'Extra class', 'zodkoo' ),
                    "param_name"    => "ext_class",//Details ID
                    "description"   => __( 'Add Extraa class to Button', 'zodkoo' ),
                    "value" => __( "", "zodkoo" ),
                ),
            )
        ) );
	
	//JOB Block
    vc_map( array(
        "name" => __( "Zodkoo Job Block", "zodkoo" ),//front side display name
        "description" => __("Side Icon, title With Description", 'zodkoo'),//addon discription
        "base" => "zodkoo_job",//shortcode
        //"icon" => get_site_url().'/wp-content/themes/zodkoo/assets/images/vc_icon_img/key_feature.png',
        "category" => __('Zodkoo'),////category you will be display your addon
        "params" => array(
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Job ID', 'zodkoo' ),
                "param_name" 	=> "job_id",//Icon Title ID
                "description" 	=> __( 'It will be used as Job ID of FAQ', 'zodkoo' ),
				"value" => __( "job1", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Title', 'zodkoo' ),
                "param_name" 	=> "title",//Title ID
                "description" 	=> __( 'It will be used as Title of Job', 'zodkoo' ),
				"value" => __( "Lorem Ipsum Dolore", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Details', 'zodkoo' ),
                "param_name" 	=> "details",//Details ID
                "description" 	=> __( 'It will be used as Details of Job', 'zodkoo' ),
				"value" => __( "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.", "zodkoo" ),
            ),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Button Text', 'zodkoo' ),
                "param_name" 	=> "button_text",//Icon Title ID
                "description" 	=> __( 'It will be used as Button Text of Job', 'zodkoo' ),
				"value" => __( "View Detail", "zodkoo" ),
            ),
			array(
				"type" => "colorpicker",
				"heading" => __( "Button Color", "zodkoo" ),
				"param_name" => "button_color",
				"value" => "#01bf86",
				"description" => __( "Button Back Color", "zodkoo" ),
			),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Button url', 'zodkoo' ),
                "param_name" 	=> "button_url",//Icon Title ID
                "description" 	=> __( 'It will be used as Button url of Job', 'zodkoo' ),
				"value" => __( "#", "zodkoo" ),
            ),
			array(
				"type" => "colorpicker",
				"heading" => __( "Block Color", "zodkoo" ),
				"param_name" => "block_color",
				"value" => "#f3f6fa",
				"description" => __( "Block Color Color", "zodkoo" ),
			),
			array(
                "type" 			=> "textfield",//text field
                "heading" 		=> __( 'Modal Title', 'zodkoo' ),
                "param_name" 	=> "modal_title",//Price ID
                "description" 	=> __( 'It will be used as Modal Title in Job', 'zodkoo' ),
				"value" => __( "Backend Developer", "zodkoo" ),
				"group" 		=> "Modal",
            ),
			array(
                "type" => "textarea_html",//text area field
                "holder" => "div",
                "heading" => __( "Modal Content", "zodkoo" ),
                "param_name" => "content",
                "value" => __( "", "my-text-domain" ),
                "description" => __( "Enter your Modal content.", "zodkoo" ),
				"group" 		=> "Modal",
            ),
		)
    ) );	
	
	
}} /* /if //function */
?>