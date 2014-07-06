<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<div id="content_header" <?php echo !is_home() ? 'class="content"' : ''; ?>>
    <img id="content_header_img" src="<?php bloginfo('template_url'); ?>/images/bg_header.gif" alt="" />
    <h1 id="content_header_h1"><span id="content_header_span"><?php 
            if( is_single() || is_page())
            {
                the_title();
            }
            else if( is_category() )
            {
                single_cat_title();
            }
            else if( is_home() )
            {
                _e("<!--:uk-->Останні<!--:--><!--:ru-->Последние<!--:-->");	
            }
            else if( is_search() )
            {
                _e("<!--:uk-->Результати пошуку<!--:--><!--:ru-->Результаты поиска<!--:-->");	
            }
            // is_home()) && !(is_page()) && !(is_single()) && !(is_search()) && !(is_archive()) && !(is_author()) && !(is_category()) && !(is_paged()                	
        ?></span></h1>
</div>