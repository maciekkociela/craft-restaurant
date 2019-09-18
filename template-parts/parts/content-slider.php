<div data-collapse="all" data-animation="over-left" data-duration="150" class="navbar w-nav">
	<div class="home-menu w-nav-button"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/hamburger-white-2.svg" height="18" alt="" class="menu-icon top-icon"></div>
	<nav role="navigation" class="navigation-items w-nav-menu">
		<div class="menu-container">
			<div class="cross-button lower w-nav-button"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/close_button.svg" height="18" alt="" class="menu-icon cross"></div>
			<div class="translation">
				<?php
				$divider = '<span class="nav-divider"> / </span>';
				wp_nav_menu(array(
					'menu'   => 'Languages',
					'menu_id'        => '',
					'menu_class'     => 'lang-menu',
					'container' => '',
					'link_after' => $divider,
				)); ?>
			</div>
			<div class="nav-container">
				<?php wp_nav_menu(array(
					'menu'   => 'Menu Primary',
					'menu_id'        => 'menu',
					'menu_class'     => '',
					'container' => '',
				)); ?>
			</div>
		</div>
	</nav>
</div>

<div class="home-section" id="top">
	<div class="slide-buttons">
		<?php
		if (have_rows('button')) :
			while (have_rows('button')) : the_row(); ?>
				<a href="<?php the_sub_field('link'); ?>" class="button cc-jumbo-button cc-slide-button w-inline-block">
					<div><?php the_sub_field('button'); ?></div>
				</a>
		<?php endwhile;
		endif;
		?>
		<a href="<?php the_sub_field('scroll_to_link'); ?>" class="link"><?php the_sub_field('scroll_to'); ?></a>
	</div>
	<div data-delay="4000" data-animation="fade" data-autoplay="1" data-easing="ease-in-out" data-nav-spacing="7" data-duration="500" data-infinite="1" class="slider w-slider">
		<div class="w-slider-mask">
			<?php
			if (have_rows('slides')) :
				while (have_rows('slides')) : the_row(); ?>
					<div class="slide w-slide" style="background-image:url(<?php the_sub_field('photo'); ?>);">
						<div class="slide-wrapper">
							<div class="slide-vertical"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/logo.svg" alt="" class="home-logo"></div>
						</div>
					</div>
			<?php endwhile;
			endif;
			?>
		</div>

		<div class="left-arrow w-slider-arrow-left">
			<div class="w-icon-slider-left"></div>
		</div>
		<div class="right-arrow w-slider-arrow-right">
			<div class="w-icon-slider-right"></div>
		</div>
		<div class="slide-nav w-slider-nav w-round"></div>
	</div>
</div>