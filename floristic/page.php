<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/header-common.php'); ?>
<?php include (TEMPLATEPATH . '/sidebar-page.php'); ?>

<?php if($children /* $children берем из файла sidebar-page.php */ ) { ?>
<div id="content_container" class='cc_padding'>
<?php } else { ?>
<div style="width:100%;" class='cc_padding'>
<?php } ?>
	
	<?php include (TEMPLATEPATH . '/_title.php'); ?>

	<?php
		if (have_posts()) :
			the_post(); 
			$arc_year = get_the_time('Y');
			$arc_month = get_the_time('m');
			$arc_day = get_the_time('j');
	?>
            <div id="content">
                <?php the_content(); ?>
            </div>    
        
            <div id="comments"><?php //comments_template(); ?></div>
	<?php
    	else :
	?>
        <div class="notfound">
            <h2>Not Found</h2>
            <p>Sorry, but you are looking for something that is not here.</p>
        </div>
	<?php
    	endif;
	?>
	
</div>
<?php get_footer(); ?>