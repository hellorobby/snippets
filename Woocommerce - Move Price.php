/**********************************
*
* Move WooCommerce Price on Single Product Page
*
* @author AlphaBlossom / Tony Eppright
* @link http://www.alphablossom.com
*
* Reference hook locations using woocommerce_single_product_summary hook
*
* @hooked woocommerce_template_single_title – 5
* @hooked woocommerce_template_single_price – 10
* @hooked woocommerce_template_single_excerpt – 20
* @hooked woocommerce_template_single_add_to_cart – 30
* @hooked woocommerce_template_single_meta – 40
* @hooked woocommerce_template_single_sharing – 50
*
************************************/

// Move WooCommerce price
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );