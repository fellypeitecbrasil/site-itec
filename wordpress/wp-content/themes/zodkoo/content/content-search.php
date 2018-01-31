<?php if ( get_post_type() == 'post' ) {  

	$post_format = '';
	$post_format = get_post_format_string(get_post_format());
	require get_parent_theme_file_path( 'content/content-'.$post_format.'.php' );
	   
} else { ?>
	<div class="blog_left">
		<div class="search-box">
			<div class="search-contain">
				<header class="entry-header">
					<?php the_title( sprintf( '<h3 class="blog-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			</div>
		</div>
	</div>		
<?php }