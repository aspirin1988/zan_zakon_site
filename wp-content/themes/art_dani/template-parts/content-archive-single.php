<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-width-small-1-1">
	<a href="<?=get_permalink()?>">
		<div class="image" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
			<span><?=get_the_title()?></span>
		</div>
		<br>
			Цена: <span><?=get_field('price')?></span> <br>
			Срок изготовления: <span><?=get_field('time')?></span> <br>
			<?php $settings=explode(';',get_field('settings'));
			foreach ($settings as $setting): if ($setting):
			$setting=explode(':',$setting);

			?>
		<?=$setting[0]?>: <span><?=$setting[1]?></span><br>
		<?php endif; endforeach; ?>
	</a>
</div>