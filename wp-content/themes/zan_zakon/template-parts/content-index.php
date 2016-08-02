<!--НАЧАЛО Главный раздел-->
<div class="main-section">
	<div class="uk-slidenav-position" data-uk-slideshow="{kenburns:true, autoplay: true}">
		<ul class="uk-slideshow uk-overlay-active">
			<?php foreach (pp_gallery_get() as $image): ?>
			<li>
				<img src="<?=$image->url?>">
				<div class="uk-overlay-panel">
					<div class="overlay-content">
						<?=$image->description?>
					</div>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
		<a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
	</div>
</div>
<!--КОНЕЦ Главный раздел-->

<!--НАЧАЛО about-->
<?php $post=get_post(17); setup_postdata($post); ?>
<div class="about" id="about">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-4-10">
				<img src="<?=get_the_post_thumbnail_url()?>" alt="Адвокат">
			</div>
			<div class="uk-width-medium-6-10">
				<ul data-uk-switcher="{connect:'#about-switcher'}">
					<li><h2><?= get_the_title() ?></h2></li>
					<li><h2>Біз туралы</h2></li>
				</ul>
				<ul id="about-switcher" class="uk-switcher">
					<li>
						<?=get_the_content('')?>
					</li>
					<li>
						<?=get_field('kaz',4)?>
					</li>
				</ul>
				<!--a href="< ?=get_permalink()?>" class="more-btn">Подробнее</a-->
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ about-->

<!--НАЧАЛО services-->
<div class="services" id="services">
	<div class="uk-container uk-container-center">
		<h2 class="uk-text-center">Услуги адвокатского бюро</h2>
		<ul class="uk-grid uk-grid-width-1-1 uk-grid-width-medium-1-2" data-uk-grid-margin>
			<?php $services=get_posts(array('category_name'=>'services','numberposts'=>-1,'orderby'=> 'post_date','order'           => 'ASC'));
			foreach ($services as $post): setup_postdata($post);
				?>
			<li>
				<img class="uk-hidden-small" src="<?=get_the_post_thumbnail_url()?>">
				<div>
					<h4><?=get_the_title()?></h4>
					<?php the_content('')?>
				</div>
			</li>
			<?php endforeach; wp_reset_query(); ?>
		</ul>
	</div>
</div>
<!--КОНЕЦ advantages-->

<!--НАЧАЛО partners-->
<!--<div class="partners" id="partners">-->
<!--	<div class="uk-container uk-container-center">-->
<!--		<h2 class="uk-text-center">Партнёры</h2>-->
<!--		<div class="uk-grid">-->
<!--			<div class="uk-width-medium-3-10 nav-container">-->
<!--				<ul class="uk-nav uk-nav-side" data-uk-switcher="{connect:'#partner-contents'}">-->
<!--					--><?php //$reviews=get_posts(array('category_name'=>'partners','numberposts'=>-1, 'order'=>'ASC'));
//					foreach ($reviews as $key=>$post): setup_postdata($post);
//					?>
<!--					<li class="--><?php //if (!$key) echo 'uk-active';?><!--"><a href="">--><?//=get_the_title()?><!--</a></li>-->
<!--					--><?php //endforeach; wp_reset_query(); ?>
<!--				</ul>-->
<!--			</div>-->
<!--			<div class="uk-width-medium-7-10 content-container">-->
<!--				<ul id="partner-contents" class="uk-switcher">-->
<!--					--><?php
//					foreach ($reviews as $post): setup_postdata($post);
//					?>
<!--					<li>-->
<!--						<div class="uk-grid">-->
<!--						<div class="uk-grid uk-width-medium-1-1">-->
<!--							<div class="uk-width-medium-2-10 profile-container">-->
<!--								<img src="--><?//=get_the_post_thumbnail_url()?><!--">-->
<!--							</div>-->
<!--							<div class="uk-width-medium-8-10 text-container">-->
<!--								<h3>--><?//=get_the_title()?><!--</h3>-->
<!--								--><?php //the_content('')?>
<!--							</div>-->
<!--						</div>-->
<!--						<div class="uk-grid uk-width-medium-1-1 contacts_and_map">-->
<!--							<div class="uk-width-medium-3-10 text-container uk-text-center">-->
<!--								--><?php //if (get_field('phone1')): ?>
<!--								<a href="tel:--><?//=get_field('phone1')?><!--">--><?//=get_field('phone1')?><!--</a> <br>-->
<!--								--><?php //endif; ?>
<!--								--><?php //if (get_field('phone2')): ?>
<!--									<a href="tel:--><?//=get_field('phone2')?><!--">--><?//=get_field('phone2')?><!--</a> <br>-->
<!--								--><?php //endif; ?>
<!--								--><?php //if (get_field('phone3')): ?>
<!--									<a href="tel:--><?//=get_field('phone3')?><!--">--><?//=get_field('phone3')?><!--</a> <br>-->
<!--								--><?php //endif; ?>
<!--								--><?php //if (get_field('email')): ?>
<!--									<a href="tel:--><?//=get_field('email')?><!--">--><?//=get_field('email')?><!--</a> <br>-->
<!--								--><?php //endif; ?>
<!--								<p>-->
<!--									--><?php //if (get_field('address1')): ?>
<!--										--><?//=get_field('address1')?><!--<br>-->
<!--									--><?php //endif; ?>
<!--									--><?php //if (get_field('address2')): ?>
<!--										--><?//=get_field('address2')?><!--<br>-->
<!--									--><?php //endif; ?>
<!--									--><?php //if (get_field('address3')): ?>
<!--										--><?//=get_field('address3')?><!--<br>-->
<!--									--><?php //endif; ?>
<!--								</p>-->
<!--							</div>-->
<!--							<div class="uk-width-small-1-1 uk-width-medium-7-10 partners-map">-->
<!--								--><?//=get_field('map')?>
<!--							</div>-->
<!--						</div>-->
<!--						</div>-->
<!--					</li>-->
<!--					--><?php //endforeach; ?>
<!--				</ul>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!---->
<!--	</div>-->
<!--</div>-->
<!--<!--КОНЕЦ partners-->

