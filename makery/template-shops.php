<?php
/*
Template Name: Shops
*/
get_header();

echo '<div class="element-title" style="margin-bottom:2em;">
<h1>Browse All Shops</h1>
</div>
';

$layout=ThemexCore::getOption('shops_layout', 'right');

$columns=3;
if($layout!='full') {
	$columns=3;
}

$width='four';
if($columns==3) {
	$width='four';
}

if($layout=='left') {
?>

<div class="column twelevecol last">
<?php } else if($layout=='right') { ?>
<div class="column twelevecol">
<?php } else { ?>
<div class="fullcol">
<?php } ?>
	<?php 
	echo category_description();	
	if(is_page()) {
		query_posts(array(
			'post_type' =>'shop',
			'paged' => themex_paged(),
			'posts_per_page' => ThemexCore::getOption('shops_per_page', 6),
			'order' => 'ASC',
		));
	}
	
	if(have_posts()) {
	?>
	<div class="shops-wrap clearfix">
		<?php
		$counter=0;
		while(have_posts()) {
			the_post();
			$counter++;
			?>
			<div class="column threecol <?php echo $counter==$columns ? 'last':''; ?>">
				<?php get_template_part('content', 'shop'); ?>
			</div>
			<?php
			if($counter==$columns) {
				$counter=0;
				echo '<div class="clear"></div>';
			}
		}
		?>
	</div>
	<?php } else { ?>
	<h3><?php _e('No shops found. Try a different search?','makery'); ?></h3>
	<p><?php _e('Sorry, no shops matched your search. Try again with some different keywords.','makery'); ?></p>
	<?php } ?>
	<?php ThemexInterface::renderPagination(); ?>
</div>

<?php get_footer(); ?>