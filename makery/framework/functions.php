<?php

/**
 * Check to see if the current page is the login/register page
 * Use this in conjunction with is_admin() to separate the front-end from the back-end of your theme
 * @return bool
 */
/*if ( ! function_exists( 'is_login_page' ) ) {
  function is_login_page() {
    return in_array( $GLOBALS['pagenow'], array( 'wp-login.php', 'wp-register.php' ) );
  }
}*/


add_filter( 'template_include', 'var_template_include', 1000 );
function var_template_include( $t ){
    $GLOBALS['current_theme_template'] = basename($t);
    return $t;
}

function get_current_template( $echo = false ) {
    if( !isset( $GLOBALS['current_theme_template'] ) )
        return false;
    if( $echo )
        echo $GLOBALS['current_theme_template'];
    else
        return $GLOBALS['current_theme_template'];
}







function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        //wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
		//wp_register_script('jquery', 'https://code.jquery.com/jquery-1.10.2.js', false, '1.10.2');
		
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

function myscript_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_head' , 'myscript_jquery' );

function myscript1() {
	?>
		<script type="text/javascript">
			$('.collapse').on('shown.bs.collapse', function(){
			$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
			}).on('hidden.bs.collapse', function(){
			$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
			});
		</script>
	<?php
}
add_action('wp_footer', 'myscript1');


function myscript() {
	wp_register_script('custom_script',
		get_template_directory_uri() . '/js/scroll_script_50.js',array('jquery') , '1.0' );
	// enqueue the script
	wp_enqueue_script('custom_script');
}
add_action( 'wp_footer', 'myscript' );

