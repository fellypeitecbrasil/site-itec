<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage zodkoo
 * @since zodkoo 1.0
 */
global $zodkoo_setting;
get_header(); ?>

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
						<div class="col-md-12">
					<?php } ?>

					<!-- Display Author Blog -->

							<?php while ( have_posts() ) : the_post();
								require get_parent_theme_file_path( 'content/content-search.php' );
							endwhile; ?>

							<div class="col-md-12">
								<?php if (function_exists('zodkoo_numeric_posts_nav')) {
									zodkoo_numeric_posts_nav();
								} ?>
							</div>

						</div>
					<?php if ($sidebar_position == 'right-sidebar') { ?>
						<div class="col-md-3 col-sm-12">
							<div class="right-bar-main">
								<?php if( is_active_sidebar('sidebar') ) { 
									dynamic_sidebar('sidebar'); 
								} ?>
							</div>
						</div>
					<?php } ?>

		</div>	<!-- Row Start -->
	</div> <!-- Container Start -->
</div><!-- #primary -->

<?php } else {
    require get_parent_theme_file_path( 'content/content-none.php' );
} ?>
<?php get_footer(); ?>