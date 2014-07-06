<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/

	get_header();
	include (TEMPLATEPATH . '/header-home.php');

	$news_cat = 4;		// 'news' категория новостей
	$partners_page_slug = 'partners';
?>
<!-- BEGIN content -->
<div id="home_container" class='cc_padding'>

    <table id="home_header_tbl" width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="right" class="wide">
			<p><?php _e("<!--:uk-->роботи<!--:--><!--:ru-->работы<!--:-->") ?><img class="home_header_line" src="<?php bloginfo('template_url'); ?>/images/line.gif" width="52px" height="1px" alt="" /></p>
        </td>
        <td align="left"><?php include (TEMPLATEPATH . '/_title.php'); ?></td>
        <td align="left" class="wide">
			<p><img class="home_header_line" src="<?php bloginfo('template_url'); ?>/images/line.gif" width="52px" height="1px" alt="" /><?php _e("<!--:uk-->новини<!--:--><!--:ru-->новости<!--:-->") ?></p>
        </td>
      </tr>
    </table>

    <div id="content">
		<div id="home_works">
        	<?php echo do_shortcode('[media-library-gallery nb="6" navigation="0" category="gallery"]'); ?>
            <div class="link_to"><a href="<?php bloginfo('wpurl'); ?>/gallery/"><?php _e("<!--:uk-->Всі роботи<!--:--><!--:ru-->Все работы<!--:-->") ?></a></div>
        </div>
        
		<div id="home_news">
            <?php // Вывод списка записей в категории новостей
				$args=array(
					'cat' => $news_cat,
					'showposts'=>5,
					'caller_get_posts'=>1
				);
				
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
					while ($my_query->have_posts()) : $my_query->the_post();
						$arc_year = get_the_time('Y');
						$arc_month = get_the_time('m');
						$arc_day = get_the_time('j');
		?>
						<div id="home_news_item">
                        <span class="date"><?php echo format_date($arc_day, $arc_month, $arc_year);?> &mdash; </span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php the_content(__('<!--:uk-->(продовження...)<!--:--><!--:ru-->(продолжение...)<!--:-->')); ?>
                        </div>
		<?php
        		endwhile;
				} //if ($my_query)
				wp_reset_query();  // Restore global post data stomped by the_post().
            ?>
            <div class="link_to"><a href="<?php bloginfo('wpurl'); ?>/news/"><?php _e("<!--:uk-->Всі новини<!--:--><!--:ru-->Все новости<!--:-->") ?></a></div>
        </div>
        
        <div class="clear"></div>
        
<?php
			$my_query = new WP_Query( 'pagename=' . $partners_page_slug );
			if( $my_query->have_posts() )
			{
?>				
<?php				
				$my_query->the_post();
				$arc_year = get_the_time('Y');
				$arc_month = get_the_time('m');
				$arc_day = get_the_time('j');
				
				if($post->post_status == 'publish')
				{
?>
					<div id="home_partners">
                    <div id="home_partners_title"><p><img class="home_header_line" src="<?php bloginfo('template_url'); ?>/images/line.gif" width="52px" height="1px" alt="" />
                    <?php the_title(); ?><img class="home_header_line" src="<?php bloginfo('template_url'); ?>/images/line.gif" width="52px" height="1px" alt="" /></p></div>
                    <?php the_content(); ?>
					</div>                    
<?php
				}
?>
<?php				
			}
			wp_reset_query();
?>
    </div>
</div>
<!-- END content -->

<?php get_footer(); ?>
