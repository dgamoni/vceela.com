<?php

/*

@version 3.0.0

*/



if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header('shop'); ?>



	<?php do_action('woocommerce_before_main_content'); ?>

	<?php if(apply_filters('woocommerce_show_page_title', true)) { ?>

		<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

	<?php } ?>

	<?php do_action('woocommerce_archive_description'); ?>

	<?php if(have_posts()) { ?>

		<?php wc_print_notices(); ?>

		<!--<div class="items-toolbar clearfix">

			<?php //do_action('woocommerce_before_shop_loop'); ?>			

		</div>-->		

		<?php woocommerce_product_loop_start(); ?>

			<?php woocommerce_product_subcategories(); ?>

			<?php 

			while(have_posts()) {

				the_post();

				wc_get_template_part('content', 'product');

			}

			?>

		<?php woocommerce_product_loop_end(); ?>

		<?php do_action('woocommerce_after_shop_loop'); ?>

	<?php } else if(!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) { ?>

		<?php wc_get_template('loop/no-products-found.php'); ?>

	<?php } ?>

	<?php do_action('woocommerce_after_main_content'); ?>








<?php get_footer('shop'); ?>
