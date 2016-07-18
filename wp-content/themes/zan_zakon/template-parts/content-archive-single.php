<article class="uk-grid">
	<div class="uk-width-medium-6-10 uk-push-4-10 text-section">
		<h3><?=get_the_title()?></h3>
		<?=get_the_content()?>
		<a href="<?=get_permalink()?>" class="more-btn">Подробнее</a>
	</div>
	<div class="uk-width-medium-4-10 uk-pull-6-10">

		<!--НАЧАЛО Unitegallery-->
		<div id="unitegallery-<?=get_the_ID()?>" class="gallery" style="display:none;">

			<img alt="Image" src="<?=get_the_post_thumbnail_url()?>"
				 data-image="<?=get_the_post_thumbnail_url()?>"
				 data-description="Фото">
			<?php foreach (pp_gallery_get() as $image): ?>
			<img alt="Image" src="<?=$image->url?>"
				 data-image="<?=$image->url?>"
				 data-description="Фото">
			<?php endforeach; ?>


		</div>
		<!--КОНЕЦ Unitegallery-->

	</div>
</article>