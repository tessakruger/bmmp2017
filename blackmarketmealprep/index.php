<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 */
?> 

<?php get_header(); ?>

<?php
while (have_posts()) : the_post(); ?>

<h1><?php the_title();?></h1>
<?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>