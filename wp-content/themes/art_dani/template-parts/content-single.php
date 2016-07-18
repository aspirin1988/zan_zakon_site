<?php $cat=get_the_category(); $cat=$cat[0] ?>
<!--НАЧАЛО слайдер-->
<div class="main-slider uk-slidenav-position" data-uk-slider="{autoplay:true, autoplayInterval: 4000}">

	<div class="uk-slider-container">
		<ul class="uk-slider uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-medium-1-1 images-grid">
			<?php $images=get_posts(array('category_name'=>$cat->slug,'numberposts'=>6));
			foreach ($images as $image1){
				?>
				<li style="background-image: url('<?=get_the_post_thumbnail_url($image1->ID)?>')">
					<p><?=get_the_title($image1->ID)?></p>
				</li>
			<?php } wp_reset_query(); ?>
		</ul>
	</div>
	<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous"></a>
	<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next"></a>

</div>
<!--КОНЕЦ слайдер-->

<!--НАЧАЛО хлебные крошки-->
<div class="uk-container uk-container-center">
	<?php pp_get_breadcrumb('uk-breadcrumb') ?>
</div>
<!--КОНЕЦ хлебные крошки-->

<main class="uk-container uk-container-center">
	<div class="uk-grid">

		<div class="uk-width-medium-1-4">
			<!--НАЧАЛО нав-сайдбар-->
			<ul class="uk-nav uk-hidden-small uk-nav-parent-icon" data-uk-nav="{multiple:true}">
				<?php $menu=wp_get_nav_menu_items('main');
				foreach ($menu as $key=>$val)  { if (!$val->menu_item_parent):
					$child=child($menu,$val);
					if (!$child):
						?>
						<li class="uk-active"><a href="<?=$val->url?>"><?=$val->title?></a></li>
					<?php else: ?>
						<li class="uk-parent">
							<a href="#"><?=$val->title?></a>
							<ul class="uk-nav-sub">
								<?php foreach ($child as $key1=>$val1): ?>
									<li><a  href="<?=$val1->url?>"><?=$val1->title?></a></li>
								<?php endforeach; ?>
							</ul>
						</li>
					<?php endif; ?>
				<?php endif; } ?>
			</ul>
			<!--КОНЕЦ нав-сайдбар-->
		</div>

		<div class="uk-width-medium-3-4 single-product-page content-container">

			<div class="uk-grid">

				<!--НАЧАЛО фотослайдер-->
				<div class="uk-width-medium-6-10 photo-section">
					<div id="slideshow" data-uk-slideshow="{autoplayInterval:1000}">

						<div class="uk-slidenav-position">
							<ul class="uk-slideshow">
								<li style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
									<a href="<?=get_the_post_thumbnail_url()?>" data-uk-lightbox="{group:'single-photos'}"></a>
								</li>
								<?php $gallery=pp_gallery_get();
								foreach ($gallery as $image):?>
								<li style="background-image: url('<?=$image->url?>')">
									<a href="<?=$image->url?>" data-uk-lightbox="{group:'single-photos'}"></a>
								</li>
								<?php endforeach; ?>
							</ul>
							<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
							<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
						</div>
						<div id="slider" class="uk-slidenav-position uk-hidden-small" data-uk-slider="{center:true}">
							<div class="uk-slider-container">
								<ul class="uk-slider uk-grid uk-grid-small uk-grid-width-medium-1-3 uk-grid-width-small-1-2">
									<li style="background-image: url('<?=get_the_post_thumbnail_url()?>')" data-uk-slideshow-item="0"></li>
									<?php foreach ($gallery as $key=>$image):?>
										<li style="background-image: url('<?=$image->url?>')" data-uk-slideshow-item="<?=$key+1?>"></li>
									<?php endforeach; ?>
								</ul>
								<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slider-item="previous"></a>
								<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slider-item="next"></a>
							</div>
						</div>
					</div>

				</div>
				<!--КОНЕЦ фотослайдер-->

				<div class="uk-width-medium-4-10 characteristics-section">
					<h2 class="uk-text-center">Название продукта</h2>
					<p>Цена: <span><?=get_field('price')?></span></p>
					<p>Срок изготовления: <span><?=get_field('time')?></span></p>
					<?php $settings=explode(';',get_field('settings'));
					foreach ($settings as $setting): if ($setting):
						$setting=explode(':',$setting);

					?>
					<p><?=$setting[0]?>: <span><?=$setting[1]?></span></p>
					<?php endif; endforeach; ?>
				</div>
			</div>

			<!--НАЧАЛО текст в нижней части-->
			<div class="text-section-bottom">
				<?=get_the_content()?>
			</div>
			<!--КОНЕЦ текст в нижней части-->

		</div>

	</div>
</main>