<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bprint
 */

get_header('bprint_1');
?>

<?php get_template_part('template-parts/hero/hero_2'); ?>
<?php get_template_part('template-parts/product-menu/product_menu_1'); ?>
<?php get_template_part('template-parts/top-hits/top_hits_1'); ?>
<?php get_template_part('template-parts/prefirance/prefirance_1'); ?>
<?php get_template_part('template-parts/top-hits/top_hits_2'); ?>
<?php get_template_part('template-parts/tills/tills_1'); ?>
<?php get_template_part('template-parts/blog/blog_1'); ?>
<?php get_template_part('template-parts/brands/brands_1'); ?>


<?php
get_footer('one');
