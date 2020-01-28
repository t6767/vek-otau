<?php 
/*
Template Name: О комплексе
*/
?>
<?php get_header(); ?>
<section class="section text-black" id="about">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-7">
				<div class="left-img left-img2">
					
				</div>
				<div class="left-img" id="left-img">
					
				</div>
			</div>
			<div class="col-lg-5">
				<h1><?php the_title(); ?></h1>
				<div class="row">
					<div class="col-lg-12 ">
						<?php the_post(); ?>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_sidebar('sozseti'); ?>
</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>