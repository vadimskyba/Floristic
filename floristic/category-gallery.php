<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/header-common.php'); ?>
<?php include (TEMPLATEPATH . '/sidebar.php'); ?>

<?php if($show_sidebar /* $show_sidebar берем из файла sidebar.php */ ) { ?>
<div id="content_container" class='cc_padding'>
<?php } else { ?>
<div style="width:100%;" class='cc_padding'>
<?php } ?>

	<?php include (TEMPLATEPATH . '/_title.php'); ?>

    <div id="content">
		<?php echo do_shortcode('[media-library-gallery nb="15" category="gallery"]'); ?>
	</div>
</div>
<?php get_footer(); ?>