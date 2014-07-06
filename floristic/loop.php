<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php
if (have_posts()) :	?>
<ol><?php
while (have_posts()) : the_post(); 
$arc_year = get_the_time('Y');
$arc_month = get_the_time('m');
$arc_day = get_the_time('j');
?>

	<li class="post nolist">
	    <span class="date"><?php echo format_date($arc_day, $arc_month, $arc_year);?> &mdash; </span>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<?php /*the_excerpt();*/ the_content(__('<!--:uk-->(продовження...)<!--:--><!--:ru-->(продолжение...)<!--:-->')); ?>
	</li>
	<?php endwhile; ?>

	<p class="postnav">
		<?php next_posts_link(__("<!--:uk-->Вперед<!--:--><!--:ru-->Вперед<!--:-->")); ?> &nbsp; 
		<?php previous_posts_link(__("<!--:uk-->Назад<!--:--><!--:ru-->Назад<!--:-->")); ?>
	</p>
    
</ol>
<?php else : ?>
	<div class="notfound">
		<h3><?php _e("<!--:uk-->Не знайдено<!--:--><!--:ru-->Не найдено<!--:-->"); ?></h3>
		<p><?php _e("<!--:uk-->Пошукова комбінація ніде не зустрічається.<!--:--><!--:ru-->Поисковая комбинация нигде не встречается.<!--:-->"); ?></p>
	</div>
<?php endif; ?>