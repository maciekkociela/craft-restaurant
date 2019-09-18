<div id="suppliers" class="scroll-to"></div>
<div class="two-columns">
	<div class="column-2">
		<div class="two-columns">
			<?php
			$i = 0;
			if (have_rows('suppiers')) :
				while (have_rows('suppiers')) : the_row(); $i++; ?>
					<div class="supplier-wrapper" style="background-image:url(<?php the_sub_field('photo'); ?>);">
						<div class="supplier-hover">
							<div class="supplier-name"><?php the_sub_field('supplier'); ?></div>
						</div>
					</div>
					<?php if($i%2 == 0) { ?>
						</div>
						<div class="two-columns">
					<?php } ?>
			<?php endwhile;
			endif;
			?>
		</div>
	</div>
	<div class="column-3">
		<div class="column-text-center">
			<h2 class="heading-jumbo center our-suppliers"><?php the_sub_field('title');?></h2>
		</div>
	</div>
</div>