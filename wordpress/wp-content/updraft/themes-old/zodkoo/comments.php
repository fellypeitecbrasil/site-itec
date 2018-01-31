<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package zodkoo
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
?>

<div id="comments" class="comments">

<?php if ( post_password_required() ) : ?>
				<p class="nopassword"><?php esc_html_e( 'This post is password protected. Enter the password to view any comments.', 'zodkoo' ); ?></p>
			</div>
<?php
		return;
	endif;
?>
    <?php // You can start editing here -- including this comment! ?>

    <?php if ( have_comments() ) : ?>
        <h3 class="alt-title">
            <?php
                printf( _nx( '1 comment', '%1$s comments', get_comments_number(), 'comments title', 'zodkoo' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h3>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
        <nav id="comment-nav-above" class="comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'zodkoo' ); ?></h1>
            <div class="clearfix">
                <p class="nav-previous pull-left"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'zodkoo' ) ); ?></p>
                <p class="nav-next pull-right"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'zodkoo' ) ); ?></p>
            </div>
        </nav><!-- #comment-nav-above -->
        <?php endif; // check for comment navigation ?>

        <ol class="media-list comments-list">
            <?php wp_list_comments('type=all&callback=zodkoo_comments'); ?>
        </ol><!-- .comment-list -->

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
        <nav id="comment-nav-below" class="comment-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'zodkoo' ); ?></h1>
            <div class="clearfix">
                <p class="nav-previous pull-left"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'zodkoo' ) ); ?></p>
                <p class="nav-next pull-right"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'zodkoo' ) ); ?></p>
            </div>
        </nav><!-- #comment-nav-below -->
        <?php endif; // check for comment navigation ?>

    <?php endif; // have_comments() ?>

    <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) :
    ?>
        <div class="no-comments alert alert-success m-t-20" role="alert">
            <?php esc_html_e( 'Comments are closed.', 'zodkoo' ); ?>
        </div>
    <?php endif; ?>
     <?php
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $comments_args = array(
            'id_form'              => esc_html__('commentform','zodkoo'),
            'id_submit'            => esc_html__('submit','zodkoo'),
            'title_reply'          => esc_html__('Leave A Comment','zodkoo'),
            'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'zodkoo' ),
            'cancel_reply_link'    => esc_html__( 'Cancel Reply', 'zodkoo' ),
            'label_submit'         => esc_html__( 'Post Comment', 'zodkoo' ),
            'class_submit'      => esc_html__( 'btn btn-custom', 'zodkoo' ),
            'class_form'      => esc_html__( 'rply', 'zodkoo' ),
            'comment_field'        =>  '<div class="comment-form-comment form-group"><textarea id="comment" name="comment" cols="45" rows="5" class="form-control" aria-required="true"  placeholder="'. esc_attr('Enter Your Comment...','zodkoo') .'">' .
            '</textarea></div>',

            'comment_notes_before' => esc_html__('','zodkoo'),
			'comment_notes_after' => esc_html__('','zodkoo'),

            'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' =>                    
                    '<div class="comment-form-author form-group">
                    <input id="author" name="author" type="text" class="form-control" value="' . esc_attr( $commenter['comment_author'] ) .
                    '" size="30"' . $aria_req . ' placeholder="'. esc_attr('Enter Your Username...','zodkoo') .'" /></div>' 
                    ,
                'email' =>
                    '<div class="comment-form-email form-group">
                    <input id="email" name="email" type="text" class="form-control" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                    '" size="30"' . $aria_req . ' placeholder="'. esc_attr('Enter Your Email...','zodkoo') .'" /></div>' ,
                  'url' =>
                    '<div class="comment-form-url"><input id="url" class="form-control m-b-20" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
                    '" size="30" placeholder="Enter Your Website..." /></div>',
                )
            ),
        );
        comment_form($comments_args);
    ?>
  
</div><!-- #comments -->