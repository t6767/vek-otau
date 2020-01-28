	<?php 
	/*
	Template Name: Галерея
	*/
	?>
	<?php get_header() ?>
	<section class="section text-black" id="galery">
		<div class="wrapper">
			<div class="row">
				<div class="col-md-4">
					<h1><?php the_title() ?></h1>
				</div>
				<div class="col-md-8">
					<p style="margin-top: 35px;font-size: 12px;font-weight: 300;">Данные дизайнерские решения представлены для ознакомления. Не являются итоговым вариантом отделки (мебель и аксессуары в стоимость не входят).</p>
				</div>
				<?php the_post() ?>
				<?php the_content() ?>
				<ul class="nav nav-pills" id="pills-tab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Экстерьер</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Интерьеры</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Видео</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div id="galery1" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 3,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );
									$y = 0;
									foreach($posts as $post){ setup_postdata($post);
										if($y == 0): ?>
											<li data-target="#galery1" data-slide-to="<?php echo $y; ?>" class="active"></li>
										<?php else: ?>
											<li data-target="#galery1" data-slide-to="<?php echo $y; ?>"></li>
										<?php endif; ?>
									    <?php
									    $y += 1;
									}

									wp_reset_postdata(); // сброс
								?>
							</ol>
							<div class="carousel-inner">
								<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 3,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );
									$x = 1;
									foreach($posts as $post){ setup_postdata($post);
										if($x ==1): ?>
											<div class="carousel-item active">
												<?php if ( has_post_thumbnail() ) {
														the_post_thumbnail($size = 'full', $attr = array('class' => "d-block w-100") ); } ?>
											</div>
										<?php else: ?>
											<div class="carousel-item">
												<?php if ( has_post_thumbnail() ) {
														the_post_thumbnail($size = 'full', $attr = array('class' => "d-block w-100") ); } ?>
											</div>
										<?php endif; ?>
									    <?php
									    $x += 1;
									}

									wp_reset_postdata(); // сброс
								?>
							</div>
							<a class="carousel-control-prev" href="#galery1" role="button" data-slide="prev">
								<span class="fa fa-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#galery1" role="button" data-slide="next">
								<span class="fa fa-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<div id="galery2" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 4,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );
									$y = 0;
									foreach($posts as $post){ setup_postdata($post);
										if($y == 0): ?>
											<li data-target="#galery2" data-slide-to="<?php echo $y; ?>" class="active"></li>
										<?php else: ?>
											<li data-target="#galery2" data-slide-to="<?php echo $y; ?>"></li>
										<?php endif; ?>
									    <?php $y += 1;
									}

									wp_reset_postdata(); // сброс
								?>
							</ol>
							<div class="carousel-inner">
								<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 4,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );
									$x = 1;
									foreach($posts as $post){ setup_postdata($post);
										if($x ==1): ?>
											<div class="carousel-item active">
												<?php if ( has_post_thumbnail() ) {
														the_post_thumbnail($size = 'full', $attr = array('class' => "d-block w-100") ); } ?>
											</div>
										<?php else: ?>
											<div class="carousel-item">
												<?php if ( has_post_thumbnail() ) {
														the_post_thumbnail($size = 'full', $attr = array('class' => "d-block w-100") ); } ?>
											</div>
										<?php endif; ?>
									    <?php
									    $x += 1;
									}
									wp_reset_postdata(); // сброс
								?>
							</div>
							<a class="carousel-control-prev" href="#galery2" role="button" data-slide="prev">
								<span class="fa fa-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#galery2" role="button" data-slide="next">
								<span class="fa fa-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						<div id="galery3" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 5,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );
									$y = 0;
									foreach($posts as $post){ setup_postdata($post);
										if($y == 0): ?>
											<li data-target="#galery3" data-slide-to="<?php echo $y; ?>" class="active"></li>
										<?php else: ?>
											<li data-target="#galery3" data-slide-to="<?php echo $y; ?>"></li>
										<?php endif; ?>
									    <?php $y += 1;
									}

									wp_reset_postdata(); // сброс
								?>
							</ol>
							<div class="carousel-inner" style="max-height: 500px;">
								<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 5,
										'orderby'     => 'date',
										'order'       => 'DESC',
										'post_type'   => 'post',
										'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
									);

									$posts = get_posts( $args );
									$x = 1;
									foreach($posts as $post){ setup_postdata($post);
										if($x ==1): ?>
											<div class="carousel-item active">
													<?php the_content(); ?>
											</div>
										<?php else: ?>
											<div class="carousel-item">
												
													<?php the_content(); ?>
											</div>
										<?php endif; ?>
									    <?php
									    $x += 1;
									}
									wp_reset_postdata(); // сброс
								?>
							</div>
							<a class="carousel-control-prev" href="#galery3" role="button" data-slide="prev">
								<span class="fa fa-chevron-left" aria-hidden="true"></span>
							</a>
							<a class="carousel-control-next" href="#galery3" role="button" data-slide="next">
								<span class="fa fa-chevron-right" aria-hidden="true"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_sidebar('sozseti'); ?>
</section>
</main>
<style type="text/css">
	.d-block{
		height: auto !important;
	}
	.mejs-layer {
    height: 430px !important;
}
	.mejs-iframe-overlay {
    max-height: 430px !important;
}
	.mejs-container {
    height: 430px !IMPORTANT;
}
</style>
<?php get_sidebar(); ?>
<?php get_footer(); ?>