<?php
/*
Template Name: Shop Orders
*/
?>
<?php get_header(); ?>
<?php get_sidebar('profile-left'); ?>
<div class="column eightcol">
	<div class="element-title indented">
		<h1><?php _e('Shop Orders', 'makery'); ?></h1>
	</div>
	<?php ThemexInterface::renderTemplateContent('shop-orders'); ?>
	<?php if(ThemexCore::checkOption('shop_multiple')) { ?>
	<span class="secondary"><?php _e('This shop does not exist.', 'makery'); ?></span>
	<?php } else if(ThemexShop::$data['status']!='publish') { ?>
	<span class="secondary"><?php _e('This shop is currently being reviewed.', 'makery'); ?></span>
	<?php } else if(empty(ThemexShop::$data['orders'])) { ?>
	<span class="secondary"><?php _e('No orders received yet.', 'makery'); ?></span>	
	<?php } else { ?>
	<table>
		<thead>
			<tr>
				<th><?php _e('Image', 'makery'); ?></th>
				<th>&#8470;</th>
				<th><?php _e('Date', 'makery'); ?></th>
				<th><?php _e('Status', 'makery'); ?></th>
				<th><?php _e('Total', 'makery'); ?></th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach(ThemexShop::$data['orders'] as $ID) {
				$order=ThemexWoo::getOrder($ID);
				$myorder = new WC_Order($order['ID'] );
				$items = $myorder->get_items();
				foreach ( $items as $key => $item ) {
					$product_id = $item['product_id'];
				}
				$image = wp_get_attachment_image_url(get_post_thumbnail_id( $product_id ), array(100,100));
			?>
			<tr>
				<td style="padding:2px;"><img style="width: 80px;" src="<?php echo $image; ?>"></td>
				<td style="padding:4px;">
					<a href="<?php echo ThemexCore::getURL('shop-order', $order['ID']); ?>">
						<?php echo $order['number']; ?>
					</a>
				</td>
				<td>
					<time datetime="<?php echo date('Y-m-d', strtotime($order['date'])); ?>" title="<?php echo esc_attr(strtotime($order['date'])); ?>"><?php echo date_i18n(get_option('date_format'), strtotime($order['date'])); ?></time>
				</td>
				<td style="padding:2px;"><?php echo $order['condition']; ?></td>
				<td style="padding:2px;"><?php echo $order['total']; ?></td>
				<td class="textright" style="padding:4px;">
					<a href="<?php echo ThemexCore::getURL('shop-order', $order['ID']); ?>" title="<?php _e('Edit', 'makery'); ?>" class="element-button small  secondary">
						<span class="fa fa-pencil"></span> &nbsp;&nbsp; Edit
					</a>
				</td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
	<?php } ?>
</div>
<?php get_sidebar('profile-right'); ?>
<?php get_footer(); ?>