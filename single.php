<?php
/**
 * The template for displaying all single posts
 */
get_header();
get_template_part('template-parts/parts/content', 'navigation');
?>
<div class="page-section">
	<div class="section">
		<div class="container">
			<div class="page-content">
				<h1 class="heading-jumbo page-title"><?php the_title(); ?></h1>
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						the_content();
					}
				}
				?>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();