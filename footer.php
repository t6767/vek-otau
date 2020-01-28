<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		        <form>
		        	<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/magnify.png" alt="">
		        	<input type="text" class="search" placeholder="Поиск">
		        	<button class="btn btn-default">Искать</button>
		        </form>

		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		        <div class="form">
							<h5>ОСТАВИТЬ ЗАЯВКУ</h5>
							<p>Понравилась квартира?<br>Оставьте заявку, мы обязательно свяжемся с Вами!</p>
							<?php echo do_shortcode( '[contact-form-7 id="313" title="Обратный звонок на главной странице"]' ); ?>
						</div>

		      </div>
		    </div>
		  </div>
		</div>
<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
		  <div class="modal-dialog" role="document" style="max-width:100%">
		    <div class="modal-content">
		      <div class="modal-body" style="padding-top:0">
				  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Add6a8ef2d45d802e7cffb222838c34b55fed37401948fc659a1458f4a8f7c1fc&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>

		      </div>
		    </div>
		  </div>
		</div>
		<div class="modal fade" id="actionModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-body">
		        <div id="hotcarusel" class="carousel slide carousel-fade" data-ride="carousel">
		          <div class="carousel-inner">
							<?php 
									// параметры по умолчанию
									$args = array(
										'numberposts' => 0,
										'category'    => 29,
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
										<?php else: ?>
											<div class="carousel-item">
										<?php endif; ?>
												<?php if ( has_post_thumbnail() ) { ?>
														<?php the_post_thumbnail($size = 'full', $attr = array('class' => "d-block w-100") ); } ?>
											</div>
									  <?php
									  $x += 1;
									}

									wp_reset_postdata(); // сброс
								?>
		          </div>
		          <a class="carousel-control-prev" href="#hotcarusel" role="button" data-slide="prev">
		            <span class="fa fa-chevron-left" aria-hidden="true"></span>
		            <span class="sr-only">Previous</span>
		          </a>
		          <a class="carousel-control-next" href="#hotcarusel" role="button" data-slide="next">
		            <span class="fa fa-chevron-right" aria-hidden="true"></span>
		            <span class="sr-only">Next</span>
		          </a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
		<?php wp_footer();?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
				<style>
					#hotcarusel img{
						height: auto;
					}
				</style>
			<div class="rightinmobile">
                <script type="text/javascript" src="https://one.callback.pw/widget/5723871a-cc9c-4359-8ef6-1b470afed9a2"></script>
            </div>
			
			<!--
			  <div class="b-page_newyear"><div class="b-page__content"> <i class="b-head-decor"> <i class="b-head-decor__inner b-head-decor__inner_n1"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> <i class="b-head-decor__inner b-head-decor__inner_n2"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> <i class="b-head-decor__inner b-head-decor__inner_n3"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> <i class="b-head-decor__inner b-head-decor__inner_n4"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> <i class="b-head-decor__inner b-head-decor__inner_n5"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> <i class="b-head-decor__inner b-head-decor__inner_n6"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div>
				  </div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> <i class="b-head-decor__inner b-head-decor__inner_n7"> <div class="b-ball b-ball_n1 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n2 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n3 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n4 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n5 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n6 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n7 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n8 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_n9 b-ball_bounce"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i1"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i2"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i3"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i4"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i5"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> <div class="b-ball b-ball_i6"><div class="b-ball__right"></div><div class="b-ball__i"></div></div> </i> </i> </div> </div>
-->
			
			
			
			
			
			
			<!--<div class="snowflakes"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div>-->
		
	</body>
</html>