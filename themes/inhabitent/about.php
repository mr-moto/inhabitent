
<?php /* Template Name: About */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

		
	</div>

<div class='about-text'>
	<div class="ourstory">
	<h2 >Our Story</h2>
		<p>
			<?php echo CFS()->get( 'about_our_story' ); ?>
		</p>
	</div>
	<div class="ourteam">
	<h2> Our Team </h2>
		<p>
			<?php echo CFS()->get( 'about_our_team' ); ?>
		</p>
	</div>
</div>

<?php get_footer(); ?>