<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	<meta charset="<?php bloginfo('charset'); ?>">
	<?php if (is_search())echo '<meta name="robots" content="noindex, nofollow" />';?>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/application.css" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

</head>

<body>

	<header class="global-header">
    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    <p class="description"><?php bloginfo( 'description' ); ?></p>
  </header>

  <div id="rapper">