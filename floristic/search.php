<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/header-common.php'); ?>

<div style="width:100%;" class='cc_padding'>

	<?php include (TEMPLATEPATH . '/_title.php'); ?>
    
	<div id="content">
        <form role="search" method="get" id="searchform" action="<?php bloginfo('wpurl'); echo '/'; ?>">
            <label><?php _e("<!--:uk-->— Я шукаю<!--:--><!--:ru-->— Я ищу<!--:-->"); ?></label>
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="<?php _e("<!--:uk-->пошук<!--:--><!--:ru-->поиск<!--:-->"); ?>" />
            <input type="submit" id="searchsubmit" value="<?php _e("<!--:uk-->Знайти<!--:--><!--:ru-->Найти<!--:-->"); ?>" />
        </form>
    
        <h2 class="title"><?php _e("<!--:uk-->Результати пошуку <!--:--><!--:ru-->Результаты поиска <!--:-->"); ?> '<?php the_search_query(); ?>'</h2>
        
        <?php get_template_part( 'loop', '' ); ?>
	</content>
</div>

<?php get_footer(); ?>
