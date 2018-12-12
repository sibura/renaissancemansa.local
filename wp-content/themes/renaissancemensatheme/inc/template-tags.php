<?php 

if ( ! function_exists( 'renaissancemensatheme_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since Twenty Fifteen 1.5 and our custom theme setup
 */
function renaissancemensatheme_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

?>