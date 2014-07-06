<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/

include (TEMPLATEPATH . '/strings.php'); ?>

<div id="header">

    <div id="lang_select">
        <?php	if (function_exists("qtrans_generateLanguageSelectCode"))
                    echo qtrans_generateLanguageSelectCode('both');	?>
    </div>
<!--                
    <div id="login">
        <a href="login/">...</a>
    </div>
-->
    <div id="description">
        <p><?php _e("<!--:uk-->Студія флористики та дизайну<!--:--><!--:ru-->Студия флористики и дизайна<!--:-->"); ?></p>
    </div>
    
    <div id="phones_home">
        <div id="phones_1">
            <p><?php _e("<!--:uk-->Телефони<br />студії<!--:--><!--:ru-->Телефоны<br />студии<!--:-->"); ?></p>
        </div>
        
        <div id="phones_2">
            <?php _e("<!--:uk-->— в Києві<!--:--><!--:ru-->— в Киеве<!--:-->"); ?>:<br /><em><?php echo $phone_kiev; ?></em>
        </div>
        
        <div id="phones_3">
            <?php _e("<!--:uk-->— в Тернополі<!--:--><!--:ru-->— в Тернополе<!--:-->"); ?>:<br /><em><?php echo $phone_ternopol; ?></em>
        </div>
    </div>


	<div id="header_home">
        <div id="logo_home">
			<img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="260px" height="115px" alt="<?php bloginfo('name'); ?>"/>
        </div>
 
        <div id="navigation_home" style="margin-top: 4em;">
        	<div id="navigation_home_items">
            
				<div><a href="<?php echo bloginfo('wpurl'); ?>/floristic/">
                <img src="<?php bloginfo('template_url'); ?>/images/01.gif" alt="" />
                <span><?php _e("<!--:uk-->Флористика<!--:--><!--:ru-->Флористика<!--:-->"); ?></span></a></div>
                
                <div><a style="margin-left: 1.4em;" href="<?php echo bloginfo('wpurl'); ?>/phytodesign/">
                <img src="<?php bloginfo('template_url'); ?>/images/02.gif" alt="" />
				<span><?php _e("<!--:uk-->Фітодизайн<!--:--><!--:ru-->Фитодизайн<!--:-->"); ?></span></a></div>

                <div><a style="margin-left: 2.0em;" href="<?php echo bloginfo('wpurl'); ?>/interior/">
                <img src="<?php bloginfo('template_url'); ?>/images/03.gif" alt="" />
				<span><?php _e("<!--:uk-->Дизайн інтер'єру<!--:--><!--:ru-->Дизайн интерьера<!--:-->"); ?></span></a></div>

                <div><a style="margin-left: 3em;" href="<?php echo bloginfo('wpurl'); ?>/carbow/">
                <img src="<?php bloginfo('template_url'); ?>/images/04.gif" alt="" />
				<span><?php _e("<!--:uk-->Автобант<!--:--><!--:ru-->Автобант<!--:-->"); ?></span></a></div>

                <div><a style="margin-left: 3.3em;" href="<?php echo bloginfo('wpurl'); ?>/gallery/">
	            <img src="<?php bloginfo('template_url'); ?>/images/05.gif" alt="" />
				<span><?php _e("<!--:uk-->Галерея<!--:--><!--:ru-->Галерея<!--:-->"); ?></span></a></div>
                    
                <div><a style="margin-left: 3.5em;" href="<?php echo bloginfo('wpurl'); ?>/howto/">
                <img src="<?php bloginfo('template_url'); ?>/images/06.gif" alt="" />
				<span><?php _e("<!--:uk-->Як замовити<!--:--><!--:ru-->Как заказать<!--:-->"); ?></span></a></div>
                    
                <div><a style="margin-left: 3.2em;" href="<?php echo bloginfo('wpurl'); ?>/contacts/">
                <img src="<?php bloginfo('template_url'); ?>/images/07.gif" alt="" />
				<span><?php _e("<!--:uk-->Контакти<!--:--><!--:ru-->Контакты<!--:-->"); ?></span></a></div>
                    
                <div><a style="margin-left: 2.5em;" href="<?php echo bloginfo('wpurl'); ?>/about/">
                <img src="<?php bloginfo('template_url'); ?>/images/08.gif" alt="" />
				<span><?php _e("<!--:uk-->Про нас<!--:--><!--:ru-->О нас<!--:-->"); ?></span></a></div>
                
            </div>
        </div>
    </div>
</div>

<!-- BEGIN body -->