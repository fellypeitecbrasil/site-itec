<?php
function zodkoo_page_title_sections() {
 
  global $post;
 
    if ( is_page() ) {
       echo esc_html(get_the_title());
 
    }  elseif ( is_category() ) {
        echo esc_html(single_cat_title());
 
    } elseif ( is_search() ) {
		echo esc_html__('Search : ','zodkoo') . get_search_query();
 
    } elseif ( is_tag() ) {
		echo esc_html__('Tag : ','zodkoo') . single_tag_title('', false);      
 
    } elseif ( is_author() ) {
      global $author;
      $userdata = get_userdata($author);
	  echo esc_html__('Author : ','zodkoo') . $userdata->display_name;
 
    } elseif(is_month() || is_day() || is_year()) { 
		if (is_month()) {
			echo esc_html(get_the_time('F'),'zodkoo');
		} elseif (is_day())  { 
			echo esc_html(get_the_time('d'),'zodkoo');
		} elseif (is_year())  { 
			echo esc_html(get_the_time('Y'),'zodkoo');
		}
		
	} elseif ( is_archive() ) {
		echo esc_html(get_the_title());	
 
    } elseif ( is_404() ) {
      echo esc_html__('Error 404','zodkoo');
	  
    } elseif ( is_single()) {
       echo esc_html(get_the_title());
 
    } elseif ( is_home() ) {
        echo esc_html__('Blog','zodkoo');
    }
} 
?>