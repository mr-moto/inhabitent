<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php single_term_title(); ?></h1>

				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>



                </ul> <!-- shop stuff -->
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="product-container">
			<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="single-product">
						<div class="img-wrapper">
							<a href="<?php the_permalink(); ?>" rel="product"> 
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
							</a>
						</div>
						<?php endif; ?>
						<div class="product-text">
							<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
							<span><?php echo CFS()->get( 'product-price' ); ?></span>
						</div>
					</div>
				
			<?php endwhile; ?>
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
