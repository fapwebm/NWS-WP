<?php
/**
 * replaceMe
 *
 * Header
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset') ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="copyright" content="Copyright <?=date('Y'), ' ', bloginfo('name')?>. All Rights Reserved." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<?php FrontEnd::getTitle() ?>

	<link rel="profile" href="//gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
	<link rel="image_src" href="<?=assetDir?>/images/logo.png" />
	<link rel="shortcut icon" href="<?=home_url()?>/favicon.ico" />

	<script src="<?=assetDir?>/js/library/modernizr.js"></script>

	<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?=assetDir?>/css/f5ie8.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head() ?>
</head>
<body <?php body_class() ?> ng-controller="MainCtrl" itemscope itemtype="http://schema.org/WebPage">

<!-- MOBILE DROPDOWN -->
<nav id="mobile-dd" ng-init="mobile.status = 'closed'" class="{{ mobile.status }}">
	<ul>
		<li><a href="#">Menu Item</a></li>
		<li><a href="#">Menu Item</a></li>
		<li><a href="#">Menu Item</a></li>
		<li><a href="#">Menu Item</a></li>
	</ul>
</nav>

<div id="container" class="{{ mobile.status }}">

<!-- HEADER -->
<header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
<div class="wrapper">
	<!-- Logo -->
	<a href="<?=home_url()?>" title="<?php bloginfo('name') ?>" id="logo" class="small-6 medium-4 columns">
		<img src="<?=assetDir?>/images/logo.png" alt="<?php bloginfo('name') ?>" />
	</a>

	<div class="right text-right small-6 medium-8 columns">
		<!-- Main menu -->
		<nav id="nav" class="hide-for-small" ng-hoverintent role="navigation">
			<ul itemscope itemtype="http://schema.org/SiteNavigationElement">
				<li><a href="#">Menu Item</a></li>
				<li><a href="#">Menu Item</a></li>
				<li>
					<a href="#">Menu Item</a>

					<ul>
						<li><a href="#">Menu 1</a></li>
						<li><a href="#">Menu 2</a></li>
						<li><a href="#">Menu 3</a></li>
					</ul>
				</li>
				<li><a href="#">Menu Item</a></li>
			</ul>
		</nav>

		<!-- Mobile menu link -->
		<div class="show-for-small">
			<a href="javascript:;" id="mobile-dd-link" class="{{ mobile.status }}" ng-click="mobile.toggle()">
				<span></span>
			</a>
		</div>
	</div>
</div>
</header>