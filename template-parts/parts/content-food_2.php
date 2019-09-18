<div class="menu-photos">
	<div class="w-row">
		<div class="flex-column w-col w-col-6">
			<div class="flex-column-inside">
				<div class="menu-flex background-flex background-3"  style="background-image:url(<?php the_sub_field('photo_1'); ?>);">
					<a href="<?php the_sub_field('link');?>" class="button cc-jumbo-button menu-in-button w-inline-block">
						<div class="text-block-2"><?php the_sub_field('button');?></div>
					</a>
				</div>
				<div class="menu-flex-left">
					<p class="paragraph align-left"><?php the_sub_field('text_1');?></p>
				</div>
			</div>
		</div>
		<div class="flex-column-inside w-col w-col-6">
			<div class="menu-flex background-4 background-flex" style="background-image:url(<?php the_sub_field('photo_2'); ?>);"></div>
			<div class="menu-flex-left">
				<p class="paragraph align-left"><?php the_sub_field('text_2');?></p>
			</div>
		</div>
	</div>
</div>