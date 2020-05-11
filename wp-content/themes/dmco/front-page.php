<?php
/**
 * The template for site static home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dmco
 */

get_header();

while (have_posts()) : the_post(); ?>

    <section>
        <?php get_template_part('template-parts/hero-block'); ?>
        hjhgjh
    </section>
<?php endwhile;

get_footer();
