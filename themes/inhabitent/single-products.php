<?php
/**
 * The template for displaying adventure single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="img-wrapper">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>



                  <?php if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                      <p>By <?php the_author(); ?></p>
                    </div>
                    <!-- .entry-metaaaaa -->
                    <?php endif; ?>
          </div>
          <!-- .entry-headerrrrr -->

          <div class="entry-content">
            <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
			<p class='single-price'><?php echo CFS()->get( 'product-price' ); ?></p>
              <?php the_content(); ?>
                <div class='social'>
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
                  <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                  <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
                </div>

          </div>
          <!-- .entry-content -->
        </article>
        <!-- #post-## -->

			
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
