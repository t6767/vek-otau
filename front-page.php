<?php 
/*
Template Name: Главная
*/
?>
<?php get_header(); ?>
<section class="section text-white" id="index">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
			<?php 
				// параметры по умолчанию
				$args = array(
					'numberposts' => 0,
					'category'    => 6,
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
									the_post_thumbnail($size = 'full', $attr = array('class' => "d-block img-responsive", 'data-toggle'=> "modal", 'data-target'=>"#actionModal") );
								} ?>
							<div class="carousel-caption d-none d-md-block  text-center">
							<?php the_content(); ?>
								<div class="carouse-btns">
									<span style="background: #bf8850;border: 1px solid #bf8850;padding: 5px 80px; z-index: 1000;" ><a  href="/gallery#pills-profile" style="width: 30px;height: 20px;color:white;display: inline !important;">Чистовая отделка</a></span>
									<span><?php the_field('carouse-btns2') ?></span>
									<span><?php the_field('carouse-btns3') ?></span>
								</div>
							</div>
						</div>
					<?php else: ?>
						<div class="carousel-item">
							<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail($size = 'full', $attr = array('class' => "d-block img-responsive", 'data-toggle'=> "modal", 'data-target'=>"#actionModal") ); } ?>
							<div class="carousel-caption d-none d-md-block text-center">
								<?php the_content(); ?>
								<div class="carouse-btns">
									<span style="background: #bf8850;border: 1px solid #bf8850;padding: 5px 80px;" ><a  href="/gallery#pills-profile" style="width: 30px;height: 20px;color:white;display: inline !important;">Чистовая отделка</a></span>
									<span><?php the_field('carouse-btns2') ?></span>
									<span><?php the_field('carouse-btns3') ?></span>
								</div>
							</div>
						</div>
					<?php endif; ?>
				    <?php
				    $x += 1;
				}
				wp_reset_postdata(); // сброс
			?>

			
		</div>
        <ol class="carousel-indicators">
			<?php
			// параметры по умолчанию
			$args = array(
				'numberposts' => 0,
				'category'    => 6,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'post_type'   => 'post',
				'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			);

			$posts = get_posts( $args );
			$y = 0;
			foreach($posts as $post){ setup_postdata($post);
				if($y == 0): ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $y; ?>" class="active"></li>
				<?php else: ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $y; ?>"></li>
				<?php endif; ?>
				<?php
				$y += 1;
			}

			wp_reset_postdata(); // сброс
			?>
        </ol>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<?php get_sidebar('sozseti'); ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>