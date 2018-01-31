<?php 
// Page Title Metabox
 
function zodkoo_breadcrumb_meta_box()
{
    add_meta_box('post-page-meta-box', esc_html__('Show Page Heading','zodkoo'), 'zodkoo_custom_meta_box_post_page', 'page', 'normal', 'high', null);
}

add_action('add_meta_boxes', 'zodkoo_breadcrumb_meta_box');

function zodkoo_save_metabox(){ 
    global $post;
    if(isset($_POST["custom_element_grid_class"])){
         //UPDATE
        $meta_element_class = $_POST['custom_element_grid_class'];
        //END OF UPDATE

        update_post_meta($post->ID, 'breadcrumbs-post-meta', $meta_element_class);
    }
}
add_action('save_post', 'zodkoo_save_metabox');

function zodkoo_custom_meta_box_post_page($post){
wp_nonce_field(basename(__FILE__), "meta-box-nonce");
    $meta_element_class = get_post_meta($post->ID, 'breadcrumbs-post-meta', true); //true ensures you get just one value instead of an array
    ?>   
    <label><?php echo esc_html__( 'Show title of page', 'zodkoo' );?> </label>

    <select name="custom_element_grid_class" id="custom_element_grid_class">
      <option value="yes" <?php selected( $meta_element_class, 'yes' ); ?>><?php echo esc_html__('Yes','zodkoo') ?></option>
      <option value="no" <?php selected( $meta_element_class, 'no' ); ?>><?php echo esc_html__('No','zodkoo') ?></option>
    </select>
    <?php
}