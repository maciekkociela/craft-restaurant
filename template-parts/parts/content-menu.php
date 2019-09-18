<div class="menu">
  <div class="container center">
    <div data-duration-in="300" data-duration-out="100" class="tabs w-tabs">
      <div class="tabs-menu w-tab-menu">
        <?php $i = 0;
        if (have_rows('menu_card')) :
          while (have_rows('menu_card')) : the_row();
            $i++; ?>
            <a data-w-tab="Tab <?= $i; ?>" class="tab-link-tab _<?= $i; ?> w-inline-block w-tab-link <?php if ($i == 1) {
                                                                                                            echo ' w--current';
                                                                                                          } ?>">
              <div><?php the_sub_field('title'); ?></div>
            </a>
        <?php endwhile;
        endif;
        ?>
      </div>
      <div class="w-tab-content">
        <?php $i = 0;
        if (have_rows('menu_card')) :
          while (have_rows('menu_card')) : the_row();
            $i++; ?>
            <div data-w-tab="Tab <?= $i; ?>" class="w-tab-pane">
              <div class="w-row">
                <div class="pricing-column-left w-col w-col-6">
                  <div class="pricing-table">
                    <?php
                        if (have_rows('left')) :
                          while (have_rows('left')) : the_row(); ?>
                        <h2 class="heading-jumbo"><?php the_sub_field('title'); ?></h2>
                        <?php
                                if (have_rows('list')) :
                                  while (have_rows('list')) : the_row(); ?>
                            <div class="meal">
                              <h3 class="menu-meal-name"><?php the_sub_field('title'); ?> </h3>
                              <p class="paragraph meal-desc"><?php the_sub_field('desc'); ?></p>
                              <div class="meal-price"><?php the_sub_field('price'); ?></div>
                            </div>
                        <?php endwhile;
                                endif;
                                ?>
                    <?php endwhile;
                        endif;
                        ?>
                  </div>
                </div>
                <div class="column-4 w-col w-col-6">
                  <div class="pricing-table-right">
                    <?php
                        if (have_rows('right_copy')) :
                          while (have_rows('right_copy')) : the_row(); ?>
                        <h2 class="heading-jumbo"><?php the_sub_field('title'); ?></h2>
                        <?php
                                if (have_rows('list')) :
                                  while (have_rows('list')) : the_row(); ?>
                            <div class="meal">
                              <h3 class="menu-meal-name"><?php the_sub_field('title'); ?> </h3>
                              <div class="meal-price right"><?php the_sub_field('price'); ?></div>
                              <p class="paragraph meal-desc-right"><?php the_sub_field('desc'); ?></p>
                              <div class="meal-price only-responsive"><?php the_sub_field('price'); ?></div>
                            </div>
                        <?php endwhile;
                                endif;
                                ?>
                    <?php endwhile;
                        endif;
                        ?>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>