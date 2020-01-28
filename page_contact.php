<?php 
/*
Template Name: Контакты
*/
?>
<?php get_header() ?>
<section class="section text-black" id="contact">
	<div class="wrapper">
		<div class="row">
			<div class="col-md-8">
				<h1><?php the_title() ?></h1>
			</div>
			<div class="col-md-4 text-right ">
				<div style="padding: 15px">
					<img class="d-lg-none" src="/wp-content/themes/vek-otau/assets/img/vek-black.png">
					<img src="/wp-content/themes/vek-otau/assets/img/logoblack.png" style="max-width: 100px">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<p>
					<strong>Отдел продаж:</strong><br>
					<img src="/wp-content/themes/vek-otau/assets/img/map-marker.png" alt="" style="margin-right: 18px" /> <?php the_field('adress') ?><br>
					<img src="/wp-content/themes/vek-otau/assets/img/vector.png" alt="" style="margin-right: 15px"> <?php the_field('phone_3') ?>,<br>
					<img src="/wp-content/themes/vek-otau/assets/img/vector.png" alt="" style="margin-right: 15px"> <?php the_field('phone_1') ?>,<br>
					<img src="/wp-content/themes/vek-otau/assets/img/vector.png" alt="" style="margin-right: 15px"> <?php the_field('phone_2') ?><br>
					<img src="/wp-content/themes/vek-otau/assets/img/email.png" alt="" style="margin-right: 15px"> <?php the_field('email') ?>
				</p>
			</div>
			<div class="col-md-8">
				<p>
					<?php the_post() ?>
					<?php the_content() ?>
				</p>
			</div>


			
		</div>
		<div class="row">
			<div class="col-md-12">
				<a href="#" data-toggle="modal" data-target="#mapModal" style="display: block;outline: none;">	
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</a>
			</div>
		</div>
	</div>
	<?php get_sidebar('sozseti'); ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>