<?php

/* zodkoo_home_slider_color */
add_shortcode('zodkoo_home_slider_color','zodkoo_home_slider_color');
function zodkoo_home_slider_color($atts, $content = null) {
	$layout=$title_color=$title=$textalignment=$descriptions=$textcolor=$button_title=$button_url=$ext_class='';
    extract( shortcode_atts( array(        
        'layout' => 'Large',
        'title' => 'Zodkoo is a fully responsive landing page template',
		'title_color' => '#ffffff',
        'textalignment' => 'center',
        'descriptions' => 'Zodkoo is a fully responsive landing page built using the latest Bootstrap framework. Its designed for describing your app, agency or business. The clean and well commented code allows easy customization of the theme',		
        'textcolor' => '#eee',
        'button_title' => 'GET STARTED',
        'button_url' => '#',
        'ext_class' => '',        
    ), $atts ) );
    
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
	if ($layout == 'Large') {
		$output1 = "<div class='home-fullscreen' id='home-fullscreen'>
                    <div class='full-screen'>
						<div class='home-wrapper home-wrapper-alt' style='text-align:{$textalignment};'>
							<h1 class='font-light' style='color:{$title_color};'>{$title}</h1>
							<h4 style='color:{$textcolor};'>{$descriptions}</h4>
							<a href='{$button_url}' class='btn btn-white-bordered {$ext_class}'>{$button_title}</a>
						</div>
					</div>
				</div>";
	return $output1;
	} elseif ($layout == 'Small') {
		$output1 = "<div class='home-wrapper home-wrapper-alt' style='text-align:{$textalignment};'>
						<h1 class='font-light' style='color:{$title_color};'>{$title}</h1>
						<h4 style='color:{$textcolor};'>{$descriptions}</h4>
						<a href='{$button_url}' class='btn btn-white-bordered'>{$button_title}</a>
					</div>";
	return $output1;
	}
    

}

/* zodkoo_home_slider_details */
add_shortcode('zodkoo_home_slider_details','zodkoo_home_slider_details');
function zodkoo_home_slider_details($atts, $content = null) {
	$title_color=$title=$textalignment=$descriptions=$textcolor=$button_title=$button_url='';
    extract( shortcode_atts( array( 
        'title' => 'Zodkoo is a fully responsive landing page template',
		'title_color' => '#ffffff',
        'textalignment' => 'left',
        'descriptions' => 'Zodkoo is a fully responsive landing page built using the latest Bootstrap framework. Its designed for describing your app, agency or business. The clean and well commented code allows easy customization of the theme',		
        'textcolor' => '#eee',
        'button_title' => 'GET STARTED',
        'button_url' => '#',
    ), $atts ) );
    
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

		$output1 = "<div class='home-sm'>
						<div class='home-wrapper home-wrapper-alt p-0' style='text-align:{$textalignment};'>
							<h1 class='font-light text-white w-full m-t-0'>{$title}</h1>
							<h4 class='w-full' style='color:{$textcolor};'>{$descriptions}</h4>
							<a href='{$button_url}' class='btn btn-white-bordered'>{$button_title}</a>
						</div>
					</div>";
	return $output1;
}

/* zodkoo_home_slider_video */
add_shortcode('zodkoo_home_slider_video','zodkoo_home_slider_video');
function zodkoo_home_slider_video($atts, $content = null) {
	$video_url='';
    extract( shortcode_atts( array( 
        'video_url' => 'https://player.vimeo.com/video/99025203?color=01bf86&amp;title=0&amp;byline=0&amp;portrait=0',
    ), $atts ) );
    
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

		$output1 = "<div class='home-sm'>
						<div class='home-wrapper p-0'>
							<div class='video-wrapper'>
								<iframe src='{$video_url}' width='555' height='321' class='frame-border'></iframe>
							</div>
						</div>
					</div>";					
	return $output1;				    

}

