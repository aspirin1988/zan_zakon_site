<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package art_dani
 */


$obj=get_queried_object();
$query_url=$_SERVER['REDIRECT_URL'];
$post=count(get_posts(array('category_name'=>$obj->slug,'posts_per_page'=>-1)));
$page_post=get_option('posts_per_page');
$page_count=ceil($post/$page_post);
$page_num=(int)get_query_var('page');
$offset=$page_num*$page_post;
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--НАЧАЛО слайдер-->
			<div class="main-slider uk-slidenav-position" data-uk-slider="{autoplay:true, autoplayInterval: 4000}">

				<div class="uk-slider-container">
					<ul class="uk-slider uk-grid-width-large-1-3 uk-grid-width-medium-1-2 uk-grid-width-medium-1-1 images-grid">
						<?php $images=get_posts(array('category_name'=>$obj->slug,'numberposts'=>6));
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
				<?php pp_get_breadcrumb('uk-breadcrumb uk-text-center',get_queried_object()) ?>
			</div>
			<!--КОНЕЦ хлебные крошки-->

			<main class="uk-container uk-container-center">
				<div class="uk-grid">

					<div class="uk-width-medium-1-4">
						<!--НАЧАЛО нав-сайдбар-->
						<ul class="uk-nav uk-hidden-small uk-nav-parent-icon" data-uk-nav="{multiple:true}">
							<?php $menu=wp_get_nav_menu_items('main');
							foreach ($menu as $key=>$val)  : $class=''; if (!$val->menu_item_parent):
								$child=child($menu,$val);
								if($val->object_id==$obj->ID||$child){ $class='uk-active';}
								if (!$child):
									?>
									<li class="<?=$class?>"><a href="<?=$val->url?>"><?=$val->title?></a></li>
								<?php else: ?>
									<li class="uk-parent <?=$class?>">
										<a href="#"><?=$val->title?></a>
										<ul class="uk-nav-sub">
											<?php foreach ($child as $key1=>$val1): $class='';
												if($val1->object_id==$obj->term_id){ $class='uk-active';}
												?>
												<li class="<?=$class?>"><a  href="<?=$val1->url?>"><?=$val1->title?></a></li>
											<?php endforeach; ?>
										</ul>
									</li>
								<?php endif; ?>
							<?php endif; endforeach; wp_reset_query() ?>
						</ul>
						<!--КОНЕЦ нав-сайдбар-->
					</div>


					<div class="uk-width-medium-3-4 catalog-page content-container">
						
						<div class="uk-grid">

							<?php
							query_posts(array('category_name'=>$obj->slug,'posts_per_page'=>$page_post,'offset'=>$offset));
							if ( have_posts() ) : ?>
								<?php
								while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/content', 'archive-single' );
								endwhile;
							endif; ?>
						</div>

					</div>

				</div>
			</main>

			<!--НАЧАЛО пагинация-->
			<?php if($page_count>1):?>
				<!--НАЧАЛО пагинация-->
				<ul class="uk-pagination uk-pagination-right uk-container uk-container-center">
					<li><a href="<?=$query_url?>?page=0"><i class="uk-icon-angle-double-left"></i></a></li>
					<?php for ($i=0; $i<$page_count; $i++): $class=''; if ($i==$page_num){$class='class="uk-active"';} ?>
						<li data-id="<?=$i?>" data-id1="<?=$page_num?>" <?=$class?> >
							<?php if ($i==$page_num):?><span><?php endif;?>
								<a href="<?=$query_url.'?page='.$i?>">
								<?=$i+1?>
								</a>
								<?php if ($i==$page_num):?></span><?php endif;?>
						</li>
					<?php endfor; ?>
					<li><a href="<?=$query_url?>?page=<?=$page_count-1?>"><i class="uk-icon-angle-double-right"></i></a></li>
				</ul>
			<?php endif; ?>
			<!--КОНЕЦ пагинация-->



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
