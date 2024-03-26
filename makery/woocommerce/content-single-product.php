<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

global $product;
//echo $product->id;
if(ThemexUser::isMember($post->post_author)) {

do_action('woocommerce_before_single_product');
if (post_password_required()) {
	echo get_the_password_form();
	return;
}
?>

<div itemscope itemtype="<?php echo woocommerce_get_product_schema(); ?>" id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<aside class="individual-product-column threecol" style="margin-top:50px">
		<?php		
		do_action('woocommerce_before_single_product_summary');
		echo really_simple_share_publish(get_bloginfo('url'), get_bloginfo('name'));
		$show=false;
		ob_start();
		if($show) {
			echo ob_get_clean();
		} else {
			ob_end_clean();
		}




		?>

		
	</aside>
	<div class="item-full individual-product-column sixcol product-heading">
		<?php do_action('woocommerce_single_product_summary'); ?>
	</div>
<div class="individual-product-column threecol last" style="margin-top:50px">
<?php
		
		echo '<div class="container col-md-12">';
		$shop=ThemexUser::getShop($post->post_author);		
		if(!empty($shop)) {
			ThemexShop::refresh($shop);
			get_template_part('module', 'shop');
			
		}
		echo '</div>';
		ThemexSidebar::renderSidebar('product');
		
		?>
</div>

</div>
<?php do_action('woocommerce_after_single_product'); ?>
<?php } else { ?>
<h3><?php _e('This product is hidden because of the membership limit.','makery'); ?></h3>
<p><?php _e('Sorry, it is hidden because of the membership limit, upgrade or try removing a few products.','makery'); ?></p>
<?php } ?>