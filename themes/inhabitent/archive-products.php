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
			
                <ul class="shop-stuff">
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
                        <a href='<?php echo $url?>' class='button'><h2><?php echo $term->name; ?></h2></a>
						</li>
                    <?php
                        endforeach;
                    ?>

                </ul> <!-- shop stuff -->
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content' );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
