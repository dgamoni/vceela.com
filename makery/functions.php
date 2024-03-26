<?php
//Define constants
define('SITE_URL', home_url().'/');
define('AJAX_URL', admin_url('admin-ajax.php'));
define('THEME_PATH', get_template_directory().'/');
define('CHILD_PATH', get_stylesheet_directory().'/');
define('THEME_URI', get_template_directory_uri().'/');
define('CHILD_URI', get_stylesheet_directory_uri().'/');
define('THEMEX_PATH', THEME_PATH.'framework/');
define('THEMEX_URI', THEME_URI.'framework/');
define('THEMEX_PREFIX', 'themex_');

//Set content width
$content_width=940;

//Load language files
load_theme_textdomain('makery', THEME_PATH.'languages');

//Include theme functions
include(THEMEX_PATH.'functions.php');

//Include configuration
include(THEMEX_PATH.'config.php');

//Include core class
include(THEMEX_PATH.'classes/themex.core.php');

//Create theme instance
$themex=new ThemexCore($config);

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
	$time = time();
    if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
         $src = remove_query_arg( 'ver', $src );
         //$src = 'ver='.$time;
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
function add_custom_css() {
	?>
	<script>
		jQuery(document).ready(function($) {
			console.log('footer-js');
			var match = location.hash.match(/^#?(.*)$/)[1];
			console.log(match);
			if(match =='seller') {
				$('#form_buyers').hide();
				$('#reg_buyers').hide();
				$('#form_seller').show();
				$('#reg_seller').show();
			} else {
				$('#form_buyers').show();
				$('#reg_buyers').show();
				$('#form_seller').hide();
				$('#reg_seller').hide();
			}


			// $('#form_buyers').hide(); 
			
			// $('#reg_seller').click(function(event) {
			// 	$('#form_buyers').hide(); 
			// 	$('#form_seller').show(); 
			// 	$('#reg_seller').addClass('actives');
			// 	$('#reg_buyers').removeClass('actives');
			// });
			// $('#reg_buyers').click(function(event) {
			// 	$('#form_buyers').show(); 
			// 	$('#form_seller').hide(); 
			// 	$('#reg_seller').removeClass('actives');
			// 	$('#reg_buyers').addClass('actives');
			// });

	});
	</script>
	<style>
		.woocommerce-account .woocommerce {
			width: 100%
		}
	</style>
	<?php
}
add_action('wp_footer', 'add_custom_css');