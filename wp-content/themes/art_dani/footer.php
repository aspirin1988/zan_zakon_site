<footer>
	<div class="footer-flex uk-container uk-container-center">
		<div class="logo-and-solgan-container">
			<a href="/"><img class="logo" src="<?=get_field('logo',4)?>" alt="Лого"></a>
			<p class="slogan"><?=get_field('slogan',4)?></p>
		</div>
		<div class="map">
			<?=get_field('map',4)?>
		</div>
		<div class="contacts">
			<h3>Наши контакты</h3>

			<p>
				<?=get_field('address',4)?>
			</p>

			<p>
				<a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a> <br>
				<a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a> <br>
			</p>

			<p><a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a></p>
		</div>
	</div>
</footer>

<!-- НАЧАЛО нав-off-canvas -->
<div id="navmenu-off-canvas" class="uk-offcanvas">
	<div class="uk-offcanvas-bar">
		<ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav="{multiple:true}">
			<li class="uk-active"><a href="index.html">Главная</a></li>
			<li><a href="portfolio.html">Наши работы</a></li>

			<li class="uk-parent">
				<a href="#">Кухни</a>
				<ul class="uk-nav-sub">
					<li><a href="catalog.html">Подкатегория 1</a></li>
					<li><a href="catalog.html">Подкатегория 2</a></li>
				</ul>
			</li>

			<li class="uk-parent">
				<a href="#">Фотопечать на стекле</a>
				<ul class="uk-nav-sub">
					<li><a href="catalog.html">Подкатегория 1</a></li>
					<li><a href="catalog.html">Подкатегория 2</a></li>
				</ul>
			</li>

			<li class="uk-parent">
				<a href="#">Шкафы-купе</a>
				<ul class="uk-nav-sub">
					<li><a href="catalog.html">Подкатегория 1</a></li>
					<li><a href="catalog.html">Подкатегория 2</a></li>
				</ul>
			</li>

			<li class="uk-parent">
				<a href="#">Гостиные</a>
				<ul class="uk-nav-sub">
					<li><a href="catalog.html">Подкатегория 1</a></li>
					<li><a href="catalog.html">Подкатегория 2</a></li>
				</ul>
			</li>

			<li class="uk-parent">
				<a href="#">Спальни</a>
				<ul class="uk-nav-sub">
					<li><a href="catalog.html">Подкатегория 1</a></li>
					<li><a href="catalog.html">Подкатегория 2</a></li>
				</ul>
			</li>

			<li class="uk-parent">
				<a href="#">Мебель на заказ</a>
				<ul class="uk-nav-sub">
					<li><a href="catalog.html">Подкатегория 1</a></li>
					<li><a href="catalog.html">Подкатегория 2</a></li>
				</ul>
			</li>

			<li><a href="contacts.html">Контакты</a></li>

		</ul>
	</div>
</div>
<!-- КОНЕЦ нав-off-canvas -->


<script src="<?php bloginfo('template_directory')?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/lightbox.min.js"></script>

<?php wp_footer() ?>
</body>
</html>