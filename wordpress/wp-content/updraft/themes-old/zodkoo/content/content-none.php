<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage zodkoo
 * @since 1.0
 * @version 1.0
 */

global $zodkoo_setting; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<section class="no-results not-found text-center">
				<div class="error_404 text-right">
					<?php $error_img = '';
					if ( isset( $zodkoo_setting['404_image']['url']) ) {
						$error_img=$zodkoo_setting['404_image']['url'];
					}
					?>
					<img class="error_image img img-responsive center-block" src="<?php echo esc_url($error_img);?>" alt="<?php echo esc_html__('page not found', 'zodkoo'); ?>">
				</div>
				<h2 class="page-title"><?php esc_html_e( 'Nothing Found', 'zodkoo' ); ?></h2>

				<div class="page-content">
					<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<h4><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'zodkoo' ), admin_url( 'post-new.php' ) ); ?></h4>

					<?php elseif ( is_search() ) : ?>

					<h5><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'zodkoo' ); ?></h5>
					<?php get_search_form(); ?>

					<?php else : ?>

					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'zodkoo' ); ?></p>
					<?php get_search_form(); ?>

					<?php endif; ?>
				</div><!-- .page-content -->
			</section><!-- .no-results -->
		</div>
	</div>
</div>