<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package scout
 */

get_header(); ?>
	<div id="wrapper">
		<div class="banner">
			<div class="bg-stretch">
				<?php 
					$queried_object = get_queried_object(); 
					$taxonomy = $queried_object->taxonomy;
					$term_id = $queried_object->term_id;  
				?>
				<img src="<?php the_post_thumbnail_url();?>"  class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
			</div>
			<div class="container">
				<div class="text-holder">
					<h1><?php echo get_the_title();?></h1>
					<?php echo the_excerpt();?>
				</div>
			</div>
		</div>
		<main id="main" class="site-main single-page" role="main">
			<div class="main-container">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

									// the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						// comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->

	</div>
<?php
get_template_part( 'template-parts/posts-footer' );
// get_sidebar();
get_footer();
