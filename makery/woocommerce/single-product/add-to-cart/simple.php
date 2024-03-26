<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

global $product;

if(!$product->is_purchasable()) {
	return;
}

if(!$product->is_in_stock()) {
	$availability=$product->get_availability();
	$availability_html=empty($availability['availability'])?'':'<p class="stock '.esc_attr( $availability['class']).'">'.esc_html($availability['availability']).'</p>';

	echo apply_filters('woocommerce_stock_html', $availability_html, $availability['availability'], $product);
}
	
if($product->is_in_stock()) {
?>
<?php do_action('woocommerce_before_add_to_cart_form'); ?>
<div class="clearfix">
	<?php woocommerce_template_single_price(); ?>
	<form class="cart" action="<?php echo themex_url(); ?>" method="POST" enctype="multipart/form-data">
	 	<?php do_action('woocommerce_before_add_to_cart_button'); ?>		
	 	<?php
		if(!$product->is_sold_individually()) {
			woocommerce_quantity_input(array(
				'min_value' => apply_filters('woocommerce_quantity_input_min', 1, $product),
				'max_value' => apply_filters('woocommerce_quantity_input_max', $product->backorders_allowed()?'':$product->get_stock_quantity(), $product),
			));
		}	 			
	 	?>
		<a href="#" class="element-button element-submit item-cart primary"><?php echo $product->single_add_to_cart_text(); ?></a>
		<a href="#" class="element-button element-submit cart-button square primary" title="<?php echo $product->single_add_to_cart_text(); ?>"><span class="fa fa-shopping-cart large"></span></a>
		<input type="hidden" name="add-to-cart" value="<?php echo esc_attr($product->id); ?>" />
		<?php do_action('woocommerce_after_add_to_cart_button'); ?>
	</form>
	
</div>
<?php do_action('woocommerce_after_add_to_cart_form'); ?>
<?php } ?>