<?php /*
(c) 2011 Vadim Skyba
*/?>

<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/header-common.php'); ?>

<div style="width:100%;" class='cc_padding'>

	<?php include (TEMPLATEPATH . '/_title.php'); ?>

	<div id="content">

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2 class="title"><?php _e("<!--:uk-->Архів розділу<!--:--><!--:ru-->Архив раздела<!--:-->") ?></h2>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2 class="title">Posts Tagged <strong><?php single_tag_title(); ?></strong></h2>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2 class="title">Archive for <?php the_time('F jS, Y'); ?></h2>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2 class="title">Archive for <?php the_time('F, Y'); ?></h2>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2 class="title">Archive for <?php the_time('Y'); ?></h2>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2 class="title">Author Archive</h2>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2 class="title">Blog Archives</h2>
        <?php } ?>
    
        <?php get_template_part( 'loop', '' ); ?>

	</div>	
</div>
<?php get_sidebar(); get_footer(); ?>
