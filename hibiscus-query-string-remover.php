<?php
/*
Plugin Name: Query String Remover From Static Resources
Plugin URI: https://www.hibiscustechnolab.com/query-string-remover-static-resources/
Description: Remove query strings from static resources like CSS & JS files to improve your scores in Pingdom, GTmetrix, PageSpeed and YSlow. Visit our <a href="https://www.hibiscustechnolab.com/wordpress-speed-opmization">website</a> for support and professional speed optimization.
Author: Hibiscus Technolab
Version: 1.7
Author URI: https://www.hibiscustechnolab.com
*/
function hsrfsr_esc_query_string( $src ){	
	$str_tofnd = explode( '?ver', $src );
        return $str_tofnd[0];
}
		if ( !is_admin() ) 
		{
add_filter( 'script_loader_src', 'hsrfs_hibiscus_esc_query_string', 15, 1 );
add_filter( 'style_loader_src', 'hsrfs_hibiscus_esc_query_string', 15, 1 );
}

function hsrfsr_esc_query_string_ver( $src ){
	$str_tofnd = explode( '&ver', $src );
        return $str_tofnd[0];
}
		if ( !is_admin() ) {
add_filter( 'script_loader_src', 'hsrfsresc_query_string_ver', 15, 1 );
add_filter( 'style_loader_src', 'hsrfsr_esc_query_string_ver', 15, 1 );
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'hsrfsr_remove_query_strings_link' );

function hsrfsr_remove_query_strings_link( $links ) {
   $links[] = '<a href="https://www.hibiscustechnolab.com/wordpress-speed-optimization/" target="_blank">Professional Speed Optimization</a>';
   return $links;
}
?>