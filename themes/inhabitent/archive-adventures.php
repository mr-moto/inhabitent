<?php
/**
 * The template for displaying archive for adventure posts (adventure page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="adventure-container">
			<?php while ( have_posts() ) : the_post(); ?>
				
					<div class="post">
						<div class="adv-wrapper">
							<div class="img-wrapper"> 
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail(); ?>
						
                            <?php endif; ?>
                            <div class="adventure-text">
                                <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
								<a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> Read Entry </a>
                            </div>
							</div>
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
