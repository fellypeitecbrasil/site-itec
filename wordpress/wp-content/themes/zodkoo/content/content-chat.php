<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage zodkoo
 * @since 1.0
 * @version 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <!-- Article Start -->
    <?php if (is_sticky()) { ?>
		<div class="row blog_section sticky-blog"> <!-- Row Start -->
	<?php } else { ?>
		<div class="row blog_section"> <!-- Row Start -->
	<?php } ?>

		<?php if ( has_post_thumbnail() ) { ?> <!-- Blog Image Start -->
			<div class="col-md-12 col-sm-12 blog_img">
				<img src="<?php echo esc_url(the_post_thumbnail_url('full')); ?>" class="img-responsive" alt="<?php echo esc_attr(the_title()); ?>">
			</div>
		<?php } ?> <!-- Blog Image End -->
		<div class="col-md-12 col-sm-12"> <!-- Blog Details Start -->
			<div class="blog_left">
				<div class="blog-date-box">
					<h4 class="text-uppercase bolder"><?php echo get_the_time('j'); ?><br/><?php
						$monthNum = get_the_time('m');
						$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
						echo substr($monthName, 0, 3);
						?>
					</h4> <!-- Blog Date -->
				</div>
				<div class="blog_block">
					<!-- Blog Title -->
					<h3 class="blog-title"><a class="theme-color" href="<?php esc_url(the_permalink()); ?>"><?php echo esc_html(the_title()); ?></a></h3> 
					<div class="blog_social"> <!-- Blog Social Start -->
						<h6 class="blog-author-content">
							<span><i class="fa fa-user"></i><?php echo esc_html(the_author_posts_link()); ?></span>
							<span><i class="fa fa-comments-o"></i><?php echo esc_html(get_comments_number()); ?> <?php echo esc_html__('Comments','zodkoo'); ?></span>
						</h6>
					</div> <!-- Blog Social End -->
					<p class="blog-desc"><?php echo get_the_excerpt(); ?></p> <!-- Blog Description -->
					<div class="text-right read_more"> <!-- Blog Read More Start -->
						<h5 class="text-right">
							<a href="<?php echo esc_url(the_permalink()); ?>" class="btn btn-custom"><?php echo esc_html__('Read more','zodkoo'); ?></a>
						</h5>
					</div> <!-- Blog Read More End -->
				</div>
			</div>
		</div> <!-- Blog Details End -->
	
    </div> <!-- Row End -->
</article> <!-- Article End -->