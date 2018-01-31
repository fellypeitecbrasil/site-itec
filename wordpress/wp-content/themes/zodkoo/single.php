<?php
/**
 * Template Name: Single Blog Template
 *
 * @package WordPress
 * @subpackage Zodkoo
 * @since Zodkoo 1.0.0
 */
?>
<?php global $zodkoo_setting; ?>
<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<section id="blog-details" class="blog-detail-main"> <!-- Blog Section Start -->
    <div class="container"> <!-- Blog Section Container Start -->
        <div class="row"> <!-- Blog Section Row Start -->
            <?php if (isset($zodkoo_setting['blog-layout'])) {
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
					<div class="col-md-9 col-sm-12">
				<?php } elseif ($sidebar_position == 'right-sidebar') { ?>
					<div class="col-md-9 col-sm-12">
				<?php } else { ?>
					<div class="col-md-12 col-sm-12">
				<?php } ?>
				
                <div class="row">
				
					<?php if ( has_post_thumbnail() ) { ?> <!-- Blog Image Start -->
						<div class="col-sm-12 blog_img">
							<img src="<?php echo esc_url(the_post_thumbnail_url('full')); ?>" class="img-responsive" alt="<?php echo esc_html(the_title()); ?>">
						</div>
					<?php } ?> <!-- Blog Image End -->
                    <div class="blog_banner_details"> <!-- Blog Details Start -->                        
                        <div class="col-sm-12"> <!-- Blog Date Start -->
                            <span class="post-date text-muted"><i class="fa fa-calendar mr5"></i>  <?php echo get_the_date(); ?></span>
                        </div> <!-- Blog Date End -->
						<div class="col-sm-12 m-t-20 blog-detail-content"> <!-- Blog Description Start -->
                        <?php if (has_post_format('video')) { 
	                        	$content = apply_filters( 'the_content', get_the_content() );
								$video = false;
								if ( false === strpos( $content, 'wp-playlist-script' ) ) {
									$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
								} ?>	
							<?php if ( ! empty( $video ) ) { ?> 
		                        	<div class="video-wrap">
		 								<?php echo get_the_content_feed(); ?>
		 							</div>
		 						 <?php } else { ?>
		 						 	<?php echo get_the_content_feed(); ?>
		 						 <?php } ?>
                        <?php } else {
                        	echo get_the_content_feed();
                        } ?>
                        
                           
                        </div> <!-- Blog Description End -->
						
						<?php $args_pages = array(
							'before' => '<div class="col-sm-12 blog-navigation">',
							'after' => '</div>',
							'link_before' => '<span>',
							'link_after' => '</span>',
							'pagelink' => '%'
						);

						wp_link_pages($args_pages);	?>
											
						<?php if (has_category()) { ?>
							<div class="col-sm-12">
								<div class="blog_category">
							<h5><?php echo esc_html__('Categories : ','zodkoo'); ?></h5>
							<?php echo esc_html(the_category( ' ' )); ?>
								</div>
							</div>
						<?php } ?>
						
						<?php if (has_tag()) { ?>
							<div class="col-sm-12">
								<div class="blog_tag">
								<h5><?php echo esc_html__('Tags : ','zodkoo'); ?></h5>
							<?php echo the_tags('', ''); ?>
								</div>
							</div>
						<?php } ?>
											
						<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ?> <!-- Blog Social Start -->
                        <div class="col-sm-12 m-b-20">
                            <div class="blog_banner_social">
                            <h5><?php echo esc_html__('Shares : ','zodkoo'); ?></h5>
                                <?php  
                                           ADDTOANY_SHARE_SAVE_KIT( array( 
                                              'buttons' => array( 'facebook', 'twitter', 'google_plus', 'linkedin' ),
                                           ) );
                                            ?>                               
                            </div>
                        </div>
						<?php } ?> <!-- Blog Social End -->
                        
						<?php if (get_the_author_meta('user_description') != '') { ?>
							<div class="col-sm-12 recent_post author-co-detail m-t-20"> <!-- Blog Author Details Start -->
	                            <div class="row valign-wrapper">
	                                <div class="col-sm-12">
	                                    <div class="media">
	                                      <div class="media-left commenter-img">
	                                      <?php $atts  = array('class' => 'img img-responsive img-circle media-object' ); 
	                                     echo get_avatar( get_the_author_meta( 'ID' ), 88); ?>

	                                        
	                                      </div>
	                                      <div class="media-body">
	                                        <h4 class="recent_post_title bolder f-18"><?php echo esc_html(get_the_author_meta('nicename')); ?></h4>
	                                        <p><?php echo esc_html(get_the_author_meta( 'user_description' )); ?></p>
	                                        <span><a href="<?php echo esc_url(get_the_author_meta('user_url')); ?>" class="theme-color f-14"> <?php echo esc_html__('More by','zodkoo') ?> <?php echo esc_html(get_the_author_meta('nicename')); ?></a></span>
	                                      </div>
	                                    </div>
	                                </div>
	                            
	                            </div>
	                        </div> <!-- Blog Author Details End -->
						<?php } ?>
											
                    </div> <!-- Blog Details End -->
                </div> <!-- Row End -->
				<!-- Blog comments Start -->
				<div class="row">
					<div class="col-md-12">
						<?php comments_template(); ?>
					</div>
				</div>
				<!-- Blog comments End -->
				
			</div> <!-- Conditional Div End -->
			<?php if ($sidebar_position == 'right-sidebar') { ?>
				<div class="col-md-3 col-sm-12">
					<div class="right-bar-main">
						<?php if( is_active_sidebar('sidebar') ) { 
							dynamic_sidebar('sidebar'); 
						} ?>
					</div>
				</div>
			<?php } ?>
					
        </div> <!-- Blog Section Row End -->
    </div> <!-- Blog Section Container End -->
</section> <!-- Blog Section End -->

<?php endwhile; ?> 
<?php get_footer(); ?>