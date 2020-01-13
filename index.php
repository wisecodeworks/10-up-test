<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bootscores
 */

get_header(); ?>




<!-- Begin index.php -->
<div id="primary" class="content-area">
	<main id="main" class="site-main row" role="main">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-8 post-box">
<?php if(has_post_thumbnail()) { ?>
<a class="card-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
<?php } ?>
</div>
<div class="col-md-4 post-box">
<?php the_time( 'F jS, Y' ); ?>.
<a href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="card-title">', '</h3>'); ?></a>

<p class="card-content"><?php the_excerpt(); ?></p>
<a class="card-footer" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read More <img src="<?php echo get_bloginfo('template_url') ?>/icons/cheveron-right.svg"/></a>
</div>
		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
