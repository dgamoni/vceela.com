'<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
	<title><?php if(!is_front_page()) { $url = $_SERVER['REQUEST_URI']; $tokenarr = explode("/", $url);array_pop($tokenarr); $page_title = array_pop($tokenarr); echo $page_title;} else {$page_title=bloginfo('name'); }?></title>

	<?php if(is_front_page()) { ?> <meta name="description" content="Vceela sells handicrafts. These include clothing, homedecoration, bags, rugs, ceramics and accessories." /> <?php } ?>
	<?php if($page_title=='clothing') { ?> <meta name="description" content="Clothing, Wearing Apparel, Clothes, Fashion, Garments, dress, costume, frock " /> <?php } ?>
	<?php if($page_title=='handmade-bags') { ?> <meta name="description" content="handbags, designer handbags, handmade bags, ladies bags, ladies handbags, handbag, designer handbag, handmade bag, ladies handbag, ladies bag, purse, ladies purse " /> <?php } ?>
	<?php if($page_title=='home-decor') { ?> <meta name="description" content="Decor, Interior decoration, Tray, Wall Art, Decorative Cushion Inserts and Covers, Artificial Flowers and Plants, Candles and Candle holder, Table Decor, Picture Frames, Decorative and Jewelry boxes, Doormats, Vases, Decorative baskets and trays, Statues and Figurines
" /> <?php } ?><?php if($page_title=='accessories') { ?> <meta name="description" content="Folder, Wallet, File Cover, Watches, Keychains" /> <?php } ?>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="google-site-verification" content="F9hmcCpVMD4eX4OCnCaGxwkpm9O1FPsNzwvwNt2iiQk" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php if( function_exists( 'kt_get_favicon' ) ) kt_get_favicon(); ?>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div>
		<div class="header-wrap clearfix">
			<header class="site-header container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
				<div class="header-logo">
					<a href="http://www.vceela.com/" rel="home">
						<img src="http://www.vceela.com/wp-content/uploads/2016/10/logo-head.jpg" alt="Vceela" >
					</a>
				</div>
				</div>
			<div class="col-md-6 col-sm-6 col-xs-12" >
				<!--div class="searchbox" style="margin-top:20px; ">
				
					<form role="search" method="GET" action="http://www.vceela.com/">
						<div class="searchboxinput">

							<input style="border-radius:8px;width:100%;height:28px; " value="" name="s" placeholder="Search..." required="" type="text">

						</div>

												<div style="float:left;">

						
						<input style="background: url(http://www.staging.vceela.com/wp-content/uploads/2016/08/search_button.png);cursor: pointer;border: 0;display: block;height:25px;width:29px;color:transparent!important" name="post_type" value="Search" type="submit">

						</div>
					</form>


					
				</div-->
				
		
        <div class="widget footer-widget woocommerce widget_product_search">
            <form role="search" method="get" class="woocommerce-product-search" action="http://www.vceela.com/">
                <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
                <input type="search" id="woocommerce-product-search-field" class="search-field" placeholder="Search Products&hellip;" value="" name="s" title="Search for:" />
                <input type="submit" value="Search" />
                <input type="hidden" name="post_type" value="product" />
            </form>
        </div>
    </div>					




				<!-- /search -->
				<!--<div class="header-options right clearfix">-->
				<!--</div>-->
				<!-- /options -->
<div class="col-md-3 col-sm-3 col-xs-12" style="text-align:center;">




				<div style="float:left;margin-top:20px">
					<div style="float:right;width:auto;padding-left:10px;padding-right:10px;">
						<a href="http://www.vceela.com/cart/" class="" title="Cart">
							 <img src="http://www.vceela.com/wp-content/uploads/2016/10/cart-1.jpg" height="42" width="42"> 
						</a>
					</div>
					<?php if(is_user_logged_in()) { ?>
						<div style="float:right;width:auto;padding-left:10px;padding-right:10px;">
							<a href="<?php echo wp_logout_url(SITE_URL); ?>" class=""><?php _e('Sign Out','makery'); ?></a>
						</div>
						<div style="float:right;width:auto;padding-left:10px;padding-right:10px;">
							<a href="<?php echo ThemexUser::$data['current']['links']['profile']['url']; ?>" class="primary"><?php _e('My Account','makery'); ?></a>
						</div>
					<?php } else { ?>
						<div style="float:right;width:auto;padding-left:5px;padding-right:5px">
							<a href="#login_form" class="element-colorbox"><?php _e('Sign In','makery'); ?></a>
						</div>
						<div style="float:right;width:auto;padding-left:5px;padding-right:5px">
							<?php if(get_option('users_can_register')) { ?>
							<a href="<?php echo ThemexCore::getURL('register'); ?>" class="primary"><?php _e('Register','makery'); ?></a>
							<?php } ?>
						</div>
</div>
</div>
						<div class="site-popups hidden">
							<div id="login_form">
								<div class="site-popup small">
									<form class="site-form element-form" method="POST" action="<?php echo AJAX_URL; ?>">
										<div class="field-wrap">
											<input type="text" name="user_login" value="" placeholder="Username">
										</div>
										<div class="field-wrap">
											<input type="password" name="user_password" value="" placeholder="Password">
										</div>
										<a href="#" class="element-button element-submit primary">Sign In</a>
																			<a href="#password_form" class="element-button element-colorbox square cboxElement" title="Password Recovery"><span class="fa fa-life-ring"></span></a>
										<input type="hidden" name="user_action" value="login_user">
										<input type="hidden" name="action" class="action" value="themex_update_user">
										<input type="submit" class="hidden" value="">
									</form>
								</div>
							</div>
							<div id="password_form">
								<div class="site-popup small">
									<form class="site-form element-form" method="POST" action="<?php echo AJAX_URL; ?>">
										<div class="field-wrap">
											<input type="text" name="user_email" value="" placeholder="Email">
										</div>
										<a href="#" class="element-button element-submit primary">Reset Password</a>
										<input type="hidden" name="user_action" value="reset_user">
										<input type="hidden" name="action" class="action" value="themex_update_user">
										<input type="submit" class="hidden" value="">
									</form>
								</div>
							</div>
						</div>
					<?php } ?>	
				</div>
					<!-- /popups -->				

				</header>
			<!--<hr style="margin-top:6px;border-color:rgb(200,200,200);"></hr>-->
			<div class="site-toolbar menucontainer">
				<nav class="header-menu element-menu left">
					<?php 
					  wp_nav_menu(array(
						'menu' => 'Responsive Menu', 
						'container_id' => 'cssmenu', 
						'walker' => new CSS_Menu_Walker()
					  )); 
					?> 
					<!--<?php //wp_nav_menu(array('theme_location' => 'main_menu','container_class' => 'menu')); ?>-->
				</nav>
				<div class="select-menu mobile-element-select redirect medium">
					<span></span>
					<?php ThemexInterface::renderDropdownMenu('main_menu'); ?>
				</div>
				<!-- /menu -->
			</div>
			<!--<hr style="border-color:rgb(200,200,200);"></hr>-->
<!----Bread Crumb------>
<?php if (is_front_page()  || is_home() ){ }
else{ ?>	
<div style="background-color:#fecb06;"> 
<div style="margin:15px 20px 20px 25px;"> 
<?php
if ( function_exists( 'yoast_breadcrumb' ) ) {
yoast_breadcrumb();
} 
?>
</div>
</div>
<?php
} 
?>
<!----\Bread Crumb------>

<?php 
	//$page_title = get_the_title();
	//echo $page_title;
	global $post;
	$post_slug = "";
	try {
		if (is_object($post))
		{
			$post_slug = $post->post_name;
		}
	} catch (Exception $e)
	{
		
	}
	//echo "." . $post_slug;
	$category_title = single_cat_title('',false);
	//echo $category_title;
	//echo get_permalink();
	//echo get_permalink( $post->ID );
	//global $post_id;
	//$category_name = get_the_category($post_id);
	//echo "category name is " . $category_name[0];
?>

<!---------------Main Page Slider ------------------>
<?php if (is_front_page()  ){ ?>	
	<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
			<div class="item active" style="margin: auto;  width: 100%; height: 100%">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/buy-directly-banner.jpg" style=" margin: auto;  width: 100%; height: 100%"  alt="" />
			</div>
			<div class="item" style=" margin: auto;  width: 100%; height: 100%">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/camel-skin-banner.jpg" style=" margin: auto;  width: 100%; height: 100%" alt="" />
                <!--<div style="float:left;margin-top:800px; ">
				<a  class="carousel-banner-button punjab-banner-button" href="http://www.vceela.com/shop/naqash/" role="button" >VISIT SHOP</a>-
                </div>-->
			</div>
			<!--div class="item" style=" margin: auto;  width: 100%; height: 100%">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Pakistan-Handicraft.jpg" style=" margin: auto;  width: 100%; height: 100%" alt="" />
				<a class="carousel-banner-button punjab-banner-button" href="http://www.vceela.com/shop/punjab-handicrafts/" role="button">VISIT SHOP</a>
			</div-->			
		</div>

	  <!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

<?php } ?>


<!---------------\Main Page Slider ------------------>

<!---------------Inner Pages Slider ------------------>




<?php if ($category_title == 'Jewelry') { ?>

	<div id="jewelryCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Jewellery.jpg" alt="" />
			</div>

			<div class="item">
			  <img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Jewellery02.jpg" alt="" />
			</div>

		</div>

	</div>

<?php } ?>

<?php if ($category_title == 'handmade rugs/carpets') { ?>

	<div id="rugsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Rugs.jpg" alt="" />
			</div>

	</div>

<?php } ?>


<?php if ($category_title == 'accessories') { ?>

	<div id="accessoriesCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/accessories.jpg" alt="" />
			</div>

			<div class="item">
			  <img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Accessories2.jpg" alt="" />
			</div>

		</div>

	  
	</div>

<?php } ?>

<?php if ($category_title == 'handmade bags') { ?>
	<div id="bagsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Bags.jpg" alt="" />
			</div>

			<div class="item">
			  <img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/bag2.jpg" alt="" />
			</div>

		</div>

	</div>


<?php
} 
?>

<?php if ($category_title == 'clothing') { ?>
	<div id="clothingCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Clothing-2.jpg" alt="" />
			</div>

			<div class="item">
			  <img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Clothing.jpg" alt="" />
			</div>

		</div>

	
	</div>



<?php
} 
?>

<?php if ($post_slug == 'camel-bone-craft')  { ?>
	<div id="camelBoneCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Indicators -->
	 

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Camel-Bone-Craft.jpg" alt="" />
			</div>
		</div>

	
	</div>	
	
<?php } ?>

<?php if ($post_slug == 'sabah-pakistan')  { ?>
	<div id="kashminaCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	 

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/sabah-pakistan.jpg" alt="" />
			</div>
		</div>

	  
	</div>	
	
<?php } ?>


<?php if ($post_slug == 'kashmina')  { ?>
	<div id="kashminaCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Kashmina.jpg" alt="" />
			</div>
		</div>

	  <!-- Left and right controls -->
	
	</div>	
	
<?php } ?>

<?php if ($post_slug == 'naqash')  { ?>
	<div id="naqashCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Indicators -->
	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Naqash.jpg" alt="" />
			</div>
		</div>

	</div>	
	
<?php } ?>


<?php if ($post_slug == 'punjab-handicrafts')  { ?>
	<div id="punjabCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	 
	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Pakistan-Handicraft.jpg" alt="" />
			</div>
		</div>

	
	</div>	
	
<?php } ?>
		
<?php if ($category_title == 'home decor') { ?>
	<div id="homedecorCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	

	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Home-decor-2.jpg" alt="" />
			</div>

			<div class="item">
			  <img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/home-decor.jpg" alt="" />
			</div>

		</div>

	
	</div>
	
<?php
}
?>	
	
<?php //if (!is_page('shops') && !is_singular('shop') && $page_title != 'handcrafted bag' && $page_title != 'Working Model' && $page_title != 'Contact Us' && $post_slug != 'buyers-guide' && $post_slug != 'about-us' && $post_slug != 'seller-handbook' && $post_slug != 'partners' && $post_slug != 'kashmina' && $post_slug != 'register' &&  $page_title != 'register' && $category_title != 'home decor' && $category_title != 'clothing' && $category_title != 'handmade bags' && $category_title != 'accessories' && $category_title != 'handmade rugs/carpets' && $category_title != 'Jewelry') { ?>

<?php if ($post_slug == 'seller-handbook') { ?>
	<div id="workingModelCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Why-Sell-With-Us-Banner.jpg" alt="" />
			</div>
		</div>
	</div>

<?php } ?>

<?php if ($post_slug == 'about-us') { ?>
	<div id="workingModelCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/who-are-we.jpg" alt="" />
			</div>
		</div>
	</div>

<?php } ?>

<!-- displaying working model header -->
<?php if ($page_title == 'Working Model' || $post_slug == 'buyers-guide') { ?>
	<div id="workingModelCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/model.jpg" alt="" />
			</div>
		</div>
	</div>


<?php } ?>


<!-- displaying categories header -->
<?php if ($page_title == 'handcrafted bag') { ?>
	<div id="bagsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/Bags.jpg" alt="" />
			</div>

		</div>

	  <!-- Left and right controls -->
		<a class="left carousel-control" href="#bagsCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#bagsCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div style="">
		<hr style="margin-top:6px;border-color:rgb(200,200,200);">
			<span style="font-size:300%;color:rgb(252, 205, 5);margin-left:5%;font-weight:bold">BAGS</span>
		<hr style="margin-top:6px;border-color:rgb(200,200,200);">
	</div>

<?php } ?>


<!-- Displaying partners header -->
<?php if ($page_title == 'Partners') { ?>
	<div id="contactUsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/partners-banner.jpg" alt="" />
			</div>
		</div>
	</div>


<?php } ?>


<!-- Displaying contact us header -->


<?php if ($page_title == 'Contact Us') { ?>
	<div id="contactUsCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
	  <div class="carousel-inner" role="listbox">
			<div class="item active">
				<img class="aligncenterfullwidth" src="http://www.vceela.com/wp-content/uploads/2016/10/contact_us_banner.jpg" alt="" />
			</div>
		</div>
	</div>


<?php } ?>

<!---------------\Inner Pages Slider ------------------>
			<!-- /header -->




			<!-- /toolbar -->
			<?php if(is_front_page() && is_page()) { ?>
			<?php } else if(is_singular('shop')) { ?>
				<div class="featured-wrap">
					<!--<section class="site-featured container clearfix">-->
					<section class="site-featured clearfix">
						<?php get_template_part('template', 'shop'); ?>
					</section>
				</div>
				<!-- /featured -->
			<?php } else { ?>
				<!-- /title -->
			<?php } ?>
		</div>
		<div class="content-wrap">
		<?php if(is_front_page() and !wp_is_mobile()) { ?>
		<?php } ?>

		<?php if (is_product()) { ?>
			<section class="site-content productcontainer">
			
		<?php } else { ?>
			<!--<section class="site-content container">-->
			<section class="site-content">
		<?php } ?>

<?php 
// If the current user can manage options(ie. an admin)
if( current_user_can( 'manage_options' ) ) 
    // Print the saved global 
    printf( '<div><strong>Current template:</strong> %s</div>', get_current_template() ); 
?>
