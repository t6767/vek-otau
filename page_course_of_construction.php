<?php 
/*
Template Name: Ход строительства
*/
?>
<?php get_header() ?>
<section class="section text-black" id="hod-stroitelstva">
  <div class="wrapper">
    <div class="row">
      <div class="col-lg-12">
        <h1><?php the_title() ?></h1>
      </div>
    </div>
    <div class="row online">
      <div class="col-lg-5">
        <p style="display: none">Онлайн-трансляция</p>
        <div id="online" style="background: none;">
          <?php the_post() ?>
          <?php the_content() ?>
        </div>
      </div>
      <div class="col-lg-7 history">


        <div class="row" style="display: none">
          <div class="col-lg-3" style="padding-right: 0;">
            <p><img src="/wp-content/uploads/2018/05/icon-circle-old.png" alt=""/></p>

            <span class="zzz"></span>
          </div>





          <div class="col-lg-9">
            <h4 class="old">Укладка стен первого этажа Блока 3</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 24,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
        <div class="row" style="display: none">
          <div class="col-3" style="padding-right: 0;">
            <p><img src="/wp-content/uploads/2018/05/icon-circle-old.png" alt=""/></p>
            <span class="zzz"></span>
          </div>
          <div class="col-9">
            <h4 class="old">Укладка стен первого этажа Блока 2</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 25,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery1" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
        <div class="row" style="display: none">
          <div class="col-3" style="padding-right: 0;">
            <p>24 мая 2018 <img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Укладка стен первого этажа Блока 1</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 26,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery2" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>

		<div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>08.11.2019&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Ноябрь 2019 года</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 40,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>

		
		
		<div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>16.09.2019&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Сентябрь 2019 года</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 39,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
		
		  
		  
		          <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>15.08.2019&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Август 2019 года</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 38,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
		  
        
        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>06.2019&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Июнь 2019 года</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 37,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
        
        

        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>04.2019&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Апрель 2019 года</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 36,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>



        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>25.02.2019&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Возведение каркаса</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 35,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>


        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>29.11.2018&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Возведение каркаса</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 34,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>


        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>25.09.2018&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Возведение каркаса</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 32,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>


        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>28.06.2018&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>28.06.2018</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 33,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>


        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>30.05.2018&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>30.05.2018</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 30,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
        <div class="row">
          <div class="col-3" style="padding-right: 0;">
            <p>09.04.2018&nbsp;<img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Заливка фундамента Блока 1</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 27,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?><a data-fancybox="gallery3" href="<?php the_post_thumbnail_url(); ?>"><?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>
        <div class="row" style="display: none">
          <div class="col-3" style="padding-right: 0;">
            <p>19 янв 2018  <img src="/wp-content/uploads/2018/05/icon-circle.png" alt="" /></p>
            <span class="zzz zzz1"></span>
          </div>
          <div class="col-9">
            <h4>Получение документов на строительство</h4>
            <?php
$posts = get_posts( array(
'numberposts' => 0,
'category'    => 28,
'orderby'     => 'date',
'order'       => 'DESC',
'post_type'   => 'post',
'suppress_filters' => true,
));
$x = 1;
foreach($posts as $post){ setup_postdata($post);
if ( has_post_thumbnail() ) {
?>
            <a data-fancybox="gallery4" href="<?php the_post_thumbnail_url(); ?>">
              <?php
the_post_thumbnail($size = 'full', $attr = array('class' => "imgmr1px") );
?></a><?php
}
$x += 1;
}
wp_reset_postdata(); // сброс
?>
          </div>
        </div>			

      </div>

      <a class="container-arrow scroll-to" href="#">
        <span><i class="fa fa-angle-down" aria-hidden="true"></i>  </span>
      </a>
    </div>


  </div>



  <?php get_sidebar('sozseti'); ?>
</section>
</main>
<style>
  .imgmr1px{
    margin-right: 1px;
    max-width: 98px;
    height: auto;
    max-height: 50px;
    border-radius: 5px;
  }
</style>
<?php get_sidebar(); ?>
<?php get_footer(); ?>