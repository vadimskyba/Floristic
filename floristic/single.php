<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/header-common.php'); ?>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>
<?php // Задаем исключения для категорий, в которых не нужно показывать post_info (дату и категории поста)
	$excluded_categories_post_info = '3';	// 'gallery' = 4
?>

<?php if($show_sidebar /* $show_sidebar берем из файла sidebar.php */ ) { ?>
<div id="content_container" class='cc_padding'>
<?php } else { ?>
<div style="width:100%;" class='cc_padding'>
<?php } ?>

	<?php
	if (have_posts()) : the_post(); 
	$arc_year = get_the_time('Y');
	$arc_month = get_the_time('m');
	$arc_day = get_the_time('j');
	?>

        <?php include (TEMPLATEPATH . '/_title.php'); ?>
        
        <div id="content">
            <?php the_content(); ?>

<?php	// Проверяем, не относится ли пост к категории, для потстов которой запрещено показывать post_info
			$show_post_info = true;
			if($excluded_categories)
			{
				$excluded_cats_ids = explode( ',', trim( $excluded_categories_post_info ) );
				
				foreach ( (array)$excluded_cats_ids as $cat ) {
					// get_term_children() accepts integer ID only
					$descendants = get_term_children( (int) $cat, 'category');
					if ( in_category($cat) || ($descendants && in_category( $descendants )) )
					{
						$show_post_info = false;
						break;
					}
				}
			}
			
			if($show_post_info)
			{
?>            
                <div id="post_info"><span class="date"><?php echo format_date($arc_day, $arc_month, $arc_year);?> | <?php
				$post_categories = wp_get_post_categories( $post->ID );
				
				$separator = '';
				foreach($post_categories as $c){
					if($separator)
						echo ', ';
					else
						$separator = ',';
						
					$cat = get_category( $c );
?>
					<a href="<?php echo get_category_link($cat->cat_ID); ?>" title="<?php echo $cat->cat_name; ?>"><?php echo $cat->cat_name; ?></a><?php
				}
?>
				</span></div>
<?php
			}
?>
        </div>    
    
        <div id="comments"><?php //comments_template(); ?></div>
    
	<?php else : ?>
	<div class="notfound">
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that is not here.</p>
	</div>
	<?php endif; ?>
	
</div>

<?php get_footer(); ?>