/* zodkoo_home_slider_form */
add_shortcode('zodkoo_home_slider_form','zodkoo_home_slider_form');
function zodkoo_home_slider_form($atts, $content = null) {
	$form_title=$login_title='';
    extract( shortcode_atts( array( 
        'form_title' => 'Register For Free',
        'login_title' => 'Start Now',
    ), $atts ) );
    
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

		$output1 = "<div class='home-sm'>
						<form class='intro-form'>
                                <h3 class='text-center'>{$form_title}</h3>
                                <div class='form-group'>
                                    <input type='text' class='form-control' placeholder='Full name' required='required'>
                                </div>
                                <div class='form-group'>
                                    <input type='text' class='form-control' placeholder='Email Address' required='required'>
                                </div>
                                <div class='form-group'>
                                    <input type='text' class='form-control' placeholder='User name' required='required'>
                                </div>
                                <div class='form-group'>
                                    <input type='text' class='form-control' placeholder='Password' required='required'>
                                </div>
                                <div class='form-group text-center'>
                                    <button type='submit' class='btn btn-custom btn-sm btn-block'>{$login_title}</button>
                                </div>
                                <span class='help-block m-b-0 m-t-20 text-muted'><small>By registering you agree to the Zodkoo <a href='#'>Terms of Use</a></small></span>
                            </form>
					</div>";					
	return $output1;				    

}

/* zodkoo_section */
add_shortcode('zodkoo_section','zodkoo_section');
function zodkoo_section($atts, $content = null) {
	$title=$titletag=$textalignment=$descriptions=$button_title=$button_url='';
    extract( shortcode_atts( array( 
        'title' => 'Praesent et viverra massa non varius magna eget nibh vitae velit posuere efficitur.',
        'titletag' => 'h4',
        'textalignment' => 'left',
        'descriptions' => 'The clean and well commented code allows easy customization of the theme.Its designed for describing your app, agency or business.We put a lot of effort in design, as it’s the most important ingredient of successful website.Sed ut perspiciatis unde omnis iste natus error sit.We put a lot of effort in design, as it’s the most important ingredient of successful website.',		
        'button_title' => 'LEARN MORE',
        'button_url' => '#',
    ), $atts ) );
    
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

		$output1 = "<div class='feat-description' style='text-align:{$textalignment};'>
	                    <{$titletag}>{$title}</{$titletag}>
	                    <p class='text-muted'>{$descriptions}</p>
	                    <a href='{$button_url}' class='btn btn-custom'>{$button_title}</a>
	                </div>";
	return $output1;
}


/* zodkoo_page_title */
add_shortcode('zodkoo_page_title','zodkoo_page_title');
function zodkoo_page_title($atts, $content = null) {
	$title=$title_color=$titletag=$textalignment='';
    extract( shortcode_atts( array(        
        'title' => 'Zodkoo Page Title',
		'title_color' => '#ffffff',
        'titletag' =>'h3',
        'textalignment' => 'center',
    ), $atts ) );
    
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content

		$output1 = "<div class='header-title-box' style='text-align:{$textalignment};'>
						<{$titletag} style='color:{$title_color};'>{$title}</{$titletag}>
					</div>";
	return $output1;

}


