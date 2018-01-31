<?php
	function zodkoo_style_css_script(){

		wp_enqueue_style('editor_style',get_template_directory_uri().'/assets/css/colors/default.css');
		wp_enqueue_style('editor_style',get_template_directory_uri().'/assets/css/style.css');
	}
	add_action('wp_enqueue_scripts','zodkoo_style_css_script');

	function zodkoo_primary_color(){
		global $zodkoo_setting;
		$main_color=$body_font=$font_light=$footer_bg_color='';
		
        $main_color = $zodkoo_setting['general_bg_color'];
        $body_font = $zodkoo_setting['zodkoo-body-font']['font-family'];
        $font_light = $zodkoo_setting['font-light']['font-weight'];
        $footer_bg_color = $zodkoo_setting['footer_bg_color'];
		$custom_css = "
		body {
  			font-family: {$body_font};
			}
		.font-light {
			font-weight: {$font_light};
		}
		.footer {
			background-color : {$footer_bg_color};
		}
 .back-to-top:hover,.bg-custom,.btn-custom,.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover,
.navbar-custom,.navigation li.active > a ,.post-password-form input[type=submit],.zodkoo-breadcrumb,.blog-navigation > span:hover,.blog-navigation a:hover,
.blog-navigation ul > span,#topnav.scroll,#topnav.scroll-active,.blog-navigation > span  {
  background-color: {$main_color} !important;
}

.btn-white-fill,.text-custom,.btn-white-bordered:hover,.btn-custom:hover,.features-box i,
.pricing-column .plan-title,.more-link,.widget_categories .cat-item a:hover,.widget_archive li a:hover,.widget_meta li a:hover,
.widget_pages ul li a:hover,.right-bar-main .widget_nav_menu ul li a:hover,.blog-detail-content ul li:before,.comment-reply a,.comment-reply i,
.searchform #searchsubmit:focus,.searchform #searchsubmit:hover,.searchform #searchsubmit:active,.tagcloud a:hover,.blog_category a:hover,.blog_tag a:hover,
.comment-reply-title small a,.bottom-reply a ,.blog-title-link a,.no-results h5,del,code,kbd,tt,var,q ,.blog-title,.contact-detail i ,blockquote a,.help-block a,
a:hover,a:focus,.a:active {
  color: {$main_color} !important;
}

.btn-custom,.post-password-form input[type=submit],.contact-detail i {
  border: 2px solid {$main_color} !important;
}

.intro-form input:focus,.tagcloud a:hover,.blog_tag a:hover,.blog-navigation > span,.blog-navigation a,code,kbd,tt,var,q  {
  border: 1px solid {$main_color};
}

.navigation li.active > a,.blog-navigation > span:hover,.blog-navigation a:hover,.blog-navigation > span {
  border-color: {$main_color} !important;
}

@media (min-width: 992px) {
    #topnav .navigation-menu > li .submenu li a:hover,#topnav .navigation-menu > li:hover > a ,#topnav .navigation-menu > li:hover > .menu-xs-arrow {
        color: {$main_color};
    }
}

.section-back-color {
	background-color: {$main_color};
}
#topnav .navigation-menu > li .submenu {
	border-top: 3px solid {$main_color};
}
#topnav .navigation-menu > li .submenu li a:hover {
	color: {$main_color};
}";
        
		wp_add_inline_style( 'editor_style', $custom_css );
	}	
	add_action('wp_enqueue_scripts', 'zodkoo_primary_color');