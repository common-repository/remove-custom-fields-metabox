<?php
/**
 * Plugin Name: Remove custom fields metabox
 * Description: Remove the custom fields metabox to potentially improve performance.
 * Author: BrightMinded Ltd/ Bradley Taylor
 * Author URI: http://brightminded.com
 * Version: 1.0.1
 * Text Domain: remove-custom-fields-metabox
 */
 
if( !defined( 'ABSPATH' ) ) { exit; }

class Remove_custom_fields_metabox
{

	public function __construct()
	{
		add_action( 'admin_menu', array($this, 'remove_post_meta_box'));
	}

	public function remove_post_meta_box()
	{
		if ( is_admin() ) {
			$post_types = get_post_types();

			foreach ($post_types as $post_type) {
				if ( post_type_supports( $post_type, 'custom-fields' ) )
					remove_meta_box( 'postcustom', $post_type, 'normal' );
			}
		}
	}

}

global $remove_custom_fields_metabox;
if( !isset($remove_custom_fields_metabox) ) {
	$remove_custom_fields_metabox = new Remove_custom_fields_metabox();
}