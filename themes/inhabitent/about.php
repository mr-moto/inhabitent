
<?php /* Template Name: About */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div class="about_hero_banner">
    <!--<img class='about-banner' src='<?php echo CFS()->get( 'about_banner_img' ); ?>'/>-->
	<h1 class="about-hero-text"> About </h1>
		
	</div>

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

<?php get_footer(); ?>