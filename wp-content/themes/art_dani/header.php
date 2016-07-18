<?php
function child($menu,$parent){
	$temp=false;
	foreach ($menu as $value){
		if ($value->menu_item_parent==$parent->ID){
			$temp[]=$value;
		}
	}
	return $temp;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head() ?>
	<link rel="shortcut icon" href="favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Play&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/uikit.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/sticky.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slidenav.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slider.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/components/slideshow.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/public/css/styles.css">
</head>
<body>


<header>
	<div class="uk-container uk-container-center upper-row">
		<div class="uk-grid">

			<!--НАЧАЛО Лого и слоган-->
			<div class="uk-width-medium-1-3 logo-and-solgan-container">
				<a href="/"><img class="logo" src="<?=get_field('logo',4)?>" alt="Лого"></a>
				<p class="slogan"><?=get_field('slogan',4)?></p>
			</div>
			<!--КОНЕЦ Лого и слоган-->

			<!--НАЧАЛО Короткое описание и контакты-->
			<div class="uk-width-medium-2-3 summary-and-contacts-container">
				<p class="summary">
					<?=get_field('summary',4)?>
				</p>
				<p class="contacts">
				<p>
					<a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a>
					<br class="uk-visible-small">
					<a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a>
					<br class="uk-visible-small">
					<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?>
				</p>
			</div>
			<!--КОНЕЦ Короткое описание и контакты-->

		</div>

		<!--Сслыка для вызова off-canvas'а: (сам off-canvas находится внизу документа) -->
		<div class="uk-visible-small navbar-toggle-container" data-uk-sticky="{top:-200, animation: 'uk-animation-slide-top'}">
			<a href="#navmenu-off-canvas" class="uk-navbar-toggle" data-uk-offcanvas></a>
		</div>

	</div>

</header>