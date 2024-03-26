<?php the_post(); ?>
<?php ThemexShop::refresh($post->ID); ?>

<!--<div style="">
	<img src="<?php //echo htmlspecialchars(ThemexCore::getImageURL(ThemexShop::$data['ID'], 300, THEME_URI.'images/shop.png'), ENT_QUOTES, "UTF-8"); ?>" class="shopbanner">
</div>-->

<!--<div style="display:inline-block;width:100%;text-align:center;font-style:italic;font-size:2em;margin-bottom:10px">
		<?php //the_title(); ?>
</div>-->
<!--<div style="width:10%;position:absolute;top:100px">
	<div class="shop-preview">
		<div class="shop-images single clearfix">
			<div class="image-wrap">
				<?php //echo ThemexCore::getImage(ThemexShop::$data['ID'], 300, THEME_URI.'images/shop.png'); ?>
			</div>
		</div>
		<?php //if(!ThemexCore::checkOption('shop_sales') || !ThemexCore::checkOption('shop_favorites')) { ?>

		<?php //} ?>
	</div>
</div>
-->

<div class="">
	<div class="shop_description_heading">
		<div class="" style="margin-bottom:2em;text-align:center;margin-left:15%">
				<h1><?php the_title(); ?></h1>
		</div>
		<div class="shopicon_shoppage">
			<img src="<?php echo htmlspecialchars(ThemexCore::getImageURL(ThemexShop::$data['ID'], 300, THEME_URI.'images/shop.png'), ENT_QUOTES, "UTF-8"); ?>" style="width:100%;height:100%;">
			<!--<div style="float:bottom;text-align:center;font-style:italic"><?php //the_title(); ?></div>-->
		</div>
		<!--<div class="shop-content">-->
			<div style="margin-top:5%;margin-left:10%">
				<div class="panel-group" id="accordion">
					<div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							  <span class="glyphicon glyphicon-minus"></span>
							  About
							</a>
						  </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse in">
							<div class="panel-body">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			
			<div style="margin-top:5%;margin-left:10%">
				<div class="panel-group" id="accordion-1">
					<div class="panel panel-default">
						<div class="panel-heading">
						  <h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-1" href="#collapseOne-1">
							  <span class="glyphicon glyphicon-minus"></span>
							  Shop Policy
							</a>
						  </h4>
						</div>
						<div id="collapseOne-1" class="panel-collapse collapse in">
							<div class="panel-body">
								<?php echo apply_filters('the_content', ThemexShop::$data['profile']['policy']) ?>
							</div>
						</div>
					</div>
				</div>
			</div>			
		<!--</div>-->
	</div>
</div>