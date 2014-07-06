<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php // Определяем навигацию статических страниц и субстраниц, относительно текущей страницы
if(!$post->post_parent){
	// will display the subpages of this top level page
	$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
}else{
	// diplays only the subpages of parent level
	//$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
	
	if($post->ancestors)
	{
		// now you can get the the top ID of this page
		// wp is putting the ids DESC, thats why the top level ID is the last one
		$ancestors = end($post->ancestors);
		$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
		// you will always get the whole subpages list
	}
} ?>

<?php if ($children) { // Если статическая страница не является дочерней, навигация и виджеты не показываются ?>
	<div id="left">
		<div id="left_block" class="navigation">
			<ul>
				<?php echo $children; ?>
			</ul>
        </div>
    
        <?php // Если есть виджеты, рисуем разделительную полоску
            if ( function_exists('dynamic_sidebar')) :
                if( is_active_sidebar(1) && $children) :
                    
        ?>
                    <div id="left_block" class="border">
                    </div>
        <?php
                endif;
                dynamic_sidebar(1);
            endif;
        ?> 
    
    </div>
<?php } ?>