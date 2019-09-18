<div data-collapse="all" data-animation="over-left" data-duration="150" data-easing="ease-in-out" data-easing2="ease-in-out" class="navigation-home w-nav">
	<nav role="navigation" class="navigation-items w-nav-menu">
		<div class="menu-container">
			<div id="menu-button" class="cross-button w-nav-button"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/close_button.svg" height="18" alt="" class="menu-icon cross"></div>
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
	<?php $args = array('post_type' => 'footer',); ?>
	<?php $query = new WP_Query($args); ?>
	<?php if ($query->have_posts()) : ?>
		<?php /* Start the Loop */
			while ($query->have_posts()) : $query->the_post(); ?>
			<?php if ($i == 0) { ?>
				<?php $i = 1; ?>
				<div class="navigation"><a href="<?php if (is_front_page()) {
																	echo '#top';
																} else {
																	echo get_home_url();
																} ?>" class="logo-link w-nav-brand w--current"><img src="<?php the_field('nav_logo'); ?>" width="104" alt="" class="logo-image"></a>
					<div class="navigation-button">
						<a href="<?php the_field('nav_button_link'); ?>" class="button cc-jumbo-button nav-button w-inline-block">
							<div><?php the_field('nav_button'); ?></div>
						</a>
					</div>
					<div class="menu-button w-nav-button"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/hamburger-white.svg" height="18" alt="" class="menu-icon"></div>
				</div>
			<?php } ?>
		<?php endwhile; ?>
	<?php endif;
	wp_reset_query(); ?>
</div>