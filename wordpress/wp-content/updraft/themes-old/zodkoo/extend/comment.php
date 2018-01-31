<?php function get_user_role($id)
{

$user = new WP_User($id);

return array_shift($user->roles);
}

function zodkoo_comments($comment, $args, $depth) {

	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);
    
	if ( 'div' == $args['style'] ) {
		$tag       = 'div';
		$add_below = 'comment';
	} else {
		$tag       = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-wrap">
	<?php endif; ?>
	<div class="comment">
		<div class="media-left commenter-img">
			<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, 64 ); ?>			
		</div>
		<div class="media-body">
			<?php printf('<h4 class="commenter-name">%s</h4>', get_comment_author_link()); ?><?php edit_comment_link(esc_html__('(Edit)', 'zodkoo'),'  ','' );?>		
			<p class="commenter-date">
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
						<?php
						printf( esc_html__('%1$s at %2$s', 'zodkoo'), get_comment_date(),  get_comment_time()) ?>
					</a>
				</p>	

			<div class="para"><?php comment_text() ?></div>

			<div class="bottom-reply">				

				<?php comment_reply_link(array_merge( $args, array(
					'add_below'   => $add_below,
					'depth'       => $depth,
					'reply_text'  => 'Reply <i class="fa fa-arrow-right"></i>',
					'max_depth'   => $args['max_depth']
					))) ?>

			</div>
		</div>
				<?php if ($comment->comment_approved == '0') : ?>
		<em class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'zodkoo') ?></em>
		<br />
		<?php endif; ?>

	</div>

	
	
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }


function zodkoo_scripts() {

	$zodkoo_l10n = array(
		'quote'          => '',
	);

	wp_localize_script( 'zodkoo-skip-link-focus-fix', 'zodkooScreenReaderText', $zodkoo_l10n );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'zodkoo_scripts' );