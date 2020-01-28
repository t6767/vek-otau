<ul class="nav nav-pills mb-3" id="pills-<?php echo $block; ?>" role="tablist">
	<li class="nav-item">
		<a class="nav-link active" id="block<?php echo $block; ?>kv1-tab" data-toggle="pill" href="#block<?php echo $block; ?>kv1" role="tab" aria-controls="block<?php echo $block; ?>kv1" aria-selected="true">1-комнатная</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="block<?php echo $block; ?>kv2-tab" data-toggle="pill" href="#block<?php echo $block; ?>kv2" role="tab" aria-controls="block<?php echo $block; ?>kv2" aria-selected="false">2-комнатная</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="block<?php echo $block; ?>kv3-tab" data-toggle="pill" href="#block<?php echo $block; ?>kv3" role="tab" aria-controls="block<?php echo $block; ?>kv3" aria-selected="false">3-комнатная</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" id="block<?php echo $block; ?>kv4-tab" data-toggle="pill" href="#block<?php echo $block; ?>kv4" role="tab" aria-controls="block<?php echo $block; ?>kv4" aria-selected="false">4-комнатная</a>
	</li>
</ul>
<div class="tab-content" id="pills-<?php echo $block; ?>-tabContent">
	<div class="tab-pane fade show active" id="block<?php echo $block; ?>kv1" role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv1-tab">
		<?php
		$kvartira = 1; 
		$block = 1;
		?>
		<div class="row">
			<div class="col-md">
				<div id="block<?php echo $block;?>kvar<?php echo $kvartira; ?>" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#block<?php echo $block;?>kvar<?php echo $kvartira; ?>" data-slide-to="0" class="active"></li>
						<li data-target="#block<?php echo $block;?>kvar<?php echo $kvartira; ?>" data-slide-to="1"></li>
						<?php 
							$posts = get_posts( array(
								'numberposts' => 0,
								'category'    => 6,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true,
							));
							$y = 0;
							foreach($posts as $post){ setup_postdata($post); ?>
									<li data-target="#block<?php echo $block;?>kvar<?php echo $kvartira; ?>" data-slide-to="<?php echo $y; ?>" class="<?php if($y ==1){ echo 'active' }?>"></li>
							    <?php
							    $y += 1;
							}
							wp_reset_postdata(); // сброс
						?>

					</ol>
					<div class="carousel-inner">
						<?php 
							$posts = get_posts( array(
								'numberposts' => 0,
								'category'    => 6,
								'orderby'     => 'date',
								'order'       => 'DESC',
								'post_type'   => 'post',
								'suppress_filters' => true,
							));
							$x = 1;
							foreach($posts as $post){ setup_postdata($post);?>
								<div class="carousel-item <?php if($x ==1){ echo 'active' }?>">
									<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail($size = 'full', $attr = array('class' => "d-block img-responsive") );
										} ?>
								</div>
							    <?php $x += 1;
							}
							wp_reset_postdata(); // сброс
						?>
					</div>
					<a class="carousel-control-prev" href="#block<?php echo $block;?>kvar<?php echo $kvartira; ?>" role="button" data-slide="prev">
						<span class="fa fa-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#block<?php echo $block;?>kvar<?php echo $kvartira; ?>" role="button" data-slide="next">
						<span class="fa fa-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md">
				<p>
					<span class="metr">33.95 м</span> <span class="metr2">- общая площадь	</span> <br>
					<span class="metr3">1-комнатная квартира<br>Блок 1</span>
				</p>
				<div class="form">
					<h5>ОСТАВИТЬ ЗАЯВКУ</h5>
					<p>Понравилась квартира?<br>Оставьте заявку, мы обязательно свяжемся с Вами!</p>
					<form >
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Имя">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="+7">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Email">
						</div>
						<div class="form-group text-center">
							<button class="btn btn-default">ОТПРАВИТЬ</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
</div>