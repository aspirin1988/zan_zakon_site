
<!--НАЧАЛО publications-->
<div class="publications" id="publications">
	<div class="uk-container uk-container-center">
		<h2><?=get_the_title()?></h2>
		<?=get_the_content() ?>
		<!--НАЧАЛО Unitegallery-->
		<div id="unitegallery-1" style="display:none;">
			<img alt="Image" src="<?=get_the_post_thumbnail_url()?>"
				 data-image="<?=get_the_post_thumbnail_url()?>"
				 data-description="<?=get_the_title()?>">
			<?php foreach (pp_gallery_get() as $image): ?>
			<img alt="Image" src="<?=$image->url?>"
				 data-image="<?=$image->url?>"
				 data-description="<?=$image->alt?>">
			<?php endforeach; ?>
		</div>
		<!--КОНЕЦ Unitegallery-->
	</div>
</div>
<!--КОНЕЦ publications-->