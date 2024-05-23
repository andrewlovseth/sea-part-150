<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary">Skip to Content</a>

	<?php get_template_part('template-parts/header/internet-explorer'); ?>

	<?php get_template_part('template-parts/header/utilities'); ?>

	<header class="site-header grid">

		<?php get_template_part('template-parts/header/site-logo'); ?>

		<?php get_template_part('template-parts/header/hamburger'); ?>

		<?php get_template_part('template-parts/header/site-nav'); ?>

	</header>

	<?php get_template_part('template-parts/header/page-header'); ?>

	<main class="site-content" id="primary">	