function my_scripts_enqueue() {
    wp_register_script( 'bootstrap-js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('jquery'), NULL, true );

    wp_register_style( 'bootstrap-css', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', false, NULL, 'all' );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );

function get_product_category_by_id( $category_id ) {
    $term = get_term_by( 'id', $category_id, 'product_cat', 'ARRAY_A' );
    return $term['name'];
}

function print_sizeguide_link()
{
   	//echo 'abc';
	//$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
	//var_dump($product_cats);
        global $post;
        $terms = get_the_terms( $post->ID, 'product_cat' );
        foreach ($terms as $term) {
            $product_cat_id = $term->term_id;
            break;
        }
        //echo $product_cat_id;

        $product_category = get_product_category_by_id( $product_cat_id );
        //echo $product_category;
	
	if (is_product_category('women-pants-jeans'))
	//if (is_product_category('clothing'))
	{
		echo '<a href="http://www.vceela.com/womens-pants-and-jeans-size-guide/">Size Guide</a>';
	}

	if($product_category == "Women's Tops and Kurtas")
	{
		echo '<a href="http://www.vceela.com/womens-tops-and-kurtas-size-guide/">Size Guide</a>';
	}
}

/**
 * Removes slashes
 *
 * @param string $string
 * @return string
 */
function themex_stripslashes($string) {
	if(!is_array($string)) {
		return stripslashes(stripslashes($string));
	}
	
	return $string;	
}

/**
 * Gets page number
 *
 * @return int
 */
function themex_paged() {
	$paged=get_query_var('paged')?get_query_var('paged'):1;
	$paged=(get_query_var('page'))?get_query_var('page'):$paged;
	
	return $paged;
}

/**
 * Checks search page
 *
 * @param string $type
 * @return bool
 */
function themex_search($type) {
	if(isset($_GET['s']) && ((isset($_GET['post_type']) && $_GET['post_type']==$type) || (!isset($_GET['post_type']) && $type=='post'))) {
		return true;
	}
	
	return false;
}

/**
 * Gets array value
 *
 * @param string $key
 * @param array $array
 * @param string $default
 * @return mixed
 */
function themex_value($key, $array, $default='') {
	$value='';
	
	if(isset($array[$key])) {
		if(is_array($array[$key])) {
			$value=reset($array[$key]);
		} else {
			$value=$array[$key];
		}
	} else if ($default!='') {
		$value=$default;
	}
	
	return $value;
}

/**
 * Gets array item
 *
 * @param string $key
 * @param array $array
 * @param string $default
 * @return mixed
 */
function themex_array($key, $array, $default='') {
	$value='';
	
	if(isset($array[$key])) {
		$value=$array[$key];
	} else if ($default!='') {
		$value=$default;
	}
	
	return $value;
}

/**
 * Gets period name
 *
 * @param int $period
 * @return string
 */
function themex_period($period) {	
	switch($period) {
		case 7: 
			$period=__('week', 'makery');
		break;
		
		case 31: 
			$period=__('month', 'makery');
		break;
		
		case 365: 
			$period=__('year', 'makery');
		break;
		
		default:
			$period=round($period/31).' '.__('months', 'makery');
		break;
	}
	
	return $period;
}

/**
 * Implodes array or value
 *
 * @param string $value
 * @param string $prefix
 * @return string
 */
function themex_implode($value, $prefix='') {
	if(is_array($value)) {
		$value=array_map('sanitize_key', $value);
		$value=implode("', '".$prefix, $value);
	} else {
		$value=sanitize_key($value);
	}
	
	$value="'".$prefix.$value."'";	
	return $value;
}

/**
 * Gets current URL
 *
 * @param bool $private
 * @return string
 */
function themex_url($private=false, $default='') {
	$url=@(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS']!='on') ? 'http://'.$_SERVER['SERVER_NAME']:'https://'.$_SERVER['SERVER_NAME'];
	$url.=$_SERVER['REQUEST_URI'];
	
	return $url;
}

/**
 * Gets file name
 *
 * @param string $url
 * @return string
 */
function themex_filename($url) {
	$name=__('Untitled', 'makery');
	$parts=parse_url($url);
	
	if(isset($parts['path'])) {
		$name=basename($parts['path']);
	}
	
	return $name;
}

/**
 * Checks empty taxonomy
 *
 * @param string $name
 * @return bool
 */
function themex_taxonomy($name) {
	$terms=get_terms($name, array(
		'fields' => 'count',
		'hide_empty' => false,
	));
	
	if($terms!=0) {
		return true;
	}
	
	return false;
}

/**
 * Gets post status
 *
 * @param int $ID
 * @return string
 */
function themex_status($ID) {
	$status='draft';
	if(!empty($ID)) {
		$status=get_post_status($ID);
	}
	
	return $status;
}

/**
 * Replaces string keywords
 *
 * @param string $string
 * @param array $keywords
 * @return string
 */
function themex_keywords($string, $keywords) {
	foreach($keywords as $keyword => $value) {
		$string=str_replace('%'.$keyword.'%', $value, $string);
	}
	
	return $string;
}

/**
 * Sends encoded email
 *
 * @param string $recipient
 * @param string $subject
 * @param string $message
 * @param string $reply
 * @return bool
 */
function themex_mail($recipient, $subject, $message, $reply='') {
	$headers='MIME-Version: 1.0'.PHP_EOL;
	$headers.='Content-Type: text/html; charset=UTF-8'.PHP_EOL;
	$headers.='From: '.get_option('admin_email').PHP_EOL;
	
	if(!empty($reply)) {
		$headers.='Reply-To: '.$reply.PHP_EOL;
	}
	
	$subject='=?UTF-8?B?'.base64_encode($subject).'?=';	
	if(wp_mail($recipient, $subject, $message, $headers)) {
		return true;
	}
	
	return false;
}

/**
 * Sanitizes key
 *
 * @param string $string
 * @return string
 */
function themex_sanitize_key($string) {
	$replacements=array(
		// Latin
		'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'AE', 'Ç' => 'C', 
		'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 
		'Ð' => 'D', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'O' => 'O', 
		'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'U' => 'U', 'Ý' => 'Y', 'Þ' => 'TH', 
		'ß' => 'ss', 
		'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'ae', 'ç' => 'c', 
		'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 
		'ð' => 'd', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'o' => 'o', 
		'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'u' => 'u', 'ý' => 'y', 'þ' => 'th', 
		'ÿ' => 'y',
 
		// Greek
		'?' => 'A', '?' => 'B', 'G' => 'G', '?' => 'D', '?' => 'E', '?' => 'Z', '?' => 'H', 'T' => '8',
		'?' => 'I', '?' => 'K', '?' => 'L', '?' => 'M', '?' => 'N', '?' => '3', '?' => 'O', '?' => 'P',
		'?' => 'R', 'S' => 'S', '?' => 'T', '?' => 'Y', 'F' => 'F', '?' => 'X', '?' => 'PS', 'O' => 'W',
		'?' => 'A', '?' => 'E', '?' => 'I', '?' => 'O', '?' => 'Y', '?' => 'H', '?' => 'W', '?' => 'I',
		'?' => 'Y',
		'a' => 'a', 'ß' => 'b', '?' => 'g', 'd' => 'd', 'e' => 'e', '?' => 'z', '?' => 'h', '?' => '8',
		'?' => 'i', '?' => 'k', '?' => 'l', 'µ' => 'm', '?' => 'n', '?' => '3', '?' => 'o', 'p' => 'p',
		'?' => 'r', 's' => 's', 't' => 't', '?' => 'y', 'f' => 'f', '?' => 'x', '?' => 'ps', '?' => 'w',
		'?' => 'a', '?' => 'e', '?' => 'i', '?' => 'o', '?' => 'y', '?' => 'h', '?' => 'w', '?' => 's',
		'?' => 'i', '?' => 'y', '?' => 'y', '?' => 'i',
 
		// Turkish
		'S' => 'S', 'I' => 'I', 'Ç' => 'C', 'Ü' => 'U', 'Ö' => 'O', 'G' => 'G',
		's' => 's', 'i' => 'i', 'ç' => 'c', 'ü' => 'u', 'ö' => 'o', 'g' => 'g', 
 
		// Russian
		'?' => 'A', '?' => 'B', '?' => 'V', '?' => 'G', '?' => 'D', '?' => 'E', '?' => 'Yo', '?' => 'Zh',
		'?' => 'Z', '?' => 'I', '?' => 'J', '?' => 'K', '?' => 'L', '?' => 'M', '?' => 'N', '?' => 'O',
		'?' => 'P', '?' => 'R', '?' => 'S', '?' => 'T', '?' => 'U', '?' => 'F', '?' => 'H', '?' => 'C',
		'?' => 'Ch', '?' => 'Sh', '?' => 'Sh', '?' => '', '?' => 'Y', '?' => '', '?' => 'E', '?' => 'Yu',
		'?' => 'Ya',
		'?' => 'a', '?' => 'b', '?' => 'v', '?' => 'g', '?' => 'd', '?' => 'e', '?' => 'yo', '?' => 'zh',
		'?' => 'z', '?' => 'i', '?' => 'j', '?' => 'k', '?' => 'l', '?' => 'm', '?' => 'n', '?' => 'o',
		'?' => 'p', '?' => 'r', '?' => 's', '?' => 't', '?' => 'u', '?' => 'f', '?' => 'h', '?' => 'c',
		'?' => 'ch', '?' => 'sh', '?' => 'sh', '?' => '', '?' => 'y', '?' => '', '?' => 'e', '?' => 'yu',
		'?' => 'ya',
 
		// Ukrainian
		'?' => 'Ye', '?' => 'I', '?' => 'Yi', '?' => 'G',
		'?' => 'ye', '?' => 'i', '?' => 'yi', '?' => 'g',
 
		// Czech
		'C' => 'C', 'D' => 'D', 'E' => 'E', 'N' => 'N', 'R' => 'R', 'Š' => 'S', 'T' => 'T', 'U' => 'U', 
		'Ž' => 'Z', 
		'c' => 'c', 'd' => 'd', 'e' => 'e', 'n' => 'n', 'r' => 'r', 'š' => 's', 't' => 't', 'u' => 'u',
		'ž' => 'z', 
 
		// Polish
		'A' => 'A', 'C' => 'C', 'E' => 'e', 'L' => 'L', 'N' => 'N', 'Ó' => 'o', 'S' => 'S', 'Z' => 'Z', 
		'Z' => 'Z', 
		'a' => 'a', 'c' => 'c', 'e' => 'e', 'l' => 'l', 'n' => 'n', 'ó' => 'o', 's' => 's', 'z' => 'z',
		'z' => 'z',
 
		// Latvian
		'A' => 'A', 'C' => 'C', 'E' => 'E', 'G' => 'G', 'I' => 'i', 'K' => 'k', 'L' => 'L', 'N' => 'N', 
		'Š' => 'S', 'U' => 'u', 'Ž' => 'Z',
		'a' => 'a', 'c' => 'c', 'e' => 'e', 'g' => 'g', 'i' => 'i', 'k' => 'k', 'l' => 'l', 'n' => 'n',
		'š' => 's', 'u' => 'u', 'ž' => 'z'
	);	
	
	$string=str_replace(array_keys($replacements), $replacements, $string);
	$string=preg_replace('/\s+/', '-', $string);
	$string=preg_replace('!\-+!', '-', $string);
	$filtered=$string;
	
	$string=preg_replace('/[^A-Za-z0-9-]/', '', $string);
	$string=strtolower($string);
	$string=trim($string, '-');
	
	if(empty($string) || $string[0]=='-') {
		$string='a'.md5($filtered);
	}
	
	return $string;
}

/**
 * Resize image
 *
 * @param string $url
 * @param int $width
 * @param int $height
 * @return array
 */
function themex_resize($url, $width, $height) {
	add_filter('image_resize_dimensions', 'themex_scale', 10, 6);

	$upload_info=wp_upload_dir();
	$upload_dir=$upload_info['basedir'];
	$upload_url=$upload_info['baseurl'];
	
	//check prefix
	$http_prefix='http://';
	$https_prefix='https://';
	
	if(!strncmp($url, $https_prefix, strlen($https_prefix))){
		$upload_url=str_replace($http_prefix, $https_prefix, $upload_url);
	} else if (!strncmp($url, $http_prefix, strlen($http_prefix))){
		$upload_url=str_replace($https_prefix, $http_prefix, $upload_url);		
	}	

	//check URL
	if (strpos($url, $upload_url)===false) {
		return false;
	}

	//define path
	$rel_path=str_replace($upload_url, '', $url);
	$img_path=$upload_dir.$rel_path;

	//check file
	if (!file_exists($img_path) or !getimagesize($img_path)) {
		return false;
	}

	//get file info
	$info=pathinfo($img_path);
	$ext=$info['extension'];
	list($orig_w, $orig_h)=getimagesize($img_path);

	//get image size
	$dims=image_resize_dimensions($orig_w, $orig_h, $width, $height, true);
	$dst_w=$dims[4];
	$dst_h=$dims[5];

	//resize image
	if((($height===null && $orig_w==$width) xor ($width===null && $orig_h==$height)) xor ($height==$orig_h && $width==$orig_w)) {
		$img_url=$url;
		$dst_w=$orig_w;
		$dst_h=$orig_h;
	} else {
		$suffix=$dst_w.'x'.$dst_h;
		$dst_rel_path=str_replace('.'.$ext, '', $rel_path);
		$destfilename=$upload_dir.$dst_rel_path.'-'.$suffix.'.'.$ext;

		if(!$dims) {
			return false;
		} else if(file_exists($destfilename) && getimagesize($destfilename) && empty($_FILES)) {
			$img_url=$upload_url.$dst_rel_path.'-'.$suffix.'.'.$ext;
		} else {
			if (function_exists('wp_get_image_editor')) {
				$editor=wp_get_image_editor($img_path);
				if (is_wp_error($editor) || is_wp_error($editor->resize($width, $height, true))) {
					return false;
				}

				$resized_file=$editor->save();

				if (!is_wp_error($resized_file)) {
					$resized_rel_path=str_replace($upload_dir, '', $resized_file['path']);
					
					$img_url=$upload_url.$resized_rel_path.'?'.time();
				} else {
					return false;
				}
			} else {
				$resized_img_path=image_resize($img_path, $width, $height, true);
				
				if (!is_wp_error($resized_img_path)) {
					$resized_rel_path=str_replace($upload_dir, '', $resized_img_path);
					$img_url=$upload_url.$resized_rel_path;
				} else {
					return false;
				}
			}
		}
	}

	remove_filter('image_resize_dimensions', 'themex_scale');
	return $img_url;
}

/**
 * Scale image
 *
 * @param string $default
 * @param int $orig_w
 * @param int $orig_h
 * @param int $dest_w
 * @param int $dest_h
 * @param bool $crop
 * @return array
 */
function themex_scale($default, $orig_w, $orig_h, $dest_w, $dest_h, $crop) {
	$aspect_ratio=$orig_w/$orig_h;
	$new_w=$dest_w;
	$new_h=$dest_h;

	if (!$new_w) {
		$new_w=intval($new_h*$aspect_ratio);
	}

	if (!$new_h) {
		$new_h=intval($new_w/$aspect_ratio);
	}

	$size_ratio=max($new_w/$orig_w, $new_h/$orig_h);
	$crop_w=round($new_w/$size_ratio);
	$crop_h=round($new_h/$size_ratio);

	$s_x=floor(($orig_w-$crop_w)/2);
	$s_y=floor(($orig_h-$crop_h)/2);
	$scale=array(0, 0, (int)$s_x, (int)$s_y, (int)$new_w, (int)$new_h, (int)$crop_w, (int)$crop_h);

	return $scale;
}

	
class CSS_Menu_Walker extends Walker {
 
  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
  
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul>\n";
  }
  
  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
  
  function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
  
    global $wp_query;
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $class_names = $value = ''; 
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    
    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }
    
    /* Check for children */
    $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' =>'_menu_item_menu_item_parent', 'meta_value' => $item->ID));
    if (!empty($children)) {
      $classes[] = 'has-sub';
    }
    
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    
    $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    
    $output .= $indent . '<li' . $id . $value . $class_names .'>';
    
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    
    $item_output = $args->before;
    $item_output .= '<a'. $attributes .'><span>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    $item_output .= '</span></a>';
    $item_output .= $args->after;
    
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
  }
  
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
} 