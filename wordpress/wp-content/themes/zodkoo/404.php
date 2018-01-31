<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage zodkoo
 * @since zodkoo 1.0
 */
get_header();
global $zodkoo_setting;
?>
	<!-- 404 error Starts -->
	<section class="app-page-error cd-section index visible no-results">
		<main class="cd-main error_404">

			<div class="container home_container">
				<div>
					<div class="row">
						<div class="col-sm-12 text-right">
							<?php $error_img = '';
							if ( isset( $zodkoo_setting['404_image']['url']) ) {
								$error_img=$zodkoo_setting['404_image']['url'];
							}
							?>
							<img class="error_image img img-responsive center-block" src="<?php echo esc_url($error_img);?>" alt="<?php echo esc_html__('page not found', 'zodkoo'); ?>">
						</div>
						<div class="col-sm-12 error_header_name text-center">
							<h1><?php echo esc_html__('404', 'zodkoo'); ?></h1>
							<?php $error_title = $error_description = '';
							if ( isset( $zodkoo_setting['404_title']) ) {
								$error_title = $zodkoo_setting['404_title'];
							}							
							if ( isset( $zodkoo_setting['404_description']) ) {
								$error_description = $zodkoo_setting['404_description'];
							}?>
							<h3 class="error-title"><?php echo esc_html($error_title); ?></h3>
							<p class="error-text"><?php echo esc_html($error_description); ?></p>
							<a href="<?php echo esc_url(get_home_url() ) ?>" class="btn btn-custom "><?php echo esc_html__('BACK TO HOME PAGE', 'zodkoo'); ?></a>

						</div>
					</div>
				</div>
			</div>

		</main>
	</section>
	<!-- 404 error Ends -->
<?php get_footer(); ?>