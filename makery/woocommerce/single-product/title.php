<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}
?>
<div style="font-size:25px;color:rgb(255, 205, 11);font-weight:bold;margin-bottom:5px;text-align:center">
	<!--<h1 itemprop="name" class="product_title entry-title"><?php the_title(); ?></h1>-->
	<span itemprop="name" class="product_title entry-title"><?php the_title(); ?></span>
	<?php woocommerce_template_single_rating(); ?>
</div>