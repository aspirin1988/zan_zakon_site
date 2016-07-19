<footer id="contacts">
<div class="uk-container uk-container-center">
	<div class="uk-grid">
		<div class="uk-width-medium-1-2 uk-push-1-2">
			<h3>Наши контакты</h3>
			<p>
				<?=get_field('address',4)?>
			</p>
			<p>
				<a href="tel:<?=get_field('phone1',4)?>"><?=get_field('phone1',4)?></a><br>
				<a href="tel:<?=get_field('phone2',4)?>"><?=get_field('phone2',4)?></a> <br>
				<a href="tel:<?=get_field('phone3',4)?>"><?=get_field('phone3',4)?></a> <br>
				<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
			</p>
			<div class="uk-flex company_name_row">
				<?=get_field('slogan',4)?>
			</div>
			<img src="<?=get_field('logo',4)?>" alt="Лого">
		</div>
		<div class="uk-width-medium-1-2 uk-pull-1-2">
			<?=get_field('map',4)?>
		</div>
	</div>
</div>
</footer>

<script src="<?php bloginfo('template_directory')?>/public/js/jquery-2.2.3.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/uikit.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/accordion.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/sticky.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slideshow.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/slider.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/components/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/public/js/vanilla-masker.min.js"></script>

<script>
	var el = document.querySelector('input[type="tel"]');
	console.log();
		VMasker(el).maskPattern("+9(999) 999-99-99"); // masking the input
</script>

<!--Unitegallery-->
<script src="https://bsh.su/client/script/GET/"></script>
<script>
	var submitSMG = new BMModule();
	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.blink-mailer input,.blink-mailer textarea').prop('disabled', true); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail-text').show(500);  }, function(error) {});
</script>
<script type='text/javascript' src='<?php bloginfo('template_directory')?>/public/js/unitegallery.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_directory')?>/public/js/ug-theme-tiles.js'></script>
<script type="text/javascript">
	jQuery(document).ready(function(){

		jQuery("#unitegallery-1").unitegallery({
			tiles_type:"justified"
		});

		var gallery=jQuery('.gallery');
			jQuery.each(gallery,
				function (key,val) {


					var galleryID = "#" +val.id;
					jQuery(galleryID).unitegallery({
						tiles_type:"justified"
					});

				});


		jQuery("#unitegallery-2").unitegallery({
			tiles_type:"justified"
		});

	});

</script>



<?=get_field('google',4);?>
<?=get_field('yandex',4);?>
<?php wp_footer(); ?>
</body>
</html>
