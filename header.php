<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
	<head profile="fb: http://ogp.me/ns/fb# og: http://ogp.me/ns#">
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
		<!-- TODO: @fedtti -->
		<meta property="og:description" content="<?php /* TODO: @fedtti */ ?>" />
		<link rel="manifest" href="<?php bloginfo('url'); ?>/manifest.webmanifest" />
		<link rel="prefetch stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
		<link rel="prefetch stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" /> <!-- TODO: @fedtti -->
		<title><?php /* TODO: @fedtti */ ?></title>
	</head>
	<body class="blog" itemscope="" itemtype="https://schema.org/Blog">
		<noscript>
			<strong></strong>
		</noscript>
		<header class="blog__head" role="banner">
			<div class="blog__head__wrap">
				<h1 class="blog__head__title"><?php bloginfo('name'); ?></h1>
				<p class="blog__head__subtitle -text-uppercase"><?php bloginfo('description'); ?></p>
			</div>
		</header>
<?php
	/* if () { */
?>
		<nav class="blog__nav" role="navigation">
			<ul aria-expanded="false" class="blog__nav__list -text-uppercase" id="pages">
				<?php /* TODO: @fedtti */ ?>
			</ul>
			<button aria-label="<?php _e('Menu', 'jps'); ?>" class="blog__nav__toggler" id="toggler">
				<i aria-hidden="true" class="fas fa-bars"></i>
			</button>
		</nav>
<?php
	/* } */
?>
