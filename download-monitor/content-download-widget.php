<?php
/**
 * Widget template display
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 } // Exit if accessed directly
 
global $dlm_download, $dlm_page_addon;
?>
<a class="download-link" href="<?php echo $dlm_page_addon->get_download_info_link( $dlm_download ); ?>" rel="nofollow"><?php $dlm_download->the_title(); ?> <?php echo $dlm_download->get_the_version_number();?><?php if ( get_post_meta($dlm_download->id, '_dlm_meta_extra', true) !== '') { echo ' <p>' . get_post_meta($dlm_download->id, '_dlm_meta_extra', true) . '</p>'; } ?></a>
