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
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			
                <ul class="prod-list">
                    <?php    
                        $terms = get_terms( array(
                                            'taxonomy' => 'product-type',
                                            'orderby' => 'name',
											'hide_empty' => false,
                                        ));
                        foreach ($terms as $term) :
                            $url = get_term_link ($term->slug , 'product-type');              
                    	?>    
						<li class="shop-stuff-item">                   
                        <a href='<?php $url?>' class='button'><?php echo $term->name; ?></a>
						</li>
                    <?php
                        endforeach;
                    ?>

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
							<p><?php echo CFS()->get( 'product-price' ); ?></p>
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
