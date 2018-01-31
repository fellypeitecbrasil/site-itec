<?php global $zodkoo_setting; ?>
<?php get_header(); ?>

<?php if ( have_posts() ) { ?>
<div id="primary" class="content-area"> <!-- Primary Div Start -->
	<div class="container"> <!-- Container Start -->
		<div class="row"> <!-- Row Start -->
				<?php  if (isset($zodkoo_setting['blog-layout'])) {
						$sidebar_position = $zodkoo_setting['blog-layout'];
					} else {
						$sidebar_position = '';
					} ?>
				<?php if ($sidebar_position == 'left-sidebar') { ?>
					<div class="col-md-3 col-sm-12">
						<div class="right-bar-main">
							<?php if( is_active_sidebar('sidebar') ) { 
								dynamic_sidebar('sidebar'); 
							} ?>
						</div>
					</div>
					<div class="col-md-9">
					<?php } elseif ($sidebar_position == 'right-sidebar') { ?>
						<div class="col-md-9">
					<?php } else { ?>
						<div class="col-md-9">
					<?php } ?>

					<!-- Display Author Blog -->
							<div class="blog-main">
								<?php	while ( have_posts() ) : the_post();
									if (has_post_format('aside')) { 
										require get_parent_theme_file_path( 'content/content-aside.php' );
									} elseif (has_post_format('audio')) {
										require get_parent_theme_file_path( 'content/content-audio.php' );
									}  elseif (has_post_format('chat')) {
										require get_parent_theme_file_path( 'content/content-chat.php' );
									}  elseif (has_post_format('gallery')) {
										require get_parent_theme_file_path( 'content/content-gallery.php' );
									}  elseif (has_post_format('image')) {
										require get_parent_theme_file_path( 'content/content-image.php' );
									}  elseif (has_post_format('link')) {
										require get_parent_theme_file_path( 'content/content-link.php' );
									}  elseif (has_post_format('quote')) {
										require get_parent_theme_file_path( 'content/content-quote.php' );
									}  elseif (has_post_format('status')) {
										require get_parent_theme_file_path( 'content/content-status.php' );
									}  elseif (has_post_format('video')) {
										require get_parent_theme_file_path( 'content/content-video.php' );
									}  else {
										require get_parent_theme_file_path( 'content/content-aside.php' );
									}
								endwhile; ?>

								
								<?php if (function_exists('zodkoo_numeric_posts_nav')) {
										zodkoo_numeric_posts_nav();
								} ?>
								
							</div>
						</div>
					<?php //if ($sidebar_position == 'right-sidebar') { ?>
						<div class="col-md-3 col-sm-12">
							<div class="right-bar-main">
								<?php if( is_active_sidebar('sidebar') ) { 
									dynamic_sidebar('sidebar'); 
								} ?>
							</div>
						</div>
					<?php //} ?>

		</div>	<!-- Row Start -->
	</div> <!-- Container Start -->
</div><!-- #primary -->

<?php } else {
    require get_parent_theme_file_path( 'content/content-none.php' );
} ?>
<?php get_footer(); ?>