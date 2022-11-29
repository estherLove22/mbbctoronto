<?php $this->suspensionRedirect($view); ?>
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />

	<!-- suspension -->
	<?php if($this->siteInfo["suspended"]): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/styles/suspension.css">
	<?php endif ?>

	<?php $this->helpers->seo($view); ?>
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon">
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" />
	<?php if ($view == "home"): ?>
    <link rel="canonical" href="<?php echo URL; ?>" />
    <?php endif; ?>
	<?php $this->helpers->analytics(); ?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400;700%7CPlayfair+Display&display=swap" rel="stylesheet">
</head>

<body <?php $this->helpers->bodyClasses($view); ?>>
<?php $this->checkSuspensionHeader(); ?>
	<header>
		<div id="top-header">
			<div class="row">
				<p>If you would like to donate, kindly sent it to <a href="mailto: ">mbbctoronto@yahoo.ca</a></p>
			</div>
		</div>
		<div id="header">
			<div class="row flex">
				<a href=""><img src="public/images/common/logo.jpg" alt="MBBC Toronto logo"></a>
				<nav>
					<a href="#" id="pull"><strong>MENU</strong></a>
					<ul>
						<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
						<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
						<li <?php $this->helpers->isActiveMenu("ministries"); ?>><a href="<?php echo URL ?>ministries#content">MINISTRIES</a></li>
						<li <?php $this->helpers->isActiveMenu("events"); ?>><a href="<?php echo URL ?>events#content">EVENTS</a></li>
						<li <?php $this->helpers->isActiveMenu("testimonies"); ?>><a href="<?php echo URL ?>testimonies#content">TESTIMONIES</a></li>
						<li <?php $this->helpers->isActiveMenu("gift"); ?>><a href="<?php echo URL ?>gift#content">GOD'S GIFT</a></li>
						<li <?php $this->helpers->isActiveMenu("statement"); ?>><a href="<?php echo URL ?>statement#content">STATEMENT OF FAITH</a></li>
					</ul>
				</nav>
			</div>		
		</div>
	</header>
<!-- <?php //if($view == "home"):?> -->
	<div id="banner">
		<div class="row">
			<div class="text">
				<h2>MBBC Toronto</h2>
				<h4>"The Church To Run To"</h4>
			</div>
		</div>
	</div>

<!-- <?php //endif; ?> -->