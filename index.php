<?php
/**
 * The main template file
 */
get_header();
while (the_flexible_field("sections")) {
    get_template_part('template-parts/parts/content', get_row_layout());
}
get_footer();
