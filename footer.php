<?php
/**
 * The template for displaying the footer
 */
?>
<div id="contact" class="scroll-to"></div>
<?php $args = array('post_type' => 'footer', 'posts_per_page' => 1); ?>
<?php $query = new WP_Query($args); ?>
<?php if ($query->have_posts()) : ?>
	<?php /* Start the Loop */
		while ($query->have_posts()) : $query->the_post(); ?>
			<div  class="footer-wrap">
				<div class="footer-columns">
					<div class="footer-left">
						<a href="<?php if(is_front_page()) { echo '#top'; } else { echo get_home_url(); }?>">
							<img src="<?php the_field('footer_logo');?>" alt="" class="image">
						</a>
						<div class="footer-column">
							<h4 class="footer-heading"><?php the_field('kolumna_lewa');?></h4>
							<p class="footer-paragraph"><?php the_field('newsletter_text');?></p>
							<?php echo do_shortcode( get_field('newsletter') ); ?>
						</div>
					</div>
					<div class="footer-center">
						<div class="footer-column">
							<h4 class="footer-heading"><?php the_field('kolumna_center');?></h4>
							<?php
							if (have_rows('godziny_otwarcia')) : $i = 1;
								while (have_rows('godziny_otwarcia')) : the_row(); $i++; ?>
									<p class="meal-name"><?php the_sub_field('title');?></p>
									<div class="w-layout-grid grid-<?=$i;?>">
									<?php
									if (have_rows('days')) :
										while (have_rows('days')) : the_row(); ?>
											<p class="footer-paragraph"><?php the_sub_field('day');?></p>
											<p class="footer-paragraph"><?php the_sub_field('hour');?></p>
									<?php endwhile;
									endif;
									?>
									</div>
							<?php endwhile;
							endif;
							?>
						</div>
					</div>
					<div class="footer-right">
						<div class="footer-column">
							<h4 class="footer-heading"><?php the_field('kolumna_right');?></h4>
							<p class="footer-paragraph"><?php the_field('contact_text');?> </p>
						</div><a href="tel:<?php the_field('phone');?>" class="tel-link"><?php the_field('phone');?></a>
						<a href="mailto:<?php the_field('phone');?>" class="mail-link"><?php the_field('mail');?></a>
						<div class="social-icons">
							<a target="_blank" href="<?php the_field('facebook');?>" class="social-icon w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/5d7288b016c4c0f1cfbf4177_Facebook.svg" alt="" class="social-icon-image"></a>
							<a target="_blank" href="<?php the_field('instagram');?>" class="social-icon w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/5d7288b016c4c02a10bf4178_Instagram.svg" alt="" class="social-icon-image"></a>
							<a href="mailto:<?php the_field('mail');?>" class="social-icon w-inline-block"><img src="<?php echo get_template_directory_uri(); ?>/webflow/images/5d7288b0ed484e168c259338_email.svg" alt="" class="social-icon-image"></a></div>
					</div>
				</div>
			</div>
	<?php endwhile; ?>
<?php endif; 
wp_reset_query(); ?>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/webflow/js/insta-feed.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/webflow/js/tabs.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/webflow/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<?php the_field('body_code','option'); ?>
</body>
</html>