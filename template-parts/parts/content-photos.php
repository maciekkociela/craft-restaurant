<div class="four-columns">
	<div class="w-row">
		<?php
		if (have_rows('photos')) :
			while (have_rows('photos')) : the_row(); ?>
				<div class="flex-column w-col w-col-3 w-col-small-6 w-col-tiny-6">
					<div class="flex-photo" style="background-image:url(<?php the_sub_field('photo'); ?>);"></div>
				</div>
		<?php endwhile;
		endif;
		?>
	</div>
</div>