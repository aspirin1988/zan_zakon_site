<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/accordion.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slidenav.min.css">

	<!--Unitegallery-->
	<link rel='stylesheet' href='<?php bloginfo('template_directory')?>/public/css/unite-gallery.css' type='text/css'>

	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/styles.css">
</head>
<body>

<header id="home">
	<div class="uk-container uk-container-center">
		<div class="header__logo">
			<a href="/">
				<img src="<?=get_field('logo',4)?>" alt="Лого" class="">
			</a>
		</div>
		<div class="navbar-and-contacts-col">
			<div class="contacts">
				<span><a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a></span>
				<span><a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a></span>
				<span><a href="tel:<?=get_field('phone3',4)?>"><?=get_field('phone3',4)?></a></span>
				<span><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></span>
			</div>

			<nav class="uk-navbar"
				 data-uk-sticky="{getWidthFrom:'.main-section', top:-200, animation: 'uk-animation-slide-top'}">
				<ul class="uk-navbar-nav uk-hidden-small" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
					<?php $menu=wp_get_nav_menu_items('main');
					foreach ($menu as $key=>$value):?>
					<li><a href="<?=$value->url?>" <?php if ($key) {echo 'data-uk-smooth-scroll="{offset: 40}"';} else {echo 'data-uk-smooth-scroll';}?>><?=$value->title?></a></li>
					<?php endforeach; ?>
				</ul>
				<a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			</nav>

			<div id="my-id" class="uk-offcanvas">
				<div class="uk-offcanvas-bar">
					<ul class="uk-nav uk-nav-offcanvas" data-uk-scrollspy-nav="{closest:'li', topoffset:-200}">
						<?php foreach ($menu as $key=>$value):?>
						<li><a href="<?=$value->url?>" <?php if ($key) {echo 'data-uk-smooth-scroll="{offset: 40}"';} else {echo 'data-uk-smooth-scroll';}?>><?=$value->title?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>

		</div>
	</div>
</header>