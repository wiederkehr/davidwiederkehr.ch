<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
<head>
	<!-- ——————————————————————————————————————————————————————————————————— META -->
	<meta http-equiv="Content-Type"					content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="Content-Language"			content="de-de" />
	<meta http-equiv="imagetoolbar"					content="no" />
	<meta name="Robots"											content="ALL" />
	<meta name="Distribution"								content="global" />
	<meta name="MSSmartTagsPreventParsing"	content="true" />
	<meta name="Copyright"									content="2008 " />
	<meta name="Generator"									content="WordPress <?php bloginfo('version'); ?>" />
	<?php if ( is_single() ) { ?>
	<!-- ——————————————————————————————————————————————————————————————————— SINGLE -->
	<title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
	<meta name="Keywords"										content="<?php bloginfo('name'); ?>, <?php wp_title(''); ?>, David Wiederkehr, Wiederkehr, David, Sport, Medien, Blog" />
	<meta name="Description"								content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>" />
	<?php }; ?>
	<?php if ( ! is_single() ) { ?>
	<!-- ——————————————————————————————————————————————————————————————————— Normal -->
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
	<meta name="Keywords"										content="<?php bloginfo('name'); ?>, David Wiederkehr, Wiederkehr, David, Sport, Medien, Blog" />
	<meta name="Description"								content="<?php bloginfo('name'); ?>, <?php bloginfo('description'); ?>" />
	<?php }; ?>
	<!-- ——————————————————————————————————————————————————————————————————— FAVICON -->
	<link rel="shortcut icon"	href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"	type="image/x-icon" />
	<link rel="icon"					href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"	type="image/x-icon" />
	<!-- ——————————————————————————————————————————————————————————————————— RSS -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— CSS -->
	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('template_directory'); ?>/css/base.css" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/css/print.css" />
	<link rel="stylesheet" type="text/css" media="screen, projection" href="<?php bloginfo('stylesheet_url'); ?>" />
	<!-- ——————————————————————————————————————————————————————————————————— JS -->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/accordian.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/fontsize.js" ></script>
</head>
<!-- ——————————————————————————————————————————————————————————————————— BODY -->
<body>
	<div id="container">
<!-- ——————————————————————————————————————————————————————————————————— HEADER -->
		<div id="header">
<!-- ——————————————————————————————————————————————————————————————————— ACCESS -->
			<div id="access">
				<a href="#content" title="Direkt zum Inhalt">Inhalt</a>
				<a href="#" onmousedown="fontSizer(-1)" title="kleiner Schriftgrösse" id="smaller_font">A</a>
				<span> … </span>
				<a href="#" onmousedown="fontSizer(1)" title="grössere Schriftgrösse" id="larger_font">A</a>
			</div>
<!-- ——————————————————————————————————————————————————————————————————— ABOUT -->
			<div id="about">
				<?php include (TEMPLATEPATH . '/about.php'); ?>
			</div><!-- #about -->
<!-- ——————————————————————————————————————————————————————————————————— TITLE -->
			<h1><a href="<?php echo get_bloginfo('home'); ?>" title="Homepage von <?php echo get_bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
		</div><!-- #header -->
<!-- ——————————————————————————————————————————————————————————————————— ACCORDION -->
		<div id="accordion" class="clear">
			<?php include (TEMPLATEPATH . '/accordion.php'); ?>
		</div><!-- #accordion -->