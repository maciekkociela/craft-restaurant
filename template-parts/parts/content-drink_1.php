<div class="menu-photos">
	<div class="w-row">
		<div class="flex-column w-col w-col-6">
			<div class="flex-column-inside">
				<div id="drinks" class="scroll-to"></div>
				<div class="menu-flex black">
					<div>
						<?php the_sub_field('text_1');?>
					</div>
				</div>
				<div class="menu-flex background-flex drink-1"  style="background-image:url(<?php the_sub_field('photo_1'); ?>);"></div>
			</div>
		</div>
		<div class="flex-column w-col w-col-6">
			<div class="flex-column-inside">
				<div class="menu-flex black">
					<div>
						<?php the_sub_field('text_2');?>
					</div>
				</div>
				<div class="menu-flex background-flex drink-2"  style="background-image:url(<?php the_sub_field('photo_2'); ?>);"></div>
			</div>
		</div>
	</div>
</div>