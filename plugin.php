<?php
/*
Plugin Name:	Seoplus+ - Oxygen Plugin
Plugin URI:		https://seoplus.ca/
Description:	Used to add custom php functions since we can't use funcitons.php
Version:		1.0.0
Author:			Seoplus
Author URI:		https://seoplus.ca/
License:		GPL-2.0+
License URI:	http://www.gnu.org/licenses/gpl-2.0.txt

*/

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'ct_before_builder', 'wpdoc_add_custom_body_open_code' );
 
function wpdoc_add_custom_body_open_code() {
    echo '<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WJR5DCZ"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->';
}