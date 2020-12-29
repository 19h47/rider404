<?php // phpcs:ignore
/**
 * Extras
 *
 * @link https://rider404.com/
 * @since 0.0.0
 *
 * @author Jérémy Levron <jeremylevron@19h47.fr> (https://19h47.fr)
 * @package WordPress
 * @subpackage Rider404/Custom
 */

namespace Rider404\Custom;

/**
 * Extras
 */
class Extras {

	/**
	 * Run default hooks and actions for WordPress
	 *
	 * @return void
	 */
	public function run() : void {
		add_filter( 'body_class', array( $this, 'body_class' ) );
	}


	/**
	 * Adds custom classes to the array of body classes.
	 *
	 * Displays the class names for the body element.
	 *
	 * @param array $classes Space-separated string or array of class names to add to the class list.
	 *
	 * @return $classes array
	 */
	public function body_class( $classes ) : array {
		if ( is_front_page() ) {
			$classes[] = 'Front-page';
		}

		if ( ! is_front_page() && ! is_single() ) {
			$classes[] = 'Page';
		}

		if ( is_product() ) {
			$classes[] = 'Single-product';
		}

		return $classes;
	}

}
