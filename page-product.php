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

<?php get_template_part('template-parts/breadcrumbs/breadcrumbs_1'); ?>
<?php get_template_part('template-parts/single/single_1'); ?>

<?php
get_footer('one');
