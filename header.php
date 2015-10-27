<?php
    if (!isset($_SERVER["HTTPS"])) {
		// https nicht aktiv
		if ($_SERVER["HTTP_HOST"]=="th3f.de") 
		{
		header("Location: https://th3f.de");
		}
	}
?>
<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="utf-8" />
		<title><?php echo page_title('404 - Nicht gefunden!'); ?> | <?php echo site_name(); ?></title>
		<?php if(is_article()): ?><meta name="description" content='<?php echo article_description(); ?>'>
		<?php elseif(is_homepage()): ?><meta name="description" content='<?php echo site_description(); ?>'>
		<?php elseif(is_page()): ?><meta name="description" content='<?php echo site_description(); ?>'>
		<?php endif; ?>
		<meta property="og:title" content="<?php echo page_title('404 - Nicht gefunden!'); ?> - <?php echo site_name(); ?>">
		<meta property="og:url" content="<?php echo current_url(); ?>">
		<meta property="og:site_name" content="<?php echo site_name(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo theme_url('assets/js/ie/html5shiv.js'); ?>"></script><![endif]-->
		<link rel="shortcut icon" href="<?php echo theme_url('images/favicon.ico'); ?>">
		<link rel="icon" sizes="196x196" href="<?php echo theme_url('images/android-homescreen.png'); ?>" />
		<link rel="apple-touch-icon" href="<?php echo theme_url('images/apple-touch-icon.png'); ?>" />
		<link rel="stylesheet" href="<?php echo theme_url('assets/css/main.css'); ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo theme_url('assets/css/ie8.css'); ?>" /><![endif]-->
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<a href="<?php echo base_url(); ?>" class="image avatar"><img src="<?php echo theme_url('images/avatar.jpg'); ?>" alt="" /></a>
				<h1><?php echo site_description(); ?></h1>
			</header>