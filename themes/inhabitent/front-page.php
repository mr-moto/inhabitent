<?php
/**
 * The header template for displaying on all pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<section class="home-hero">
</section>
<section class="products-container">
    <h2 class="products-title">Shop Stuff</h2>
    <div class="product-categories">
        <?php    
        $terms = get_terms( array(
            'taxonomy' => 'product-type',
            'orderby' => 'name',
            'hide_empty' => false,
        )); 
        foreach ($terms as $term) :
            $url = get_term_link ($term->slug , 'product-type'); 
        ?>
        <div class="prod-category-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $term->slug ?>.svg" />
            <p> <?php echo $term->description ?> </p>                
            <a href='<?php echo $url?>' class='category-link'><?php echo $term->name; ?> stuff</a>
        </div>
        <?php
        endforeach;
        ?>
    </div>
</section>
<section class="journal-container">
    <h2 class="journal-title">Inhabitent Journal</h2>
    <div class="journal">
        <?php
        $posts = get_posts( array( 
            'post_type' => 'post', 
            'order' => 'DSC', 
            'posts_per_page' => 3 ));

        foreach ( $posts as $post ) :
        ?>

        <div class="journal-post">
            <div class="journal-img">
            <?php 
                the_post_thumbnail(); 
            ?>
            </div>
            <div class="journal-text-wrapper">
                <p class='journal-meta'><?php echo get_the_date(); ?> / <?php comments_number(); ?> </p>
                <a href=" <?php the_permalink(); ?> "> <h3> <?php the_title(); ?> </h3> </a>
                <a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> Read Entry </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<section class="adventures-container">
    <h2 class="adventure-title">Latest Adventures</h2>
    <div class="adventure clearfix">
        <?php
        $posts = get_posts( array( 
            'post_type' => 'adventures', 
            'order' => 'ASC', 
        ));
        foreach ( $posts as $post ) :
        ?>

        <div class="adventure-post">
            <div class="adventure-wrapper">
            <?php 
                the_post_thumbnail(); 
            ?>
            </div>
            <div class="adventure-text-wrapper">
                <a href=" <?php the_permalink(); ?> "> <h3> <?php the_title(); ?> </h3> </a>
                <a class="read-more" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>"> Read Entry </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <p class='more-adventures'>
            <a href="<?php echo get_post_type_archive_link( 'adventures' ); ?>">More Adventures</a>
        </p>
</section>

<?php get_footer(); ?>