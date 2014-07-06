<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php get_header();
include (TEMPLATEPATH . '/header-common.php');

	// Задаем исключения для страниц (кроме текущей), категорий, постов (через запятую: '2,5,3')
	$excluded_pages = '';
	$excluded_categories = '1';
	$excluded_posts = '';
	
	// Исключает посты из категорий, но не сами категории
	$excluded_categories_posts = '4';	// 'news'
?>

<div style="width:100%;" class='cc_padding'>

    <div id="content_header">
        <img id="content_header_img" src="<?php bloginfo('template_url'); ?>/images/bg_header.gif" />
        <h1 id="content_header_h1"><span id="content_header_span"><?php the_title(); ?></span></h1>
    </div>
    
    <div id="content">
        <?php the_content(); ?>
    
    
<?php // Sitemap generation
	$output = "<div class='sitemap'>\n";

	/* Pages - Статические страницы*/
	$excluded_pages .= $excluded_pages ? "," . $post->ID : $post->ID; // Исключаем текущую (карту сайта) страницу

	$excludes = '';	
	if($excluded_pages) {
		$parents = explode( ',', trim( $excluded_pages ) );

		// Для каждой исключенной страницы исключаем также и все ее субстраницы		
		foreach ( $parents as $parent ) {
		
			if ( $excludes )
				$excludes .= ',' . $parent;
			else
				$excludes = $parent;
				
			$descendants = get_pages( array( 'child_of' => $parent ) );
			
			foreach ( $descendants as $descendant )
				$excludes .= ',' . $descendant->ID;
		}
	}
	
	//$output .= "<h2>Pages</h2>\n";
	$output .= "<ul class='pages'>\n";
	$output .= wp_list_pages( array( 'title_li' => '', 'echo' => 0, 'exclude' => $excludes ) );
	$output .= "</ul>\n";

	/* Categories/Posts - Категории и записи*/
	//$output .= "<h2>Posts</h2>\n";
	$output .= "<ul class='posts'>\n";
		
	$categories = get_categories( array( 'exclude' => $excluded_categories ) );
	
	foreach ( $categories as $category ) {
	
		$output .= "<li><a href='" . get_category_link($category->cat_ID) . "' title='" . $category->cat_name . "' >";
		$output .= $category->cat_name;
		$output .= "</a>\n";
		
		
			$show_cat_posts = true;
			if($excluded_categories_posts)
			// Проверяем, не нужно ли исключить из карты записи текущей категории
			{
				
				$ex_cat_posts_ids = explode( ',', trim( $excluded_categories_posts ) );
				
				foreach ( $ex_cat_posts_ids as $ex_cat_posts_id ) {
					if( $ex_cat_posts_id == $category->cat_ID )
					{
						$show_cat_posts = false;
						break;	
					}
				}
			}
			
			if($show_cat_posts)
			{
				$output .= "<ul>";
			
					$posts = get_posts( array( 'numberposts' => -1, 'category' => $category->cat_ID, 'exclude' => $excluded_posts ) );
					foreach ( $posts as $post ) {
					
						/* Only display a post once, even if it appears in multiple categories. */
						$postCategories = get_the_category( $post->ID );
						if ( $category->cat_ID == $postCategories[0]->cat_ID ) {
							$link = get_permalink( $post->ID );
							$title = __($post->post_title);
							
							//$comments = $settings['sitemap-post-commentcount'] ? ' (' . $post->comment_count . ')' : '';
							//$output .= "<li><a href='{$link}'>{$title}</a>{$comments}</li>\n";
							$output .= "<li><a href='{$link}'>{$title}</a></li>\n";
						}
					}
					
				$output .= "</ul>\n";
			}
			
		$output .= "</li>\n";
	}
		
	$output .= "</ul>\n";
		
	// End sitemap	
	$output .= "</div>\n"; // div class='sitemap'
	
	echo $output;
?>

    </div>    
</div>

<?php get_footer(); ?>