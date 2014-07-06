<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php // Изменяем текущий сайдбар так, чтобы можно было исключить его показ на некоторых категориях или постах
	$excluded_categories = '1,4';	// 'news' = 12
	$excluded_posts = '';
	
	
	
	$show_sidebar = true;

	// Проверяем, не содержится ли текущая страница в списке исключенных
	if($excluded_posts) {
		$excluded_posts_ids = explode( ',', trim( $excluded_posts ) );

		foreach ( $excluded_posts_ids as $exluded_post_id ) {
			if($exluded_post_id == $post->ID)
			{
				$show_sidebar = false;
				break;
			}
		}
	}

	if($show_sidebar)
	{
		$cats = wp_get_post_categories($post->ID);
		if ($cats) {
			$first_cat = $cats[0];
			
			// Проверяем, не содержится ли текущая категория в списке исключенных
			if($excluded_categories)
			{
				$excluded_categories_ids = explode( ',', trim( $excluded_categories ) );
				foreach ( $excluded_categories_ids as $excluded_category_id )
				{
					if($excluded_category_id == $first_cat)
					{
						$show_sidebar = false;
						break;
					}
				}
			}
		}
		else
		{
			$show_sidebar = false;			
		}
	}

	if($show_sidebar)
	{
?>
	<div id="left">
		<div id="left_block" class="navigation">
			<ul>
<?php	// Вывод списка записей в текущей рубрике (текущая запись должна относиться только к одной категории!)
				$args=array(
					'cat' => $first_cat,
//                  'post__not_in' => array($post->ID),
					'showposts'=>-1,
					'caller_get_posts'=>1
				);
				
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() )
				{
					while ($my_query->have_posts()) : $my_query->the_post();
?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
					endwhile;
				} //if ($my_query)
				
				wp_reset_query();  // Restore global post data stomped by the_post().
?>
			</ul>
		</div>
<?php
		if ( function_exists('dynamic_sidebar')) :
			if( is_active_sidebar(1) && $show_sidebar) :
				// Рисуем разделительную полоску
?>
				<div id="left_block" class="border">
				</div>
<?php
	    	endif;
    		dynamic_sidebar(1);
   		endif;
?>		
		</div>
<?php
	}
?>