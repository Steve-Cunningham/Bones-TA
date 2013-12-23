<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix twelvecol">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<div id="logo" class="fourcol first"><a href="<?php echo home_url(); ?>" rel="nofollow"><img class="fade" src="http://ta.thewalrustank.com/wp-content/uploads/2013/12/logo-technology-advice.png" alt="Logo - Link to <?php bloginfo('site_url'); ?> homepage"/></a></div>

					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

					<div class="eightcol last">
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>
					</div>

				</div>

				<div id="category-header" class="wrap clearfix">

					<div class="threecol clearfix first">
					<?php if ( is_active_sidebar( 'header-block-1' ) ) : ?>

						<?php dynamic_sidebar( 'header-block-1' ); ?>

					<?php endif; ?>
					</div><!-- end .threecol -->
					<div class="threecol clearfix">
					<?php if ( is_active_sidebar( 'header-block-2' ) ) : ?>

						<?php dynamic_sidebar( 'header-block-2' ); ?>

					<?php endif; ?>
					</div><!-- end .threecol -->
					<div class="threecol clearfix">
					<?php if ( is_active_sidebar( 'header-block-3' ) ) : ?>

						<?php dynamic_sidebar( 'header-block-3' ); ?>

					<?php endif; ?>
					</div><!-- end .threecol -->
					<div class="threecol clearfix last">
					<?php if ( is_active_sidebar( 'header-block-4' ) ) : ?>

						<?php dynamic_sidebar( 'header-block-4' ); ?>

					<?php endif; ?>

				</div>


			</header>
