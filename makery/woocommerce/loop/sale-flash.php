<?php

/*

@version 3.0.0

*/



if(!defined('ABSPATH')) {

    exit;

}



global $post, $product;



if($product->is_on_sale()) {
$percentage = round( ( ( $product->regular_price - $product->sale_price ) / $product->regular_price ) * 100 );
?>

<div class="item-sale" title="<?php _e('Sale!', 'makery'); ?>">

	<!-- <img src="<?php echo THEME_URI; ?>images/icons/icon-sale.png" alt="On sale"> -->
	<div class="percentage"><?php echo $percentage . '%' ;?></div>
</div>

<?php } ?>