<div class="menu-photos">
	<div class="w-row">
		<div class="flex-column w-col w-col-6">
			<div class="flex-column-inside">
				<div class="menu-flex background-flex drink-3" style="background-image:url(<?php the_sub_field('photo_1'); ?>);"></div>
				<div class="menu-flex-left black">
					<div>
						<?php the_sub_field('text_1'); ?>
						<!-- <p class="paragraph align-left white">Babushka</p>
						<p class="paragraph align-right grey left">Vodka</p> -->
					</div>
				</div>
			</div>
		</div>
		<div class="flex-column-inside w-col w-col-6">
			<div class="menu-flex background-flex drink-4" style="background-image:url(<?php the_sub_field('photo_2'); ?>);">
				<div class="drink-buttons">
					<?php
					if (have_rows('buttons')) :
						while (have_rows('buttons')) : the_row(); ?>
							<a href="<?php the_sub_field('link'); ?>" class="button cc-jumbo-button drink-button w-inline-block">
								<div class="text-block"><?php the_sub_field('button'); ?></div>
							</a>
					<?php endwhile;
					endif;
					?>
				</div>
			</div>
			<div class="menu-flex-left black">
				<div>
					<?php the_sub_field('text_2'); ?>
					<!-- <p class="paragraph align-left white">Rose is a dame</p>
					<p class="paragraph align-right grey left">Gin</p> -->
				</div>
			</div>
		</div>
	</div>
</div>