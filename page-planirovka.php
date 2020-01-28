<?php
/*
Template Name: Планировки
*/
?>
<?php get_header() ?>
    <section class="section text-black" id="planirovka">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title() ?></h1>
                </div>
            </div>
			<?php the_post() ?>
			<?php the_content() ?>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-1" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="blok1-tab" data-toggle="pill" href="#blok1" role="tab"
                               aria-controls="blok1" aria-selected="true">Блок 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="blok2-tab" data-toggle="pill" href="#blok2" role="tab"
                               aria-controls="blok2" aria-selected="false">Блок 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="blok3-tab" data-toggle="pill" href="#blok3" role="tab"
                               aria-controls="blok3" aria-selected="false">Блок 3</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-1-tabContent">
                        <div class="tab-pane fade show active" id="blok1" role="tabpanel" aria-labelledby="blok1-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <a data-fancybox="blok1img1" href="/wp-content/uploads/2018/05/main-pic.png" id="blok1img1">
                                        <img src="/wp-content/uploads/2018/05/main-pic.png" alt="" class="img-fluid" id="blok1img">
                                    </a>
                                </div>
                                <div class="col-md-8" style="margin-top: -50px">
									<?php $block = 1; ?>


                                    <ul class="nav nav-pills mb-3" id="pills-<?php echo $block; ?>" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="block<?php echo $block; ?>kv1-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv1" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv1" aria-selected="true">1-комнатная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv2-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv2" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv2" aria-selected="false">2-комнатная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv3-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv3" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv3" aria-selected="false">3-комнатная</a>
                                        </li>
                                        <!--<li class="nav-item" >
                                            <a class="nav-link" id="block<?php echo $block; ?>kv4-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv4" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv4" aria-selected="false">4-комнатная</a>
                                        </li>-->
                                    </ul>
                                    <div class="tab-content" id="pills-<?php echo $block; ?>-tabContent">


										<?php $kvartira = 11; ?>
                                        <div class="tab-pane fade show active" id="block<?php echo $block; ?>kv1"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv1-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel" data-interval="false">
                                                        <ol class="carousel-indicators">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$y     = 0;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
																	    echo 'active';
																    } ?>"></li>
																<?php
																$y += 1;
															}
															wp_reset_postdata(); // сброс
															?>

                                                        </ol>
                                                        <div class="carousel-inner">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$x     = 1;
															foreach ( $posts as $post ) {
																setup_postdata( $post );
                                                                ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
																	echo 'active';
                                                                } ?>">
	                                                                <?php if ( has_post_thumbnail() ) {
		                                                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
                                                                            <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
                                                                        <?php
	                                                                }
	                                                                $img_data = get_field( 'kartinka-bloka' );
																	?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
																<?php $x += 1;
															}
															wp_reset_postdata(); // сброс
															?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">33.95 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">1-комнатная квартира<br>Блок 1</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="299" title="Контактная форма 1"]' ); ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


										<?php $kvartira = 12; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv2"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv2-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$y     = 0;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
																	    echo 'active';
																    } ?>"></li>
																<?php
																$y += 1;
															}
															wp_reset_postdata(); // сброс
															?>

                                                        </ol>
                                                        <div class="carousel-inner">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$x     = 1;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
																	echo 'active';
																} ?>">
																	<?php if ( has_post_thumbnail() ) {
																		?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
																			<?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
																		<?php
																	}
																	$img_data = get_field( 'kartinka-bloka' );
																	?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
																<?php $x += 1;
															}
															wp_reset_postdata(); // сброс
															?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">33.95 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">2-комнатная квартира<br>Блок 1</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="302" title="2-комнатная квартира Блок 1"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

										<?php $kvartira = 13; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv3"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv3-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$y     = 0;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
																	    echo 'active';
																    } ?>"></li>
																<?php
																$y += 1;
															}
															wp_reset_postdata(); // сброс
															?>

                                                        </ol>
                                                        <div class="carousel-inner">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$x     = 1;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
																	echo 'active';
																} ?>">
																	<?php if ( has_post_thumbnail() ) {
																		?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
																			<?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
																		<?php
																	}
																	$img_data = get_field( 'kartinka-bloka' );
																	?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
																<?php $x += 1;
															}
															wp_reset_postdata(); // сброс
															?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">33.95 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">3-комнатная квартира<br>Блок 1</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="303" title="3-комнатная квартира Блок 1"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


										<?php $kvartira = 14; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv4"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv4-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$y     = 0;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
																	    echo 'active';
																    } ?>"></li>
																<?php
																$y += 1;
															}
															wp_reset_postdata(); // сброс
															?>

                                                        </ol>
                                                        <div class="carousel-inner">
															<?php
															$posts = get_posts( array(
																'numberposts'      => 0,
																'category'         => $kvartira,
																'orderby'          => 'id',
																'order'            => 'ASC',
																'post_type'        => 'post',
																'suppress_filters' => true,
															) );
															$x     = 1;
															foreach ( $posts as $post ) {
																setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
																	echo 'active';
																} ?>">
																	<?php if ( has_post_thumbnail() ) {
																		?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
																			<?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
																		<?php
																	}
																	$img_data = get_field( 'kartinka-bloka' );
																	?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
																<?php $x += 1;
															}
															wp_reset_postdata(); // сброс
															?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">33.95 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">4-комнатная квартира<br>Блок 1</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="304" title="4-комнатная квартира Блок 1"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="blok2" role="tabpanel" aria-labelledby="blok2-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <a data-fancybox="blok2img1" href="/wp-content/uploads/2018/05/2-1-1.jpg" id="blok2img1">
                                        <img src="/wp-content/uploads/2018/05/2-1-1.jpg" alt="" class="img-fluid" id="blok2img">
                                    </a>
                                </div>
                                <div class="col-md-8" style="margin-top: -50px">
	                                <?php $block = 2; ?>


                                    <ul class="nav nav-pills mb-3" id="pills-<?php echo $block; ?>" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="block<?php echo $block; ?>kv1-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv1" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv1" aria-selected="true">1-комнатная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv2-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv2" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv2" aria-selected="false">2-комнатная</a>
                                        </li>
                                       <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv3-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv3" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv3" aria-selected="false">3-комнатная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv4-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv4" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv4" aria-selected="false">4-комнатная</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-<?php echo $block; ?>-tabContent">


		                                <?php $kvartira = 18; ?>
                                        <div class="tab-pane fade show active" id="block<?php echo $block; ?>kv1"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv1-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel" data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">34.14 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">1-комнатная квартира<br>Блок 2</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="305" title="1-комнатная квартира Блок 2"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


		                                <?php $kvartira = 17; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv2"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv2-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">50.39 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">2-комнатная квартира<br>Блок 2</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="306" title="2-комнатная квартира Блок 2"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

		                                <?php $kvartira = 16; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv3"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv3-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">33.95 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">3-комнатная квартира<br>Блок 2</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="307" title="3-комнатная квартира Блок 2"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


		                                <?php $kvartira = 15; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv4"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv4-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">125.25 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">4-комнатная квартира<br>Блок 2</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="308" title="4-комнатная квартира Блок 2"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="blok3" role="tabpanel" aria-labelledby="blok3-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <a data-fancybox="blok3img1" href="/wp-content/uploads/2018/05/3-1-1.jpg" id="blok3img1">
                                        <img src="/wp-content/uploads/2018/05/3-1-1.jpg" alt="" class="img-fluid" id="blok3img">
                                    </a>
                                </div>
                                <div class="col-md-8" style="margin-top: -50px">



	                                <?php $block = 3; ?>


                                    <ul class="nav nav-pills mb-3" id="pills-<?php echo $block; ?>" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="block<?php echo $block; ?>kv1-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv1" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv1" aria-selected="true">1-комнатная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv2-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv2" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv2" aria-selected="false">2-комнатная</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv3-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv3" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv3" aria-selected="false">3-комнатная</a>
                                        </li>
                                        <!--<li class="nav-item">
                                            <a class="nav-link" id="block<?php echo $block; ?>kv4-tab"
                                               data-toggle="pill" href="#block<?php echo $block; ?>kv4" role="tab"
                                               aria-controls="block<?php echo $block; ?>kv4" aria-selected="false">4-комнатная</a>
                                        </li>-->
                                    </ul>
                                    <div class="tab-content" id="pills-<?php echo $block; ?>-tabContent">


		                                <?php $kvartira = 22; ?>
                                        <div class="tab-pane fade show active" id="block<?php echo $block; ?>kv1"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv1-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel" data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">34.14 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">1-комнатная квартира<br>Блок 3</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="309" title="1-комнатная квартира Блок 3"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


		                                <?php $kvartira = 21; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv2"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv2-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">50.39 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">2-комнатная квартира<br>Блок 3</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="310" title="2-комнатная квартира Блок 3"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

		                                <?php $kvartira = 20; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv3"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv3-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">33.95 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">3-комнатная квартира<br>Блок 3</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="311" title="3-комнатная квартира Блок 3"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


		                                <?php $kvartira = 19; ?>
                                        <div class="tab-pane fade show" id="block<?php echo $block; ?>kv4"
                                             role="tabpanel" aria-labelledby="block<?php echo $block; ?>kv4-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div id="block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                         class="carousel slide" data-ride="carousel"  data-interval="false">
                                                        <ol class="carousel-indicators">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $y     = 0;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <li data-target="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                                    data-slide-to="<?php echo $y; ?>"
                                                                    class="<?php if ( $y == 0 ) {
									                                    echo 'active';
								                                    } ?>"></li>
								                                <?php
								                                $y += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>

                                                        </ol>
                                                        <div class="carousel-inner">
							                                <?php
							                                $posts = get_posts( array(
								                                'numberposts'      => 0,
								                                'category'         => $kvartira,
								                                'orderby'          => 'id',
								                                'order'            => 'ASC',
								                                'post_type'        => 'post',
								                                'suppress_filters' => true,
							                                ) );
							                                $x     = 1;
							                                foreach ( $posts as $post ) {
								                                setup_postdata( $post ); ?>
                                                                <div class="carousel-item <?php if ( $x == 1 ) {
									                                echo 'active';
								                                } ?>">
									                                <?php if ( has_post_thumbnail() ) {
										                                ?>
                                                                        <a data-fancybox="galery<?php echo $block; ?>-<?php echo $kvartira; ?>" href="<?php echo get_the_post_thumbnail_url($post = get_the_ID(), $size = 'full'); ?>">
											                                <?php the_post_thumbnail( $size = 'full', $attr = array( 'class' => "d-block img-fluid" ) ); ?>
                                                                        </a>
										                                <?php
									                                }
									                                $img_data = get_field( 'kartinka-bloka' );
									                                ?>
                                                                    <span id="meta<?php echo $kvartira; ?>-<?php echo $x; ?>"
                                                                          data-id="<?php the_field( 'ploschad' ) ?>"
                                                                          data-img="<?php echo $img_data['url']; ?>"></span>
                                                                </div>
								                                <?php $x += 1;
							                                }
							                                wp_reset_postdata(); // сброс
							                                ?>
                                                        </div>
                                                        <a class="carousel-control-prev"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="prev">
                                                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next"
                                                           href="#block<?php echo $block; ?>kvar<?php echo $kvartira; ?>"
                                                           role="button" data-slide="next">
                                                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>
                                                        <span class="metr"
                                                              id="met<?php echo $kvartira; ?>">125.25 м</span> <span
                                                                class="metr2">- общая площадь	</span> <br>
                                                        <span class="metr3">4-комнатная квартира<br>Блок 2</span>
                                                    </p>
                                                    <div class="form">
                                                        <h5>ОСТАВИТЬ ЗАЯВКУ</h5>
                                                        <p>Понравилась квартира?<br>Оставьте заявку, мы обязательно
                                                            свяжемся с Вами!</p>
	                                                    <?php echo do_shortcode( '[contact-form-7 id="312" title="4-комнатная квартира Блок 3"]' ); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row foot">
                <div class="col-md">Мы предлагаем квартиры как в чистовой отделке «под ключ», так и в предчистовой
                    отделке.
                </div>
                <div class="col-md">Предложено разнообразие планировочных решений студийного типа, которые пользуются
                    особой популярностью среди молодежи, так и просторные двух- и трех- комнатные квартиры для семей с
                    детьми.
                </div>
                <div class="col-md">В квартирах пространство организовано максимально рационально. Оно строится вокруг
                    потребностей жителей, и каждый квадратный метр в них – функционален.
                </div>
            </div>
        </div>
		<?php get_sidebar( 'sozseti' ); ?>
    </section>
    </main>
    <style>
        img.fancybox-image {
            background: #fff;
        }
        a {
            outline: none;
        }
        .carousel-control-prev {
            left: -30px;
        }
        .carousel-control-next {
            right: -30px;
        }
    </style>
<?php
get_sidebar();
get_footer();