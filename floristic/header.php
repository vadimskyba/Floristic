<?php /*
(c) 2011 Vadim Skyba | sineloco@mail.ru
*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- (c) 2011 Vadim Skyba | sineloco@mail.ru -->
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php bloginfo('text_direction'); ?>" lang="<?php bloginfo('language'); ?>" xml:lang="<?php bloginfo('language'); ?>">

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/layout.js"></script>

<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/main_ie.css" media="all" />
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fix_ie.js"></script>
<![endif]-->
<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/main_ie6.css" media="all" />

    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie6pngfix.js"></script>
    <script>DD_belatedPNG.fix('img, div');</script>
<![endif]--><title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

</head>

<body <?php body_class(); ?>>
	<div id="layout">
    	<div id="page_body">