<!--НАЧАЛО feedback-->
<div class="feedback" id="feedback">
	<div class="uk-container uk-container-center">
		<div class="uk-grid">
			<div class="uk-width-medium-6-10 uk-push-4-10 uk-text-center text-section">
				<h2>Обратная связь</h2>
				<br class="uk-hidden-small">
				<br class="uk-hidden-small">
				<p>Хотите лучшего адвоката? <br>
					Для этого достаточно заполнить форму <br>  и мы сами с Вами свяжемся
				</p>
				<br>
			</div>
			<div class="uk-width-medium-4-10 uk-pull-6-10">
				<form class="blink-mailer">
					<input type="hidden" name="title" value="Обратная связь">
					<input type="text" placeholder="Имя" name="Имя" id="name">
					<input type="tel" placeholder="Номер" name="Номер телефона" id="phoneNumber">
					<textarea name="Сообщение" id="msg" placeholder="Опишите, что Вас интересует"></textarea>
					<input type="submit" value="Отправить">
				</form>
				<div >
					<p class="success-mail-text"></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ feedback-->

<!--НАЧАЛО reviews-->
<div class="reviews" id="reviews">
	<div class="uk-container uk-container-center">
		<h2>Отзывы наших клиентов</h2>
		<div class="data-uk-slider uk-slidenav-position" data-uk-slider="{autoplay: true}">
			<div class="uk-slider-container">
				<ul class="uk-slider uk-grid uk-grid-width-large-1-4 uk-grid-width-medium-1-2 uk-grid-width-1-1">
					<?php $reviews=get_posts(array('category_name'=>'reviews','numberposts'=>-1));
					foreach ($reviews as $post): setup_postdata($post);
					?>
					<li>
						<h3><?=get_the_title()?></h3>
						<p>
							<?php

                                $content = get_the_content('');

                                echo mb_substr($content,0,200).'...';
                            ?>

						</p>

                        <a href="#review-id-<?php the_ID()?>" data-uk-modal>Подробнее..</a>

					</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slider-item="previous">
				<img src="<?php bloginfo('template_directory') ?>/public/img/nav-left.png" alt="Предыдущее фото">
			</a>
			<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slider-item="next">
				<img src="<?php bloginfo('template_directory') ?>/public/img/nav-right.png" alt="Следущее фото">
			</a>
		</div>
	</div>
</div>
<!--КОНЕЦ reviews-->

<!--НАЧАЛО publications-->
<div class="publications" id="publications">
	<div class="uk-container uk-container-center">
		<h2>Публикации бюро</h2>
		<?php $reviews=get_posts(array('category_name'=>'publications','numberposts'=>2));
		foreach ($reviews as $key=> $post): setup_postdata($post);
		?>
		<article class="uk-grid">
			<div class="uk-width-medium-6-10 uk-push-4-10 text-section">
				<h3><?=get_the_title()?></h3>
				<?php the_content('')?>
				<a href="<?=get_permalink()?>" class="more-btn">Подробнее</a>
			</div>
			<div class="uk-width-medium-4-10 uk-pull-6-10">

				<!--НАЧАЛО Unitegallery-->
				<div id="unitegallery-<?=$key+1?>" style="display:none;">

					<img alt="Image" src="<?=get_the_post_thumbnail_url()?>"
						 data-image="<?=get_the_post_thumbnail_url()?>"
						 data-description="Фото">
					<?php foreach (pp_gallery_get()as  $image): ?>
					<img alt="<?=$image->alt?>" src="<?=$image->url?>"
						 data-image="<?=$image->url?>"
						 data-description="Фото">
					<?php endforeach; ?>
				</div>
				<!--КОНЕЦ Unitegallery-->

			</div>
		</article>
		<?php endforeach; wp_reset_query(); ?>
		<div class="uk-text-center">
			<a href="/publications/" class="more-btn all">Все публикации</a>
		</div>
	</div>
</div>
<!--КОНЕЦ publications-->


<?php $reviews=get_posts(array('category_name'=>'reviews','numberposts'=>-1));
foreach ($reviews as $post): setup_postdata($post);
    ?>
        <div id="review-id-<?php the_ID()?>" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                <div class="uk-modal-header"><?=get_the_title()?></div>
                <div class="img-modal uk-flex uk-flex-center">
                    <img src="<?php the_post_thumbnail_url()?>" alt="">
                </div>
                <?php the_content('')?>
            </div>
        </div>

<?php endforeach; ?>

<!-- This is the modal for reviews -->

