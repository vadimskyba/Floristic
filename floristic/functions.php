<?php
/*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/

# WIDGET: Left Sidebar (1)
if ( function_exists('register_sidebar') )
    register_sidebar(array(
		'name' => 'Left Sidebar',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
		'before_widget' => '<div id="left_block">',
        'after_widget' => '</div>',
    ));

#Правильное форматирование даты
function format_date($date, $month, $year) {
	
	$output_uk = '<!--:uk-->' . $date . ' ';
	$output_ru = '<!--:ru-->' . $date . ' ';
	
	switch ($month) {
		case 1:	$output_uk .= 'січня';
				$output_ru .= 'января';
				break;
				
		case 2:	$output_uk .= 'лютого';
				$output_ru .= 'февраля';
				break;

		case 3:	$output_uk .= 'березня';
				$output_ru .= 'марта';
				break;

		case 4:	$output_uk .= 'квітня';
				$output_ru .= 'апреля';
				break;

		case 5:	$output_uk .= 'травня';
				$output_ru .= 'мая';
				break;

		case 6:	$output_uk .= 'червня';
				$output_ru .= 'июня';
				break;

		case 7:	$output_uk .= 'липня';
				$output_ru .= 'июля';
				break;

		case 8:	$output_uk .= 'серпня';
				$output_ru .= 'августа';
				break;

		case 9:	$output_uk .= 'вересня';
				$output_ru .= 'сентября';
				break;

		case 10:	$output_uk .= 'жовтня';
				$output_ru .= 'октября';
				break;

		case 11:	$output_uk .= 'листопада';
				$output_ru .= 'ноября';
				break;

		case 12:	$output_uk .= 'грудня';
				$output_ru .= 'декабря';
				break;
		
		default:	return '';		
	}

	$output_uk .= ' ' . $year . '<!--:-->';
	$output_ru .= ' ' . $year . '<!--:-->';

	return __($output_uk . $output_ru);
}

# Удаление '/category/' из url
function seocategorydel($catlink1) {
	$catlink1 = str_replace('/category', '', $catlink1);
	return $catlink1;
}
add_filter('category_link', 'seocategorydel', 1, 1);

# By default, when you click on the Read More link, the web page loads and then "jumps" to the spot where the <--more--> tag is set in the post. If you do not want that "jump", you can use this code in your theme's functions.php:
function remove_more_jump_link($link) { 
	$offset = strpos($link, '#more-');
	if ($offset) {
		$end = strpos($link, '"',$offset);
	}
	if ($end) {
		$link = substr_replace($link, '', $offset, $end-$offset);
	}
	return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

// Correct image path issue in thickbox
function load_tb_fix() {
	echo "\n" . '<script type="text/javascript">tb_pathToImage = "' . get_option('siteurl') . '/wp-includes/js/thickbox/loadingAnimation.gif";tb_closeImage = "' . get_option('siteurl') . '/wp-includes/js/thickbox/tb-close.png";</script>'. "\n";
}
add_action('wp_footer', 'load_tb_fix');

# removes wp header links
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version
?>