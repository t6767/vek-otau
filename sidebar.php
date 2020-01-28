<div id="sidebar">
	<header class="header" role="banner">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
		<a href="/"><?php the_custom_logo(); ?></a>
		<p>Надежность. Безопасность. Уют</p>
	</header>
	<div class="search">
		<form action="#">
			<input type="text" class="input_search" placeholder="Поиск" data-toggle="modal" data-target="#searchModal">
			<a href="#" class="input_search_submit" data-toggle="modal" data-target="#searchModal"><i class="fas fa-search"></i></a>
		</form>
	</div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <nav role="navigation">
            <?php wp_nav_menu( array(
                'container'       => 'ul',
                'container_class' => 'menu-{menu-slug}-container',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ) ); ?>
            <?php wp_reset_postdata(); ?>
        </nav>
        <div class="hot-action">
            <a href="#" data-toggle="modal" data-target="#actionModal">Горячие предложения!</a><!--data-toggle="modal" data-target="#actionModal"-->
        </div>
        <div class="phone">
            <div class="row">
                <div class="col-3 text-right">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/vector.png" alt="">
                </div>
                <div class="col-9" style="padding-left: 0;">
                    <a href="tel:<?php the_field('phone_3', 19) ?>"><?php the_field('phone_3', 19) ?></a><br>
					<a href="tel:<?php the_field('phone_1', 19) ?>"><?php the_field('phone_1', 19) ?></a><br>
                    <a href="tel:<?php the_field('phone_2', 19) ?>"><?php the_field('phone_2', 19) ?></a>
                </div>
            </div>
            <div class="row">
                <div class="col-3 text-right">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/email.png" alt="">
                </div>
                <div class="col-9" style="padding-left: 0;">
                    <a href="mailto:<?php the_field('email', 19) ?>" style="font-size: 16px;"><?php the_field('email', 19) ?></a>


                </div>
            </div>
        </div>
        <div class="sidebar-btn">
            <a class="btn btn-default" href="#"  data-toggle="modal" data-target="#formModal">Заказать звонок</a>
        </div>
    </div>
</div>