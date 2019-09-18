<div id="about" class="scroll-to"></div>
<div>
	<div class="two-columns about-section">
		<div class="column-1">
			<div class="column-text-center">
				<h2 class="heading-jumbo"><?php the_sub_field('title');?></h2>
				<?php the_sub_field('text');?>
			</div>
		</div>
		<div class="column-2">
			<div style="background-image:url('<?php the_sub_field('photo');?>');" class="photo-background"></div>
		</div>
	</div>
</div>