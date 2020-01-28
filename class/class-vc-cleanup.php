<?php 
/**
 * Visual Composer
 *
 * Remove some of the default WPBakery (Visual Composer) functions
 *
 * @category   Wordpress
 * @since      Class available since Release 1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) { exit; // Exit if accessed directly.
}
if ( ! class_exists( 'visual_composer' ) ) {
	class visual_composer {

		/**
		 * Constructor
		 **/
		public function __construct() {
			// Remove default VC elements
			add_action( 'vc_after_init', array( $this, 'setup_vc' ) );
		}

		/**
		 * Remove default VC shortcodes and some unused options
		 **/
		public function setup_vc() {

			vc_remove_element( 'vc_btn' );
			vc_remove_element( 'vc_icon' );
			vc_remove_element( 'vc_zigzag' );
			vc_remove_element( 'vc_message' );
			vc_remove_element( 'vc_hoverbox' );
			vc_remove_element( 'vc_facebook' );
			vc_remove_element( 'vc_tweetmeme' );
			vc_remove_element( 'vc_googleplus' );
			vc_remove_element( 'vc_pinterest' );
			vc_remove_element( 'vc_gallery' );
			vc_remove_element( 'vc_images_carousel' );
			vc_remove_element( 'vc_tta_tabs' );
			vc_remove_element( 'vc_tta_tour' );
			vc_remove_element( 'vc_tta_accordion' );
			vc_remove_element( 'vc_tta_pageable' );
			vc_remove_element( 'vc_cta' );
			vc_remove_element( 'vc_flickr' );
			vc_remove_element( 'vc_progress_bar' );
			vc_remove_element( 'vc_pie' );
			vc_remove_element( 'vc_round_chart' );
			vc_remove_element( 'vc_basic_grid' );
			vc_remove_element( 'vc_media_grid' );
			vc_remove_element( 'vc_masonry_grid' );
			vc_remove_element( 'vc_masonry_media_grid' );
			vc_remove_element( 'vc_tabs' );
			vc_remove_element( 'vc_tour' );
			vc_remove_element( 'vc_accordion' );
			vc_remove_element( 'vc_custom_heading' );
			vc_remove_element( 'vc_toggle' );
			vc_remove_element( 'vc_line_chart' );
			vc_remove_element( 'vc_posts_slider' );
		}
	}
	new visual_composer();
}
