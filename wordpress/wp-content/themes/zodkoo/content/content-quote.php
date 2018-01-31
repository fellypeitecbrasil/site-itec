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
		<div class="row blog_section  sticky-blog"> <!-- Row Start -->
	<?php } else { ?>
		<div class="row blog_section "> <!-- Row Start -->
	<?php } ?>

		<div class="col-md-12 col-sm-12"> <!-- Blog Details Start -->
			<div class="blog_left"> <!-- Blog Left Start -->
				<div class="blog-date-box">
					<h4 class="text-uppercase bolder"><?php echo get_the_time('j'); ?><br/><?php
						$monthNum = get_the_time('m');
						$monthName = date("F", mktime(0, 0, 0, $monthNum, 10));
						echo substr($monthName, 0, 3);
						?>
					</h4> <!-- Blog Date -->
				</div>
				<div class="blog_block"> <!-- Blog Block Start -->				
					<div class="post_title">
						<i class="qoute_mark fa fa-quote-right pull-left"></i>
						<div class="blog-title">
							<a class="theme-color" href="<?php echo esc_url(the_permalink()); ?>" title="<?php echo esc_attr(the_title_attribute()); ?>"></a><?php echo get_post_meta(get_the_ID(), "quote_format", true); ?><?php echo get_the_content_feed(); ?>
						</div>
						<p class="quote_author theme-color">&mdash; <?php echo esc_html(the_title()); ?></p>							
					</div>					
					<div class="blog_social">
						<h6 class="blog-author-content">
							<span><i class="fa fa-user"></i><?php echo esc_html(the_author_posts_link()); ?></span>
							<span><i class="fa fa-comments-o"></i><?php echo esc_html(get_comments_number()); ?> <?php echo esc_html__('Comments','zodkoo'); ?></span>
						</h6>
					</div>
					<div class="text-right read_more"> <!-- Blog Read More Start -->
						<h5 class="text-right">
							<a href="<?php echo esc_url(the_permalink()); ?>" class="btn btn-custom"><?php echo esc_html__('Read more','zodkoo'); ?></a>
						</h5>
					</div> <!-- Blog Read More End -->
				</div> <!-- Blog Block End -->
			</div> <!-- Blog Left End -->
		</div> <!-- Blog Details End -->
	
    </div> <!-- Row End -->
</article> <!-- Article End -->