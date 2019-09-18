<div class="menu-photos">
  <div class="w-row">
    <?php
    $i = 0;
    if (have_rows('team')) :
      while (have_rows('team')) : the_row();
        $i++; ?>
        <?php if ($i % 4 == 1) { ?>
          <div class="flex-column w-col w-col-6">
            <div class="flex-column-inside">
              <div class="menu-flex">
                <p class="paragraph align-right"><?php the_sub_field('text'); ?></p>
              </div>
              <div class="menu-flex background-flex team-1"></div>
            </div>
          </div>
        <?php } ?>
        <?php if ($i % 4 == 2) { ?>
          <div class="flex-column w-col w-col-6">
            <div class="flex-column-inside">
              <div class="menu-flex">
                <p class="paragraph align-right"><?php the_sub_field('text'); ?></p>
              </div>
              <div class="menu-flex background-flex team-2"></div>
            </div>
          </div>
        <?php } ?>
        <?php if ($i % 4 == 3) { ?>
  </div>
  <div class="w-row">
    <div class="flex-column w-col w-col-6">
      <div class="flex-column-inside">
        <div class="menu-flex background-flex team-1"></div>
        <div class="menu-flex-left">
          <p class="paragraph align-left"><?php the_sub_field('text'); ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
  <?php if ($i % 4 == 0) { ?>
    <div class="flex-column-inside w-col w-col-6">
      <div class="menu-flex background-flex team-2"></div>
      <div class="menu-flex-left">
        <p class="paragraph align-left"><?php the_sub_field('text'); ?></p>
      </div>
    </div>
  <?php }  ?>
<?php endwhile;
endif;
?>

  </div>
</div>