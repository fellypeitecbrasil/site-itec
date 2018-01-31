<?php get_header();//call header.php
while ( have_posts() ) : the_post();
	?>
	<div class="wrap">
		<div id="primary" class="content-area page-top-bottom">
				<div class="container">
					<?php $title = get_the_content_feed();
					echo $title;  ?>			
				<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>
			</div>
	</div><!-- #primary -->
</div><!-- .wrap -->
	<?php
endwhile;
get_footer(); ?>