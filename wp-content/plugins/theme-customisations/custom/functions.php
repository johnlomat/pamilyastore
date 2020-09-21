<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */

// display an 'Out of Stock' label on Storewide
add_action( 'woocommerce_before_shop_loop_item_title', function() {
	global $product;
	if ( !$product->is_in_stock() ) {
		echo '<span class="sold-out">Sold Out</span>';
	}
 });
// display an 'Out of Stock' label on single product pages
 add_action( 'woocommerce_before_single_product_summary', function() {
	global $product;
	if ( !$product->is_in_stock() ) {
		echo '<span class="sold-out">Sold Out</span>';
	}
 });