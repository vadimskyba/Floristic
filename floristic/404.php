<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php get_header();

	$message = __("<!--:uk-->Невірно набрана адреса, або такої сторінки на сайті більше не існує.<!--:--><!--:ru-->Неправильно набран адрес, или такой страницы на сайте больше не существует.<!--:-->");
	$home_title = __("<!--:uk-->Головна<!--:--><!--:ru-->Главная<!--:-->");
	$sitemap_title = __("<!--:uk-->Карта сайту<!--:--><!--:ru-->Карта сайта<!--:-->");
?>
			<div id="logo_404">
                 <a href="<?php echo bloginfo('wpurl'); ?>" title="<?php echo $home_title; ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="260px" height="115px"/></a>
            </div>

			<div id="help_404">
            	<p class="title">404</p>
                <p><?php echo $message; ?></p>
                <p class="menu">
	                <a href="<?php echo bloginfo('wpurl'); ?>"><?php echo $home_title; ?></a> | 
                	<a href="<?php echo bloginfo('wpurl'); ?>/sitemap/"><?php echo $sitemap_title; ?></a>
                </p>
            </div>

			<div class="clear"></div>
		</div>
	</div>
<?php wp_footer(); ?>
</body>
</html>