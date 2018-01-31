<?php
global $zodkoo_setting;
?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage zodkoo
 * @since 1.0
 * @version 1.0
 */
?>
<!-- FOOTER -->
<footer class="section bg-gray footer">
    <div class="container">
        <div class="row">
         <?php if($zodkoo_setting['footer_column'] == 4) { ?>
            <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'footer-sidebar-one' ) ) : ?>
                       <?php dynamic_sidebar( 'footer-sidebar-one' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'footer-sidebar-two' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-sidebar-two' ); ?>
                <?php endif; ?>
            </div>

            <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'footer-sidebar-three' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-sidebar-three' ); ?>
               <?php endif; ?>
            </div>

            <div class="col-md-3 col-sm-6">
                <?php if ( is_active_sidebar( 'footer-sidebar-four' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-sidebar-four' ); ?>
                <?php endif; ?>
            </div>
         <!-- end row -->
        <?php } elseif ($zodkoo_setting['footer_column'] == 3){?>
             <div class="col-md-4 col-sm-6">
                 <?php if ( is_active_sidebar( 'footer-sidebar-one' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-sidebar-one' ); ?>
                 <?php endif; ?>
             </div>
             <div class="col-md-4 col-sm-6">
                 <?php if ( is_active_sidebar( 'footer-sidebar-two' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-sidebar-two' ); ?>
                 <?php endif; ?>
             </div>

             <div class="col-md-4 col-sm-6">
                 <?php if ( is_active_sidebar( 'footer-sidebar-three' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-sidebar-three' ); ?>
                 <?php endif; ?>
             </div>
         <?php } elseif ($zodkoo_setting['footer_column'] == 2){?>
             <div class="col-md-6 col-sm-6">
                 <?php if ( is_active_sidebar( 'footer-sidebar-one' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-sidebar-one' ); ?>
                 <?php endif; ?>
             </div>
             <div class="col-md-6 col-sm-6">
                 <?php if ( is_active_sidebar( 'footer-sidebar-two' ) ) : ?>
                     <?php dynamic_sidebar( 'footer-sidebar-two' ); ?>
                 <?php endif; ?>
             </div>
         <?php }?>
        </div>

        
        <div class="row">
            <div class="col-sm-12">
                <div class="footer-alt text-center"> 
                <?php $copyrihgt_text = '';
                if (isset( $zodkoo_setting['copyrihgt_text'])) { 
                    $copyrihgt_text = $zodkoo_setting['copyrihgt_text'];
                } ?>               
                    <p class="text-muted m-b-0"><?php echo esc_html($copyrihgt_text); ?></p>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->
</footer>
<a href="#" class="back-to-top" id="back-to-top"> <i class="pe-7s-angle-up"> </i> </a>
<!-- END FOOTER -->
<?php wp_footer(); ?>
</body>
</html>