/* zodkoo_services */
add_shortcode('zodkoo_services', 'zodkoo_services');
function zodkoo_services($atts, $content = null) {
	$icon_category=$icon_themify=$image_url=$image_alt=$icon=$iconsize=$title=$titletag=$textalignment='';
    extract( shortcode_atts( array(
        'icon_category' => 'Font Awesome',
        'icon_themify' => 'vc-material vc-material-cake',
        'image_url' => '',
        'image_alt' => 'image',		
        'icon' => 'fa fa-bluetooth',      
        'iconsize' => 'mini',
		'title' => 'Lorem Ipsum',		        
        'titletag' =>'h4',		
        'textalignment' => 'center',
        'description' => '',
    ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
    $size= $iconsize;
    if($size== 'mini'){
        $size= '1.2em';
    }elseif($size== 'small'){
        $size= '1.6em';
    }
    elseif($size== 'normal'){
        $size= '2.15em';
    }
    elseif($size== 'large'){
        $size= '2.85em';
    }
    elseif($size== 'extra large'){
        $size= '5em';
    }
	
	if ($image_url != '') {
        $image_url = wp_get_attachment_url( $image_url );
    }
	
	//echo $icon_category;
	if ($icon_category == 'Font Awesome') {
		    $output1 = "<div class='features-box'>
							<i class='{$icon}'></i>
							<{$titletag}>{$title}</{$titletag}>
							{$content}
						</div>";
			return $output1;
	} elseif ($icon_category == 'Themify') {
		    $output1 = "<div class='features-box'>
							<i class='{$icon_themify}'></i>
							<{$titletag}>{$title}</{$titletag}>
							{$content}
						</div>";
			return $output1;
	} elseif ($icon_category == 'Custom Image') {
		    $output1 = "<div class='features-box'>
							<img src='{$image_url}' width='' alt='{$image_alt}' />
							<{$titletag}>{$title}</{$titletag}>
							{$content}
						</div>";
			return $output1;
	}
}

/* zodkoo_pricing */
add_shortcode('zodkoo_pricing', 'zodkoo_pricing');
function zodkoo_pricing($atts, $content = null) {
	$title=$price=$duration=$listcontent=$icon_category=$icon_themify=$icon=$details=$buttontext=$url=$extraclass='';
    extract( shortcode_atts( array(
        'title' => 'BASIC',
        'price' => '$19',
        'duration' => 'Per Month',		
        'listcontent' => '',
        'icon_category' => 'Font Awesome',
        'icon_themify' => 'vc-material vc-material-cake',
		'icon'=> 'fa fa-bluetooth',       
        'details' => '10 GB Storage',		
        'buttontext' => 'SIGNUP NOW',		
        'url' => '',		
        'extraclass' => '',		
    ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
	
	
	$output1 = '';
	$output1 .= "<article class='pricing-column'>";
    $output1 .= "<div class='inner-box {$extraclass}'>";
    $output1 .= "<div class='plan-header text-center'>";
	$output1 .= "<h3 class='plan-title'>{$title}</h3>";
    $output1 .= "<h2 class='plan-price'>{$price}</h2>";
    $output1 .= "<div class='plan-duration'>{$duration}</div>";
    $output1 .= "</div>";
    $output1 .= "<ul class='plan-stats list-unstyled'>";
	$listcontent = vc_param_group_parse_atts($atts['listcontent']);
    if ( $listcontent ) :
        foreach ( $listcontent as $field ) {
        	if ($field['icon_category'] == 'Font Awesome') {
           		 $output1 .= "<li> <i class='{$field['icon']}'></i>{$field['details']}";
            } elseif ($field['icon_category'] == 'Themify') {
            	 $output1 .= "<li> <i class='{$field['icon_themify']}'></i>{$field['details']}";
           }
        }
        $output1 .="</li>";
    endif;
    $output1 .= "</ul>";

	$output1 .= "<div class='text-center'>";
	$output1 .= "<a href='{$url}' class='btn btn-sm btn-custom'>{$buttontext}</a>";
	$output1 .= "</div>";
	$output1 .= "</div>";
	$output1 .= "</article>";
	return $output1;
	
}

/* zodkoo_testimonial */
add_shortcode('zodkoo_testimonial', 'zodkoo_testimonial');
function zodkoo_testimonial($atts, $content = null) {
	$title=$designation=$image_url=$image_alt='';
    extract( shortcode_atts( array(
        'title' => 'Calebogden',
        'designation' => 'Another company , City',
        'image_url' => '',		
        'image_alt' => 'Image',
		), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
    	
	if ($image_url != '') {
        $image_url = wp_get_attachment_url( $image_url );
    }
	
	$output1 = "<div class='testimonial-description text-left'>{$content}</div>
				<div class='testimonial-user-info user-info text-left'>
					<div class='testimonial-user-thumb user-thumb'>
						<img src='{$image_url}' alt='{$image_alt}'>
					</div>
					<div class='testimonial-user-txt user-text'>
						<label class='testimonial-user-name user-name'>{$title}</label>
						<p class='testimonial-user-position user-position text-muted'>{$designation}</p>
					</div>
				</div>";
	return $output1;
	
}


/* zodkoo_team */
add_shortcode('zodkoo_team', 'zodkoo_team');
function zodkoo_team($atts, $content = null) {
	$title=$designation=$image_url=$image_alt='';
    extract( shortcode_atts( array(
        'title' => 'Holden McGroin',
        'designation' => 'Product Designer & Founder',
        'image_url' => '',		
        'image_alt' => 'Team Member',
		), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
    	
	if ($image_url != '') {
        $image_url = wp_get_attachment_url( $image_url );
    }
	
	$output1 = "<div class='text-center team team-member animated fadeInDown wow' data-wow-delay='.1s'>
					<img src='{$image_url}' alt='{$image_alt}' class='img-responsive img-circle'>
					<h4>{$title}</h4>
					<p class='text-muted'>{$designation}</p>
				</div>";
	return $output1;
	
}

/* zodkoo_icon_text */
add_shortcode('zodkoo_icon_text', 'zodkoo_icon_text');
function zodkoo_icon_text($atts, $content = null) {
	$icon=$details='';
    extract( shortcode_atts( array(
        'icon' => 'fa fa-map-marker',
        'details' => 'Lorem Ipsum Dolore',
        ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
	
	$output1 = "<div class='contact-detail'>
					<i class='{$icon}'></i>
					<p>{$details}</p>
				</div>";
	return $output1;	
}

/* Zoodkoo Button */
add_shortcode('zodkoo_button', 'zodkoo_button');
function zodkoo_button($atts, $content = null) {
	$button_text=$button_link=$ext_class='';
    extract( shortcode_atts( array(
        'button_text' => 'Learn More',
        'button_link' => '#',
        'ext_class' => '',
    ), $atts ) );
	
	$content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
	
	$output1 = "<a href='{$button_link}' class='btn {$ext_class}'>{$button_text}</a>";
	return $output1;
}

/* zodkoo_faq */
add_shortcode('zodkoo_faq', 'zodkoo_faq');
function zodkoo_faq($atts, $content = null) {
	$question_title=$title=$answer_title=$details='';
    extract( shortcode_atts( array(
        'question_title' => 'Q',
        'title' => 'Lorem Ipsum Dolore?',
        'answer_title' => 'A',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
	
	$output1 = "<div>
					<h4 class='question'><span class='text-custom'>{$question_title}.</span> {$title}</h4>
					<p class='answer text-muted'><b>{$answer_title}. </b>{$details}</p>
				</div>";
	return $output1;	
}

/* zodkoo_job */
add_shortcode('zodkoo_job', 'zodkoo_job');
function zodkoo_job($atts, $content = null) {
	$job_id=$title=$details=$button_text=$button_color=$button_url=$block_color=$modal_title='';
    extract( shortcode_atts( array(
        'job_id' => 'job1',
        'title' => 'Lorem Ipsum Dolore?',
        'details' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.',
        'button_text' => 'View Detail',
        'button_color' => '#01bf86',
        'button_url' => '#',
        'block_color' => '#f3f6fa',
        'modal_title' => 'Backend Developer',
        ), $atts ) );

    $content = wpb_js_remove_wpautop($content, true); // fix unclosed/unwanted paragraph tags in $content
	
	$output1 = "<div class='job-box' style='background-color:{$block_color};'>
					<h5>{$title}</h5>
					<p class='text-muted'>{$details}</p>
					<div class='text-center'>
					  <a href='{$button_url}' class='btn btn-custom btn-job' data-toggle='modal' data-target='#{$job_id}' style='background-color:{$button_color};'>{$button_text}</a>
					</div>
                </div>
				<div class='modal fade' id='{$job_id}' tabindex='-1' role='dialog' aria-hidden='true'>
					<div class='modal-dialog modal-custom'>
						<div class='modal-content'>
							<div class='modal-header'>
								<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>×</span><span class='sr-only'>Close</span></button>
								<h4 class='modal-title'>{$modal_title}</h4>
							</div>
							<div class='modal-body'>{$content}</div>
						</div>
					</div>
				</div>";
	return $output1;	
}