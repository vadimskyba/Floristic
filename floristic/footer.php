<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/
	include (TEMPLATEPATH . '/strings.php'); ?>

	        <div class="clear"></div>
    	</div>
        
        <div id="footer">
            <img class="flowers" src="<?php bloginfo('template_url'); ?>/images/flowers.png" width="64px" height="45px" alt="" />            
            <div class="footer_inner">
                
                <div id="copyright">
                	<p>&copy; <?php echo $copyright_years; ?> Калина Креатив</p>
                </div>

                <div id="contacts">
                	<img class="barcode" src="<?php bloginfo('template_url'); ?>/images/barcode.png" width="104px" height="31px" alt="" />
                    <a href="<?php bloginfo('wpurl'); ?>/contacts/"><?php _e("<!--:uk-->Контактна інформація<!--:--><!--:ru-->Контактная информация<!--:-->"); ?></a>
                </div>

                <div id="sitemap_f">
                	<form method="get" id="searchform" action="<?php bloginfo('wpurl'); echo '/'; ?>"><div>
                    	<input type="text" value="<?php the_search_query(); ?>" name="s" id="footer_s" placeholder="<?php _e("<!--:uk-->пошук<!--:--><!--:ru-->поиск<!--:-->"); ?>" />
                        <input type="submit" id="searchsubmit" value="<?php _e("<!--:uk-->Знайти<!--:--><!--:ru-->Найти<!--:-->"); ?>" />
                    </div></form>
                    
                    <p><a href="<?php bloginfo('wpurl'); ?>/sitemap/"><?php _e("<!--:uk-->Карта сайту<!--:--><!--:ru-->Карта сайта<!--:-->"); ?></a></p>
                </div>

              
				<div class="clear"></div>
             
            </div>
        </div>

    </div>
<?php wp_footer(); ?>
</body>
</html>
