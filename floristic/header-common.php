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
    
    <div id="logo">
        <a href="<?php echo bloginfo('wpurl'); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/logo.png" width="260px" height="115px" alt="<?php bloginfo('name'); ?>" />
        </a>
    </div>

    <div id="phones">
        <p><?php _e("<!--:uk-->Телефони студії<!--:--><!--:ru-->Телефоны студии<!--:-->"); ?></p>
        <ul>
            <li><?php _e("<!--:uk-->в Києві<!--:--><!--:ru-->в Киеве<!--:-->"); ?>:<br /><em><?php echo $phone_kiev; ?></em></li>
            <li><?php _e("<!--:uk-->в Тернополі<!--:--><!--:ru-->в Тернополе<!--:-->"); ?>:<br /><em><?php echo $phone_ternopol; ?></em></li>
        </ul>
    </div>

    <div id="header_navigation">
        <div>
            <ul id="ie_centering">
                <li><a href="<?php echo bloginfo('wpurl'); ?>/floristic/"><img src="<?php bloginfo('template_url'); ?>/images/01.gif" alt="" />
                    <?php _e("<!--:uk-->Флористика<!--:--><!--:ru-->Флористика<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/phytodesign/"><img src="<?php bloginfo('template_url'); ?>/images/02.gif" alt="" />
                    <?php _e("<!--:uk-->Фітодизайн<!--:--><!--:ru-->Фитодизайн<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/interior/"><img src="<?php bloginfo('template_url'); ?>/images/03.gif" alt="" />
                    <?php _e("<!--:uk-->Дизайн інтер'єру<!--:--><!--:ru-->Дизайн интерьера<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/carbow/"><img src="<?php bloginfo('template_url'); ?>/images/04.gif" alt="" />
                    <?php _e("<!--:uk-->Автобант<!--:--><!--:ru-->Автобант<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/gallery/"><img src="<?php bloginfo('template_url'); ?>/images/05.gif" alt="" />
                    <?php _e("<!--:uk-->Галерея<!--:--><!--:ru-->Галерея<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/howto/"><img src="<?php bloginfo('template_url'); ?>/images/06.gif" alt="" />
                    <?php _e("<!--:uk-->Як замовити<!--:--><!--:ru-->Как заказать<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/contacts/"><img src="<?php bloginfo('template_url'); ?>/images/07.gif" alt="" />
                    <?php _e("<!--:uk-->Контакти<!--:--><!--:ru-->Контакты<!--:-->"); ?></a></li>
                <li><a href="<?php echo bloginfo('wpurl'); ?>/about/"><img src="<?php bloginfo('template_url'); ?>/images/08.gif" alt="" />
                    <?php _e("<!--:uk-->Про нас<!--:--><!--:ru-->О нас<!--:-->"); ?></a></li>
            </ul>
        </div>
    </div>
    
    <div class="clean"></div>
    
</div>